<?php
header("Content-Type: text/css; charset=UTF-8");
?>

* {
margin: 0;
padding: 0;
box-sizing: border-box;
background-color:black;
}


.wrapper {
background: transparent;
border-radius: 10px;
width: 100%;
height: 330px;
display: flex;
justify-content: center;
align-items: center;
border-bottom-left-radius: 0;
border-bottom-right-radius: 0;
}

.wrapper .form input {
background: #222222;
color: white;
font-size: 15px;
width: 450px;
border-radius: 20px;
padding: 10px;
box-shadow: 0px 0px 3px #aa00b0;
outline: none;
display: inline-block;
margin-bottom: 10px;
margin-top: 20px;

}
.text{
padding-top:60px;

}

.wrapper .form textarea {
background: #222222;
color: white;
font-size: 15px;
width: 450px;
border-radius: 20px;
padding: 10px;
border: none;
outline: none;
resize: none;
box-shadow: 0px 1px 3px #aa00b0;
}

.wrapper .form .btn {
background: #a91d99da;
color: white;
font-size: 15px;
border: none;
outline: none;
cursor: pointer;
padding: 10px;
width: 200px;
border-radius: 20px;
margin: 0 auto;
display: block;
margin-top: 5px;
margin-bottom: 20px;
opacity: 0.8;
transition: 0.3s all ease;
margin-bottom: 5px;

}

.wrapper .form .btn:hover {
opacity: 1;
}

.content {
text-align: center;
background-color: transparent;
color: purple;
padding: 10px;
padding-left: 10px;
justify-content:center;
width: 75%;
border-radius: 10px;
margin-top:73px;
border: 1px solid purple;
justify-content:center;
margin-left:10%;
}

.content p {
margin-bottom: 15px;
width: 450px;
padding-top:10px;
text-align:left;
padding-left: 10px;
color:grey;
}
h3{
text-align:left;
font-size:20px;
padding-top:8px;
margin-left:55px;
}
h1{
text-align:left;
font-size:15px;
padding-top:6px;
margin-left:55px;
}