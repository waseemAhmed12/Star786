<?php 
session_start();
if(isset($_SESSION['SESSIONUID']) && ($_SESSION['SESSIONUNAME'])){	
	   $USERIDX=$_SESSION['SESSIONUID'];
 require "topmain_header.php";		
?>	









<div class="col-sm-12 main-top-body"><!----------------main-------body-----of----dashborad-------->
   					<div class="row">
   						<div class="col-sm-6"><h5 class="top_second_link">Purchase </h5></div>
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
         <h5 class="toplink"><span><img src="icons/icons8-buy-48 (1).png" class="img-fluid"></span> Purchase Information:</h5>
    			
				
<div class="box-body">

<form name="FrmFilter" class="Frmstar786" method="post" action="store-issue.php">  

   <div class="row">

	<div class="col-md-3">
	<div class="form-group">
		<!----<label>Date</label>----->
		<input type="date" name="PDATE" value="<?php echo $PDATE; ?>" class="form-control inpu_for" placeholder="Date ..." required />
	</div>
	</div>
    

   <div class="col-md-3">
	<div class="form-group">
		<!----<label>Vendor</label>----->
		<select name="VID" class="form-control inpu_for" required>
        <option value="" selected>Select Vendor</option>
            <?php			
            $result = mysqli_query($link, "SELECT * FROM em_vendors ORDER BY HEADING");
            while($row = mysqli_fetch_array($result))
                {
                $SELECTID = $row['ID'];
                $SELECTNAME = $row['HEADING'];
                
                echo "<option value=".$SELECTID.">$SELECTNAME</option>"; 	
            }					
            ?>
        </select>
	</div>
	</div>
<?php
	   $DETAIL="note";
?>

   <div class="col-md-6">
	<div class="form-group">
		<!---<label>Note</label>------>
		<input type="text" name="DETAIL" id="DETAIL" class="form-control inpu_for" value="<?php echo $DETAIL ;?>" />
	</div>
	</div>
    </div>

<!-- waleed work -->

    <div class="row">
    	<table width="100%" border="1" class="table table-bordered order-list TblReport" id="table">
		    <thead>
	
			    <tr>

			    <th>Sr</th>

			    <th>Groupo</th>

			    <th>Item</th>

			   

			    <th width="">Price</th>

			    <th width="">Quantity</th> 

			    <!-- <th width="">Total</th>  -->

			    <th width="">Tax</th> 

			    <th width="">Discount</th> 

			    <th width="">&nbsp;</th> 

			  </tr>

	  		</thead>
		    <tbody>

		        <tbody>

					<tr>

				    <td align="center" class="p-1 pt-2">1</td>
				    <td width="20%">
						<select name="catid[]" id="catid" class="form-control selectpicker inpu_for" data-live-search="true" onChange="getStoreAssets(this.value,x=-1)">

			            	<option value="">Select Grupo</option>

							<?php			

				            $resultCat = mysqli_query($link,"SELECT * FROM prodcat");

				            if (mysqli_num_rows($resultCat) == 0) {echo "<option>No Names Present</option>";} 

				            else 

				            {

				                while($row = mysqli_fetch_array($resultCat))

				                {

				                	$CATEGORYID = $row['CATID'];

				                	$CATEGORYNAME = $row['CATNAME'];

								?>

				               <option value="<?php echo($CATEGORYID); ?>"><?php echo($CATEGORYNAME); ?> </option> 
							<?php }
				                }	

				            					

				            ?>

		        		</select>
					</td>
				    <td width="30%">
				    	<div class="ast">
					    	<select name="ASTID[]" class="ASTID " value='' style="display: none;"></select>
					    </div>
				    	<div class="DivProd">
				    		<select name="PRODID[]" id="getppr" class="form-control getProd inpu_for" data-live-search="true"  onChange="showStocks(this.value,x=-1)"></select>
				    		<input type="hidden" class="storeAssetsURL" name="storeAssetsURL" value="getProductPrice.php">
					    	<input type="hidden" class="productPriceURL" name="productPriceURL" value="getProductPrice.php">
				    	</div>

				    </td>



				     <td width="20%" align="center"><div id="DivStock"><input type="text" name="PRICE[]" id="PRICE" class="form-control PRICE inpu_for" step="any" value=""></div></td>



				     <!-- onchange="getTotal(this.value,x=-1)" -->
				     <td width="20%"><input step="any" type="number" name="QTY[]" class="form-control inpu_for" id="QTY" class="form-control " value="">

				    	<!-- <input type="hidden" name="ISIDZ[]" id="ISIDZ" value="<?php //echo $ISID; ?>"> -->
				    </td>
				    <!-- <td>
				    	<input type="number" step="any" name="TOTAL[]" id="TOTAL" class="form-control TOTAL" value="">
				    </td> -->
					<td style="width: 20%;">

				    	<input type="text" name="Tax[]" class="form-control inpu_for " id="tax" value="">

				      </td>
				        <td style="width: 30%;">
				    		<input type="text" name="NOTE[]" class="form-control NOTE inpu_for" value="">
				    	</td>

					    <!-- <td><button id="loaddata" class="form-control btn-primary">Add Item</button></td> -->
					    <td style="width: 10% !important;"><button type="button" class="btn  btn-sm no-rad no-padd2" id="addrow" value="+" />
							<img src="icons/icons8-add-shopping-cart-48.png" class="main-img-update">
						</button></td>
				  	</tr>
				  	<tr class="appendRow"></tr><!-- append new rows before this tr -->
				  </tbody>
		    </tbody>

			</table>
			<?php
			if(isset($_GET['edit']) && $_GET['edit'] == "yes")
			{ ?>
				<input type="hidden" name="UPDATE_ISSUE" value="Yes">
				<input type="hidden" name="ISSUE_ID" value="<?=$_GET['id']?>">
				
				<button type="submit" name="UPDATE_ISSUE_DETAIL" class="btn btn-success no-rad btn-sm">Update Issue</button>

			<?php
				}else{ ?>

					<button type="submit" class="btn btn-success no-rad btn-sm"  name="SAVE_ISSUE" value="">Save Issue</button>

			<?php } ?>
    </div>
    </form>

<!-- waleed work edit store issue detail -->

 


    </div>
    			
   		  
		  	
   		
    	</div>
    </div>
</div><!-----------row--------n012--------------->
    	
    	
    
	
<!-------java-functions------>
	<script>

	function showStocks(id,x)
	{
		// $('.PRICE').val();
		$.ajax({
	     url:'getProductPrice.php?pid='+id,
	     type:"GET",
	     success: function(result) {

	     	if(x == -1)
	     	{
	     		var ASTID = $('select[name="PRODID[]"] :selected').attr('class');

	     		$('.ASTID').append('<option value="'+ASTID+'">'+ASTID+'</option>');

	     		$("#PRICE").val(result['PRICE']);

	     	}else{

	     		var ASTIDX = $('select[id="PRODID['+x+']"] :selected').attr('class');

	     		$("#ASTID\\["+x+"\\]").append('<option value="'+ ASTIDX+'">'+ ASTIDX +'</option>');

	     		$("#PRICEX\\["+x+"\\]").val(result['PRICE']);	

	     	}
	     			     	
	 		
	 	  }//success end



	   });
	}
	

	
	
	
	// edit store issue detail
	
	function getStoreAssets(id,x) {

		if(x==-1)
     	{
     		
	  		$('.getProd').empty();//remove previous data from select options
	  

     	}else{

     		$("#PRODID\\["+x+"\\]").empty();

     	}

		$.ajax({
	     url: $('input[name="storeAssetsURL"]').attr('value'),
	     type:"GET", 
	     data: {"catid":id}, 
	     success: function(result) {

	     	if (result != null) {
		     	if(x ==-1)
		     	{
		     		$('.getProd').append('<option value="">Select Item</option>');

		     	}else{

		     		$("#PRODID\\["+x+"\\]").append('<option value="">Select Item</option>');
		     		// $("select[name='PRODID["+x+"]']").append('<option value="">--For--</option>');
		     	}
		     	
		     	

		     	for(i=0;i<result.length;i++)
		     	{

		     		if(x==-1)
		     		{

		     			$('.getProd').append('<option class='+result[i].ID+' value="'+ result[i].ID+'">'+ result[i].HEADING +'</option>');
		     		}else{

		     			
		     			$("#PRODID\\["+x+"\\]").append('<option class='+result[i].ID+' value="'+ result[i].ID+'">'+result[i].HEADING +'</option>');

		     			// $("select[name='PRODID["+x+"]']").append('<option value="'+ result[i].ID+'">'+ result[i].HEADING +'</option>');

		     		}
		     		
		     	}
		     	 
		     }
	 		
	 	  }//success end

	   });
	}
	
</script>
	
	
<script type="text/javascript">
	$(document).ready(function () {
	    var counter = 0;
 $("#addrow").on("click", function () {
	        var newRow = $("<tr>");
	        var cols = "";
	        var sr = counter +2;
	        cols += '<td align="center" class="p-1 pt-2">'+ sr +'</td>';
	        cols += '<td><select name="catid['+counter+']" id="catid['+counter+']" class="form-control selectpicker inpu_for" data-live-search="true" onChange="getStoreAssets(this.value,x='+counter+')"><option value="">Select Grupo</option><?php	$resultCat = mysqli_query($link,"SELECT * FROM prodcat"); if (mysqli_num_rows($resultCat) == 0) {echo "<option>No Names Present</option>";} else{ while($row = mysqli_fetch_array($resultCat)){ $CATEGORYID = $row['CATID']; $CATEGORYNAME = $row['CATNAME'];?><option value="<?php echo($CATEGORYID); ?>"><?php echo($CATEGORYNAME); ?> </option> <?php } } ?></select></td>';
	        cols += '<td><div class="getProductX" style="display:block !important;"><select name="PRODID[]" id="PRODID['+counter+']" class="form-control getProdX inpu_for" data-live-search="true" onChange="showStocks(this.value,x='+counter+')"></select></div><select name="ASTID[]" id="ASTID['+counter+']" style="display: none;"></select></td>';
	        cols += '<td align="center"><div id="DivStock"><input type="text" name="PRICE[]" id="PRICEX['+counter+']" step="any" class="form-control inpu_for" value=""></div></td>';
	        cols += '<td><input type="number" step="any" name="QTY[]" id="QTYX['+counter+']" class="form-control inpu_for" value=""></td>';
	        // onchange="getTotal(this.value,x='+counter+')"
	        // cols += '<td><input type="number" step="any" name="QTY[]" id="QTYX['+counter+']" onchange="getTotal(this.value,x='+counter+')" class="form-control" value=""><input type="hidden" name="ISIDZ[]" id="ISIDZ" value="<?php //echo $ISID; ?>"></td>';
	        // cols += '<td><input type="number" step="any" name="TOTAL[]" id="TOTALX['+counter+']" class="form-control" value=""></td>';
	        cols += '<td><input type="text" name="Tax[]" class="form-control inpu_for " id="tax['+counter+']" value=""></td>';
	        cols += '<td><input type="text" name="NOTE[]" id="NOTE['+counter+']" class="form-control inpu_for" value=""></td>';
	        cols += '<td><button type="button" id="addrow" class="ibtnDel btn btn-sm no-rad no-padd2"  value="x"><img src="icons/icons8-checkout-48.png" class="main-img-update"></button></td>';
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
<!-------java-functions------>
	
	

	

	
	



<?php require "botmain_footer.php"; ?>


<?php
}else{
	header("location:index.php?err=2");
}
?>


	
	
	
