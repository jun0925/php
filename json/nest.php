<?php 
/**
 * PHP의 중첩 JSON 데이터에서 값 추출
 * JSON 개체 및 배열도 중첩될 수 있습니다.
 * JSON 개체는 다른 JSON 개체, 배열, 중첩 배열, JSON 개체 배열 등을 임의로 포함할 수 있습니다.
 * 다음 예제에서는 중첩된 JSON 개체를 디코딩하고 모든 값을 PHP로 출력하는 방법을 보여줍니다.
 */

// Define recursive function to extract nested values
function printValues($arr){
    global $count;
    global $values;

    // Check input is an array
    // is_array:bool - 변수가 배열인지 아닌 검사한다
    if(!is_array($arr)){
        die("ERROR: Input is not an array");
    }

    /*
    Loop through array, if value is itself an array recursively call 
    the function else add the value found to the output items array, 
    and increment counter by 1 for each value found
    */
    foreach($arr as $key => $value){
        if(is_array($value)){
            printValues($value);
        }else{
            $values[] = $value;
            $count++;
        }
    }

    // Return total count and values found in array
    return array('total'=> $count, 'values'=> $values);
}

// Assign JSON encoded string to a PHP variable
$json = '{
    "book" : {
        "name" : "Harry Potter and the Goblet of Fire",
        "author" : "J. K. Rowling",
        "year" : 2000,
        "characters" : ["Harry Potter", "Herimione Granger", "Ron Weasley"],
        "genre" : "Fantasy Fiction",
        "price" : {
            "paperback" : "$10.40", "hardcover" : "$20.32", "kindle" : "4.11"
        }
    }
}';

// Decode JSON data into PHP associative array format
$arr = json_decode($json, true);

// Call the function and print all the values
$result = printValues($arr);
echo "<h3>" . $result["total"] . " value(e) found: </h3>";
echo implode("<br>", $result["values"]);

echo "<hr />";

// Print a single value
echo $arr["book"]["author"] . "<br />"; // Output: J. K. Rowling
echo $arr["book"]["characters"][0] . "<br />"; // Output: Harry Potter
echo $arr["book"]["price"]["hardcover"]; // Output: $20.32
?>