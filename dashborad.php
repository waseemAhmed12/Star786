<?php 
session_start();
if(isset($_SESSION['SESSIONUID']) && ($_SESSION['SESSIONUNAME'])){	
	   $USERIDX=$_SESSION['SESSIONUID'];
 require "topmain_header.php";		
?>


<section>
	<script src="js/jscolor.js" ></script>	
</section>

	
	
<?php
	error_reporting(0);
	if(isset($_GET['NEW'])){
		$new='<div id="showamain" class="alert alert-success alert-dismissible nuti"><button id="click" type="button" class="close bg-dark" data-dismiss="alert"><span id="xxx">&times;</span></button>
	<div id="maindiv">
		<strong> <img src="images/'.$UDBIMX.'" class="profile2 text-center" style="margin-top: -22px;" >
			 WelCome <b>'.$UDBNX.' </b>  </strong>.<br>
	        <span class="sowart">Discover Why You Might Want to Move Business Intelligence to the Cloud.
            Business Analytics · Mobile Analytics · Self-Service BI · Big Data Analytics · Cloud Analytics
            Services: Explore Data in Real-Time, Lightening-Fast</span>
		
	</div>	
</div>';
		
		$sest='<div id="showaleft" class="alert alert-success alert-dismissible nuti"><button id="click" type="button" class="close bg-dark" data-dismiss="alert"><span id="xxx">&times;</span></button>
	<div id="maindiv">
		<strong class="ml-0"><img src="icons/icons8-administrative-tools-48.png" class="ul-icon"><b> Administrative Tool </b></strong>.
	        <br><span class="sowart">Here you can change  the theme of the software. like a top nav ,left side bar and main right side bar.</span>
	</div>	
</div>';
	}
	
	?>	

	

 




   	
<div class="col-sm-12 main-top-body"><!----------------main-------body-----of----dashborad-------->

	
<div>
<?php echo($new); ?>
<?php echo($sest); ?>
</div>
			
<section>
<div class="row">
   	<div class="col-sm-6"><h5 class="top_second_link">My Home Page</h5></div>
   		<div class="col-sm-6">
   			<ul class="breadcrumb" id="list-br">
				<li class="breadcrumb-item"><a href="#">MMK-TECH</a></li>
				<li class="breadcrumb-item"><a href="#">DASHBORAD</a></li>
			</ul>
   		</div>				
</div>
	<hr id="hr-dash">
</section>
   		
   		
   		
   	<div class="row">
   			<div class="col-sm-3 mt-2">
   				<div class="card testimonial" id="main-dashborad-sat">
   					<div class="text-center p-3">
					  <img class="card-img-top img-fluid" src="icons/icons8-training-48.png" alt="Card image">
					 </div>
					  <div class="card-body p-2">
						<h4 class="card-title">Projects <span class="float-right">3</span></h4>
					  </div>
					</div>
   			</div>
   				<div class="col-sm-3 mt-2">
   					<div class="card testimonial" id="main-dashborad-sat">
   					<div class="text-center p-3">
					  <img class="card-img-top img-fluid" src="icons/icons8-user-group-48.png" alt="Card image">
					 </div>
					  <div class="card-body p-2">
						<h4 class="card-title">Friends <span class="float-right">34</span></h4>
					  </div>
					</div>
   				</div>
   				<div class="col-sm-3 mt-2">
   					<div class="card testimonial" id="main-dashborad-sat">
   					<div class="text-center p-3">
					  <img class="card-img-top img-fluid" src="icons/icons8-photo-gallery-48.png" alt="Card image">
					 </div>
					  <div class="card-body p-2">
						<h4 class="card-title"> Photos <span class="float-right">103</span></h4>
					  </div>
					</div>
   				</div>
   				<div class="col-sm-3 mt-2">
   					<div class="card testimonial" id="main-dashborad-sat">
   					<div class="text-center p-3">
					  <img class="card-img-top img-fluid" src="icons/icons8-open-envelope-48.png" alt="Card image">
					 </div>
					  <div class="card-body p-2">
						<h4 class="card-title">Messages <span class="float-right">123</span></h4>
					  </div>
					</div>
   				</div>
   			</div>	<!--card---row  end----------------->
   		
	
	
<section>
<div class="row mt-3">
   	<div class="col-sm-6"><h5 class="top_second_link">My Home Page</h5></div>
   		<div class="col-sm-6">
   			<ul class="breadcrumb" id="list-br">
				<li class="breadcrumb-item"><a href="#">MMK-TECH</a></li>
				<li class="breadcrumb-item"><a href="#">DASHBORAD</a></li>
			</ul>
   		</div>				
</div>
	<hr id="hr-dash">
</section>
   			<div class="row mt-2"><!----------------slider----div----->
   			<div class="col-sm-8 mt-2">
   				<div class="card p-2 info-left" id="slider-img">
   					<!---------------slider----------------------------------->
   					<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<div id="chartdiv"></div>																

   					<!---------------slider---<div id="mapholder"></div>-------------------------------->
   				</div>
   			</div>
   			<div class="col-sm-4  mt-2">
   				<div class="card testimonial" id="slider-img">
   					<script src="https://www.amcharts.com/lib/3/ammap.js"></script>
<script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<div id="chartdiv3"></div>													
   					
				</div>
   			</div>
				
			<div class="col-sm-12 mt-2">
   				<div class="card testimonial" id="slider-img">
   				<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/pie.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<div id="chartdiv1"></div>														
   					
				</div>
   			</div>
   				
   			</div><!----------------slider----div----->	
   			
   						
    	
	
	

    				

<script>
var chart = AmCharts.makeChart("chartdiv", {
    "type": "serial",
    "theme": "light",
    "legend": {
        "equalWidths": false,
        "useGraphSettings": true,
        "valueAlign": "left",
        "valueWidth": 120
    },
    "dataProvider": [{
        "date": "2012-01-01",
        "distance": 227,
        "townName": "New York",
        "townName2": "New York",
        "townSize": 25,
        "latitude": 40.71,
        "duration": 408
    }, {
        "date": "2012-01-02",
        "distance": 371,
        "townName": "Washington",
        "townSize": 14,
        "latitude": 38.89,
        "duration": 482
    }, {
        "date": "2012-01-03",
        "distance": 433,
        "townName": "Wilmington",
        "townSize": 6,
        "latitude": 34.22,
        "duration": 562
    }, {
        "date": "2012-01-04",
        "distance": 345,
        "townName": "Jacksonville",
        "townSize": 7,
        "latitude": 30.35,
        "duration": 379
    }, {
        "date": "2012-01-05",
        "distance": 480,
        "townName": "Miami",
        "townName2": "Miami",
        "townSize": 10,
        "latitude": 25.83,
        "duration": 501
    }, {
        "date": "2012-01-06",
        "distance": 386,
        "townName": "Tallahassee",
        "townSize": 7,
        "latitude": 30.46,
        "duration": 443
    }, {
        "date": "2012-01-07",
        "distance": 348,
        "townName": "New Orleans",
        "townSize": 10,
        "latitude": 29.94,
        "duration": 405
    }, {
        "date": "2012-01-08",
        "distance": 238,
        "townName": "Houston",
        "townName2": "Houston",
        "townSize": 16,
        "latitude": 29.76,
        "duration": 309
    }, {
        "date": "2012-01-09",
        "distance": 218,
        "townName": "Dalas",
        "townSize": 17,
        "latitude": 32.8,
        "duration": 287
    }, {
        "date": "2012-01-10",
        "distance": 349,
        "townName": "Oklahoma City",
        "townSize": 11,
        "latitude": 35.49,
        "duration": 485
    }, {
        "date": "2012-01-11",
        "distance": 603,
        "townName": "Kansas City",
        "townSize": 10,
        "latitude": 39.1,
        "duration": 890
    }, {
        "date": "2012-01-12",
        "distance": 534,
        "townName": "Denver",
        "townName2": "Denver",
        "townSize": 18,
        "latitude": 39.74,
        "duration": 810
    }, {
        "date": "2012-01-13",
        "townName": "Salt Lake City",
        "townSize": 12,
        "distance": 425,
        "duration": 670,
        "latitude": 40.75,
        "dashLength": 8,
        "alpha": 0.4
    }, {
        "date": "2012-01-14",
        "latitude": 36.1,
        "duration": 470,
        "townName": "Las Vegas",
        "townName2": "Las Vegas"
    }, {
        "date": "2012-01-15"
    }, {
        "date": "2012-01-16"
    }, {
        "date": "2012-01-17"
    }, {
        "date": "2012-01-18"
    }, {
        "date": "2012-01-19"
    }],
    "valueAxes": [{
        "id": "distanceAxis",
        "axisAlpha": 0,
        "gridAlpha": 0,
        "position": "left",
        "title": "distance"
    }, {
        "id": "latitudeAxis",
        "axisAlpha": 0,
        "gridAlpha": 0,
        "labelsEnabled": false,
        "position": "right"
    }, {
        "id": "durationAxis",
        "duration": "mm",
        "durationUnits": {
            "hh": "h ",
            "mm": "min"
        },
        "axisAlpha": 0,
        "gridAlpha": 0,
        "inside": true,
        "position": "right",
        "title": "duration"
    }],
    "graphs": [{
        "alphaField": "alpha",
        "balloonText": "[[value]] miles",
        "dashLengthField": "dashLength",
        "fillAlphas": 0.7,
        "legendPeriodValueText": "total: [[value.sum]] mi",
        "legendValueText": "[[value]] mi",
        "title": "distance",
        "type": "column",
        "valueField": "distance",
        "valueAxis": "distanceAxis"
    }, {
        "balloonText": "latitude:[[value]]",
        "bullet": "round",
        "bulletBorderAlpha": 1,
        "useLineColorForBulletBorder": true,
        "bulletColor": "#FFFFFF",
        "bulletSizeField": "townSize",
        "dashLengthField": "dashLength",
        "descriptionField": "townName",
        "labelPosition": "right",
        "labelText": "[[townName2]]",
        "legendValueText": "[[value]]/[[description]]",
        "title": "latitude/city",
        "fillAlphas": 0,
        "valueField": "latitude",
        "valueAxis": "latitudeAxis"
    }, {
        "bullet": "square",
        "bulletBorderAlpha": 1,
        "bulletBorderThickness": 1,
        "dashLengthField": "dashLength",
        "legendValueText": "[[value]]",
        "title": "duration",
        "fillAlphas": 0,
        "valueField": "duration",
        "valueAxis": "durationAxis"
    }],
    "chartCursor": {
        "categoryBalloonDateFormat": "DD",
        "cursorAlpha": 0.1,
        "cursorColor":"#000000",
         "fullWidth":true,
        "valueBalloonsEnabled": false,
        "zoomable": false
    },
    "dataDateFormat": "YYYY-MM-DD",
    "categoryField": "date",
    "categoryAxis": {
        "dateFormats": [{
            "period": "DD",
            "format": "DD"
        }, {
            "period": "WW",
            "format": "MMM DD"
        }, {
            "period": "MM",
            "format": "MMM"
        }, {
            "period": "YYYY",
            "format": "YYYY"
        }],
        "parseDates": true,
        "autoGridCount": false,
        "axisColor": "#555555",
        "gridAlpha": 0.1,
        "gridColor": "#FFFFFF",
        "gridCount": 50
    },
    "export": {
    	"enabled": true
     }
});	
	
	
</script>
     
<script>
var chart = AmCharts.makeChart("chartdiv1", {
  "type": "pie",
  "startDuration": 0,
   "theme": "light",
  "addClassNames": true,
  "legend":{
   	"position":"right",
    "marginRight":100,
    "autoMargins":false
  },
  "innerRadius": "30%",
  "defs": {
    "filter": [{
      "id": "shadow",
      "width": "200%",
      "height": "200%",
      "feOffset": {
        "result": "offOut",
        "in": "SourceAlpha",
        "dx": 0,
        "dy": 0
      },
      "feGaussianBlur": {
        "result": "blurOut",
        "in": "offOut",
        "stdDeviation": 5
      },
      "feBlend": {
        "in": "SourceGraphic",
        "in2": "blurOut",
        "mode": "normal"
      }
    }]
  },
  "dataProvider": [{
    "country": "Lithuania",
    "litres": 501.9
  }, {
    "country": "Czech Republic",
    "litres": 301.9
  }, {
    "country": "Ireland",
    "litres": 201.1
  }, {
    "country": "Germany",
    "litres": 165.8
  }, {
    "country": "Australia",
    "litres": 139.9
  }, {
    "country": "Austria",
    "litres": 128.3
  }, {
    "country": "UK",
    "litres": 99
  }, {
    "country": "Belgium",
    "litres": 60
  }, {
    "country": "The Netherlands",
    "litres": 50
  }],
  "valueField": "litres",
  "titleField": "country",
  "export": {
    "enabled": true
  }
});

chart.addListener("init", handleInit);

chart.addListener("rollOverSlice", function(e) {
  handleRollOver(e);
});

function handleInit(){
  chart.legend.addListener("rollOverItem", handleRollOver);
}

function handleRollOver(e){
  var wedge = e.dataItem.wedge.node;
  wedge.parentNode.appendChild(wedge);
}	
</script>	
	
<script>
	var map = AmCharts.makeChart( "chartdiv3", {

  "type": "map",
  "theme": "light",
  "projection": "miller",

  "dataProvider": {
    "map": "worldLow",
    "getAreasFromMap": true
  },
  "areasSettings": {
    "autoZoom": true,
    "selectedColor": "#CC0000"
  },
  "smallMap": {},
  "export": {
    "enabled": true,
    "position": "bottom-right"
  }
} );
</script>	
    			
 


<?php require "botmain_footer.php"; ?>

<?php
}else{
	header("location:index.php?err=2");
}


?>