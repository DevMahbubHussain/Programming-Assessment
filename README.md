# Programming-Assessment
A simple testimonial system Using Laravel & Mysql

## Server Requirements 
<ul>
  <li>PHP >= 8.0</li>
  <li>BCMath PHP Extension</li>
  <li>Ctype PHP Extension</li>
  <li>cURL PHP Extension</li>
  <li>DOM PHP Extension</li>
  <li>Fileinfo PHP Extension</li>
  <li>JSON PHP Extension</li>
  <li>Mbstring PHP Extension</li>
  <li>OpenSSL PHP Extension</li>
  <li>PDO PHP Extension</li>
  <li>Tokenizer PHP Extension</li>
  <li>XML PHP Extension</li>
</ul>

## Project install From GitHub Repository
<ul>
  <li>run git clone https://github.com/DevMahbubHussain/Programming-Assessment</li>
  <li>run composer install.</li>
  <li>run cp .env.example .env.</li>
  <li>run php artisan key:generate.</li>
  <li>run php artisan migrate.</li>
  <li>run php artisan serve</li>
</ul>

## Database Connection

<h3>Create database and put your database name in .env file</h3>
<p>DB_DATABASE=workspaceit</p>

## password reset system

<p> for testing password reset option please follow these rules</p>
<p> First go to your project .env file and modifiy follwing data </p>
<p>MAIL_MAILER=smtp</p>
<p>MAIL_HOST=smtp.mailtrap.io</p>
<p>MAIL_PORT=2525</p>
<p>MAIL_USERNAME=69c6152cde6b19</p>
<p>MAIL_PASSWORD=b37999688aa343</p>
<p>MAIL_ENCRYPTION=tls</p>
<p>MAIL_FROM_ADDRESS="mahbubhussaincse@gmail.com"</p>
<h3>Change all Mailtrap configiration from your own mailtrap ceredentials</h3>

## Admin Registration system if you want to create from system
http://127.0.0.1:8000/admin/register

## Admin Email & Password
<p>Username:adminworkspaceit@gmail.com</p>
<p>Password:admin</p>


## Client Email & Password
<p>Username:mahbubhussaincse@gmail.com</p>
<p>Password:client</p>

