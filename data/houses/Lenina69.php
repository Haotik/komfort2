<?php		
//$this->flat = $_POST['flat']		
$this->ipAddres = "192.168.1.19";

if ($this->flat>0 && $this->flat<25){$this->rsNum = "36";}
elseif (($this->flat>24 && $this->flat<46)) {$this->rsNum = "37";}
elseif (($this->flat>45 && $this->flat<67)) {$this->rsNum = "38";}
elseif (($this->flat>66 && $this->flat<81)) {$this->rsNum = "39";}


switch ($this->flat) {		
case"1":$this->sensors = array("BTS2_VD0_1200366","ХВС","BTS2_VD1_1200366","ГВС","0","ХВС2","0","ГВС2","MRC2_11589541");	$this->chanals= array(0,1,1,1);	 break;
case"2":$this->sensors = array("BTS2_VD2_1200366","ХВС","BTS2_VD3_1200366","ГВС","0","ХВС2","0","ГВС2","MRC2_11588473");	$this->chanals= array(2,1,3,1);	 break;
case"3":$this->sensors = array("BTS2_VD4_1200366","ХВС","BTS2_VD5_1200366","ГВС","0","ХВС2","0","ГВС2","MRC2_11588477");	$this->chanals= array(4,1,5,1);	 break;
case"4":$this->sensors = array("BTS2_VD6_1200366","ХВС","BTS2_VD7_1200366","ГВС","0","ХВС2","0","ГВС2","MRC2_11589556");	$this->chanals= array(6,1,7,1);	 break;
case"5":$this->sensors = array("BTS2_VD0_1200304","ХВС","BTS2_VD1_1200304","ГВС","0","ХВС2","0","ГВС2","MRC2_11588507");	$this->chanals= array(0,2,1,2);	 break;
case"6":$this->sensors = array("BTS2_VD2_1200304","ХВС","BTS2_VD3_1200304","ГВС","BTS2_VD4_1200304","ХВС2","BTS2_VD5_1200304","ГВС2","MRC2_11588472");	$this->chanals= array(2,2,3,2,4,2,5,2);	 break;
case"7":$this->sensors = array("BTS2_VD6_1200304","ХВС","BTS2_VD7_1200304","ГВС","0","ХВС2","0","ГВС2","MRC2_11589544");	$this->chanals= array(6,2,7,2);	 break;
case"8":$this->sensors = array("BTS2_VD0_1200313","ХВС","BTS2_VD1_1200313","ГВС","BTS2_VD2_1200313","ХВС2","BTS2_VD3_1200313","ГВС2","MRC2_11589564");	$this->chanals= array(0,3,1,3,2,3,3,3);	 break;
case"9":$this->sensors = array("BTS2_VD4_1200313","ХВС","BTS2_VD5_1200313","ГВС","0","ХВС2","0","ГВС2","MRC2_11588464");	$this->chanals= array(4,3,5,3);	 break;
case"10":$this->sensors = array("BTS2_VD6_1200313","ХВС","BTS2_VD7_1200313","ГВС","0","ХВС2","0","ГВС2","MRC2_11588505");	$this->chanals= array(6,3,7,3);	 break;
case"11":$this->sensors = array("BTS2_VD0_1200249","ХВС","BTS2_VD1_1200249","ГВС","0","ХВС2","0","ГВС2","MRC2_11588500");	$this->chanals= array(0,4,1,4);	 break;
case"12":$this->sensors = array("BTS2_VD2_1200249","ХВС","BTS2_VD3_1200249","ГВС","0","ХВС2","0","ГВС2","MRC2_11588513");	$this->chanals= array(2,4,3,4);	 break;
case"13":$this->sensors = array("BTS2_VD4_1200249","ХВС","BTS2_VD5_1200249","ГВС","BTS2_VD6_1200249","ХВС2","BTS2_VD7_1200249","ГВС2","MRC2_11588496");	$this->chanals= array(4,4,5,4,6,4,7,4);	 break;
case"14":$this->sensors = array("BTS2_VD0_1200307","ХВС","BTS2_VD1_1200307","ГВС","0","ХВС2","0","ГВС2","MRC2_11589614");	$this->chanals= array(0,5,1,5);	 break;
case"15":$this->sensors = array("BTS2_VD2_1200307","ХВС","BTS2_VD3_1200307","ГВС","BTS2_VD4_1200307","ХВС2","BTS2_VD5_1200307","ГВС2","MRC2_11588497");	$this->chanals= array(2,5,3,5,4,5,5,5);	 break;
case"16":$this->sensors = array("BTS2_VD6_1200307","ХВС","BTS2_VD7_1200307","ГВС","0","ХВС2","0","ГВС2","MRC2_11589609");	$this->chanals= array(6,5,7,5);	 break;
case"17":$this->sensors = array("BTS2_VD0_1200219","ХВС","BTS2_VD1_1200219","ГВС","0","ХВС2","0","ГВС2","MRC2_10178474");	$this->chanals= array(0,6,1,6);	 break;
case"18":$this->sensors = array("BTS2_VD2_1200219","ХВС","BTS2_VD3_1200219","ГВС","0","ХВС2","0","ГВС2","MRC2_11589608");	$this->chanals= array(2,6,3,6);	 break;
case"19":$this->sensors = array("BTS2_VD4_1200219","ХВС","BTS2_VD5_1200219","ГВС","0","ХВС2","0","ГВС2","MRC2_11589579");	$this->chanals= array(4,6,5,6);	 break;
case"20":$this->sensors = array("BTS2_VD6_1200219","ХВС","BTS2_VD7_1200219","ГВС","BTS2_VD0_1200370","ХВС2","BTS2_VD1_1200370","ГВС2","MRC2_11589558");	$this->chanals= array(6,6,7,6,0,7,1,7);	 break;
case"21":$this->sensors = array("BTS2_VD2_1200370","ХВС","BTS2_VD3_1200370","ГВС","0","ХВС2","0","ГВС2","MRC2_11589574");	$this->chanals= array(2,7,3,7);	 break;
case"22":$this->sensors = array("BTS2_VD4_1200370","ХВС","BTS2_VD5_1200370","ГВС","BTS2_VD6_1200370","ХВС2","BTS2_VD7_1200370","ГВС2","MRC2_11589581");	$this->chanals= array(4,7,5,7,6,7,7,7);	 break;
case"23":$this->sensors = array("BTS2_VD0_1200272","ХВС","BTS2_VD1_1200272","ГВС","0","ХВС2","0","ГВС2","MRC2_11589535");	$this->chanals= array(0,8,1,8);	 break;
case"24":$this->sensors = array("BTS2_VD2_1200272","ХВС","BTS2_VD3_1200272","ГВС","0","ХВС2","0","ГВС2","MRC2_11589554");	$this->chanals= array(2,8,3,8);	 break;
case"25":$this->sensors = array("BTS2_VD0_1200152","ХВС","BTS2_VD1_1200152","ГВС","0","ХВС2","0","ГВС2","MRC2_11589661");	$this->chanals= array(0,10,1,10);	 break;
case"26":$this->sensors = array("BTS2_VD2_1200152","ХВС","BTS2_VD3_1200152","ГВС","BTS2_VD4_1200152","ХВС2","BTS2_VD5_1200152","ГВС2","MRC2_11589658");	$this->chanals= array(2,10,3,10,4,10,5,10);	 break;
case"27":$this->sensors = array("BTS2_VD6_1200152","ХВС","BTS2_VD7_1200152","ГВС","BTS2_VD0_1200140","ХВС2","BTS2_VD1_1200140","ГВС2","MRC2_11589678");	$this->chanals= array(6,10,7,10,0,11,1,11);	 break;
case"28":$this->sensors = array("BTS2_VD2_1200140","ХВС","BTS2_VD3_1200140","ГВС","0","ХВС2","0","ГВС2","MRC2_10178497");	$this->chanals= array(2,11,3,11);	 break;
case"29":$this->sensors = array("BTS2_VD4_1200140","ХВС","BTS2_VD5_1200140","ГВС","BTS2_VD6_1200140","ХВС2","BTS2_VD7_1200140","ГВС2","MRC2_11589674");	$this->chanals= array(4,11,5,11,6,11,7,11);	 break;
case"30":$this->sensors = array("BTS2_VD0_1200130","ХВС","BTS2_VD1_1200130","ГВС","0","ХВС2","0","ГВС2","MRC2_11589677");	$this->chanals= array(0,12,1,12);	 break;
case"31":$this->sensors = array("BTS2_VD2_1200130","ХВС","BTS2_VD3_1200130","ГВС","0","ХВС2","0","ГВС2","MRC2_11589668");	$this->chanals= array(2,12,3,12);	 break;
case"32":$this->sensors = array("BTS2_VD4_1200130","ХВС","BTS2_VD5_1200130","ГВС","0","ХВС2","0","ГВС2","MRC2_11589667");	$this->chanals= array(4,12,5,12);	 break;
case"33":$this->sensors = array("BTS2_VD6_1200130","ХВС","BTS2_VD7_1200130","ГВС","BTS2_VD0_1200118","ХВС2","BTS2_VD1_1200118","ГВС2","MRC2_11589669");	$this->chanals= array(6,12,7,12,0,13,1,13);	 break;
case"34":$this->sensors = array("BTS2_VD2_1200118","ХВС","BTS2_VD3_1200118","ГВС","BTS2_VD4_1200118","ХВС2","BTS2_VD5_1200118","ГВС2","MRC2_10178468");	$this->chanals= array(2,13,3,13,4,13,5,13);	 break;
case"35":$this->sensors = array("BTS2_VD6_1200118","ХВС","BTS2_VD7_1200118","ГВС","0","ХВС2","0","ГВС2","MRC2_11589687");	$this->chanals= array(6,13,7,13);	 break;
case"36":$this->sensors = array("BTS2_VD0_1200149","ХВС","BTS2_VD1_1200149","ГВС","BTS2_VD2_1200149","ХВС2","BTS2_VD3_1200149","ГВС2","MRC2_11589660");	$this->chanals= array(0,14,1,14,2,14,3,14);	 break;
case"37":$this->sensors = array("BTS2_VD4_1200149","ХВС","BTS2_VD5_1200149","ГВС","0","ХВС2","0","ГВС2","MRC2_11588504");	$this->chanals= array(4,14,5,14);	 break;
case"38":$this->sensors = array("BTS2_VD6_1200149","ХВС","BTS2_VD7_1200149","ГВС","0","ХВС2","0","ГВС2","MRC2_11588506");	$this->chanals= array(6,14,7,14);	 break;
case"39":$this->sensors = array("BTS2_VD0_1200086","ХВС","BTS2_VD1_1200086","ГВС","0","ХВС2","0","ГВС2","MRC2_11589603");	$this->chanals= array(0,15,1,15);	 break;
case"40":$this->sensors = array("BTS2_VD2_1200086","ХВС","BTS2_VD3_1200086","ГВС","BTS2_VD4_1200086","ХВС2","BTS2_VD5_1200086","ГВС2","MRC2_11589602");	$this->chanals= array(2,15,3,15,4,15,5,15);	 break;
case"41":$this->sensors = array("BTS2_VD6_1200086","ХВС","BTS2_VD7_1200086","ГВС","BTS2_VD0_1200125","ХВС2","BTS2_VD1_1200125","ГВС2","MRC2_11588476");	$this->chanals= array(6,15,7,15,0,16,1,16);	 break;
case"42":$this->sensors = array("BTS2_VD2_1200125","ХВС","BTS2_VD3_1200125","ГВС","0","ХВС2","0","ГВС2","MRC2_11589537");	$this->chanals= array(2,16,3,16);	 break;
case"43":$this->sensors = array("BTS2_VD4_1200125","ХВС","BTS2_VD5_1200125","ГВС","BTS2_VD6_1200125","ХВС2","BTS2_VD7_1200125","ГВС2","MRC2_11589604");	$this->chanals= array(4,16,5,16,6,16,7,16);	 break;
case"44":$this->sensors = array("BTS2_VD0_1200232","ХВС","BTS2_VD1_1200232","ГВС","0","ХВС2","0","ГВС2","MRC2_11588508");	$this->chanals= array(0,17,1,17);	 break;
case"45":$this->sensors = array("BTS2_VD2_1200232","ХВС","BTS2_VD3_1200232","ГВС","0","ХВС2","0","ГВС2","MRC2_11589540");	$this->chanals= array(2,17,3,17);	 break;
case"46":$this->sensors = array("BTS2_VD0_1000482","ХВС","BTS2_VD1_1000482","ГВС","0","ХВС2","0","ГВС2","MRC2_11589536");	$this->chanals= array(0,18,1,18);	 break;
case"47":$this->sensors = array("BTS2_VD2_1000482","ХВС","BTS2_VD3_1000482","ГВС","BTS2_VD4_1000482","ХВС2","BTS2_VD5_1000482","ГВС2","MRC2_11589542");	$this->chanals= array(2,18,3,18,4,18,5,18);	 break;
case"48":$this->sensors = array("BTS2_VD6_1000482","ХВС","BTS2_VD7_1000482","ГВС","BTS2_VD0_1100028","ХВС2","BTS2_VD1_1100028","ГВС2","MRC2_11589553");	$this->chanals= array(6,18,7,18,0,19,1,19);	 break;
case"49":$this->sensors = array("BTS2_VD2_1100028","ХВС","BTS2_VD3_1100028","ГВС","0","ХВС2","0","ГВС2","MRC2_11589560");	$this->chanals= array(2,19,3,19);	 break;
case"50":$this->sensors = array("BTS2_VD4_1100028","ХВС","BTS2_VD5_1100028","ГВС","BTS2_VD6_1100028","ХВС2","BTS2_VD7_1100028","ГВС2","MRC2_11588502");	$this->chanals= array(4,19,5,19,6,19,7,19);	 break;
case"51":$this->sensors = array("BTS2_VD0_1100070","ХВС","BTS2_VD1_1100070","ГВС","0","ХВС2","0","ГВС2","MRC2_11589589");	$this->chanals= array(0,20,1,20);	 break;
case"52":$this->sensors = array("BTS2_VD2_1100070","ХВС","BTS2_VD3_1100070","ГВС","0","ХВС2","0","ГВС2","MRC2_11589582");	$this->chanals= array(2,20,3,20);	 break;
case"53":$this->sensors = array("BTS2_VD4_1100070","ХВС","BTS2_VD5_1100070","ГВС","0","ХВС2","0","ГВС2","MRC2_11589551");	$this->chanals= array(4,20,5,20);	 break;
case"54":$this->sensors = array("BTS2_VD6_1100070","ХВС","BTS2_VD7_1100070","ГВС","BTS2_VD0_1100061","ХВС2","BTS2_VD1_1100061","ГВС2","MRC2_11589585");	$this->chanals= array(6,20,7,20,0,21,1,21);	 break;
case"55":$this->sensors = array("BTS2_VD2_1100061","ХВС","BTS2_VD3_1100061","ГВС","BTS2_VD4_1100061","ХВС2","BTS2_VD5_1100061","ГВС2","MRC2_11589550");	$this->chanals= array(2,21,3,21,4,21,5,21);	 break;
case"56":$this->sensors = array("BTS2_VD6_1100061","ХВС","BTS2_VD7_1100061","ГВС","0","ХВС2","0","ГВС2","MRC2_11589595");	$this->chanals= array(6,21,7,21);	 break;
case"57":$this->sensors = array("BTS2_VD0_1100066","ХВС","BTS2_VD1_1100066","ГВС","BTS2_VD2_1100066","ХВС2","BTS2_VD3_1100066","ГВС2","MRC2_11589597");	$this->chanals= array(0,22,1,22,2,22,3,22);	 break;
case"58":$this->sensors = array("BTS2_VD4_1100066","ХВС","BTS2_VD5_1100066","ГВС","0","ХВС2","0","ГВС2","MRC2_11589594");	$this->chanals= array(4,22,5,22);	 break;
case"59":$this->sensors = array("BTS2_VD6_1100066","ХВС","BTS2_VD7_1100066","ГВС","0","ХВС2","0","ГВС2","MRC2_11589547");	$this->chanals= array(6,22,7,22);	 break;
case"60":$this->sensors = array("BTS2_VD0_1100021","ХВС","BTS2_VD1_1100021","ГВС","0","ХВС2","0","ГВС2","MRC2_11589570");	$this->chanals= array(0,23,1,23);	 break;
case"61":$this->sensors = array("BTS2_VD2_1100021","ХВС","BTS2_VD3_1100021","ГВС","BTS2_VD4_1100021","ХВС2","BTS2_VD5_1100021","ГВС2","MRC2_11588480");	$this->chanals= array(2,23,3,23,4,23,5,23);	 break;
case"62":$this->sensors = array("BTS2_VD6_1100021","ХВС","BTS2_VD7_1100021","ГВС","BTS2_VD0_1100041","ХВС2","BTS2_VD1_1100041","ГВС2","MRC2_11589613");	$this->chanals= array(6,23,7,23,0,24,1,24);	 break;
case"63":$this->sensors = array("BTS2_VD2_1100041","ХВС","BTS2_VD3_1100041","ГВС","0","ХВС2","0","ГВС2","MRC2_11589546");	$this->chanals= array(2,24,3,24);	 break;
case"64":$this->sensors = array("BTS2_VD4_1100041","ХВС","BTS2_VD5_1100041","ГВС","BTS2_VD6_1100041","ХВС2","BTS2_VD7_1100041","ГВС2","MRC2_11589605");	$this->chanals= array(4,24,5,24,6,24,7,24);	 break;
case"65":$this->sensors = array("BTS2_VD0_1100026","ХВС","BTS2_VD1_1100026","ГВС","0","ХВС2","0","ГВС2","MRC2_11589611");	$this->chanals= array(0,25,1,25);	 break;
case"66":$this->sensors = array("BTS2_VD2_1100026","ХВС","BTS2_VD3_1100026","ГВС","0","ХВС2","0","ГВС2","MRC2_11589601");	$this->chanals= array(2,25,3,25);	 break;
case"67":$this->sensors = array("BTS2_VD0_1100037","ХВС","BTS2_VD1_1100037","ГВС","0","ХВС2","0","ГВС2","MRC2_11589566");	$this->chanals= array(0,26,1,26);	 break;
case"68":$this->sensors = array("BTS2_VD2_1100037","ХВС","BTS2_VD3_1100037","ГВС","BTS2_VD4_1100037","ХВС2","BTS2_VD5_1100037","ГВС2","MRC2_11589538");	$this->chanals= array(2,26,3,26,4,26,5,26);	 break;
case"69":$this->sensors = array("BTS2_VD6_1100037","ХВС","BTS2_VD7_1100037","ГВС","BTS2_VD0_1100063","ХВС2","BTS2_VD1_1100063","ГВС2","MRC2_11589588");	$this->chanals= array(6,26,7,26,0,27,1,27);	 break;
case"70":$this->sensors = array("BTS2_VD2_1100063","ХВС","BTS2_VD3_1100063","ГВС","0","ХВС2","0","ГВС2","MRC2_11589576");	$this->chanals= array(2,27,3,27);	 break;
case"71":$this->sensors = array("BTS2_VD4_1100063","ХВС","BTS2_VD5_1100063","ГВС","BTS2_VD6_1100063","ХВС2","BTS2_VD7_1100063","ГВС2","MRC2_11589612");	$this->chanals= array(4,27,5,27,6,27,7,27);	 break;
case"72":$this->sensors = array("BTS2_VD0_1100042","ХВС","BTS2_VD1_1100042","ГВС","0","ХВС2","0","ГВС2","MRC2_11589539");	$this->chanals= array(0,28,1,28);	 break;
case"73":$this->sensors = array("BTS2_VD2_1100042","ХВС","BTS2_VD3_1100042","ГВС","0","ХВС2","0","ГВС2","MRC2_11589590");	$this->chanals= array(2,28,3,28);	 break;
case"74":$this->sensors = array("BTS2_VD4_1100042","ХВС","BTS2_VD5_1100042","ГВС","0","ХВС2","0","ГВС2","MRC2_11588594");	$this->chanals= array(4,28,5,28);	 break;
case"75":$this->sensors = array("BTS2_VD6_1100042","ХВС","BTS2_VD7_1100042","ГВС","BTS2_VD0_1100055","ХВС2","BTS2_VD1_1100055","ГВС2","MRC2_11589584");	$this->chanals= array(6,28,7,28,0,29,1,29);	 break;
case"76":$this->sensors = array("BTS2_VD2_1100055","ХВС","BTS2_VD3_1100055","ГВС","BTS2_VD4_1100055","ХВС2","BTS2_VD5_1100055","ГВС2","MRC2_11588475");	$this->chanals= array(2,29,3,29,4,29,5,29);	 break;
case"77":$this->sensors = array("BTS2_VD6_1100055","ХВС","BTS2_VD7_1100055","ГВС","0","ХВС2","0","ГВС2","MRC2_11588503");	$this->chanals= array(6,29,7,29);	 break;
case"78":$this->sensors = array("BTS2_VD0_1100023","ХВС","BTS2_VD1_1100023","ГВС","BTS2_VD2_1100023","ХВС2","BTS2_VD3_1100023","ГВС2","MRC2_11589680");	$this->chanals= array(0,30,1,30,2,30,3,30);	 break;
case"79":$this->sensors = array("BTS2_VD4_1100023","ХВС","BTS2_VD5_1100023","ГВС","0","ХВС2","0","ГВС2","MRC2_11589681");	$this->chanals= array(4,30,5,30);	 break;
case"80":$this->sensors = array("BTS2_VD6_1100023","ХВС","BTS2_VD7_1100023","ГВС","0","ХВС2","0","ГВС2","MRC2_11589685");	$this->chanals= array(6,30,7,30);	 break;
case"Все": break;		
default: require 'alert_flat.js'; die;
}