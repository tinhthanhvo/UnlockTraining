<?php
//    session_start();
//    if(!isset($_SESSION['login'])){
//        header("Location: /view/login-form.php");
//    }
//?>

<!DOCTYPE html>
<html lang="en">

<?php include('./view/layout/head.php'); ?>

<body>
<?php
    include('./view/layout/header.php');
include('./view/layout/sidebar.php')
?>
<main id="main" class="main">

    <?php include('../resource/route/RoutingPage.php') ?>

</main>

<?php include('./view/layout/footer.php') ?>

</body>

</html>