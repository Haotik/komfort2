<?php	
//$this->flat = $_POST['flat'];	
$this->ipAddres = "192.168.1.228";	

if ($this->flat>0 && $this->flat<24){$this->rsNum = "26";}
elseif (($this->flat>23 && $this->flat<45)) {$this->rsNum = "27";}
elseif (($this->flat>44 && $this->flat<66)) {$this->rsNum = "28";}
elseif (($this->flat>65 && $this->flat<86)) {$this->rsNum = "29";}

	
switch ($this->flat) {case"1":$this->sensors = array("BTS2_VD0_1000032","ХВС","BTS2_VD1_1000032","ГВС","0","ХВС2","0","ГВС2","MRC2_5936713");	$this->chanals= array(0,2,1,2); break; 
case"2":$this->sensors = array("BTS2_VD2_1000032","ХВС","BTS2_VD3_1000032","ГВС","0","ХВС2","0","ГВС2","MRC2_5936681");	$this->chanals= array(2,2,3,2); break; 
case"3":$this->sensors = array("BTS2_VD4_1000032","ХВС","BTS2_VD5_1000032","ГВС","0","ХВС2","0","ГВС2","MRC2_5936715");	$this->chanals= array(4,2,5,2); break; 
case"4":$this->sensors = array("BTS2_VD6_1000032","ХВС","BTS2_VD7_1000032","ГВС","0","ХВС2","0","ГВС2","MRC2_5936689");	$this->chanals= array(6,2,7,2); break; 
case"5":$this->sensors = array("BTS2_VD0_1000043","ХВС","BTS2_VD1_1000043","ГВС","0","ХВС2","0","ГВС2","MRC2_5936642");	$this->chanals= array(0,3,1,3); break; 
case"6":$this->sensors = array("BTS2_VD2_1000043","ХВС","BTS2_VD3_1000043","ГВС","0","ХВС2","0","ГВС2","MRC2_5936719");	$this->chanals= array(2,3,3,3); break; 
case"7":$this->sensors = array("BTS2_VD4_1000043","ХВС","BTS2_VD5_1000043","ГВС","0","ХВС2","0","ГВС2","MRC2_5936698");	$this->chanals= array(4,3,5,3); break; 
case"8":$this->sensors = array("BTS2_VD6_1000043","ХВС","BTS2_VD7_1000043","ГВС","0","ХВС2","0","ГВС2","MRC2_5936720");	$this->chanals= array(6,3,7,3); break; 
case"9":$this->sensors = array("BTS2_VD0_1000083","ХВС","BTS2_VD1_1000083","ГВС","0","ХВС2","0","ГВС2","MRC2_5936729");	$this->chanals= array(0,4,1,4); break; 
case"10":$this->sensors = array("BTS2_VD2_1000083","ХВС","BTS2_VD3_1000083","ГВС","0","ХВС2","0","ГВС2","MRC2_5936731");	$this->chanals= array(2,4,3,4); break; 
case"11":$this->sensors = array("BTS2_VD4_1000083","ХВС","BTS2_VD5_1000083","ГВС","0","ХВС2","0","ГВС2","MRC2_5936691");	$this->chanals= array(4,4,5,4); break; 
case"12":$this->sensors = array("BTS2_VD6_1000083","ХВС","BTS2_VD7_1000083","ГВС","0","ХВС2","0","ГВС2","MRC2_5936723");	$this->chanals= array(6,4,7,4); break; 
case"13":$this->sensors = array("BTS2_VD0_1000037","ХВС","BTS2_VD1_1000037","ГВС","0","ХВС2","0","ГВС2","MRC2_5936682");	$this->chanals= array(0,5,1,5); break; 
case"14":$this->sensors = array("BTS2_VD2_1000037","ХВС","BTS2_VD3_1000037","ГВС","0","ХВС2","0","ГВС2","MRC2_5936683");	$this->chanals= array(2,5,3,5); break; 
case"15":$this->sensors = array("BTS2_VD4_1000037","ХВС","BTS2_VD5_1000037","ГВС","0","ХВС2","0","ГВС2","MRC2_5936694");	$this->chanals= array(4,5,5,5); break; 
case"16":$this->sensors = array("BTS2_VD6_1000037","ХВС","BTS2_VD7_1000037","ГВС","0","ХВС2","0","ГВС2","MRC2_5936783");	$this->chanals= array(6,5,7,5); break; 
case"17":$this->sensors = array("BTS2_VD0_1000075","ХВС","BTS2_VD1_1000075","ГВС","0","ХВС2","0","ГВС2","MRC2_5936725");	$this->chanals= array(0,6,1,6); break; 
case"18":$this->sensors = array("BTS2_VD2_1000075","ХВС","BTS2_VD3_1000075","ГВС","0","ХВС2","0","ГВС2","MRC2_5936712");	$this->chanals= array(2,6,3,6); break; 
case"19":$this->sensors = array("BTS2_VD4_1000075","ХВС","BTS2_VD5_1000075","ГВС","0","ХВС2","0","ГВС2","MRC2_5936728");	$this->chanals= array(4,6,5,6); break; 
case"20":$this->sensors = array("BTS2_VD6_1000075","ХВС","BTS2_VD7_1000075","ГВС","0","ХВС2","0","ГВС2","MRC2_5936716");	$this->chanals= array(6,6,7,6); break; 
case"21":$this->sensors = array("BTS2_VD0_1000036","ХВС","BTS2_VD1_1000036","ГВС","0","ХВС2","0","ГВС2","MRC2_5936742");	$this->chanals= array(0,7,1,7); break; 
case"22":$this->sensors = array("BTS2_VD2_1000036","ХВС","BTS2_VD3_1000036","ГВС","0","ХВС2","0","ГВС2","MRC2_5936634");	$this->chanals= array(2,7,3,7); break; 
case"23":$this->sensors = array("BTS2_VD4_1000036","ХВС","BTS2_VD5_1000036","ГВС","0","ХВС2","0","ГВС2","MRC2_5936635");	$this->chanals= array(4,7,5,7); break; 
case"24":$this->sensors = array("BTS2_VD0_1000055","ХВС","BTS2_VD1_1000055","ГВС","0","ХВС2","0","ГВС2","MRC2_5936730");	$this->chanals= array(0,8,1,8); break; 
case"25":$this->sensors = array("BTS2_VD2_1000055","ХВС","BTS2_VD3_1000055","ГВС","0","ХВС2","0","ГВС2","MRC2_5936741");	$this->chanals= array(2,8,3,8); break; 
case"26":$this->sensors = array("BTS2_VD4_1000055","ХВС","BTS2_VD5_1000055","ГВС","0","ХВС2","0","ГВС2","MRC2_5936701");	$this->chanals= array(4,8,5,8); break; 
case"27":$this->sensors = array("BTS2_VD6_1000055","ХВС","BTS2_VD7_1000055","ГВС","0","ХВС2","0","ГВС2","MRC2_5936744");	$this->chanals= array(6,8,7,8); break; 
case"28":$this->sensors = array("BTS2_VD0_1000054","ХВС","BTS2_VD1_1000054","ГВС","0","ХВС2","0","ГВС2","MRC2_5936738");	$this->chanals= array(0,9,1,9); break; 
case"29":$this->sensors = array("BTS2_VD2_1000054","ХВС","BTS2_VD3_1000054","ГВС","0","ХВС2","0","ГВС2","MRC2_5936666");	$this->chanals= array(2,9,3,9); break; 
case"30":$this->sensors = array("BTS2_VD4_1000054","ХВС","BTS2_VD5_1000054","ГВС","0","ХВС2","0","ГВС2","MRC2_5936669");	$this->chanals= array(4,9,5,9); break; 
case"31":$this->sensors = array("BTS2_VD6_1000054","ХВС","BTS2_VD7_1000054","ГВС","0","ХВС2","0","ГВС2","MRC2_5936780");	$this->chanals= array(6,9,7,9); break; 
case"32":$this->sensors = array("BTS2_VD0_1000048","ХВС","BTS2_VD1_1000048","ГВС","0","ХВС2","0","ГВС2","MRC2_5936637");	$this->chanals= array(0,10,1,10); break; 
case"33":$this->sensors = array("BTS2_VD2_1000048","ХВС","BTS2_VD3_1000048","ГВС","0","ХВС2","0","ГВС2","MRC2_5936673");	$this->chanals= array(2,10,3,10); break; 
case"34":$this->sensors = array("BTS2_VD4_1000048","ХВС","BTS2_VD5_1000048","ГВС","0","ХВС2","0","ГВС2","MRC2_5936736");	$this->chanals= array(4,10,5,10); break; 
case"35":$this->sensors = array("BTS2_VD6_1000048","ХВС","BTS2_VD7_1000048","ГВС","0","ХВС2","0","ГВС2","MRC2_5936785");	$this->chanals= array(6,10,7,10); break; 
case"36":$this->sensors = array("BTS2_VD0_1000077","ХВС","BTS2_VD1_1000077","ГВС","0","ХВС2","0","ГВС2","MRC2_5936735");	$this->chanals= array(0,11,1,11); break; 
case"37":$this->sensors = array("BTS2_VD2_1000077","ХВС","BTS2_VD3_1000077","ГВС","0","ХВС2","0","ГВС2","MRC2_5936722");	$this->chanals= array(2,11,3,11); break; 
case"38":$this->sensors = array("BTS2_VD4_1000077","ХВС","BTS2_VD5_1000077","ГВС","0","ХВС2","0","ГВС2","MRC2_5313506");	$this->chanals= array(4,11,5,11); break; 
case"39":$this->sensors = array("BTS2_VD6_1000077","ХВС","BTS2_VD7_1000077","ГВС","0","ХВС2","0","ГВС2","MRC2_5313640");	$this->chanals= array(6,11,7,11); break; 
case"40":$this->sensors = array("BTS2_VD0_1000047","ХВС","BTS2_VD1_1000047","ГВС","0","ХВС2","0","ГВС2","MRC2_5313636");	$this->chanals= array(0,12,1,12); break; 
case"41":$this->sensors = array("BTS2_VD2_1000047","ХВС","BTS2_VD3_1000047","ГВС","0","ХВС2","0","ГВС2","MRC2_5313622");	$this->chanals= array(2,12,3,12); break; 
case"42":$this->sensors = array("BTS2_VD4_1000047","ХВС","BTS2_VD5_1000047","ГВС","0","ХВС2","0","ГВС2","MRC2_5313614");	$this->chanals= array(4,12,5,12); break; 
case"43":$this->sensors = array("BTS2_VD6_1000047","ХВС","BTS2_VD7_1000047","ГВС","0","ХВС2","0","ГВС2","MRC2_10178535");	$this->chanals= array(6,12,7,12); break; 
case"44":$this->sensors = array("BTS2_VD0_1000046","ХВС","BTS2_VD1_1000046","ГВС","0","ХВС2","0","ГВС2","MRC2_5313639");	$this->chanals= array(0,13,1,13); break; 
case"45":$this->sensors = array("BTS2_VD0_1300001","ХВС","BTS2_VD1_1300001","ГВС","0","ХВС2","0","ГВС2","MRC2_5313629");	$this->chanals= array(0,14,1,14); break; 
case"46":$this->sensors = array("BTS2_VD2_1300001","ХВС","BTS2_VD3_1300001","ГВС","0","ХВС2","0","ГВС2","MRC2_9760366");	$this->chanals= array(2,14,3,14); break; 
case"47":$this->sensors = array("BTS2_VD4_1300001","ХВС","BTS2_VD5_1300001","ГВС","0","ХВС2","0","ГВС2","MRC2_5313561");	$this->chanals= array(4,14,5,14); break; 
case"48":$this->sensors = array("BTS2_VD6_1300001","ХВС","BTS2_VD7_1300001","ГВС","0","ХВС2","0","ГВС2","MRC2_9761093");	$this->chanals= array(6,14,7,14); break; 
case"49":$this->sensors = array("BTS2_VD0_1000137","ХВС","BTS2_VD1_1000137","ГВС","0","ХВС2","0","ГВС2","MRC2_9761110");	$this->chanals= array(0,15,1,15); break; 
case"50":$this->sensors = array("BTS2_VD2_1000137","ХВС","BTS2_VD3_1000137","ГВС","0","ХВС2","0","ГВС2","MRC2_9761130");	$this->chanals= array(2,15,3,15); break; 
case"51":$this->sensors = array("BTS2_VD4_1000137","ХВС","BTS2_VD5_1000137","ГВС","0","ХВС2","0","ГВС2","MRC2_5933140");	$this->chanals= array(4,15,5,15); break; 
case"52":$this->sensors = array("BTS2_VD6_1000137","ХВС","BTS2_VD7_1000137","ГВС","0","ХВС2","0","ГВС2","MRC2_9761172");	$this->chanals= array(6,15,7,15); break; 
case"53":$this->sensors = array("BTS2_VD0_1000118","ХВС","BTS2_VD1_1000118","ГВС","0","ХВС2","0","ГВС2","MRC2_5933099");	$this->chanals= array(0,16,1,16); break; 
case"54":$this->sensors = array("BTS2_VD2_1000118","ХВС","BTS2_VD3_1000118","ГВС","0","ХВС2","0","ГВС2","MRC2_5313500");	$this->chanals= array(2,16,3,16); break; 
case"55":$this->sensors = array("BTS2_VD4_1000118","ХВС","BTS2_VD5_1000118","ГВС","0","ХВС2","0","ГВС2","MRC2_9761136");	$this->chanals= array(4,16,5,16); break; 
case"56":$this->sensors = array("BTS2_VD6_1000118","ХВС","BTS2_VD7_1000118","ГВС","0","ХВС2","0","ГВС2","MRC2_9761135");	$this->chanals= array(6,16,7,16); break; 
case"57":$this->sensors = array("BTS2_VD0_1000116","ХВС","BTS2_VD1_1000116","ГВС","0","ХВС2","0","ГВС2","MRC2_9761141");	$this->chanals= array(0,17,1,17); break; 
case"58":$this->sensors = array("BTS2_VD2_1000116","ХВС","BTS2_VD3_1000116","ГВС","0","ХВС2","0","ГВС2","MRC2_9761174");	$this->chanals= array(2,17,3,17); break; 
case"59":$this->sensors = array("BTS2_VD4_1000116","ХВС","BTS2_VD5_1000116","ГВС","0","ХВС2","0","ГВС2","MRC2_9761165");	$this->chanals= array(4,17,5,17); break; 
case"60":$this->sensors = array("BTS2_VD6_1000116","ХВС","BTS2_VD7_1000116","ГВС","0","ХВС2","0","ГВС2","MRC2_9761128");	$this->chanals= array(6,17,7,17); break; 
case"61":$this->sensors = array("BTS2_VD0_1000107","ХВС","BTS2_VD1_1000107","ГВС","0","ХВС2","0","ГВС2","MRC2_9761179");	$this->chanals= array(0,18,1,18); break; 
case"62":$this->sensors = array("BTS2_VD2_1000107","ХВС","BTS2_VD3_1000107","ГВС","0","ХВС2","0","ГВС2","MRC2_9760367");	$this->chanals= array(2,18,3,18); break; 
case"63":$this->sensors = array("BTS2_VD4_1000107","ХВС","BTS2_VD5_1000107","ГВС","0","ХВС2","0","ГВС2","MRC2_8277424");	$this->chanals= array(4,18,5,18); break; 
case"64":$this->sensors = array("BTS2_VD6_1000107","ХВС","BTS2_VD7_1000107","ГВС","0","ХВС2","0","ГВС2","MRC2_8277637");	$this->chanals= array(6,18,7,18); break; 
case"65":$this->sensors = array("BTS2_VD0_1000110","ХВС","BTS2_VD1_1000110","ГВС","0","ХВС2","0","ГВС2","MRC2_8277643");	$this->chanals= array(0,19,1,19); break; 
case"66":$this->sensors = array("BTS2_VD0_1000115","ХВС","BTS2_VD1_1000115","ГВС","0","ХВС2","0","ГВС2","MRC2_8277641");	$this->chanals= array(0,20,1,20); break; 
case"67":$this->sensors = array("BTS2_VD2_1000115","ХВС","BTS2_VD3_1000115","ГВС","0","ХВС2","0","ГВС2","MRC2_8272798");	$this->chanals= array(2,20,3,20); break; 
case"68":$this->sensors = array("BTS2_VD4_1000115","ХВС","BTS2_VD5_1000115","ГВС","0","ХВС2","0","ГВС2","MRC2_8277397");	$this->chanals= array(4,20,5,20); break; 
case"69":$this->sensors = array("BTS2_VD6_1000115","ХВС","BTS2_VD7_1000115","ГВС","0","ХВС2","0","ГВС2","MRC2_8277597");	$this->chanals= array(6,20,7,20); break; 
case"70":$this->sensors = array("BTS2_VD0_1000117","ХВС","BTS2_VD1_1000117","ГВС","0","ХВС2","0","ГВС2","MRC2_8277639");	$this->chanals= array(0,21,1,21); break; 
case"71":$this->sensors = array("BTS2_VD2_1000117","ХВС","BTS2_VD3_1000117","ГВС","0","ХВС2","0","ГВС2","MRC2_8277409");	$this->chanals= array(2,21,3,21); break; 
case"72":$this->sensors = array("BTS2_VD4_1000117","ХВС","BTS2_VD5_1000117","ГВС","0","ХВС2","0","ГВС2","MRC2_8277414");	$this->chanals= array(4,21,5,21); break; 
case"73":$this->sensors = array("BTS2_VD4_1000102","ХВС","BTS2_VD5_1000102","ГВС","BTS2_VD6_1000117","ХВС2","BTS2_VD7_1000117","ГВС2","MRC2_10178490");	$this->chanals= array(4,23,5,23,6,21,7,21); break; 
case"73А":$this->sensors = array("-","ХВС","-","ГВС","-","ХВС2","-","ГВС2","MRC2_33725060");	$this->chanals= array(0,0,1,0,2,0,14,0); break; 
case"74":$this->sensors = array("BTS2_VD0_1000112","ХВС","BTS2_VD1_1000112","ГВС","0","ХВС2","0","ГВС2","MRC2_5313507");	$this->chanals= array(0,22,1,22); break; 
case"75":$this->sensors = array("BTS2_VD2_1000112","ХВС","BTS2_VD3_1000112","ГВС","0","ХВС2","0","ГВС2","MRC2_8277435");	$this->chanals= array(2,22,3,22); break; 
case"76":$this->sensors = array("BTS2_VD4_1000112","ХВС","BTS2_VD5_1000112","ГВС","0","ХВС2","0","ГВС2","MRC2_2500738");	$this->chanals= array(4,22,5,22); break; 
case"77":$this->sensors = array("BTS2_VD6_1000112","ХВС","BTS2_VD7_1000112","ГВС","0","ХВС2","0","ГВС2","MRC2_5933088");	$this->chanals= array(6,22,7,22); break; 
case"78":$this->sensors = array("BTS2_VD0_1000102","ХВС","BTS2_VD1_1000102","ГВС","0","ХВС2","0","ГВС2","MRC2_5313499");	$this->chanals= array(0,23,1,23); break; 
case"79":$this->sensors = array("BTS2_VD2_1000102","ХВС","BTS2_VD3_1000102","ГВС","0","ХВС2","0","ГВС2","MRC2_5313497");	$this->chanals= array(2,23,3,23); break; 
case"80":$this->sensors = array("BTS2_VD6_1000102","ХВС","BTS2_VD7_1000102","ГВС","0","ХВС2","0","ГВС2","MRC2_5313487");	$this->chanals= array(6,23,7,23); break; 
case"81":$this->sensors = array("BTS2_VD0_1000132","ХВС","BTS2_VD1_1000132","ГВС","0","ХВС2","0","ГВС2","MRC2_5313492");	$this->chanals= array(0,24,1,24); break; 
case"82":$this->sensors = array("BTS2_VD2_1000132","ХВС","BTS2_VD3_1000132","ГВС","0","ХВС2","0","ГВС2","MRC2_8277457");	$this->chanals= array(2,24,3,24); break; 
case"83":$this->sensors = array("BTS2_VD4_1000132","ХВС","BTS2_VD5_1000132","ГВС","0","ХВС2","0","ГВС2","MRC2_5313488");	$this->chanals= array(4,24,5,24); break; 
case"84":$this->sensors = array("BTS2_VD6_1000132","ХВС","BTS2_VD7_1000132","ГВС","0","ХВС2","0","ГВС2","MRC2_5313486");	$this->chanals= array(6,24,7,24); break; 
case"85":$this->sensors = array("BTS2_VD0_1000103","ХВС","BTS2_VD1_1000103","ГВС","0","ХВС2","0","ГВС2","MRC2_5313607");	$this->chanals= array(0,25,1,25); break; 
case"Оф. 1":$this->sensors = array("-","ХВС","-","ГВС","-","ХВС2","-","ГВС2","MRC2_33725060");	$this->chanals= array(0,0,1,0,2,0,14,0); break; 
case"Все": break;		
default: require 'alert_flat.js'; die;		
}