<?php
    date_default_timezone_set('Asia/Kolkata');
	require('database.php');
    if (isset($_REQUEST['fname'])){
		$firstn= stripslashes($_REQUEST['fname']);
		$firstn = mysqli_real_escape_string($con,$firstn);
		$lastn= stripslashes($_REQUEST['lname']);
		$lastn = mysqli_real_escape_string($con,$lastn);
		$phone= stripslashes($_REQUEST['phone']);
		$phone = mysqli_real_escape_string($con,$phone);
		$mobile = stripslashes($_REQUEST['mobile']);
		$mobile = mysqli_real_escape_string($con,$mobile);
		$email= stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$address= stripslashes($_REQUEST['address']);
		$address = mysqli_real_escape_string($con,$address);
		$message= stripslashes($_REQUEST['message']);
		$message= mysqli_real_escape_string($con,$message);
		$t_date = date("Y-m-d H:i:s");
        $query = "INSERT into `booking` (fname, lname, phone, mobile, email, address, message, book_date) VALUES ('$firstn', '$lastn', '$phone', '$mobile','$email', '$address', '$message', '$t_date')";
        $result = mysqli_query($con,$query);
        if($result){
            $msg="booking submited sucessfully";
        }
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>booknow</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Features-Blue.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Blue-1.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md" style="background: #76cdf2;">
        <div class="container-fluid"><a class="navbar-brand" href="#">SHIVAM BOREWELLS</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="index.html">home</a></li>
                    <li class="nav-item"><a class="nav-link" href="FAQ.html">faq</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.html">gallery</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="contact-clean" style="background: linear-gradient(138deg, rgb(88,64,180) 0%, rgb(90,142,180) 100%);">
        <form method="post">
            <h2 class="text-center">Book Now</h2>
            <div class="mb-3"><input class="form-control" type="text" name="fname" placeholder="First Name" required></div>
            <div class="mb-3"><input class="form-control" type="text" name="lname" placeholder="Last Name" required></div>
            <div class="mb-3"><input class="form-control" type="number" name="phone" placeholder="Mobile No.1" required></div>
            <div class="mb-3"><input class="form-control" type="number" name="mobile" placeholder="Mobile No.2" required></div>
            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" required></div>
            <div class="mb-3"><input class="form-control" type="text" name="address" placeholder="Address" required></div>
            <div class="mb-3"><textarea class="form-control" name="message" placeholder="Message" rows="14" required></textarea></div>
            <div class="mb-3"><button class="btn btn-primary" type="submit">book</button></div>
			<div>
                    <p class="text-center" style="font-size: 18px;color: rgb(0,255,0);margin-top: 5px;"><?php if (isset($msg)) { ?>

            <?php echo $msg; ?></p>

        <?php } ?></p>
                </div>
        </form>
    </section>
    <footer class="footer-basic" style="margin-top: -4px;background: rgb(235,238,239);">
        <div class="social"></div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="index.html">Home</a></li>
            <li class="list-inline-item"><a href="About%20us.html">about</a></li>
            <li class="list-inline-item"><a href="feedback.php">feedback</a></li>
            <li class="list-inline-item"></li>
        </ul>
        <p class="copyright">Shivam Borewells © 2021</p>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/Lightbox-Gallery.js"></script>
</body>

</html>
<?php ?>