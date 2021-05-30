<?php

include('test.php');

class CSStudent extends Student
{
	public $dept = "CS";

	function __construct($id, $name, $email){
		parent::__construct($id, $name, $email);
	}

}

$cs1 = new CSStudent(12, 'alamin', 'almain@aiub.edu');
echo $cs1->details();