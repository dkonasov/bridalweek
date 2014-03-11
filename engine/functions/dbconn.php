<?php function dbconn($DB, $encoding='utf8')
{
global $HOST;
global $USER;
global $PASS;
if(!mysql_connect($HOST, $USER, $PASS)) die(mysql_error());
mysql_select_db($DB);
mysql_set_charset($encoding);
}

?>