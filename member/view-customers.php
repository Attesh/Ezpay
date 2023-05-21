<?php include 'includes/head.php' ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/sidebar.php' ?>
<?php include 'assets/common/config.php' ?>

<?php 
$id =$_GET['vpid'];
   extract($_POST);
$getCustomer = $db->selectSRow(array("*"),PREFIX."users", "id=$id");
?>
<main id="main" class="main">
   <div class="pagetitle">
      <h1>Customers</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="manage-member.php">Customers</a></li>
          <li class="breadcrumb-item active">View Customers </li>
        </ol>
      </nav>
      </div>

      <?php 

$getCustomer = $db->selectSRow(array("*"),PREFIX."users", "id=$id");

?>

      <section class="section manageusers">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-body">
                     <div class="d-flex justify-content-between">
                        <h4 class="card-title ">Customer Detail</h4>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <table class="table">
                              <tbody>
                                 <tr style="background: #b3b3ff;">
                                    <th colspan="3">Personal Information</th>
                                 </tr>

                                 <tr>
                                    <th>Name </th>
                                    <td> <?php echo $getCustomer['fname'];?></td>
                                 </tr>

                                 <tr>
                                    <th>Registration No. </th>
                                    <td>#######</td>
                                 </tr>
                                 <tr>
                                    <th>Company Name </th>
                                    <td>#######</td>
                                 </tr>
                                 
                                 <tr>
                                    <th>Email </th>
                                    <td><?php echo $getCustomer['email'];?></td>
                                 </tr>

                                 <tr>
                                    <th>Phone </th>
                                    <td><?php echo $getCustomer['number'];?></td>
                                 </tr>

                                 <tr>
                                    <th>No. of Invoices </th>
                                    <td>#######</td>
                                 </tr>


                              </tbody>
                           </table>
                        
                        </div>

                        <div class="col-lg-12 mt-3">
                              <div class="d-flex justify-content-end align-items-end">
                                 <a href="manage-cutomers.php" class="btn btn-secondary me-2">Back</a>
                              </div>
                           </div>
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
      </section>
</main>

<?php include'includes/datatable.php' ?>
<script>
   $(document).ready(function () {
       $('#example').DataTable();
   });
</script>
<?php include'includes/footer.php' ?>