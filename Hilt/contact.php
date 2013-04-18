<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/php-contact-form-tutorial.html
*/
require_once("./include/fgcontactform.php");

$formproc = new FGContactForm();


//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('egurinowitsch@yahoo.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('CnRrspl1FyEylUj');


if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
       	print '<script type="text/javascript">'; 
		print 'alert("Thank you! Your email has been sent.")'; 
		print '</script>';  
		print '<script type="text/javascript">document.location.href = "contact.php";</script>';
   }
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kevin Hilt / Contact</title>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/contact.css">
<link rel="shortcut icon" href="img/icon 2.ico" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
<script src="js/gen_validatorv31.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
</head>

<body id="body_contact">
<header>
    	<div id="header_left">
        <div id="logo_all">
        	<a id="home_logo" href="index.html"><img  id="logo" src="img/logo.png" alt="Kevin Hilt"/></a>
        </div>
        
        <div id="header_text">
    		<h1>Kevin Hilt</h1>
        	<h2>- Online Resume -</h2>
        </div>
        </div>
       <div id="header_right">
        	<a id="email" href="contact.php"><h3>kevinhilt@ymail.com</h3></a>
        	<p id="address">100 Wheaton Dr.<br/>
        	Monaca, Pa 15061<br/>
        	724.601.0498</p>
       </div>
    </header>
    	<nav>
        	<ul id="nav_list_all">
           	 	<li class="nav_list"><a class="nav_links" href="index.html">HOME</a></li>
                <li class="nav_list"><a class="nav_links" href="timeline.html">TIMELINE</a></li>
            	<li class="nav_list"><a class="nav_links" href="Hilt_Electric_Photo_Gallery.html">GALLERY</a></li>
            	<li class="nav_list"><a class="nav_links" href="img/final resume.pdf" target="_blank">RESUME</a></li>
                <li class="nav_list"><a class="nav_links" href="contact.php">CONTACT</a></li>
            </ul>
        </nav>
 	<section id="contact">
    <div id="form">
    <h1 class="contact_header">Contact</h1>
    	<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >


<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

<div class='short_explanation'><span class="asterik">*</span> Required Fields</div>

<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='name' >Your Full Name<span class="asterik">*</span>: </label><br/>
    <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='contactus_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='name' >Company Name: </label><br/>
    <input type='text' name='company_name' id='name' value='<?php echo $formproc->SafeDisplay('company_name') ?>' maxlength="50" /><br/>   
</div>
<div class='container'>
	<label for='name' >Telephone Number: </label><br/>
	 <input type="text" name="area_code" id="area_code" value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="3"/>
               - <input type="text" name="digits1" id="digits1" value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="3"/> -
                <input type="text" name="digits2" id="digits2" value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="4"/>
</div>
<div class='container'>
    <label for='email' >Email Address<span class="asterik">*</span>:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>

<div class='container'>
    <label for='message' >Message<span class="asterik">*</span>:</label><br/>
    <textarea rows="10" cols="50" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
     <span id='contactus_message_errorloc' class='error'></span>
</div>


<div class='container'>
    <input type='submit' id='submit' name='Submit' value='Submit' />
</div>

</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

      </div>  
    </section>       
        <footer>
    	<div id="footer_area">
    	<ul class="footer_nav">
        	<li><a class="footer_links" href="index.html">Home</a></li>
            <li><a class="footer_links" href="timeline.html">Timeline</a></li>
            <li><a class="footer_links" href="Hilt_Electric_Photo_Gallery.html">Photo Gallery</a></li>
        </ul>
        <ul class="footer_nav">
        	<li><a class="footer_links" href="img/final resume.pdf" target="_blank">Resume</a></li>
            <li><a class="footer_links" href="contact.php">Contact</a></li>
            <li><a class="footer_links" href="references.html">References</a></li>
        </ul>
        <ul class="footer_nav">
        	<li><a class="footer_links" href="Hilt_Electric.html">Hilt Electric</a></li>
            <li><a class="footer_links" href="Residential_Commercial_Electrician.html">Residential / Commercial Electrician</a></li>
            <li><a class="footer_links" href="Nuclear_Industrial_Electrician.html">Nuclear / Industrial Electrician</a></li>
        </ul>
        </div>
    </footer>
<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");
	
	frmvalidator.addValidation("message","req","Please provide your message");

// ]]>
</script>
    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="js/fittext.js"></script>
<script>
  jQuery("#responsive_headline").fitText(8, { minFontSize: '8em', maxFontSize: '28em' });
</script> 
<script>
  jQuery("footer").fitText(8, { minFontSize: '8em', maxFontSize: '18em' });
</script>
<script>
  jQuery("nav").fitText(8, { minFontSize: '12em', maxFontSize: '16em' });
</script>
 <script>
  jQuery("header").fitText(8, { minFontSize: '14em', maxFontSize: '16em' });
</script>
</body>
</html>