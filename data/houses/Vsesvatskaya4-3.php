<?php		
//$this->flat = $_POST['flat']		
$this->ipAddres ="192.168.1.18";

if ($this->flat>0 && $this->flat<21){$this->rsNum = "60";}
elseif (($this->flat>20 && $this->flat<40)) {$this->rsNum = "61";}
elseif (($this->flat>39 && $this->flat<61)) {$this->rsNum = "62";}
elseif (($this->flat>60 && $this->flat<81)) {$this->rsNum = "63";}
elseif (($this->flat>80 && $this->flat<100)) {$this->rsNum = "64";}
elseif (($this->flat>99 && $this->flat<121)) {$this->rsNum = "65";}
elseif (($this->flat>120 && $this->flat<141)) {$this->rsNum = "66";}
elseif (($this->flat>140 && $this->flat<162)) {$this->rsNum = "67";}
elseif (($this->flat>161 && $this->flat<183)) {$this->rsNum = "68";}

switch ($this->flat) {		
case"1":$this->sensors = array("BTS2_VD0_1200011","ХВС","BTS2_VD1_1200011","ГВС","BTS2_VD2_1200011","ХВС2","BTS2_VD3_1200011","ГВС2","MRC2_12427772");	$this->chanals= array(0,1,1,1,2,1,3,1);	 break;
case"2":$this->sensors = array("BTS2_VD4_1200011","ХВС","BTS2_VD5_1200011","ГВС","0","ХВС2","0","ГВС2","MRC2_12427924");	$this->chanals= array(4,1,5,1);	 break;
case"3":$this->sensors = array("BTS2_VD6_1200011","ХВС","BTS2_VD7_1200011","ГВС","0","ХВС2","0","ГВС2","MRC2_12427771");	$this->chanals= array(6,1,7,1);	 break;
case"4":$this->sensors = array("BTS2_VD0_1200161","ХВС","BTS2_VD1_1200161","ГВС","0","ХВС2","0","ГВС2","MRC2_12427687");	$this->chanals= array(0,2,1,2);	 break;
case"5":$this->sensors = array("BTS2_VD2_1200161","ХВС","BTS2_VD3_1200161","ГВС","BTS2_VD4_1200161","ХВС2","BTS2_VD5_1200161","ГВС2","MRC2_12427770");	$this->chanals= array(2,2,3,2,4,2,5,2);	 break;
case"6":$this->sensors = array("BTS2_VD6_1200161","ХВС","BTS2_VD7_1200161","ГВС","BTS2_VD0_1000495","ХВС2","BTS2_VD1_1000495","ГВС2","MRC2_12427695");	$this->chanals= array(6,2,7,2,0,3,1,3);	 break;
case"7":$this->sensors = array("BTS2_VD2_1000495","ХВС","BTS2_VD3_1000495","ГВС","0","ХВС2","0","ГВС2","MRC2_12427925");	$this->chanals= array(2,3,3,3);	 break;
case"8":$this->sensors = array("BTS2_VD4_1000495","ХВС","BTS2_VD5_1000495","ГВС","0","ХВС2","0","ГВС2","MRC2_12427791");	$this->chanals= array(4,3,5,3);	 break;
case"9":$this->sensors = array("BTS2_VD6_1000495","ХВС","BTS2_VD7_1000495","ГВС","0","ХВС2","0","ГВС2","MRC2_10178473");	$this->chanals= array(6,3,7,3);	 break;
case"10":$this->sensors = array("BTS2_VD0_1000498","ХВС","BTS2_VD1_1000498","ГВС","BTS2_VD2_1000498","ХВС2","BTS2_VD3_1000498","ГВС2","MRC2_12427927");	$this->chanals= array(0,4,1,4,2,4,3,4);	 break;
case"11":$this->sensors = array("BTS2_VD4_1000498","ХВС","BTS2_VD5_1000498","ГВС","BTS2_VD6_1000498","ХВС2","BTS2_VD7_1000498","ГВС2","MRC2_12427679");	$this->chanals= array(4,4,5,4,6,4,7,4);	 break;
case"12":$this->sensors = array("BTS2_VD0_1200046","ХВС","BTS2_VD1_1200046","ГВС","0","ХВС2","0","ГВС2","MRC2_12427806");	$this->chanals= array(0,5,1,5);	 break;
case"13":$this->sensors = array("BTS2_VD2_1200046","ХВС","BTS2_VD3_1200046","ГВС","0","ХВС2","0","ГВС2","MRC2_10722240");	$this->chanals= array(2,5,3,5);	 break;
case"14":$this->sensors = array("BTS2_VD4_1200046","ХВС","BTS2_VD5_1200046","ГВС","0","ХВС2","0","ГВС2","MRC2_12427651");	$this->chanals= array(4,5,5,5);	 break;
case"15":$this->sensors = array("BTS2_VD6_1200046","ХВС","BTS2_VD7_1200046","ГВС","BTS2_VD0_1200112","ХВС2","BTS2_VD1_1200112","ГВС2","MRC2_10721839");	$this->chanals= array(6,5,7,5,0,6,1,6);	 break;
case"16":$this->sensors = array("BTS2_VD2_1200112","ХВС","BTS2_VD3_1200112","ГВС","BTS2_VD4_1200112","ХВС2","BTS2_VD5_1200112","ГВС2","MRC2_10721560");	$this->chanals= array(2,6,3,6,4,6,5,6);	 break;
case"17":$this->sensors = array("BTS2_VD6_1200112","ХВС","BTS2_VD7_1200112","ГВС","0","ХВС2","0","ГВС2","MRC2_10721727");	$this->chanals= array(6,6,7,6);	 break;
case"18":$this->sensors = array("BTS2_VD0_1000497","ХВС","BTS2_VD1_1000497","ГВС","0","ХВС2","0","ГВС2","MRC2_11784638");	$this->chanals= array(0,7,1,7);	 break;
case"19":$this->sensors = array("BTS2_VD2_1000497","ХВС","BTS2_VD3_1000497","ГВС","0","ХВС2","0","ГВС2","MRC2_11784619");	$this->chanals= array(2,7,3,7);	 break;
case"20":$this->sensors = array("BTS2_VD4_1000497","ХВС","BTS2_VD5_1000497","ГВС","BTS2_VD6_1000497","ХВС2","BTS2_VD7_1000497","ГВС2","MRC2_10721471");	$this->chanals= array(4,7,5,7,6,7,7,7);	 break;
case"21":$this->sensors = array("BTS2_VD0_1200003","ХВС","BTS2_VD1_1200003","ГВС","BTS2_VD2_1200003","ХВС2","BTS2_VD3_1200003","ГВС2","MRC2_10731872");	$this->chanals= array(0,8,1,8,2,8,3,8);	 break;
case"22":$this->sensors = array("BTS2_VD4_1200003","ХВС","BTS2_VD5_1200003","ГВС","0","ХВС2","0","ГВС2","MRC2_10721746");	$this->chanals= array(4,8,5,8);	 break;
case"23":$this->sensors = array("BTS2_VD6_1200003","ХВС","BTS2_VD7_1200003","ГВС","0","ХВС2","0","ГВС2","MRC2_10721701");	$this->chanals= array(6,8,7,8);	 break;
case"24":$this->sensors = array("BTS2_VD0_1200038","ХВС","BTS2_VD1_1200038","ГВС","0","ХВС2","0","ГВС2","MRC2_12427653");	$this->chanals= array(0,9,1,9);	 break;
case"25":$this->sensors = array("BTS2_VD2_1200038","ХВС","BTS2_VD3_1200038","ГВС","BTS2_VD4_1200038","ХВС2","BTS2_VD5_1200038","ГВС2","MRC2_10722403");	$this->chanals= array(2,9,3,9,4,9,5,9);	 break;
case"26":$this->sensors = array("BTS2_VD6_1200038","ХВС","BTS2_VD7_1200038","ГВС","0","ХВС2","0","ГВС2","MRC2_10722405");	$this->chanals= array(6,9,7,9);	 break;
case"27":$this->sensors = array("BTS2_VD0_1200062","ХВС","BTS2_VD1_1200062","ГВС","0","ХВС2","0","ГВС2","MRC2_10721577");	$this->chanals= array(0,10,1,10);	 break;
case"28":$this->sensors = array("BTS2_VD2_1200062","ХВС","BTS2_VD3_1200062","ГВС","0","ХВС2","0","ГВС2","MRC2_10721872");	$this->chanals= array(2,10,3,10);	 break;
case"29":$this->sensors = array("BTS2_VD4_1200062","ХВС","BTS2_VD5_1200062","ГВС","0","ХВС2","0","ГВС2","MRC2_10721875");	$this->chanals= array(4,10,5,10);	 break;
case"30":$this->sensors = array("BTS2_VD6_1200062","ХВС","BTS2_VD7_1200062","ГВС","0","ХВС2","0","ГВС2","MRC2_10721773");	$this->chanals= array(6,10,7,10);	 break;
case"31":$this->sensors = array("BTS2_VD0_1200297","ХВС","BTS2_VD1_1200297","ГВС","0","ХВС2","0","ГВС2","MRC2_10721619");	$this->chanals= array(0,11,1,11);	 break;
case"32":$this->sensors = array("BTS2_VD2_1200297","ХВС","BTS2_VD3_1200297","ГВС","0","ХВС2","0","ГВС2","MRC2_10721758");	$this->chanals= array(2,11,3,11);	 break;
case"33":$this->sensors = array("BTS2_VD4_1200297","ХВС","BTS2_VD5_1200297","ГВС","0","ХВС2","0","ГВС2","MRC2_10722330");	$this->chanals= array(4,11,5,11);	 break;
case"34":$this->sensors = array("BTS2_VD6_1200297","ХВС","BTS2_VD7_1200297","ГВС","0","ХВС2","0","ГВС2","MRC2_10721893");	$this->chanals= array(6,11,7,11);	 break;
case"35":$this->sensors = array("BTS2_VD0_1000496","ХВС","BTS2_VD1_1000496","ГВС","0","ХВС2","0","ГВС2","MRC2_10721599");	$this->chanals= array(0,12,1,12);	 break;
case"36":$this->sensors = array("BTS2_VD2_1000496","ХВС","BTS2_VD3_1000496","ГВС","0","ХВС2","0","ГВС2","MRC2_10722373");	$this->chanals= array(2,12,3,12);	 break;
case"37":$this->sensors = array("BTS2_VD4_1000496","ХВС","BTS2_VD5_1000496","ГВС","0","ХВС2","0","ГВС2","MRC2_10722419");	$this->chanals= array(4,12,5,12);	 break;
case"38":$this->sensors = array("BTS2_VD6_1000496","ХВС","BTS2_VD7_1000496","ГВС","0","ХВС2","0","ГВС2","MRC2_10722393");	$this->chanals= array(6,12,7,12);	 break;
case"39":$this->sensors = array("BTS2_VD0_1200157","ХВС","BTS2_VD1_1200157","ГВС","0","ХВС2","0","ГВС2","MRC2_10722418");	$this->chanals= array(0,13,1,13);	 break;
case"40":$this->sensors = array("BTS2_VD0_1200237","ХВС","BTS2_VD1_1200237","ГВС","0","ХВС2","0","ГВС2","MRC2_10722412");	$this->chanals= array(0,14,1,14);	 break;
case"41":$this->sensors = array("BTS2_VD2_1200237","ХВС","BTS2_VD3_1200237","ГВС","0","ХВС2","0","ГВС2","MRC2_10722411");	$this->chanals= array(2,14,3,14);	 break;
case"42":$this->sensors = array("BTS2_VD4_1200237","ХВС","BTS2_VD5_1200237","ГВС","0","ХВС2","0","ГВС2","MRC2_10722408");	$this->chanals= array(4,14,5,14);	 break;
case"43":$this->sensors = array("BTS2_VD6_1200237","ХВС","BTS2_VD7_1200237","ГВС","0","ХВС2","0","ГВС2","MRC2_10722394");	$this->chanals= array(6,14,7,14);	 break;
case"44":$this->sensors = array("BTS2_VD0_1200096","ХВС","BTS2_VD1_1200096","ГВС","0","ХВС2","0","ГВС2","MRC2_10722407");	$this->chanals= array(0,15,1,15);	 break;
case"45":$this->sensors = array("BTS2_VD2_1200096","ХВС","BTS2_VD3_1200096","ГВС","0","ХВС2","0","ГВС2","MRC2_10722395");	$this->chanals= array(2,15,3,15);	 break;
case"46":$this->sensors = array("BTS2_VD4_1200096","ХВС","BTS2_VD5_1200096","ГВС","0","ХВС2","0","ГВС2","MRC2_10722392");	$this->chanals= array(4,15,5,15);	 break;
case"47":$this->sensors = array("BTS2_VD6_1200096","ХВС","BTS2_VD7_1200096","ГВС","0","ХВС2","0","ГВС2","MRC2_10722396");	$this->chanals= array(6,15,7,15);	 break;
case"48":$this->sensors = array("BTS2_VD0_1200095","ХВС","BTS2_VD1_1200095","ГВС","0","ХВС2","0","ГВС2","MRC2_10722415");	$this->chanals= array(0,16,1,16);	 break;
case"49":$this->sensors = array("BTS2_VD2_1200095","ХВС","BTS2_VD3_1200095","ГВС","0","ХВС2","0","ГВС2","MRC2_12427897");	$this->chanals= array(2,16,3,16);	 break;
case"50":$this->sensors = array("BTS2_VD4_1200095","ХВС","BTS2_VD5_1200095","ГВС","0","ХВС2","0","ГВС2","MRC2_12427874");	$this->chanals= array(4,16,5,16);	 break;
case"51":$this->sensors = array("BTS2_VD6_1200095","ХВС","BTS2_VD7_1200095","ГВС","0","ХВС2","0","ГВС2","MRC2_12427887");	$this->chanals= array(6,16,7,16);	 break;
case"52":$this->sensors = array("BTS2_VD0_1200121","ХВС","BTS2_VD1_1200121","ГВС","0","ХВС2","0","ГВС2","MRC2_12427915");	$this->chanals= array(0,17,1,17);	 break;
case"53":$this->sensors = array("BTS2_VD2_1200121","ХВС","BTS2_VD3_1200121","ГВС","0","ХВС2","0","ГВС2","MRC2_12427912");	$this->chanals= array(2,17,3,17);	 break;
case"54":$this->sensors = array("BTS2_VD4_1200121","ХВС","BTS2_VD5_1200121","ГВС","0","ХВС2","0","ГВС2","MRC2_12427746");	$this->chanals= array(4,17,5,17);	 break;
case"55":$this->sensors = array("BTS2_VD6_1200121","ХВС","BTS2_VD7_1200121","ГВС","0","ХВС2","0","ГВС2","MRC2_12427845");	$this->chanals= array(6,17,7,17);	 break;
case"56":$this->sensors = array("BTS2_VD0_1200129","ХВС","BTS2_VD1_1200129","ГВС","0","ХВС2","0","ГВС2","MRC2_12427913");	$this->chanals= array(0,18,1,18);	 break;
case"57":$this->sensors = array("BTS2_VD2_1200129","ХВС","BTS2_VD3_1200129","ГВС","0","ХВС2","0","ГВС2","MRC2_12427747");	$this->chanals= array(2,18,3,18);	 break;
case"58":$this->sensors = array("BTS2_VD4_1200129","ХВС","BTS2_VD5_1200129","ГВС","0","ХВС2","0","ГВС2","MRC2_12427893");	$this->chanals= array(4,18,5,18);	 break;
case"59":$this->sensors = array("BTS2_VD6_1200129","ХВС","BTS2_VD7_1200129","ГВС","0","ХВС2","0","ГВС2","MRC2_12427876");	$this->chanals= array(6,18,7,18);	 break;
case"60":$this->sensors = array("BTS2_VD0_1200168","ХВС","BTS2_VD1_1200168","ГВС","0","ХВС2","0","ГВС2","MRC2_12427858");	$this->chanals= array(0,19,1,19);	 break;
case"61":$this->sensors = array("BTS2_VD0_1200143","ХВС","BTS2_VD1_1200143","ГВС","BTS2_VD2_1200143","ХВС2","BTS2_VD3_1200143","ГВС2","MRC2_10722357");	$this->chanals= array(0,20,1,20,2,20,3,20);	 break;
case"62":$this->sensors = array("BTS2_VD4_1200143","ХВС","BTS2_VD5_1200143","ГВС","0","ХВС2","0","ГВС2","MRC2_10722360");	$this->chanals= array(4,20,5,20);	 break;
case"63":$this->sensors = array("BTS2_VD6_1200143","ХВС","BTS2_VD7_1200143","ГВС","0","ХВС2","0","ГВС2","MRC2_10722381");	$this->chanals= array(6,20,7,20);	 break;
case"64":$this->sensors = array("BTS2_VD0_1200165","ХВС","BTS2_VD1_1200165","ГВС","0","ХВС2","0","ГВС2","MRC2_10722363");	$this->chanals= array(0,21,1,21);	 break;
case"65":$this->sensors = array("BTS2_VD2_1200165","ХВС","BTS2_VD3_1200165","ГВС","BTS2_VD4_1200165","ХВС2","BTS2_VD5_1200165","ГВС2","MRC2_10722417");	$this->chanals= array(2,21,3,21,4,21,5,21);	 break;
case"66":$this->sensors = array("BTS2_VD6_1200165","ХВС","BTS2_VD7_1200165","ГВС","BTS2_VD0_1200170","ХВС2","BTS2_VD1_1200170","ГВС2","MRC2_10722367");	$this->chanals= array(6,21,7,21,0,22,1,22);	 break;
case"67":$this->sensors = array("BTS2_VD2_1200170","ХВС","BTS2_VD3_1200170","ГВС","0","ХВС2","0","ГВС2","MRC2_10722420");	$this->chanals= array(2,22,3,22);	 break;
case"68":$this->sensors = array("BTS2_VD4_1200170","ХВС","BTS2_VD5_1200170","ГВС","0","ХВС2","0","ГВС2","MRC2_10722372");	$this->chanals= array(4,22,5,22);	 break;
case"69":$this->sensors = array("BTS2_VD6_1200170","ХВС","BTS2_VD7_1200170","ГВС","0","ХВС2","0","ГВС2","MRC2_10722356");	$this->chanals= array(6,22,7,22);	 break;
case"70":$this->sensors = array("BTS2_VD0_1200147","ХВС","BTS2_VD1_1200147","ГВС","BTS2_VD2_1200147","ХВС2","BTS2_VD3_1200147","ГВС2","MRC2_10722355");	$this->chanals= array(0,23,1,23,2,23,3,23);	 break;
case"71":$this->sensors = array("BTS2_VD4_1200147","ХВС","BTS2_VD5_1200147","ГВС","BTS2_VD6_1200147","ХВС2","BTS2_VD7_1200147","ГВС2","MRC2_10722361");	$this->chanals= array(4,23,5,23,6,23,7,23);	 break;
case"72":$this->sensors = array("BTS2_VD0_1200131","ХВС","BTS2_VD1_1200131","ГВС","0","ХВС2","0","ГВС2","MRC2_10722366");	$this->chanals= array(0,24,1,24);	 break;
case"73":$this->sensors = array("BTS2_VD2_1200131","ХВС","BTS2_VD3_1200131","ГВС","0","ХВС2","0","ГВС2","MRC2_12427774");	$this->chanals= array(2,24,3,24);	 break;
case"74":$this->sensors = array("BTS2_VD4_1200131","ХВС","BTS2_VD5_1200131","ГВС","0","ХВС2","0","ГВС2","MRC2_12427861");	$this->chanals= array(4,24,5,24);	 break;
case"75":$this->sensors = array("BTS2_VD6_1200131","ХВС","BTS2_VD7_1200131","ГВС","BTS2_VD0_1200139","ХВС2","BTS2_VD1_1200139","ГВС2","MRC2_12427773");	$this->chanals= array(6,24,7,24,0,25,1,25);	 break;
case"76":$this->sensors = array("BTS2_VD2_1200139","ХВС","BTS2_VD3_1200139","ГВС","BTS2_VD4_1200139","ХВС2","BTS2_VD5_1200139","ГВС2","MRC2_12427942");	$this->chanals= array(2,25,3,25,4,25,5,25);	 break;
case"77":$this->sensors = array("BTS2_VD6_1200139","ХВС","BTS2_VD7_1200139","ГВС","0","ХВС2","0","ГВС2","MRC2_12427894");	$this->chanals= array(6,25,7,25);	 break;
case"78":$this->sensors = array("BTS2_VD0_1200098","ХВС","BTS2_VD1_1200098","ГВС","0","ХВС2","0","ГВС2","MRC2_12427877");	$this->chanals= array(0,26,1,26);	 break;
case"79":$this->sensors = array("BTS2_VD2_1200098","ХВС","BTS2_VD3_1200098","ГВС","0","ХВС2","0","ГВС2","MRC2_12427870");	$this->chanals= array(2,26,3,26);	 break;
case"80":$this->sensors = array("BTS2_VD4_1200098","ХВС","BTS2_VD5_1200098","ГВС","BTS2_VD6_1200098","ХВС2","BTS2_VD7_1200098","ГВС2","MRC2_12427872");	$this->chanals= array(4,26,5,26,6,26,7,26);	 break;
case"81":$this->sensors = array("BTS2_VD0_1200302","ХВС","BTS2_VD1_1200302","ГВС","BTS2_VD2_1200302","ХВС2","BTS2_VD3_1200302","ГВС2","MRC2_12427866");	$this->chanals= array(0,27,1,27,2,27,3,27);	 break;
case"82":$this->sensors = array("BTS2_VD4_1200302","ХВС","BTS2_VD5_1200302","ГВС","0","ХВС2","0","ГВС2","MRC2_12427928");	$this->chanals= array(4,27,5,27);	 break;
case"83":$this->sensors = array("BTS2_VD6_1200302","ХВС","BTS2_VD7_1200302","ГВС","0","ХВС2","0","ГВС2","MRC2_12427909");	$this->chanals= array(6,27,7,27);	 break;
case"84":$this->sensors = array("BTS2_VD0_1200293","ХВС","BTS2_VD1_1200293","ГВС","0","ХВС2","0","ГВС2","MRC2_12427830");	$this->chanals= array(0,28,1,28);	 break;
case"85":$this->sensors = array("BTS2_VD2_1200293","ХВС","BTS2_VD3_1200293","ГВС","BTS2_VD4_1200293","ХВС2","BTS2_VD5_1200293","ГВС2","MRC2_10721861");	$this->chanals= array(2,28,3,28,4,28,5,28);	 break;
case"86":$this->sensors = array("BTS2_VD6_1200293","ХВС","BTS2_VD7_1200293","ГВС","0","ХВС2","0","ГВС2","MRC2_10721806");	$this->chanals= array(6,28,7,28);	 break;
case"87":$this->sensors = array("BTS2_VD0_1200254","ХВС","BTS2_VD1_1200254","ГВС","0","ХВС2","0","ГВС2","MRC2_10721874");	$this->chanals= array(0,29,1,29);	 break;
case"88":$this->sensors = array("BTS2_VD2_1200254","ХВС","BTS2_VD3_1200254","ГВС","0","ХВС2","0","ГВС2","MRC2_10721867");	$this->chanals= array(2,29,3,29);	 break;
case"89":$this->sensors = array("BTS2_VD4_1200254","ХВС","BTS2_VD5_1200254","ГВС","0","ХВС2","0","ГВС2","MRC2_10721866");	$this->chanals= array(4,29,5,29);	 break;
case"90":$this->sensors = array("BTS2_VD6_1200254","ХВС","BTS2_VD7_1200254","ГВС","0","ХВС2","0","ГВС2","MRC2_10721600");	$this->chanals= array(6,29,7,29);	 break;
case"91":$this->sensors = array("BTS2_VD0_1200248","ХВС","BTS2_VD1_1200248","ГВС","0","ХВС2","0","ГВС2","MRC2_10721513");	$this->chanals= array(0,30,1,30);	 break;
case"92":$this->sensors = array("BTS2_VD2_1200248","ХВС","BTS2_VD3_1200248","ГВС","0","ХВС2","0","ГВС2","MRC2_10722340");	$this->chanals= array(2,30,3,30);	 break;
case"93":$this->sensors = array("BTS2_VD4_1200248","ХВС","BTS2_VD5_1200248","ГВС","0","ХВС2","0","ГВС2","MRC2_10721453");	$this->chanals= array(4,30,5,30);	 break;
case"94":$this->sensors = array("BTS2_VD6_1200248","ХВС","BTS2_VD7_1200248","ГВС","0","ХВС2","0","ГВС2","MRC2_10722341");	$this->chanals= array(6,30,7,30);	 break;
case"95":$this->sensors = array("BTS2_VD0_1200213","ХВС","BTS2_VD1_1200213","ГВС","0","ХВС2","0","ГВС2","MRC2_10721705");	$this->chanals= array(0,31,1,31);	 break;
case"96":$this->sensors = array("BTS2_VD2_1200213","ХВС","BTS2_VD3_1200213","ГВС","0","ХВС2","0","ГВС2","MRC2_10722368");	$this->chanals= array(2,31,3,31);	 break;
case"97":$this->sensors = array("BTS2_VD4_1200213","ХВС","BTS2_VD5_1200213","ГВС","0","ХВС2","0","ГВС2","MRC2_10722378");	$this->chanals= array(4,31,5,31);	 break;
case"98":$this->sensors = array("BTS2_VD6_1200213","ХВС","BTS2_VD7_1200213","ГВС","0","ХВС2","0","ГВС2","MRC2_10722409");	$this->chanals= array(6,31,7,31);	 break;
case"99":$this->sensors = array("BTS2_VD0_1200231","ХВС","BTS2_VD1_1200231","ГВС","0","ХВС2","0","ГВС2","MRC2_10722423");	$this->chanals= array(0,32,1,32);	 break;
case"100":$this->sensors = array("BTS2_VD0_1200107","ХВС","BTS2_VD1_1200107","ГВС","0","ХВС2","0","ГВС2","MRC2_10722406");	$this->chanals= array(0,33,1,33);	 break;
case"101":$this->sensors = array("BTS2_VD2_1200107","ХВС","BTS2_VD3_1200107","ГВС","0","ХВС2","0","ГВС2","MRC2_10722391");	$this->chanals= array(2,33,3,33);	 break;
case"102":$this->sensors = array("BTS2_VD4_1200107","ХВС","BTS2_VD5_1200107","ГВС","0","ХВС2","0","ГВС2","MRC2_10722390");	$this->chanals= array(4,33,5,33);	 break;
case"103":$this->sensors = array("BTS2_VD6_1200107","ХВС","BTS2_VD7_1200107","ГВС","0","ХВС2","0","ГВС2","MRC2_10722389");	$this->chanals= array(6,33,7,33);	 break;
case"104":$this->sensors = array("BTS2_VD0_1200172","ХВС","BTS2_VD1_1200172","ГВС","0","ХВС2","0","ГВС2","MRC2_10722421");	$this->chanals= array(0,34,1,34);	 break;
case"105":$this->sensors = array("BTS2_VD2_1200172","ХВС","BTS2_VD3_1200172","ГВС","0","ХВС2","0","ГВС2","MRC2_10722413");	$this->chanals= array(2,34,3,34);	 break;
case"106":$this->sensors = array("BTS2_VD4_1200172","ХВС","BTS2_VD5_1200172","ГВС","0","ХВС2","0","ГВС2","MRC2_10722388");	$this->chanals= array(4,34,5,34);	 break;
case"107":$this->sensors = array("BTS2_VD6_1200172","ХВС","BTS2_VD7_1200172","ГВС","0","ХВС2","0","ГВС2","MRC2_10722424");	$this->chanals= array(6,34,7,34);	 break;
case"108":$this->sensors = array("BTS2_VD0_1200363","ХВС","BTS2_VD1_1200363","ГВС","0","ХВС2","0","ГВС2","MRC2_10722401");	$this->chanals= array(0,35,1,35);	 break;
case"109":$this->sensors = array("BTS2_VD2_1200363","ХВС","BTS2_VD3_1200363","ГВС","0","ХВС2","0","ГВС2","MRC2_12427811");	$this->chanals= array(2,35,3,35);	 break;
case"110":$this->sensors = array("BTS2_VD4_1200363","ХВС","BTS2_VD5_1200363","ГВС","0","ХВС2","0","ГВС2","MRC2_12427715");	$this->chanals= array(4,35,5,35);	 break;
case"111":$this->sensors = array("BTS2_VD6_1200363","ХВС","BTS2_VD7_1200363","ГВС","0","ХВС2","0","ГВС2","MRC2_12427810");	$this->chanals= array(6,35,7,35);	 break;
case"112":$this->sensors = array("BTS2_VD0_1200308","ХВС","BTS2_VD1_1200308","ГВС","0","ХВС2","0","ГВС2","MRC2_12427671");	$this->chanals= array(0,36,1,36);	 break;
case"113":$this->sensors = array("BTS2_VD2_1200308","ХВС","BTS2_VD3_1200308","ГВС","0","ХВС2","0","ГВС2","MRC2_12427792");	$this->chanals= array(2,36,3,36);	 break;
case"114":$this->sensors = array("BTS2_VD4_1200308","ХВС","BTS2_VD5_1200308","ГВС","0","ХВС2","0","ГВС2","MRC2_12427953");	$this->chanals= array(4,36,5,36);	 break;
case"115":$this->sensors = array("BTS2_VD6_1200308","ХВС","BTS2_VD7_1200308","ГВС","0","ХВС2","0","ГВС2","MRC2_12427926");	$this->chanals= array(6,36,7,36);	 break;
case"116":$this->sensors = array("BTS2_VD0_1200358","ХВС","BTS2_VD1_1200358","ГВС","0","ХВС2","0","ГВС2","MRC2_12427931");	$this->chanals= array(0,37,1,37);	 break;
case"117":$this->sensors = array("BTS2_VD2_1200358","ХВС","BTS2_VD3_1200358","ГВС","0","ХВС2","0","ГВС2","MRC2_12427803");	$this->chanals= array(2,37,3,37);	 break;
case"118":$this->sensors = array("BTS2_VD4_1200358","ХВС","BTS2_VD5_1200358","ГВС","0","ХВС2","0","ГВС2","MRC2_12427936");	$this->chanals= array(4,37,5,37);	 break;
case"119":$this->sensors = array("BTS2_VD6_1200358","ХВС","BTS2_VD7_1200358","ГВС","0","ХВС2","0","ГВС2","MRC2_12427789");	$this->chanals= array(6,37,7,37);	 break;
case"120":$this->sensors = array("BTS2_VD0_1200331","ХВС","BTS2_VD1_1200331","ГВС","0","ХВС2","0","ГВС2","MRC2_12427809");	$this->chanals= array(0,38,1,38);	 break;
case"121":$this->sensors = array("BTS2_VD0_1200083","ХВС","BTS2_VD1_1200083","ГВС","BTS2_VD2_1200083","ХВС2","BTS2_VD3_1200083","ГВС2","MRC2_10722327");	$this->chanals= array(0,39,1,39,2,39,3,39);	 break;
case"122":$this->sensors = array("BTS2_VD4_1200083","ХВС","BTS2_VD5_1200083","ГВС","0","ХВС2","0","ГВС2","MRC2_10722397");	$this->chanals= array(4,39,5,39);	 break;
case"123":$this->sensors = array("BTS2_VD6_1200083","ХВС","BTS2_VD7_1200083","ГВС","0","ХВС2","0","ГВС2","MRC2_10722333");	$this->chanals= array(6,39,7,39);	 break;
case"124":$this->sensors = array("BTS2_VD0_1200092","ХВС","BTS2_VD1_1200092","ГВС","0","ХВС2","0","ГВС2","MRC2_10722400");	$this->chanals= array(0,40,1,40);	 break;
case"125":$this->sensors = array("BTS2_VD2_1200092","ХВС","BTS2_VD3_1200092","ГВС","BTS2_VD4_1200092","ХВС2","BTS2_VD5_1200092","ГВС2","MRC2_10722329");	$this->chanals= array(2,40,3,40,4,40,5,40);	 break;
case"126":$this->sensors = array("BTS2_VD6_1200092","ХВС","BTS2_VD7_1200092","ГВС","BTS2_VD0_1200180","ХВС2","BTS2_VD1_1200180","ГВС2","MRC2_10722334");	$this->chanals= array(6,40,7,40,0,41,1,41);	 break;
case"127":$this->sensors = array("BTS2_VD2_1200180","ХВС","BTS2_VD3_1200180","ГВС","0","ХВС2","0","ГВС2","MRC2_10722375");	$this->chanals= array(2,41,3,41);	 break;
case"128":$this->sensors = array("BTS2_VD4_1200180","ХВС","BTS2_VD5_1200180","ГВС","0","ХВС2","0","ГВС2","MRC2_10722365");	$this->chanals= array(4,41,5,41);	 break;
case"129":$this->sensors = array("BTS2_VD6_1200180","ХВС","BTS2_VD7_1200180","ГВС","0","ХВС2","0","ГВС2","MRC2_10722326");	$this->chanals= array(6,41,7,41);	 break;
case"130":$this->sensors = array("BTS2_VD0_1200373","ХВС","BTS2_VD1_1200373","ГВС","BTS2_VD2_1200373","ХВС2","BTS2_VD3_1200373","ГВС2","MRC2_10722382");	$this->chanals= array(0,42,1,42,2,42,3,42);	 break;
case"131":$this->sensors = array("BTS2_VD4_1200373","ХВС","BTS2_VD5_1200373","ГВС","BTS2_VD6_1200373","ХВС2","BTS2_VD7_1200373","ГВС2","MRC2_10722377");	$this->chanals= array(4,42,5,42,6,42,7,42);	 break;
case"132":$this->sensors = array("BTS2_VD0_1200220","ХВС","BTS2_VD1_1200220","ГВС","0","ХВС2","0","ГВС2","MRC2_10722398");	$this->chanals= array(0,43,1,43);	 break;
case"133":$this->sensors = array("BTS2_VD2_1200220","ХВС","BTS2_VD3_1200220","ГВС","0","ХВС2","0","ГВС2","MRC2_10722344");	$this->chanals= array(2,43,3,43);	 break;
case"134":$this->sensors = array("BTS2_VD4_1200220","ХВС","BTS2_VD5_1200220","ГВС","0","ХВС2","0","ГВС2","MRC2_10178465");	$this->chanals= array(4,43,5,43);	 break;
case"135":$this->sensors = array("BTS2_VD6_1200220","ХВС","BTS2_VD7_1200220","ГВС","BTS2_VD0_1200145","ХВС2","BTS2_VD1_1200145","ГВС2","MRC2_10722339");	$this->chanals= array(6,43,7,43,0,44,1,44);	 break;
case"136":$this->sensors = array("BTS2_VD2_1200145","ХВС","BTS2_VD3_1200145","ГВС","BTS2_VD4_1200145","ХВС2","BTS2_VD5_1200145","ГВС2","MRC2_10722343");	$this->chanals= array(2,44,3,44,4,44,5,44);	 break;
case"137":$this->sensors = array("BTS2_VD6_1200145","ХВС","BTS2_VD7_1200145","ГВС","0","ХВС2","0","ГВС2","MRC2_10722336");	$this->chanals= array(6,44,7,44);	 break;
case"138":$this->sensors = array("BTS2_VD0_1200128","ХВС","BTS2_VD1_1200128","ГВС","0","ХВС2","0","ГВС2","MRC2_10722345");	$this->chanals= array(0,45,1,45);	 break;
case"139":$this->sensors = array("BTS2_VD2_1200128","ХВС","BTS2_VD3_1200128","ГВС","0","ХВС2","0","ГВС2","MRC2_10722335");	$this->chanals= array(2,45,3,45);	 break;
case"140":$this->sensors = array("BTS2_VD4_1200128","ХВС","BTS2_VD5_1200128","ГВС","BTS2_VD6_1200128","ХВС2","BTS2_VD7_1200128","ГВС2","MRC2_10722387");	$this->chanals= array(4,45,5,45,6,45,7,45);	 break;
case"141":$this->sensors = array("BTS2_VD0_1200281","ХВС","BTS2_VD1_1200281","ГВС","0","ХВС2","0","ГВС2","MRC2_10722385");	$this->chanals= array(0,46,1,46);	 break;
case"142":$this->sensors = array("BTS2_VD2_1200281","ХВС","BTS2_VD3_1200281","ГВС","0","ХВС2","0","ГВС2","MRC2_10722354");	$this->chanals= array(2,46,3,46);	 break;
case"143":$this->sensors = array("BTS2_VD4_1200281","ХВС","BTS2_VD5_1200281","ГВС","0","ХВС2","0","ГВС2","MRC2_10721550");	$this->chanals= array(4,46,5,46);	 break;
case"144":$this->sensors = array("BTS2_VD6_1200281","ХВС","BTS2_VD7_1200281","ГВС","0","ХВС2","0","ГВС2","MRC2_10722380");	$this->chanals= array(6,46,7,46);	 break;
case"145":$this->sensors = array("BTS2_VD0_1200286","ХВС","BTS2_VD1_1200286","ГВС","0","ХВС2","0","ГВС2","MRC2_12427676");	$this->chanals= array(0,47,1,47);	 break;
case"146":$this->sensors = array("BTS2_VD2_1200286","ХВС","BTS2_VD3_1200286","ГВС","0","ХВС2","0","ГВС2","MRC2_12427654");	$this->chanals= array(2,47,3,47);	 break;
case"147":$this->sensors = array("BTS2_VD2_1200359","ХВС","BTS2_VD4_1200286","ГВС","0","ХВС2","0","ГВС2","MRC2_12427668");	$this->chanals= array(2,51,4,47);	 break;
case"148":$this->sensors = array("BTS2_VD6_1200286","ХВС","BTS2_VD7_1200286","ГВС","0","ХВС2","0","ГВС2","MRC2_12427677");	$this->chanals= array(6,47,7,47);	 break;
case"149":$this->sensors = array("BTS2_VD0_9900038","ХВС","BTS2_VD1_9900038","ГВС","0","ХВС2","0","ГВС2","MRC2_12427683");	$this->chanals= array(0,48,1,48);	 break;
case"150":$this->sensors = array("BTS2_VD2_9900038","ХВС","BTS2_VD3_9900038","ГВС","0","ХВС2","0","ГВС2","MRC2_12427701");	$this->chanals= array(2,48,3,48);	 break;
case"151":$this->sensors = array("BTS2_VD4_9900038","ХВС","BTS2_VD5_9900038","ГВС","0","ХВС2","0","ГВС2","MRC2_12427659");	$this->chanals= array(4,48,5,48);	 break;
case"152":$this->sensors = array("BTS2_VD6_9900038","ХВС","BTS2_VD7_9900038","ГВС","0","ХВС2","0","ГВС2","MRC2_12427697");	$this->chanals= array(6,48,7,48);	 break;
case"153":$this->sensors = array("BTS2_VD0_1200374","ХВС","BTS2_VD1_1200374","ГВС","0","ХВС2","0","ГВС2","MRC2_12427863");	$this->chanals= array(0,49,1,49);	 break;
case"154":$this->sensors = array("BTS2_VD2_1200374","ХВС","BTS2_VD3_1200374","ГВС","0","ХВС2","0","ГВС2","MRC2_12427658");	$this->chanals= array(2,49,3,49);	 break;
case"155":$this->sensors = array("BTS2_VD4_1200374","ХВС","BTS2_VD5_1200374","ГВС","0","ХВС2","0","ГВС2","MRC2_12427854");	$this->chanals= array(4,49,5,49);	 break;
case"156":$this->sensors = array("BTS2_VD6_1200374","ХВС","BTS2_VD7_1200374","ГВС","0","ХВС2","0","ГВС2","MRC2_12427657");	$this->chanals= array(6,49,7,49);	 break;
case"157":$this->sensors = array("BTS2_VD0_1200329","ХВС","BTS2_VD1_1200329","ГВС","0","ХВС2","0","ГВС2","MRC2_10722362");	$this->chanals= array(0,50,1,50);	 break;
case"158":$this->sensors = array("BTS2_VD2_1200329","ХВС","BTS2_VD3_1200329","ГВС","0","ХВС2","0","ГВС2","MRC2_10722337");	$this->chanals= array(2,50,3,50);	 break;
case"159":$this->sensors = array("BTS2_VD4_1200329","ХВС","BTS2_VD5_1200329","ГВС","0","ХВС2","0","ГВС2","MRC2_10722349");	$this->chanals= array(4,50,5,50);	 break;
case"160":$this->sensors = array("BTS2_VD6_1200329","ХВС","BTS2_VD7_1200329","ГВС","0","ХВС2","0","ГВС2","MRC2_10722352");	$this->chanals= array(6,50,7,50);	 break;
case"161":$this->sensors = array("BTS2_VD0_1200359","ХВС","BTS2_VD1_1200359","ГВС","0","ХВС2","0","ГВС2","MRC2_10722386");	$this->chanals= array(0,51,1,51);	 break;
case"162":$this->sensors = array("BTS2_VD0_1200380","ХВС","BTS2_VD1_1200380","ГВС","0","ХВС2","0","ГВС2","MRC2_10722351");	$this->chanals= array(0,52,1,52);	 break;
case"163":$this->sensors = array("BTS2_VD2_1200380","ХВС","BTS2_VD3_1200380","ГВС","0","ХВС2","0","ГВС2","MRC2_10722350");	$this->chanals= array(2,52,3,52);	 break;
case"164":$this->sensors = array("BTS2_VD4_1200380","ХВС","BTS2_VD5_1200380","ГВС","0","ХВС2","0","ГВС2","MRC2_10722383");	$this->chanals= array(4,52,5,52);	 break;
case"165":$this->sensors = array("BTS2_VD6_1200380","ХВС","BTS2_VD7_1200380","ГВС","0","ХВС2","0","ГВС2","MRC2_10722331");	$this->chanals= array(6,52,7,52);	 break;
case"166":$this->sensors = array("BTS2_VD0_1200229","ХВС","BTS2_VD1_1200229","ГВС","0","ХВС2","0","ГВС2","MRC2_10722353");	$this->chanals= array(0,53,1,53);	 break;
case"167":$this->sensors = array("BTS2_VD2_1200229","ХВС","BTS2_VD3_1200229","ГВС","0","ХВС2","0","ГВС2","MRC2_10722332");	$this->chanals= array(2,53,3,53);	 break;
case"168":$this->sensors = array("BTS2_VD4_1200229","ХВС","BTS2_VD5_1200229","ГВС","0","ХВС2","0","ГВС2","MRC2_10722358");	$this->chanals= array(4,53,5,53);	 break;
case"169":$this->sensors = array("BTS2_VD6_1200229","ХВС","BTS2_VD7_1200229","ГВС","0","ХВС2","0","ГВС2","MRC2_10722348");	$this->chanals= array(6,53,7,53);	 break;
case"170":$this->sensors = array("BTS2_VD0_1200318","ХВС","BTS2_VD1_1200318","ГВС","0","ХВС2","0","ГВС2","MRC2_10722376");	$this->chanals= array(0,54,1,54);	 break;
case"171":$this->sensors = array("BTS2_VD2_1200318","ХВС","BTS2_VD3_1200318","ГВС","0","ХВС2","0","ГВС2","MRC2_10722346");	$this->chanals= array(2,54,3,54);	 break;
case"172":$this->sensors = array("BTS2_VD4_1200318","ХВС","BTS2_VD5_1200318","ГВС","0","ХВС2","0","ГВС2","MRC2_10722342");	$this->chanals= array(4,54,5,54);	 break;
case"173":$this->sensors = array("BTS2_VD6_1200318","ХВС","BTS2_VD7_1200318","ГВС","0","ХВС2","0","ГВС2","MRC2_10721452");	$this->chanals= array(6,54,7,54);	 break;
case"174":$this->sensors = array("BTS2_VD0_1200292","ХВС","BTS2_VD1_1200292","ГВС","0","ХВС2","0","ГВС2","MRC2_10722338");	$this->chanals= array(0,55,1,55);	 break;
case"175":$this->sensors = array("BTS2_VD2_1200292","ХВС","BTS2_VD3_1200292","ГВС","0","ХВС2","0","ГВС2","MRC2_10722379");	$this->chanals= array(2,55,3,55);	 break;
case"176":$this->sensors = array("BTS2_VD4_1200292","ХВС","BTS2_VD5_1200292","ГВС","0","ХВС2","0","ГВС2","MRC2_10722399");	$this->chanals= array(4,55,5,55);	 break;
case"177":$this->sensors = array("BTS2_VD6_1200292","ХВС","BTS2_VD7_1200292","ГВС","0","ХВС2","0","ГВС2","MRC2_10722374");	$this->chanals= array(6,55,7,55);	 break;
case"178":$this->sensors = array("BTS2_VD0_1200315","ХВС","BTS2_VD1_1200315","ГВС","0","ХВС2","0","ГВС2","MRC2_10722422");	$this->chanals= array(0,56,1,56);	 break;
case"179":$this->sensors = array("BTS2_VD2_1200315","ХВС","BTS2_VD3_1200315","ГВС","0","ХВС2","0","ГВС2","MRC2_10722325");	$this->chanals= array(2,56,3,56);	 break;
case"180":$this->sensors = array("BTS2_VD4_1200315","ХВС","BTS2_VD5_1200315","ГВС","0","ХВС2","0","ГВС2","MRC2_16281111");	$this->chanals= array(4,56,5,56);	 break;
case"181":$this->sensors = array("BTS2_VD6_1200315","ХВС","BTS2_VD7_1200315","ГВС","0","ХВС2","0","ГВС2","MRC2_12427788");	$this->chanals= array(6,56,7,56);	 break;
case"182":$this->sensors = array("BTS2_VD0_1200298","ХВС","BTS2_VD1_1200298","ГВС","0","ХВС2","0","ГВС2","MRC2_10178456");	$this->chanals= array(0,57,1,57);	 break;
		
case"Все": break;		
default: require 'alert_flat.js'; die;	
}		
?>		
