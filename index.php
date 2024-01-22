<html>
    <head>
        <title>Welcome</title>
    </head>
    <body>
        <?php
        ?>
        <p id="onex">HOME PAGE-WEB SERVICE CHECKUP</p>
        <br></br>
        <p>Input A,B,C...A gives 3,B gives 4, C gives 5</p>
        <br></br>
        <input type="text" id="Frisco"/>
        <button id="threex" onclick="rafealy()">Validate</button>
        <script>
            var x = "Successfully Sent."; //System Understanding
            function rafealy()
            {
                //How To manage HTTP Requests.
                //HTTP Request to google.com
                var xenos = new XMLHttpRequest();
                var xad = document.getElementById("Frisco").value;
                if (xad!="")
                {
                xenos.open("GET","Second.php"+"?q="+xad,false);
                xenos.send();
                var ree1=xenos.responseText;
                window.alert("For "+xad+" The Response is "+ ree1);
                }
                else
                {
                 window.alert("The input is Empty, put some input");   
                }    
                return "";
            }
        </script>
    </body>
</html>