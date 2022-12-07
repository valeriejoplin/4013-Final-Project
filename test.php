<!DOCTYPE html>
<html>
<head>
  <title>Form with Button</title>
</head>
<body>
  <h1>Address Form</h1>
  <button id="openFormButton">Open Form</button>
  <form id="addressForm" style="display:none;">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="address">Address:</label><br>
    <input type="text" id="address" name="address"><br>
    <label for="city">City:</label><br>
    <input type="text" id="city" name="city"><br>
    <label for="state">State:</label><br>
    <input type="text" id="state" name="state"><br>
    <label for="zip">Zip Code:</label><br>
    <input type="text" id="zip" name="zip"><br><br>
    <input type="submit" value="Submit">
  </form>
  <script>
    var openFormButton = document.getElementById('openFormButton');
    var addressForm = document.getElementById('addressForm');
    openFormButton.addEventListener('click', function() {
      addressForm.style.display = 'block';
    });
  </script>
</body>
</html>
