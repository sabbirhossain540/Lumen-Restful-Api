<?php


$router->get('/get', function () use ($router) {
    return "Hello Lumen RestApi from Get";
});

$router->post('/post', function () use ($router) {
    return "Hello Lumen RestApi from Post";
});

$router->put('/put', function () use ($router) {
    return "Hello Lumen RestApi from PUT";
});

$router->delete('/delete', function () use ($router) {
    return "Hello Lumen RestApi From Delete";
});
