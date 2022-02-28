<?php
//    session_start();
//    if(!isset($_SESSION['login'])){
//        header("Location: /view/login-form.php");
//    }
//?>

<!DOCTYPE html>
<html lang="en">

<?php include('./view/layout/Head.php'); ?>

<body>
<?php
    include('./view/layout/Header.php');
include('./view/layout/Sidebar.php')
?>
<main id="main" class="main">

    <?php include('../resource/route/RoutingPage.php') ?>

</main>

<?php include('./view/layout/Footer.php') ?>

</body>

</html>