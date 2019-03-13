<?php
  /***********************************************
  ** Render tables of availabilities
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

    $table_rendering = "";            //combined code for all tables, return at end of function

    /* categorize into arrays by status */
    foreach($rows as $row) {
        $csv[] = array_combine($header, $row);

        //capture availability availability status
        $current_status = $csv[$i]['availStatus'];
        switch($current_status) {
          case 'CA':
            $avail_confirmed[] = $csv[$i];
            break;

          case 'Q':
            $avail_possible[] = $csv[$i];
            break;

          case 'P':
            $avail_pending[] = $csv[$i];
            break;
        }

        $i++;
    }
    $avail_confirmed = sort_array($avail_confirmed, 'availDate');
    //$avail_possible = sort_array($avail_possible, 'availDate');
    //$avail_pending = sort_array($avail_pending, 'availDate');

    //render tables by availStatus
    $table_rendering.=make_table('avail-confirmed', $avail_confirmed, "Confirmed Availabilities");
    $table_rendering.=make_table('avail-pending', $avail_pending, "Contracts Pending");
    $table_rendering.=make_table('avail-possible', $avail_possible, "Pending Tenant Decision");

    return $table_rendering;
  };

  /***********************************************
  ** Build tables of data
  ** $tid: table id (HTML)
  ** $tdata: array of data
  ************************************************/
  function make_table($tid, $tdata, $tcaption){

    $table_start = "<table cellspacing='0' id='$tid' class='roomfeatures'>
    <caption>$tcaption</caption>
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

    $table_close = "</tbody></table>";
    $table_body = $table_start;

    $rows = $tdata;
    $i = 0;
    /* categorize into arrays by status */
    foreach($rows as $row) {
      $table_body.="<tr><td>".$tdata[$i]['availDate']."</td>".
        "<td>".$tdata[$i]['streetAddress']."</td>".
        "<td>".$tdata[$i]['roomName']."</td>".
        "<td>".$tdata[$i]['privateBath']."</td>".
        "<td>".$tdata[$i]['furnished']."</td>".
        "<td>".$tdata[$i]['rent']."</td></tr>";

        $i++;
  }

  $table_body.=$table_close;

  return $table_body;
}
/***********************************************
** Sort multidimensional array on specified field value
** $data: array to sort
** $criterai: field to sort on
************************************************/
function sort_array($data, $criteria){
    $rows = $data;
    $i = 0;

    foreach($rows as $row) {
    //convert availDate strings to date
      if($criteria == 'availDate'){
        //get availDate
        $current_date = $data[$i]['availDate'];

        //convert availDate string to date
        $conv_date = strtotime($current_date);

        //format date
        $fmt_date = date('m.d.Y', $conv_date);

        //replace availDate
        $data[$i]['availDate'] = $fmt_date;

        $i++;
      }
    }
      //sort array

      //return sorted array
      print_r($data);
      return $data;

  }

?>
