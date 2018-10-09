<?php

class EditController
{
	
	function __construct()
	{
	$this->edit();	
	}

function edit(){ 
	 $DB = new dbConnection();
  $connection = $DB->dbConnect();
$query1 = "SELECT MAX(id) AS LID FROM Feedback";

  $result1=  $connection -> query($query1);

while($row1 = mysqli_fetch_assoc($result1)){
	$LID = $row1['LID'];
}




$query="SELECT name , description,type, date  FROM Feedback  WHERE id = '$LID'";
 
  $result=  $connection -> query($query);
 while ($row=mysqli_fetch_array($result)) 
     { 
//print_r($row);
//exit();
        $id = $LID;
     	$desc = $row['description'];
     	$name = $row['name'];
     	$type =$row['type'];
     	$date = $row['date'];
         
          echo "<div class='row'> <div class='col s8 offset-s2'> 

<center> <h5> Update your suggestions ! </h5> 
<small> $date </small>
</center>


          <form action ='Update.php' oninput ='hey()' method = 'POST' class='col card s12' > 
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

                           // echo $row['id'];

             /*echo "<li class='collection-item'>"
             .$row['type']."&nbsp;&nbsp;&nbsp;&nbsp;". $row['name']."<a href=\"../view.php?id=".$row['id']."\" >&nbsp;&nbsp;&nbsp;&nbsp;Detail</a></li>";
//
*/     }
         }
     }

new Edit;
?>