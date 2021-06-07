<?php
header("Content-type: text/css");
?>

@import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');


body {

    font-size: 13px;
    font-family: 'Open Sans', sans-serif;
}

a { 
color:#000000; 
}


h2 {
    text-align:center;
    color: #000000;
	font-family: 'Open Sans', sans-serif;
}

h3 {
    font-family: 'Open Sans', sans-serif;
	margin-bottom: 20px;
    color: #000000;
	text-align:left;
	font-size: 26px;
	font-weight:bold;
}

.contatoform {

	margin-left: 80pt;
    padding:10pt;
	float:left;

}

#dados{
   
    margin-bottom:70px;	
	float:right;
	margin-right:80pt;
 
}

#dados, h3 {
    margin-top: 15px;
	color: #000000;
	text-align:left;
}

input, textarea {
    padding: 10px;
    border: 1px solid #E5E5E5;
    width: 200px;
    color: #000000;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;
    moz-box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;
    webkit-box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;
}
textarea {
	width: 400px;
    height: 150px;
    max-width: 400px;
    line-height: 18px;
}
input:hover, textarea:hover,
input:focus, textarea:focus {
    border-color: 1px solid #C9C9C9;
    box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;
    moz-box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;
    webkit-box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;     
}
.form label {
    margin-bottom: 10px;
    color: black;
    display: block;
}
.submit input {
    width: 100px;
    height: 40px;
    background-color: #d7666d;
    color: #FFF;
    border-radius: 3px;
    moz-border-radius: 3px;
    -webkit-border-radius: 3px;                     
}

.submit input:hover {
background: rgb(153, 70, 75);
}

