<!doctype html>  

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Basic Form</title>
	<style>
	
	body, html {
		min-height: 100%;
		font-family: "Helvetica Neue";
	}
	
	body {
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, transparent), color-stop(100%,#000)), url('body-tile.jpg') repeat;
	}
	
	h1 {
		margin: 5% 0 .75em 0;
		text-align: center;
		font-size: 2em;
		text-transform: uppercase;
		color: #ff00ff;
		text-shadow: 0 0 6px #f0c;
		-webkit-box-reflect:below -14px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(0.25, transparent), to(rgba(255,255,255,.5)));
	}
	
	form {
		width: 300px;
		padding: 2em 0;
		margin: 0 auto;
		background: rgba(0,0,0,.25);
		border: 5px solid #333;
		border-radius: 5px;
		box-shadow: 0px 1px 3px #000;
		-webkit-box-reflect:below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(0.7, transparent), to(rgba(255,255,255,.5)));
	}
	
	.relative {
		position: relative;
	}
	
	input {
		display: block;
		width: 200px;
		padding: 1em;
		margin: 0 auto 2em auto;
		color: #333;
		background: -moz-linear-gradient(top, #4c4c4c 0%, #2c2c2c 50%, #000000 51%, #131313 100%); /* firefox */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#4c4c4c), color-stop(50%,#2c2c2c), color-stop(51%,#000000), color-stop(100%,#131313)); /* webkit */
		-webkit-box-reflect:below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(0.65, transparent), to(rgba(255,255,255,.5)));
	}
	
	label {
		display: block;
		width: 350px;
		margin: 0 auto;
		text-align: center;
		color: #F9064E;
		margin-bottom: 20px;
		position: absolute;
		z-index: 999999;
		top: 11px;
		right: -329px;
		text-align: left;
	}
	
	label:before {
		content: "\2716";
		margin-right: 5px;
	}
	
/*
	label:after {
		content: "\279C";
		display: block;
		float: right;
		margin-left: 10px;
		-webkit-transform: rotate(-90deg);
		text-shadow: 0px 0px 5px #f9064e;
	}
*/
	
	input[type="text"] {
		font-family: "Monaco";
		color: #ccc;
		border: 2px solid #333; outline: none;
		border-radius: 3px;
	}
	
	input:hover,
	input:focus {
		border-color: #468ed0;
		box-shadow: 0px 0px 3px #f0f;
	}
	
	input[type="submit"] {
		color: #dbdbdb;
		-webkit-appearance: none;
		border: none; outline: none;
		border-radius: 5px;
		padding: .5em 0;
		width: 223px;
		border: 2px solid #333;
		box-shadow: 0px 0px 5px #000;
		text-transform: uppercase;
		font-size: 1em;
		font-weight: bold;
	}
	
	input[type="submit"]:hover {
		border-color: #468ed0;
	}
	
	a.big-green,
	a.big-green:visited,
	a.big-green:active {
		width: 100px;
		margin: 0 auto;
		position: relative;
		display: block;
		height: 54px; padding: 0 76px 0 41px;
		line-height: 54px;
		background: -moz-linear-gradient(top, #A7CD30 0%, #6F9203 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#A7CD30), color-stop(100%,#6F9203));
		border-radius: 24.06px;
		-moz-border-radius: 24.06px;
		font-family: "Helvetica Neue";
		color: #fff;
		font-size: 2.071em;
		font-weight: 200;
		text-decoration: none;
		text-transform: uppercase;
		text-shadow: 0px 2px 2px rgb(132,173,26), 0px 1px 1px #333;
		border: 1px solid #81a318;
		-webkit-border-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#E4FF06), color-stop(100%,#BBE636 E4FF06)) repeat repeat; /* webkit */
		box-shadow: 0px 1px 3px #111;
		-moz-box-shadow: 0px 1px 3px #111;
		-webkit-box-reflect:below 2px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(.25, transparent), to(rgba(255,255,255,.15)));
	}
	
	a.big-green:after {
		position: absolute;
		top: 9px; right: 9px;
		width: 35px; height: 35px; border-radius: 35px;
		-moz-border-radius: 35px;
		border: 1px solid #98bd25;
		background: #6c8f00;
		content: "\2716";
		clear: both;
		display: block;
		color: #fff;
		box-shadow: inset 0px 0px 5px rgba(0,0,0,0.5);
		-moz-box-shadow: inset 0px 0px 5px rgba(0,0,0,0.5);
		-webkit-box-shadow: none;
		line-height: 35px;
		text-align: center;
		text-shadow: 0px 1px 2px #333;
	}
	
	a.big-green:hover {
		box-shadow: 0px 0px 2px #ccff00;
		-moz-box-shadow: 0px 0px 2px #ccff00;
	}
	
	</style>
</head>
<body>

<?php if(isset($_GET['submit'])) : ?>
	<h1>Welcome <?php echo $_GET['first-name'] . " " . $_GET['last-name']; ?>.</h1>
	<h1 style="margin-top: 0;">You are <?php echo $_GET['age']; ?> years old and your email is <?php echo $_GET['email']; ?></h1>
	
	<a href="http://www.sagalbot.com/pages/log-in.php" class="big-green">Reset</a>
<?php else : ?>

<h1>Login</h1>

<form action="#">
	
	<div class="relative">
		<input accesskey="f" type="text" size="25" maxlength="24" class="required" name="first-name" placeholder="First Name" />
	</div><!-- /.relative -->
	
	<div class="relative">
		<input accesskey="l" type="text" size="25" maxlength="24" class="required" name="last-name" placeholder="Last Name" />
	</div><!-- /.relative -->
	
	<div class="relative">
		<input accesskey="e" type="text" size="35" maxlength="35" class="required email" name="email" placeholder="Email Address" />
	</div><!-- /.relative -->
	
	<div class="relative">
		<input accesskey="a" type="text" size="3" maxlength="2" class="required number" name="age" placeholder="Age" />
	</div><!-- /.relative -->
	
	<input accesskey="s" type="submit" value="submit" name="submit" />

</form>
<?php endif; ?>
 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
<script src="//ajax.microsoft.com/ajax/jquery.validate/1.5.5/jquery.validate.min.js"></script>

<script>
$(window).load(function() {

	$('form').validate();

});
</script>

</body>
</html>