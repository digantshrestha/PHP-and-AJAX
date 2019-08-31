<?php

    $people[] = "Naruto";
    $people[] = "Sasuke";
    $people[] = "Kakashi";
    $people[] = "Hinata";
    $people[] = "Sai";
    $people[] = "Madara";
    $people[] = "Itachi";
    $people[] = "Pain";
    $people[] = "Nagato";
    $people[] = "Deidara";
    $people[] = "Kisame";

    // Get query string
    $q = $_REQUEST["q"];
    $suggestion = "";

    if($q !== ""){
        $q = strtolower($q);
        $len = strlen($q);

        foreach($people as $person){
            if($q === strtolower(substr($person, 0, $len))){
                if($suggestion === ""){
                    $suggestion = $person;
                }else{
                    $suggestion .= ", $person";
                }
            }
        }
    }

    echo $suggestion === "" ? "No Suggestion" : $suggestion;


?>