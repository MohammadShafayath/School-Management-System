<?php
$db = mysqli_connect('localhost', 'root', '', 'std');

//for teacher

if(isset($_POST['teacher-insert'])){
unset($_POST['teacher-insert']);
$imagerename = strtotime(date("Y-m-d H:i:s")).'.'.str_replace('image/', '', $_FILES['teacher-image-upload']['type']);
$imagetype = $_FILES['teacher-image-upload']['type'];
if($imagetype != 'image/jpg' && $imagetype != 'image/jpeg' &&  $imagetype != 'image/png'){
	echo "invalid";
}else{
move_uploaded_file($_FILES['teacher-image-upload']['tmp_name'], 'all-images/'.$imagerename); 
}
$_POST['teacher_image '] = $imagerename;

dataInsert($_POST, 'teacher_info');
}

//for Student

if(isset($_POST['student-insert'])){
unset($_POST['student-insert']);
$imagerename = strtotime(date("Y-m-d H:i:s")).'.'.str_replace('image/', '', $_FILES['student-image-upload']['type']);
$imagetype = $_FILES['student-image-upload']['type'];
if($imagetype != 'image/jpg' && $imagetype != 'image/jpeg' &&  $imagetype != 'image/png'){
	echo "invalid";
}else{
move_uploaded_file($_FILES['student-image-upload']['tmp_name'], 'all-images/'.$imagerename); 
}
$imagerename1 = strtotime(date("Y-m-d H:i:s")).'-p.'.str_replace('image/', '', $_FILES['parents-image-upload']['type']);
$imagetypep = $_FILES['parents-image-upload']['type'];
if($imagetypep != 'image/jpg' && $imagetypep != 'image/jpeg' &&  $imagetypep != 'image/png'){
	echo "invalid";
}else{
move_uploaded_file($_FILES['parents-image-upload']['tmp_name'], 'all-images/'.$imagerename1); 
}
$_POST['student_image '] = $imagerename;
$_POST['parent_image '] = $imagerename1;
dataInsert($_POST, 'student_info');
}
//for class_info

if(isset($_POST['classes-insert'])){


dataInsert($_POST, 'class_info');
}


function dataInsert($data, $table){
 global $db;
 $column = array_keys($_POST);
 $value = array_values($_POST);
 
 $columnImplode = implode(",", $column);
 $valueImplode = "'".implode("','", $value)."'";
 $sql = "INSERT INTO $table ($columnImplode) VALUES ($valueImplode)";
 //echo $sql;
 mysqli_query($db, $sql);
}

?>