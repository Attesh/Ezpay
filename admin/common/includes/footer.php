 <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>KooraQ8</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="assets/js/jquery.min.js"></script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>
  <script src="assets/js/moment.min.js"></script>
  <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
 
  <script type="text/javascript">
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
  //   $(document).ready(function(){
  //     $('.sidebar-nav li.nav-item a.nav-link').click(function(){
  //       // alert('in');
  //       $(this).children('ul.nav-content').stop().slideToggle(200);
  //       // alert('inr');

  //       $(this).children('ul.nav-content').children('li a').stop().slideToggle(400);

  //   });
  //   $('ul.nav-content').click(function(){
  //       $(this).children('ul.nav-content').stop().slideToggle(200);
  //   });
  // });


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
<script>
    $(document).ready(function ($) {
    var url = window.location.href;
    var activePage = url;
    $('#sidebar-nav ul li a').each(function () {
        var sidebar-nav= this.href;
        if (activePage == sidebar-nav{
            $(this).closest("li a").addClass("active");
        }
    });
});
</script>
</body>

</html>