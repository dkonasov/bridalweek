<?php function sanitise($value)

  {

   $value=HtmlSpecialChars($value);

   $value=mysql_real_escape_string($value);

   return $value;

   }

?>