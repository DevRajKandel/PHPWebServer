<html>
    <head>
        <title>Welcome</title>
    </head>
    <body>
        <?php
        ?>
        <p id="onex">Welcome to the website</p>
    
        <button id="twox" onclick="rafeal()">CheckButton</button>
        <br></br>
        <input type="text" id="Frisco"/>
        <button id="threex" onclick="rafealy()">Validate</button>
        
        

        <script>
            var x = "Successfully Sent."; //System Understanding

            function rafeal()
            {

        
            
                window.alert(x);
        

                return "Okayish"
            }


            function rafealy()
            {

                //How To manage HTTP Requests.

                //HTTP Request to google.com
                var xenos = new XMLHttpRequest();
                var xad = document.getElementById("Frisco").value;

                
                xenos.open("GET","Second.php"+"?q="+xad,false);



                


                xenos.send();
                window.alert(xenos.responseText);
               
                window.alert(xad)


                return "";
            }
        </script>
    </body>
</html>