<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User | Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: white;
            margin: 0;
            padding: 0;
        }

        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #171e79;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: #f39c12;
            display: block;
        }

        .sidebar a:hover {
            background-color: #575d63;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .header {
            margin-bottom: 20px;
        }

        .card i {
            font-size: 50px;
            margin-bottom: 10px;
        }

        .navbar {
            padding: 10px;
            background-color: #171e79;
            border-bottom: 1px solid #e0e0e0;
            position: sticky;
            top: 0;
            z-index: 1000;
            border-radius: 16px;
        }

        .navbar .navbar-brand {
            font-size: 20px;
            color: #f39c12;

        }

        .navbar .user-profile {
            display: flex;
            align-items: center;
            color: #f39c12;
        }

        .navbar .user-profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
            color: #f39c12;
        }

        .navbar .user-profile span {
            font-size: 18px;
        }
    </style>
</head>

<body>


    <div class="sidebar">
        <h2 class="text-center text-warning">SmartSchool</h2>
        <a href="dashbord.php"><i class="fas fa-tachometer-alt pe-2"></i>Dashboard</a>
        <a href="univpu.php"><i class="fas fa-school pe-2"></i>Universités Publics</a>
        <a href="#"><i class="fas fa-university pe-2"></i>Universités Privées</a>
        <a href="#"><i class="fas fa-chalkboard-teacher pe-2"></i>Centre de Formation</a>
        <a href="#"><i class="fas fa-chalkboard-teacher pe-2"></i>Vos besoins</a>
        <a href="#"><i class="fas fa-cogs pe-2"></i>parametre</a>
    </div>


    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar">
            <a class="navbar-brand" href="#">Plateforme d aide a la decision | SmartSchool</a>
            <div class="user-profile ml-auto">
                <img src="../assets/images/images.jpg" alt="User Profile" style="border-radius: 5px;">
                <span>User name</span>
            </div>
        </nav>

        <div>
            <center>
                <div>
                    <h1>Utilisateur | Tableau de Bord</h1>
                </div>
            </center>
        </div>



        <div class="container-fluid container-fullw">
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-white no-radius text-center">
                        <div class="panel-body p-4" style="background: aliceblue; border-radius: 10px">
                            <span class="fa-stack fa-2x"> <i class="fas fa-university pe-2 fa-stack-2x text-primary"></i> <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i> </span>
                            <a href="">
                                <h2 class="StepTitle">Universités Publics</h2>
                            </a>

                            <p class="links cl-effect-1">
                                20
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-white no-radius text-center">
                        <div class="panel-body p-4" style="background: aliceblue; border-radius: 10px">
                            <span class="fa-stack fa-2x"> <i class="fas fa-school pe-2 fa-stack-2x text-primary"></i></span>
                            <a href="#">
                                <h2 class="StepTitle">Universités Privées</h2>
                            </a>

                            <p class="cl-effect-1">
                                20
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-white no-radius text-center">
                        <div class="panel-body p-4" style="background: aliceblue; border-radius: 10px">
                            <span class="fa-stack fa-2x"> <i class="fas fa-chalkboard-teacher pe-2 fa-stack-2x text-primary"></i> </span>
                            <a href="">
                                <h2 class="StepTitle">Centre de Formation</h2>
                            </a>

                            <p class="links cl-effect-1">
                                20
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="text-light text-center py-3 mt-5 bg-#171e79" style="width: 100%;">
            <p class="text-warning" style="font-weight: #575d63;">&copy; SmartSchool, Une solution de DataMaster. Tous droits réservés.</p>
        </footer>

</body>

</html>