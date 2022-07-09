<?php 
    include "../code/processSummary.php"; 
    $startdate = $_GET['startdate'];
    $enddate = $_GET['enddate'];
    $shift = $_GET['shift'];
?>

<main class="searchContent">
    <h1>Summary</h1>
    <div class="sumbox min">
        <div class="headerr">
            <h2>Area PIT 2</h2>
            <a href="?page=details&startdate=<?php echo $startdate?>&enddate=<?php echo $enddate ?>&shift=<?php echo $shift ?>&pit=2"><i class="fi fi-rr-info adjust"></i> Detail Attendance</a>
        </div>
        <div class="pitcontent">
            <h3>Attendance Summary</h3>
            <div id="listdata"></div>
            <details style="max-height: 300px">
                <summary title="Show Graph"><h3>Show Graph Plan and Realize</h3> <span class="inf">click to display graph</span></summary>
                <div class="graphbo">
                    <canvas style="max-height: 300px" id="myChart"></canvas> 
                </div>
            </details>
        </div>
    </div>
    <div class="sumbox min">
    <div class="headerr">
            <h2>Area PIT 3</h2>
            <a href="?page=details&startdate=<?php echo $startdate?>&enddate=<?php echo $enddate ?>&shift=<?php echo $shift ?>&pit=3"><i class="fi fi-rr-info adjust"></i> Detail Attendance</a>
        </div>
        <div class="pitcontent">
            <h3>Attendance Summary</h3>
            <div id="listdata2"></div>
            <details style="max-height: 300px">
                <summary title="Show Graph"><h3>Show Graph Plan and Realize</h3> <span class="inf">click to display graph</span></summary>
                <div class="graphbo">
                    <canvas style="max-height: 300px" id="myChart2"></canvas> 
                </div>
            </details>
        </div>
    </div>
</main>
<script><?php require_once('../assets/scripts/Chart.min.js'); ?></script>
<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Opt. Shovel', 'Opt. Belaz', 'Pemd. Shovel', 'Pemd. Belaz', 'Opt. Grader','Opt. Dozer', 'Foreman/GL'],
            datasets: [
                {
                label: 'Realize',
                data: [
                    <?php echo $realshovel2 ?>,<?php echo $realbelaz2 ?>,<?php echo $realpshovel2 ?>,<?php echo $realpbelaz2 ?>,<?php echo $realgrader2 ?>,<?php echo $realdozer2 ?>,<?php echo $realforeman2 ?>
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
                    <?php echo $planshovel2 ?>,<?php echo $planbelaz2 ?>,<?php echo $planpshovel2 ?>,<?php echo $planpbelaz2 ?>,<?php echo $plangrader2 ?>,<?php echo $plandozer2 ?>,<?php echo $planforeman2 ?>
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
    // pit 3
    const ctx2 = document.getElementById('myChart2').getContext('2d');
    const myChart2 = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['Opt. Shovel', 'Opt. Belaz', 'Pemd. Shovel', 'Pemd. Belaz', 'Opt. Grader','Opt. Dozer', 'Foreman/GL'],
            datasets: [
                {
                label: 'Realize',
                data: [
                    <?php echo $realshovel3 ?>,<?php echo $realbelaz3 ?>,<?php echo $realpshovel3 ?>,<?php echo $realpbelaz3 ?>,<?php echo $realgrader3 ?>,<?php echo $realdozer3 ?>,<?php echo $realforeman3 ?>
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
                    <?php echo $planshovel3 ?>,<?php echo $planbelaz3 ?>,<?php echo $planpshovel3 ?>,<?php echo $planpbelaz3 ?>,<?php echo $plangrader3 ?>,<?php echo $plandozer3 ?>,<?php echo $planforeman3 ?>
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
    const listData = [
        {
            name: "Operator Shovel",
            plan: <?php echo $planshovel2 ?>,
            realize: <?php echo $realshovel2 ?>
        },
        {
            name: "Operator Belaz",
            plan: <?php echo $planbelaz2 ?>,
            realize: <?php echo $realbelaz2 ?>
        },
        {
            name: "Pemandu Shovel",
            plan: <?php echo $planpshovel2 ?>,
            realize: <?php echo $realpshovel2?>
        },
        {
            name: "Pemandu Belaz",
            plan: <?php echo $planpbelaz2 ?>,
            realize: <?php echo $realpbelaz2 ?>
        },
        {
            name: "Operator Grader",
            plan: <?php echo $plangrader2 ?>,
            realize: <?php echo $realgrader2 ?>
        },
        {
            name: "Operator Dozer",
            plan: <?php echo $plandozer2 ?>,
            realize: <?php echo $realdozer2 ?>
        },
        {
            name: "Foreman/GL",
            plan: <?php echo $planforeman2 ?>,
            realize: <?php echo $realforeman2 ?>
        }
    ]    
    // pit 3
    const listData2 = [
        {
            name: "Operator Shovel",
            plan: <?php echo $planshovel3 ?>,
            realize: <?php echo $realshovel3 ?>
        },
        {
            name: "Operator Belaz",
            plan: <?php echo $planbelaz3 ?>,
            realize: <?php echo $realbelaz3 ?>
        },
        {
            name: "Pemandu Shovel",
            plan: <?php echo $planpshovel3 ?>,
            realize: <?php echo $realpshovel3 ?>
        },
        {
            name: "Pemandu Belaz",
            plan: <?php echo $planpbelaz3 ?>,
            realize: <?php echo $realpbelaz3 ?>
        },
        
        {
            name: "Operator Grader",
            plan: <?php echo $plangrader3 ?>,
            realize: <?php echo $realgrader3 ?>
        },
        {
            name: "Operator Dozer",
            plan: <?php echo $plandozer3 ?>,
            realize: <?php echo $realdozer3 ?>
        },
        {
            name: "Foreman/GL",
            plan: <?php echo $planforeman3 ?>,
            realize: <?php echo $realforeman3 ?>
        }
    ]    

    let data = [] ;
    let data2 = [];
    listData.map(item => {
        // return `<p> ${item.name} </p>`
        data.push(`
        <div class="datt">
            <h4><i class="fi fi-rr-user-time adjust"></i> ${item.name}</h4>
            <table>
                <tr class="val">
                    <td>Realize </td>
                    <td> <span class="bullet bulgreen">${item.realize}</span> </td>
                </tr>
                <tr class="val">
                    <td>Plan </td>
                    <td> <span class="bullet bulblue">${item.plan}</span> </td>
                </tr>
                
            </table>
        </div>
        `)
    })
    listData2.map(item => {
        // return `<p> ${item.name} </p>`
        data2.push(`
        <div class="datt">
            <h4><i class="fi fi-rr-user-time adjust"></i> ${item.name}</h4>
            <table>
                <tr class="val">
                    <td>Realize </td>
                    <td> <span class="bullet bulgreen">${item.realize}</span> </td>
                </tr>
                <tr class="val">
                    <td>Plan </td>
                    <td> <span class="bullet bulblue">${item.plan}</span> </td>
                </tr>
                
            </table>
        </div>
        `)
    })
    const el = document.getElementById('listdata');
    const el2 = document.getElementById('listdata2');
    el.innerHTML = data;
    el2.innerHTML = data2;

    
</script>