<?php
header("Content-Type: text/css; charset=UTF-8");
?>

h1{
color: #a91d99da;
padding-top: 70px;
padding-left: 20px;
text-align:left;
font-family: "Times New Roman", Times, serif;
}
/*input[type="checkbox"] {
display: none;
}*/

label[for="my-checkbox"] {
display: inline-block;
background-color: #ccc;
color: #333;
padding: 10px 20px;
border: none;
cursor: pointer;
transition: 0.7s ease;
margin-left:30px;
text-align:left;
font-family: "Times New Roman", Times, serif;
letter-spacing:1px;
}
label:hover {
background-color: #a91d99da;
transform: scale(1.1);
}

.form1{
padding-bottom:20px;
transition: background-color 0.5s ease;
}

input[type="checkbox"]:checked + .form {
background-color: #333;
}

input[type="checkbox"]:checked + label {
background-color: #333;
color: #fff;
}
.card{
display: flex;
align-items: stretch;
margin: 4px 5px;
letter-spacing: 1px;
border-radius: 10px;
border: 1px solid white;
overflow: hidden;
width: 154px;
height: 250px;
transition: 0.7s ease;
box-sizing: content-box;
}
.card:hover {
transform: scale(1.1);
opacity: 0.8;
}
.column {
float: left;
padding: 15px;
padding-bottom: 0px;
padding-top: 0px;
display:inline-block;
}

.row {
display: flex;
max-width:200%;
margin:0;
flex-wrap:wrap;
text-align: center;

}

select {
font-size: 16px;
padding: 8px 20px;
border: none;
border-radius: 5px;
background-color: #f2f2f2;
color: #333;
box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
transition: background-color 0.3s ease;
}

select:hover {
background-color: #ddd;
}

select:focus {
outline: none;
box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
}

label {
display: block;
margin-bottom: 5px;
font-weight: bold;
}

.text1{
background-color:transparent;
max-width:154px;

}
h5{
margin-top: 10px;
margin-bottom: 10px;
color:white;
font-family: "Times New Roman", Times, serif;
letter-spacing:1px;
text-align:center;
}

li {
display: inline;
float: left;
text-align: center;
}