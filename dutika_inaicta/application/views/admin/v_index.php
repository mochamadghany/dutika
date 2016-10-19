<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?= base_url() ?>Admin/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url() ?>Admin/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="<?= base_url() ?>Admin/css/font-awesome.css" rel="stylesheet">
<link href="<?= base_url() ?>Admin/css/style.css" rel="stylesheet">
<link href="<?= base_url() ?>Admin/css/pages/dashboard.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="<?php echo base_url(); ?>admin/admin/c_index">Admin</a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i>Retnam<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="admin/javascript:;">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class="active"><a href="<?php echo base_url(); ?>admin/admin/c_index"><i class="icon-dashboard"></i><span>Index</span> </a> </li>
        <li class="dropdown"><a href="admin/javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Menu</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url(); ?>admin/">Data User</a></li>
            <li><a href="<?php echo base_url(); ?>Admin/c_tampilskl">Data Score Coin Level</a></li>
            <li><a href="<?php echo base_url(); ?>admin/">Data Penghargaan</a></li>
            <li><a href="<?php echo base_url(); ?>Admin/c_level">Data level</a></li>

          </ul>
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>

          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Table</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr align='center'>
                    <td>No</td>
                    <td>Kode</td>
                    <td>Tingkat</td>
                    <td>Kelas</td>
                    <td>Score</td>
                    <td>Keterangan</td>
                  </tr>
                    <?php 

                      if ($level=="") {
                        echo "<td> Data Kosong </td>";
                      }else{
                        $no=1;
                        foreach ($level as $q) {
                          echo "
                          <tr align='center'>
                          <td>".$no."</td>
                          <td>".$q->id_level."</td>
                          <td>".$q->tingkat."</td>
                          <td>".$q->kelas."</td>
                          <td>".$q->score."</td>
                          <td class='td-actions'>
                            <a href='".base_url()."admin/c_level/ubah/".$q->id_level."' class='btn btn-small btn-success'><i class='btn-icon-only icon-ok'> </i></a>
                            <a href='".base_url()."admin/c_level/hapus/".$q->id_level."' class='btn btn-danger btn-small'><i class='btn-icon-only icon-remove'> </i></a>
                          </td>
                          <tr>
                          ";
                          $no++;
                        }
                      }

                    ?>
                
                </tbody>
                </thead>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
         
<!-- /main -->

<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> &copy; Dutika <a href="#"></a>. </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="<?= base_url() ?>Admin/js/jquery-1.7.2.min.js"></script> 
<script src="<?= base_url() ?>Admin/js/excanvas.min.js"></script> 
<script src="<?= base_url() ?>Admin/js/chart.min.js" type="text/javascript"></script> 
<script src="<?= base_url() ?>Admin/js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="<?= base_url() ?>Admin/js/full-calendar/fullcalendar.min.js"></script>
 
<script src="<?= base_url() ?>Admin/js/base.js"></script> 
<script>     

        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    pointColor: "rgba(220,220,220,1)",
				    pointStrokeColor: "#fff",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    pointColor: "rgba(151,187,205,1)",
				    pointStrokeColor: "#fff",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }

        var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);


        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }    

        $(document).ready(function() {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var calendar = $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          selectable: true,
          selectHelper: true,
          select: function(start, end, allDay) {
            var title = prompt('Event Title:');
            if (title) {
              calendar.fullCalendar('renderEvent',
                {
                  title: title,
                  start: start,
                  end: end,
                  allDay: allDay
                },
                true // make the event "stick"
              );
            }
            calendar.fullCalendar('unselect');
          },
          editable: true,
          events: [
            {
              title: 'All Day Event',
              start: new Date(y, m, 1)
            },
            {
              title: 'Long Event',
              start: new Date(y, m, d+5),
              end: new Date(y, m, d+7)
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d-3, 16, 0),
              allDay: false
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d+4, 16, 0),
              allDay: false
            },
            {
              title: 'Meeting',
              start: new Date(y, m, d, 10, 30),
              allDay: false
            },
            {
              title: 'Lunch',
              start: new Date(y, m, d, 12, 0),
              end: new Date(y, m, d, 14, 0),
              allDay: false
            },
            {
              title: 'Birthday Party',
              start: new Date(y, m, d+1, 19, 0),
              end: new Date(y, m, d+1, 22, 30),
              allDay: false
            },
            {
              title: 'EGrappler.com',
              start: new Date(y, m, 28),
              end: new Date(y, m, 29),
              url: 'http://EGrappler.com/'
            }
          ]
        });
      });
    </script><!-- /Calendar -->
</body>
</html>
