<?php 
	require_once('app/lib/change_name.php');
 	require_once('models/m_orders.php');
	$id= "";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = date('Y-m-d',strtotime($_POST['date']));
    $party_number = $_POST['party_number'];
    $created_at = date('Y/m/d H:i:s',time()); 
    $update_at = '0000-00-00 00:00:00';
    setcookie('created', 'created successfully', time() + 1);
    $orders =  new M_orders;
    $orders->create_orders($id,$name,$email,$date,$party_number,$created_at,$update_at);
    header('location:admin.html?page=list_order');
?>  