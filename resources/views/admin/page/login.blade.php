<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>

  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link rel="canonical" href="" />
  <!--  Social tags      -->
  <meta name="keywords" content="">
  <meta name="description" content="">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="">
  <meta itemprop="description" content="">
  <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:creator" content="">
  <meta name="twitter:image" content="">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="">
  <meta property="og:title" content="" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:description" content="" />
  <meta property="og:site_name" content="" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{url('css/material-dashboard.css')}}" rel="stylesheet" />
  <link href="{{url('css/custom_theme.css')}}" rel="stylesheet" />

</head>

<body class="off-canvas-sidebar">
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
    <div class="container">
      <div class="navbar-wrapper">
        <a class="navbar-brand" href="">Login Page</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a href="" class="nav-link">
              <i class="material-icons">person_add</i> Register
            </a>
          </li>
          <li class="nav-item  active ">
            <a href="" class="nav-link">
              <i class="material-icons">fingerprint</i> Login
            </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('../../assets/img/login.jpg'); background-size: cover; background-position: top center;">
      <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
            <form class="form" id="doLogin" method="post" action="javascript:void(0)">
              @csrf            
              <div class="card card-login card-hidden">
                <div class="card-header card-header-rose text-center">
                  <h4 class="card-title">Login</h4>
                  <div class="social-line">
                    <!-- <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                      <i class="fa fa-facebook-square"></i>
                    </a>
                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                      <i class="fa fa-google-plus"></i>
                    </a> -->
                  </div>
                </div>
                <div class="card-body ">
                  <p class="card-description text-center">Or Be Classical</p>
                  <!-- <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">face</i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="First Name...">
                    </div>
                  </span> -->
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">email</i>
                        </span>
                      </div>
                      <input type="email" name="email" id="email" class="form-control" placeholder="Email...">
                    </div>
                  </span>
                  <br>
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input type="password" name="pass" id="pass" class="form-control" placeholder="Password...">
                    </div>
                  </span>
                </div>
                <div class="card-footer justify-content-center">
                  <input type="submit" class="btn btn-primary pull-right" name="submit" value="login">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container">
          <nav class="float-left">
            <ul>
              <li><a href="#">Item 1</a></li>
              <li><a href="#">Item 2</a></li>
              <li><a href="#">Item 3</a></li>              
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="" target="_blank">TS</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
  
  <!--   Core JS Files Start  -->
  <script src="{{url('js/core/jquery.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.js"></script>  
  
  <script src="{{url('js/core/popper.min.js')}}"></script>
  <script src="{{url('js/core/bootstrap-material-design.min.js')}}"></script>
  <script src="{{url('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Chartist JS -->
  <script src="{{url('js/plugins/chartist.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{url('js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{url('js/material-dashboard.min.js')}}" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{url('assets/demo/demo.js')}}"></script>
  <!--   Core JS Files End   -->
  
  <script>
    $(document).ready(function() {

      //Login Form Ajax Start
      $( '#doLogin' ).on( 'submit', function(e) {
          e.preventDefault();
          //Start Form Validation
          $("#doLogin").validate({
            rules: {
              email: {
                required: true,
                email: true
              },
              pass: {
                required: true,
                minlength: 5
              }
            },
            // Specify validation error messages
            messages: {
              pass: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
              },
              email: "Please enter a valid email address"
            },
            submitHandler: function(form) {
              console.log("form validate + submit")
              var token    = $("input[name=_token]").val();
              var email    = $('#email').val();
              var password = $('#pass').val();

              var data = {
                  _token:token,
                  email:email,
                  password:password
              };
              $.ajax({
                type: "post",
                url: "{{ url('admin/doLogin') }}",
                data: data,
                cache: false,
                success: function (data){
                    console.log("data:",data)
                    if(data.code == 200){
                      console.log('Loggin Successful Redirect to page');  
                      window.location.href = "{{ url('admin/dashboard') }}";
                    }else{
                      console.log('login request sent !');
                      console.log('status: ' +data.status);
                      console.log('message: ' +data.message);
                    }
                    
                },
                error: function (data){
                    alert('Fail to run Login..');
                }
              });
              return false;              
            }//submitHandler
          });
      });
      //Login Form Ajax End


      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });

    });

  </script>

  <script>
    $(document).ready(function() {
      md.checkFullPageBackgroundImage();
      setTimeout(function() {
        // after 1000 ms we add the class animated to the login/register card
        $('.card').removeClass('card-hidden');
      }, 700);
    });
  </script>
</body>

</html>
