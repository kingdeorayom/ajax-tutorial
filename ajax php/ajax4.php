<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>AJAX PHP</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="" />
</head>

<body>

  <h1>PHP POST FORM NO AJAX</h1>
  <form method="POST" action="process.php">
    <input type="text" name="name">
    <input type="submit" value="Submit">
  </form>

  <h1>PHP POST FORM WITH AJAX</h1>
  <form id="postForm">
    <input type="text" name="name" id="name">
    <input type="submit" value="Submit" id="submit">
  </form>

  <p id="text">this text should change upon sending form</p>

  <script>
    document.getElementById("postForm").addEventListener("submit", postName);

    function postName(e) {
      e.preventDefault();

      var name = document.getElementById('name').value;
      var params = "name=" + name;

      var xhr = new XMLHttpRequest();

      xhr.open("POST", "process.php", true);
      xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

      xhr.onload = function() {
        document.getElementById('text').innerHTML = xhr.responseText;
      }

      xhr.send(params);

    }
  </script>
</body>

</html>