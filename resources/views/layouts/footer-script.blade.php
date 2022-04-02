<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xs-12">
                <div class="right-text-content">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="logo">
                    <a href="index.html"><img src="{{ url('assets/images/white-logo.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-4 col-xs-12">
                <div class="left-text-content">
                    <p>© Copyright Klassy Cafe Co.
                    
                    <br>Design: TemplateMo</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="{{ url('assets/js/jquery-2.1.0.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ url('assets/js/popper.js') }}"></script>
<script src="{{ url('assets/js/bootstrap.min.js') }}"></script>

<!-- Plugins -->
<script src="{{ url('assets/js/owl-carousel.js') }}"></script>
<script src="{{ url('assets/js/accordions.js') }}"></script>
<script src="{{ url('assets/js/datepicker.js') }}"></script>
<script src="{{ url('assets/js/scrollreveal.min.js') }}"></script>
<script src="{{ url('assets/js/waypoints.min.js') }}"></script>
<script src="{{ url('assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ url('assets/js/imgfix.min.js') }}"></script> 
<script src="{{ url('assets/js/slick.js') }}"></script> 
<script src="{{ url('assets/js/lightbox.js') }}"></script> 
<script src="{{ url('assets/js/isotope.js') }}"></script> 

<!-- Global Init -->
<script src="{{ url('assets/js/custom.js') }}"></script>
<script>

    $(function() {
        var selectedClass = "";
        $("p").click(function(){
        selectedClass = $(this).attr("data-rel");
        $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
        setTimeout(function() {
          $("."+selectedClass).fadeIn();
          $("#portfolio").fadeTo(50, 1);
        }, 500);
            
        });
    });

</script>
<script>
    setTimeout(function() 
    {
      $('.alert').fadeOut('.5');
    }, 2500);
</script>
</body>
</html>