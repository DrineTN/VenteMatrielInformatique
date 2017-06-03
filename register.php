<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    @import url(http://fonts.googleapis.com/css?family=Roboto);

/****** LOGIN MODAL ******/
.loginmodal-container {
padding: 30px;
max-width: 350px;
width: 100% !important;
background-color: #F7F7F7;
margin: 0 auto;
border-radius: 2px;
box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
overflow: hidden;
font-family: roboto;
}
.loginmodal-container h1 {
text-align: center;
font-size: 1.8em;
font-family: roboto;
}

.loginmodal-container input[type=submit] {
width: 100%;
display: block;
margin-bottom: 10px;
position: relative;
}

.loginmodal-container input[type=text], input[type=password]{
height: 44px;
font-size: 16px;
width: 100%;
margin-bottom: 10px;
-webkit-appearance: none;
background: #fff;
border: 1px solid #d9d9d9;
border-top: 1px solid #c0c0c0;
/* border-radius: 2px; */
padding: 0 8px;
box-sizing: border-box;
-moz-box-sizing: border-box;
}

.loginmodal-container input[type=text]:hover, input[type=password]:hover,{
border: 1px solid #b9b9b9;
border-top: 1px solid #a0a0a0;
-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.loginmodal {
text-align: center;
font-size: 14px;
font-family: 'Arial', sans-serif;
font-weight: 700;
height: 36px;
padding: 0 8px;
/* border-radius: 3px; */
/* -webkit-user-select: none;
user-select: none; */
}

.loginmodal-submit {
/* border: 1px solid #3079ed; */
border: 0px;
color: #fff;
text-shadow: 0 1px rgba(0,0,0,0.1);
background-color: #4d90fe;
padding: 17px 0px;
font-family: roboto;
font-size: 14px;
/* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.loginmodal-submit:hover {
/* border: 1px solid #2f5bb7; */
border: 0px;
text-shadow: 0 1px rgba(0,0,0,0.3);
background-color: #357ae8;
/* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.loginmodal-container a {
text-decoration: none;
color: #666;
font-weight: 400;
text-align: center;
display: inline-block;
opacity: 0.6;
transition: opacity ease 0.5s;
}

.login-help{
font-size: 12px;
}
    </style>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script type="text/javascript">
  function valider() {
      document.getElementById("cin").innerHTML = "";
      document.getElementById("email").innerHTML = "";
      document.getElementById("nom").innerHTML = "";
      document.getElementById("tel").innerHTML = "";
      document.getElementById("adress").innerHTML = "";
      document.getElementById("login").innerHTML = "";
      document.getElementById("pass").innerHTML = "";
    var mail = document.forms["myform"]["email"].value;
    var cin = document.forms["myform"]["cin"].value;
    var nom = document.forms["myform"]["nom"].value;
    var tel = document.forms["myform"]["tel"].value;
    var adress = document.forms["myform"]["adress"].value;
    var login = document.forms["myform"]["login"].value;
    var pass = document.forms["myform"]["pass"].value;
    var ok = true;
    if (cin == "") {
        //alert("Name must be filled out");
        document.getElementById("cin").innerHTML = "champs obligatoire";
      //  return false;
      ok = false;
    }

    if (nom == "") {
        //alert("Name must be filled out");
        document.getElementById("nom").innerHTML = "champs obligatoire";
      //  return false;
      ok = false;
    }
    if (tel == "") {
        //alert("Name must be filled out");
        document.getElementById("tel").innerHTML = "champs obligatoire";
      //  return false;
      ok = false;
    }
    if (adress == "") {
        //alert("Name must be filled out");
        document.getElementById("adress").innerHTML = "champs obligatoire";
        //return false;
        ok = false;
    }
    if (login == "") {
        //alert("Name must be filled out");
        document.getElementById("login").innerHTML = "champs obligatoire";
      //  return false;
      ok = false;
    }
    if (pass == "") {
        //alert("Name must be filled out");
        document.getElementById("pass").innerHTML = "champs obligatoire";
      //  return false;
      ok = false;
    }
    if (!(mail.indexOf("@")>=0)&& !(mail.indexOf(".")>=0)) {
      document.getElementById("email").innerHTML = "invalide mail";
      // alert("Mail invalide !");
       ok =  false;
  }
  return ok;
  }
</script>
  </head>
  <body>
  <!--  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  style="display: none;">
  -->
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Register</h1><br>
				  <form name="myform" method="POST" action="ajouteruser.php" onsubmit="return valider()">
            <input type="text" name="cin" placeholder="Cin">

              <p id="cin" style="color:red;">

              </p>

          <input type="text" name="nom" placeholder="Nom">
          <p id="nom" style="color:red;">

          </p>
          <input type="text" name="email" placeholder="Email" class="form-control">
          <p id="email" style="color:red;">

          </p>
          <input type="text" name="tel" placeholder="Telephone">
          <p id="tel" style="color:red;">

          </p>
          <input type="text" name="adress" placeholder="Adresse">
          <p id="adress" style="color:red;">

          </p>
          <input type="text" name="login" placeholder="login">
          <p id="login" style="color:red;">

          </p>
					<input type="password" name="pass" placeholder="Password">
          <p id="pass" style="color:red;">

          </p>
          <input type="submit" class="login loginmodal-submit" value="Login">
				  </form>
				  <div class="login-help">
				  </div>
				</div>
			</div>
		<!--  </div>-->
  </body>
</html>
