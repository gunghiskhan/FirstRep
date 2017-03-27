<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8" />
    <script src="jquery-1.7.1.min.js" language="javascript" type="text/javascript"></script>
    </head>
    
<body>
    
    <script>
    function getNum() {
    $.ajax({
        url: "ajaxgetdata.php",
        complete: function(response) {
            alert("The latest number is " + response.responseText);
        }
    });
}
    </script>
    
    </body>
</html>