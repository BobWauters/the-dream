<?php


if (isset ($_POST['submit'])){
    $input = $_POST['input'];
    $dropdown =$_POST['dropdown'];

        if ($dropdown=='usd'){
            $output=$input*0.00955192;
            echo "<h1>".number_format($output,2)."Dollar"."</h1>";
        }

        else if ($dropdown=='euro'){
            $output=$input*0.00841979;
            echo "<h1>". number_format($output, 2). "Euro". "</h1>";
        }
        else if ($dropdown=='gdp'){
            $output=$input*0.00662901;
            echo "<h1>".number_format($output,2)."British Pound"."</h1>";
        }
    echo $input;
}



















//  TRY OUT 1 WITH API
//
//$api ="51cd606c992a520394a8cde9e36baa08";
//
//$stringFetch = file_get_contents("http://data.fixer.io/api/latest?access_key=$api&format=1");
//$json = json_decode($stringFetch, true);
//
//$i=0;
//foreach ($json ['rates'] as $key => $value){
//    $currency[$i]=$key;
//    $rate[$i]=$value;
//    $i=$i+1;
//
//}
//
