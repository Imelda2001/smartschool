<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateur</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="../assets/css/user.css"> -->

</head>

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

    <!-- Sidebar -->
    <div class="sidebar">
        <h2 class="text-center text-warning">SmartSchool</h2>
        <a href="dashbord.php"><i class="fas fa-tachometer-alt pe-2"></i>Dashboard</a>
        <a href="univpu.php"><i class="fas fa-school pe-2"></i>Universités Publics</a>
        <a href="#"><i class="fas fa-university pe-2"></i>Universités Privées</a>
        <a href="#"><i class="fas fa-chalkboard-teacher pe-2"></i>Centre de Formation</a>
        <a href="#"><i class="fas fa-chalkboard-teacher pe-2"></i>Vos besoins</a>
        <a href="#"><i class="fas fa-cogs pe-2"></i>parametre</a>
    </div>
    <?php
    include('dashbord.php');
    ?>
        <script src="../assets/js/script.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>