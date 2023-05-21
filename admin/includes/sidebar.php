  <!-- ======= Sidebar ======= -->
  
  <?php 
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[3];
?><aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

     <li class="nav-item <?php if ($first_part=="index.php") {echo "active"; } else  {echo "noactive";}?>">
        <a class="nav-link collapsed current" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

  

      <li class="nav-item <?php if ($first_part=="manage-member.php") {echo "active"; } else  {echo "noactive";}?>">
        <a class="nav-link collapsed" href="manage-member.php">
          <i class="bi bi-person-bounding-box"></i>
          <span>Members</span>
        </a>
      </li>

      <!-- <li class="nav-item <?php if ($first_part=="manage-transaction.php") {echo "active"; } else  {echo "noactive";}?>">
        <a class="nav-link collapsed" href="manage-transaction.php">
          <i class="bi bi-currency-dollar"></i>
          <span>Transactions</span>
        </a>
      </li> -->

      <li class="nav-item <?php if ($first_part=="manage-invoice.php") {echo "active"; } else  {echo "noactive";}?>">
        <a class="nav-link collapsed" href="manage-invoice.php">
          <i class="bi bi-receipt"></i>
          <span>Payment Invoices</span>
        </a>
      </li>
      <?php $settings = $db->select(array("*"),PREFIX."general_settings");

if($settings){
foreach ($settings as $settings) {

  ?>
      <li class="nav-item <?php if ($first_part=="general-settings.php") {echo "active"; } else  {echo "noactive";}?>">
        <a class="nav-link collapsed" href="general-settings.php?id=<?php echo base64_encode($settings->id);?>">
          <i class="bi bi-gear-wide-connected"></i>
          <span>General Setting</span>
        </a>
      </li>
      <?php }


}?>
   
<!--       <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gear"></i><span>Settings</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="change-settings.php">
              <i class="bi bi-circle"></i><span>General Settings</span>
            </a>
          </li>
          <li>
            <a href="manage-positions.php">
              <i class="bi bi-circle"></i><span>Position</span>
            </a>
          </li>
          <li>
        </ul>
      </li> -->
      <!--
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Events</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="add-event.php">
              <i class="bi bi-circle"></i><span>Add Event</span>
            </a>
          </li>
          <li>
            <a href="edit-event.php">
              <i class="bi bi-circle"></i><span>Edit Event</span>
            </a>
          </li>
        </ul>
      </li>-->


      <!--
      <li class="nav-item">
        <a class="nav-link collapsed" href="setting.php">
          <i class="bi bi-menu-button-wide"></i>
          <span>Setting</span>
        </a>
      </li>-->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Alerts</span>
            </a>
          </li>
          <li>
            <a href="components-accordion.html">
              <i class="bi bi-circle"></i><span>Accordion</span>
            </a>
          </li>
          <li>
            <a href="components-badges.html">
              <i class="bi bi-circle"></i><span>Badges</span>
            </a>
          </li>
          <li>
            <a href="components-breadcrumbs.html">
              <i class="bi bi-circle"></i><span>Breadcrumbs</span>
            </a>
          </li>
          <li>
            <a href="components-buttons.html">
              <i class="bi bi-circle"></i><span>Buttons</span>
            </a>
          </li>
          <li>
            <a href="components-cards.html">
              <i class="bi bi-circle"></i><span>Cards</span>
            </a>
          </li>
          <li>
            <a href="components-carousel.html">
              <i class="bi bi-circle"></i><span>Carousel</span>
            </a>
          </li>
          <li>
            <a href="components-list-group.html">
              <i class="bi bi-circle"></i><span>List group</span>
            </a>
          </li>
          <li>
            <a href="components-modal.html">
              <i class="bi bi-circle"></i><span>Modal</span>
            </a>
          </li>
          <li>
            <a href="components-tabs.html">
              <i class="bi bi-circle"></i><span>Tabs</span>
            </a>
          </li>
          <li>
            <a href="components-pagination.html">
              <i class="bi bi-circle"></i><span>Pagination</span>
            </a>
          </li>
          <li>
            <a href="components-progress.html">
              <i class="bi bi-circle"></i><span>Progress</span>
            </a>
          </li>
          <li>
            <a href="components-spinners.html">
              <i class="bi bi-circle"></i><span>Spinners</span>
            </a>
          </li>
          <li>
            <a href="components-tooltips.html">
              <i class="bi bi-circle"></i><span>Tooltips</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.html">
              <i class="bi bi-circle"></i><span>Form Elements</span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.html">
              <i class="bi bi-circle"></i><span>Form Layouts</span>
            </a>
          </li>
          <li>
            <a href="forms-editors.html">
              <i class="bi bi-circle"></i><span>Form Editors</span>
            </a>
          </li>
          <li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>Form Validation</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Chart.js</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>ApexCharts</span>
            </a>
          </li>
          <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="icons-bootstrap.html">
              <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-remix.html">
              <i class="bi bi-circle"></i><span>Remix Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-boxicons.html">
              <i class="bi bi-circle"></i><span>Boxicons</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li> 

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li> -->

      <li class="nav-item">
        <a class="nav-link collapsed searchBtnn" data-bs-target="#icons-nav" data-bs-toggle="collapse">
          <i class="bi bi-gem"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>

        <ul id="icons-nav" class="nav-content collapse advancedSea" data-bs-parent="#sidebar-nav">
          <li>
            <a href="manage-transactionhistory.php">
              <i class="bi bi-circle"></i><span>Transaction Reports</span>
            </a>
          </li>

          <li>
            <a href="manage-balancereports.php">
              <i class="bi bi-circle"></i><span>Balance Reports</span>
            </a>
          </li>

          <li>
            <a href="manage-transactionbymembers.php">
              <i class="bi bi-circle"></i><span>Withdraw Reports</span>
            </a>
          </li>

        </ul>

      </li>
      
    </ul>

  </aside><!-- End Sidebar-->