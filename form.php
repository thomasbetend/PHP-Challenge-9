<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container w-50">
<form action="validation-message.php" method="post" class="mt-3">
<div class="form-group mb-2">
        <label for="lastname">Nom</label>
        <input type="text" id="lastname" name="user_lastname" class="form-control" required value="<?php if(isset($_POST['user_lastname'])) echo $_POST['user_lastname']?>">
    </div>
    <div class="form-group mb-2">
        <label for="firstname">Prénom</label>
        <input type="text" id="firstname" name="user_firstname" class="form-control" required value="<?php if(isset($_POST['user_firstname'])) echo $_POST['user_firstname']?>">
    </div>
    <div class="form-group mb-2">
        <label for="email">Email</label>
        <input type="email" id="email" name="user_email" class="form-control" required value="<?php if(isset($_POST['user_email'])) echo $_POST['user_email']?>">
    </div>
    <div class="form-group mb-2">
        <label for="phone">Téléphone</label>
        <input type="tel" id="phone" name="user_phone" class="form-control" required value="<?php if(isset($_POST['user_phone'])) echo $_POST['user_phone']?>">
    </div>
    <div class="form-group mb-2">
        <label for="subject">Sujet</label>
        <select id="subject" name="user_subject" class="form-select" required value="<?php if(isset($_POST['user_subject'])) echo $_POST['user_subject']?>">
            <option value="GOOD VIBES">GOOD VIBES</option>
            <option value="BAD VIBES">BAD VIBES</option>
            <option value="INFO ?">INFO ?</option>
        </select>
    </div>
    <div class="form-group mb-2">
        <label for="message">Message</label>
        <textarea id="message" name="user_message" class="form-control" required value="<?php if(isset($_POST['user_message'])) echo $_POST['user_message']?>"></textarea>
    </div>
    <div>
        <button type="submit" class="btn btn-primary mt-2">Envoyer le message</button>
    </div>
</form>

</body>
</html>