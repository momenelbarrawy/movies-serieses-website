<?php
header("Content-Type: text/css; charset=UTF-8");
?>
body{
background-color: black;
}
nav {
display: flex;
justify-content: space-around;
align-items: left;
width: 100%;
height: 10%;
background-color: transparent;
position: fixed;
background-size: cover;
z-index: 999;
padding-top: 10px;
background-color: #000000;
}
.search {
width: 25%;
height: 40px;
background-color: rgba(245, 245, 245, 0.8);
display: flex;
justify-content: right;
align-items: center;
border-radius: 20px;
padding: 0px 10px;
}

.search input {
width: 100%;
height: 30px;
border: none;
outline: none;
background-color: transparent;
padding-left: 10px;
}


.logo img {
height: 60px;
width: 200px;
align-items: top left;
overflow: auto;
border: none;

}
a.link {
font-family: Arial, Helvetica, sans-serif;
background-color: #383437da;
text-decoration: none;
font-size: 1.1em;
color: #8f8a8a;
display: inline-block;
padding: 0.5em 0.5em;
letter-spacing: 1px;
border-radius: 15px;
margin-bottom: 40px;
transition: 0.7s ease;
}


a.link:hover {
background-color: #3b3a3bda;
transform: scale(1.1);
}
.myDiv {
background-color: transparent;
text-decoration: none;
font-size: large;
border-radius: 30px;
padding: 4px;
padding-left:30%;

}
.fa {
padding: 4px;
width: 20px;
text-align: center;
text-decoration: none;
margin: 20px 5px;
margin-left: 50px;
padding-left: 21px;
}

.fa:hover {
opacity: 0.7;
}
.fa-search {
background: transparent;
color: rgba(255, 255, 255, 0.509);
}