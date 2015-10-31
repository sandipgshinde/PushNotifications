WebSocket Server and Client library for PHP.

Features
============
Server
  * Server sending notifications after specfified interval
  
Client
  * Client listening to notifications using WebSocket

Getting started
=================
Open up config/constants.php to update server details.
* PN_BASE_URL: Application URL
* PN_SOCKET_IP_ADDRESS: Socket IP address, necessarily server IP Address;
* PN_SOCKET_PORT: Port NUmber for socket to push/pull for notifications
* PN_TIME_INTERVAL: Interval to send notificatioins
* PN_DB_NAME: DB Name
* PN_DB_USERNAME: DB user name
* PN_DB_PASSWORD: DB user password
* PN_DB_PASSWORD_SALT: Salt for user password

```php
/*Base URL for application*/
define('PN_BASE_URL', 'http://192.168.12.104/PushNotification/');

/*Socket IP Address, necessarily server IP Address*/
define('PN_SOCKET_IP_ADDRESS', '192.168.12.104');

/*Socket PORT number to listen*/
define('PN_SOCKET_PORT', 12345);

/*Time Interval for notifications to send in Seconds*/
define('PN_TIME_INTERVAL', 20);

/*DB NAME*/
define('PN_DB_NAME', 'pn_test');

/*DB USER*/
define('PN_DB_USERNAME', 'root');

/*DB PASSWORD*/
define('PN_DB_PASSWORD','');

/*DB PASSWORD HASH*/
define('PN_DB_PASSWORD_SALT','hTj7d2');
```
Import DB
==================
Import DB from  ```pn_test.sql```  it contains DB create and table creation SQL.

Daemon for Notifications 
==================
Add daemon as ```controller/pushnotifications.php``` ELSE for testing hit URL ```http://<IP_ADDRESS>/<APP_DIR_NAME>/controller/pushnotifications.php```

Running Web Application
==================
And run ```http://<IP_ADDRESS>/<APP_DIR_NAME>/controller/```

User Details
==================
  * Username: test@test.com
  * Password: 123456
    
Known Issues
==================
  * Due to time limitation, DataBase integration to store notification into DB is not implemented
  * So user will not see notification on page refresh
  * User Logout functionality is missing

Requirements
=================
*Server*
 * PHP 5+
 * Open port for the server
 * http://pecl.php.net/package/pecl_http as its a dependency of Zend\Uri
