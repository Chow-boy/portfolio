<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Taducteur</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <h1>Traducteur Anglais - Français</h1>
    <form class="forms" action="index.php" method="post">
        <input type="text" name="word">
        <select class="sel" name="direction">
          <option value="toEnglish">Français <-> Anglais</option>
          <option value="toFrench">Anglais <-> Français</option>
        </select>
        <input type="submit" name="submit" value="Traduire">
    </form>

    <?php include 'fonction.php';

      translate($mot, $language);

    ?>
  </body>
</html>
