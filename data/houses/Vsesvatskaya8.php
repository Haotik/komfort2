<?php		
//$this->flat = $_POST['flat']		
$this->ipAddres = "192.168.1.117";

if ($this->flat>0 && $this->flat<21){$this->rsNum = "40";}
elseif (($this->flat>20 && $this->flat<40)) {$this->rsNum = "41";}
elseif (($this->flat>39 && $this->flat<61)) {$this->rsNum = "42";}
elseif (($this->flat>60 && $this->flat<81)) {$this->rsNum = "43";}
elseif (($this->flat>80 && $this->flat<100)) {$this->rsNum = "44";}
elseif (($this->flat>99 && $this->flat<121)) {$this->rsNum = "45";}
		
switch ($this->flat) {		
case"1":$this->sensors = array("BTS2_VD0_1200116","ХВС","BTS2_VD1_1200116","ГВС","BTS2_VD2_1200116","ХВС2","BTS2_VD3_1200116","ГВС2","MRC2_14986262");	$this->chanals= array(0,1,1,1,2,1,3,1);	 break;
case"2":$this->sensors = array("BTS2_VD4_1200116","ХВС","BTS2_VD5_1200116","ГВС","0","ХВС2","0","ГВС2","MRC2_14986091");	$this->chanals= array(4,1,5,1);	 break;
case"3":$this->sensors = array("BTS2_VD6_1200116","ХВС","BTS2_VD7_1200116","ГВС","0","ХВС2","0","ГВС2","MRC2_14986089");	$this->chanals= array(6,1,7,1);	 break;
case"4":$this->sensors = array("BTS2_VD0_1200082","ХВС","BTS2_VD1_1200082","ГВС","0","ХВС2","0","ГВС2","MRC2_14986353");	$this->chanals= array(0,2,1,2);	 break;
case"5":$this->sensors = array("BTS2_VD2_1200082","ХВС","BTS2_VD3_1200082","ГВС","BTS2_VD4_1200082","ХВС2","BTS2_VD5_1200082","ГВС2","MRC2_14986084");	$this->chanals= array(2,2,3,2,4,2,5,2);	 break;
case"6":$this->sensors = array("BTS2_VD6_1200082","ХВС","BTS2_VD7_1200082","ГВС","BTS2_VD0_1300046","ХВС2","BTS2_VD1_1300046","ГВС2","MRC2_14986093");	$this->chanals= array(6,2,7,2,0,3,1,3);	 break;
case"7":$this->sensors = array("BTS2_VD2_1300046","ХВС","BTS2_VD3_1300046","ГВС","0","ХВС2","0","ГВС2","MRC2_14986083");	$this->chanals= array(2,3,3,3);	 break;
case"8":$this->sensors = array("BTS2_VD4_1300046","ХВС","BTS2_VD5_1300046","ГВС","0","ХВС2","0","ГВС2","MRC2_11589670");	$this->chanals= array(4,3,5,3);	 break;
case"9":$this->sensors = array("BTS2_VD6_1300046","ХВС","BTS2_VD7_1300046","ГВС","0","ХВС2","0","ГВС2","MRC2_14985983");	$this->chanals= array(6,3,7,3);	 break;
case"10":$this->sensors = array("BTS2_VD0_1300175","ХВС","BTS2_VD1_1300175","ГВС","BTS2_VD2_1300175","ХВС2","BTS2_VD3_1300175","ГВС2","MRC2_11589679");	$this->chanals= array(0,4,1,4,2,4,3,4);	 break;
case"11":$this->sensors = array("BTS2_VD4_1300175","ХВС","BTS2_VD5_1300175","ГВС","BTS2_VD6_1300175","ХВС2","BTS2_VD7_1300175","ГВС2","MRC2_14986088");	$this->chanals= array(4,4,5,4,6,4,7,4);	 break;
case"12":$this->sensors = array("BTS2_VD0_1300178","ХВС","BTS2_VD1_1300178","ГВС","0","ХВС2","0","ГВС2","MRC2_14985987");	$this->chanals= array(0,5,1,5);	 break;
case"13":$this->sensors = array("BTS2_VD2_1300178","ХВС","BTS2_VD3_1300178","ГВС","0","ХВС2","0","ГВС2","MRC2_14985951");	$this->chanals= array(2,5,3,5);	 break;
case"14":$this->sensors = array("BTS2_VD4_1300178","ХВС","BTS2_VD5_1300178","ГВС","0","ХВС2","0","ГВС2","MRC2_14985926");	$this->chanals= array(4,5,5,5);	 break;
case"15":$this->sensors = array("BTS2_VD6_1300178","ХВС","BTS2_VD7_1300178","ГВС","BTS2_VD0_1300202","ХВС2","BTS2_VD1_1300202","ГВС2","MRC2_14986020");	$this->chanals= array(6,5,7,5,0,6,1,6);	 break;
case"16":$this->sensors = array("BTS2_VD2_1300202","ХВС","BTS2_VD3_1300202","ГВС","BTS2_VD4_1300202","ХВС2","BTS2_VD5_1300202","ГВС2","MRC2_14985924");	$this->chanals= array(2,6,3,6,4,6,5,6);	 break;
case"17":$this->sensors = array("BTS2_VD6_1300202","ХВС","BTS2_VD7_1300202","ГВС","0","ХВС2","0","ГВС2","MRC2_14986006");	$this->chanals= array(6,6,7,6);	 break;
case"18":$this->sensors = array("BTS2_VD0_1300164","ХВС","BTS2_VD1_1300164","ГВС","0","ХВС2","0","ГВС2","MRC2_14985921");	$this->chanals= array(0,7,1,7);	 break;
case"19":$this->sensors = array("BTS2_VD2_1300164","ХВС","BTS2_VD3_1300164","ГВС","0","ХВС2","0","ГВС2","MRC2_14985922");	$this->chanals= array(2,7,3,7);	 break;
case"20":$this->sensors = array("BTS2_VD4_1300164","ХВС","BTS2_VD5_1300164","ГВС","BTS2_VD6_1300164","ХВС2","BTS2_VD7_1300164","ГВС2","MRC2_14993705");	$this->chanals= array(4,7,5,7,6,7,7,7);	 break;
case"21":$this->sensors = array("BTS2_VD0_1300623","ХВС","BTS2_VD1_1300623","ГВС","BTS2_VD2_1300623","ХВС2","BTS2_VD3_1300623","ГВС2","MRC2_14985977");	$this->chanals= array(0,8,1,8,2,8,3,8);	 break;
case"22":$this->sensors = array("BTS2_VD4_1300623","ХВС","BTS2_VD5_1300623","ГВС","0","ХВС2","0","ГВС2","MRC2_14986030");	$this->chanals= array(4,8,5,8);	 break;
case"23":$this->sensors = array("BTS2_VD6_1300623","ХВС","BTS2_VD7_1300623","ГВС","0","ХВС2","0","ГВС2","MRC2_14985923");	$this->chanals= array(6,8,7,8);	 break;
case"24":$this->sensors = array("BTS2_VD0_1300196","ХВС","BTS2_VD1_1300196","ГВС","0","ХВС2","0","ГВС2","MRC2_14985969");	$this->chanals= array(0,9,1,9);	 break;
case"25":$this->sensors = array("BTS2_VD2_1300196","ХВС","BTS2_VD3_1300196","ГВС","BTS2_VD4_1300196","ХВС2","BTS2_VD5_1300196","ГВС2","MRC2_14987301");	$this->chanals= array(2,9,3,9,4,9,5,9);	 break;
case"26":$this->sensors = array("BTS2_VD6_1300196","ХВС","BTS2_VD7_1300196","ГВС","0","ХВС2","0","ГВС2","MRC2_14987208");	$this->chanals= array(6,9,7,9);	 break;
case"27":$this->sensors = array("BTS2_VD0_1300192","ХВС","BTS2_VD1_1300192","ГВС","0","ХВС2","0","ГВС2","MRC2_14990374");	$this->chanals= array(0,10,1,10);	 break;
case"28":$this->sensors = array("BTS2_VD2_1300192","ХВС","BTS2_VD3_1300192","ГВС","0","ХВС2","0","ГВС2","MRC2_14988712");	$this->chanals= array(2,10,3,10);	 break;
case"29":$this->sensors = array("BTS2_VD4_1300192","ХВС","BTS2_VD5_1300192","ГВС","0","ХВС2","0","ГВС2","MRC2_14987210");	$this->chanals= array(4,10,5,10);	 break;
case"30":$this->sensors = array("BTS2_VD6_1300192","ХВС","BTS2_VD7_1300192","ГВС","0","ХВС2","0","ГВС2","MRC2_14987246");	$this->chanals= array(6,10,7,10);	 break;
case"31":$this->sensors = array("BTS2_VD0_1300186","ХВС","BTS2_VD1_1300186","ГВС","0","ХВС2","0","ГВС2","MRC2_14990384");	$this->chanals= array(0,11,1,11);	 break;
case"32":$this->sensors = array("BTS2_VD2_1300186","ХВС","BTS2_VD3_1300186","ГВС","0","ХВС2","0","ГВС2","MRC2_14987207");	$this->chanals= array(2,11,3,11);	 break;
case"33":$this->sensors = array("BTS2_VD4_1300186","ХВС","BTS2_VD5_1300186","ГВС","0","ХВС2","0","ГВС2","MRC2_14987218");	$this->chanals= array(4,11,5,11);	 break;
case"34":$this->sensors = array("BTS2_VD6_1300186","ХВС","BTS2_VD7_1300186","ГВС","0","ХВС2","0","ГВС2","MRC2_14989506");	$this->chanals= array(6,11,7,11);	 break;
case"35":$this->sensors = array("BTS2_VD0_1300183","ХВС","BTS2_VD1_1300183","ГВС","0","ХВС2","0","ГВС2","MRC2_14987247");	$this->chanals= array(0,12,1,12);	 break;
case"36":$this->sensors = array("BTS2_VD2_1300183","ХВС","BTS2_VD3_1300183","ГВС","0","ХВС2","0","ГВС2","MRC2_14990390");	$this->chanals= array(2,12,3,12);	 break;
case"37":$this->sensors = array("BTS2_VD4_1300183","ХВС","BTS2_VD5_1300183","ГВС","0","ХВС2","0","ГВС2","MRC2_14990310");	$this->chanals= array(4,12,5,12);	 break;
case"38":$this->sensors = array("BTS2_VD6_1300183","ХВС","BTS2_VD7_1300183","ГВС","0","ХВС2","0","ГВС2","MRC2_14989894");	$this->chanals= array(6,12,7,12);	 break;
case"39":$this->sensors = array("BTS2_VD0_1300197","ХВС","BTS2_VD1_1300197","ГВС","0","ХВС2","0","ГВС2","MRC2_14989592");	$this->chanals= array(0,13,1,13);	 break;
case"40":$this->sensors = array("BTS2_VD0_1300177","ХВС","BTS2_VD1_1300177","ГВС","0","ХВС2","0","ГВС2","MRC2_14990276");	$this->chanals= array(0,14,1,14);	 break;
case"41":$this->sensors = array("BTS2_VD2_1300177","ХВС","BTS2_VD3_1300177","ГВС","0","ХВС2","0","ГВС2","MRC2_14989593");	$this->chanals= array(2,14,3,14);	 break;
case"42":$this->sensors = array("BTS2_VD4_1300177","ХВС","BTS2_VD5_1300177","ГВС","0","ХВС2","0","ГВС2","MRC2_14990355");	$this->chanals= array(4,14,5,14);	 break;
case"43":$this->sensors = array("BTS2_VD6_1300177","ХВС","BTS2_VD7_1300177","ГВС","0","ХВС2","0","ГВС2","MRC2_14990251");	$this->chanals= array(6,14,7,14);	 break;
case"44":$this->sensors = array("BTS2_VD0_1300161","ХВС","BTS2_VD1_1300161","ГВС","0","ХВС2","0","ГВС2","MRC2_14987212");	$this->chanals= array(0,15,1,15);	 break;
case"45":$this->sensors = array("BTS2_VD2_1300161","ХВС","BTS2_VD3_1300161","ГВС","0","ХВС2","0","ГВС2","MRC2_14990323");	$this->chanals= array(2,15,3,15);	 break;
case"46":$this->sensors = array("BTS2_VD4_1300161","ХВС","BTS2_VD5_1300161","ГВС","0","ХВС2","0","ГВС2","MRC2_14988616");	$this->chanals= array(4,15,5,15);	 break;
case"47":$this->sensors = array("BTS2_VD6_1300161","ХВС","BTS2_VD7_1300161","ГВС","0","ХВС2","0","ГВС2","MRC2_14990299");	$this->chanals= array(6,15,7,15);	 break;
case"48":$this->sensors = array("BTS2_VD0_1300122","ХВС","BTS2_VD1_1300122","ГВС","0","ХВС2","0","ГВС2","MRC2_14990353");	$this->chanals= array(0,16,1,16);	 break;
case"49":$this->sensors = array("BTS2_VD2_1300122","ХВС","BTS2_VD3_1300122","ГВС","0","ХВС2","0","ГВС2","MRC2_14989527");	$this->chanals= array(2,16,3,16);	 break;
case"50":$this->sensors = array("BTS2_VD4_1300122","ХВС","BTS2_VD5_1300122","ГВС","0","ХВС2","0","ГВС2","MRC2_14989854");	$this->chanals= array(4,16,5,16);	 break;
case"51":$this->sensors = array("BTS2_VD6_1300122","ХВС","BTS2_VD7_1300122","ГВС","0","ХВС2","0","ГВС2","MRC2_14989558");	$this->chanals= array(6,16,7,16);	 break;
case"52":$this->sensors = array("BTS2_VD0_1300203","ХВС","BTS2_VD1_1300203","ГВС","0","ХВС2","0","ГВС2","MRC2_14990337");	$this->chanals= array(0,17,1,17);	 break;
case"53":$this->sensors = array("BTS2_VD2_1300203","ХВС","BTS2_VD3_1300203","ГВС","0","ХВС2","0","ГВС2","MRC2_14989589");	$this->chanals= array(2,17,3,17);	 break;
case"54":$this->sensors = array("BTS2_VD4_1300203","ХВС","BTS2_VD5_1300203","ГВС","0","ХВС2","0","ГВС2","MRC2_14989896");	$this->chanals= array(4,17,5,17);	 break;
case"55":$this->sensors = array("BTS2_VD6_1300203","ХВС","BTS2_VD7_1300203","ГВС","0","ХВС2","0","ГВС2","MRC2_14989889");	$this->chanals= array(6,17,7,17);	 break;
case"56":$this->sensors = array("BTS2_VD0_1300201","ХВС","BTS2_VD1_1300201","ГВС","0","ХВС2","0","ГВС2","MRC2_14990248");	$this->chanals= array(0,18,1,18);	 break;
case"57":$this->sensors = array("BTS2_VD2_1300201","ХВС","BTS2_VD3_1300201","ГВС","0","ХВС2","0","ГВС2","MRC2_14990338");	$this->chanals= array(2,18,3,18);	 break;
case"58":$this->sensors = array("BTS2_VD4_1300201","ХВС","BTS2_VD5_1300201","ГВС","0","ХВС2","0","ГВС2","MRC2_14989591");	$this->chanals= array(4,18,5,18);	 break;
case"59":$this->sensors = array("BTS2_VD6_1300201","ХВС","BTS2_VD7_1300201","ГВС","0","ХВС2","0","ГВС2","MRC2_14989902");	$this->chanals= array(6,18,7,18);	 break;
case"60":$this->sensors = array("BTS2_VD0_1300180","ХВС","BTS2_VD1_1300180","ГВС","0","ХВС2","0","ГВС2","MRC2_14989590");	$this->chanals= array(0,19,1,19);	 break;
case"61":$this->sensors = array("BTS2_VD0_1300029","ХВС","BTS2_VD1_1300029","ГВС","BTS2_VD2_1300029","ХВС2","BTS2_VD3_1300029","ГВС2","MRC2_14985904");	$this->chanals= array(0,20,1,20,2,20,3,20);	 break;
case"62":$this->sensors = array("BTS2_VD4_1300029","ХВС","BTS2_VD5_1300029","ГВС","0","ХВС2","0","ГВС2","MRC2_14986722");	$this->chanals= array(4,20,5,20);	 break;
case"63":$this->sensors = array("BTS2_VD6_1300029","ХВС","BTS2_VD7_1300029","ГВС","0","ХВС2","0","ГВС2","MRC2_14985944");	$this->chanals= array(6,20,7,20);	 break;
case"64":$this->sensors = array("BTS2_VD0_1300009","ХВС","BTS2_VD1_1300009","ГВС","0","ХВС2","0","ГВС2","MRC2_14985970");	$this->chanals= array(0,21,1,21);	 break;
case"65":$this->sensors = array("BTS2_VD2_1300009","ХВС","BTS2_VD3_1300009","ГВС","BTS2_VD4_1300009","ХВС2","BTS2_VD5_1300009","ГВС2","MRC2_14986399");	$this->chanals= array(2,21,3,21,4,21,5,21);	 break;
case"66":$this->sensors = array("BTS2_VD6_1300009","ХВС","BTS2_VD7_1300009","ГВС","BTS2_VD0_1300016","ХВС2","BTS2_VD1_1300016","ГВС2","MRC2_14985988");	$this->chanals= array(6,21,7,21,0,22,1,22);	 break;
case"67":$this->sensors = array("BTS2_VD2_1300016","ХВС","BTS2_VD3_1300016","ГВС","0","ХВС2","0","ГВС2","MRC2_14985964");	$this->chanals= array(2,22,3,22);	 break;
case"68":$this->sensors = array("BTS2_VD4_1300016","ХВС","BTS2_VD5_1300016","ГВС","0","ХВС2","0","ГВС2","MRC2_14985918");	$this->chanals= array(4,22,5,22);	 break;
case"69":$this->sensors = array("BTS2_VD6_1300016","ХВС","BTS2_VD7_1300016","ГВС","0","ХВС2","0","ГВС2","MRC2_14985902");	$this->chanals= array(6,22,7,22);	 break;
case"70":$this->sensors = array("BTS2_VD0_1300006","ХВС","BTS2_VD1_1300006","ГВС","BTS2_VD2_1300006","ХВС2","BTS2_VD3_1300006","ГВС2","MRC2_14985973");	$this->chanals= array(0,23,1,23,2,23,3,23);	 break;
case"71":$this->sensors = array("BTS2_VD4_1300006","ХВС","BTS2_VD5_1300006","ГВС","BTS2_VD6_1300006","ХВС2","BTS2_VD7_1300006","ГВС2","MRC2_14985974");	$this->chanals= array(4,23,5,23,6,23,7,23);	 break;
case"72":$this->sensors = array("BTS2_VD0_1300024","ХВС","BTS2_VD1_1300024","ГВС","0","ХВС2","0","ГВС2","MRC2_14986319");	$this->chanals= array(0,24,1,24);	 break;
case"73":$this->sensors = array("BTS2_VD2_1300024","ХВС","BTS2_VD3_1300024","ГВС","0","ХВС2","0","ГВС2","MRC2_14988742");	$this->chanals= array(2,24,3,24);	 break;
case"74":$this->sensors = array("BTS2_VD4_1300024","ХВС","BTS2_VD5_1300024","ГВС","0","ХВС2","0","ГВС2","MRC2_14989845");	$this->chanals= array(4,24,5,24);	 break;
case"75":$this->sensors = array("BTS2_VD6_1300024","ХВС","BTS2_VD7_1300024","ГВС","BTS2_VD0_1300021","ХВС2","BTS2_VD1_1300021","ГВС2","MRC2_14989851");	$this->chanals= array(6,24,7,24,0,25,1,25);	 break;
case"76":$this->sensors = array("BTS2_VD2_1300021","ХВС","BTS2_VD3_1300021","ГВС","BTS2_VD4_1300021","ХВС2","BTS2_VD5_1300021","ГВС2","MRC2_14989855");	$this->chanals= array(2,25,3,25,4,25,5,25);	 break;
case"77":$this->sensors = array("BTS2_VD6_1300021","ХВС","BTS2_VD7_1300021","ГВС","0","ХВС2","0","ГВС2","MRC2_14988743");	$this->chanals= array(6,25,7,25);	 break;
case"78":$this->sensors = array("BTS2_VD0_1300008","ХВС","BTS2_VD1_1300008","ГВС","0","ХВС2","0","ГВС2","MRC2_14989853");	$this->chanals= array(0,26,1,26);	 break;
case"79":$this->sensors = array("BTS2_VD2_1300008","ХВС","BTS2_VD3_1300008","ГВС","0","ХВС2","0","ГВС2","MRC2_14988748");	$this->chanals= array(2,26,3,26);	 break;
case"80":$this->sensors = array("BTS2_VD4_1300008","ХВС","BTS2_VD5_1300008","ГВС","BTS2_VD6_1300008","ХВС2","BTS2_VD7_1300008","ГВС2","MRC2_14988747");	$this->chanals= array(4,26,5,26,6,26,7,26);	 break;
case"81":$this->sensors = array("BTS2_VD0_1300003","ХВС","BTS2_VD1_1300003","ГВС","BTS2_VD2_1300003","ХВС2","BTS2_VD3_1300003","ГВС2","MRC2_14988745");	$this->chanals= array(0,27,1,27,2,27,3,27);	 break;
case"82":$this->sensors = array("BTS2_VD4_1300003","ХВС","BTS2_VD5_1300003","ГВС","0","ХВС2","0","ГВС2","MRC2_14989852");	$this->chanals= array(4,27,5,27);	 break;
case"83":$this->sensors = array("BTS2_VD6_1300003","ХВС","BTS2_VD7_1300003","ГВС","0","ХВС2","0","ГВС2","MRC2_14989862");	$this->chanals= array(6,27,7,27);	 break;
case"84":$this->sensors = array("BTS2_VD0_1300017","ХВС","BTS2_VD1_1300017","ГВС","0","ХВС2","0","ГВС2","MRC2_14988746");	$this->chanals= array(0,28,1,28);	 break;
case"85":$this->sensors = array("BTS2_VD2_1300017","ХВС","BTS2_VD3_1300017","ГВС","BTS2_VD4_1300017","ХВС2","BTS2_VD5_1300017","ГВС2","MRC2_14990308");	$this->chanals= array(2,28,3,28,4,28,5,28);	 break;
case"86":$this->sensors = array("BTS2_VD6_1300017","ХВС","BTS2_VD7_1300017","ГВС","0","ХВС2","0","ГВС2","MRC2_14990322");	$this->chanals= array(6,28,7,28);	 break;
case"87":$this->sensors = array("BTS2_VD0_1300032","ХВС","BTS2_VD1_1300032","ГВС","0","ХВС2","0","ГВС2","MRC2_14990335");	$this->chanals= array(0,29,1,29);	 break;
case"88":$this->sensors = array("BTS2_VD2_1300032","ХВС","BTS2_VD3_1300032","ГВС","0","ХВС2","0","ГВС2","MRC2_14990314");	$this->chanals= array(2,29,3,29);	 break;
case"89":$this->sensors = array("BTS2_VD4_1300032","ХВС","BTS2_VD5_1300032","ГВС","0","ХВС2","0","ГВС2","MRC2_14990334");	$this->chanals= array(4,29,5,29);	 break;
case"90":$this->sensors = array("BTS2_VD6_1300032","ХВС","BTS2_VD7_1300032","ГВС","0","ХВС2","0","ГВС2","MRC2_14989576");	$this->chanals= array(6,29,7,29);	 break;
case"91":$this->sensors = array("BTS2_VD0_1300044","ХВС","BTS2_VD1_1300044","ГВС","0","ХВС2","0","ГВС2","MRC2_14990333");	$this->chanals= array(0,30,1,30);	 break;
case"92":$this->sensors = array("BTS2_VD2_1300044","ХВС","BTS2_VD3_1300044","ГВС","0","ХВС2","0","ГВС2","MRC2_14990350");	$this->chanals= array(2,30,3,30);	 break;
case"93":$this->sensors = array("BTS2_VD4_1300044","ХВС","BTS2_VD5_1300044","ГВС","0","ХВС2","0","ГВС2","MRC2_14990328");	$this->chanals= array(4,30,5,30);	 break;
case"94":$this->sensors = array("BTS2_VD6_1300044","ХВС","BTS2_VD7_1300044","ГВС","0","ХВС2","0","ГВС2","MRC2_14990307");	$this->chanals= array(6,30,7,30);	 break;
case"95":$this->sensors = array("BTS2_VD0_1300045","ХВС","BTS2_VD1_1300045","ГВС","0","ХВС2","0","ГВС2","MRC2_14990351");	$this->chanals= array(0,31,1,31);	 break;
case"96":$this->sensors = array("BTS2_VD2_1300045","ХВС","BTS2_VD3_1300045","ГВС","0","ХВС2","0","ГВС2","MRC2_14990352");	$this->chanals= array(2,31,3,31);	 break;
case"97":$this->sensors = array("BTS2_VD4_1300045","ХВС","BTS2_VD5_1300045","ГВС","0","ХВС2","0","ГВС2","MRC2_14981167");	$this->chanals= array(4,31,5,31);	 break;
case"98":$this->sensors = array("BTS2_VD6_1300045","ХВС","BTS2_VD7_1300045","ГВС","0","ХВС2","0","ГВС2","MRC2_14981174");	$this->chanals= array(6,31,7,31);	 break;
case"99":$this->sensors = array("BTS2_VD0_1300004","ХВС","BTS2_VD1_1300004","ГВС","0","ХВС2","0","ГВС2","MRC2_14981150");	$this->chanals= array(0,32,1,32);	 break;
case"100":$this->sensors = array("BTS2_VD0_1300085","ХВС","BTS2_VD1_1300085","ГВС","0","ХВС2","0","ГВС2","MRC2_14981175");	$this->chanals= array(0,33,1,33);	 break;
case"101":$this->sensors = array("BTS2_VD2_1300085","ХВС","BTS2_VD3_1300085","ГВС","0","ХВС2","0","ГВС2","MRC2_14981186");	$this->chanals= array(2,33,3,33);	 break;
case"102":$this->sensors = array("BTS2_VD4_1300085","ХВС","BTS2_VD5_1300085","ГВС","0","ХВС2","0","ГВС2","MRC2_14981170");	$this->chanals= array(4,33,5,33);	 break;
case"103":$this->sensors = array("BTS2_VD6_1300085","ХВС","BTS2_VD7_1300085","ГВС","0","ХВС2","0","ГВС2","MRC2_14981152");	$this->chanals= array(6,33,7,33);	 break;
case"104":$this->sensors = array("BTS2_VD0_1300057","ХВС","BTS2_VD1_1300057","ГВС","0","ХВС2","0","ГВС2","MRC2_10721630");	$this->chanals= array(0,34,1,34);	 break;
case"105":$this->sensors = array("BTS2_VD2_1300057","ХВС","BTS2_VD3_1300057","ГВС","0","ХВС2","0","ГВС2","MRC2_14981134");	$this->chanals= array(2,34,3,34);	 break;
case"106":$this->sensors = array("BTS2_VD4_1300057","ХВС","BTS2_VD5_1300057","ГВС","0","ХВС2","0","ГВС2","MRC2_14981968");	$this->chanals= array(4,34,5,34);	 break;
case"107":$this->sensors = array("BTS2_VD6_1300057","ХВС","BTS2_VD7_1300057","ГВС","0","ХВС2","0","ГВС2","MRC2_14981896");	$this->chanals= array(6,34,7,34);	 break;
case"108":$this->sensors = array("BTS2_VD0_1300070","ХВС","BTS2_VD1_1300070","ГВС","0","ХВС2","0","ГВС2","MRC2_14981912");	$this->chanals= array(0,35,1,35);	 break;
case"109":$this->sensors = array("BTS2_VD2_1300070","ХВС","BTS2_VD3_1300070","ГВС","0","ХВС2","0","ГВС2","MRC2_14989595");	$this->chanals= array(2,35,3,35);	 break;
case"110":$this->sensors = array("BTS2_VD4_1300070","ХВС","BTS2_VD5_1300070","ГВС","0","ХВС2","0","ГВС2","MRC2_14989601");	$this->chanals= array(4,35,5,35);	 break;
case"111":$this->sensors = array("BTS2_VD6_1300070","ХВС","BTS2_VD7_1300070","ГВС","0","ХВС2","0","ГВС2","MRC2_14990330");	$this->chanals= array(6,35,7,35);	 break;
case"112":$this->sensors = array("BTS2_VD0_1300055","ХВС","BTS2_VD1_1300055","ГВС","0","ХВС2","0","ГВС2","MRC2_14989596");	$this->chanals= array(0,36,1,36);	 break;
case"113":$this->sensors = array("BTS2_VD2_1300055","ХВС","BTS2_VD3_1300055","ГВС","0","ХВС2","0","ГВС2","MRC2_14989588");	$this->chanals= array(2,36,3,36);	 break;
case"114":$this->sensors = array("BTS2_VD4_1300055","ХВС","BTS2_VD5_1300055","ГВС","0","ХВС2","0","ГВС2","MRC2_14989574");	$this->chanals= array(4,36,5,36);	 break;
case"115":$this->sensors = array("BTS2_VD6_1300055","ХВС","BTS2_VD7_1300055","ГВС","0","ХВС2","0","ГВС2","MRC2_14989900");	$this->chanals= array(6,36,7,36);	 break;
case"116":$this->sensors = array("BTS2_VD0_1300077","ХВС","BTS2_VD1_1300077","ГВС","0","ХВС2","0","ГВС2","MRC2_14989594");	$this->chanals= array(0,37,1,37);	 break;
case"117":$this->sensors = array("BTS2_VD2_1300077","ХВС","BTS2_VD3_1300077","ГВС","0","ХВС2","0","ГВС2","MRC2_14989579");	$this->chanals= array(2,37,3,37);	 break;
case"118":$this->sensors = array("BTS2_VD4_1300077","ХВС","BTS2_VD5_1300077","ГВС","0","ХВС2","0","ГВС2","MRC2_14989575");	$this->chanals= array(4,37,5,37);	 break;
case"119":$this->sensors = array("BTS2_VD6_1300077","ХВС","BTS2_VD7_1300077","ГВС","0","ХВС2","0","ГВС2","MRC2_14989582");	$this->chanals= array(6,37,7,37);	 break;
case"120":$this->sensors = array("BTS2_VD0_1300074","ХВС","BTS2_VD1_1300074","ГВС","0","ХВС2","0","ГВС2","MRC2_14989600");	$this->chanals= array(0,38,1,38); 	 break;
		
case"Все": break;		
default: require 'alert_flat.js'; die;		
}		
?>		
