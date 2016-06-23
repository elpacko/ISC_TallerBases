<?php
ini_set('display_errors', 1);
 global $mysqli;
 $mysqli = new mysqli('127.0.0.1','webaccess','webAxs20_','SistemaDeMapas');
$content = array();
include('config.php');
include('functions.php');

if (!isset($_GET['p'])) {
  $_GET['p'] = 'index';
} elseif (substr($_GET['p'], -1) == '/') {
  $_GET['p'] .= 'index';
} elseif (is_dir('templates/' . $_GET['p'])) {
  $_GET['p'] .= '/index';
}
$template = 'templates/' . $_GET['p'] . '.php';

if (file_exists($template)) {
  ob_start();
  include($template);
  $content['default'] = ob_get_contents();
  ob_end_clean();
} else {
  header('HTTP/1.0 404 Not Found');
  include('404.html');
  die();
}

include('layouts/application.php');
