<?php include('includes/head.php'); ?>

<title>Contact for Yoga Training Classes | Yoga Soul</title>
<meta name="description" content="If you are looking for yoga training classes in USA, You can contact to Yoga Soul concerned person. Our Concerned person will contact you for sure.To Schedule your Yoga Class, Call now!">
<meta name="keywords" content="Yoga Teacher, Yoga Instructor, Yoga Classes in USA, Yoga Training USA">

</head>

<body class="animsition">
    <div class="page-header">
        <!-- page header -->
        <?php include('includes/header.php'); ?>
        <!-- /.navigation -->
        <!-- /.navigation -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <div class="page-caption">
                        <h1 class="page-title">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page header -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="outline pinside30">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <h1>Contact Us</h1>
                                <p>Complete your details, We will contact you surely.</p>
                                <form class="row" method="post" id="ContactForm" action="#">
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-7 col-sm-12 control-label" for="textinput">Name <span class="required">*</span></label>
                                        <div class="col-md-7 col-sm-12">
                                            <input id="txtname" name="txtname" type="text" placeholder="" class="form-control input-md" required="requred">
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-7 col-sm-12 control-label" for="textinput">Email <span class="required">*</span></label>
                                        <div class="col-md-7 col-sm-12">
                                            <input id="txtemail" name="txtemail" type="text" placeholder="" class="form-control input-md" required="requred">
                                        </div>
                                    </div>
                                    <!-- Textarea -->
                                    <div class="form-group">
                                        <label class="col-md-12 col-sm-12 control-label" for="message">Message</label>
                                        <div class="col-md-12 col-sm-12">
                                            <textarea class="form-control" rows="7" name="txtmessage" id="txtmessage" required="requred"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <input type="submit" value="Submit" onClick="return sendmail();" class="btn btn-outline">
                                        
                                        <span class="required pull-right">* Field Are Required</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="widget widget-contact">
                                <h2 class="widget-title mb40">Contact Info</h2>
                                <div class="contact-icon"><i class="fa fa-map-marker"></i></div>
                                <div class="contact-content">
                                    <p>305 NE 239th Ave <br />Old Town, FL32680, USA </p>
                                </div>
                                <div class="contact-address">
                                    <!-- contact -->
                                    <div class="contact-icon"><i class="fa fa-phone"></i></div>
                                    <div class="contact-content">
                                        <p>+1-888-344-0555</p>
                                    </div>
                                </div>
                                <!-- /.contact -->
                                <hr>
                                <h4>Head Office:-</h4>
                               <div class="contact-icon"><i class="fa fa-map-marker"></i></div>
                                <div class="contact-content">
                                    <p>85, Rohini <br />New Delhi, India </p>                                    
                                </div>
                               <div class="contact-address">
                                    <!-- contact -->
                                    <div class="contact-icon"><i class="fa fa-phone"></i></div>
                                    <div class="contact-content">
                                        <p>+91-889-021-3199</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="follow-us">
                                    <!-- follow us -->
                                    <i class="fa fa-mail-forward"></i>
                                    <a href="javascript::void(0);" class="fa fa-facebook-f"></a>
                                    <a href="javascript::void(0);" class="fa fa-twitter"></a>
                                    <a href="javascript::void(0);" class="fa fa-google-plus"></a>
                                </div>
                                <!-- /.follow us -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map" id="googleMap"></div>
    <?php include('includes/footer.php'); ?>

<script language="javascript" type="text/javascript">

function clearform()
{
document.getElementById("txtname").value="";
document.getElementById("txtemail").value="";
document.getElementById("txtmessage").value="";
return false;
}
function sendmail()
{
var str="";
if(document.getElementById("txtname").value=="")
{
str +="Please Enter Name \n";
}
if(document.getElementById("txtemail").value=="")
{
str += "Please Enter EmailId\n";
}  
else
{
	var CheckEmail = /^[a-zA-Z0-9\-_]+(\.[a-zA-Z0-9\-_]+)*@[a-z0-9]+(\-[a-z0-9]+)*(\.[a-z0-9]+(\-[a-z0-9]+)*)*\.[a-z]{2,4}$/;
	
	if(!CheckEmail.test(document.getElementById("txtemail").value))
	{
	  str += "Enter valid EmailId\n";
	}
} 


if(document.getElementById("txtmessage").value=="")
{
str +="Please Enter Message \n";
}
else
{
if(document.getElementById("txtmessage").value.length<30)
{
str+=" Message Length should be at least 50 char";
}
}
if(str!="")
{
alert(str);
return false;
}
var frm = document.getElementById('ContactForm');
frm.submit();
}
</script>
<?php
if(isset($_POST["txtname"]))
{
  
    $name = $_POST["txtname"];
    $email = $_POST["txtemail"];
    $msg = $_POST["txtmessage"];
    //$to = 'developer.advocosoft@gmail.com';
    $to = 'info@yogasoul.club';
    $subject = "Yoga Training Center";

$message = "
<html>
<head>
<title>Yoga Training Center</title>
</head>
<body>
<p>User Detail:-</p>
<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Message</th>
</tr>
<tr>
<td>".$name."</td>
<td>".$email."</td>
<td>".$msg."</td>
</tr>
</table>
</body>
</html>
";
//echo $message;exit;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
//$headers .= 'From: <webmaster@example.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";



 if(mail($to,$subject,$message,$headers)){
 echo '1';}else{
echo 's';
 }   
?>
<script language="javascript" type="text/javascript">
alert("Your Message has been submitted successfully, our team will contact you shortly.");
</script>
<?php
}
?>
    <script>
        function initMap() {
            var myLatLng = {
                lat: 29.642940,
                lng: -83.047540
            };

            var map = new google.maps.Map(document.getElementById('googleMap'), {
                zoom: 8,
                center: myLatLng,
                scrollwheel: false,
            });
            var image = 'images/map-pin.png';
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                icon: image,
                title: 'Yoga Training Center'

            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?&amp;callback=initMap" async defer></script>

