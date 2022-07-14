<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ajax Practice 1 - Txt File</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>

    <button id="button">Get text file</button>
    <p id="text"></p>

    <script>
        // Create event listener

        document.getElementById("button").addEventListener('click', loadText);

        function loadText() {

            // Create XHR object
            var xhr = new XMLHttpRequest();
            // Open - type, url/filename, async t/f
            xhr.open('GET', 'sample.txt', true)

            xhr.onload = function() {
                if (this.status == 200) {
                    document.getElementById('text').innerHTML = this.responseText
                } else if (this.status == 404) {
                    document.getElementById('text').innerHTML = '404 not found!!!';
                }
            }

            xhr.send();


        }
    </script>

</body>

</html>