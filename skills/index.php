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
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
        <?php include('cdns.php');?>
    </head>
<body>
    <div class="col-sm-12">
        <?php include('../sidebar.php')?>
        <div class="col-sm-9">
            <div class="col-sm-12">
                <?php
                    $files = scandir('../images/skills/');
                    foreach($files as $file):
                    if(pathinfo($file, PATHINFO_EXTENSION) != "png") {
                        continue;
                    }
                ?>
                <div class="col-sm-3 skill">
                    <img src="../images/skills/<? echo $file;?>">
                </div>
                <? endforeach;?>
            </div>
        </div>
    </div>
</body>
</html>