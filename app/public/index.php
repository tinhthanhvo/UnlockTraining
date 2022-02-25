<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header("Location: /html/login-form.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<?php include('./layout/head.php'); ?>

<body>
<?php
    include('./layout/header.php');
    include('./layout/sidebar.php')
?>
<main id="main" class="main">

    <?php include ('./php/RoutingPage.php')?>

</main>

<?php include ('./layout/footer.php')?>

</body>

</html>