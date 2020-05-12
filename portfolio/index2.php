<html>
    <head>
        <title>
        Portfolio - Hudson Chromy
        </title>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <?php include('../cdns.php');?>
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <style type="text/css">
            html { overflow-y: scroll; }
            .protoBack {
  background-size: contain;
  position: absolute;
  background-position: center center;
  background-repeat: no-repeat;
  height: 50%;
  width: 80%;
  min-height:100%;
}
        </style>
    </head>
<body>
    <?php include('../menu.php');?>
    <?php include('../sidebar.php')?>


    <?php 
        $i = 0;
        $jsonArray = json_decode(file_get_contents('portfolio2.json'));
        for ($i=0; $i < sizeOf($jsonArray); $i+=2):
        ?>
        <div>
            <div class="contain">
              <div class="port">
                <h1><?php echo $jsonArray[$i]->name;?></h1>
                <img src="<?php echo $jsonArray[$i]->image; ?>">
                <p></p>
              </div>
              <div class="overlay">
                <div class="text"><?php echo $jsonArray[$i]->description;?></div>
              </div>

              <div class="slideButton "><a href="<?php echo $jsonArray[$i]->website;?>" target="_blank"><h1>Website</h1></a></div>

              <div class="slideButton secondSB"><a href="<?php echo $jsonArray[$i]->github;?>" target="_blank"><h1>Github</h1></a></div>

            </div>

            <? if($i+1 < sizeOf($jsonArray)): ?>
            <div class="contain">
              <div class="port">
                <h1><?php echo $jsonArray[$i+1]->name;?></h1>
                <img src="<?php echo $jsonArray[$i+1]->image; ?>">
<!--                 <div class="protoBack" style="background-image: url(<?php echo $jsonArray[$i+1]->image; ?>)">

                    </div> -->
                <p></p>
              </div>
              <div class="overlay">
                <div class="text"><?php echo $jsonArray[$i+1]->description;?></div>
              </div>
              <?$tabs = 0;?>
              <?if($jsonArray[$i+1]->website != ""):?>

              <div class="slideButton "><a href="<?php echo $jsonArray[$i+1]->website;?>" target="_blank"><h1>Website</h1></a></div>
              <?endif;?>
              <?if($jsonArray[$i+1]->github != ""):?>
              <div class="slideButton <? if($tabs==1){echo('secondSB');}?>"><a href="<?php echo $jsonArray[$i+1]->github;?>" target="_blank"><h1>Github</h1></a></div>
              <?endif;?>
            </div>
            <? endif; ?>
        </div>
        
        <?php endfor;?>

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