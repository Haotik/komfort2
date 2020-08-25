<?php		
//$this->flat = $_POST['flat']		
$this->ipAddres="192.168.1.34";

if ($this->flat>0 && $this->flat<18){$this->rsNum = "101";}
elseif (($this->flat>17 && $this->flat<39)) {$this->rsNum = "102";}
elseif (($this->flat>38 && $this->flat<60)) {$this->rsNum = "103";}
elseif (($this->flat>59 && $this->flat<81)) {$this->rsNum = "104";}
		
switch ($this->flat) {		
case"1":$this->sensors = array("BTS2_VD0_1500032","ХВС","BTS2_VD1_1500032","ГВС","BTS2_VD2_1500032","ХВС2","BTS2_VD3_1500032","ГВС2","MRC2_20164736");	$this->chanals= array(0,1,1,1,2,1,3,1);	 break;
case"2":$this->sensors = array("BTS2_VD4_1500032","ХВС","BTS2_VD5_1500032","ГВС","BTS2_VD6_1500032","ХВС2","BTS2_VD7_1500032","ГВС2","MRC2_21944677");	$this->chanals= array(4,1,5,1,6,1,7,1);	 break;
case"3":$this->sensors = array("BTS2_VD0_1500033","ХВС","BTS2_VD1_1500033","ГВС","BTS2_VD2_1500033","ХВС2","BTS2_VD3_1500033","ГВС2","MRC2_16283401");	$this->chanals= array(0,2,1,2,2,2,3,2);	 break;
case"4":$this->sensors = array("BTS2_VD0_1500034","ХВС","BTS2_VD1_1500034","ГВС","BTS2_VD2_1500034","ХВС2","BTS2_VD3_1500034","ГВС2","MRC2_21944554");	$this->chanals= array(0,3,1,3,2,3,3,3);	 break;
case"5":$this->sensors = array("BTS2_VD4_1500034","ХВС","BTS2_VD5_1500034","ГВС","BTS2_VD6_1500034","ХВС2","BTS2_VD7_1500034","ГВС2","MRC2_21944034");	$this->chanals= array(4,3,5,3,6,3,7,3);	 break;
case"6":$this->sensors = array("BTS2_VD0_1500035","ХВС","BTS2_VD1_1500035","ГВС","BTS2_VD2_1500035","ХВС2","BTS2_VD3_1500035","ГВС2","MRC2_21943896");	$this->chanals= array(0,4,1,4,2,4,3,4);	 break;
case"7":$this->sensors = array("BTS2_VD4_1500035","ХВС","BTS2_VD5_1500035","ГВС","0","ХВС2","0","ГВС2","MRC2_21943713");	$this->chanals= array(4,4,5,4);	 break;
case"8":$this->sensors = array("BTS2_VD6_1500035","ХВС","BTS2_VD7_1500035","ГВС","BTS2_VD0_1500036","ХВС2","BTS2_VD1_1500036","ГВС2","MRC2_21943691");	$this->chanals= array(6,4,7,4,0,5,1,5);	 break;
case"9":$this->sensors = array("BTS2_VD2_1500036","ХВС","BTS2_VD3_1500036","ГВС","0","ХВС2","0","ГВС2","MRC2_21944977");	$this->chanals= array(2,5,3,5);	 break;
case"10":$this->sensors = array("BTS2_VD4_1500036","ХВС","BTS2_VD5_1500036","ГВС","BTS2_VD6_1500036","ХВС2","BTS2_VD7_1500036","ГВС2","MRC2_21944614");	$this->chanals= array(4,5,5,5,6,5,7,5);	 break;
case"11":$this->sensors = array("BTS2_VD0_1500081","ХВС","BTS2_VD1_1500081","ГВС","BTS2_VD2_1500081","ХВС2","BTS2_VD3_1500081","ГВС2","MRC2_21944929");	$this->chanals= array(0,6,1,6,2,6,3,6);	 break;
case"12":$this->sensors = array("BTS2_VD4_1500081","ХВС","BTS2_VD5_1500081","ГВС","BTS2_VD6_1500081","ХВС2","BTS2_VD7_1500081","ГВС2","MRC2_21944784");	$this->chanals= array(4,6,5,6,6,6,7,6);	 break;
case"13":$this->sensors = array("BTS2_VD0_1500083","ХВС","BTS2_VD1_1500083","ГВС","BTS2_VD2_1500083","ХВС2","BTS2_VD3_1500083","ГВС2","MRC2_21944920");	$this->chanals= array(0,7,1,7,2,7,3,7);	 break;
case"14":$this->sensors = array("BTS2_VD4_1500083","ХВС","BTS2_VD5_1500083","ГВС","0","ХВС2","0","ГВС2","MRC2_21944593");	$this->chanals= array(4,7,5,7);	 break;
case"15":$this->sensors = array("BTS2_VD6_1500083","ХВС","BTS2_VD7_1500083","ГВС","BTS2_VD0_1500089","ХВС2","BTS2_VD1_1500089","ГВС2","MRC2_21944927");	$this->chanals= array(6,7,7,7,0,8,1,8);	 break;
case"16":$this->sensors = array("BTS2_VD2_1500089","ХВС","BTS2_VD3_1500089","ГВС","0","ХВС2","0","ГВС2","MRC2_21944926");	$this->chanals= array(2,8,3,8);	 break;
case"17":$this->sensors = array("BTS2_VD4_1500089","ХВС","BTS2_VD5_1500089","ГВС","BTS2_VD6_1500089","ХВС2","BTS2_VD7_1500089","ГВС2","MRC2_21944967");	$this->chanals= array(4,8,5,8,6,8,7,8);	 break;
case"18":$this->sensors = array("BTS2_VD0_1500088","ХВС","BTS2_VD1_1500088","ГВС","BTS2_VD2_1500088","ХВС2","BTS2_VD3_1500088","ГВС2","MRC2_21944965");	$this->chanals= array(0,9,1,9,2,9,3,9);	 break;
case"19":$this->sensors = array("BTS2_VD4_1500088","ХВС","BTS2_VD5_1500088","ГВС","BTS2_VD6_1500088","ХВС2","BTS2_VD7_1500088","ГВС2","MRC2_21944595");	$this->chanals= array(4,9,5,9,6,9,7,9);	 break;
case"20":$this->sensors = array("BTS2_VD0_1500087","ХВС","BTS2_VD1_1500087","ГВС","BTS2_VD2_1500087","ХВС2","BTS2_VD3_1500087","ГВС2","MRC2_21944966");	$this->chanals= array(0,10,1,10,2,10,3,10);	 break;
case"21":$this->sensors = array("BTS2_VD4_1500087","ХВС","BTS2_VD5_1500087","ГВС","0","ХВС2","0","ГВС2","MRC2_21944647");	$this->chanals= array(4,10,5,10);	 break;
case"22":$this->sensors = array("BTS2_VD6_1500087","ХВС","BTS2_VD7_1500087","ГВС","BTS2_VD0_1500086","ХВС2","BTS2_VD1_1500086","ГВС2","MRC2_21944626");	$this->chanals= array(6,10,7,10,0,11,1,11);	 break;
case"23":$this->sensors = array("BTS2_VD2_1500086","ХВС","BTS2_VD3_1500086","ГВС","0","ХВС2","0","ГВС2","MRC2_21944623");	$this->chanals= array(2,11,3,11);	 break;
case"24":$this->sensors = array("BTS2_VD4_1500086","ХВС","BTS2_VD5_1500086","ГВС","BTS2_VD6_1500086","ХВС2","BTS2_VD7_1500086","ГВС2","MRC2_21944648");	$this->chanals= array(4,11,5,11,6,11,7,11);	 break;
case"25":$this->sensors = array("BTS2_VD0_1500085","ХВС","BTS2_VD1_1500085","ГВС","BTS2_VD2_1500085","ХВС2","BTS2_VD3_1500085","ГВС2","MRC2_21944621");	$this->chanals= array(0,12,1,12,2,12,3,12);	 break;
case"26":$this->sensors = array("BTS2_VD4_1500085","ХВС","BTS2_VD5_1500085","ГВС","BTS2_VD6_1500085","ХВС2","BTS2_VD7_1500085","ГВС2","MRC2_21944661");	$this->chanals= array(4,12,5,12,6,12,7,12);	 break;
case"27":$this->sensors = array("BTS2_VD0_1500082","ХВС","BTS2_VD1_1500082","ГВС","BTS2_VD2_1500082","ХВС2","BTS2_VD3_1500082","ГВС2","MRC2_21944674");	$this->chanals= array(0,13,1,13,2,13,3,13);	 break;
case"28":$this->sensors = array("BTS2_VD4_1500082","ХВС","BTS2_VD5_1500082","ГВС","0","ХВС2","0","ГВС2","MRC2_21944627");	$this->chanals= array(4,13,5,13);	 break;
case"29":$this->sensors = array("BTS2_VD6_1500082","ХВС","BTS2_VD7_1500082","ГВС","BTS2_VD0_1500084","ХВС2","BTS2_VD1_1500084","ГВС2","MRC2_21944645");	$this->chanals= array(6,13,7,13,0,14,1,14);	 break;
case"30":$this->sensors = array("BTS2_VD2_1500084","ХВС","BTS2_VD3_1500084","ГВС","0","ХВС2","0","ГВС2","MRC2_21944643");	$this->chanals= array(2,14,3,14);	 break;
case"31":$this->sensors = array("BTS2_VD4_1500084","ХВС","BTS2_VD5_1500084","ГВС","BTS2_VD6_1500084","ХВС2","BTS2_VD7_1500084","ГВС2","MRC2_21944616");	$this->chanals= array(4,14,5,14,6,14,7,14);	 break;
case"32":$this->sensors = array("BTS2_VD0_1500080","ХВС","BTS2_VD1_1500080","ГВС","BTS2_VD2_1500080","ХВС2","BTS2_VD3_1500080","ГВС2","MRC2_21944644");	$this->chanals= array(0,15,1,15,2,15,3,15);	 break;
case"33":$this->sensors = array("BTS2_VD4_1500080","ХВС","BTS2_VD5_1500080","ГВС","BTS2_VD6_1500080","ХВС2","BTS2_VD7_1500080","ГВС2","MRC2_21944822");	$this->chanals= array(4,15,5,15,6,15,7,15);	 break;
case"34":$this->sensors = array("BTS2_VD0_1500077","ХВС","BTS2_VD1_1500077","ГВС","BTS2_VD2_1500077","ХВС2","BTS2_VD3_1500077","ГВС2","MRC2_21944825");	$this->chanals= array(0,16,1,16,2,16,3,16);	 break;
case"35":$this->sensors = array("BTS2_VD4_1500077","ХВС","BTS2_VD5_1500077","ГВС","0","ХВС2","0","ГВС2","MRC2_21944899");	$this->chanals= array(4,16,5,16);	 break;
case"36":$this->sensors = array("BTS2_VD6_1500077","ХВС","BTS2_VD7_1500077","ГВС","BTS2_VD0_1500072","ХВС2","BTS2_VD1_1500072","ГВС2","MRC2_21944819");	$this->chanals= array(6,16,7,16,0,17,1,17);	 break;
case"37":$this->sensors = array("BTS2_VD2_1500072","ХВС","BTS2_VD3_1500072","ГВС","0","ХВС2","0","ГВС2","MRC2_21944859");	$this->chanals= array(2,17,3,17);	 break;
case"38":$this->sensors = array("BTS2_VD4_1500072","ХВС","BTS2_VD5_1500072","ГВС","BTS2_VD6_1500072","ХВС2","BTS2_VD7_1500072","ГВС2","MRC2_21944860");	$this->chanals= array(4,17,5,17,6,17,7,17);	 break;
case"39":$this->sensors = array("BTS2_VD0_1500060","ХВС","BTS2_VD1_1500060","ГВС","BTS2_VD2_1500060","ХВС2","BTS2_VD3_1500060","ГВС2","MRC2_21944839");	$this->chanals= array(0,18,1,18,2,18,3,18);	 break;
case"40":$this->sensors = array("BTS2_VD4_1500060","ХВС","BTS2_VD5_1500060","ГВС","BTS2_VD6_1500060","ХВС2","BTS2_VD7_1500060","ГВС2","MRC2_21944898");	$this->chanals= array(4,18,5,18,6,18,7,18);	 break;
case"41":$this->sensors = array("BTS2_VD0_1500064","ХВС","BTS2_VD1_1500064","ГВС","BTS2_VD2_1500064","ХВС2","BTS2_VD3_1500064","ГВС2","MRC2_21944815");	$this->chanals= array(0,19,1,19,2,19,3,19);	 break;
case"42":$this->sensors = array("BTS2_VD4_1500064","ХВС","BTS2_VD5_1500064","ГВС","0","ХВС2","0","ГВС2","MRC2_21944852");	$this->chanals= array(4,19,5,19);	 break;
case"43":$this->sensors = array("BTS2_VD6_1500064","ХВС","BTS2_VD7_1500064","ГВС","BTS2_VD0_1500005","ХВС2","BTS2_VD1_1500005","ГВС2","MRC2_21944692");	$this->chanals= array(6,19,7,19,0,20,1,20);	 break;
case"44":$this->sensors = array("BTS2_VD2_1500005","ХВС","BTS2_VD3_1500005","ГВС","0","ХВС2","0","ГВС2","MRC2_21944812");	$this->chanals= array(2,20,3,20);	 break;
case"45":$this->sensors = array("BTS2_VD4_1500005","ХВС","BTS2_VD5_1500005","ГВС","BTS2_VD6_1500005","ХВС2","BTS2_VD7_1500005","ГВС2","MRC2_21944854");	$this->chanals= array(4,20,5,20,6,20,7,20);	 break;
case"46":$this->sensors = array("BTS2_VD0_1500004","ХВС","BTS2_VD1_1500004","ГВС","BTS2_VD2_1500004","ХВС2","BTS2_VD3_1500004","ГВС2","MRC2_21944853");	$this->chanals= array(0,21,1,21,2,21,3,21);	 break;
case"47":$this->sensors = array("BTS2_VD4_1500004","ХВС","BTS2_VD5_1500004","ГВС","BTS2_VD6_1500004","ХВС2","BTS2_VD7_1500004","ГВС2","MRC2_21944844");	$this->chanals= array(4,21,5,21,6,21,7,21);	 break;
case"48":$this->sensors = array("BTS2_VD0_1500003","ХВС","BTS2_VD1_1500003","ГВС","BTS2_VD2_1500003","ХВС2","BTS2_VD3_1500003","ГВС2","MRC2_21944861");	$this->chanals= array(0,22,1,22,2,22,3,22);	 break;
case"49":$this->sensors = array("BTS2_VD4_1500003","ХВС","BTS2_VD5_1500003","ГВС","0","ХВС2","0","ГВС2","MRC2_21944829");	$this->chanals= array(4,22,5,22);	 break;
case"50":$this->sensors = array("BTS2_VD6_1500003","ХВС","BTS2_VD7_1500003","ГВС","BTS2_VD0_1500002","ХВС2","BTS2_VD1_1500002","ГВС2","MRC2_21944831");	$this->chanals= array(6,22,7,22,0,23,1,23);	 break;
case"51":$this->sensors = array("BTS2_VD2_1500002","ХВС","BTS2_VD3_1500002","ГВС","0","ХВС2","0","ГВС2","MRC2_21944847");	$this->chanals= array(2,23,3,23);	 break;
case"52":$this->sensors = array("BTS2_VD4_1500002","ХВС","BTS2_VD5_1500002","ГВС","BTS2_VD6_1500002","ХВС2","BTS2_VD7_1500002","ГВС2","MRC2_21944696");	$this->chanals= array(4,23,5,23,6,23,7,23);	 break;
case"53":$this->sensors = array("BTS2_VD0_1500001","ХВС","BTS2_VD1_1500001","ГВС","BTS2_VD2_1500001","ХВС2","BTS2_VD3_1500001","ГВС2","MRC2_21944858");	$this->chanals= array(0,24,1,24,2,24,3,24);	 break;
case"54":$this->sensors = array("BTS2_VD4_1500001","ХВС","BTS2_VD5_1500001","ГВС","BTS2_VD6_1500001","ХВС2","BTS2_VD7_1500001","ГВС2","MRC2_21944848");	$this->chanals= array(4,24,5,24,6,24,7,24);	 break;
case"55":$this->sensors = array("BTS2_VD0_1500067","ХВС","BTS2_VD1_1500067","ГВС","BTS2_VD2_1500067","ХВС2","BTS2_VD3_1500067","ГВС2","MRC2_21944836");	$this->chanals= array(0,25,1,25,2,25,3,25);	 break;
case"56":$this->sensors = array("BTS2_VD4_1500067","ХВС","BTS2_VD5_1500067","ГВС","0","ХВС2","0","ГВС2","MRC2_21944687");	$this->chanals= array(4,25,5,25);	 break;
case"57":$this->sensors = array("BTS2_VD6_1500067","ХВС","BTS2_VD7_1500067","ГВС","BTS2_VD0_1500010","ХВС2","BTS2_VD1_1500010","ГВС2","MRC2_21944976");	$this->chanals= array(6,25,7,25,0,26,1,26);	 break;
case"58":$this->sensors = array("BTS2_VD2_1500010","ХВС","BTS2_VD3_1500010","ГВС","0","ХВС2","0","ГВС2","MRC2_21944786");	$this->chanals= array(2,26,3,26);	 break;
case"59":$this->sensors = array("BTS2_VD4_1500010","ХВС","BTS2_VD5_1500010","ГВС","BTS2_VD6_1500010","ХВС2","BTS2_VD7_1500010","ГВС2","MRC2_21944618");	$this->chanals= array(4,26,5,26,6,26,7,26);	 break;
case"60":$this->sensors = array("BTS2_VD0_1500009","ХВС","BTS2_VD1_1500009","ГВС","BTS2_VD2_1500009","ХВС2","BTS2_VD3_1500009","ГВС2","MRC2_21944605");	$this->chanals= array(0,27,1,27,2,27,3,27);	 break;
case"61":$this->sensors = array("BTS2_VD4_1500009","ХВС","BTS2_VD5_1500009","ГВС","BTS2_VD6_1500009","ХВС2","BTS2_VD7_1500009","ГВС2","MRC2_21944975");	$this->chanals= array(4,27,5,27,6,27,7,27);	 break;
case"62":$this->sensors = array("BTS2_VD0_1500008","ХВС","BTS2_VD1_1500008","ГВС","BTS2_VD2_1500008","ХВС2","BTS2_VD3_1500008","ГВС2","MRC2_21944979");	$this->chanals= array(0,28,1,28,2,28,3,28);	 break;
case"63":$this->sensors = array("BTS2_VD4_1500008","ХВС","BTS2_VD5_1500008","ГВС","0","ХВС2","0","ГВС2","MRC2_21944590");	$this->chanals= array(4,28,5,28);	 break;
case"64":$this->sensors = array("BTS2_VD6_1500008","ХВС","BTS2_VD7_1500008","ГВС","BTS2_VD0_1500007","ХВС2","BTS2_VD1_1500007","ГВС2","MRC2_21944978");	$this->chanals= array(6,28,7,28,0,29,1,29);	 break;
case"65":$this->sensors = array("BTS2_VD2_1500007","ХВС","BTS2_VD3_1500007","ГВС","0","ХВС2","0","ГВС2","MRC2_21944783");	$this->chanals= array(2,29,3,29);	 break;
case"66":$this->sensors = array("BTS2_VD4_1500007","ХВС","BTS2_VD5_1500007","ГВС","BTS2_VD6_1500007","ХВС2","BTS2_VD7_1500007","ГВС2","MRC2_21944916");	$this->chanals= array(4,29,5,29,6,29,7,29);	 break;
case"67":$this->sensors = array("BTS2_VD0_1500006","ХВС","BTS2_VD1_1500006","ГВС","BTS2_VD2_1500006","ХВС2","BTS2_VD3_1500006","ГВС2","MRC2_21944785");	$this->chanals= array(0,30,1,30,2,30,3,30);	 break;
case"68":$this->sensors = array("BTS2_VD4_1500006","ХВС","BTS2_VD5_1500006","ГВС","BTS2_VD6_1500006","ХВС2","BTS2_VD7_1500006","ГВС2","MRC2_21944986");	$this->chanals= array(4,30,5,30,6,30,7,30);	 break;
case"69":$this->sensors = array("BTS2_VD0_1500074","ХВС","BTS2_VD1_1500074","ГВС","BTS2_VD2_1500074","ХВС2","BTS2_VD3_1500074","ГВС2","MRC2_21944615");	$this->chanals= array(0,31,1,31,2,31,3,31);	 break;
case"70":$this->sensors = array("BTS2_VD4_1500074","ХВС","BTS2_VD5_1500074","ГВС","0","ХВС2","0","ГВС2","MRC2_21944592");	$this->chanals= array(4,31,5,31);	 break;
case"71":$this->sensors = array("BTS2_VD6_1500074","ХВС","BTS2_VD7_1500074","ГВС","BTS2_VD0_1500015","ХВС2","BTS2_VD1_1500015","ГВС2","MRC2_21944974");	$this->chanals= array(6,31,7,31,0,32,1,32);	 break;
case"72":$this->sensors = array("BTS2_VD2_1500015","ХВС","BTS2_VD3_1500015","ГВС","0","ХВС2","0","ГВС2","MRC2_21944594");	$this->chanals= array(2,32,3,32);	 break;
case"73":$this->sensors = array("BTS2_VD4_1500015","ХВС","BTS2_VD5_1500015","ГВС","BTS2_VD6_1500015","ХВС2","BTS2_VD7_1500015","ГВС2","MRC2_21944591");	$this->chanals= array(4,32,5,32,6,32,7,32);	 break;
case"74":$this->sensors = array("BTS2_VD0_1500014","ХВС","BTS2_VD1_1500014","ГВС","BTS2_VD2_1500014","ХВС2","BTS2_VD3_1500014","ГВС2","MRC2_21944952");	$this->chanals= array(0,33,1,33,2,33,3,33);	 break;
case"75":$this->sensors = array("BTS2_VD4_1500014","ХВС","BTS2_VD5_1500014","ГВС","BTS2_VD6_1500014","ХВС2","BTS2_VD7_1500014","ГВС2","MRC2_21944613");	$this->chanals= array(4,33,5,33,6,33,7,33);	 break;
case"76":$this->sensors = array("BTS2_VD0_1500013","ХВС","BTS2_VD1_1500013","ГВС","BTS2_VD2_1500013","ХВС2","BTS2_VD3_1500013","ГВС2","MRC2_21944953");	$this->chanals= array(0,34,1,34,2,34,3,34);	 break;
case"77":$this->sensors = array("BTS2_VD4_1500013","ХВС","BTS2_VD5_1500013","ГВС","0","ХВС2","0","ГВС2","MRC2_21944956");	$this->chanals= array(4,34,5,34);	 break;
case"78":$this->sensors = array("BTS2_VD6_1500013","ХВС","BTS2_VD7_1500013","ГВС","BTS2_VD0_1500012","ХВС2","BTS2_VD1_1500012","ГВС2","MRC2_21944959");	$this->chanals= array(6,34,7,34,0,35,1,35);	 break;
case"79":$this->sensors = array("BTS2_VD2_1500012","ХВС","BTS2_VD3_1500012","ГВС","0","ХВС2","0","ГВС2","MRC2_21944958");	$this->chanals= array(2,35,3,35);	 break;
case"80":$this->sensors = array("BTS2_VD4_1500012","ХВС","BTS2_VD5_1500012","ГВС","BTS2_VD6_1500012","ХВС2","BTS2_VD7_1500012","ГВС2","MRC2_21944608");	$this->chanals= array(4,35,5,35,6,35,7,35); 	 break;
		
case"Все": break;		
default: require 'alert_flat.js'; die;		
}		