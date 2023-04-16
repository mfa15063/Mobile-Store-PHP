 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">
         All Mobile Brands Managment
         <a href='#' class='btn btn-primary float-right'>
             <i class='fas fa-plus'></i> Add New
         </a>
     </h1>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Brands List</h6>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>Name</th>
                             <th>Logo</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tfoot>
                         <tr>
                             <th>Name</th>
                             <th>Logo</th>
                             <th>Action</th>
                         </tr>
                     </tfoot>
                     <tbody>
                         <?php
                            $query = 'SELECT * FROM `brand`';
                            $result = mysqli_query($db, $query);

                            while ($row = mysqli_fetch_assoc($result)) {
                                extract($row);
                                echo '<tr>';
                                echo "<td>$name</td>";
                                echo "<td><img src='./assets/img/brands/$logo' alt='$name' style='width: 100px' /></td>";
                                echo "<td>
                                    <a href='#' class='btn btn-success btn-circle'>
                                        <i class='fas fa-edit'></i>
                                    </a>
                                    <a href='#' class='btn btn-danger btn-circle'>
                                        <i class='fas fa-trash'></i>
                                    </a>
                                </td>";
                                echo '</tr>';
                            }
                            ?>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </div>