<?php

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/') {
    require 'View/index.php';
} else {
    require 'View/404.php';
}