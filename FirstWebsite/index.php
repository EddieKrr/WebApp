<!DOCTYPE html>
<html lang="en">
    
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Home.css">
    <script>
        //Width of side nav
        function openNav()
        {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }
        // Closing width of side nav
        function closeNav()
        {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.body.style.backgroundColor = "white";
        }

    </script>
    <!-- This is the title of the website -->
    <title>Home</title>
</head>
<body class="body">
    <div onclick="openNav()"></div>
    <div onclick="openNav()"></div>
    <div onclick="openNav()"></div>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">Home</a>
    <a href="#">Cars</a>
    <a href="#">The Team</a>
    <a href="#">Contact Us</a>
</div>
<!-- Use this to open the side menu -->
    <p>Our team is guaranteed to make sure that you drive off the lot in your dream! Welcome and see the amazing deals we have for you!</p>
<footer>
    <ul class = "footer">
        <li><a href="index.html">Home</a></li>
        <a href="about.html"><li>About Us</li></a>
        <a href="contact.html"><li>"</li></a>
    </ul>
</footer>
</body>
</html>