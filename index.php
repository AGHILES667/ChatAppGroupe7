<?php 
  // session_start();
  // if(isset($_SESSION['unique_id'])){
  //   header("location: ../Admin_Part/index.html");
  // }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header><h3>AMIA Chat-Sign Up</h3></header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Prénom</label>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="field input">
            <label>Nom</label>
            <input type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
          <label>Adresse Email</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Mot de passe</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Sélectionner image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continuer à Chat">
        </div>
      </form>
      <div class="link">Vous avez un compte ? <a href="login.php">Se connecter</a></div>
      <a href="../Admin_Part/index.html" style="color: black; text-decoration:underline; text-align: center; padding: 10px 10px 10px 100px;">Retour vers page d'acceuil !</a>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
