<?php

  function get_room($room_id){

    /* Map Rows and Loop Through Them */
    $rows   = array_map('str_getcsv', file('rent-table.csv'));
    $header = array_shift($rows);
    $csv    = array();

    $i      = 0;
    foreach($rows as $row) {
        $csv[] = array_combine($header, $row);
        //echo $row[0];

        $current_room = $csv[$i]['roomID'];
        echo $current_room;
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
