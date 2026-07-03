# Contact Form with PHPMailer

A secure Contact Form application built using PHP, MySQL, and PHPMailer. The project allows users to submit messages through a contact form, stores them in a MySQL database, and sends email notifications using SMTP via PHPMailer.

## Features

- Contact form with server-side validation
- Email sending using PHPMailer
- SMTP authentication
- Store contact messages in MySQL
- View submitted messages
- Secure database connectivity
- Simple and responsive interface

## Technologies Used

- PHP
- MySQL
- PHPMailer
- HTML5
- CSS3

## Project Structure

```
contact-form-phpmailer/
│── PHPMailer/
│── config.php
│── contact.php
│── db.php
│── sendmail.php
│── view_messages.php
```

## Installation

1. Clone the repository.

```bash
git clone https://github.com/roma-saini/contact-form-phpmailer.git
```

2. Move the project to your XAMPP `htdocs` folder.

3. Create a MySQL database and import the required tables.

4. Configure your SMTP credentials in `config.php`.

5. Start Apache and MySQL using XAMPP.

6. Open your browser and visit:

```
http://localhost/contact-form-phpmailer/
```

## Future Improvements

- File attachment support
- Google reCAPTCHA integration
- Email templates
- Admin login for managing messages
- Search and filter messages

## Author

**Roma Saini**
