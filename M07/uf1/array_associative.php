<?php    
    echo "<h1>Associative array</h1>";

    $arr_dna=array(
        //"t"=>"thymine", 
        "a"=>"adenine", 
        "c"=>"cytosine",
        "g"=>"guanine"
    );

    $arr_rna=array(
        //"u"=>"uracil",
        "c"=>"cytosine",
        "g"=>"guanine",
        "a"=>"adenine"
    );

    $str="a-adenine";
    $delimiter="-";
    
    echo "<h2>Show elements (keys and values) and count</h2>";
    print_r($arr_dna);
    
    foreach ($arr_dna as $key=>$value) {
        echo "<p>$key - $value</p>";
    }
    
    var_dump($arr_dna);
    echo "<p>Count: " . count($arr_dna) . "</p>";

    echo "<h2>Show keys</h2>";
    $keys=array_keys($arr_dna);
    print_r($arr_dna);
    echo "<br/>";
    print_r($keys);
    
    echo "<h2>Show values</h2>";
    $values=array_values($arr_dna);
    print_r($arr_dna);
    echo "<br/>";
    print_r($values);
    
    echo "<h2>Show reverse</h2>";
    $arr_dna_revers=array_reverse($arr_dna);
    print_r($arr_dna);
    echo "<br/>";
    print_r($arr_dna_revers);
    
    echo "<h2>Show flip</h2>";
    $arr_dna_flip=array_flip($arr_dna);
    print_r($arr_dna);
    echo "<br/>";
    print_r($arr_dna_flip);

    echo "<h2>Sort by key</h2>";
    $arr_dna_sort=$arr_dna_revers;
    ksort($arr_dna_sort);
    print_r($arr_dna_revers);
    echo "<br/>";
    print_r($arr_dna_sort);

    echo "<h2>Sort by key (reverse)</h2>"; 
    $arr_dna_sort=$arr_dna;
    krsort($arr_dna_sort); 
    print_r($arr_dna);
    echo "<br/>";
    print_r($arr_dna_sort);
  
    echo "<h2>Sort by value</h2>";
    $arr_dna_sort=$arr_dna_revers;
    sort($arr_dna_sort);
    print_r($arr_dna_revers);
    echo "<br/>";
    print_r($arr_dna_sort);
 
    echo "<h2>Sort by value (reverse)</h2>";
    $arr_dna_sort=$arr_dna;
    rsort($arr_dna_sort);
    print_r($arr_dna);
    echo "<br/>";
    print_r($arr_dna_sort);

    echo "<h2>Convert string to array</h2>";
    list($key, $value)=explode($delimiter, $str);   
    for ($i=0; $i<strlen($key); $i++) {
        $arr["$key"]=$value;    
    }
    echo "<p>$str</p>";
    print_r($arr);
 
    echo "<h2>Convert array to string</h2>";
    $str=implode($delimiter, $arr_dna);
    print_r($arr_dna);
    echo "<p>$str</p>";

    echo "<h2>Get the first key with a given value</h2>";
    print_r($arr_dna);
    echo "<p>Given value: guanine</p>";
    echo(array_search("guanine", $arr_dna));

    echo "<h2>Get if a given key exists</h2>";
    print_r($arr_dna);
    echo "<p>Given value: g</p>";
    // result = condition ? value1 : value2
    echo(array_key_exists("g", $arr_dna)?"TRUE":"FALSE");

    echo "<h2>Get if a given value exists</h2>";
    print_r($arr_dna);
    echo "<p>Given value: guanine</p>";
    // result = condition ? value1 : value2
    echo(in_array("guanine", $arr_dna)?"TRUE":"FALSE");

    echo "<h2>Remove the last element</h2>";
    print_r($arr_dna);
    array_pop($arr_dna);
    echo "<br/>";
    print_r($arr_dna);
    
    echo "<h2>Add a new element at the end</h2>";
    print_r($arr_dna);
    // merge two arrays into one array
    $arr_tmp=array("g"=>"guanine");
    $arr_dna=array_merge($arr_dna, $arr_tmp);
    echo "<br/>";
    print_r($arr_dna);

    echo "<h2>Remove an element in the middle</h2>";
    print_r($arr_dna);
    unset($arr_dna["c"]);
    echo "<br/>";
    print_r($arr_dna);

    echo "<h2>Compare two arrays (keys and values)</h2>";
    print_r($arr_dna);
    echo "<br/>";
    print_r($arr_rna);
    if (!array_diff_assoc($arr_dna, $arr_rna)) {
        echo "<p>EQUALS</p>";
    }
    else {
        echo "<p>DIFFERENT</p>";
    }

    echo "<h2>Compare two arrays (included order)</h2>";
    print_r($arr_dna);
    echo "<br/>";
    print_r($arr_rna);
    if ($arr_dna===$arr_rna) {
        echo "<p>EQUALS</p>";
    }
    else {
        echo "<p>DIFFERENT</p>";
    }