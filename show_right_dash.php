<?php 
session_start();
//----check----
if(isset($_SESSION['SESSIONUID']) && ($_SESSION['SESSIONUNAME'])){
	
	$USERIDX=$_SESSION['SESSIONUID'];
//----database----	
 require "topmain_header.php"; ?>
	
<section>
	<script src="js/jscolor.js" ></script>
</section>

 






   	
<div class="col-sm-12 main-top-body"><!----------------main-------body-----of----dashborad-------->
   					<div class="row">
   						<div class="col-sm-6"><h5 class="top_second_link">Dashborad Setting </h5></div>
   						<div class="col-sm-6">
   							<ul class="breadcrumb" id="list-br">
								<li class="breadcrumb-item"><a href="#">MMK-TECH</a></li>
								<li class="breadcrumb-item"><a href="#">About Me</a></li>
							</ul>
   						</div>
   					</div>
<hr id="hr-dash">
   			
   			
   					
<div class="row "><!-----------row--------n012--------------->
   <div class="col-sm-12">
	   <!-- Nav tabs -->
<ul class="nav nav-tabs mt-0">
  <li class="nav-item">
    <a class="nav-link  no-rad " href="show_top_dash.php" >Top Nav</a>
  </li>
  <li class="nav-item">
    <a class="nav-link no-rad " href="show_left_dash.php">Left Side</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  no-rad active2" href="show_right_dash.php">Right Side</a>
  </li>
	
  
</ul>

<!-- Tab panes -->
  
	 <div class="card" id="personal-info2">
	 <?php  require "all_set_comp/right_sett.php"; ?>
	 </div>
 
  
  </div>
</div>
	   
	   
   	
     
     	
    
   </div>
    	
	
	
	
	
</div><!-----------row--------n012--------------->
    	
    	
<!-------java-functions------>
	
	
	

<!-------java-functions------>
	
	

	

	
	
	
<?php require "botmain_footer.php"; ?>

<?php
}else{
	header("location:index.php?err=2");
}


?>

	
	
	
