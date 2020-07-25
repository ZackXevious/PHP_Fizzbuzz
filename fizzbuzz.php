<?php
/*
FIZZBUZZ.php
Zachary Kirchens
*/


/*
The table of values for the fizzbuzz.
You can put them in any order, as they will be sorted by key.
Just make sure that the key is a number.
*/
$values = [
    3=>"fizz", //if div by 3, add fizz
    5=>"buzz", //if div by 5, add buzz
    7=>"fazz", //if div by 7, add fazz
    2=>"fleez" //if div by 2, add fleez
];

//Sort them for ease of use. 
ksort($values);

//The start position for the loop
$start =0;

//The end position for the loop
$end =100;

//From start to end, go through the loop
for($i=$start; $i<=$end; $i++){

    $output="";//Start with a blank output string

    foreach ($values as $key=>$text){//Loop through the table of values
        /*if any of the keys match, add text to the output string
        This is why I sorted it, as you can put them in any order and they will always go from
        smallest key to largest key
        */
        if($i%$key===0){
            $output.=$text;
        }
    }


    if(strlen($output)>0&&$i!=0){//Check to see if the output string isn't blank and we aren't at zero
        echo "$output\n"; //if it isn't, or if we are at zero output the string
    }else{
        echo "$i\n"; // if the string is blank, or this is zero, output the number
    }
}
?>