<?php
$includepath=$_SERVER['DOCUMENT_ROOT'].'/engine';
require_once($includepath.'/config/te_config.php');
require_once($includepath.'/functions/dbconn.php');
require_once($includepath.'/functions/sanitise.php');
require_once($includepath.'/functions/encrypt.php');
require_once($includepath.'/functions/selectrowbykey.php');
require_once($includepath.'/modules/user.php');
require_once($includepath.'/classes/user.php');
isset($_POST['username']) or die('<h1>This is not the droids you are looking for!</h1><br/>Go away.');
if (checkuser($_POST['username'], $_POST['password'])){

$login=true;

} else {

$login=false;

}

if($login){

$id=getIdByEmail($_POST['username']);
$user=new User($id);
$sql = "SELECT * FROM `te_orders` WHERE `id` > ".$user->lastid." AND `type` IN (".$user->keywords.") AND `region`='".$user->region."'";
$r=mysql_query($sql) or die (mysql_error());
$unread=mysql_num_rows($r);
}
?>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <link rel="stylesheet" href="style.css" type="text/css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
 <script src="scripts/lkscript.js"></script>
 <title>Bridalweek-вход</title>
 </head>
 <body>
 <div id="wrapper">
 <?php
 
 if($login){
 
 echo '<input type="hidden" id="userid" value="'.$user->id.'">';
 echo '<input type="hidden" id="lastid" value="'.$user->lastid.'">';
 
 }
 
 ?>
 <div id="topbar"><?php if($login){echo 'Вы вошли как: '.$user->email;} else echo 'Имя пользователя или пароль неверны. <a href="index.php">Попробовать войти еще раз</a>' ?></div>
 <div id="sidebar"><a href="#" id="ordersbutton">Мои заказы(<?php echo $unread; ?>)</a></div>
 <div id="content"></div>
 </div>
 </body>
</html>