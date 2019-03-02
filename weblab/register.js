// JavaScript Document
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

                  return valid; // return the valid status
                }
var count = 0; // To count blank fields.
function alpha_Check(str)
{
  var reg=/^[A-Za-z]+$/
  var str1=str.value;
  if(!str1.match(reg))
  {
    alert("Invalid Data Entered!!");
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
    alert("Invalid Data Entered!!");
    return false;
  }
  return true;
}
function uid_blank()
{
	var data=document.f1.uid.value;

  if(data=="")
  {
    alert("User id not entered!!");
    document.f1.uid.focus();
    return false;
  }
  return true;
}
function mail_blank()
{
	var data=document.f1.mail.value;

  if(data=="")
  {
    alert("Email ID not entered!!");
    document.f1.mail.focus();
    return false;
  }
  return true;
}
function pass_blank()
{
	var data=document.f1.pass.value;

  if(data=="")
  {
    alert("Password not entered!!");
    document.f1.pass.focus();
    return false;
  }
  else
  {
    if(data.length<8)
    {
      alert("Password should have 8 or more characters!!");
      document.f1.pass.value="";
      document.f1.pass.focus();
      return false;
    }

  }
  return true;
}
function confpass_blank()
{
	var data=document.f1.confpass.value;

  if(data=="")
  {
    alert("Confirm Password not entered!!");
    document.f1.confpass.focus();
    return false;
  }
  else
  {	
    var p=document.f1.pass.value;
    if(data!=p)
    {
     alert("Password and confirm password doesn't match!!");
   }
   else
   {
     next_step1();
   }
 }

 return true;
}
function degree_blank()
{
	var data=document.f1.deg.value;

  if(data=="--Select Degree--")
  {
    alert("Degree not selected!!");
    document.f1.deg.focus();
    return false;
  }
  return true;
}
function dept_blank()
{
	var data=document.f1.dept.value;

  if(data=="--Select Department--")
  {
    alert("Department not selected!!");
    document.f1.dept.focus();
    return false;
  }
  return true;
}
function roll_blank()
{
	var data=document.f1.roll.value;

  if(data=="")
  {
    alert("Roll Number not entered!!");
    document.f1.roll.focus();
    return false;
  }
  else
  {
    if(data.length!=8)
    {
      alert("Invalid roll number Entered!!");
      document.f1.roll.value="";
      document.f1.roll.focus();
      return false;
    }

  }
  return true;
}
function reg_blank()
{
	var data=document.f1.reg.value;

  if(data=="")
  {
    alert("Registration Number not entered!!");
    document.f1.reg.focus();
    return false;
  }
  else
  {
    if(data.length!=8)
    {
      alert("Invalid roll number Entered!!");
      document.f1.roll.value="";
      document.f1.roll.focus();
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
    if(data.length!=1 && data!="1" && data!="2" && data!="3" && data!="4" && data!="5" && data!="6" && data!="7" && data!="8")
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
   var ret=num_Check(document.f1.pyear);
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
next_step2();
return true;
}
function fn_blank()
{
	var data=document.f1.fname.value;

  if(data=="")
  {
    alert("First Name not entered!!");
    document.f1.fname.focus();
    return false;
  }
  else
  {
   var ret=alpha_Check(document.f1.fname);
   if(!ret)
   {
    document.f1.fname.value="";
    document.f1.fname.focus();
    return false;
  }


}
return true;
}
function ln_blank()
{
	var data=document.f1.lname.value;

  if(data=="")
  {
    alert("Last Name not entered!!");
    document.f1.lname.focus();
    return false;
  }
  else
  {
   var ret=alpha_Check(document.f1.lname);
   if(!ret)
   {
    document.f1.lname.value="";
    document.f1.lname.focus();
    return false;
  }


}
return true;
}
function contct_blank()
{
	var data=document.f1.cont.value;

  if(data=="")
  {
    alert("Contact Number not entered!!");
    document.f1.cont.focus();
    return false;
  }
  else
  {
   var ret=num_Check(document.f1.cont);
   if(!ret)
   {
    document.f1.cont.value="";
    document.f1.cont.focus();
    return false;
  }
  else
  {
    if(data.length!=10)
    {
      alert("Invalid phone number Entered!!");
      document.f1.cont.value="";
      document.f1.cont.focus();
      return false;
    }

  }

}
return true;
}
function gen_blank()
{
 if(!document.f1.gen[0].checked  && !document.f1.gen[1].checked )
 {
  alert("Gender not selected!!");
  document.f1.gen[0].focus();
  return false;
}
return true;
}
function dob_blank()
{
	var data=document.f1.dob.value;

  if(data=="")
  {
    alert("Date not entered!!");
    document.f1.dob.focus();
    return false;
  }
  return true;
}
function add_blank()
{
	var data=document.f1.add.value;

  if(data=="")
  {
    alert("Address not entered!!");
    document.f1.add.focus();
    return false;
  }
  return true;
}
function img_blank()
{
	var data=document.f1.fileupload.value;

  if(data=="")
  {
    alert("Image not entered!!");
    document.f1.fileupload.focus();
    return false;
  }
  return true;
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