<html>
<head>
	
<link href="bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet"
type="text/css" media="all"/>
<title>Registration Page</title>

<meta charset="UTF-7">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
	body{
	background-color:#FFB6C1;
	
}
        {
            font-family: Arial, sans-serif;
            background-color: #87CEEB;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
		
			
        .container {
            background-color:white;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 800px;
			height:1200px
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: red;
        }
    </style>

</head>
<body>
<body>
<form action="user_register.php" method="post">
<div class="container">
<center>
<h4> Create Account </h4>
<img src="./img/img1.png" height="100" width="100" />
</center>
<br>
<img src=".\img\img1.png" height="20" width="20" /> &nbsp; <b> Full Name:</b><br>
<input type="text" style="width:700px;" name="fullname" placeholder="Full Name" />
<br>
<img src=".\img\img2.jfif" height="20" width="20" />&nbsp; <b> Email Id: </b> <br>
<input type="text" style="width:700px;" pattern="[a-zA-Z0-9.%+]+@[a=zA-Z0-9..-]+9?:\.[a-zA_Z0-9.-]+)*$]" name="emailid" placeholder="Email Id" />
<br>
<img src=".\img\img3.png" height="20" width="20" />&nbsp;<b> Contact Number: </b><br>
<input type="text" style="width:700px;" pattern="[789][0-9]{9}" name="contact" placeholder="contact Number" />
<br>
<img src=".\img\img5.png" height="20" width="20" />&nbsp;<b> Password:</b><br>
<input type="password" style="width:700px;" name="password" placeholder="Password" />
<br>
<img src=".\img\img5.png" height="20" width="20" />&nbsp;<b> Confirm Password:</b> <br>
<input type="password" style="width:700px;" name="cpassword" placeholder=" Confirm Password" />
<br>
<img src=".\img\img4.jfif" height="20" width="20" />&nbsp;<b> Address: </b><br>
<div class="form-floating">
  <textarea class="form-control" placeholder="Address" name="address" style="height: 100px"></textarea>
</div>
<br>
<!-- <img src=\animal-zoogcc\img\img8.jpg height="20" width="20" />--> &nbsp; <b> Gender: </b>
<br>
<select name="gender" id="gender" style="width:700px;" class="form-control">
<option value="male"  selected> Male </option>
<option value="female" selected> Female </option>
<option value="other" selected> Other</option>
</select>
<br>
<!--<img src=\animal-zoogcc\img\img6.jpg height="30" width="20" />-->&nbsp;<b> Blood Group: </b>
<br>
<select name="blood_group" id="blood_group"style="width:700px;" class="form-control" >
<option value="A" selected> A </option>
<option value="A+ve" selected> A+ve</option>
<option value="B" selected> B </option>
<option value="B+ve" selected> B+ve </option>
<option value="AB" selected> AB </option>
<option value="AB+ve" selected> AB+ve </option>
<option value="O" selected> O </option>
<option value="O+ve" selected> O+ve </option>
<option value="O+ve" selected> Plz Enter Your Blood Group </option>
</select>
<br>
<br>
<br>
<center>
<button type="submit" class="btn btn-danger"style="width:100px;"><h5>Register</h5></button>
</form>
</center>
</body>
</html>