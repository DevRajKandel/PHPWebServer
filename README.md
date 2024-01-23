index.php is the main webpage
it calls second.php as well
but, second.php is also an APi, it reponds to the input as well
for eg: https://devkandel1034.000webhostapp.com/Second.php?q=A
because second.php is in the same folder ans index.php, we can only writed Second.php?q=A




CORS: Cross Origin Resource Sharing must be enabled for the api to work.
This must be enabled from the web server.
In web server, there is a file name htaccess.
We need to add header which says that any request from any origin can contact the API.
Add the following line to the htaccess.

Header set Access-Control-Allow-Origin "*"

Whenever, we use HTTP Requests, one of the important things to understand is the concept of headers

When clients do HTTP request, the headers are also given back to clients and the headers contain information whether, 
CORS is enabled for all, that is * symbol and whether the output will be json or text....So, concept of request must be understood properly
