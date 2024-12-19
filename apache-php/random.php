<?php
    $randomNumber = rand(1, 100);
    $isEven = ($randomNumber % 2 == 0) ? 'par' : 'impar';
    $array = ["manzana", "banana", "cereza", "mango", "kiwi"];
    $randomElement = $array[array_rand($array)];

    echo json_encode([
        "numero" => $randomNumber,
        "par_impar" => $isEven,
        "elemento_random" => $randomElement
    ]);
    ?>