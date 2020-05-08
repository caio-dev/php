<?php

echo "<select>";

for ($i=date("Y"); $i >=date("Y")-100 ; $i--) { 
	
	echo '<option value="'.$i.'">'.$i.'</option>';

}

echo "</select>"."<br>";

echo "----------------------------------------------"."<br>";

for ($i=0; $i <= 10  ; $i++) { 
	echo $i."<br>";
}

?>