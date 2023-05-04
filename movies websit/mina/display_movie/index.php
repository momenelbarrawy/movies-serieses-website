<?php
$conn = mysqli_connect("localhost","root","","movies");
if(!isset($conn)){
//     echo "okk";
// }
// else{
    echo "wrong";
}
$id = $_GET["id"];  
$sql = "SELECT * FROM movies WHERE id = '$id' ";
$result = mysqli_query($conn ,$sql);
if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_assoc($result);
    $name = $row["name"];
    $type = $row["type"];
    $description = $row["description"];
    $trailer = $row["trailer"];
    $cover = $row["cover"];
    $vedio = $row["vedio"];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/movies websit/mina/display_movie/design.2/old/design.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Films</title>
</head>
<body>
    
    <?php 
    include('nav.php');
     ?>
    <!-- <nav>
        <a href="#">Home</a>
        <a href="#">Serise</a>
        <a href="#">Movie</a>
        <form action="" >
            <input type="text" placeholder="Search..">
        </form>
    </nav> -->

    <div class="cover">
        <?php  echo "<img src='data:image/jpeg;base64," . base64_encode($cover) . "' />"; ?>
    </div>
    <div class="name">
        <?php echo $name ; ?>
    </div>

    <div class="description">
        <?php echo $description; ?>
    </div>
    <div class="trailer">
        <!-- <a href="#"> www.youtube.com</a> -->
        <?php echo "<a href='".$trailer."'> Trailer</a>" ?>
    </div>

    <div class="rating">
        <input type="radio" name="star" id="star1" ><label for="star1">
        </label>
        <input type="radio" name="star" id="star2" ><label for="star2">
        </label>
        <input type="radio" name="star" id="star3" ><label for="star3">
        </label>
        <input type="radio" name="star" id="star4" ><label for="star4">
        </label>
        <input type="radio" name="star" id="star5" ><label for="star5">
        </label>
    </div>

    <div class="movie">
        <video controls class="vedio">
          <source  src=<?php echo "'data:video/mp4;base64,". base64_encode($row['vedio']) ."'  />" ?>
        </video>
    </div>
</body>
</html>

<?php
}//if row
else{
    echo "no data";
}
//  include("footer.php"); 
?>