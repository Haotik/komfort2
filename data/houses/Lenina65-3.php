<?php		
//$this->flat = $_POST['flat']		
$this->ipAddres = "192.168.1.207";

if ($this->flat>0 && $this->flat<19){$this->rsNum = "51";}
elseif (($this->flat>18 && $this->flat<37)) {$this->rsNum = "230";}
elseif (($this->flat>36 && $this->flat<61)) {$this->rsNum = "53";}
elseif (($this->flat>60 && $this->flat<79)) {$this->rsNum = "57";}
elseif (($this->flat>78 && $this->flat<97)) {$this->rsNum = "55";}
elseif (($this->flat>96 && $this->flat<121)) {$this->rsNum = "56";}
		
switch ($this->flat) {		
case"1":$this->sensors = array("BTS2_VD0_1000080","ХВС","BTS2_VD1_1000080","ГВС","0","ХВС2","0","ГВС2","MRC2_5936641");	$this->chanals= array(0,1,1,1);	 break;
case"2":$this->sensors = array("BTS2_VD3_1000080","ХВС","BTS2_VD4_1000080","ГВС","0","ХВС2","0","ГВС2","MRC2_5936685");	$this->chanals= array(3,1,4,1);	 break;
case"3":$this->sensors = array("BTS2_VD6_1000080","ХВС","BTS2_VD7_1000080","ГВС","0","ХВС2","0","ГВС2","MRC2_5936662");	$this->chanals= array(6,1,7,1);	 break;
case"4":$this->sensors = array("BTS2_VD1_1000011","ХВС","BTS2_VD2_1000011","ГВС","0","ХВС2","0","ГВС2","MRC2_5936639");	$this->chanals= array(1,2,2,2);	 break;
case"5":$this->sensors = array("BTS2_VD4_1000011","ХВС","BTS2_VD5_1000011","ГВС","0","ХВС2","0","ГВС2","MRC2_5936638");	$this->chanals= array(4,2,5,2);	 break;
case"6":$this->sensors = array("BTS2_VD7_1000011","ХВС","BTS2_VD0_1000070","ГВС","0","ХВС2","0","ГВС2","MRC2_5936721");	$this->chanals= array(7,2,0,3);	 break;
case"7":$this->sensors = array("BTS2_VD2_1000070","ХВС","BTS2_VD3_1000070","ГВС","0","ХВС2","0","ГВС2","MRC2_5936776");	$this->chanals= array(2,3,3,3);	 break;
case"8":$this->sensors = array("BTS2_VD5_1000070","ХВС","BTS2_VD6_1000070","ГВС","0","ХВС2","0","ГВС2","MRC2_5936709");	$this->chanals= array(5,3,6,3);	 break;
case"9":$this->sensors = array("BTS2_VD0_1000068","ХВС","BTS2_VD1_1000068","ГВС","0","ХВС2","0","ГВС2","MRC2_5936781");	$this->chanals= array(0,4,1,4);	 break;
case"10":$this->sensors = array("BTS2_VD3_1000068","ХВС","BTS2_VD4_1000068","ГВС","0","ХВС2","0","ГВС2","MRC2_5936672");	$this->chanals= array(3,4,4,4);	 break;
case"11":$this->sensors = array("BTS2_VD6_1000068","ХВС","BTS2_VD7_1000068","ГВС","0","ХВС2","0","ГВС2","MRC2_5936737");	$this->chanals= array(6,4,7,4);	 break;
case"12":$this->sensors = array("BTS2_VD1_1000085","ХВС","BTS2_VD2_1000085","ГВС","0","ХВС2","0","ГВС2","MRC2_5936687");	$this->chanals= array(1,5,2,5);	 break;
case"13":$this->sensors = array("BTS2_VD4_1000085","ХВС","BTS2_VD5_1000085","ГВС","0","ХВС2","0","ГВС2","MRC2_5936705");	$this->chanals= array(4,5,5,5);	 break;
case"14":$this->sensors = array("BTS2_VD7_1000085","ХВС","BTS2_VD0_1000073","ГВС","0","ХВС2","0","ГВС2","MRC2_5936778");	$this->chanals= array(7,5,0,6);	 break;
case"15":$this->sensors = array("BTS2_VD2_1000073","ХВС","BTS2_VD3_1000073","ГВС","0","ХВС2","0","ГВС2","MRC2_5936659");	$this->chanals= array(2,6,3,6);	 break;
case"16":$this->sensors = array("BTS2_VD5_1000073","ХВС","BTS2_VD6_1000073","ГВС","0","ХВС2","0","ГВС2","MRC2_5936732");	$this->chanals= array(5,6,6,6);	 break;
case"17":$this->sensors = array("BTS2_VD0_1000058","ХВС","BTS2_VD1_1000058","ГВС","0","ХВС2","0","ГВС2","MRC2_5936767");	$this->chanals= array(0,7,1,7);	 break;
case"18":$this->sensors = array("BTS2_VD3_1000058","ХВС","BTS2_VD4_1000058","ГВС","0","ХВС2","0","ГВС2","MRC2_5936665");	$this->chanals= array(3,7,4,7);	 break;
case"19":$this->sensors = array("BTS2_VD0_1000185","ХВС","BTS2_VD1_1000185","ГВС","0","ХВС2","0","ГВС2","MRC2_10178527");	$this->chanals= array(0,8,1,8);	 break;
case"20":$this->sensors = array("BTS2_VD3_1000185","ХВС","BTS2_VD4_1000185","ГВС","0","ХВС2","0","ГВС2","MRC2_5936647");	$this->chanals= array(3,8,4,8);	 break;
case"21":$this->sensors = array("BTS2_VD6_1000185","ХВС","BTS2_VD7_1000185","ГВС","0","ХВС2","0","ГВС2","MRC2_8272765");	$this->chanals= array(6,8,7,8);	 break;
case"22":$this->sensors = array("BTS2_VD1_1000060","ХВС","BTS2_VD2_1000060","ГВС","0","ХВС2","0","ГВС2","MRC2_5936688");	$this->chanals= array(1,9,2,9);	 break;
case"23":$this->sensors = array("BTS2_VD4_1000060","ХВС","BTS2_VD5_1000060","ГВС","0","ХВС2","0","ГВС2","MRC2_10180102");	$this->chanals= array(4,9,5,9);	 break;
case"24":$this->sensors = array("BTS2_VD7_1000060","ХВС","BTS2_VD0_1000002","ГВС","0","ХВС2","0","ГВС2","MRC2_5936653");	$this->chanals= array(7,9,0,10);	 break;
case"25":$this->sensors = array("BTS2_VD2_1000002","ХВС","BTS2_VD3_1000002","ГВС","0","ХВС2","0","ГВС2","MRC2_8277644");	$this->chanals= array(2,10,3,10);	 break;
case"26":$this->sensors = array("BTS2_VD5_1000002","ХВС","BTS2_VD6_1000002","ГВС","0","ХВС2","0","ГВС2","MRC2_5936656");	$this->chanals= array(5,10,6,10);	 break;
case"27":$this->sensors = array("BTS2_VD0_1000059","ХВС","BTS2_VD1_1000059","ГВС","0","ХВС2","0","ГВС2","MRC2_5936697");	$this->chanals= array(0,11,1,11);	 break;
case"28":$this->sensors = array("BTS2_VD3_1000059","ХВС","BTS2_VD4_1000059","ГВС","0","ХВС2","0","ГВС2","MRC2_10178439");	$this->chanals= array(3,11,4,11);	 break;
case"29":$this->sensors = array("BTS2_VD6_1000059","ХВС","BTS2_VD7_1000059","ГВС","0","ХВС2","0","ГВС2","MRC2_5936690");	$this->chanals= array(6,11,7,11);	 break;
case"30":$this->sensors = array("BTS2_VD1_1000056","ХВС","BTS2_VD2_1000056","ГВС","0","ХВС2","0","ГВС2","MRC2_10178477");	$this->chanals= array(1,12,2,12);	 break;
case"31":$this->sensors = array("BTS2_VD4_1000056","ХВС","BTS2_VD5_1000056","ГВС","0","ХВС2","0","ГВС2","MRC2_5936686");	$this->chanals= array(4,12,5,12);	 break;
case"32":$this->sensors = array("BTS2_VD7_1000056","ХВС","BTS2_VD0_1000072","ГВС","0","ХВС2","0","ГВС2","MRC2_8277592");	$this->chanals= array(7,12,0,13);	 break;
case"33":$this->sensors = array("BTS2_VD2_1000072","ХВС","BTS2_VD3_1000072","ГВС","0","ХВС2","0","ГВС2","MRC2_10178436");	$this->chanals= array(2,13,3,13);	 break;
case"34":$this->sensors = array("BTS2_VD5_1000072","ХВС","BTS2_VD6_1000072","ГВС","0","ХВС2","0","ГВС2","MRC2_8277634");	$this->chanals= array(5,13,6,13);	 break;
case"35":$this->sensors = array("BTS2_VD0_1000027","ХВС","BTS2_VD1_1000027","ГВС","0","ХВС2","0","ГВС2","MRC2_5936636");	$this->chanals= array(0,14,1,14);	 break;
case"36":$this->sensors = array("BTS2_VD3_1000027","ХВС","BTS2_VD4_1000027","ГВС","0","ХВС2","0","ГВС2","MRC2_8277575");	$this->chanals= array(3,14,4,14);	 break;
case"37":$this->sensors = array("BTS2_VD0_1000039","ХВС","BTS2_VD1_1000039","ГВС","0","ХВС2","0","ГВС2","MRC2_5936700");	$this->chanals= array(0,15,1,15);	 break;
case"38":$this->sensors = array("BTS2_VD3_1000039","ХВС","BTS2_VD4_1000039","ГВС","0","ХВС2","0","ГВС2","MRC2_8277400");	$this->chanals= array(3,15,4,15);	 break;
case"39":$this->sensors = array("BTS2_VD6_1000039","ХВС","BTS2_VD7_1000039","ГВС","0","ХВС2","0","ГВС2","MRC2_5936726");	$this->chanals= array(6,15,7,15);	 break;
case"40":$this->sensors = array("BTS2_VD1_1000028","ХВС","BTS2_VD2_1000028","ГВС","0","ХВС2","0","ГВС2","MRC2_8277460");	$this->chanals= array(1,16,2,16);	 break;
case"41":$this->sensors = array("BTS2_VD4_1000028","ХВС","BTS2_VD5_1000028","ГВС","0","ХВС2","0","ГВС2","MRC2_5936706");	$this->chanals= array(4,16,5,16);	 break;
case"42":$this->sensors = array("BTS2_VD7_1000028","ХВС","BTS2_VD0_1000067","ГВС","0","ХВС2","0","ГВС2","MRC2_8277444");	$this->chanals= array(7,16,0,17);	 break;
case"43":$this->sensors = array("BTS2_VD2_1000067","ХВС","BTS2_VD3_1000067","ГВС","0","ХВС2","0","ГВС2","MRC2_5936679");	$this->chanals= array(2,17,3,17);	 break;
case"44":$this->sensors = array("BTS2_VD5_1000067","ХВС","BTS2_VD6_1000067","ГВС","0","ХВС2","0","ГВС2","MRC2_5936733");	$this->chanals= array(5,17,6,17);	 break;
case"45":$this->sensors = array("BTS2_VD0_1000038","ХВС","BTS2_VD1_1000038","ГВС","0","ХВС2","0","ГВС2","MRC2_9760108");	$this->chanals= array(0,18,1,18);	 break;
case"46":$this->sensors = array("BTS2_VD3_1000038","ХВС","BTS2_VD4_1000038","ГВС","0","ХВС2","0","ГВС2","MRC2_5936652");	$this->chanals= array(3,18,4,18);	 break;
case"47":$this->sensors = array("BTS2_VD6_1000038","ХВС","BTS2_VD7_1000038","ГВС","0","ХВС2","0","ГВС2","MRC2_5936734");	$this->chanals= array(6,18,7,18);	 break;
case"48":$this->sensors = array("BTS2_VD1_1000030","ХВС","BTS2_VD2_1000030","ГВС","0","ХВС2","0","ГВС2","MRC2_5936677");	$this->chanals= array(1,19,2,19);	 break;
case"49":$this->sensors = array("BTS2_VD4_1000030","ХВС","BTS2_VD5_1000030","ГВС","0","ХВС2","0","ГВС2","MRC2_5936678");	$this->chanals= array(4,19,5,19);	 break;
case"50":$this->sensors = array("BTS2_VD7_1000030","ХВС","BTS2_VD0_1000029","ГВС","0","ХВС2","0","ГВС2","MRC2_5936658");	$this->chanals= array(7,19,0,20);	 break;
case"51":$this->sensors = array("BTS2_VD2_1000029","ХВС","BTS2_VD3_1000029","ГВС","0","ХВС2","0","ГВС2","MRC2_5936704");	$this->chanals= array(2,20,3,20);	 break;
case"52":$this->sensors = array("BTS2_VD5_1000029","ХВС","BTS2_VD6_1000029","ГВС","0","ХВС2","0","ГВС2","MRC2_5936651");	$this->chanals= array(5,20,6,20);	 break;
case"53":$this->sensors = array("BTS2_VD0_1000084","ХВС","BTS2_VD1_1000084","ГВС","0","ХВС2","0","ГВС2","MRC2_5936668");	$this->chanals= array(0,21,1,21);	 break;
case"54":$this->sensors = array("BTS2_VD3_1000084","ХВС","BTS2_VD4_1000084","ГВС","0","ХВС2","0","ГВС2","MRC2_5936643");	$this->chanals= array(3,21,4,21);	 break;
case"55":$this->sensors = array("BTS2_VD6_1000084","ХВС","BTS2_VD7_1000084","ГВС","0","ХВС2","0","ГВС2","MRC2_5936711");	$this->chanals= array(6,21,7,21);	 break;
case"56":$this->sensors = array("BTS2_VD1_1000071","ХВС","BTS2_VD2_1000071","ГВС","0","ХВС2","0","ГВС2","MRC2_5936663");	$this->chanals= array(1,22,2,22);	 break;
case"57":$this->sensors = array("BTS2_VD4_1000071","ХВС","BTS2_VD5_1000071","ГВС","0","ХВС2","0","ГВС2","MRC2_5936693");	$this->chanals= array(4,22,5,22);	 break;
case"58":$this->sensors = array("BTS2_VD7_1000071","ХВС","BTS2_VD0_1000098","ГВС","0","ХВС2","0","ГВС2","MRC2_5936707");	$this->chanals= array(7,22,0,23);	 break;
case"59":$this->sensors = array("BTS2_VD2_1000098","ХВС","BTS2_VD3_1000098","ГВС","0","ХВС2","0","ГВС2","MRC2_5936718");	$this->chanals= array(2,23,3,23);	 break;
case"60":$this->sensors = array("BTS2_VD5_1000098","ХВС","BTS2_VD6_1000098","ГВС","0","ХВС2","0","ГВС2","MRC2_5936748");	$this->chanals= array(5,23,6,23);	 break;
case"61":$this->sensors = array("BTS2_VD0_1000069","ХВС","BTS2_VD1_1000069","ГВС","0","ХВС2","0","ГВС2","MRC2_8277506");	$this->chanals= array(0,24,1,24);	 break;
case"62":$this->sensors = array("BTS2_VD3_1000069","ХВС","BTS2_VD4_1000069","ГВС","0","ХВС2","0","ГВС2","MRC2_8277632");	$this->chanals= array(3,24,4,24);	 break;
case"63":$this->sensors = array("BTS2_VD6_1000069","ХВС","BTS2_VD7_1000069","ГВС","0","ХВС2","0","ГВС2","MRC2_9760316");	$this->chanals= array(6,24,7,24);	 break;
case"64":$this->sensors = array("BTS2_VD1_1000082","ХВС","BTS2_VD2_1000082","ГВС","0","ХВС2","0","ГВС2","MRC2_10178499");	$this->chanals= array(1,25,2,25);	 break;
case"65":$this->sensors = array("BTS2_VD4_1000082","ХВС","BTS2_VD5_1000082","ГВС","0","ХВС2","0","ГВС2","MRC2_8277642");	$this->chanals= array(4,25,5,25);	 break;
case"66":$this->sensors = array("BTS2_VD7_1000082","ХВС","BTS2_VD0_1000018","ГВС","0","ХВС2","0","ГВС2","MRC2_8272782");	$this->chanals= array(7,25,0,26);	 break;
case"67":$this->sensors = array("BTS2_VD2_1000018","ХВС","BTS2_VD3_1000018","ГВС","0","ХВС2","0","ГВС2","MRC2_8277510");	$this->chanals= array(2,26,3,26);	 break;
case"68":$this->sensors = array("BTS2_VD5_1000018","ХВС","BTS2_VD6_1000018","ГВС","0","ХВС2","0","ГВС2","MRC2_8277582");	$this->chanals= array(5,26,6,26);	 break;
case"69":$this->sensors = array("BTS2_VD0_1000014","ХВС","BTS2_VD1_1000014","ГВС","0","ХВС2","0","ГВС2","MRC2_8277593");	$this->chanals= array(0,27,1,27);	 break;
case"70":$this->sensors = array("BTS2_VD3_1000014","ХВС","BTS2_VD4_1000014","ГВС","0","ХВС2","0","ГВС2","MRC2_9765716");	$this->chanals= array(3,27,4,27);	 break;
case"71":$this->sensors = array("BTS2_VD6_1000014","ХВС","BTS2_VD7_1000014","ГВС","0","ХВС2","0","ГВС2","MRC2_10178518");	$this->chanals= array(6,27,7,27);	 break;
case"72":$this->sensors = array("BTS2_VD1_1000081","ХВС","BTS2_VD2_1000081","ГВС","0","ХВС2","0","ГВС2","MRC2_9761124");	$this->chanals= array(1,28,2,28);	 break;
case"73":$this->sensors = array("BTS2_VD4_1000081","ХВС","BTS2_VD5_1000081","ГВС","0","ХВС2","0","ГВС2","MRC2_5933074");	$this->chanals= array(4,28,5,28);	 break;
case"74":$this->sensors = array("BTS2_VD7_1000081","ХВС","BTS2_VD0_1000042","ГВС","0","ХВС2","0","ГВС2","MRC2_5933120");	$this->chanals= array(7,28,0,29);	 break;
case"75":$this->sensors = array("BTS2_VD2_1000042","ХВС","BTS2_VD3_1000042","ГВС","0","ХВС2","0","ГВС2","MRC2_5933131");	$this->chanals= array(2,29,3,29);	 break;
case"76":$this->sensors = array("BTS2_VD5_1000042","ХВС","BTS2_VD6_1000042","ГВС","0","ХВС2","0","ГВС2","MRC2_5933130");	$this->chanals= array(5,29,6,29);	 break;
case"77":$this->sensors = array("BTS2_VD0_1000076","ХВС","BTS2_VD1_1000076","ГВС","0","ХВС2","0","ГВС2","MRC2_5933142");	$this->chanals= array(0,30,1,30);	 break;
case"78":$this->sensors = array("BTS2_VD3_1000076","ХВС","BTS2_VD4_1000076","ГВС","0","ХВС2","0","ГВС2","MRC2_5933119");	$this->chanals= array(3,30,4,30);	 break;
case"79":$this->sensors = array("BTS2_VD0_1000079","ХВС","BTS2_VD1_1000079","ГВС","0","ХВС2","0","ГВС2","MRC2_5933152");	$this->chanals= array(0,31,1,31);	 break;
case"80":$this->sensors = array("BTS2_VD3_1000079","ХВС","BTS2_VD4_1000079","ГВС","0","ХВС2","0","ГВС2","MRC2_5933133");	$this->chanals= array(3,31,4,31);	 break;
case"81":$this->sensors = array("BTS2_VD6_1000079","ХВС","BTS2_VD7_1000079","ГВС","0","ХВС2","0","ГВС2","MRC2_5933072");	$this->chanals= array(6,31,7,31);	 break;
case"82":$this->sensors = array("BTS2_VD1_1000057","ХВС","BTS2_VD2_1000057","ГВС","0","ХВС2","0","ГВС2","MRC2_5933090");	$this->chanals= array(1,32,2,32);	 break;
case"83":$this->sensors = array("BTS2_VD4_1000057","ХВС","BTS2_VD5_1000057","ГВС","0","ХВС2","0","ГВС2","MRC2_5933096");	$this->chanals= array(4,32,5,32);	 break;
case"84":$this->sensors = array("BTS2_VD7_1000057","ХВС","BTS2_VD0_1000050","ГВС","0","ХВС2","0","ГВС2","MRC2_5933139");	$this->chanals= array(7,32,0,33);	 break;
case"85":$this->sensors = array("BTS2_VD2_1000050","ХВС","BTS2_VD3_1000050","ГВС","0","ХВС2","0","ГВС2","MRC2_10178454");	$this->chanals= array(2,33,3,33);	 break;
case"86":$this->sensors = array("BTS2_VD5_1000050","ХВС","BTS2_VD6_1000050","ГВС","0","ХВС2","0","ГВС2","MRC2_5933144");	$this->chanals= array(5,33,6,33);	 break;
case"87":$this->sensors = array("BTS2_VD0_1000033","ХВС","BTS2_VD1_1000033","ГВС","0","ХВС2","0","ГВС2","MRC2_5933237");	$this->chanals= array(0,34,1,34);	 break;
case"88":$this->sensors = array("BTS2_VD3_1000033","ХВС","BTS2_VD4_1000033","ГВС","0","ХВС2","0","ГВС2","MRC2_5933063");	$this->chanals= array(3,34,4,34);	 break;
case"89":$this->sensors = array("BTS2_VD6_1000033","ХВС","BTS2_VD7_1000033","ГВС","0","ХВС2","0","ГВС2","MRC2_5933093");	$this->chanals= array(6,34,7,34);	 break;
case"90":$this->sensors = array("BTS2_VD1_1000074","ХВС","BTS2_VD2_1000074","ГВС","0","ХВС2","0","ГВС2","MRC2_5933081");	$this->chanals= array(1,35,2,35);	 break;
case"91":$this->sensors = array("BTS2_VD4_1000074","ХВС","BTS2_VD5_1000074","ГВС","0","ХВС2","0","ГВС2","MRC2_5933148");	$this->chanals= array(4,35,5,35);	 break;
case"92":$this->sensors = array("BTS2_VD7_1000074","ХВС","BTS2_VD0_1000052","ГВС","0","ХВС2","0","ГВС2","MRC2_5934754");	$this->chanals= array(7,35,0,36);	 break;
case"93":$this->sensors = array("BTS2_VD2_1000052","ХВС","BTS2_VD3_1000052","ГВС","0","ХВС2","0","ГВС2","MRC2_5934789");	$this->chanals= array(2,36,3,36);	 break;
case"94":$this->sensors = array("BTS2_VD5_1000052","ХВС","BTS2_VD6_1000052","ГВС","0","ХВС2","0","ГВС2","MRC2_5933109");	$this->chanals= array(5,36,6,36);	 break;
case"95":$this->sensors = array("BTS2_VD0_1000035","ХВС","BTS2_VD1_1000035","ГВС","0","ХВС2","0","ГВС2","MRC2_5934813");	$this->chanals= array(0,37,1,37);	 break;
case"96":$this->sensors = array("BTS2_VD3_1000035","ХВС","BTS2_VD4_1000035","ГВС","0","ХВС2","0","ГВС2","MRC2_5933095");	$this->chanals= array(3,37,4,37);	 break;
case"97":$this->sensors = array("BTS2_VD0_1000051","ХВС","BTS2_VD1_1000051","ГВС","0","ХВС2","0","ГВС2","MRC2_5933177");	$this->chanals= array(0,38,1,38);	 break;
case"98":$this->sensors = array("BTS2_VD3_1000051","ХВС","BTS2_VD4_1000051","ГВС","0","ХВС2","0","ГВС2","MRC2_5934734");	$this->chanals= array(3,38,4,38);	 break;
case"99":$this->sensors = array("BTS2_VD6_1000051","ХВС","BTS2_VD7_1000051","ГВС","0","ХВС2","0","ГВС2","MRC2_5933150");	$this->chanals= array(6,38,7,38);	 break;
case"100":$this->sensors = array("BTS2_VD1_1000049","ХВС","BTS2_VD2_1000049","ГВС","0","ХВС2","0","ГВС2","MRC2_5933155");	$this->chanals= array(1,39,2,39);	 break;
case"101":$this->sensors = array("BTS2_VD4_1000049","ХВС","BTS2_VD5_1000049","ГВС","0","ХВС2","0","ГВС2","MRC2_5934744");	$this->chanals= array(4,39,5,39);	 break;
case"102":$this->sensors = array("BTS2_VD7_1000049","ХВС","BTS2_VD0_1000026","ГВС","0","ХВС2","0","ГВС2","MRC2_5934752");	$this->chanals= array(7,39,0,40);	 break;
case"103":$this->sensors = array("BTS2_VD2_1000026","ХВС","BTS2_VD3_1000026","ГВС","0","ХВС2","0","ГВС2","MRC2_5934755");	$this->chanals= array(2,40,3,40);	 break;
case"104":$this->sensors = array("BTS2_VD5_1000026","ХВС","BTS2_VD6_1000026","ГВС","0","ХВС2","0","ГВС2","MRC2_8277447");	$this->chanals= array(5,40,6,40);	 break;
case"105":$this->sensors = array("BTS2_VD0_1000078","ХВС","BTS2_VD1_1000078","ГВС","0","ХВС2","0","ГВС2","MRC2_8277518");	$this->chanals= array(0,41,1,41);	 break;
case"106":$this->sensors = array("BTS2_VD3_1000078","ХВС","BTS2_VD4_1000078","ГВС","0","ХВС2","0","ГВС2","MRC2_5934761");	$this->chanals= array(3,41,4,41);	 break;
case"107":$this->sensors = array("BTS2_VD6_1000078","ХВС","BTS2_VD7_1000078","ГВС","0","ХВС2","0","ГВС2","MRC2_10178507");	$this->chanals= array(6,41,7,41);	 break;
case"108":$this->sensors = array("BTS2_VD1_1000044","ХВС","BTS2_VD2_1000044","ГВС","0","ХВС2","0","ГВС2","MRC2_5934785");	$this->chanals= array(1,42,2,42);	 break;
case"109":$this->sensors = array("BTS2_VD4_1000044","ХВС","BTS2_VD5_1000044","ГВС","0","ХВС2","0","ГВС2","MRC2_5934759");	$this->chanals= array(4,42,5,42);	 break;
case"110":$this->sensors = array("BTS2_VD7_1000044","ХВС","BTS2_VD0_1000034","ГВС","0","ХВС2","0","ГВС2","MRC2_10178435");	$this->chanals= array(7,42,0,43);	 break;
case"111":$this->sensors = array("BTS2_VD2_1000034","ХВС","BTS2_VD3_1000034","ГВС","0","ХВС2","0","ГВС2","MRC2_5934804");	$this->chanals= array(2,43,3,43);	 break;
case"112":$this->sensors = array("BTS2_VD5_1000034","ХВС","BTS2_VD6_1000034","ГВС","0","ХВС2","0","ГВС2","MRC2_5934801");	$this->chanals= array(5,43,6,43);	 break;
case"113":$this->sensors = array("BTS2_VD0_1000041","ХВС","BTS2_VD1_1000041","ГВС","0","ХВС2","0","ГВС2","MRC2_8272797");	$this->chanals= array(0,44,1,44);	 break;
case"114":$this->sensors = array("BTS2_VD3_1000041","ХВС","BTS2_VD4_1000041","ГВС","0","ХВС2","0","ГВС2","MRC2_8277577");	$this->chanals= array(3,44,4,44);	 break;
case"115":$this->sensors = array("BTS2_VD6_1000041","ХВС","BTS2_VD7_1000041","ГВС","0","ХВС2","0","ГВС2","MRC2_8277594");	$this->chanals= array(6,44,7,44);	 break;
case"116":$this->sensors = array("BTS2_VD1_1000045","ХВС","BTS2_VD2_1000045","ГВС","0","ХВС2","0","ГВС2","MRC2_8277560");	$this->chanals= array(1,45,2,45);	 break;
case"117":$this->sensors = array("BTS2_VD4_1000045","ХВС","BTS2_VD5_1000045","ГВС","0","ХВС2","0","ГВС2","MRC2_8277427");	$this->chanals= array(4,45,5,45);	 break;
case"118":$this->sensors = array("BTS2_VD7_1000045","ХВС","BTS2_VD0_1000031","ГВС","0","ХВС2","0","ГВС2","MRC2_10178526");	$this->chanals= array(7,45,0,46);	 break;
case"119":$this->sensors = array("BTS2_VD2_1000031","ХВС","BTS2_VD3_1000031","ГВС","0","ХВС2","0","ГВС2","MRC2_8272787");	$this->chanals= array(2,46,3,46);	 break;
case"120":$this->sensors = array("BTS2_VD5_1000031","ХВС","BTS2_VD6_1000031","ГВС","0","ХВС2","0","ГВС2","MRC2_10178480");	$this->chanals= array(5,46,6,46);	 break;
case"Все": break;		
default: require 'alert_flat.js'; die;		
}		
?>		
