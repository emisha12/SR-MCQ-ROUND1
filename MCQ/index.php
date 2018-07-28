<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
<title>Round 1- MCQ Test</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="./js/bootstrap.min.js"></script>
<script src="./js/jquery.validate.min.js"></script>
<link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h1,h4{
    color: black;
    font-family: beyond;
    font-size: 70px;
}

.header {
    
    background: skyblue; /* green background */
    color: white; /* white text color */
}

/* Increase the font size of the <h1> element */
.header h1 {
    font-size: 70px;
}

body, html {
    height: 100%;
    color: #777;
    line-height: 2;

}

/* Create a Parallax Effect */
.bgimg-1 {
     background-position: center; 
   background-size: cover;
   background-image: url("./pictures/rawpixel-600782-unsplash.jpg");
   height:100%;
}



img{
    width: 120px;
    height: 120px;
    background: rgba(0,0,0,0.5);
    float: left;
    align:top;
}


.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.input-container {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 100%;
    margin-bottom: 15px;
}

.input-field {
    width: 80%;
    padding: 5px;
    outline: none;
}

.input-field:focus {
    border: 2px solid black;
}

.icon {
    padding: 10px;
    background: black;
    color: white;
    min-width: 50px;
    text-align: center;
}

@font-face{
    font-family: "beyond";
    src:url('./fonts/Beyond Wonderland.ttf');
    
}

.btn1 { 
    background-color: black;
   
    color: white;
    padding: 10px 24px;
    border-radius: 8px;
    text-align: center;
    display: inline-block;
    font-size: 16px;
}

#search_area {
    top: 15%;
    left: 30%;
    padding: 3%;
    height: auto;
    width: 40%;
    box-sizing: border-box;
    opacity: 0.8;
    position: absolute;
    z-index: 2;
}

p{
    font-family: "Times new roman";
}
</style>
<body>
<?php
        // put your code here
        ?>
<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 " id="home" >
    <div class='header container-fluid'>
     <div class="navbar navbar-inverse">
         <div class="navbar-header">
            <!-- <img src="pictures/" >-->
        <h1 class="navbar-text text-center">Hydelineate</h1>
         </div>
     </div>
    <!--<img src="pictures/imageedit_1_4521759290.png" >-->
    </div>

    <div class="panel panel-default" id="search_area">
                <div classs="panel-body">
    <form action="register.php" style="max-width:500px;margin:auto" method="post">
        <h4>Round - 1</h4>
        <div class="input-container">
            <i class="fa fa-user icon"></i>
            <input class="input-field" type="text" placeholder="Username" name="usrnm" required>
        </div>
        <div class="input-container">
            <i class="fa fa-phone icon"></i>
            <input class="input-field" type="text" placeholder="Phone_no" name="phone" required>
        </div>
        <div class="input-container">
            <i class="fa fa-bank icon"></i>
            <input class="input-field" type="text" placeholder="College" name="clg" required>
        </div>
        <div class="input-container">
            <i class="fa fa-bookmark icon"></i>
            <select class="input-field" name="yr" required >
                <option value="I">I</option>
                <option value="II">II</option>
                <option value="III">III</option>
                <option value="IV">IV</option>
            </select>
        </div>
        <div class="input-container">
            <i class="fa fa-graduation-cap icon"></i>
            <select class="input-field" name="dept" required>
                <option value="IT">IT</option>
                <option value="CSE">CSE</option>
                <option value="ECE">ECE</option>
                <option value="EIE">EIE</option>
                <option value=EEE">EEE</option>
            </select>
        </div>
<div>
        <center>
        <button type="submit" class="btn1">Register</button>
        </center>
    </form>
</div>
        <div class='header container-fluid'>
        <div class=" navbar-fixed-bottom navbar-inverse">
            <p class="text-center" id="foot">
            &copy;Hashtagg 2k18.
            </p>
        </div>
        </div>
                </div>
</div>
</div>
</body>
</html>
