<?php 
  include('../../../models/m_users.php');
  $users_cursor =  new M_users();
  $users=$users_cursor->read_users();
?>

<div class="right_col" role="main">
  <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Cates <small>List</small></h3>
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
            <div class="x_content">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Password</th>
                    <th>email</th>
                    <th>phone_number</th>
                    <th>lever</th>
                    <th>Created_at</th>
                    <th>Update_at</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                <?php  
                  foreach ($users as $user) 
                  {
                ?>
                  <td><?php echo $user->name; ?></td>
                  <td><?php echo $user->password; ?></td>
                  <td><?php echo $user->email; ?></td>
                  <td><?php echo $user->phone_number; ?></td>
                  <td>
                    <?php  
                      if ($user->lever == 1) {
                        echo "Admin";
                      }
                      if ($user->lever == 0) {
                        echo "Collaborators";
                      }
                    ?>

                  </td>
                  <td><?php echo $user->created_at; ?></td>
                  <td><?php echo $user->update_at ?></td>
                  <td>
                    <a href="index.php?page=edit_users&id=<?php echo $user->id ?>" class="btn btn-sm btn-default">
                      <span class="glyphicon glyphicon-edit" role="button" ></span>
                    </a>
                    <a href="index.php?page=delete_users&id=<?php echo $user->id ?>" class="btn btn-sm btn-default">
                      <span class="glyphicon glyphicon-trash" role="button" ></span>
                    </a>                    
                  </td>
                </tr>
              <?php 
                }
              ?>
              </tbody>
              
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
