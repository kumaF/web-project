<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eventbrite</title>
    <link rel="stylesheet" href="./css_files/main.css">
    <link rel="stylesheet" href="./node_modules/sal.js/dist/sal.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js"></script>
</head>
<body>
    <!-- Main Container -->
    <div class="container-fluid">

        <!-- Navigation bar -->
        <nav class="navbar bg-black">
            <a href="./index.php"><img src="./Resources/Images/eblogo.png"></a>
            <ul>
                <li><a href="./browse-events.html">Browse Events</a></li>
                <li><a href="./createEvent.html">Create Events</a></li>
                <li><a href="./contact.html">Contact</a></li>
                <li><a href="./login.php">Log In</a></li>
            </ul>
        </nav>

        <div class="container login bg-yellow">
            <h1
                data-sal-duration="800"
                data-sal="slide-up"
                data-sal-delay="400"
                data-sal-easing="ease-out-bounce"
            >Login</h1>
            <p
                data-sal-duration="800"
                data-sal="slide-down"
                data-sal-delay="400"
                data-sal-easing="ease-out-bounce"
            >Please enter your email and password to log in.</p>
            <form>
                <input type="text" id="email" placeholder="Email"
                    data-sal-duration="1200"
                    data-sal="fade"
                    data-sal-delay="500"
                    data-sal-easing="ease-out-bounce"
                >
                <input type="password" id="password" placeholder="Password"
                    data-sal-duration="1200"
                    data-sal="fade"
                    data-sal-delay="600"
                    data-sal-easing="ease-out-bounce"
                >
                <input type="submit" id="login" value="Login"
                    data-sal-duration="1200"
                    data-sal="slide-up"
                    data-sal-delay="400"
                    data-sal-easing="ease-out-bounce"
                >
            </form>
            <a href="./signup.php"
                 data-sal-duration="1200"
                data-sal="slide-up"
                data-sal-delay="400"
                data-sal-easing="ease-out-bounce"
            >Create a new account</a>
        </div>
    </div>

    <script src="./node_modules/sal.js/dist/sal.js"></script>
    <script src="./scripts/animate.js"></script>
</body>
</html>