<?php 
session_start();
if(isset($_SESSION['SESSIONUID']) && ($_SESSION['SESSIONUNAME'])){	
	   $USERIDX=$_SESSION['SESSIONUID'];
 require "topmain_header.php";		
?>	



<div class="col-sm-12 main-top-body"><!----------------main-------body-----of----dashborad-------->
   					<div class="row main-div-of-right-side">
   						<div class="col-sm-6 top-nav-info" >
                <p style="margin-left: -20px;">
                <span class="btn btn-sm pb-0 pt-0 small"><span class="small tlink">Home</span></span>
                <span class="btn btn-sm pb-0 pt-0"><span class="small tlink">Products</span></span>            
                </p>
              </div>

              <div class="col-sm-6 top-nav-info">
                <ul class="breadcrumb" id="list-br" style="margin-right: -10px; margin-bottom: 20px;">
                  <li class="breadcrumb-item"><a href="#">MMK-TECH</a></li>
                  <li class="breadcrumb-item"><a href="#">Products</a></li>
                      <li class="breadcrumb-item"><a href="javascript:void(0);" data-href="AJXProducts.php?id=0" class="openPopup FontRed" title="Add New" target="_blank"><span class="fa fa-plus-square FontRed fa-lg" style="color: #36474F;">&nbsp;</span></a></li>         
                </ul>
              </div>
   					</div>
<hr id="hr-dash">
   			
   			
   			
<div class="row pt-3" style="margin-top: -35px;"><!-----------row--------n012--------------->
   <div class="col-sm-12">
     <div class="card p-3" id="personal-info2">
         <h5 class="toplink" style="font-weight: 700"><span><img src="icons/icons8-buy-48 (1).png" class="img-fluid"></span> Products Information:</h5>
    			
		
   		  <?php
        include("inc_conn.php");

        $ACTION = "INSERT";
        $HEADING = "";
        $SNAME = "";
        $UNIT = "";
        $CATID = "";
        $PRICE = "";
        $PRICETRD = "";
        $TS = "";
        $DETAIL = "";
        $PCODE = "";
        $BCODE = "";
        $REF = "";
        $LOCATION = "";
        $BC1 = "";
        $BC2 = "";
        $ALERT = "";
        $STATUS = "";
        $FileName = "";

        if (isset($_POST['ACTION']))
          {
            $HEADING = $_POST['HEADING'];
            $SNAME = $_POST['SNAME'];
            $UNIT = $_POST['UNIT'];
            $CATID = $_POST['CATID'];
            $PRICE = $_POST['PRICE'];
            $PRICETRD = $_POST['PRICETRD'];
            $TS = $_POST['TS'];
            $DETAIL = $_POST['DETAIL'];
            $PCODE = $_POST['PCODE'];
            $BCODE = $_POST['BCODE'];
            $REF= $_POST['REF'];
            $LOCATION = $_POST['LOCATION'];
            $BC1 = $_POST['BC1'];
            $BC2 = $_POST['BC2'];
            $ALERT = $_POST['ALERT'];
            $STATUS = $_POST['STATUS']; 

            $FileName = "";
            $FileType = "";
            $FileSize = "";  
          
          if ((($_FILES["file"]["type"] == "image/gif")
          || ($_FILES["file"]["type"] == "image/jpeg")
          || ($_FILES["file"]["type"] == "image/png")
          || ($_FILES["file"]["type"] == "image/jpg"))
          && ($_FILES["file"]["type"] < 500000))
          {
            if ($_FILES["file"]["error"] > 0)
            {
              $StrNotice = "Return Code: " . $_FILES["file"]["error"] . "<br />";
            }
            else
            {
            $FileType = "type: " . $_FILES["file"]["type"] . "<br />";
            $FileSize = "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
            
              if (file_exists("../catalog/" . $_FILES["file"]["name"]))
              {
              $PIN = rand(100000, 999999);
              
              move_uploaded_file($_FILES["file"]["tmp_name"],
              "../catalog/" . $PIN . $_FILES["file"]["name"]);
              $StrNotice = "File Uploaded and Renamed in: " . "../catalog/" . $PIN. $_FILES["file"]["name"];
              
              $FileName =  $PIN . $_FILES["file"]["name"];      
              }
              else
              {
              move_uploaded_file($_FILES["file"]["tmp_name"], "../catalog/" . $_FILES["file"]["name"]);
              $StrNotice = "File Uploaded in: " . "../catalog/" . $_FILES["file"]["name"];
              
              $FileName = $_FILES["file"]["name"];
              }
            }
          }
          else
          {
            $StrNotice = "This type of file is not allowed to upload.";
          }

        if ($FileName == NULL){$FileName = $_POST['PICPATH1'];}
          if ($_POST['ACTION'] == 'INSERT')
          {
            $sql="INSERT INTO em_products (HEADING, SNAME, UNIT, CATID, PRICE, PRICETRD, TS, DETAIL, PCODE, BCODE, REF, LOCATION, BC1, BC2, ALERT, STATUS, PICPATH1) VALUES ('$HEADING', '$SNAME', '$UNIT', '$CATID', '$PRICE', '$PRICETRD', '$TS', '$DETAIL', '$PCODE', '$BCODE', '$REF', '$LOCATION', '$BC1', '$BC2', '$ALERT', '$STATUS', '$FileName')";
            if ($link->query($sql) === FALSE) {echo "Error: " . $sql . $link->error;}
          } 
          else
          {
            $sql="UPDATE em_products SET HEADING = '$HEADING', SNAME = '$SNAME', UNIT = '$UNIT', CATID = '$CATID', PRICE = '$PRICE', PRICETRD = '$PRICETRD', TS = '$TS', DETAIL = '$DETAIL', PCODE = '$PCODE', BCODE = '$BCODE', REF = '$REF', LOCATION = '$LOCATION', BC1 = '$BC1', BC2 = '$BC2', ALERT='$ALERT', STATUS = '$STATUS', PICPATH1 = '$FileName' WHERE ID='$_POST[RID]'";
            if ($link->query($sql) === FALSE) {echo "Error: " . $sql . $link->error;}
          }  
          header("location: products.php"); 
        }
        //**************** edit ************
        if (isset($_GET['edit'])) 
        {
          $ACTION = "UPDATE";
          $RID = $_GET['id'];
          $result = $link->query("SELECT * FROM em_products WHERE ID='$RID' LIMIT 1");
            while($row = $result->fetch_assoc()) 
            {                 
              $HEADING = $row['HEADING']; 
              $SNAME = $row['SNAME']; 
              $UNIT = $row['UNIT']; 
              $CATID = $row['CATID']; 
              $PRICE = $row['PRICE']; 
              $PRICETRD = $row['PRICETRD']; 
              $TS = $row['TS']; 
              $DETAIL = $row['DETAIL']; 
              $PCODE = $row['PCODE']; 
              $BCODE = $row['BCODE']; 
              $REF = $row['REF']; 
              $LOCATION = $row['LOCATION'];  
              $BC1 = $row['BC1']; 
              $BC2 = $row['BC2']; 
              $ALERT = $row['ALERT'];  
              $STATUS = $row['STATUS'];
              
              $FileName = $row['PICPATH1']; 
            }
        }
        //*************** DELETION ***********
        if(isset($_GET['del']))
        {
        $DELID = $_GET['id'];
        $sql = "DELETE FROM em_products WHERE ID='$DELID'";
        if ($link->query($sql) === FALSE) {echo "Error: " . $sql . $link->error;}
          header("location: products.php");
        }

        
        ?>

        <!--Script For Filter-->
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

        <script language="javascript">
          $(document).ready(function(){
            $('.openPopup').on('click',function(){
                var dataURL = $(this).attr('data-href');
                $('.modal-body').load(dataURL,function(){
                    $('#myModal').modal({show:true});
                });
            }); 
        });

      </script>
      <script type="text/javascript" class="init">
        $(document).ready(function() {
        $('#tbl1').DataTable( {
          "pageLength": 500000,
          "ordering": false,
          dom: 'Bfrtip',
          responsive: true,
          scrollY: '500px',
          scrollCollapse: true,
          paging:         false,
          buttons: [
          'excel' 
            ]
        } );
        } );
      </script>
     <!--  <script type="text/javascript">
        const thElements = document.getElementsByTagName("th");
const tdElements = document.getElementsByTagName("td");
let width = [];
let tempResult = 0;
// calculate needed width
for (let i = 0; i < thElements.length; i++) {

  //compare actual width
  if (thElements[i].offsetWidth > tdElements[i].offsetWidth) {

    // get inner width because thats what we will set
    tempResult = window.getComputedStyle(thElements[i], null)
      .getPropertyValue("width");
    width[i] = `${tempResult.toString()}`;
  } else {

    // get inner width because thats what we will set
    tempResult = window.getComputedStyle(tdElements[i], null)
      .getPropertyValue("width");
    width[i] = `${tempResult.toString()}`;
  }
}

// set column width
for (let i = 0; i < thElements.length; i++) {
  thElements[i].style.width = width[i];
  tdElements[i].style.width = width[i];
}
      </script> -->

         
            <div class="wrkrstbl" id="wtbl">
              <div class="row">
                <div class="col-md-12">
                  <div class="table table-bordered table-responsive">
                    <table border="0" cellpadding="0" cellspacing="0" class="table table-bordered table-responsive" id="tbl1">
                      <thead style="font-size: 12px; line-height: 5px;margin-bottom: 20px;">
                        <tr>
                          <th>#</th>
                          <th>HEADING</th>                                 
                          <th>SNAME</th>                     
                          <th>UNIT</th>
                          <th>CATID</th>                   
                          <th>PCODE</th>                                               
                          <th>PRICE</th>                                               
                          <th>ALERT</th>                                             
                          <th>STATUS</th>                          
                          <th width="20">PHOTO</th>
                          <th>&nbsp;</th>                                             
                        </tr>
                      </thead>
                      <tbody id="myTable">
                        <?php
                          include("inc_conn.php");

                          $result = $link->query("SELECT * FROM em_products ORDER BY HEADING");
                          while ($row = $result->fetch_assoc()) 
                          {
                            $ID = $row['ID']; 
                            $HEADING = $row['HEADING'];                      
                            $SNAME = $row['SNAME'];                      
                            $UNIT = $row['UNIT'];                      
                            $CATID = $row['CATID'];                                
                            $PCODE = $row['PCODE'];          
                            $PRICE = $row['PRICE'];          
                            $ALERT = $row['ALERT'];       
                            $STATUS = $row['STATUS'];                           
                            $FileName = $row['PICPATH1']; 
                        ?>
                        <tr  style="font-size: 12px;">
                          <td width="5%"><?php echo $ID; ?></td>
                          <td width="20%"><?php echo $HEADING; ?></td>                  
                          <td width="20%"><?php echo $SNAME; ?></td>                    
                          <td><?php echo $UNIT;?></td>                                         
                          <td><?php echo $CATID;?></td>                                    
                          <td><?php echo $PCODE; ?></td>                                   
                          <td><?php echo $PRICE; ?></td>                                   
                          <td><?php echo $ALERT; ?></td>                            
                          <td>
                            <?php if ($STATUS == 1) {echo "Active";}else if ($STATUS == 0) {echo "Disable";}?>
                          </td>                             
                           <td align="center">
                              <?php
                                if ($FileName != null) 
                                {
                                  echo '<img src="'.$FileName.'">';  
                                }
                                else
                                {                         
                                  $FileName="";                         
                                }
                              ?>
                            </td> 
                          <td width="30%;">
                             <a href="javascript:void(0);" target="_blank" data-href="AJXProducts.php?id=<?php echo $ID; ?>" class="openPopup" title="Update" align="center"><span class="far fa-edit" style="color: green; 
                            margin-left: 10px;">&nbsp;</span></a>
                            <a href="products.php?del=yes&id=<?php echo $ID; ?>#delete" onClick='javascript:return confirm("Are you sure to delete ?")' title="Delete" align="right"><span class="fa fa-trash" style="color: red;">&nbsp;</span></a> 
                          </td>                  
                        </tr>
                        <?php
                          }
                        ?>   
                      </tbody>
                    </table>
                  </div>
              </div>      
            </div>
        </div>
      	<!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog" style="margin-left: 20%;">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" style="color: #CF3C06; font-size: 18px;">Products Management</h5>
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


	
	
	
