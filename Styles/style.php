<?php
    header('Content-type: text/css; charset:UTF-8');
    $primary_color = $_GET['theme'];
?>
h1{
    text-align:center;
    color: Black;
    margin: 10% 0 0 0;
}

h2{
    text-align:center;
    color: Black;
}

h3{
    text-align:center;
    margin-top: 0;
    margin-bottom: 0;
}

body{
    background: white;
}

.box{
    width: 50%;
    border-radius: 5px;
    margin: 0% 29% auto;
    background: white;
    padding: 50px 10px;
    text-align: left;
}

.top{
    text-align: center;
    width: 100%;
    margin: auto;
    padding: 5px;
    background: #808080;
}

.butt{
    margin: 0 0 0 10%;
    background-color: #4CAF50;
    padding: 15px 32px;
    on

}



/* FORMS */
form.one {
    border: solid gray 1px;
    width: 40%;
    border-radius: 5px;
    margin: 0% 29% auto;
    background: white;
    padding: 50px 10px 10px 10px;  
}

/* Aligning form elements */
label,
input {
  display: inline-block;
}

label {
  width: 30%;
  text-align: right;
}

label+input {
  width: 50%;
  margin: 0 10% 0 4%;
}


/* BUTTONS */
#btn{
    
    color: Black;
    background: white;
    padding: 5px;
    width:10%;
    margin: 5% 5% 0 5%;
}

#btn2{
    
    margin: 0 0 0 30%;
}

#btn3{
    
    margin: 0 0 0 37%;
}

button{
    margin: 0 0 0 10%;
    background-color: #4CAF50;
    padding: 15px 32px;
    on

}

button:hover{
    background-color: #f44336;
}


/* LINKS */
a.one {
  margin: 0 0 0 40%;
}
a.two {
  margin: 0 25% 0 5%;
}

a.three {
  color:Black;
  background: White
  padding: 5px;
  width:20%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 0 0 0 30%;
}

a.four {
  margin: 0 0 0 82%;
}


/* TABLES */
table, th, td {
  border: 1px solid MidnightBlue;
}

table{
    width: 100%;
    table-layout: fixed;
    border-collapse: collapse;
    border: 1px solid;
}

th, td {
  padding: 15px;
}

th {
  background-color: White;
  color: Black;
  text-align: center;
}

td{
  text-align: left;
  margin: 0 10% 0 4%;
}

tr{
  
}

tr:hover {background-color: HoneyDew;}


/* POP-UP MESSAGES */
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

.success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}
