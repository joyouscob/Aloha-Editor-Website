<?php
require_once 'app.php';

/**
 * This is an example code that shows how you can load Handsontable data from server using PHP with PDO (SQLite).
 * This code is not intended to be maximally efficient nor safe. It is for demonstrational purposes only.
 * Changes and more examples in different languages are welcome.
 *
 * Copyright 2012, Marcin Warpechowski
 * Licensed under the MIT license.
 * http://warpech.github.com/jquery-handsontable/
 *
 * Adopted for Aloha Editor
 *
 */

try {
  //open the database
  $db = new PDO('sqlite:team.sqlite'); //will create the file in current directory. Current directory must be writable
  
  //create the database if does not exist
  $db->exec("CREATE TABLE IF NOT EXISTS team (id INTEGER PRIMARY KEY, team TEXT, fullname TEXT, email TEXT, github TEXT, position TEXT, backlink TEXT, country TEXT, translation TEXT, remarks TEXT)");
  
  //select all data from the table
  $select = $db->prepare('SELECT * FROM team ORDER BY id ASC LIMIT 100');
  $select->execute();
  
  $out = array(
    'team' => $select->fetchAll(PDO::FETCH_ASSOC)
  );
  echo json_encode($out);
  
  // close the database connection
  $db = NULL;
}
catch (PDOException $e) {
  print 'Exception : ' . $e->getMessage();
}
?>