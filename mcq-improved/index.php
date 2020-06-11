<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCQ</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="cover">
        <button class="but">START</button>
        <div class="loader"></div>
    </div>
    <div class="f-cover">
        <p>Thanks For attending</p>
    </div>
    <div class="container">
        <div class="content" id="content">
        </div>
        <div class="options">
            <div class="button" id="1" name="1"></div>
            <div class="button" id="2" name="2"></div>
            <div class="button" id="3" name="3"></div>
            <div class="button" id="4" name="4"></div>
        </div>
        <div class="changer">
            <div id="prev">PREV</div>
            <div class="count" for="count">COUNT:<span id="count">0</span></div>
            <div id="next">NEXT</div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="index.js"></script>
</body>
</html>
