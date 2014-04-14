<?php

# Register providers
$app->register(new Silex\Provider\SerializerServiceProvider());
$app->register(new Silex\Provider\ServiceControllerServiceProvider());
$app->register(new Incubart\ServiceProvider());

require __DIR__.'/routing.php';

return $app;
