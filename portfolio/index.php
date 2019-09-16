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
    <div class="main-gallery">
        <?php   

        $i = 0;
        $jsonArray = json_decode(file_get_contents('portfolio.json'));
        for ($i=0; $i < sizeOf($jsonArray); $i++):
        ?>
                <div class="card gallery-cell">
                    <h2><?php echo $jsonArray[$i]->name;?></h2>
                    <a href="<?php echo $jsonArray[$i]->link; ?>">
                    <img src="<?php echo $jsonArray[$i]->image; ?>" alt="image">
                    </a>
                    <div class="col-xs-12">
                    <?php
                    $j = 0;
                    $skillsArray = $jsonArray[$i]->skills;
                    for ($j=0; $j < sizeOf($skillsArray); $j++):
                    ?>
                        <div class="col-xs-4">
                            <img src="<?php echo $skillsArray[$j]; ?>" alt="image">
                        </div>
                    <?php endfor;?>
                    </div>
                </div>
        <?php endfor;?>
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