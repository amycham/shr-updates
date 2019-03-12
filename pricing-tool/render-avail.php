<?php
  /***********************************************
  ** Render table of availabilities
  ** TODO: extend to categorize on any criteria
  ************************************************/
  function render_avail(){

    /* Map Rows and Loop Through Them */
    $rows   = array_map('str_getcsv', file('rent-table.csv'));
    $header = array_shift($rows);
    $csv    = array();

    $i      = 0;

    $avail_confirmed  = array();    //confirmed availabilities
    $avail_possible   = array();    //potential availabilities
    $avail_pending    = array();    //contract pending

    //concat html to return for body
    $table_rendering = "<table cellspacing='0' class='roomfeatures'>
    	<thead>
    		<tr>
    		<th>Date</th>
    		<th>Address</th>
    		<th>Room</th>
    		<th>Bath</th>
    		<th>Furnished</th>
    		<th>Rent</th>
        </tr>
        <tbody>";
    /* categorize into arrays by status */
    foreach($rows as $row) {
        $csv[] = array_combine($header, $row);

        //capture availability availability status
        //$current_status = $csv[$i]['availStatus'];
        $table_rendering.="<tr><td>".$csv[$i]['availDate'].$csv[$i]['availStatus']."</td>".
          "<td>".$csv[$i]['streetAddress']."</td>".
          "<td>".$csv[$i]['roomName']."</td>".
          "<td>".$csv[$i]['privateBath']."</td>".
          "<td>".$csv[$i]['furnished']."</td>".
          "<td>".$csv[$i]['rent']."</td></tr>";


        //sort into arrays on availability status

        $i++;
    }
    $table_rendering.="</tbody></table>";
    return $table_rendering;
  };

?>
