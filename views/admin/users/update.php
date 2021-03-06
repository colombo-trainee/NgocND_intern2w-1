<?php  
  include('models/m_users.php');
  $id = $_GET['id'];
  $users_cursor = new M_users;
  $users= $users_cursor->read_id_users($id);
?>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>4 or more character</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>User <small>Update new a acount for user</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <?php  
              if (isset($_COOKIE['same']))
              {
              ?>
                <div class="alert alert-danger"><?php echo $_COOKIE['same']; ?></div>
              <?php  
              }
            ?>
          <div class="x_content">
            <br />

            <!-- form action -->
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post" action="admin.html?page=update_users">
            <?php 
              foreach ($users as $user) {
            ?>
              <!-- name -->
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Name<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $user->name; ?>" >
                </div>
              </div>
              <!--/name -->
              <!-- password -->
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Password<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="password" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $user->password; ?>" >
                </div>
              </div>
              <!--/password -->

              <!-- id -->
              <div class="form-group" style="display: none">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Id<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="id" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $user->id; ?>" >
                </div>
              </div>
              <!--/id -->
				      <!-- email local -->
              <div class="form-group" style="display: none;">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Name<span class="required"  >*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="emaillocal" required="required" class="form-control col-md-7 col-xs-12"  pattern=".{4,50}" value="<?php echo $user->email; ?>" >
                </div>
              </div>
              <!--/email local -->
			        <!--email -->
              	<div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Email<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="email" id="first-name" name="email" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $user->email; ?>">
                </div>
              	</div>
              <!--/email -->
				
              <!--phone_number -->
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Phone_number
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="number" id="first-name" name="phone_number" class="form-control col-md-7 col-xs-12" value="<?php echo $user->phone_number; ?>">
                </div>
              </div>
              <!--/phone_number -->

              <!--lever -->
              	<div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" >Lever<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <div id="hot" class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="lever" value="1"
							<?php 
								if ($user->lever == 1) {
									echo "checked='checked'";
								}
							?>
		
                        > &nbsp; Admin
                    </label>
                    <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="lever" value="0"
						<?php  
							if ($user->lever == 0) {
								echo "checked='checked'";
							}
						?>
		
                        > Collaborators
                    </label>
                  </div>
                  </div>
                </div
              <!--/lever -->
               
              <?php  
                }
              ?>

              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="button"><a href="admin.html?page=list_users" style="color: white">Cancel</a></button>
		              <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" name="create" class="btn btn-success">Submit</button>
                </div>
              </div>
            </form>
            <!-- /form action -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  