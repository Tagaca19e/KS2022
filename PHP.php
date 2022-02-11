<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2</title>
<style>
*{
    font-family: sans-serif;
}

.myParagraph{
    text-align: center;
    padding: 30px;
    margin: 0; 
}

.main{ 
    background: #ffb8b8;
    width: 60%;
    font-size: 1em;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    position: absolute;
    display: flex;
    flex-direction: column;

}

button, .main {
    -webkit-box-shadow: 10px 10px 0px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: 10px 10px 0px 0px rgba(0,0,0,0.75);
    box-shadow: 10px 10px 0px 0px rgba(0,0,0,0.75);
}

button {
    margin: auto;
    border: none;
    padding: 15px 35px;
    margin-bottom: 30px;
    font-weight: 600;
    font-size: 24px;
}

.und{
    text-decoration: underline solid 5px #404040;
}

header{
    top: 30%;
    padding: 30px;
    position: absolute;
    font-size: 40px;
    left: 50%;
    transform: translate(-50%, -30%);


    text-decoration: underline solid 10px #404040;
}

</style>
</head>
<body>
  
<header>
<h1> Once Upon A Time...</h1>
</header>

<div class="main">

<?php

set_include_path(get_include_path() . ":/home/fac/nick/public_html/3680/include/");
include_once("variables.php");

$movies = ["Jurassic World", "Spiderman", "Avengers", "Iron Man"];

shuffle($movies);

echo "<h1 class='myParagraph'> A <span class='und'> $animals[0] </span> was <span class='und'>$adjectives[0]</span> in the <span class='und'>$places[0]</span> trying to buy tickets for <span class='und'>$movies[0]</span>, before he was <span class='und'>$adjectives[0]</span> it was eating some <span class='und'>$flavors[0]</span> icecream and was playing with a <span class='und'>$animals[1]</span>, this <span class='und'>$adverbs[0]</span> 
made the two <span class='und'>$adjectives[1]</span> then a <span class='und'>$animals[2]</span> came along and they went to <span class='und'>$places[1]</span> to buy some <span class='und'>$flavors[1]</span> popcon to eat it <span class='und'>$adverbs[1]</span> while watching <span class='und'>$movies[1]</span>. </h1>"
?>
<button onclick="myFunc()"> Click Me </button>
</div>

<script>

const myFunc = () => {

    location.reload();

}


</script>
</body>
</html>



