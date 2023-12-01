<?php 
  // session_start();
  // if(isset($_SESSION['unique_id'])){
  //   header("location: ../Admin_Part/index.html");
  // }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header><h3>AMIA Chat-Login</h3></header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Adresse Email</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Mot de passe</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Pas de compte ? <a href="index.php">S'enregistrer</a></div>
      <a href="../Admin_Part/index.html" style="color: #6a4de5; text-decoration:underline; text-align: center; padding: 10px 10px 10px 90px;">Retour vers page d'acceuil !</a>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
