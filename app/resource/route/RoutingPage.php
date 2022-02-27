<?php

    $pageName = (isset($_GET['pageName'])) ? $_GET['pageName'] : '';
switch ($pageName) {
    case 'finding-number':
        include './view/finding-number.html';
        break;
    case 'drawing-shape':
        include './view/drawing-rectangle-shape.html';
        break;
    case 'cookie':
        include './view/cookie-exercise.php';
        break;
    default:
        include '../http/controller/Profile.php';
        break;
}
