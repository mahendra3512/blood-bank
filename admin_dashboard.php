<?php
//include_once("header3.php");
?>
<html>
<head>
<link href="bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet"
type="text/css" media="all"/>
</head>
	<style>
        @import url('https://fonts.googleapis.com/css2?family=Exo+2:wght@300;400;700&display=swap');

        :root {
            --primary-color: #00ffcc;
            --secondary-color: #ff3366;
            --bg-color: white;
            --text-color: #fff;
        }
		.navbar{
			background-color:#d9534f;
			color:white;
			padding:1em;
			text-align:center;
		}

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }	
	
        body {
            font-family: 'Exo 2', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            overflow-x: hidden;
        }

        .container {
            width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background:rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(10px);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
			
			font-size:20px;
			background-color:#d9534f;
        }

        .logo {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        .nav-links {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .nav-links a {
            color: var(--text-color);
            text-decoration: none;
            font-weight: 400;
			
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: var(--primary-color);
        }

        .auth-buttons {
            display: flex;
            gap: 15px;
        }

        .auth-button {
            padding: 8px 20px;
            border-radius: 20px;
            font-weight: 600;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .login-button {
            background-color: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
        }

        .login-button:hover {
            background-color: var(--primary-color);
            color: var(--bg-color);
        }

        .signup-button {
            background-color: var(--secondary-color);
            color: var(--text-color);
            border: none;
        }

        .signup-button:hover {
            background-color: #ff4d7d;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(255, 51, 102, 0.3);
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.7);
        }

        .modal-content {
            background-color: #222;
            margin: 10% auto;
            padding: 40px;
            border-radius: 15px;
            width: 80%;
            max-width: 400px;
            box-shadow: 0 0 20px rgba(0,255,204,0.3);
        }

        .close {
            color: var(--primary-color);
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover {
            color: var(--secondary-color);
        }

        .modal-form input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            background-color: #333;
            color: var(--text-color);
            border-radius: 5px;
        }

        .modal-form input[type="submit"] {
            background-color: var(--primary-color);
            color: var(--bg-color);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .modal-form input[type="submit"]:hover {
            background-color: #00ffdd;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        #hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: url('images/background.jpg') no-repeat center center;
            background-size: cover;
        }

        .hero-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px;
            background: #d9534f;
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }

        .hero-text {
            flex: 1;
            max-width: 50%;
        }

        h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            color:black;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }

        .hero-description {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            color: #f0f0f0;
        }

        .cta-button {
            display: inline-block;
            padding: 12px 24px;
            background-color: rgba(255, 107, 107, 0.8);
            color: #fff;
            text-decoration: none;
            font-size: 1.1rem;
            border-radius: 30px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.2);
        }

        .cta-button:hover {
            background-color: rgba(255, 71, 87, 0.9);
            transform: translateY(-2px);
        }

        .hero-images {
            flex: 1;
            position: relative;
            height: 400px;
            width: 400px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }

        .hero-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .hero-image.active {
            opacity: 1;
        }

        .cta-button {
            display: inline-block;
            padding: 12px 30px;
            background-color: #fff;
            color: black;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 700;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .cta-button:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(255, 51, 102, 0.3);
        }

        #features {
            padding: 100px 0;
            background: linear-gradient(45deg, #222, #333);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .feature-icon img {
            font-size: 0rem;
            margin-bottom: 20px;
            color: var(--primary-color);
            width:200px;
            image: 200px;
            height:25%;
            
        }
       

        .feature-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        #about {
            padding: 100px 0;
            background: #222;
        }

        .about-content {
            display: flex;
            align-items: center;
            gap: 50px;
        }

        .about-image {
            flex: 1;
            border-radius: 15px;
            overflow: hidden;
        }

        .about-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .about-text {
            flex: 1;
        }

        h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--primary-color);
        }

        #three-scene {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 3rem;
            }

            .about-content {
                flex-direction: column;
            }

            .nav-links {
                flex-direction: column;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: rgba(0, 0, 0, 0.9);
                padding: 20px;
                clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
                transition: clip-path 0.4s ease-out;
            }

            .nav-links.active {
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
            }

            .auth-buttons {
                margin-top: 20px;
            }

            .hamburger {
                display: block;
                cursor: pointer;
            }

            .hamburger div {
                width: 25px;
                height: 3px;
                background-color: var(--text-color);
                margin: 5px;
                transition: all 0.3s ease;
            }

            .hamburger.active .line1 {
                transform: rotate(-45deg) translate(-5px, 6px);
            }

            .hamburger.active .line2 {
                opacity: 0;
            }

            .hamburger.active .line3 {
                transform: rotate(45deg) translate(-5px, -6px);
            }
        }
    </style>
</head>
<body>
 <form>
 <header>
        <nav class="container">
            
            <div class="nav-links">
                <a href="index.html">Home</a>
                &nbsp;
                
				<a href="view_admin.php">Admin</a>&nbsp;
				<a href="view_user.php"> User  </a>&nbsp;
				<a href="view_donation.php">   View Donor   </a>&nbsp;
                <a href="view_blood_rec.php"> View Recipients</a>&nbsp;
                <div class="auth-buttons">
                   
                </div>
            </div>
            <div class="hamburger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </header>

    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Login to KitchenPro</h2>
            <form class="modal-form" action="login.php" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" value="Log In">
            </form>
            <p style="margin-top: 20px; text-align: center;">
                <a href="#" style="color: var(--primary-color);">Forgot Password?</a>
            </p>
        </div>
    </div>

<br><br>
<section id="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Welcome to Life Saver </h1>
                &nbsp;<p class="hero-description">Connecting donors,receviers in a revolutionary journary.If You want to doante then click on donor button and if you are recepient plz click on recevier</p>
                <a href="BloodDonor.php" class="cta-button"> Donate Blood</a>&nbsp;
				<a href="BloodReceiver.php" class="cta-button">Blood Recipient</a><br><br>
				<a href="OrganDonar.php" class="cta-button"> Donate Organ</a>
			&nbsp;<a href="OrganReceiver.php" class="cta-button"> Organ Recipient</a>
            </div>
            <div class="hero-images">
                <img src="img/bg1.jpg" alt="Delicious food 1" class="hero-image active">
                <img src="img/bg1.jpg" alt="Delicious food 2" class="hero-image">
                <img src="images/chef1.png" alt="Delicious food 3" class="hero-image">
                <img src="images/rest.png" alt="Delicious food 4" class="hero-image">
            </div>
        </div>
    </section>
</body>
</html>