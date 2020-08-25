<?php		
//$this->flat = $_POST['flat']		
$this->ipAddres ="192.168.1.206";

if ($this->flat>0 && $this->flat<21){$this->rsNum = "60";}
elseif (($this->flat>20 && $this->flat<41)) {$this->rsNum = "61";}
elseif (($this->flat>40 && $this->flat<61)) {$this->rsNum = "62";}
elseif (($this->flat>60 && $this->flat<81)) {$this->rsNum = "63";}
elseif (($this->flat>80 && $this->flat<96)) {$this->rsNum = "64";}
elseif (($this->flat>95 && $this->flat<111)) {$this->rsNum = "65";}
elseif (($this->flat>110 && $this->flat<131)) {$this->rsNum = "66";}

switch ($this->flat) {		
case"1":$this->sensors = array("BTS2_VD0_1000153","ХВС","BTS2_VD1_1000153","ГВС","0","ХВС2","0","ГВС2","MRC2_5948015");	$this->chanals= array(0,1,1,1);	 break;
case"2":$this->sensors = array("BTS2_VD3_1000153","ХВС","BTS2_VD4_1000153","ГВС","0","ХВС2","0","ГВС2","MRC2_5948020");	$this->chanals= array(3,1,4,1);	 break;
case"3":$this->sensors = array("BTS2_VD6_1000153","ХВС","BTS2_VD7_1000153","ГВС","0","ХВС2","0","ГВС2","MRC2_5947925");	$this->chanals= array(6,1,7,1);	 break;
case"4":$this->sensors = array("BTS2_VD1_1000125","ХВС","BTS2_VD2_1000125","ГВС","0","ХВС2","0","ГВС2","MRC2_5948008");	$this->chanals= array(1,2,2,2);	 break;
case"5":$this->sensors = array("BTS2_VD4_1000125","ХВС","BTS2_VD5_1000125","ГВС","0","ХВС2","0","ГВС2","MRC2_8254749");	$this->chanals= array(4,2,5,2);	 break;
case"6":$this->sensors = array("BTS2_VD7_1000125","ХВС","BTS2_VD0_1000183","ГВС","0","ХВС2","0","ГВС2","MRC2_8254715");	$this->chanals= array(7,2,0,3);	 break;
case"7":$this->sensors = array("BTS2_VD2_1000183","ХВС","BTS2_VD3_1000183","ГВС","0","ХВС2","0","ГВС2","MRC2_8258206");	$this->chanals= array(2,3,3,3);	 break;
case"8":$this->sensors = array("BTS2_VD5_1000183","ХВС","BTS2_VD6_1000183","ГВС","0","ХВС2","0","ГВС2","MRC2_8258205");	$this->chanals= array(5,3,6,3);	 break;
case"9":$this->sensors = array("BTS2_VD0_1000166","ХВС","BTS2_VD1_1000166","ГВС","0","ХВС2","0","ГВС2","MRC2_8258218");	$this->chanals= array(0,4,1,4);	 break;
case"10":$this->sensors = array("BTS2_VD3_1000166","ХВС","BTS2_VD4_1000166","ГВС","0","ХВС2","0","ГВС2","MRC2_8258207");	$this->chanals= array(3,4,4,4);	 break;
case"11":$this->sensors = array("BTS2_VD6_1000166","ХВС","BTS2_VD7_1000166","ГВС","0","ХВС2","0","ГВС2","MRC2_8258215");	$this->chanals= array(6,4,7,4);	 break;
case"12":$this->sensors = array("BTS2_VD1_1000242","ХВС","BTS2_VD2_1000242","ГВС","0","ХВС2","0","ГВС2","MRC2_8258209");	$this->chanals= array(1,5,2,5);	 break;
case"13":$this->sensors = array("BTS2_VD4_1000242","ХВС","BTS2_VD5_1000242","ГВС","0","ХВС2","0","ГВС2","MRC2_8258210");	$this->chanals= array(4,5,5,5);	 break;
case"14":$this->sensors = array("BTS2_VD7_1000242","ХВС","BTS2_VD0_1000127","ГВС","0","ХВС2","0","ГВС2","MRC2_8258216");	$this->chanals= array(7,5,0,6);	 break;
case"15":$this->sensors = array("BTS2_VD2_1000127","ХВС","BTS2_VD3_1000127","ГВС","0","ХВС2","0","ГВС2","MRC2_8258223");	$this->chanals= array(2,6,3,6);	 break;
case"16":$this->sensors = array("BTS2_VD5_1000127","ХВС","BTS2_VD6_1000127","ГВС","0","ХВС2","0","ГВС2","MRC2_8258213");	$this->chanals= array(5,6,6,6);	 break;
case"17":$this->sensors = array("BTS2_VD0_1000150","ХВС","BTS2_VD1_1000150","ГВС","0","ХВС2","0","ГВС2","MRC2_8258221");	$this->chanals= array(0,7,1,7);	 break;
case"18":$this->sensors = array("BTS2_VD3_1000150","ХВС","BTS2_VD4_1000150","ГВС","0","ХВС2","0","ГВС2","MRC2_8258212");	$this->chanals= array(3,7,4,7);	 break;
case"19":$this->sensors = array("BTS2_VD6_1000150","ХВС","BTS2_VD7_1000150","ГВС","0","ХВС2","0","ГВС2","MRC2_8254741");	$this->chanals= array(6,7,7,7);	 break;
case"20":$this->sensors = array("BTS2_VD1_1000141","ХВС","BTS2_VD2_1000141","ГВС","0","ХВС2","0","ГВС2","MRC2_8254799");	$this->chanals= array(1,8,2,8);	 break;
case"21":$this->sensors = array("BTS2_VD0_1000154","ХВС","BTS2_VD1_1000154","ГВС","0","ХВС2","0","ГВС2","MRC2_5949254");	$this->chanals= array(0,9,1,9);	 break;
case"22":$this->sensors = array("BTS2_VD3_1000154","ХВС","BTS2_VD4_1000154","ГВС","0","ХВС2","0","ГВС2","MRC2_8254737");	$this->chanals= array(3,9,4,9);	 break;
case"23":$this->sensors = array("BTS2_VD6_1000154","ХВС","BTS2_VD7_1000154","ГВС","0","ХВС2","0","ГВС2","MRC2_5949316");	$this->chanals= array(6,9,7,9);	 break;
case"24":$this->sensors = array("BTS2_VD1_1000231","ХВС","BTS2_VD2_1000231","ГВС","0","ХВС2","0","ГВС2","MRC2_5949251");	$this->chanals= array(1,10,2,10);	 break;
case"25":$this->sensors = array("BTS2_VD4_1000231","ХВС","BTS2_VD5_1000231","ГВС","0","ХВС2","0","ГВС2","MRC2_5933068");	$this->chanals= array(4,10,5,10);	 break;
case"26":$this->sensors = array("BTS2_VD7_1000231","ХВС","BTS2_VD0_1000189","ГВС","0","ХВС2","0","ГВС2","MRC2_8254719");	$this->chanals= array(7,10,0,11);	 break;
case"27":$this->sensors = array("BTS2_VD2_1000189","ХВС","BTS2_VD3_1000189","ГВС","0","ХВС2","0","ГВС2","MRC2_5949324");	$this->chanals= array(2,11,3,11);	 break;
case"28":$this->sensors = array("BTS2_VD5_1000189","ХВС","BTS2_VD6_1000189","ГВС","0","ХВС2","0","ГВС2","MRC2_5949276");	$this->chanals= array(5,11,6,11);	 break;
case"29":$this->sensors = array("BTS2_VD0_1000146","ХВС","BTS2_VD1_1000146","ГВС","0","ХВС2","0","ГВС2","MRC2_8254643");	$this->chanals= array(0,12,1,12);	 break;
case"30":$this->sensors = array("BTS2_VD3_1000146","ХВС","BTS2_VD4_1000146","ГВС","0","ХВС2","0","ГВС2","MRC2_5949237");	$this->chanals= array(3,12,4,12);	 break;
case"31":$this->sensors = array("BTS2_VD6_1000146","ХВС","BTS2_VD7_1000146","ГВС","0","ХВС2","0","ГВС2","MRC2_8254792");	$this->chanals= array(6,12,7,12);	 break;
case"32":$this->sensors = array("BTS2_VD1_1000202","ХВС","BTS2_VD2_1000202","ГВС","0","ХВС2","0","ГВС2","MRC2_8254718");	$this->chanals= array(1,13,2,13);	 break;
case"33":$this->sensors = array("BTS2_VD4_1000202","ХВС","BTS2_VD5_1000202","ГВС","0","ХВС2","0","ГВС2","MRC2_5949358");	$this->chanals= array(4,13,5,13);	 break;
case"34":$this->sensors = array("BTS2_VD7_1000202","ХВС","BTS2_VD0_1000163","ГВС","0","ХВС2","0","ГВС2","MRC2_5949336");	$this->chanals= array(7,13,0,14);	 break;
case"35":$this->sensors = array("BTS2_VD2_1000163","ХВС","BTS2_VD3_1000163","ГВС","0","ХВС2","0","ГВС2","MRC2_8254740");	$this->chanals= array(2,14,3,14);	 break;
case"36":$this->sensors = array("BTS2_VD5_1000163","ХВС","BTS2_VD6_1000163","ГВС","0","ХВС2","0","ГВС2","MRC2_10178455");	$this->chanals= array(5,14,6,14);	 break;
case"37":$this->sensors = array("BTS2_VD0_1000241","ХВС","BTS2_VD1_1000241","ГВС","0","ХВС2","0","ГВС2","MRC2_8254722");	$this->chanals= array(0,15,1,15);	 break;
case"38":$this->sensors = array("BTS2_VD3_1000241","ХВС","BTS2_VD4_1000241","ГВС","0","ХВС2","0","ГВС2","MRC2_5949291");	$this->chanals= array(3,15,4,15);	 break;
case"39":$this->sensors = array("BTS2_VD6_1000241","ХВС","BTS2_VD7_1000241","ГВС","0","ХВС2","0","ГВС2","MRC2_8254760");	$this->chanals= array(6,15,7,15);	 break;
case"40":$this->sensors = array("BTS2_VD1_1000143","ХВС","BTS2_VD2_1000143","ГВС","0","ХВС2","0","ГВС2","MRC2_5949301");	$this->chanals= array(1,16,2,16);	 break;
case"41":$this->sensors = array("BTS2_VD0_1000313","ХВС","BTS2_VD1_1000313","ГВС","0","ХВС2","0","ГВС2","MRC2_5944579");	$this->chanals= array(0,17,1,17);	 break;
case"42":$this->sensors = array("BTS2_VD3_1000313","ХВС","BTS2_VD4_1000313","ГВС","0","ХВС2","0","ГВС2","MRC2_8254762");	$this->chanals= array(3,17,4,17);	 break;
case"43":$this->sensors = array("BTS2_VD6_1000313","ХВС","BTS2_VD7_1000313","ГВС","0","ХВС2","0","ГВС2","MRC2_8258224");	$this->chanals= array(6,17,7,17);	 break;
case"44":$this->sensors = array("BTS2_VD1_1000336","ХВС","BTS2_VD2_1000336","ГВС","0","ХВС2","0","ГВС2","MRC2_8254759");	$this->chanals= array(1,18,2,18);	 break;
case"45":$this->sensors = array("BTS2_VD4_1000336","ХВС","BTS2_VD5_1000336","ГВС","0","ХВС2","0","ГВС2","MRC2_5947993");	$this->chanals= array(4,18,5,18);	 break;
case"46":$this->sensors = array("BTS2_VD7_1000336","ХВС","BTS2_VD0_1000194","ГВС","0","ХВС2","0","ГВС2","MRC2_5947941");	$this->chanals= array(7,18,0,19);	 break;
case"47":$this->sensors = array("BTS2_VD2_1000194","ХВС","BTS2_VD3_1000194","ГВС","0","ХВС2","0","ГВС2","MRC2_8254775");	$this->chanals= array(2,19,3,19);	 break;
case"48":$this->sensors = array("BTS2_VD5_1000194","ХВС","BTS2_VD6_1000194","ГВС","0","ХВС2","0","ГВС2","MRC2_8254710");	$this->chanals= array(5,19,6,19);	 break;
case"49":$this->sensors = array("BTS2_VD0_1000195","ХВС","BTS2_VD1_1000195","ГВС","0","ХВС2","0","ГВС2","MRC2_8254782");	$this->chanals= array(0,20,1,20);	 break;
case"50":$this->sensors = array("BTS2_VD3_1000195","ХВС","BTS2_VD4_1000195","ГВС","0","ХВС2","0","ГВС2","MRC2_8254742");	$this->chanals= array(3,20,4,20);	 break;
case"51":$this->sensors = array("BTS2_VD6_1000195","ХВС","BTS2_VD7_1000195","ГВС","0","ХВС2","0","ГВС2","MRC2_8254731");	$this->chanals= array(6,20,7,20);	 break;
case"52":$this->sensors = array("BTS2_VD1_1000155","ХВС","BTS2_VD2_1000155","ГВС","0","ХВС2","0","ГВС2","MRC2_8254732");	$this->chanals= array(1,21,2,21);	 break;
case"53":$this->sensors = array("BTS2_VD4_1000155","ХВС","BTS2_VD5_1000155","ГВС","0","ХВС2","0","ГВС2","MRC2_8254708");	$this->chanals= array(4,21,5,21);	 break;
case"54":$this->sensors = array("BTS2_VD7_1000155","ХВС","BTS2_VD0_1000147","ГВС","0","ХВС2","0","ГВС2","MRC2_8254733");	$this->chanals= array(7,21,0,22);	 break;
case"55":$this->sensors = array("BTS2_VD2_1000147","ХВС","BTS2_VD3_1000147","ГВС","0","ХВС2","0","ГВС2","MRC2_8254736");	$this->chanals= array(2,22,3,22);	 break;
case"56":$this->sensors = array("BTS2_VD5_1000147","ХВС","BTS2_VD6_1000147","ГВС","0","ХВС2","0","ГВС2","MRC2_8254720");	$this->chanals= array(5,22,6,22);	 break;
case"57":$this->sensors = array("BTS2_VD0_1300631","ХВС","BTS2_VD1_1300631","ГВС","0","ХВС2","0","ГВС2","MRC2_8254779");	$this->chanals= array(0,23,1,23);	 break;
case"58":$this->sensors = array("BTS2_VD3_1300631","ХВС","BTS2_VD4_1300631","ГВС","0","ХВС2","0","ГВС2","MRC2_8254734");	$this->chanals= array(3,23,4,23);	 break;
case"59":$this->sensors = array("BTS2_VD6_1300631","ХВС","BTS2_VD7_1300631","ГВС","0","ХВС2","0","ГВС2","MRC2_8254761");	$this->chanals= array(6,23,7,23);	 break;
case"60":$this->sensors = array("BTS2_VD1_1000284","ХВС","BTS2_VD2_1000284","ГВС","0","ХВС2","0","ГВС2","MRC2_8254789");	$this->chanals= array(1,24,2,24);	 break;
case"61":$this->sensors = array("BTS2_VD0_1000246","ХВС","BTS2_VD1_1000246","ГВС","0","ХВС2","0","ГВС2","MRC2_5949228");	$this->chanals= array(0,25,1,25);	 break;
case"62":$this->sensors = array("BTS2_VD3_1000246","ХВС","BTS2_VD4_1000246","ГВС","0","ХВС2","0","ГВС2","MRC2_5949255");	$this->chanals= array(3,25,4,25);	 break;
case"63":$this->sensors = array("BTS2_VD6_1000246","ХВС","BTS2_VD7_1000246","ГВС","0","ХВС2","0","ГВС2","MRC2_5949229");	$this->chanals= array(6,25,7,25);	 break;
case"64":$this->sensors = array("BTS2_VD1_1000222","ХВС","BTS2_VD2_1000222","ГВС","0","ХВС2","0","ГВС2","MRC2_5949219");	$this->chanals= array(1,26,2,26);	 break;
case"65":$this->sensors = array("BTS2_VD4_1000222","ХВС","BTS2_VD5_1000222","ГВС","0","ХВС2","0","ГВС2","MRC2_5949250");	$this->chanals= array(4,26,5,26);	 break;
case"66":$this->sensors = array("BTS2_VD7_1000222","ХВС","BTS2_VD0_1000204","ГВС","0","ХВС2","0","ГВС2","MRC2_5949225");	$this->chanals= array(7,26,0,27);	 break;
case"67":$this->sensors = array("BTS2_VD2_1000204","ХВС","BTS2_VD3_1000204","ГВС","0","ХВС2","0","ГВС2","MRC2_5949338");	$this->chanals= array(2,27,3,27);	 break;
case"68":$this->sensors = array("BTS2_VD5_1000204","ХВС","BTS2_VD6_1000204","ГВС","0","ХВС2","0","ГВС2","MRC2_5949323");	$this->chanals= array(5,27,6,27);	 break;
case"69":$this->sensors = array("BTS2_VD0_1000306","ХВС","BTS2_VD1_1000306","ГВС","0","ХВС2","0","ГВС2","MRC2_5949345");	$this->chanals= array(0,28,1,28);	 break;
case"70":$this->sensors = array("BTS2_VD3_1000306","ХВС","BTS2_VD4_1000306","ГВС","0","ХВС2","0","ГВС2","MRC2_5949308");	$this->chanals= array(3,28,4,28);	 break;
case"71":$this->sensors = array("BTS2_VD6_1000306","ХВС","BTS2_VD7_1000306","ГВС","0","ХВС2","0","ГВС2","MRC2_5949326");	$this->chanals= array(6,28,7,28);	 break;
case"72":$this->sensors = array("BTS2_VD1_1000340","ХВС","BTS2_VD2_1000340","ГВС","0","ХВС2","0","ГВС2","MRC2_5949337");	$this->chanals= array(1,29,2,29);	 break;
case"73":$this->sensors = array("BTS2_VD4_1000340","ХВС","BTS2_VD5_1000340","ГВС","0","ХВС2","0","ГВС2","MRC2_5947919");	$this->chanals= array(4,29,5,29);	 break;
case"74":$this->sensors = array("BTS2_VD7_1000340","ХВС","BTS2_VD0_1000343","ГВС","0","ХВС2","0","ГВС2","MRC2_5947859");	$this->chanals= array(7,29,0,30);	 break;
case"75":$this->sensors = array("BTS2_VD2_1000343","ХВС","BTS2_VD3_1000343","ГВС","0","ХВС2","0","ГВС2","MRC2_5947846");	$this->chanals= array(2,30,3,30);	 break;
case"76":$this->sensors = array("BTS2_VD5_1000343","ХВС","BTS2_VD6_1000343","ГВС","0","ХВС2","0","ГВС2","MRC2_5947857");	$this->chanals= array(5,30,6,30);	 break;
case"77":$this->sensors = array("BTS2_VD0_1000302","ХВС","BTS2_VD1_1000302","ГВС","0","ХВС2","0","ГВС2","MRC2_5947936");	$this->chanals= array(0,31,1,31);	 break;
case"78":$this->sensors = array("BTS2_VD3_1000302","ХВС","BTS2_VD4_1000302","ГВС","0","ХВС2","0","ГВС2","MRC2_5947853");	$this->chanals= array(3,31,4,31);	 break;
case"79":$this->sensors = array("BTS2_VD6_1000302","ХВС","BTS2_VD7_1000302","ГВС","0","ХВС2","0","ГВС2","MRC2_5947870");	$this->chanals= array(6,31,7,31);	 break;
case"80":$this->sensors = array("BTS2_VD1_1000252","ХВС","BTS2_VD2_1000252","ГВС","0","ХВС2","0","ГВС2","MRC2_5947865");	$this->chanals= array(1,32,2,32);	 break;
case"81":$this->sensors = array("BTS2_VD0_1000304","ХВС","BTS2_VD1_1000304","ГВС","0","ХВС2","0","ГВС2","MRC2_8258227");	$this->chanals= array(0,33,1,33);	 break;
case"82":$this->sensors = array("BTS2_VD3_1000304","ХВС","BTS2_VD4_1000304","ГВС","0","ХВС2","0","ГВС2","MRC2_8258228");	$this->chanals= array(3,33,4,33);	 break;
case"83":$this->sensors = array("BTS2_VD6_1000304","ХВС","BTS2_VD7_1000304","ГВС","0","ХВС2","0","ГВС2","MRC2_8258229");	$this->chanals= array(6,33,7,33);	 break;
case"84":$this->sensors = array("BTS2_VD1_1000253","ХВС","BTS2_VD2_1000253","ГВС","0","ХВС2","0","ГВС2","MRC2_8258238");	$this->chanals= array(1,34,2,34);	 break;
case"85":$this->sensors = array("BTS2_VD4_1000253","ХВС","BTS2_VD5_1000253","ГВС","0","ХВС2","0","ГВС2","MRC2_8258237");	$this->chanals= array(4,34,5,34);	 break;
case"86":$this->sensors = array("BTS2_VD7_1000253","ХВС","BTS2_VD0_1000326","ГВС","0","ХВС2","0","ГВС2","MRC2_8258236");	$this->chanals= array(7,34,0,35);	 break;
case"87":$this->sensors = array("BTS2_VD2_1000326","ХВС","BTS2_VD3_1000326","ГВС","0","ХВС2","0","ГВС2","MRC2_8258234");	$this->chanals= array(2,35,3,35);	 break;
case"88":$this->sensors = array("BTS2_VD5_1000326","ХВС","BTS2_VD6_1000326","ГВС","0","ХВС2","0","ГВС2","MRC2_8258235");	$this->chanals= array(5,35,6,35);	 break;
case"89":$this->sensors = array("BTS2_VD0_1000254","ХВС","BTS2_VD1_1000254","ГВС","0","ХВС2","0","ГВС2","MRC2_8258244");	$this->chanals= array(0,36,1,36);	 break;
case"90":$this->sensors = array("BTS2_VD3_1000254","ХВС","BTS2_VD4_1000254","ГВС","0","ХВС2","0","ГВС2","MRC2_8258243");	$this->chanals= array(3,36,4,36);	 break;
case"91":$this->sensors = array("BTS2_VD6_1000254","ХВС","BTS2_VD7_1000254","ГВС","0","ХВС2","0","ГВС2","MRC2_8258233");	$this->chanals= array(6,36,7,36);	 break;
case"92":$this->sensors = array("BTS2_VD1_1000152","ХВС","BTS2_VD2_1000152","ГВС","0","ХВС2","0","ГВС2","MRC2_8258214");	$this->chanals= array(1,37,2,37);	 break;
case"93":$this->sensors = array("BTS2_VD4_1000152","ХВС","BTS2_VD5_1000152","ГВС","0","ХВС2","0","ГВС2","MRC2_8258232");	$this->chanals= array(4,37,5,37);	 break;
case"94":$this->sensors = array("BTS2_VD7_1000152","ХВС","BTS2_VD0_1000346","ГВС","0","ХВС2","0","ГВС2","MRC2_8258220");	$this->chanals= array(7,37,0,38);	 break;
case"95":$this->sensors = array("BTS2_VD2_1000346","ХВС","BTS2_VD3_1000346","ГВС","0","ХВС2","0","ГВС2","MRC2_8258219");	$this->chanals= array(2,38,3,38);	 break;
case"96":$this->sensors = array("BTS2_VD0_1000181","ХВС","BTS2_VD1_1000181","ГВС","0","ХВС2","0","ГВС2","MRC2_8258241");	$this->chanals= array(0,39,1,39);	 break;
case"97":$this->sensors = array("BTS2_VD3_1000181","ХВС","BTS2_VD4_1000181","ГВС","0","ХВС2","0","ГВС2","MRC2_8258222");	$this->chanals= array(3,39,4,39);	 break;
case"98":$this->sensors = array("BTS2_VD6_1000181","ХВС","BTS2_VD7_1000181","ГВС","0","ХВС2","0","ГВС2","MRC2_8258211");	$this->chanals= array(6,39,7,39);	 break;
case"99":$this->sensors = array("BTS2_VD1_1000312","ХВС","BTS2_VD2_1000312","ГВС","0","ХВС2","0","ГВС2","MRC2_8258230");	$this->chanals= array(1,40,2,40);	 break;
case"100":$this->sensors = array("BTS2_VD4_1000312","ХВС","BTS2_VD5_1000312","ГВС","0","ХВС2","0","ГВС2","MRC2_8258242");	$this->chanals= array(4,40,5,40);	 break;
case"101":$this->sensors = array("BTS2_VD7_1000312","ХВС","BTS2_VD0_1000220","ГВС","0","ХВС2","0","ГВС2","MRC2_8254774");	$this->chanals= array(7,40,0,41);	 break;
case"102":$this->sensors = array("BTS2_VD2_1000220","ХВС","BTS2_VD3_1000220","ГВС","0","ХВС2","0","ГВС2","MRC2_8254790");	$this->chanals= array(2,41,3,41);	 break;
case"103":$this->sensors = array("BTS2_VD5_1000220","ХВС","BTS2_VD6_1000220","ГВС","0","ХВС2","0","ГВС2","MRC2_8254755");	$this->chanals= array(5,41,6,41);	 break;
case"104":$this->sensors = array("BTS2_VD0_1000296","ХВС","BTS2_VD1_1000296","ГВС","0","ХВС2","0","ГВС2","MRC2_8258239");	$this->chanals= array(0,42,1,42);	 break;
case"105":$this->sensors = array("BTS2_VD3_1000296","ХВС","BTS2_VD4_1000296","ГВС","0","ХВС2","0","ГВС2","MRC2_8258240");	$this->chanals= array(3,42,4,42);	 break;
case"106":$this->sensors = array("BTS2_VD6_1000296","ХВС","BTS2_VD7_1000296","ГВС","0","ХВС2","0","ГВС2","MRC2_8254485");	$this->chanals= array(6,42,7,42);	 break;
case"107":$this->sensors = array("BTS2_VD1_1000168","ХВС","BTS2_VD2_1000168","ГВС","0","ХВС2","0","ГВС2","MRC2_8254771");	$this->chanals= array(1,43,2,43);	 break;
case"108":$this->sensors = array("BTS2_VD4_1000168","ХВС","BTS2_VD5_1000168","ГВС","0","ХВС2","0","ГВС2","MRC2_8258225");	$this->chanals= array(4,43,5,43);	 break;
case"109":$this->sensors = array("BTS2_VD7_1000168","ХВС","BTS2_VD0_1000223","ГВС","0","ХВС2","0","ГВС2","MRC2_8258226");	$this->chanals= array(7,43,0,44);	 break;
case"110":$this->sensors = array("BTS2_VD2_1000223","ХВС","BTS2_VD3_1000223","ГВС","0","ХВС2","0","ГВС2","MRC2_5949306");	$this->chanals= array(2,44,3,44);	 break;
case"111":$this->sensors = array("BTS2_VD0_1000165","ХВС","BTS2_VD1_1000165","ГВС","0","ХВС2","0","ГВС2","MRC2_5948033");	$this->chanals= array(0,45,1,45);	 break;
case"112":$this->sensors = array("BTS2_VD3_1000165","ХВС","BTS2_VD4_1000165","ГВС","0","ХВС2","0","ГВС2","MRC2_5949302");	$this->chanals= array(3,45,4,45);	 break;
case"113":$this->sensors = array("BTS2_VD6_1000165","ХВС","BTS2_VD7_1000165","ГВС","0","ХВС2","0","ГВС2","MRC2_5949303");	$this->chanals= array(6,45,7,45);	 break;
case"114":$this->sensors = array("BTS2_VD1_1000249","ХВС","BTS2_VD2_1000249","ГВС","0","ХВС2","0","ГВС2","MRC2_5947980");	$this->chanals= array(1,46,2,46);	 break;
case"115":$this->sensors = array("BTS2_VD4_1000249","ХВС","BTS2_VD5_1000249","ГВС","0","ХВС2","0","ГВС2","MRC2_5948005");	$this->chanals= array(4,46,5,46);	 break;
case"116":$this->sensors = array("BTS2_VD7_1000249","ХВС","BTS2_VD0_1000197","ГВС","0","ХВС2","0","ГВС2","MRC2_5948036");	$this->chanals= array(7,46,0,47);	 break;
case"117":$this->sensors = array("BTS2_VD2_1000197","ХВС","BTS2_VD3_1000197","ГВС","0","ХВС2","0","ГВС2","MRC2_5947872");	$this->chanals= array(2,47,3,47);	 break;
case"118":$this->sensors = array("BTS2_VD5_1000197","ХВС","BTS2_VD6_1000197","ГВС","0","ХВС2","0","ГВС2","MRC2_5947867");	$this->chanals= array(5,47,6,47);	 break;
case"119":$this->sensors = array("BTS2_VD0_1000135","ХВС","BTS2_VD1_1000135","ГВС","0","ХВС2","0","ГВС2","MRC2_5947899");	$this->chanals= array(0,48,1,48);	 break;
case"120":$this->sensors = array("BTS2_VD3_1000135","ХВС","BTS2_VD4_1000135","ГВС","0","ХВС2","0","ГВС2","MRC2_5947975");	$this->chanals= array(3,48,4,48);	 break;
case"121":$this->sensors = array("BTS2_VD6_1000135","ХВС","BTS2_VD7_1000135","ГВС","0","ХВС2","0","ГВС2","MRC2_5947851");	$this->chanals= array(6,48,7,48);	 break;
case"122":$this->sensors = array("BTS2_VD1_900047","ХВС","BTS2_VD2_900047","ГВС","0","ХВС2","0","ГВС2","MRC2_5947973");	$this->chanals= array(1,49,2,49);	 break;
case"123":$this->sensors = array("BTS2_VD4_900047","ХВС","BTS2_VD5_900047","ГВС","0","ХВС2","0","ГВС2","MRC2_5947983");	$this->chanals= array(4,49,5,49);	 break;
case"124":$this->sensors = array("BTS2_VD7_900047","ХВС","BTS2_VD0_1000180","ГВС","0","ХВС2","0","ГВС2","MRC2_5947940");	$this->chanals= array(7,49,0,50);	 break;
case"125":$this->sensors = array("BTS2_VD2_1000180","ХВС","BTS2_VD3_1000180","ГВС","0","ХВС2","0","ГВС2","MRC2_8254721");	$this->chanals= array(2,50,3,50);	 break;
case"126":$this->sensors = array("BTS2_VD5_1000180","ХВС","BTS2_VD6_1000180","ГВС","0","ХВС2","0","ГВС2","MRC2_8254712");	$this->chanals= array(5,50,6,50);	 break;
case"127":$this->sensors = array("BTS2_VD0_1000227","ХВС","BTS2_VD1_1000227","ГВС","0","ХВС2","0","ГВС2","MRC2_8254735");	$this->chanals= array(0,51,1,51);	 break;
case"128":$this->sensors = array("BTS2_VD3_1000227","ХВС","BTS2_VD4_1000227","ГВС","0","ХВС2","0","ГВС2","MRC2_8254781");	$this->chanals= array(3,51,4,51);	 break;
case"129":$this->sensors = array("BTS2_VD6_1000227","ХВС","BTS2_VD7_1000227","ГВС","0","ХВС2","0","ГВС2","MRC2_8254794");	$this->chanals= array(6,51,7,51);	 break;
case"130":$this->sensors = array("BTS2_VD1_1000149","ХВС","BTS2_VD2_1000149","ГВС","0","ХВС2","0","ГВС2","MRC2_8254706");	$this->chanals= array(1,52,2,52);	 break;
case"Все": break;		
default: require 'alert_flat.js'; die;		
}