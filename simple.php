<?php 
session_start();
if(isset($_SESSION['SESSIONUID']) && ($_SESSION['SESSIONUNAME'])){	
	   $USERIDX=$_SESSION['SESSIONUID'];
 require "topmain_header.php";		
?>	



<div class="col-sm-12 main-top-body"><!----------------main-------body-----of----dashborad-------->
   					<div class="row">
   						<div class="col-sm-6"><h5 class="top_second_link">Products</h5></div>
   						<div class="col-sm-6">
   							<ul class="breadcrumb" id="list-br">
								<li class="breadcrumb-item"><a href="#">MMK-TECH</a></li>
								<li class="breadcrumb-item"><a href="#">About Me</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);" data-href="AJXProducts.php?id=0" class="openPopup FontRed" title="Add New" target="_blank"><span class="fa fa-plus-square FontRed fa-lg" style="color: red;">&nbsp;</span></a></li>                           
                    </ol>
							</ul>
   						</div>
   					</div>
<hr id="hr-dash">
   			
   			
   			
<div class="row pt-3"><!-----------row--------n012--------------->
   <div class="col-sm-12">
     <div class="card p-3" id="personal-info2">
         <h5 class="toplink"><span><img src="icons/icons8-buy-48 (1).png" class="img-fluid"></span> Products Information:</h5>
    			
		
   		  
      	<!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog" style="margin-left: 20%;">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title" style="color: orange; font-size: 18px;">Vehicle Management</h3>
                </div>
                <div class="modal-body">
                
            
            
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" style="height: 35px;">X</button>
                </div>
            </div>          
        </div>
      </div>   		
    	</div>
    </div>
</div><!-----------row--------n012--------------->
    	

	

	

	
	




<?php require "botmain_footer.php"; ?>


<?php
}else{
	header("location:index.php?err=2");
}
?>


	
	
	
