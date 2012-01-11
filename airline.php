<?

/*?- op( 50, xfy, : ).
timetable( [lp1211, columbus, charlotte, 11:10, 12:20, [ mon, tue, wed, fri, sun ] ] ).
timetable( [lp1212, charlotte, columbs, 13:20, 16:20, [mon, tue, wed, fri, sun]]).
timetbale( [lp1322, columbus, pittsburgh, 11:30, 12:40, [tue, thu]]).
timetable( [lp1323, pittsburgh, columbus, 13:30, 14:40, [tue, thu]]).
timetable( [lp1458])
*/


$string = 'lp1211	Columbus	Charlotte	11:10	12:20	Mon Tue Wed Fri Sun
lp1212	Charlotte	Columbus	13:20	16:20	Mon Tue Wed Fri Sun
lp1322	Columbus	Pittsburgh	11:30	12:40	 Tue Thu
lp1323	Pittsburgh	Columbus	13:30	14:40	 Tue Thu
lp1458	Roanoke	Charlotte	09:10	10:00	Mon Tue Wed Thu Fri Sat Sun
lp1459	Charlotte	Roanoke	11:00	13:50	Mon Tue Wed Thu Fri Sat Sun
lp1472	Columbus	Charlotte	20:30	21:30	Mon Wed Thu Sat
lp1473	Charlotte	Columbus	16:30	19:30	Mon Wed Thu Sat
lp1510	Charlotte	Roanoke	08:30	11:20	Mon Tue Wed Thu Fri Sat Sun
lp1511	Roanoke	Charlotte	12:20	13:10	Mon Tue Wed Thu Fri Sat Sun
lp1613	Pittsburgh	Charlotte	09:00	09:40	Mon Tue Wed Thu Fri Sat
lp1614	Charlotte	Pittsburgh	09:10	11:45	Mon Tue Wed Thu Fri Sat Sun
lp1620	Pittsburgh	Roanoke	07:55	08:45	Mon Tue Wed Thu Fri Sat Sun
lp1621	Roanoke	Pittsburgh	09:25	10:15	Mon Tue Wed Thu Fri Sat Sun
lp1623	Roanoke	Pittsburgh	12:45	13:35	Mon Tue Wed Thu Fri Sat Sun
lp1805	Charlotte	Pittsburgh	14:45	17:20	Mon Tue Wed Thu Fri Sun
lp1806	Pittsburgh	Charlotte	16:10	16:55	Mon Tue Wed Thu Fri Sun
lp4732	Charlotte	Raleigh	09:40	10:50	Mon Tue Wed Thu Fri Sat Sun
lp4733	Raleigh	Charlotte	09:40	10:50	Mon Tue Wed Thu Fri Sat Sun
lp4752	Charlotte	Raleigh	11:40	12:50	Mon Tue Wed Thu Fri Sat Sun
lp4773	Raleigh	Charlotte	13:40	14:50	Mon Tue Wed Thu Fri Sat Sun
lp4822	Charlotte	Raleigh	18:40	19:50	Mon Tue Wed Thu Fri
lp4833	Raleigh	Charlotte	19:40	20:50	Mon Tue Wed Thu Fri';

$string = explode("\n", $string);
foreach ($string as $key => $item) {
	$item = explode("\t", $item);
	echo 'timetable(' . $item[0] . ', ' . strtolower($item[1]) . ', ' . strtolower($item[2]) . ', ' . $item[3] . ', ' . $item[4] . ', [' . str_replace(' ', ', ', strtolower($item[5])) . ']).' . "\n";
}

?>