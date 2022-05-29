<<<<<<< HEAD
<?php
   $dbhost = '{{ host }}';
   $dbuser = '{{ user }}';
   $dbpass = '{{ password }}';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   echo "Connected successfully\n";
   
   $sql = 'CREATE Database test_db';
   $retval = mysql_query( $sql, $conn );
   
   echo  "Database test_db created successfully\n";

   if(! $retval ) {
      die('Could not create database: ' . mysql_error());
   

   }
   mysql_close($conn);
?>
=======
<?php
   $dbhost = '{{ host }}';
   $dbuser = '{{ user }}';
   $dbpass = '{{ password }}';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   echo "Connected successfully\n";

   $sql = 'CREATE Database test_db';
   $retval = mysql_query( $sql, $conn );

   echo  "Database test_db created successfully\n";

   if(! $retval ) {
      die('Could not create database: ' . mysql_error());


   }
   mysql_close($conn);
?>
>>>>>>>  b56870c696c144e4a90f68631e553b5       
