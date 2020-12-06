<!DOCTYPE html>
<html>
<head>
	<title>bmarid4lab</title>
</head>
<body>
	<form method="POST" action="#">
		<div class="form_input">
			<p>Arg1: <input type="number" name="input_arg1" required/></p>
			
			<p><select size="1" name="calc[]">
		    <option value="sum">sum</option>
		    <option value="min">minus</option>
		    <option value="mul">multiplication</option>
		    <option value="div">division</option>
		    </select></p>
			
			<p>Arg2: <input type="number" name="input_arg2" required/></p>
			<p>Result: <input type="number" name="input_result" required/></p>

		</div>
		<input type="submit" name="submit"/>
	</form>
	
</body>
</html>

<?php
	$results = array();
	if(isset($_POST['submit'])){
		
		if(isset($_POST['input_arg1'])){
			$arg1=$_POST['input_arg1'];
			echo $arg1;
		}

	    foreach ($_POST['calc'] as $select) {
	       echo " ".$select." ";
	    }

		if(isset($_POST['input_arg2'])){
			$arg2=$_POST['input_arg2'];
			echo $arg2;
		}

		if(isset($_POST['input_result'])){
			$input_result=$_POST['input_result'];
			echo "<p>Your result is: ".$input_result."</p>";
		}

		switch ($select) {
	    case 'sum':
	        $result = $arg1 + $arg2;
	        break;
	    case 'min':
		    $result = $arg1 - $arg2;
	        break;
	    case 'mul':
		    $result = $arg1 * $arg2;
	        break;
	    case 'div':
		    $result = $arg1 / $arg2;
	        break;
		}	

		echo "<p>Real result is: ".$result."</p>";
		if($input_result == $result) echo "Good!";
		else echo "Wrong!";
		echo "<p></p>";

		$history = $arg1." ".$select." ".$arg2;
		echo "<p></p>";
		
		foreach ($results as $res) {
	       echo "<p>".$res."</p>";
	    }
	    array_push($results, $history);
	}
?>