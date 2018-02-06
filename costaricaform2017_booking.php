<?php 
if(isset($_REQUEST) && $_REQUEST['submit'] == "submit"){

    $message   =   '<span style="color:#ffc107; font-size:13px; font-weight:bold;">Extra night 11/16?:-</span>    
                   <span style="color:red;font-size:13px; font-weight:bold;">'.$_REQUEST['extra_night_bejing'].'</span><br><br>'; 

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">Extra Night 11/25?:- </span>  
                   <span style="color:red;font-size:13px; font-weight:bold;">'.$_REQUEST['extra_night_shanghai'].'</span><br><br>'; 

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">Accommodations:-</span>
                   <span style="color:red;font-size:13px; font-weight:bold;">'.$_REQUEST['accommodations'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">Final Payment By:-</span>   
                   <span style="color:red;font-size:13px; font-weight:bold;">'.$_REQUEST['final_payment_by'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">Full Name Passport:-<span>    
                   <span style="color:red;font-size:13x; font-weight:bold;">'.$_REQUEST['full_name_passport'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">Passport Number:-</span>      
                   <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['passport_number'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">Country Of Issue:-<span>    
                   <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['country_of_issue'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">Passport Exp Date:-</span>
                   <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['passport_exp_date'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">Birthdate:-</span>        
                   <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['birthdate'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">Full Street Address:- </span>
                   <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['full_street_address'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">City:-</span>
                   <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['city'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">State:- </span>
                   <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['state'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">Zip:- </span>           
                   <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['zip'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">Email Address:- </span>     
                   <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['email_address'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">Preferred Phone Location:-</span>
                   <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['preferred_phone_location'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">Preferred phone Number:- </span>
                   <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['preferred_phone_number'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">Alt Phone Location:- </span>
                   <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['alt_Phone_location'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">Alt Phone Number:- </span>  
                   <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['alt_Phone_number'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">Preferred Phone Number:-</span>
                   <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['name_i_prefer'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">Smoker:- </span>          
                   <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['smoker'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">Shirt Size:-  </span>     
                   <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['shirt_size'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">Health And Diet:-</span>      
                   <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['health_and_diet'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">Hear About:-</span>         
                   <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['hear_about'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">Card Number:- </span>       
                   <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['card_number'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">Expiry:- </span>          
                   <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['expiry'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">Sec Code:- </span>        
                   <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['sec_code'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">I have read the Liability:-</span>                 
                   <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['subscribe1'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">I have read the refund policy:-</span>            
                   <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['subscribe2'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">I authorize Toto Tours to use photos</span>       
                   <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['subscribe3'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">Travel Insurance:</span>                          
                   <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['subscribe4'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">Plan:-  </span>       
                   <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['plan'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">First name last name:- </span>        
                   <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['fname_lname'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">Booking Date:- </span>      
                   <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['booking_date'].'</span><br><br>';

    $message  .=  '<span style="color:#ffc107; font-size:13px; font-weight:bold;">I understand that entering my name and today date above:- </span>                  <span style="color:red; font-size:13px; font-weight:bold;">'.$_REQUEST['subscribe6'].'</span><br><br>';
  
  
  
        
        
$to="tototours@gmail.com";    
$subject="CORNUCOPIA COSTA RICA BOOKING";
//$from=$email;
$from="kumarshanu17aug@gmail.com";

  
$headers  = "MIME-Version: 1.0\r\n";
//$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From:$from\r\n";
$headers .= "X-Mailer: PHP v".phpversion()."\n";

$sent  =  @mail($to,$subject,$message,$headers,"-f $from"); 



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
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="fonts/fi/flaticon.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/indent.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="rs-plugin/css/settings.css">
    <link rel="stylesheet" href="rs-plugin/css/layers.css">
    <link rel="stylesheet" href="rs-plugin/css/navigation.css">
    <!--<link rel="stylesheet" href="tuner/css/colorpicker.css">-->
    <!--<link rel="stylesheet" href="tuner/css/styles.css">-->
       <link rel="stylesheet" href="pdf/print.min.css">
  <script src="pdf/print.min.js"></script>
    <style type="text/css">
      select{
      color: #000!important;
      }

      .form_head{
         margin-bottom: 10px; color: #000;
         font-weight: 600;
      }
    </style>
   
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
              <li><a href="#" class="mn-has-sub active">Tours</a>
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
              <li><a href="contact-us.php">Contact</a></li></ul>
          <i class="mobile_menu_switcher"></i></div>
          <!-- End Main Menu-->
        </div>
      </nav>
      <!-- End Navigation panel-->
        </header>

        <!-- ! header page-->
    <div class="content-body">
    <section style="background-image:url('img/bg/bg-header.jpg');" class="breadcrumbs">
        <div class="container">
            <h2><span>CORNUCOPIA</span>  Costa Rica</h2>
            <p class="font-4" style="color: #fff;">November 17 - 25, 2017 - RESERVATION FORM</p>
          </div>
        
      </section>

      <section>
        <div class="search-hotels mb-40">
          <div class="tours-container">
            <div class="tours-box">
            <p class="col-sm-12"><strong>This is an interactive form. You can type directly in the spaces provided, and there are pull-down menus for your convenience throughout the form.</strong> A deposit of $600 is required to hold your reservation. You may pay using your Visa, MasterCard, Discover, or American Express account or mail us a personal check. Be careful not to leave this screen until your form is submitted. Your browser will not retain this information. You may save a file for your records by clicking “file-save as” in your browser’s menu. Once you have completed the form, press the "Submit Now" button under the electronic signature line. If you prefer not to submit electronically, you can mail this completed form to Toto Tours, Ltd., 1326 West Albion Avenue, Chicago, IL 60626-4753 - or fax it to: 773-274-8695.</p>
              

              <?php if($sent!=''){ ?>
            <div align="center" class="verdaa24bold66953F"  style="font-size:22">
            <?php if($sent==1){ ?>
                        <span class="success" style="color: red;font-weight: 600;font-size: 25px;">Hello
                          <?php echo $_REQUEST['full_name_passport'] ?>
                          Thank you for your reservation. Let's have an adventure!</span>
                        <?php } else { ?>
                        <span class="error" style="color: red;font-weight: 600;font-size: 25px;">Your message sending failed, please try again..</span>
                        <?php } ?>    </div> 
            <?php } ?>

                <form enctype="multipart/form-data" method="post" class="stdform" id="frm" name="frm" accept-charset="utf-8" action="">
               <div method="post" class="form contact-form alt clearfix" novalidate="novalidate">
              <div class="">

                <div class="col-md-6 mb-20">
                  <h6 class="title-section-top font-4 form_head">Extra night 11/16?</h6>
                        <div class="selection-box divider-skew"><i class="flaticon-suntour- box-icon"></i>
                          <select name="extra_night_bejing" id="extra_night_bejing">
                           <option>No</option>
                           <option>Yes</option>
                          </select>
                        </div>
                  </div>


                  <div class="col-md-6 mb-20">
                  <h6 class="title-section-top font-4 form_head">Extra Night 11/25?</h6>
                        <div class="selection-box divider-skew"><i class="flaticon-suntour- box-icon"></i>
                          <select name="extra_night_shanghai" id="extra_night_shanghai">
                           <option>No</option>
                           <option>Yes</option>
                          </select>
                        </div>
                  </div>

                  <div class="col-md-6 mb-20">
                  <h6 class="title-section-top font-4 form_head">Accommodations?</h6>
                        <div class="selection-box divider-skew"><i class="flaticon-suntour- box-icon"></i>
                          <select name="accommodations" id="accommodations">
                           <option>Shared</option>
                          <option>Private</option>
                          </select>
                        </div>
                  </div>


                  <div class="col-md-6 mb-20">
                  <h6 class="title-section-top font-4 form_head">Final Payment By</h6>
                        <div class="selection-box divider-skew"><i class="flaticon-suntour- box-icon"></i>
                          <select name="final_payment_by" id="final_payment_by">
                            <option>CHOOSE ONE</option>
                           <option>Check</option>
                           <option>Credit Card (+4%)</option>
                          </select>
                        </div>
                  </div>






                <div class="col-md-6 clearfix">
                  <div class="input-container">
                    <input type="text" name="full_name_passport" id="full_name_passport" value="" size="40" placeholder="Full name on Passport:" aria-invalid="false" aria-required="true" class="form-row form-row-first">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-container">
                    <input type="text" name="passport_number" id="passport_number" value="" size="40" placeholder="Passport Number:" aria-required="true" class="form-row form-row-last">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="input-container">
                    <input type="text" name="country_of_issue" id="country_of_issue" value="" size="40" placeholder="Country of Issue:" aria-required="true" class="form-row form-row-last">
                  </div>
                </div>
              </div>
            </div>

              <div class="tours-search mb-20 col-sm-12">
                <div class="tours-calendar divider-skew"> 
                  <input name="passport_exp_date" id="passport_exp_date" placeholder="Passport Exp. Date:" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n"><i class="flaticon-suntour-calendar calendar-icon"></i>
                </div>
                <div class="tours-calendar divider-skew"> 
                  <input name="birthdate" id="birthdate" placeholder="Birthdate:" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n"><i class="flaticon-suntour-calendar calendar-icon"></i>
                </div>
              </div>
             <div method="post" class="form contact-form alt clearfix" novalidate="novalidate">
              <div class="">
                <div class="col-md-12 clearfix">
                  <div class="input-container">
                    <textarea name="full_street_address" id="full_street_address" cols="540" rows="2" placeholder="Full Street Address:" aria-invalid="false" aria-required="true"></textarea>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-container">
                    <input type="text" name="city" id="city" value="" size="40" placeholder="City:" aria-required="true" class="form-row form-row-last">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-6">
                    <div class="input-container">
                    <input type="text" name="state" id="state" value="" size="40" placeholder="State:" aria-required="true" class="form-row form-row-last">
                  </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-container">
                    <input type="text" name="zip" id="zip" value="" size="40" placeholder="Zip:" aria-required="true" class="form-row form-row-last">
                  </div>
                  </div>
                </div>
                <div class="col-md-12">
                    <div class="input-container">
                    <input type="text" name="email_address" id="email_address" value="" size="40" placeholder="Email Address:" aria-required="true" class="form-row form-row-last">
                  </div>
                  </div>

                  <div class="col-md-6">
                  <h6 class="title-section-top font-4 form_head">Preferred Phone Number</h6>
                        <div class="selection-box divider-skew"><i class="flaticon-suntour-phone box-icon"></i>
                          <select name="preferred_phone_location" id="preferred_phone_location">
                            <option>Choose One</option>
                            <option>Home</option>
                            <option>Work</option>
                            <option>Mobile</option>
                          </select>
                        </div>
                      <input type="text" name="preferred_phone_number" id="preferred_phone_number" value="" size="40" placeholder="Preferred Phone Number:" aria-required="true" class="form-row form-row-last">
                  </div>

                  <div class="col-md-6">
                  <h6 class="title-section-top font-4 form_head">Alt. Phone Number</h6>
                        <div class="selection-box divider-skew"><i class="flaticon-suntour-phone box-icon"></i>
                          <select name="alt_Phone_location" id="alt_Phone_location">
                            <option>Choose One</option>
                            <option>Home</option>
                            <option>Work</option>
                            <option>Mobile</option>
                          </select>
                        </div>
                      <input type="text" name="alt_Phone_number" id="alt_Phone_number" value="" size="40" placeholder="Alt. Phone Number:" aria-required="true" class="form-row form-row-last">
                  </div>

                  <div class="col-md-12">
                    <div class="input-container">
                      <input type="text" name="name_i_prefer" id="name_i_prefer" value="" size="40" placeholder="Nickname" aria-required="true" class="form-row form-row-last">
                    </div>
                  </div>


                  <div class="col-md-6 mb-20">
                  <h6 class="title-section-top font-4 form_head">Smoker</h6>
                        <div class="selection-box divider-skew"><i class="flaticon-suntour- box-icon"></i>
                          <select name="smoker" id="smoker">
                           <option>No</option>
                           <option>Yes</option>
                          </select>
                        </div>
                  </div>

                  <div class="col-md-6 mb-20">
                  <h6 class="title-section-top font-4 form_head">Shirt Size</h6>
                        <div class="selection-box divider-skew"><i class="flaticon-suntour- box-icon"></i>
                          <select name="shirt_size" id="shirt_size">
                            <option>Small</option>
                            <option>Medium</option>
                            <option>Large</option>
                            <option>X-Large</option>
                            <option>XX-Large</option>
                          </select>
                        </div>
                  </div>
              </div>




              <h6 class="title-section-top font-4 form_head col-sm-12">HEALTH AND DIET</h6>
              
              <div class="input-container col-sm-12">
              Please let us know of any dietary concerns, medical conditions or medications we should be aware of. We want to work with you
to accomodate your needs, and to do so we need this information before the tour begins:
                <textarea name="health_and_diet" id="health_and_diet"  cols="40" rows="4" placeholder="" aria-invalid="false" aria-required="true"></textarea>
              </div>

              <div class="input-container col-sm-12">
                <input type="text" name="hear_about" id="hear_about" value="" size="40" placeholder="How did you hear about Toto Tours?:" aria-required="true" class="form-row form-row-last">
              </div>

              <p class="col-sm-12"><strong>Payment Type: (Personal Check/Visa/MasterCard/Discover/American Express)</strong></p>

              <div class="col-md-2"><strong>Total Deposit Due: $600</strong></div>
              <div class="col-md-6">
                  <div class="input-container">
                    <input type="text" name="card_number" id="card_number" value="" size="40" placeholder="Card Number: " aria-required="true" class="form-row form-row-last">
                  </div>
              </div>

              <div class="col-md-2">
                  <div class="input-container">
                    <input name="expiry" id="expiry" placeholder="Expires" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n">
                  </div>
              </div>

              <div class="col-md-2">
                  <div class="input-container">
                    <input type="text" name="sec_code" id="sec_code" value="" size="40" placeholder="SEC Code:" aria-required="true" class="form-row form-row-last">
                  </div>
              </div>
              <div class="clearfix"></div>
              <p class="col-sm-12"><strong>Make Checks Payable To:</strong></p>
              <p class="col-sm-12">Toto Tours, Ltd., 1326 West Albion Avenue, Chicago, IL 60626-4753</p>
              <p class="col-sm-12"><strong>My signature below authorizes or acknowledges the following:</strong></p>
              

              
            </div>
              <div class="col-md-12">
                  <input type="checkbox" id="subscribe1" name="subscribe1" value="newsletter">
                  <label for="subscribe1">I have read the Liability Waiver and agree to the terms and conditions within this document. (see below)</label>
              </div>

              <div class="col-md-12">
                  <input type="checkbox" id="subscribe2" name="subscribe2" value="newsletter">
                  <label for="subscribe2">I have read the refund policy information and agree to the terms and conditions within this document. (see below)</label>
              </div>

              <div class="col-md-12">
                  <input type="checkbox" id="subscribe3" name="subscribe3" value="newsletter">
                  <label for="subscribe3">I authorize Toto Tours to use photos of me from this tour in their promotional materials.</label>
              </div>

              <div class="col-md-12">
                  <input type="checkbox" id="subscribe4" name="subscribe4" value="newsletter">
                  <label for="subscribe4">Travel Insurance: I acknowledge that Toto Tours has offered insurance to protect me in the event that I must cancel my participation in the tour before departure, or become ill while the tour is in progress. Please choose one:</label>
              </div>


              <div class="tours-search mb-20 col-md-12">
                <div class="selection-box divider-skew"><i class="flaticon-suntour-adult box-icon"></i>
                  <select name="plan" id="plan">
                    <option>I Plan to purchase travel insurance. Please tell me how.</option>
                    <option>I decline your offer to purchase travel insurance.</option>
                    <option>I am undecided. Please contact me to discuss my options.</option>
                  </select>
                </div>
              </div>


              <div class="col-md-6 mb-20">
                  <div class="input-container">
                    <input type="text" name="fname_lname" id="fname_lname" value="" size="70" placeholder="Please type your First and Last Name" aria-required="true" class="form-row form-row-last">
                  </div>
              </div>

               <div class="col-md-6 mb-20">
                 <div class="divider-skew"> 
                  <input name="booking_date" id="booking_date" placeholder="Date:" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n"><i class="flaticon-suntour-calendar calendar-icon"></i>
                 </div>
              </div>




              <div class="col-md-12">
                  <input type="checkbox" id="subscribe6" name="subscribe6" value="newsletter">
                  <label for="subscribe6">I understand that entering my name and today's date above, and checking this box, constitutes a legal signature confirming that I acknowledge and agree to the terms described herein, and warrant the truthfulness of the information provided in this document.</label>
              </div>

              <div class="col-md-12 text-right">
                <div class="col-md-4"></div>
                <div class="col-md-2">
                  <span><a href="#" onclick="printJS('book-pdf/costaricaform2017.pdf', 'pdf');return false;"><img src="img/print.jpg"></a></span>
                  <span><a href="book-pdf/costaricaform2017.pdf" target="_blank"><img src="img/pdf.png"></a></span>
                </div>

                <div class="col-md-6">
               <input type="submit" value="Submit now"  class="cws-button alt md-40 border-left"> </div>
               <input type="hidden" name="submit" id="submit" value="submit">
                </div>

               <div class="clearfix"></div>

              <br>
              </form>

     
              <h6 class="title-section-top font-4 form_head col-sm-12">WAIVER OF LIABILITY</h6>

             <p class="col-sm-12"><strong>Please read this completely and then acknowledge that you have read and understood this information on your
              reservation form. Your reservation form will not be accepted without acknowledging this information.</strong><br><br>

              Your electronic signature on the completed will signify your agreement to the terms stipulated below. Please print this
              page and save it for your records.<br><br>
              I hereby apply to attend and participate in a TOTO TOUR (“The Tour”). Upon acceptance of my application and execution of
              this Agreement by TOTO TOURS, LTD. (“Toto”), and in consideration of the services that Toto will provide on The Tour, I shall
              pay Toto their invoiced tour price which includes the cost of my lodging and the food and equipment detailed in the Itinerary
              for The Tour. The payment terms and conditions set forth in my registration form for The Tour are hereby incorporated in this
              Agreement and made a part hereof.<br><br>
              I hereby affirmatively represent and warrant that I am in good physical condition and that I have my own health insurance that
              is in full force and effect; in the event that the foregoing representation and warranty changes, I shall immediately notify Toto in
              writing.<br><br>
              I understand that Toto sponsors worldwide adventure travel excursions and activities that require me to take responsibility for
              my own safety, health, and life. I understand that The Tour may involve risk to me, and I hereby affirmatively represent and
              warrant that I voluntarily assume all responsibility for such risk, as well as for my participation, use of equipment, vehicles and
              other modes of transport, supplies, and facilities, and following all instructions and directions before, during, and after The
              Tour. I futher affirmatively represent and warrant that I voluntarily undetake this tour with full and complete knowledge that
              travel, especially outside the United States and to remote parts of the world, involves numerous and serious, grave risks, some
              potentially life threatening.<br><br>
              Notwithstanding the foregoing, I also acknowledge and understand that such risks associated with travel contribute to the
              enjoyment and excitement that I derive from such travel, and such enjoyment and excitement are the reasons for my voluntary
              participation in The Tour.<br><br>
              I also understand that all countries in the world have different rules, regulations, and laws regarding entry to their borders and
              that Toto has no responsibility for informing me as to what these rules, regulations, and laws are or how to comply with such
              rules, regulations, and laws. I hereby affirmatively represent and warrant that I have full responsibility for determining what the
              rules, regulations, and laws are for gaining entry to all countries on The Tour and for complying with such rules, regulations, and
              laws<br><br>
              The cost to me for The Tour is based, in part, upon my execution of this Agreement and the Release of Liability contained
              herein and but for such execution, the cost of The Tour to me would be greater. Therefore, in consideration of Toto allowing
              my paticipation in The Tour and other valuable consideration, the receipt and sufficiency of which are hereby acknowledged,
              I hereby release, discharge, and shall forever hold harmless TOTO TOURS, LTD., an Illinois corporation, its officers,
              directors, shareholders, employees, staff, agents, contractors, and assigns from any and all claims, causes of action, lawsuits, 
              counterclaims, cross claims, and third paty claims whatsoever, whether present, future, or unanticipated, resulting from
              or arising out of my participation in The Tour. I understand that my application for participation in The Tour is subject to
              acceptance by Toto. Upon acceptance by Toto, this Agreement shall be deemed to have been made, entered into, and
              performed in Chicago, Illinois. I also agree that this Agreement, including without limitation the Release contained herein,
              shall be controlled by, and interpreted in accordance with, Illinois law and shall be binding on my representatives, executors,
              heirs, beneficiaries, legatees, successors, agents, and assigns. I futher agree that if I initiate any proceedings in a court of law
              against Toto, jurisdiction for such proceedings shall rest only in the Circuit Court of Cook County, Illinois. In the event that I am
              entitled to a recovery from Toto, the amount of that recovery shall in all circumstances be limited to the amount of money that
              I paid to Toto for The Tour. In the event that a court of competent jurisdiction declares a portion of this Agreement invalid, the
              remainder of this Agreement shall continue to be valid, enforceable, and in full force and effect.<br><br>

              <h6 class="title-section-top font-4 form_head col-sm-12">Refund policy information</h6>
              <p class="col-sm-12">Your electronic signature on the completed Reservation Form will signify your agreement to the terms stipulated below. Please print this
              page and save it for your records. All notifications of cancellation must be received in writing. On the date your cancellation is
              received, the following penalties will apply:<br><br>
              All Tours (Domestic and International): $300.00 of your deposit is non-refundable. Final payment is normally due 80 days prior to
              departure. An earlier final payment is required for some destinations due to special circumstances relating to the tour. The final
              payment deadline is specified in the “Reservations” section of each detailed itinerary, and can also be found at the bottom of
              the invoice you will receive after booking a tour. If you cancel after the final payment deadline, the following schedule applies:<br><br>
              Deadline - 60 days &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;50% of total land price is non-refundable<br>
              59 days - 45 days &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;75% of total land price is non-refundable<br>
              44 days - departure &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;100% of total land price is non-refundable<br>
              </p>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </section>  
      <!-- ! recomended section-->
      
    </div>
   
   <?php include("includes/footer.php") ?>
    <!-- ! news popup-->
    <!--<script src="https://www.youtube.com/player_api"></script>-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/TweenMax.min.js"></script>
    <script type="text/javascript" src="js/cws_parallax.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox-media.js"></script>
    <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/jquery.form.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/bg-video/cws_self_vimeo_bg.js"></script>
    <script type="text/javascript" src="js/bg-video/jquery.vimeo.api.min.js"></script>
    <script type="text/javascript" src="js/bg-video/cws_YT_bg.js"></script>
    <script type="text/javascript" src="js/jquery.tweet.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider.js"></script>
    <!--<script type="text/javascript" src="tuner/js/colorpicker.js"></script>
    <script type="text/javascript" src="tuner/js/scripts.js"></script>-->
    <script type="text/javascript" src="js/retina.min.js"></script>
  </body>
</html>