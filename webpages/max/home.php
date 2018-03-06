<?php

include_once 'header.php'
?>

<title>New Ideas</title>


<div class="container">

    <div class="col-md-6">

        <div class="col-md-6">
            <canvas id="pie" height="400" width="400" ></canvas>
        </div>
       <div class="col-md-6">
           <canvas id="bar" height="400" width="400" ></canvas>
       </div>

    </div>
    <div class="col-md-6">

        <br/>
        <br/>
        <strong>
            <a href="javascript:void(0)">Most Popular ideas </a> <i class="fa fa-thumbs-up"></i>&nbsp;&nbsp;&nbsp;58

            <br/>
            <br/>
            <br/>

            <a href="javascript:void(0)">Most Visited ideas </a> <i class="fa fa-eye"></i>&nbsp;&nbsp;&nbsp;67

            <br/>
            <br/>
            <br/>

            <a href="javascript:void(0)">Most Visited ideas </a> <i class="fa fa-lightbulb-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;6

            <br/>
            <br/>
            <br/>

            <a href="javascript:void(0)">Most Comments</a> <i class="fa fa-comments"></i>&nbsp;&nbsp;&nbsp;6


            <br/>
            <br/>

        </strong>
    </div>
</div>
<?php


include_once 'footer.php'
?>

<script>
    var ctx = document.getElementById("pie");
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Category 1", "Category 2", "Category 3", "Category 4", "Category 5", "Category 5"],
            datasets: [{
                label: '# Ideas by Depth',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
    var ctxe = document.getElementById("bar");
    var myChart = new Chart(ctxe, {
        type: 'bar',
        data: {
            labels: ["Category 1", "Category 2", "Category 3", "Category 4", "Category 5", "Category 6"],
            datasets: [{
                label: '# Ideas by Depth',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>