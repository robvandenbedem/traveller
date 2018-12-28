<?php
require('dbconnect.php');

 // Select all the rows in the markers table

 $query = " SELECT traveller_id, GROUP_CONCAT(lng, ',', lat, ',', '100' separator ' ') AS coordinates FROM markers GROUP BY traveller_id;";

 $result = mysqli_query($conn,$query);
 if (!$result)
 {
   die('Invalid query: ' . mysqli_error());
 }
 // Creates an array of strings to hold the lines of the KML file.
 $kml = array('<?xml version="1.0" encoding="UTF-8"?>');
 $kml[] = '<kml xmlns="http://www.opengis.net/kml/2.2" xmlns:gx="http://www.google.com/kml/ext/2.2" xmlns:kml="http://www.opengis.net/kml/2.2" xmlns:atom="http://www.w3.org/2005/Atom">';
 $kml[] = ' <Document>';
 $kml[] = ' <Style id="Style1">';
 $kml[] = ' <LineStyle>';
 $kml[] = ' <color>ff0000ff</color>';
 $kml[] = ' <width>4</width>';
 $kml[] = ' </LineStyle>';
 $kml[] = ' </Style>';
 $kml[] = ' <Style id="Style2">';
 $kml[] = ' <LineStyle>';
 $kml[] = ' <color>ff00ffff</color>';
 $kml[] = ' <width>4</width>';
 $kml[] = ' </LineStyle>';
 $kml[] = ' </Style>';

 // Iterates through the rows, printing a node for each row.
 while ($row = @mysqli_fetch_assoc($result))
 {
   $kml[] = ' <Placemark id="linestring' . $row['traveller_id'] . '">';
   $kml[] = ' <name>Number ' . $row['traveller_id'] . '</name>';
   $kml[] = ' <description>The path of number ' . $row['traveller_id'] . '</description>';
   $kml[] = ' <styleUrl>#Style' . ($row['traveller_id']) .'</styleUrl>';
   $kml[] = ' <LineString>';
   $kml[] = ' <extrude>1</extrude>';
   $kml[] = ' <altitudeMode>absolute</altitudeMode>';
   $kml[] = ' <coordinates>' . $row['coordinates'] . '</coordinates>';
   $kml[] = ' </LineString>';
   $kml[] = ' </Placemark>';

 }

 // End XML file
 $kml[] = ' </Document>';
 $kml[] = '</kml>';
 $kmlOutput = join("\n", $kml);
 header('Content-type: application/vnd.google-earth.kml+xml');
 echo $kmlOutput;
 ?>
