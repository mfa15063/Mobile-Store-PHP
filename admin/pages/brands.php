 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">
         All Mobile Brands Managment
         <a href='#' class='btn btn-primary float-right' data-bs-toggle="modal" data-bs-target="#add-brand">
             <i class='fas fa-plus'></i> Add New
         </a>
     </h1>

     <!-- Modal -->
     <div class="modal fade" id="add-brand" tabindex="-1" aria-labelledby="add-brand-heading" aria-hidden="true">
         <div class="modal-dialog modal-fullscreen-sm-down">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="add-brand-heading">Modal title</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     <form class="row g-3">


                         <div class="col-12">
                             <label for="inputAddress" class="form-label">Name</label>
                             <input type="text" class="form-control" id="inputAddress" placeholder="Enter Name">
                         </div>
                         <div class="col-12">
                             <label for="inputAddress" class="form-label">Logo</label>
                             <input type="text" class="form-control" id="inputAddress" placeholder="">
                         </div>

                         <div class="col-12">
                             <div class="form-check">
                                 <input class="form-check-input" type="checkbox" id="gridCheck">
                                 <label class="form-check-label" for="gridCheck">
                                     Check me out
                                 </label>
                             </div>
                         </div>
                         <div class="col-12">
                             <button type="submit" class="btn btn-primary">Sign in</button>
                         </div>
                     </form>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary">Save changes</button>
                 </div>
             </div>
         </div>
     </div>
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

                            while ($row = mysqli_fetch_assoc($result)) :
                                extract($row);
                                echo '<tr>';
                                echo "<td>$name</td>";
                                echo "<td><img src='./assets/img/brands/$logo' alt='$name' style='width: 100px' /></td>";
                                echo "<td>
                                    <button type='button' data-bs-toggle='modal' data-bs-target='#update-brand$brand_id' class='btn btn-success btn-circle'>
                                        <i class='fas fa-edit'></i>
                                    </button>
                                    <a href='#' class='btn btn-danger btn-circle'>
                                        <i class='fas fa-trash'></i>
                                    </a>
                                </td>";
                                echo '</tr>';
                            ?>
                             <!-- Modal -->
                             <div class="modal fade" id="update-brand<?= $brand_id ?>" tabindex="-1" aria-labelledby="update-brand-heading<?= $brand_id ?>" aria-hidden="true">
                                 <div class="modal-dialog modal-fullscreen-sm-down">
                                     <div class="modal-content">
                                         <div class="modal-header">
                                             <h5 class="modal-title" id="update-brand-heading<?= $brand_id ?>"><?= $brand_id ?></h5>
                                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                         </div>
                                         <div class="modal-body">
                                             <form class="row g-3">


                                                 <div class="col-12">
                                                     <label for="inputAddress" class="form-label">Name</label>
                                                     <input type="text" class="form-control" id="inputAddress" placeholder="Enter Name">
                                                 </div>
                                                 <div class="col-12">
                                                     <label for="inputAddress" class="form-label">Logo</label>
                                                     <input type="text" class="form-control" id="inputAddress" placeholder="">
                                                 </div>

                                                 <div class="col-12">
                                                     <div class="form-check">
                                                         <input class="form-check-input" type="checkbox" id="gridCheck">
                                                         <label class="form-check-label" for="gridCheck">
                                                             Check me out
                                                         </label>
                                                     </div>
                                                 </div>
                                                 <div class="col-12">
                                                     <button type="submit" class="btn btn-primary">Sign in</button>
                                                 </div>
                                             </form>
                                         </div>
                                         <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                             <button type="button" class="btn btn-primary">Save changes</button>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         <?php endwhile ?>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </div>