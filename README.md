# Landona Conveyancing

## Table of Contents

- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Using Laravel Sail](#using-laravel-sail)
- [Testing](#testing)
- [Contributing](#contributing)
- [License](#license)

## Requirements
- PHP 8.3
- Composer
- Docker

## Installation

1. Clone the repository

   ```sh
   git clone https://github.com/taylorivanoff/landona.com.au.git
   cd landona.com.au
   ```

2. Install dependencies:

Make sure you have Composer installed on your system, then run:

```sh
composer install
```

3. Set up environment variables:

Copy the example environment file and modify the configuration according to your needs:

```sh
cp .env.example .env
```

4. Generate an application key:

```sh
php artisan key:generate
```

5. Run database migrations:

   ```sh
   php artisan migrate
   ```

6. Seed the database (optional):

   If you have seeders set up, you can seed your database with initial data:

   ```sh
   php artisan db:seed
   ```

## Configuration

1. **Caching Configuration:**

   ```sh
   php artisan config:cache
   ```

2. **Route Caching (for production):**

   ```sh
   php artisan route:cache
   ```

3. **View Caching (for production):**

   ```sh
   php artisan view:cache
   ```

## Usage

### Running the Development Server

To start the development server, run:

```sh
php artisan serve
```

Open your browser and navigate to [http://localhost:8000](http://localhost:8000).

### Compiling Assets

If you are using Laravel Mix to compile your assets, you can run:

```sh
npm install
npm run dev
```

For production:

```sh
npm run production
```

## Using Laravel Sail

Laravel Sail is a lightweight command-line interface for interacting with Laravel's default Docker development environment.

### Installation

Ensure Docker is installed and running on your system.

Install Laravel Sail:

If you haven't already installed Laravel Sail, you can add it as a development dependency:

```sh
composer require laravel/sail --dev
```

Start Laravel Sail:

Use the Sail up command to start your Docker containers:

```sh
./vendor/bin/sail up
```

This will start your application on [http://localhost](http://localhost).

### Common Sail Commands

Start the development environment:

```sh
./vendor/bin/sail up
```

Stop the development environment:

```sh
./vendor/bin/sail down
```

Run Artisan commands:

```sh
./vendor/bin/sail artisan migrate
```

Run Composer commands:

```sh
./vendor/bin/sail composer install
```

Run NPM commands:

```sh
./vendor/bin/sail npm run dev
```

### Running the Database Migrations

To run the database migrations using Sail, use the following command:

```sh
./vendor/bin/sail artisan migrate
```

## Testing

To run the test suite, execute:

```sh
php artisan test
```

If you are using Sail, run:

```sh
./vendor/bin/sail artisan test
```
