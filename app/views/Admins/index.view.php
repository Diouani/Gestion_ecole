<?php


if (isset($_SESSION['admin'])) { ?>

  <?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="container-scroller">

    <?php require APPROOT . '/views/inc/navbar.php'; ?>

    <div class="container-fluid page-body-wrapper">

      <?php require APPROOT . '/views/inc/sidebar.php'; ?>









      <div class="main-panel">
        <div class="content-wrapper">

          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">

                  <div class="mr-md-3 mr-xl-5">
                    <h2>Welcome back, <?php echo $_SESSION['admin']->admin_username  ?></h2>

                  </div>
                  <div class="d-flex">
                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                    <p class="text-primary mb-0 hover-cursor">Analytics</p>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs p-0">
                  <ul class="nav nav-tabs px-4" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>

                  </ul>
                  <div class="tab-content py-0 px-0">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">

                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="fa fa-user-graduate fa-2x text-primary mr-3" aria-hidden="true"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Students</small>
                            <h5 class="mr-2 mb-0"><?php echo $data['students'] ?></h5>
                          </div>
                        </div>


                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="fa fa-user-tie fa-2x text-primary mr-3" aria-hidden="true"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Parents</small>
                            <h5 class="mr-2 mb-0"><?php echo $data['parents'] ?></h5>
                          </div>
                        </div>

                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="fa fa-chalkboard-teacher fa-2x text-primary mr-3" aria-hidden="true"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Teachers</small>
                            <h5 class="mr-2 mb-0"><?php echo $data['teachers'] ?></h5>
                          </div>
                        </div>



                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">

                <canvas id="total-sales-chart"></canvas>
              </div>
            </div>

          </div>


          <div class="row">



            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">étudiants par genre</p>

                  <div class="container mt-4">
                    <div id="piechart_3d" style="width: 650px; height: 500px;"></div>
                  </div>

                </div>
              </div>
            </div>


            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">étudiants par classe</p>

                  <div id="chart_div"></div>
                  <br />
                </div>
              </div>
            </div>
          </div>

        </div>

        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Diouani Corp</span>
          </div>
        </footer>

      </div>

    </div>

  </div>

  <script src="vendors/base/vendor.bundle.base.js"></script>

  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>

  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>

  <script src="js/dashboard.js"></script>
  <script src="js/data-table.js"></script>
  <script src="js/jquery.dataTables.js"></script>
  <script src="js/dataTables.bootstrap4.js"></script>

  <script src="js/jquery.cookie.js" type="text/javascript"></script>


  <script type="text/javascript">
    google.charts.load("current", {
      packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Genre', "Nombre d'étudiant"],
        ['Hommes', <?php echo $data['gender_student']; ?>],
        ['Femmes', <?php echo $data['students'] - $data['gender_student']; ?>]
      ]);

      var options = {
        title: '',
        is3D: true,
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
      chart.draw(data, options);
    }
  </script>


  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['bar']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Classes', "Nombre d'étudiant"],
        ['Namek', <?php echo $data["class_students"]["class1"] ?>],
        ['Daily Coders', <?php echo $data["class_students"]["class2"] ?>],
        ['Classe 1', <?php echo $data["class_students"]["class3"] ?>],

      ]);

      var options = {

        bars: 'vertical',
        vAxis: {
          format: 'decimal'
        },
        height: 400,
        colors: ['#1b9e77', '#d95f02', '#7570b3']
      };

      var chart = new google.charts.Bar(document.getElementById('chart_div'));

      chart.draw(data, google.charts.Bar.convertOptions(options));

      var btns = document.getElementById('btn-group');

      btns.onclick = function(e) {

        if (e.target.tagName === 'BUTTON') {
          options.vAxis.format = e.target.id === 'none' ? '' : e.target.id;
          chart.draw(data, google.charts.Bar.convertOptions(options));
        }
      }
    }
  </script>



  </body>

  </html>
<?php } else {

  redirect('admins/login');
} ?>