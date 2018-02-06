<?php



$strMsg='';

  if(isset($_REQUEST['xyx'])){

  // code for check server side validation
/*
  if(empty($_SESSION['6_letters_code'] ) ||

    strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)

  {  

    $msg="The Validation code does not match!";

    

  }else{
*/
$mailContents="<strong style='font-family:Arial, Helvetica, sans-serif ; font-size:25px; color:#0088cc'>Contact Us</strong>
<strong style='font-family:Arial, Helvetica, sans-serif ; font-size:25px; color:#0e0e0e'> ".$_REQUEST['salutation']."  </strong><br/> 

<strong style='font-family:Arial, Helvetica, sans-serif ; font-size:25px; color:#0088cc'>Name :</strong>
<strong style='font-family:Arial, Helvetica, sans-serif ; font-size:25px; color:#0e0e0e'> ".$_REQUEST[name]." </strong><br/>

<strong style='font-family:Arial, Helvetica, sans-serif ; font-size:25px; color:#0088cc'>Email :</strong>
<strong style='font-family:Arial, Helvetica, sans-serif ; font-size:25px; color:#0e0e0e'> ".$_REQUEST[email]." </strong><br/>

<strong style='font-family:Arial, Helvetica, sans-serif ; font-size:25px; color:#0088cc'>Message :</strong>
<strong style='font-family:Arial, Helvetica, sans-serif ; font-size:25px; color:#0e0e0e'> ".$_REQUEST[message]." </strong><br/>

";

#################

$mail=$_REQUEST['email'];
$mailby=$_REQUEST['name']." <".$mail.">";



$xheaders = "From: $mailby\r\n"; 
$xheaders  .= 'MIME-Version: 1.0' . "\r\n";
$xheaders .= "X-Priority: 6\n"; // Urgent Message!
$xheaders.= "Content-Type: text/html; charset=iso-8859-1\n";



$mailTo="kumarshanu17aug@gmail.com";
$sub="SUBSCRIBE";



  if(@mail($mailTo,$sub,$mailContents,$xheaders)){
    $strMsg='sent';
  } else {
    $strMsg='failed';
  }
  
  //=======================
$mailTo3 = "tototours@gmail.com";

$xheaders3= 'MIME-Version: 1.0' . "\r\n";
$xheaders3.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$xheaders3.= 'Reply-To: '.$_REQUEST['name'].'<'.$mail.'>'. "\r\n";
$xheaders3.= 'From: '.$_REQUEST['name'].'info@tototours.com';

@mail($mailTo3,$sub,$mailContents,$xheaders3);
  
  //=======================
  
  $sub1="[Auto-Reply] Toto Tours";
  $mailTo1=$_REQUEST['email'];
  $mailCont ="Hello ".$_REQUEST[name].", Your message sent successfully..</p>
        <p>Thanks &amp; Regards<br> Toto Tours
      ";
  
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers .= 'From: Toto Tours <info@tototours.com>';
  
        @mail($mailTo1,$sub1,$mailCont,$headers);


//} //end if


  }
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Toto Tours</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"> 
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="fonts/fi/flaticon.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/indent.css">
    <link rel="stylesheet" href="rs-plugin/css/settings.css">
    <link rel="stylesheet" href="rs-plugin/css/layers.css">
    <link rel="stylesheet" href="rs-plugin/css/navigation.css">

 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

  </head>
  <body>
    <!-- header page-->
    <header>
      <!-- Navigation panel-->
     <nav class="main-nav js-stick">
        <div class="full-wrapper relative clearfix container">
          <!-- Logo ( * your text or image into link tag *)-->
          <div class="nav-logo-wrap local-scroll"><a href="index.php" class="logo"><img src="img/logo.png" data-at2x="img/logo.png" alt=""></a></div>
          <!-- Main Menu-->
          <div class="inner-nav desktop-nav" style="opacity: 1;">
            <ul class="clearlist magic-line-main">
                <li><a href="index.php" class="mn-has-sub">Home</a></li>
              <!-- End Item With Sub-->
              <li class="slash">/</li>
              <!-- Item With Sub-->
              <li><a href="#" class="mn-has-sub">Tours</a>
                <ul class="mn-sub">
                  <li><a href="index.php#tours" class="scrollto">UPCOMING TOURS</a></li>
                  <li><a href="index.php#recent_tours" class="scrollto">RECENT TOURS</a></li>
                </ul>
              </li>
              <!-- End Item With Sub-->
              <li class="slash">/</li>
              <!-- Item With Sub-->
              <li class="megamenu"><a href="personal-tour.php" class="mn-has-sub">Personal Tours</a></li>
              <li class="slash">/</li>
              <!-- Item With Sub-->
               <li><a href="index.php#image-gallery" class="mn-has-sub scrollto">Gallery</a></li>
              <!-- End Item With Sub-->
              <li class="slash">/</li>
              <li><a href="index.php#about-us" class="mn-has-sub scrollto">About</a>
                 <!-- Sub-->
               <!-- End Sub-->
              </li>
              <li class="slash">/</li>
              <li><a href="index.php#testimonial" class="mn-has-sub scrollto">TESTIMONIALS</a>
                 <!-- Sub-->
               <!-- End Sub-->
              </li>
              <li class="slash">/</li>
              <li><a href="index.php#newsletter" class="mn-has-sub scrollto">NEWSLETTER</a>
                 <!-- Sub-->
               <!-- End Sub-->
              </li>
              <li class="slash">/</li>
              <!-- Item-->
              <li><a href="contact-us.php" class="active">Contact</a></li></ul>
          <i class="mobile_menu_switcher"></i></div>
          <!-- End Main Menu-->
        </div>
      </nav>
      <!-- End Navigation panel-->
    
    

    <!-- music file end -->
      <!-- </div>   -->
    </header>
    <!--<div><img src="img/slider/slider-1.jpg"></div>-->
    <!-- ! header page-->
    <div class="content-body">
   <section style="background-image:url('img/bg/bg-header.jpg');" class="breadcrumbs style-2 gray-90">
        <div class="container">
            <div class="text-left breadcrumbs-item">
            <h2><span>CONTACT US</span></h2>
            </div>
        </div>
      </section>

     

 <div class="content-body">
      <div class="container page">
        <div class="row">
          <div class="col-md-6">
            <div class="contact-item">
              <h4 class="title-section mt-30"><span class="font-bold">Contact</span></h4>
              <div class="cws_divider mb-25 mt-5"></div>
              <ul class="icon contact_us_ul">
                <li> <a href="#">tototours@gmail.com <i class="flaticon-suntour-email"></i></a></li>
                <li> <a href="#">773-274-8686 (voice) <i class="flaticon-suntour-phone"></i></a></li>
                <li> <a href="#">773-274-8695 (fax) <i class="flaticon-suntour-fax"></i></a></li>
                <li> <a href="#">1326 West Albion Avenue,
Chicago, Illinois 60626-4753 USA<i class="flaticon-suntour-map"></i></a></li>
              </ul>
             
            </div>
          </div>
          <div class="col-md-6">
            <img src="img/totosnow.jpg" width="100%" />
          </div>
        </div>
      </div>
      <div class="element-section relative pt-60 pb-100">
        <div class="container">
          <h4 class="title-section mb-20"><span class="font-bold">Contact us</span></h4>
          <div class="widget-contact-form pb-0">
            <!-- contact-form-->
            <div class="email_server_responce"></div>
            <form action="#" method="post" class="form contact-form alt clearfix" novalidate="novalidate">
            	<?php if($strMsg!=''){ ?>
				<div align="center" class="verdaa24bold66953F"  style="font-size:22"><?php if($strMsg=='sent'){ ?>
                        <span class="success" style="color: #000">Hello
                          <?php echo $_REQUEST['name'] ?>
                          Your message sent successfully..</span>
                        <?php } else { ?>
                        <span class="error">Your message sending failed, please try again..</span>
                        <?php } ?>    </div> <?php } else { ?>
                        
                         <?php if(isset($msg)){?>
                         
                         <?php echo $msg;?>
                         
                         <?php } ?> 
              <div class="row">
                <div class="col-md-6 clearfix">
                  <div class="input-container">
                    <input type="text" value="<?php echo $name ?>" name="name" size="40" placeholder="Name" aria-invalid="false" aria-required="true" class="form-row form-row-first">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-container">
                    <input type="text" value="<?php echo $email ?>" name="email" size="40" placeholder="Email" aria-required="true" class="form-row form-row-last">
                  </div>
                </div>
              </div>
              <div class="input-container">
                <textarea value="<?php echo $message ?>" name="message" cols="40" rows="4" placeholder="Comment" aria-invalid="false" aria-required="true"></textarea>
              </div>
              
              <button type="submit" class="cws-button alt" name="xyx" >Submit now</button>
              <?php }?>
            </form>
            <!-- /contact-form-->
          </div>
        </div>
      </div>
    </div>
   
    </div>
    <!-- footer-->
    <?php include("includes/newsletter.php") ?>

  <div id="scroll-top"><i class="fa fa-angle-up"></i>Top</div>

  <?php include("includes/footer.php") ?> 
  
  </body>
</html>