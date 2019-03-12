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
                <script src="register.js" type="text/javascript"></script>
                
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
                                <form id="regForm" name="regForm" action="reg.php" method="post" enctype="multipart/form-data">
								<br>
										<!-- Progressbar -->
										<ul id="progressbar" class="um">
										<li id="active1" class="lm">Create Account	</li>
										<li id="active2" class="lm">Academic Profiles</li>
										<li id="active3" class="lm">Personal Details</li>
										</ul>
                                        <div class="tab" id="first">
                                            
                                        <p><input type="text" name="uname" value="" placeholder="User name"></p>
                                        <p><input type="text" name="email" onBlur="validateEmail(email);" placeholder="E-mail ID"></p>
                                        <p><input type="password" id="pass" name="pass" value="" placeholder="Password"></p>
                                        <p><input type="password" id="confpass" name="confpass" value="" placeholder="Confirm Password"></p>
                                        <button type="button" id="nextBtn" name="next_one" onClick="return validateForm();">Next</button>
                                        </div>

                                        <div class="tab" id="second">
                                        <select id="deg" name="deg">
                                        <option>--Select Degree--</option>
                                        <option>B-tech</option>
                                        <option>M-tech</option>
                                        <option>Phd</option>
                                        <option>MCA</option>
                                        </select>
                                        <select id="dept" name="dept" onFocus="return degree_blank();">
                                            <option>--Select Department--</option>
                                            <option value="Information Technology">Information Technology</option>
                                            <option value="Electrical">Electrical</option>
                                            <option value="Electronics">Electronics</option>
                                            <option value="Civil">Civil</option>
                                            <option value="Chemical">Chemical</option>
                                        </select>
                                       
                                        <p><input type="text" id="roll" name="roll" value="" placeholder="Roll Number" onFocus="return dept_blank();"></p>
                                        <p><input type="text" id="reg" name="reg" value="" placeholder="Registration Number" onFocus="return roll_blank();"></p>
                                        <p><input type="text" id="sem" name="sem" value="" placeholder="Current Semester" onFocus="return reg_blank();"></p>
                                        <p><input type="text" id="cg" name="cg" value="" placeholder="CGPA" onFocus="return sem_blank();"></p>
                                        <p><input type="text" id="yop" name="yop" value="" placeholder="Year of Passing" onFocus="return cg_blank();"></p>
										<font face="Cambria" size="+1">Resume:</font>
									    <input type="file" name="resupload" value="resupload" id="resupload" onFocus="return pyear_blank();" accept=".pdf">
                                        <p><button id="pre_btn1" name="prev_one" onClick="prev_step1()" type="button">Previous</button>
                                        <button id="next_btn2" name="next_two" onClick="return res_blank();" type="button">Next</button></p>
                                        </div>

                                    <div class="tab" id="third">
                                        <p><input type="text" id="fname" name="fname" value="" placeholder="First name"></p>
                                        <p><input type="text" id="lname" name="lname" value="" placeholder="Last name" onFocus="return fn_blank();"></p>
                                        <p><input type="text" id="contact" name="contact" value="" placeholder="Contact Number" onFocus="return ln_blank();"></p>
                                        <p><input type="text" id="gen" name="gen" value="" placeholder="Gender(M/F)"  onFocus="return contct_blank();"></p>
                                        
                                        <font face="Cambria" size="+1">Date of Birth:</font>
                                        <p><input type="date" id="date" name="date" value="" placeholder="Date of Birth" onFocus="return gen_blank();"></p>
                                        <p><input type="text" id="age" name="age" value="" placeholder="Age" onFocus="return get_age();"></p>
                                        <p><input type="text" id="addr" name="addr" value="" placeholder="Permanent Address" onFocus="return dob_blank();"></p>
										<font face="Cambria" size="+1">Image:</font>
									    <input type="file" name="fileupload" value="fileupload" id="fileupload" onFocus="return add_blank();" accept=".png, .jpg, .jpeg">
                                        <p><button id="pre_btn2" name="prev_two" onClick="prev_step2()" type="button">Previous</button>
                                        <p><input type="submit" name="commit" value="submit"></p>
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
                var currentTab = 0; // Current tab is set to be the first tab (0)
                showTab(currentTab); // Display the current tab
                function validateEmail(emailField){
                  var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

                  if (reg.test(emailField.value) == false || emailField.value=="") 
                  {
                    alert('Invalid Email Address');
                    return false;
                  }

                  return true;

                }
				
                function dept_blank()
                {
                  var data=document.getElementById("dept");

                  if(data.value=="--Select Department--")
                  {
                    alert("Department not selected!!");
                    document.getElementById("dept").focus();
                    return false;
                  }
                  return true;
                }
                function degree_blank()
                {
                  var data=document.getElementById("deg");

                  if(data.value=="--Select Degree--")
                  {
                    alert("Degree not selected!!");
                    document.getElementById("deg").focus();
                    return false;
                  }
                  return true;
                }
                function roll_blank()
                {
                  var data=document.getElementById("roll").value;

                  if(data=="")
                  {
                    alert("Roll Number not entered!!");
                    document.getElementById("roll").focus();
                    return false;
                  }
                  else
                  {
                    if(data.length!=8 || data=="00000000")
                    {
                      alert("Invalid roll number Entered!!");
                      document.getElementById("roll").value="";
                      document.getElementById("roll").focus();
                      return false;
                    }

                  }
                  return true;
                }
                function reg_blank()
                {
                  var data=document.getElementById("reg").value;

                  if(data=="")
                  {
                    alert("Registration Number not entered!!");
                    document.getElementById("reg").focus();
                    return false;
                  }
                  else
                  {
                    if(data.length!=8 || data=="00000000")
                    {
                      alert("Invalid Registration number Entered!!");
                      document.getElementById("reg").value="";
                      document.getElementById("reg").focus();
                      return false;
                    }

                  }
                  return true;
                }
                function sem_blank()
                {
                  var data=document.getElementById("sem").value;

                  if(data=="")
                  {
                    alert("Semester not entered!!");
                    document.getElementById("sem").focus();
                    return false;
                  }
                  else
                  {
                   var ret=num_Check(document.getElementById("sem"));
                   if(!ret)
                   {
                    document.getElementById("sem").value="";
                    document.getElementById("sem").focus();
                    return false;
                  }
                  else
                  {
                    if(data.length!=1 || data!="1" && data!="2" && data!="3" && data!="4" && data!="5" && data!="6" && data!="7" && data!="8")
                    {
                      alert("Invalid Semester Entered!!");
                      document.getElementById("sem").value="";
                      document.getElementById("sem").focus();
                      return false;
                    }

                  }

                }
                return true;
              }
              function cg_blank()
              {
                var data=document.getElementById("cg").value;

                if(data=="")
                {
                  alert("CGPA not entered!!");
                  document.getElementById("cg").focus();
                  return false;
                }
                return true;
              }
              function pyear_blank()
              {
                var data=document.getElementById("yop").value;

                if(data=="")
                {
                  alert("Year of passing not entered!!");
                  document.getElementById("yop").focus();
                  return false;
                }
                else
                {
                 var ret=num_Check(document.getElementById("yop"));
                 if(!ret)
                 {
                  document.getElementById("yop").value="";
                  document.getElementById("yop").focus();
                  return false;
                }
                else
                {
                  if(data.length!=4)
                  {
                    alert("Invalid year of passing Entered!!");
                    document.getElementById("yop").value="";
                    document.getElementById("yop").focus();
                    return false;
                  }

                }

              }
              return true;
            }
			function res_blank()
{
	var data=document.getElementById("resupload").value;

                if(data=="")
	{
		alert("Resume not entered!!");
		document.getElementById("resupload").focus();
                                   return false;
	}
	next_step2();
return true;
}
            function fn_blank()
            {
              var data=document.getElementById("fname").value;

              if(data=="")
              {
                alert("First Name not entered!!");
                document.getElementById("fname").focus();
                return false;
              }
              else
              {
               var ret=alpha_Check(document.getElementById("fname"));
               if(!ret)
               {
                document.getElementById("fname").value="";
                document.getElementById("fname").focus();
                return false;
              }


            }
            return true;
          }
          function ln_blank()
          {
            var data=document.getElementById("lname").value;

            if(data=="")
            {
              alert("Last Name not entered!!");
              document.getElementById("lname").focus();
              return false;
            }
            else
            {
             var ret=alpha_Check(document.getElementById("lname"));
             if(!ret)
             {
              document.getElementById("lname").value="";
              document.getElementById("lname").focus();
              return false;
            }


          }
          return true;
        }
        function contct_blank()
        {
          var data=document.getElementById("contact").value;

          if(data=="")
          {
            alert("Contact Number not entered!!");
            document.getElementById("contact").focus();
            return false;
          }
          else
          {
           var ret=num_Check(document.getElementById("contact"));
           if(!ret)
           {
            document.getElementById("contact").value="";
            document.getElementById("contact").focus();
            return false;
          }
          else
          {
            if(data.length!=10 || data=="0000000000")
            {
              alert("Invalid phone number Entered!!");
              document.getElementById("contact").value="";
              document.getElementById("contact").focus();
              return false;
            }

          }

        }
        return true;
      }
      function gen_blank()
      {
       var data=document.getElementById("gen").value;

      if(data=="")
      {
        alert("Gender not entered!!");
        document.getElementById("gen").focus();
        return false;
      }
      return true;
    }
    function dob_blank()
    {
      var data=document.getElementById("date").value;

      if(data=="")
      {
        alert("Date not entered!!");
        document.getElementById("date").focus();
        return false;
      }
      return true;
    }
    function get_age() {
      
      var Bdate = document.getElementById("date").value;
      var Bday = +new Date(Bdate);
      var Q4A = ((Date.now() - Bday) / (31557600000));
      document.getElementById("age").value=Math.round(Q4A) ;
    }
    function add_blank()
    {
      var data=document.getElementById("addr").value;

      if(data=="")
      {
        alert("Address not entered!!");
        document.getElementById("addr").focus();
        return false;
      }
      return true;
    }
	function img_blank()
{
	var data=document.getElementById("fileupload").value;

                if(data=="")
	{
		alert("Image not entered!!");
		document.getElementById("fileupload").focus();
                                   return false;
	}
	document.getElementById("submit_btn").onclick = function () {
        location.href = "register.php";
      };
return true;
}

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
                function validateForm() {
                  // This function deals with validation of the form fields
                  var x, y, i, valid = true;
                  x = document.getElementsByClassName("tab");
                  y = x[currentTab].getElementsByTagName("input");
                  // A loop that checks every input field in the current tab:
                  for (i = 0; i < y.length; i++) {
                    // If a field is empty...
                    if (y[i].value == "") {
                      // add an "invalid" class to the field:
                      y[i].className += " invalid";
                      // and set the current valid status to false
                      valid = false;
                    }
                  }
                  var x = document.getElementById("pass");
                  var y = document.getElementById("confpass");
                  if(x.value!=y.value || x.value=="" || y.value==""){
                    alert('Password and Confirm password do not match');
                    return false;
                  }
                  if(valid)
                  next_step1();
                  else{
                    alert('Please fill the form!');
                    return false;
                  }

                  //return valid; // return the valid status
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