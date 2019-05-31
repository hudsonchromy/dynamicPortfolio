<html>
<style>

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



        <meta name="theme-color" content="#ffffff">
        
        <?php include('cdns.php')?>
    </head>
<body>
<?php include('menu.php');?>
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
    var change = 0;
    var heightChange = 0;
    if ($('html').width() > 600) {
        change = $('html').width() / 4;
        heightChange = 59;
    }
    function frame() {
        b1 = false;
        b2 = false;
        if (posY == ($('html').height() - 89 - heightChange) || posY < -14) {
            changeY *= -1;
            changeColor();
            b1 = true;
        }
        else if (posX >= ($('html').width() - 130 - change) || posX < -14) {
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
        var colors = ['#D43A74', '#EE2F50', '#658B50', '#504B4F', '#FFCD48']
        var colorNum = Math.floor(Math.random()*logos.length);
        $('#logoPicture').attr('src', 'images/dvds/' + logos[colorNum])
        $('.active').css("background-color", colors[colorNum]);
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