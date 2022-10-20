<html>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>

<body>
  <form action="thanks.php" method="post">
    <div>
      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="user_name" required>
    </div>
    <label for="prenom">Prenom :</label>
    <input type="text" id="prenom" name="first_name" required>
    </div>
    <div>
      <label for="courriel">Courriel :</label>
      <input type="email" id="courriel" name="user_email" required>
    </div>
    <div>
      <label for="phone">Tel :</label>
      <input type="tel" id="phone" name="Phone_Number" required>
    </div>
    <div>

      <label for="message">Message :</label>
      <textarea id="message" name="user_message" required></textarea>
    </div>
    <div class="button">
      <button type="submit">Envoyer votre message</button>
      <select name="sujets" id="religions-select">
        <option value="religions">Religions</options>
        <option value="politique">Politique</options>
        <option value="religions">Musique</options>
      </select>
    </div>

  </form>

</html>