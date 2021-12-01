<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script type="text/javascript">
    function showUser(user) {
      if (user == "") {
        document.getElementById("TextAdd").innerHTML = "";
        return;
      }
      if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
      } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          document.getElementById("textAdd").innerHTML = xmlhttp.responseText;
        }
      }
      xmlhttp.open("GET", "getuser.php?user=" + user, true);
      xmlhttp.send();
    }
  </script>
</head>

<body>
  <div class="container fluid">
    <form>
      <select class="form-select" name="users" onchange="showUser(this.value)">
        <option value="">Sélectionner une personne:</option>
        <option value="1">Julien Vaupré</option>
        <option value="2">Lois Griffin</option>
        <option value="3">Joseph Swanson</option>
        <option value="4">Glenn Quagmire</option>
      </select>
    </form>
    <span id="textAdd"></span>
  </div>
  </div>
</body>

</html>