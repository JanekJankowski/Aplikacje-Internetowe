<?php
$text = <<< SCHOOL
ZSŁ - Zespół
Szkół
Łączności<br>
SCHOOL;
echo $text;
echo nl2br($text);

$data="jAnUSZ kOWalSkI";
echo ucfirst($data)."<br>";
echo ucwords($data)."<br>";

$lorem="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
echo $lorem."<br"."<br";
echo wordwrap($lorem, 40, "<br>");
echo wordwrap($lorem, 40, "<hr>");

$name1="Łukasz";
$name2="  Łukasz ";
echo "<br>";
echo "Ilość znaków \$name1: ".strlen($name1)."<br>";
echo "Ilość znaków \$name2: ".strlen($name2)."<br>";

echo mb_strlen(ltrim($name2))."<br>";
echo mb_strlen(rtrim($name2))."<br>";
echo mb_strlen(trim($name2))."<br>";

echo strstr("janusz@wp.pl", "@")."<br>";
echo strstr("janusz@wp.pl", "w")."<br>";
echo stristr("janusz@wp.pl", "W")."<br>";

echo strpos("janusz@wp.pl", "n")."<br>";

$name="janusz";
echo substr($name, 3);
echo substr($name, 3, 2);
echo substr($name, -1);
echo substr($name, -1, 3);

$domain="lorem@wp.pl";
$link="https://".substr(strstr($domain, "@"),1);
//header("Location: $link");
?>