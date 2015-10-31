<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Push Notifications</title>    
    <link rel="stylesheet" href="<?php echo PN_BASE_URL; ?>assets/css/main.css"></script>    
</head>
<body class="notification-page">
    <script>
        //Get Socket data from constants and create and array to access inside JS file
        var socket_data = {IP_ADDRESS:<?php echo "'".PN_SOCKET_IP_ADDRESS."'"; ?>, PORT:<?php echo PN_SOCKET_PORT; ?>};   
    </script>
    <div id='center'>
        <div id='top'>
            <div id='notification-nav'>
                <div class="bell" id="displayNotification"></div>
            </div>
            <div id='notification-cnt'>0</div>
        </div>
        <div id='bottom' style="display: none;">
            <div id='triangle-line'>
                <div id='triangle'></div>
            </div>
            <div class='notification-label'><span>Notifications</span></div>
            <div id='notification-list'></div>
        </div>
    </div>
    <footer>
        <script type="text/javascript" src="<?php echo PN_BASE_URL; ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo PN_BASE_URL; ?>assets/js/notifications.js"></script>
    </footer>
</body>
</html>
