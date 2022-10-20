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
        /* Creating an array of errors. */
        <?php $errors = [];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // nettoyage et validation des données soumises via le formulaire 
    if (!isset($_POST['user_name']) && trim($_POST['user_name']) === '')
        $errors[] = "Le nom est obligatoire";

    if (!isset($_POST['first_name']) && trim($_POST['first_name']) === '')
        $errors[] = "Le nom est obligatoire";

    if (!isset($_POST['user_email']) && trim($_POST['user_email']) && filter_var($_POST, FILTER_VALIDATE_EMAIL))
        $errors[] = "L'adresse email est obligatoire";

    if (!isset($_POST['Phone_Number']) && trim($_POST['Phone_Number']) === '')
        $errors[] = "Le numero de telephone est obligatoire";

    if (!isset($_POST['sujets']) && trim($_POST['sujets']) === '')
        $errors[] = "Veuillez choisir un sujet ";

    if (!isset($_POST['user_message']) & trim($_POST['user_message']) === '')
        $errors[] = "Veuillez entrer un message ";


    if (empty($errors)) {
        // traitement du formulaire
        // puis redirection
        header('Location: thanks.php');
    } else { ?>

    </p>
    <div class="border border-danger rounded p-3 m-5 bg-danger">
        <ul>
            <?php foreach ($errors as $error): ?>
            <li>
                <?= $error; ?>
            </li>
            <?php endforeach; ?>
        </ul>

    </div>
    <?php } ?>
    <?php } ?>




</body>

</html>