<?php include'includes/head.php' ?>
<?php include'includes/header.php' ?>
<?php include'includes/sidebar.php' ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<style type="text/css">
   .dataTable-wrapper {
   overflow-x: auto !important;
   }
</style>
<main id="main" class="main">
   <!-- <div class="pagetitle">
      <h1>Manage Items</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Manage Items</li>
        </ol>
      </nav>
      </div> -->
   <section class="section manageusers">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-body">
                  <div>
                     <h4 class="title pt-3">Manage Items</h4>
                     <div class="d-flex justify-content-end">
                        <h5 class="card-title"> <a href="#" class="btn btn-primary btn-sm me-2">Upload Bulk </a></h5>
                        <h5 class="card-title"> <a href="add-items.php" class="btn btn-primary btn-sm me-2">Add Item</a></h5>
                     </div>
                  </div>
                  <table class="table datatable" id="example">
                     <thead>
                        <tr>
                           <th scope="col">Sr. #</th>
                           <th scope="col">SKU</th>
                           <th scope="col">Item Name</th>
                           <th scope="col">ISBN</th>
                           <th scope="col">Publisher</th>
                           <th scope="col">Sale Price</th>
                           <th scope="col">List Price</th>
                           <th scope="col">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>12</td>
                           <td>12</td>
                           <td>match </td>
                           <td>100.43</td>
                           <td>100.43</td>
                           <td>3748</td>
                           <td>3748</td>
                           <td>        	
                              <a href="edit-items.php" class="me-2"><i class="bi bi-pencil-square" style="color:blue;"></i></a>
                              <a onclick="return confirm('Are you sure you want to delete?');" href="#"> <i class="bi bi-trash" style="color:red;"></i></a>
                           </td>
                        </tr>
                        <tr>
                           <td>12</td>
                           <td>12</td>
                           <td>match </td>
                           <td>100.43</td>
                           <td>78.23</td>
                           <td>78.23</td>
                           <td>3748</td>
                           <td>        	
                              <a href="edit-items.php" class="me-2"><i class="bi bi-pencil-square" style="color:blue;"></i></a>
                              <a onclick="return confirm('Are you sure you want to delete?');" href="#"> <i class="bi bi-trash" style="color:red;"></i></a>
                           </td>
                        </tr>
                        <tr>
                           <td>12</td>
                           <td>12</td>
                           <td>match </td>
                           <td>100.43</td>
                           <td>78.23</td>
                           <td>78.23</td>
                           <td>3748</td>
                           <td>
                              <!-- <a href="view-items.php" class="me-2"><i class="bi bi-eye"></i></a>        	 -->
                              <a href="edit-items.php" class="me-2"><i class="bi bi-pencil-square" style="color:blue;"></i></a>
                              <a onclick="return confirm('Are you sure you want to delete?');" href="#"> <i class="bi bi-trash" style="color:red;"></i></a>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
<!-- Modal -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
   integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
   crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
   integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
   crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
   integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
   crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
   $(document).ready(function () {
       $('#example').DataTable();
   });
</script>
<?php include'includes/footer.php' ?>