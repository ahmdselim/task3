<?php
$string = "“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis 
repellendus nihil hic totam! Sunt error porro? voluptas nihil iure culpa vitae. 
Sint ducimus facilis accusantium molestias nam numquam voluptatem eum nemo 
tempore! Ipsam vitae natus suscipit inventor?e delectus voluptatum amet illo 
pariatur voluptas fuga harum possimus error magnam nulla, perferendis ipsum quia 
id laboriosam quam optio dolorum tenetur? Blanditiis praesentium repellendus, 
asperiores temporibus nobis ipsa officia deleniti fugiat minus doloribus? Ipsum 
aspernatur in quae maiores nemo dolorum distinctio ea qui enim. Voluptas 
perferendis voluptatibus, corporis accusantium sunt obcaecati, aut iure maiores, 
quam reiciendis quibusdam? Placeat excepturi exercitationem enim explicabo. 
Sequi!”";

# 1 Type this string in p tag
echo <<<TEXT
<span>$string</span>
TEXT;

# 2 Get length of this string and print this length in h3
$stringLen = strlen($string);
echo "<h3>" . $stringLen . "</h3>";

# 3 Split this string to 3 parts and put all parts in variables
$stringPart1 = substr($string, rand(0, $stringLen));
$stringPart2 = substr($string, rand(0, $stringLen));
$stringPart3 = substr($string, rand(0, $stringLen));


# 4 Type these variables in h3
echo "<h3>" . $stringPart1 . "</h3>"  . "<h3>" . $stringPart2 . "</h3>" . "<h3>" . $stringPart3 . "</h3>";

# 5 Search about function that take random words from string and type result in span
function randomWord($words)
{
    $explode = explode(' ', $words);
    $word = $explode[rand(0, count($explode) - 1)];
    echo "<span>" . ($word) . "</span>" . "<br>";
}
randomWord("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis 
repellendus nihil hic totam! Sunt error porro? voluptas nihil iure culpa vitae. 
Sint ducimus facilis accusantium molestias nam numquam voluptatem eum nemo 
tempore! Ipsam vitae natus suscipit inventor?e delectus voluptatum amet illo 
pariatur voluptas fuga harum possimus error magnam nulla, perferendis ipsum quia 
id laboriosam quam optio dolorum tenetur? Blanditiis praesentium repellendus, 
asperiores temporibus nobis ipsa officia deleniti fugiat minus doloribus? Ipsum 
aspernatur in quae maiores nemo dolorum distinctio ea qui enim. Voluptas 
perferendis voluptatibus, corporis accusantium sunt obcaecati, aut iure maiores, 
quam reiciendis quibusdam? Placeat excepturi exercitationem enim explicabo. 
Sequi!");

# 6 Check if this word (enim) exists in the string or not 
function checkWord($string)
{
    $check = strpos($string, "enim") !== false;
    $check > 0 ? print("true") : print("false");
}
checkWord("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis 
repellendus nihil hic totam! Sunt error porro? voluptas nihil iure culpa vitae. 
Sint ducimus facilis accusantium molestias nam numquam voluptatem eum nemo 
tempore! Ipsam vitae natus suscipit inventor?e delectus voluptatum amet illo 
pariatur voluptas fuga harum possimus error magnam nulla, perferendis ipsum quia 
id laboriosam quam optio dolorum tenetur? Blanditiis praesentium repellendus, 
asperiores temporibus nobis ipsa officia deleniti fugiat minus doloribus? Ipsum 
aspernatur in quae maiores nemo dolorum distinctio ea qui enim. Voluptas 
perferendis voluptatibus, corporis accusantium sunt obcaecati, aut iure maiores, 
quam reiciendis quibusdam? Placeat excepturi exercitationem enim explicabo. 
Sequi!");

# 7 Get 50 chars from string and put result in variable then type this variable in p tag

# 1 solution using substr function
function getCharts($string)
{
    $subtract = substr($string, 0, 50);
    echo "<p>" . $subtract . "</p>";
}
getCharts("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis 
repellendus nihil hic totam! Sunt error porro? voluptas nihil iure culpa vitae. 
Sint ducimus facilis accusantium molestias nam numquam voluptatem eum nemo 
tempore! Ipsam vitae natus suscipit inventor?e delectus voluptatum amet illo 
pariatur voluptas fuga harum possimus error magnam nulla, perferendis ipsum quia 
id laboriosam quam optio dolorum tenetur? Blanditiis praesentium repellendus, 
asperiores temporibus nobis ipsa officia deleniti fugiat minus doloribus? Ipsum 
aspernatur in quae maiores nemo dolorum distinctio ea qui enim. Voluptas 
perferendis voluptatibus, corporis accusantium sunt obcaecati, aut iure maiores, 
quam reiciendis quibusdam? Placeat excepturi exercitationem enim explicabo. 
Sequi!");

# 2 solution using loop
function getCharts2($string)
{
    for ($i = 0; $i < 50; $i++) {
        echo $string[$i];
    }
}
getCharts2("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis 
repellendus nihil hic totam! Sunt error porro? voluptas nihil iure culpa vitae. 
Sint ducimus facilis accusantium molestias nam numquam voluptatem eum nemo 
tempore! Ipsam vitae natus suscipit inventor?e delectus voluptatum amet illo 
pariatur voluptas fuga harum possimus error magnam nulla, perferendis ipsum quia 
id laboriosam quam optio dolorum tenetur? Blanditiis praesentium repellendus, 
asperiores temporibus nobis ipsa officia deleniti fugiat minus doloribus? Ipsum 
aspernatur in quae maiores nemo dolorum distinctio ea qui enim. Voluptas 
perferendis voluptatibus, corporis accusantium sunt obcaecati, aut iure maiores, 
quam reiciendis quibusdam? Placeat excepturi exercitationem enim explicabo. 
Sequi!");

# 8 Remove any (?) from this string and type the new string in any html element
function replaceWordAndDeclare($string)
{
    $replaceWord = str_replace("?", " hamda ", $string);
    echo "<p>" . $replaceWord . "</p>";
}
replaceWordAndDeclare("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis 
repellendus nihil hic totam! Sunt error porro? voluptas nihil iure culpa vitae. 
Sint ducimus facilis accusantium molestias nam numquam voluptatem eum nemo 
tempore! Ipsam vitae natus suscipit inventor?e delectus voluptatum amet illo 
pariatur voluptas fuga harum possimus error magnam nulla, perferendis ipsum quia 
id laboriosam quam optio dolorum tenetur? Blanditiis praesentium repellendus, 
asperiores temporibus nobis ipsa officia deleniti fugiat minus doloribus? Ipsum 
aspernatur in quae maiores nemo dolorum distinctio ea qui enim. Voluptas 
perferendis voluptatibus, corporis accusantium sunt obcaecati, aut iure maiores, 
quam reiciendis quibusdam? Placeat excepturi exercitationem enim explicabo. 
Sequi!");

$name = "mohamad khaled";
# 9 Reverse this string and type the new string in h5
$reverce = strrev($name);
$reverseLength = strlen($reverce);
$reverseLink = strrev("new-string.php");
echo "<h5>" . $reverce . "</h5>";

# 10 Make a bootstrap card and Put this variable in the title , Length in the body of card , Link to another page called (new-string.php) and , put the reverse in the link

echo <<<CARD
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">$reverce</h5>
    <p class="card-text">$reverseLength</p>
    <a href="$reverseLink" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
CARD;

# 11 Make a new variable called(full_name) that concatenate first name and last name , Put full_name in h1 , Compare between Full_name and this variable

$first_name = "amal";
$last_name = "ebraheem";
$full_name = $first_name . $last_name;
$new_name = "amel ebraheem";
echo "<h1>" . $full_name . "</h1>";

# 12 Write a PHP script to split the following string
$string = '082307';
$explode = explode("", $string);
print_r($explode);
