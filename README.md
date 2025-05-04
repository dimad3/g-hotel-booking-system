# Hotel Management System

A comprehensive Laravel-based Hotel Booking System with user and admin roles, booking functionality, room management, and more.

## Table of Contents

- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [Authentication](#authentication)
- [Modules](#modules)
  - [User Module](#user-module)
  - [Admin Module](#admin-module)
  - [Room Management](#room-management)
  - [Booking System](#booking-system)
  - [Blog System](#blog-system)
  - [Gallery Management](#gallery-management)
  - [Testimonials](#testimonials)
  - [Reporting](#reporting)
  - [Roles and Permissions](#roles-and-permissions)
- [License](#license)

## Features

- Multi-auth system (User and Admin)
- Role-based access control with permissions
- Room management with room types
- Booking system with availability check
- Payment integration (Stripe)
- Blog system with categories
- Gallery management
- User profile management
- Admin dashboard with statistics
- Booking reports
- Email configuration
- Contact system
- Testimonial management
- Invoice generation
- Notification system

## Requirements

- PHP >= 8.0
- Laravel >= 9.0
- MySQL/PostgreSQL
- Composer
- Node.js & NPM

## Installation

1. Clone the repository
```bash
git clone https://github.com/yourusername/hotel-booking-system.git
```

2. Navigate to the project directory
```bash
cd hotel-booking-system
```

3. Install PHP dependencies
```bash
composer install
```

4. Install JavaScript dependencies
```bash
npm install
```

5. Copy the example env file and make the required configuration changes
```bash
cp .env.example .env
```

6. Generate an app encryption key
```bash
php artisan key:generate
```

7. Run the database migrations
```bash
php artisan migrate
```


## Usage

The application can be accessed at `http://localhost:8000` after running the development server.

## Authentication

The system uses Laravel's built-in authentication system with extended functionality for role-based access:

- **Users**: Standard hotel guests who can book rooms and manage their profiles
- **Admins**: Hotel staff who can manage rooms, bookings, and other system aspects

## Modules

### User Module

- User registration and login
- Profile management
- Password change
- Booking history
- Invoice download

### Admin Module

- Secure admin login
- Dashboard with system overview
- Profile management
- User management
- System settings

### Room Management

- Room types configuration
- Room listing with details
- Room availability management
- Multi-image support for rooms

### Booking System

- Room availability check
- Booking process
- Payment processing via Stripe
- Room assignment
- Booking status management
- Invoice generation

### Blog System

- Blog categories
- Blog posts with rich content
- Comments management
- Category-wise blog listing

### Gallery Management

- Image upload and management
- Multiple image selection and deletion
- Gallery display for website visitors

### Testimonials

- Customer testimonial management
- Display on the frontend

### Reporting

- Booking reports
- Date-based filtering
- Financial insights

### Roles and Permissions

- Role management
- Permission assignment
- Import/export permissions
- Role-permission mapping


## License

This project is licensed under the MIT License.