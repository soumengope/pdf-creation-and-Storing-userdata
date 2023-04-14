<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css"/>
    <title>PDF Creation</title>
</head>
<body>
<div class="mainSection">
        <div class="form_title">GET USER DATA</div>
        <div class="mainInput_section">
            <form action="/sendData.php" method="POST">
                <div class="input_section">
                    <div class="input_title">Full Name</div>
                    <div><input type="text" name="fullName" required></div>
                </div>
                <div class="input_section">
                    <div class="input_title">Phone Number</div>
                    <div><input type="text" name="phoneNum" required></div>
                </div>
                <div class="input_section">
                    <div class="input_title">Email</div>
                    <div><input type="text" name="email" required></div>
                </div>
                <div class="input_section">
                    <div class="input_title">City</div>
                    <div><input type="text" name="city" required></div>
                </div>
                <div class="submit_div"><button type="submit" name="submit" value="submit" onClick="fun()">Submit</button></div>
            </form>
        </div>
    </div>
    <script>
        function fun(){
            setTimeout(() => {
                document.location.href ='http://localhost';
            },1000);
        }
    </script>
</body>
</html>