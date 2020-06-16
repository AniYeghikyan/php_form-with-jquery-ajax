  <?php
// Starting session
// session_start();
 

?>

 <?php
// $cookie_address = "user";
// $cookie_value = "John Doe";
// setcookie($cookie_address, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
  <!DOCTYPE HTML>
    <html>
    <head>
<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

</head>
<body>
	<div id="frmContact">
<div id="mail-status"></div>
<div class="input-group">
<label style="padding-top:20px;"></label>
<span id="userName-info" class="info"></span><br/>
<input type="text" name="userName" id="userName" class="demoInputBox" placeholder="Name">
</div>
<div class="input-group">
<span id="lastname-info" class="info"></span><br/>
<input type="text" name="lastname" id="lastname" class="demoInputBox" placeholder="Last Name">
</div>
<div class="input-group">
<span id="phon-info" class="info"></span><br/>
<input type="text" name="phon" id="phon" class="demoInputBox" placeholder="Phon">
</div>
<div class="input-group">
<span id="address-info" class="info"></span><br/>
<input type="text" name="address" id="address" class="demoInputBox" placeholder="Address">
</div>
   <div class="input-group">
       <span id="userEmail-info" class="info"></span><br/>
        <input type="text" name="userEmail" id="userEmail" class="demoInputBox" placeholder="Email">
    </div>
<div id="gender">
 <span id="gender-info" class="info"></span><br/>
  Gender:
<input type="radio" name="gender"  id="gender1" value="female">Female
  <input type="radio" name="gender"  id="gender2" value="male">Male
  <input type="radio" name="gender"  id="gender3" value="other">Other   
  <br><br>
  </div>
 <div id="language">
 <span id="language-info" class="info"></span><br/>
 Language:
 <input type="checkbox" name="language" id = "language" value="english">English
  <input type="checkbox" name="language" id = "language1" value="russian">Russian
  <br><br>
   </div> 
   
   <div>
<button name="submit" class="btnAction" onClick="sendContact();">Send</button>
</div>
</div>
</div>
<script>
function sendContact() {
var valid;	
valid = validateContact();
if(valid) {
jQuery.ajax({
url: "result.php",
data:'userName='+$("#userName").val()+'&lastname='+$("#lastname").val()+'&userEmail='+$("#userEmail").val()+'&phon='+$("#phon").val()+'&address='+$("#address").val()+'&gender='+$("input[name='gender']:checked").val()
+'&language='+$("input[name='language']:checked").val(),
type: "POST",
success:function(data){
$("#mail-status").html(data);
},
error:function (){}
});
}
}

function validateContact() {
var valid = true;	
$(".demoInputBox").css('background-color','');
$(".info").html('');

if(!$("#userName").val()) {
$("#userName-info").html("(required)");
$("#userName").css('background-color','#FFFFDF');
valid = false;
}

if(!$("#lastname").val()) {
$("#lastname-info").html("(required)");
$("#lastname").css('background-color','#FFFFDF');
valid = false;
}

if(!$("#userEmail").val()) {
$("#userEmail-info").html("(required)");
$("#userEmail").css('background-color','#FFFFDF');
valid = false;
}
if(!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
$("#userEmail-info").html("(invalid)");
$("#userEmail").css('background-color','#FFFFDF');
valid = false;
}
if(!$("#phon").val()) {
$("#phon-info").html("(required)");
$("#phon").css('background-color','#FFFFDF');
valid = false;
}
if(!$("#address").val()) {
$("#address-info").html("(required)");
$("#address").css('background-color','#FFFFDF');
valid = false;
}

if(!$("input[name='gender']:checked").val()) {
$("#gender-info").html("(required)");
$("#gender").css('background-color','#FFFFDF');
valid = false;
}
if(!$("input[name='language']:checked").val()) {
$("#language-info").html("(required)");
$("#language").css('background-color','#FFFFDF');
valid = false;
}

return valid;
}
</script>
</body>
</html>




<?php

// Storing session data
// $_SESSION["email"] =  $_POST["email"];
// $_SESSION["lastname"] =  $_POST["lastname"];
?>



