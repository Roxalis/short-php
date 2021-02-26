<?php


function decimaltoX($zahl, $basis){

	if($basis == 2){

		echo "Die binäre Zahl ist: ";

		if ($zahl == 0){

		echo 0;


		} else {

			$a = array();

			while ($zahl > 0){

    			$rest = $zahl % 2;
    			array_push($a, $rest);
    			$zahl = intdiv($zahl, 2);
    
			}

			$a = array_reverse($a);

			for ($x = 0; $x < sizeof($a); $x++){

			echo $a[$x];

			}	

		}
	}	

	if($basis == 16){

		echo "Die Hexadezimalzahl ist: ";

		if ($zahl < 16){

		if ($zahl < 10){

		echo $zahl;

		} else {

		if ($zahl == 10){

		echo "A";

		} else {

		if ($zahl == 11){

		echo "B";

		} else {

		if ($zahl == 12){

		echo "C";

		} else {

		if ($zahl == 13){

		echo "D";

		} else {

		if ($zahl == 14){

		echo "E";

		} else {

		if ($zahl == 15){

		echo "F";

		}}}}}}}

		} else {


		$a = array();

		while ($zahl > 0){

    		$rest = $zahl % 16;
    		array_push($a, $rest);
    		$zahl = intdiv($zahl, 16);
    
		}

		$a = array_reverse($a);

		for ($x = 0; $x < sizeof($a); $x++){

		if ($a[$x] < 10){

		echo $a[$x];

		} else {

		if ($a[$x] == 10){

		echo "A";

		} else {

		if ($a[$x] == 11){

			echo "B";

		} else {

		if ($a[$x] == 12){

			echo "C";

		} else {

		if ($a[$x] == 13){

			echo "D";

		} else {

		if ($a[$x] == 14){

			echo "E";

		} else {

		if ($a[$x] == 15){

			echo "F";

		}}}}}}}

		}

		}

	}

}

?>