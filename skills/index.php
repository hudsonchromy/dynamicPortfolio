<html>
    <head>
        <title>
        Portfolio - Hudson Chromy
        </title>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <?php include('../cdns.php');?>
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    </head>
<style>
    .flickity-viewport {
        height: 50%!important;
    }
</style>
<body onload="makeNone()">
    <?php include('../menu.php');?>
    <?php include('../sidebar.php')?>
    <div class="main-gallery" id="projectcarousel">
        <?php   
        $i = 0;
        $jsonArray = json_decode(file_get_contents('../portfolio/portfolio.json'));
        for ($i=0; $i < sizeOf($jsonArray); $i++):
        ?>
                <div class="card gallery-cell">
                    <h1><?php echo $jsonArray[$i]->name;?></h1>
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
    <div class="col-xs-12 skillCard">
                <?php
                    $i = 0;
                    $files = scandir('../images/skills/');
                    foreach($files as $file):
                    if(pathinfo($file, PATHINFO_EXTENSION) != "png") {
                        continue;
                    }
                    $i++;
                    if ($i%3 == 1) {
                        echo "<div class='col-xs-3 skill'>";
                    }
                ?>
                    <img id="<?php echo 'skill'.$i?>" src="../images/skills/<? echo $file;?>" onclick="myMove()">
                <? 
                if ($i%3 == 0) {
                    echo "</div>";
                }
                endforeach;?>
            </div>
    </div>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>
<script>
function makeNone() {
    $('#projectcarousel').css('display', 'none');
}

function myMove() {
    class Skill {
        constructor(num, below) {
            this.below = below;
            this.top = 16;
            this.num = num;
            this.velocity = 4;
            this.m = true;
        }
        bounce() {
            this.velocity = - this.velocity / 1.48;
            if (this.velocity > -0.85) {
                this.m = false;
            }
        }
        moving() {
            return this.m;
        }
        accelerate() {
            this.velocity += 0.04;
        }
        atBottom() {
            let diff = 0;
            for (var j = 0; j < this.below.length; j++) {
                diff += skills[this.below[j]].height() + 20;
            }
            return($('html').height() - diff > document.getElementById("skill" + this.num).getBoundingClientRect().bottom);
        }
        height() {
            return(document.getElementById('skill' + this.num).clientHeight);
        }
    }
    var id = setInterval(frame, 2);
    var skills = [new Skill(0, []), new Skill(1, [2,3]), new Skill(2, [3]), new Skill(3, []), new Skill(4, [5,6]), new Skill(5, [6]), new Skill(6, []), new Skill(7, [8,9]), new Skill(8, [9]), new Skill(9, []), new Skill(10, [11]), new Skill(11, []), new Skill(12, [])];
    var row = 3;
    var speed = 0;
    var change = 0.02;
    var bounceFrames = 0;
    var v = -1;
    var a = 0.003;
    function showProjects() {
        $('#projectcarousel').css('display', 'block');
        var diff = $('#projectcarousel').height();
        for (var k = 0; k < 4; k++) {
            skills[1 + (3 * k)].top -= diff;
            setTop(1 + (3 * k));
        }
    }
    function frame() {
        var changed = false;
        for (i = 0; i < 4; i++) {
            if (row + i * 3 == 12) {
                continue;
            }
            var curr = skills[row + i * 3];
            if (curr.moving()) { 
                if (!curr.atBottom()) {
                    curr.bounce();
                    curr.top -= 3;
                    if (row != 3) { // adjust one below
                        skills[(row + 1) + i * 3].top += 3;
                        setTop((row + 1) + i * 3);
                    
                    }
                }
                curr.accelerate();
                curr.top += curr.velocity;
                setTop(row + i * 3);
                if (row != 3) { // adjust one below
                    skills[(row + 1) + i * 3].top -= curr.velocity;
                    setTop((row + 1) + i * 3);
                
                }
                changed = true;
            }
        }
        if (!changed) {
            bounceFrames = 0;
            speed = 0;
            row -= 1;
            if (row == 0) {
                clearInterval(id);
                showProjects();
            }
        }
    }

    function setTop(skill) {
        if (skill < 12 && skill > 0) {
            $('#skill' + skill).css('margin-top', skills[skill].top);
        }
    }
    
}
</script>
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