<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rénitialiser Mot de Passe - Plateforme Universités</title>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <?php
  session_start();

  $_SESSION["user"] = "";
  $_SESSION["usertype"] = "";

  include_once('connexion.php');

  if($_POST){
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if ($password == $cpassword) {
        $sqlmain = "select * from webuser where email=?;";
        $stmt = $database->prepare($sqlmain);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows == 1) {
          $error = '<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Already have an account for this Email address.</label>';
        } else {
          $database->query("update user(password_u) values('$password');");
          $database->query("update webuser values('$email','u')");
  
          $_SESSION["user"] = $email;
          $_SESSION["usertype"] = "u";
          $_SESSION["username"] = $nom;
  
          header('Location: user/index.php');
          $error = '<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;"></label>';
        }
      }
  }
  
  
  ?>



    <!-- Formulaire de Création de Compte -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <img src="assets/images/frankfurt-142707_1280.jpg" class="img-fluid rounded-4" alt="Image de création de compte">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="w-100">
                    <h2>Rénitialiser Mot de Passe</h2>
                    <form action="" method="POST">
                    <div class="form-group">
                            <label for="password">Nouveau Mot de Passe</label>
                            <input name="password" type="password" class="form-control" id="password" placeholder="Votre mot de passe">
                        </div>
                        <div class="form-group">
                            <label for="cpassword">Confirme Mot de passe</label>
                            <input name="cpassword" type="password" class="form-control" id="password" placeholder="Confirme votre mot de passe">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Rénitialiser mot de passe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>