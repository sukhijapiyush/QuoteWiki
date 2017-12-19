<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Registration Form</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css"> </head>
<!-- NAVBAR
================================================== -->

<body>
	<div class="container">
		<div class="row" style="margin-top:20px">
			<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
				<form name="form_login" method="post" action="signup.php" role="form">
					<fieldset>
						<h2>Please Sign Up</h2>
						<hr class="colorgraph">
						<div class="form-group">
							<input name="user_id" type="text" id="user_id" class="form-control input-lg" placeholder="Username"> </div>
						<div class="form-group">
							<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password"> </div>
						<div class="form-group">
							<input type="text" name="word" id="word" class="form-control input-lg" placeholder="About Yourself"> </div> <span class="button-checkbox">
          <hr class="colorgraph">
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <input type="submit" name="Submit" value="Signup" class="btn btn-lg btn-success btn-block">
            </div>
           </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>



<?php     //start php tag
//include connect.php page for database connection
Include('connect.php');
//if submit is not blanked i.e. it is clicked.
if (isset($_REQUEST['Submit'])) //here give the name of your button on which you would like    //to perform action.
{
// here check the submitted text box for null value by giving there name.
	if($_REQUEST['user_id']=="" || $_REQUEST['password']==""|| $_REQUEST['word']=="")
	{
	echo " Field must be filled";
	}
	else
	{
	   $sql1= "insert into login(username,password,word) values('".$_REQUEST['user_id']."','".$_REQUEST['password']."','".$_REQUEST['word']."')";
	  $result=mysqli_query($con,$sql1)
	    or exit("Sql Error".mysql_error());
	  if($result)
	   {
//here you can redirect on your file which you want to show after login just change filename ,give it to your filename.
		   //header("location:filename.php"); 
 //OR just simply print a message.
         header("location:Resultpage/signupsuccess.html");	
		           }
	    else
		{
			header("location:Resultpage/signupfail.html");	
		}
	}
}	
?>


</body>
</html>