<html>
<head>
<style type="text/css">
  body {
  	background-image: url("bg2.png");
  }
  #body {
  	width: 60%;
  	height 30%;
	padding-bottom: 30%;
  	margin-left: 20%;
  	margin-right: 20%;
  	background-color: black;
	color: white;
  	text-align: center;
  }
  #hw {
  	padding-bottom: 10%;
  }
</style>
</head>
<body style="">
  <div id="body">
	<h1 id="hw">Hello world!</h1>
	<h2>Your name is <?php echo $_POST["name"]; ?></h2>
  </div>
</body>
</html>
