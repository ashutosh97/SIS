<!DOCTYPE html PUBLIC"-//w3c//DTD XHTML 1.0 Transtional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
$con=mysqli_connect("localhost", "root", "","sample") or die("mysql connection is failure.");
if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($con, $_POST['First_Name']);
        $lastname = mysqli_real_escape_string($con, $_POST['Last_Name']);
        $parentname = mysqli_real_escape_string($con, $_POST['parents_name']);
        $mob   = mysqli_real_escape_string($con, $_POST['Mobile_Number']);
        $reg = mysqli_real_escape_string($con, $_POST['Registration_Number']);
        $roll = mysqli_real_escape_string($con, $_POST['Roll_Number']);
        $city = mysqli_real_escape_string($con, $_POST['CITY']);
        $state = mysqli_real_escape_string($con, $_POST['STATE']);
        $prim = mysqli_real_escape_string($con, $_POST['PRIMARY_ADDRESS']);
        $perten = mysqli_real_escape_string($con, $_POST['10PERCENTAGE']);
        $pertwe = mysqli_real_escape_string($con, $_POST['12PERCENTAGE']);
        $cgpa = mysqli_real_escape_string($con, $_POST['CGPA']);
        $psw = mysqli_real_escape_string($con, $_POST['psw']);
        $gen = mysqli_real_escape_string($con, $_POST['Gender']);
        $dob=mysqli_real_escape_string($con, $_POST['Birthday_Day']);
        $age=mysqli_real_escape_string($con, $_POST['age']);
        $mail=mysqli_real_escape_string($con, $_POST['email']);
        $dept=mysqli_real_escape_string($con, $_POST['DEPARTMENT']);
        $images = $_FILES['fileChooser']['tmp_name'];
        $imgContent = addslashes(file_get_contents($images));
        $result = mysqli_query($con,"INSERT INTO register (`First Name`,`Last Name`,`City`,`DOB`,`Age`,`Parent Name`,`Reg No`,`Roll No`,`Email ID`,`Password`,`Primary Address`,`State`,`Gender`,`Dept`,`12 %age`,`10 %age`,`CGPA`,`Mobile No`,`image`) VALUES ('$username','$lastname','$city','$dob','$age','$parentname','$reg','$roll','$mail','$psw','$prim','$state','$gen','$dept','$pertwe','$perten','$cgpa','$mob','$imgContent');");
        if($result){
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Success')
      window.location.href='form1.php'
       </SCRIPT>");
        }
        else{
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('UnSuccess')
      window.location.href='form1.php'
       </SCRIPT>");
        }
 }
#$result = mysqli_query($con,"INSERT INTO register (`First Name`,`Last Name`,`DOB`,`Parent's Name`,`Email ID`,`Reg No`,`Roll No`,`Mobile No`,`Gender`,`Dept`,`Primary Address`,`City`,`State`,`12 %age`,`10 %age`,`CGPA`,`Password`) VALUES ('$username','$lastname','$dob','$parentname','$mail','$reg','$roll','$mob','$gen','$dept','$prim','$city','$state','$perten','$pertwe','$cgpa','$psw');");
  #      if($result){
  #      echo 1;}
 #else {
  #   echo ("<SCRIPT LANGUAGE='JavaScript'>
   #     window.alert('Unsuccessful')
    #    window.location.href='form1.php'
     #   </SCRIPT>");
?>
<html>
<head>
<title>Student Registration Form</title>
<style>
  body{
                background-image: url("i.jpg");
                background-repeat: no-repeat;
                background-size: 100% ;
                background-color: #cccccc;
            }
          h3 {
    font-size: 45px;
    background-color: gray;
    color: white;
    text-align: center;
}  
table{
  font-family: Calibri; 
  color:black; 
  font-size: 13pt; 
  font-style: normal;
  font-weight: bold;
  background-color: graytext;  
  border: 3px solid black
}
table.inner{
  border: 0px
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

</style>

<script>
function formValidation()                                    
{ 
    var name = document.forms["myform"]["First_Name"].value; 
    var name2= document.forms["myform"]["Last_Name"].value;
    var name3= document.forms["myform"]["parents_name"].value
    var mob1 = document.forms["myform"]["Mobile_Number"].value;
    var reg = document.forms["myform"]["Registration_Number"].value;
    var roll= document.forms["myform"]["Roll_Number"].value;
    var city1=document.forms["myform"]["CITY"].value; 
    var state1=document.forms["myform"]["STATE"].value; 
    var prim1=document.forms["myform"]["PRIMARY_ADDRESS"].value;
    if (name.value == "" || name.length<=3 || /[^a-z]/i.test(name))                                  
    { 
        window.alert("Please enter your first name correctly"); 
        name.focus(); 
        return false; 
    }
    if (name2.value == "" || name2.length<=3 || /[^a-z]/i.test(name2))                                  
    { 
        window.alert("Please enter your last name correctly!"); 
        name2.focus(); 
        return false; 
    }
    if (name3.value == "" || name3.length<=3 || /[^a-z]/i.test(name3))                                  
    { 
        window.alert("Please enter your Parent's name correctly!"); 
        name3.focus(); 
        return false; 
    }
    if(mob1.value="" || mob1.length!=10 || !/^\d+$/.test(mob1))
    {
        window.alert("Please enter your mobile number correctly!"); 
        mob1.focus(); 
        return false; 
    }
    if(reg.value="" || reg.length!=8 || /[^a-zA-Z0-9]/.test(reg))
    {
        window.alert("Please enter your reg number correctly!"); 
        reg.focus(); 
        return false; 
    }
    if(roll.value="" || roll.length!=8 || /[^a-zA-Z0-9]/.test(roll))
    {
        window.alert("Please enter your roll number correctly!"); 
        roll.focus(); 
        return false; 
    }
    if (city1.value == "" || city1.length<=3 || /[^a-z]/i.test(city1))                                  
    { 
        window.alert("Please enter your city correctly"); 
        city1.focus(); 
        return false; 
    }
    if (state1.value == "" || state1.length<=3 || /[^a-z]/i.test(state1))                                  
    { 
        window.alert("Please enter your state correctly"); 
        state1.focus(); 
        return false; 
    }
    if(prim1.value="" || prim1.length<=5 || /[^a-zA-Z0-9]/.test(prim1))
    {
        window.alert("Please enter your primary address correctly!"); 
        prim1.focus(); 
        return false; 
    }
    return true; 
}
function formValidation1()                                    
{ 
    var name = document.forms["myform"]["First_Name"].value;
    
    if (name.value == "" || name.length<=3 || /[^a-z]/i.test(name))                                  
    { 
         document.getElementById('errorname1').innerHTML="This is an invalid name";
        document.getElementById("First_Name").value="";
       
        document.getElementById("First_Name").focus();
        
    }
    else
    {
        document.getElementById('errorname1').innerHTML="";
    }
   
}
function formValidation2()                                    
{ 
    var name = document.forms["myform"]["Last_Name"].value;
    
    if (name.value == "" || name.length<=3 || /[^a-z]/i.test(name))                                  
    { 
       document.getElementById('errorname2').innerHTML="This is an invalid name";
        document.getElementById("Last_Name").value="";
       
        document.getElementById("Last_Name").focus();
    }
    else
    {
        document.getElementById('errorname2').innerHTML="";
    }
}
function formValidation3()                                    
{ 
    var name1 = document.forms["myform"]["Birthday_Day"].value;
    var year = name1.substr(0,4) ;
    var month=name1.substr(5,2);
    var day= name1.substr(8,10);
       var today_date = new Date();
    var today_year = today_date.getFullYear();
    var today_month = today_date.getMonth();
    var today_day = today_date.getDate();
    var age = today_year - year;

    if ( today_month < (month - 1))
    {
        age--;
    }
    if (((month - 1) == today_month) && (today_day < day))
    {
        age--;
    }
    
    if (name1 == "" )                                  
    { 
       document.getElementById('errorname3').innerHTML="This is an invalid date";
        document.getElementById("Birthday_Day").value="";
       
        document.getElementById("Birthday_Day").focus();
    }
    else if (age<15 )                                  
    { 
       document.getElementById('errorname3').innerHTML="Age cannot be less than 15";
        document.getElementById("Birthday_Day").value="";
       
        document.getElementById("Birthday_Day").focus();
    }
    else
    {
        document.getElementById('errorname3').innerHTML="";
        document.getElementById('age').value=age;
    }
}
function formValidation4()                                    
{ 
    var name = document.forms["myform"]["parents_name"].value;
    
    if (name.value == "" || name.length<=3 || /[^a-z|^" "]/i.test(name))                                  
    { 
        document.getElementById('errorname4').innerHTML="This is an invalid name";
        document.getElementById("parents_name").value="";
       
        document.getElementById("parents_name").focus();
    }
    else
    {
        document.getElementById('errorname4').innerHTML="";
    }
}
function formValidation5()                                    
{ 
    var name1 = document.forms["myform"]["email"].value;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (name1.value == "" || name1.length<=3 || !name1.match(mailformat))                                  
    { 
       document.getElementById('errorname5').innerHTML="This is an invalid email";
        document.getElementById("email").value="";
       
        document.getElementById("email").focus();
    }
    else
    {
        document.getElementById('errorname5').innerHTML="";
    }
}
function formValidation6()                                    
{ 
    var name1 = document.forms["myform"]["Registration_Number"].value;
    
    if (name1.value == "" || name1.length!=8 || !/^[0-9][0-9][a-zA-Z][0-9]+$/.test(name1))                                  
    { 
       document.getElementById('errorname6').innerHTML="This is an invalid reg no";
        document.getElementById("Registration_Number").value="";
       
        document.getElementById("Registration_Number").focus();
    }
    else
    {
        document.getElementById('errorname6').innerHTML="";
    }
}
function formValidation7()                                    
{ 
    var name1 = document.forms["myform"]["Roll_Number"].value;
    
    if (name1.value == "" || name1.length!=8 || !/^[0-9][0-9][a-zA-Z][a-zA-Z][0-9]+$/.test(name1))                                  
    { 
        document.getElementById('errorname7').innerHTML="This is an roll no";
        document.getElementById("Roll_Number").value="";
       
        document.getElementById("Roll_Number").focus();
    }
    else
    {
        document.getElementById('errorname7').innerHTML="";
    }
}
function formValidation8()                                    
{ 
    var name1 = document.forms["myform"]["Mobile_Number"].value;
    
    if (name1.value == "" || name1.length!=10 || !/^[0-9]+$/.test(name1))                                  
    { 
        document.getElementById('errorname8').innerHTML="This is an invalid mobile no";
        document.getElementById("Mobile_Number").value="";
       
        document.getElementById("Mobile_Number").focus();
    }
    else
    {
        document.getElementById('errorname8').innerHTML="";
    }
}
function formValidation9()                                    
{ 
    var name = document.forms["myform"]["PRIMARY_ADDRESS"].value;
    
    if (name.value == "" || name.length<=3 || /[^a-z]/i.test(name))                                  
    { 
       document.getElementById('errorname9').innerHTML="This is an invalid address";
        document.getElementById("PRIMARY_ADDRESS").value="";
       
        document.getElementById("PRIMARY_ADDRESS").focus();
    }
    else
    {
        document.getElementById('errorname9').innerHTML="";
    }
}
function formValidation10()                                    
{ 
    var name = document.forms["myform"]["CITY"].value;
    
    if (name.value == "" || name.length<=3 || /[^a-z]/i.test(name))                                  
    { 
       document.getElementById('errorname10').innerHTML="This is an invalid city name";
        document.getElementById("CITY").value="";
       
        document.getElementById("CITY").focus();
    }
   else
    {
        document.getElementById('errorname10').innerHTML="";
    }
}
function formValidation11()                                    
{ 
    var name = document.forms["myform"]["STATE"].value;
    
    if (name.value == "" || name.length<=3 || /[^a-z]/i.test(name))                                  
    { 
       document.getElementById('errorname11').innerHTML="This is an invalid state name";
        document.getElementById("STATE").value="";
       
        document.getElementById("STATE").focus();
    }
   else
    {
        document.getElementById('errorname11').innerHTML="";
    }
}
function ValidateFileUpload() {
        var fuData = document.getElementById('fileChooser');
        var FileUploadPath = fuData.value;

//To check if user upload any file
        if (FileUploadPath == '') {
            alert("Please upload an image");
            fuData.value="";
            fuData.focus();

        } else {
            var Extension = FileUploadPath.substring(
                    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

//The file uploaded is an image
if (fuData.size > 1024000) {
        alert('Max Upload size is 1MB only');
        document.getElementById("img").value = '';
        return false;
    }
else{
if (Extension == "gif" || Extension == "png" || Extension == "bmp"
                    || Extension == "jpeg" || Extension == "jpg") {


                if (fuData.files && fuData.files[0]) {
                    var reader = new FileReader();
                    
                    reader.onload = function(e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(fuData.files[0]);
                }

            } 
//The file upload is NOT an image
else {
                alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
                FileUploadPath="";
                fuData.focus();
            }
        }
    }
    }
// Check if file already exists
</script>
</head>
 
<body>
    
<h3>STUDENT REGISTRATION FORM</h3>

 <ul>
            <li><a class="active" href="index.php">Home</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  
  <li style="float:right"><a href="form1.php" >Register</a></li>
  <li class="dropdown" style="float:right">
    <a href="javascript:void(0)" class="dropbtn">Login</a>
    
    <div class="dropdown-content">
        <a href="student.php">Student</a>
      <a href="admin.php">Admin</a>
    </div>
  </li>
  <li style="float:right"><a id="demo"></li>

<script>
var d = new Date();
document.getElementById("demo").innerHTML = d;
</script>
</ul>
<br>
<br>

<form name="myform"  method="post" onSubmit="return formValidation();" enctype="multipart/form-data">          
<table align="center" cellpadding = "10">
 
 
    
    <tr>
        <td>1. PERSONAL</TD>
    </tr>
<!----- First Name ---------------------------------------------------------->
<tr>
<td>1.1) FIRST NAME</td>
<td><input type="text" name="First_Name" id="First_Name"  pattern="^([A-Za-z]+)$" onblur="formValidation1()" title="Minimum 3 letters and only alphabets"required/>
<span style="color:red" id="errorname1"></span>
        
(min 3 letters and alphabets only.)

</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>1.2) LAST NAME</td>
<td><input  type="text" name="Last_Name" id="Last_Name" onblur="formValidation2()" pattern="^([A-Za-z]+)$"  title="Minimum 3 letters and only alphabets" required />
<span style="color:red" id="errorname2"></span>
(min 3 letters and alphabets only.)
</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>1.3) DATE OF BIRTH</td>
 
<td>
    <input type="date" name="Birthday_Day" id="Birthday_Day" onblur="formValidation3()" required>
    <span style="color:red" id="errorname3"></span>
</td>
</tr>

<tr>
<td>1.4) AGE</td>
<td><input  type="text" name="age" id="age" value="" required />
</td>
</tr>

<tr>
    <td>1.5) PARENT'S NAME</td>
    <td><input type="text" name="parents_name" id="parents_name" onblur="formValidation4()" pattern="^([A-Za-z]+)$"required/><span style="color:red" id="errorname4"></span></td>
</tr>
<!----- Email Id ---------------------------------------------------------->
<tr>
<td>1.6) EMAIL ID</td>
<td><input type="email" name="email" id="email" onblur="formValidation5()" placeholder="Enter a valid email address"required>
<span style="color:red" id="errorname5"></span>
</td>
</tr>
<!-----Registration No---------------------------------------------------------->
<tr>
<td>1.7) REGISTRATION NUMBER</td>
<td><input type="text" name="Registration_Number" id="Registration_Number" onblur="formValidation6()"  required/>
<span style="color:red" id="errorname6"></span>
</td>
</tr>

<!-----Roll No---------------------------------------------------------->
 <tr>
<td>1.8) ROLL NUMBER</td>
<td><input type="text" name="Roll_Number" id="Roll_Number" onblur="formValidation7()" required />
<span style="color:red" id="errorname7"></span>
</td>
</tr>

<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>1.9) MOBILE NUMBER</td>
<td>
<input type="text" name="Mobile_Number" id="Mobile_Number" onblur="formValidation8()" required/>
(10 digit number)
<span style="color:red" id="errorname8"></span>
</td>
</tr>
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>1.10) GENDER</td>
<td>
    Male <input type="radio" name="Gender" id="Gender" value="Male"  />
    Female <input type="radio" name="Gender" id="Gender" value="Female" />
</td>
</tr>
 
<!----- Departments -------------------------------------------------------->
<tr>
<td>1.11) DEPARTMENT</td>
 
<td>
<select name="DEPARTMENT" id="DEPARTMENT"  required>
<option value="-1">Select---></option>
<option value="INFORMATION TECHNOLOGY">INFORMATION TECHNOLOGY</option>
<option value="COMPUTER SCIENCE">COMPUTER SCIENCE</option>
<option value="ELECTRONICS & COMMUNICATION">ELECTRONICS & COMMUNICATION ENGINEERING</option>
<option value="ELECTRICAL">ELECTRICAL ENGINEERING</option>
<option value="MECHANICAL">MECHANICAL ENGINEERING</option>
<option value="CIVIL">CIVIL ENGINEERING</option>
<option value="BIOTECH">BIOTECH ENGINEERING</option>
<option value="METALLURGICAL & MATERIALS"> METALLURGICAL & MATERIALS ENGINEERING</option>
</select>
</td>
</tr>
<TR>
    <td> 2. CONTACT DETAILS </td>
</TR> 
<TR>
    <TD>2.1) PRIMARY ADDRESS</TD>
    <TD><input type="text" id="PRIMARY_ADDRESS" name="PRIMARY_ADDRESS"onblur="formValidation9()"maxlength="100"  required/>
<span style="color:red" id="errorname9"></span>
    </TD>
</TR>
<tr>
    <TD>2.2) CITY</TD>
    <TD><input type="text" name="CITY" id="CITY" maxlength="50" onblur="formValidation10()" required/>
    <span style="color:red" id="errorname10"></span>
    </TD>

</tr>
<tr>
    <TD>2.3) STATE</TD>
    <TD><input type="text" name="STATE" id="STATE" maxlength="50" onblur="formValidation11()" required/>
    <span style="color:red" id="errorname11"></span>
    </TD>

</tr>
<TR>
    <td> 3. ACADEMIC DETAILS </td>
</TR> 
<TR>
    <td>3.1) 10th PERCENTAGE</td>
    <TD><input type="number" min="0" max="100" step="0.01"  name="10PERCENTAGE" id="10PERCENTAGE" maxlength="3" required/></TD>
</TR>
<TR>
    <td>3.2) 12th PERCENTAGE</td>
    <TD><input type="number" min="0" max="100" step="0.01" name="12PERCENTAGE"id="12PERCENTAGE" maxlength="3" required/></TD>
</TR>
<TR>
    <td>3.3) CGPA</td>
    <TD><input type="number" min="0" max="10" step="0.01" name="CGPA" id="CGPA" maxlength="3" required/></TD>
</TR>
<TR>
    <td> 4. ENTER PASSWORD </td>
</TR> 
<TR>
    <tD>4.1) PASSWORD</tD>
    <TD><input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" ></TD>
    
</TR>
<tr>
    <td>
        Select file to upload:
        <input type="file" name="fileChooser" id="fileChooser"  />
    </td>
</tr>

<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
    <button type="submit" value="Submit" name="submit" id="submit" onfocus="return ValidateFileUpload()">Submit</button>
<button type="reset" value="Reset">Reset</button>
</td>
</tr>

</table>
 <font color='red'> <DIV id="une"> </DIV> </font>
</form>		
</body>
	
</html>
