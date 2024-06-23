Prerequisites
--------------
PHP: Ensure PHP (>= 8.1) is installed on your machine.
Composer: Make sure Composer is installed.
Node.js: Ensure Node.js and npm (Node Package Manager) are installed.
Database: Install a database server like MySQL or PostgreSQL.
Git: Make sure Git is installed.
Postman (optional, for testing API endpoints)

Setup Instructions:
--------------------

1. Clone the Repository : gh repo clone https://github.com/pradipcrathod93/diwali-sale-api.git
2. Navigate to Project folder : cd diwali-sale-api
4. Install Dependencies : composer install npm install
5. Create database & config in .env file
6. Generate App Key (Optional) : php artisan key:generate
7. Migrate Database : php artisan migrate
8. Start local server : php artisan serve

Linux/Ubuntu Permission 
-------------------------

sudo chmod -R 775 storage
sudo chmod -R 775 bootstrap/cache


Call API Steps
-------------------------

1. Register a New User
Create a new POST request to http://localhost:8000/api/register.
Set the headers:
Key: Content-Type
Value: application/json
Set the body to raw JSON:
{
    "name": "John Doe",
    "email": "john@example.com",
    "password": "password123",
    "password_confirmation": "password123"
}

2. Login with the Registered User:
Create a new POST request to http://localhost:8000/api/login.
Set the headers:
Key: Content-Type
Value: application/json
Set the body to raw JSON:
{
    "email": "john@example.com",
    "password": "password123"
}

3. Call the Diwali Sale API with Bearer Token:
Create a new POST request to http://localhost:8000/api/diwali-sale.
Set the headers:
Key: Content-Type
Value: application/json
Key: Authorization
Value: Bearer <your_access_token> (replace <your_access_token> with the token received from the login or register response)

4. Set the body to raw JSON: 

{
    "prices": [10, 20, 30, 40, 50, 60]
}