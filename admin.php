  <?php
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

    ob_start();
    session_start();
    date_default_timezone_set('Asia/Ho_Chi_Minh');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title>Admin-Form</title>

     <!-- Bootstrap -->
    <link href="public/admin_asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="public/admin_asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="public/admin_asset/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="public/admin_asset/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="public/admin_asset/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="public/admin_asset/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="public/admin_asset/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="public/admin_asset/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="public/admin_asset/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="public/admin_asset/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Admin-Form</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="public/admin_asset/images/ngoc.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['name']; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->

            <?php 
              if (isset($_SESSION['lever'])) {
                if ($_SESSION['lever'] == 1)  {
                  include('views/admin/layouts/slidebar_menu.php');
                }
                elseif ($_SESSION['lever'] == 0) {
                  include('views/admin/layouts/slidebar_menu_2.php');
                }
              }
              else
              {
                header('location:views/admin/login.php');
              }
            ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <?php 
              include('views/admin/layouts/menu_footer.php');
            ?>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <?php 
          include('views/admin/layouts/top.php');
        ?>
        <!-- /top navigation -->

        <!-- page content -->

        <?php 
          if(isset($_GET['page']))
            {
              switch($_GET["page"])
              {
                // cates
                case 'create_cates':
                include_once('views/admin/cates/create.php');
                break;
                case 'store_cates':
                include_once('controllers/cates/create.php');
                break;
                case 'list_cates':
                include_once('views/admin/cates/list.php');
                break;
                case 'edit_cates':
                include_once('views/admin/cates/edit.php');
                break;
                case 'update_cates':
                include_once('controllers/cates/update.php');
                break;
                case 'delete_cates':
                include_once('controllers/cates/delete.php');
                break;

                //menu
                case 'create_menu':
                include_once('views/admin/menus/create.php');
                break;
                case 'store_menus':
                include_once('controllers/menu/create.php');
                break;
                case 'list_menu':
                include_once('views/admin/menus/list.php');
                break;
                case 'edit_menus':
                include_once('views/admin/menus/edit.php');
                break;
                case 'update_menus':
                include_once('controllers/menu/update.php');
                break;
                case 'delete_menus':
                include_once('controllers/menu/delete.php');
                break;

                // list_foods
                case 'create_list_foods':
                include_once('views/admin/list_foods/create.php');
                break;
                case 'store_list_foods':
                include_once('controllers/list_foods/create.php');
                break;
                case 'list_foods':
                include_once('views/admin/list_foods/list.php');
                break;
                case 'edit_list_foods':
                include_once('views/admin/list_foods/edit.php');
                break;
                case 'update_list_foods':
                include_once('controllers/list_foods/update.php');
                break;
                case 'delete_list_foods':
                include_once('controllers/list_foods/delete.php');
                break;

                //order
                case 'list_order':
                include_once('views/admin/order/list.php');
                break;
                case 'create_order':
                include_once('views/admin/order/create.php');
                break;
                case 'store_order':
                include_once('controllers/order/create_admin.php');
                break;
                case 'edit_orders':
                include_once('views/admin/order/update.php');
                break;
                case 'update_orders':
                include_once('controllers/order/update_admin.php');
                break;
                case 'delete_orders':
                include_once('controllers/order/delete.php');
                break;
                case 'store_order_uses':
                include_once('controllers/order/create.php');
                break;

                //users
                case 'create_users':
                include_once('views/admin/users/create.php');
                break;
                case 'store_users':
                include_once('controllers/users/create.php');
                break;
                case 'list_users':
                include_once('views/admin/users/list.php');
                break;
                case 'edit_users':
                include_once('views/admin/users/update.php');
                break;
                case 'update_users':
                include_once('controllers/users/update.php');
                break;
                case 'delete_users':
                include_once('controllers/users/delete.php');
                break;
                default:

            }
          }
          else
          {
            include_once('views/admin/layouts/dashboard.php');   
          }
          

        ?>
        
        <!-- /page content -->

        <!-- footer content -->
        <?php 
          include('views/admin/layouts/footer.php');
        ?>
        <!-- /footer content -->
      </div>
    </div>

     <!-- jQuery -->
    <script src="public/admin_asset/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="public/admin_asset/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="public/admin_asset/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="public/admin_asset/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="public/admin_asset/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="public/admin_asset/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="public/admin_asset/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="public/admin_asset/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="public/admin_asset/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="public/admin_asset/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="public/admin_asset/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="public/admin_asset/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="public/admin_asset/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="public/admin_asset/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="public/admin_asset/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="public/admin_asset/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="public/admin_asset/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="public/admin_asset/vendors/jszip/dist/jszip.min.js"></script>
    <script src="public/admin_asset/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="public/admin_asset/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="public/admin_asset/build/js/custom.min.js"></script>

    <!-- ckeditor -->
    <script type="text/javascript" language="javascript" src="public/admin_asset/ckeditor/ckeditor.js" ></script>
  </body>
</html>
