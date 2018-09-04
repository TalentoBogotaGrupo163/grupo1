<?php
	echo "HOLA MUNDO 3 <br>";
	$conn = mysqli_connect('127.0.0.1','root','','bd');
	$sql = "SELECT id FROM datos";
	$result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        echo "id:".$row["id"]."<br>";
    }
?>