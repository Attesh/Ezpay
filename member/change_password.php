<?php include'includes/head.php' ?>
<?php include'includes/header.php' ?>
<?php include'includes/sidebar.php' ?>

<main id="main" class="main">

    <!-- <div class="pagetitle">
      <h1>Change Password</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Change Password</li>
        </ol>
      </nav>
    </div> -->

    <section class="section addEvent">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
             <!--    <h5 class="card-title">Privacy Policy</h5> -->
                  <div class="mx-autopsswrdcrd">
                    <div class="hideOnLogin">
                      <div>
                        <h5 class="card-title fs-4">Change Password</h5>
                      </div>
                      <form class="row g-3 needs-validation" novalidate action="">
                  
                      <div class="col-md-4">
                   
                       <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Current Password">
              
                      </div>
                    
                      <div class="col-md-4">
                    
                       <input type="password" class="form-control" id="exampleInputPassword1" placeholder="New Password">
               
                      </div>

                      <div class="col-md-4">
                     
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm New Password">
               
                      </div>

               
                      <div class="col-md-12 d-flex justify-content-end">
                        <!-- <button id="loginbtn" class="btn btn-primary reglink loginBtn"  type="submit">Save</button> -->
                        <a href="manage-items.php" class="btn btn-secondary me-2">Back</a>
                        <button type="submit"  name="save" class="btn btn-primary">Save</button>
                      </div>
                      
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>

<?php include'includes/footer.php' ?>






<!-- <main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="card mb-3">
                <div class="card-body hideOnLogin">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Change Password</h5>
                  </div>
                  <form class="row g-3 needs-validation" novalidate action="{{route('icna')}}">     
                    <div class="col-12"> 
                       <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Current Password">
                    </div>  
                    <div class="col-12">                 
                       <input type="password" class="form-control" id="exampleInputPassword1" placeholder="New Password">
                    </div>
                    <div class="col-12">   
                       <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm New Password">
                    </div>             
                    <div class="col-12">
                      <button id="loginbtn" class="btn btn-primary loginBtn w-100"  type="submit">Save</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
        </div>
      </main>

 -->
