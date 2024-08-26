<?php


if ($_SERVER["REQUEST_METHOD"] == "POST"){


    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $pet = htmlspecialchars($_POST["favoritepet"]);

    if(empty($firstname) or empty($lastname) or empty($pet)){
        exit();
        //header("Location:../index.php");
    }
    echo "value submited";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $pet;
    echo "<br>";
     
    // operation practice 

    // String  modifications
    $c = $firstname . " " . $lastname;
    echo $c;
    echo "<br>";
    // String comparations && len 
    $length =0;
    if (strlen($firstname) > strlen($lastname)){
        echo "firstname is longer";
        $length = strlen($firstname);
    }else{
        if(strlen($firstname) < strlen($lastname)){
            echo "lastname is longer";
            $length =strlen($lastname);
        }else{
            echo "fisrtname is equal in lenght to lastname";
            $length = strlen($lastname);
        }
    }
    echo "<br>";

    echo "whit " . $length . " characters";
    echo "<br>";

    $bool = $firstname == $lastname;
    $message = $bool ? "They are equal" : "They are not equal";
    echo $message;
    echo "<br>";


    // sub String 
    echo $firstname[0] . " is the first character of the firstname";
    echo "<br>";

    $nameWithoutTheFirstLetter = substr($c , (-strlen($c)) + 1 );
    echo $nameWithoutTheFirstLetter . "  is the rest of the name";
    echo "<br>";


    //mathcer 
    $result = match($firstname){
        "Lucio" => "that's my name",
        "lucio" => "that's also my name",
        default => "what a wierd name",
    };
    echo $result . "<br>";
}else{
    header("Location:../index.php");
}

