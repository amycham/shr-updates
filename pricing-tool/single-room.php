<?php

  function get_room($room_id){
    echo "called with id: $room_id";
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
  
  $room_info = get_room('0001');

  $room_rent = $room_info['rent'];
  $garage_rent = $room_info['garage'];
  $outside_rent = $room_info['parkOutside'];
  $utility_share = $room_info['utilShare'];
  $house_address = $room_info['streetAddress'];

  echo $garage_rent;
?>
