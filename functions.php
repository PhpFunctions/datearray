<?php
//Returns array of date betweeen two given date value
//print_r( returnBetweenDates( '12-05-2016', '26-05-2016' ) );
function returnBetweenDates( $startDate, $endDate ){
    $startStamp = strtotime(  $startDate );
    $endStamp   = strtotime(  $endDate );

    if( $endStamp > $startStamp ){
        while( $endStamp >= $startStamp ){

            $dateArr[] = date( 'd-m-Y', $startStamp );

            $startStamp = strtotime( ' +1 day ', $startStamp );

        }
        return $dateArr;
    }else{
        return "failed";
    }

}

//Days between two given dates
//print_r(returndaysBetweenDates( '01-05-2016', '01-06-2016', 'tue' ));
//sun,mon,tue,wed,thu,fri,sat
function returndaysBetweenDates( $startDate, $endDate, $day ){
    $startStamp = strtotime(  $startDate );
    $endStamp   = strtotime(  $endDate );
    if( $endStamp > $startStamp ){
        while( $endStamp >= $startStamp ){
            $daycheck = date('D', $startStamp);
            $daycheck = strtolower($daycheck);
            if($daycheck == $day) {
                $dateArr[] = date('d-m-Y', $startStamp);
            }
            $startStamp = strtotime( ' +1 day ', $startStamp );
        }
        return $dateArr;
    }else{
        return "failed";
    }
}


//print_r(returndatesBetweenDates( '01-05-2016', '01-12-2016', "5" ));
function returndatesBetweenDates( $startDate, $endDate, $date ){
    $startStamp = strtotime(  $startDate );
    $endStamp   = strtotime(  $endDate );
    if( $endStamp > $startStamp ){
        while( $endStamp >= $startStamp ){
            if(date( 'd', $startStamp )==$date) {
                $dateArr[] = date('d-m-Y', $startStamp);
            }
            $startStamp = strtotime( ' +1 day ', $startStamp );
        }
        return $dateArr;
    }else{
        return "failed";
    }
}

//print_r(returndatesBetweenmonthsyears( '01-1-1991', '01-01-2017', '5', 'sep' ));
//jan,feb,mar,apr,may,jun,jul,aug,sep,oct,nov,dec
function returndatesBetweenmonthsyears( $startDate, $endDate, $date, $month ){
    $startStamp = strtotime(  $startDate );
    $endStamp   = strtotime(  $endDate );
    if( $endStamp > $startStamp ){
        while( $endStamp >= $startStamp ){
            if(date( 'd', $startStamp )==$date) {
                if(strtolower(date( 'M', $startStamp ))==$month) {
                    $dateArr[] = date('d-m-Y', $startStamp);
                }
            }
            $startStamp = strtotime( ' +1 day ', $startStamp );
        }
        return $dateArr;
    }else{
        return "failed";
    }
}


?>