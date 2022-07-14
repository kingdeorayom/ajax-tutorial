<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ajax Practice 2 - JSON File</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css
">
</head>

<body>

    <div class="container text-center p-5">
        <button class="btn btn-secondary rounded-0" id="button1">Get user</button>
        <button class="btn btn-secondary rounded-0" id="button2">Get users</button>
        <br><br>
        <h1>User</h1>
        <div id="user"></div>
        <h1>Users</h1>
        <div id="users"></div>
    </div>

    <script>
        document.getElementById("button1").addEventListener('click', loadUser);
        document.getElementById("button2").addEventListener('click', loadUsers);

        function loadUser() {

            var xhr = new XMLHttpRequest();
            // Open - type, url/filename, async t/f
            xhr.open('GET', 'user.json', true)

            xhr.onload = function() {
                if (this.status == 200) {

                    var user = JSON.parse(this.responseText);

                    var output = '';

                    output += '<ul style="list-style-type: none;">' +
                        '<li>ID: ' + user.id + '</li>' +
                        '<li>Name: ' + user.name + '</li>' +
                        '<li>Email: ' + user.email + '</li>' +
                        '</ul>';

                    document.getElementById('user').innerHTML = output;
                }
            }

            xhr.send();

        }

        function loadUsers() {

            var xhr = new XMLHttpRequest();
            // Open - type, url/filename, async t/f
            xhr.open('GET', 'users.json', true)

            xhr.onload = function() {
                if (this.status == 200) {

                    var users = JSON.parse(this.responseText);

                    var output = '';

                    for (var i in users) {
                        output += '<ul style="list-style-type: none;">' +
                            '<li>ID: ' + users[i].id + '</li>' +
                            '<li>Name: ' + users[i].name + '</li>' +
                            '<li>Email: ' + users[i].email + '</li>' +
                            '</ul>';
                    }

                    document.getElementById('users').innerHTML = output;
                }
            }

            xhr.send();

        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>