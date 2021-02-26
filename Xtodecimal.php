<?php

function Xtodecimal($string, $type){

	if($type != "B" && $type != "H"){

		return 0;

	}


	if($type == "B"){

		$a = str_split($string);

		$result = 0;
		$count = 0;

		for ($x = sizeof($a)-1; $x >= 0; $x--){

			$result += $a[$count] * 2**$x;
			$count += 1;

		}
	
		return $result;
	}


	if($type == "H"){

		$a = str_split($string);

		$result = 0;
		$count = 0;

		for ($x = sizeof($a)-1; $x >= 0; $x--){

			echo $a[$count] == "A";

			if (is_integer($a[$count])){


			} else {

				if ($a[$count] == "A"){

					$a[$count] = 10;

				} else {

					if ($a[$count] == "B"){

						$a[$count] = 11;

					} else {

						if ($a[$count] == "C"){

							$a[$count] = 12;

						} else {

							if ($a[$count] == "D"){

								$a[$count] = 13;

							} else {

								if ($a[$count] == "E"){

									$a[$count] = 14;

								} else {

									if ($a[$count] == "F"){

										$a[$count] = 15;

									}
								}
							}
						}
					}
				}
			}

			$result += $a[$count] * 16**$x;
			$count += 1;

		}

		return $result;
	}

}

?>