<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
    <title>PHP and AJAX Project</title>
</head>
<body>
    <div class="container">
        <h1>Search Users</h1>
        <hr>
        <form>
            <div class="row">
            <label for="user" class="col-2">Search User :</label>
            <input type="text" name="user" class="form-control col-10 getInput">
            </div>
        </form>
        <br>
        <p>Suggestions : <span id="output" style="font-weight:bold"></span></p>
    </div>

    <script>
        var getInput = document.querySelector(".getInput");
        var output = document.getElementById("output")

        getInput.addEventListener("keyup", showSuggestion);

        function showSuggestion(e){
            var val=this.value;
            if(val.length==0){
                output.innerHTML="";
            }else{
                // AJAX REQUEST

                var xhr = new XMLHttpRequest();
                xhr.open("GET", "suggest.php?q="+val, true);
                xhr.onload=function(){
                    if(this.status==200){
                        output.innerHTML=this.responseText;
                    }
                }
                xhr.send();
            }
        }
    </script>
</body>
</html>