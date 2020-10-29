<?php
  // Date things - Stole this code
  date_default_timezone_set('America/New_York'); // EST
  $EST = date("Y_m_d");
  // File paths
  $STORE_PATH = "./data";
  $LOG_FNAME = $EST . ".log";
  $LOG_FPATH = $STORE_PATH . "/" . $LOG_FNAME;
  $API_URL = 'https://schoolcovidreportcard.health.ny.gov/data/private/school.private.260101166603.json';

  $debug = true;

  if ($debug) {
        echo $LOG_FPATH;
        echo "<br>";
  }


  ?>
