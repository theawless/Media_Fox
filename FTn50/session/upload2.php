<!DOCTYPE html>
<html lang="en">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title style="color:black; ">Upload Multiple FIles</title>
	<link rel="stylesheet" type="text/css" href="css/pure-min.css">
	<link rel="stylesheet" type="text/css" href="css/style2.css">

			<!--STYLESHEETS-->
	<link href="css/style3.css" rel="stylesheet" type="text/css" />
	<link href="../css/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="../css/animate.min.css" type="text/css">
        <link rel="stylesheet" href="../css/creative.css" type="text/css">

 		<script type="text/javascript" src="../js/js_upload1/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
		
		<script src="../js/script2.js"></script>
		
	<?php include('session.php');?>
</head>

<body>








    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">

       <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->

            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

                    <span class="sr-only">Toggle navigation</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                </button>

                <a class="navbar-brand page-scroll" href="../index.html">MediaFox</a>

            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <ul class="nav navbar-nav navbar-right">


             <li><a class="page-scroll"  href="profile.php"><?php echo $login_session; ?></a></li>

             <li><a class="page-scroll"  href="logout.php">Sign Out</a>
</li>
          </ul>

        </div>

            <!-- /.navbar-collapse -->

       </div>

        <!-- /.container-fluid -->

    </nav>




    <header>

        <div class="header-content">

            <div class="header-content-inner">
  							<!-- Modal for "File Uploader" form -->

	<br></br><br></br><br></br>
	<script type="text/javascript">
        function show() { document.getElementById('password').style.display = 'block';document.getElementById('pass_text').style.display = 'block'; }
        function hide() { document.getElementById('password').style.display = 'none';document.getElementById('pass_text').style.display = 'none'; }
	</script>
	<form name="form" id="form" action="" class="upload-form" enctype="multipart/form-data" method="post">
    		<div class="header"><h1>Upload Folder</h1></div>
    		<div class="content">
			<div style="background-color:red"><p id="output"></p></div>
				<div style="background-color:red"><p id="output2"></p></div>
			<div class="status"></div>
			<div class="footer">
			<h3 align="left" style="display:none" id="pass_text">PASSWORD</h3>
			<input style="float:left;display:none" name="password" id="password" type="password" class="input password" value="" onfocus="this.value=''" /><!--END PASSWORD-->
			<input type="text" id="expiry" name="expiry" style="color:red"/>
				<p align="right" style="color:black" value="-1">Expires after</p>
				
			
		<input type="file" id="files" name="files[]" multiple="" webkitdirectory=""  mozdirectory="">​
		<input type="radio" name="privacy" value="Public" id="privacy1" checked onclick="hide();">

					<label for="privacy">Public</label>

		
		<input type="radio" name="privacy" value="Private" id="privacy2" onclick="show();">

					<label for="privacy">Private</label>

		
		<input type="radio" name="privacy" value="Unlisted" id="privacy3" onclick="hide();">

					<label for="privacy">Unlisted</label>
				
				<input id="submit" type="submit" name="submit" value="Upload" class="button"/>
					</div>
    		</div>

	<div class="progress">
		<div class="bar"></div >
		<div class="percent">0%</div >
	</div>
	<br></br>
	</form>
	<br></br><br></br>
	<!-- javascript dependencies -->
	

	<script type="text/javascript" src="../js/js_upload1/jquery.form.min.js"></script>
	<!-- main script -->
	

            </div>

        </div>

    </header>



    
  
</body>

</html>