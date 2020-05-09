<html>
    <head>
        <title>
        Portfolio - Hudson Chromy
        </title>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <?php include('../cdns.php');?>
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    </head>
<body>
    <?php include('../menu.php');?>
    <?php include('../sidebar.php')?>




<div>






<div class="contain">
  <div class="port">
    <img src="../images/portfolio/llamaLava.png">
    <p></p>
  </div>
  <div class="overlay">
    <div class="text">LlamaLava is an interactive game built using php that records highscores using a sql database.</div>
  </div>
  <div class="slideButton secondSB"><h1>Website</h1></div>
  <div class="slideButton"><h1>Github</h1></div>
</div>




<div class="contain">
  <div class="port">this is some content that at least goes onto the next line at least hopefully</div>
  <div class="overlay">
    <div class="text">Hello World</div>
  </div>
</div>
</div>

<img src="../images/DVD.png" style="height: 40px; width: auto; float: right;">


<div>
<div class="contain" >
  <div class="port">this is some content that at least goes onto the next line at least hopefully</div>
  <div class="overlay">
    <div class="text">Hello World</div>
  </div>
</div>
<div class="contain" >
  <div class="port">this is some content that at least goes onto the next line at least hopefully</div>
  <div class="overlay">
    <div class="text">Hello World</div>
  </div>
</div>
</div>

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>
<script>
    var flkty = new Flickity( '.main-gallery', {
        // options
        cellAlign: 'left',
        contain: true,
        wrapAround: true
    });
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