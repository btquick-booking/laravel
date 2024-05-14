<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jojo Content Display</title>
    <style>
        /* Basic Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #5959c9;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #contentArea {
            width: 100%;
            height: calc(100% - 60px);
            /* Adjust height as needed */
        }

        #contentFrame {
            width: 100%;
            height: 100%;
        }

        .main {
            transition: margin-left .5s;
            padding: 16px;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the side navigation take up the whole screen */
        @media screen and (max-height: 600px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }
    </style>
</head>

<body>

    <!-- Side Navigation -->
    <div class="sidenav" id="mySidenav">
        <!-- Close button for the side navigation -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <!-- Content iframe -->
        <div id="contentArea">
            <iframe id="contentFrame" src="" width="100%" height="100%" frameborder="0"></iframe>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main">
        <button onclick="openJojo()">+</button>
    </div>

    <!-- JavaScript for handling the side navigation -->
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            // Reset iframe source when closing
            document.getElementById("contentFrame").src = "";
        }

        function openJojo() {
            // Set iframe source to jojo.html
            document.getElementById("contentFrame").src = @js(asset('../chair/jojo.html'));
            openNav();
        }
    </script>

</body>

</html>
