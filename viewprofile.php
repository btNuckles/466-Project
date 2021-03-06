<?php session_start();
if(!isset($_SESSION['userlogin'])){
    header("Location: index.php");
}
 ?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>ForumName</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheets/indexstyles.css">
    <link rel="stylesheet" href="stylesheets/colors.css">
    <link rel="stylesheet" href="stylesheets/icons.css" type="text/css">
</head>

<body>
    <?php include_once('header.php'); ?>

	<!-- SCRIPT TO LOAD LATEST TOPICS -->
    <script>
        function reloading() {

            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }

            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("loaddiv").innerHTML = this.responseText;
                }
            };

            xmlhttp.open("GET", "php/viewprofile.php", true);
            xmlhttp.send();
        }
        reloading();
        setInterval(function() {
            reloading();
        }, 1000);
    </script>
    <!-- SCRIPT TO LOAD LATEST TOPICS -->




    <?php if(isset($_SESSION['userlogin'])) {
        echo "<script> checkForSession(); </script>";
     } ?>

	<center>
    <div id="loaddiv"></div>
	</center>
</body>

</html>
