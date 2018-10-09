<?php 


class SessionController {
    
    function __construct (){
        session_start();
        if(!isset($_SESSION['admin']) && $_SESSION['admin'] !== 'admin'){
            header("location: index.php");
        }
        else {
            
        }
    }
}

new SessionController;
?>
<html>
<head>
<!--	===============================================================================================-->
 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="../Client/materialize-1-dev/dist/css/materialize.min.css"

media="screen,projection"
	>
  <script src="../jquery-1.11.1.min.js"></script>
  <link href="../circle/css/jquery.circliful.css" rel="stylesheet" type="text/css" />

		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../emoji/dist/css/emojione.min.css">
		<Link rel="stylesheet" type="text/css" href="../Client/Custom.css" >
	
<script type="text/javascript" src="../Client/materialize-1-dev/dist/js/materialize.min.js"></script> 
<style type="text/css">
  
.goup {
  transition: .3s all;
  font-size: 40px;
}
.lefta {
  margin-left: 105px;
}
.hide{
  display: hidden;
}
.gouping {
  font-size: 50px;
}
.ana {
  transition: .2s all;
  float: none;
  position: relative;
 padding: 0 !important;
border-radius: 50%;
  box-shadow: 0 0 20px rgba(0,0,0,.05);
  background-image: linear-gradient(#fff,#fdfdfd);
}

.emo {
  transition: .2s all;
  float: right !important;
  position: absolute !important;

}

.ana:hover {
  box-shadow: 0 0 100px rgba(0,0,0,.2);
  z-index: 200;
}
.ana:hover .emo {
background-color: #4949ff;
}
.inp{
  padding-top: 12px;
  padding-bottom: 12px;
  padding-left: 0;
  float: left;
  display: block;
  width: 100%;
}
.inp:hover .em{
  font-size: 50px !important;
  color: red;
  border-radius: 100px;
  background-color: inherit;
  padding-top: 25px;
  padding-bottom: 25px;
  box-shadow: 0 0 20px rgba(0,0,0,.4);
}
.sa{
  font-size: 50px !important;

  border-radius: 100px;
  background-color: inherit;
  padding-top: 25px;
  padding-bottom: 25px;
  box-shadow: 0 0 20px rgba(0,0,0,.4);
}
.cyan{
  margin-left: 45% !important;
}
input{
  text-align: center !important;
}
.head {
  background: #fff;
  color: #888;
  padding: 0px;
  text-align: center !important;
}
body{
  background-color: #f7f7f7;
}
.cir {
  padding-bottom: 6px !important;
} 
.lists {
  padding: 5px !important;
  background: #fff !important;
  color: #888;
  border: 5px solid #f7f7f7;
  border-radius: 10px;
}
</style>

</head>
<body>
	<div class="row">
<div class="col s9 " >
<div class="col s12 z-depth-0" style="background-color: transparent;">
<?php
include '../analysis.php';
?>
</div>
</div>

<!-- <div class="col s6"  >

    <form class="col card s12 z-depth-0"   action="Feedback.php" method="post" 
    
    style ="box-shadow: 0 0 30px rgba(0,0,0,.12) !important;"
    
     >
 <center> <h4 style="margin: 0;" > <i style="color: #00bcd4 !important;  " class="fa fa-comment-o gouping"></i> Give us suggestion</h4>
 <small> <p style="color: #00bcd4 !important;"> <u>let us know how you fell about our company service </u></p>  </small>
</center>
					<div class="row">
        <div class="input-field col s6">
          <input  id="first_name" type="text" class="validate" name="first_name">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="last_name">
          <label for="last_name">  Last Name</label>
        </div>
      </div>
<p>
	<center> <h5>How do you fell about our system ?</h5> </center>
      <label class="inp">
        <input name="group1" type="radio" class="with-gap" value="excellent" checked />
        <span> <i class="em em-clap goup"></i> excellent  </span>
      </label>
    </p>
    <p>
      <label class="inp">
        <input name="group1" type="radio" value="very nice" class="with-gap" />
        <span>  <i class="em em-smiley goup"></i>  very nice </span>
      </label>
    </p>
    <p>
      <label class="inp">
        <input class="with-gap" name="group1" value="good" type="radio"  />
        <span> <i class="em em-relaxed em-3x goup"></i> Good</span>
      </label>
    </p>
    <p>
      <label class="inp">
        <input name="group1" type="radio" value="have no idea" class="with-gap"  />
        <span> <i class="em em-smirk goup"></i> Have no idea</span>
      </label>
  </p>
  <p>
  <label class="inp">
        <input name="group1" type="radio" value="not good" class="with-gap"  />
        <span> <i class="em em-confused goup"></i>not Good</span>
      </label>
  </p>
  <p>
        <label class="inp">
        <input name="group1" type="radio" value="poor" class="with-gap"  />
        <span> <i class="em  em-unamused goup"></i>poor</span>
      </label>
  </p>
  <p>
      <label class="inp">
        <input name="group1" type="radio" value="disappointed" class="with-gap"  />
        <span> <i class="em em-weary goup"></i>disappointed</span>
      </label>

    </p>

<div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="description"></textarea>
          <label for="textarea1">describe how you fell </label>
        </div>
      </div>
	<input type="submit" class="btn btn-default btn-large cyan pulse" name="submit" value="add">
	<br>
	<br>
</div>
	</form> -->
<div class="col s3 z-depth-0" style="border: 0;">


 <ul class="collection with-header z-depth-0" 
 
 style = "max-height: 700px; border: 0;
    overflow: scroll; overflow-x: hidden;"
  >
        <li class="collection-header" 
        style="background: #6ed0ee;  background: #6ed0ee;
    color: white;
    border-radius: 200px;
    padding: 2px;
    text-align: center;  color: white;"
         ><h5>Latest suggestions </h5></li>
       <div>
          <?php 
        //  include ('../dbcon.php');
             
  $query="SELECT * FROM Feedback";

  $DB = new dbConnection();
   $connection = $DB->dbConnect();

     $result=  $connection -> query($query);
     while ($row=mysqli_fetch_array($result)) 
     { 
             echo "<li class='collection-item lists'>"
             ;
             if($row['type'] === 'excellent')
             {
               echo '<i class="sa em em-clap goup"></i> ';
             }
             else if($row['type'] === 'very nice') {
               echo '<i class="sa em em-smiley goup"></i>';
             }
             else if($row['type'] === 'good') {
              echo '<i class="sa em em-relaxed em-3x goup"></i>';
             }
             else if($row['type'] === 'have no idea') {
               echo '<i class="sa em em-smirk goup"></i> ';
             }
             else if($row['type'] === 'not good') {
               echo '<i class="sa em em-confused goup"></i>';
             }
             else if($row['type'] === 'poor') {
               echo '<i class="sa em  em-unamused goup"></i>';
             }
             else if($row['type'] === 'disappointed') {
             echo '<i class="sa em em-weary goup "></i>';
             }
             else {
              echo "??";
             }





             echo "&nbsp;&nbsp;&nbsp;&nbsp;". $row['name']."<a href=\"../view.php?id=".$row['id']."\" >&nbsp;&nbsp;&nbsp;&nbsp;Detail</a></li>";

     }
     /*
     $numRows=$result->num_rows;
     if($numRows>0){
       while($row==$result->fetch_assoc()){
         //$feedback[]=$row;
         echo "<div>";
       echo "<li>".$row['type']."</li>";
       echo "<li>".$row['name']."</li>";
       echo "</div>";
      }*/
          

             ?>

      </ul>
            
</div>

</div>

</div>
<script src="../circle/js/jquery.circliful.min.js"></script>
<script>
      $( document ).ready(function() {
        var dapp = document.getElementById("dapp").innerText;
        var exp = document.getElementById("exe").innerText;
       var nice = document.getElementById("nice").innerText;
       var poor = document.getElementById("poor").innerText;
       var gd = document.getElementById("gd").innerText;
       var ngd = document.getElementById("ngd").innerText;
var noidea = document.getElementById("noidea").innerText;
        exp = parseFloat(exp);
        gd = parseFloat(gd);
        ngd = parseFloat(ngd);
        dapp = parseFloat(dapp);
        poor = parseFloat(poor);
        nice = parseFloat(nice);
        noidea = parseFloat(noidea);
    $("#dapp-circle").circliful({
                    animationStep: 5,
                    foregroundBorderWidth: 5,
                    backgroundBorderWidth: 15,
                    percent: dapp
               });
    
$("#gd-circle").circliful({
                    animationStep: 5,
                    foregroundBorderWidth: 5,
                    backgroundBorderWidth: 15,
                    percent: gd
               });
   

    $("#noidea-circle").circliful({
                    animationStep: 5,
                    foregroundBorderWidth: 5,
                    backgroundBorderWidth: 15,
                    percent: noidea
               });
    $("#poor-circle").circliful({
                    animationStep: 5,
                    foregroundBorderWidth: 5,
                    backgroundBorderWidth: 15,
                    percent: poor
               });

    $("#exp-circle").circliful({
                    animationStep: 5,
                    foregroundBorderWidth: 5,
                    backgroundBorderWidth: 15,
                    percent: exp
               });
   
$("#nice-circle").circliful({
                    animationStep: 5,
                    foregroundBorderWidth: 5,
                    backgroundBorderWidth: 15,
                    percent: nice
               });
               $("#ngd-circle").circliful({
                    animationStep: 5,
                    foregroundBorderWidth: 5,
                    backgroundBorderWidth: 15,
                    percent: ngd
               });
   
    console.log(exp);


     });
  </script>
</body>
	</html>
