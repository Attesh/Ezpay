<?php include 'common/config.php' ?>


<?php
  error_reporting(0);
  if( $_POST["approved"]  )
  {
   print_r('hi');
   die();
	extract($_POST);
   $ids =($_POST['ids']);
  
   $arr = array("status" => $name);

	$abc=$db->updateCondition($arr,PREFIX."users","id='$ids'");
?>
<script language="javascript">
	window.location = 'manage-member.php';
</script>

   <?php
  }
?>
<?php include 'includes/head.php' ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/sidebar.php' ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

<style type="text/css">
   #example_wrapper {
      overflow: auto;
   }
</style>
<main id="main" class="main">

   <div class="pagetitle">
      <h1>Members</h1>
      <nav>
         <ol class="breadcrumb">
            <li class="breadcrumb-item ">Members</li>
            <li class="breadcrumb-item active">Manage Members</li>
         </ol>
      </nav>
   </div>

<?php
$getCustomer = $db->select(array("*"),PREFIX."users","type=1","id DESC");
?>
      <section class="section manageusers">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-body">
                     <div class="d-flex justify-content-between">
                        <h4 class="card-title ">Manage Members</h4>
                        <!-- <h5 class="card-title"><a href="add-member.php" class="btn btn-primary btn-sm me-2">Add Member</a></h5> -->
                     </div>
                     <table class="table datatable" id="example">
                        <thead>
                           <tr>
                              <th scope="col">Sr. No</th>
                              <th scope="col">Company Name</th>
                              <th scope="col">Name</th>
                              <th scope="col">Date</th>
                              <th scope="col">Email</th>
                              <th scope="col">Phone</th>
                              <th scope="col">Subscription</th>
                              <th class="text-center" scope="col">Status</th>
                              <th scope="col">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           $k=0;
                           if($getCustomer){
                           foreach ($getCustomer as $c) {

                           ?>
                           <tr>
                              <td><?php echo ++$k?></td>
                              <td><?php echo $c->company_name?></td>
                              <td><?php echo $c->fname . "" . $c->lname?></td>
                              <td><?= date("d-m-Y", strtotime($c->created_at));?></td>
                              <td><?php echo $c->email?></td>
                              <td><?php echo $c->phone?></td>
                              <td><?php if($c->active_pakage=='pending'){
                                 echo "N/A";
                              }
                              elseif($c->active_pakage=='subscription'){
                                 echo "subscription";
                              }
                              elseif($c->active_pakage=='commission'){
                                 echo "commission";
                              }
                              elseif($c->active_pakage=='both'){
                                 echo "both";
                              }

                                 else{
                                    echo "N/A";
                                 }
                                    ?></td>
                              <td>
                                 <div class="text-center">
                                 <?php if($c->status=='pending'){?>
                                    <form action="<?php $_PHP_SELF ?>" method="POST">
                                       <input type="text" name="name"  value="approved" hidden/>
                                       <input hidden type="text" name="ids"  value="<?php echo $c->id?>"/>
                                             <h5 class="badge bg-warning text-dark">Not Approved</h5>
                                    </form>
                                                   <?php } elseif($c->status=='approved'){ ?>
                                                      <h5 class="badge bg-success text-white">Approved</h5>
                                               <?php }?>
                                 </div>
                               <!--   <div class="text-center">
                                    <a href="#" class="btn btn-xs btn-danger"><span class="">Pending</span></a>
                                 </div> -->
                              </td>
                              <td>
                                 <!-- view-customer.php?vpid=<?php echo $c->id ?> -->
                                 <a href="view-member.php?vpid=<?php echo $c->id ?>" class="me-2 text-success"><i class="bi bi-eye"></i></a>
                                 <!-- <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#updateMembers" class="me-2 text-primary" id="submit" onclick="myFunction('<?php echo $c->id ?>')"><i  class="bi bi-pencil"></i></a> -->
                                 <!-- <a onclick="deleteFunction('<?php echo $c->id ?>')" class="me-2 text-danger"><i class="bi bi-trash"></i></a> -->
                              </td>
                           </tr>
                            <?php }
                              }
                              ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </section>
</main>

<!--Section 2 For Model Starting From Here-->
<div class="modal" id="updateMembers" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-body">
    <!-- <main id="main" class="main"> -->
    <section class="section addEvent">
        <div class="row">
           <div class="col-lg-12">
            <div class="card">
               <div class="card-body">
                  <form action="#" method="post">
                  <!-- <h3 class="title mt-2">Add Match</h3> -->
                           <h4 class="title mt-3">Edit Members</h4><hr>
                           <div class="row">
                              <div class="col-lg-4">
                                 <div class="form-group search-box">
                                          <input  class="form-control" name="id" id="ids" value="" type="text" hidden>
                                          <label for="Quotation_customer_n5">Company Name</label>
                                          <input size="60" maxlength="255" autocomplete="nope" class="form-control" name="company_name" id="Quotation_cust_n2" type="text">
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="form-group search-box">
                                    <label for="Quotation_customer_n6">Customer Name</label>                                        
                                    <input size="60" maxlength="255" autocomplete="nope" class="form-control" name="customer_name" id="Quotation_cust_n3" type="text">
                                 </div>            
                              </div>
                              <div class="col-lg-4">
                                 <div class="form-group search-box">
                                          <label for="Quotation_customer_n6">Phone</label>                                             
                                          <input size="60" maxlength="255" autocomplete="nope" class="form-control" name="phone" id="Quotation_cust_n6" type="text">
                                       </div>
                              </div>
                           </div>

                           <div class="row">
                              <!-- <div class="col-lg-6 mt-2">
                                 <div class="form-group">
                                    <label for="exampleFormControlSelect1">Gender</label>
                                    <select class="form-control form-select" name="gender" placeholder="Please Select Your Gender!..." id="exampleFormControlSelect1">
                                       <option selected disabled>Select Gender</option>
                                       <option>Male</option>
                                       <option>Female</option>
                                       <option>Others</option>
                                    </select>
                                 </div>
                              </div> -->

                                    <div class="col-lg-6 mt-2">
                                 <div class="form-group search-box">
                                          <label for="Quotation_customer_n4">Email</label>                                             
                                          <input size="60" maxlength="255" autocomplete="nope" class="form-control" name="email" id="Quotation_cust_n4" type="tel">
                                       </div>
                                    </div>

                                    <div class="col-lg-6 mt-2">
                                       <div class="form-group search-box">
                                          <label for="Quotation_customer_n1">Address</label>
                                          <textarea class="form-control" id="exampleFormControlTextarea1" name="address" rows="2"></textarea>
                                       </div>
                                    </div>
                           </div>

<!--                            <div class="row">
                                    <div class="col-lg-6 mt-2">
                                       <div class="form-group search-box">
                                          <label for="Quotation_customer_n1">Address</label>
                                          <textarea class="form-control" id="exampleFormControlTextarea1" name="address" rows="2"></textarea>
                                       </div>
                                    </div>
                           </div> -->
                                    <div class="col-lg-12 mt-3">
                                 <div class="d-flex justify-content-end align-items-end">
                                    <a href="manage-member.php" class="btn btn-secondary me-2">Back</a>
                                    <button type="submit" onclick="updateFunction()" class="btn btn-primary">Updated</button>
                                 </div>
                              </div>

                           </div>
                        </div>   
                     </div>         
                    </form>
               </div>
            </div>
          </section>
      <!-- </main> -->
    </div>
    </div>
  </div>
</div>

<?php include'includes/datatable.php' ?>


<script>
  function myFunction(id) {
   $.ajax({
                url:"ajax.php",
                method:"post",
                dataType:'json',
                data:{'id':id, 'call':'fetch_edit_data'},
                success:function(data){
                  $('#ids').val(data.id);
                  $('#Quotation_cust_n2').val(data.company_name);
                  $('#Quotation_cust_n1').val(data.registration_number);
                  $('#Quotation_cust_n3').val(data.customer_name);
                  $('#Quotation_cust_n6').val(data.phone);
                  // $('#exampleFormControlSelect1').val(data.gender);
                  $('#Quotation_cust_n4').val(data.email);
                  $('#exampleFormControlTextarea1').val(data.address); 

                }
    })
   }


function updateFunction() {

   var ids = $('#ids').val();
   var company_name = $('#Quotation_cust_n2').val();
   var registration_number = $('#Quotation_cust_n1').val();
   var customer_name = $('#Quotation_cust_n3').val();
   var phone = $('#Quotation_cust_n6').val();
   // var gender = $('#exampleFormControlSelect1').val();
   var email = $('#Quotation_cust_n4').val();
   var address = $('#exampleFormControlTextarea1').val();
   $.ajax({
                url:"ajax.php",
                method:"post",
                dataType:'json',
                data:{'id':ids,'registration_number':registration_number,'company_name':company_name,'customer_name':customer_name,'phone':phone,'email':email,'address':address,'call':'update'},

                success:function(data){
                  if(data.status==1){
                     window.location.reload(true);
                  return false;
                  }
                }
    })
   }
// function refreshPage() {
//     location.reload(true);
// }

function deleteFunction(id) {
   var ids = $('#ids').val();
   if (confirm("Are you sure you want to delete this record?")){
   $.ajax({
                url:"ajax.php",
                method:"post",
                dataType:'json',
                data:{'id':id, 'call':'delete'},

                success:function(data){
                     if(data=="1"){

                         alert("Record deleted Successfully ");
                         window.location.reload(true);
                     }
                     else{
                         alert("Sorry! can't delete the Record ");
                     }
                  return false;
                  }
         })
      }
   }

   $(document).ready(function () {
       $('#example').DataTable();
   });
</script>



<!--Ajax for Add More-->
<script>
$(document).ready(function(){
$("#editCustomer").change(function(){
   alert('editCustomer');
});
});
</script>

<?php include'includes/footer.php' ?>


