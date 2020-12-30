<?php
 session_start();
// SDK de Mercado Pago
require __DIR__ .'/vendor/autoload.php';
// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-7096232695569092-122812-471daacdceb959c30e915c0e7eafea57-440132128');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();
$preferencerrss = new MercadoPago\Preference();
$preferencedev = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Curso Seleccion IT';
$item->quantity = 1;
$item->unit_price = 3200;
$preference->purpose ='wallet_purchase';
$preference->items = array($item);
$preference->save();

$itemrrss = new MercadoPago\Item();
$itemrrss->title = 'Curso Redes Sociales';
$itemrrss->quantity = 1;
$itemrrss->unit_price = 3000;
$preferencerrss->purpose ='wallet_purchase';
$preferencerrss->items = array($itemrrss);
$preferencerrss->save();

$itemdev = new MercadoPago\Item();
$itemdev->title = 'Curso Desarrollo Frontend';
$itemdev->quantity = 1;
$itemdev->unit_price = 30000;
$preferencedev->purpose ='wallet_purchase';
$preferencedev->items = array($itemdev);
$preferencedev->save();


?>

