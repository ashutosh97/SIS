<!DOCTYPE html>
<html lang="en" class="no-js">
<style>
button[type=button] {
  width: 20%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type=button]:hover {
  background-color: #45a049;
}

.um,.um ul{
  list-style-type: none;
  width:350px;
  /*background:#f2f2bf;
  border: 1px solid black;*/
}
.lm,.lm li {
  display: inline-block;
  height: 50px;
  list-style-type: none;
  text-align: left;
  width: 100px;
}
#progressbar{
	margin:0;
	padding:0;
	font-size:18px;
	/*margin-left:50px;*/
}
#active1{
	color:red
}
</style>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>Student Information System</title>
  <meta name="description" content="Information of all students at one place!" />
  <link rel="shortcut icon" href="../favicon.ico">
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/component.css" />
  <link rel="stylesheet" type="text/css" href="register.css" />
  <script src="js/modernizr.custom.js"></script>
  

</head>
<body>
  <div class="container">
   <ul id="gn-menu" class="gn-menu-main">
    <li class="gn-trigger">
     <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
     <nav class="gn-menu-wrapper">
      <div class="gn-scroller">
       <ul class="gn-menu">
        <li class="gn-search-item">
         <input placeholder="Search" type="search" class="gn-search">
         <a class="gn-icon gn-icon-search"><span>Search</span></a>
       </li>
       <li><a href="contact_us.php" class="gn-icon gn-icon-cog">Contact Us</a></li>
       <li><a href="help.php" class="gn-icon gn-icon-help">Help</a></li>
       <li>
         <a class="gn-icon gn-icon-archive">Archives</a>
         <ul class="gn-submenu">
          <li><a class="gn-icon gn-icon-article">Articles</a></li>
          <li><a class="gn-icon gn-icon-pictures">Images</a></li>
          <li><a class="gn-icon gn-icon-videos">Videos</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /gn-scroller -->
</nav>
</li>   
<li><a href="student_login.php">User Login</a></li>

<li><a href="register.php"><span>Register</span></a></li>
<li><a class="codrops-icon codrops-icon-prev" href="index.php"><span>Back to Home Page</span></a></li>
</ul>
<header>
  <h1>Registration Form<span></span></h1>	
  <form id="regForm" name="regForm" action="reg.php" method="post" enctype="multipart/form-data" onsubmit="validate3()">
    <br>
    <!-- Progressbar -->
    <ul id="progressbar" class="um">
      <li id="active1" class="lm">Create Account	</li>
      <li id="active2" class="lm">Academic Profiles</li>
      <li id="active3" class="lm">Personal Details</li>
    </ul>
    <div class="tab" id="first">

      <p><input type="text" name="uname" id="uname" placeholder="User name" onblur="username_blank()" required ><span style="color:red; font-size:18px;" id="erroruser" ></span></p>

      <p><input type="text" name="email" id="email" onblur="formValidation5()" placeholder="E-mail ID" required><span style="color:red; font-size:18px;" id="errorname5" ></span></p>

      <p><input type="password" id="pass" name="pass" onblur="passvalidation1()" placeholder="Password" required><span style="color:red; font-size:18px;" id="passerror1" ></span></p>

      <p><input type="password" id="confpass" name="confpass" onblur="passvalidation2()" placeholder="Confirm Password" required><span style="color:red; font-size:18px;" id="passerror2" ></span></p>

      <button type="button" id="nextBtn" name="next_one" onclick="validate1()">Next</button>
    </div>

    <div class="tab" id="second">
      <p><select id="deg" name="deg" onblur="degree_blank()" required>
        <option>--Select Degree--</option>
        <option>B-tech</option>
        <option>M-tech</option>
        <option>Phd</option>
        <option>MCA</option>
      </select><span style="color:red; font-size:18px;" id="errorname6" ></span></p>

      <p><select id="dept" name="dept" onblur="dept_blank()" required>
        <option>--Select Department--</option>
        <option value="Information Technology">Information Technology</option>
        <option value="Electrical">Electrical</option>
        <option value="Electronics">Electronics</option>
        <option value="Civil">Civil</option>
        <option value="Chemical">Chemical</option>
      </select><span style="color:red; font-size:18px;" id="errorname7" ></span></p>
      
      <p><input type="text" id="roll" name="roll" placeholder="Roll Number" onblur="formValidation6()" required><span style="color:red; font-size:18px;" id="errorname8" ></span></p>

      <p><input type="text" id="reg" name="reg" placeholder="Registration Number" onblur="formValidation7()" required><span style="color:red; font-size:18px;" id="errorname9" ></span></p>

      <p><input type="text" id="sem" name="sem" placeholder="Current Semester" onblur="formValidation8()" required><span style="color:red; font-size:18px;" id="errorname10" ></span></p>

      <p><input type="text" id="cg" name="cg" placeholder="CGPA" onblur="formValidation9()" required><span style="color:red; font-size:18px;" id="errorname11" ></span></p>

      <p><input type="text" id="yop" name="yop" placeholder="Year of Passing" onblur="pyear_blank()" required><span style="color:red; font-size:18px;" id="errorname12" ></span></p>

      <font face="Cambria" size="+1">Resume:</font>
      <input type="file" name="resupload" value="resupload" id="resupload" onblur="res_blank()" accept=".pdf" required><span style="color:red; font-size:18px;" id="errorname13" ></span>

      <p><button id="pre_btn1" name="prev_one" onclick="prev_step1()" type="button">Previous</button>
        <button id="next_btn2" name="next_two" onclick="validate2()" type="button">Next</button></p>
      </div>

      <div class="tab" id="third">
        <p><input type="text" id="fname" name="fname" pattern="^([A-Za-z]+)$" placeholder="First name" onblur="fn_blank()" required><span style="color:red; font-size:18px;" id="errorname14" ></span></p>

        <p><input type="text" id="lname" name="lname" pattern="^([A-Za-z]+)$" placeholder="Last name" onblur="ln_blank()" required><span style="color:red; font-size:18px;" id="errorname15" ></span></p>

        <p><input type="text" id="contact" name="contact" placeholder="Contact Number" onblur="contct_blank()" required><span style="color:red; font-size:18px;" id="errorname16" ></span></p>

        <p><select id="gen" name="gen" onblur="gen_blank()" required>
          <option>--Select Gender--</option>
          <option>Male</option>
          <option>Female</option>
          <option>Other</option>
        </select><span style="color:red; font-size:18px;" id="errorname17" ></span></p>

        <font face="Cambria" size="+1">Date of Birth:</font>
        <p><input type="date" id="date" name="date" placeholder="Date of Birth" onblur="dob_blank()" required><span style="color:red; font-size:18px;" id="errorname18" ></span></p>

        <p><input type="text" id="age" name="age" value="" placeholder="Age" onFocus="return get_age();"></p>

        <p><input type="text" id="addr" name="addr" placeholder="Permanent Address" onblur="add_blank()" required><span style="color:red; font-size:18px;" id="errorname19" ></span></p>

        <font face="Cambria" size="+1">Image:</font>
        <input type="file" name="fileupload" value="fileupload" id="fileupload" onblur="img_blank()" accept=".png, .jpg, .jpeg" required><span style="color:red; font-size:18px;" id="errorname20" ></span>

        <p><button id="pre_btn2" name="prev_two" onClick="prev_step2()" type="button">Previous</button>
          <input type="submit" name="commit" value="submit"></p>
        </form>
      </div>
      
    </form>
  </header>
  
</div>

<!-- /container -->
<script src="js/classie.js"></script>
<script src="js/gnmenu.js"></script>
<script>
 new gnMenu( document.getElementById( 'gn-menu' ) );
</script>
<script>
  function alpha_Check(str)
  {
    var reg=/^[A-Za-z]+$/
    var str1=str.value;
    if(!str1.match(reg))
    {
      return false;
    }
    return true;
  }
  function num_Check(str)
  {
    var reg=/^[0-9]+$/
    /*var reg=/^\d{6}+$ /;*/
    var str1=str.value;
    if(!str1.match(reg))
    {
      return false;
    }
    return true;
  }
  function username_blank()                                    
  { 
    var name1 = document.forms["regForm"]["uname"].value;
    if (name1 == "")                                  
    { 
     document.getElementById('erroruser').innerHTML="Username cannot be empty!";
     document.getElementById("uname").value="";
     document.getElementById("uname").focus();
   }
   else
   {
    document.getElementById('erroruser').innerHTML="";
  }
}
function formValidation5()                                    
{ 
  var name1 = document.forms["regForm"]["email"].value;
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (name1 == "" || name1.length<=3 || !name1.match(mailformat))                                  
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
function passvalidation1()                                    
{ 
  var name1 = document.forms["regForm"]["pass"].value;
  if (name1 == "")                                  
  { 
   document.getElementById('passerror1').innerHTML="Password cannot be empty!";
   document.getElementById("pass").value="";
   document.getElementById("pass").focus();
 }
 else
 {
  document.getElementById('passerror1').innerHTML="";
}
}
function passvalidation2()                                    
{ 
  var name1 = document.forms["regForm"]["pass"].value;
  var name2 = document.forms["regForm"]["confpass"].value;
  if (name1 == "" || name2 == "" || name1!=name2 )                                  
  { 
   document.getElementById('passerror2').innerHTML="Passwords do not match!";
   document.getElementById("pass").value="";
   document.getElementById("confpass").value="";
   document.getElementById("pass").focus();
 }
 else
 {
  document.getElementById('passerror2').innerHTML=""; 
}
}
function validate1()                                    
{ 
  var name1 = document.forms["regForm"]["pass"].value;
  var name2 = document.forms["regForm"]["confpass"].value;
  var name3 = document.forms["regForm"]["email"].value;
  var name4 = document.forms["regForm"]["uname"].value;
  if (name1 == "" || name2 == "" || name1!=name2 )                                  
  { 
   document.getElementById('passerror2').innerHTML="Passwords do not match!";
   document.getElementById("pass").value="";
   document.getElementById("confpass").value="";
   document.getElementById("pass").focus();
 }
 else if(name3 == "")
 {
  formValidation5();
}
else if(name4 == "")
{
  username_blank();
}
else
{
  document.getElementById('passerror2').innerHTML=""; 
  next_step1();
}
}
function degree_blank()
{
  var data=document.getElementById("deg");

  if(data.value=="--Select Degree--")
  {
    document.getElementById('errorname6').innerHTML="Degree cannot be empty!";
    document.getElementById("deg").value="--Select Degree--";
    document.getElementById("deg").focus();
  }
  else{
    document.getElementById('errorname6').innerHTML="";
  }
}
function dept_blank()
{
  var data=document.getElementById("dept");

  if(data.value=="--Select Department--")
  {
    document.getElementById('errorname7').innerHTML="Department cannot be empty!";
    document.getElementById("dept").value="--Select Department--";
    document.getElementById("dept").focus();
  }
  else{
    document.getElementById('errorname7').innerHTML="";
  }
}
function formValidation6()                                    
{ 
  var name1 = document.forms["regForm"]["roll"].value;

  if (name1 == "" || name1.length!=8 || !/^[0-9][0-9][a-zA-Z][a-zA-Z][0-9]+$/.test(name1))                                  
  { 
    document.getElementById('errorname8').innerHTML="This is an invalid roll no!";
    document.getElementById("roll").value="";
    document.getElementById("roll").focus();
  }
  else
  {
    document.getElementById('errorname8').innerHTML="";
  }

}
function formValidation7()                                    
{ 
  var name1 = document.forms["regForm"]["reg"].value;

  if (name1 == "" || name1.length!=8 || !/^[0-9][0-9][a-zA-Z][0-9]+$/.test(name1))                                  
  { 
   document.getElementById('errorname9').innerHTML="This is an invalid reg no!";
   document.getElementById("reg").value="";
   document.getElementById("reg").focus();
 }
 else
 {
  document.getElementById('errorname9').innerHTML="";
}
}
function formValidation8()
{
  var data=document.getElementById("sem").value;

  if(data=="")
  {
    document.getElementById('errorname10').innerHTML="Semester cannot be empty!";
    document.getElementById("sem").value="";
    document.getElementById("sem").focus();
  }
  else
  {
   var ret=num_Check(document.getElementById("sem"));
   if(!ret)
   {
    document.getElementById('errorname10').innerHTML="Invalid Semester!";
    document.getElementById("sem").value="";
    document.getElementById("sem").focus();
  }
  else
  {
    if(data.length!=1 || data!="1" && data!="2" && data!="3" && data!="4" && data!="5" && data!="6" && data!="7" && data!="8")
    {
      document.getElementById('errorname10').innerHTML="Invalid Semester!";
      document.getElementById("sem").value="";
      document.getElementById("sem").focus();
    }
    else
    {
      document.getElementById('errorname10').innerHTML="";
    }

  }
}
}
function formValidation9()                                    
{ 
  var name1 = document.forms["regForm"]["cg"].value;
  if (name1 == "")                                  
  { 
   document.getElementById('errorname11').innerHTML="CGPA cannot be empty!";
   document.getElementById("cg").value="";
   document.getElementById("cg").focus();
 }
 else
 {

  if(name1 > 10)
  {
    document.getElementById('errorname11').innerHTML="Invalid CGPA!";
    document.getElementById("cg").value="";
    document.getElementById("cg").focus();
  }
  else
  {
    document.getElementById('errorname11').innerHTML="";
  }
  
}
}

function pyear_blank()
{
  var data=document.getElementById("yop").value;

  if(data=="")
  {
    document.getElementById('errorname12').innerHTML="Year of passing cannot be empty!";
    document.getElementById("yop").value="";
    document.getElementById("yop").focus();
  }
  else
  {
   var ret=num_Check(document.getElementById("yop"));
   if(!ret || data.length!=4)
   {
    document.getElementById('errorname12').innerHTML="Invalid Year of passing!";
    document.getElementById("yop").value="";
    document.getElementById("yop").focus();
  }
  else
  {
    document.getElementById('errorname12').innerHTML="";
  }

}
}

function res_blank()
{
 var data=document.getElementById("resupload").value;

 if(data=="")
 {
  document.getElementById('errorname13').innerHTML="Resume cannot be empty!";
  document.getElementById("resupload").value="";
  document.getElementById("resupload").focus();
}
else
{
  document.getElementById('errorname13').innerHTML="";
}
}

function validate2()                                    
{ 
 var data1=document.getElementById("deg");
 var data2=document.getElementById("dept");
 var data3=document.getElementById("roll");
 var data4=document.getElementById("reg");
 var data5=document.getElementById("sem");
 var data6=document.getElementById("cg");
 var data7=document.getElementById("yop");
 var data8=document.getElementById("resupload");
 if(data1.value=="--Select Degree--")
 {
  degree_blank();
}
else if(data2.value=="--Select Department--")
{
  dept_blank();
}
else if(data3.value=="")
{
  formValidation6();
}
else if(data4.value=="")
{
  formValidation7();
}
else if(data5.value=="")
{
  formValidation8();
}
else if(data6.value=="")
{
  formValidation9();
}
else if(data7.value=="")
{
  pyear_blank();
}
else if(data8.value=="")
{
  res_blank();
}
else
{
  next_step2();
}

}
function fn_blank()
{
  var data=document.getElementById("fname").value;

  if(data=="")
  {
    document.getElementById('errorname14').innerHTML="First name cannot be empty!";
    document.getElementById("fname").value="";
    document.getElementById("fname").focus();
  }
  else
  {
   var ret=alpha_Check(document.getElementById("fname"));
   if(!ret)
   {
    document.getElementById('errorname14').innerHTML="Invalid First name!";
    document.getElementById("fname").value="";
    document.getElementById("fname").focus();
  }
  else
  {
    document.getElementById('errorname14').innerHTML="";
  }
}

}
function ln_blank()
{
  var data=document.getElementById("lname").value;

  if(data=="")
  {
    document.getElementById('errorname15').innerHTML="Last name cannot be empty!";
    document.getElementById("lname").value="";
    document.getElementById("lname").focus();
  }
  else
  {
   var ret=alpha_Check(document.getElementById("lname"));
   if(!ret)
   {
    document.getElementById('errorname15').innerHTML="Invalid last name!";
    document.getElementById("lname").value="";
    document.getElementById("lname").focus();
  }
  else
  {
    document.getElementById('errorname15').innerHTML="";
  }
}

}
function contct_blank()
{
  var data=document.getElementById("contact").value;

  if(data=="")
  {
    document.getElementById('errorname16').innerHTML="Contact cannot be empty!";
    document.getElementById("contact").value="";
    document.getElementById("contact").focus();
  }
  else
  {
   var ret=num_Check(document.getElementById("contact"));
   if(!ret || data.length!=10 || data=="0000000000")
   {
    document.getElementById('errorname16').innerHTML="Invalid contact!";
    document.getElementById("contact").value="";
    document.getElementById("contact").focus();
  }
  else
  {
    document.getElementById('errorname16').innerHTML="";
  }
}

}
function gen_blank()
{
  var data=document.getElementById("gen");

  if(data.value=="--Select Gender--")
  {
    document.getElementById('errorname17').innerHTML="Gender cannot be empty!";
    document.getElementById("gen").value="--Select Gender--";
    document.getElementById("gen").focus();
  }
  else{
    document.getElementById('errorname17').innerHTML="";
  }
}
function dob_blank()
{
  var data=document.getElementById("date");

  if(data.value=="")
  {
    document.getElementById('errorname18').innerHTML="Date of birth cannot be empty!";
    document.getElementById("date").focus();
  }
  else{
    document.getElementById('errorname18').innerHTML="";
  }
}

function get_age() {

  var Bdate = document.getElementById("date").value;
  var Bday = +new Date(Bdate);
  var Q4A = ((Date.now() - Bday) / (31557600000));
  document.getElementById("age").value=Math.round(Q4A) ;
}
function add_blank()
{
  var data=document.getElementById("addr");

  if(data.value=="")
  {
    document.getElementById('errorname19').innerHTML="Address cannot be empty!";

    document.getElementById("addr").focus();
  }
  else{
    document.getElementById('errorname19').innerHTML="";
  }
}
function img_blank()
{
  var data=document.getElementById("fileupload");

  if(data.value=="")
  {
    document.getElementById('errorname20').innerHTML="Image cannot be empty!";

    document.getElementById("fileupload").focus();
  }
  else{
    document.getElementById('errorname20').innerHTML="";
  }
}

function validate3()                                    
{ 
 var data1=document.getElementById("fname");
 var data2=document.getElementById("lname");
 var data3=document.getElementById("contact");
 var data4=document.getElementById("gen");
 var data5=document.getElementById("date");
 var data6=document.getElementById("addr");
 var data7=document.getElementById("fileupload");
 if(data1.value=="")
 {
  fn_blank();
}
else if(data2.value=="")
{
  ln_blank();
}
else if(data3.value=="")
{
  contct_blank();
}
else if(data4.value=="--Select Gender--")
{
  gen_blank();
}
else if(data5.value=="")
{
  dob_blank();
}
else if(data6.value=="")
{
  add_blank();
}
else if(data7.value=="")
{
  img_blank();
}
else
{
  document.getElementById("submit_btn").onclick = function () {
    location.href = "register.php";
  };
  return true;
}

}
                var currentTab = 0; // Current tab is set to be the first tab (0)
                showTab(currentTab); // Display the current tab
                


                function showTab(n) {
                  // This function will display the specified tab of the form...
                  var x = document.getElementsByClassName("tab");
                  x[n].style.display = "block";
                  //... and fix the Previous/Next buttons:
                  if (n == 0) {
                    document.getElementById("prevBtn").style.display = "none";
                  } else {
                    document.getElementById("prevBtn").style.display = "inline";
                  }
                  if (n == (x.length - 1)) {
                    document.getElementById("nextBtn").innerHTML = "Submit";
                  } else {
                    document.getElementById("nextBtn").innerHTML = "Next";
                  }
                  //... and run a function that will display the correct step indicator:
                }

                function nextPrev(n) {
                  // This function will figure out which tab to display
                  var x = document.getElementsByClassName("tab");
                  // Exit the function if any field in the current tab is invalid:
                  if (n == 1 && !validateForm()) return false;
                  // Hide the current tab:
                  x[currentTab].style.display = "none";
                  // Increase or decrease the current tab by 1:
                  currentTab = currentTab + n;
                  // if you have reached the end of the form...
                  if (currentTab >= x.length) {
                    // ... the form gets submitted:
                    document.getElementById("regForm").submit();
                    return false;
                  }
                  // Otherwise, display the correct tab:
                  showTab(currentTab);
                }

                // Function that executes on click of first next button.
                function next_step1() {
                  document.getElementById("first").style.display = "none";
                  document.getElementById("second").style.display = "block";
                  document.getElementById("active2").style.color = "red";
                }
// Function that executes on click of first previous button.
function prev_step1() {
  document.getElementById("first").style.display = "block";
  document.getElementById("second").style.display = "none";
  document.getElementById("active1").style.color = "red";
  document.getElementById("active2").style.color = "gray";
}
// Function that executes on click of second next button.
function next_step2() {
  document.getElementById("second").style.display = "none";
  document.getElementById("third").style.display = "block";
  document.getElementById("active3").style.color = "red";
}
// Function that executes on click of second previous button.
function prev_step2() {
  document.getElementById("third").style.display = "none";
  document.getElementById("second").style.display = "block";
  document.getElementById("active2").style.color = "red";
  document.getElementById("active3").style.color = "gray";
}

</script>

</body>
</html>