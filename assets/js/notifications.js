$(document).ready(function(){
    //Socket configurationn settings
    var socket  =   new WebSocket('ws://'+socket_data.IP_ADDRESS+':'+socket_data.PORT);
    socket.onopen    	= function(msg){};
    socket.onclose   	= function(msg){}
    
    //Listen to notification over socket
    socket.onmessage 	= function(msg){        
        $('#notification-nav').addClass('new-notification');    
        setTimeout(function(){$('#notification-nav').removeClass('new-notification');},10000);    
        //Update Un Read Notification Count
        var notificationCnt = parseInt($('#notification-cnt').html());
        notificationCnt++;
        
        $('#notification-cnt').addClass('notification-cnt-highlight').html(notificationCnt);            
        var notificationtext = '<div class="notification-text"><span>'+msg.data+'</span></div>';    
        $('#notification-list').prepend(notificationtext);    
    };
    
    //Display Notifications
    $('#displayNotification').click(function(){
        //Update Un Read Notification Count
        $('#notification-cnt').html(0);
        $('#notification-nav').removeClass('new-notification');
        $('#bottom').fadeToggle(500);
        $('#notification').fadeOut('slow');
        $('.notification-cnt-highlight').removeClass('notification-cnt-highlight');
        return false;
    });
    
    //Document Click
    $(document).click(function()
    {
        $('#bottom').hide();
    });
    //Popup Click
    $('#bottom').click(function()
    {
        return false
    });        
});