<?php include'common/config.php' ?>
<?php include'includes/head.php' ?>
<?php include'includes/header.php' ?>
<?php include'includes/sidebar.php' ?>

<?php 
$id =$_GET['vpid'];
if(isset($_POST['update_notes'])){
   extract($_POST);
            $arr=array("description"=>$description);
            $result=$db->updateCondition($arr, PREFIX. "notes","id='$note_id'");
            ?>
            <script language="javascript">window.location='view-member.php?vpid=<?php echo $_GET['vpid']; ?>';
</script>
<?php
} 
if(isset($_POST['add_notes'])){
   extract($_POST);
            $arr=array("user_id"=>$id,"description"=>$description);
            $result=$db->insert($arr, PREFIX. "notes");
            ?>
            <script language="javascript">window.location='view-member.php?vpid=<?php echo $_GET['vpid']; ?>';
</script>
<?php
} 
if(isset($_POST['upload_document'])){
   extract($_POST);
   
   $filename = $_FILES['attachment']['name'];
            move_uploaded_file($_FILES['attachment']['tmp_name'],'uploads/'.$filename);
            $arr=array("user_id"=>$id,"title"=>$document_title,"name"=>$filename);
            $result=$db->insert($arr, PREFIX. "documents");
            ?>
            <script language="javascript">window.location='view-member.php?vpid=<?php echo $_GET['vpid']; ?>';
</script>
<?php 
}
   extract($_POST);
$getNotes=$db->select(array("*"),PREFIX."notes","user_id='$id'");
$getCustomer = $db->selectSRow(array("*"),PREFIX."users", "id=$id");
$name=$getCustomer['fname'] . " " . $getCustomer['lname'];
$getEmail=$getCustomer['email'];
$password=rand(1000000,10000000);
$getTransactions = $db->selectSRow(array("*"),PREFIX."transactions", "user_id=$id");
$getSubscriptions = $db->selectSRow(array("*"),PREFIX."subscription", "user_id=$id");
$getInvoices = $db->select(array("*"),PREFIX."invoices", "user_id=$id");
$getVAT=$db->selectSRow(array("*"),PREFIX."general_settings");
$vat=$getVAT['vat'];
$commission=$getVAT['ezpay_commission'];
if(isset($_POST['status_update'])){
   extract($_POST);
   $id =$_GET['vpid'];
   $arr = array('active_pakage'=>$active_pakage,'status'=>$status);
   $abc=$db->updateCondition($arr,PREFIX."users","id='$id'");
   if($abc){
  
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
/* Code by David McKeown - craftedbydavid.com */
/* Editable entries are bellow */
//   $send_to = $getEmail;\
// $f_email="hammad@friendsitsolutions.com";
// $f_email='huzaifa@friendsitsolutions.com';
$f_email='info@ezpay.com';
$send_to = $getEmail;



/*Be careful when editing below this line */

// $f_name = $_POST["name"];
// $getEmail = $_POST["email"];
// $f_message = $_POST["message"];
$from_ip = $_SERVER['REMOTE_ADDR'];
$from_browser = $_SERVER['HTTP_USER_AGENT'];

function cleanupentries($entry) {
   $entry = trim($entry);
   $entry = stripslashes($entry);
   $entry = htmlspecialchars($entry);

   return $entry;
}
$message = "Dear" .trim($name).",

We are pleased to inform you that your request to register on EZPay has been approved.

You can login on your member portal using the following credentials:

Link: https://fisdemoprojects.com/ezpay/
Username: $send_to 
Password:  $password 

You need to subscribe to your subscription plan in order to use our services.

Regards
EZPay
Webmaster";
$send_subject= "Request Approved";

$headers = "From: " . $f_email . "\r\n" .
    "Reply-To: " . $f_email . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

if (!$f_email) {
   echo "no email";
   exit;
}else{
  
   if (filter_var($f_email, FILTER_VALIDATE_EMAIL)) {
      mail($send_to,$send_subject, $message, $headers);
      $id =$_GET['vpid'];
      $arr = array('password'=>password_hash($password, PASSWORD_DEFAULT));
      $abc=$db->updateCondition($arr,PREFIX."users","id='$id'");
   }else{
    $_SESSION['status'] = "Form has been submitted successfully";
      echo "invalid email";
      exit;
   }
}
}
?>
<script language="javascript">window.location='view-member.php?vpid=<?php echo $_GET['vpid']; ?>';
</script>
   <?php }
?>
<main id="main" class="main">
   <div class="pagetitle">
      <h1>Members</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="manage-member.php">Members</a></li>
          <li class="breadcrumb-item active">View Members </li>
        </ol>
      </nav>
      </div>

      <section class="section manageusers">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">

      <ul class="nav nav-tabs nav-tabs-bordered profilenav">
         <li class="nav-item">
            <button class="nav-link profilenavlinks active w-100" data-bs-toggle="tab" data-bs-target="#personal">Personal Information</button>
         </li>

         <li class="nav-item">
            <button class="nav-link profilenavlinks w-100" data-bs-toggle="tab" data-bs-target="#note">Notes</button>
         </li>

         <li class="nav-item">
            <button class="nav-link profilenavlinks w-100" data-bs-toggle="tab" data-bs-target="#upload">Upload Documents</button>
         </li>
      </ul>

      <div class="tab-content">
         <div class="tab-pane fade show active profile-edit" id="personal">
            <div class="card-body">

                    <!--  <div class="d-flex justify-content-between">
                        <h4 class="card-title pt-0">Transaction Detail</h4>
                     </div> -->

                     <div class="row d-flex justify-content-between">

                        <div class="col-lg-6">
                           <div class="personaldiv">
                           <?php if($getCustomer['status']=='pending'){?>   
                           <h5 class="badge bg-warning text-dark float-end">Not Approved</h5>
                           <?php } elseif($getCustomer['status']=='approved'){ ?>
                              <h5 class="badge bg-success float-end">Approved</h5>
                              <?php }?>
                           <p class="m-1"><strong>Company Name: </strong><?php echo $getCustomer['company_name'];?></p>
                           <p class="m-1"><strong>Name: </strong><?php echo $getCustomer['fname'] . " ". $getCustomer['lname'];?></p>
                           <p class="m-1"><strong>Phone: </strong><?php echo $getCustomer['phone'];?></p>
                           <p class="m-1"><strong>Email: </strong><?php echo $getCustomer['email'];?></p>
                           <p class="m-1"><strong>Request Date: </strong><?= date("d-m-Y", strtotime($getCustomer['created_at']));?></p>
                           <!-- <p class="m-1"><strong>Address: </strong><?php echo $getCustomer['address'];?></p> -->
                           </div>

                           <div class="d-flex justify-content-end mt-3">
                               <?php if($getCustomer['status']=='pending'){?>
                              <form method = "post" action="">
                                 <h5 class="card-title pt-0"><button type="button" class=" btn btn-xs btn btn-success" data-bs-toggle="modal" data-bs-target="#approvedModal">Approve Now</button></h5>
                              </form>
                              <?php }?>
                           </div>
                        </div>
                        <?php if($getCustomer['status']=='approved'){?>   
                        <div class="col-lg-6">
                           <div class="col-md-12 d-flex mb-3 justify-content-start">
                              <button type="button" class="btn btn-xs btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#EditRecord">Edit Record</button>
                              <a class="btn btn-xs btn btn-danger me-2" onclick="return confirm('Are you sure you want to delete?');" href="delete-member.php?vpid=<?php echo $id;?>">Delete Record</a>
                              <button type="button" class="btn btn-xs btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#ChangePassword">Change Password</button>
                           </div>

                           <div class="personaldiv">
                              <?php if($getCustomer['active_pakage']=='subscription'){?>
                              <p class="m-1"><strong>Membership: </strong>Subscription</p>
                              <?php } elseif($getCustomer['active_pakage']=='commission') { ?>
                              <p class="m-1"><strong>Membership: </strong>Commission</p>
                              <?php } elseif($getCustomer['active_pakage']=='both') { ?>
                              <p class="m-1"><strong>Membership: </strong>Commision + Subscription</p>
                              <?php } else{ ?>
                              <p class="m-1"><strong>Membership: </strong>N/A</p>
                              <?php } ?>
                              <?php if($getSubscriptions){ ?>
                              <p class="m-1"><strong>Subscription Date: </strong><?= date("d-m-Y", strtotime($getSubscriptions['start_date']));?></p>
                              <p class="m-1"><strong>Expiry Date: </strong><?= date("d-m-Y", strtotime($getSubscriptions['end_date']));?></p>
                              <?php } else{ ?>
                                 <p class="m-1"><strong>Subscription Date: </strong>N/A</p>
                              <p class="m-1"><strong>Expiry Date: </strong>N/A</p>  
                             <?php }
                                 ?>
                           </div>
                        

                        </div>
                     <?php } ?>
                        


                     </div>

                      <div class="row d-flex justify-content-between">


                        <!-- <div class="col-lg-12">
                           <table class="table">
                              <tbody>
                                 <tr style="border: 1px solid #c5c5bf;">
                                    <th>Expiray Date:</th>
                                    <td><?=$getSubscriptions['start_date'];?> 06-04-2012</td>
                                 </tr> 

                                 <tr style="border: 1px solid #c5c5bf;">
                                    <th>Current Subscription:</th>
                                    <?php if($getSubscriptions['pakage_type']=='Yearly'){
                                       ?>
                                       <td><span class="badge bg-warning text-black fw-bold">Yearly</span></td>
                                    <?php } else if($getSubscriptions['pakage_type']=='Monthly'){?>
                                    <td><span class="badge bg-warning text-black fw-bold">Monthly</span></td>
                                    <?php } ?>
                                 </tr>

                                  <tr style="    border: 1px solid #c5c5bf;">
                                    <th>Status:</th>
                                    <?php if($getSubscriptions['status']=='0'){ ?>
                                    <td><span class="badge bg-danger text-white fw-bold ">Unpaid</span></td>
                                    <?php } else if($getSubscriptions['status']=='1'){
                                       ?>
                                      <td><span class="badge bg-danger text-white fw-bold ">Paid</span></td> 
                                  <?php } ?>
                                 </tr>
                              </tbody>
                           </table>
                        </div> 
                         <div class="d-flex justify-content-end mt-3">
                           <?php if($getCustomer['status']=='pending'){?>
                           <form method = "post" action="">
                           <h5 class="card-title pt-0"><button type="button" class=" btn btn-xs btn btn-success" data-bs-toggle="modal" data-bs-target="#approvedModal">Approve Now</button></h5>
                        </form>
                           <?php } elseif($getCustomer['status']=='approved'){ ?>
                           <h5 class="card-title pt-0"><a href="#" name="status" class=" btn btn-xs btn btn-success">Approved</a></h5>
                        <?php }?>
                        </div> -->

                      </div>



          <!--           <div class="row mt-3">
                        <div class="col-md-12">
                            <table class="table" style="width:100%;">
                     <thead>
                        <tr style="background: #94ceec;">
                           <th scope="col">Transaction No.</th>
                           <th scope="col">Date</th>
                           <th scope="col">Vat (%)</th>
                           <th scope="col">Commission (%)</th>
                           <th scope="col">Price</th>
                           <th scope="col">Payment Method</th>
                        </tr>
                     </thead>
                     <tbody>
                     
 <?php
foreach($getInvoices as $key=> $record){
   $total_price=$record->total_price;
   $commission_amount=$commission*$getSubscriptions['price']/100;
   $vat_amount = $vat*$getSubscriptions['price']/100;
   $price=$getSubscriptions['price'] + $commission_amount + $vat_amount;
   ?>

                        <tr>
                           <td><?=$record->id;?></td>
                           <?php $date = date("d-m-Y", strtotime($record->created_at)); ?>
                           <td><?=$date;?></td>
                           <td><?= $vat;?> %</td>
                           <td><?=$commission;?> %</td>
                           <td><?php echo number_format($price,2);?></td>
                           <td class="text-center"><?=$record->payment_method;?></td>
                        </tr>
<?php } ?>
                        

                  
                    
                     </tbody>
                  </table>
                        
                        </div>

                        <div class="col-lg-12 mt-3">
                           <div class="d-flex justify-content-end align-items-end">
                              <a href="manage-member.php" class="btn btn-secondary me-2">Back</a>
                           </div>
                        </div>

                     </div> -->
                     
                  </div>
         </div>
<style type="text/css">

   .note.note-info {
      background-color: #f0faff;
      border-color: #91d9e8;
      color: #31708f, 80%;
      position: relative;
   }

   .note {
      margin: 0 0 20px 0;
      padding: 15px 30px 15px 15px;
      border-left: 5px solid #eee;
   }

   .btn-success, .btn-danger {
      padding: 8px 16px !important;
      box-shadow: 0 3px 10px 0 rgba(0,0,0,0.11), 0 6px 20px 0 rgba(0,0,0,0.19);
   }

   .btn-success:hover, .btn-danger:hover {
      padding: 8px 16px !important;
      box-shadow: 0 3px 10px 0 rgba(0,0,0,0.11), 0 6px 20px 0 rgba(0,0,0,0.19);
   }

   .toggle_element .editaa .bi-pencil-square {
      background: #c5f1e1;
      padding: 8px;
      border-radius: 4px;
      color: #1d9364;
   }

   .toggle_element .editdd .bi-trash {
       background: #f7ded2;
       padding: 8px;
       border-radius: 4px;
       color: #e1501a;
   }

   .notepara, .document-head {
      font-weight: 600 !important;
       color: green !important;
   }

   .personaldiv p{
      font-size: 15px;
   }

   .personaldiv {
      padding: 20px 10px;
      border-radius: 4px;
      border: 1px solid;
      background: #f5f6f7;
   }

</style>
         <div class="tab-pane fade pt-3" id="note">
            <div>
               <div class="card-body">
               <div class="col-md-12">
                  <div class="d-flex justify-content-start">
                     <a class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addnotesModal">Add Notes</a>
                  </div>
                  <?php foreach($getNotes as $record){
                     ?>
                  <div class="note note-info">
                     <p class="notepara mb-0"><small><?php echo $record->description;?></small></p>              
                     <div class="toggle_element d-flex justify-content-between">
                        <small class="p-0">
                     <?php $date = date("d-m-Y", strtotime($record->created_at)); echo $date;?>
                           </small>
                        <div class="toggle_element">
                           <a data-bs-toggle="modal" class="editaa" data-bs-target="#editnotesModal<?php echo $record->id;?>" data-id="<?php echo $record->id;?>">
                              <i class="bi bi-pencil-square" title="Edit"></i>
                           </a>

                           <a onclick="return confirm('Are you sure you want to delete?');" href="delete-notes.php?id=<?php echo $record->id;?>&memberid=<?php echo $_GET['vpid'];?>" class="editdd" type="submit" name="delete_notes" title="Delete"> <i class="bi bi-trash" title="Edit"></i></a>
                        
                        </div>                  
                     </div>      
                  </div>
                  <!-- Modal -->
               <div class="modal fade" id="editnotesModal<?php echo $record->id;?>" tabindex="-1" aria-labelledby="exampleModalLabelwe" aria-hidden="true">
               <div class="modal-dialog">
                  <form method="post" action="">
                  <div class="modal-content">
                     <div class="modal-header" style= "background-color: #94ceec;">
                        <h5 class="modal-title" id="exampleModalLabelwe">Edit Notes</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                        <div class="row">
                           <div class="col-md-12">
                              <input type="hidden" name="note_id" value="<?php echo $record->id;?>">
                              <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5" value="<?php echo $record->description;?>"><?php echo $record->description;?></textarea>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="update_notes" class="btn btn-success">Save</button>
                     </div>
                  </div>
                  </form>
               </div>
               </div>
                  <?php 
                  } ?>
               </div>
            </div>
            </div>
         </div>

<style type="text/css">


.haaa .input-group{
  border: 1px solid;
   margin-bottom: 20px;
}

input[type=file] {
   position: absolute;
   top: 0;
   right: -180px;
   margin: 0;
   padding: 0;
   font-size: 20px;
   cursor: pointer;
   opacity: 0;
   filter: alpha(opacity=0);
}
.upload-button:hover{
   border-bottom: 2px solid #f0c570;
   background-color: #f0c570;
   color: black;
   box-shadow: none;
   border-radius: 0 !important;
}
.upload-button{
   box-shadow: none;
   border-bottom: 2px solid #ffb92c;
   background-color: #ffb92c;
   color: black;
   border-radius: 0 !important;
}
.uploadbody {
    min-height: 115px;
}
.note .bi-file-earmark-text-fill {
   font-size: 40px;
   color: #4fa7d4;
}
.downloadbtn {
   padding: 7px;
   box-shadow: 0 3px 10px 0 rgba(0,0,0,0), 0 6px 20px 0 rgba(0,0,0,0) !important;
}
.downloadbtn:hover {
   padding: 7px;
   box-shadow: 0 3px 10px 0 rgba(0,0,0,0), 0 6px 20px 0 rgba(0,0,0,0) !important;
}
.browse-button{
   background: #ffb92c;
   color: black;
   border-bottom: 2px solid #ffb92c;
   border-radius: 0;
}
.addtitleinput {
    border: 1px solid;
    border-radius: 0;
}

</style>
         <div class="tab-pane fade" id="upload">
            <div>
               <div class="card-body uploadbody">
                  <div class="col-md-12">
                     <h4 class="text-center">Upload Documents</h4>
                     <div>
                         <form class="haaa" method="post" action="" enctype="multipart/form-data">
                         <div class="row d-flex justify-content-center"> 
                        <div class="col-lg-5 pe-1 ps-1">
                           <div class="mb-2 addtitleinput">
                              <input type="text" name="document_title" placeholder="Add Title" class="form-control">
                           </div>
                        </div>
                     </div>
                            <div class="col-md-5 m-auto">
                              <div class="input-group">
                                  <span class="input-group-btn">
                                    <div class="btn btn-default browse-button">
                                        <span class="browse-button-text">
                                        <i class="bi bi-folder"></i>Browse</span>
                                        <input type="file" name="attachment" accept=".doc,.docx,.pdf" required />
                                    </div>
                                    <button type="button" class="btn btn-default clear-button" style="display:none;">
                                      <span class="fa fa-times"></span>Clear
                                    </button>
                                  </span>
                                  <input type="text" class="form-control filename text-center" disabled="disabled" placeholder="Please click on browse button">
                                  <span class="input-group-btn">
                                    <button class="btn btn-primary upload-button" type="submit" name="upload_document">
                                        <i class="fa fa-upload"></i>
                                        Upload
                                      </button>
                                  </span>

                                </div>
                                

                            </div>
                        </form>
                     </div>
                     <?php
                     $getDocument=$db->select(array("*"),PREFIX."documents","user_id='$id'"); ?>
                     <?php foreach($getDocument as $record){
                        ?>

                        <div class="note note-info mb-0 d-flex justify-content-between align-item-center">

                           <!-- <div><i class="bi bi-file-earmark-text-fill"></i>&nbsp;&nbsp;&nbsp;
                           <strong></strong>&nbsp;&nbsp;&nbsp;<span><?=date("d-m-Y", strtotime($record->created_at));;?></span> 
                           <div> -->
                           <div class="d-flex">  
                              <div>
                                 <i class="bi bi-file-earmark-text-fill"></i>
                              </div>
                              <div class="mt-2 pt-1 ms-1">
                                 <h6 class="document-head m-0"><strong><?=$record->title;?></strong></h6>
                                 <p class="m-0"><?=date("d-m-Y", strtotime($record->created_at));;?></p>
                              </div>
                           </div>



     
                           <div class="mt-3">
                              <a class="btn-primary downloadbtn" href="uploads/<?php echo $record->name;?>" id="clickdown" title="Download" download="">Download</a>
                           </div>

                        </div>

                           <br>
                           <?php $i++;
                     }
                     ?>

                     <!-- <div class="note note-info">
                        <small>TRasfdkjklsajf </small>              
                        <div class="toggle_element d-flex justify-content-between">
                           <small class="p-0">06-04-2023</small>
                           <div class="toggle_element">
                              <a data-bs-toggle="modal" data-bs-target="#editnotesModal">
                              <i class="bi bi-pencil-square btn btn-sm btn-success" title="Edit"></i></a>
                              <i class="bi bi-trash btn btn-sm btn-danger" title="Delete"></i>
                           </div>                  
                        </div>      
                     </div> -->
                  </div>
               </div>
            </div>
         </div>
      </div>





                 
               </div>

            </div>
         </div>
      </section>
</main>


<!-- Modal -->
<div class="modal fade" id="addnotesModal" tabindex="-1" aria-labelledby="exampleModalLabelw" aria-hidden="true">
  <div class="modal-dialog">
         <form method="post" action="">
    <div class="modal-content">
      <div class="modal-header" style= "background-color: #94ceec;">
        <h5 class="modal-title" id="exampleModalLabelw">Add Notes</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
           <div class="col-md-12">
               <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="5" required></textarea>
           </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="add_notes" class="btn btn-success">Save</button>
      </div>
    </div>
   </form>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="approvedModal" tabindex="-1" aria-labelledby="exampleModalLabelwes" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style= "background-color: #94ceec;">
        <h5 class="modal-title" id="exampleModalLabelwes">Member Type</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method = "post" action="">
         <div class="modal-body">
            <input type="hidden" value="approved" name="status">
            <select class="form-select" aria-label="Default select example" name="active_pakage">
            <option selected disabled>Select Member Type</option>
            <option value="subscription">Subscription</option>
            <option value="commission">Commission</option>
            <option value="both">Both</option>
            </select>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
           <button type="submit" name="status_update" type="button" class=" btn btn-xs btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#approvedModal">Approve</button>
         </div>
      </form>
    </div>
  </div>
</div>


<?php include'includes/datatable.php' ?>
<script>
   $(document).ready(function () {
       $('#example').DataTable();
   });
</script>

<script type="text/javascript">
// Show filename, show clear button and change browse 
//button text when a valid extension file is selected
$(".browse-button input:file").change(function (){
  $("input[name='attachment']").each(function() {
    var fileName = $(this).val().split('/').pop().split('\\').pop();
    $(".filename").val(fileName);
    $(".browse-button-text").html('<i class="fa fa-refresh"></i> Change');
    $(".clear-button").show();
  });
});

//actions happening when the button is clicked
$('.clear-button').click(function(){
    $('.filename').val("");
    $('.clear-button').hide();
    $('.browse-button input:file').val("");
    $(".browse-button-text").html('<i class="fa fa-folder-open"></i> Browse'); 
}); 

</script>
<?php include'includes/footer.php' ?>



<!-- Modal -->
<div class="modal fade" id="ChangePassword" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style= "background-color: #94ceec;">
        <h5 class="modal-title" id="staticBackdropLabel">Change Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
<?php 
$id =$_GET['vpid']; 
if(isset($_POST['change_password'])){
   extract($_POST);
   $arr = array('password'=>password_hash($password, PASSWORD_DEFAULT));
   $result=$db->updateCondition($arr,PREFIX."users","id='$id'");
   ?>
   <script language="javascript">window.location='view-member.php?vpid=<?php echo $id; ?>';
   </script>
   <?php }
   ?>

      <div class="modal-body">
         <div class="row">
            <div class="col-md-12">
              <form method="POST" action="">
                 <div class="mb-3">
                   <label for="exampleInputPassword11" class="form-label">New Password</label>
                   <input name="password" type="password" class="form-control" id="password" aria-describedby="emailHelp">
                   <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                 </div>
                 <div class="mb-3">
                   <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                   <input name="confirm_password" type="password" class="form-control" id="password_confirmation">
                   <span style="display:none" id="passworderror3" class="text-danger" >
                     Password do not matched
                   </span>
                   <span style="display:none" id="cpassworderror" class="text-danger" >
                     Password  is Required
                   </span>
                 </div>
                 <div class="row">
            <div class="col-md-12 d-flex justify-content-end">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              <button type="button" name="change_password" id ="resetsumittButton" class="btn btn-xs btn btn-success ms-2">Update</button>
            </div>
         </div>
               </form>
            </div>
         </div>
         <!-- <div class="row">
            <div class="col-md-12 d-flex justify-content-end">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-xs btn btn-success ms-2">Update</button>
            </div>
         </div> -->
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="EditRecord" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style= "background-color: #94ceec;">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Record</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
<?php $id =$_GET['vpid']; 
if(isset($_POST['update_record'])){
   extract($_POST);
   $arr=array('company_name'=>$company_name,"fname"=>$fname,"email"=>$email,"phone"=>$phone,"active_pakage"=>$active_pakage);
   $result=$db->updateCondition($arr,PREFIX."users","id='$id'"); ?>
   <script language="javascript">window.location='view-member.php?vpid=<?php echo $id; ?>';
</script>
<?php }
$getRecord=$db->selectSRow(array("*"),PREFIX."users","id='$id'");
?>
      <div class="modal-body">
         <div class="row">
            <div class="col-md-12">
              <form method="POST" action="">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="mb-3">
                           <label for="exampleInputEmail12" class="form-label">Company Name</label>
                           <input type="text" class="form-control" name="company_name" id="exampleInputEmail12" aria-describedby="emailHelp" value="<?php echo $getRecord['company_name'];?>">
                           <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="mb-3">
                           <label for="exampleInputEmail12" class="form-label">Name</label>
                           <input type="text" name="fname" value="<?php echo $getRecord['fname'];?>" class="form-control" id="exampleInputEmail12" aria-describedby="emailHelp">
                           <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div> 
                     </div> 
                    
                  </div>

                  <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                           <label for="exampleInputEma2" class="form-label">Email</label>
                           <input type="email" class="form-control" name="email" id="exampleInputEma2" aria-describedby="emailHelp" value="<?php echo $getRecord['email'];?>">
                           <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="mb-3">
                           <label for="exampleInputEmail12" class="form-label">Phone</label>
                           <input type="tel" class="form-control" name="phone" id="exampleInputEmail12" aria-describedby="emailHelp" value="<?php echo $getRecord['phone'];?>">
                           <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div> 
                     </div> 

                     
                  </div>

                  <div class="row">
                     <!-- <div class="col-md-6">
                        <div class="mb-3">
                           <label for="exampleInputEmail12" class="form-label">Request Date</label>
                           <input type="date" class="form-control" id="exampleInputEmail12" aria-describedby="emailHelp">
                           <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                     </div> -->
                     <div class="col-md-6">
                        <div class="mb-3">
                           <label class="form-label">Membership</label>
                           <select class="form-select" name="active_pakage" required>
                              <option value="" selected="" disabled="">Select Membership</option>
                              <option  <?php if($getRecord['active_pakage']=='commission'){echo 'selected'; }?> value="commission">Commission</option>
                              <option  <?php if($getRecord['active_pakage']=='subscription'){echo 'selected'; }?> value="subscription">Subscription</option>
                              <option <?php if($getRecord['active_pakage']=='both'){echo 'selected'; }?> value="both">Commission + Subscription</option>
                           </select>
                        </div>
                     </div>
                  </div>

                  <!-- <div class="row">
                     <div class="col-md-6">
                        <div class="mb-3">
                           <label for="exampleInputEmail12" class="form-label">Subscription Date</label>
                           <input type="date" class="form-control" id="exampleInputEmail12" aria-describedby="emailHelp">
                           <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div> 
                     </div> 
                     <div class="col-md-6">
                        <div class="mb-3">
                           <label for="exampleInputEmail12" class="form-label">Expiry Date</label>
                           <input type="date" class="form-control" id="exampleInputEmail12" aria-describedby="emailHelp">
                           <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                     </div>
                  </div>  -->

                  <div class="row">
            <div class="col-md-12 d-flex justify-content-end">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="update_record" class="btn btn-xs btn btn-success ms-2">Update</button>
            </div>
         </div>

               </form>
            </div>
         </div>
         <!-- <div class="row">
            <div class="col-md-12 d-flex justify-content-end">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="" class="btn btn-xs btn btn-success ms-2">Update</button>
            </div>
         </div> -->
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <script>
         var velidate=1;
    
/////

$("#password_confirmation").on('keyup', function(){
            var cpass = $('#password_confirmation').val();
            var pass = $('#password').val();
            if( cpass ==""){
                $('#cpassworderror').show();
               

            }
            if( (pass != cpass) ){
              $('#passworderror3').show();
              $('#cpassworderror').hide();
         

            }
            
            else {   
                velidate=0;
              $('#cpassworderror').hide();
              $('#passworderror3').hide();

        }
if( cpass ==""){
           
                velidate=1;

            }
            if( (pass != cpass) ){
           
              velidate=1;

            }

console.log(velidate)

        if (velidate == 0){

$('#resetsumittButton').attr('type', 'submit');
$('#nameerrorcheck').hide();

        }
 
 

})
</script>