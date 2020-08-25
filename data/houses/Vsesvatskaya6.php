<?php		
//$this->flat = $_POST['flat']		
if ($this->flat < 53 OR ($this->flat>100 && $this->flat <153)) {$this->ipAddres="192.168.1.116";}
else {$this->ipAddres ="192.168.1.115";}

if ($this->flat>0 && $this->flat<17){$this->rsNum = "70";}
elseif (($this->flat>16 && $this->flat<35)) {$this->rsNum = "72";}
elseif (($this->flat>34 && $this->flat<53)) {$this->rsNum = "71";}
elseif (($this->flat>52 && $this->flat<69)) {$this->rsNum = "73";}
elseif (($this->flat>68 && $this->flat<85)) {$this->rsNum = "74";}
elseif (($this->flat>84 && $this->flat<103)) {$this->rsNum = "75";}
elseif (($this->flat>102 && $this->flat<119)) {$this->rsNum = "76";}
elseif (($this->flat>118 && $this->flat<135)) {$this->rsNum = "77";}
elseif (($this->flat>134 && $this->flat<153)) {$this->rsNum = "78";}
elseif (($this->flat>152 && $this->flat<169)) {$this->rsNum = "79";}
elseif (($this->flat>168 && $this->flat<185)) {$this->rsNum = "80";}
elseif (($this->flat>184 && $this->flat<203)) {$this->rsNum = "81";}

switch ($this->flat) {		
case"1":$this->sensors = array("BTS2_VD0_1200189","ХВС","BTS2_VD1_1200189","ГВС","BTS2_VD2_1200189","ХВС2","BTS2_VD3_1200189","ГВС2","MRC2_14981111");	$this->chanals= array(0,1,1,1,2,1,3,1);	 break;
case"2":$this->sensors = array("BTS2_VD4_1200189","ХВС","BTS2_VD5_1200189","ГВС","0","ХВС2","0","ГВС2","MRC2_14982027");	$this->chanals= array(4,1,5,1);	 break;
case"3":$this->sensors = array("BTS2_VD6_1200189","ХВС","BTS2_VD7_1200189","ГВС","0","ХВС2","0","ГВС2","MRC2_14982086");	$this->chanals= array(6,1,7,1);	 break;
case"4":$this->sensors = array("BTS2_VD0_1200348","ХВС","BTS2_VD1_1200348","ГВС","BTS2_VD2_1200348","ХВС2","BTS2_VD3_1200348","ГВС2","MRC2_14981384");	$this->chanals= array(0,2,1,2,2,2,3,2);	 break;
case"5":$this->sensors = array("BTS2_VD4_1200348","ХВС","BTS2_VD5_1200348","ГВС","BTS2_VD6_1200348","ХВС2","BTS2_VD7_1200348","ГВС2","MRC2_14981115");	$this->chanals= array(4,2,5,2,6,2,7,2);	 break;
case"6":$this->sensors = array("BTS2_VD0_1200324","ХВС","BTS2_VD1_1200324","ГВС","0","ХВС2","0","ГВС2","MRC2_14981392");	$this->chanals= array(0,3,1,3);	 break;
case"7":$this->sensors = array("BTS2_VD2_1200324","ХВС","BTS2_VD3_1200324","ГВС","0","ХВС2","0","ГВС2","MRC2_14981258");	$this->chanals= array(2,3,3,3);	 break;
case"8":$this->sensors = array("BTS2_VD4_1200324","ХВС","BTS2_VD5_1200324","ГВС","BTS2_VD6_1200324","ХВС2","BTS2_VD7_1200324","ГВС2","MRC2_14981146");	$this->chanals= array(4,3,5,3,6,3,7,3);	 break;
case"9":$this->sensors = array("BTS2_VD0_1200295","ХВС","BTS2_VD1_1200295","ГВС","BTS2_VD2_1200295","ХВС2","BTS2_VD3_1200295","ГВС2","MRC2_14981117");	$this->chanals= array(0,4,1,4,2,4,3,4);	 break;
case"10":$this->sensors = array("BTS2_VD4_1200295","ХВС","BTS2_VD5_1200295","ГВС","0","ХВС2","0","ГВС2","MRC2_14981217");	$this->chanals= array(4,4,5,4);	 break;
case"11":$this->sensors = array("BTS2_VD6_1200295","ХВС","BTS2_VD7_1200295","ГВС","0","ХВС2","0","ГВС2","MRC2_14981260");	$this->chanals= array(6,4,7,4);	 break;
case"12":$this->sensors = array("BTS2_VD0_1200322","ХВС","BTS2_VD1_1200322","ГВС","BTS2_VD2_1200322","ХВС2","BTS2_VD3_1200322","ГВС2","MRC2_14981119");	$this->chanals= array(0,5,1,5,2,5,3,5);	 break;
case"13":$this->sensors = array("BTS2_VD4_1200322","ХВС","BTS2_VD5_1200322","ГВС","BTS2_VD6_1200322","ХВС2","BTS2_VD7_1200322","ГВС2","MRC2_14982093");	$this->chanals= array(4,5,5,5,6,5,7,5);	 break;
case"14":$this->sensors = array("BTS2_VD0_1200343","ХВС","BTS2_VD1_1200343","ГВС","0","ХВС2","0","ГВС2","MRC2_14981136");	$this->chanals= array(0,6,1,6);	 break;
case"15":$this->sensors = array("BTS2_VD2_1200343","ХВС","BTS2_VD3_1200343","ГВС","0","ХВС2","0","ГВС2","MRC2_14982032");	$this->chanals= array(2,6,3,6);	 break;
case"16":$this->sensors = array("BTS2_VD4_1200343","ХВС","BTS2_VD5_1200343","ГВС","BTS2_VD6_1200343","ХВС2","BTS2_VD7_1200343","ГВС2","MRC2_14982078");	$this->chanals= array(4,6,5,6,6,6,7,6);	 break;
case"17":$this->sensors = array("BTS2_VD0_1200346","ХВС","BTS2_VD1_1200346","ГВС","0","ХВС2","0","ГВС2","MRC2_14982010");	$this->chanals= array(0,7,1,7);	 break;
case"18":$this->sensors = array("BTS2_VD2_1200346","ХВС","BTS2_VD3_1200346","ГВС","0","ХВС2","0","ГВС2","MRC2_14982022");	$this->chanals= array(2,7,3,7);	 break;
case"19":$this->sensors = array("BTS2_VD4_1200346","ХВС","BTS2_VD5_1200346","ГВС","0","ХВС2","0","ГВС2","MRC2_14981996");	$this->chanals= array(4,7,5,7);	 break;
case"20":$this->sensors = array("BTS2_VD6_1200346","ХВС","BTS2_VD7_1200346","ГВС","0","ХВС2","0","ГВС2","MRC2_14981141");	$this->chanals= array(6,7,7,7);	 break;
case"21":$this->sensors = array("BTS2_VD0_1200285","ХВС","BTS2_VD1_1200285","ГВС","0","ХВС2","0","ГВС2","MRC2_14981995");	$this->chanals= array(0,8,1,8);	 break;
case"22":$this->sensors = array("BTS2_VD2_1200285","ХВС","BTS2_VD3_1200285","ГВС","0","ХВС2","0","ГВС2","MRC2_14981403");	$this->chanals= array(2,8,3,8);	 break;
case"23":$this->sensors = array("BTS2_VD4_1200285","ХВС","BTS2_VD5_1200285","ГВС","0","ХВС2","0","ГВС2","MRC2_14981991");	$this->chanals= array(4,8,5,8);	 break;
case"24":$this->sensors = array("BTS2_VD6_1200285","ХВС","BTS2_VD7_1200285","ГВС","0","ХВС2","0","ГВС2","MRC2_14981943");	$this->chanals= array(6,8,7,8);	 break;
case"25":$this->sensors = array("BTS2_VD0_1200352","ХВС","BTS2_VD1_1200352","ГВС","0","ХВС2","0","ГВС2","MRC2_14981976");	$this->chanals= array(0,9,1,9);	 break;
case"26":$this->sensors = array("BTS2_VD2_1200352","ХВС","BTS2_VD3_1200352","ГВС","0","ХВС2","0","ГВС2","MRC2_14981224");	$this->chanals= array(2,9,3,9);	 break;
case"27":$this->sensors = array("BTS2_VD4_1200352","ХВС","BTS2_VD5_1200352","ГВС","0","ХВС2","0","ГВС2","MRC2_14982072");	$this->chanals= array(4,9,5,9);	 break;
case"28":$this->sensors = array("BTS2_VD6_1200352","ХВС","BTS2_VD7_1200352","ГВС","0","ХВС2","0","ГВС2","MRC2_14981564");	$this->chanals= array(6,9,7,9);	 break;
case"29":$this->sensors = array("BTS2_VD0_1200235","ХВС","BTS2_VD1_1200235","ГВС","0","ХВС2","0","ГВС2","MRC2_14982067");	$this->chanals= array(0,10,1,10);	 break;
case"30":$this->sensors = array("BTS2_VD2_1200235","ХВС","BTS2_VD3_1200235","ГВС","0","ХВС2","0","ГВС2","MRC2_14982075");	$this->chanals= array(2,10,3,10);	 break;
case"31":$this->sensors = array("BTS2_VD4_1200235","ХВС","BTS2_VD5_1200235","ГВС","0","ХВС2","0","ГВС2","MRC2_14982058");	$this->chanals= array(4,10,5,10);	 break;
case"32":$this->sensors = array("BTS2_VD6_1200235","ХВС","BTS2_VD7_1200235","ГВС","0","ХВС2","0","ГВС2","MRC2_14981561");	$this->chanals= array(6,10,7,10);	 break;
case"33":$this->sensors = array("BTS2_VD0_1200333","ХВС","BTS2_VD1_1200333","ГВС","0","ХВС2","0","ГВС2","MRC2_14981532");	$this->chanals= array(0,11,1,11);	 break;
case"34":$this->sensors = array("BTS2_VD2_1200333","ХВС","BTS2_VD3_1200333","ГВС","0","ХВС2","0","ГВС2","MRC2_14981522");	$this->chanals= array(2,11,3,11);	 break;
case"35":$this->sensors = array("BTS2_VD0_1200251","ХВС","BTS2_VD1_1200251","ГВС","0","ХВС2","0","ГВС2","MRC2_14981106");	$this->chanals= array(0,12,1,12);	 break;
case"36":$this->sensors = array("BTS2_VD2_1200251","ХВС","BTS2_VD3_1200251","ГВС","0","ХВС2","0","ГВС2","MRC2_14981218");	$this->chanals= array(2,12,3,12);	 break;
case"37":$this->sensors = array("BTS2_VD4_1200251","ХВС","BTS2_VD5_1200251","ГВС","0","ХВС2","0","ГВС2","MRC2_14981981");	$this->chanals= array(4,12,5,12);	 break;
case"38":$this->sensors = array("BTS2_VD6_1200251","ХВС","BTS2_VD7_1200251","ГВС","0","ХВС2","0","ГВС2","MRC2_14982034");	$this->chanals= array(6,12,7,12);	 break;
case"39":$this->sensors = array("BTS2_VD0_1200184","ХВС","BTS2_VD1_1200184","ГВС","0","ХВС2","0","ГВС2","MRC2_14982023");	$this->chanals= array(0,13,1,13);	 break;
case"40":$this->sensors = array("BTS2_VD2_1200184","ХВС","BTS2_VD3_1200184","ГВС","0","ХВС2","0","ГВС2","MRC2_14982084");	$this->chanals= array(2,13,3,13);	 break;
case"41":$this->sensors = array("BTS2_VD4_1200184","ХВС","BTS2_VD5_1200184","ГВС","0","ХВС2","0","ГВС2","MRC2_14981992");	$this->chanals= array(4,13,5,13);	 break;
case"42":$this->sensors = array("BTS2_VD6_1200184","ХВС","BTS2_VD7_1200184","ГВС","0","ХВС2","0","ГВС2","MRC2_14982036");	$this->chanals= array(6,13,7,13);	 break;
case"43":$this->sensors = array("BTS2_VD0_1200376","ХВС","BTS2_VD1_1200376","ГВС","0","ХВС2","0","ГВС2","MRC2_14981477");	$this->chanals= array(0,14,1,14);	 break;
case"44":$this->sensors = array("BTS2_VD2_1200376","ХВС","BTS2_VD3_1200376","ГВС","0","ХВС2","0","ГВС2","MRC2_14981988");	$this->chanals= array(2,14,3,14);	 break;
case"45":$this->sensors = array("BTS2_VD4_1200376","ХВС","BTS2_VD5_1200376","ГВС","0","ХВС2","0","ГВС2","MRC2_14982031");	$this->chanals= array(4,14,5,14);	 break;
case"46":$this->sensors = array("BTS2_VD6_1200376","ХВС","BTS2_VD7_1200376","ГВС","0","ХВС2","0","ГВС2","MRC2_14982024");	$this->chanals= array(6,14,7,14);	 break;
case"47":$this->sensors = array("BTS2_VD0_1200238","ХВС","BTS2_VD1_1200238","ГВС","0","ХВС2","0","ГВС2","MRC2_14981979");	$this->chanals= array(0,15,1,15);	 break;
case"48":$this->sensors = array("BTS2_VD2_1200238","ХВС","BTS2_VD3_1200238","ГВС","0","ХВС2","0","ГВС2","MRC2_14981118");	$this->chanals= array(2,15,3,15);	 break;
case"49":$this->sensors = array("BTS2_VD4_1200238","ХВС","BTS2_VD5_1200238","ГВС","0","ХВС2","0","ГВС2","MRC2_14981975");	$this->chanals= array(4,15,5,15);	 break;
case"50":$this->sensors = array("BTS2_VD6_1200238","ХВС","BTS2_VD7_1200238","ГВС","0","ХВС2","0","ГВС2","MRC2_14982051");	$this->chanals= array(6,15,7,15);	 break;
case"51":$this->sensors = array("BTS2_VD0_1200323","ХВС","BTS2_VD1_1200323","ГВС","0","ХВС2","0","ГВС2","MRC2_14981997");	$this->chanals= array(0,16,1,16);	 break;
case"52":$this->sensors = array("BTS2_VD2_1200323","ХВС","BTS2_VD3_1200323","ГВС","0","ХВС2","0","ГВС2","MRC2_14981568");	$this->chanals= array(2,16,3,16);	 break;
case"53":$this->sensors = array("BTS2_VD0_1200367","ХВС","BTS2_VD1_1200367","ГВС","BTS2_VD2_1200367","ХВС2","BTS2_VD3_1200367","ГВС2","MRC2_14982073");	$this->chanals= array(0,17,1,17,2,17,3,17);	 break;
case"54":$this->sensors = array("BTS2_VD4_1200367","ХВС","BTS2_VD5_1200367","ГВС","0","ХВС2","0","ГВС2","MRC2_14981982");	$this->chanals= array(4,17,5,17);	 break;
case"55":$this->sensors = array("BTS2_VD6_1200367","ХВС","BTS2_VD7_1200367","ГВС","0","ХВС2","0","ГВС2","MRC2_14982079");	$this->chanals= array(6,17,7,17);	 break;
case"56":$this->sensors = array("BTS2_VD0_1200273","ХВС","BTS2_VD1_1200273","ГВС","BTS2_VD2_1200273","ХВС2","BTS2_VD3_1200273","ГВС2","MRC2_14981521");	$this->chanals= array(0,18,1,18,2,18,3,18);	 break;
case"57":$this->sensors = array("BTS2_VD4_1200273","ХВС","BTS2_VD5_1200273","ГВС","BTS2_VD6_1200273","ХВС2","BTS2_VD7_1200273","ГВС2","MRC2_14981147");	$this->chanals= array(4,18,5,18,6,18,7,18);	 break;
case"58":$this->sensors = array("BTS2_VD0_1200150","ХВС","BTS2_VD1_1200150","ГВС","0","ХВС2","0","ГВС2","MRC2_14982081");	$this->chanals= array(0,19,1,19);	 break;
case"59":$this->sensors = array("BTS2_VD2_1200150","ХВС","BTS2_VD3_1200150","ГВС","0","ХВС2","0","ГВС2","MRC2_14982007");	$this->chanals= array(2,19,3,19);	 break;
case"60":$this->sensors = array("BTS2_VD4_1200150","ХВС","BTS2_VD5_1200150","ГВС","BTS2_VD6_1200150","ХВС2","BTS2_VD7_1200150","ГВС2","MRC2_14981452");	$this->chanals= array(4,19,5,19,6,19,7,19);	 break;
case"61":$this->sensors = array("BTS2_VD0_1200158","ХВС","BTS2_VD1_1200158","ГВС","BTS2_VD2_1200158","ХВС2","BTS2_VD3_1200158","ГВС2","MRC2_14981395");	$this->chanals= array(0,20,1,20,2,20,3,20);	 break;
case"62":$this->sensors = array("BTS2_VD4_1200158","ХВС","BTS2_VD5_1200158","ГВС","0","ХВС2","0","ГВС2","MRC2_14981386");	$this->chanals= array(4,20,5,20);	 break;
case"63":$this->sensors = array("BTS2_VD6_1200158","ХВС","BTS2_VD7_1200158","ГВС","0","ХВС2","0","ГВС2","MRC2_14981140");	$this->chanals= array(6,20,7,20);	 break;
case"64":$this->sensors = array("BTS2_VD0_1200205","ХВС","BTS2_VD1_1200205","ГВС","BTS2_VD2_1200205","ХВС2","BTS2_VD3_1200205","ГВС2","MRC2_14981223");	$this->chanals= array(0,21,1,21,2,21,3,21);	 break;
case"65":$this->sensors = array("BTS2_VD4_1200205","ХВС","BTS2_VD5_1200205","ГВС","BTS2_VD6_1200205","ХВС2","BTS2_VD7_1200205","ГВС2","MRC2_14981320");	$this->chanals= array(4,21,5,21,6,21,7,21);	 break;
case"66":$this->sensors = array("BTS2_VD0_1200275","ХВС","BTS2_VD1_1200275","ГВС","0","ХВС2","0","ГВС2","MRC2_14982098");	$this->chanals= array(0,22,1,22);	 break;
case"67":$this->sensors = array("BTS2_VD2_1200275","ХВС","BTS2_VD3_1200275","ГВС","0","ХВС2","0","ГВС2","MRC2_14981388");	$this->chanals= array(2,22,3,22);	 break;
case"68":$this->sensors = array("BTS2_VD4_1200275","ХВС","BTS2_VD5_1200275","ГВС","BTS2_VD6_1200275","ХВС2","BTS2_VD7_1200275","ГВС2","MRC2_14981390");	$this->chanals= array(4,22,5,22,6,22,7,22);	 break;
case"69":$this->sensors = array("BTS2_VD0_1200230","ХВС","BTS2_VD1_1200230","ГВС","BTS2_VD2_1200230","ХВС2","BTS2_VD3_1200230","ГВС2","MRC2_14981257");	$this->chanals= array(0,23,1,23,2,23,3,23);	 break;
case"70":$this->sensors = array("BTS2_VD4_1200230","ХВС","BTS2_VD5_1200230","ГВС","0","ХВС2","0","ГВС2","MRC2_14981321");	$this->chanals= array(4,23,5,23);	 break;
case"71":$this->sensors = array("BTS2_VD6_1200230","ХВС","BTS2_VD7_1200230","ГВС","0","ХВС2","0","ГВС2","MRC2_14981113");	$this->chanals= array(6,23,7,23);	 break;
case"72":$this->sensors = array("BTS2_VD0_1200190","ХВС","BTS2_VD1_1200190","ГВС","BTS2_VD2_1200190","ХВС2","BTS2_VD3_1200190","ГВС2","MRC2_14981222");	$this->chanals= array(0,24,1,24,2,24,3,24);	 break;
case"73":$this->sensors = array("BTS2_VD4_1200190","ХВС","BTS2_VD5_1200190","ГВС","0","ХВС2","0","ГВС2","MRC2_14981482");	$this->chanals= array(4,24,5,24);	 break;
case"74":$this->sensors = array("BTS2_VD6_1200190","ХВС","BTS2_VD7_1200190","ГВС","0","ХВС2","0","ГВС2","MRC2_14981462");	$this->chanals= array(6,24,7,24);	 break;
case"75":$this->sensors = array("BTS2_VD0_1200256","ХВС","BTS2_VD1_1200256","ГВС","0","ХВС2","0","ГВС2","MRC2_14981460");	$this->chanals= array(0,25,1,25);	 break;
case"76":$this->sensors = array("BTS2_VD2_1200256","ХВС","BTS2_VD3_1200256","ГВС","0","ХВС2","0","ГВС2","MRC2_14981497");	$this->chanals= array(2,25,3,25);	 break;
case"77":$this->sensors = array("BTS2_VD4_1200256","ХВС","BTS2_VD5_1200256","ГВС","0","ХВС2","0","ГВС2","MRC2_14981456");	$this->chanals= array(4,25,5,25);	 break;
case"78":$this->sensors = array("BTS2_VD6_1200256","ХВС","BTS2_VD7_1200256","ГВС","0","ХВС2","0","ГВС2","MRC2_14981492");	$this->chanals= array(6,25,7,25);	 break;
case"79":$this->sensors = array("BTS2_VD0_1200342","ХВС","BTS2_VD1_1200342","ГВС","0","ХВС2","0","ГВС2","MRC2_14981487");	$this->chanals= array(0,26,1,26);	 break;
case"80":$this->sensors = array("BTS2_VD2_1200342","ХВС","BTS2_VD3_1200342","ГВС","0","ХВС2","0","ГВС2","MRC2_14981463");	$this->chanals= array(2,26,3,26);	 break;
case"81":$this->sensors = array("BTS2_VD4_1200342","ХВС","BTS2_VD5_1200342","ГВС","0","ХВС2","0","ГВС2","MRC2_14981594");	$this->chanals= array(4,26,5,26);	 break;
case"82":$this->sensors = array("BTS2_VD6_1200342","ХВС","BTS2_VD7_1200342","ГВС","0","ХВС2","0","ГВС2","MRC2_14981466");	$this->chanals= array(6,26,7,26);	 break;
case"83":$this->sensors = array("BTS2_VD0_1200182","ХВС","BTS2_VD1_1200182","ГВС","0","ХВС2","0","ГВС2","MRC2_14981473");	$this->chanals= array(0,27,1,27);	 break;
case"84":$this->sensors = array("BTS2_VD2_1200182","ХВС","BTS2_VD3_1200182","ГВС","0","ХВС2","0","ГВС2","MRC2_14981259");	$this->chanals= array(2,27,3,27);	 break;
case"85":$this->sensors = array("BTS2_VD0_1200290","ХВС","BTS2_VD1_1200290","ГВС","0","ХВС2","0","ГВС2","MRC2_14982068");	$this->chanals= array(0,28,1,28);	 break;
case"86":$this->sensors = array("BTS2_VD2_1200290","ХВС","BTS2_VD3_1200290","ГВС","0","ХВС2","0","ГВС2","MRC2_14981984");	$this->chanals= array(2,28,3,28);	 break;
case"87":$this->sensors = array("BTS2_VD4_1200290","ХВС","BTS2_VD5_1200290","ГВС","0","ХВС2","0","ГВС2","MRC2_14981989");	$this->chanals= array(4,28,5,28);	 break;
case"88":$this->sensors = array("BTS2_VD6_1200290","ХВС","BTS2_VD7_1200290","ГВС","0","ХВС2","0","ГВС2","MRC2_14982069");	$this->chanals= array(6,28,7,28);	 break;
case"89":$this->sensors = array("BTS2_VD0_1200212","ХВС","BTS2_VD1_1200212","ГВС","0","ХВС2","0","ГВС2","MRC2_14981983");	$this->chanals= array(0,29,1,29);	 break;
case"90":$this->sensors = array("BTS2_VD2_1200212","ХВС","BTS2_VD3_1200212","ГВС","0","ХВС2","0","ГВС2","MRC2_14981559");	$this->chanals= array(2,29,3,29);	 break;
case"91":$this->sensors = array("BTS2_VD4_1200212","ХВС","BTS2_VD5_1200212","ГВС","0","ХВС2","0","ГВС2","MRC2_14981974");	$this->chanals= array(4,29,5,29);	 break;
case"92":$this->sensors = array("BTS2_VD6_1200212","ХВС","BTS2_VD7_1200212","ГВС","0","ХВС2","0","ГВС2","MRC2_14982017");	$this->chanals= array(6,29,7,29);	 break;
case"93":$this->sensors = array("BTS2_VD0_1200309","ХВС","BTS2_VD1_1200309","ГВС","0","ХВС2","0","ГВС2","MRC2_14981574");	$this->chanals= array(0,30,1,30);	 break;
case"94":$this->sensors = array("BTS2_VD2_1200309","ХВС","BTS2_VD3_1200309","ГВС","0","ХВС2","0","ГВС2","MRC2_14982011");	$this->chanals= array(2,30,3,30);	 break;
case"95":$this->sensors = array("BTS2_VD4_1200309","ХВС","BTS2_VD5_1200309","ГВС","0","ХВС2","0","ГВС2","MRC2_14982021");	$this->chanals= array(4,30,5,30);	 break;
case"96":$this->sensors = array("BTS2_VD6_1200309","ХВС","BTS2_VD7_1200309","ГВС","0","ХВС2","0","ГВС2","MRC2_14982012");	$this->chanals= array(6,30,7,30);	 break;
case"97":$this->sensors = array("BTS2_VD0_1200106","ХВС","BTS2_VD1_1200106","ГВС","0","ХВС2","0","ГВС2","MRC2_14981229");	$this->chanals= array(0,31,1,31);	 break;
case"98":$this->sensors = array("BTS2_VD2_1200106","ХВС","BTS2_VD3_1200106","ГВС","0","ХВС2","0","ГВС2","MRC2_14981959");	$this->chanals= array(2,31,3,31);	 break;
case"99":$this->sensors = array("BTS2_VD4_1200106","ХВС","BTS2_VD5_1200106","ГВС","0","ХВС2","0","ГВС2","MRC2_14981144");	$this->chanals= array(4,31,5,31);	 break;
case"100":$this->sensors = array("BTS2_VD6_1200106","ХВС","BTS2_VD7_1200106","ГВС","0","ХВС2","0","ГВС2","MRC2_14981145");	$this->chanals= array(6,31,7,31);	 break;
case"101":$this->sensors = array("BTS2_VD0_1200099","ХВС","BTS2_VD1_1200099","ГВС","0","ХВС2","0","ГВС2","MRC2_14981142");	$this->chanals= array(0,32,1,32);	 break;
case"102":$this->sensors = array("BTS2_VD2_1200099","ХВС","BTS2_VD3_1200099","ГВС","0","ХВС2","0","ГВС2","MRC2_14981143");	$this->chanals= array(2,32,3,32);	 break;
case"103":$this->sensors = array("BTS2_VD0_1100058","ХВС","BTS2_VD1_1100058","ГВС","BTS2_VD2_1100058","ХВС2","BTS2_VD3_1100058","ГВС2","MRC2_14982003");	$this->chanals= array(0,33,1,33,2,33,3,33);	 break;
case"104":$this->sensors = array("BTS2_VD4_1100058","ХВС","BTS2_VD5_1100058","ГВС","0","ХВС2","0","ГВС2","MRC2_14981936");	$this->chanals= array(4,33,5,33);	 break;
case"105":$this->sensors = array("BTS2_VD6_1100058","ХВС","BTS2_VD7_1100058","ГВС","0","ХВС2","0","ГВС2","MRC2_14981112");	$this->chanals= array(6,33,7,33);	 break;
case"106":$this->sensors = array("BTS2_VD0_1200163","ХВС","BTS2_VD1_1200163","ГВС","BTS2_VD2_1200163","ХВС2","BTS2_VD3_1200163","ГВС2","MRC2_14981116");	$this->chanals= array(0,34,1,34,2,34,3,34);	 break;
case"107":$this->sensors = array("BTS2_VD4_1200163","ХВС","BTS2_VD5_1200163","ГВС","BTS2_VD6_1200163","ХВС2","BTS2_VD7_1200163","ГВС2","MRC2_14981114");	$this->chanals= array(4,34,5,34,6,34,7,34);	 break;
case"108":$this->sensors = array("BTS2_VD0_1100054","ХВС","BTS2_VD1_1100054","ГВС","0","ХВС2","0","ГВС2","MRC2_14981122");	$this->chanals= array(0,35,1,35);	 break;
case"109":$this->sensors = array("BTS2_VD2_1100054","ХВС","BTS2_VD3_1100054","ГВС","0","ХВС2","0","ГВС2","MRC2_14981372");	$this->chanals= array(2,35,3,35);	 break;
case"110":$this->sensors = array("BTS2_VD4_1100054","ХВС","BTS2_VD5_1100054","ГВС","BTS2_VD6_1100054","ХВС2","BTS2_VD7_1100054","ГВС2","MRC2_14981678");	$this->chanals= array(4,35,5,35,6,35,7,35);	 break;
case"111":$this->sensors = array("BTS2_VD0_1200255","ХВС","BTS2_VD1_1200255","ГВС","BTS2_VD2_1200255","ХВС2","BTS2_VD3_1200255","ГВС2","MRC2_14981484");	$this->chanals= array(0,36,1,36,2,36,3,36);	 break;
case"112":$this->sensors = array("BTS2_VD4_1200255","ХВС","BTS2_VD5_1200255","ГВС","0","ХВС2","0","ГВС2","MRC2_14981496");	$this->chanals= array(4,36,5,36);	 break;
case"113":$this->sensors = array("BTS2_VD6_1200255","ХВС","BTS2_VD7_1200255","ГВС","0","ХВС2","0","ГВС2","MRC2_14981700");	$this->chanals= array(6,36,7,36);	 break;
case"114":$this->sensors = array("BTS2_VD0_1200245","ХВС","BTS2_VD1_1200245","ГВС","BTS2_VD2_1200245","ХВС2","BTS2_VD3_1200245","ГВС2","MRC2_14981698");	$this->chanals= array(0,37,1,37,2,37,3,37);	 break;
case"115":$this->sensors = array("BTS2_VD4_1200245","ХВС","BTS2_VD5_1200245","ГВС","BTS2_VD6_1200245","ХВС2","BTS2_VD7_1200245","ГВС2","MRC2_14981294");	$this->chanals= array(4,37,5,37,6,37,7,37);	 break;
case"116":$this->sensors = array("BTS2_VD0_1200314","ХВС","BTS2_VD1_1200314","ГВС","0","ХВС2","0","ГВС2","MRC2_14981480");	$this->chanals= array(0,38,1,38);	 break;
case"117":$this->sensors = array("BTS2_VD2_1200314","ХВС","BTS2_VD3_1200314","ГВС","0","ХВС2","0","ГВС2","MRC2_14981451");	$this->chanals= array(2,38,3,38);	 break;
case"118":$this->sensors = array("BTS2_VD4_1200314","ХВС","BTS2_VD5_1200314","ГВС","BTS2_VD6_1200314","ХВС2","BTS2_VD7_1200314","ГВС2","MRC2_14981498");	$this->chanals= array(4,38,5,38,6,38,7,38);	 break;
case"119":$this->sensors = array("BTS2_VD0_1200276","ХВС","BTS2_VD1_1200276","ГВС","BTS2_VD2_1200276","ХВС2","BTS2_VD3_1200276","ГВС2","MRC2_14981673");	$this->chanals= array(0,39,1,39,2,39,3,39);	 break;
case"120":$this->sensors = array("BTS2_VD4_1200276","ХВС","BTS2_VD5_1200276","ГВС","0","ХВС2","0","ГВС2","MRC2_14981677");	$this->chanals= array(4,39,5,39);	 break;
case"121":$this->sensors = array("BTS2_VD6_1200276","ХВС","BTS2_VD7_1200276","ГВС","0","ХВС2","0","ГВС2","MRC2_14981571");	$this->chanals= array(6,39,7,39);	 break;
case"122":$this->sensors = array("BTS2_VD0_9900036","ХВС","BTS2_VD1_9900036","ГВС","BTS2_VD2_9900036","ХВС2","BTS2_VD3_9900036","ГВС2","MRC2_14981123");	$this->chanals= array(0,40,1,40,2,40,3,40);	 break;
case"123":$this->sensors = array("BTS2_VD4_9900036","ХВС","BTS2_VD5_9900036","ГВС","0","ХВС2","0","ГВС2","MRC2_14981593");	$this->chanals= array(4,40,5,40);	 break;
case"124":$this->sensors = array("BTS2_VD6_9900036","ХВС","BTS2_VD7_9900036","ГВС","0","ХВС2","0","ГВС2","MRC2_14981524");	$this->chanals= array(6,40,7,40);	 break;
case"125":$this->sensors = array("BTS2_VD0_1200250","ХВС","BTS2_VD1_1200250","ГВС","0","ХВС2","0","ГВС2","MRC2_14981592");	$this->chanals= array(0,41,1,41);	 break;
case"126":$this->sensors = array("BTS2_VD2_1200250","ХВС","BTS2_VD3_1200250","ГВС","0","ХВС2","0","ГВС2","MRC2_14981531");	$this->chanals= array(2,41,3,41);	 break;
case"127":$this->sensors = array("BTS2_VD4_1200250","ХВС","BTS2_VD5_1200250","ГВС","0","ХВС2","0","ГВС2","MRC2_14981553");	$this->chanals= array(4,41,5,41);	 break;
case"128":$this->sensors = array("BTS2_VD6_1200250","ХВС","BTS2_VD7_1200250","ГВС","0","ХВС2","0","ГВС2","MRC2_14981507");	$this->chanals= array(6,41,7,41);	 break;
case"129":$this->sensors = array("BTS2_VD0_9900037","ХВС","BTS2_VD1_9900037","ГВС","0","ХВС2","0","ГВС2","MRC2_14981576");	$this->chanals= array(0,42,1,42);	 break;
case"130":$this->sensors = array("BTS2_VD2_9900037","ХВС","BTS2_VD3_9900037","ГВС","0","ХВС2","0","ГВС2","MRC2_14981513");	$this->chanals= array(2,42,3,42);	 break;
case"131":$this->sensors = array("BTS2_VD4_9900037","ХВС","BTS2_VD5_9900037","ГВС","0","ХВС2","0","ГВС2","MRC2_14981288");	$this->chanals= array(4,42,5,42);	 break;
case"132":$this->sensors = array("BTS2_VD6_9900037","ХВС","BTS2_VD7_9900037","ГВС","0","ХВС2","0","ГВС2","MRC2_14981517");	$this->chanals= array(6,42,7,42);	 break;
case"133":$this->sensors = array("BTS2_VD0_1200236","ХВС","BTS2_VD1_1200236","ГВС","0","ХВС2","0","ГВС2","MRC2_14982095");	$this->chanals= array(0,43,1,43);	 break;
case"134":$this->sensors = array("BTS2_VD2_1200236","ХВС","BTS2_VD3_1200236","ГВС","0","ХВС2","0","ГВС2","MRC2_14982097");	$this->chanals= array(2,43,3,43);	 break;
case"135":$this->sensors = array("BTS2_VD0_1200243","ХВС","BTS2_VD1_1200243","ГВС","0","ХВС2","0","ГВС2","MRC2_14982096");	$this->chanals= array(0,44,1,44);	 break;
case"136":$this->sensors = array("BTS2_VD2_1200243","ХВС","BTS2_VD3_1200243","ГВС","0","ХВС2","0","ГВС2","MRC2_14982092");	$this->chanals= array(2,44,3,44);	 break;
case"137":$this->sensors = array("BTS2_VD4_1200243","ХВС","BTS2_VD5_1200243","ГВС","0","ХВС2","0","ГВС2","MRC2_14982071");	$this->chanals= array(4,44,5,44);	 break;
case"138":$this->sensors = array("BTS2_VD6_1200243","ХВС","BTS2_VD7_1200243","ГВС","0","ХВС2","0","ГВС2","MRC2_14981986");	$this->chanals= array(6,44,7,44);	 break;
case"139":$this->sensors = array("BTS2_VD0_1200253","ХВС","BTS2_VD1_1200253","ГВС","0","ХВС2","0","ГВС2","MRC2_8272823");	$this->chanals= array(0,45,1,45);	 break;
case"140":$this->sensors = array("BTS2_VD2_1200253","ХВС","BTS2_VD3_1200253","ГВС","0","ХВС2","0","ГВС2","MRC2_14981404");	$this->chanals= array(2,45,3,45);	 break;
case"141":$this->sensors = array("BTS2_VD4_1200253","ХВС","BTS2_VD5_1200253","ГВС","0","ХВС2","0","ГВС2","MRC2_14982077");	$this->chanals= array(4,45,5,45);	 break;
case"142":$this->sensors = array("BTS2_VD6_1200253","ХВС","BTS2_VD7_1200253","ГВС","0","ХВС2","0","ГВС2","MRC2_14981391");	$this->chanals= array(6,45,7,45);	 break;
case"143":$this->sensors = array("BTS2_VD0_1200071","ХВС","BTS2_VD1_1200071","ГВС","0","ХВС2","0","ГВС2","MRC2_14981560");	$this->chanals= array(0,46,1,46);	 break;
case"144":$this->sensors = array("BTS2_VD2_1200071","ХВС","BTS2_VD3_1200071","ГВС","0","ХВС2","0","ГВС2","MRC2_14981530");	$this->chanals= array(2,46,3,46);	 break;
case"145":$this->sensors = array("BTS2_VD4_1200071","ХВС","BTS2_VD5_1200071","ГВС","0","ХВС2","0","ГВС2","MRC2_14981527");	$this->chanals= array(4,46,5,46);	 break;
case"146":$this->sensors = array("BTS2_VD6_1200071","ХВС","BTS2_VD7_1200071","ГВС","0","ХВС2","0","ГВС2","MRC2_14981221");	$this->chanals= array(6,46,7,46);	 break;
case"147":$this->sensors = array("BTS2_VD0_1200060","ХВС","BTS2_VD1_1200060","ГВС","0","ХВС2","0","ГВС2","MRC2_14981300");	$this->chanals= array(0,47,1,47);	 break;
case"148":$this->sensors = array("BTS2_VD2_1200060","ХВС","BTS2_VD3_1200060","ГВС","0","ХВС2","0","ГВС2","MRC2_14981478");	$this->chanals= array(2,47,3,47);	 break;
case"149":$this->sensors = array("BTS2_VD4_1200060","ХВС","BTS2_VD5_1200060","ГВС","0","ХВС2","0","ГВС2","MRC2_14981131");	$this->chanals= array(4,47,5,47);	 break;
case"150":$this->sensors = array("BTS2_VD6_1200060","ХВС","BTS2_VD7_1200060","ГВС","0","ХВС2","0","ГВС2","MRC2_14981556");	$this->chanals= array(6,47,7,47);	 break;
case"151":$this->sensors = array("BTS2_VD0_1200065","ХВС","BTS2_VD1_1200065","ГВС","0","ХВС2","0","ГВС2","MRC2_14981130");	$this->chanals= array(0,48,1,48);	 break;
case"152":$this->sensors = array("BTS2_VD2_1200065","ХВС","BTS2_VD3_1200065","ГВС","0","ХВС2","0","ГВС2","MRC2_14981555");	$this->chanals= array(2,48,3,48);	 break;
case"153":$this->sensors = array("BTS2_VD0_1200156","ХВС","BTS2_VD1_1200156","ГВС","BTS2_VD2_0100255","ХВС2","BTS2_VD3_0100255","ГВС2","MRC2_14981508");	$this->chanals= array(0,49,1,49,2,49,3,49);	 break;
case"154":$this->sensors = array("BTS2_VD4_1200156","ХВС","BTS2_VD5_1200156","ГВС","0","ХВС2","0","ГВС2","MRC2_14981476");	$this->chanals= array(4,49,5,49);	 break;
case"155":$this->sensors = array("BTS2_VD6_1200156","ХВС","BTS2_VD7_1200156","ГВС","0","ХВС2","0","ГВС2","MRC2_14981509");	$this->chanals= array(6,49,7,49);	 break;
case"156":$this->sensors = array("BTS2_VD0_1200117","ХВС","BTS2_VD1_1200117","ГВС","BTS2_VD2_1200117","ХВС2","BTS2_VD3_1200117","ГВС2","MRC2_14981284");	$this->chanals= array(0,50,1,50,2,50,3,50);	 break;
case"157":$this->sensors = array("BTS2_VD4_1200117","ХВС","BTS2_VD5_1200117","ГВС","BTS2_VD6_1200117","ХВС2","BTS2_VD7_1200117","ГВС2","MRC2_14981459");	$this->chanals= array(4,50,5,50,6,50,7,50);	 break;
case"158":$this->sensors = array("BTS2_VD0_1100048","ХВС","BTS2_VD1_1100048","ГВС","0","ХВС2","0","ГВС2","MRC2_14981465");	$this->chanals= array(0,51,1,51);	 break;
case"159":$this->sensors = array("BTS2_VD2_1100048","ХВС","BTS2_VD3_1100048","ГВС","0","ХВС2","0","ГВС2","MRC2_14981454");	$this->chanals= array(2,51,3,51);	 break;
case"160":$this->sensors = array("BTS2_VD4_1100048","ХВС","BTS2_VD5_1100048","ГВС","BTS2_VD6_1100048","ХВС2","BTS2_VD7_1100048","ГВС2","MRC2_14981389");	$this->chanals= array(4,51,5,51,6,51,7,51);	 break;
case"161":$this->sensors = array("BTS2_VD0_1200124","ХВС","BTS2_VD1_1200124","ГВС","BTS2_VD2_1200124","ХВС2","BTS2_VD3_1200124","ГВС2","MRC2_14981671");	$this->chanals= array(0,52,1,52,2,52,3,52);	 break;
case"162":$this->sensors = array("BTS2_VD4_1200124","ХВС","BTS2_VD5_1200124","ГВС","0","ХВС2","0","ГВС2","MRC2_14981290");	$this->chanals= array(4,52,5,52);	 break;
case"163":$this->sensors = array("BTS2_VD6_1200124","ХВС","BTS2_VD7_1200124","ГВС","0","ХВС2","0","ГВС2","MRC2_14981397");	$this->chanals= array(6,52,7,52);	 break;
case"164":$this->sensors = array("BTS2_VD0_1200120","ХВС","BTS2_VD1_1200120","ГВС","BTS2_VD2_1200120","ХВС2","BTS2_VD3_1200120","ГВС2","MRC2_14981132");	$this->chanals= array(0,53,1,53,2,53,3,53);	 break;
case"165":$this->sensors = array("BTS2_VD4_1200120","ХВС","BTS2_VD5_1200120","ГВС","BTS2_VD6_1200120","ХВС2","BTS2_VD7_1200120","ГВС2","MRC2_14981481");	$this->chanals= array(4,53,5,53,6,53,7,53);	 break;
case"166":$this->sensors = array("BTS2_VD0_1100056","ХВС","BTS2_VD1_1100056","ГВС","0","ХВС2","0","ГВС2","MRC2_14981299");	$this->chanals= array(0,54,1,54);	 break;
case"167":$this->sensors = array("BTS2_VD2_1100056","ХВС","BTS2_VD3_1100056","ГВС","0","ХВС2","0","ГВС2","MRC2_14981472");	$this->chanals= array(2,54,3,54);	 break;
case"168":$this->sensors = array("BTS2_VD4_1100056","ХВС","BTS2_VD5_1100056","ГВС","BTS2_VD6_1100056","ХВС2","BTS2_VD7_1100056","ГВС2","MRC2_14981396");	$this->chanals= array(4,54,5,54,6,54,7,54);	 break;
case"169":$this->sensors = array("BTS2_VD0_1200123","ХВС","BTS2_VD1_1200123","ГВС","BTS2_VD2_1200123","ХВС2","BTS2_VD3_1200123","ГВС2","MRC2_14981286");	$this->chanals= array(0,55,1,55,2,55,3,55);	 break;
case"170":$this->sensors = array("BTS2_VD4_1200123","ХВС","BTS2_VD5_1200123","ГВС","0","ХВС2","0","ГВС2","MRC2_14981515");	$this->chanals= array(4,55,5,55);	 break;
case"171":$this->sensors = array("BTS2_VD6_1200123","ХВС","BTS2_VD7_1200123","ГВС","0","ХВС2","0","ГВС2","MRC2_14981538");	$this->chanals= array(6,55,7,55);	 break;
case"172":$this->sensors = array("BTS2_VD0_1200135","ХВС","BTS2_VD1_1200135","ГВС","BTS2_VD2_1200135","ХВС2","BTS2_VD3_1200135","ГВС2","MRC2_14981562");	$this->chanals= array(0,56,1,56,2,56,3,56);	 break;
case"173":$this->sensors = array("BTS2_VD4_1200135","ХВС","BTS2_VD5_1200135","ГВС","0","ХВС2","0","ГВС2","MRC2_14981541");	$this->chanals= array(4,56,5,56);	 break;
case"174":$this->sensors = array("BTS2_VD6_1200135","ХВС","BTS2_VD7_1200135","ГВС","0","ХВС2","0","ГВС2","MRC2_14981540");	$this->chanals= array(6,56,7,56);	 break;
case"175":$this->sensors = array("BTS2_VD0_1200072","ХВС","BTS2_VD1_1200072","ГВС","0","ХВС2","0","ГВС2","MRC2_14981547");	$this->chanals= array(0,57,1,57);	 break;
case"176":$this->sensors = array("BTS2_VD2_1200072","ХВС","BTS2_VD3_1200072","ГВС","0","ХВС2","0","ГВС2","MRC2_14981539");	$this->chanals= array(2,57,3,57);	 break;
case"177":$this->sensors = array("BTS2_VD4_1200072","ХВС","BTS2_VD5_1200072","ГВС","0","ХВС2","0","ГВС2","MRC2_14981287");	$this->chanals= array(4,57,5,57);	 break;
case"178":$this->sensors = array("BTS2_VD6_1200072","ХВС","BTS2_VD7_1200072","ГВС","0","ХВС2","0","ГВС2","MRC2_14981511");	$this->chanals= array(6,57,7,57);	 break;
case"179":$this->sensors = array("BTS2_VD0_1100038","ХВС","BTS2_VD1_1100038","ГВС","0","ХВС2","0","ГВС2","MRC2_14981512");	$this->chanals= array(0,58,1,58);	 break;
case"180":$this->sensors = array("BTS2_VD2_1100038","ХВС","BTS2_VD3_1100038","ГВС","0","ХВС2","0","ГВС2","MRC2_14981542");	$this->chanals= array(2,58,3,58);	 break;
case"181":$this->sensors = array("BTS2_VD4_1100038","ХВС","BTS2_VD5_1100038","ГВС","0","ХВС2","0","ГВС2","MRC2_14981293");	$this->chanals= array(4,58,5,58);	 break;
case"182":$this->sensors = array("BTS2_VD6_1100038","ХВС","BTS2_VD7_1100038","ГВС","0","ХВС2","0","ГВС2","MRC2_14981485");	$this->chanals= array(6,58,7,58);	 break;
case"183":$this->sensors = array("BTS2_VD0_1200001","ХВС","BTS2_VD1_1200001","ГВС","0","ХВС2","0","ГВС2","MRC2_14981675");	$this->chanals= array(0,59,1,59);	 break;
case"184":$this->sensors = array("BTS2_VD2_1200001","ХВС","BTS2_VD3_1200001","ГВС","0","ХВС2","0","ГВС2","MRC2_14981471");	$this->chanals= array(2,59,3,59);	 break;
case"185":$this->sensors = array("BTS2_VD0_1100030","ХВС","BTS2_VD1_1100030","ГВС","0","ХВС2","0","ГВС2","MRC2_14981475");	$this->chanals= array(0,60,1,60);	 break;
case"186":$this->sensors = array("BTS2_VD2_1100030","ХВС","BTS2_VD3_1100030","ГВС","0","ХВС2","0","ГВС2","MRC2_14981695");	$this->chanals= array(2,60,3,60);	 break;
case"187":$this->sensors = array("BTS2_VD4_1100030","ХВС","BTS2_VD5_1100030","ГВС","0","ХВС2","0","ГВС2","MRC2_14981370");	$this->chanals= array(4,60,5,60);	 break;
case"188":$this->sensors = array("BTS2_VD6_1100030","ХВС","BTS2_VD7_1100030","ГВС","0","ХВС2","0","ГВС2","MRC2_14981495");	$this->chanals= array(6,60,7,60);	 break;
case"189":$this->sensors = array("BTS2_VD0_1100039","ХВС","BTS2_VD1_1100039","ГВС","0","ХВС2","0","ГВС2","MRC2_14981371");	$this->chanals= array(0,61,1,61);	 break;
case"190":$this->sensors = array("BTS2_VD2_1100039","ХВС","BTS2_VD3_1100039","ГВС","0","ХВС2","0","ГВС2","MRC2_14981398");	$this->chanals= array(2,61,3,61);	 break;
case"191":$this->sensors = array("BTS2_VD4_1100039","ХВС","BTS2_VD5_1100039","ГВС","0","ХВС2","0","ГВС2","MRC2_14981493");	$this->chanals= array(4,61,5,61);	 break;
case"192":$this->sensors = array("BTS2_VD6_1100039","ХВС","BTS2_VD7_1100039","ГВС","0","ХВС2","0","ГВС2","MRC2_14981491");	$this->chanals= array(6,61,7,61);	 break;
case"193":$this->sensors = array("BTS2_VD0_1100046","ХВС","BTS2_VD1_1100046","ГВС","0","ХВС2","0","ГВС2","MRC2_14981693");	$this->chanals= array(0,62,1,62);	 break;
case"194":$this->sensors = array("BTS2_VD2_1100046","ХВС","BTS2_VD3_1100046","ГВС","0","ХВС2","0","ГВС2","MRC2_14981554");	$this->chanals= array(2,62,3,62);	 break;
case"195":$this->sensors = array("BTS2_VD4_1100046","ХВС","BTS2_VD5_1100046","ГВС","0","ХВС2","0","ГВС2","MRC2_14981488");	$this->chanals= array(4,62,5,62);	 break;
case"196":$this->sensors = array("BTS2_VD6_1100046","ХВС","BTS2_VD7_1100046","ГВС","0","ХВС2","0","ГВС2","MRC2_14981544");	$this->chanals= array(6,62,7,62);	 break;
case"197":$this->sensors = array("BTS2_VD0_1200088","ХВС","BTS2_VD1_1200088","ГВС","0","ХВС2","0","ГВС2","MRC2_14981373");	$this->chanals= array(0,63,1,63);	 break;
case"198":$this->sensors = array("BTS2_VD2_1200088","ХВС","BTS2_VD3_1200088","ГВС","0","ХВС2","0","ГВС2","MRC2_14981457");	$this->chanals= array(2,63,3,63);	 break;
case"199":$this->sensors = array("BTS2_VD4_1200088","ХВС","BTS2_VD5_1200088","ГВС","0","ХВС2","0","ГВС2","MRC2_14981399");	$this->chanals= array(4,63,5,63);	 break;
case"200":$this->sensors = array("BTS2_VD6_1200088","ХВС","BTS2_VD7_1200088","ГВС","0","ХВС2","0","ГВС2","MRC2_14981670");	$this->chanals= array(6,63,7,63);	 break;
case"201":$this->sensors = array("BTS2_VD0_1200127","ХВС","BTS2_VD1_1200127","ГВС","0","ХВС2","0","ГВС2","MRC2_14981930");	$this->chanals= array(0,64,1,64);	 break;
case"202":$this->sensors = array("BTS2_VD2_1200127","ХВС","BTS2_VD3_1200127","ГВС","0","ХВС2","0","ГВС2","MRC2_10178461");	$this->chanals= array(2,64,3,64);	 break;
		
case"Все": break;		
default: require 'alert_flat.js'; die;		
}		
?>		
