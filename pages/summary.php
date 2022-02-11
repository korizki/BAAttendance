<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summary Attendance</title>
	  <link rel="icon" href="../assets/images/logo.png">
    <link rel="stylesheet" href="../assets/styles/index.css" />
    <link rel="stylesheet" href="../assets/styles/responsive.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="assets/scripts/script.js"></script>
</head>
<body>
    <?php
      //Menghubungkan ke database localhost  
      include "../code/connection.php";
      //Menggabungkan file model.php ke summary.php   
      include "../code/model.php";
      // Pagination Jumlah Operator PIT-2
      // $limit = 10;
      // $sql = "SELECT COUNT(DISTINCT ID_PEKERJA, DATE_ABSEN, STATUS, SHIFT, T_PEKERJA.NAMA, T_PEKERJA.JABATAN) FROM T_FINGER INNER JOIN T_PEKERJA ON T_FINGER.ID_PEKERJA = T_PEKERJA.ID WHERE  T_FINGER.SHIFT = '$shift' AND T_FINGER.STATUS = 0 AND T_FINGER.DATE_ABSEN = '$date' AND (T_PEKERJA.JABATAN = 'BELAZ PIT 2' OR T_PEKERJA.JABATAN = 'SHOVEL PIT 2' OR T_PEKERJA.JABATAN = 'GRADER PIT 2' OR T_PEKERJA.JABATAN = 'DOZER PIT 2' OR T_PEKERJA.JABATAN = 'PEMANDU BELAZ PIT 2' OR T_PEKERJA.JABATAN = 'PEMANDU SHOVEL PIT 2' OR T_PEKERJA.JABATAN = 'FOREMAN LAPANGAN PIT 2')";  
      // $rs_result = mysqli_query($connect, $sql);  
      // $row = mysqli_fetch_row($rs_result);  
      // $total_records = $row[0];  
      // $total_pages = ceil($total_records / $limit); 
    ?>
    <header class="page_title">
      <div style="display: flex; justify-content: space-between;">
        <h1>Attendance Summary</h1>
        <div class="s_left_menu ">
          <a href="../index.php" style="color: var(--grey) !important"><i class="fa fa-lg fa-home" title="Home Page"></i></a>
        </div>
      </div>
    </header>

    <content>
      <div class="wrapper s_date_info">
        <div class="box_date_info">
          <p>Atten. Date : <?php echo date("j F Y", strtotime($date1)). "  -  ".date("j F Y", strtotime($date2))." | Shift ".$shift ?></p>
          <p class="labelEdit" style="font-weight: 300; font-size: 1em;"><a href="#editDate" onClick = "showEditDate()" style="color: inherit"><i class="fa fa-edit"></i>Edit Date and Shift</a></p>
        </div>
        <div id="#editDate" class="nav-data box_edit_date">
					<form action="summary.php" method="get">
            <label for="date1">Start Date</label>
						<input type="date" name="date1" id="date1" value="<?php echo $date1?>">
            <label for="date1">End Date</label>
						<input type="date" name="date2" id="date2" value="<?php echo $date2?>">
            <label for="shift">Shift</label>
						<select id="shift" name="shift">
							<option value="1" <?php if($shift == 1){echo "selected";} ?>>Shift 1</option>
							<option value="2" <?php if($shift == 2){echo "selected";} ?>>Shift 2</option>
              <option value="All" <?php if($shift == 'All'){echo "selected";} ?>>All</option>
						</select>
						<input type="submit" name="submit" value="Show Data">
					</form>
          
				</div>
      </div>
    
    </content>
    
    <!-- Summary Attendance -->
    <content id="mainSummary">
      <div class="s_boxLocation">
        <div class="wrapper">
          <h1><i class="fa fa-map-marked-alt"></i>PIT 2 - Banko Barat <a href="#graphSummary" title="Chart Mode" class="smallbtn" ><i class="fa fa-chart-line"></i></a></h1>
          <table>
            <thead>
              <tr>
                <th>Man Power Type</th>
                <th>Realize</th>
                <th>Plan</th>
              </tr>
            </thead>
            <tbody>
              <tr >
                <td><i class="fa fa-truck-monster"></i>Operator Belaz</td>
                <td <?php echo ($r_opt_belaz_2 < $opt_belaz_2) ? "class='bgred'" : ""?>><?php echo $r_opt_belaz_2?></td>
                <td><?php echo $opt_belaz_2?></td>
              </tr>
              <tr >
                <td><i class="fa fa-truck-loading"></i>Operator Shovel</td>
                <td <?php echo ($r_opt_shovel_2 < $opt_shovel_2) ? "class='bgred'" : ""?>><?php echo $r_opt_shovel_2?></td>
                <td><?php echo $opt_shovel_2?></td>
              </tr>
              <tr >
                <td><i class="fa fa-crown"></i>Foreman / GL</td>
                <td <?php echo ($r_opt_FM_2 < $opt_FM_2) ? "class='bgred'" : ""?>><?php echo $r_opt_FM_2?></td>
                <td><?php echo $opt_FM_2?></td>
              </tr>
              <tr >
                <td><i class="fa fa-street-view"></i>Pemandu Belaz</td>
                <td <?php echo ($r_opt_PMB_2 < $opt_PMB_2) ? "class='bgred'" : ""?>><?php echo $r_opt_PMB_2?></td>
                <td><?php echo $opt_PMB_2?></td>
              </tr>
              <tr >
                <td><i class="fa fa-user-cog"></i>Pemandu Shovel</td>
                <td <?php echo ($r_opt_PMS_2 < $opt_PMS_2) ? "class='bgred'" : ""?>><?php echo $r_opt_PMS_2?></td>
                <td><?php echo $opt_PMS_2?></td>
              </tr>
              <tr>
                <td><i class="fa fa-road"></i>Operator Gradder</td>
                <td  <?php echo ($r_opt_GD_2 < $opt_GD_2) ? "class='bgred'" : ""?>><?php echo $r_opt_GD_2?></td>
                <td><?php echo $opt_GD_2?></td>
              </tr>
              <tr >
                <td><i class="fa fa-snowplow"></i>Operator Dozer </td>
                <td <?php echo ($r_opt_DZ_2 < $opt_DZ_2) ? "class='bgred'" : ""?>><?php echo $r_opt_DZ_2?></td>
                <td><?php echo $opt_DZ_2?></td>
              </tr>
            </tbody>
          </table>
          <div class="btnDetail">
            <form action= "newDetail2.php" method="get" target="_blank" style="display: none">
              <input type="date" name="date12" id="date12" value="<?php echo $date1 ?>">
              <input type="date" name="date22" id="date22" value="<?php echo $date2 ?>">
              <select id="shift" name="shift2" value="<?php echo $shift ?>">
                <option value="1" <?php if($shift == 1){echo "selected";} ?>>Shift 1</option>
                <option value="2" <?php if($shift == 2){echo "selected";} ?>>Shift 2</option>
                <option value="All" <?php if($shift == 'All'){echo "selected";} ?>>All</option>
						  </select>
              <input type="submit" id="submit2" name="submit2" value="Submit" >
            </form>
            <a href="#" id="btndetail2"><i class="fa fa-info"></i> Attendance Detail </a>
          </div>
        </div>
        <div class="wrapper">
          <h1><i class="fa fa-map-marked-alt"></i>PIT 3 - Banko Barat <a href="#graphSummary2" title="Chart Mode" class="smallbtn"><i class="fa fa-chart-line"></i></a></h1>
          <table>
            <thead>
              <tr>
                <th>Man Power Type</th>
                <th>Realize</th>
                <th>Plan</th>
              </tr>
            </thead>
            <tbody>
              <tr >
                <td><i class="fa fa-truck-monster"></i>Operator Belaz</td>
                <td <?php echo ($r_opt_belaz_3 < $opt_belaz_3) ? "class='bgred'" : ""?>><?php echo $r_opt_belaz_3?></td>
                <td><?php echo $opt_belaz_3?></td>
              </tr>
              <tr >
                <td><i class="fa fa-truck-loading"></i>Operator Shovel</td>
                <td <?php echo ($r_opt_shovel_3 < $opt_shovel_3) ? "class='bgred'" : ""?>><?php echo $r_opt_shovel_3?></td>
                <td><?php echo $opt_shovel_3?></td>
              </tr>
              <tr >
                <td><i class="fa fa-crown"></i>Foreman / GL</td>
                <td <?php echo ($r_opt_FM_3 < $opt_FM_3) ? "class='bgred'" : ""?>><?php echo $r_opt_FM_3?></td>
                <td><?php echo $opt_FM_3?></td>
              </tr>
              <tr >
                <td><i class="fa fa-street-view"></i>Pemandu Belaz</td>
                <td <?php echo ($r_opt_PMB_3 < $opt_PMB_3) ? "class='bgred'" : ""?>><?php echo $r_opt_PMB_3?></td>
                <td><?php echo $opt_PMB_3?></td>
              </tr>
              <tr >
                <td><i class="fa fa-user-cog"></i>Pemandu Shovel</td>
                <td <?php echo ($r_opt_PMS_3 < $opt_PMS_3) ? "class='bgred'" : ""?>><?php echo $r_opt_PMS_3?></td>
                <td><?php echo $opt_PMS_3?></td>
              </tr>
              <tr >
                <td><i class="fa fa-road"></i>Operator Gradder</td>
                <td <?php echo ($r_opt_GD_3 < $opt_GD_3) ? "class='bgred'" : ""?>><?php echo $r_opt_GD_3?></td>
                <td><?php echo $opt_GD_3?></td>
              </tr>
              <tr >
                <td><i class="fa fa-snowplow"></i>Operator Dozer </td>
                <td <?php echo ($r_opt_DZ_3 < $opt_DZ_3) ? "class='bgred'" : ""?>><?php echo $r_opt_DZ_3?></td>
                <td><?php echo $opt_DZ_3?></td>
              </tr>
            </tbody>
          </table>
          <div class="btnDetail">
            <form action= "newDetail3.php" method="get" target="_blank" style="display: none">
              <input type="date" name="date13" id="date13" value="<?php echo $date1 ?>">
              <input type="date" name="date23" id="date23" value="<?php echo $date2 ?>">
              <select id="shift" name="shift3" value="<?php echo $shift ?>">
                <option value="1" <?php if($shift == 1){echo "selected";} ?>>Shift 1</option>
                <option value="2" <?php if($shift == 2){echo "selected";} ?>>Shift 2</option>
                <option value="All" <?php if($shift == 'All'){echo "selected";} ?>>All</option>
						  </select>
              <input type="submit" id="submit3" name="submit3" value="Submit" >
            </form>
            <a href="#" id="btndetail3"><i class="fa fa-info"></i> Attendance Detail </a>
          </div>
        </div>
      </div>
    </content>

    <!-- Grafik  -->
    <div id="graphSummary" style="padding-block-start: 20px;">
      <div class="wrapper">
        <h2>PIT-2 | Plan and Realize Graph </h2>  
        <canvas id='myChart'></canvas>
      </div>
    </div>

    <div id="graphSummary2">
      <div class="wrapper" style="margin-top: 85px; margin-bottom: 100px;">
        <h2>PIT-3 | Plan and Realize Graph </h2>
        <canvas id='myChart2'></canvas>
      </div>
    </div>
    <!-- Script for Graph -->
    <script><?php require_once('../assets/scripts/Chart.min.js'); ?></script>
    <script>
      const ctx = document.getElementById('myChart').getContext('2d');
      const myChart = new Chart(ctx, {
          type: 'bar',
          data: {
              labels: ['Opt. Belaz PIT-2', 'Opt. Shovel PIT-2', 'Foreman PIT-2', 'Opt. Grader PIT-2', 'Opt. Dozer PIT-2','Pem. Belaz PIT-2', 'Pem. Shovel PIT-2'],
              datasets: [
                {
                  label: 'Realize',
                  data: [
                    <?php echo $r_opt_belaz_2; ?>,
                      <?php echo $r_opt_shovel_2; ?>,
                      <?php echo $r_opt_FM_2; ?>,
                      <?php echo $r_opt_GD_2; ?>,
                      <?php echo $r_opt_DZ_2; ?>,
                      <?php echo $r_opt_PMB_2; ?>,
                      <?php echo $r_opt_PMS_2; ?>,
                  ],
                  fill: true,
                  borderJoinStyle: "round",
                  borderColor: [
                    'rgba(19, 153, 226, 0.892)',
                    'rgba(19, 153, 226, 0.892)',
                    'rgba(19, 153, 226, 0.892)',
                    'rgba(19, 153, 226, 0.892)',
                    'rgba(19, 153, 226, 0.892)',
                    'rgba(19, 153, 226, 0.892)',
                    'rgba(19, 153, 226, 0.892)',
                  ],
                  backgroundColor: [
                    'rgba(19, 153, 226, 0.4)',
                    'rgba(19, 153, 226, 0.4)',
                    'rgba(19, 153, 226, 0.4)',
                    'rgba(19, 153, 226, 0.4)',
                    'rgba(19, 153, 226, 0.4)',
                    'rgba(19, 153, 226, 0.4)',
                    'rgba(19, 153, 226, 0.4)',
                  ],
                  tension: 0.4,
                  borderWidth: 1,
              },
              {
                  label: 'Plan',
                  data: [
                      <?php echo $opt_belaz_2 ?>,
                      <?php echo $opt_shovel_2 ?>,
                      <?php echo $opt_FM_2 ?>,
                      <?php echo $opt_GD_2 ?>,
                      <?php echo $opt_DZ_2 ?>,
                      <?php echo $opt_PMB_2 ?>,
                      <?php echo $opt_PMS_2 ?>,
                  ],
                  fill: true,
                  borderJoinStyle: "round",
                  borderColor: [
                    'rgba(78, 245, 45, 0.898)',
                    'rgba(78, 245, 45, 0.898)',
                    'rgba(78, 245, 45, 0.898)',
                    'rgba(78, 245, 45, 0.898)',
                    'rgba(78, 245, 45, 0.898)',
                    'rgba(78, 245, 45, 0.898)',
                    'rgba(78, 245, 45, 0.898)',
                  ],
                  backgroundColor: [
                    'rgba(78, 245, 45, 0.4)',
                    'rgba(78, 245, 45, 0.4)',
                    'rgba(78, 245, 45, 0.4)',
                    'rgba(78, 245, 45, 0.4)',
                    'rgba(78, 245, 45, 0.4)',
                    'rgba(78, 245, 45, 0.4)',
                    'rgba(78, 245, 45, 0.4)',
                  ],
                  tension: 0.4,
                  borderWidth: 1
              },
            ]
          },
          options: {
              maintainAspectRatio: false,
              responsive: true,
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero: true
                      }
                  }]
              }
          }
      })
  </script>
  <script>
      const ctx2 = document.getElementById('myChart2').getContext('2d');
      const myChart2 = new Chart(ctx2, {
          type: 'bar',
          data: {
              labels: ['Opt. Belaz PIT-3', 'Opt. Shovel PIT-3', 'Foreman PIT-3', 'Opt. Grader PIT-3', 'Opt. Dozer PIT-3','Pem. Belaz PIT-3', 'Pem. Shovel PIT-3'],
              datasets: [
                {
                  label: 'Realize',
                  data: [
                      <?php echo $r_opt_belaz_3 ?>,
                      <?php echo $r_opt_shovel_3; ?>,
                      <?php echo $r_opt_FM_3; ?>,
                      <?php echo $r_opt_GD_3; ?>,
                      <?php echo $r_opt_DZ_3; ?>,
                      <?php echo $r_opt_PMB_3; ?>,
                      <?php echo $r_opt_PMS_3; ?>,
                  ],
                  fill: false,
                  borderJoinStyle: "round",
                  borderColor: [
                    'rgba(19, 153, 226, 0.892)',
                    'rgba(19, 153, 226, 0.892)',
                    'rgba(19, 153, 226, 0.892)',
                    'rgba(19, 153, 226, 0.892)',
                    'rgba(19, 153, 226, 0.892)',
                    'rgba(19, 153, 226, 0.892)',
                    'rgba(19, 153, 226, 0.892)',
                  ],
                  backgroundColor: [
                    'rgba(19, 153, 226, 0.4)',
                    'rgba(19, 153, 226, 0.4)',
                    'rgba(19, 153, 226, 0.4)',
                    'rgba(19, 153, 226, 0.4)',
                    'rgba(19, 153, 226, 0.4)',
                    'rgba(19, 153, 226, 0.4)',
                    'rgba(19, 153, 226, 0.4)',
                  ],
                  tension: 0.1,
                  borderWidth: 1
              },
              {
                  label: 'Plan',
                  data: [
                      <?php echo $opt_belaz_3 ?>,
                      <?php echo $opt_shovel_3 ?>,
                      <?php echo $opt_FM_3 ?>,
                      <?php echo $opt_GD_3 ?>,
                      <?php echo $opt_DZ_3 ?>,
                      <?php echo $opt_PMB_3 ?>,
                      <?php echo $opt_PMS_3 ?>,
                  ],
                  fill: false,
                  borderJoinStyle: "round",
                  borderColor: [
                    'rgba(78, 245, 45, 0.898)',
                    'rgba(78, 245, 45, 0.898)',
                    'rgba(78, 245, 45, 0.898)',
                    'rgba(78, 245, 45, 0.898)',
                    'rgba(78, 245, 45, 0.898)',
                    'rgba(78, 245, 45, 0.898)',
                    'rgba(78, 245, 45, 0.898)',
                  ],
                  backgroundColor: [
                    'rgba(78, 245, 45, 0.4)',
                    'rgba(78, 245, 45, 0.4)',
                    'rgba(78, 245, 45, 0.4)',
                    'rgba(78, 245, 45, 0.4)',
                    'rgba(78, 245, 45, 0.4)',
                    'rgba(78, 245, 45, 0.4)',
                    'rgba(78, 245, 45, 0.4)',
                  ],
                  tension: 0.1,
                  borderWidth: 1
              },
            ]
          },
          options: {
              maintainAspectRatio: false,
              responsive: true,
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero: true
                      }
                  }]
              }
          }
      })
  </script>
  <script defer src="../assets/scripts/script.js"></script>
</body>
</html>
