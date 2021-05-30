<?php

	
/*	$student = 	[
					[1,'abc', 3.5, true],
					[2,'alamin', 2, false],
					[3,'xyz', 4, true]
				];

	$student = 	[
					's1'=>['id'=>1,'name'=>'abc', 'cgpa'=>3.5],
					's2'=>['id'=>2,'name'=>'alamin', 'cgpa'=>2],
					's3'=>['id'=>3,'name'=>'xyz', 'cgpa'=>4]
				];*/

	//echo $student['s3']['cgpa'];

/*
	function sum($a=0, $b=0){
		$c = $a + $b;
		return $c;
	}

	echo sum(6, 8);*/


class Student {

	public $id= 10;
	public $name = 'alamin';
	public $email = "alamin@aiub.edu";

	function __construct($id=0, $name='', $email=''){
		$this->id  = $id;
		$this->name  = $name;
		$this->email  = $email;
	}

	function getName(){
		return $this->name;
	}

	function details (){
		return 'Your name: '.$this->name."<br> Your ID:".$this->id;
	}
}

 //$s1 = new Student(12,'alamin');
 //echo $s1->details();