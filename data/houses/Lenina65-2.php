<?php		
//$this->flat = $_POST['flat']		
$this->ipAddres = "192.168.1.226";

if ($this->flat>0 && $this->flat<21){$this->rsNum = "50";}
elseif (($this->flat>20 && $this->flat<41)) {$this->rsNum = "51";}
elseif (($this->flat>40 && $this->flat<56)) {$this->rsNum = "52";}
elseif (($this->flat>55 && $this->flat<74)) {$this->rsNum = "53";}
elseif (($this->flat>73 && $this->flat<92)) {$this->rsNum = "54";}
		
switch ($this->flat) {		
case"1":$this->sensors = array("BTS2_VD0_1000161","ХВС","BTS2_VD1_1000161","ГВС","0","ХВС2","0","ГВС2","MRC2_5941715");	$this->chanals= array(0,1,1,1);	 break;
case"2":$this->sensors = array("BTS2_VD3_1000161","ХВС","BTS2_VD4_1000161","ГВС","0","ХВС2","0","ГВС2","MRC2_5941732");	$this->chanals= array(3,1,4,1);	 break;
case"3":$this->sensors = array("BTS2_VD6_1000161","ХВС","BTS2_VD7_1000161","ГВС","0","ХВС2","0","ГВС2","MRC2_5941792");	$this->chanals= array(6,1,7,1);	 break;
case"4":$this->sensors = array("BTS2_VD1_1000142","ХВС","BTS2_VD2_1000142","ГВС","0","ХВС2","0","ГВС2","MRC2_5941721");	$this->chanals= array(1,2,2,2);	 break;
case"5":$this->sensors = array("BTS2_VD4_1000142","ХВС","BTS2_VD5_1000142","ГВС","0","ХВС2","0","ГВС2","MRC2_5939875");	$this->chanals= array(4,2,5,2);	 break;
case"6":$this->sensors = array("BTS2_VD7_1000142","ХВС","BTS2_VD0_1000233","ГВС","0","ХВС2","0","ГВС2","MRC2_5939872");	$this->chanals= array(7,2,0,3);	 break;
case"7":$this->sensors = array("BTS2_VD2_1000233","ХВС","BTS2_VD3_1000233","ГВС","0","ХВС2","0","ГВС2","MRC2_5939845");	$this->chanals= array(2,3,3,3);	 break;
case"8":$this->sensors = array("BTS2_VD5_1000233","ХВС","BTS2_VD6_1000233","ГВС","0","ХВС2","0","ГВС2","MRC2_5941567");	$this->chanals= array(5,3,6,3);	 break;
case"9":$this->sensors = array("BTS2_VD0_1000119","ХВС","BTS2_VD1_1000119","ГВС","0","ХВС2","0","ГВС2","MRC2_5941775");	$this->chanals= array(0,4,1,4);	 break;
case"10":$this->sensors = array("BTS2_VD3_1000119","ХВС","BTS2_VD4_1000119","ГВС","0","ХВС2","0","ГВС2","MRC2_5941680");	$this->chanals= array(3,4,4,4);	 break;
case"11":$this->sensors = array("BTS2_VD6_1000119","ХВС","BTS2_VD7_1000119","ГВС","0","ХВС2","0","ГВС2","MRC2_5941795");	$this->chanals= array(6,4,7,4);	 break;
case"12":$this->sensors = array("BTS2_VD1_1000199","ХВС","BTS2_VD2_1000199","ГВС","0","ХВС2","0","ГВС2","MRC2_5941689");	$this->chanals= array(1,5,2,5);	 break;
case"13":$this->sensors = array("BTS2_VD4_1000199","ХВС","BTS2_VD5_1000199","ГВС","0","ХВС2","0","ГВС2","MRC2_5941579");	$this->chanals= array(4,5,5,5);	 break;
case"14":$this->sensors = array("BTS2_VD7_1000199","ХВС","BTS2_VD0_1000250","ГВС","0","ХВС2","0","ГВС2","MRC2_5941620");	$this->chanals= array(7,5,0,6);	 break;
case"15":$this->sensors = array("BTS2_VD2_1000250","ХВС","BTS2_VD3_1000250","ГВС","0","ХВС2","0","ГВС2","MRC2_5941580");	$this->chanals= array(2,6,3,6);	 break;
case"16":$this->sensors = array("BTS2_VD5_1000250","ХВС","BTS2_VD6_1000250","ГВС","0","ХВС2","0","ГВС2","MRC2_5943030");	$this->chanals= array(5,6,6,6);	 break;
case"17":$this->sensors = array("BTS2_VD0_1000173","ХВС","BTS2_VD1_1000173","ГВС","0","ХВС2","0","ГВС2","MRC2_5941546");	$this->chanals= array(0,7,1,7);	 break;
case"18":$this->sensors = array("BTS2_VD3_1000173","ХВС","BTS2_VD4_1000173","ГВС","0","ХВС2","0","ГВС2","MRC2_5941604");	$this->chanals= array(3,7,4,7);	 break;
case"19":$this->sensors = array("BTS2_VD6_1000173","ХВС","BTS2_VD7_1000173","ГВС","0","ХВС2","0","ГВС2","MRC2_5941596");	$this->chanals= array(6,7,7,7);	 break;
case"20":$this->sensors = array("BTS2_VD1_1000175","ХВС","BTS2_VD2_1000175","ГВС","0","ХВС2","0","ГВС2","MRC2_5943039");	$this->chanals= array(1,8,2,8);	 break;
case"21":$this->sensors = array("BTS2_VD0_1000228","ХВС","BTS2_VD1_1000228","ГВС","0","ХВС2","0","ГВС2","MRC2_5941597");	$this->chanals= array(0,9,1,9);	 break;
case"22":$this->sensors = array("BTS2_VD3_1000228","ХВС","BTS2_VD4_1000228","ГВС","0","ХВС2","0","ГВС2","MRC2_5941631");	$this->chanals= array(3,9,4,9);	 break;
case"23":$this->sensors = array("BTS2_VD6_1000228","ХВС","BTS2_VD7_1000228","ГВС","0","ХВС2","0","ГВС2","MRC2_5943036");	$this->chanals= array(6,9,7,9);	 break;
case"24":$this->sensors = array("BTS2_VD1_1000151","ХВС","BTS2_VD2_1000151","ГВС","0","ХВС2","0","ГВС2","MRC2_5941652");	$this->chanals= array(1,10,2,10);	 break;
case"25":$this->sensors = array("BTS2_VD4_1000151","ХВС","BTS2_VD5_1000151","ГВС","0","ХВС2","0","ГВС2","MRC2_5943038");	$this->chanals= array(4,10,5,10);	 break;
case"26":$this->sensors = array("BTS2_VD7_1000151","ХВС","BTS2_VD0_1000169","ГВС","0","ХВС2","0","ГВС2","MRC2_5941708");	$this->chanals= array(7,10,0,11);	 break;
case"27":$this->sensors = array("BTS2_VD2_1000169","ХВС","BTS2_VD3_1000169","ГВС","0","ХВС2","0","ГВС2","MRC2_5941616");	$this->chanals= array(2,11,3,11);	 break;
case"28":$this->sensors = array("BTS2_VD5_1000169","ХВС","BTS2_VD6_1000169","ГВС","0","ХВС2","0","ГВС2","MRC2_5941647");	$this->chanals= array(5,11,6,11);	 break;
case"29":$this->sensors = array("BTS2_VD0_1000159","ХВС","BTS2_VD1_1000159","ГВС","0","ХВС2","0","ГВС2","MRC2_5941635");	$this->chanals= array(0,12,1,12);	 break;
case"30":$this->sensors = array("BTS2_VD3_1000159","ХВС","BTS2_VD4_1000159","ГВС","0","ХВС2","0","ГВС2","MRC2_5941747");	$this->chanals= array(3,12,4,12);	 break;
case"31":$this->sensors = array("BTS2_VD6_1000159","ХВС","BTS2_VD7_1000159","ГВС","0","ХВС2","0","ГВС2","MRC2_5941641");	$this->chanals= array(6,12,7,12);	 break;
case"32":$this->sensors = array("BTS2_VD1_1000160","ХВС","BTS2_VD2_1000160","ГВС","0","ХВС2","0","ГВС2","MRC2_5941636");	$this->chanals= array(1,13,2,13);	 break;
case"33":$this->sensors = array("BTS2_VD4_1000160","ХВС","BTS2_VD5_1000160","ГВС","0","ХВС2","0","ГВС2","MRC2_5941650");	$this->chanals= array(4,13,5,13);	 break;
case"34":$this->sensors = array("BTS2_VD7_1000160","ХВС","BTS2_VD0_1000140","ГВС","0","ХВС2","0","ГВС2","MRC2_5941632");	$this->chanals= array(7,13,0,14);	 break;
case"35":$this->sensors = array("BTS2_VD2_1000140","ХВС","BTS2_VD3_1000140","ГВС","0","ХВС2","0","ГВС2","MRC2_5941766");	$this->chanals= array(2,14,3,14);	 break;
case"36":$this->sensors = array("BTS2_VD5_1000140","ХВС","BTS2_VD6_1000140","ГВС","0","ХВС2","0","ГВС2","MRC2_5943042");	$this->chanals= array(5,14,6,14);	 break;
case"37":$this->sensors = array("BTS2_VD0_1000156","ХВС","BTS2_VD1_1000156","ГВС","0","ХВС2","0","ГВС2","MRC2_5943037");	$this->chanals= array(0,15,1,15);	 break;
case"38":$this->sensors = array("BTS2_VD3_1000156","ХВС","BTS2_VD4_1000156","ГВС","0","ХВС2","0","ГВС2","MRC2_5941674");	$this->chanals= array(3,15,4,15);	 break;
case"39":$this->sensors = array("BTS2_VD6_1000156","ХВС","BTS2_VD7_1000156","ГВС","0","ХВС2","0","ГВС2","MRC2_5943027");	$this->chanals= array(6,15,7,15);	 break;
case"40":$this->sensors = array("BTS2_VD1_1000177","ХВС","BTS2_VD2_1000177","ГВС","0","ХВС2","0","ГВС2","MRC2_5941602");	$this->chanals= array(1,16,2,16);	 break;
case"41":$this->sensors = array("BTS2_VD0_1000310","ХВС","BTS2_VD1_1000310","ГВС","0","ХВС2","0","ГВС2","MRC2_5941601");	$this->chanals= array(0,17,1,17);	 break;
case"42":$this->sensors = array("BTS2_VD3_1000310","ХВС","BTS2_VD4_1000310","ГВС","BTS2_VD5_1000310","ХВС2","BTS2_VD6_1000310","ГВС2","MRC2_5941720");	$this->chanals= array(3,17,4,17,5,17,6,17);	 break;
case"43":$this->sensors = array("BTS2_VD0_1000311","ХВС","BTS2_VD1_1000311","ГВС","0","ХВС2","0","ГВС2","MRC2_5941610");	$this->chanals= array(0,18,1,18);	 break;
case"44":$this->sensors = array("BTS2_VD3_1000311","ХВС","BTS2_VD4_1000311","ГВС","0","ХВС2","0","ГВС2","MRC2_5941723");	$this->chanals= array(3,18,4,18);	 break;
case"45":$this->sensors = array("BTS2_VD6_1000311","ХВС","BTS2_VD7_1000311","ГВС","0","ХВС2","0","ГВС2","MRC2_5941784");	$this->chanals= array(6,18,7,18);	 break;
case"46":$this->sensors = array("BTS2_VD1_1000328","ХВС","BTS2_VD2_1000328","ГВС","0","ХВС2","0","ГВС2","MRC2_5941727");	$this->chanals= array(1,19,2,19);	 break;
case"47":$this->sensors = array("BTS2_VD4_1000328","ХВС","BTS2_VD5_1000328","ГВС","BTS2_VD6_1000328","ХВС2","BTS2_VD7_1000328","ГВС2","MRC2_5941769");	$this->chanals= array(4,19,5,19,6,19,7,19);	 break;
case"48":$this->sensors = array("BTS2_VD1_1000293","ХВС","BTS2_VD2_1000293","ГВС","0","ХВС2","0","ГВС2","MRC2_5941700");	$this->chanals= array(1,20,2,20);	 break;
case"49":$this->sensors = array("BTS2_VD4_1000293","ХВС","BTS2_VD5_1000293","ГВС","0","ХВС2","0","ГВС2","MRC2_5941785");	$this->chanals= array(4,20,5,20);	 break;
case"50":$this->sensors = array("BTS2_VD7_1000293","ХВС","BTS2_VD0_1000316","ГВС","0","ХВС2","0","ГВС2","MRC2_5943035");	$this->chanals= array(7,20,0,21);	 break;
case"51":$this->sensors = array("BTS2_VD2_1000316","ХВС","BTS2_VD3_1000316","ГВС","0","ХВС2","0","ГВС2","MRC2_5941690");	$this->chanals= array(2,21,3,21);	 break;
case"52":$this->sensors = array("BTS2_VD5_1000316","ХВС","BTS2_VD6_1000316","ГВС","0","ХВС2","0","ГВС2","MRC2_5943028");	$this->chanals= array(5,21,6,21);	 break;
case"53":$this->sensors = array("BTS2_VD0_1000251","ХВС","BTS2_VD1_1000251","ГВС","BTS2_VD2_1000251","ХВС2","BTS2_VD3_1000251","ГВС2","MRC2_5941667");	$this->chanals= array(0,22,1,22,2,22,3,22);	 break;
case"54":$this->sensors = array("BTS2_VD5_1000251","ХВС","BTS2_VD6_1000251","ГВС","0","ХВС2","0","ГВС2","MRC2_5941805");	$this->chanals= array(5,22,6,22);	 break;
case"55":$this->sensors = array("BTS2_VD0_1000319","ХВС","BTS2_VD1_1000319","ГВС","0","ХВС2","0","ГВС2","MRC2_9760360");	$this->chanals= array(0,23,1,23);	 break;
case"56":$this->sensors = array("BTS2_VD0_1000315","ХВС","BTS2_VD1_1000315","ГВС","0","ХВС2","0","ГВС2","MRC2_5941804");	$this->chanals= array(0,24,1,24);	 break;
case"57":$this->sensors = array("BTS2_VD3_1000315","ХВС","BTS2_VD4_1000315","ГВС","0","ХВС2","0","ГВС2","MRC2_9761120");	$this->chanals= array(3,24,4,24);	 break;
case"58":$this->sensors = array("BTS2_VD6_1000315","ХВС","BTS2_VD7_1000315","ГВС","0","ХВС2","0","ГВС2","MRC2_5941787");	$this->chanals= array(6,24,7,24);	 break;
case"59":$this->sensors = array("BTS2_VD1_1000285","ХВС","BTS2_VD2_1000285","ГВС","BTS2_VD3_1000285","ХВС2","BTS2_VD4_1000285","ГВС2","MRC2_5941759");	$this->chanals= array(1,25,2,25,3,25,4,25);	 break;
case"60":$this->sensors = array("BTS2_VD6_1000285","ХВС","BTS2_VD7_1000285","ГВС","0","ХВС2","0","ГВС2","MRC2_5941595");	$this->chanals= array(6,25,7,25);	 break;
case"61":$this->sensors = array("BTS2_VD1_1000308","ХВС","BTS2_VD2_1000308","ГВС","0","ХВС2","0","ГВС2","MRC2_5941593");	$this->chanals= array(1,26,2,26);	 break;
case"62":$this->sensors = array("BTS2_VD4_1000308","ХВС","BTS2_VD5_1000308","ГВС","0","ХВС2","0","ГВС2","MRC2_5941603");	$this->chanals= array(4,26,5,26);	 break;
case"63":$this->sensors = array("BTS2_VD7_1000308","ХВС","BTS2_VD0_1000320","ГВС","0","ХВС2","0","ГВС2","MRC2_5941671");	$this->chanals= array(7,26,0,27);	 break;
case"64":$this->sensors = array("BTS2_VD2_1000320","ХВС","BTS2_VD3_1000320","ГВС","0","ХВС2","0","ГВС2","MRC2_5941781");	$this->chanals= array(2,27,3,27);	 break;
case"65":$this->sensors = array("BTS2_VD5_1000320","ХВС","BTS2_VD6_1000320","ГВС","BTS2_VD7_1000320","ХВС2","BTS2_VD0_1000309","ГВС2","MRC2_5941772");	$this->chanals= array(5,27,6,27,7,27,0,28);	 break;
case"66":$this->sensors = array("BTS2_VD2_1000309","ХВС","BTS2_VD3_1000309","ГВС","0","ХВС2","0","ГВС2","MRC2_12427698");	$this->chanals= array(2,28,3,28);	 break;
case"67":$this->sensors = array("BTS2_VD5_1000309","ХВС","BTS2_VD6_1000309","ГВС","0","ХВС2","0","ГВС2","MRC2_5941663");	$this->chanals= array(5,28,6,28);	 break;
case"68":$this->sensors = array("BTS2_VD0_1000318","ХВС","BTS2_VD1_1000318","ГВС","0","ХВС2","0","ГВС2","MRC2_5941692");	$this->chanals= array(0,29,1,29);	 break;
case"69":$this->sensors = array("BTS2_VD3_1000318","ХВС","BTS2_VD4_1000318","ГВС","0","ХВС2","0","ГВС2","MRC2_5941736");	$this->chanals= array(3,29,4,29);	 break;
case"70":$this->sensors = array("BTS2_VD6_1000318","ХВС","BTS2_VD7_1000318","ГВС","0","ХВС2","0","ГВС2","MRC2_5941589");	$this->chanals= array(6,29,7,29);	 break;
case"71":$this->sensors = array("BTS2_VD1_1000303","ХВС","BTS2_VD2_1000303","ГВС","BTS2_VD3_1000303","ХВС2","BTS2_VD4_1000303","ГВС2","MRC2_5941628");	$this->chanals= array(1,30,2,30,3,30,4,30);	 break;
case"72":$this->sensors = array("BTS2_VD6_1000303","ХВС","BTS2_VD7_1000303","ГВС","0","ХВС2","0","ГВС2","MRC2_5943029");	$this->chanals= array(6,30,7,30);	 break;
case"73":$this->sensors = array("BTS2_VD1_1000139","ХВС","BTS2_VD2_1000139","ГВС","0","ХВС2","0","ГВС2","MRC2_5941660");	$this->chanals= array(1,31,2,31);	 break;
case"74":$this->sensors = array("BTS2_VD0_1000245","ХВС","BTS2_VD1_1000245","ГВС","0","ХВС2","0","ГВС2","MRC2_5939884");	$this->chanals= array(0,32,1,32);	 break;
case"75":$this->sensors = array("BTS2_VD3_1000245","ХВС","BTS2_VD4_1000245","ГВС","0","ХВС2","0","ГВС2","MRC2_5941783");	$this->chanals= array(3,32,4,32);	 break;
case"76":$this->sensors = array("BTS2_VD6_1000245","ХВС","BTS2_VD7_1000245","ГВС","0","ХВС2","0","ГВС2","MRC2_9761148");	$this->chanals= array(6,32,7,32);	 break;
case"77":$this->sensors = array("BTS2_VD1_1000229","ХВС","BTS2_VD2_1000229","ГВС","BTS2_VD3_1000229","ХВС2","BTS2_VD4_1000229","ГВС2","MRC2_5939793");	$this->chanals= array(1,33,2,33,3,33,4,33);	 break;
case"78":$this->sensors = array("BTS2_VD6_1000229","ХВС","BTS2_VD7_1000229","ГВС","0","ХВС2","0","ГВС2","MRC2_5941774");	$this->chanals= array(6,33,7,33);	 break;
case"79":$this->sensors = array("BTS2_VD1_1000225","ХВС","BTS2_VD2_1000225","ГВС","0","ХВС2","0","ГВС2","MRC2_5941701");	$this->chanals= array(1,34,2,34);	 break;
case"80":$this->sensors = array("BTS2_VD4_1000225","ХВС","BTS2_VD5_1000225","ГВС","0","ХВС2","0","ГВС2","MRC2_5941633");	$this->chanals= array(4,34,5,34);	 break;
case"81":$this->sensors = array("BTS2_VD7_1000225","ХВС","BTS2_VD0_1000217","ГВС","0","ХВС2","0","ГВС2","MRC2_5941657");	$this->chanals= array(7,34,0,35);	 break;
case"82":$this->sensors = array("BTS2_VD2_1000217","ХВС","BTS2_VD3_1000217","ГВС","0","ХВС2","0","ГВС2","MRC2_5941578");	$this->chanals= array(2,35,3,35);	 break;
case"83":$this->sensors = array("BTS2_VD5_1000217","ХВС","BTS2_VD6_1000217","ГВС","BTS2_VD7_1000217","ХВС2","BTS2_VD0_1000196","ГВС2","MRC2_5941626");	$this->chanals= array(5,35,6,35,7,35,0,36);	 break;
case"84":$this->sensors = array("BTS2_VD2_1000196","ХВС","BTS2_VD3_1000196","ГВС","0","ХВС2","0","ГВС2","MRC2_5941586");	$this->chanals= array(2,36,3,36);	 break;
case"85":$this->sensors = array("BTS2_VD5_1000196","ХВС","BTS2_VD6_1000196","ГВС","0","ХВС2","0","ГВС2","MRC2_5941782");	$this->chanals= array(5,36,6,36);	 break;
case"86":$this->sensors = array("BTS2_VD0_1000216","ХВС","BTS2_VD1_1000216","ГВС","0","ХВС2","0","ГВС2","MRC2_5941656");	$this->chanals= array(0,37,1,37);	 break;
case"87":$this->sensors = array("BTS2_VD3_1000216","ХВС","BTS2_VD4_1000216","ГВС","0","ХВС2","0","ГВС2","MRC2_5941699");	$this->chanals= array(3,37,4,37);	 break;
case"88":$this->sensors = array("BTS2_VD6_1000216","ХВС","BTS2_VD7_1000216","ГВС","0","ХВС2","0","ГВС2","MRC2_5941654");	$this->chanals= array(6,37,7,37);	 break;
case"89":$this->sensors = array("BTS2_VD1_1000198","ХВС","BTS2_VD2_1000198","ГВС","BTS2_VD3_1000198","ХВС2","BTS2_VD4_1000198","ГВС2","MRC2_5941585");	$this->chanals= array(1,38,2,38,3,38,4,38);	 break;
case"90":$this->sensors = array("BTS2_VD6_1000198","ХВС","BTS2_VD7_1000198","ГВС","0","ХВС2","0","ГВС2","MRC2_5941624");	$this->chanals= array(6,38,7,38);	 break;
case"91":$this->sensors = array("BTS2_VD1_1000162","ХВС","BTS2_VD2_1000162","ГВС","0","ХВС2","0","ГВС2","MRC2_5941653");	$this->chanals= array(1,39,2,39);	 break;
case"Все": break;		
default: require 'alert_flat.js'; die;	
}		
?>		
