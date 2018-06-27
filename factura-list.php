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
   						<div class="col-sm-6"><h5 class="top_second_link">FACTURA LIST </h5></div>
   						<div class="col-sm-6">
   							<ul class="breadcrumb" id="list-br">
								<li class="breadcrumb-item"><a href="#">MMK-TECH</a></li>
								<li class="breadcrumb-item"><a href="#">FACTURA LIST</a></li>
							</ul>
   						</div>
   					</div>
<hr id="hr-dash">
   			
   			
   			
<div class="row pt-3"><!-----------row--------n012--------------->
   <div class="col-sm-12">
     <div class="card p-3" id="personal-info2">
         <h5 class="toplink"><span><img src="icons/icons8-buy-48 (1).png" class="img-fluid"></span> FACTURA LIST:</h5>
    			
		<!--------------------------top row--------------->
		  <div>
			 <a href="factura.php" class="btn btn-primary no-rad mb-2" style="float: right;" ><img src="icons/icons8-add-property-48.png">ADD</a>
			</div>
		 <div class="row">
			
                <div class="col-md-12">
                <form method="get" action="factura-list.php" class="Frmstar786">
                <div class="row">
                    
                    
            <div class="col-md-2">
                <select name="cid" class="form-control inpu_for">
                <option value="">Select Company</option>
                <?php			
                $resultCat = mysqli_query($link, "SELECT * FROM company WHERE STATUS=1 ORDER BY HEADING");
                if (mysqli_num_rows($resultCat) == 0) {echo "<option>No Names Present</option>";} 
                else 
                {
                while($row = mysqli_fetch_array($resultCat))
                {
                $CATEGORYID = $row['ID'];
                $CATEGORYNAME = $row['HEADING'];
                
                echo "<option value=$CATEGORYID";		
                if($CATEGORYID==$CID){echo " SELECTED";}		
                echo ">$CATEGORYNAME</option>"; 
                }	
                }					
                ?>
                </select>
            </div>
            
            <div class="col-md-2">
                <select name="clid" class="form-control inpu_for">
                <option value="">Select Empressa</option>
                <?php			
                $resultCat = mysqli_query($link, "SELECT * FROM mgm_clients WHERE STATUS=1 ORDER BY HEADING");
                if (mysqli_num_rows($resultCat) == 0) {echo "<option>No Names Present</option>";} 
                else 
                {
                while($row = mysqli_fetch_array($resultCat))
                {
                $CATEGORYID = $row['ID'];
                $CATEGORYNAME = $row['HEADING'];
                
                echo "<option value=$CATEGORYID";		
                if($CATEGORYID==$CLID){echo " SELECTED";}		
                echo ">$CATEGORYNAME</option>"; 
                }	
                }					
                ?>
                </select>
            </div>
            
            <div class="col-md-2">
                <select name="pid" class="form-control inpu_for">
                <option value="">Select Obra</option>
                <?php		
				$resultCat = mysqli_query($link, "SELECT * FROM hr_projects WHERE STATUS=1 ORDER BY ID");
				if (isset($_GET['edit']))
				{
                	$resultCat = mysqli_query($link, "SELECT * FROM hr_projects WHERE STATUS=1 ORDER BY ID");
				}
                if (mysqli_num_rows($resultCat) == 0) {echo "<option>No Names Present</option>";} 
                else 
                {
                while($row = mysqli_fetch_array($resultCat))
                {
                $CATEGORYID = $row['ID'];
                $CATEGORYNAME = $row['HEADING'];
                
                echo "<option value=$CATEGORYID";		
                if($CATEGORYID==$PID){echo " SELECTED";}		
                echo ">$CATEGORYID - $CATEGORYNAME</option>"; 
                }	
                }					
                ?>
                </select>
            </div>
    
    <div class="col-md-2">
    <select name="pm" id="pm" class="form-control inpu_for">
        <option value="" >All</option>
        <option value="1" <?php if ($PM == 1) {echo "selected";}?> >Recieved</option>
        <option value="2" <?php if ($PM == 2) {echo "selected";}?> >Bank</option>
        <option value="4" <?php if ($PM == 4) {echo "selected";}?> >Descontar Pagare</option>
        <option value="3" <?php if ($PM == 3) {echo "selected";}?> >Hold</option>
        <option value="0" <?php if ($PM == 0) {echo "selected";}?> >Not Recieved</option>
        </select>
    </div>
                    <div class="col-md-2">
    
      <input type="date" name="dfrom" value="<?php echo $DFrom;?>"  placeholder="Date From" class="form-control inpu_for">
    </div>
    <div class="col-md-2">
      <input type="date" name="dto" value="<?php echo $DTo;?>" placeholder="Date To" class="form-control inpu_for">
    </div>
    
    <div class="col-md-1"><input type="submit" name="submit" value="Filter" class="btn btn-primary no-rad" /></div>
    
    <div class="col-md-3"><a href="factura-list.php" title="Refresh"><span class="fa fa-refresh fa-2x">&nbsp;</span></a> 
    <?php
	/*
    <a href="reports/factura-sum.php?<?php echo $_SERVER['QUERY_STRING'];?>" title="Print" target="_blank"><span class="fa fa-print fa-2x">&nbsp;</span></a> <a href="reports/factura-veci.php?<?php echo $_SERVER['QUERY_STRING'];?>" title="Vecimienton Report" target="_blank"> Vecimento <span class="fa fa-money">&nbsp;</span></a> 
	*/
	?>
	</div>
                    
                </div>
               </form>
               
               </div>
               </div>
		<!--------------------------table--------------->
		 <div class="row">
                <div class="col-md-12">
                <form name="FORM1" id="myform">
               <table id="example" class="table table-bordered table-striped">
	<thead>
	<tr>
		<th width="2%">Sr</th>
        <th width="6%">Date</th>
		<th width="6%">Company</th>
		<th width="6%">Empressa</th>
		<th>Obra</th>
        <th>SubObra</th>
        <th width="5%">Payment</th>
        <th width="5%">Amount</th>
        <th width="5%">Total</th>
        <th width="5%">Recieved</th>
        <th width="5%">Balance</th>
        <th width="3%">Days</th>
        <th width="5%">F.Vecim</th>
        <th width="5%">Abono</th>
        <th width="3%">Email</th>
		<th width="5%">&nbsp;</th>
	</tr>
	</thead>
	<tbody>

		<?php
if (isset($_GET['dfrom']))
	{
	$DFrom = $_GET['dfrom'];
	$DTo = $_GET['dto'];
	$CID = $_GET['cid'];
	$CLID = $_GET['clid'];
	$PID = $_GET['pid'];
	$PM = $_GET['pm'];
	}
	
		$A = 1;
		$TAMT = 0;
		$GTAMT = 0;
		$GTAX = 0;
		$GRCVD = 0;
		$GBAL = 0;
		
		$result = mysqli_query($link, "SELECT * FROM em_factura1 ORDER BY ID DESC");
		if (isset($_GET['dfrom']))
		{
			if ($DFrom != NULL && $DTo != NULL && $CID != NULL && $CLID!=NULL && $PM!=NULL && $PID!=NULL)
			{
			$result = mysqli_query($link, "SELECT * FROM em_factura1 WHERE CID='$CID' AND PID='$PID' AND PM='$PM' AND CLID='$CLID' AND PDATE>='$DFrom' AND PDATE<='$DTo' ORDER BY ID DESC");
			}
			else if ($DFrom != NULL && $DTo != NULL && $CID != NULL && $CLID==NULL && $PM==NULL && $PID==NULL)
			{
			$result = mysqli_query($link, "SELECT * FROM em_factura1 WHERE CID='$CID' AND PDATE>='$DFrom' AND PDATE<='$DTo' ORDER BY ID DESC");
			}
			else if ($DFrom != NULL && $DTo != NULL && $CID != NULL && $CLID!=NULL && $PM==NULL && $PID!=NULL)
			{
			$result = mysqli_query($link, "SELECT * FROM em_factura1 WHERE CID='$CID' AND PID='$PID' AND CLID='$CLID' AND PDATE>='$DFrom' AND PDATE<='$DTo' ORDER BY ID DESC");
			}
			else if ($DFrom != NULL && $DTo != NULL && $CID == NULL && $CLID==NULL && $PID==NULL && $PM==NULL)
			{
			$result = mysqli_query($link, "SELECT * FROM em_factura1 WHERE PDATE>='$DFrom' AND PDATE<='$DTo' ORDER BY ID DESC");
			}
			else if ($DFrom != NULL && $DTo != NULL && $CID != NULL && $CLID==NULL && $PID==NULL && $PM==NULL)
			{
			$result = mysqli_query($link, "SELECT * FROM em_factura1 WHERE  CID='$CID' AND PDATE>='$DFrom' AND PDATE<='$DTo' ORDER BY ID DESC");
			}
			else if ($DFrom == NULL && $DTo == NULL && $CID != NULL && $CLID==NULL && $PID==NULL && $PM==NULL)
			{
			$result = mysqli_query($link, "SELECT * FROM em_factura1 WHERE CID='$CID' ORDER BY ID DESC");
			}
			else if ($DFrom == NULL && $DTo == NULL && $CID == NULL && $CLID==NULL && $PID!=NULL && $PM==NULL)
			{
			$result = mysqli_query($link, "SELECT * FROM em_factura1 WHERE PID='$PID' ORDER BY ID DESC");
			}
			else if ($DFrom == NULL && $DTo == NULL && $CID == NULL && $CLID!=NULL && $PID==NULL && $PM==NULL)
			{
			$result = mysqli_query($link, "SELECT * FROM em_factura1 WHERE CLID='$CLID' ORDER BY ID DESC");
			}
			else if ($DFrom == NULL && $DTo == NULL && $CID == NULL && $CLID==NULL && $PID==NULL && $PM!=NULL)
			{
			$result = mysqli_query($link, "SELECT * FROM em_factura1 WHERE PM='$PM' ORDER BY ID DESC");
			}
			else if ($DFrom != NULL && $DTo != NULL && $CID == NULL && $CLID==NULL && $PID!=NULL && $PM!=NULL)
			{
			$result = mysqli_query($link, "SELECT * FROM em_factura1 WHERE  PID='$PID' AND PM='$PM' AND PDATE>='$DFrom' AND PDATE<='$DTo' ORDER BY ID DESC");
			}
			else if ($DFrom != NULL && $DTo != NULL && $CID != NULL && $CLID==NULL && $PID==NULL && $PM!=NULL)
			{
			$result = mysqli_query($link, "SELECT * FROM em_factura1 WHERE CID='$CID' AND PM='$PM' AND PDATE>='$DFrom' AND PDATE<='$DTo' ORDER BY ID DESC");
			}
			else if ($DFrom != NULL && $DTo != NULL && $CID == NULL && $CLID==NULL && $PID==NULL && $PM!=NULL)
			{
			$result = mysqli_query($link, "SELECT * FROM em_factura1 WHERE PM='$PM' AND PDATE>='$DFrom' AND PDATE<='$DTo' ORDER BY ID DESC");
			}
			else if ($DFrom != NULL && $DTo != NULL && $CID != NULL && $CLID!=NULL && $PID==NULL && $PM!=NULL)
			{
			$result = mysqli_query($link, "SELECT * FROM em_factura1 WHERE CID='$CID' AND CLID='$CLID' AND PM='$PM' AND PDATE>='$DFrom' AND PDATE<='$DTo' ORDER BY ID DESC");
			}
			else if ($DFrom != NULL && $DTo != NULL && $CID != NULL && $CLID!=NULL && $PID==NULL && $PM==NULL)
			{
			$result = mysqli_query($link, "SELECT * FROM em_factura1 WHERE CID='$CID' AND CLID='$CLID' AND PDATE>='$DFrom' AND PDATE<='$DTo' ORDER BY ID DESC");
			}
			else if ($DFrom == NULL && $DTo == NULL && $CID != NULL && $CLID==NULL && $PID==NULL && $PM!=NULL)
			{
			$result = mysqli_query($link, "SELECT * FROM em_factura1 WHERE CID='$CID' AND PM='$PM' ORDER BY ID DESC");
			}
		}
		while($row = mysqli_fetch_array($result))
		{
		$FID = $row['ID'];
		$CSR = $row['CSR'];
		$CSRM = $row['CSRM'];
		$PMX = $row['PM'];
		$PDATEX = $row['PDATE'];
		$CIDX = $row['CID'];
		$CLIDX = $row['CLID'];
		$PIDX = $row['PID'];
		$PIDSX = $row['PIDS'];
		$NOTEX = $row['NOTE'];
		$TAXX = $row['TAX'];
		$BCODEX = $row['BCODE'];
		$DETAILX = $row['DETAIL'];
		$STATUSX = $row['STATUS'];
		$PICPATH1X = $row['PICPATH1'];
		
		$resultCat = mysqli_query($link, "SELECT * FROM company WHERE ID = '$CIDX' LIMIT 1");
		while($row = mysqli_fetch_array($resultCat)) 
		{$COMPNAME = $row['HEADING']; $COMPSNAME = $row['SNAME'];}
		
		$resultCat = mysqli_query($link, "SELECT * FROM mgm_clients WHERE ID = '$CLIDX' LIMIT 1");
		while($row = mysqli_fetch_array($resultCat)) 
		{$CLNAME = $row['HEADING']; $CLSNAME = $row['SNAME'];}
		
		$resultCat = mysqli_query($link, "SELECT HEADING FROM hr_projects WHERE ID = '$PIDX' LIMIT 1");
		while($row = mysqli_fetch_array($resultCat)) 
		{$PROJNAME = $row['HEADING'];}
		
		$PROJNAMESUB  = "";
		if ($PIDSX != 0)
		{
			$resultCat = mysqli_query($link, "SELECT HEADING FROM hr_projectsub WHERE ID = '$PIDSX' LIMIT 1");
			while($row = mysqli_fetch_array($resultCat)) 
			{$PROJNAMESUB = $row['HEADING'];}
			$PROJNAMESUB = $PROJNAMESUB;
		}
		$date=date_create($PDATEX);
		$PDATEX = date_format($date,"d-m-Y");
		
		$TAMT = 0;
		$TAXAMT = 0;
		$BILLAMT = 0;
		$resultCat = mysqli_query($link, "SELECT * FROM em_factura1_detail WHERE FID='$FID'");
		while($row = mysqli_fetch_array($resultCat)) 
		{ 
		$QTY = $row['QTY'];
		$PRICE = $row['PRICE'];
		$AMT = $QTY * $PRICE;
		$TAMT = $TAMT + $AMT;
		}
		$TAXAMT = $TAMT * ($TAXX / 100);
		$BILLAMT = $TAMT + $TAXAMT;
		
		
		
		$StrFacP = '';
		$resultXFAC = mysqli_query($link, "SELECT * FROM em_factura2_detail WHERE PSID='$FID' LIMIT 1");
		if (mysqli_num_rows($resultXFAC)>0){$StrFacP = '<a href="reports/factura.php?id='.$FID.'" title="Print" target="_blank"><span class="fa fa-print">&nbsp;</span></a>';}
		
		if ($PICPATH1X != ''){$StrImage = '<a href="catalog/'.$PICPATH1X.'" target="_blank"><img src="images/icon_file.png" width="24" height="24" align="absmiddle" /></a>';}
		else {$StrImage = ' ';}
		
		$resultXX = mysqli_query($link, "SELECT SUM(AMOUNT) As TRCV FROM em_factura_rcv WHERE FID='$FID' AND STATUS!=1"); 
		$resultSum=mysqli_fetch_assoc($resultXX); 
		$TRCV = $resultSum['TRCV']; 
		
		if ($STATUSX == 1){$StrStatus = 'FontGray';}
		else{$StrStatus = 'FontNormal';
		$GTAMT = $GTAMT + $TAMT;
		$GTAX = $GTAX + $TAXAMT;
		$GRCVD = $GRCVD + $TRCV;
		}
		
		
		if ($PMX == 1){$StrClass = ' style="color:#FFF; background-color:#017F01;"'; $StrPayment = 'Recieved';}
		else if ($PMX == 2){$StrClass = ' style="color:#FFF; background-color:#156AA4;"'; $StrPayment = 'Bank';}
		else if ($PMX == 3){$StrClass = ' style="color:#D35500; background-color:#F1C500;"'; $StrPayment = 'Hold';}
		else if ($PMX == 4){$StrClass = ' style="color:#FFF; background-color:#156AA4;"'; $StrPayment = 'Descontar Pagare';}
		else{$StrClass = 'FontNormal'; $StrPayment = 'Not-Recieved';}
		
		/*
		if ($PMX == 1){$StrClass = ''; $StrPayment = '<label class="label label-success">Recieved</label>';}
		else if ($PMX == 2){$StrClass = ''; $StrPayment = '<label class="label label-success">Bank</label>';}
		else if ($PMX == 3){$StrClass = ''; $StrPayment = '<label class="label label-warning">Hold</label>';}
		else{$StrClass = 'FontNormal'; $StrPayment = 'Not-Recieved';}
		*/
		
		$StrCSRM = '';
		if ($CSRM == 1){$StrCSRM = 'A';}
		elseif ($CSRM == 2){$StrCSRM = 'B';}
		elseif ($CSRM == 3){$StrCSRM = 'C';}
		elseif ($CSRM == 4){$StrCSRM = 'D';}
		elseif ($CSRM == 5){$StrCSRM = 'E';}
		elseif ($CSRM == 6){$StrCSRM = 'F';}
		elseif ($CSRM == 7){$StrCSRM = 'G';}

		elseif ($CSRM == 8){$StrCSRM = 'H';}
		elseif ($CSRM == 9){$StrCSRM = 'I';}
		elseif ($CSRM == 10){$StrCSRM = 'J';}
		else {$StrCSRM = '';}
		
		
		$resultXX = mysqli_query($link, "SELECT * FROM em_factura3 WHERE FCID='$FID'"); 
		if (mysqli_num_rows($resultXX)> 0)
		{$StrAbono = '<span class="fa fa-check">&nbsp;</span>';}
		else {$StrAbono = '';}
		
		$TBAL = $BILLAMT - $TRCV;
		$GBAL = $GBAL + $TBAL;
		
		if ($TBAL > 0){$StrBal = 'FontRed';}
		else{$StrBal = '';}
		
		$resultCat = mysqli_query($link, "SELECT * FROM em_factura_rcv WHERE FID='$FID'");
		$TItems = mysqli_num_rows($resultCat);
		
		$PMFR = 0;
		$resultXX = mysqli_query($link, "SELECT * FROM em_factura_rcv WHERE FID='$FID' ORDER BY ID DESC LIMIT 1"); 
		while($row = mysqli_fetch_array($resultXX)) 
		{$PMFR = $row['PM']; $EDATE = $row['EDATE'];}
		
		$EDATE = '';
		$resultXX = mysqli_query($link, "SELECT * FROM em_factura_rcv WHERE FID='$FID'");
		if (mysqli_num_rows($resultXX) > 0)
		{
			while($row = mysqli_fetch_array($resultXX))
			{$EDATE = $row['EDATE'];}
			$date=date_create($EDATE);
			$EDATE = date_format($date,"d-m-Y");
		}
	
		$StrDays = "";
		$StrRowClass = '';
		
		if ($PMFR == 2 || $PMFR == 3 || $PMFR == 4)
		{
			$date2 = $EDATE;
			$date1 = date("Y-m-d");
			$diff = strtotime($date2) - strtotime($date1);
			$days = floor($diff / (60*60*24));
			$years = floor($diff / (365*60*60*24));
			
			if ($days >= 0 && $days <= 30)
			{
				$StrDays = '<label class="label label-success">'. $days .' </label>';
				$StrRowClass = ' class="danger"';
			}
			else if ($days >= 0 && $days <= 60)
			{
				$StrDays = '<label class="label label-warning">'. $days .'</label>';
				$StrRowClass = ' class="warning"';
			}
			else
			{
				$StrDays = '<label class="label label-danger">'. $days .'</label>';
				$StrRowClass = '';
			}
		}
		
		
		?>
		<tr>
		<td width="2%"><?php echo $CSR.$StrCSRM; ?></td>
        
        <td width="6%"><span class="<?php echo $StrStatus; ?>"><?php echo $PDATEX; ?></span></td>
		<td width="6%"><span class="<?php echo $StrStatus; ?>"><?php echo $COMPSNAME; ?></span></td>
		<td width="6%"><span class="<?php echo $StrStatus; ?>"><?php echo $CLSNAME; ?></span></td>
		<td><span class="<?php echo $StrStatus; ?>"><?php echo $PROJNAME; ?></span></td>
        <td width="5%"><span class="<?php echo $StrStatus; ?>"><?php echo $PROJNAMESUB; ?></span></td>
        <td align="center" <?php echo $StrClass; ?>><?php echo $StrPayment; ?></td>
        <td width="5%"><?php echo number_format((float)$BILLAMT - $TAXAMT, 2, '.', ','); ?></td>
        <td width="5%"><?php echo number_format((float)$BILLAMT, 2, '.', ','); ?></td>
        <td width="5%"><?php echo number_format((float)$TRCV, 2, '.', ','); ?></td>
        <td width="5%"><span class="<?php echo $StrBal; ?>"><?php echo number_format((float)$TBAL, 2, '.', ','); ?></span></td>
        <td width="3%"><?php echo $StrDays; ?></td>
        <td width="5%"><?php echo $EDATE; ?></td>
        <td width="5%"><?php echo $StrAbono; ?></td>
        <?php
		$resultXM = mysqli_query($link, "SELECT * FROM tmp_post WHERE MAJID=1 AND DID='$FID' ORDER BY DID");
		if (mysqli_num_rows($resultXM) != 0){$StrCheck = ' checked'; $StrClass = ' style="color:#FFF; background-color:#FF0000;" ';} else{$StrCheck = ' '; $StrClass = ' ';}
		?>
        <td width="3%" align="center" <?php //echo $StrClass; ?>>        
        <input type="checkbox" name="FIDM[]" class="form-control" value="<?php echo $FID; ?>" <?php echo $StrCheck; ?> /> &nbsp;</td>
		<td width="5%">
        <div class="pull-left" >
<div class="dropdown">
    <button class="btn btn-danger dropdown-toggle btn-xs no-rad" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
    <img src="icons/icons8-administrative-tools-48 (1).png">
    <span class="caret"></span>
    </button>
    <ul class="dropdown-menu pull-right drop-list" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a class="link-name" role="menuitem" tabindex="-1" href="factura.php?edit=yes&fid=<?php echo $FID; ?>" title="Edit"><span class="fa fa-pencil-square-o">&nbsp;</span> Edit</a></li>
    <li role="presentation"><a class="link-name" role="menuitem" tabindex="-1" href="factura.php?dup=yes&fid=<?php echo $FID; ?>" title="Copy" onClick='javascript:return confirm("Are you sure you want to make copy ?")'><span class="fa fa-copyright">&nbsp;</span> Make Copy </a></li>
    <?php
	$resultALB = mysqli_query($link, "SELECT * FROM albaran WHERE FID='$FID' ORDER BY ID DESC");
	$TREC = mysqli_num_rows($resultALB);
	if ($TREC ==0) 
	{
	?>
    <li role="presentation"><a class="link-name" role="menuitem" tabindex="-1" href="javascript:void(0);" data-href="AJXFacAlb.php?id=<?php echo $FID; ?>" class="openPopupAlb" title="Albaran"><span class="fa fa-pencil-square-o">&nbsp;</span> Albaran</a></li>
    <?php
	}
	?>
    <li role="presentation"><a class="link-name" role="menuitem" tabindex="-1" href="factura-rcv.php?fid=<?php echo $FID; ?>" title="Recieving"><span class="fa fa-money">&nbsp;</span> Recieving</a></li>
    <li role="presentation"><a class="link-name" role="menuitem" tabindex="-1" href="reports/factura.php?id=<?php echo $FID; ?>" title="Print" target="_blank"><span class="fa fa-print">&nbsp;</span> Print</a></li>
    <li role="presentation"><?php echo $StrImage; ?></li>
    </ul>
</div>
</div>
        
        </td>
       
		</tr>
        <?php
		/*
			if ($TItems > 0)
			//echo '<tr><td colspan="13" align="center">';
			
			$resultXX = mysqli_query($linki, "SELECT * FROM em_factura_rcv WHERE FID='$FID'");
				while($row = mysqli_fetch_array($resultXX))
				{
				$RCVPDATEX = $row['PDATE'];
				$RCVDDATEX = $row['DDATE'];
				$RCVCDATEX = $row['CDATE'];
				$RCVEDATEX = $row['EDATE'];
				$RCVTYPEX = $row['TYPE'];
				$RCVDETAILX = $row['DETAIL'];
				$RCVAMOUNTX = $row['AMOUNT'];
				$RCVCOMMX = $row['COMM'];
				
				//echo '<span class="text-info"><strong>Date:</strong>'.$RCVPDATEX.', Amount:'.$RCVAMOUNTX.', Commission:'.$RCVCOMMX.' || </span>';
				}

			//echo '</td></tr>';
			*/
			?>
            
            
    		<?php
		$A++;
    		}
    		?>
	</tbody>
	<tfoot>
    <tr>
		<td colspan="7"></td>
        
        <td><?php echo number_format((float)$GTAMT, 2, '.', ','); ?></td>
        <td><?php echo number_format((float)$GTAMT + $GTAX, 2, '.', ','); ?></td>
        <td><?php echo number_format((float)$GRCVD, 2, '.', ','); ?></td>
        <td><?php echo number_format((float)$GBAL, 2, '.', ','); ?></td>
		<td>&nbsp;</td>  
        <td>&nbsp;</td> 
        <td>&nbsp;</td>   
        <td>&nbsp;</td>   
        <td>&nbsp;</td>       
		</tr>
    </tfoot>
	</table>
    </form>
    
    
    <div id="response">
    <?php
	$result = mysqli_query($link, "SELECT * FROM tmp_post WHERE MAJID=1 ORDER BY DID");
	if (mysqli_num_rows($result) > 0)
	{
	$StrResponse = '<h3>Factura list for Email/Print</h3>
	<form name="form1" method="post" action="factura-pdf.php" target="_blank">
	<table id="example" class="table table-bordered table-striped">
	<thead>
	<tr>
		<th>Sr</th>
        <th>FID</th>
        <th>Company</th>
		<th>Empressa</th>
		<th>Obra</th>
	</tr>
	</thead>
	<tbody>';
		
		$A = 1;
		$result = mysqli_query($link, "SELECT * FROM tmp_post WHERE MAJID=1 ORDER BY DID");
		while($row = mysqli_fetch_array($result))
		{
		$IDX = $row['ID'];
		$MAJIDX = $row['MAJID'];
		$HEADINGX = $row['HEADING'];
		$DIDX = $row['DID'];
		
			$resultX = mysqli_query($link, "SELECT * FROM em_factura1 WHERE ID='$DIDX' LIMIT 1");
			while($row = mysqli_fetch_array($resultX))
			{
			$FID = $row['ID'];
			$CSR = $row['CSR'];
			$CSRM = $row['CSRM'];
			$PMX = $row['PM'];
			$PDATEX = $row['PDATE'];
			$CIDX = $row['CID'];
			$CLIDX = $row['CLID'];
			$PIDX = $row['PID'];
			$PIDSX = $row['PIDS'];
			$NOTEX = $row['NOTE'];
			$TAXX = $row['TAX'];
			$BCODEX = $row['BCODE'];
			$DETAILX = $row['DETAIL'];
			$STATUSX = $row['STATUS'];
			$PICPATH1X = $row['PICPATH1'];
		
			$resultCat = mysqli_query($link, "SELECT * FROM company WHERE ID = '$CIDX' LIMIT 1");
			while($row = mysqli_fetch_array($resultCat)) 
			{$COMPNAME = $row['HEADING']; $COMPSNAME = $row['SNAME'];}
			
			$resultCat = mysqli_query($link, "SELECT * FROM mgm_clients WHERE ID = '$CLIDX' LIMIT 1");
			while($row = mysqli_fetch_array($resultCat)) 
			{$CLNAME = $row['HEADING']; $CLSNAME = $row['SNAME'];}
			
			$resultCat = mysqli_query($link, "SELECT HEADING FROM hr_projects WHERE ID = '$PIDX' LIMIT 1");
			while($row = mysqli_fetch_array($resultCat)) 
			{$PROJNAME = $row['HEADING'];}
			}
			
		$StrResponse .= '<tr>
		<td>'.$A.'</td>
		<td>'.$CSR.'</td>
        <td>'.$COMPNAME.'</td>
		<td>'.$CLNAME.'</td>
		<td>'.$PROJNAME.'</td>
		</tr>';
		$A++;
    		}
	$StrResponse .= '</tbody>
	<tfoot>
	<tr>
	<td colspan="2">&nbsp;</td>
	<td>
	<select name="ACT" id="ACT" class="form-control" required>
	<option value="" >Action </option>
	<option value="1">Print</option>
	<option value="2">Download</option>
	<option value="3">Email</option>
	</select>
	</td>
	<td><input type="text" name="FOLDERN" placeholder="File Name" class="form-control" />
	<input type="hidden" name="print" value="yes" />
	</td>
	<td><button type="submit" class="btn btn-primary btn-xs">Submit</button></td></tr>
	</tr>
	</tfoot>
	</table></form>';
	
	echo $StrResponse;
	}
	?>
    </div>
            
</div>
</div>
		<!--------------------------table--------------->
   		  
		  	
   		
    	</div>
    </div>
</div><!-----------row--------n012--------------->
    	

	
 <script>
$(document).ready(function(){
	var ID;
	var ST;				   
	
 $('#myform :checkbox').change(function () 
	{
		if ($(this).is(':checked')) 
		{
			ID = $(this).val();
			ST = 1;
			//console.log($(this).val() + ' is now checked');
			//console.log(ID + ' is now '+ST);
		} 
		else 
		{
			ID = $(this).val();
			ST = 0;
			//console.log($(this).val() + ' is now unchecked');
			//console.log(ID + ' is now '+ST);
		}
	
		$.ajax({
                type: "POST",
       			url: "jqpost.php", //Relative or absolute path to notification.php file
       			data: {SRC:'FACTURA', DID: ID, ST:ST},
       			success: function( data, textStatus, jQxhr ){
                    $('#response').html( data );
                },
                error: function( jqXhr, textStatus, errorThrown ){
                    console.log( errorThrown );
                }
            	});
    	}); 
		
	});
</script>
	

	
<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>		




<?php require "botmain_footer.php"; ?>


<?php
}else{
	header("location:index.php?err=2");
}
?>


	
	
	
