<?php
    if ( isset($_GET['skin']) ) $skin=(int)$_GET['skin'];else $skin=1;
    include('easy-protect.php');
    $options = array(
        'skin'     => $skin,
        'md5'      => true,
        'block'   => array('127.0.0.1','95.222.76.152'),
        'attempts' => 3,
        'timeout'  => 60,
        #'bypass'  => array('127.0.0.1','95.222.76.152'),
    );
    session_set_cookie_params(0);session_start();
    protect('3153f3a6f6f251e849dd925cf0430c6b', $options); 
?>
<!DOCTYPE html>
<html>
   <head>
    <link rel='stylesheet' type="text/css" href='uf.css' />
     <meta charset="UTF-8">
     <title>Zen Water | Moon</title>
</head>
    <body>

    <script>
        var timer = setTimeout(function() {
            window.location='http://martin.moonbyzen.com/dashboard.html'
        }, 1000);
    </script>

</body>
</html>