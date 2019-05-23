<html>
    <head>
        <title>
        Contact Me
        </title>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <link rel="stylesheet" href="https://cdn.auburn.edu/assets/css/bootstrap.min.css"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kadwa:700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Inconsolata:700&display=swap" rel="stylesheet">
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|BioRhyme+Expanded:800|Bungee+Outline|Bungee+Shade|Creepster|Miltonian+Tattoo|Podkova:700|Rye|Slackey&display=swap" rel="stylesheet">
        <?php include('cdns.php');?>
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Fredericka+the+Great&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/trianglify/1.1.0/trianglify.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/trianglify/0.4.0/trianglify.min.js"></script>
    </head>
<body>
    <div class="col-sm-12">
        <?php include('../sidebar.php')?>
        
            <div class="section">
                <h1>Contact Me</h1>
                <a href="https://www.linkedin.com/in/hchromy">
                    <img src="../images/linkedIn.png" alt="LinkedIn Icon, Links to Hudson Chromy's LinkedIn">
                </a>
                <p>LinkedIn</p>
                <a href="https://github.com/hudsonchromy">
                    <img src="../images/github.png" alt="Github Icon, Links to Hudson Chromy's GitHub">
                </a>
                <p>Github</p>
                <img src="../images/email.png" alt="Email Icon">
                <p>hjc0018@auburn.edu</p>
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
            console.log(fontOn);
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