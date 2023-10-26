<?php
require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable("__DIR__/..");
$dotenv->load();

define("DB_HOST", $_ENV['DB_HOST']);
define("DB_NAME", $_ENV['DB_NAME']);
define("DB_USER", $_ENV['DB_USER']);
define("DB_PASS", $_ENV['DB_PASS']);

try {
  $Conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
  $Conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $Conn->setAttribute(PDO::ATTR_PERSISTENT, true);
  $Conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch (PDOException $e) {
  echo $e->getMessage();
  exit();
  }
?>