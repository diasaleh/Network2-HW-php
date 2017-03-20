<?php

	exec('/usr/local/bin/gnuplot test.gnu 2>&1 ',$output);
	print_r($output);
