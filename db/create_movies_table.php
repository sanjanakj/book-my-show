<?php

require "connect.php";

$query = "CREATE TABLE movies (`id` INT(99) AUTO_INCREMENT NOT NULL, `title` VARCHAR(150) NOT NULL, `releaseDate` VARCHAR(60) NOT NULL, `duration` FLOAT(15) NOT NULL, `language` VARCHAR(50) NOT NULL, `rating` VARCHAR(50) NULL, `image` VARCHAR(150) NOT NULL, `casting` VARCHAR(250) NULL, `trailer` VARCHAR(500) NULL, PRIMARY KEY (`id`) )";                     

$result = mysqli_query($connect, $query);

if($result == 1){
	echo "TABLE CREATED SUCCESSFULLY..";
}else{
	echo "ERROR....";
}

?>