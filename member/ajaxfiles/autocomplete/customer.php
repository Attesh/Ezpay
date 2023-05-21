<?php include '././assets/common/config.php' ?>
<?php 

$data = array();

$term = $_GET['term'];

$res = $db->select(array("*"),PREFIX."customers","(customer_name LIKE '%$term%' OR email LIKE '%$term%' OR phone LIKE '%$term%' ) AND status=0","id","id"); 

foreach($res as $row) {
    $data[] = $row->customer_name;
    $data[] = $row->email;
    $data[] = $row->address;
    $data[] = $row->phone;

    $array[] = array(
    'value' => $row->customer_name,
    'email' => $row->email,
	'address' => $row->address,
	'phone' => $row->phone,
	
);
    }
echo json_encode($array);
?>