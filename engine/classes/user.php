<?php 
class User{

public $id;
public $keywords;
public $tel;
public $email;
public $lastid;
public $companyname;
public $managername;
public $region;
function __construct($id) { 
         global $DB;
        dbconn($DB);
        $this->id=$id;
        $row=selectrowbykey('id', $id, 'te_users');
		$rowdata=selectrowbykey('id', $id, 'te_userdata');
		$this->email=$row['email'];
		$this->tel=$rowdata['tel'];
		$this->keywords=stripslashes($rowdata['keywords']);
		$this->lastid=$rowdata['lastid'];
		$this->companyname=$rowdata['companyname'];
		$this->managername=$rowdata['managername'];
		$this->region=$rowdata['region'];
    }

}

?>
