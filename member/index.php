

<?php include 'assets/common/config.php' ?>
<?php include 'includes/head.php' ?>
<?php include 'includes/header.php' ?>

<?php
session_start();
$user_id = $_SESSION['userid'];

$user_status = $db->selectSRow(array("*"),PREFIX."users","id=$user_id");
$subcribestatus = $db->selectSRow(array("*"),PREFIX."subscription","user_id=$user_id");

if ($user_status['active_pakage']  == 'pending')  { ?>
  <script>
  $(document).ready(function() {
    $('#Pakageselectedmodal').modal('show');
  //  alert('hi');
    // setTimeout(function() {
    //   $('#welcome-modal').modal('hide');
    // }, 2000);
  });

 
   
  
 
  </script>
 
  <?php }
  else if ($user_status['active_pakage']  == 'both')  { ?>
    <script>
    $(document).ready(function() {
      $('#Pakageselectedmodal').modal('show');
    //  alert('hi');
      // setTimeout(function() {
      //   $('#welcome-modal').modal('hide');
      // }, 2000);
    });
  
   
     
    
   
    </script>
   
    <?php }
      else if ($user_status['active_pakage']  == 'subscription')  { 
        if($subcribestatus){
  ?>
          <script>
          $(document).ready(function() {
          // $('#success_alert').modal('show');
          
        //  alert('hi');
          // setTimeout(function() {
          //   $('#welcome-modal').modal('hide');
          // }, 2000);
        });
          </script>
  <?php
        }else{
?>
     <script>
        $(document).ready(function() {
          $('#Pakageselectedmodal').modal('show');
        //  alert('hi');
          // setTimeout(function() {
          //   $('#welcome-modal').modal('hide');
          // }, 2000);
        });

        </script>

  <?php      }

        ?>
   
       
        <?php }
        
    
  ?>
  <?php include 'includes/sidebar.php' ?>
<style type="text/css">
   
   @import url("https://fonts.googleapis.com/css?family=Montserrat");

.pricing-table{
  font-family: 'Montserrat', sans-serif;
}

.pricing-table .heading {
  text-align: center;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1); 
  background: #00579f;
  padding: 16px 0px 8px 0px;
}
.pricing-table .headings h3 {
       padding: 10px 0px 10px 0px;
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
  border: 2px solid #5ea4f3;
  padding: 15px;
  overflow: hidden;
  position: relative; 
  background: #ffffff;
}

.pricing-table .col-md-5:not(:last-child) .item {
  margin-bottom: 30px; 
}

.pricing-table .item button {
  /*font-weight: 600; */
}

.pricing-table .features .feature {
  font-weight: 600; }

.pricing-table .features h4 {
  text-align: center;
  font-size: 15px;
  padding: 5px; 
}

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
.pricing-table .btn-outline-primary {
  background: #ffb92c;
    color: black;
    border: 1px solid black;
}
.pricing-table .btn-outline-primary:hover {

    background: transparent;
    color: #2288f9;
    border: 1px solid #2288f9;

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










 .datediv {
    background: #94ceec9e;
    padding: 54px 0px;
    border-radius: 4px;
    padding: 56px 15px;
}
 .datediv p {
    font-size: 14px;
    }
.hiii {
/*   width: 260px;*/
   border: none;
    border-radius: 5px;
   background: #4E68C7;
   box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px !important;
}
p.top {
   font-size: 14px;
}
.discount {
   background-color: #1BC5DF;
   border: none;
   border-top-left-radius: 25px;
   border-bottom-left-radius: 25px;
   padding: 5px 15px;
   transform: translateX(24px);
   height: 35px;
}
.discount span {
   font-size: 15px;
}
h2{
   letter-spacing: 2px;
}
.fa-euro-sign {
   font-size: 27px;
   color: #B3C4FA;
}
.card-content {
  margin-top: 25px;
}
.card-content p{
   line-height: 18px;
   font-size: 11px;
   color: #abbef6;
}
.btn-primary {
    border: none;
    border-radius: 4px;
    background-color: #ffb92c;
    color: black !important;
    border-color: #ffb92c;
   box-shadow: 0 3px 10px 0 rgba(0,0,0,0.11), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.btn-primary span{
   font-size: 13px;
   color: #D1E2FF;
   margin-right: 10px;
}
.fa-arrow-right{
   font-size: 12px;
   color: #D1E2FF;
}
.btn-primary:hover,
.btn-primary:focus
{
    color: black !important;
   background-color: #f0c570;
   box-shadow: none;
   border-color: #ffaa00;
   box-shadow: 0 3px 10px 0 rgba(0,0,0,0.11), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.sar {
   font-size: 18px;
}
.table tr th, .table tr td {
   font-size: 13px;
}
</style>
<?php 
 $user_id = $_SESSION['userid'];
$getCustomer = $db->selectSRow(array("*"),PREFIX."general_settings");

$userISBN = $getCustomer['pakage_name'];
// echo $userISBN;
$getsubscriptions = $db->select(array("*"),PREFIX."transactions", "isbn= '$userISBN'");
$subscriptionsprice = $db->selectSRow(array("*"),PREFIX."transactions", "user_id= '$user_id'");

// print_r ($getsubscriptions);
// echo "abccc";

?>
<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #00579f;">
        <h5 class="modal-title text-white" id="staticBackdropLabel">Subscription</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
              <p class="mb-0 text-center">You need to subscribe the subscription in order to operate the portal.</p>
              <h4 class="card-title text-center pt-0">Packages</h4>
              <div class="form-check form-switch justify-content-center d-flex">
                <input class="form-check-input" type="checkbox" id="changepakage" >
                <label class="form-check-label ms-2" for="flexSwitchCheckChecked">Change the Package</label>
              </div>
              <div class="pricing-table">
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <div class="heading">
                      <h3 id="pakage_name" class="text-white">Monthly</h3>
                    </div>
                    <div class="item">    

                
                      <div class="features d-flex justify-content-evenly">
                        <h4><span class="feature">1 Business Location</h4>
                        <h4><span class="feature">2 Users</h4>
                      </div>
                      <div class="features d-flex justify-content-evenly">
                        <h4><span class="feature">Unlimited Products</h4>
                        <h4><span class="feature">15000 Invoices</h4>
                      </div>
                      <div class="features d-flex justify-content-evenly">
                        <h4 ><span class="feature">60 Trial Days</h4>
                      </div>  
              
                      <div class="price">
                          <h4 class="mb-0" id="pakage_price"><span class="sar" >SAR</span> <?php   $getCustomer['pakage_price'];?></h4>
                      </div>
                      <hr>
                      <a class="btn btn-block btn-outline-primary w-100" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Subscribe Now</a>

                   
                    </div>
                  </div>  
                </div>
              </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
    

<!-- Modal -->




<main id="main" class="main">
  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb justify-content-between">
        <li class="breadcrumb-item active">Dashboard</li>
        <!-- <li class="breadcrumb-item ">Transactions</li> -->
      <div>
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
      </div> 
      </ol>
    </nav>
  </div>

    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Total Customers</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person-bounding-box"></i>
                    </div>
                    <div class="ps-3">
                    <?php 
                    $id=$_SESSION['userid'];
                    $totalmembers = $db->countfields("*",PREFIX."customers","user_id='$id'");?>
                      <h6><span class="counter"><?=$totalmembers;?></span></h6>
                      <!-- <h6><span class="counter">15,547</span></h6> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Total Transactions</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                    <?php 
                    $id=$_SESSION['userid'];
                    $totalmembers = $db->countfields("*",PREFIX."transactions","user_id='$id'","type=1");?>
                      <h6><span class="counter"><?=$totalmembers;?></span></h6>
                      <!-- <h6> $<span class="counter">10,399</span></h6> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-xxl-4">
              <div class="card p-4 text-white hiii mx-1">
                <p class="top mb-1">Available Balance</p>
                <div class="d-flex flex-row justify-content-between text-align-center xyz">
                  <h2><span class="sar">SAR <?php 
                  
                  ?></span>&nbsp;<?php if ($subscriptionsprice){
                    
                    echo $subcribestatus['price'];
                  }else {?>0 <?php } ?></h2>
                  <div class="discount"><span>Balance</span></div>
                </div>
                <div class="card-content">
                  <p>This is your Last withdrawwal data.</p>
                </div>
              </div>
            </div>

    <!--         <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Available Balance</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-receipt"></i>
                    </div>
                    <div class="ps-3">
                      <h6><small>SAR</small> <span class="counter">364</span></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->



            <div class="col-12">
              <div class="card info-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Transactions <span>/This Month</span></h5>
                  <div id="reportsChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Paid',
                          data: [31, 40, 28, 51, 42, 82, 56, 84, 75, 89, 55, 11],
                        }, {
                          name: 'Unpaid',
                          data: [11, 32, 45, 32, 34, 52, 41, 63, 77, 38, 22, 28]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#198754', '#ff0000', '#ff771d'],

                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'month',
                          categories: ["Jan", "Feb", "Mar","Apr", "May", "Jun","Jul", "Aug", "Sep","Oct", "Nov", "Dec"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script>

                </div>

              </div>
            </div>



          </div>
        </div>

        <div class="modal" id="success_alert" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    <div class="modal-header" style="background: #608c2a !important;">
        <h5 class="modal-title" style="color: white !important;">Success</h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
        <div class="d-flex justify-content-center">
            <img class="text-center img-fluid" src="{{asset('frontend/img/heee.png')}}" style="height: 150px;"; >
        </div>
        <p class="text-center pb-2 pt-4" style="font-size: 22px;color: black;">Success! Thanks used for our service</p>
        <button type="button" class="btn btn-secondary float-end" data-bs-dismiss="modal" id ="success_modal_close">Close</button>
      </div>
    </div>
  </div>
</div>
  </main>

<style type="text/css">
  .count {
    animation-duration: 1s;
    animation-delay: 0s;
  }
</style>
<?php include 'includes/footer.php'?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js"></script>
<script type="text/javascript">
    $('.counter').counterUp({
      delay: 100,
      time: 3000
    });
    $('.counter').addClass('animated fadeInDownBig');
    $('h6').addClass('animated fadeIn');
</script>
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
            
            
           window.location = 'index.php?filter='+value+'&customstart='+customstart+"&customend="+customend ;
              
         });
      } else{
         window.location = 'index.php?filter='+value ;
      }
   });
</script>
