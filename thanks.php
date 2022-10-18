<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p> Merci
        <?= $user_name = $_POST['user_name'] ?>
        <?= $first_name = $_POST['first_name'] ?> de nous avoir contacté à propos de
        <?= $sujets = $_POST['sujets'] ?>


        Un de nos conseillers vous contactera soit à l’adresse
        <?= $user_name = $_POST['user_name'] ?> ou par téléphone au
        <?= $phone_Number = $_POST['Phone_Number'] ?> dans les plus brefs délais pour traiter votre demande :
        <?= $message = $_POST['user_message'] ?>

</body>

</html>