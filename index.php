<?php 
	
	define ('NAME', 'Jean');
	$string1='my name is ';
	echo "the dog barked \"arf!arf!\"";
	$radius = 40;
	$pi=3.14;

	//indexed arrays
	$students =['jaan', 'jean', 'jian'];
	$students[2]= 'joan';
	$students[]='juan';
	//print_r($students);
	//echo count($students);

	//associative arrays
	$studGradeLevels = ['jaan' => '7', 'jean' => '8', 'joan' => '9', 'juan'=>'10'];
	//echo $studGradeLevels['jaan'];
	//echo count($studGradeLevels);

	//multi-dimensional arrays
	$studentList =[
		['name'=>'jaan', 'section'=>'rose', 'gradeLevel'=>'7'],
		['name'=>'jean', 'section'=>'rosal', 'gradeLevel'=>'8'],
		['name'=>'jian', 'section'=>'lily', 'gradeLevel'=>'9' ],
	];
	//print_r($studentList[1][2]);
	//take the last element in an array
	$studentList[]=['name'=>'joan', 'section'=>'dandelion', 'gradeLevel'=>'10' ];
	//print_r($studentList);
	$popped = array_pop($studentList);
	//print_r($popped);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>My First PHP file</title>
</head>
<body>
	<h1><?php echo 'hello, there';?></h1>
	<div><?php echo NAME ?></div>
	<div><?php echo $string1 . NAME ?></div>
	<div><?php echo strlen(NAME)?></div>
	<div><?php echo strtoupper(NAME)?></div>
	<div><?php echo strtolower(NAME)?></div>
	<div><?php echo str_replace('e', 'i', NAME)?></div>
	<div><?php echo $radius * $pi?></div>
	<div><?php echo $radius++?></div>
	<div><?php echo $radius?></div>
	<div><?php echo floor($pi)?></div>
	<div><?php echo $students[2]?></div>
	<div><?php echo $students[3]?></div>
	<div><?php echo $studentList[2]['section']?></div>
</body>
</html>

