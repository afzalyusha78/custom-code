<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Text</title>
    <style>

       .carousel-slide{
            position:relative !important    ;
        }
    </style>
</head>
<body>
    <div id="main">
        This is the original text when the page first loads.
    </div>
    <button id="ajax-button" type="button">Update content with AJAX</button>
    <script>
        function replaceText(){
            var target = document.getElementById("main");
            var xhr = new XMLHttpRequest();
            xhr.open('GET','new_content.txt',true);
            xhr.onreadystatechange= function(){
                console.log('readyState:' + xhr.readyState);
                if(xhr.readyState == 2){
                    target.innerHTML  = 'Loading ...';
                }
                if(xhr.readyState == 4 && xhr.status == 200){
                    target.innerHTML = xhr.responseText;
                }
            }
            xhr.send();
        }

        var button = document.getElementById("ajax-button");
        button.addEventListener("click",replaceText);
    </script>
</body>
</html>