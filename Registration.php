<?php include('dbConnect.php')?>
<?php include('validateRegister.php')?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
* {
  box-sizing: border-box;

  font-family: Arial, Helvetica, sans-serif;

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
  width: 100%;
  padding: 12px;
  border: 2px solid #B82132;
  background-color: none;
  border-radius: 4px;
  resize: vertical;
  color: #B82132;
  box-shadow : inset 0px 0px 10px hotpink;
  
}

label {
  padding: 20px 20px 20px 20px;
  display: inline-block;
  color: #B82132;
  background-color: none;
  size: 50px;
  margin-left:150px;
}

input[type=submit] {
  background-color: none;
  color: #B82132;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #B82132;
}

.container {
  
  border-radius: 5px;
  padding: 5px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 65%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
hr {
  border: 1px solid #A888B5;
  margin-bottom: 25px;
}
/* .registerbtn {
  background-color: #A888B5;
  color: #441752;
  padding: 16px 20px;
  font-size: 15px;
  font-weight: 900;
  margin: 10px 0;
  border: none;
  border-radius: 7px;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
} */



/* From Uiverse.io by nikk7007 */ 
.button {

 --color: #B82132;
 padding: 0.8em 1.7em;
 width: 50%;
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
 height: 800px;
 width: 800px;
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

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<center><h2>Register Form</h2></center>

<div class="container">
  
  <form action="Registration.php" method="post">
    <br>
    <div class="row">
      <div class="col-25">
        <label for="name">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="email" placeholder="Your email..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="password">Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="password" name="password" placeholder="Password">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="password">Comfirm Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="cpassword" name="cpassword" placeholder="Comfirm Password">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="ph">Phone Number</label>
      </div>
      <div class="col-75">
        <input type="ph" id="ph" name="phonenumber"  placeholder="Phone Number">
      </div>
    </div>
<center>
<button type="submit" class="button">Register</button>

    <div class=" signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>

  </div>
</center>
  <br>
  </form>
</div>

</body>
</html>
