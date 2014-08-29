<?php
	$values = range(1, 30);
	$rows = array_chunk($values, 6);

	print "<table border=0>\n";

	foreach ($rows as $row) {
	    print "<tr>\n";

	    foreach ($row as $value) {

	    	if($value%2==1){
	    		print "<td style='color:red;'>" . $value . "</td>\n";
	    	}else{
	        	print "<td>" . $value . "</td>\n";
	    	}
	    }

	    print "</tr>\n";
	}
	print "</table>\n";
?>