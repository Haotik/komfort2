<?php		
//$this->flat = $_POST['flat']		
$this->ipAddres = "192.168.1.23";

if ($this->flat>0 && $this->flat<22){$this->rsNum = "60";}
elseif (($this->flat>21 && $this->flat<43)) {$this->rsNum = "61";}
elseif (($this->flat>42 && $this->flat<64)) {$this->rsNum = "62";}
elseif (($this->flat>63 && $this->flat<82)) {$this->rsNum = "63";}
elseif (($this->flat>81 && $this->flat<102)) {$this->rsNum = "64";}
elseif (($this->flat>101 && $this->flat<124)) {$this->rsNum = "65";}
elseif (($this->flat>123 && $this->flat<141)) {$this->rsNum = "66";}
elseif (($this->flat>140 && $this->flat<162)) {$this->rsNum = "67";}
elseif (($this->flat>161 && $this->flat<183)) {$this->rsNum = "68";}

switch ($this->flat) {		
case"1":$this->sensors = array("BTS2_VD0_1300555","ХВС","BTS2_VD1_1300555","ГВС","0","ХВС2","0","ГВС2","MRC2_16290866");	$this->chanals= array(0,1,1,1);	 break;
case"2":$this->sensors = array("BTS2_VD2_1300555","ХВС","BTS2_VD3_1300555","ГВС","0","ХВС2","0","ГВС2","MRC2_16290868");	$this->chanals= array(2,1,3,1);	 break;
case"3":$this->sensors = array("BTS2_VD4_1300555","ХВС","BTS2_VD5_1300555","ГВС","0","ХВС2","0","ГВС2","MRC2_16290932");	$this->chanals= array(4,1,5,1);	 break;
case"4":$this->sensors = array("BTS2_VD6_1300555","ХВС","BTS2_VD7_1300555","ГВС","0","ХВС2","0","ГВС2","MRC2_16290855");	$this->chanals= array(6,1,7,1);	 break;
case"5":$this->sensors = array("BTS2_VD0_1400023","ХВС","BTS2_VD1_1400023","ГВС","0","ХВС2","0","ГВС2","MRC2_16290936");	$this->chanals= array(0,2,1,2);	 break;
case"6":$this->sensors = array("BTS2_VD2_1400023","ХВС","BTS2_VD3_1400023","ГВС","0","ХВС2","0","ГВС2","MRC2_16290931");	$this->chanals= array(2,2,3,2);	 break;
case"7":$this->sensors = array("BTS2_VD4_1400023","ХВС","BTS2_VD5_1400023","ГВС","0","ХВС2","0","ГВС2","MRC2_16290911");	$this->chanals= array(4,2,5,2);	 break;
case"8":$this->sensors = array("BTS2_VD6_1400023","ХВС","BTS2_VD7_1400023","ГВС","0","ХВС2","0","ГВС2","MRC2_16290892");	$this->chanals= array(6,2,7,2);	 break;
case"9":$this->sensors = array("BTS2_VD0_1300601","ХВС","BTS2_VD1_1300601","ГВС","0","ХВС2","0","ГВС2","MRC2_16291128");	$this->chanals= array(0,3,1,3);	 break;
case"10":$this->sensors = array("BTS2_VD2_1300601","ХВС","BTS2_VD3_1300601","ГВС","0","ХВС2","0","ГВС2","MRC2_16290859");	$this->chanals= array(2,3,3,3);	 break;
case"11":$this->sensors = array("BTS2_VD4_1300601","ХВС","BTS2_VD5_1300601","ГВС","0","ХВС2","0","ГВС2","MRC2_16291147");	$this->chanals= array(4,3,5,3);	 break;
case"12":$this->sensors = array("BTS2_VD6_1300601","ХВС","BTS2_VD7_1300601","ГВС","0","ХВС2","0","ГВС2","MRC2_16291126");	$this->chanals= array(6,3,7,3);	 break;
case"13":$this->sensors = array("BTS2_VD0_1300554","ХВС","BTS2_VD1_1300554","ГВС","0","ХВС2","0","ГВС2","MRC2_16291080");	$this->chanals= array(0,4,1,4);	 break;
case"14":$this->sensors = array("BTS2_VD2_1300554","ХВС","BTS2_VD3_1300554","ГВС","0","ХВС2","0","ГВС2","MRC2_16290707");	$this->chanals= array(2,4,3,4);	 break;
case"15":$this->sensors = array("BTS2_VD4_1300554","ХВС","BTS2_VD5_1300554","ГВС","0","ХВС2","0","ГВС2","MRC2_16291063");	$this->chanals= array(4,4,5,4);	 break;
case"16":$this->sensors = array("BTS2_VD6_1300554","ХВС","BTS2_VD7_1300554","ГВС","0","ХВС2","0","ГВС2","MRC2_16291049");	$this->chanals= array(6,4,7,4);	 break;
case"17":$this->sensors = array("BTS2_VD0_1300584","ХВС","BTS2_VD1_1300584","ГВС","0","ХВС2","0","ГВС2","MRC2_16291193");	$this->chanals= array(0,5,1,5);	 break;
case"18":$this->sensors = array("BTS2_VD2_1300584","ХВС","BTS2_VD3_1300584","ГВС","0","ХВС2","0","ГВС2","MRC2_16291057");	$this->chanals= array(2,5,3,5);	 break;
case"19":$this->sensors = array("BTS2_VD4_1300584","ХВС","BTS2_VD5_1300584","ГВС","0","ХВС2","0","ГВС2","MRC2_16291187");	$this->chanals= array(4,5,5,5);	 break;
case"20":$this->sensors = array("BTS2_VD6_1300584","ХВС","BTS2_VD7_1300584","ГВС","0","ХВС2","0","ГВС2","MRC2_16291071");	$this->chanals= array(6,5,7,5);	 break;
case"21":$this->sensors = array("BTS2_VD0_1300578","ХВС","BTS2_VD1_1300578","ГВС","0","ХВС2","0","ГВС2","MRC2_16291191");	$this->chanals= array(0,6,1,6);	 break;
case"22":$this->sensors = array("BTS2_VD0_1400030","ХВС","BTS2_VD1_1400030","ГВС","0","ХВС2","0","ГВС2","MRC2_16291148");	$this->chanals= array(0,7,1,7);	 break;
case"23":$this->sensors = array("BTS2_VD2_1400030","ХВС","BTS2_VD3_1400030","ГВС","0","ХВС2","0","ГВС2","MRC2_16290701");	$this->chanals= array(2,7,3,7);	 break;
case"24":$this->sensors = array("BTS2_VD4_1400030","ХВС","BTS2_VD5_1400030","ГВС","0","ХВС2","0","ГВС2","MRC2_16291075");	$this->chanals= array(4,7,5,7);	 break;
case"25":$this->sensors = array("BTS2_VD6_1400030","ХВС","BTS2_VD7_1400030","ГВС","0","ХВС2","0","ГВС2","MRC2_16291173");	$this->chanals= array(6,7,7,7);	 break;
case"26":$this->sensors = array("BTS2_VD0_1300563","ХВС","BTS2_VD1_1300563","ГВС","0","ХВС2","0","ГВС2","MRC2_16291157");	$this->chanals= array(0,8,1,8);	 break;
case"27":$this->sensors = array("BTS2_VD2_1300563","ХВС","BTS2_VD3_1300563","ГВС","0","ХВС2","0","ГВС2","MRC2_16290920");	$this->chanals= array(2,8,3,8);	 break;
case"28":$this->sensors = array("BTS2_VD4_1300563","ХВС","BTS2_VD5_1300563","ГВС","0","ХВС2","0","ГВС2","MRC2_16290917");	$this->chanals= array(4,8,5,8);	 break;
case"29":$this->sensors = array("BTS2_VD6_1300563","ХВС","BTS2_VD7_1300563","ГВС","0","ХВС2","0","ГВС2","MRC2_16291169");	$this->chanals= array(6,8,7,8);	 break;
case"30":$this->sensors = array("BTS2_VD0_1300608","ХВС","BTS2_VD1_1300608","ГВС","0","ХВС2","0","ГВС2","MRC2_16291074");	$this->chanals= array(0,9,1,9);	 break;
case"31":$this->sensors = array("BTS2_VD2_1300608","ХВС","BTS2_VD3_1300608","ГВС","0","ХВС2","0","ГВС2","MRC2_16291171");	$this->chanals= array(2,9,3,9);	 break;
case"32":$this->sensors = array("BTS2_VD4_1300608","ХВС","BTS2_VD5_1300608","ГВС","0","ХВС2","0","ГВС2","MRC2_16291159");	$this->chanals= array(4,9,5,9);	 break;
case"33":$this->sensors = array("BTS2_VD6_1300608","ХВС","BTS2_VD7_1300608","ГВС","0","ХВС2","0","ГВС2","MRC2_16291188");	$this->chanals= array(6,9,7,9);	 break;
case"34":$this->sensors = array("BTS2_VD0_1100015","ХВС","BTS2_VD1_1100015","ГВС","0","ХВС2","0","ГВС2","MRC2_16290845");	$this->chanals= array(0,10,1,10);	 break;
case"35":$this->sensors = array("BTS2_VD2_1100015","ХВС","BTS2_VD3_1100015","ГВС","0","ХВС2","0","ГВС2","MRC2_16290918");	$this->chanals= array(2,10,3,10);	 break;
case"36":$this->sensors = array("BTS2_VD4_1100015","ХВС","BTS2_VD5_1100015","ГВС","0","ХВС2","0","ГВС2","MRC2_16290915");	$this->chanals= array(4,10,5,10);	 break;
case"37":$this->sensors = array("BTS2_VD6_1100015","ХВС","BTS2_VD7_1100015","ГВС","0","ХВС2","0","ГВС2","MRC2_16291055");	$this->chanals= array(6,10,7,10);	 break;
case"38":$this->sensors = array("BTS2_VD0_1300569","ХВС","BTS2_VD1_1300569","ГВС","0","ХВС2","0","ГВС2","MRC2_16291145");	$this->chanals= array(0,11,1,11);	 break;
case"39":$this->sensors = array("BTS2_VD2_1300569","ХВС","BTS2_VD3_1300569","ГВС","0","ХВС2","0","ГВС2","MRC2_16291035");	$this->chanals= array(2,11,3,11);	 break;
case"40":$this->sensors = array("BTS2_VD4_1300569","ХВС","BTS2_VD5_1300569","ГВС","0","ХВС2","0","ГВС2","MRC2_16291144");	$this->chanals= array(4,11,5,11);	 break;
case"41":$this->sensors = array("BTS2_VD6_1300569","ХВС","BTS2_VD7_1300569","ГВС","0","ХВС2","0","ГВС2","MRC2_16291052");	$this->chanals= array(6,11,7,11);	 break;
case"42":$this->sensors = array("BTS2_VD0_1300562","ХВС","BTS2_VD1_1300562","ГВС","0","ХВС2","0","ГВС2","MRC2_16291154");	$this->chanals= array(0,12,1,12);	 break;
case"43":$this->sensors = array("BTS2_VD0_1300571","ХВС","BTS2_VD1_1300571","ГВС","0","ХВС2","0","ГВС2","MRC2_16291054");	$this->chanals= array(0,13,1,13);	 break;
case"44":$this->sensors = array("BTS2_VD2_1300571","ХВС","BTS2_VD3_1300571","ГВС","0","ХВС2","0","ГВС2","MRC2_16291037");	$this->chanals= array(2,13,3,13);	 break;
case"45":$this->sensors = array("BTS2_VD4_1300571","ХВС","BTS2_VD5_1300571","ГВС","0","ХВС2","0","ГВС2","MRC2_16291033");	$this->chanals= array(4,13,5,13);	 break;
case"46":$this->sensors = array("BTS2_VD6_1300571","ХВС","BTS2_VD7_1300571","ГВС","0","ХВС2","0","ГВС2","MRC2_16291186");	$this->chanals= array(6,13,7,13);	 break;
case"47":$this->sensors = array("BTS2_VD0_1300593","ХВС","BTS2_VD1_1300593","ГВС","0","ХВС2","0","ГВС2","MRC2_16291132");	$this->chanals= array(0,14,1,14);	 break;
case"48":$this->sensors = array("BTS2_VD2_1300593","ХВС","BTS2_VD3_1300593","ГВС","0","ХВС2","0","ГВС2","MRC2_16291152");	$this->chanals= array(2,14,3,14);	 break;
case"49":$this->sensors = array("BTS2_VD4_1300593","ХВС","BTS2_VD5_1300593","ГВС","0","ХВС2","0","ГВС2","MRC2_16291078");	$this->chanals= array(4,14,5,14);	 break;
case"50":$this->sensors = array("BTS2_VD6_1300593","ХВС","BTS2_VD7_1300593","ГВС","0","ХВС2","0","ГВС2","MRC2_16290702");	$this->chanals= array(6,14,7,14);	 break;
case"51":$this->sensors = array("BTS2_VD0_1300585","ХВС","BTS2_VD1_1300585","ГВС","0","ХВС2","0","ГВС2","MRC2_16291150");	$this->chanals= array(0,15,1,15);	 break;
case"52":$this->sensors = array("BTS2_VD2_1300585","ХВС","BTS2_VD3_1300585","ГВС","0","ХВС2","0","ГВС2","MRC2_16291161");	$this->chanals= array(2,15,3,15);	 break;
case"53":$this->sensors = array("BTS2_VD4_1300585","ХВС","BTS2_VD5_1300585","ГВС","0","ХВС2","0","ГВС2","MRC2_16291069");	$this->chanals= array(4,15,5,15);	 break;
case"54":$this->sensors = array("BTS2_VD6_1300585","ХВС","BTS2_VD7_1300585","ГВС","0","ХВС2","0","ГВС2","MRC2_16291167");	$this->chanals= array(6,15,7,15);	 break;
case"55":$this->sensors = array("BTS2_VD0_1300580","ХВС","BTS2_VD1_1300580","ГВС","0","ХВС2","0","ГВС2","MRC2_16291177");	$this->chanals= array(0,16,1,16);	 break;
case"56":$this->sensors = array("BTS2_VD2_1300580","ХВС","BTS2_VD3_1300580","ГВС","0","ХВС2","0","ГВС2","MRC2_16291172");	$this->chanals= array(2,16,3,16);	 break;
case"57":$this->sensors = array("BTS2_VD4_1300580","ХВС","BTS2_VD5_1300580","ГВС","0","ХВС2","0","ГВС2","MRC2_16291182");	$this->chanals= array(4,16,5,16);	 break;
case"58":$this->sensors = array("BTS2_VD6_1300580","ХВС","BTS2_VD7_1300580","ГВС","0","ХВС2","0","ГВС2","MRC2_16291131");	$this->chanals= array(6,16,7,16);	 break;
case"59":$this->sensors = array("BTS2_VD0_1300053","ХВС","BTS2_VD1_1300053","ГВС","0","ХВС2","0","ГВС2","MRC2_16291136");	$this->chanals= array(0,17,1,17);	 break;
case"60":$this->sensors = array("BTS2_VD2_1300053","ХВС","BTS2_VD3_1300053","ГВС","0","ХВС2","0","ГВС2","MRC2_16291443");	$this->chanals= array(2,17,3,17);	 break;
case"61":$this->sensors = array("BTS2_VD4_1300053","ХВС","BTS2_VD5_1300053","ГВС","0","ХВС2","0","ГВС2","MRC2_16291450");	$this->chanals= array(4,17,5,17);	 break;
case"62":$this->sensors = array("BTS2_VD6_1300053","ХВС","BTS2_VD7_1300053","ГВС","0","ХВС2","0","ГВС2","MRC2_16291163");	$this->chanals= array(6,17,7,17);	 break;
case"63":$this->sensors = array("BTS2_VD0_1300047","ХВС","BTS2_VD1_1300047","ГВС","0","ХВС2","0","ГВС2","MRC2_16290893");	$this->chanals= array(0,18,1,18);	 break;
case"64":$this->sensors = array("BTS2_VD0_1300007","ХВС","BTS2_VD1_1300007","ГВС","BTS2_VD2_1300007","ХВС2","BTS2_VD3_1300007","ГВС2","MRC2_16290834");	$this->chanals= array(0,19,1,19,2,19,3,19);	 break;
case"65":$this->sensors = array("BTS2_VD4_1300007","ХВС","BTS2_VD5_1300007","ГВС","0","ХВС2","0","ГВС2","MRC2_16290838");	$this->chanals= array(4,19,5,19);	 break;
case"66":$this->sensors = array("BTS2_VD6_1300007","ХВС","BTS2_VD7_1300007","ГВС","0","ХВС2","0","ГВС2","MRC2_16290854");	$this->chanals= array(6,19,7,19);	 break;
case"67":$this->sensors = array("BTS2_VD0_1300586","ХВС","BTS2_VD1_1300586","ГВС","0","ХВС2","0","ГВС2","MRC2_16290853");	$this->chanals= array(0,20,1,20);	 break;
case"68":$this->sensors = array("BTS2_VD2_1300586","ХВС","BTS2_VD3_1300586","ГВС","0","ХВС2","0","ГВС2","MRC2_16290840");	$this->chanals= array(2,20,3,20);	 break;
case"69":$this->sensors = array("BTS2_VD4_1300586","ХВС","BTS2_VD5_1300586","ГВС","0","ХВС2","0","ГВС2","MRC2_16290870");	$this->chanals= array(4,20,5,20);	 break;
case"70":$this->sensors = array("BTS2_VD6_1300586","ХВС","BTS2_VD7_1300586","ГВС","BTS2_VD0_1300589","ХВС2","BTS2_VD1_1300589","ГВС2","MRC2_16290901");	$this->chanals= array(6,20,7,20,0,21,1,21);	 break;
case"71":$this->sensors = array("BTS2_VD2_1300589","ХВС","BTS2_VD3_1300589","ГВС","0","ХВС2","0","ГВС2","MRC2_16290872");	$this->chanals= array(2,21,3,21);	 break;
case"72":$this->sensors = array("BTS2_VD4_1300589","ХВС","BTS2_VD5_1300589","ГВС","0","ХВС2","0","ГВС2","MRC2_16290900");	$this->chanals= array(4,21,5,21);	 break;
case"73":$this->sensors = array("BTS2_VD6_1300589","ХВС","BTS2_VD7_1300589","ГВС","0","ХВС2","0","ГВС2","MRC2_16290913");	$this->chanals= array(6,21,7,21);	 break;
case"74":$this->sensors = array("BTS2_VD0_1300590","ХВС","BTS2_VD1_1300590","ГВС","0","ХВС2","0","ГВС2","MRC2_16290850");	$this->chanals= array(0,22,1,22);	 break;
case"75":$this->sensors = array("BTS2_VD2_1300590","ХВС","BTS2_VD3_1300590","ГВС","0","ХВС2","0","ГВС2","MRC2_16291133");	$this->chanals= array(2,22,3,22);	 break;
case"76":$this->sensors = array("BTS2_VD4_1300590","ХВС","BTS2_VD5_1300590","ГВС","BTS2_VD6_1300590","ХВС2","BTS2_VD7_1300590","ГВС2","MRC2_16290847");	$this->chanals= array(4,22,5,22,6,22,7,22);	 break;
case"77":$this->sensors = array("BTS2_VD0_1300592","ХВС","BTS2_VD1_1300592","ГВС","0","ХВС2","0","ГВС2","MRC2_16290921");	$this->chanals= array(0,23,1,23);	 break;
case"78":$this->sensors = array("BTS2_VD2_1300592","ХВС","BTS2_VD3_1300592","ГВС","0","ХВС2","0","ГВС2","MRC2_16290839");	$this->chanals= array(2,23,3,23);	 break;
case"79":$this->sensors = array("BTS2_VD4_1300592","ХВС","BTS2_VD5_1300592","ГВС","0","ХВС2","0","ГВС2","MRC2_16291155");	$this->chanals= array(4,23,5,23);	 break;
case"80":$this->sensors = array("BTS2_VD6_1300592","ХВС","BTS2_VD7_1300592","ГВС","0","ХВС2","0","ГВС2","MRC2_16291129");	$this->chanals= array(6,23,7,23);	 break;
case"81":$this->sensors = array("BTS2_VD0_1300061","ХВС","BTS2_VD1_1300061","ГВС","0","ХВС2","0","ГВС2","MRC2_16291127");	$this->chanals= array(0,24,1,24);	 break;
case"82":$this->sensors = array("BTS2_VD0_1300639","ХВС","BTS2_VD1_1300639","ГВС","BTS2_VD2_1300639","ХВС2","BTS2_VD3_1300639","ГВС2","MRC2_16291156");	$this->chanals= array(0,25,1,25,2,25,3,25);	 break;
case"83":$this->sensors = array("BTS2_VD4_1300639","ХВС","BTS2_VD5_1300639","ГВС","0","ХВС2","0","ГВС2","MRC2_16291123");	$this->chanals= array(4,25,5,25);	 break;
case"84":$this->sensors = array("BTS2_VD6_1300639","ХВС","BTS2_VD7_1300639","ГВС","0","ХВС2","0","ГВС2","MRC2_16291134");	$this->chanals= array(6,25,7,25);	 break;
case"85":$this->sensors = array("BTS2_VD0_1300649","ХВС","BTS2_VD1_1300649","ГВС","0","ХВС2","0","ГВС2","MRC2_16291158");	$this->chanals= array(0,26,1,26);	 break;
case"86":$this->sensors = array("BTS2_VD2_1300649","ХВС","BTS2_VD3_1300649","ГВС","0","ХВС2","0","ГВС2","MRC2_16291165");	$this->chanals= array(2,26,3,26);	 break;
case"87":$this->sensors = array("BTS2_VD4_1300649","ХВС","BTS2_VD5_1300649","ГВС","0","ХВС2","0","ГВС2","MRC2_16290841");	$this->chanals= array(4,26,5,26);	 break;
case"88":$this->sensors = array("BTS2_VD6_1300649","ХВС","BTS2_VD7_1300649","ГВС","0","ХВС2","0","ГВС2","MRC2_16290903");	$this->chanals= array(6,26,7,26);	 break;
case"89":$this->sensors = array("BTS2_VD0_1300635","ХВС","BTS2_VD1_1300635","ГВС","0","ХВС2","0","ГВС2","MRC2_16290922");	$this->chanals= array(0,27,1,27);	 break;
case"90":$this->sensors = array("BTS2_VD2_1300635","ХВС","BTS2_VD3_1300635","ГВС","0","ХВС2","0","ГВС2","MRC2_16291061");	$this->chanals= array(2,27,3,27);	 break;
case"91":$this->sensors = array("BTS2_VD4_1300635","ХВС","BTS2_VD5_1300635","ГВС","0","ХВС2","0","ГВС2","MRC2_16291090");	$this->chanals= array(4,27,5,27);	 break;
case"92":$this->sensors = array("BTS2_VD6_1300635","ХВС","BTS2_VD7_1300635","ГВС","0","ХВС2","0","ГВС2","MRC2_16291070");	$this->chanals= array(6,27,7,27);	 break;
case"93":$this->sensors = array("BTS2_VD0_1300640","ХВС","BTS2_VD1_1300640","ГВС","0","ХВС2","0","ГВС2","MRC2_16290907");	$this->chanals= array(0,28,1,28);	 break;
case"94":$this->sensors = array("BTS2_VD2_1300640","ХВС","BTS2_VD3_1300640","ГВС","0","ХВС2","0","ГВС2","MRC2_16290933");	$this->chanals= array(2,28,3,28);	 break;
case"95":$this->sensors = array("BTS2_VD4_1300640","ХВС","BTS2_VD5_1300640","ГВС","0","ХВС2","0","ГВС2","MRC2_16290916");	$this->chanals= array(4,28,5,28);	 break;
case"96":$this->sensors = array("BTS2_VD6_1300640","ХВС","BTS2_VD7_1300640","ГВС","0","ХВС2","0","ГВС2","MRC2_16290919");	$this->chanals= array(6,28,7,28);	 break;
case"97":$this->sensors = array("BTS2_VD0_1300636","ХВС","BTS2_VD1_1300636","ГВС","0","ХВС2","0","ГВС2","MRC2_16290835");	$this->chanals= array(0,29,1,29);	 break;
case"98":$this->sensors = array("BTS2_VD2_1300636","ХВС","BTS2_VD3_1300636","ГВС","0","ХВС2","0","ГВС2","MRC2_16290833");	$this->chanals= array(2,29,3,29);	 break;
case"99":$this->sensors = array("BTS2_VD4_1300636","ХВС","BTS2_VD5_1300636","ГВС","0","ХВС2","0","ГВС2","MRC2_16290939");	$this->chanals= array(4,29,5,29);	 break;
case"100":$this->sensors = array("BTS2_VD6_1300636","ХВС","BTS2_VD7_1300636","ГВС","0","ХВС2","0","ГВС2","MRC2_16290935");	$this->chanals= array(6,29,7,29);	 break;
case"101":$this->sensors = array("BTS2_VD0_1300641","ХВС","BTS2_VD1_1300641","ГВС","0","ХВС2","0","ГВС2","MRC2_16290869");	$this->chanals= array(0,30,1,30);	 break;
case"102":$this->sensors = array("BTS2_VD0_1300637","ХВС","BTS2_VD1_1300637","ГВС","0","ХВС2","0","ГВС2","MRC2_16290944");	$this->chanals= array(0,31,1,31);	 break;
case"103":$this->sensors = array("BTS2_VD2_1300637","ХВС","BTS2_VD3_1300637","ГВС","0","ХВС2","0","ГВС2","MRC2_16290887");	$this->chanals= array(2,31,3,31);	 break;
case"104":$this->sensors = array("BTS2_VD4_1300637","ХВС","BTS2_VD5_1300637","ГВС","0","ХВС2","0","ГВС2","MRC2_16290880");	$this->chanals= array(4,31,5,31);	 break;
case"105":$this->sensors = array("BTS2_VD6_1300637","ХВС","BTS2_VD7_1300637","ГВС","0","ХВС2","0","ГВС2","MRC2_16290857");	$this->chanals= array(6,31,7,31);	 break;
case"106":$this->sensors = array("BTS2_VD0_1300642","ХВС","BTS2_VD1_1300642","ГВС","0","ХВС2","0","ГВС2","MRC2_16291053");	$this->chanals= array(0,32,1,32);	 break;
case"107":$this->sensors = array("BTS2_VD2_1300642","ХВС","BTS2_VD3_1300642","ГВС","0","ХВС2","0","ГВС2","MRC2_16291083");	$this->chanals= array(2,32,3,32);	 break;
case"108":$this->sensors = array("BTS2_VD4_1300642","ХВС","BTS2_VD5_1300642","ГВС","0","ХВС2","0","ГВС2","MRC2_16290852");	$this->chanals= array(4,32,5,32);	 break;
case"109":$this->sensors = array("BTS2_VD6_1300642","ХВС","BTS2_VD7_1300642","ГВС","0","ХВС2","0","ГВС2","MRC2_16291143");	$this->chanals= array(6,32,7,32);	 break;
case"110":$this->sensors = array("BTS2_VD0_1300634","ХВС","BTS2_VD1_1300634","ГВС","0","ХВС2","0","ГВС2","MRC2_16291178");	$this->chanals= array(0,33,1,33);	 break;
case"111":$this->sensors = array("BTS2_VD2_1300634","ХВС","BTS2_VD3_1300634","ГВС","0","ХВС2","0","ГВС2","MRC2_16291174");	$this->chanals= array(2,33,3,33);	 break;
case"112":$this->sensors = array("BTS2_VD4_1300634","ХВС","BTS2_VD5_1300634","ГВС","0","ХВС2","0","ГВС2","MRC2_16291130");	$this->chanals= array(4,33,5,33);	 break;
case"113":$this->sensors = array("BTS2_VD6_1300634","ХВС","BTS2_VD7_1300634","ГВС","0","ХВС2","0","ГВС2","MRC2_16291164");	$this->chanals= array(6,33,7,33);	 break;
case"114":$this->sensors = array("BTS2_VD0_1300645","ХВС","BTS2_VD1_1300645","ГВС","0","ХВС2","0","ГВС2","MRC2_16291179");	$this->chanals= array(0,34,1,34);	 break;
case"115":$this->sensors = array("BTS2_VD2_1300645","ХВС","BTS2_VD3_1300645","ГВС","0","ХВС2","0","ГВС2","MRC2_16291176");	$this->chanals= array(2,34,3,34);	 break;
case"116":$this->sensors = array("BTS2_VD4_1300645","ХВС","BTS2_VD5_1300645","ГВС","0","ХВС2","0","ГВС2","MRC2_16291151");	$this->chanals= array(4,34,5,34);	 break;
case"117":$this->sensors = array("BTS2_VD6_1300645","ХВС","BTS2_VD7_1300645","ГВС","0","ХВС2","0","ГВС2","MRC2_16291153");	$this->chanals= array(6,34,7,34);	 break;
case"118":$this->sensors = array("BTS2_VD0_1300643","ХВС","BTS2_VD1_1300643","ГВС","0","ХВС2","0","ГВС2","MRC2_16291140");	$this->chanals= array(0,35,1,35);	 break;
case"119":$this->sensors = array("BTS2_VD2_1300643","ХВС","BTS2_VD3_1300643","ГВС","0","ХВС2","0","ГВС2","MRC2_16291149");	$this->chanals= array(2,35,3,35);	 break;
case"120":$this->sensors = array("BTS2_VD4_1300643","ХВС","BTS2_VD5_1300643","ГВС","0","ХВС2","0","ГВС2","MRC2_16291124");	$this->chanals= array(4,35,5,35);	 break;
case"121":$this->sensors = array("BTS2_VD6_1300643","ХВС","BTS2_VD7_1300643","ГВС","0","ХВС2","0","ГВС2","MRC2_16291050");	$this->chanals= array(6,35,7,35);	 break;
case"122":$this->sensors = array("BTS2_VD0_1300644","ХВС","BTS2_VD1_1300644","ГВС","0","ХВС2","0","ГВС2","MRC2_16291060");	$this->chanals= array(0,36,1,36);	 break;
case"123":$this->sensors = array("BTS2_VD0_1300638","ХВС","BTS2_VD1_1300638","ГВС","0","ХВС2","0","ГВС2","MRC2_16291076");	$this->chanals= array(0,37,1,37);	 break;
case"124":$this->sensors = array("BTS2_VD2_1300638","ХВС","BTS2_VD3_1300638","ГВС","0","ХВС2","0","ГВС2","MRC2_16290912");	$this->chanals= array(2,37,3,37);	 break;
case"125":$this->sensors = array("BTS2_VD4_1300638","ХВС","BTS2_VD5_1300638","ГВС","0","ХВС2","0","ГВС2","MRC2_16290851");	$this->chanals= array(4,37,5,37);	 break;
case"126":$this->sensors = array("BTS2_VD6_1300638","ХВС","BTS2_VD7_1300638","ГВС","0","ХВС2","0","ГВС2","MRC2_16290934");	$this->chanals= array(6,37,7,37);	 break;
case"127":$this->sensors = array("BTS2_VD0_1300647","ХВС","BTS2_VD1_1300647","ГВС","0","ХВС2","0","ГВС2","MRC2_16290861");	$this->chanals= array(0,38,1,38);	 break;
case"128":$this->sensors = array("BTS2_VD2_1300647","ХВС","BTS2_VD3_1300647","ГВС","BTS2_VD4_1300647","ХВС2","BTS2_VD5_1300647","ГВС2","MRC2_16291036");	$this->chanals= array(2,38,3,38,4,38,5,38);	 break;
case"129":$this->sensors = array("BTS2_VD6_1300647","ХВС","BTS2_VD7_1300647","ГВС","0","ХВС2","0","ГВС2","MRC2_16290862");	$this->chanals= array(6,38,7,38);	 break;
case"130":$this->sensors = array("BTS2_VD0_1300648","ХВС","BTS2_VD1_1300648","ГВС","0","ХВС2","0","ГВС2","MRC2_16290858");	$this->chanals= array(0,39,1,39);	 break;
case"131":$this->sensors = array("BTS2_VD2_1300648","ХВС","BTS2_VD3_1300648","ГВС","0","ХВС2","0","ГВС2","MRC2_16290943");	$this->chanals= array(2,39,3,39);	 break;
case"132":$this->sensors = array("BTS2_VD4_1300648","ХВС","BTS2_VD5_1300648","ГВС","0","ХВС2","0","ГВС2","MRC2_16290875");	$this->chanals= array(4,39,5,39);	 break;
case"133":$this->sensors = array("BTS2_VD6_1300648","ХВС","BTS2_VD7_1300648","ГВС","0","ХВС2","0","ГВС2","MRC2_16290923");	$this->chanals= array(6,39,7,39);	 break;
case"134":$this->sensors = array("BTS2_VD0_1400005","ХВС","BTS2_VD1_1400005","ГВС","BTS2_VD2_1400005","ХВС2","BTS2_VD3_1400005","ГВС2","MRC2_16291184");	$this->chanals= array(0,40,1,40,2,40,3,40);	 break;
case"135":$this->sensors = array("BTS2_VD4_1400005","ХВС","BTS2_VD5_1400005","ГВС","0","ХВС2","0","ГВС2","MRC2_16291146");	$this->chanals= array(4,40,5,40);	 break;
case"136":$this->sensors = array("BTS2_VD6_1400005","ХВС","BTS2_VD7_1400005","ГВС","0","ХВС2","0","ГВС2","MRC2_16290722");	$this->chanals= array(6,40,7,40);	 break;
case"137":$this->sensors = array("BTS2_VD0_1400010","ХВС","BTS2_VD1_1400010","ГВС","0","ХВС2","0","ГВС2","MRC2_16291125");	$this->chanals= array(0,41,1,41);	 break;
case"138":$this->sensors = array("BTS2_VD2_1400010","ХВС","BTS2_VD3_1400010","ГВС","0","ХВС2","0","ГВС2","MRC2_16291190");	$this->chanals= array(2,41,3,41);	 break;
case"139":$this->sensors = array("BTS2_VD4_1400010","ХВС","BTS2_VD5_1400010","ГВС","0","ХВС2","0","ГВС2","MRC2_16291058");	$this->chanals= array(4,41,5,41);	 break;
case"140":$this->sensors = array("BTS2_VD0_1400006","ХВС","BTS2_VD1_1400006","ГВС","BTS2_VD2_1400006","ХВС2","BTS2_VD3_1400006","ГВС2","MRC2_16291189");	$this->chanals= array(0,42,1,42,2,42,3,42);	 break;
case"141":$this->sensors = array("BTS2_VD0_1400025","ХВС","BTS2_VD1_1400025","ГВС","0","ХВС2","0","ГВС2","MRC2_16291192");	$this->chanals= array(0,43,1,43);	 break;
case"142":$this->sensors = array("BTS2_VD2_1400025","ХВС","BTS2_VD3_1400025","ГВС","0","ХВС2","0","ГВС2","MRC2_16291135");	$this->chanals= array(2,43,3,43);	 break;
case"143":$this->sensors = array("BTS2_VD4_1400025","ХВС","BTS2_VD5_1400025","ГВС","0","ХВС2","0","ГВС2","MRC2_16291034");	$this->chanals= array(4,43,5,43);	 break;
case"144":$this->sensors = array("BTS2_VD6_1400025","ХВС","BTS2_VD7_1400025","ГВС","0","ХВС2","0","ГВС2","MRC2_16290706");	$this->chanals= array(6,43,7,43);	 break;
case"145":$this->sensors = array("BTS2_VD0_1400041","ХВС","BTS2_VD1_1400041","ГВС","0","ХВС2","0","ГВС2","MRC2_16291142");	$this->chanals= array(0,44,1,44);	 break;
case"146":$this->sensors = array("BTS2_VD2_1400041","ХВС","BTS2_VD3_1400041","ГВС","0","ХВС2","0","ГВС2","MRC2_16291068");	$this->chanals= array(2,44,3,44);	 break;
case"147":$this->sensors = array("BTS2_VD4_1400041","ХВС","BTS2_VD5_1400041","ГВС","0","ХВС2","0","ГВС2","MRC2_16290914");	$this->chanals= array(4,44,5,44);	 break;
case"148":$this->sensors = array("BTS2_VD6_1400041","ХВС","BTS2_VD7_1400041","ГВС","0","ХВС2","0","ГВС2","MRC2_16290846");	$this->chanals= array(6,44,7,44);	 break;
case"149":$this->sensors = array("BTS2_VD0_1400002","ХВС","BTS2_VD1_1400002","ГВС","0","ХВС2","0","ГВС2","MRC2_16291138");	$this->chanals= array(0,45,1,45);	 break;
case"150":$this->sensors = array("BTS2_VD2_1400002","ХВС","BTS2_VD3_1400002","ГВС","0","ХВС2","0","ГВС2","MRC2_16291139");	$this->chanals= array(2,45,3,45);	 break;
case"151":$this->sensors = array("BTS2_VD4_1400002","ХВС","BTS2_VD5_1400002","ГВС","0","ХВС2","0","ГВС2","MRC2_16291170");	$this->chanals= array(4,45,5,45);	 break;
case"152":$this->sensors = array("BTS2_VD6_1400002","ХВС","BTS2_VD7_1400002","ГВС","0","ХВС2","0","ГВС2","MRC2_16291181");	$this->chanals= array(6,45,7,45);	 break;
case"153":$this->sensors = array("BTS2_VD0_1400039","ХВС","BTS2_VD1_1400039","ГВС","0","ХВС2","0","ГВС2","MRC2_16291160");	$this->chanals= array(0,46,1,46);	 break;
case"154":$this->sensors = array("BTS2_VD2_1400039","ХВС","BTS2_VD3_1400039","ГВС","0","ХВС2","0","ГВС2","MRC2_16291175");	$this->chanals= array(2,46,3,46);	 break;
case"155":$this->sensors = array("BTS2_VD4_1400039","ХВС","BTS2_VD5_1400039","ГВС","0","ХВС2","0","ГВС2","MRC2_16291180");	$this->chanals= array(4,46,5,46);	 break;
case"156":$this->sensors = array("BTS2_VD6_1400039","ХВС","BTS2_VD7_1400039","ГВС","0","ХВС2","0","ГВС2","MRC2_16291162");	$this->chanals= array(6,46,7,46);	 break;
case"157":$this->sensors = array("BTS2_VD0_1300617","ХВС","BTS2_VD1_1300617","ГВС","0","ХВС2","0","ГВС2","MRC2_16291093");	$this->chanals= array(0,47,1,47);	 break;
case"158":$this->sensors = array("BTS2_VD2_1300617","ХВС","BTS2_VD3_1300617","ГВС","0","ХВС2","0","ГВС2","MRC2_16291092");	$this->chanals= array(2,47,3,47);	 break;
case"159":$this->sensors = array("BTS2_VD4_1300617","ХВС","BTS2_VD5_1300617","ГВС","0","ХВС2","0","ГВС2","MRC2_16291065");	$this->chanals= array(4,47,5,47);	 break;
case"160":$this->sensors = array("BTS2_VD6_1300617","ХВС","BTS2_VD7_1300617","ГВС","0","ХВС2","0","ГВС2","MRC2_16291059");	$this->chanals= array(6,47,7,47);	 break;
case"161":$this->sensors = array("BTS2_VD0_1400050","ХВС","BTS2_VD1_1400050","ГВС","0","ХВС2","0","ГВС2","MRC2_16291087");	$this->chanals= array(0,48,1,48);	 break;
case"162":$this->sensors = array("BTS2_VD0_1400001","ХВС","BTS2_VD1_1400001","ГВС","0","ХВС2","0","ГВС2","MRC2_16291085");	$this->chanals= array(0,49,1,49);	 break;
case"163":$this->sensors = array("BTS2_VD2_1400001","ХВС","BTS2_VD3_1400001","ГВС","0","ХВС2","0","ГВС2","MRC2_16291079");	$this->chanals= array(2,49,3,49);	 break;
case"164":$this->sensors = array("BTS2_VD4_1400001","ХВС","BTS2_VD5_1400001","ГВС","0","ХВС2","0","ГВС2","MRC2_16291096");	$this->chanals= array(4,49,5,49);	 break;
case"165":$this->sensors = array("BTS2_VD6_1400001","ХВС","BTS2_VD7_1400001","ГВС","0","ХВС2","0","ГВС2","MRC2_16291095");	$this->chanals= array(6,49,7,49);	 break;
case"166":$this->sensors = array("BTS2_VD0_1400047","ХВС","BTS2_VD1_1400047","ГВС","0","ХВС2","0","ГВС2","MRC2_16290904");	$this->chanals= array(0,50,1,50);	 break;
case"167":$this->sensors = array("BTS2_VD2_1400047","ХВС","BTS2_VD3_1400047","ГВС","0","ХВС2","0","ГВС2","MRC2_16291064");	$this->chanals= array(2,50,3,50);	 break;
case"168":$this->sensors = array("BTS2_VD4_1400047","ХВС","BTS2_VD5_1400047","ГВС","0","ХВС2","0","ГВС2","MRC2_16291088");	$this->chanals= array(4,50,5,50);	 break;
case"169":$this->sensors = array("BTS2_VD6_1400047","ХВС","BTS2_VD7_1400047","ГВС","0","ХВС2","0","ГВС2","MRC2_16291086");	$this->chanals= array(6,50,7,50);	 break;
case"170":$this->sensors = array("BTS2_VD0_1400040","ХВС","BTS2_VD1_1400040","ГВС","0","ХВС2","0","ГВС2","MRC2_16291107");	$this->chanals= array(0,51,1,51);	 break;
case"171":$this->sensors = array("BTS2_VD2_1400040","ХВС","BTS2_VD3_1400040","ГВС","0","ХВС2","0","ГВС2","MRC2_16291109");	$this->chanals= array(2,51,3,51);	 break;
case"172":$this->sensors = array("BTS2_VD4_1400040","ХВС","BTS2_VD5_1400040","ГВС","0","ХВС2","0","ГВС2","MRC2_16290753");	$this->chanals= array(4,51,5,51);	 break;
case"173":$this->sensors = array("BTS2_VD6_1400040","ХВС","BTS2_VD7_1400040","ГВС","0","ХВС2","0","ГВС2","MRC2_16291112");	$this->chanals= array(6,51,7,51);	 break;
case"174":$this->sensors = array("BTS2_VD0_1400038","ХВС","BTS2_VD1_1400038","ГВС","0","ХВС2","0","ГВС2","MRC2_16291108");	$this->chanals= array(0,52,1,52);	 break;
case"175":$this->sensors = array("BTS2_VD2_1400038","ХВС","BTS2_VD3_1400038","ГВС","0","ХВС2","0","ГВС2","MRC2_16291094");	$this->chanals= array(2,52,3,52);	 break;
case"176":$this->sensors = array("BTS2_VD4_1400038","ХВС","BTS2_VD5_1400038","ГВС","0","ХВС2","0","ГВС2","MRC2_16291040");	$this->chanals= array(4,52,5,52);	 break;
case"177":$this->sensors = array("BTS2_VD6_1400038","ХВС","BTS2_VD7_1400038","ГВС","0","ХВС2","0","ГВС2","MRC2_16291266");	$this->chanals= array(6,52,7,52);	 break;
case"178":$this->sensors = array("BTS2_VD0_1400028","ХВС","BTS2_VD1_1400028","ГВС","0","ХВС2","0","ГВС2","MRC2_16291041");	$this->chanals= array(0,53,1,53);	 break;
case"179":$this->sensors = array("BTS2_VD2_1400028","ХВС","BTS2_VD3_1400028","ГВС","0","ХВС2","0","ГВС2","MRC2_16291098");	$this->chanals= array(2,53,3,53);	 break;
case"180":$this->sensors = array("BTS2_VD4_1400028","ХВС","BTS2_VD5_1400028","ГВС","0","ХВС2","0","ГВС2","MRC2_16291099");	$this->chanals= array(4,53,5,53);	 break;
case"181":$this->sensors = array("BTS2_VD6_1400028","ХВС","BTS2_VD7_1400028","ГВС","0","ХВС2","0","ГВС2","MRC2_16291116");	$this->chanals= array(6,53,7,53);	 break;
case"182":$this->sensors = array("BTS2_VD0_1400033","ХВС","BTS2_VD1_1400033","ГВС","0","ХВС2","0","ГВС2","MRC2_16291168");	$this->chanals= array(0,54,1,54); 	 break;
		
case"Все": break;		
default: require 'alert_flat.js'; die;		
}		