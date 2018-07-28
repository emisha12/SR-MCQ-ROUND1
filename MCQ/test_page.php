
<?php 
require 'config.php';

//$_SESSION['NAME']= $name;
//$_SESSION['id'] = mysql_insert_id();
if(!empty($_SESSION['NAME'])){

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Quiz</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
                <link href="./css/style.css" rel="stylesheet" media="screen">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="./js/jquery-1.10.2.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/jquery.validate.min.js"></script>
		<script src="./js/countdown.js"></script>
		<style>
			.container {
				margin-top: 110px;
			}
			.error {
				color: #B94A48;
			}
			.form-horizontal {
				margin-bottom: 0px;
			}
			.hide{display: none;}
                        
                        @font-face{
                            font-family: "beyond";
                            src:url('./fonts/Beyond Wonderland.ttf');
    
                            }
                            
                            h3{
                                font-family: beyond;
                                font-size: 30 px;
                            }
                            
                           
                            body{
                                background-image: url('./pictures/ethan-weil-462772-unsplash.jpg');
                            }
                            
                            #question_area {
                                top: 5%;
                                left: 25%;
                                padding: 1%;
                                 height: auto;
                                 width: 50%;
                                box-sizing: border-box;
                                opacity: 0.8;
                                position: absolute;
                                z-index: 2;
                             }
                             .qn{
                                 font-family: "Times new roman";
                                 font-size: 15px;
                             }
                             
                             
		</style>
	</head>
	<body>
	    <div class='header container-fluid'>
     <div class="navbar navbar-inverse">
         <div class="navbar-header">
            <h3 class="text-center navbar-text">
                Welcome : <?php if(!empty($_SESSION['NAME'])){echo $_SESSION['NAME'];}?>
            </h3>
         </div>
     </div>
            </div>
        <div id='timer'>
            <script type="application/javascript">
            var myCountdownTest = new Countdown({
                                    time: 2700, 
                                    width:200, 
                                    height:80, 
                                    rangeHi:"minute"
                                    });
           </script>
            
        </div>
         <div class="panel panel-default" id="question_area">
                <div class="panel-body">
		<div class="container question">
			<div class="col-xs-12 col-sm-8 col-md-8 col-xs-offset-4 col-sm-offset-3 col-md-offset-3">
                            <form class="form-horizontal" role="form" id='login' method="post" action="final.html">
					<?php 
					$res ="select * from questions ORDER BY RAND()";
                                         $result=$conn->query($res);
                                        $row_count = $result->num_rows;
                                        
                                        if($row_count>0){
					$i=1;
                                        
                while($rows=$result->fetch_assoc()){
                  ?>
                    
                    <?php if($i==1){?>
                                     <p id='ques_no<?php echo $i;?>' class='qn'>
			Question : <?php echo $i; ?> / <?php echo $row_count; ?>
                                     </p><hr id="hr_<?php echo $i;?>" class='h'>
              
                    <div id='question<?php echo $i;?>' class='cont'>
                    <p class='questions' id="qname<?php echo $i;?>"> <?php echo $i?>.<?php echo $rows['question_name'];?></p>
                    <input type="radio" value="<?php echo $rows['answer1'];?>" id='radio1_<?php echo $rows['id'];?>' name='<?php echo $rows['id'];?>'/><?php echo $rows['answer1'];?>
                   <br/>
                    <input type="radio" value="<?php echo $rows['answer2'];?>" id='radio1_<?php echo $rows['id'];?>' name='<?php echo $rows['id'];?>'/><?php echo $rows['answer2'];?>
                    <br/>
                    <input type="radio" value="<?php echo $rows['answer3'];?>" id='radio1_<?php echo $rows['id'];?>' name='<?php echo $rows['id'];?>'/><?php echo $rows['answer3'];?>
                    <br/>
                    <input type="radio" value="<?php echo $rows['answer4'];?>" id='radio1_<?php echo $rows['id'];?>' name='<?php echo $rows['id'];?>'/><?php echo $rows['answer4'];?>
                    <br/>
                    <input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php echo $rows['id'];?>' name='<?php echo $rows['id'];?>'/>                                                                      
                    <br/>
                    <button id='<?php echo $i;?>' class='next btn btn-primary' type='button' name="Next">Next</button>
                    </div>     
                      
                     <?php }else if($i==$row_count){?>
                    
                      <p id='ques_no<?php echo $i;?>' class='qn'>
			Question : <?php echo $i; ?> / <?php echo $row_count; ?>
                    </p><hr id='hr_<?php echo $i;?>' class='h'>
                       <div id='question<?php echo $i;?>' class='cont'>
                    <p class='questions' id="qname<?php echo $i;?>"><?php echo $i?>.<?php echo $rows['question_name'];?></p>
                    <input type="radio" value="<?php echo $rows['answer1'];?>"  id=' radio1_<?php echo $rows['id'];?>' name='<?php echo $rows['id'];?>'/><?php echo $rows['answer1'];?>
                    <br/>
                    <input type="radio" value="<?php echo $rows['answer2'];?>" id='radio1_<?php echo $rows['id'];?>' name='<?php echo $rows['id'];?>'/><?php echo $rows['answer2'];?>
                    <br/>
                    <input type="radio" value="<?php echo $rows['answer3'];?>" id=' radio1_<?php echo $rows['id'];?>' name='<?php echo $rows['id'];?>'/><?php echo $rows['answer3'];?>
                    <br/>
                    <input type="radio" value="<?php echo $rows['answer4'];?>" id='radio1_<?php echo $rows['id'];?>' name='<?php echo $rows['id'];?>'/><?php echo $rows['answer4'];?>
                    <br/>
                    <input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php echo $rows['id'];?>' name='<?php echo $rows['id'];?>'/>                                                                      
                    <br/>
                    <button id='<?php echo $i;?>' class='previous btn btn-primary' type='button'>Previous</button>                    
                    <button id='<?php echo $i;?>' class='next btn btn-primary' type='submit' >Finish</button>
                    </div>
                    
                   <?php }else{?>
                    <p id='ques_no<?php echo $i;?>' class='qn'>
			Question : <?php echo $i; ?> / <?php echo $row_count; ?>
                    </p><hr id='hr_<?php echo $i;?>' class='h'>
                    <div id='question<?php echo $i;?>' class='cont'>
                    <p class='questions' id="qname<?php echo $i;?>"><?php echo $i?>.<?php echo $rows['question_name'];?></p>
                    <input type="radio" value="<?php echo $rows['answer1'];?>" id='<?php echo $rows['id'];?>' name='<?php echo $rows['id'];?>'/><?php echo $rows['answer1'];?>
                    <br/>
                    <input type="radio" value="<?php echo $rows['answer2'];?>" id='<?php echo $rows['id'];?>' name='<?php echo $rows['id'];?>'/><?php echo $rows['answer2'];?>
                    <br/>
                    <input type="radio" value="<?php echo $rows['answer3'];?>" id='<?php echo $rows['id'];?>' name='<?php echo $rows['id'];?>'/><?php echo $rows['answer3'];?>
                    <br/>
                    <input type="radio" value="<?php echo $rows['answer4'];?>" id='<?php echo $rows['id'];?>' name='<?php echo $rows['id'];?>'/><?php echo $rows['answer4'];?>
                    <br/>
                    <input type="radio" checked='checked' style='display:none' value="5" id='<?php echo $rows['id'];?>' name='<?php echo $rows['id'];?>'/>                                                                      
                    <br/>
                    
                    <button id='<?php echo $i;?>' class='previous btn btn-primary' type='button'>Previous</button>                    
                    <button id='<?php echo $i;?>' class='next btn btn-primary' type='button' name="Next">Next</button>
                    </div>
                                        <?php } $i++;}} ?>
					
				</form>
                     
			</div>
		</div>
       <div class='container-fluid'>
        <div class=" navbar-fixed-bottom navbar-inverse">
            <p class="text-center " id="foot" style="color: white;">
            &copy;Hashtagg 2k18.
            </p>
        </div>
        </div>
         </div>
         </div>

		
		
		<script>
		$('.cont').addClass('hide');
		count=$('.questions').length;
		 $('#question'+1).removeClass('hide');
                 $('.qn').addClass('hide');
                 $('#ques_no'+1).removeClass('hide');
		 $('.h').addClass('hide');
                 $('#hr_'+1).removeClass('hide'); 
                 
		 $(document).on('click','.next',function(){
		     last=parseInt($(this).attr('id'));     
		     nex=last+1;
		     $('#question'+last).addClass('hide');
		     
		     $('#question'+nex).removeClass('hide');
                     $('#ques_no'+last).addClass('hide');
                     
                     $('#ques_no'+nex).removeClass('hide');
                     $('#hr_'+last).addClass('hide');
                     $('#hr_'+nex).removeClass('hide');
		 });
		 
		 $(document).on('click','.previous',function(){
             last=parseInt($(this).attr('id'));     
             pre=last-1;
             $('#question'+last).addClass('hide');
             
             $('#question'+pre).removeClass('hide');
             
             $('#ques_no'+last).addClass('hide');
                     
             $('#ques_no'+pre).removeClass('hide');
              $('#hr_'+last).addClass('hide');
              $('#hr_'+pre).removeClass('hide');
               
         });
            
         setTimeout(function() {
             $("form").submit();
          }, 2700000);
		</script>
	</body>
</html>
<?php }else{
    
 header( 'Location:index.php' ) ;
                                       // }
}
?>

