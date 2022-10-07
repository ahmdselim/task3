<?php
# 1 Make random two numbers for ages
function randomNum($num1, $num2)
{
    if ($num1 > $num2) {
        echo "ahmed is older than mohmed";
        echo "<br>";
    } elseif ($num2 > $num1) {
        echo "mohamed is older than ahmed";
        echo "<br>";
    } elseif ($num1 === $num2) {
        echo " age of ahmed and Mohamad is (age)";
        echo "<br>";
    }
}
randomNum(rand(0, 30), rand(0, 30));
# 2 Get two random strings from previous string
function randWord($articel)
{
    $first_string = substr($articel, rand(0, strlen($articel)));
    $second_string = substr($articel, rand(0, strlen($articel)));
    $length_first_word = strlen($first_string);
    $length_second_word = strlen($second_string);

    if (strlen($first_string) > 20 && strlen($first_string) < 40) {
        echo "string is week" . "<br>";
    } elseif (strlen($first_string) > 40 && strlen($first_string) < 80) {
        echo "string is good" . "<br>";
    } elseif (strlen($first_string) > 80) {
        echo "string is very good" . "<br>";
    }

    if ($length_first_word > $length_second_word) {
        echo "first string ( $length_first_word ) is greater than second string ( $length_second_word )";
    } elseif ($length_first_word < $length_second_word) {
        echo " first string ( $length_first_word ) is smaller than second string ( $length_second_word )";
    } elseif ($length_first_word === $length_second_word) {
        echo " first string ( $length_first_word ) is equal than second string ( $length_second_word )";
    }
}
randWord("Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Doloremque illo, vero officiis laudantium enim minus corrupti ipsam! 
Veniam culpa a qui, nobis pariatur placeat beatae dolores aperiam 
consequatur deserunt temporibus? Pariatur nulla vel natus necessitatibus 
nam exercitationem eligendi expedita, provident distinctio non praesentium 
officiis quaerat veniam, laborum id accusamus voluptas suscipit. 
Accusamus, sequi cumque veniam eius atque fuga modi minus earum repellat 
tenetur delectus beatae explicabo natus corporis hic qui amet obcaecati 
suscipit, repudiandae vero sit doloremque, consequuntur aperiam? Facere 
amet aspernatur debitis, quisquam animi suscipit accusantium id architecto 
nobis, quis pariatur perferendis, molestiae distinctio quia ut beatae 
dicta laudantium excepturi natus! Mollitia culpa magni voluptatum maiores 
nulla non illo pariatur libero ipsam numquam, assumenda cumque 
reprehenderit exercitationem eos accusantium animi, at fugit doloremque 
iusto dolorum magnam officiis. Optio cumque dolor architecto blanditiis, 
fugiat animi tenetur. Asperiores excepturi atque earum possimus est 
consequatur architecto exercitationem inventore tempore nostrum dolor 
dolorum corrupti numquam totam, quae, reiciendis dicta, illum cupiditate 
vel ea enim optio. Fugiat ipsa error, deserunt officiis suscipit numquam 
rerum dignissimos rem, nihil quis amet aliquid temporibus? Similique 
numquam consequatur labore molestiae sed earum dolor, explicabo suscipit 
in laboriosam ut, natus architecto. Perspiciatis quia molestiae, eos 
voluptatibus numquam id at?");

# 3 Make a calculator with these operations using if and elseif
function calculator($num1, $num2)
{
    $operation = ['+', '-', '/', '*', '**', '%'];
    if ($operation[rand(0, count($operation) - 1)] === '+') {
        echo "<br>" . "the operation is + between $num1 and $num2 and the result is: " . $num1 + $num2 . "<br>";
    } elseif ($operation[rand(0, count($operation) - 1)] === '-') {
        echo "<br>" . "the operation is - between $num1 and $num2 and the result is: " . $num1 - $num2 . "<br>";
    } elseif ($operation[rand(0, count($operation) - 1)] === '/') {
        if ($num2 == 0 || $num1 == 0) {
            echo "<br> can not Division by zero <br>";
        } else {
            echo "<br>" . "the operation is / between $num1 and $num2 and the result is: " . $num1 / $num2 . "<br>";
        }
    } elseif ($operation[rand(0, count($operation) - 1)] === '*') {
        echo "<br>" . "the operation is * between $num1 and $num2 and the result is: " . $num1 * $num2 . "<br>";
    } elseif ($operation[rand(0, count($operation) - 1)] === '**') {
        echo "<br>" . "the operation is ** between $num1 and $num2 and the result is: " . $num1 ** $num2 . "<br>";
    } elseif ($operation[rand(0, count($operation) - 1)] === '%') {
        echo "<br>" . "the operation is % between $num1 and $num2 and the result is: " . $num1 % $num2 . "<br>";
    } else {
        echo "<br> don't try this at home <br>";
    }
}
calculator(rand(0, 100), rand(0, 200));

# 4 Make a program to check from degree of student to test these cases
function checkDegree($deg)
{
    switch ($deg) {
        case ($deg >= 50 && $deg < 65):
            echo "accepted";
            break;
        case ($deg >= 65 && $deg < 75):
            echo "good";
            break;
        case ($deg >= 75 && $deg < 85):
            echo "very good";
            break;
        case ($deg >= 85):
            echo ("Excellent");
            break;
        default:
            echo "not initialized";
    }
}
checkDegree(rand(0, 100));
# 5 Check from this string
function checkString($description)
{
    switch ($description) {
        case (strpos($description, "gain") !== false):
            echo "<br> success word <br>";
            break;
        case (strpos($description, "peen") !== false);
            echo "<br> success word <br>";
            break;
        default:
            echo "<br> wrong word <br>";
    }
}
checkString("no pain , no gain ");
