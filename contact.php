<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>

<h2>Contact Us</h2>

<form action="sendmail.php" method="POST">

    Name:
    <input type="text" name="name" required>
    <br><br>

    Email:
    <input type="email" name="email" required>
    <br><br>

    Subject:
    <input type="text" name="subject" required>
    <br><br>

    Message:
    <textarea name="message" rows="5" cols="30" required></textarea>
    <br><br>

    <input type="submit" name="send" value="Send Message">

</form>

</body>
</html>