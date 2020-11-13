<?php
require_once('../server.php');
$data = "";
$data .='{
	"header": [
	    {   "name": "idnumber",
            "title": "ID",
            "sortable": true,
            "sortDir": "asc",
            "format": "number"
        },
		{
			"name": "teacherimage",
			"title": "Image",
			"sortable": false,
			"clsColumn" : "text-center",
			"cls":"text-center"
		},
		{
			"name": "teacher_name",
			"title": "Name",
			"sortable": true,
			"cls":"text-center"
		},
		{
			"name": "subject",
			"title": "Subject",
			"sortable": true,
			"clsColumn" : "text-center",
			"cls":"text-center"
		},
		{
			"name": "adress",
			"title": "Adress",
			"sortable": true,
			"clsColumn" : "text-center",
			"cls":"text-center"
		},
	    {
			"name": "phone_nmmber",
			"title": "Phone",
			"sortable": true,
			"clsColumn" : "text-center",
			"cls":"text-center"
		},
		{
			"name": "mail",
			"title": "E-mail",
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
	$sql = mysqli_query($db, "SELECT `id`,`teacher_name`,`teacher_image`, `teacher_class`,`teacher_section`,`id_Number`,`mail`,`present_address`, `phone_no` FROM `teacher_info` ORDER BY id DESC");
	$first = true;
	while ($row = mysqli_fetch_array($sql)) {
	if($first){
	$data .= "[";
	$first = false;
	}else{
	$data .= ',[';
	}
	$data .= '"'.$row['id_Number'].'",';
	$data .= '"'.(empty($row['teacher_image']) ? '-' : '<img src=\'all-images/'.$row['teacher_image'].'\' style=\'width:60px;\'>' ).'",';
	$data .= '"'.$row['teacher_name'].'",';
	$data .= '"'.$row['teacher_class'].'",';
	$data .= '"'.$row['present_address'].'",';
	$data .= '"'.$row['mail'].'",';
	$data .= '"'.$row['phone_no'].'",';
	$data .= '"<a class=\'button primary rounded\' href=\'teacher.php?page=teacher-details&id='.$row['id'].'\' title=\'Details\'><span class=\'mif-eye\'></span></a>"';
	$data .=']';
	}
   $data .=']}';

   $data = json_decode($data, true);
   echo json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
?>