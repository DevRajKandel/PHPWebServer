CORS: Cross Origin Resource Sharing must be enabled for the api to work.
This must be enabled from the web server.
In web server, there is a file name htaccess.
We need to add header which says that any request from any origin can contact the API.
Add the following line to the htaccess
Header set Access-Control-Allow-Origin "*"
