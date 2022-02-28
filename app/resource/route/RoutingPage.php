<?php

    $pageName = (isset($_GET['pageName'])) ? $_GET['pageName'] : '';
switch ($pageName) {
    case 'finding-number':
        include_once './view/FindingNumber.php';
        include_once '../http/controller/FindingNumber.php';
        break;
    case 'drawing-shape':
        include_once './view/DrawingRectangleShape.php';
        include_once '../http/controller/DrawingShape.php';
        break;
    case 'cookie':
        include_once './view/CookieExercise.php';
        break;
    default:
        include_once './view/UserList.php';
        include_once '../http/utils/GetUserList.php';
        break;
}
