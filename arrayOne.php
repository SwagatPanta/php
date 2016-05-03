<?php
Echo 'index array through';


$car = array("volvo","maruti","hundai","toyota","tata");

$arrLength=count($car);

for ($i=0; $i <$arrLength ; $i++) { 
	# code...
	echo "array-element:".$car[$i].'<br>';

}

foreach ($car as $item) {
	# code...
	echo 'car in market are: '.$item.'<br>';
}

echo "for ecch loop fro index array";


echo "end for each loop for index array";

$carO= array("volvo"=>"35L","maruti"=>"350L","hundai"=>"5L","volvo"=>"5L");
echo "the price of volvo is ".$carO['volvo'];

foreach ($carO as $k => $val) {
	# code...

	echo "price of ".$k. "is ".$val;
	echo '<br>';
}
?>