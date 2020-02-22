<?php

session_start();
if(!isset($_SESSION['username'])){
  header('location:../index.php');
  exit();
}


$user = 'root';
$password = 'password'; //To be completed if you have set a password to root
$database = 'mockboardff'; //To be completed to connect to a database. The database must exist.
$port = NULL; //Default must be NULL to use default port
$mysqli = new mysqli('localhost', $user, $password, $database, $port);


if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}

$email = $_SESSION['username'];
$s = "select * from login where email ='$email'";
$result = mysqli_query($mysqli, $s);
$row = mysqli_fetch_array($result);
$roll = $row['roll'];

$s1 = "select * from mainten where roll ='$roll'";
$result1 = mysqli_query($mysqli, $s1);
$row1 = mysqli_fetch_array($result1);
$name = $row1['name'];
$father = $row1['father'];
$dob = $row1['dob'];
$school = $row1['school'];
$total = $row1['total'];
$result22 = $row1['result'];
$percent = $row1['percent'];
$rank = $row1['rank'];
$s2 = "select * from overall10";
$result2 = mysqli_query($mysqli, $s2);
$row2 = mysqli_fetch_array($result2);
$toppercent = $row2['toppercent'];
$lowpercent = $row2['lowpercent'];
$avgpercent = $row2['avgpercent'];
?>

<html>

<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="style1.css" rel="stylesheet">
<link href="style2.css" rel="stylesheet">
   <link href="style.css" rel="stylesheet">

</head>

<body>
    <section class="vbox">
        <header class="bg-dark dk header navbar navbar-fixed-top-xs">
            <div class="navbar-header aside-md">
              <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user"><i class="fa fa-cog" style="position: absolute; right: -100%; top: 9px; z-index: -0; "></i></a>

                <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html"><i class="fa fa-bars"></i></a>
        <a href=""  data-toggle="fullscreen"><img src="../images/mockboard-logo-01.png" height="40px" style="margin-top: 5px; margin-bottom: 5px;"></a>


            </div>

            <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             <?php echo $_SESSION['username'];?> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight"> <span class="arrow top"></span>


                        <li> <a href="../logout.php" >Logout</a> </li>
                    </ul>
                </li>
            </ul>
        </header>

        <section>
            <section class="hbox stretch"> <!-- .aside -->
                <aside class="bg-dark lter aside-md hidden-print" id="nav">
                    <section class="vbox">

                        <section class="w-f scrollable">
                            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
                                <!-- nav -->
                                <nav class="nav-primary hidden-xs">
                                    <ul class="nav">
                                        <li > <a href="home.php" class="active"> <i class="fa fa-building-o"> <b class="bg-info"></b> </i> <span>Home</span> </a> </li>


<li class="active"> <a href="result.php" > <i class="fa fa-pencil icon"><b class="bg-info"></b> </i> <span>Results</span> </a> </li>

                                </ul>
                            </nav> <!-- / nav -->
                        </div>
                    </section>

                        <footer class="footer lt hidden-xs b-t b-dark"> <div id="chat" class="dropup"> <section class="dropdown-menu on aside-md m-l-n"> <section class="panel bg-white"> <header class="panel-heading b-b b-light">Active chats</header> <div class="panel-body animated fadeInRight"> <p class="text-sm">No active chats.</p> <p><a href="#" class="btn btn-sm btn-default">Start a chat</a></p> </div> </section> </section> </div> <div id="invite" class="dropup">
                            <section class="dropdown-menu on aside-md m-l-n"> <section class="panel bg-white"> <header class="panel-heading b-b b-light"> John <i class="fa fa-circle text-success"></i> </header> <div class="panel-body animated fadeInRight"> <p class="text-sm">No contacts in your lists.</p> <p><a href="#" class="btn btn-sm btn-facebook"><i class="fa fa-fw fa-facebook"></i> Invite from Facebook</a></p> </div> </section> </section> </div> <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon"> <i class="fa fa-angle-left text"></i> <i class="fa fa-angle-right text-active"></i> </a>
                            <div class="btn-group hidden-nav-xs"></div> </footer> </section> </aside> <!-- /.aside --> <section id="content"> <section class="vbox">







                                <section class="scrollable padder">





                                    <center>
                                    <h5 id="welcomemessage">MOCKBOARD PRIME</h5>
                                    <h1 id="welcomemessage1">RESULT</h1>
                                  </center>


<br><br><br><br>

                                  <div class="container">
                                    <center>
                                      <h3 id="welcomemessage1">PERSONAL DETAILS</h3>
                                  	<table id="table1">
                                  		<thead>
                                        <tr>



                                        </tr>
                                  		</thead>
                                  		<tbody>
                                  			<tr>
                                  				<td>Roll Number</td>
                                  				<td><?php echo $roll;?></td>
                                  			</tr>
                                  			<tr>
                                  				<td>Name</td>
                                  				<td><?php echo $name;?></td>

                                  			</tr>
                                  			<tr>
                                  				<td>Father's Name</td>
                                  				<td><?php echo $father;?></td>

                                  			</tr>
                                  			<tr>
                                  				<td>Date Of Birth</td>
                                  				<td><?php echo $dob;?></td>

                                  			</tr>
                                  			<tr>
                                  				<td>School</td>
                                  				<td><?php echo $school;?></td>


                                  			</tr>
                                  		</tbody>
                                  	</table>

                                  </center>
                                  </div>




  <br><br><br><br>

                                                                        <div class="container">
                                                                          <center>
                                                                        <h3 id="welcomemessage1">OVERALL RESULT</h3>
                                                                        <br>
                                                                      </center>

<div class="row">
  <div class="col-sm-6">
    <center>
      <table id="table2">
    		<thead>
          <tr>



          </tr>
    		</thead>
    		<tbody>

    			<tr>
    				<td>Total</td>
    				<td><?php echo $total;?></td>
    			</tr>
    			<tr>
    				<td>Percentage</td>
    				<td><?php echo $percent;?>%</td>

    			</tr>
    			<tr>
    				<td>Result</td>
    				<td><?php echo $result22;?></td>

    			</tr>
    			<tr>
    				<td>Rank (Intra School)</td>
    				<td><?php echo $rank;?></td>

    			</tr>

    		</tbody>
    	</table>
      <br><br>
    </center>
</div>


                                                                    <div class="col-sm-6">

                                                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                                        <script type="text/javascript">
                                                          google.charts.load("current", {packages:['corechart']});
                                                          google.charts.setOnLoadCallback(drawChart);
                                                          function drawChart() {
                                                            var data = google.visualization.arrayToDataTable([
                                                              ["Element", "Percentage", { role: "style" } ],
                                                              ["Topper Percentage", <?php echo $toppercent;?>, "#E397FE"],
                                                              ["Your Percentage", <?php echo $percent;?>, "#FF6565"],
                                                              ["Average Percentage", <?php echo $avgpercent;?>, "#FEFB5E"],
                                                              ["Lowest Percentage", <?php echo $lowpercent;?>, "color: #97F0FC"]
                                                            ]);

                                                            var view = new google.visualization.DataView(data);
                                                            view.setColumns([0, 1,
                                                                             { calc: "stringify",
                                                                               sourceColumn: 1,
                                                                               type: "string",
                                                                               role: "annotation" },
                                                                             2]);

                                                            var options = {

                                                              width: 450,
                                                              height: 300,
                                                              bar: {groupWidth: "95%"},
                                                              legend: { position: "none" },
                                                            };
                                                            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
                                                            chart.draw(view, options);
                                                        }
                                                        </script>
                                                        <center>
                                                        <div id="columnchart_values" style="padding: 0; margin: 0;"></div>

                                                        </center>

                                                      </div>

                                                    </div>

</div>








<br><br><br><br><br>

    <div class="container">
      <center>
        <h3 id="welcomemessage1">SUBJECT WISE ANALYSIS</h3>
        <br>
    	<table id="table3">
    		<thead>
          <tr>
            <th>Subject</th>
            <th>Max. Marks</th>
            <th>Highest Marks</th>
            <th>Your Marks</th>
            <th>Average Marks</th>
            <th>Lowest</th>
            <th>Rank</th>



          </tr>
    		</thead>
    		<tbody>

          <?php



          $user = 'root';
          $password = 'password'; //To be completed if you have set a password to root
          $database = 'mockboardff'; //To be completed to connect to a database. The database must exist.
          $port = NULL; //Default must be NULL to use default port
          $mysqli = new mysqli('localhost', $user, $password, $database, $port);


          if ($mysqli->connect_error) {
              die('Connect Error (' . $mysqli->connect_errno . ') '
                      .$mysqli->connect_error);
          }

              $query = "select * from subject10";

          if ($result = $mysqli->query($query)) {
              /* fetch associative array */
              while ($row = $result->fetch_assoc()) {
                  $subject = $row["subject"];
                  $max = $row["max"];
                  $highest = $row["highest"];
                  $avg = $row["avg"];
                  $lowest = $row["lowest"];
                  if($subject!="Social Science")
                  {
                  $subjects = $subject."10";
                }
                else{
                  $subjects = "socialscience10";
                }


                  $query1 = "select * from mainten where roll = '$roll'";
                  $query2 = "select * from ".$subjects." where roll = '$roll'";
                  $result1 = mysqli_query($mysqli, $query1);
                  $result11 = mysqli_query($mysqli, $query2);
                  $row123 = mysqli_fetch_array($result1);
                  $row124 = mysqli_fetch_array($result11);
                  $your= $row123[$subject];
                  $subjectrank= $row124['subjectrank'];
                  echo "<tr>";
                  echo "<td>".$subject."</td>";
                  echo "<td>".$max."</td>";
                  echo "<td>".$highest."</td>";
                  echo "<td>".$your."</td>";
                  echo "<td>".$avg."</td>";
                  echo "<td>".$lowest."</td>";
                  echo "<td>".$subjectrank."</td>";
                  echo "</tr>";
              }

              /* free result set */
              $result->free();
          }
           ?>


    		</tbody>
    	</table>

    </center>
    </div>




    <br><br><br><br>

<div class="container">
<center>

<br>


  <?php



  $user = 'root';
  $password = 'password'; //To be completed if you have set a password to root
  $database = 'mockboardff'; //To be completed to connect to a database. The database must exist.
  $port = NULL; //Default must be NULL to use default port
  $mysqli = new mysqli('localhost', $user, $password, $database, $port);


  if ($mysqli->connect_error) {
      die('Connect Error (' . $mysqli->connect_errno . ') '
              .$mysqli->connect_error);
  }

  $query = "select * from subject10";

if ($result = $mysqli->query($query)) {
  /* fetch associative array */
  while ($row = $result->fetch_assoc()) {


      $subject = $row["subject"];

      echo "<h3 id='welcomemessage1'>".$subject."</h3><br><br><br>";

      echo"<div class='row'>";
      echo "<div class='col-sm-6'>";

      $query90 = "select * from subject10 where subject = '$subject'";

      $query89 = "select * from mainten where roll = '$roll'";
      $result90 = mysqli_query($mysqli, $query90);
      $result89 = mysqli_query($mysqli, $query89);
      $row90 = mysqli_fetch_array($result90);
      $row89 = mysqli_fetch_array($result89);
      $highest = $row90["highest"];
      $max = $row90["max"];
      $avg = $row90["avg"];

      $your= $row89[$subject];
      if($subject!="Social Science")
      {
      $subjects = $subject."10";
    }
    else{
      $subjects = "socialscience10";
    }
$query2 = "select * from ".$subjects." where roll = '$roll'";

$result11 = mysqli_query($mysqli, $query2);

$row124 = mysqli_fetch_array($result11);

$subjectrank= $row124['subjectrank'];


      echo '  <center>  	<table id="table8">

          		<tbody>

          			<tr>
          				<td>Subject</td>
          				<td>'.$subject.'</td>
          			</tr>
          			<tr>
          				<td>Maximum Marks</td>
          				<td>'.$max.'</td>

          			</tr>
          			<tr>
          				<td>Highest Marks</td>
          				<td>'.$highest.'</td>

          			</tr>
          			<tr>
          				<td>Your Marks</td>
          				<td>'.$your.'</td>

          			</tr>
                <tr>
          				<td>Average Marks</td>
          				<td>'.$avg.'</td>

          			</tr>
                <tr>
          				<td>Rank</td>
          				<td>'.$subjectrank.'</td>

          			</tr>
          		</tbody>
          	</table> </center>';








      echo "</div>";



      echo "<div class='col-sm-6'>";




      $query67 = "select * from subject10 where subject = '$subject'";

      $query78 = "select * from mainten where roll = '$roll'";
      $result67 = mysqli_query($mysqli, $query67);
      $result78 = mysqli_query($mysqli, $query78);
      $row67 = mysqli_fetch_array($result67);
      $row78 = mysqli_fetch_array($result78);
      $highest = $row67["highest"];
      $avg = $row67["avg"];
      $lowest = $row67["lowest"];
      $your= $row78[$subject];





      echo '<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ["Element", "Marks", { role: "style" } ],
            ["Highest", '.$highest.', "#E397FE"],
            ["Your Marks",'.$your.', "#FF6565"],
            ["Lowest", '.$lowest.', "#FEFB5E"],
            ["Average", '.$avg.', "color: #97F0FC"]
          ]);

          var view = new google.visualization.DataView(data);
          view.setColumns([0, 1,
                           { calc: "stringify",
                             sourceColumn: 1,
                             type: "string",
                             role: "annotation" },
                           2]);

          var options = {

            width: 500,
            height: 300,
            bar: {groupWidth: "95%"},
            legend: { position: "none" },
          };
          var chart = new google.visualization.ColumnChart(document.getElementById("'.$subject.'x'.'"));
          chart.draw(view, options);
      }
      </script>

      <div id="'.$subject.'x'.'" ></div>';







echo "<br><br>";




















      echo "</div></div>";










            if($subject!="Social Science")
            {
            $subject1234 = $subject."c10";
          }
          else{
            $subject1234 = "socialsciencec10";
          }


          echo "<table id='table5'>
          <thead>
            <tr>
              <th>Chapter</th>
              <th>Total Marks</th>
              <th>Your Marks</th>
              <th>Highest Marks</th>
              <th>Median Marks</th>
              <th>Average Marks</th>

            </tr>
          </thead>
          <tbody>";


          $query45 = "select * from ".$subject1234;

      if ($result1234 = $mysqli->query($query45)) {
          /* fetch associative array */
          while ($row1234 = $result1234->fetch_assoc()) {
              $chapter = $row1234["chapter"];
              $max = $row1234["total"];
              $highest = $row1234["highest"];
              $avg = $row1234["avg"];
              $lowest = $row1234["lowest"];
              if($subject!="Social Science")
              {
              $subject12345 = $subject."cm10";
            }
            else{
              $subject12345 = "socialsciencecm10";
            }
            $query1 = "select * from ".$subject12345." where roll = '$roll'";
      $result1 = mysqli_query($mysqli, $query1);
      $row123 = mysqli_fetch_array($result1);
      $your= $row123[$chapter];

              echo "<tr>";
              echo "<td>".$chapter."</td>";
              echo "<td>".$max."</td>";
              echo "<td>".$your."</td>";
              echo "<td>".$highest."</td>";
              echo "<td>".$lowest."</td>";
              echo "<td>".$avg."</td>";
              echo "</tr>";
          }


      }


          echo "</tr>";
          echo "</tbody>
          </table>";

          echo"<div class='row'>";

          echo "<div class='col-sm-5'>";


    echo "<br><br>";



    $query127 = "select * from subject10 where subject = '$subject'";
  $result127 = mysqli_query($mysqli, $query127);
    $row127 = mysqli_fetch_array($result127);
    $aboveaverageper = $row127['aboveaverage'];
    $averageper = $row127['average'];
    $belowaverageper = $row127['belowaverage'];
        echo '<div id="'.$subject.'"></div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
    // Load google charts
    google.charts.load("current", {"packages":["corechart"]});
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
      ["Task", "Hours per Day"],
      ["Above Average", '.$aboveaverageper.'],
      ["Average", '.$averageper.'],
      ["Below Average", '.$belowaverageper.'],

    ]);

      // Optional; add a title and set the width and height of the chart
      var options = {"title":"Subject Analysis","width":450, "height":300};

      // Display the chart inside the <div> element with id="piechart"
      var chart = new google.visualization.PieChart(document.getElementById("'.$subject.'"));
      chart.draw(data, options);
    }
    </script>';


    echo "<br><br>";


  echo "</div>";


    echo "<div class='col-sm-7'><br><br>";

    echo "<table id='table9'>";
  echo "  <thead>
      <tr>
        <th>Above Average</th>
        <th>Average</th>
        <th>Below Average</th>


      </tr>
    </thead>";
          echo "<tr>";

          echo "<td>";
    $query45 = "select * from ".$subject1234;
    ${$subject."aboveaverage"} = [];
if ($result1234 = $mysqli->query($query45)) {
    /* fetch associative array */
    while ($row1234 = $result1234->fetch_assoc()) {
        $chapter = $row1234["chapter"];

        $avg = $row1234["avg"];

        if($subject!="Social Science")
        {
        $subject12345 = $subject."cm10";
      }
      else{
        $subject12345 = "socialsciencecm10";
      }
      $query1 = "select * from ".$subject12345." where roll = '$roll'";
$result1 = mysqli_query($mysqli, $query1);
$row123 = mysqli_fetch_array($result1);
$your= $row123[$chapter];

        if($your>=(1.2*$avg))
        {
        echo $chapter."<br><br>";
        ${$subject."aboveaverage"}[] = $chapter.".pdf";

        }

    }


}
$_SESSION[$subject."aboveaverage"] = ${$subject."aboveaverage"};

//echo "<a href='create.php?id=".$subject."aboveaverage'>Download Study Material</a>";

echo "</td>";




echo "<td>";
$query45 = "select * from ".$subject1234;
${$subject."average"} = [];
if ($result1234 = $mysqli->query($query45)) {
/* fetch associative array */
while ($row1234 = $result1234->fetch_assoc()) {
$chapter = $row1234["chapter"];

$avg = $row1234["avg"];

if($subject!="Social Science")
{
$subject12345 = $subject."cm10";
}
else{
$subject12345 = "socialsciencecm10";
}
$query1 = "select * from ".$subject12345." where roll = '$roll'";
$result1 = mysqli_query($mysqli, $query1);
$row123 = mysqli_fetch_array($result1);
$your= $row123[$chapter];

$x = 0.8*$avg;

$xx = 1.2*$avg;
if($your>$x && $your<$xx)
{
echo $chapter."<br><br>";
${$subject."average"}[] = $chapter.".pdf";
}

}


}

$_SESSION[$subject."average"] = ${$subject."average"};
//echo "<a href='create.php?id=".$subject."average'>Download Study Material</a>";

echo "</td>";

echo "<td>";
$query45 = "select * from ".$subject1234;
${$subject."belowaverage"} = [];
if ($result1234 = $mysqli->query($query45)) {
/* fetch associative array */
while ($row1234 = $result1234->fetch_assoc()) {
$chapter = $row1234["chapter"];

$avg = $row1234["avg"];

if($subject!="Social Science")
{
$subject12345 = $subject."cm10";
}
else{
$subject12345 = "socialsciencecm10";
}
$query1 = "select * from ".$subject12345." where roll = '$roll'";
$result1 = mysqli_query($mysqli, $query1);
$row123 = mysqli_fetch_array($result1);
$your= $row123[$chapter];

if($your<(0.8*$avg))
{
echo $chapter."<br><br>";
${$subject."belowaverage"}[] = $chapter.".pdf";
}

}


}

$_SESSION[$subject."belowaverage"] = ${$subject."belowaverage"};
//echo "<a href='create.php?id=".$subject."belowaverage'>Download Study Material</a>";
echo "</td>";
echo "</tr>";

echo"</table><br><br>";






          echo "</div></div>";







    echo "<div class='row'>";
        echo "<div class='col-sm-1'></div>";
          echo "<div class='col-sm-10'>";

          if($subject!="Social Science")
          {
          $subject123 = $subject."10";
        }
        else{
          $subject123 = "socialscience10";
        }
          $query123 = "select * from ".$subject123." where roll = '$roll'";
          $result123 = mysqli_query($mysqli,$query123);
          $row1245 = mysqli_fetch_array($result123);

          echo "<table id='table6'>
          <thead>
            <tr>
              <th>Question Number</th>

              <th>Maximum Marks</th>
              <th>Highest Marks</th>
              <th>Your Marks</th>

              <th>Average Marks</th>




            </tr>
          </thead>
          <tbody>";
          /* fetch associative array */
          $x=1;
          while ($row1245[$x]!=NULL) {

            if($subject!="Social Science")
            {
            $subject1236 = $subject."ct10";
          }
          else{
            $subject1236 = "socialsciencect10";
          }
          $query1236 = "select * from ".$subject1236." where question = '$x'";
          $result1236 = mysqli_query($mysqli,$query1236);
          $row1236 = mysqli_fetch_array($result1236);
          $max=$row1236['max'];
          $high=$row1236['highest'];
          $avgq=$row1236['avg'];
          if($max!= NULL)
          {
              echo "<tr>";
              echo "<td>".$x."</td>";
              echo "<td>".$max."</td>";
              echo "<td>".$high."</td>";
              echo "<td>".$row1245[$x]."</td>";
              echo "<td>".$avgq."</td>";
              echo "</tr>";
            }
              $x++;
          }

          echo "</tbody>
          </table><br><br> ";

          echo "</div>";


echo "</div>";
echo "<br><br><br><br>";

    }

    /* free result set */
    $result->free();
}

   ?>




<a title="Print Screen" alt="Print Screen" onclick="window.print();" target="_blank" style="cursor:pointer;">PRINT RESULT</a>
<br><br><br>
</center>
</div>

                            </div>
                        </section>
                    </section>
                    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
                </section>
                <aside class="bg-light lter b-l aside-md hide" id="notes">
                    <div class="wrapper">Notification</div>
                </aside>
            </section>
        </section>
    </section> <!-- Bootstrap --> <!-- App -->


	<script src="script.js"></script>

</body>

</html>
