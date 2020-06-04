function valid(){
  window.name = document.forms["up"]["name"].value.trim();
  window.email = document.forms["up"]["email"].value.trim();
  window.phone = document.forms["up"]["phone"].value.trim();
  window.message = document.forms["up"]["message"].value.trim();
if(name=="" || email=="" || phone=="" || message==""){
  alert("All fields Are Compulsory")
}
else{
  $.post("form.php",{
    name:name,
    email:email,
    phone:phone,
    message:message
  });
  alert("Successfully Submitted");
  window.location.replace("/contact.php");
}
}