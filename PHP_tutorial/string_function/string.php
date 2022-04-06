<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>String Function</title>
</head>
<body>

  <h2>String Functions</h2>
  <?php
  //String Length Check
  $len = "Akshay";
  $len1 = strlen($len);
  echo "Length of [".$len. "] is [".$len1."]<br>"; 
  
  //String Word Count
  $word_count = "Hello Akshay, Good Morning";
  $word_count1 = str_word_count($word_count);
  echo "word of [".$word_count."] is [".$word_count1."]<br>";

  //Reverse String
  $rvrs = "Hello Dikshit";
  $rvrs1 = strrev($rvrs);
  echo "Revers of [" .$rvrs."] is [".$rvrs1."]<br>";

  //word Search position in String
  $searchword = "Hello Akki, How are you";
  $searchword1 = strpos($searchword,"are");
  echo "The position of [are] in [".$searchword."] is [".$searchword1."]<br>" ;

  //Replace string
  $rplc = "Hello doodle";
  $rpplc1 = str_replace("doodle","google",$rplc);
  echo "Replce [".$rplc."] to [".$rpplc1."]";

  ?>
</body>
</html>