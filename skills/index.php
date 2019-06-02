<html>
    <head>
        <title>
            Skills - Hudson Chromy
        </title>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php include('../cdns.php');?>
    </head>
<body>
    <?php include('../menu.php');?>
    <div class="col-sm-12">
        <?php include('../sidebar.php')?>
            <div class="col-sm-12 skillCard">
                <?php
                    $i = 0;
                    $files = scandir('../images/skills/');
                    foreach($files as $file):
                    if(pathinfo($file, PATHINFO_EXTENSION) != "png") {
                        continue;
                    }
                    $i++;
                    if ($i%3 == 1) {
                        echo "<div class='col-sm-3 skill'>";
                    }
                ?>
                    <img id="<?php echo 'skill'.$i?>" src="../images/skills/<? echo $file;?>">
                <? 
                if ($i%3 == 0) {
                    echo "</div>";
                }
                endforeach;?>
            </div>
        </div>
    </div>
</body>
<script>
window.onload = function() {
    myMove();
}
function myMove() {
    class Skill {
        constructor(num, below) {
            this.below = below;
            this.top = 0;
            this.num = num;
        }
        atBottom() {
            let diff = 0;
            for (var j = 0; j < this.below.length; j++) {
                console.log(this.below[j]);
                diff += skills[this.below[j]].height() + 40;
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
    var speed = 1.5;
    function frame() {
        speed += 0.015;
        var changed = false;
        for (i = 0; i < 4; i++) {
            if (row + i * 3 == 12) {
                continue;
            }
            if (skills[row + i * 3].atBottom()) {
                skills[row + i * 3].top += speed;
                setTop(row + i * 3);
                if (row != 3) {
                    skills[(row + 1) + i * 3].top -= speed;
                    setTop((row + 1) + i * 3);
                    
                }
                changed = true;
            }
        }
        if (!changed) {
            speed = 1
            row -= 1;
            console.log('here');
            if (row == 0) {
                clearInterval(id);
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