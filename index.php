<html></html>
<style>

</style>
    <head>
        <title>
        Hudson Chromy
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
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
                <img src="images/hello.png" alt="Parrot">
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
    var heightChange = 60;
    if ($('html').width() > 768) {
        change = $('html').width() / 4;
        heightChange = 0;
    }
    console.log(change);
    function frame() {
        b1 = false;
        b2 = false;
        if (posY == ($('html').height() - 89 - heightChange) || posY < -14) {
            changeY *= -1;
            changeColor();
            b1 = true;
        }
        if (posX >= ($('html').width() - 130 - change) || posX < -14) {
            changeX *= -1;
            changeColor();
            b2 = true;
        }
        if (b1 && b2) {
            alert("it hit the corner");
            console.log("here");
        }
        posX += changeX; 
        posY += changeY;
        elem.style.top = posY + 'px'; 
        elem.style.left = posX + 'px'; 
    }
    function changeColor() {
        var logos = ['DVD1.png', 'DVD2.png', 'DVD3.png', 'DVD4.png'];
        var colors = ['#526178', '#c7728c', '#3d7f99', '##b5e7d0']
        var colorNum = Math.floor(Math.random()*logos.length);
        $('#logoPicture').attr('src', 'images/dvds/' + logos[colorNum])
        $('.active').css("background-color", colors[colorNum]);
    }
}
</script>

</html>