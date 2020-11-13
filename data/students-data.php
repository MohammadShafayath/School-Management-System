<?php
require_once('../server.php');
$data = "";
$data .='{
	"header": [
	    {  "name": "rollnumber",
           "title": "Roll",
           "sortable": true,
           "sortDir": "asc",
           "format": "number"
        },
		{
			"name": "studentimage",
			"title": "Image",
			"sortable": false,
			"clsColumn" : "text-center",
			"cls":"text-center"

		},
		{
			"name": "student_name",
			"title": "Name",
			"sortable": true,
			"cls":"text-center"

		},
		{
			"name": "class",
			"title": "Class",
			"sortable": true,
			"clsColumn" : "text-center",
			"cls":"text-center"
		},
		{
			"name": "section",
			"title": "Section",
			"sortable": true,
			"clsColumn" : "text-center",
			"cls":"text-center"
		},
	    {
			"name": "parents",
			"title": "Parents",
			"sortable": true,
			"clsColumn" : "text-center",
			"cls":"text-center"
		},
		{
			"name": "phone_number",
			"title": "Phone",
			"sortable": true,
			"clsColumn" : "text-center",
			"cls":"text-center"
		},
		{
			"name": "action",
			"title": "Actions",
			"sortable": false,
			"clsColumn" : "text-center",
			"cls":"text-center"
		}

	],"data": [';
	$sql = mysqli_query($db, "SELECT `id`,`student_name`,`student_image`,`classes`,`section_name`,`gender_name`,`birth_date`,`class_roll`,`mail`,`father_name`,`Present_Adress`, `Phone_Number` FROM `student_info` ORDER BY id DESC");
	$first = true;
	while ($row = mysqli_fetch_array($sql)) {
	if($first){
	$data .= "[";
	$first = false;
	}else{
	$data .= ',[';
	}
	$data .= '"'.$row['class_roll'].'",';
	$data .= '"'.(empty($row['student_image']) ? '-' : '<img src=\'all-images/'.$row['student_image'].'\' style=\'width:60px;\'>' ).'",';
	$data .= '"'.$row['student_name'].'",';
	$data .= '"'.$row['classes'].'",';
	$data .= '"'.$row['section_name'].'",';
	$data .= '"'.$row['father_name'].'",';
	$data .= '"'.$row['Phone_Number'].'",';
	$data .= '"<a class=\'button primary rounded\' href=\'student.php?page=student-details&id='.$row['id'].'\' title=\'Details\'><span class=\'mif-eye\'></span></a>"';
	$data .=']';
	}
   $data .=']}';

   $data = json_decode($data, true);
   echo json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
?>