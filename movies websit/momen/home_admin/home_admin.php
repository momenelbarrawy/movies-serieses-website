<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Admin</title>
    <style>
/* Reset styles */

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

/* Global styles */

body {
  font-family: 'Open Sans', sans-serif;
  font-size: 16px;
  line-height: 1.5;
  color: #333;
}

.background {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  filter: brightness(70%);
  z-index: -1;
}

h1 {
  font-size: 3rem;
  font-weight: bold;
  text-align: center;
  margin: 4rem 0;
  color: #a91d99;
}

.buttons {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 1.5rem;
  max-width: 80rem;
  margin: 0 auto;
}

.buttons a {
  text-decoration: none;
}

.buttons button {
  padding: 1.5rem 3rem;
  font-size: 1.5rem;
  font-weight: bold;
  color: #fff;
  background-color: #383437;
  border: none;
  border-radius: 0.5rem;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
  box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.2);
}

.buttons button:hover {
  background-color: #3b3a3b;
  transform: translateY(-0.2rem);
  box-shadow: 1px 1px 10px #a91d99;
}

@media (max-width: 768px) {
  h1 {
    font-size: 2rem;
    margin: 2rem 0;
  }
  
  .buttons {
    gap: 1rem;
  }
  
  .buttons button {
    font-size: 1.2rem;
    padding: 1rem 2rem;
    border-radius: 0.3rem;
  }
  
  .buttons button:hover {
    transform: translateY(-0.1rem);
    box-shadow: 1px 1px 5px #a91d99;
  }
}


    </style>
</head>

<body>
    <img src="home.jpeg" alt="" class="background">
    <h1>Admin Home</h1>
    <div class="buttons">
        <a href="/movies websit/mina/add_movie/index.php">
            <button>Add Movie</button>
        </a>
        <br>
        <a href="/movies websit/mostafa/add_series/index.php">
            <button>Add Series</button>
        </a>
        <br>
        <a href="/movies websit/momen/add episode/add_episode.php">
            <button>Add Episode</button>
        </a>
        <br>
        <a href="/movies websit/moataz/movies_admin/">
            <button>See Movies</button>
        </a>
        <br>
        <a href="/movies websit/moataz/series_admin/">
            <button>See Series</button>
        </a>
        <br>
        <a href="http://localhost:3000/movies%20websit/momen/EPISODE_admin/display_episode_admin.php">
            <button>See Episodes</button>
        </a>
        <br>
        <a href="http://localhost:3000/movies%20websit/moataz/feedback/index.php">
            <button>Feedback</button>
        </a>
        <br>
        <a href="http://localhost:3000/movies%20websit/naden/project.php">
            <button>Home</button>
        </a>
    </div>
</body>

</html>