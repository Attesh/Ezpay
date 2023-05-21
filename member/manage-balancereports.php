<?php include 'includes/head.php' ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/sidebar.php' ?>
<?php include 'assets/common/config.php' ?>

<main id="main" class="main">
   <div class="pagetitle">
      <h1>Withdrawal Reports</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Reports</li>
        </ol>
      </nav>
   </div>
   <section class="section manageusers">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex justify-content-between">
                     <h4 class="card-title">Manage Withdrawal Reports</h4>
                        
                    

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

                  </div>
                  <table class="table datatable" id="example" style="width:100%">
                     <thead>
                        <tr>
                           <!-- <th><input type="checkbox" name=""></th>-->
                           <th scope="col">Transaction No.</th>
                           <th scope="col">Company Name</th>
                           <th scope="col">Date</th>
                           <th scope="col">Account No.</th>
                           <th scope="col">Amount Withdraw</th>
                        </tr>
                     </thead>
                     <tbody>

                        <tr>
                           <td>460184</td>
                           <td>Google co.</td>
                           <td>04-05-1997</td>
                           <td>xxxx-xxxx-xxxx-3746</td>
                           <td>SAR 200</td>
                           <!-- <td>
                              <div class="text-center">
                                 <a href="#" class="btn btn-xs btn-success"><span class="">Paid</span></a>
                              </div>
                           </td> -->
                        </tr>

                        <tr>
                           <td>460184</td>
                           <td>Google co.</td>
                           <td>04-05-1997</td>
                           <td>xxxx-xxxx-xxxx-3746</td>
                           <td>SAR 200</td>
                           <!-- <td>
                              <div class="text-center">
                                 <a href="#" class="btn btn-xs btn-success"><span class="">Paid</span></a>
                              </div>
                           </td> -->
                        </tr>
                    
                     </tbody>
                  </table>
               </div>
            </div>
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
            
            
           window.location = 'manage-balancereports.php?filter='+value+'&customstart='+customstart+"&customend="+customend ;
              
         });
      } else{
         window.location = 'manage-balancereports.php?filter='+value ;
      }
   });
</script>

<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
       'csv', 'pdf', 'print'
        ]
    } );
} );
</script>
<?php include'includes/footer.php' ?>