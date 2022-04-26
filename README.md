# Programming-Assessment
A simple testimonial system

## Server Requirements 
PHP >= 8.0
BCMath PHP Extension
Ctype PHP Extension
cURL PHP Extension
DOM PHP Extension
Fileinfo PHP Extension
JSON PHP Extension
Mbstring PHP Extension
OpenSSL PHP Extension
PCRE PHP Extension
PDO PHP Extension
Tokenizer PHP Extension
XML PHP Extension

## Project install from After Cloning From GitHub Repository
run git clone https://github.com/DevMahbubHussain/Programming-Assessment
run composer install.
run cp .env.example .env.
run php artisan key:generate.
run php artisan migrate.
run php artisan serve


## Database Connection

<h3>Create database and put your database name is .env file</h3>
<p>DB_DATABASE=workspaceit</p>

## password reset system

<p> for test password reset option please follow these rules</p>
<p> First go to your project .env file and modifiy follwing data </p>
<p>
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=69c6152cde6b19
MAIL_PASSWORD=b37999688aa343
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="mahbubhussaincse@gmail.com"
</p>
<h3>Change all Mailtrap configiration from your own mailtrap ceredentials</h3>

## Admin Email & Password
Username:adminworkspaceit@gmail.com
Password:admin

## Client Email & Password
Username:mahbubhussaincse@gmail.com
Password:client

