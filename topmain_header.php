
<?php require "inc_conn.php"; ?>


<!DOCTYPE html>
<html lang="en">
	
<section>
<head>
    <title>mmk</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <script src="js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    

	
	<!--------------------<link rel="stylesheet" href="css/exprence.css">----------
    
	
    <link rel="stylesheet" href="Themes/style1.css">
    
    -------------------->
    <!-- Fixed Header -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.3/css/fixedHeader.dataTables.min.css"/>
	 
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.3/js/dataTables.fixedHeader.min.js"></script>
	
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="dropdown/dropdown.css">
    <link rel="stylesheet" href="css/@media.css">
    <link rel="stylesheet" href="css/left-side.css">
    <link rel="stylesheet" href="css/rightside.css">
	
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashborad.css">
	
	<link rel="stylesheet" href="css/tooltip.css">
    <link rel="stylesheet" href="css/projects.css">
	
	<link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/rightside-function.css">
	
	<link rel="stylesheet" href="css/eduction.css">
	
	
	<?php

 $retval="SELECT * FROM dash_sett  WHERE USER_ID='$USERIDX' LIMIT 1";

  $resultget=mysqli_query($link,$retval);
  if($resultget -> num_rows >0){
      while($row=mysqli_fetch_array($resultget)){
          $layout=$row['LAY_OUT'];
        }
        }

        
      ?>
	
	
	
	
    <link rel="stylesheet" href="css/<?php echo($layout); ?>.css">
	
	
	
	
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/function.js"></script>
   	 <script src="js/scrollreveal.js"></script>
    <script src="js/scrollreveal.min.js"></script>
    

  
	
     <!--------------fonts--------------------->
		<!-----user name---->
   <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
   		<!------li--->
   	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
   		<!----about----->
   	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
   		<!--------->
    <!--------------fonts---------------------> 
   
 
    <!--------------fonts--------------------->



<!-----font----family--------------------->
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Hind+Siliguri" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
<link href="Themes/style1" rel="stylesheet">
<!-----font----family--------------------->




    <!--------------fonts--------------------->
    <style>
		@media (max-width:1050px){
	.side-left{
		margin-left: -180px;
	}
	
	#right-side{
		width: 100%;
	}
	
}
		
		
		
<?php 
//--------------------------------get----all---information------


$sqli="SELECT * FROM `sign_up` WHERE ID='$USERIDX' LIMIT 1";
	$result=mysqli_query($link,$sqli);
	if($result->num_rows >0)
	{
		while($row=mysqli_fetch_array($result))
		{
			$UDBNX=$row['USER_NAME'];
			$UDBEX=$row['USER_EMAIL'];
			$UDBIMX=$row['USER_IMG'];
			$UDBSX=$row['USER_SRC'];
			
		}
	}

//--------------------------------get----all---information------	
?>
		
		
<?php

 $retval="SELECT * FROM dash_sett  WHERE USER_ID='$USERIDX' LIMIT 1";

  $resultget=mysqli_query($link,$retval);
  if($resultget -> num_rows >0){
    
      while($row=mysqli_fetch_array($resultget)){
          $tnbg=$row['TN_BACKGROUND_COLOR'];
          $tfncol=$row['TN_FONT_COLOR'];
          $tfnsi=$row['TN_FONT_SIZE'];
          $tfffi=$row['TN_FONT_FAMILY'];
          $tlogo=$row['TN_LOGO_IMG'];
          $tthemes=$row['TN_MESS_THE'];
		  
          $leftbg=$row['LEFT_BD_COLOR'];
          $lefthover=$row['LEFT_HOVER_LI'];
          $leftfous=$row['LEFT_FOUCS_LI'];
          $leftact=$row['LEFT_ACTIVE_LI'];
          $leftcolor=$row['LEFT_LI_COLOR'];
          $left1bg=$row['LEFT_UL_BG_COLOR'];
          $admbg=$row['LEFT_ADMIN_BG_COLOR'];
          $afco=$row['LEFT_ADMIN_FCOLOR'];
          $leflifont=$row['LEFT_LI_FFAMILY'];
          $leflisize=$row['LEFT_LI_SIZE'];
          $lebimg=$row['LEFT_BD_IMAGE'];
          $lenaffam=$row['LEFT_NAME_FFAMILY'];
          $lenacolo=$row['LEFT_NAME_COLOR'];
		  
		  
          $rfoclas=$row['RS_FORM_CLASS'];
		  
          $btn_bco=$row['R_BT_BC'];
          $btn_fco=$row['R_BT_FC'];
          $btn_br=$row['R_BT_BR'];
          $btn_b=$row['R_BT_B'];
          $btn_bfs=$row['R_BT_BFS'];
          $btn_brc=$row['R_BT_BRC'];
          $btn_bs=$row['R_BT_BS'];
		  
		  
		  
          $r_bc=$row['R_BC'];
          $ri_img=$row['R_B_IMG'];
		  
          $ri_tfc=$row['R_TF_C'];
          $ri_tfsiz=$row['R_TFSIZ'];
		  
          $ri_tffam=$row['RT_LI_FOFA'];
          $ri_tfcol=$row['RT_LI_FOCOL'];
		  
		  
          $ri_carbgc=$row['R_CAR_BG_CO'];
          $ri_carbrc=$row['R_CAR_BR_CO'];
		  
		  
          $ri_top_co=$row['L_TOP_H_COL'];
          $ri_top_ffam=$row['L_TOP_H_FFAM'];
		  
          $ri_body_co=$row['L_BO_L_CO'];
          $ri_body_ffa=$row['L_BOD_FFAM'];
		  
		  
          $ri_fbac=$row['L_FOR_BC'];
          $ri_ffc=$row['L_FOR_FC'];
          $ri_fbc=$row['L_FOR_BRC'];
          $ri_ffami=$row['L_F_FAL'];
          $ri_fsize=$row['L_F_FSIZ'];
          $ri_fbras=$row['L_FB_RADS'];
		  
		  
          $ri_tbc=$row['L_TAB_BC'];
          $ri_thbc=$row['L_THE_BC'];
          $ri_thFc=$row['L_TH_FC'];
          $ri_thFF=$row['L_TH_FF'];
          $ri_thFFsiz=$row['L_TH_FFSIZ'];
          $ri_thtal=$row['L_TH_TAL'];
		  
		  
          $ri_tbfco=$row['L_TB_FC'];
          $ri_tbffam=$row['L_BF_FA'];
          $ri_tbfsiz=$row['L_BO_FSIZ'];
          $ri_tbfali=$row['L_BO_TALI'];
		  
		  
          $ri_fbbc=$row['BN_BG_COLOR'];
          $ri_fbfco=$row['BN_FCOLOR'];
          $ri_fbffam=$row['BN_FFAMILY'];
          $ri_fbffsiz=$row['BN_FSIZE'];
		  
		  
          $layout=$row['LAY_OUT'];


        }
        }

        
      ?>
	
<?php
   require "Themes/style1.css";

   ?>

	</style>

  
</head>
</section>

	
	
	

<body class="bo_back">
	
	
<section>
    <!--------------left----side---1---------------->
<section>
	<?php require "all_set_comp/nauti.php"; ?>
</section>


<div class="side-left scrollbar" id="style-4">
<!----------------------user----location---------------------->				

<!----------------------user----location---------------------->
																
	
<!--------------------user profile------------------------->

<!--------------------user profile------------------------->
	
<!--------------------sreach ----input----------------->

<!--------------------sreach ----input----------------->
   								
   								
<!--------------------ul li of user------------------------->
 <div class="card zer-padd" id="li-card">
    <div class="ul-clas zer-padd">
    	<ul class="zer-marg">
			<?php require "left_link.php"; ?>
    	</ul>
    </div>
</div>
    			<!--------------------ul li of user------------------------->
	
	
	
	
	

	
</div>
    <!--------------left----side---1---------------->
	
	
	
    <!--------------left----side---2---------------->
<div class="side-left2" >
	<!--------------------user profile------------------------->
<div class="card text-center" id="profile-card">
	<div class="card-body">
		<img src="images/<?php echo($UDBIMX); ?>" class="profile2 text-center" >
		<span class="badge satas2" id="bo-rad"><span>Admin</span></span>
	</div>
</div>
	<style>
	.left-2-card{
			  width: 200px;
    		  margin-left: 50px;
              border-radius: 0px !important;
              border: 0px;
			  position: absolute;
			  display: none;
		}
	
	</style>
<div class="card zer-padd" id="li-card">
    <div class="ul-clas zer-padd">
    <ul class="zer-marg" id="short_list">
    		
<div id="accordion">
	
	
<div class="card left-2-card" id="d_b">
	<div class="" id="headingOne88">
        <li class="sho_list_short" data-toggle="collapse" data-target="#collapseOne88" aria-expanded="true" aria-controls="collapseOne88"><a href="#"><span><img src="icons/icons8-speed-48.png" class="ul-icon"></span> <span class="link-name">Documentation</span></a>
	    </li>
    </div>
</div>
  </div>	
<li id="db_click"><a href="#"><span><img src="icons/icons8-speed-48.png" class="ul-icon"></span></a></li>
							
							

<div class="card left-2-card" id="i_m">
   <div class="" id="headingOne11">
      <li class="sho_list_short" data-toggle="collapse" data-target="#collapseOne11" aria-expanded="true" aria-controls="collapseOne11"><a href="#"><span><img src="icons/icons8-area-chart-48.png" class="ul-icon"></span> <span class="link-name"> Inventory Management</span></a>
	  </li>
   </div>
<div id="collapseOne11" class="collapse drop-list" aria-labelledby="headingOne11" data-parent="#accordion">
       <?php require "list_nav/inver_mag.php"; ?>
</div>
</div>	
 <li id="im_click"><a href="#"><span><img src="icons/icons8-area-chart-48.png" class="ul-icon"></span></a></li>
	
	
	
<div class="card left-2-card" id="o_m">
	<div class="" id="headingOne22">
      <li class="sho_list_short" data-toggle="collapse" data-target="#collapseOne22" aria-expanded="true" aria-controls="collapseOne22"><a href="#"><span><img src="icons/icons8-area-chart-48.png" class="ul-icon"></span> <span class="link-name"> Office Management</span></a>
	  </li>
    </div>
	<div id="collapseOne22" class="collapse drop-list" aria-labelledby="headingOne22" data-parent="#accordion">
		<?php require "list_nav/office_mag.php"; ?>
    </div>
  </div>	
  <li id="om_click"><a href="#"><span><img src="icons/icons8-workspace-48.png" class="ul-icon"></span></a></li>
	
	

<div class="card left-2-card" id="p_l">
	<div class="" id="headingOne33">
      <li class="sho_list_short" data-toggle="collapse" data-target="#collapseOne33" aria-expanded="true" aria-controls="collapseOne33"><a href="#"><span><img src="icons/icons8-payroll-48.png" class="ul-icon"></span> <span class="link-name">Payroll</span></a>
	  </li>
    </div>
	<div id="collapseOne33" class="collapse drop-list" aria-labelledby="headingOne33" data-parent="#accordion">
			<?php require "list_nav/pay_mag.php"; ?>
    </div>
  </div>	
  <li id="pl_click"><a href="#"><span><img src="icons/icons8-payroll-48.png" class="ul-icon"></span></a></li>
	
	

<div class="card left-2-card" id="h_m">
	<div class="" id="headingOne44">
      <li class="sho_list_short" data-toggle="collapse" data-target="#collapseOne44" aria-expanded="true" aria-controls="collapseOne44"><a href="#"><span><img src="icons/icons8-restaurant-table-48.png" class="ul-icon"></span> <span class="link-name">Human Resources</span></a>
	  </li>
    </div>
	<div id="collapseOne44" class="collapse drop-list" aria-labelledby="headingOne44" data-parent="#accordion">
			<?php require "list_nav/hum_mag.php"; ?>
    </div>
  </div>	
  <li id="hm_click"><a href="#"><span><img src="icons/icons8-restaurant-table-48.png" class="ul-icon"></span></a></li>

	

	
<div class="card left-2-card" id="s_u">
	<div class="" id="headingOne55">
      <li class="sho_list_short" data-toggle="collapse" data-target="#collapseOne55" aria-expanded="true" aria-controls="collapseOne55"><a href="#"><span><img src="icons/icons8-available-updates-48.png" class="ul-icon"></span> <span class="link-name">Setup</span></a>
	  </li>
    </div>
    <div id="collapseOne55" class="collapse drop-list" aria-labelledby="headingOne55" data-parent="#accordion">  
		<?php require "list_nav/set_up.php"; ?>
    </div>
  </div>	
  <li id="su_click"><a href="#"><span><img src="icons/icons8-available-updates-48.png" class="ul-icon"></span></a></li>
	
	
	
<div class="card left-2-card" id="s_l">
	<div class="" id="headingOne66">
      <li class="sho_list_short" data-toggle="collapse" data-target="#collapseOne66" aria-expanded="true" aria-controls="collapseOne66"><a href="#"><span><img src="icons/icons8-buddhist-48.png" class="ul-icon"></span> <span class="link-name">Security</span></a>
	  </li>
    </div>
	<div id="collapseOne66" class="collapse drop-list" aria-labelledby="headingOne66" data-parent="#accordion">
		<?php require "list_nav/sec_ty.php"; ?>	
    </div>
  </div>	
  <li id="sl_click"><a href="#"><span><img src="icons/icons8-buddhist-48.png" class="ul-icon"></span></a></li>
	
	
	
	
	
<div class="card left-2-card" id="c_r">
	<div class="" id="headingOne77">
      <li class="sho_list_short" data-toggle="collapse" data-target="#collapseOne77" aria-expanded="true" aria-controls="collapseOne77"><a href="#"><span><img src="icons/icons8-phone-48.png" class="ul-icon"></span> <span class="link-name">CRM</span></a>
	  </li>
    </div>
	<div id="collapseOne77" class="collapse drop-list" aria-labelledby="headingOne77" data-parent="#accordion">
		<?php require "list_nav/cr_m.php"; ?>	
    </div>
  </div>	
  <li id="cr_click"><a href="#"><span><img src="icons/icons8-phone-48.png" class="ul-icon"></span></a></li>
	
	
	
	<div class="card left-2-card" id="d_m">
	<div class="" id="headingOne88">
      <li class="sho_list_short" data-toggle="collapse" data-target="#collapseOne88" aria-expanded="true" aria-controls="collapseOne88"><a href="#"><span><img src="icons/icons8-ratings-48.png" class="ul-icon"></span> <span class="link-name">Documentation</span></a>
	  </li>
    </div>	
    </div>
 	
  <li  id="dm_click"><a href="#"><span><img src="icons/icons8-ratings-48.png" class="ul-icon"></span></a></li>
		
		
  <div class="card left-2-card" id="a_m">
	<div class="" id="headingOne99">
      <li class="sho_list_short" data-toggle="collapse" data-target="#collapseOne99" aria-expanded="true" aria-controls="collapseOne99"><a href="#"><span><img src="icons/icons8-administrative-tools-48.png" class="ul-icon"></span> <span class="link-name">Administrative Tool</span></a>
	  </li>
    </div>	
    </div>
 	
  <li  id="am_click"><a href="show_top_dash.php"><span><img src="icons/icons8-administrative-tools-48.png" class="ul-icon"></span></a></li>
	 </div>						
							
							
</div>
  </ul>
 </div>
</div>
 </div>
    <!--------------left----side---2---------------->
</section>
	
	
<div class="card fixed-top no-rad no-bo main_top_header">
	
	<div class="row">
		<div class="col-md-9">
		<nav class="navbar navbar-expand-md  navbar-dark">
		  <a class="navbar-brand" href="#">
				<h3 class="main-we-logo-text">
				<img src="images/<?php echo($tlogo); ?>" style="height: 40px;margin-top: -10px;margin-bottom: -10px;">
			</h3>
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="collapsibleNavbar">
			
			  <!------------------------ul li------------------------->
			  

<ul class="navbar-nav">
      <li class="nav-item top_nav_li">
        <a class="nav-link" href="#">
			<span><img src="icons/icons8-speed-48.png" class="ul-icon"></span>
			<span class="link-name">Dashboard</span>
		</a>
      </li>
		
	  
  
		
	 <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
		  <span><img src="icons/icons8-area-chart-48.png" class="ul-icon">
		  </span>
		  <span class="link-name">Inventory Management</span>
      </a>
      <div class="dropdown-menu top_drop_link">
		 <ul>
        <?php require "list_nav/inver_mag.php"; ?>
		</ul>
      </div>
    </li>
		
		
	<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
		  <img src="icons/icons8-workspace-48.png" class="ul-icon"></span><span class="link-name"> Office Management</span>
      </a>
     <div class="dropdown-menu top_drop_link">
       <ul>
		<?php require "list_nav/office_mag.php"; ?>
	   </ul>
      </div>
    </li>
		
	<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
		  <span class="link-name">Payroll</span>
      </a>
     <div class="dropdown-menu top_drop_link">
       <ul>
		<?php require "list_nav/pay_mag.php"; ?>
	   </ul>
      </div>
    </li>
	
	<!----<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
		  <span class="link-name">Human Resources</span>
      </a>
      <div class="dropdown-menu top_drop_link">
       <ul>
		<?php require "list_nav/hum_mag.php"; ?>
	   </ul>
      </div>
    </li>
		
	<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
		  <span class="link-name">Setup</span>
      </a>
      <div class="dropdown-menu top_drop_link">
       <ul>
		<?php require "list_nav/set_up.php"; ?>
	   </ul>
      </div>
    </li>
	
	<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
		  <span class="link-name"> Security</span>
      </a>
      <div class="dropdown-menu top_drop_link">
       <ul>
		<?php require "list_nav/sec_ty.php"; ?>
	   </ul>
      </div>
    </li>------>
		
	<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
		  <span class="link-name"> CRM </span>
      </a>
      <div class="dropdown-menu top_drop_link">
       <ul>
		<?php require "list_nav/cr_m.php"; ?>
	   </ul>
      </div>
    </li>
		
	<li class="nav-item">
        <a class="nav-link" href="#">
			<span class="link-name">Documentation</span>
		</a>
      </li>
	 <li class="nav-item">
        <a class="nav-link" href="show_top_dash.php">
			<span class="link-name">Administrative Tool</span>
		</a>
     </li>
		
    </ul>
			  
			  
			  
			  <!------------------------ul li------------------------->
		  </div>  
		</nav>
			
		</div>
		
		
		<div class="col-md-3">
		<div class="main-login-icon mt-3">
<!----------------------- drop menu----------------------------->
	<a data-toggle="dropdown" class="click">
		<img src="icons/icons8-laptop-48.png" class="logo-in-icon" id="change-view-of-windows" >
	</a>
		
			<div class="dropdown-menu text-center <?php echo($tthemes); ?>" id="drop-for-change">
				<!---------------------------main----heading---->
					 <span class="main-list-title text-center link">Destop Setting</span>
				<!---------------------------main----heading---->
									  <br>
						<a><img src="icons/icons8-navigation-toolbar-left-48.png" class="destop-menu normal-width"></a>
				
						<a><img src="icons/icons8-laptop-48.png " class="destop-menu full-width" ></a>
				
						<a><img src="icons/icons8-content-48.png" class="destop-menu slide-width"></a>
			</div>
					  		
<!-----------------------seconr drop menu-- message--------------------------->
	<span class="dropdown move">
		<a data-toggle="dropdown"> 
			<img src="icons/icons8-envelope-96.png" class="logo-in-icon" >
		</a>
			
		<div class="dropdown-menu <?php echo($tthemes); ?>" id="message-user-drop-down">
		<!---------------------------main----heading---->
			 <span class="main-list-title">Messages</span>
					<!---------------------------main----heading---->
					 <form>
					 <div class="form-group">
							<input type="search" placeholder="Search....." class="form-control" >
					 </div>
					 </form>
					<!------------------message---------------------->
		<!---------------one message------------>
						<div class="main-message-box">
							<div class="left-side-of-message">
									  <span>Masadaq <small> 5 mint ago</small></span> <br>
									  <p>this is a demo of a text message .this message is sent by the masadaq masood khan.</p>
							</div>
							<div class="right-side-of-message">
									<img src="images/team-2-150x150.jpg" class="message-img">
							</div>
						</div>
									  	<hr id="hr2">
		<!---------------one message------------>
		<!---------------one message------------>
						<div class="main-message-box">
							<div class="left-side-of-message">
									  <span>Masadaq <small> 5 mint ago</small></span> <br>
									  <p>this is a demo of a text message .this message is sent by the masadaq masood khan.</p>
							</div>
							<div class="right-side-of-message">
									<img src="images/team-2-150x150.jpg" class="message-img">
							</div>
						</div>
									  	<hr id="hr2">
		<!---------------one message------------>
		<!---------------one message------------>
						<div class="main-message-box">
							<div class="left-side-of-message">
									  <span>Masadaq <small> 5 mint ago</small></span> <br>
									  <p>this is a demo of a text message .this message is sent by the masadaq masood khan.</p>
							</div>
							<div class="right-side-of-message">
									<img src="images/team-2-150x150.jpg" class="message-img">
							</div>
						</div>
									  <hr id="hr2">
		<!---------------one message------------>
		<!---------------one message------------>
						<div class="main-message-box">
							<div class="left-side-of-message">
									  <span>Masadaq <small> 5 mint ago</small></span> <br>
									  <p>this is a demo of a text message .this message is sent by the masadaq masood khan.</p>
							</div>
							<div class="right-side-of-message">
									<img src="images/team-2-150x150.jpg" class="message-img">
							</div>
						</div>
									  	<hr id="hr2">
		<!---------------one message------------>
									 
<div class="clear"></div>
		 <span class="main-list-title text-center link">See all Messages</span>
</div>
</span>	

		
							 
<!-----------------------thrid drop menu----------------------------->
<span class="dropdown move">
		<span class="badge badge-danger postion-bag"><span>4</span></span>
			<a data-toggle="dropdown">		  			
					 <img src="icons/icons8-notification-48.png" class="logo-in-icon">
			</a>
		<div class="dropdown-menu <?php echo($tthemes); ?>" id="notification-tab-of-user">
	<!---------------------------main----heading---->
		  <span class="main-list-title">Notifications</span>
	<!---------------------------main----heading---->
					<form>
					<div class="form-group">
						<input type="search" placeholder="Search....." class="form-control" >
					</div>
					</form>
	 <!------------------Notifications---------------------->
				<div class="main-message-box">
					<div class="left-side-of-noti">
							<span>Masadaq <small> 5 mint ago</small></span> <br>
							<p>this is a demo of a text message .this message is sent by the masadaq masood khan.</p>
					</div>
				</div>
							<hr id="hr2">
	 <!---------------Notifications------------>
	 <!------------------Notifications---------------------->
				<div class="main-message-box">
					<div class="left-side-of-noti">
							<span>Masadaq <small> 5 mint ago</small></span> <br>
							<p>this is a demo of a text message .this message is sent by the masadaq masood khan.</p>
					</div>
				</div>
							<hr id="hr2">
	 <!---------------Notifications------------>
	  <!------------------Notifications---------------------->
				<div class="main-message-box">
					<div class="left-side-of-noti">
							<span>Masadaq <small> 5 mint ago</small></span> <br>
							<p>this is a demo of a text message .this message is sent by the masadaq masood khan.</p>
					</div>
				</div>
							<hr id="hr2">
	 <!---------------Notifications------------>
					 <span class="main-list-title text-center link">See all Notifications</span>

</div>
</span>	
<!-----------------------thrid drop menu----------------------------->
	<span class="dropdown move">
		<span class="badge postion-bag badge-info"><span>3</span></span>
				<a data-toggle="dropdown">
					<img src="images/<?php echo($UDBIMX); ?>" class="logo-in-IMG"><span class="profile-name"><?php echo($UDBNX); ?></span>
			    </a>
					  			
			<div class="dropdown-menu <?php echo($tthemes); ?>" id="user-profile-img-set">
				<span class="online badge">
						<span>Online</span>
				</span>
					<div class="text-center">
						<img src="images/<?php echo($UDBIMX); ?>" class="main-profile-img">
					</div>
									 
			<div class="text-center pt-3">
				<span class="main-profile-name"><?php echo($UDBNX); ?></span>
					<blockquote id="block-text">
						<span>It is a long established It is a long established It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</span>
					</blockquote>
			</div>
			<span class="detial-profile text-left">Your Profile </span>
									 	
									 	<!------------------------->
			<div class="progress" style="border-radius: 0px;">
				<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:40%">
						40%
		    </div>
			</div>
									 	<!------------------------->
			<a href="about.php" class="btn btn-primary btn-sm" id="about">About Me</a>
			<a href="php/login.php?logout" class="btn btn-danger profile-botton-img btn-sm" id="log-out">Log Out</a>
			</div>
</span>	
	</div>
		
		</div>
	</div>
</div>
    
<!------------------side-left----------------------------------->
<div class="side-right" id="right-side">
    			
<section>
	<!----------------top--nav ---------------------------->
	<div class="row fixed-top nav-top top_sen_nav">
	<div class="col-sm-6 main-logo pl-3">
		<a class="navbar-brand" href="#">
			<h3 class="main-we-logo-text">
				<img src="images/<?php echo($tlogo); ?>" style="height: 40px;margin-top: -10px;margin-bottom: -10px;">
			</h3>
		</a>
	</div>
<div class="col-md-6">
	<div class="main-login-icon mt-2">
<!----------------------- drop menu----------------------------->
	<a data-toggle="dropdown" class="click">
		<img src="icons/icons8-laptop-48.png" class="logo-in-icon" id="change-view-of-windows" >
	</a>
		
			<div class="dropdown-menu text-center <?php echo($tthemes); ?>" id="drop-for-change">
				<!---------------------------main----heading---->
					 <span class="main-list-title text-center link">Destop Setting</span>
				<!---------------------------main----heading---->
									  <br>
						<a><img src="icons/icons8-navigation-toolbar-left-48.png" class="destop-menu normal-width"></a>
				
						<a><img src="icons/icons8-laptop-48.png " class="destop-menu full-width" ></a>
				
						<!---<a><img src="icons/icons8-content-48.png" class="destop-menu slide-width"></a>----->
			</div>
					  		
<!-----------------------seconr drop menu-- message--------------------------->
	<span class="dropdown move">
		<a data-toggle="dropdown"> 
			<img src="icons/icons8-envelope-96.png" class="logo-in-icon" >
		</a>
			
		<div class="dropdown-menu <?php echo($tthemes); ?>" id="message-user-drop-down">
		<!---------------------------main----heading---->
			 <span class="main-list-title">Messages</span>
					<!---------------------------main----heading---->
					 <form>
					 <div class="form-group">
							<input type="search" placeholder="Search....." class="form-control" >
					 </div>
					 </form>
					<!------------------message---------------------->
		<!---------------one message------------>
						<div class="main-message-box">
							<div class="left-side-of-message">
									  <span>Masadaq <small> 5 mint ago</small></span> <br>
									  <p>this is a demo of a text message .this message is sent by the masadaq masood khan.</p>
							</div>
							<div class="right-side-of-message">
									<img src="images/team-2-150x150.jpg" class="message-img">
							</div>
						</div>
									  	<hr id="hr2">
		<!---------------one message------------>
		<!---------------one message------------>
						<div class="main-message-box">
							<div class="left-side-of-message">
									  <span>Masadaq <small> 5 mint ago</small></span> <br>
									  <p>this is a demo of a text message .this message is sent by the masadaq masood khan.</p>
							</div>
							<div class="right-side-of-message">
									<img src="images/team-2-150x150.jpg" class="message-img">
							</div>
						</div>
									  	<hr id="hr2">
		<!---------------one message------------>
		<!---------------one message------------>
						<div class="main-message-box">
							<div class="left-side-of-message">
									  <span>Masadaq <small> 5 mint ago</small></span> <br>
									  <p>this is a demo of a text message .this message is sent by the masadaq masood khan.</p>
							</div>
							<div class="right-side-of-message">
									<img src="images/team-2-150x150.jpg" class="message-img">
							</div>
						</div>
									  <hr id="hr2">
		<!---------------one message------------>
		<!---------------one message------------>
						<div class="main-message-box">
							<div class="left-side-of-message">
									  <span>Masadaq <small> 5 mint ago</small></span> <br>
									  <p>this is a demo of a text message .this message is sent by the masadaq masood khan.</p>
							</div>
							<div class="right-side-of-message">
									<img src="images/team-2-150x150.jpg" class="message-img">
							</div>
						</div>
									  	<hr id="hr2">
		<!---------------one message------------>
									 
<div class="clear"></div>
		 <span class="main-list-title text-center link">See all Messages</span>
</div>
</span>	

		
							 
<!-----------------------thrid drop menu----------------------------->
<span class="dropdown move">
		<span class="badge badge-danger postion-bag"><span>4</span></span>
			<a data-toggle="dropdown">		  			
					 <img src="icons/icons8-notification-48.png" class="logo-in-icon">
			</a>
		<div class="dropdown-menu <?php echo($tthemes); ?>" id="notification-tab-of-user">
	<!---------------------------main----heading---->
		  <span class="main-list-title">Notifications</span>
	<!---------------------------main----heading---->
					<form>
					<div class="form-group">
						<input type="search" placeholder="Search....." class="form-control" >
					</div>
					</form>
	 <!------------------Notifications---------------------->
				<div class="main-message-box">
					<div class="left-side-of-noti">
							<span>Masadaq <small> 5 mint ago</small></span> <br>
							<p>this is a demo of a text message .this message is sent by the masadaq masood khan.</p>
					</div>
				</div>
							<hr id="hr2">
	 <!---------------Notifications------------>
	 <!------------------Notifications---------------------->
				<div class="main-message-box">
					<div class="left-side-of-noti">
							<span>Masadaq <small> 5 mint ago</small></span> <br>
							<p>this is a demo of a text message .this message is sent by the masadaq masood khan.</p>
					</div>
				</div>
							<hr id="hr2">
	 <!---------------Notifications------------>
	  <!------------------Notifications---------------------->
				<div class="main-message-box">
					<div class="left-side-of-noti">
							<span>Masadaq <small> 5 mint ago</small></span> <br>
							<p>this is a demo of a text message .this message is sent by the masadaq masood khan.</p>
					</div>
				</div>
							<hr id="hr2">
	 <!---------------Notifications------------>
					 <span class="main-list-title text-center link">See all Notifications</span>

</div>
</span>	
<!-----------------------thrid drop menu----------------------------->
	<span class="dropdown move">
		<span class="badge postion-bag badge-info"><span>3</span></span>
				<a data-toggle="dropdown">
					<img src="images/<?php echo($UDBIMX); ?>" class="logo-in-IMG"><span class="profile-name"><?php echo($UDBNX); ?></span>
			    </a>
					  			
			<div class="dropdown-menu <?php echo($tthemes); ?>" id="user-profile-img-set">
				<span class="online badge">
						<span>Online</span>
				</span>
					<div class="text-center">
						<img src="images/<?php echo($UDBIMX); ?>" class="main-profile-img">
					</div>
									 
			<div class="text-center pt-3">
				<span class="main-profile-name"><?php echo($UDBNX); ?></span>
					<blockquote id="block-text">
						<span>It is a long established It is a long established It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</span>
					</blockquote>
			</div>
			<span class="detial-profile text-left">Your Profile </span>
									 	
									 	<!------------------------->
			<div class="progress" style="border-radius: 0px;">
				<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:40%">
						40%
		    </div>
			</div>
									 	<!------------------------->
			<a href="about.php" class="btn btn-primary btn-sm" id="about">About Me</a>
			<a href="php/login.php?logout" class="btn btn-danger profile-botton-img btn-sm" id="log-out">Log Out</a>
			</div>
</span>	
	</div>
</div>
</div>
		  <!-------------nav----end------total----->
<!--  -->
	<!----------------top--nav ---------------------------->
</section>	
   
 