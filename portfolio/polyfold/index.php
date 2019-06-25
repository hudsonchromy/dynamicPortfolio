<html>
    <head>
        <title>
            Contact Me - Hudson Chromy
        </title>
        <link rel="stylesheet" type="text/css" href="../../style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kadwa:700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Inconsolata:700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash&display=swap" rel="stylesheet">
        <?php include('../../cdns.php');?>
    </head>
<body>
<?php include('../../menu.php');?>
    <div class="col-sm-12">
        <?php include('../../sidebar.php')?>
            <div class="section">
                <a href="https://github.com/andrewjmcgehee/polyfold" target="_blank"><h1>Polyfold</h1></a>
                <p>PolyFold is a crowdsourcing computer game for three dimensional (3D) protein folding. The goal is to involve citizen scientists to play an interactive, intuitive, and visually appealing computer game where they can make moves to change 3D conformations of proteins and get scored based on experimentally determined protein contact maps. Gamers strive to achieve the best score by folding protein structures such that they agree with the contact map data. Folding puzzles are available at different levels of complexities for beginner, intermediate, as well as advanced users. No prior scientific background is needed to play PolyFold. It is based entirely on human intuition and passion for solving puzzles with important implications in science and medicine. Play PolyFold!</p>
                <img src="/images/portfolio/polyfold/polyfold.gif" alt="Polyfold" style="width: 80%;">

            </div>
        <div>
    </div>
</body>
    <script>
			var pattern = Trianglify({
				height: window.innerHeight,
				width: window.innerWidth,
				cell_size: 80 + Math.random() * 70,
				variance: 0.2 + Math.random(),
				stroke_width: 1.8 + Math.random(),
				x_colors: 'Greys',
				y_colors: 'match_x'
			});
			document.body.style.background = 'url(' + pattern.canvas().toDataURL() + ')';
			document.body.style.backgroundAttachment = 'fixed';
		</script>
</html>