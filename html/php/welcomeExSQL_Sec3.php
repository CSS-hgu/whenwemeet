<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your address is: <?php echo $_POST["address"]; ?><br>
Your favorite store is: <?php echo $_POST["fav_store"]; ?><br>
database insertion<br>
A record for name, address, and store has benn inserted.

<h3><a href="formDBSec3.html">Home Site</a></h3>

</body>
</html>

<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  '111111',
  'whenwemeet');
$sql = "SELECT * FROM topic WHERE id = 0";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);