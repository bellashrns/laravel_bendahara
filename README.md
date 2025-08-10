# Financial Management System

This project is a web application built with **Laravel** for managing finances and internal communications within a team or organization.  
It allows members to submit monthly cash contributions along with proof of payment, send anonymous evaluation messages, and enables authorized users to monitor and approve transactions and manage user accounts.  
The application uses Blade templates with Tailwind CSS for a clean, responsive UI.

## Features

- **User Authentication** – Secure login and role-based access control.
- **Dashboard** – Overview of key metrics, recent transactions, and announcements.
- **Cash Contribution Management** – Submit, view, and approve payments with proof of transfer uploads.
- **Evaluation Messages** – Anonymous feedback submissions and viewing for authorized roles.
- **User Management** – Admin-level control to add, update, and delete members.
- **Transaction History** – Track past payments and their approval status.

## Tech Stack

- **Backend**: Laravel (PHP Framework)
- **Frontend**: Blade Templates, Tailwind CSS
- **Database**: MySQL
- **Authentication**: Laravel Breeze / Sanctum (if applicable)
- **Other**: Eloquent ORM, Laravel Validation

## Project Structure

```
app/
 ├── Http/Controllers   # Application controllers
 ├── Models             # Eloquent models
resources/views         # Blade templates
routes/web.php          # Route definitions
```

## Getting Started

### Prerequisites
- PHP >= 8.1
- Composer
- MySQL or compatible database
- Node.js & npm (for asset compilation)

### Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/laravel_finance.git
   ```
2. Navigate to the project folder:
   ```bash
   cd laravel_finance
   ```
3. Install PHP dependencies:
   ```bash
   composer install
   ```
4. Install JavaScript dependencies:
   ```bash
   npm install && npm run dev
   ```
5. Configure the `.env` file:
   ```
   cp .env.example .env
   php artisan key:generate
   ```
6. Set your database credentials in `.env` and run migrations:
   ```bash
   php artisan migrate
   ```

### Running the App
Start the local development server:
```bash
php artisan serve
```
The application will be accessible at `http://localhost:8000`.
