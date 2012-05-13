<?php

function show_array($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

function show_table($rows){
	echo '<table border="1" >';

	echo "<tr>";
	foreach($rows[0] as $title=>$fields){
		echo "<th>$title</th>";
	}
	echo "</tr>";

	foreach($rows as $row){
		echo "<tr>";
		foreach($row as $fields){
			echo "<td>$fields</td>";
		}
		echo "</tr>";
	}

	echo '</table>';
}

function show_users($rows){
	echo '<table border="0" >';

	echo "<tr>";
	foreach($rows[0] as $title=>$fields){
		echo "<th>$title</th>";
	}
	echo "</tr>";

	foreach($rows as $row){
		echo "<tr>";
		foreach($row as $title=>$fields){
			if($title == 'img'){
				echo "<td><img src='images/$fields' width='128' height='128' alt='Profile Avatar' title='' /></td>";
			}else{
				echo "<td>$fields</td>";
			}
		}
		echo "</tr>";
	}

	echo '</table>';
}


