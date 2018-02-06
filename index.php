
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>Contact us</title>
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
    <link rel="STYLESHEET" type="text/css" href="style/pwdwidget.css" /> 
</head>
<body>
<div id='fg_membersite'>
<form id='register' method='post' action="profile.php">
<center>
<fieldset >
<legend>Register</legend>

<div class='short_explanation'>* required fields</div>
<input type='text'  class='spmhidip' />

<div class='container'>
    <label for='rollno'>Enrollment No.*:</label><br/>
    <input type='text' name='rollno' id='rollno' maxlength="50" /><br/>
</div>
<div class='container'>
    <label for='sname' >Your Full Name*: </label><br/>
    <input type='text' name='sname' id='sname' maxlength="50" /><br/>
</div>
<div class='container'>
    <label for='branch' >Branch*:</label><br/>
    <input type='text' name='branch' id='branch' maxlength="50" /><br/>
</div>
<div class='container' style='height:80px;'>
    <label for='type' >Feedback Type*:</label><br/>
    <input type='text' name='type' id='type' maxlength="50" /><br/>
</div>
<div class='container'>
    <label for='message' >Message*:</label><br/>
	<textarea name='message' id='message' /></textarea>
</div>
<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
	<input type='reset' name='Clear' value='Clear' />
</div>
</fieldset>
</center>
</form>
<!--
Form Code End (see html-form-guide.com for more info.)
-->
</body>
</html>