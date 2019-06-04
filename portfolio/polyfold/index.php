<html>
    <head>
        <title>
            Contact Me - Hudson Chromy
        </title>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kadwa:700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Inconsolata:700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|BioRhyme+Expanded:800|Bungee+Outline|Bungee+Shade|Creepster|Miltonian+Tattoo|Podkova:700|Rye|Slackey&display=swap" rel="stylesheet">
        <?php include('../../cdns.php');?>
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Fredericka+the+Great&display=swap" rel="stylesheet">
    </head>
<body>
<?php include('../../menu.php');?>
    <div class="col-sm-12">
        <?php include('../../sidebar.php')?>
            <div class="section">
                <h1>Polyfold</h1>
                <img src="/images/portfolio/polyfold/polyfold.gif" alt="Polyfold" style="width: 80%;">
            </div>
        <div>
    </div>
</body>
<script>
    window.onload = function() {
        $('#firstLetter').css('font-family', '"Berkshire Swash", cursive');
        changeLetter();
    }
    function changeLetter() {
        var fonts = ["'Berkshire Swash', cursive", "Rye', cursive", "Podkova', serif", "'Bungee Shade', cursive", "'Slackey', cursive", "'Miltonian Tattoo', cursive", "'Bungee Outline', cursive", "'BioRhyme Expanded', serif", "'Fredericka the Great', cursive", "'Abril Fatface', cursive"];
        var id = setInterval(frame, 1000);
        var currFont = 0;
        var fontOn = 0;
        function frame() {
            fontOn++;
            $('#firstLetter').css('font-family', fonts[fontOn % (fonts.length - 1)]);
        }
    }
</script>
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