<!doctype html>
<html>
<head>
    <title>HTML5 Progress Bar</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/modernizr.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            if(!Modernizr.meter){
                alert('Sorry your brower does not support HTML5 progress bar');
            } else {
                var progressbar = $('#progressbar'),
                    max = progressbar.attr('max'),
                    time = (1000/max)*5,
                    value = progressbar.val();

                var loading = function() {
                    value += 1;
                    addValue = progressbar.val(value);

                    $('.progress-value').html(value + '%');

                    if (value == max) {
                        clearInterval(animate);
                    }
                };

                var animate = setInterval(function() {
                    loading();
                }, time);
            };
        });
    </script>
</head>
<body>
<div class="demo-wrapper html5-progress-bar">
    <div class="progress-bar-wrapper">
        <progress id="progressbar" value="0" max="100"></progress>
        <span class="progress-value">0%</span>
    </div>
</div>
</body>
</html>