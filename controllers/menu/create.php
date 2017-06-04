<?php 
	require_once('app/lib/change_name.php');
 	require_once('models/m_menus.php');
	$id= "";
    $name = $_POST['name'];
    $alias = changeTitle($name);
    $sort_oder = $_POST['sort_oder'];
    $id_parent = $_POST['id_parent'];
    $created_at = gmdate('Y/m/d H:i:s',time()); 
    $update_at = '0000-00-00 00:00:00';
    $menus =  new M_menus();
    $same = $menus->same_name($name);
    if($same->name != '') 
    {
        setcookie('same', 'name already exists', time() + 1);
        header('location:admin.html?page=create_menu');
    }
    else
    {
        setcookie('created', 'Created successfully', time() + 1);
        $menus->create_menus($id,$name,$alias,$id_parent,$sort_oder,$created_at,$update_at);
        header('location:admin.html?page=list_menu');
    }
    
?>