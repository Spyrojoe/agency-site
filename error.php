<?php
// New first line in all Apollo Error.php files as per Richard Balue
// This will fix an existing issue where a non-php page 
// (images, html, css, including directories) 
// would issue a 200 Status, not the correct 404.
header("HTTP/1.1 404 Not Found");
// All error handlers go below this line

?>
