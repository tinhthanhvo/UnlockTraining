<?php
if (!isset($_COOKIE['animal'])) {
    if (empty($_POST['animal'])) {
        setcookie("animal", '', time() + 3600, '/');
    } else {
        setcookie("animal", $_POST['animal'], time() + 3600, '/');
    }
} elseif (!empty($_POST['animal']) && $_COOKIE['animal'] != $_POST['animal']) {
    setcookie("animal", $_POST['animal'], time() + 3600, '/');
}
?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>List Choice use Cookie</title>
</head>
<body>
    <div>
        <h2>Please check the one of the animals which you love: </h2>

        <form method="post" action="index.php">
            <input type="radio" name="animal" value="cat" id="animal" <?php if (count($_COOKIE) > 0 && $_COOKIE['animal'] == 'cat') {
                echo "checked";
                                                                      }?>>
            <label for="animal"> I love cat</label><br><br>

            <input type="radio" name="animal" value="dog" id="animal" <?php if (count($_COOKIE) > 0 && $_COOKIE['animal'] == 'dog') {
                echo "checked";
                                                                      }?>>
            <label for="animal"> I love dog</label><br><br>

            <input type="radio" name="animal" value="snake" id="animal" <?php if (count($_COOKIE) > 0 && $_COOKIE['animal'] == 'snake') {
                echo "checked";
                                                                        }?>>
            <label for="animal"> I love snake</label><br><br>

            <input type="radio" name="animal" value="bird" id="animal" <?php if (count($_COOKIE) > 0 && $_COOKIE['animal'] == 'bird') {
                echo "checked";
                                                                       }?>>
            <label for="animal"> I love bird</label><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <div>
        <a href="index.php"> Back</a>
    </div>

</body>
</html>
