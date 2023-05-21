<?php include 'assets/common/config.php' ?>
<?php include 'includes/head.php' ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/sidebar.php' ;

// $userid = $_SESSION['userid'];
// // $userid = $_SESSION['userid'];

// $check_order = $db->selectSRow(array("*"),"users","id = '$userid'");

// if($check_order['active_pakage'] != 'commission'){
//    ?>
//     <script>
//          location.replace("https://fisdemoprojects.com/ezpay/member/manage-subscription.php");
//          </script>
//    <?php 
// }
?>




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
      <?php
//   $user_id = $_SESSION['userid'];
//   $getCustomer = $db->selectSRow(array("*"),PREFIX."users","id= $user_id");
//   $status_s = $getCustomer['active_pakage'];


?>
<script>

// var status_s  ='<?php echo $status_s; ?>';
// console.log(status_s);
// if (status_s == 'commission'){
//  window.location.replace('https://fisdemoprojects.com/ezpay/member/manage-cutomers.php');
// }
// else if (status_s == 'subscription'){
//  window.location.replace('https://fisdemoprojects.com/ezpay/member/manage-items.php');
// }
// else if (status_s == 'both'){
//  window.location.replace('https://fisdemoprojects.com/ezpay/member/manage-items.php');
// }
</script>

   <section class="section manageusers">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-body">
                     <div class="d-flex justify-content-between">
                     <h4 class="title pt-3">Manage Items</h4>
                     <h5 class="card-title"> <a href="add-items.php" class="btn btn-primary btn-sm me-2">Add Item</a></h5>
                     </div>

                  <table class="table datatable" id="example">
                     <thead>
                        <tr>
                           <th scope="col">Sr.</th>
                           <!-- <th scope="col">SKU</th> -->
                           <th scope="col">Item Code</th>

                           <th scope="col">Item Name</th>
                           <!-- <th scope="col">Publisher</th> -->
                           <!-- <th scope="col">Quatity</th> -->
                           <th scope="col">Price</th>
                           <th scope="col">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php 
                        $user_id = $_SESSION['userid'];
                        $getRecord=$db->select(array("*"),PREFIX."items","user_id= $user_id","id desc");
                        if($getRecord){
                           foreach($getRecord as $key => $record){?>
                           <tr>
                           <td><?= $key?></td>
                           <td><?= $record->isbn;?></td>

                           <td><?= $record->item;?></td>
                           <td><?= $record->list_price;?></td>
                           <td>
                              <a href="edit-items.php?id=<?= base64_encode($record->id);?>" class="me-2"><i class="bi bi-pencil-square" style="color:blue;"></i></a>
                              <!-- <a id="<?= base64_encode($record->id);?>" class="openembed" href="#"> <i class="bi bi-trash" style="color:red;"></i></a> -->
                              <a onclick="return confirm('Are you sure you want to delete?');" href="delete-items.php?id=<?= base64_encode($record->id);?>"> <i class="bi bi-trash" style="color:red;"></i></a>
                           </td>
                        </tr>
                           <?php }
                        } ?>

                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>

<?php include'includes/footer.php' ?>

<div class="modal fade" id="userPassModal1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="userPassModal1" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header managemodal">
            <h5 class="modal-title" id="staticBackdropLabel">Authentication</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <form class="validatePasscode" method="post">
          <div class="modal-body py-3">

                <div class="mb-2">
                    <label for="passcode" class="form-label fs-6 fw-bolder">Enter 4 Digit Passcode to access Items</label>
                    <input maxlength="4" type="password" class="form-control" id="passcode_1" name="passcode" placeholder="Enter Passcode">
                    <input type="hidden" name="del_row_id" id="del_row_id">
                    <span class="text-danger incorrectPass" style="display: none;">Please Enter Correct Passcode</span>
                </div>

          </div>
          <div class="modal-footer">
              <!-- <button type="button" class="btn btn-secondary backbtnn" data-bs-dismiss="modal">Close</button> -->
              <a href="#" type="button" class="btn btn-primary" id="del_btn" name="check-passcode">Submit</a>
          </div>
        </form>
      </div>
   </div>
</div>

<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
       'csv', 'pdf', 'print'
        ]
    } );
});

$(document).ready(function() {
     $('.openembed').click(function(){
       var answerid = $('.openembed').attr('id');
       $('#del_row_id').val(answerid);
       $('#userPassModal1').modal('show');

     });
 });

  $('#del_btn').click(function(){
    var get_row_id =  $('#del_row_id').val();
   var passValue = $("#passcode_1").val();
       $.ajax({
        method: "POST",
        url: "ajaxfiles/passcode_auth.php",
        data: { passValue: passValue}
      })
        .done(function( result ) {
         if (result == 'Yes') {
            $('#userPassModal1').modal('hide');
            let text;
            if (confirm("Are you sure you want to delete?") == true) {
              window.location.href ='delete-items.php?id='+get_row_id ;
            } else {

            }
            //window.location.href ='manage-items.php'

         }else{
          $(".incorrectPass").show();
         }
        });

   });

</script>
<script>
    // $(document).ready(function() {
    //     var response = '';
    //     $.ajax({
    //         type: "GET",
    //         url: "ajaxCall.php",
    //         async: false,
    //         success: function(text) {
    //             response = text;
    //         }
    //     });

    // });
    </script>