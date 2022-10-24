<?php
// Create conection to server
    $con = new mysqli("localhost","root","");
// Check conection
    if($con->connect_error){
        die("conection failed: " . $con->connect_error);
    }

// SQL statement to create database
    $sequel = "CREATE DATABASE IF NOT EXISTS home_gym_equipment";
    // Check if database is created successfully
    if($con->query($sequel) === TRUE){
        echo "<p>Database created successfully</p>";
    }else{
        die("<p>Error creating database: </p>" . $con->error);
    }

// I have to select the database
    $con = new mysqli("localhost","root","","home_gym_equipment");
    // Check if database is selected
    if($con->connect_error){
        die ("<p>Could not select database: </p>" . $con->conect_error);
    }else{
        echo "<p>Database 'home_gym_equipment' successfully selected</p>";
    }



// Create contact table
$sequel =
    "CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1";

    // Check if table is created
    if($con->query($sequel) === TRUE){
        echo "<p>contact table successfully created";
    }else{
        die("<p>Could not create table contact: </p>" . $con->error);
    }

	// sql to create counter table
    $sql = 'CREATE TABLE IF NOT EXISTS `counter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(100) NOT NULL,
  `counter` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3';

if ($con->query($sql) === TRUE) {
              echo '<p class="success">Table counter created successfully</p>';
          } else {
              echo '<p class="error">Error creating table counter: ' . $con->error . '</p>';
          }
          
		  // Create default visitor counter.
$default = "INSERT INTO counter (id,page,counter)
                VALUES ('1','index','1')";
$createdefaultvisitor = $con->query($default);
if(!$createdefaultvisitor){
    echo "Visitor Counter Inserted" . $con->error;
}else {
    echo "<b>Visitor Counter Inserted</b>";
}

		  
		// sql to create customer table
        $sql ='CREATE TABLE IF NOT EXISTS `customer` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `Full_Name` varchar(200) NOT NULL,
            `DOB` DATE NOT NULL,
            `Username` varchar(40) NOT NULL,
			`email` varchar(40) NOT NULL,
			`password` varchar(40) NOT NULL,
            PRIMARY KEY (`id`)
          ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3' ;

          if ($con->query($sql) === TRUE) {
              echo '<p class="success">Table customer created successfully</p>';
          } else {
              echo '<p class="error">Error creating table: ' . $con->error . '</p>';
          }

          $sql = 'CREATE TABLE IF NOT EXISTS loginlogs (
            id int(11)  NOT NULL AUTO_INCREMENT,
            IpAddress varbinary(16) NOT NULL,
			TryTime bigint(20) NOT NULL,
            PRIMARY KEY (id)
          )';
  
          if ($con->query($sql) === TRUE) {
              echo '<p class="success">loginlogs created successfully</p>';
          } else {
              echo '<p class="error">Error creating table: ' . $con->error . '</p>';
          }
			
		 $sql = 'CREATE TABLE IF NOT EXISTS newsletter (
            id int(11)  NOT NULL AUTO_INCREMENT,
            email varchar (50) NOT NULL,
            PRIMARY KEY (id)
          )';
  
          if ($con->query($sql) === TRUE) {
              echo '<p class="success">Newsletter created successfully</p>';
          } else {
              echo '<p class="error">Error creating table: ' . $con->error . '</p>';
          }

echo "<p><a href='login.php'>Proceed to login</a></p>";
echo "<p><a href='signup.php'>Proceed to create account</a></p>";

//Close conection
$con->close();
?>
