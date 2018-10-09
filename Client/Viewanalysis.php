<?php
/**
 * 
 */
include ('dbcon.php');

class Analysis extends dbConnection
{  private $excellent=0;
	private $verynice=0;
	private $good=0;
	private $havenoidea=0;
	private $notgood=0;
	private $poor=0;
	private $disappointed=0;

	public function categories(){
       
	$query="SELECT count(id) from Feedback";	
    $DB = new dbConnection();
	$connection = $DB->dbConnect();
	$connection -> query($query);

     $result=  $connection -> query($query);
    $row=mysqli_num_rows();
    echo $row;
	}

	function __construct()
	{
       
        
     $query="SELECT * from Feedback";	
    $DB = new dbConnection();
	$connection = $DB->dbConnect();
	$connection -> query($query);

     $result=  $connection -> query($query);
    $row=mysqli_num_rows($result);
    $total=$row;
  echo "<div class='row' 
"; 
if(isset($_SESSION['admin'])) {
    echo "style='background: linear-gradient(#fff,#f5f5f5);' >
    <div style='text-align: center; padding: 50px; padding-left: 150px; '>  <h3 style='color: #6ed0ee;'> Analysis </h3>  <small style='padding: 20px;'>
       sugestions given on this month , we are collecting datas from users like you</small> 
       <br> <b>Total : ".$total." </b>
       <br>
      <div style='border-bottom: 15px #ccc; z-index: 232; margin-left: 150px; padding-bottom: 10px; width: 66%; background: #6ed0ee; border-radius:
       10px; box-shadow: 0 0 40px rgba(0,0,0,.1); margin-bottom: 20px;'> </div> </div>";
   
}
else {

echo "style='background: linear-gradient(#fff,#f5f5f5); padding-bottom: 0;' >
 <div style='text-align: center; '>  <h4> Analysis </h4>  <small>
    sugestions given on this month , we are collecting datas from users like you</small> 
    <br> Total : ".$total." 
   <div style='border-bottom: 10px #ccc; z-index: 232; padding-bottom: 10px; width: 70%; background: #6ed0ee; border-radius:
    10px; box-shadow: 0 0 40px rgba(0,0,0,.1); margin-bottom: 20px;'> </div> </div>";
}

     $exce="SELECT * from Feedback WHERE type='excellent'";	
 $excelnt=  $connection -> query($exce);
    $ex=mysqli_num_rows($excelnt);
    $exp=(($ex/$total)*100);
     
      echo "<P id ='exe' style='display: none;'> ".$exp."</p> ";
   // echo $ex; echo "    :".$exp."%   <br><br>   ";

   

     $verynice="SELECT * from Feedback WHERE type='very nice'";	
 $vnicec=  $connection -> query($verynice);
    $nice=mysqli_num_rows($vnicec);
     $nicep=(($nice/$total)*100);
     echo "<p id='nice' style='display: none;'>".$nicep."</p>";
     //echo $nice." : ".$nicep; echo  "%<br><br>";


     $good="SELECT * from Feedback WHERE type='good'";	
 $goodc=  $connection -> query($good);
    $gd=mysqli_num_rows($goodc);
    $gdp=(($gd/$total)*100);
    
    // echo "Good  :";
 echo "  <p id='gd' style='display:none;'>".$gdp." </p>"; //$gdp; echo "%<br><br>";


     $havenoidea="SELECT * from Feedback WHERE type='have no idea'";	
 $noideac=  $connection -> query($havenoidea);
    $noidea=mysqli_num_rows($noideac);
    $noideap=(($noidea/$total)*100);
    
  //echo "No Idea  :";
    echo "  <p id='noidea' style='display:none;'>".$noideap."</p>";


     $ngood="SELECT * from Feedback WHERE type='not good' ";	
 $ngoodc=  $connection -> query($ngood);
    $ngd=mysqli_num_rows($ngoodc);
    $ngdp=(($ngd/$total)*100);
    
//  echo "Not Good  :";
    echo "   <p style='display:none;'  id='ngd'> ".$ngdp."</p>"; //$ngdp; echo "%<br><br>";



    $poor="SELECT * from Feedback WHERE type='poor'";	
 $poorc=  $connection -> query($poor);
    $pr=mysqli_num_rows($poorc);$prp=(($pr/$total)*100);
    
  //echo "Poor  :";
    echo " <p id ='poor' style='display:none;'> ". $prp."</p> "; //$prp;echo "%<br><br>";

    $disappointed="SELECT * from Feedback WHERE type='disappointed'";	
 $disappointedc=  $connection -> query($disappointed);
    $dap=mysqli_num_rows($disappointedc);
    $dapp=(($dap/$total)*100);
    
   //   echo " Disappointed :";
  //  echo "  :".$dapp;echo "%<br><br>";


if(isset($_SESSION['admin'])) {
    echo '   
    <p id="dapp" style="display: none;"> '. $dapp .'</p>
    <div class="col s4" > </div>
<div class="col s2 ana">
<i class="emo sa em em-clap goup"></i>
 <div class="cir"><div id="exp-circle"> </div>
</div></div>
<div class="col s2 ana">
<i class="emo sa em em-smiley goup"></i>
 <div class="cir"><div id="nice-circle"> </div>
</div></div>


<div class="col s2 ana">
 <i class="emo sa em  em-unamused goup"></i>
 <div class="cir"><div id="poor-circle"> </div>
</div></div>
<div class="col s4" > </div>
<div class="col s2 ana">
<i class="emo sa em em-smirk goup"></i> 
 <div class="cir"> 
 <div id="noidea-circle"> </div>
</div></div>

<div class="col s2 ana">
<i class="emo sa em em-relaxed em-3x goup"></i>
 <div class="cir"> <div id="gd-circle"> </div>
</div>
</div>

<div class="col s2 ana">
<i class="emo sa em em-weary goup "></i>
<div class="cir"> <div id="dapp-circle"> </div>
            </div>
             
    </div> 


    </div> 
    <div class="col s6">
    </div>
    <div class="col s2 ana">
<i class="emo sa em em-weary goup lefta"></i>
<div class="cir"> <div id="ngd-circle"> </div>
            </div>


    ';
    echo "</div>";

} else {
    echo '   
    <p id="dapp" style="display: none;"> '. $dapp .'</p>
            
<div class="col s6 ana">
<i class="emo sa em em-clap goup"></i>
 <div class="cir"><div id="exp-circle"> </div>
</div></div>
<div class="col s6 ana">
<i class="emo sa em em-smiley goup lefta"></i>
 <div class="cir"><div id="nice-circle"> </div>
</div></div>
<div class="col s6 ana">
 <i class="emo sa em  em-unamused goup"></i>
 <div class="cir"><div id="poor-circle"> </div>
</div></div>
<div class="col s6 ana">
<i class="emo sa em em-smirk goup lefta"></i> 
 <div class="cir"> 
 <div id="noidea-circle"> </div>
</div></div>

<div class="col s6 ana">
<i class="emo sa em em-relaxed em-3x goup"></i>
 <div class="cir"> <div id="gd-circle"> </div>
</div>
</div>

<div class="col s6 ana">
<i class="emo sa em em-weary goup lefta"></i>
<div class="cir"> <div id="dapp-circle"> </div>
            </div>
             
    </div> 
    <div class="col s6 ana">
<i class="emo sa em em-weary goup lefta"></i>
<div class="cir"> <div id="ngd-circle"> </div>
            </div>
             

            </div> 
    ';
    echo "</div>";


}

    
	}
}




new Analysis();

?>