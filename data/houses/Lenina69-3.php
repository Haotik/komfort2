<?php		
//$this->flat = $_POST['flat']		
$this->ipAddres="192.168.1.215";

if ($this->flat>0 && $this->flat<21){$this->rsNum = "25";}
elseif (($this->flat>20 && $this->flat<41)) {$this->rsNum = "26";}
elseif (($this->flat>40 && $this->flat<56)) {$this->rsNum = "27";}
elseif (($this->flat>55 && $this->flat<71)) {$this->rsNum = "28";}
elseif (($this->flat>70 && $this->flat<91)) {$this->rsNum = "29";}
		
switch ($this->flat) {		
case"1":$this->sensors = array("BTS2_VD0_1200137","ХВС","BTS2_VD1_1200137","ГВС","0","ХВС2","0","ГВС2","MRC2_9765370");	$this->chanals= array(0,1,1,1);	 break;
case"2":$this->sensors = array("BTS2_VD2_1200137","ХВС","BTS2_VD3_1200137","ГВС","0","ХВС2","0","ГВС2","MRC2_9765385");	$this->chanals= array(2,1,3,1);	 break;
case"3":$this->sensors = array("BTS2_VD4_1200137","ХВС","BTS2_VD5_1200137","ГВС","0","ХВС2","0","ГВС2","MRC2_9765367");	$this->chanals= array(4,1,5,1);	 break;
case"4":$this->sensors = array("BTS2_VD6_1200137","ХВС","BTS2_VD7_1200137","ГВС","0","ХВС2","0","ГВС2","MRC2_9765389");	$this->chanals= array(6,1,7,1);	 break;
case"5":$this->sensors = array("BTS2_VD0_1200114","ХВС","BTS2_VD1_1200114","ГВС","0","ХВС2","0","ГВС2","MRC2_9765529");	$this->chanals= array(0,2,1,2);	 break;
case"6":$this->sensors = array("BTS2_VD2_1200114","ХВС","BTS2_VD3_1200114","ГВС","0","ХВС2","0","ГВС2","MRC2_9765365");	$this->chanals= array(2,2,3,2);	 break;
case"7":$this->sensors = array("BTS2_VD4_1200114","ХВС","BTS2_VD5_1200114","ГВС","0","ХВС2","0","ГВС2","MRC2_9765382");	$this->chanals= array(4,2,5,2);	 break;
case"8":$this->sensors = array("BTS2_VD6_1200114","ХВС","BTS2_VD7_1200114","ГВС","0","ХВС2","0","ГВС2","MRC2_9765384");	$this->chanals= array(6,2,7,2);	 break;
case"9":$this->sensors = array("BTS2_VD0_1200090","ХВС","BTS2_VD1_1200090","ГВС","0","ХВС2","0","ГВС2","MRC2_9765369");	$this->chanals= array(0,3,1,3);	 break;
case"10":$this->sensors = array("BTS2_VD2_1200090","ХВС","BTS2_VD3_1200090","ГВС","0","ХВС2","0","ГВС2","MRC2_9765374");	$this->chanals= array(2,3,3,3);	 break;
case"11":$this->sensors = array("BTS2_VD4_1200090","ХВС","BTS2_VD5_1200090","ГВС","0","ХВС2","0","ГВС2","MRC2_9765398");	$this->chanals= array(4,3,5,3);	 break;
case"12":$this->sensors = array("BTS2_VD6_1200090","ХВС","BTS2_VD7_1200090","ГВС","0","ХВС2","0","ГВС2","MRC2_9765354");	$this->chanals= array(6,3,7,3);	 break;
case"13":$this->sensors = array("BTS2_VD0_1200085","ХВС","BTS2_VD1_1200085","ГВС","0","ХВС2","0","ГВС2","MRC2_9766261");	$this->chanals= array(0,4,1,4);	 break;
case"14":$this->sensors = array("BTS2_VD2_1200085","ХВС","BTS2_VD3_1200085","ГВС","0","ХВС2","0","ГВС2","MRC2_9766600");	$this->chanals= array(2,4,3,4);	 break;
case"15":$this->sensors = array("BTS2_VD4_1200085","ХВС","BTS2_VD5_1200085","ГВС","0","ХВС2","0","ГВС2","MRC2_9766480");	$this->chanals= array(4,4,5,4);	 break;
case"16":$this->sensors = array("BTS2_VD6_1200085","ХВС","BTS2_VD7_1200085","ГВС","0","ХВС2","0","ГВС2","MRC2_9766327");	$this->chanals= array(6,4,7,4);	 break;
case"17":$this->sensors = array("BTS2_VD0_1200103","ХВС","BTS2_VD1_1200103","ГВС","0","ХВС2","0","ГВС2","MRC2_9766290");	$this->chanals= array(0,5,1,5);	 break;
case"18":$this->sensors = array("BTS2_VD2_1200103","ХВС","BTS2_VD3_1200103","ГВС","0","ХВС2","0","ГВС2","MRC2_9766373");	$this->chanals= array(2,5,3,5);	 break;
case"19":$this->sensors = array("BTS2_VD4_1200103","ХВС","BTS2_VD5_1200103","ГВС","0","ХВС2","0","ГВС2","MRC2_9766264");	$this->chanals= array(4,5,5,5);	 break;
case"20":$this->sensors = array("BTS2_VD6_1200103","ХВС","BTS2_VD7_1200103","ГВС","0","ХВС2","0","ГВС2","MRC2_9766448");	$this->chanals= array(6,5,7,5);	 break;
case"21":$this->sensors = array("BTS2_VD0_1200113","ХВС","BTS2_VD1_1200113","ГВС","0","ХВС2","0","ГВС2","MRC2_9766276");	$this->chanals= array(0,6,1,6);	 break;
case"22":$this->sensors = array("BTS2_VD2_1200113","ХВС","BTS2_VD3_1200113","ГВС","0","ХВС2","0","ГВС2","MRC2_9766428");	$this->chanals= array(2,6,3,6);	 break;
case"23":$this->sensors = array("BTS2_VD4_1200113","ХВС","BTS2_VD5_1200113","ГВС","0","ХВС2","0","ГВС2","MRC2_9766259");	$this->chanals= array(4,6,5,6);	 break;
case"24":$this->sensors = array("BTS2_VD6_1200113","ХВС","BTS2_VD7_1200113","ГВС","0","ХВС2","0","ГВС2","MRC2_9766423");	$this->chanals= array(6,6,7,6);	 break;
case"25":$this->sensors = array("BTS2_VD0_1200169","ХВС","BTS2_VD1_1200169","ГВС","0","ХВС2","0","ГВС2","MRC2_9765500");	$this->chanals= array(0,7,1,7);	 break;
case"26":$this->sensors = array("BTS2_VD2_1200169","ХВС","BTS2_VD3_1200169","ГВС","0","ХВС2","0","ГВС2","MRC2_9765461");	$this->chanals= array(2,7,3,7);	 break;
case"27":$this->sensors = array("BTS2_VD4_1200169","ХВС","BTS2_VD5_1200169","ГВС","0","ХВС2","0","ГВС2","MRC2_9765445");	$this->chanals= array(4,7,5,7);	 break;
case"28":$this->sensors = array("BTS2_VD6_1200169","ХВС","BTS2_VD7_1200169","ГВС","0","ХВС2","0","ГВС2","MRC2_9765488");	$this->chanals= array(6,7,7,7);	 break;
case"29":$this->sensors = array("BTS2_VD0_1200094","ХВС","BTS2_VD1_1200094","ГВС","0","ХВС2","0","ГВС2","MRC2_9765458");	$this->chanals= array(0,8,1,8);	 break;
case"30":$this->sensors = array("BTS2_VD2_1200094","ХВС","BTS2_VD3_1200094","ГВС","0","ХВС2","0","ГВС2","MRC2_9765481");	$this->chanals= array(2,8,3,8);	 break;
case"31":$this->sensors = array("BTS2_VD4_1200094","ХВС","BTS2_VD5_1200094","ГВС","0","ХВС2","0","ГВС2","MRC2_9765661");	$this->chanals= array(4,8,5,8);	 break;
case"32":$this->sensors = array("BTS2_VD6_1200094","ХВС","BTS2_VD7_1200094","ГВС","0","ХВС2","0","ГВС2","MRC2_9765477");	$this->chanals= array(6,8,7,8);	 break;
case"33":$this->sensors = array("BTS2_VD0_1200089","ХВС","BTS2_VD1_1200089","ГВС","0","ХВС2","0","ГВС2","MRC2_9765482");	$this->chanals= array(0,9,1,9);	 break;
case"34":$this->sensors = array("BTS2_VD2_1200089","ХВС","BTS2_VD3_1200089","ГВС","0","ХВС2","0","ГВС2","MRC2_9765457");	$this->chanals= array(2,9,3,9);	 break;
case"35":$this->sensors = array("BTS2_VD4_1200089","ХВС","BTS2_VD5_1200089","ГВС","0","ХВС2","0","ГВС2","MRC2_9765460");	$this->chanals= array(4,9,5,9);	 break;
case"36":$this->sensors = array("BTS2_VD6_1200089","ХВС","BTS2_VD7_1200089","ГВС","0","ХВС2","0","ГВС2","MRC2_9765357");	$this->chanals= array(6,9,7,9);	 break;
case"37":$this->sensors = array("BTS2_VD0_1200115","ХВС","BTS2_VD1_1200115","ГВС","0","ХВС2","0","ГВС2","MRC2_9765563");	$this->chanals= array(0,10,1,10);	 break;
case"38":$this->sensors = array("BTS2_VD2_1200115","ХВС","BTS2_VD3_1200115","ГВС","0","ХВС2","0","ГВС2","MRC2_9765694");	$this->chanals= array(2,10,3,10);	 break;
case"39":$this->sensors = array("BTS2_VD4_1200115","ХВС","BTS2_VD5_1200115","ГВС","0","ХВС2","0","ГВС2","MRC2_9765484");	$this->chanals= array(4,10,5,10);	 break;
case"40":$this->sensors = array("BTS2_VD6_1200115","ХВС","BTS2_VD7_1200115","ГВС","0","ХВС2","0","ГВС2","MRC2_9765552");	$this->chanals= array(6,10,7,10);	 break;
case"41":$this->sensors = array("BTS2_VD0_1200111","ХВС","BTS2_VD1_1200111","ГВС","0","ХВС2","0","ГВС2","MRC2_9765426");	$this->chanals= array(0,11,1,11);	 break;
case"42":$this->sensors = array("BTS2_VD2_1200111","ХВС","BTS2_VD3_1200111","ГВС","0","ХВС2","0","ГВС2","MRC2_9765675");	$this->chanals= array(2,11,3,11);	 break;
case"43":$this->sensors = array("BTS2_VD4_1200111","ХВС","BTS2_VD5_1200111","ГВС","0","ХВС2","0","ГВС2","MRC2_9765353");	$this->chanals= array(4,11,5,11);	 break;
case"44":$this->sensors = array("BTS2_VD6_1200111","ХВС","BTS2_VD7_1200111","ГВС","0","ХВС2","0","ГВС2","MRC2_9765632");	$this->chanals= array(6,11,7,11);	 break;
case"45":$this->sensors = array("BTS2_VD0_1200122","ХВС","BTS2_VD1_1200122","ГВС","0","ХВС2","0","ГВС2","MRC2_9765347");	$this->chanals= array(0,12,1,12);	 break;
case"46":$this->sensors = array("BTS2_VD2_1200122","ХВС","BTS2_VD3_1200122","ГВС","0","ХВС2","0","ГВС2","MRC2_9765662");	$this->chanals= array(2,12,3,12);	 break;
case"47":$this->sensors = array("BTS2_VD4_1200122","ХВС","BTS2_VD5_1200122","ГВС","0","ХВС2","0","ГВС2","MRC2_9765453");	$this->chanals= array(4,12,5,12);	 break;
case"48":$this->sensors = array("BTS2_VD6_1200122","ХВС","BTS2_VD7_1200122","ГВС","0","ХВС2","0","ГВС2","MRC2_9765352");	$this->chanals= array(6,12,7,12);	 break;
case"49":$this->sensors = array("BTS2_VD0_1200105","ХВС","BTS2_VD1_1200105","ГВС","0","ХВС2","0","ГВС2","MRC2_9765672");	$this->chanals= array(0,13,1,13);	 break;
case"50":$this->sensors = array("BTS2_VD2_1200105","ХВС","BTS2_VD3_1200105","ГВС","0","ХВС2","0","ГВС2","MRC2_9765693");	$this->chanals= array(2,13,3,13);	 break;
case"51":$this->sensors = array("BTS2_VD4_1200105","ХВС","BTS2_VD5_1200105","ГВС","0","ХВС2","0","ГВС2","MRC2_9765492");	$this->chanals= array(4,13,5,13);	 break;
case"52":$this->sensors = array("BTS2_VD6_1200105","ХВС","BTS2_VD7_1200105","ГВС","0","ХВС2","0","ГВС2","MRC2_9765676");	$this->chanals= array(6,13,7,13);	 break;
case"53":$this->sensors = array("BTS2_VD0_1200171","ХВС","BTS2_VD1_1200171","ГВС","0","ХВС2","0","ГВС2","MRC2_9765480");	$this->chanals= array(0,14,1,14);	 break;
case"54":$this->sensors = array("BTS2_VD2_1200171","ХВС","BTS2_VD3_1200171","ГВС","0","ХВС2","0","ГВС2","MRC2_9765512");	$this->chanals= array(2,14,3,14);	 break;
case"55":$this->sensors = array("BTS2_VD4_1200171","ХВС","BTS2_VD5_1200171","ГВС","0","ХВС2","0","ГВС2","MRC2_9765487");	$this->chanals= array(4,14,5,14);	 break;
case"56":$this->sensors = array("BTS2_VD0_1200055","ХВС","BTS2_VD1_1200055","ГВС","0","ХВС2","0","ГВС2","MRC2_9765591");	$this->chanals= array(0,15,1,15);	 break;
case"57":$this->sensors = array("BTS2_VD2_1200055","ХВС","BTS2_VD3_1200055","ГВС","0","ХВС2","0","ГВС2","MRC2_9765670");	$this->chanals= array(2,15,3,15);	 break;
case"58":$this->sensors = array("BTS2_VD4_1200055","ХВС","BTS2_VD5_1200055","ГВС","0","ХВС2","0","ГВС2","MRC2_9765463");	$this->chanals= array(4,15,5,15);	 break;
case"59":$this->sensors = array("BTS2_VD6_1200055","ХВС","BTS2_VD7_1200055","ГВС","0","ХВС2","0","ГВС2","MRC2_9765692");	$this->chanals= array(6,15,7,15);	 break;
case"60":$this->sensors = array("BTS2_VD0_1200020","ХВС","BTS2_VD1_1200020","ГВС","0","ХВС2","0","ГВС2","MRC2_9765592");	$this->chanals= array(0,16,1,16);	 break;
case"61":$this->sensors = array("BTS2_VD2_1200020","ХВС","BTS2_VD3_1200020","ГВС","0","ХВС2","0","ГВС2","MRC2_9765678");	$this->chanals= array(2,16,3,16);	 break;
case"62":$this->sensors = array("BTS2_VD4_1200020","ХВС","BTS2_VD5_1200020","ГВС","0","ХВС2","0","ГВС2","MRC2_9765690");	$this->chanals= array(4,16,5,16);	 break;
case"63":$this->sensors = array("BTS2_VD6_1200020","ХВС","BTS2_VD7_1200020","ГВС","0","ХВС2","0","ГВС2","MRC2_9765383");	$this->chanals= array(6,16,7,16);	 break;
case"64":$this->sensors = array("BTS2_VD0_1200102","ХВС","BTS2_VD1_1200102","ГВС","0","ХВС2","0","ГВС2","MRC2_9765583");	$this->chanals= array(0,17,1,17);	 break;
case"65":$this->sensors = array("BTS2_VD2_1200102","ХВС","BTS2_VD3_1200102","ГВС","0","ХВС2","0","ГВС2","MRC2_9765791");	$this->chanals= array(2,17,3,17);	 break;
case"66":$this->sensors = array("BTS2_VD4_1200102","ХВС","BTS2_VD5_1200102","ГВС","0","ХВС2","0","ГВС2","MRC2_9765451");	$this->chanals= array(4,17,5,17);	 break;
case"67":$this->sensors = array("BTS2_VD6_1200102","ХВС","BTS2_VD7_1200102","ГВС","0","ХВС2","0","ГВС2","MRC2_9765350");	$this->chanals= array(6,17,7,17);	 break;
case"68":$this->sensors = array("BTS2_VD0_1200008","ХВС","BTS2_VD1_1200008","ГВС","0","ХВС2","0","ГВС2","MRC2_9765346");	$this->chanals= array(0,18,1,18);	 break;
case"69":$this->sensors = array("BTS2_VD2_1200008","ХВС","BTS2_VD3_1200008","ГВС","0","ХВС2","0","ГВС2","MRC2_9765653");	$this->chanals= array(2,18,3,18);	 break;
case"70":$this->sensors = array("BTS2_VD4_1200008","ХВС","BTS2_VD5_1200008","ГВС","0","ХВС2","0","ГВС2","MRC2_9765794");	$this->chanals= array(4,18,5,18);	 break;
case"71":$this->sensors = array("BTS2_VD0_1200045","ХВС","BTS2_VD1_1200045","ГВС","0","ХВС2","0","ГВС2","MRC2_9765515");	$this->chanals= array(0,19,1,19);	 break;
case"72":$this->sensors = array("BTS2_VD2_1200045","ХВС","BTS2_VD3_1200045","ГВС","0","ХВС2","0","ГВС2","MRC2_9765456");	$this->chanals= array(2,19,3,19);	 break;
case"73":$this->sensors = array("BTS2_VD4_1200045","ХВС","BTS2_VD5_1200045","ГВС","0","ХВС2","0","ГВС2","MRC2_9766349");	$this->chanals= array(4,19,5,19);	 break;
case"74":$this->sensors = array("BTS2_VD6_1200045","ХВС","BTS2_VD7_1200045","ГВС","0","ХВС2","0","ГВС2","MRC2_9766340");	$this->chanals= array(6,19,7,19);	 break;
case"75":$this->sensors = array("BTS2_VD0_1200033","ХВС","BTS2_VD1_1200033","ГВС","0","ХВС2","0","ГВС2","MRC2_9766612");	$this->chanals= array(0,20,1,20);	 break;
case"76":$this->sensors = array("BTS2_VD2_1200033","ХВС","BTS2_VD3_1200033","ГВС","0","ХВС2","0","ГВС2","MRC2_9765430");	$this->chanals= array(2,20,3,20);	 break;
case"77":$this->sensors = array("BTS2_VD4_1200033","ХВС","BTS2_VD5_1200033","ГВС","0","ХВС2","0","ГВС2","MRC2_9766344");	$this->chanals= array(4,20,5,20);	 break;
case"78":$this->sensors = array("BTS2_VD6_1200033","ХВС","BTS2_VD7_1200033","ГВС","0","ХВС2","0","ГВС2","MRC2_9766351");	$this->chanals= array(6,20,7,20);	 break;
case"79":$this->sensors = array("BTS2_VD0_1200075","ХВС","BTS2_VD1_1200075","ГВС","0","ХВС2","0","ГВС2","MRC2_9766346");	$this->chanals= array(0,21,1,21);	 break;
case"80":$this->sensors = array("BTS2_VD2_1200075","ХВС","BTS2_VD3_1200075","ГВС","0","ХВС2","0","ГВС2","MRC2_9766352");	$this->chanals= array(2,21,3,21);	 break;
case"81":$this->sensors = array("BTS2_VD4_1200075","ХВС","BTS2_VD5_1200075","ГВС","0","ХВС2","0","ГВС2","MRC2_9766355");	$this->chanals= array(4,21,5,21);	 break;
case"82":$this->sensors = array("BTS2_VD6_1200075","ХВС","BTS2_VD7_1200075","ГВС","0","ХВС2","0","ГВС2","MRC2_9766603");	$this->chanals= array(6,21,7,21);	 break;
case"83":$this->sensors = array("BTS2_VD0_1200018","ХВС","BTS2_VD1_1200018","ГВС","0","ХВС2","0","ГВС2","MRC2_9766353");	$this->chanals= array(0,22,1,22);	 break;
case"84":$this->sensors = array("BTS2_VD2_1200018","ХВС","BTS2_VD3_1200018","ГВС","0","ХВС2","0","ГВС2","MRC2_9766348");	$this->chanals= array(2,22,3,22);	 break;
case"85":$this->sensors = array("BTS2_VD4_1200018","ХВС","BTS2_VD5_1200018","ГВС","0","ХВС2","0","ГВС2","MRC2_9766347");	$this->chanals= array(4,22,5,22);	 break;
case"86":$this->sensors = array("BTS2_VD6_1200018","ХВС","BTS2_VD7_1200018","ГВС","0","ХВС2","0","ГВС2","MRC2_9766356");	$this->chanals= array(6,22,7,22);	 break;
case"87":$this->sensors = array("BTS2_VD0_1200078","ХВС","BTS2_VD1_1200078","ГВС","0","ХВС2","0","ГВС2","MRC2_9765568");	$this->chanals= array(0,23,1,23);	 break;
case"88":$this->sensors = array("BTS2_VD2_1200078","ХВС","BTS2_VD3_1200078","ГВС","0","ХВС2","0","ГВС2","MRC2_9766342");	$this->chanals= array(2,23,3,23);	 break;
case"89":$this->sensors = array("BTS2_VD4_1200078","ХВС","BTS2_VD5_1200078","ГВС","0","ХВС2","0","ГВС2","MRC2_9766370");	$this->chanals= array(4,23,5,23);	 break;
case"90":$this->sensors = array("BTS2_VD6_1200078","ХВС","BTS2_VD7_1200078","ГВС","0","ХВС2","0","ГВС2","MRC2_9766651");	$this->chanals= array(6,23,7,23); 	 break;
		
case"Все": break;		
default: require 'alert_flat.js'; die;		
}		
?>		
