<?php include 'common/config.php' ?>
<?php include 'includes/head.php' ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/sidebar.php' ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
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
$getCustomer = $db->select(array("*"),PREFIX."users");
?>
      <section class="section manageusers">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-body">
                     <div class="d-flex justify-content-between">
                        <h4 class="card-title pt-3">Manage Members</h4>
                        <h5 class="card-title"><a href="add-customer.php" class="btn btn-primary btn-sm me-2">Add Members</a></h5>
                     </div>
                     <table class="table datatable" id="example">
                        <thead>
                           <tr>
                              <th scope="col">ISBN</th>
                              <th scope="col">Members Name</th>
                              <th scope="col">Email</th>
                              <th scope="col">Gender</th>
                              <th scope="col">Address</th>
                              <th scope="col">Phone</th>
                              <th scope="col">Status</th>
                              <th scope="col">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                              <?php
                           if($getCustomer){
                           foreach ($getCustomer as $c) {
                            $k=0;
                              ?>
                           <tr>
                              <td><?php echo ++$k?></td>
                              <td><?php echo $c->customer_name?></td>
                              <td><?php echo $c->email?></td>
                              <td><?php echo $c->gender?></td>
                              <td><?php echo $c->address?></td>
                              <td><?php echo $c->phone?></td>
                              <td>
                                 <div class="text-center">
                                    <a href="#" class="btn btn-xs btn-warning"><span class="">Active</span></a>
                                 </div>
                              </td>
                              <td>
                                 <!-- view-customer.php?vpid=<?php echo $c->id ?> -->
                                 <a href="view-customer.php?vpid=<?php echo $c->id ?>" class="me-2 text-success"><i class="bi bi-eye"></i></a>
                                 <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#updateMembers" class="me-2 text-primary" id="submit" onclick="myFunction('<?php echo $c->id ?>')"><i  class="bi bi-pencil"></i></a>
                                 <a onclick="deleteFunction('<?php echo $c->id ?>')" class="me-2 text-danger"><i class="bi bi-trash"></i></a>
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



<!--Edit Model Starting From Here-->
<div class="modal" id="updateMembers" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-body p-0"> 

            <div class="card mb-0" style="background-color: transparent;">
               <div class="card-body" style="background-color: transparent;">
                  <!-- <h3 class="title mt-2">Add Match</h3> -->
                  <h4 class="card-title">Edit Members</h4><hr>
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="form-group search-box">
                           <input  class="form-control" name="id" id="ids" value="" type="text" hidden>
                           <label for="Quotation_customer_n5">ISBN</label>
                           <input size="60" maxlength="255" autocomplete="nope" class="form-control" name="isbn"  id="Quotation_cust_n5" type="text">
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="form-group search-box">
                           <label for="Quotation_customer_n6">Members Name</label>                                        
                           <input size="60" maxlength="255" autocomplete="nope" class="form-control" name="customer_name" id="Quotation_cust_n3" type="text">
                        </div>            
                     </div>
                     <div class="col-lg-4">
                        <div class="form-group search-box">
                           <label for="Quotation_customer_n6">Phone</label>                                             
                           <input size="60" maxlength="255" autocomplete="nope" class="form-control" name="phone"  id="Quotation_cust_n6" type="text">
                        </div>
                     </div>
                  </div>

                  <div class="row">
                     <div class="col-lg-6 mt-2">
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Gender</label>
                           <select class="form-control form-select" name="gender" placeholder="Please Select Your Gender!..." id="exampleFormControlSelect1">
                              <option selected disabled>Select Gender</option>
                              <option>Male</option>
                              <option>Female</option>
                              <option>Others</option>
                           </select>
                        </div>
                     </div>

                     <div class="col-lg-6 mt-2">
                        <div class="form-group search-box">
                           <label for="Quotation_customer_n4">Email</label>
                           <input size="60" maxlength="255" autocomplete="nope" class="form-control" name="email" id="Quotation_cust_n4" type="tel">
                        </div>
                     </div>
                  </div>

                  <div class="row">
                     <div class="col-lg-6 mt-2">
                        <div class="form-group search-box">
                           <label for="Quotation_customer_n1">Address</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" name="address" rows="2"></textarea>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12 mt-3">
                     <div class="d-flex justify-content-end align-items-end">
                        <a href="manage-customer.php" class="btn btn-secondary me-2">Back</a>
                        <button type="button" onclick="updateFunction()"  class="btn btn-primary">Updated</button>
                     </div>
                  </div>
               </div>
            </div>   

         </div>
      </div>
   </div>
</div>




<?php include'includes/datatable.php' ?>
<script>
   $(document).ready(function () {
       $('#example').DataTable();
   });
</script>
<?php include'includes/footer.php' ?>

<script>
function myFunction(id) {
   $.ajax({
                url:"ajax.php",
                method:"post",
                dataType:'json',
                data:{'id':id, 'call':'fetch_edit_data'},
                success:function(data){
                  $('#ids').val(data.id);
                  $('#Quotation_cust_n5').val(data.isbn);
                  $('#Quotation_cust_n3').val(data.customer_name);
                  $('#Quotation_cust_n6').val(data.phone);
                  $('#exampleFormControlSelect1').val(data.gender);
                  $('#Quotation_cust_n4').val(data.email);
                  $('#exampleFormControlTextarea1').val(data.address); 

                }
    })
   }

function updateFunction() {

   var ids = $('#ids').val();
   var isbn = $('#Quotation_cust_n5').val();
   var customer_name = $('#Quotation_cust_n3').val();
   var phone = $('#Quotation_cust_n6').val();
   var gender = $('#exampleFormControlSelect1').val();
   var email = $('#Quotation_cust_n4').val();
   var address = $('#exampleFormControlTextarea1').val();
   $.ajax({
                url:"ajax.php",
                method:"post",
                dataType:'json',
                data:{'id':ids,'isbn':isbn,'customer_name':customer_name,'phone':phone,'gender':gender,'email':email,'address':address,'call':'update'},

                success:function(data){
                  if(data.status==1){
                     window.location.reload(true);
                  // $('#updateMembers').hide('modal');

                  // setInterval('refreshPage()', 1);
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

// function viewFunction(id) {
// alert(id);
//    var ids = $('#ids').val();
//    var isbn = $('#Quotation_cust_n5').val();
//    var customer_name = $('#Quotation_cust_n3').val();
//    var phone = $('#Quotation_cust_n6').val();
//    var gender = $('#exampleFormControlSelect1').val();
//    var email = $('#Quotation_cust_n4').val();
//    var address = $('#exampleFormControlTextarea1').val();
//    $.ajax({
//                 url:"ajax.php ",
//                 method:"post",
//                 data:{'id':id, 'call': 'view'},
//                 success:function(data){
//                   if(data.status==1){
   
//                   // setInterval('refreshPage()', 1);
//                   return false;
//                   }
//                 }
//     })
//    }

</script>

