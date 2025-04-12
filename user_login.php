<html>
<head>
<link href="bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet"
type="text/css" media="all"/>
<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
body{
    font-family: 'Poppins', sans-serif;
    background-color: #FFB6C1;
}
.content{
    margin: 8%;
    background-color: #fff;
    padding: 4rem 1rem 4rem 1rem;
    box-shadow: 0 0 5px 5px rgba(0,0,0, .05);
}
.signin-text{
    font-style: normal;
    font-weight: 600 !important;

}
.form-control{
    display: block;
    width:100%;
    font-size: 1rem;
    font-weight: 400;
    line-height:1.5;
    border-color: #00ac96 !important;
    border-style: solid !important;
    border-width: 0 0 1px 0 !important;
    padding: 0px !important;
    color:#495057;
    height: auto;
    border-radius: 0;
    background-color:#fff;
    background-clip: padding-box;
}


.form-control:focus{
    color: #495057;
    background-color:#fff;
    border-color: #fff;
    outline: 0;
    box-shadow: none;
}
.birthday-section{
    padding: 15px;
}
.btn-class{
    border-color: #00ac96;
    color: #00ac96;
}
.btn-class:hover{
    background-color: red;\* #00ac96;*/
    color: #fff;
}
</style>
</head>
<body>
<form action="user_logininvalidate.php" method="post">
<div class="container">
  <div class="row content">
    <div class="col-md-6 mb-3">
     <img src=\blood_bank\images\image6.png width="400" height="400" alt="Image in login page">
    </div>
    <div class="col-md-6">
      <h3 class="signin-text mb-3">User - Sign In</h3>
      <form><br>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="emailid" class="form-control" required >
        </div>
		<br><br>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" required >
        </div>
		<br>
        <div class="form-group form-check">
          <input type="checkbox" name="checkbox" class="form-check-input" id="checkbox">
          <label class="form-check-label" for="checkbox">Remember Me</label>
        </div><br>
        <button class="btn btn-danger"style="width:100px;">Login</button>
      </form><br><br>
	  New User ? ? <a href="user_register1.php"> Register Here..</a>
    </div>
  </div>
</div>
</body>
</html>