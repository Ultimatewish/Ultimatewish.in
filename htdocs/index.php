<!DOCTYPE>
<html>
<?php require 'dbconfig.php';
session_start();
mysqli_set_charset( $con, 'utf8');

 ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
    <link href="https://fastcdn.org/Animate.css/3.4.0/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  
<style>
.body {
	background-size:100%;
	background-repeat: no-repeat;
	position: relative;
	background-attachment: fixed;
}
.m2 {
    position: fixed;
    right: 2%;
    width: auto;
    height: 100%;
    top: 1%;
    color: #000;
}

.m1 {
    position: fixed;
    left: 2%;
    width: auto;
    height: 100%;
    top: 1%;
    color: #000;
}

.m3 {
    background: #fff;
    max-width: 1200px;
    min-height: 200px;
    margin: 0 auto;
    text-align: center;
    padding: 15px;
    color: #999;
    padding-bottom: 30px;
    box-shadow: 0 0 10px 1px rgba(0, 0, 0, .14), 0 1px 14px 2px rgba(0, 0, 0, .12), 0 0 5px -3px rgba(0, 0, 0, .3);
    background-size: 100%;
}

.message {
    color: #fff;
    font-size: 20px;
    font-weight: bold;
    margin-top: 20px;
    text-shadow: 0px 0px 10px #afafaf;
}

.username {
    color: black;
    background: url(img/download.png);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: swing 4s infinite;
    text-transform: uppercase;
    margin-bottom: 5px;
    font-size: 40x;
    padding: 0 10px;
    font-family: cursive, sans-serif;
}

.username2 {
    color: black;
    background: url(img/goldenglitter.png);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: swing 4s infinite;
    text-transform: uppercase;
    margin-bottom: 5px;
    font-size: 40x;
    padding: 0 10px;
    font-family: cursive, sans-serif;
}

.username3 {
    color: black;
    background: url(img/darkblue.png);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: swing 4s infinite;
    text-transform: uppercase;
    margin-bottom: 5px;
    font-size: 40x;
    padding: 0 10px;
    font-family: cursive, sans-serif;
}

.enter-name input[type=name] {
    background-color: #0affc4;
    color: black;
    border-radius: 10px;
    box-sizing: border-box;
    border-color: black;
    padding: 5px;
    position: fixed;
    left: 10px;
    bottom: 5px;
    height: 50px;
    width: 70%;
    text-align: center;
    font-size: 18px;
    display: inline-block;
}

.enter-name .btnn {
    border-radius: 10px;
    font-size: 18px;
    padding: 4px;
    position: fixed;
    right: 2px;
    bottom: 5px;
    height: 50px;
    width: 23%;
    display: inline-block;
    color: black;
    background-color: #10E43A;
    border-color: black;
    letter-spacing: .5px;
    transition: .2s ease-out;
    cursor: pointer;
    line-height: 36px;
    outline: 0;
    text-transform: uppercase;
    vertical-align: middle;
    text-decoration: none;
    animation-duration: 4s !important;
}

.footerbtn {
    display: block;
    line-height: 15px;
    position: fixed;
    left: 0px;
    bottom: 10px;
    height: 55px;
    border-radius: 15px;
    box-sizing: border-box;
    padding: 10px;
    background: #041c71;
    color: #ffffff;
    font-size: 15px;
    text-align: center;
    text-decoration: none;
    width: 95%;
    margin-left: 10px;
    margin-right: 30px;
    box-shadow: 0 4px 12px 0 rgba(0, 0, 0, .3);
    animation: tada 3s infinite;
    /*-webkit-transform: translate3d(30%, 0, 0);
    transform: translate3d(30%, 0, 0);            */
}

.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 500px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.title{
	background-color: #7A9DE3;
	color: white;
	font-family:sans-serif;
	font-size: 28px;
  padding: 20px;
	
}
.button3 {
    border: none;
    color: white;
    padding: 10px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button3 {
    background-color: white; 
    color: black; 
    border: 2px solid #f4e542;
}

.button3:hover {
    background-color: #f4e542;
    color: Black;
	        .message {
            color: #fff;
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
            text-shadow: 0px 0px 10px #afafaf;
}
</style>
<title> Lucky Quiz on UltimateWish</title>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137805380-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137805380-1');
</script>



</head>

<!--<body style="background-image: url(background.jpg); background-repeat: no-repeat; background-size: cover; center  ">-->

<body>

   <marquee class="m1" behavior="scroll" direction="up" scrolldelay="0">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
    </marquee>
    <!--left- end-->

    <!--right-->
    <marquee class="m2" behavior="scroll" direction="down" scrolldelay="0">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
        <br>
        <img src="img/corner.png" height="75px" width="40px">
    </marquee>

 <center>
<div class="title"><img src="img/logo.png"></font></div>

   <div class="m3" align="center">

 		
<?php 															
																if (isset($_POST['click']) || isset($_GET['n'])) {
																@$_SESSION['clicks'] += 1 ;
																$c = $_SESSION['clicks'];
																if(isset($_POST['userans'])) { $userselected = $_POST['userans'];
																
																$fetchqry2 = "UPDATE `quiz` SET `userans`='$userselected' WHERE `id`=$c-1"; 
																$result2 = mysqli_query($con,$fetchqry2);
																}
		  
																	
 																} else {
																	$_SESSION['clicks'] = 0;
																}
																
																//echo($_SESSION['clicks']);
																?>
				
<div class="bump"><br> <?php if($_SESSION['clicks']==0){ ?> 
     <b>  <h1 class="username" id="getinvitee" style="font-family:cursive, sans-serif; font-size: 22px">[Your Name]</h1>
        <h1 class="username" style="font-family:cursive, sans-serif; font-size: 22px">ने जाने अपनी किस्मत के रहस्य!<br> अब आपकी बरी! </h1> <br></b>

   <script>
        function getParameterByName(n, url) {
            if (!url) url = window.location.href;
            n = n.replace(/[\[\]]/g, '\\$&');
            var regex = new RegExp('[?&]' + n + '(=([^&#]*)|&|#|$)'),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, ' '));
        }
       
       var n = "Your Name";
       
       // Solving null (or no query string issue)
        if (!getParameterByName('I'))
         {
             n = "NAME"; 
             
         }
        else
        {
          n = getParameterByName('I');
          n = n.split(' ').join('_');
          n = n.split('+').join('_');
       
        }
         

		        
        document.getElementById("getinvitee").innerHTML = n.split('_').join(' ');
        document.getElementById("upper_text").innerHTML = n.split('_').join(' ');
    </script>

<script>
         // checking if the form is submitted
         var url_val = window.location.href;
         if ( (url_val.indexOf("I=")) >= 0 )
           {
          // alert ("is submitted");           
           document.getElementById("take_user_input").style.display = 'none';
           }

</script>		
    
 <form method="get" action="">
            
			अपनी जन्म तिथि यहाँ लिखें <br>
            <input type="date" name="bday" id="d">
			<br> <br>
			अपनी राशिफल का चयन करें  <br>
			  <select name="rashi">
     <option></option>
    <option value="मेष">मेष</option>
    <option value="वृषभ">वृषभ</option>
    <option value="मिथुन">मिथुन</option>
    <option value="कर्क">कर्क</option>
    <option value="सिंह">सिंह</option>
    <option value="कन्या">कन्या</option>
    <option value="तुला">तुला</option>
    <option value="वृश्चिक">वृश्चिक</option>
    <option value="धनु">धनु</option>
    <option value="मकर">मकर</option>
    <option value="कुम्भ">कुम्भ</option>
    <option value="मीन">मीन</option>
  </select>
  <br><br>
<form method="get" action="#">
        <div id="take_user_input">
		   अपना नाम यहाँ लिखें  <br>
</form>
		   <input type="name" name="n" id="n" placeholder=" Enter your name here..."> <br> <br>
            <input type=submit value="Go">
			
</form>
        </div>
		
		<br><br><br>
<iframe src="https://giphy.com/embed/Dr7ZfXzYfQQJW" width="device-width" height="device-height" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<p><font size="3px">
  आवश्यक सूचना: <br>
* इस साइट पे दिए गए अन्य प्रश्न एवं किस्मत प्रतिशत केवल मनोरंजन के लिए हैं| इनका वास्तविकता से कोई लें दें नहीं है| <br>
* यहाँ मौजूद अन्य चित्र/फोटो/एनीमेशन पे साइट मालिकों का कानूनी अधिकार नहीं है| किसी आपत्ति क लिए कृपया हमें मेल करें| <br>
</font></p>
    </form> <?php } ?></form></div>
 <form action="" method="post">

				
<table align="center"><?php if(isset($c)) {   $fetchqry = "SELECT * FROM `quiz` where id='$c'";
				$result=mysqli_query($con,$fetchqry);
				$num=mysqli_num_rows($result);
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC); }
		  ?>
</table>
<table align="center">
   <tr><td><h3><br><b><?php echo @$row['que'];?></b></h3></td></tr> <?php if($_SESSION['clicks'] > 0 && $_SESSION['clicks'] <= 5){ ?>
   <tr><td><input required type="radio" name="userans" value="<?php echo $row['option 1'];?>">&nbsp;<?php echo $row['option 1']; ?><br>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['option 2'];?>">&nbsp;<?php echo $row['option 2'];?></td></tr><br><br>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['option 3'];?>">&nbsp;<?php echo $row['option 3']; ?></td></tr><br><br>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['option 4'];?>">&nbsp;<?php echo $row['option 4']; ?><br><br><br></td></tr><br><br><br>
 <tr><td><button class="button3" name="click" >Next</button></td></tr>  <?php }  
																	?> 
	</table>




 <?php if($_SESSION['clicks']>=6){ 
	$qry3 = "SELECT `ans`, `userans` FROM `quiz`;";
	$result3 = mysqli_query($con,$qry3);
	$storeArray = Array();
	while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
     if($row3['ans']==$row3['userans']){
		 @$_SESSION['score'] += 1 ;
	 }
}
 
 ?> 
 
        <h1 class="username" id="getname" style="font-family:cursive, sans-serif; font-size: 52px">[Your Name]</h1>
        <br/> <br/>
         <h1 class="username3" style="font-family:cursive, sans-serif; font-size: 42px"> Result <br> <br> </h1>
 <h1 class="username3" style="font-family:cursive, sans-serif; font-size: 27px"><span>सही उत्तर:&nbsp;<?php echo $no = @$_SESSION['score']; 
 session_unset(); ?></span><br>
 <span>आपका स्कोर:&nbsp<?php echo $no*2; ?> </span><br></h1>
 <?php $luck_pct=mt_rand(60,100); ?> 
 <h1 class="username2" style="font-family:cursive, sans-serif; font-size: 27px"><span>आज की किस्मत प्रतिशत    :&nbsp<?php echo $luck_pct; echo "%"; ?></span></h1>
 <br> 
 <br> <br>
 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-1532280877278716",
    enable_page_level_ads: true
  });
</script> 

        <!--message-end-->

    </div>




   <script>
        function getParameterByName(n, url) {
            if (!url) url = window.location.href;
            n = n.replace(/[\[\]]/g, '\\$&');
            var regex = new RegExp('[?&]' + n + '(=([^&#]*)|&|#|$)'),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, ' '));
        }
       
       var n = "Your Name";
       
       // Solving null (or no query string issue)
        if (!getParameterByName('n'))
         {
             n = "Your Name"; 
             
         }
        else
        {
          n = getParameterByName('n');
          n = n.split(' ').join('_');
          n = n.split('+').join('_');
       
        }
         

		        
        document.getElementById("getname").innerHTML = n.split('_').join(' ');
        document.getElementById("upper_text").innerHTML = n.split('_').join(' ');
    </script>


    <script>
        var type_text = "";
        type_text = "<a class='footerbtn enter-name' href='whatsapp://send?text=%F0%9F%91%8b I&#39;m " +  n.split('_').join(' ') + " %0AI just took the test your luck quiz! Test your luck now! %0A %F0%9F%91%87%F0%9F%91%87 %0A ultimatewish.in/?I=" + n + "'";
        type_text = type_text + "><img  src='img/whatsapp.gif' with=35px height=35px> Click here to share on Whatsapp <img src=img/whatsapp.gif  with=35px height=35px></a> ";
        

         var url_val = window.location.href;
             
         if ( (url_val.indexOf("n=")) >= 0 )
           {
             //alert ("not submitted");           
             document.write(type_text);
           }

    </script>




<script>
         // checking if the form is submitted
         var url_val = window.location.href;
         if ( (url_val.indexOf("n=")) >= 0 )
           {
          // alert ("is submitted");           
           document.getElementById("take_user_input").style.display = 'none';
           }

</script>


    <img src="img/giphy.gif" style="position: absolute; width: 20%;top: -5%; left: 56px;;">
    <img src="img/giphy.gif" style="position: absolute; right: 15; top: 0%;">
	
<?php } ?>
 <!-- <script type="text/javascript">
    function radioValidation(){
		/* var useransj = document.getElementById('rd').value;
        //document.cookie = "username = " + userans;
		alert(useransj); */
		var uans = document.getElementsByName('userans');
		var tok;
		for(var i = 0; i < uans.length; i++){
			if(uans[i].checked){
				tok = uans[i].value;
				alert(tok);
			}
		}
    }
</script> -->

</body>

 
 

</html>
