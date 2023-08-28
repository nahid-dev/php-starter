<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $age = 10;
    $_age = 10;
    $Age = 10;
    $AGE = 10;
    $age1 = 10;
    $age = 10;

    // echo $age;

    // Some data type in Php

    $str = "String";
    $integer = 123;
    $floating_number = 12.312;
    $user = true;
    // var_dump($user);

    // Array in php

    $fruits = array(["Apple", "Banana", "pineapple", "Orange"]);

    // var_dump($fruits);

    // null in php

    $data = null;
    // var_dump($data);

    // Object in php
    class Phone
    {
        var $model;

        function phoneModel($number)
        {
            global $model;
            $model = $number;
            // echo "This is $model <br/>";
        }
    }

    $apple = new Phone;
    $apple->phoneModel("iPhone 13");

    $samsung = new Phone;
    $samsung->phoneModel("S23 Ultra");

    $sony = new Phone;
    $sony->phoneModel("Exparia one");

    // Check length of a string
    echo str_word_count("I love gaming");
    echo strlen("I love gaming");
    echo strrev("I love gaming");
    echo ("<br/>");
    // replace 
    echo str_replace("pizza", "burger", "I love to eat pizza");

    echo ("<br/>");

    echo (min(1, 2, 3, 4, 4, 5, 6, 6,));
    echo (max(1, 2, 3, 4, 4, 5, 6, 6,));

    echo ("<br/>");

    echo rand(1, 6);


    echo ("<br/>");

    // define a constant in php
    define("a", "string");
    // echo (a)

    // variable are locally work only and const are work in local and global;
    echo ("<br/>");

    // mathematical operator:

    // Switch case in php
    switch ('red') {
        case 'red':
            echo "apple is red";
            break;
        case 'green':
            echo "Mango is green";
            break;
        default:
            echo 'I love to eat fruits';
    }
    echo ("<br/>");
    echo ("<br/>");

    // While loop in php
    $x = 0;
    while ($x <= 5) {
        echo "the number is $x <br/>";
        $x++;
    }
    echo ("<br/>");
    echo ("<br/>");
    // For loop in php
    for ($y = 0; $y <= 10; $y++) {
        echo "The number is $y <br/>";
    }

    // Function: Function is a block that can work repeatedly work with given condition.
    function myInfo($name, $age)
    {
        echo "I am $name $age";
    }

    myInfo("Nahid", 25);

    ?>
</body>

</html>