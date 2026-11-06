
<?php include('validatelogin.php')?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
 
  font-family: sans-serif;

}
body{
  background: linear-gradient(170deg,#fcd6cc,#f5dfe8,#ddfad7,#ebd3ed,#e1e9fc);
  background-size: 500% 500%
  animation: color 12s ease-in-out infinite;
}
h2{
  
  margin:50px 50px;
  font-size: 50px;
}
h2,p{

    color: #B82132;
    
}

input{
  width: 80%;
  padding: 12px;
  border: 2px solid #B82132;
  border-radius: 10px;
  resize: vertical;
  color: #B82132 ;
  
  
}

label {
  padding: 20px 20px 20px 20px;
  display: inline-block;
  color: #B82132;
  size: 50px;
  margin-left: 50px;
}

input[type=submit] {
  background-color: #B82132;
  color: #B82132;
  padding: 20px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #B82132;
}

.container {
  margin-left: 455px;
  width: 40%;
  border-radius: 20px ;
  background-color:  white;
  padding: 4px;
}

.col-25 {
  float: left;
  width: 30%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 50%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
hr {
  border: 1px solid #62825D;
  margin-bottom: 25px;
}

.button {

 --color: #B82132;
 padding: 0.8em 1.7em;
 width: 30%;
 background-color: transparent;
 border-radius: .3em;
 position: relative;
 overflow: hidden;
 cursor: pointer;
 transition: .5s;
 font-weight: 400;
 font-size: 17px;
 border: 1px solid;
 font-family: inherit;
 text-transform: uppercase;
 color: var(--color);
 z-index: 1;
 margin-top: 30px;
}

.button::before, .button::after {
 content: '';
 display: block;
 width: 50%;
 height: 30px;
 transform: translate(-50%, -50%);
 position: absolute;
 border-radius: 50%;
 z-index: -1;
 background-color: var(--color);
 transition: 1s ease;
}

.button::before {
 top: -1em;
 left: -1em;
}

.button::after {
 left: calc(100% + 1em);
 top: calc(100% + 1em);
 
}

.button:hover::before, .button:hover::after {
 height: 500px;
 width: 500px;
}

.button:hover {
 color: #F2B28C;
}

.button:active {
 filter: brightness(.8);
}

a {
    color: #B82132;
  text-align: center;
  margin: 10px 0;
}

@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<center><h2>Login Form</h2></center>

<div class="container">
<form action="LoginForm.php" method="POST">
    <br>

    <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="email" id="email" name="email" placeholder="Your Email">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="password">Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="password" name="password" placeholder="Password" aria-describedby="passwordHelpInline">
      </div>
</div>
    

<center>
    <button type="submit" name="submit" class="button">Login</button>

    <div class=" signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>

  </div>
  </center>
  <div>
          <?php 
          if(isset($errors['login'])){
            echo $errors['login'];
          }
          ?>
  </div>
  <br>
  </form>
</div>


</body>
</html>
