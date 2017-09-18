<?php include 'head.php'; ?>
<?php //include 'header.php'; ?>
                                            <h2>CONTACT</h2>
<section id="contact" class="contact">
  <!--<h2>Contact</h2>-->
  <div class="site">
    <i class="fa fa-facebook-official fa-4x" aria-hidden="true"></i>
    <i class="fa fa-linkedin-square fa-4x" aria-hidden="true"></i>
    <i class="fa fa-github-square fa-4x" aria-hidden="true"></i>
  </div>
  <form id="formulaire" action="index.php" method="post">

      <div class="fieldset">
        <label for="nom">Nom :</label>
        <input type="text" name="Nom" id="Nom" >
        <label for="prenom">Prénom :</label>
        <input type="text" name="Prenom" id="Prenom" >
        <label for="email">Email :</label>
        <input type="email" name="Email" id="Email" >
        <label for="messages">Messages :</label>
        <textarea name="Messages" rows="8" cols="80" id="Messages" ></textarea>
        <button type="submit" name="button">Envoyer</button>

      </div>


  </form>

  </section>
  <?php include 'base.php'; ?>
