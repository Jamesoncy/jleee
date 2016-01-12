<?php
require_once("include/auth.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta charset="utf-8">
<head>

  <head>
    <meta charset="utf-8">
    <title>
      Blue Moon - Responsive Admin Dashboard
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
    </script>
    <link href="../admintemp/icomoon/style.css" rel="stylesheet">
    <!--[if lte IE 7]>
    <script src="css/icomoon-font/lte-ie7.js">
    </script>
    <![endif]-->
  <link href="../admintemp/css2/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet">
  <link href="../admintemp/css2/wysiwyg/wysiwyg-color.css" rel="stylesheet">
  <link href="../admintemp/css2/main.css" rel="stylesheet"> <!-- Important. For Theming change primary-color variable in main.css  -->
  <link href="../admintemp/css2/charts-graphs.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <a href="#" class="logo">
        <img src="../www/img1/logo.png" alt="logo" />
      </a>
      <div class="btn-group">
        <button class="btn btn-primary">
           <?php echo $_SESSION['fname'];?>&nbsp;<?php echo $_SESSION['lname'];?>
        </button>
        <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">
          <span class="caret">
          </span>
        </button>
        <ul class="dropdown-menu pull-right">
          <li>
            <a href="#">
              Edit Profile
            </a>
          </li>
          <li>
            <a href="#">
              Account Settings
            </a>
          </li>
          <li>
            <a href="../admintemp/logout.php">
              Logout
            </a>
          </li>
        </ul>
      </div>
      
      
    </header>
    <div class="container-fluid">
      <div class="dashboard-container">
        <div class="top-nav">
          <ul>
            <li><a href="../admintemp/admin_index.php" class="heading">Dashboard</a></li>
            <li>
              <a href="../admintemp/editaccount.php">
                Edit Account
              </a>
            </li>


<li>
<span class="info-label badge badge-info">
              <?php
include("../admintemp/include/dbconnection.php");
$result = mysql_query("SELECT * FROM message WHERE status='unread' ORDER BY date DESC");
$rows = mysql_numrows($result);	
echo '<font size="2" color="black"><b>' . $rows. '</b></font>';
?>
            </span>
            <a href="../admintemp/viewmessage2.php">Message/s</a>	</li>



<li>
<span class="info-label badge badge-info">
<?php
include("../admintemp/include/dbconnection.php");

$result = mysql_query("SELECT * FROM comment WHERE status='unpost' ORDER BY date DESC");
$rows = mysql_numrows($result);	
echo '<font size="2" color="black"><b>' . $rows. '</b></font>';
?>
</span>
<a href="../admintemp/unreadcomment.php">Comment/s</a> 
</li>

<li>
<span class="info-label badge badge-info">
<?php
include("../admintemp/include/dbconnection.php");
$result = mysql_query("SELECT * FROM reserve WHERE Rstatus='Temporarily Reserved' ORDER BY date ASC");
$rows = mysql_numrows($result);	
echo '<font size="2" color="black"><b>' . $rows. '</b></font>';
?>
</span>
<a href="../admintemp/pendingreservation.php">Pending Reservation</a></li>

<li>
              <a href="../admintemp/confirmed.php">
               Confirmed Reservation
              </a>
            </li>

<li>
              <a href="../admintemp/customers.php">
                Clients
              </a>
            </li>
</ul>

          <div class="btn-group pull-right">
            <button class="btn btn-primary">
              Main Menu
            </button>
            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">
              <span class="caret">
              </span>
            </button>
            <ul class="dropdown-menu pull-right">
              <li>
  <a href="../admintemp/admin_index.php" class="selected">
  <div class="fs1" aria-hidden="true" data-icon="&#xe000;"></div> Home
  </a>
  </li>
  
  <li>
  <a href="../admintemp/subdivision.php">
  <div class="fs1" aria-hidden="true" data-icon="&#xe021;"></div>
  Subdivision
  </a>
  </li>	
  
  <li>
  <a href="../admintemp/lot.php">
  <div class="fs1" aria-hidden="true" data-icon="&#xe05a;"></div>
  Lot
  </a>
  </li>
  
  <li>
  <a href="../admintemp/house.php">
  <div class="fs1" aria-hidden="true" data-icon="&#xe001;"></div>
  House
  </a>
  </li>
  
  <li>
  <a href="../admintemp/reports.php">
  <div class="fs1" aria-hidden="true" data-icon="&#xe02c;"></div>
  Reports
  </a>
  </li>  			
  
  <li>
  <a href="../admintemp/events.php">
  <div class="fs1" aria-hidden="true" data-icon="&#xe01d;"></div>
  Events
  </a>
  </li>
            </ul>
          </div>
        </div>
        <div class="dashboard-wrapper">
          
        
                  
                
            
          </div>
        </div>
      </div>
      <!--/.fluid-container-->
    </div>
    <footer>
    </footer>
    
    <script src="../admintemp/js/wysiwyg/wysihtml5-0.3.0.js">
    </script>
    <script src="../admintemp/js/jquery.min.js">
    </script>
    <script src="../admintemp/js/bootstrap.js">
    </script>
    <script src="../admintemp/js/wysiwyg/bootstrap-wysihtml5.js">
    </script>
    <script src="../admintemp/js/jquery.scrollUp.js">
    </script>
    
    
    <!-- Google Visualization JS -->
    <script type="text/javascript" src="https://www.google.com/jsapi">
    </script>
    
    <!-- Easy Pie Chart JS -->
    <script src="../admintemp/js/jquery.easy-pie-chart.js">
    </script>
    
    <!-- Sparkline JS -->
    <script src="../admintemp/js/jquery.sparkline.js">
    </script>
    
    <!-- Tiny Scrollbar JS -->
    <script src="../admintemp/js/tiny-scrollbar.js">
    </script>
    
    
    
    <script type="text/javascript">
      //ScrollUp
      $(function () {
        $.scrollUp({
          scrollName: 'scrollUp', // Element ID
          topDistance: '300', // Distance from top before showing element (px)
          topSpeed: 300, // Speed back to top (ms)
          animation: 'fade', // Fade, slide, none
          animationInSpeed: 400, // Animation in speed (ms)
          animationOutSpeed: 400, // Animation out speed (ms)
          scrollText: 'Scroll to top', // Text for element
          activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        });
      });

      //Google Visualiations
      google.load("visualization", "1", {
        packages: ["corechart"]
      });
      google.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Week', 'Visitors', 'Orders'],
          ['Sun', 9709, 761],
          ['Mon', 1367, 8631],
          ['Tue', 6792, 971],
          ['Wed', 1267, 7491],
          ['Thu', 9539, 1792],
          ['Fri', 670, 9367],
          ['Sat', 9761, 709]
        ]);

        var options = {
          width: 'auto',
          height: '160',
          backgroundColor: 'transparent',
          colors: ['#ed6d49', '#0daed3'],
          tooltip: {
            textStyle: {
              color: '#666666',
              fontSize: 11
            },
            showColorCode: true
          },
          legend: {
            textStyle: {
              color: 'black',
              fontSize: 12
            }
          },
          chartArea: {
            left: 100,
            top: 10
          },
          focusTarget: 'category',
          hAxis: {
            textStyle: {
              color: 'black',
              fontSize: 12
            }
          },
          vAxis: {
            textStyle: {
              color: 'black',
              fontSize: 12
            }
          },
          pointSize: 6,
          chartArea: {
            left: 60,
            top: 10,
            height: '80%'
          },
          lineWidth: 1,
        };

        var chart = new google.visualization.LineChart(document.getElementById('area_chart'));
        chart.draw(data, options);
      }


      //Tooltip
      $('a').tooltip('hide');
      $('i').tooltip('hide');


      //Tiny Scrollbar
      $('#scrollbar').tinyscrollbar();
      $('#scrollbar-one').tinyscrollbar();
      $('#scrollbar-two').tinyscrollbar();
      $('#scrollbar-three').tinyscrollbar();



      //Tabs
      $('#myTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
      })

      // SparkLine Graphs-Charts
      $(function () {
        $('#unique-visitors').sparkline('html', {
          type: 'bar',
          barColor: '#ed6d49',
          barWidth: 6,
          height: 30,
        });
        $('#monthly-sales').sparkline('html', {
          type: 'bar',
          barColor: '#74b749',
          barWidth: 6,
          height: 30,
        });
        $('#current-balance').sparkline('html', {
          type: 'bar',
          barColor: '#ffb400',
          barWidth: 6,
          height: 30,
        });
        $('#registrations').sparkline('html', {
          type: 'bar',
          barColor: '#0daed3',
          barWidth: 6,
          height: 30,
        });
        $('#site-visits').sparkline('html', {
          type: 'bar',
          barColor: '#f63131',
          barWidth: 6,
          height: 30,
        });
      });

      //wysihtml5
      $('#wysiwyg').wysihtml5();
    </script>
    
    
  </body>
</html>