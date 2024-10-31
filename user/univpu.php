<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universités Publis</title>
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


    <!-- Main content -->
    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar">
            <a class="navbar-brand" href="#">Plateforme d aide a la decision | SmartSchool</a>
            <div class="user-profile ml-auto">
            <img src="../assets/images/images.jpg" alt="User Profile" style="border-radius: 5px;">
                <span>User name</span>
            </div>
        </nav>

        <!-- Cards -->
        <div class="container-fluid px-4">

            <div class="row row-cols-1 row-cols-md-3 g-3 p-4">

                <div class="col">
                    <div class="card text-center">
                        <img src="../assets/images/Localhost1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Locallhost ACADEMY</h5>
                            <p class="card-text">Centre de formation
                                <br><a href="#" style="text-decoration: none;">www.localhost-academy.com</a><br>
                                Douala BP cite, Yaounde-Cameroun Carrefour KAKA
                                <br>
                                contact@localhost-academy.com
                            </p>

                            <a href="#" class="btn btn-warning text-primary" style="font-weight: bold;">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center">
                        <img src="../assets/images/Iuste1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">USTE</h5>
                            <p class="card-text">Universite privee
                                <br><a href="#" style="text-decoration: none;">www.univ-stee.cm</a>
                                <br>
                                BP: Yaounde-Cameroun au quartier mendong face KAMTHE Hotel
                                <br>
                                iustemendong2013@yahoo.com
                            </p>
                            <a href="#" class="btn btn-warning text-primary" style="font-weight: bold;">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center">
                        <img src="../assets/images/Ngoa.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ngoa nkele</h5>
                            <p class="card-text">Universite public
                                <br><a href="#" style="text-decoration: none;">www.univ-stee.cm</a>
                                <br>
                                BP: Yaounde-Cameroun au quartier mendong face KAMTHE Hotel
                                <br>
                                iustemendong2013@yahoo.com
                            </p>
                            <a href="#" class="btn btn-warning text-primary" style="font-weight: bold;">En savoir plus</a>
                        </div>
                    </div>
                            
                </div>

            </div>
        </div>
        <!-- Footer -->
        <footer class="text-light text-center py-3 mt-5" style="width: 100%;">
            <p class="text-warning" style="font-weight: #575d63;">&copy; SmartSchool, Une solution de DataMaster. Tous droits réservés.</p>
        </footer>




</body>
</html>