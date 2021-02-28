<?php


function decimaltoX($num, $basis){

	if($basis == 2){

		echo "The binary number is: ";

		if ($num == 0){

			echo 0;


		} else {

			$a = array();

			while ($num > 0){

				$rest = $num % 2;
				array_push($a, $rest);
				$num = intdiv($num, 2);

			}

			$a = array_reverse($a);

			for ($x = 0; $x < sizeof($a); $x++){

				echo $a[$x];

			}	

		}
	}	

	if($basis == 16){

		echo "The hexadecimal number is: ";

		if ($num < 16){

			if ($num < 10){

				echo $num;

			} else {

				if ($num == 10){

					echo "A";

				} else {

					if ($num == 11){

						echo "B";

					} else {

						if ($num == 12){

							echo "C";

						} else {

							if ($num == 13){

								echo "D";

							} else {

								if ($num == 14){

									echo "E";

								} else {

									if ($num == 15){

										echo "F";

									}}}}}}}

								} else {


									$a = array();

									while ($num > 0){

										$rest = $num % 16;
										array_push($a, $rest);
										$num = intdiv($num, 16);

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

																}
															}
														}
													}
												}
											}
										}

									}

								}

							}

}

						?>
