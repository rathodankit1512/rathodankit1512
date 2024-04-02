<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="asset\css\style.css">
    <title>Registration Page</title>
</head>
<body>
<center>
<table border="5" width="100" cellspacing="10" cellpadding="10">
    <h2>Registration Form</h2>
    <div class="container mt-2">
        <form action="insert.php" method="POST">
     <tr><td>       First Name:</br>
           <tr><td> <input type="text" class="form-control mb-2 " name="txtfnm" required><br><br>

           <tr><td> Last Name:<br>
          <tr><td>  <input type="text" class="form-control mb-2 " name="txtlnm" required><br><br>

          <tr><td>  Contact Number:<br>
          <tr><td>  <input type="text"class="form-control mb-2" name="txtcno" required><br><br>

          <tr><td>  Email:<br>
           <tr><td> <input type="email" class="form-control mb-2" name="txtemail" required><br><br>

           <tr><td> Country:<br>
           <tr><td> <html xmlns="http://www.w3.org/1999/xhtml">

<script type="text/javascript">
 
// State lists
var states = new Array();
states['India'] = new Array('U.P','Bihar','Delhi','Gujarat','Kerala','Kasmir');
states['pakistan'] = new Array('Punjap','Baluchistan','Sind');     
states['Canada'] = new Array('Alberta','British Columbia','Ontario');
states['Philippines'] = new Array('Manila','Albay','Cam-Sur');
states['United States'] = new Array('California','Florida','New York');
 
	
// City lists
var cities = new Array();

cities['India'] = new Array();
cities['India']['U.P']          = new Array('Dg','Kanpur');
cities['India']['Bihar']          = new Array('Baisi','Bhojpur');
cities['India']['Delhi'] = new Array( 'Rohini','South Delhi');
cities['India']['Gujarat']          = new Array('Ahmedabad','Rajkot');
cities['India']['Kerala'] = new Array('Tri','Pal');
cities['India']['Kasmir']          = new Array('Jammu','Manali');

cities['pakistan'] = new Array();
cities['pakistan']['Punjap']          = new Array('Lahore','Faisalabad');
cities['pakistan']['Baluchistan']     = new Array('Quetta','Nasirabad');
cities['pakistan'][ 'Sind']          = new Array('Krachi','Mirpurkhas');

cities['Canada'] = new Array();
cities['Canada']['Alberta']          = new Array('Edmonton','Calgary');
cities['Canada']['British Columbia'] = new Array('Victoria','Vancouver');
cities['Canada']['Ontario']          = new Array('Toronto','Hamilton');
 
cities['Philippines'] = new Array();
cities['Philippines']['Manila'] = new Array('Paranaque','Quezon City');
cities['Philippines']['Albay']       = new Array('Legazpi City','Camalig');
cities['Philippines']['Cam-Sur']         = new Array('Naga','ehem');
 
cities['United States'] = new Array();
cities['United States']['California'] = new Array('Los Angeles','San Francisco');
cities['United States']['Florida']    = new Array('Miami','Orlando');
cities['United States']['New York']   = new Array('Buffalo','new York');
 
 
function setStates() {
  cntrySel = document.getElementById('country');
  stateList = states[cntrySel.value];
  changeSelect('state', stateList, stateList);
  setCities();
}
 
function setCities() {
  cntrySel = document.getElementById('country');
  stateSel = document.getElementById('state');
  cityList = cities[cntrySel.value][stateSel.value];
  changeSelect('city', cityList, cityList);
}
 
function changeSelect(fieldID, newOptions, newValues) {
  selectField = document.getElementById(fieldID);
  selectField.options.length = 0;
  for (i=0; i<newOptions.length; i++) {
    selectField.options[selectField.length] = new Option(newOptions[i], newValues[i]);
  }
}
 
function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      if (oldonload) {
        oldonload();
      }
      func();
    }
  }
}
 
addLoadEvent(function() {
  setStates();
});
</script>
        <tr>
        <td style="text-align: left;">Country:</td>
        <td style="text-align: left;">
            <select name="txtcountry" id="country" onchange="setStates();">
            <option value="India">India</option>
            <option 
<option value="pakistan">pakistan</option>
            <option                 value="Philippines">Philippines</option>
              <option value="Canada">Canada</option>
              <option value="United States">United States</option>
            </select>
        </td>
        </tr><tr>
        <td style="text-align: left;">State:</td>
        <td style="text-align: left;">
            <select name="txtstate" id="state" onchange="setCities();">
              <option value="">Please select a Country</option>
            </select>
        </td>
        </tr><tr>
        <td style="text-align: left;">City:</td>
        <td style="text-align: left;">
            <select name="txtcity"  id="city">
              <option value="">Please select a Country</option>
            </select>
        </td>
        </tr>
<tr><td>Address:<br>
            <tr><td><textarea id="address" name="txtadres" rows="4" cols="50" required></textarea><br><br>

            Gender:<br>
	        
        Male   <input type="radio" id="male" name="gender" value="male" required>
        
         FeMale   <input type="radio" id="female" name="gender" value="female" required>
         Other <input type="radio" id="other" name="gender" value="other" required>
          

            <input type="submit" class="mb-2 btn btn-primary w-100 mt-2" value="Submit">
            <input type="reset" class="mb-2 btn btn-danger w-100 mt-2" value="Clear">
        </form>
    </div>
<script src="asset\js\script.js"></script>
</table>
</center>
</body>
</html>

<?php
    $con = mysqli_connect("localhost","root","","dbharry");
    if(isset($_POST['txtfnm']))
    {
       $fnm=$_POST['txtfnm'];
		 	 $lnm=$_POST['txtlnm'];
			 $cno=$_POST['txtcno'];
			 $email=$_POST['txtemail'];
			 $country=$_POST['txtcountry'];
			 $state=$_POST['txtstate'];
			 $city=$_POST['txtcity'];
		 	 $adress=$_POST['txtadres'];
			 $gender=$_POST['gender'];
       $sql="INSERT INTO `phptrip`(`firstname`, `lastname`, `contact`, `email`, `country`, `state`, `city`, `address`, `gender`) VALUES ('$fnm','$lnm','$cno','$email','$country','$state','$city','$adress','$gender')";
			 $result=mysqli_query($con,$sql);
    }
?>
