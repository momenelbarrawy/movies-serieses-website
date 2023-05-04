<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "series";

$conn = new mysqli($servername, $username, $password, $dbname);

if (!isset($conn)) {
  die("Connection failed: " . mysqli_connect_error($conn));
}

$id = $_GET["id"];

$sql = "SELECT * FROM series WHERE id ='$id'";
$result = mysqli_query($conn, $sql);

if ((mysqli_num_rows($result) > 0)) {
  $row = mysqli_fetch_assoc($result);
  $name = $row["name"];
  $type = $row["type"];
  $cover = $row["cover"];
  $description = $row["description"];
  $trailer = $row["trailer"];
  $number = $row["episodes"];
} else {
  echo "No image found.";
}

// echo "<img src='data:image/jpeg;base64," . base64_encode($row['man']) . "' /><br>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>series page</title>
  <link rel="stylesheet" href="./main.css">
</head>

<body>
  <?php
  include("nav.php")
  ?>
  <div class="main">
    <div class="cover">
      <?php echo "<img src='data:image/jpeg;base64," . base64_encode($cover) . "' />"; ?>
      <?php echo "<p>$description </p>"; ?>
    </div>
    <div class="trailer">
      <?php echo "<a href='" . $trailer . "' target='_blank'>TRAILER:</a> "; ?>
      <?php echo "<embed src='https://www.youtube.com/embed/.$trailer.'>"; ?>
    </div>
    <!-- <div class="clear"></div> -->
    <p style=" font-size: 40px; text-align: center; color: blueviolet; margin-bottom: 20px;">EPISODS:</p>
    <div class="ep">
      <?php
      for ($i = 1; $number >= $i; $i++) { ?>
        <div class="episode"><?php
                              $x = $i; ?>
          <a href="momen_ep.php?num=<?php echo ($x); ?>&id=<?php echo $id; ?>"><?php
                                                                            echo "<p>EPISODE $i</p>";
                                                                            echo "<img src='data:image/jpeg;base64," . base64_encode($cover) . "' />";
                                                                            ?>
          </a>
        </div>
      <?php
      }
      ?>
      <div class="clear"></div>
    </div>
  </div>
</body>

</html>