<?php
  include 'include/header.php';
  include 'include/sidebar.php';
?>
        <!-- partial -->
        <div class="main-panel">Blank page

        
          <div class="content-wrapper">

          <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 text-center"> View Home page</h1><br><br>
<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">View Home 
            <a style="float:right" text-info href="home.php"><u>Home page</u></a>
        </h5>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>ID</th>
                        <th>Slogan</th>
                        <th>SloganText</th>
                        <th>Description1</th>
                        <th>Description2</th>
                        <th>Description3</th>
                        <th>Description4</th>
                        <th>Description5</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <?php
                $query = mysqli_query($con, "select * from home_setting");
                if (mysqli_affected_rows($con) > 0) {
                    $i = 1;  
                    while ($row = mysqli_fetch_array($query)) {
                        
                ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row[0]; ?></td>
                            <td><?php echo $row[1]; ?></td>
                            <td><?php echo $row[2]; ?></td>
                            <td><?php echo $row[3]; ?></td>
                            <td><?php echo $row[4]; ?></td>
                            <td><?php echo $row[5]; ?></td>
                            <td><?php echo $row[6]; ?></td>
                            <td><?php echo $row[7]; ?></td>
                            <td><a href="home.php">edit</a></td>
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
  include 'include/footer.php';
?>