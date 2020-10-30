<?php
  include 'php/getdata.php';

  $RETRIEVED_DATA = file_get_contents($LOG_FPATH);
  $RETRIEVED_JSON = json_decode($RETRIEVED_DATA, true);

  function GetPositiveTotal($RETRIEVED_JSON) {
    $total = $RETRIEVED_JSON['allTimeCounts']['onSitePositiveTotal'] + $RETRIEVED_JSON['allTimeCounts']['offSitePositiveTotal'];
    return $total;
  }

  function GetLastUpdated($RETRIEVED_JSON) {
    return $RETRIEVED_JSON['updateDate'];
  }

  ?>
