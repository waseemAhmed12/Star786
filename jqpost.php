<?php
require "inc_conn.php";

$SRC = $_REQUEST['SRC'];
$DID = $_REQUEST['DID'];
$ST = $_REQUEST['ST'];
/*
$yesno = ( isset($_POST['onoffswitch']) ) ? 1 : 0; 
		
$sql = "UPDATE videos SET PUBLISH='$yesno' WHERE ID=18";
if (!mysql_query($sql,$link)){die ('Error: ' . mysql_error());}	
*/
//********************* factura ************8
if ($SRC == 'FACTURA')
{
	if ($ST == 1)
	{
		$result = mysqli_query($link, "SELECT * FROM tmp_post WHERE MAJID='1' AND DID='$DID' LIMIT 1");
		if (mysqli_num_rows($result) == 0)
		{
			$sql = "INSERT INTO tmp_post (MAJID, HEADING, DID) VALUES ('1', 'FACTURA', '$DID')";
			$result = mysqli_query($link, $sql);
		}
	}
	elseif ($ST == 0)
	{
		$sql = "DELETE FROM tmp_post WHERE DID='$DID' LIMIT 1";
		$result = mysqli_query($link, $sql);
	}

//<a href="#"><button type="button" class="btn btn-block btn-primary btn-sm"><span class="fa fa-print ">&nbsp;</span> Print/Email</button> </a>
$result = mysqli_query($link, "SELECT * FROM tmp_post WHERE MAJID=1 ORDER BY DID");
if (mysqli_num_rows($result) > 0)
{
$StrResponse = '<h3>Factura list for Email/Print</h3>
<form name="form1" method="get" action="factura-pdf.php" target="_blank">
<table id="example" class="table table-bordered table-striped">
	<thead>
	<tr>
		<th>Sr</th>
        <th>FID</th>
        <th>Company</th>
		<th>Empress</th>
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
	<input type="hidden" name="print" value="yes" /></td>
	<td><button type="submit" class="btn btn-primary btn-xs">Submit</button></td></tr>
	</tr>
	</tfoot>
	</table></form>';
	
	echo $StrResponse;
}
}
?>	