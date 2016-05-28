To get all dates between two dates use the function returnBetweenDates( arg1, arg2 )

Example : 
print_r( returnBetweenDates( '12-05-2016', '26-05-2016' ) );

Output : 
Array
(
    [0] => 12-05-2016
    [1] => 13-05-2016
    [2] => 14-05-2016
    [3] => 15-05-2016
    [4] => 16-05-2016
    [5] => 17-05-2016
    [6] => 18-05-2016
    [7] => 19-05-2016
    [8] => 20-05-2016
    [9] => 21-05-2016
    [10] => 22-05-2016
    [11] => 23-05-2016
    [12] => 24-05-2016
    [13] => 25-05-2016
    [14] => 26-05-2016
)



To get all datee weekly use the function print_r(returndaysBetweenDates( arg1, arg2, arg3 ))
where arg1 is the starting date, arg2 is the ending date and arg3 is the day (sun,mon,tue,wed,thu,fri,sat)

Example : 
print_r(returndaysBetweenDates( '01-05-2016', '01-06-2016', 'tue' ));

Output :
Array
(
    [0] => 03-05-2016
    [1] => 10-05-2016
    [2] => 17-05-2016
    [3] => 24-05-2016
    [4] => 31-05-2016
)


To get all the dates monthly between two given dates use the function returndatesBetweenDates( arg1, arg2, arg3 )
where arg1 is the starting date, arg2 is the ending date and arg3 is the date (1 to 31)

Example : 
print_r(returndatesBetweenDates( '01-05-2016', '01-12-2016', "5" ));

Output : 
Array
(
    [0] => 05-05-2016
    [1] => 05-06-2016
    [2] => 05-07-2016
    [3] => 05-08-2016
    [4] => 05-09-2016
    [5] => 05-10-2016
    [6] => 05-11-2016
)

Another example : 
print_r(returndatesBetweenDates( '01-05-2016', '01-12-2016', "31" ));

Output : 
Array
(
    [0] => 31-05-2016
    [1] => 31-07-2016
    [2] => 31-08-2016
    [3] => 31-10-2016
)

To get all the dates of a particular date and month from given year use the function print_r(returndatesBetweenmonthsyears( arg1, arg2, arg3, arg4 ))
where arg1 is the starting date, arg2 is the ending date and arg3 is the date (1 to 31) and arg4 is the month (jan,feb,mar,apr,may,jun,jul,aug,sep,oct,nov,dec)

Example : 
print_r(returndatesBetweenmonthsyears( '01-1-1991', '01-01-2017', '5', 'sep' ));

Output :
(
    [0] => 05-09-1991
    [1] => 05-09-1992
    [2] => 05-09-1993
    [3] => 05-09-1994
    [4] => 05-09-1995
    [5] => 05-09-1996
    [6] => 05-09-1997
    [7] => 05-09-1998
    [8] => 05-09-1999
    [9] => 05-09-2000
    [10] => 05-09-2001
    [11] => 05-09-2002
    [12] => 05-09-2003
    [13] => 05-09-2004
    [14] => 05-09-2005
    [15] => 05-09-2006
    [16] => 05-09-2007
    [17] => 05-09-2008
    [18] => 05-09-2009
    [19] => 05-09-2010
    [20] => 05-09-2011
    [21] => 05-09-2012
    [22] => 05-09-2013
    [23] => 05-09-2014
    [24] => 05-09-2015
    [25] => 05-09-2016
)