<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php


// Create an array
$sampleArray = array(
	0 => "Geeks",
	1 => "for",
	2 => "Geeks",
)
?>

<script>

// Access the array elements
var passedArray = <?php echo json_encode($sampleArray); ?>;
	
// Display the array elements
for(var i = 0; i < passedArray.length; i++){
	document.write(passedArray[i]);
}

</script>

    
</body>
</html>

	
