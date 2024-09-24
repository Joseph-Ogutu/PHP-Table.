<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic php and html table testing</title>
    <style>
        html, body {
            width: 100%;
            height: 100%;
            margin: 0%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow: hidden;
            padding: 0%;
            border: 0%;
        }
        #fo{
            text-align: center;
        }
        br{
            line-height: 400%;
        }
        input[type="text"]{
            width: 20%;
            height: 45px;
            margin: 1%;
        }
        .pa{
            width: 20%;
            height: 45px;
            margin: 1%;
        }
        #sub{
            width: 10%;
            height: 40px;
            margin: 1%;
        }
        #di{
            height: 10%;
            background-color: #343434;
            margin-bottom: 2%;
        }
    </style>
</head>
<body bgcolor="#e5a10">
    <script type="text/javascript">
        function validateForm(){
        var firstname=document.getElementById("firstname").value.trim();
        var lastname=document.getElementById("lastname").value.trim();
        var subject=document.getElementById("subject").value.trim();
        var score =document.getElementById("score").value.trim();
        if(firstname==""||lastname==""||subject==""||score==""){
        alert("All Fields Must be Filled")
        return false;
        }

        return true;
        }
    </script>
    <div id="di">

    </div>
    <div id="fo">
        <form action="action.php" method="post" onsubmit="return validateForm()">
            <input type="text" placeholder="FirstName" id="firstname" name="first" required><br>
            <input type="text" placeholder="LastName" id="lastname" name="last" required><br>
            <input type="text" placeholder="Subject" id="subject" name="subject" required><br>
            <input type="text" placeholder="Student Score" id="score" name="score" required><br>

            <input type="submit" value="submit" id="sub">
        </form>
    </div>
</body>
</html>