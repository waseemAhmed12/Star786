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
   						<div class="col-sm-6"><h5 class="top_second_link">FACTURA SYSTEM </h5></div>
   						<div class="col-sm-6">
   							<ul class="breadcrumb" id="list-br">
								<li class="breadcrumb-item"><a href="#">MMK-TECH</a></li>
								<li class="breadcrumb-item"><a href="#">FACTURA SYSTEM</a></li>
							</ul>
   						</div>
   					</div>
<hr id="hr-dash">
   			
   			
   			
<div class="row pt-3"><!-----------row--------n012--------------->
   <div class="col-sm-12">
     <div class="card p-3" id="personal-info2">
         <h5 class="toplink"><span><img src="icons/icons8-buy-48 (1).png" class="img-fluid"></span> FACTURA SYSTEM:</h5>
    			
		<!-----------------form--------------------------->
<form role="form" name="form1" method="post" action="factura.php" class="Frmstar786 form-custom" enctype="multipart/form-data">
                    <!-- text input -->
                 
                 <div class="row">
                 
                      <div class="col-md-1"> 
                     <label>Date: </label>
                     </div>
                     
                     <div class="col-md-3"> 
                      <div class="form-group">
                          <input type="date" name="PDATE" value="<?php echo $PDATE;?>" class="form-control inpu_for" placeholder="Date ..."/>
                      </div>  
                      </div> 
                      
                      <div class="col-md-1"> 
                     <label>Company: </label>
                     </div>
                     
                  <div class="col-md-3">   
                  <div class="form-group">
                  <div id="DivCID"></div>
                      <select name="CID" id="CID" class="form-control inpu_for" onChange="loadDoc(this.value)" required>
                    <OPTION value="" selected>&lt; ...:: Select Company ::... &gt;</OPTION>
                    <?php
          $result = mysqli_query($link, "SELECT * FROM company WHERE STATUS=1 ORDER BY HEADING");
    while($row = mysqli_fetch_array($result))
        {
        $CATEGORYID = $row['ID'];
        $CATEGORYNAME = $row['HEADING'];
        
        echo "<option value=$CATEGORYID";		
        if($CATEGORYID==$CID){echo " SELECTED";}		
        echo ">$CATEGORYNAME</option>"; 	
    }	
			
        ?>
                    </select>
                  </div>
                  </div>              
                  
                      <div class="col-md-1"> 
                     <label><?php echo $StrChkE; ?> Empressa: </label>
                     </div>
                     
                  <div class="col-md-3"> 
                  <div class="form-group">
                      	<select name="CLID" class="form-control inpu_for" onChange="loadDocEmp(this.value)" required>
                    <OPTION value="" selected>&lt; ...:: Select Empressa ::... &gt;</OPTION>
                    <?php
		 $result = mysqli_query($link, "SELECT * FROM mgm_clients WHERE STATUS=1 ORDER BY ID");
    while($row = mysqli_fetch_array($result))
        {
        $CATEGORYID = $row['ID'];
        $CATEGORYNAME = $row['HEADING'];
        
        echo "<option value=$CATEGORYID";		
        if($CATEGORYID==$CID){echo " SELECTED";}		
        echo ">$CATEGORYNAME</option>"; 	
    }				
					
					
						
        ?>
                    </select>
                  </div>
                  </div>
                  </div>
                  
                  <div class="row">
                      <div class="col-md-1"> 
                     <label><?php echo $StrChkO; ?> Obra: </label>
                     </div>
                     
                  <div class="col-md-3"> 
                  <div class="form-group">
                      	<select name="PID" class="form-control inpu_for selectpicker" data-live-search="true" onChange="ShowSubProj(this.value)" required>
                    <OPTION value="" selected>&lt; ...:: Select Obra ::... &gt;</OPTION>
                    <?php
					
			$result = mysqli_query($link, "SELECT * FROM hr_projects ORDER BY ID");
    while($row = mysqli_fetch_array($result))
        {
        $CATEGORYID = $row['ID'];
        $CATEGORYNAME = $row['HEADING'];
        
        echo "<option value=$CATEGORYID";		
        if($CATEGORYID==$CID){echo " SELECTED";}		
        echo ">$CATEGORYNAME</option>"; 	
    }			
					
					
					
        ?>
                    </select>
                  </div>
                  </div>
                  
                      <div class="col-md-1"> 
                     <label>Sub Obra: </label>
                     </div>
                     
                  <div class="col-md-3"> 
                  <div class="form-group">
                  <div id="DivAjax">
                      	<select name="PIDS" class="form-control inpu_for" onChange="loadDocObr(this.value)">
                    <OPTION value="" selected>&lt; ...:: Select Sub Obra ::... &gt;</OPTION>
                    <?php
				$result = mysqli_query($link, "SELECT * FROM hr_projectsub WHERE STATUS=1 ORDER BY HEADING");
    while($row = mysqli_fetch_array($result))
        {
        $CATEGORYID = $row['ID'];
        $CATEGORYNAME = $row['HEADING'];
        
        echo "<option value=$CATEGORYID";		
        if($CATEGORYID==$CID){echo " SELECTED";}		
        echo ">$CATEGORYNAME</option>"; 	
    }			
					
					
					
					
      			
        ?>
                    </select>
                    </div>
                  </div>
                  </div>
                 
                     
    
      <div class="col-md-1"> 
     <label>IVA: </label>
     </div>
                     
    <div class="col-md-3">
	<div class="form-group">
		<input type="text" name="TAX" value="<?php echo $TAX; ?>" class="form-control inpu_for" onKeyUp="loadTax(this.value)" placeholder="IVA ..." />
	</div>
	</div>
    
    
      <div class="col-md-1"> 
     <label>BANK: &nbsp; <a href="bank.php" title="Add Payment Option" target="_blank"><span class="fa fa-plus-square">&nbsp;</span></a></label>
     </div>
                     
    <div class="col-md-3">
	<div class="form-group">
    <select name="BID" class="form-control inpu_for">
                    <OPTION value="" selected>&lt; ...:: BANK ::... &gt;</OPTION>
                    <?php
					
		$result = mysqli_query($link, "SELECT * FROM bank WHERE TYPE=1 ORDER BY HEADING");
    while($row = mysqli_fetch_array($result))
        {
        $CATEGORYID = $row['ID'];
        $CATEGORYNAME = $row['HEADING'];
        $BNAME = $row['BNAME'];
        $OWNER = $row['OWNER'];
        
        echo "<option value=$CATEGORYID";		
        if($CATEGORYID==$CID){echo " SELECTED";}		
        echo ">$BNAME - $CATEGORYNAME - $OWNER</option>"; 	
    }						
					
					
        			
        ?>
                    </select> </div>
	</div>
    
     <div class="col-md-1"> 
     <label>Payment Date: </label>
     </div>
                     
    <div class="col-md-3">
	<div class="form-group">
		<input type="date" name="PMDATE" value="<?php echo $PMDATE; ?>" class="form-control inpu_for" placeholder="Payment Date ..." />
	</div>
	</div>
    
    <div class="col-md-1"> 
                     <label>Status: </label>
                     </div>
                     
                  <div class="col-md-3">   
                  <div class="form-group">
                      <select name="STATUS" id="STATUS" class="form-control inpu_for" onChange="loadDocStatus(this.value)" required>
                    <option value="">&lt; ...:: STATUS ::... &gt;</option>
                    <option value="0"  <?php if ($STATUS == 0) {echo "selected";}?>>Valid</option>
                    <option value="1"  <?php if ($STATUS == 1) {echo "selected";}?>>Cancelled</option>
                    </select>
                  </div>
                  </div>   
                  
     <div class="col-md-1"> 
                     <label>Description: </label>
                     </div>
                     
                  <div class="col-md-3">
	<div class="form-group">
		<input type="text" name="NOTE" value="<?php echo $NOTE; ?>" class="form-control inpu_for" onKeyUp="loadDocNote(this.value)" placeholder="Description ..." />
	</div>
	</div>
    
    <div class="col-md-1"> 
                     <label>Note: </label>
                     </div>
                     
    <div class="col-md-3">
	<div class="form-group">
    <input type="text" name="DETAIL" value="<?php echo $DETAIL; ?>" class="form-control inpu_for" onKeyUp="loadDocDet(this.value)" placeholder="Note ..." />
	</div>
	</div>
    
  
    
     <div class="col-md-1"> 
         <label>Document: </label>
         </div>
                     
    <div class="col-md-3">
    <div class="form-group">
		<?php
			if ($PICPATH1!=NULL)
			{
			echo '<a href="catalog/'.$PICPATH1.'" title="view" target="_blank"><span class="fa fa-print fa-2x text-danger">&nbsp;</span>
			<a href="factura.php?delpic=1&index=1&delid='.$FID.'" onclick="javascript:return confirm(\'Are you sure you want to delete ?\')" >Delete</a>';
			}		
                ?>
    <input type="file" name="file" class="form-control inpu_for" />
    
    
	</div>
    </div>
    
    <div class="col-md-12"> 
    	<table width="100%" border="1" class="table table-bordered order-list TblReport" id="TblReport">
		    <thead>
			    <tr>
			    <th width="3%">SR</th>
			    <th>CONCEPTO</th>
			    <th width="10%">CONTIDAD</th>
			    <th width="10%">PRECIO</th>
			    <th width="10%">TOTAL</th> 
			    <th width="4%">&nbsp;</th> 
			  </tr>
	  		</thead>
		    <tbody>
		        <tbody>
					<tr>
				    <td align="center" class="p-1 pt-2">1</td>
				    <td><input type="text" name="PHEAD[]" id="PHEAD" value="" class="form-control inpu_for" placeholder="Concepto ..."  /></td>
				    <td><input type="text" name="QTY[]" id="QTY" value="0" class="form-control inpu_for" placeholder="Cantidad ..." onKeyUp="Calc()"  /></td>
				     <td align="center"><input type="number" name="PRICE[]" id="PRICE" class="form-control inpu_for" min="0" max="999999" step="0.01" onKeyUp="Calc()" value="0"></td>
				     <td><input type="number" name="AMOUNT[]" id="AMOUNT" class="form-control inpu_for" min="1" max="999999" readonly value="0"></td>		
    				 <td><input type="button" class="btn btn-primary btn-sm no-rad no-padd2" id="addrow" value="+" /></td>
				  	</tr>
				  	<tr class="appendRow"></tr><!-- append new rows before this tr -->
				  </tbody>
		    </tbody>
			</table>
			<?php
			if(isset($_GET['edit']) && $_GET['edit'] == "yes")
			{ ?>
				<button type="submit" name="UPDATE_MULTI" class="btn btn-success">Update</button>
			<?php
				}else{ ?>
					<button type="submit" class="btn btn-success no-rad no-padd2" name="SAVE_MULTI" value="">Save</button>
			<?php } ?>
            
            <div class="col-md-1">
     <?php if (isset($_GET['edit'])){ echo '&nbsp;&nbsp; Print <a href="reports/factura.php?id='. $FID .'" title="Print" target="_blank"><span class="fa fa-print fa-2x text-danger">&nbsp;</span></a>';}
	 ?>
     </div>
     
    </div>
    
   
                      
    
     
     
          </div>
                  <input type="hidden" name="ACTION" value="<?php echo $ACTION;?>" />
                  <input type="hidden" name="PICPATH1" value="<?php echo $PICPATH1;?>" />
                  <input type="hidden" name="FID" value="<?php echo $FID;?>" />
                  <input type="hidden" name="BCODE" value="<?php echo $BCODE; ?>" />
                      </form>
		<!-----------------form--------------------------->
   		  
		  	
   		
    	</div>
    </div>
</div><!-----------row--------n012--------------->
    	

 <script type="text/javascript">
	$(document).ready(function () {
	    var counter = 0;

	    $("#addrow").on("click", function () {
	        var newRow = $("<tr>");
	        var cols = "";
	        var sr = counter +2;
	        cols += '<td align="center" class="p-1 pt-2">'+ sr +'</td>';
	        cols += '<td><input type="text" name="PHEAD[]" id="PHEAD['+counter+']" value="" class="form-control inpu_for" placeholder="Concepto ..."  /></td>';
	        cols += '<td><input type="text" name="QTY[]" id="QTY['+counter+']" value="0" class="form-control inpu_for" placeholder="Cantidad ..." onKeyUp="Calc()"  /></td>';
	        cols += '<td align="center"><input type="number" name="PRICE[]" id="PRICE['+counter+']" class="form-control inpu_for" min="0" max="999999" step="0.01" onKeyUp="Calc()" value="0"></td>';
	        cols += '<td><input type="number" name="AMOUNT[]" id="AMOUNT['+counter+']" class="form-control inpu_for" min="1" max="999999" readonly value="0"></td>';
	        cols += '<td><input type="button" class="ibtnDel btn btn-sm btn-danger no-rad no-padd2"  value="x"></td>';
	        newRow.append(cols);
	        // $("table.order-list").append(newRow);
	        //newRow.insertAfter( $(this).closest("tr") );
	        $('.appendRow').before(newRow);
	        counter++;
	    });



	    $("table.order-list").on("click", ".ibtnDel", function (event) {
	        $(this).closest("tr").remove();       
	        counter -= 1
	    });


	});
</script> 
<script>
function Calc()
{
	a = window.document.getElementById('QTY').value;
	b = window.document.getElementById('PRICE').value;
	c = a * b;
	window.document.getElementById('AMOUNT').value = c;
}
</script>	
 
	

	
		




<?php require "botmain_footer.php"; ?>


<?php
}else{
	header("location:index.php?err=2");
}
?>


	
	
	
