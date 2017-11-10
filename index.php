<html>
<head>

<meta charset="utf-8">
</head>
<body>
	<form action="index.php" method="post">
	num 1: <input type="text" name="test"> <BR> 
	num 2: <input type="text" name="test1"> <BR> 
	<input type="submit" value="записать"> <BR> 
<br>
<br>
    num 3: <input type="text" name="test2"> <BR> 
	num 4: <input type="text" name="test3"> <BR> 
	<input type="submit" value="записать"> <BR> 

	</form>

<?php
	$res="testik";

	$num1=$_POST["test"];
	$num2=$_POST["test1"];
	$num3=$_POST["test2"];
	$num4=$_POST["test3"];


	if (!$num1=="") {

if (!file_exists($num1.".txt")){

$test=fopen($num1.".txt","w");
fwrite($test,$num2);

fclose($test);
} else 
	echo '<p style="color:red">файл существует</p>';
}

$res3=(int)$num4;
if(!$num3=="") {

  if (file_exists($num3.".txt")){
   $test2=fopen($num3.".txt","r");
   $res=fread($test2,$res3);
   fclose($test2);
   echo $res."<BR>";
  }

  else if (file_exists($num3)){
   $test2=fopen($num3,"r");
  $res=fread($test2,$res3);
   fclose($test2);
  echo $res."<BR>";
 }
  else
   echo '<p style="color:red">файл не существует</p>'."<BR>";




}




$res2=proverka($num3);
function proverka ($test){

   	$fun=strlen($test);
   	
  
   
   	

   	$myres = mb_substr($test,$fun-4,5);
   
   if ($myres!=".txt"){
	$test=$test.".txt";}
 else if ($myres=".txt") {
 	$test=$test;
 
}
	return $test;
}

 ?>
</body>

</html>