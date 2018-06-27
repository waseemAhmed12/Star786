<?php 
session_start();
if(isset($_SESSION['SESSIONUID']) && ($_SESSION['SESSIONUNAME'])){	
	   $USERIDX=$_SESSION['SESSIONUID'];
 require "topmain_header.php";		
?>	

				
<link type="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>






<div class="col-sm-12 main-top-body"><!----------------main-------body-----of----dashborad-------->
   					<div class="row">
   						<div class="col-sm-6"><h5 class="top_second_link">VEHICLE </h5></div>
   						<div class="col-sm-6">
   							<ul class="breadcrumb" id="list-br">
								<li class="breadcrumb-item"><a href="#">MMK-TECH</a></li>
								<li class="breadcrumb-item"><a href="#">About Me</a></li>
							</ul>
   						</div>
   					</div>
<hr id="hr-dash">
   			
   			
   			
<div class="row pt-3"><!-----------row--------n012--------------->
   <div class="col-sm-12">
     <div class="card p-3" id="personal-info2">
         <h5 class="toplink"><span><img src="icons/icons8-buy-48 (1).png" class="img-fluid"></span> VEHICLE Information:</h5>
		 <div class="row mb-2">
		 	<div class="col-md-6">
			 <form class="form-inline">
				<select name="vid" class="form-control selectpicker inpu_for" data-live-search="true">
                <option value="">Select Coche</option>
                <?php			
                $resultCat = mysqli_query($link,"SELECT * FROM vehicle  ORDER BY HEADING");
                if (mysqli_num_rows($resultCat) == 0) {echo "<option>No Names Present</option>";} 
                else 
                {
                while($row = mysqli_fetch_array($resultCat))
                {
                $CATEGORYID = $row['ID'];
                $CATEGORYNAME = $row['HEADING'];
				$MODELX = $row['MODEL'];
				$REGNOX = $row['REGNO'];
		
                echo "<option value=$CATEGORYID";		
                if($CATEGORYID==$VID){echo " SELECTED";}		
                echo ">$REGNOX - $CATEGORYNAME</option>"; 
                }	
                }					
                ?>
                </select>
				 
				<button type="submit" class="btn btn-primary no-rad">Filter</button> 
			 </form>
			</div>
			 
			 
			<div class="col-md-6 text-right">
				<a class="btn btn-primary no-rad" id="update-info" data-toggle="modal" data-target="#myModal">New Coche</a>
			</div>
		 </div>
		 
    	<table id="example" class="table table-striped table-bordered" style="width:100%;">
        <thead>
	<tr>
		<th>Sr</th>
		<th>Title</th>
		<th>Model</th>
		<th>RegNo</th>
		<th>Reg.Date</th>
		<th>Owner</th>
		<th>ITP</th>
        <th>Status</th>
        <th>Note</th>
		<th>&nbsp;</th>
	</tr>
	</thead>
		
	<tbody>

		<?php
		$A = 1;
		$TAMT = 0;
		$result = mysqli_query($link,"SELECT * FROM vehicle");
		if (isset($_GET['vid']))
		{
			$VID = $_GET['vid'];
			$result = mysqli_query($link,"SELECT * FROM vehicle WHERE ID='$VID' ORDER BY HEADING");
		}
		while($row = mysqli_fetch_array($result))
		{
		$IDX = $row['ID'];
		$HEADINGX = $row['HEADING'];
		$MODELX = $row['MODEL'];
		$REGNOX = $row['REGNO'];
		$RDATEX = $row['RDATE'];
		$OWNERX = $row['OWNER'];
		$EMPIDO = $row['EMPID'];
		$ADDRESSX = $row['ADDRESS'];
		$ITPX = $row['ITP'];
		$ISTATUSX = $row['ISTATUS'];
		$PICPATH1X = $row['PICPATH1'];
		
		$date=date_create($RDATEX);
		$RDATEX = date_format($date,"d-m-Y");
		
		if ($PICPATH1X != ''){$StrImage = '<a href="catalog/'.$PICPATH1X.'" target="_blank"><img src="images/icon_file.png" width="24" height="24" align="absmiddle" /></a>';}
		else {$StrImage = ' ';}
		
		
		$resultXX = mysqli_query($link,"SELECT * FROM vehicle_issue WHERE VID='$IDX' ORDER BY ID DESC LIMIT 1");
		while($row = mysqli_fetch_array($resultXX))
		{$VSTATUSX = $row['STATUS']; $EMPID = $row['EMPID']; $LASTNOTE = $row['DETAIL'];}
		
		$EMPNAMEO = '';
		$resultXX = mysqli_query($link,"SELECT * FROM workers WHERE ID='$EMPIDO' LIMIT 1");
		while($row = mysqli_fetch_array($resultXX))
		{$FNAME = $row['HEADING']; $MNAME = $row['MNAME']; $LNAME = $row['LNAME']; $NIDO = $row['NID']; $EMPNAMEO = $FNAME.' '.$MNAME.' '.$LNAME;}
		
		$EMPNAME = '';
		$resultXX = mysqli_query($link,"SELECT * FROM workers WHERE ID='$EMPID' LIMIT 1");
		while($row = mysqli_fetch_array($resultXX))
		{$FNAME = $row['HEADING']; $MNAME = $row['MNAME']; $LNAME = $row['LNAME']; $NID = $row['NID']; $EMPNAME = $FNAME.' '.$MNAME.' '.$LNAME;}
		/*
		if ($VSTATUSX == 1){$StrStatus = 'Issued';}
		elseif ($VSTATUSX == 2){$StrStatus = 'Returned';}
        else{$StrStatus = 'N/A';}
		*/
		if ($ISTATUSX == 1){$StrStatus = 'Issued'; $StrStatusZ = '<img src="images/bulb-red.gif" width="24" height="24">';  $StrEmp = '<br><small>'.$EMPNAME.'</small>';}
		elseif ($ISTATUSX == 2){$StrStatus = 'Returned';  $StrStatusZ = '<img src="images/bulb-green.gif" width="24" height="24">'; $StrEmp = '';}
        else{$StrStatus = 'N/A';}
		?>
		<tr>
		<td><?php echo $IDX; ?></td>
		<td><?php echo $HEADINGX; ?></td>
		<td><?php echo $MODELX; ?></td>
		<td><?php echo $REGNOX; ?></td>
		<td><?php echo $RDATEX; ?></td>
		<td><?php echo $EMPNAMEO; ?></td>
		
		<td><?php echo $ITPX; ?></td>
        <td align="center"><strong><?php echo $StrEmp; ?></strong></td>
        <td><?php echo $LASTNOTE; ?></td>
		<td>
        <button class="no-bo no-ba" data-toggle="modal" data-target="#myModal1" value="<?php echo $IDX; ?>" onClick="getinfo(this.value)"><img src="icons/icons8-customer-48.png"></button>
        
        <a href="veh-maintenance.php?vid=<?php echo $IDX; ?>" title="Maintenance"><img src="icons/hardware.png"></a> &nbsp;
        <a href="reports/vehicle-maintenance.php?vid=<?php echo $IDX; ?>" title="Print" target="_blank"><img src="icons/icons8-document-48.png"></a>
         &nbsp; <?php echo $StrImage; ?>
        </td>
		</tr>
    		<?php
			/*<a href="vehicle.php?edit=yes&id=<?php echo $IDX; ?>#edit" title="Edit"><span class="fa fa-pencil-square-o">&nbsp;</span></a> &nbsp;*/
		$A++;
    		}
    		?>
	</tbody>
			
        
        
    </table>	
			
   		  
		  	
   		
    	</div>
    </div>
	<!----------------------hello--------------------WHERE STATUS=1---->
	
	
	
	

	<div class="modal fade" id="myModal1">
	<div class="modal-dialog modal-dialog-centered modal-lg" >
			  <div class="modal-content" id="model">

				<!-- Modal Header---->
				<div class="modal-header zer-padd">
					<h6>Manage Coche:</h6>
				  
				</div>

				<!-- Modal body ----------->
				<div class="modal-body" id="showdata">
	
			  	</div>
			</div>
	</div>
	</div>

	
	<!-------------------------------------mode----------------------------------->
   		  <div class="modal fade" id="myModal">
			<div class="modal-dialog modal-dialog-centered modal-lg" >
			  <div class="modal-content" id="model">

				<!-- Modal Header -->
				<div class="modal-header zer-padd">
					<h6>Manage Coche:</h6>
				  
				</div>

				<!-- Modal body -->
				<div class="modal-body">
	<form action="vehicle.php" method="post" name="form" class="FrmCompact" enctype="multipart/form-data" >
	<div class="row">
		<div class="col-md-3">
		<div class="form-group">
			<span class="top_change">Title</span>
			<input type="text" name="HEADING" value="<?php echo $HEADING; ?>" class="form-control inpu_for" placeholder="Title ..." required />
		</div>
		</div>
	
	<div class="col-md-3">
	<div class="form-group">
		<span class="top_change">Model</span>
		<input type="text" name="MODEL" value="<?php echo $MODEL; ?>" class="form-control inpu_for" placeholder="Model ..." required />
	</div>
	</div>
	
	<div class="col-md-3">
	<div class="form-group">
	<span class="top_change">Reg.No</span>
		<input type="text" name="REGNO" value="<?php echo $REGNO; ?>" class="form-control inpu_for" placeholder="Regno ..." required />
	</div>
	</div>
	
	<div class="col-md-3">
	<div class="form-group">
		<span class="top_change">Reg. Date</span>
		<input type="date" name="RDATE" value="<?php echo $RDATE; ?>" class="form-control inpu_for" placeholder="Rdate ..." required />
	</div>
	</div>
	
	<div class="col-md-3">
	<div class="form-group">
		<span class="top_change">Company</span>
		<input type="text" name="OWNER" value="<?php echo $OWNER; ?>" class="form-control inpu_for" placeholder="Company ..." required />
	</div>
	</div>
	
	<div class="col-md-3">
	<div class="form-group">
		<span class="top_change">Address</span>
		<input type="text" name="ADDRESS" value="<?php echo $ADDRESS; ?>" class="form-control inpu_for" placeholder="Address ..." required />
	</div>
	</div>
	
	<div class="col-md-3">
	<div class="form-group">
		<span class="top_change">I-T-V</span>
		<input type="text" name="ITP" value="<?php echo $ITP; ?>" class="form-control inpu_for" placeholder="I-T-V ..." required />
	</div>
	</div>
    
    <div class="col-md-3">
	<div class="form-group">
		<span class="top_change">Status</span>
		<select name="STATUS" class="form-control inpu_for">
        <option value="2" <?php if ($STATUS == 2) {echo "selected";}?> >Disabled</option>
        <option value="1" <?php if ($STATUS == 1) {echo "selected";}?> >Active</option>
        </select>
	</div>
	</div>
    
    <div class="col-md-3">
	<div class="form-group">
		<span class="top_change">Type</span>
		<select name="TYPE" class="form-control inpu_for">
        <option value="1" <?php if ($TYPE == 1) {echo "selected";}?> >Company</option>
        <option value="2" <?php if ($TYPE == 2) {echo "selected";}?> >Privado de Trabajador</option>
        <option value="3" <?php if ($TYPE == 3) {echo "selected";}?> >Alquiler</option>
        </select>
	</div>
	</div>
	
    <div class="col-md-3">
	<div class="form-group">
		<span class="top_change">Owner</span>
		<select name="EMPID" class="form-control chosen-select inpu_for" >
        <option value="" selected>Owner</option>
            <?php			
            $result = mysqli_query($link, "SELECT * FROM workers WHERE LICENSE=1 ORDER BY HEADING");
            while($row = mysqli_fetch_array($result))
            {
            $SELECTID = $row['ID'];
            $SELECTNAME = $row['HEADING'];
			$MNAME = $row['MNAME'];
			$LNAME = $row['LNAME'];
            $NID = $row['NID'];
			
            echo "<option value=$SELECTID";		
            if($SELECTID==$EMPID){echo " SELECTED";}		
            echo ">$NID - $SELECTNAME $MNAME $LNAME</option>"; 	
            }					
            ?>
        </select>
	</div>
	</div>
              
    <div class="col-md-3">
	<div class="form-group">
		<span class="top_change">Plazas</span>
		<input type="text" name="CAP" value="<?php echo $CAP; ?>" class="form-control inpu_for" placeholder="Plazas ..." required />
	</div>
	</div>
                
    <div class="col-md-3">
    <div class="form-group">
		<span class="top_change">Select Document</span>
		
    <input type="file" name="file" class="form-control inpu_for" />
    <?php
			if ($PICPATH1!=NULL)
			{
			echo '<a href="catalog/'.$PICPATH1.'" title="view" target="_blank"><span class="fa fa-download">&nbsp;</span></a>
			<a href="vehicle.php?delpic=1&index=1&delid='.$RID.'" onclick="javascript:return confirm(\'Are you sure you want to delete ?\')" >Delete</a>';
			}		
                ?>
	</div>
    </div>
    
	
	<input type="hidden" name="ACTION" value="<?php echo $ACTION ;?>" />
	<input type="hidden" name="PICPATH1" value="<?php echo $PICPATH1 ;?>" />
	<input type="hidden" name="RID" value="<?php echo $RID ;?>" />
	
	</div>
	
				</div>

				<!-- Modal footer -->
				<div class="modal-footer zer-padd">
				  <button type="submit" class="btn btn-success" id="no-border-on-model"><img src="icons/icons8-document-48.png" class="model-img">Save</button>
				  <button type="button" class="btn btn-danger" data-dismiss="modal" id="no-border-on-model"><img src="icons/icons8-shutdown-48.png" class="model-img">Back</button>
				</div>
</form>
			  </div>
			</div>
		  </div>
		  	
   		<!-------------------------------------mode----------------------------------->	
    			<!-------------------personal---information--------box------------------->
    
	
</div><!-----------row--------n012--------------->
    	

 

	

<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>	
	

<script>
		function getinfo(id){
			$.ajax({
		method:'get',
		url:'AJXCoche.php?id='+id,
		success:function(data){
				$("#showdata").html(data);
			}
		});
		}
		
	</script>


<?php // require "botmain_footer.php"; ?>


<?php
}else{
	header("location:index.php?err=2");
}
?>


	
	
	
