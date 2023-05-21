<?php include 'includes/head.php' ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/sidebar.php' ?>
<?php include 'assets/common/config.php' ?>

<style type="text/css">
   
@import url("https://fonts.googleapis.com/css?family=Montserrat");

.pricing-table{
  font-family: 'Montserrat', sans-serif;
}
.pricing-table .heading {
    text-align: center;
    border: 1px solid rgba(0, 0, 0, 0.1);
    background: #00579f;
    padding: 16px 0px 8px 0px;

}

.pricing-table .headings h3 {
    padding: 10px 0px 10px 0px;
    font-size: 24px;
}
.pricing-table .headings span {
    background: #198754;
    color: white;
    padding: 3px 10px 3px 10px;
    border-radius: 6px;
}
.pricing-table .headings {
  text-align: center;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1); 
  background: #94ceec;
}

.pricing-table .item {
  box-shadow: none !important;
  border-right: 1px solid #636568 !important;
  border-left: 1px solid #636568 !important;
  border-bottom: 1px solid #636568 !important;
  padding: 15px;
  overflow: hidden;
  position: relative; 
  background: #ffffff;
}

.pricing-table .col-md-5:not(:last-child) .item {
  margin-bottom: 30px; 
}

.pricing-table .features .feature {
  font-weight: 600; }

.pricing-table .price h4 {
  margin: 10px 0;
  font-size: 40px;
  text-align: center;
  color: #2288f9; 
}

.pricing-table .buy-now button {
  text-align: center;
  margin: auto;
  font-weight: 600;
  padding: 9px 0; 
}
.pricing-table .activsubscript:hover {
    background: #ffb92c;
    color: black;
    border: 1px solid black;
}
.pricing-table .btn-outline-primary:hover {
    background: #ffb92c;
    color: black;
    border: 1px solid black;
}

.pricing-table .heading span {
   background: #ffb92c;
    color: black;
    border-radius: 9px;
    padding: 9px 20px 0px 20px;
    font-weight: 600;
}

.pricing-table .features .feature i {
    font-size: 18px;
 }
.price .sar {
   font-size: 20px;
   padding-right: 10px;
}

</style>
<main id="main" class="main">
   <div class="pagetitle">
      <h1>Subscriptions</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Subscriptions</li>
        </ol>
      </nav>
   </div>
   <section class="section manageusers">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-body">
               <!--  <div class="d-flex justify-content-between">
                  <div>
                     <h4 class="card-title">Current Subscriptions</h4>
                  </div>
                
                </div>
                 -->
                      <!-- <div>
                        <form method="get">
                           <div class="form-group">
                              <select name="filter" id="filter" class="form-select" style="margin-right: 12px ; " >
                                 <option value="1" <?php if($_GET['filter']==1){echo 'selected';} ?>>Today</option>
                                 <option value="2" <?php if($_GET['filter']==2 || $_GET['filter']==''){echo 'selected';} ?>>This Month</option>
                                 <option value="3" <?php if($_GET['filter']==3){echo 'selected';} ?>>This Year</option>
                              </select>
                           </div>
                           <input type="hidden" class="btn" name="search" value="Search">
                        </form>
                     </div>  -->   
                     
                

                    <?php 
                    $userid = $_SESSION['userid'];
                    $check_order = $db->selectSRow(array("*"),"subscription","user_id = '$userid'");
                    ?>

                    <div class="pricing-table">
                     <div class="row">
                        <div class="col-md-5 col-sm-6">

                            <div class="headings d-flex justify-content-around align-items-center">
                                <h3 class="mb-0">Current Subscription</h3>
                                <!-- <?php if ($check_order['pakage_type']){ ?>
                                <h3 class="mb-0" > <?php echo $check_order['pakage_type'] ?> </h3>
                                <?php }else{ ?>   <h3 class="mb-0" >No Package </h3><?php } ?> -->

                            </div>
                           <div class="item">
                              
                              <div class="features mt-3">

                                <h4><span class="feature">Package Type </span> : Monthly <span class="value">  </span></h4>

                                 <h4><span class="feature">Subscribe Date</span> : <span class="value">
                                 <?php if ($check_order['pakage_type']){ 
                                      echo $check_order['start_date'];
                                 }
                                 else{
                                  echo date('y-m-d');
                                 }?> </span></h4>
                                  
                                <h4><span class="feature">Subscribe Amount</span> : 200 <span class="value">  </span></h4>
                                <!-- <h4><span class="feature">Type </span> : Monthly <span class="value">  </span></h4> -->
                                 
                                 
                                 <h4><span class="feature">Expiry Date</span> : <span class="value">
                                 <?php if ($check_order['pakage_type']){ 
                                      echo $check_order['end_date'];
                                 }
                                 else{
                                    echo 'N/A';
                                 }?>
                                 </span></h4>
                                 <h4><span class="feature">Remaining Days:  <?php 
                                   if ($check_order['pakage_type']){ 
                                   $date = date('y-m-d');
                                   $dateend =$check_order['end_date'];
                             
                                 $date1=date_create($date);
                                 $date2=date_create($dateend);
                                 $diff=date_diff($date1,$date2);
                                 echo $diff->format("%R%a days");
                                }
                                else{
                                 echo 'N/A';
                                } 
                                 ?></span></h4>
                              </div>
                              <div class="price">
                                 <h4><?php if ($check_order['pakage_type']){ 
                                      echo $check_order['price'];
                                 }
                                 else{
                                  0;
                                 }?></h4>
                              </div> 
                              <hr>
                              <button  class="btn btn-primary w-100 text-dark" id="renew_model_open">Renew Subscription</button>
                           </div>
                        </div>
                    <!-- <button  class="btn btn-primary mt-4" id="renew_model_open">Renew Subscription</button> -->
                     </div>
              
  
               
                  </div>


             

                
   </section>
</main>

<script type="text/javascript">
   $('#filter').change(function() { //alert("hy");
    //Use $option (with the "$") to see that the variable is a jQuery object
    var $option = $(this).find('option:selected');
    //Added with the EDIT
    var value = $option.val();//to get content of "value" attrib
    if(value == 4){
         $(this).daterangepicker({ 
           forceUpdate: true
           }, function (startDate, endDate, period) {
             var title = startDate.format('YYYY-MM-DD') + ' – ' + endDate.format('YYYY-MM-DD'); 
            var customstart = startDate.format('YYYY-MM-DD');
            var customend = endDate.format('YYYY-MM-DD');
              $(this).val(title)
            $('.grey-salsa').html(title);
            
            
           window.location = 'manage-transactionbymembers.php?filter='+value+'&customstart='+customstart+"&customend="+customend ;
              
         });
      } else{
         window.location = 'manage-transactionbymembers.php?filter='+value ;
      }
   });
</script>

<!-- $userISBN = $getCustomer['pakage_name']; -->

<script>
$(document).ready(function() {
      $('#changepakage').change(function() { 
         price = '<?php echo  $getCustomer['pakage_price'];?>';
         if ($(this).is(':checked')) {
            $('#pakage_name').text('Yearly');
            $('#pakage_price').html('<span class="sar" >SAR</span>' + price*12);
        }
        else {
           $('#pakage_name').text('Monthly');
           $('#pakage_price').html('<span class="sar" >SAR</span>' + price);

        }
    } );
} );
</script>

<?php include 'includes/footer.php' ?>



