<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SmtpSetting;
use App\Models\SiteSetting;
use Intervention\Image\Facades\Image;

class SettingController extends Controller
{
    public function SmtpSetting()
    {

        $smtp = SmtpSetting::find(1);
        return view('backend.setting.smpt_update', compact('smtp'));
    }


    public function SmtpUpdate(Request $request)
    {

        $smtp_id = $request->id;

        SmtpSetting::find($smtp_id)->update([
            'mailer' => $request->mailer,
            'host' => $request->host,
            'port' => $request->port,
            'username' => $request->username,
            'password' => $request->password,
            'encryption' => $request->encryption,
            'from_address' => $request->from_address,
        ]);

        $notification = array(
            'message' => 'Smtp Setting Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }


    public function edit()
    {
        ($site = SiteSetting::find(1));

        return view('backend.site.site_update', compact('site'));
    }


    // /** Store a newly created resource in storage. */
    // public function store(Request $request)
    // {
    //     try {
    //         ($data = $request->validated());
    //         ($data['user_id'] = Auth::id());

    //         DocumentSetting::create($data);

    //         return redirect()->route('cabinet.settings')
    //             ->with('success', __('Settings data saved successfully.'));
    //     } catch (\Exception $e) {
    //         report($e); // Log the exception
    //         return redirect()->back()
    //             ->withInput()
    //             ->with('error', __('Failed to save settings data. An unexpected error occurred. Please try again later.'));
    //     }
    // }

    public function storeOrUpdate(Request $request)
    {
        // dd($request->all());
        // $site_id = $request->id;

        // ($image = $request->file('logo'));
        // dump($name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension());
        // dd(Image::make($image)->resize(110, 44)->save('upload/site/' . $name_gen));
        // $save_url = 'upload/site/' . $name_gen;

        $data = [
            'phone' => $request->phone,
            'address' => $request->address,
            'email' => $request->email,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'copyright' => $request->copyright,
        ];

        if ($request->file('logo')) {
            $file = $request->file('logo');
            @unlink(public_path('upload/site/' . $data['logo']));
            $filename = hexdec(uniqid()) . $file->getClientOriginalName();
            $file->move(public_path('upload/site'), $filename);
            $data['logo'] = $filename;
        }

        $siteSetting = SiteSetting::updateOrCreate($data);

        $notification = array(
            'message' => 'Site Settings Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
