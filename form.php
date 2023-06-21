<?php 
$con=mysqli_connect('localhost','root','');
$dp=mysqli_select_db($con,'kidzee');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kidzee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <style>
#grad1 {
    height: 50px;
    background: linear-gradient(to right, #1F276F , #4556FD); 
}
</style>

</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid" id="grad1">
    <div class="navbar-header">
     <a class="navbar-brand" href="#"><a href="facilities.html"><img src="imag/download.png"></a>
    </div>
    <ul class="nav navbar-nav" style="">
      <li class=""><a href="index.html">Home</a></li>
      
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">About Us<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="message.html">About Us</a></li>
          <li><a href="facilities.html">Facilities</a></li>
</ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Infrastructure<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="cl_rm.html">Class Room</a></li>
          <li><a href="od_pl.html">Play Area</a></li>
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Addmission/Enquiry<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="form.html">Addmission</a></li>
          <li><a href="enquiry_form.html">Enquiry</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Gallery<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="image.html">Our Gallery</a></li>
        </ul>
      </li>

      <li class=""><a href="contact_us.html">Contact Us</a></li></ul>
    </ul>
 
  </div>
</nav>
<br><br>

<form method="post">
<center><img " src="imag/download.png" width="18%" height="150px"></center>
<div class="container"><br>
	<div class="jumbotron" style="background-color:darkcyan;">
	<div class="jumbotron" style="background-color:white;margin:10px;">
		<div class="form-horizontal">
			<div class="form-group">
				<u><b><i><big><h2 align="center">Addmission Form</h2></big></i></b></u>
				 Date:<input type="date" name="date" placeholder="Date" required="date"><br><br>
				<img src="imag/imag1.png" width="20%" height="200px" name="image"><br><br>
				<input type="text" name="name" class="form-control" placeholder="Enter Your Name" required="name"><br>
		        Dob:-<input type="date" name="dob" required="date"><br><br>
				<input type="radio" name="gender" required="gender" value="Male">Male
				<input type="radio" name="gender" required="gender" value="Female">Female <br><br>
				<input type="text" name="father_name" class="form-control" placeholder="Father's Name" required="father's name"><br>
				<input type="text" name="occupation" class="form-control" placeholder="Occupation" required="Occupation"><br>	
				<input type="text" name="mother_name" class="form-control" placeholder="Mother's Name" required="Mother's Name"><br>
				<input type="text" name="mother_occupation" class="form-control" placeholder="Occupation" required="Occupation"><br>
				<input type="text" name="address" class="form-control" placeholder="Address" required="Address"><br>	
				<input type="number" name="telephone_no" class="form-control" placeholder="Telephone Number"><br>
				<input type="number" name="mob_no " class="form-control" placeholder="Mobile Number" required="Mobile Number"><br>
				<input type="text" name="religion" class="form-control" placeholder="Religion" required="Religion"><br>
				<input type="text" name="caste" class="form-control" placeholder="Caste" required="Caste"><br>
				<input type="text" name="previous_school" class="form-control" placeholder="Previous School Name" required="Previous School Name"><br>
				Class to which Addmission is Desired:- <input type="radio" name="class" required="cls" value="Play_Group">Play Group
        <input type="radio" name="class" required="cls" value="Nursery">Nursery
        <input type="radio" name="class" required="cls" value="Jr.KG">Jr.KG
        <input type="radio" name="class" required="cls" value="Sr.KG">Sr.KG <br><br>
        <hr>
				<img align="right" src="imag/imag2.png" width="40%" height="125px">
        <br><br><br><br><br><br>
				<button class="btn btn-primary btn-block btn-lg" type="button" name="btnsub">Submit</button><br>
			</div>
		</div>

    <?php 
        if(isset($_POST['btnsub']))
        {
          $date=$_POST['date'];
          $image=$_POST['image'];
          $name=$_POST['name'];
          $dob=$_POST['dob'];
          $gender=$_POST['gender'];
          $father_name=$_POST['father_name'];
          $occupation=$_POST['occupation'];
          $mother_name=$_POST['mother_name'];
          $mother_occupation=$_POST['mother_occupation'];
          $address=$_POST['address'];
          $telephone_no=$_POST['telephone_no'];
          $mob_no=$_POST['mob_no'];
          $religion=$_POST['religion'];
          $caste=$_POST['caste'];
          $previous_school=$_POST['previous_school'];
          $class=$_POST['class'];
          $query="INSERT INTO addmission values('$date','$image','$name','$dob','$gender','$father_name','$occupation','$mother_name','$mother_occupation','$address','$telephone_no','$mob_no','$religion','$caste','$previous_school','$class')";
          $result=mysqli_query($con,$query);
          if($result)
          {
              echo "run";
          }
          else
          {
            echo "not run";
          }
        }
     ?>
	</div>		
	</div>
	</div>
</form>
<hr style="color:black;">

<div class="container-fluid">
        <h2 align="center">JOIN US ON<a href="https://www.facebook.com/Kidzee-Sendhwa-296813864093356/"><img src="imag/Facebook.png" width="10%" height="100px"></a></h2>  
  </div>

<b><big><i><div class="well" style="background-color:#3C448C;color:white" align="center">Copyright &#174; By Shubh Shah.All Rights Reserved.</div></i></b></big>
<div class="theme-footer theme-clear-fix">


</body>
</html>