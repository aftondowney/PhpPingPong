<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Pingpong.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_ping_pong", function() use($app) {
        $my_PingPong = new PingPong;
        $new_ping_pong = $my_PingPong->makePingPong($_GET['number']);
        return $app['twig']->render('ping_pong.html.twig', array('result' => $new_ping_pong));
    });

    return $app;
?>
