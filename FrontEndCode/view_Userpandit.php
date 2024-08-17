<?php
include 'includefront/header.php';
 include '../Admin_Pandit/include/connection.php';
?>
        <!-- partial -->
        <div class="main-panel">Blank page

        
          <div class="content-wrapper">

          <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 text-center"> View Pandit Tables</h1><br><br>
<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">View User Pandit 
            <a style="float:right" text-info href="UserPandit.php"><u>Add User Pandit</u></a>
        </h5>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Panditjii ID</th>
                        <th>Panditjii Name</th>
                        
                        <th>Panditjii Photo</th>
                        <th>Panditjii Phoneno</th>
                        <th>Panditjii experties</th>
                        <th>Panditjii charges</th>
                       

                        
                        <!-- <th>Category Puja Code</th> -->
                        <th>Action</th>

                    </tr>
                </thead>
                <?php
                $query = mysqli_query($con, "select * from User_Panditjii");
                if (mysqli_affected_rows($con) > 0) {
                    $i = 1;  
                    while ($row = mysqli_fetch_array($query)) {
                        
                ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row[0]; ?></td>
                            <td><?php echo $row[1]; ?></td>
                            <td><img src="<?php echo $row[2];?>"class="img-thumbnail" style="width:80px;height:50px;"></td>
                            <td><?php echo $row[3]; ?></td>
                            <td><?php echo $row[4]; ?></td>
                            <td><?php echo $row[5]; ?></td>
                            <!-- <td><?php echo $row[6]; ?></td> -->
                            <td><a href="Edit_PanditCategory.php?Catid=<?php echo $row[0];?>">edit</a> | <a href="CRUD_UserPanditCategory.php?Catid=<?php echo $row[0];?>">Delete</a></td>
                        </tr>
                <?php
                        $i++;
                    }
                }
                ?>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
          </div>
          <!-- content-wrapper ends -->
         
          <?php
  include 'includefront/footer.php';
?>