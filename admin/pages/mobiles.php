 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">
         All Mobile Managment
         <a href='#' class='btn btn-primary float-right' data-bs-toggle="modal" data-bs-target="#exampleModal">
             <i class='fas fa-plus'></i> Add New
         </a>
     </h1>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">OS</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Brand</label>
    <input type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Storage</label>
    <input type="text" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label"> Ram</label>
    <input type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Processor</label>
    <input type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Sim Slot</label>
    <input type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Band</label>
    <input type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Resolution</label>
    <input type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Size</label>
    <input type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Weight</label>
    <input type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Color</label>
    <input type="text" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label"> Fron Camera</label>
    <input type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Back Camera</label>
    <input type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Price</label>
    <input type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Images</label>
    <input type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Battery</label>
    <input type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Additional Features</label>
    <input type="text" class="form-control" id="inputEmail4">
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
             <h6 class="m-0 font-weight-bold text-primary">Monile List</h6>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>Name</th>
                             <th>Brand</th>
                             <th>OS</th>
                             <th>Ram</th>
                             <th>Price</th>
                             <th>Battery</th>
                             <th>Actions</th>
                         </tr>
                     </thead>
                     <tfoot>
                         <tr>
                            <th>Name</th>
                             <th>Brand</th>
                             <th>OS</th>
                             <th>Ram</th>
                             <th>Price</th>
                             <th>Battery</th>
                             <th>Actions</th>
                         </tr>
                     </tfoot>
                     <tbody>
                         <?php
                            $query = 'SELECT * FROM `mobiles`' ;
                            $result = mysqli_query($db, $query);

                            while ($row = mysqli_fetch_assoc($result)) :
                                extract($row);
                                echo '<tr>';
                                echo "<td>$name</td>";
                                echo "<td>$brand</td>";
                                echo "<td>$os</td>";
                                echo "<td>$ram</td>";
                                echo "<td>$price</td>";
                                echo "<td>$battery</td>";
                                echo "<td>
                                    <button type='button' data-bs-toggle='modal' data-bs-target='#update-mobiles$mobile_id' class='btn btn-success btn-circle'>
                                        <i class='fas fa-edit'></i>
                                    </button>
                                    <a href='#' class='btn btn-danger btn-circle'>
                                        <i class='fas fa-trash'></i>
                                    </a>
                                </td>";
                                echo '</tr>';
                                ?>
                                <div class="modal fade" id="update-mobiles<?= $mobile_id ?>" tabindex="-1" aria-labelledby="update-mobiles-heading<?= $mobile_id ?>" aria-hidden="true">
                                <div class="modal-dialog modal-fullscreen-sm-down">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="update-mobiles-heading<?= $mobile_id ?>"><?= $mobile_id ?></h5>
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