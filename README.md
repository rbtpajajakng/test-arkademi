Link to Google Docs: <https://docs.google.com/document/d/1D_Y2DOYrwiRtGOf2mTkjDHezaNfaG1157ESlWK1sGEI/edit?usp=sharing>

To run:
1. Clone this repository
2. Download depedencies
3. Rename .env.example to .env
4. Inside .env file, fill APP_KEY with 32 random strings
5. Inside .env file, change configuration starting with DB_ to your database settings
6. Run the database migration script with `php artisan migrate`
7. Run `php artisan db:seed` to seed database with dummy data
8. Run `php -S localhost:8000 -t public` to access it from localhost:8000/testapi/api