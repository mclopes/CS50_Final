<?php
// configuration
require("../includes/config.php"); 


function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}


// Select all the rows in the markers table
$result = mysqli_query($conn,"SELECT * FROM shelter_address");
if (!$result) {
  die('Invalid query: ' . mysql_error());
}

header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<markers>';

// Iterate through the rows, printing XML nodes for each
while ($row = @mysqli_fetch_assoc($result)){
  // Add to XML document node
  echo '<marker ';
  echo 'address="' . parseToXML($row['address_number']) ." ". parseToXML($row['address_street'])." " . parseToXML($row['address_city']) ." ". parseToXML($row['address_province']) ." ". parseToXML($row['address_postal_code']) ." " . '" ';
  
  echo '/>';
}

// End XML file
echo '</markers>';

?>