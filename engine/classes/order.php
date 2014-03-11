<?php

class Order{

public $id;
public $type;
public $msg;
public $email;
public $showmail;

function __construct($type, $msg, $email, $showmail) { 
        $this->type = $type; 
		$this->msg = $msg;
		$this->email = $email;
		$this->showmail = $showmail;
    }
public function placeOrder(){
global $DB;
dbconn($DB);

$this->type = sanitise($this->type); 
$this->msg = sanitise($this->msg);
$this->email = sanitise($this->email);
$q="INSERT INTO `te_orders` (type, msg, email, showmail) VALUES ('".$this->type."', '".$this->msg."', '".$this->email."', '".$this->showmail."')";
$result = mysql_query($q)
    or die("Invalid query: " . mysql_error());



}

}

?>