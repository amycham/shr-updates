<?php
  /***********************************************
  ** Retrieve desired room based on specified data
  ** $room_id:  identifying value to match
  ** $target:   heading of target column
  ************************************************/
  function get_room($room_id, $target){

    /* Map Rows and Loop Through Them */
    $rows   = array_map('str_getcsv', file('rent-table.csv'));
    $header = array_shift($rows);
    $csv    = array();

    $i      = 0;
    foreach($rows as $row) {
        $csv[] = array_combine($header, $row);
        //capture roomID for row
        $current_room = $csv[$i][$target];

        //match current ID against target ID, return and stop if true
        if($current_room == $room_id){
          return $csv[$i];
          break;
        }

        else{
          $i++;
        }
    }
  };

?>
