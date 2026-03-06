<?php

require_once '../app/Controllers/BookingController.php';

$uri = $_SERVER['REQUEST_URI'];

if ($uri == '/api/book') {
    $controller = new BookingController();
    $controller->createBooking();
}
require_once '../app/Controllers/ServiceController.php';

if ($uri == '/api/service/add') {

$controller = new ServiceController();
$controller->addService();

}
