<?php
header("Content-Type: text/css; charset=UTF-8");
?>

body {
font-family: Arial, Helvetica, sans-serif;
margin: 0;
background-color: white;
}

html {
box-sizing: border-box;
}

*, *:before, *:after {
box-sizing: inherit;
}

.column {
float: left;
width: 33.3%;
margin-bottom: 16px;
padding: 0 8px;
}

.container1 {
padding: 0 16px;
display: flex;
flex-wrap: wrap;
align-items: stretch;
margin: 4px 5px;
letter-spacing: 1px;
border-radius: 10px;
border: 1px solid white;
overflow: hidden;
width:80%;
height: 200px;
transition: 0.7s ease;
box-sizing: content-box;
}

.title {
color: white;
}
h3{
color: #aca89d;
font-size:20px;
margin-top: 4px;

margin-bottom: 0px;
}
h2{
text-align: left;
color: white;
padding-bottom:2px;
font-size:25px;
margin-top: 14px;
margin-bottom: -23px;
}
h1{
font-weight: 500;
letter-spacing: 1px;
display: flex;
margin-bottom: 4px;
margin-left: 30px;
text-transform: uppercase;
font-size: 2em;
color: #a91d99da;
font-family: Georgia, 'Times New Roman', Times, serif;
text-align: center;

}
h4{
text-align: left;
padding-left:5%;
color: white;
font-size:40px;
}
.lol{
width: 100%;
min-height: 90vh;
align-items: center;
display: flex;
background-size: cover;
background-attachment: fixed;
background-image: url("Untitled design1.png");
}
.new{
color:white;
background-color:Transparent;
text-align:center;
margin-top:10px;
font-weight:bold;
letter-spacing:1px;
font-family: Georgia, 'Times New Roman', Times, serif;
font-size:30px;

}
.em{
color: #aca89d;
font-size:15px;
padding-left:0px;
}