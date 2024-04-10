# URL Shortener Project

This project is a URL shortener created by Avishek Prasad using Laravel. It allows users to shorten long URLs into more manageable, shorter links.

## Installation Instructions

1. Clone the repository to your local machine:
   ```bash
   git clone https://github.com/avishek999/url-shortener.git
   ```

2. Navigate to the project directory:
   ```bash
   cd url-shortener
   ```

3. Install PHP dependencies using Composer:
   ```bash
   composer install
   ```

4. Copy the `.env.example` file to `.env` and update the database information:
   ```bash
   cp .env.example .env
   ```

5. Generate a new application key:
   ```bash
   php artisan key:generate
   ```

6. Set up the MySQL database using phpMyAdmin or a similar tool, and update the `.env` file with your database information.

7. Run database migrations to set up the database:
   ```bash
   php artisan migrate
   ```

8. Install JavaScript dependencies using npm:
   ```bash
   npm install
   ```

9. Build the frontend assets with Vite:
   ```bash
   npm run dev
   ```

10. Start the Laravel development server:
    ```bash
    php artisan serve
    ```

11. Access the application in your browser at `http://localhost:8000`.

## Usage

- To use the URL shortener, first, create a user account on the application.
- After logging in, enter the long URL in the input field on the homepage and click the "Shorten" button.
- The shortened URL will be displayed, which you can copy and share.
- Each time the shortened URL is clicked, the click count will be updated. You may need to refresh the page to see the updated click count.

## Contributing

If you'd like to contribute to this project, feel free to fork the repository and submit a pull request with your changes.

## License

This project is open-source and available under the [MIT License](https://opensource.org/licenses/MIT).
