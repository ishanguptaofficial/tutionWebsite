<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="style.css">
    <script src="https://smtpjs.com/v3/smtp.js"></script> 

    <title>Vijay Patil Classes | HOME</title>
    <link rel = "icon" href ="images/title-logo.png" type = "image/x-icon">


</head>
<body>
 
<?php
// define variables and set to empty values

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $email = $contact = $whatsapp = $school = $classs = "";
  $name=$_POST["inputName"];
  $email=$_POST['inputEmail'];
  $contact=$_POST['inputContact'];
  $whatsapp=$_POST['inputWhatsapp'];
  $school=$_POST['inputSchool'];
  $classs=$_POST['inputClass'];

  $body="
    <html>
    <body>
    <div style='background-color: lightgray; padding:20px; width: 80%;'>
       <h2>Enquery Deatils</h2>
       <hr>
       <h4><strong>Name:</strong> ".$name."</h4>
       <h4><strong>School:</strong> ".$school."</h4>
       <h4><strong>Class:</strong> ".$classs."</h4>   
       <h4><strong>Contact No:</strong> ".$contact."</h4>
       <h4><strong>Whatsapp No:</strong> ".$whatsapp."</h4>
       <h4><strong>Email ID:</strong> ".$email."</h4>
    </div>
    </body>
    </html>
  ";

 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 $headers .= 'From: Vijay Patil Classes <lrggzwhc@vijaypatilclasses.org>' . "\r\n"; 
 

  ini_set("sendmail_from", "admin@vijaypatilclasses.org");
  
if(mail("lovegupta314@gmail.com","Enquery From VPC Website",$body,$headers)){ 
    echo "<script>alert('Enquery submitted successfully.')</script";
}else{ 
   echo "<scpript>alert('Enquery submission failed. Inform Vijay Patil Classes')</script"; 
}

}

?>
 
 

<div class="container-fluid mt-5 p-3 p-md-5 form-bg" id="contact">

  <h1 class="text-center display-5 fw-bold text-white">Contact Us</h1>
  <hr class="me-auto ms-auto" style="border: 1px solid; width: 50%;">

  <div class="container  rounded p-4">

    <form class="row gy-3 gx-5" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="col-md-12">
    <label for="inputName" class="form-label fw-bold">Full Name</label>
    <input type="text" class="form-control bg-light" name="inputName" placeholder="Himanshu Gupta" required >
  </div>
  <div class="col-md-6">
    <label for="inputSchool" class="form-label fw-bold">School</label>
    <input type="text" class="form-control bg-light" name="inputSchool" placeholder="St. Convent School, Bhopal" required>
  </div>
  <div class="col-md-6">
    <label for="inputClass" class="form-label fw-bold">Class</label>
    <input type="text" class="form-control bg-light" name="inputClass" placeholder="11" pattern="[0-9]{1,2}" title="Only Numbers" required>
  </div>

  <div class="col-md-6">
    <label for="inputContact" class="form-label fw-bold">Contact No.</label>
    <input type="tel" class="form-control bg-light" name="inputContact" placeholder="7355581314" pattern="[0-9]{10}" title="Only Numbers of 10 Digits"  required>
  </div>
  <div class="col-md-6">
    <label for="inputWhatsapp" class="form-label fw-bold">Whatsapp No.</label>
    <input type="text" class="form-control bg-light" name="inputWhatsapp" placeholder="7355581314"
    pattern="[0-9]{10}" title="Only Numbers of 10 Digits" required>
  </div>
  <div class="col-12">
    <label for="inputEmail" class="form-label fw-bold">Email ID</label>
    <input type="email" class="form-control bg-light" name="inputEmail" placeholder="xyz@gmail.com" required>
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn bt-form">Submit</button>
  </div>
</form>

    
  </div>
  

</div>



</body>
</html>