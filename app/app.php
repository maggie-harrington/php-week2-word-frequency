<?php
    date_default_timezone_set('America/Los_Angeles');

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app ['debug'] = true;

    $app->get("/", function() use ($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->post("/results", function() use ($app) {
        $newRepeatCounter = new RepeatCounter($_POST['entered-word'], $_POST['entered-string']);
        $newCount = $newRepeatCounter->countRepeats($_POST['entered-word'], $_POST['entered-string']);
        return $app['twig']->render('results.html.twig', array('repeat_number' => $newCount));
    });

    return $app;
?>
