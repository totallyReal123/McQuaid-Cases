<?php
  // Date things - Stole this code
  date_default_timezone_set('America/New_York'); // EST
  $EST = date("Y_m_d_H");
  // File paths
  $STORE_PATH = "./data";
  $LOG_FNAME = $EST . ".json";
  $LOG_FPATH = $STORE_PATH . "/" . $LOG_FNAME;
  $API_URL = 'https://schoolcovidreportcard.health.ny.gov/data/private/school.private.260101166603.json';


  if(!file_exists($LOG_FPATH)) {
    // Create File in File System
    $LOG_FILE = fopen($LOG_FPATH, 'w');

    // Open connection to data point and get data
    $JSON_DATA = file_get_contents($API_URL);

    // Save data to file
    fwrite($LOG_FILE, $JSON_DATA);
    fclose($LOG_FILE);
  }
  ?>
