  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="manage-cutomers.php">
          <i class="bi bi-person-bounding-box"></i>
          <span>Customers</span>
       
        </a>
      </li>
      <?php 
      
         if ($user_status['active_pakage']  == 'commission')  { ?>
       
     
          <?php }else { ?>
            <li class="nav-item">
        <a class="nav-link collapsed" href="manage-subscription.php">
          <i class="bi bi-receipt"></i>
          <span>Subscription</span>
        </a>
      </li>
          <?php } ?>
     

      <li class="nav-item">
        <a class="nav-link collapsed searchBtnn223" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Invoices</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse advancedSea232" data-bs-parent="#sidebar-nav">
          <li>
            <a href="create_billing.php">
              <i class="bi bi-circle"></i><span>Create Invoice</span>
            </a>
          </li>
          <li>
            <a href="manage-items.php">
              <i class="bi bi-circle"></i><span>Item Management</span>
            </a>
          </li>
          <li>
            <a href="manage-invoice.php">
              <i class="bi bi-circle"></i><span>Invoice History</span>
            </a>
          </li>
        </ul>
      </li>

      
   
<!--  <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gear"></i><span>Settings</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
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
            <a href="edit-event.php">
              <i class="bi bi-circle"></i><span>Edit Event</span>
            </a>
          </li>
        </ul>
      </li>-->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-carousel.html">
              <i class="bi bi-circle"></i><span>Carousel</span>
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
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li>
        </ul>
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

        <ul id="icons-nav" class="nav-content collapse advancedSea" data-bs-parent="#sidebar-nav" style="display: none;">
          <li>
            <a href="manage-transactionhistory.php">
              <i class="bi bi-circle"></i><span>Transaction Reports</span>
            </a>
          </li>

          <li>
            <a href="manage-balancereports.php">
              <i class="bi bi-circle"></i><span>Withdrawal Reports</span>
            </a>
          </li>

        </ul>

      </li>

    </ul>

  </aside>

  