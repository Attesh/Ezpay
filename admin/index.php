<?php include'common/config.php';?>
<?php include'includes/head.php' ?>
<?php include'includes/header.php' ?>
<?php include'includes/sidebar.php' ?>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
        <!-- <li class="breadcrumb-item ">Transactions</li> -->
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
                  <h5 class="card-title">Total Members</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person-bounding-box"></i>
                    </div>
                    <div class="ps-3">
                    <?php $totalmembers = $db->countfields("*",PREFIX."users","type=1");?>
                      <h6><span class="counter"><?=$totalmembers;?></span></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Total Transactions</h5>
                  <?php $totalTransactions = $db->select(array("*"),PREFIX."transactions","status=1");?>
                  <?php $transaction_amount=0;
                  foreach($totalTransactions as $record){
                    $transaction_amount=$transaction_amount+$record->balance;
                    $i++;
                  } ?>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6> $<span class="counter"><?=number_format($transaction_amount,0);?></span></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">No. of Invoices</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-receipt"></i>
                    </div>
                    <div class="ps-3">
                    <?php $totalInvoices = $db->countfields("*",PREFIX."invoices","status=1");?>
                      <h6><span class="counter"><?=$totalInvoices;?></span></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>



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
                  <h5 class="card-title">Payments <span>/This Month</span></h5>
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
  </main>

<style type="text/css">
  .count {
    animation-duration: 1s;
    animation-delay: 0s;
  }
</style>
<?php include'includes/footer.php' ?>
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