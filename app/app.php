<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/CoinCombo.php";

  $app = new Silex\Application();

  $app["debug"] = true; //make sure this is AFTER APP STARTS

  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__."/../views"));












?>
