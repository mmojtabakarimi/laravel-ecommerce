This is Ecommerce shop  develope  based  on Laravel  framework  

Installatin: 
1. Clone the repo and `cd` into it
2. `composer install`
3. Rename or copy `.env.example` file to `.env`
4. `php artisan key:generate`
5. Set your database credentials in your `.env` file
6. Set your Stripe credentials in your `.env` file. Specifically `STRIPE_KEY` and `STRIPE_SECRET`
7. Set your Algolia credentials in your `.env` file. Specifically `ALGOLIA_APP_ID` and `ALGOLIA_SECRET`. 
8. Set your `APP_URL` in your `.env` file.
9. Set `ADMIN_PASSWORD` in your `.env` file if you want to specify an admin password. If not, the default
   password is 'password'
10. `php artisan ecommerce:install`. This will migrate the database and run any seeders necessary
11. `npm install`
12. `npm run dev`
13. `php artisan serve` or use Laravel Valet or Laravel Homestead
14. Visit `localhost:8000` in your browser
