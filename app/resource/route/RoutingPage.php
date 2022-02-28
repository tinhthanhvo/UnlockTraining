<?php

    $pageName = (isset($_GET['pageName'])) ? $_GET['pageName'] : '';
switch ($pageName) {
    case 'finding-number':
        include './view/FindingNumber.php';
        include '../http/controller/FindingNumber.php';
        break;
    case 'drawing-shape':
        include './view/DrawingRectangleShape.php';
        include '../http/controller/DrawingShape.php';
        break;
    case 'cookie':
        include './view/CookieExercise.php';
        include '../http/controller/Cookie.php';
        break;
    default:
        include './view/UserList.php';
        include '../http/controller/GetUserList.php';
        break;
}
