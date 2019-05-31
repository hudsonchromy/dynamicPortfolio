<html>
    <head>
        <title>
        Hudson Chromy
        </title>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <link rel="stylesheet" href="https://cdn.auburn.edu/assets/css/bootstrap.min.css"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kadwa:700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Inconsolata:700&display=swap" rel="stylesheet">
        <?php include('../cdns.php');?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/trianglify/1.1.0/trianglify.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/trianglify/0.4.0/trianglify.min.js"></script>
    </head>
<body>
    <?php include('../menu.php');?>
    <?php include('../sidebar.php')?>
        <div class="col-sm-12">
            <?php
            $i = 0;
            $jsonArray = json_decode(file_get_contents('portfolio.json'));
            for ($i=0; $i < sizeOf($jsonArray); $i++):
            ?>
            <div class="col-sm-6">
                <div class="card">
                    <h2><?php echo $jsonArray[$i]->name;?></h2>
                    <p2><?php echo $jsonArray[$i]->description ?></p2>
                    <img src="<?php echo $jsonArray[$i]->image; ?>" alt="image">
                    <div class="col-sm-12">
                        <div class="col-sm-4">
                        <img src="/images/skills/Competetive_Programming.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
            <?php endfor;?>
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
        x_colors: 'Greys',
        y_colors: 'match_x'
    });
    document.body.style.background = 'url(' + pattern.canvas().toDataURL() + ')';
    document.body.style.backgroundAttachment = 'fixed';
</script>
</html>