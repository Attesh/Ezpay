<?php 

// echo "Hi,  Your comment has been received successfully." . "";
// echo "Here's the comment what you've entered: ";


include '../assets/common/config.php';
$searchname =$_GET['search_isbn'];
// echo $searchname;
$check_isbn = $db->selectSROW(array("*"),"items","isbn = '$searchname'");
// print_r($check_isbn);
// echo $check_isbn['isbn'];

$item_detail = array(

			"isbn"=>$check_isbn['isbn'],
			"publisher"=>$check_isbn['publisher'],
			"list_price"=>$check_isbn['sale_price'],
			"item"=>$check_isbn['item'],
			"sale_price"=>$check_isbn['list_price'],

			);
echo json_encode($item_detail);

?>


