<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ajax Practice 3 - External API</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        .user {
            display: flex;
            background-color: lightgrey;
            padding: 10px;
            margin-bottom: 10px;
        }

        .user ul {
            list-style: none;
        }
    </style>

</head>

<body>

    <button id="button">Load GitHub Users</button>
    <br><br>
    <h1>GitHub Users</h1>
    <div id="users"></div>

    <script>
        document.getElementById("button").addEventListener('click', loadUsers);

        function loadUsers() {

            var xhr = new XMLHttpRequest();
            // Open - type, url/filename, async t/f
            xhr.open('GET', 'https://api.github.com/users', true)

            xhr.onload = function() {
                if (this.status == 200) {

                    var users = JSON.parse(this.responseText);

                    var output = '';

                    for (var i in users) {
                        output +=
                            '<div class="user">' +
                            '<img src="' + users[i].avatar_url + '" width="70" height="70">' +
                            '<ul>' +
                            '<li>ID: ' + users[i].id + '</li>' +
                            '<li>Name: ' + users[i].login + '</li>' +
                            '<li>URL: ' + users[i].html_url + '</li>' +
                            '</ul>' +
                            '</div>';

                    }

                    document.getElementById('users').innerHTML = output;
                }
            }

            xhr.send();

        }
    </script>

</body>

</html>