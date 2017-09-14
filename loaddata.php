
<?php

function make_testData()
{

	global $db;
	
	$image_id = 'abc';
	
		
	$stmt = $db->prepare("SELECT * FROM hhm");
	$stmt->execute();
	
	$i=0;
	
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   	$data[$i]['x']=$row['x_axis'];
	$data[$i]['y']=$row['y_axis'];
	$stmt_val = $db->prepare("SELECT ttv  FROM ssl where uuid= ?");
	$stmt_val->execute([$row['unit']]);
	$data[$i]['value']= $stmt_val->fetchColumn();
	$i++;
	}
	

	$min = 0;
	$max = 30;


	$array_final= "{min: ".$min.", max: ".$max.", data: ".json_encode($data)."}";
	
	//Free used resources
	$stmt->closeCursor();
	$stmt_val->closeCursor();
	$db = null;	


	return $array_final;
}



?>
