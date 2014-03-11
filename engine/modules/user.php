<?php


function adduser($mail, $password) //Добавление нового пользователя
{
global $DB;
$mail=sanitise($mail);
$password=encrypt($password);
dbconn($DB);
$query='INSERT INTO te_users(email, pass) VALUES("'.$mail.'", "'.$password.'");';
$r=mysql_query($query) or die(mysql_error());
return $r;
}

function checkuser($email, $password) //проверка имени пользователя и пароля
{
global $DB;
$result=false;
$email=sanitise($email);
$password=encrypt($password);
dbconn($DB);
$q='SELECT email, pass FROM te_users WHERE email="'.$email.'"';
$r=mysql_query($q) or die(mysql_error);
while ($row=mysql_fetch_array($r))
{
if($row['pass']==$password)
$result=true;
else
$result=false;
}
return $result;
}

function getIdByEmail($email){
global $DB;
dbconn($DB);
$row=selectrowbykey('email', $email, 'te_users');
return $row['id'];

}

?>