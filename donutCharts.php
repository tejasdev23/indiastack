
<html>
  <head>
	<?php 
	include_once './connect.php';
	$conn = mysqli_connect($servername, $username, $password,$db);
	 $result = mysqli_query($conn,"select partyName,sum(counter) as Total from partydetails group by partyName");
	 $data = array();
	 $data1 = array();
	 if($result)
	 {
		 while ($row = mysqli_fetch_assoc($result))
		{
		 $data[] = $row;
		}
		
	 }
	 //$fruits = array('apple', 'orange', 'mango', 'banana', 'strawberry');
		echo "var origins = " . json_encode($data);
		
	?>
  
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);

	  var origins = <?php echo json_encode($data) ?>;
	  console.log(origins);
	  //var f=origins[1]["Total"];
	  function drawChart() {
		  
		  var dataArray = [['PartyName', 'Votes']];
		  
		  for(var i=0;i<origins.length;i++){
			  
			  dataArray.push([origins[i]["partyName"], origins[i]["Total"]/1])
		  }
		  
		  var data = google.visualization.arrayToDataTable(dataArray);
        /*var data = google.visualization.arrayToDataTable([
		
		  ['sad', 'Hours per Day'],
			
          [origins[0]["partyName"], origins[1]["Total"]/1],
		  [origins[1]["partyName"],origins[1]["Total"]/1 ]
          
          
        ]);*/

        var options = {
          title: 'Voting in 2016 election',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 900px; height: 500px;"></div>
	
	
  </body>
</html>