<?php function sanitise($value)

  {

   $value=HtmlSpecialChars($value);

   $value=mysql_real_escape_string($value);
   $value=addslashes($value);

   return $value;

   }

?>