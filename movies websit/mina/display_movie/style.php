 <?php
header("Content-Type: text/css; charset=UTF-8");
?> 


body {
font-family: Arial, Helvetica, sans-serif;
margin: auto;
scroll-behavior: smooth;
max-width: 100%;
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
box-shadow: 0px 0px 5px #aa00b0;
}

.card {
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
display: block;

}

.row {
display: flex;
max-width: 200%;
margin: 0;
flex-wrap: wrap;
text-align: center;

}

li {
display: inline;
float: left;
text-align: center;
}

h5 {
margin-top: 10px;
margin-bottom: 10px;
color: white;
font-family: "Times New Roman", Times, serif;
letter-spacing: 1px;
text-align: center;
}

.text1 {
background-color: transparent;
max-width: 154px;

}

.search {
width: 270px;
height: 40px;
background-color: rgba(245, 245, 245, 0.8);
display: flex;
justify-content: center;
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




.main {
width: 100%;
min-height: 90vh;
background-color: #aca89d;
background-image: url("home.jpeg");
align-items: center;
display: flex;
background-size: cover;
background-attachment: fixed;
}

p {
color: #ede4e4;
text-align: center;
font-size: 30px;
padding-left: 150px;
padding-top: 40px;

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



.showcase-heading {

font-weight: 500;
letter-spacing: 1px;
display: flex;
margin-bottom: 4px;
margin-left: 30px;
text-transform: uppercase;
font-size: 2em;
color: #a91d99da;
font-family: Georgia, 'Times New Roman', Times, serif;
text-align: left;


}


p {
width: 100%;
display: flex;
justify-content: center;
align-items: center;
flex-direction: column;
margin: 10px;
}

.myDiv {
background-color: transparent;
text-decoration: none;
font-size: large;
border-radius: 10px;
padding: 4px;

}


body {
background-color: #000000;
}

footer {
display: flex;
box-shadow: 0px 2px 5px #aa00b0;
border-top: 5px solid rgba(0, 0, 0, 0.1);
background-color: #000000;
clear: none;
position: relative;
bottom: -130px;
width: 100%;

}



.fa {
padding: 20px;
width: 20px;
text-align: center;
text-decoration: none;
border-radius: 50%;
margin: 20px 5px;
margin-left: 50px;
}

.fa:hover {
opacity: 0.7;
}

.hi {
color: #77787b;
padding-left: 21px;
text-decoration: none;
}

.fa-facebook {
background: #3B5998;
color: white;
}

.fa-twitter {
background: #55ACEE;
color: white;
}

.fa-github {
background: #030303;
color: white;
}

.fa-search {
background: transparent;
color: rgba(255, 255, 255, 0.509);
}

.legal-row-container {
font-size: 18px;
color: #9B9B9B;
text-align: center;
display: inline-block;
padding-left: 10%;
}


.container {
max-width: 100%;
margin: 0 auto;
display: flex;
flex-direction: column;
padding: 10px;

}

.content {
background-color: transparent;

margin-bottom: 20px;
border-radius: 3px;
box-shadow: 0px 0px 5px #aa00b0;
width: 100%;
max-width: 100%;
text-align: center;
}