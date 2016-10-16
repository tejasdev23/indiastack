<!doctype html>
<html lang="en">
<head>
<style type="text/css">
    #dash
    {
        display: none;
    }
    .parties
    {

    }

</style>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Vote</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Government Of India
                </a>
            </div>

            <ul class="nav">
               
                    <li class="active">

                    <a href="home.html">
                        <i class="pe-7s-graph"></i>
                        <p>Vote</p>
                    </a>
                </li>

               
                
              
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret"></b>
                                    <span class="notification">5</span>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               Account
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Dropdown
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="#">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
               <div class="row" style="text-align:center;">

               <img src="assets/img/india.jpg"  style="height:400px;width:80%;"$/>
               </div>
<br>
<br>
               <div class="row" style="text-align:center;">
                                 <div class="col-md-3 col-sm-12">
                                 <img src="assets/img/bjplogo.png" style="width:200px;"/>
                                 <br>
                                 <button class="btn" name="party" id="bjp" class="parties" value="BJP"style="width:200px;height:75px;background-color:grey;color:white;border-radius:30px;font-size:23px;"> BJP</button>
                                 </div>
                                 <div class="col-md-3 col-sm-12" >
                                  <img class="img-circle" src="assets/img/congresslogo.jpeg" style="width:200px;"/>
                                  <br>
                                    <button class="btn"  name="party" id="congress" value="CONGRESS" class="parties" style="width:200px;height:75px;background-color:grey;color:white;border-radius:30px;font-size:23px;"> Congress</button>
                                 </div>
                                  <div class="col-md-3 col-sm-12" >
                                  <img class="img-circle"  src="assets/img/shivsenalogo.jpg" style="width:190px;height:180px;"/>
                                  <br>
                                  <br>
                                    <button class="btn"   name="party" id="shivsena" value="SHIVSENA" class="parties" style="width:190px;height:75px;background-color:grey;color:white;border-radius:30px;font-size:23px;"> Shiv Sena</button>
                                 </div>
                                   <div class="col-md-3 col-sm-12" style="position:relative;top:30px;" >
                                  <img  src="assets/img/mnslogo.jpg" style="width:200px;height:150px"/>
                                  <br>
                                  <br>
                                    <button class="btn"  name="party" value="MNS" id="mns" class="parties" style="width:200px;height:75px;background-color:grey;color:white;border-radius:30px;font-size:23px;"> MNS</button>
                                 </div>

                                 </div>
                                 <div class="row" style="text-align:center;position:relative;top:10px;" >

                                    <button class="btn"   name="vote" id="vote" value="vote"  style="background-color:purple;width:190px;height:75px;color:white;border-radius:30px;font-size:23px;"> VOTE</button>
                                 </div>
















                                </div>

                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
              
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
	
	

	
    <script type="text/javascript">
         var globalarray = [];
         var arrLinks =[];
         arrLinks = JSON.parse(window.localStorage.getItem("globalarray"));
		 var json1 = JSON.stringify(arrLinks[0]);
		 var aadhar = Object[0];
		 //localStorage.setItem("globalarray", JSON.stringify(arrLinks));
		 var dob = arrLinks[0].kyc.poi.dob;
		 var aadharid = arrLinks[0]["aadhaar-id"];
		 console.log(dob);
		 console.log(aadharid);
        console.log(arrLinks);
		//console.log(json1);
		var currenttime =new Date();
		var cyear = currenttime.getFullYear();
		console.log(currenttime.getFullYear());
		var pyear =dob.slice(6,10);
		console.log(dob.slice(6,10));
		var age = cyear - pyear;
		
		
		
		
		
		
  
var urlString = "age="+age+"&aadharid="+aadharid;
  

  $.ajax
  ({
  url: "getjsondata.php",
  type : "POST",
  cache : false,
  data : urlString,
  success: function(response)
  {
 // alert(response);
  }
  });
	
    var flag=0;

    $(function()
    {var x;
	
        $('button[name=party]').on('click',function()
        {	
		x=this.value;
            console.log(this);
            $('button[name=party]').css({'background-color':'red'});
			console.log(this.value);
            $(this).css({'background-color':'green'})
        });
		
		$('#vote').on('click', function ()
		{	
			if(age>=18)
			{		var id="id="+aadharid;
					
					$.ajax
					({
						url: "checkstatus.php",
						type : "POST",
						cache : false,
						data : id,
						success: function(response)
						{
						if(response==1)
						{
							window.location="dashboard.php";
						}
						console.log(response);
						}
					});
					
				
				var ans=confirm("Are you sure");
				if(ans==1)
				{   
					$('#dash').toggle();
					console.log(x);
					//window.location="dashboard.html";
					var url="partyname=" +x+"&aadhaar="+aadharid;
					$.ajax
					({
					url: "incrementvotes.php",
					type : "POST",
					cache : false,
					data : url,
					success: function(response)
					{
					//alert(response);
					window.location="dashboard.php";
					}
					});
					
				}
			
			else 
			{
			alert("Sorry! You Are Not Eligible To Vote");
			}
		   }	
		}


	);
	
});


</script> 


</html>
