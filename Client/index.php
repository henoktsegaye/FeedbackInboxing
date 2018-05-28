<?php 

?>
<html>
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
</head>
<body>
	<div class="row">


<div class="col s9">

    <form class="col card s12" action="Feedback.php" method="post">
 <center> <h4>Give us suggestion</h4>
 <small> <p>let us know how you fell about our company service</p>  </small>
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
      <label>
        <input name="group1" type="radio" class="with-gap" value="excellent" checked />
        <span> <i class="em em-clap"></i> excellent  </span>
      </label>
    </p>
    <p>
      <label>
        <input name="group1" type="radio" value="very nice" class="with-gap" />
        <span>  <i class="em em-smiley"></i>  very nice </span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group1" value="good" type="radio"  />
        <span> <i class="em em-relaxed em-3x"></i> Good</span>
      </label>
    </p>
    <p>
      <label>
        <input name="group1" type="radio" value="have no idea" class="with-gap"  />
        <span> <i class="em em-smirk"></i> Have no idea</span>
      </label>
  </p>
  <p>
  <label>
        <input name="group1" type="radio" value="not good" class="with-gap"  />
        <span> <i class="em em-confused"></i>not Good</span>
      </label>
  </p>
  <p>
        <label>
        <input name="group1" type="radio" value="poor" class="with-gap"  />
        <span> <i class="em  em-unamused"></i>poor</span>
      </label>
  </p>
  <p>
      <label>
        <input name="group1" type="radio" value="disappointed" class="with-gap"  />
        <span> <i class="em em-weary"></i>disappointed</span>
      </label>

    </p>

<div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="description"></textarea>
          <label for="textarea1">describe how you fell </label>
        </div>
      </div>
	<input type="submit" class="btn btn-default" name="submit" value="add">
	<br>
	<br>
</div>
	</form>
<div class="col s3">
 <ul class="collection with-header">
        <li class="collection-header"><h5>Latest suggestions </h5></li>
        <li class="collection-item"><div>


<i class="em em-smile space"> </i>
        	Alvin<a href="#!" class="secondary-content"><i class="material-icons">12/34/2018: 07: 43</i></a></div></li>
        <li class="collection-item"><div>

<i class="em em-clap space"> </i>
        	abebe some one  <a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item"><div>

<i class="em em-smiley space"> </i>
        	someno nd dfn <a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
    
        <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
   
        <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        
        

      </ul>
            
</div>

</div>
</div>
</body>
	</html>