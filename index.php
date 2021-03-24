<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Moon by Zen Water</title>
    <meta name="robots" content="noindex, nofollow, noarchive">
    <link rel="stylesheet" href="assets/hack.css?t=<?php echo time();?>">
    <link rel="stylesheet" href="assets/standard.css?t=<?php echo time();?>">
    <link rel="shortcut icon" href="images/favi.png" />
    <style>
        .navi {
            width: 100%;
            height: 50px;
            min-height: 50px;
            line-height: 20px;
            text-align: center;
            background: black;
            color: white;
            padding-top: 15px;
        }

        iframe {
            width: 100%;
            height: 100%;
            min-height: 300px;
            border: none;
        }

    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#design').change(function() {
                var v = $('#design').val();
                $('#frame').attr('src', 'redirect.php?skin=' + v);
            });
        });

    </script>
</head>

<body>
 <iframe id="frame" src="redirect.php?skin=4"></iframe>

</body>

</html>
