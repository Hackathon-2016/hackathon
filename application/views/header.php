<?php
/**
 * Created by PhpStorm.
 * User: mivanchev
 * Date: 02-Feb-16
 * Time: 22:07
 */
?>
<!doctype html>
<html lang="en">

<head>
    <title> HackVratsa 2016</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="theme-color" content="#1C8800">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
<div class="logo wrapper">
    <h2>Logo | HackVratsa 15-17.04.2016</h2>
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="dropdown"><a href="<?php echo base_url(); ?>home">Начало</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">За Хакатоните<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Какво е Хакатон?</a></li>
          <li><a href="#">Често Задавани Въпроси</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Хак 2016<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Правила</a></li>
          <li><a href="#">Програма</a></li>
          <li><a href="#">Екипи</a></li>
          <!--<li><a href="#">Екипи</a></li>-->
          <li><a href="#">Награди</a></li>
          <li><a href="#">Проекти</a></li>
          <li><a href="#">Галерия</a></li>
          <li><a href="<?php echo base_url(); ?>registration">Регистрация</a></li>
        </ul>
      </li>
      <li class="dropdown"><a href="#">Партньори</a></li>
    </ul>
  </div>
</nav>