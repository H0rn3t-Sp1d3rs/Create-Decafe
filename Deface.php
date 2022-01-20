<?php


function create(){

system("clear");

echo "\033[1;34;40m=============================================";
echo "
";
echo "\033[1;33;40m|        DEVELOPED BY MD SUMON ISLAM        |";

echo "
";
echo "\033[1;34;40m=============================================";
echo"\033[1;32;40m
╭╮╱╭┳━━━╮╱╱╱╱╭━━━╮╭╮╱╭━━━╮╱╱╱╭╮╱╱╭┳━━━╮
┃┃╱┃┃╭━╮┃╱╱╱╱┃╭━╮┣╯╰╮┃╭━╮┃╱╱╭╯┃╱╱┃┃╭━╮┃
┃╰━╯┃┃┃┃┣━┳━╮╰╯╭╯┣╮╭╯┃╰━━┳━━╋╮┃╭━╯┣╯╭╯┣━┳━━╮
┃╭━╮┃┃┃┃┃╭┫╭╮┳╮╰╮┃┃┃╱╰━━╮┃╭╮┃┃┃┃╭╮┣╮╰╮┃╭┫━━┫
┃┃╱┃┃╰━╯┃┃┃┃┃┃╰━╯┃┃╰╮┃╰━╯┃╰╯┣╯╰┫╰╯┃╰━╯┃┃┣━━┃
╰╯╱╰┻━━━┻╯╰╯╰┻━━━╯╰━╯╰━━━┫╭━┻━━┻━━┻━━━┻╯╰━━╯
╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱┃┃
╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╰╯
";

echo "\033[1;34;40m=============================================";
 
echo "
";
echo "\033[1;33;40m|        DEVELOPED BY MD SUMON ISLAM        | ";
 
echo "
";
echo "\033[1;34;40m=============================================";
echo "

";
$a= readline("\033[1;33mEnter Your Code Name : ");
$d= readline("\033[1;33mEnter Your Title Name : ");
$t= readline("\033[1;33mEnter Your Team Name : ");

 
/*
echo " ﻿\033[0;36m
<html>
 <head>
 <title>Hacked By $d</title>
 </head>
<body bgcolor=black>
 <br> <br> <br>
<center>
 <marquee> <font color= #00FF00 size=8> $a</font> </marquee>
<br> <br> 
<img src='https://c.tenor.com/tm3KA5yrnmMAAAAC/hacker-man-hacker.gif' height='400px' width='400px'>
 </center>
<br> <br> <br>
<center>
 <font size=7 color=Green>
	Your SERVER has been hacked
	That's just WARNING For You!
</font>
<hr color=red width=100%>
<br>
 <marquee> <font color= #00FF00 size=8> $t</font> </marquee>
</center>
</body>
 </html>
";
*/
 
$myfile = fopen("deface.html", "w") or die("Unable to open file!");
 
 
$txt = "
<html>
 <head>
 <title>Hacked By $d</title>
 </head>
<body bgcolor=black>
 <br> <br> <br>
<center>
 <marquee> <font color= #00FF00 size=8> $a</font> </marquee>
<br> <br> 
<img src='https://c.tenor.com/tm3KA5yrnmMAAAAC/hacker-man-hacker.gif' height='400px' width='400px'>
 </center>
<br> <br> <br>
<center>
 <font size=7 color=Green>
	Your SERVER has been hacked
	That's just WARNING For You!
</font>
<hr color=red width=100%>
<br>
 <marquee> <font color= #00FF00 size=8> $t</font> </marquee>
</center>
</body>
 </html>
 ";

 
 
fwrite($myfile, $txt);
fclose($myfile);
 
 
system("clear");
system("cp deface.html /sdcard");
echo"

";
echo"
\033[1;32;40m
╭╮╱╭┳━━━╮╱╱╱╱╭━━━╮╭╮╱╭━━━╮╱╱╱╭╮╱╱╭┳━━━╮
┃┃╱┃┃╭━╮┃╱╱╱╱┃╭━╮┣╯╰╮┃╭━╮┃╱╱╭╯┃╱╱┃┃╭━╮┃
┃╰━╯┃┃┃┃┣━┳━╮╰╯╭╯┣╮╭╯┃╰━━┳━━╋╮┃╭━╯┣╯╭╯┣━┳━━╮
┃╭━╮┃┃┃┃┃╭┫╭╮┳╮╰╮┃┃┃╱╰━━╮┃╭╮┃┃┃┃╭╮┣╮╰╮┃╭┫━━┫
┃┃╱┃┃╰━╯┃┃┃┃┃┃╰━╯┃┃╰╮┃╰━╯┃╰╯┣╯╰┫╰╯┃╰━╯┃┃┣━━┃
╰╯╱╰┻━━━┻╯╰╯╰┻━━━╯╰━╯╰━━━┫╭━┻━━┻━━┻━━━┻╯╰━━╯
╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱┃┃
╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╰╯
";
echo "\033[1;32mThis deface page saved to your phone storage"; 
echo"
";
echo "\033[1;32mThanks for useing this tool";
 
echo"

";
}

function download(){

system ("clear");

echo "\033[1;34;40m=============================================";
echo "
";
echo "\033[1;33;40m|        DEVELOPED BY MD SUMON ISLAM        |";
echo "
";
echo "\033[1;34;40m=============================================";
echo"
\033[1;32;40m
╭╮╱╭┳━━━╮╱╱╱╱╭━━━╮╭╮╱╭━━━╮╱╱╱╭╮╱╱╭┳━━━╮
┃┃╱┃┃╭━╮┃╱╱╱╱┃╭━╮┣╯╰╮┃╭━╮┃╱╱╭╯┃╱╱┃┃╭━╮┃
┃╰━╯┃┃┃┃┣━┳━╮╰╯╭╯┣╮╭╯┃╰━━┳━━╋╮┃╭━╯┣╯╭╯┣━┳━━╮
┃╭━╮┃┃┃┃┃╭┫╭╮┳╮╰╮┃┃┃╱╰━━╮┃╭╮┃┃┃┃╭╮┣╮╰╮┃╭┫━━┫
┃┃╱┃┃╰━╯┃┃┃┃┃┃╰━╯┃┃╰╮┃╰━╯┃╰╯┣╯╰┫╰╯┃╰━╯┃┃┣━━┃
╰╯╱╰┻━━━┻╯╰╯╰┻━━━╯╰━╯╰━━━┫╭━┻━━┻━━┻━━━┻╯╰━━╯
╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱┃┃
╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╰╯
";
echo "\033[1;34;40m=============================================";
echo "
";
echo "\033[1;33;40m|        DEVELOPED BY MD SUMON ISLAM        |";
echo "
";
echo "\033[1;34;40m=============================================";
echo "
";

$a=readline("\033[1;33;40mEnter Your Deface Link:\033[1;32;40m ");

$url = file_get_contents($a);

$myfile = fopen("deface.html", "w") or die("Unable to open file");

$txt = $url;

fwrite($myfile, $txt);

system("clear");
system("cp deface.html /sdcard");
echo"

";
echo "\033[1;34;40m=============================================";
echo "
";
echo "\033[1;33;40m|        DEVELOPED BY MD SUMON ISLAM        |";
echo "
";
echo "\033[1;34;40m=============================================";
echo"
\033[1;32;40m
╭╮╱╭┳━━━╮╱╱╱╱╭━━━╮╭╮╱╭━━━╮╱╱╱╭╮╱╱╭┳━━━╮
┃┃╱┃┃╭━╮┃╱╱╱╱┃╭━╮┣╯╰╮┃╭━╮┃╱╱╭╯┃╱╱┃┃╭━╮┃
┃╰━╯┃┃┃┃┣━┳━╮╰╯╭╯┣╮╭╯┃╰━━┳━━╋╮┃╭━╯┣╯╭╯┣━┳━━╮
┃╭━╮┃┃┃┃┃╭┫╭╮┳╮╰╮┃┃┃╱╰━━╮┃╭╮┃┃┃┃╭╮┣╮╰╮┃╭┫━━┫
┃┃╱┃┃╰━╯┃┃┃┃┃┃╰━╯┃┃╰╮┃╰━╯┃╰╯┣╯╰┫╰╯┃╰━╯┃┃┣━━┃
╰╯╱╰┻━━━┻╯╰╯╰┻━━━╯╰━╯╰━━━┫╭━┻━━┻━━┻━━━┻╯╰━━╯
╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱┃┃
╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╰╯
";
echo "\033[1;34;40m=============================================";
echo "
";
echo "\033[1;33;40m|        DEVELOPED BY MD SUMON ISLAM        |";

echo "
";
echo "\033[1;34;40m=============================================";
echo "
";

echo"
";
echo"\033[1;32mThis Deface Page Saved To Your Phone Storage";

echo"
";

echo"\033[1;32mThanks For Useing This Tool";

echo"

";


}


system("clear");

echo "\033[1;34;40m=============================================";
echo "
";
echo "\033[1;33;40m|        DEVELOPED BY MD SUMON ISLAM        |";
echo "
";
echo "\033[1;34;40m=============================================";
echo"
\033[1;32;40m
╭╮╱╭┳━━━╮╱╱╱╱╭━━━╮╭╮╱╭━━━╮╱╱╱╭╮╱╱╭┳━━━╮
┃┃╱┃┃╭━╮┃╱╱╱╱┃╭━╮┣╯╰╮┃╭━╮┃╱╱╭╯┃╱╱┃┃╭━╮┃
┃╰━╯┃┃┃┃┣━┳━╮╰╯╭╯┣╮╭╯┃╰━━┳━━╋╮┃╭━╯┣╯╭╯┣━┳━━╮
┃╭━╮┃┃┃┃┃╭┫╭╮┳╮╰╮┃┃┃╱╰━━╮┃╭╮┃┃┃┃╭╮┣╮╰╮┃╭┫━━┫
┃┃╱┃┃╰━╯┃┃┃┃┃┃╰━╯┃┃╰╮┃╰━╯┃╰╯┣╯╰┫╰╯┃╰━╯┃┃┣━━┃
╰╯╱╰┻━━━┻╯╰╯╰┻━━━╯╰━╯╰━━━┫╭━┻━━┻━━┻━━━┻╯╰━━╯
╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱┃┃
╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╱╰╯
";
echo "\033[1;34;40m=============================================";
echo "
";
echo "\033[1;33;40m|        DEVELOPED BY MD SUMON ISLAM        |";

echo "
";
echo "\033[1;34;40m=============================================";
echo "
";
echo "\033[1;33;40mCODE NAME: H0rn3t Sp1d3rs  ";
echo "
";
echo "GITHUB : HTTPS://GITHUB.COM/H0rn3t-Sp1d3rs";
echo "
";
echo "Website : https://m4ds0ul.blogspot.com";
echo"
";
echo "\033[1;34;40m=============================================";
echo "
";
echo "\033[1;33;40m|        DEVELOPED BY MD SUMON ISLAM        |";

echo "
";
echo "\033[1;34;40m=============================================";
echo "

";
echo"\033[1;31;40m[\033[1;32;40m1\033[1;31;40m]\033[1;32;40m Create Deface Page ";
echo"
";
echo"\033[1;31;40m[\033[1;32;40m2\033[1;31;40m]\033[1;32;40m Download For Any Deface Page";
echo"

";

$ab=readline("[x] \033[1;33;40mSELECT YOUR OPTION :");
if ($ab=="1"){


create();
}


elseif ($ab=="2"){

download();
}

else{
echo "inter a valid option";
}


?>
