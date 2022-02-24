<?php

    $pageName = (isset($_GET['pageName'])) ? $_GET['pageName'] : '';
switch ($pageName) {
    case 'finding-number':
        include './html/finding-number.html';
        break;
    case 'drawing-shape':
        include './html/drawing-rectangle-shape.html';
        break;
    case 'cookie':
        include './html/cookie-exercise.html';
        break;
    default:
        include './html/error-page.html';
        break;
}
