<html>
    <head>
        <title>
            Bowling - Hudson Chromy
        </title>
        <link rel="stylesheet" type="text/css" href="../../style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kadwa:700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Inconsolata:700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|BioRhyme+Expanded:800|Bungee+Outline|Bungee+Shade|Creepster|Miltonian+Tattoo|Podkova:700|Rye|Slackey&display=swap" rel="stylesheet">
        <?php include('../../cdns.php');?>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Fredericka+the+Great&display=swap" rel="stylesheet">
    </head>
<body>
<?php include('../../menu.php');?>
    <div class="col-sm-12">
        <?php include('../../sidebar.php')?>
        <h1 style="color: #8e5ea2;">Bowling Scores</h1>
        <canvas id="bar-chart" width="800" height="250"></canvas>
    </div>
</div>
</body>
    <script>
			var pattern = Trianglify({
				height: window.innerHeight,
				width: window.innerWidth,
				cell_size: 80 + Math.random() * 70,
				variance: 0.2 + Math.random(),
				stroke_width: 1.8 + Math.random(),
				x_colors: ["#545454", "#2a2a2a", "#000000"],
				y_colors: 'match_x'
			});
			document.body.style.background = 'url(' + pattern.canvas().toDataURL() + ')';
			document.body.style.backgroundAttachment = 'fixed';
		</script>
</html>



<script>
    var scores = [78, 132, 94,
            86, 122, 122,
            118, 112, 104,
            78, 115, 89,
            104, 117, 126,
            109, 82, 92,
            135, 98, 128];
    var nums = [];
    var first = [];
    var second = [];
    var third = [];
    for(let i = 0; i < scores.length; i++) {
        nums.push(i + 1);
        if (i % 3 == 0) {
            console.log('here');
            first.push(scores[i]);
        }
        else {
            first.push(null);
        }
        if (i % 3 == 1) {
            second.push(scores[i]);
        }
        else {
            second.push(null);
        }
        if (i % 3 == 2) {
            third.push(scores[i]);
        }
        else {
            third.push(null);
        }
    }
	new Chart(document.getElementById("bar-chart"), {
    type: 'line',
    data: {
      labels: nums,
      datasets: [
        {
            data: scores,
            label: 'All Games',
            borderColor: "#3e95cd",
            fill: false
        },
        {
            data: first,
            label: 'First Game',
            pointRadius: 5,
            backgroundColor: "#8e5ea2",
            fill: false
        },
        {
            data: second,
            label: 'Second Game',
            pointRadius: 5,
            backgroundColor: "#3cba9f",
            fill: false
        },
        {
            data: third,
            label: 'Third Game',
            pointRadius: 5,
            backgroundColor: "#e8c3b9",
            fill: false
        }
      ]
    },
    options: {
        display: true,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
        
    }
});
</script>