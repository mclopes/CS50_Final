<?php
// configuration
require("../includes/config.php"); 

// ------------------------------------------
    // converts a string with a stret address
    // into a couple of lat, long coordinates.
    // ------------------------------------------
    function getLatLong($address) {
        if (!is_string($address)) die("All Addresses must be passed as a string");
        $_url = sprintf('http://maps.google.com/maps?output=js&q=%s', rawurlencode($address));
        $_result = false;
        if ($_result = file_get_contents($_url)) {
            if (strpos($_result, 'errortips') > 1 || strpos($_result, 'Did you mean:') !== false) return false;
            preg_match('!center:\s*{lat:\s*(-?\d+\.\d+),lng:\s*(-?\d+\.\d+)}!U', $_result, $_match);
            $_coords['lat'] = $_match[1];
            $_coords['long'] = $_match[2];
        }
        return $_coords;
    }

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