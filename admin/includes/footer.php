 <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>EZ Pay</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div class="modal fade" id="userPassModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="userPassModal" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header managemodal">
            <h5 class="modal-title" id="staticBackdropLabel">Authentication</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body py-3">
            <form>
               <div class="mb-2">
                  <!-- <label for="passcode" class="form-label">Enter Password</label> -->
                  <input type="password" required="" class="form-control" id="passcode" placeholder="Enter Passcode">
               </div>
            </form>
         </div>
         <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary backbtnn" data-bs-dismiss="modal">Close</button> -->
            <a href="manage-items.php" type="button" class="btn btn-primary">Submit</a>
         </div>
      </div>
   </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js" type="text/javascript"></script>

<!-- <script src="assets/datatable/jquery-3.5.1.js" type="text/javascript"></script>
<script src="assets/datatable/jquery.dataTables.min.css" type="text/javascript"></script>
<script src="assets/datatable/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="assets/datatable/buttons.print.min.js" type="text/javascript"></script>
<script src="assets/datatable/jszip.min.js" type="text/javascript"></script>
<script src="assets/datatable/pdfmake.min.js" type="text/javascript"></script>
<script src="assets/datatable/vfs_fonts.js" type="text/javascript"></script>
<script src="assets/datatable/buttons.html5.min.js" type="text/javascript"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'csv', 'pdf', 'print'
        ]
    } );
} );

</script> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <!-- <script src="assets/vendor/simple-datatables/simple-datatables.js"></script> -->
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>
  <script src="assets/js/moment.min.js"></script>
  <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
        $('#authUserModal').click(function(){
          $('#userPassModal').modal('show');
        });
    });
    $(function () {
      $("#datepicker").datepicker({ 
            autoclose: true, 
            todayHighlight: true
      }).datepicker('update', new Date());
    });
    $(function () {
      $("#datepicker1").datepicker({ 
            autoclose: true, 
            todayHighlight: true
      }).datepicker('update', new Date());
    });

    $('#timePicker').datetimepicker({
      useCurrent: false,
      format: "hh:mm A"
    }).on('dp.show', function() {
      if(firstOpen) {
        time = moment().startOf('day');
        firstOpen = false;
      }
      
      $(this).data('DateTimePicker').date(time);
    });
    $('#timePicker1').datetimepicker({
      useCurrent: false,
      format: "hh:mm A"
    }).on('dp.show', function() {
      if(firstOpen) {
        time = moment().startOf('day');
        firstOpen = false;
      }
      
      $(this).data('DateTimePicker').date(time);
    });
  </script>
  <script type="text/javascript">
    $('#select_all').on('click',function(){
      if(this.checked){
        $('.checkbox').each(function(){
          this.checked = true;
          $(this).attr("checked");
        });
      }else{
        $('.checkbox').each(function(){
          this.checked = false;
          $(this).attr("checked");
        });
      }
    });
  
    $('.checkbox').on('click',function(){
      if($('.checkbox:checked').length == $('.checkbox').length){
        $('#select_all').prop('checked',true);
      }else{
        $('#select_all').prop('checked',false);
      }
    }); 
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.sidebar-nav li.nav-item a.nav-link').click(function(){
        // alert('in');
        $(this).children('ul.nav-content').stop().slideToggle(200);
        // alert('inr');

        $(this).children('ul.nav-content').children('li a').stop().slideToggle(400);

    });
    $('ul.nav-content').click(function(){
        $(this).children('ul.nav-content').stop().slideToggle(200);
    });
  });


    var ddmenuitem = 0;
    function jsddm_open()
    {  jsddm_close();
       ddmenuitem = $(this).find('ul.nav-content').css('display', 'block');
    }
    function jsddm_close()
    {  
      if(ddmenuitem) ddmenuitem.css('display', 'none');
    }
    $(document).ready(function()
    {  
       $('ul.nav-content > li').bind('click', jsddm_open)
       $('ul.nav-content a').click(function(e){
         if ($(this).attr('class') != 'active'){
           $('ul.nav-content a').removeClass('active');
           $(this).addClass('active');
         }
       });
         $("ul.nav-content > li > a").each(function () {
             var currentURL = document.location.href;
             var thisURL = $(this).attr("href");
             if (currentURL.indexOf(thisURL) != -1) {
               $(this).parents("ul.nav-content").css('display', 'block');
             }
           });
         $('a').each(function () {
        var currentURL = document.location.href;
        var thisURL = $(this).attr('href');
        if (currentURL.indexOf(thisURL) != 1) {
          $(this).find('ul.nav-content').css('display', 'block'); 
        }
         });
    });
  </script>

  <script type="text/javascript">
    console.log("oi love ");
    $('#sidebar .nav-item a').on('click', function(){
      console.log("oi hate ");
      $('.nav-item a.current').removeClass('current');
      $(this).addClass('current');
    });
  </script>

     <script type="text/javascript">
  $(document).ready(function(){
    $('.searchBtnn').click(function(){
      $('.advancedSea').toggle('medium');

    });
    });
</script>
</body>

</html>