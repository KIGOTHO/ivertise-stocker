<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Ivert | Search</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/js/fancybox/jquery.fancybox.css" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/style-responsive.css" rel="stylesheet">

        <script src="assets/js/jquery.js"></script>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
    .overlay {
    	background: #999;
    	position:fixed;;
    	left: 0;
    	right: 0;
    	bottom: 0;
    	top: 0;
    	opacity: 0.15;
    	filter: alpha(opacity=95);
    	z-index: 1;
    }
    .info{
      position: absolute;
      left: 640px;
      top: 70px;
      font-size: 20px;
      font-weight: bold;
      width: 360px;
      float: left;
      height: 400px;
          }
    .popup {
      width: 800px;
    	background: #fff;
    	border: 2px solid #333;
    	border-radius: 5px;
    	padding: 10px;
    	position:fixed;
    	z-index: 1000;
    }

    .popup img {
    	display: block;
    	margin-bottom: 15px;
      margin-top: 30px;

    }
    .popup div.action {
    	text-align: left;
      margin-top: 0px;
      margin-left: 100px;
    }
    .popup div.action input {
    	background: red;
    	color: white;
    	border: red;
    }
    </style>
  </head>



  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b><img src="logo.png"></b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->

                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Adminr</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
              <li><a class="logout glyphicon glyphicon-shopping-cart" href="cart.html">Cart</a></li>
                    <li><a class="logout" href="isignin.html">Logout</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse " style="padding-top:10px;">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

                  <p class="centered"><a href="profile.html"><img src="picf.jpg" class="img-circle" width="50" height="50"></a></p>
                  <h5 class="centered">Eric Caleb</h5>

                  <li class="mt">
                      <a href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <span>Profile</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Payment</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="general.html">MPESA</a></li>
                          <li><a  href="buttons.html">Paypal</a></li>
                          <li><a  href="panels.html">Visa</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Gallery</span>
                      </a>
                      <ul class="sub">

                          <li class="active"><a  href="gallery.html">Gallery</a></li>

                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="login.html">Login</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                      </ul>
                  </li>




              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->




		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
      <section id="main-content">
          <section class="wrapper site-min-height">

            <?php

            //declaring variable
            $input = $_POST["searchme"];
            $q = $_POST['searchme'];

           echo "<h3><i class='fa fa-angle-right'><br><b>You searched for:</b>$input</h3>";
            //If they did not enter a search term we give them an error
            if ($input == "")
            {
            echo "<p><h3>You forgot to enter a search term!</h3>";
            exit;
            }
            //open connection
            $conn = mysql_connect("localhost", "root", "password") or die(mysql_error());
            //select database
            mysql_select_db("ivertise_africa", $conn);
            //filtering input for xss and sql injection
            $input = strip_tags( $input );
            $input = mysql_real_escape_string( $input );
            $input = trim( $input );
            //the sql statement
            $sql = "SELECT * FROM images WHERE keywords LIKE '%$input%' or title LIKE '%$input%' ";
            //execute the statement
            $data = mysql_query($sql, $conn) or die(mysql_error());
            while ($result = mysql_fetch_assoc($data)) {
            //giving names to the fields
            $file_path = 'http://localhost/ivertise-stocker/assets/images/original/';
  $file_path_watermark = 'http://localhost/ivertise-stocker/assets/images/watermarked/';

            $desc = $result ['url'];
            $desc_water = $result ['url_watermark'];

            $src_water=$file_path_watermark.$desc_water;
          $src=$file_path.$desc;

?>
<script src="http://code.jquery.com/jquery.js"></script>
 <script type="text/javascript">
 $(function() {
   $('body').on('click','.closePopup', function() {
     $('.action input').css({backgroundColor: 'green'}).fadeOut(300, function() {
       $('.popupElement').remove()
     });
   });
   $('a').click(function(e) {
     e.preventDefault();
     var overlay = $('<div/>').addClass('overlay').addClass('popupElement');
     $('body').append(overlay);

     var popup = $('<div/>').addClass('popup').addClass('popupElement').css({left: '-999px'});
     var html = '<img src="' + $(this).attr('href') + '" /><div class="info">image size 15kb</br>Image type</br></div><div class="action"><a href ="#">Download</a><input type="button" value="close" class="closePopup"/></div>';
     popup.html(html);
     $('body').append(popup);

     var left = ($(window).width() - popup.width()) >> 1;
     var top = ($(window).height() - popup.height()) >> 1;
     popup.css({left: left + 'px', top: top + 'px'});

     var info = $('</div>').addClass('main');
     $('body').append(info);

   });
 });
 </script>
<div class="img2">
<a href="<? echo $src ?>"> <? "<img src=".$src.">";?> <? echo "<img src=".$src.">";?></a>
</div
<?

            }

            //This counts the number or results – and if there wasn’t any it gives a little message explaining that
            $anymatches=mysql_num_rows($data);
            if ($anymatches == 0)
            {
            echo "<h3>Results</h3>";
            echo "<p>Sorry, your search: &quot;" . $input . "&quot; returned zero results</p>";
            //Search on google
            // echo "<p><a href=\”http://www.google.com/search?q="
            // . $input . "\" target=\"_blank\" title=\"Look up
            // " . $input . " on Google\">Click here</a> to try the
            // search on google</p>";
            }
            //And we remind them what they searched for
             ?>
            </section>
            </section>
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
             Copyright IvertiseAfrica 2016.
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/fancybox/jquery.fancybox.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->



  </body>
</html>
