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
$mailContents="<strong style='font-family:Arial, Helvetica, sans-serif ; font-size:25px; color:#0088cc'>TOTO TOURS SUBSCRIBE</strong>
<strong style='font-family:Arial, Helvetica, sans-serif ; font-size:25px; color:#0e0e0e'> ".$_REQUEST['salutation']."  </strong><br/> 

<strong style='font-family:Arial, Helvetica, sans-serif ; font-size:25px; color:#0088cc'>Email :</strong>
<strong style='font-family:Arial, Helvetica, sans-serif ; font-size:25px; color:#0e0e0e'> ".$_REQUEST[name]." </strong><br/>

";

#################

$mail=$_REQUEST['email'];
$mailby=$_REQUEST['name']." <".$mail.">";



$xheaders = "From: $mailby\r\n"; 
$xheaders  .= 'MIME-Version: 1.0' . "\r\n";
$xheaders .= "X-Priority: 6\n"; // Urgent Message!
$xheaders.= "Content-Type: text/html; charset=iso-8859-1\n";



//$mailTo="info@novussystems.in";
//$mailTo="sumeet@novus-media.com ";
$mailTo="kumarshanu17aug@gmail.com";
$sub="SUBSCRIBE";



  if(@mail($mailTo,$sub,$mailContents,$xheaders)){
    $strMsg='sent';
  } else {
    $strMsg='failed';
  }
  
  //=======================
/*$mailTo3 = "Rebirth.rajesh@gmail.com";*/
$mailTo3 = "tototours@gmail.com";

$xheaders3= 'MIME-Version: 1.0' . "\r\n";
$xheaders3.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$xheaders3.= 'Reply-To: '.$_REQUEST['name'].'<'.$mail.'>'. "\r\n";
$xheaders3.= 'From: '.$_REQUEST['name'].'kumarshanu17aug@gmail.com';

@mail($mailTo3,$sub,$mailContents,$xheaders3);
  
  //=======================
  
  $sub1="[Auto-Reply] Toto Tours";
  $mailTo1=$_REQUEST['email'];
  $mailCont ="Hello ".$_REQUEST[name].", Your message sent successfully..</p>
        <p>Thanks &amp; Regards<br> Toto Tours
      ";
  
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers .= 'From: Toto Tours <kumarshanu17aug@gmail.com>';
  
        @mail($mailTo1,$sub1,$mailCont,$headers);


//} //end if


  }
?>

<style>
/* mPopup box style */
.mpopup {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
    z-index: 1000;
}
.mpopup-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    width: 60%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

.mpopup-head {
    padding: 2px 16px;
    background-color: #ffc107;
    color: white;
}
.mpopup-main {padding: 2px 16px;}
.mpopup-main input[type="text"]{
    width: 30%;
    height: 25px;
    font-size: 15px;
}
.mpopup-main input[type="submit"]{
    padding: 5px;
    font-size: 15px;
    font-weight: bold;
    background-color: #333;
    outline: none;
    border: none;
    color: #fff;
    cursor: pointer;
}
.mpopup-foot {
    padding: 2px 16px;
    background-color: #ffc107;
    color: #000;
}

/* add animation effects */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* close button style */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.close:hover, .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.sub_today{
    color: #000;
    font-size: 25px;
}

form.form .subscribe-submit{
    top:23px!important;
}
</style>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="js/jquery.cookie.js"></script>
<script>
function subscriptionPopup(){
    // get the mPopup
    var mpopup = $('#mpopupBox');
    
    // open the mPopup
    mpopup.show();
    
    // close the mPopup once close element is clicked
    $(".close").on('click',function(){
        mpopup.hide();
    });
    
    // close the mPopup when user clicks outside of the box
    $(window).on('click', function(e) {
        if(e.target == mpopup[0]){
            mpopup.hide();
        }
    });
}

$(document).ready(function() {
    var popDisplayed = $.cookie('popDisplayed');
    if(popDisplayed == '10'){
        return false;
    }else{
        setTimeout( function() {
            subscriptionPopup();
        },150000);
        $.cookie('popDisplayed', '1', { expires: 7 });
    }
});
</script>


<!-- mPopup box -->
<div id="mpopupBox" class="mpopup">
    <!-- mPopup content -->
    <div class="mpopup-content">
        <div class="mpopup-head">
            <span class="close">×</span>
            <h3 class="sub_today">SUBSCRIBE TODAY</h3>
        </div>
            <div class="row">
                <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <form action="#" method="post" class="form contact-form mt-20 mb-20" novalidate="novalidate">
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
                              <div class="input-container">
                                <input type="text" placeholder="Enter your email" value="<?php echo $name ?>" name="name" class="newsletter-field mb-0 form-row">
                                <button type="submit" class="subscribe-submit" name="xyx" ><i class="flaticon-suntour-arrow icon-right"></i></button>
                              </div>
                              <?php }?>
                        </form>
                    </div>
                 <div class="col-md-1"></div>   
            </div>
        <div class="mpopup-foot">
            <p>RECEIVE OUR MONTHLY NEWSLETTER AND SPECIAL OFFERS</p>
        </div>
    </div>
</div>










<div id="myModal" class="modal modals fade" role="dialog">
 

 <div class="mpopup-content">
        <div class="mpopup-head">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="sub_today">SUBSCRIBE TODAY</h3>
        </div>
            <div class="row">
                <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <form action="#" method="post" class="form contact-form mt-20 mb-20" novalidate="novalidate">
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
                              <div class="input-container">
                                <input type="text" placeholder="Enter your email" value="<?php echo $name ?>" name="name" class="newsletter-field mb-0 form-row">
                                <button type="submit" class="subscribe-submit" name="xyx" ><i class="flaticon-suntour-arrow icon-right"></i></button>
                              </div>
                              <?php }?>
                        </form>
                    </div>
                 <div class="col-md-1"></div>   
            </div>
        <div class="mpopup-foot">
            <p>RECEIVE OUR MONTHLY NEWSLETTER AND SPECIAL OFFERS</p>
        </div>
    </div>
</div>
