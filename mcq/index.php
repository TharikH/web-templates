<?php include 'ajax.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCQ</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <?php echo $question ?>
        </div>
        <div class="options">
            <div class="button" id="1" name="1"><?php echo $option1 ?></div>
            <div class="button" id="2" name="2"><?php echo $option2 ?></div>
            <div class="button" id="3" name="3"><?php echo $option3 ?></div>
            <div class="button" id="4" name="4"><?php echo $option4 ?></div>
        </div>
        <div class="changer">
            <div id="prev">PREV</div>
            <div class="count" for="count">COUNT:<span id="count">0</span></div>
            <div id="next">NEXT</div>
        </div>
    </div>

    <script src="index.js"></script>
</body>
</html>
