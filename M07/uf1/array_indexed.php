<?php
    echo "<h1>Indexed array</h1>";
    
    $str="a-b-c-d";
    $str2="abcd";
    $delimiter="-";
    $arr_str=array("a", "b", "c", "d");
    $arr_num=array(1, 2, 3, 4);

    echo "<h2>Show elements and count</h2>";
    print_r($arr_str);

    foreach ($arr_str as $element) {
        echo "<p>$element</p>";
    }

    var_dump($arr_str);
    echo "<p>Count: " . count($arr_str) . "</p>";
    
    echo "<h2>Show reverse</h2>";
    $arr_revers=array_reverse($arr_str);
    print_r($arr_str);
    echo "<br/>";
    print_r($arr_revers);
    
    echo "<h2>Sort</h2>";
    $arr_sort=$arr_revers;
    sort($arr_sort);
    print_r($arr_revers);
    echo "<br/>";
    print_r($arr_sort);

    echo "<h2>Convert string to array</h2>";
    $arr=explode($delimiter, $str);
    echo "<p>$str</p>";
    print_r($arr);

    $arr=str_split($str2);
    echo "<p>$str2</p>";
    print_r($arr);            

    $arr=str_split($str2, 2);
    echo "<p>$str2</p>";
    print_r($arr);
    
    echo "<h2>Convert array to string</h2>";
    $str=implode($delimiter, $arr_str);
    print_r($arr_str);
    echo "<p>$str</p>";
    
    echo "<h2>Remove the last element</h2>";
    print_r($arr_str);
    array_pop($arr_str);
    echo "<br/>";
    print_r($arr_str);

    echo "<h2>Add a new element at the end</h2>";
    print_r($arr_str);
    array_push($arr_str, "d");
    echo "<br/>";
    print_r($arr_str);   
    
    echo "<h2>Remove an element in the middle</h2>";
    print_r($arr_str);
    unset($arr_str[2]);
    // normalize integer keys
    // $arr_str=array_values($arr_str);
    echo "<br/>";
    print_r($arr_str);   

    echo "<h2>Add a new element in the middle</h2>";
    print_r($arr_str);
    array_splice($arr_str, 2, 0, "c");
    echo "<br/>";
    print_r($arr_str);   

    echo "<h2>Get the first position with a given value</h2>";
    print_r($arr_str);
    echo "<p>Given value: c</p>";
    echo(array_search("c", $arr_str));   
    
    echo "<h2>Get if a given value exists</h2>";
    print_r($arr_str);
    echo "<p>Given value: c</p>";
    // result = condition ? value1 : value2
    echo(in_array("c", $arr_str)?"TRUE":"FALSE");   
    
    echo "<h2>Show sum</h2>";
    $sum=0;
    
    foreach ($arr_num as $num)
        $sum=$sum+$num;

    print_r($arr_num);
    echo "<p>Sum: $sum</p>";

    echo "<h2>Compare two arrays (values)</h2>";
    print_r($arr_str);
    echo "<br/>";
    print_r($arr_revers);
    if (!array_diff($arr_str, $arr_revers)) {
        echo "<p>EQUALS</p>";
    }
    else {
        echo "<p>DIFFERENT</p>";
    }
    
    echo "<h2>Compare two arrays (order included)</h2>";
    print_r($arr_str);
    echo "<br/>";
    print_r($arr_revers);
    if ($arr_str===$arr_revers) {
        echo "<p>EQUALS</p>";
    }
    else {
        echo "<p>DIFFERENT</p>";
    }