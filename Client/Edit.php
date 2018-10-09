

<?php

class Edit
{
	
	function __construct()
	{
    include 'Feedback.php';
  if(!is_null($_POST) && count($_POST) > 0 ){
    
      $this->update();
   
  }
  else {
    print_r($_POST);
   

$this->edit();
  }
  	
  
  }
  
  function update(){

		$name = $_POST['name'];
		$disc = $_POST['description'];
		$type = $_POST['group1'];
		$id = $_POST['id'];
    $datenow=date('Y-m-d');
    $fb = new Feedback;
    
    $result = $fb->update($name,$disc,$type,$datenow , $id);
	if($result === true){
    header("location: index.php");
  }
  else {
    echo "there is a problem ";
  }
	

}

function edit(){ 
  $fb = new Feedback;
  $result = $fb->edit();
 while ($row=mysqli_fetch_array($result)) 
     { 
//print_r($row);
//exit();
        $id = $row['id'];
     	$desc = $row['description'];
     	$name = $row['name'];
     	$type =$row['type'];
     	$date = $row['date'];
         $se = new ShowEdit ;
         $se->show($id,$desc,$date,$type,$name);
          
         }
     }
    }

new edit;

class ShowEdit {

  function __construct(){
   
    
  }
  function show ($id, $desc, $date, $type , $name){
echo '<html>
<head>
<!--	===============================================================================================-->
 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="materialize-1-dev/dist/css/materialize.min.css"

media="screen,projection"
	>
		<link rel="stylesheet" type="text/css" href="../Admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../emoji/dist/css/emojione.min.css">
		<Link rel="stylesheet" type="text/css" href="Custom.css" >
	
<script type="text/javascript" src="materialize-1-dev/dist/js/materialize.min.js"></script> 
<script src="../jquery-1.11.1.min.js"></script>';

    echo "<div class='row'> <div class='col s8 offset-s2'> 

    <center> <h5> Update your suggestions ! </h5> 
    <small> $date </small>
    </center>
    
    
              <form action ='Edit.php' oninput ='hey()' method = 'POST' class='col card s12' > 
    <div class='input-field'>
    <input name='name' value='$name' >
      <label for='name'>Full Name</label>
    </div>
    <input name='id' value='$id' type='hidden' >
    <p>
      <center> <h5>How do you fell about our system ?</h5> </center>
          <label>
            <input name='group1' type='radio' " ; if($type === 'excellent'){ echo "checked";} ; echo "  class='with-gap' value='excellent' checked />
            <span> <i class='sa em em-clap'></i> excellent  </span>
          </label>
        </p>
        <p>
          <label>
            <input name='group1' type='radio' "; if($type === 'very nice'){ echo "checked";} ; echo "  value='very nice' class='with-gap' />
            <span>  <i class='sa em em-smiley'></i>  very nice </span>
          </label>
        </p>
        <p>
          <label>
            <input class='with-gap' type='radio' "; if($type === 'very nice'){ echo "good";} ; echo " name='group1' value='good' type='radio'  />
            <span> <i class='sa em em-relaxed em-3x'></i> Good</span>
          </label>
        </p>
        <p>
          <label>
            <input name='group1' type='radio' type='radio' "; if($type === 'have no idea'){ echo "checked";} ; echo " value='have no idea' class='with-gap'  />
            <span> <i class='sa em em-smirk'></i> Have no idea</span>
          </label>
      </p>
      <label>
            <input name='group1' type='radio' type='radio' "; if($type === 'not good'){ echo "checked";} ; echo " value='not good' class='with-gap'  />
            <span> <i class='sa em em-confused'></i>not Good</span>
          </label>
      </p>
      <p>
            <label>
            <input name='group1' type='radio' "; if($type === 'poor'){ echo "checked";} ; echo " type='radio' value='poor' class='with-gap'  />
            <span> <i class='sa em  em-unamused'></i>poor</span>
          </label>
      </p>
      <p>
          <label>
            <input name='group1' type='radio' "; if($type === 'disappointed'){ echo "checked";} ; echo " type='radio' value='disappointed' class='with-gap'  />
            <span> <i class='sa em em-weary'></i>disappointed</span>
          </label>
    
        </p>
        <div class='row'>
            <div class='input-field col s12'>
              <textarea id='textarea1' class='materialize-textarea' name='description'> ".$desc." </textarea>
              <label for='textarea1'>describe how you fell </label>
            </div>
          </div>
          <br>
          <input type='submit' class='btn btn-large cyan pulse' name='submit' value='update'>
          <br><br><br>
              </form> 
              <br><br><br>
               </div></div>         ";
               echo "<script>
               var wait = 5000;
               function hey (){
                 waiting.dismissInterval();
                 wait = wait+5000;
                 waiting = setTimeout(() => {
                 this.location.replace('http://localhost/FeedbackInboxing/Client');
               }, wait);
               }
               var waiting = setTimeout(() => {
                 this.location.replace('http://localhost/FeedbackInboxing/Client');
               }, wait);
               </script>";
    
                               // echo $row['id'];
    
                 /*echo "<li class='collection-item'>"
                 .$row['type']."&nbsp;&nbsp;&nbsp;&nbsp;". $row['name']."<a href=\"../view.php?id=".$row['id']."\" >&nbsp;&nbsp;&nbsp;&nbsp;Detail</a></li>";
    //
    */     }
  }


?>
