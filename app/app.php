<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/CoinCombo.php";

  $app = new Silex\Application();

  $app["debug"] = true; //make sure this is AFTER APP STARTS

  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__."/../views"));

  $app->get("/", function() use ($app) {
      return $app['twig']->render('index.html.twig');
  });

  $app->get("/result", function() use ($app){
     $my_coinCombo = new CoinCombo;
     $initialAmt = $my_coinCombo->divideOutput($_GET['amount']);
     return $app['twig']->render('index.html.twig', array('resultAmt' => $initialAmt));
  });

  return $app;

?>
