<html>
<style>
html {
    height: 100%;
    width: 100%;
    margin: 0;
    overflow: hidden;
}
#myContainer {
  width: 100%;
  height: 100%;
  position: relative;
  background: yellow;
}
#myAnimation {
    z-index: 10;
    width: 116px;
    height: 80px;
    position: absolute;
}
#logoPicture {
    width: 116px;
    height: 80px;
}
</style>
    <head>
        <title>
        Hudson Chromy
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdn.auburn.edu/assets/css/bootstrap.min.css"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kadwa:700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Inconsolata:700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fugaz+One&display=swap" rel="stylesheet">
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>


        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <?php include('cdns.php')?>
    </head>
<body>
    <div class="col-sm-12">
        <?php include('sidebar.php');?>
            <hb>
                Hudson Chromy
            </hb>
            <a href="https://www.youtube.com/watch?v=QOtuX0jL85Y" target="_blank">
                <div id ="myAnimation">
                    <img id="logoPicture"src="images/DVD.png" alt="" style="margin-left: 0px;">
                </div>
            </a>
                <img src="images/parot.png" alt="Parrot">
            </div>
        </div>
</body>
<script>
window.onload = function() {
    myMove();
}
function myMove() {
    var pic = document.getElementById("logoPicture");
    var elem = document.getElementById("myAnimation");   
    var posX = 0;
    var posY = 0;
    var changeX = 1;
    var changeY = 1;
    var id = setInterval(frame, 12);
    var b1 = false;
    var b2 = false;
    function frame() {
        b1 = false;
        b2 = false;
        if (posY == ($('html').height() - 100) || posY < 0) {
            changeY *= -1;
            changeColor();
            b1 = true;
        }
        else if (posX == ($('html').width() - 116 - ($('html').width() / 4)) || posX < 0) {
            changeX *= -1;
            changeColor();
            b2 = true;
        }
        if (b1 && b2) {
            alert("it hit the corner");
        }
        posX += changeX; 
        posY += changeY;
        elem.style.top = posY + 'px'; 
        elem.style.left = posX + 'px'; 
    }
    function changeColor() {
        var logos = ['pink.png', 'pink2.png', 'green.png', 'grey.png', 'yellow.png'];
        $('#logoPicture').attr('src', 'images/dvds/' + logos[Math.floor(Math.random()*logos.length)])
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