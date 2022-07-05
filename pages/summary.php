<main class="searchContent">
    <h1>Summary</h1>
    <div class="sumbox min">
        <div class="headerr">
            <h2>Area PIT 2</h2>
            <a href="?page=details"><i class="fi fi-rr-info adjust"></i> Detail Attendance</a>
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
            <a href="?page=details"><i class="fi fi-rr-info adjust"></i> Detail Attendance</a>
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
                    4,30,4,2,2,3,2
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
                    3,25,3,2,2,2,2
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
                    4,30,4,2,2,3,2
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
                    3,25,3,2,2,2,2
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
            plan: 4,
            realize: 3
        },
        {
            name: "Operator Belaz",
            plan: 30,
            realize: 25
        },
        {
            name: "Pemandu Belaz",
            plan: 3,
            realize: 3
        },
        {
            name: "Pemandu Shovel",
            plan: 7,
            realize: 6
        },
        {
            name: "Operator Grader",
            plan: 3,
            realize: 2
        },
        {
            name: "Operator Dozer",
            plan: 3,
            realize: 3
        },
        {
            name: "Foreman/GL",
            plan: 2,
            realize: 2
        }
    ]    
    // pit 3
    const listData2 = [
        {
            name: "Operator Shovel",
            plan: 4,
            realize: 3
        },
        {
            name: "Operator Belaz",
            plan: 30,
            realize: 25
        },
        {
            name: "Pemandu Belaz",
            plan: 3,
            realize: 3
        },
        {
            name: "Pemandu Shovel",
            plan: 7,
            realize: 6
        },
        {
            name: "Operator Grader",
            plan: 3,
            realize: 2
        },
        {
            name: "Operator Dozer",
            plan: 3,
            realize: 3
        },
        {
            name: "Foreman/GL",
            plan: 2,
            realize: 2
        }
    ]    

    let data = [] ;
    let data2 = [];
    listData.map(item => {
        // return `<p> ${item.name} </p>`
        data.push(`
        <div class="datt">
            <h4><i class="fi fi-rr-business-time adjust"></i> ${item.name}</h4>
            <table>
                <tr class="val">
                    <td>Plan </td>
                    <td> ${item.plan} </td>
                </tr>
                <tr class="val">
                    <td>Realize </td>
                    <td> ${item.realize} </td>
                </tr>
            </table>
        </div>
        `)
    })
    listData2.map(item => {
        // return `<p> ${item.name} </p>`
        data2.push(`
        <div class="datt">
            <h4><i class="fi fi-rr-business-time adjust"></i> ${item.name}</h4>
            <table>
                <tr class="val">
                    <td>Plan </td>
                    <td> ${item.plan} </td>
                </tr>
                <tr class="val">
                    <td>Realize </td>
                    <td> ${item.realize} </td>
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