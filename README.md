xdebug-http-requests
====================

Enable debugging (XDebug) when using http requests (wp_remote_post) in WordPress

## How It Works ##

It hooks into the *http_request_args* filter and adds a XDEBUG_SESSION cookie. Xdebug then uses the cookie to do it's magic.

Before you enable the plugin, make sure you open xdebug-http-requests.php and change the XDEBUG_SESSION named constant to suit your environment:

```
define('XDEBUG_SESSION', 'YOUR_XDEBUG_KEY_HERE');
```
