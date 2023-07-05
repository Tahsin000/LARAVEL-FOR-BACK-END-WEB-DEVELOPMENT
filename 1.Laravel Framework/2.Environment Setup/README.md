## Install PHP:

- Download and install the latest version of PHP from the official PHP website (https://www.php.net/downloads.php).
  Follow the installation instructions specific to your operating system.

## Install Composer:

- Composer is a dependency management tool for PHP that Laravel utilizes. Download and install Composer from the official Composer website (https://getcomposer.org/download/).
  Follow the installation instructions for your operating system.

## Install Laravel:

- Once Composer is installed, open your terminal or command prompt and run the following command to install Laravel globally:
- Make new project to type this command

```javascript
composer create-project laravel/laravel myProject 7.x --prefer-dist
```

```javascript
composer global require laravel/installer
```

## Set Up a Development Server:

- Laravel includes a built-in development server, which you can use to test your applications locally. Open your terminal or command prompt and navigate to your desired project directory.

```javascript
php artisan serve
```

## Text Editor or Integrated Development Environment (IDE):

- Choose a text editor or IDE that you are comfortable with for writing your Laravel code. Some popular options include Visual Studio Code, Sublime Text, PhpStorm, and Atom.

## Optional: Database Setup:

- If your Laravel project requires a database, you can set up and configure a database server such as MySQL, PostgreSQL, or SQLite.
- Update the database configuration in the .env file of your Laravel project to connect to your database server.
