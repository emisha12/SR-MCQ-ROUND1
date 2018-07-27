
<?php 
require 'config.php';
if(!empty($_SESSION['NAME'])){
    
    $right_answer=0;
    $wrong_answer=0;
    $unanswered=0; 
  
   
   
    $response="select id,answer from questions";
   $respo=$conn->query($response);
   while($result=$respo->fetch_assoc()){
            if($result['answer']==$_POST[$result['id']]){
                     $right_answer++;
           }else if($_POST[$result['id']]==5){
               $unanswered++;
           }
           else{
               $wrong_answer++;
           }
       
   }
   $name=$_SESSION['NAME'];  
$summary="update candidates set MARKS='$right_answer' where NAME='$name'";
$sum=$conn->query($summary);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Round 1- MCQ Quiz</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="./css/style.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="../../assets/js/html5shiv.js"></script>
        <script src="../../assets/js/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <header>
            <p class="text-center">
                Welcome : <?php 
                if(!empty($_SESSION['NAME'])){
                    echo $_SESSION['NAME'];
                }?>
               
            </p>
        </header>
        <div class="container result">
            <div class="row"> 
                    <div class='result-logo'>
                            <img src="image/Quiz_result.png" class="img-responsive"/>
                    </div>    
           </div>  
           <hr>   
           <div class="row"> 
                  <div class="col-xs-18 col-sm-9 col-lg-9"> 
                    <div class='result-logo1'>
                            <img src="image/cat.GIF" class="img-responsive"/>
                    </div>
                  </div>
                  
                  <div class="col-xs-6 col-sm-3 col-lg-3"> 
                     <a href="<?php echo BASE_PATH;?>" class='btn btn-success'>Start new Quiz!!!</a>                   
                     <a href="<?php echo BASE_PATH.'logout.php';?>" class='btn btn-success'>Logout</a>
                   
                       <div style="margin-top: 30%">
                        <p>Total no. of right answers : <span class="answer"><?php echo $right_answer;?></span></p>
                        <p>Total no. of wrong answers : <span class="answer"><?php echo $wrong_answer;?></span></p>
                        <p>Total no. of Unanswered Questions : <span class="answer"><?php echo $unanswered;?></span></p> </div> 
                      <?PHP
                }
                ?>
                       </body></html>
