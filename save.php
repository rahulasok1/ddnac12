<?php

$jsonData = file_get_contents('php://input');

$data_back = json_decode($jsonData);
$unit = $data_back->{"sensorid"};
$x_axis = $data_back->{"x"};
$y_axis = $data_back->{"y"};
$image_id = $data_back->{"imageid"};

try {
	
	$sql_hm = "INSERT INTO hhm (uid, image_id, x_axis, y_axis) VALUES ('$unit', '$image_id', $x_axis, $y_axis)";
    
    $db->exec($sql_hm);
    echo "Coordinates recorded for ".$unit; 
    
	}
	
catch(PDOException $e)
    {

	echo "No data ";

   }

$db = null;



?>