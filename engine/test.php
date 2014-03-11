<?php
require_once('config/te_config.php');
require_once('functions/dbconn.php');
require_once('functions/sanitise.php');
require_once('classes/order.php');
$order=new Order('tip', 'soobshenie', 'pochta', '0');
$order->placeOrder();



?>