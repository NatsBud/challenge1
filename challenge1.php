<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />

</head>
<body>
    <h1>PHP</h1>
    <?php
function get_the_title(){
    return 'babababa'; 
}

 $txt = get_the_title(); 
 echo '<span >CONVERT ME: </span>'.'<span id="toText">'. $txt .'</span>'.'<br>' ; 


 $ctxt = str_replace('b','a',$txt );
echo '<span>RESULT: </span>'.$ctxt; 
    ?>


 <h1>JAVASCRIPT</h1>
<br/>
<span id="output"> </span>
<br>
<input type="button" value="change" onclick="changeTxt()">    
<script> 

function changeTxt () {
let txt = document.getElementById('toText').innerHTML;

let ctxt = txt.replace(/b/g, 'a' );
let output = document.getElementById('output').innerHTML = ctxt; 
return output;
};


</script>


</body>
</html>