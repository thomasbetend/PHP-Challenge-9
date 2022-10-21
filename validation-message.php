<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation message</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <?php

    function testInput($data){
        $data= trim($data);
        $data= stripslashes($data);
        $data= htmlspecialchars($data);
        return $data;
    }

    $lastname = testInput($_POST["user_lastname"]);
    $firstname = testInput($_POST["user_firstname"]);
    $email = testInput($_POST["user_email"]);
    $phone = testInput($_POST["user_phone"]);
    $lastname = testInput($_POST["user_lastname"]);
    $subject = testInput($_POST["user_subject"]);
    $message = testInput($_POST['user_message']);

    if(empty($firstname) || empty($lastname) || empty($email) || empty($phone) || empty($subject) || empty($message)) { ?>
        <div class="container w-50">
            <div class="p-3 mt-5">
                <?php echo "Il faut remplir tous les champs";?>
                <br/> <a href="form.php">Retour au formulaire</a>
            </div>
        </div>
    <?php } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) { ?>
        <div class="container w-50">
            <div class="p-3 mt-5">
                <?php echo "Format d'email incorrect, veuillez recommencer." ?>
                <br/> <a href="form.php">Retour au formulaire</a>
            </div>
        </div>
    <?php } else { ?>
        <div class="container w-50">
            <div class="p-3 mt-5">        
                Merci <span class="text-primary"><?php echo ucwords($lastname) . ' ' . ucwords($firstname) ?></span> de nous avoir contacté à propos de <span class="text-primary"><?php echo $subject ?></span>.<br/>
                Un de nos conseiller vous contactera soit à l’adresse <span class="text-primary"><?php echo $email ?></span> soit par téléphone au <span class="text-primary"><?php echo $phone ?></span> 
                dans les plus brefs délais pour traiter votre demande :
            </div>
            <div class="p-3">
                <em class="text-secondary">"<?php echo $message?>"</em>
            </div>
        </div>
    <?php } ?>

</body>
</html>
