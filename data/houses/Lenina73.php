<?php		
//$this->flat = $_POST['flat']		
$this->ipAddres="192.168.1.28";		

if ($this->flat>0 && $this->flat<19){$this->rsNum = "101";}
elseif (($this->flat>18 && $this->flat<40)) {$this->rsNum = "102";}
elseif (($this->flat>39 && $this->flat<61)) {$this->rsNum = "103";}
elseif (($this->flat>60 && $this->flat<82)) {$this->rsNum = "104";}


switch ($this->flat) {		
case"1":$this->sensors = array("BTS2_VD0_1400078","ХВС","BTS2_VD1_1400078","ГВС","BTS2_VD2_1400078","ХВС2","BTS2_VD3_1400078","ГВС2","MRC2_20164959");	$this->chanals= array(0,1,1,1,2,1,3,1);	 break;
case"2":$this->sensors = array("BTS2_VD4_1400078","ХВС","BTS2_VD5_1400078","ГВС","BTS2_VD6_1400078","ХВС2","BTS2_VD7_1400078","ГВС2","MRC2_21944873");	$this->chanals= array(4,1,5,1,6,1,7,1);	 break;
case"3":$this->sensors = array("BTS2_VD0_1400061","ХВС","BTS2_VD1_1400061","ГВС","BTS2_VD2_1400061","ХВС2","BTS2_VD3_1400061","ГВС2","MRC2_21944506");	$this->chanals= array(0,2,1,2,2,2,3,2);	 break;
case"4":$this->sensors = array("BTS2_VD4_1400061","ХВС","BTS2_VD5_1400061","ГВС","0","ХВС2","0","ГВС2","MRC2_21944562");	$this->chanals= array(4,2,5,2);	 break;
case"5":$this->sensors = array("BTS2_VD0_1400074","ХВС","BTS2_VD1_1400074","ГВС","BTS2_VD2_1400074","ХВС2","BTS2_VD3_1400074","ГВС2","MRC2_21944516");	$this->chanals= array(0,3,1,3,2,3,3,3);	 break;
case"6":$this->sensors = array("BTS2_VD4_1400074","ХВС","BTS2_VD5_1400074","ГВС","BTS2_VD6_1400074","ХВС2","BTS2_VD7_1400074","ГВС2","MRC2_21944514");	$this->chanals= array(4,3,5,3,6,3,7,3);	 break;
case"7":$this->sensors = array("BTS2_VD0_1400056","ХВС","BTS2_VD1_1400056","ГВС","0","ХВС2","0","ГВС2","MRC2_21944570");	$this->chanals= array(0,4,1,4);	 break;
case"8":$this->sensors = array("BTS2_VD2_1400056","ХВС","BTS2_VD3_1400056","ГВС","BTS2_VD4_1400056","ХВС2","BTS2_VD5_1400056","ГВС2","MRC2_21944791");	$this->chanals= array(2,4,3,4,4,4,5,4);	 break;
case"9":$this->sensors = array("BTS2_VD6_1400056","ХВС","BTS2_VD7_1400056","ГВС","BTS2_VD0_1400051","ХВС2","BTS2_VD1_1400051","ГВС2","MRC2_21944797");	$this->chanals= array(6,4,7,4,0,5,1,5);	 break;
case"10":$this->sensors = array("BTS2_VD2_1400051","ХВС","BTS2_VD3_1400051","ГВС","BTS2_VD4_1400051","ХВС2","BTS2_VD5_1400051","ГВС2","MRC2_21944066");	$this->chanals= array(2,5,3,5,4,5,5,5);	 break;
case"11":$this->sensors = array("BTS2_VD6_1400051","ХВС","BTS2_VD7_1400051","ГВС","0","ХВС2","0","ГВС2","MRC2_21944025");	$this->chanals= array(6,5,7,5);	 break;
case"12":$this->sensors = array("BTS2_VD0_1400077","ХВС","BTS2_VD1_1400077","ГВС","BTS2_VD2_1400077","ХВС2","BTS2_VD3_1400077","ГВС2","MRC2_21943970");	$this->chanals= array(0,6,1,6,2,6,3,6);	 break;
case"13":$this->sensors = array("BTS2_VD4_1400077","ХВС","BTS2_VD5_1400077","ГВС","BTS2_VD6_1400077","ХВС2","BTS2_VD7_1400077","ГВС2","MRC2_21943991");	$this->chanals= array(4,6,5,6,6,6,7,6);	 break;
case"14":$this->sensors = array("BTS2_VD0_1400075","ХВС","BTS2_VD1_1400075","ГВС","0","ХВС2","0","ГВС2","MRC2_21944028");	$this->chanals= array(0,7,1,7);	 break;
case"15":$this->sensors = array("BTS2_VD2_1400075","ХВС","BTS2_VD3_1400075","ГВС","BTS2_VD4_1400075","ХВС2","BTS2_VD5_1400075","ГВС2","MRC2_21943966");	$this->chanals= array(2,7,3,7,4,7,5,7);	 break;
case"16":$this->sensors = array("BTS2_VD6_1400075","ХВС","BTS2_VD7_1400075","ГВС","BTS2_VD0_1400067","ХВС2","BTS2_VD1_1400067","ГВС2","MRC2_21944032");	$this->chanals= array(6,7,7,7,0,8,1,8);	 break;
case"17":$this->sensors = array("BTS2_VD2_1400067","ХВС","BTS2_VD3_1400067","ГВС","BTS2_VD4_1400067","ХВС2","BTS2_VD5_1400067","ГВС2","MRC2_21943990");	$this->chanals= array(2,8,3,8,4,8,5,8);	 break;
case"18":$this->sensors = array("BTS2_VD6_1400067","ХВС","BTS2_VD7_1400067","ГВС","0","ХВС2","0","ГВС2","MRC2_21943911");	$this->chanals= array(6,8,7,8);	 break;
case"19":$this->sensors = array("BTS2_VD0_1400055","ХВС","BTS2_VD1_1400055","ГВС","BTS2_VD2_1400055","ХВС2","BTS2_VD3_1400055","ГВС2","MRC2_21943901");	$this->chanals= array(0,9,1,9,2,9,3,9);	 break;
case"20":$this->sensors = array("BTS2_VD4_1400055","ХВС","BTS2_VD5_1400055","ГВС","BTS2_VD6_1400055","ХВС2","BTS2_VD7_1400055","ГВС2","MRC2_21944029");	$this->chanals= array(4,9,5,9,6,9,7,9);	 break;
case"21":$this->sensors = array("BTS2_VD0_1400085","ХВС","BTS2_VD1_1400085","ГВС","0","ХВС2","0","ГВС2","MRC2_21944031");	$this->chanals= array(0,10,1,10);	 break;
case"22":$this->sensors = array("BTS2_VD2_1400085","ХВС","BTS2_VD3_1400085","ГВС","BTS2_VD4_1400085","ХВС2","BTS2_VD5_1400085","ГВС2","MRC2_21944569");	$this->chanals= array(2,10,3,10,4,10,5,10);	 break;
case"23":$this->sensors = array("BTS2_VD6_1400085","ХВС","BTS2_VD7_1400085","ГВС","BTS2_VD0_1400069","ХВС2","BTS2_VD1_1400069","ГВС2","MRC2_21944890");	$this->chanals= array(6,10,7,10,0,11,1,11);	 break;
case"24":$this->sensors = array("BTS2_VD2_1400069","ХВС","BTS2_VD3_1400069","ГВС","BTS2_VD4_1400069","ХВС2","BTS2_VD5_1400069","ГВС2","MRC2_21944889");	$this->chanals= array(2,11,3,11,4,11,5,11);	 break;
case"25":$this->sensors = array("BTS2_VD6_1400069","ХВС","BTS2_VD7_1400069","ГВС","0","ХВС2","0","ГВС2","MRC2_21944891");	$this->chanals= array(6,11,7,11);	 break;
case"26":$this->sensors = array("BTS2_VD0_1400071","ХВС","BTS2_VD1_1400071","ГВС","BTS2_VD2_1400071","ХВС2","BTS2_VD3_1400071","ГВС2","MRC2_21944868");	$this->chanals= array(0,12,1,12,2,12,3,12);	 break;
case"27":$this->sensors = array("BTS2_VD4_1400071","ХВС","BTS2_VD5_1400071","ГВС","BTS2_VD6_1400071","ХВС2","BTS2_VD7_1400071","ГВС2","MRC2_21944505");	$this->chanals= array(4,12,5,12,6,12,7,12);	 break;
case"28":$this->sensors = array("BTS2_VD0_1400054","ХВС","BTS2_VD1_1400054","ГВС","0","ХВС2","0","ГВС2","MRC2_21944567");	$this->chanals= array(0,13,1,13);	 break;
case"29":$this->sensors = array("BTS2_VD2_1400054","ХВС","BTS2_VD3_1400054","ГВС","BTS2_VD4_1400054","ХВС2","BTS2_VD5_1400054","ГВС2","MRC2_21944504");	$this->chanals= array(2,13,3,13,4,13,5,13);	 break;
case"30":$this->sensors = array("BTS2_VD6_1400054","ХВС","BTS2_VD7_1400054","ГВС","BTS2_VD0_1400060","ХВС2","BTS2_VD1_1400060","ГВС2","MRC2_21944736");	$this->chanals= array(6,13,7,13,0,14,1,14);	 break;
case"31":$this->sensors = array("BTS2_VD2_1400060","ХВС","BTS2_VD3_1400060","ГВС","BTS2_VD4_1400060","ХВС2","BTS2_VD5_1400060","ГВС2","MRC2_21944515");	$this->chanals= array(2,14,3,14,4,14,5,14);	 break;
case"32":$this->sensors = array("BTS2_VD6_1400060","ХВС","BTS2_VD7_1400060","ГВС","0","ХВС2","0","ГВС2","MRC2_21944547");	$this->chanals= array(6,14,7,14);	 break;
case"33":$this->sensors = array("BTS2_VD0_1400066","ХВС","BTS2_VD1_1400066","ГВС","BTS2_VD2_1400066","ХВС2","BTS2_VD3_1400066","ГВС2","MRC2_21944789");	$this->chanals= array(0,15,1,15,2,15,3,15);	 break;
case"34":$this->sensors = array("BTS2_VD4_1400066","ХВС","BTS2_VD5_1400066","ГВС","BTS2_VD6_1400066","ХВС2","BTS2_VD7_1400066","ГВС2","MRC2_21944518");	$this->chanals= array(4,15,5,15,6,15,7,15);	 break;
case"35":$this->sensors = array("BTS2_VD0_1400100","ХВС","BTS2_VD1_1400100","ГВС","0","ХВС2","0","ГВС2","MRC2_21944704");	$this->chanals= array(0,16,1,16);	 break;
case"36":$this->sensors = array("BTS2_VD2_1400100","ХВС","BTS2_VD3_1400100","ГВС","BTS2_VD4_1400100","ХВС2","BTS2_VD5_1400100","ГВС2","MRC2_27194191");	$this->chanals= array(2,16,3,16,4,16,5,16);	 break;
case"37":$this->sensors = array("BTS2_VD6_1400100","ХВС","BTS2_VD7_1400100","ГВС","BTS2_VD0_1400080","ХВС2","BTS2_VD1_1400080","ГВС2","MRC2_21944519");	$this->chanals= array(6,16,7,16,0,17,1,17);	 break;
case"38":$this->sensors = array("BTS2_VD2_1400080","ХВС","BTS2_VD3_1400080","ГВС","BTS2_VD4_1400080","ХВС2","BTS2_VD5_1400080","ГВС2","MRC2_21944721");	$this->chanals= array(2,17,3,17,4,17,5,17);	 break;
case"39":$this->sensors = array("BTS2_VD6_1400080","ХВС","BTS2_VD7_1400080","ГВС","0","ХВС2","0","ГВС2","MRC2_21944522");	$this->chanals= array(6,17,7,17);	 break;
case"40":$this->sensors = array("BTS2_VD0_1400053","ХВС","BTS2_VD1_1400053","ГВС","BTS2_VD2_1400053","ХВС2","BTS2_VD3_1400053","ГВС2","MRC2_21944520");	$this->chanals= array(0,18,1,18,2,18,3,18);	 break;
case"41":$this->sensors = array("BTS2_VD4_1400053","ХВС","BTS2_VD5_1400053","ГВС","BTS2_VD6_1400053","ХВС2","BTS2_VD7_1400053","ГВС2","MRC2_21944521");	$this->chanals= array(4,18,5,18,6,18,7,18);	 break;
case"42":$this->sensors = array("BTS2_VD0_1400062","ХВС","BTS2_VD1_1400062","ГВС","0","ХВС2","0","ГВС2","MRC2_18391860");	$this->chanals= array(0,19,1,19);	 break;
case"43":$this->sensors = array("BTS2_VD2_1400062","ХВС","BTS2_VD3_1400062","ГВС","BTS2_VD4_1400062","ХВС2","BTS2_VD5_1400062","ГВС2","MRC2_21944578");	$this->chanals= array(2,19,3,19,4,19,5,19);	 break;
case"44":$this->sensors = array("BTS2_VD6_1400062","ХВС","BTS2_VD7_1400062","ГВС","BTS2_VD0_1400090","ХВС2","BTS2_VD1_1400090","ГВС2","MRC2_21944748");	$this->chanals= array(6,19,7,19,0,20,1,20);	 break;
case"45":$this->sensors = array("BTS2_VD2_1400090","ХВС","BTS2_VD3_1400090","ГВС","BTS2_VD4_1400090","ХВС2","BTS2_VD5_1400090","ГВС2","MRC2_21944534");	$this->chanals= array(2,20,3,20,4,20,5,20);	 break;
case"46":$this->sensors = array("BTS2_VD6_1400090","ХВС","BTS2_VD7_1400090","ГВС","0","ХВС2","0","ГВС2","MRC2_21944075");	$this->chanals= array(6,20,7,20);	 break;
case"47":$this->sensors = array("BTS2_VD0_1400064","ХВС","BTS2_VD1_1400064","ГВС","BTS2_VD2_1400064","ХВС2","BTS2_VD3_1400064","ГВС2","MRC2_21944073");	$this->chanals= array(0,21,1,21,2,21,3,21);	 break;
case"48":$this->sensors = array("BTS2_VD4_1400064","ХВС","BTS2_VD5_1400064","ГВС","BTS2_VD6_1400064","ХВС2","BTS2_VD7_1400064","ГВС2","MRC2_21944082");	$this->chanals= array(4,21,5,21,6,21,7,21);	 break;
case"49":$this->sensors = array("BTS2_VD0_1400072","ХВС","BTS2_VD1_1400072","ГВС","0","ХВС2","0","ГВС2","MRC2_21944078");	$this->chanals= array(0,22,1,22);	 break;
case"50":$this->sensors = array("BTS2_VD2_1400072","ХВС","BTS2_VD3_1400072","ГВС","BTS2_VD4_1400072","ХВС2","BTS2_VD5_1400072","ГВС2","MRC2_21944077");	$this->chanals= array(2,22,3,22,4,22,5,22);	 break;
case"51":$this->sensors = array("BTS2_VD6_1400072","ХВС","BTS2_VD7_1400072","ГВС","BTS2_VD0_1400059","ХВС2","BTS2_VD1_1400059","ГВС2","MRC2_21944080");	$this->chanals= array(6,22,7,22,0,23,1,23);	 break;
case"52":$this->sensors = array("BTS2_VD2_1400059","ХВС","BTS2_VD3_1400059","ГВС","BTS2_VD4_1400059","ХВС2","BTS2_VD5_1400059","ГВС2","MRC2_21944069");	$this->chanals= array(2,23,3,23,4,23,5,23);	 break;
case"53":$this->sensors = array("BTS2_VD6_1400059","ХВС","BTS2_VD7_1400059","ГВС","0","ХВС2","0","ГВС2","MRC2_21944081");	$this->chanals= array(6,23,7,23);	 break;
case"54":$this->sensors = array("BTS2_VD0_9900000","ХВС","BTS2_VD1_9900000","ГВС","BTS2_VD2_9900000","ХВС2","BTS2_VD3_9900000","ГВС2","MRC2_21944083");	$this->chanals= array(0,24,1,24,2,24,3,24);	 break;
case"55":$this->sensors = array("BTS2_VD4_9900000","ХВС","BTS2_VD5_9900000","ГВС","BTS2_VD6_9900000","ХВС2","BTS2_VD7_9900000","ГВС2","MRC2_21944076");	$this->chanals= array(4,24,5,24,6,24,7,24);	 break;
case"56":$this->sensors = array("BTS2_VD0_1400129","ХВС","BTS2_VD1_1400129","ГВС","0","ХВС2","0","ГВС2","MRC2_21944085");	$this->chanals= array(0,25,1,25);	 break;
case"57":$this->sensors = array("BTS2_VD2_1400129","ХВС","BTS2_VD3_1400129","ГВС","BTS2_VD4_1400129","ХВС2","BTS2_VD5_1400129","ГВС2","MRC2_21944084");	$this->chanals= array(2,25,3,25,4,25,5,25);	 break;
case"58":$this->sensors = array("BTS2_VD6_1400129","ХВС","BTS2_VD7_1400129","ГВС","BTS2_VD0_1400121","ХВС2","BTS2_VD1_1400121","ГВС2","MRC2_21944691");	$this->chanals= array(6,25,7,25,0,26,1,26);	 break;
case"59":$this->sensors = array("BTS2_VD2_1400121","ХВС","BTS2_VD3_1400121","ГВС","BTS2_VD4_1400121","ХВС2","BTS2_VD5_1400121","ГВС2","MRC2_21944501");	$this->chanals= array(2,26,3,26,4,26,5,26);	 break;
case"60":$this->sensors = array("BTS2_VD6_1400121","ХВС","BTS2_VD7_1400121","ГВС","0","ХВС2","0","ГВС2","MRC2_21944706");	$this->chanals= array(6,26,7,26);	 break;
case"61":$this->sensors = array("BTS2_VD0_1400124","ХВС","BTS2_VD1_1400124","ГВС","BTS2_VD2_1400124","ХВС2","BTS2_VD3_1400124","ГВС2","MRC2_21944503");	$this->chanals= array(0,27,1,27,2,27,3,27);	 break;
case"62":$this->sensors = array("BTS2_VD4_1400124","ХВС","BTS2_VD5_1400124","ГВС","BTS2_VD6_1400124","ХВС2","BTS2_VD7_1400124","ГВС2","MRC2_21944882");	$this->chanals= array(4,27,5,27,6,27,7,27);	 break;
case"63":$this->sensors = array("BTS2_VD0_1400122","ХВС","BTS2_VD1_1400122","ГВС","0","ХВС2","0","ГВС2","MRC2_21944805");	$this->chanals= array(0,28,1,28);	 break;
case"64":$this->sensors = array("BTS2_VD2_1400122","ХВС","BTS2_VD3_1400122","ГВС","BTS2_VD4_1400122","ХВС2","BTS2_VD5_1400122","ГВС2","MRC2_21944885");	$this->chanals= array(2,28,3,28,4,28,5,28);	 break;
case"65":$this->sensors = array("BTS2_VD6_1400122","ХВС","BTS2_VD7_1400122","ГВС","BTS2_VD0_1400123","ХВС2","BTS2_VD1_1400123","ГВС2","MRC2_21944693");	$this->chanals= array(6,28,7,28,0,29,1,29);	 break;
case"66":$this->sensors = array("BTS2_VD2_1400123","ХВС","BTS2_VD3_1400123","ГВС","BTS2_VD4_1400123","ХВС2","BTS2_VD5_1400123","ГВС2","MRC2_21944737");	$this->chanals= array(2,29,3,29,4,29,5,29);	 break;
case"67":$this->sensors = array("BTS2_VD6_1400123","ХВС","BTS2_VD7_1400123","ГВС","0","ХВС2","0","ГВС2","MRC2_21944884");	$this->chanals= array(6,29,7,29);	 break;
case"68":$this->sensors = array("BTS2_VD0_1400131","ХВС","BTS2_VD1_1400131","ГВС","BTS2_VD2_1400131","ХВС2","BTS2_VD3_1400131","ГВС2","MRC2_21944766");	$this->chanals= array(0,30,1,30,2,30,3,30);	 break;
case"69":$this->sensors = array("BTS2_VD4_1400131","ХВС","BTS2_VD5_1400131","ГВС","BTS2_VD6_1400131","ХВС2","BTS2_VD7_1400131","ГВС2","MRC2_21944502");	$this->chanals= array(4,30,5,30,6,30,7,30);	 break;
case"70":$this->sensors = array("BTS2_VD0_1400128","ХВС","BTS2_VD1_1400128","ГВС","0","ХВС2","0","ГВС2","MRC2_21944512");	$this->chanals= array(0,31,1,31);	 break;
case"71":$this->sensors = array("BTS2_VD2_1400128","ХВС","BTS2_VD3_1400128","ГВС","BTS2_VD4_1400128","ХВС2","BTS2_VD5_1400128","ГВС2","MRC2_21944820");	$this->chanals= array(2,31,3,31,4,31,5,31);	 break;
case"72":$this->sensors = array("BTS2_VD6_1400128","ХВС","BTS2_VD7_1400128","ГВС","BTS2_VD0_1400132","ХВС2","BTS2_VD1_1400132","ГВС2","MRC2_21944525");	$this->chanals= array(6,31,7,31,0,32,1,32);	 break;
case"73":$this->sensors = array("BTS2_VD2_1400132","ХВС","BTS2_VD3_1400132","ГВС","BTS2_VD4_1400132","ХВС2","BTS2_VD5_1400132","ГВС2","MRC2_21944705");	$this->chanals= array(2,32,3,32,4,32,5,32);	 break;
case"74":$this->sensors = array("BTS2_VD6_1400132","ХВС","BTS2_VD7_1400132","ГВС","0","ХВС2","0","ГВС2","MRC2_21944509");	$this->chanals= array(6,32,7,32);	 break;
case"75":$this->sensors = array("BTS2_VD0_1400130","ХВС","BTS2_VD1_1400130","ГВС","BTS2_VD2_1400130","ХВС2","BTS2_VD3_1400130","ГВС2","MRC2_21944523");	$this->chanals= array(0,33,1,33,2,33,3,33);	 break;
case"76":$this->sensors = array("BTS2_VD4_1400130","ХВС","BTS2_VD5_1400130","ГВС","BTS2_VD6_1400130","ХВС2","BTS2_VD7_1400130","ГВС2","MRC2_21944524");	$this->chanals= array(4,33,5,33,6,33,7,33);	 break;
case"77":$this->sensors = array("BTS2_VD0_1300157","ХВС","BTS2_VD1_1300157","ГВС","0","ХВС2","0","ГВС2","MRC2_21944543");	$this->chanals= array(0,34,1,34);	 break;
case"78":$this->sensors = array("BTS2_VD2_1300157","ХВС","BTS2_VD3_1300157","ГВС","BTS2_VD4_1300157","ХВС2","BTS2_VD5_1300157","ГВС2","MRC2_18425019");	$this->chanals= array(2,34,3,34,4,34,5,34);	 break;
case"79":$this->sensors = array("BTS2_VD6_1300157","ХВС","BTS2_VD7_1300157","ГВС","BTS2_VD0_9900001","ХВС2","BTS2_VD1_9900001","ГВС2","MRC2_21944577");	$this->chanals= array(6,34,7,34,0,35,1,35);	 break;
case"80":$this->sensors = array("BTS2_VD2_9900001","ХВС","BTS2_VD3_9900001","ГВС","BTS2_VD4_9900001","ХВС2","BTS2_VD5_9900001","ГВС2","MRC2_21944750");	$this->chanals= array(2,35,3,35,4,35,5,35);	 break;
case"81":$this->sensors = array("BTS2_VD6_9900001","ХВС","BTS2_VD7_9900001","ГВС","0","ХВС2","0","ГВС2","MRC2_21944793");	$this->chanals= array(6,35,7,35); 	 break;
		
case"Все": break;		
default: require 'alert_flat.js'; die;	
}		
?>