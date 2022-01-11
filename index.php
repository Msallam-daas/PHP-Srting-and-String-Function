<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Srting and String Function</title>
</head>
<body>

  <?php

  //1.a convert the entered string to Uppercase

  $lowername="msallam";
  echo strtoupper($lowername);
  echo "<br>";
  echo "<br>";

  //1.b convert the entered string to Lowercase

  $uppername="YOUSEF";
  echo strtolower($uppername);
  echo "<br>";
  echo "<br>";

  //1.c Make the first letter of the string Uppercase

  $lowername="msallam";
  echo ucfirst($lowername);
  echo "<br>";
  echo "<br>";

  //1.d Make the first letter of each word capitalized

  $word="hello world";
  echo ucwords($word);
  echo "<br>";
  echo "<br>";

  //2 numeric string to be a date format

  $numeric="085119";
  $time = strtotime($numeric);
  echo date ('h:i:s' , $time );
  echo "<br>";
  echo "<br>";
  
   //3 check whether the sentence contains a specific word

   $sentence  = "i am afull stack development at orange coding academy";
   if(strpos($sentence, "orange") == true){
    echo "Word Found!";
    echo "<br>";
    echo "<br>";
   }

   //4 extract the file name from the URL

   $url="www.orange.com/index.php";
   $file_name=strstr( $url,'/',false);
   echo $file_name;
   echo "<br>";
   echo "<br>";

   //5 extract the username from the follwing email address

   $email="info@orange.com";
   $username=strstr($email,'@',true);
   echo $username;
   echo "<br>";
   echo "<br>";

    //6 get the last three characters from the string

    $email="info@orange.com";
    $com=substr($email,-3);
    echo $com;
    echo "<br>";
    echo "<br>";
    
    //7 generate simple random passwords

    function pass_generate($chars){
    $data="12345689922mieoejoicjpjejeee";
    return substr(str_shuffle($data),0,$chars);
    }
    echo pass_generate(8);
    echo "<br>";
    echo "<br>";

    //8 replace the first word with another word

    $para="that new trainee is so genias";
    echo str_replace("that","our",$para);
    echo "<br>";
    echo "<br>";
    
    //9 find the first character that is different betwwen two string

    $string1="dragonball";
    $string2="dragonboll";
    $diffrent=strspn($string1 ^ $string2 , "\0");
    echo "the difference between two string at position $diffrent";
    echo "<br>";
    echo "<br>";
    
    //10 put a string in an array

    $string_array = "Twinke ,twinke , little star";
    var_dump( explode( ',', $string_array ) );
    echo "<br>";
    echo "<br>";

    //11 print the next letter of the inputted letter

    $letter_a = "a";
    $next_letter_a = ++$letter_a;
    echo $next_letter_a[0];
    echo "<br>";
    echo "<br>";
    $letter_z = "z";
    $next_letter_z = ++$letter_z;
    echo $next_letter_z[0];
    echo "<br>";
    echo "<br>";

    //12 insert a string at the specified position in a given string

    $string_insert="The  brown fox";
    echo substr_replace($string_insert,"quick",4,0); // 4 will start replacing at the fourth character
    echo "<br>";
    echo "<br>";

    //13 remove zeroes from the given number

    $number_trim="00000000077514555033";
    echo str_replace("0","", $number_trim);
    echo "<br>";
    echo "<br>";

    //14 remove part of string

    $string_remove = "The quick brown fox jumps over the lazy dog";
    echo str_replace("fox", " ", $string_remove);
    echo "<br>";
    echo "<br>";

    //15 remove tralling dashes from a string

    $string_remove_dashes = "The quick brown fox jumps over the lazy dog---";
    echo trim($string_remove_dashes,"-");
    echo "<br>";
    echo "<br>";
    
    //16 remove special charcters from a string

    $string_with_charcters="1*525215/$#";
    echo str_replace(["/","#","$","*"],"",$string_with_charcters);
    echo "<br>";
    echo "<br>";

    //17 select first 5 words  from a string

    $string_select = "The quick brown fox jumbs over the lazy dog";
    echo substr($string_select,0, 25);
    echo "<br>";
    echo "<br>";

    //18 remove comma(s) from a numeric string

    $number_comma = "2,543.12";
    echo str_replace(","," ", $number_comma);
    echo "<br>";
    echo "<br>";

    //19 print letters from "a" to "z"

    $alpha = "a";
    for($i=0;$i<26;$i++){
    echo $alpha++;
    }
    echo "<br>";
  ?>
 
</body>
</html>