<?php		
//$this->flat = $_POST['flat']		
$this->ipAddres = "192.168.1.231";	

if ($this->flat>0 && $this->flat<21){$this->rsNum = "37";}
elseif (($this->flat>20 && $this->flat<41)) {$this->rsNum = "38";}
elseif (($this->flat>40 && $this->flat<56)) {$this->rsNum = "39";}
elseif (($this->flat>55 && $this->flat<71)) {$this->rsNum = "40";}
elseif (($this->flat>70 && $this->flat<91)) {$this->rsNum = "41";}
		
switch ($this->flat) {		
case"1":$this->sensors = array("BTS2_VD0_1000192","ХВС","BTS2_VD1_1000192","ГВС","0","ХВС2","0","ГВС2","MRC2_9760328");	$this->chanals= array(0,1,1,1);	 break;
case"2":$this->sensors = array("BTS2_VD3_1000192","ХВС","BTS2_VD4_1000192","ГВС","0","ХВС2","0","ГВС2","MRC2_9760151");	$this->chanals= array(3,1,4,1);	 break;
case"3":$this->sensors = array("BTS2_VD6_1000192","ХВС","BTS2_VD7_1000192","ГВС","0","ХВС2","0","ГВС2","MRC2_9760152");	$this->chanals= array(6,1,7,1);	 break;
case"4":$this->sensors = array("BTS2_VD1_1000124","ХВС","BTS2_VD2_1000124","ГВС","0","ХВС2","0","ГВС2","MRC2_9760321");	$this->chanals= array(1,2,2,2);	 break;
case"5":$this->sensors = array("BTS2_VD4_1000124","ХВС","BTS2_VD5_1000124","ГВС","0","ХВС2","0","ГВС2","MRC2_9760261");	$this->chanals= array(4,2,5,2);	 break;
case"6":$this->sensors = array("BTS2_VD7_1000124","ХВС","BTS2_VD0_1000121","ГВС","0","ХВС2","0","ГВС2","MRC2_9760283");	$this->chanals= array(7,2,0,3);	 break;
case"7":$this->sensors = array("BTS2_VD2_1000121","ХВС","BTS2_VD3_1000121","ГВС","0","ХВС2","0","ГВС2","MRC2_9760320");	$this->chanals= array(2,3,3,3);	 break;
case"8":$this->sensors = array("BTS2_VD5_1000121","ХВС","BTS2_VD6_1000121","ГВС","0","ХВС2","0","ГВС2","MRC2_9760160");	$this->chanals= array(5,3,6,3);	 break;
case"9":$this->sensors = array("BTS2_VD0_1000130","ХВС","BTS2_VD1_1000130","ГВС","0","ХВС2","0","ГВС2","MRC2_9760281");	$this->chanals= array(0,4,1,4);	 break;
case"10":$this->sensors = array("BTS2_VD3_1000130","ХВС","BTS2_VD4_1000130","ГВС","0","ХВС2","0","ГВС2","MRC2_9760256");	$this->chanals= array(3,4,4,4);	 break;
case"11":$this->sensors = array("BTS2_VD6_1000130","ХВС","BTS2_VD7_1000130","ГВС","0","ХВС2","0","ГВС2","MRC2_9760359");	$this->chanals= array(6,4,7,4);	 break;
case"12":$this->sensors = array("BTS2_VD1_1000120","ХВС","BTS2_VD2_1000120","ГВС","0","ХВС2","0","ГВС2","MRC2_9760363");	$this->chanals= array(1,5,2,5);	 break;
case"13":$this->sensors = array("BTS2_VD4_1000120","ХВС","BTS2_VD5_1000120","ГВС","0","ХВС2","0","ГВС2","MRC2_9760186");	$this->chanals= array(4,5,5,5);	 break;
case"14":$this->sensors = array("BTS2_VD7_1000120","ХВС","BTS2_VD0_1000136","ГВС","0","ХВС2","0","ГВС2","MRC2_9760119");	$this->chanals= array(7,5,0,6);	 break;
case"15":$this->sensors = array("BTS2_VD2_1000136","ХВС","BTS2_VD3_1000136","ГВС","0","ХВС2","0","ГВС2","MRC2_9760183");	$this->chanals= array(2,6,3,6);	 break;
case"16":$this->sensors = array("BTS2_VD5_1000136","ХВС","BTS2_VD6_1000136","ГВС","0","ХВС2","0","ГВС2","MRC2_9760260");	$this->chanals= array(5,6,6,6);	 break;
case"17":$this->sensors = array("BTS2_VD0_1000208","ХВС","BTS2_VD1_1000208","ГВС","0","ХВС2","0","ГВС2","MRC2_8277579");	$this->chanals= array(0,7,1,7);	 break;
case"18":$this->sensors = array("BTS2_VD3_1000208","ХВС","BTS2_VD4_1000208","ГВС","0","ХВС2","0","ГВС2","MRC2_8277450");	$this->chanals= array(3,7,4,7);	 break;
case"19":$this->sensors = array("BTS2_VD6_1000208","ХВС","BTS2_VD7_1000208","ГВС","0","ХВС2","0","ГВС2","MRC2_8277441");	$this->chanals= array(6,7,7,7);	 break;
case"20":$this->sensors = array("BTS2_VD1_1000138","ХВС","BTS2_VD2_1000138","ГВС","0","ХВС2","0","ГВС2","MRC2_8277523");	$this->chanals= array(1,8,2,8);	 break;
case"21":$this->sensors = array("BTS2_VD0_1000244","ХВС","BTS2_VD1_1000244","ГВС","0","ХВС2","0","ГВС2","MRC2_9760148");	$this->chanals= array(0,9,1,9);	 break;
case"22":$this->sensors = array("BTS2_VD3_1000244","ХВС","BTS2_VD4_1000244","ГВС","0","ХВС2","0","ГВС2","MRC2_9760180");	$this->chanals= array(3,9,4,9);	 break;
case"23":$this->sensors = array("BTS2_VD6_1000244","ХВС","BTS2_VD7_1000244","ГВС","0","ХВС2","0","ГВС2","MRC2_8277399");	$this->chanals= array(6,9,7,9);	 break;
case"24":$this->sensors = array("BTS2_VD1_1000210","ХВС","BTS2_VD2_1000210","ГВС","0","ХВС2","0","ГВС2","MRC2_9760285");	$this->chanals= array(1,10,2,10);	 break;
case"25":$this->sensors = array("BTS2_VD4_1000210","ХВС","BTS2_VD5_1000210","ГВС","0","ХВС2","0","ГВС2","MRC2_9760387");	$this->chanals= array(4,10,5,10);	 break;
case"26":$this->sensors = array("BTS2_VD7_1000210","ХВС","BTS2_VD0_1000122","ГВС","0","ХВС2","0","ГВС2","MRC2_8277636");	$this->chanals= array(7,10,0,11);	 break;
case"27":$this->sensors = array("BTS2_VD2_1000122","ХВС","BTS2_VD3_1000122","ГВС","0","ХВС2","0","ГВС2","MRC2_8277423");	$this->chanals= array(2,11,3,11);	 break;
case"28":$this->sensors = array("BTS2_VD5_1000122","ХВС","BTS2_VD6_1000122","ГВС","0","ХВС2","0","ГВС2","MRC2_9760389");	$this->chanals= array(5,11,6,11);	 break;
case"29":$this->sensors = array("BTS2_VD0_1000123","ХВС","BTS2_VD1_1000123","ГВС","0","ХВС2","0","ГВС2","MRC2_9760182");	$this->chanals= array(0,12,1,12);	 break;
case"30":$this->sensors = array("BTS2_VD3_1000123","ХВС","BTS2_VD4_1000123","ГВС","0","ХВС2","0","ГВС2","MRC2_9760135");	$this->chanals= array(3,12,4,12);	 break;
case"31":$this->sensors = array("BTS2_VD6_1000123","ХВС","BTS2_VD7_1000123","ГВС","0","ХВС2","0","ГВС2","MRC2_9760170");	$this->chanals= array(6,12,7,12);	 break;
case"32":$this->sensors = array("BTS2_VD1_1000114","ХВС","BTS2_VD2_1000114","ГВС","0","ХВС2","0","ГВС2","MRC2_9760188");	$this->chanals= array(1,13,2,13);	 break;
case"33":$this->sensors = array("BTS2_VD4_1000114","ХВС","BTS2_VD5_1000114","ГВС","0","ХВС2","0","ГВС2","MRC2_9760274");	$this->chanals= array(4,13,5,13);	 break;
case"34":$this->sensors = array("BTS2_VD7_1000114","ХВС","BTS2_VD0_1000191","ГВС","0","ХВС2","0","ГВС2","MRC2_9760386");	$this->chanals= array(7,13,0,14);	 break;
case"35":$this->sensors = array("BTS2_VD2_1000191","ХВС","BTS2_VD3_1000191","ГВС","0","ХВС2","0","ГВС2","MRC2_9760325");	$this->chanals= array(2,14,3,14);	 break;
case"36":$this->sensors = array("BTS2_VD5_1000191","ХВС","BTS2_VD6_1000191","ГВС","0","ХВС2","0","ГВС2","MRC2_9760391");	$this->chanals= array(5,14,6,14);	 break;
case"37":$this->sensors = array("BTS2_VD0_1000131","ХВС","BTS2_VD1_1000131","ГВС","0","ХВС2","0","ГВС2","MRC2_9760257");	$this->chanals= array(0,15,1,15);	 break;
case"38":$this->sensors = array("BTS2_VD3_1000131","ХВС","BTS2_VD4_1000131","ГВС","0","ХВС2","0","ГВС2","MRC2_9760255");	$this->chanals= array(3,15,4,15);	 break;
case"39":$this->sensors = array("BTS2_VD6_1000131","ХВС","BTS2_VD7_1000131","ГВС","0","ХВС2","0","ГВС2","MRC2_9760165");	$this->chanals= array(6,15,7,15);	 break;
case"40":$this->sensors = array("BTS2_VD1_1000164","ХВС","BTS2_VD2_1000164","ГВС","0","ХВС2","0","ГВС2","MRC2_9760118");	$this->chanals= array(1,16,2,16);	 break;
case"41":$this->sensors = array("BTS2_VD0_1000157","ХВС","BTS2_VD1_1000157","ГВС","0","ХВС2","0","ГВС2","MRC2_8277395");	$this->chanals= array(0,17,1,17);	 break;
case"42":$this->sensors = array("BTS2_VD3_1000157","ХВС","BTS2_VD4_1000157","ГВС","0","ХВС2","0","ГВС2","MRC2_8277404");	$this->chanals= array(3,17,4,17);	 break;
case"43":$this->sensors = array("BTS2_VD6_1000157","ХВС","BTS2_VD7_1000157","ГВС","0","ХВС2","0","ГВС2","MRC2_8272228");	$this->chanals= array(6,17,7,17);	 break;
case"44":$this->sensors = array("BTS2_VD1_1000211","ХВС","BTS2_VD2_1000211","ГВС","0","ХВС2","0","ГВС2","MRC2_8277449");	$this->chanals= array(1,18,2,18);	 break;
case"45":$this->sensors = array("BTS2_VD4_1000211","ХВС","BTS2_VD5_1000211","ГВС","0","ХВС2","0","ГВС2","MRC2_9760296");	$this->chanals= array(4,18,5,18);	 break;
case"46":$this->sensors = array("BTS2_VD7_1000211","ХВС","BTS2_VD0_1000174","ГВС","0","ХВС2","0","ГВС2","MRC2_8277428");	$this->chanals= array(7,18,0,19);	 break;
case"47":$this->sensors = array("BTS2_VD2_1000174","ХВС","BTS2_VD3_1000174","ГВС","0","ХВС2","0","ГВС2","MRC2_8277418");	$this->chanals= array(2,19,3,19);	 break;
case"48":$this->sensors = array("BTS2_VD5_1000174","ХВС","BTS2_VD6_1000174","ГВС","0","ХВС2","0","ГВС2","MRC2_8277394");	$this->chanals= array(5,19,6,19);	 break;
case"49":$this->sensors = array("BTS2_VD0_1000234","ХВС","BTS2_VD1_1000234","ГВС","0","ХВС2","0","ГВС2","MRC2_8272891");	$this->chanals= array(0,20,1,20);	 break;
case"50":$this->sensors = array("BTS2_VD3_1000234","ХВС","BTS2_VD4_1000234","ГВС","0","ХВС2","0","ГВС2","MRC2_8277465");	$this->chanals= array(3,20,4,20);	 break;
case"51":$this->sensors = array("BTS2_VD6_1000234","ХВС","BTS2_VD7_1000234","ГВС","0","ХВС2","0","ГВС2","MRC2_8277486");	$this->chanals= array(6,20,7,20);	 break;
case"52":$this->sensors = array("BTS2_VD1_1000109","ХВС","BTS2_VD2_1000109","ГВС","0","ХВС2","0","ГВС2","MRC2_8277454");	$this->chanals= array(1,21,2,21);	 break;
case"53":$this->sensors = array("BTS2_VD4_1000109","ХВС","BTS2_VD5_1000109","ГВС","0","ХВС2","0","ГВС2","MRC2_8277621");	$this->chanals= array(4,21,5,21);	 break;
case"54":$this->sensors = array("BTS2_VD7_1000109","ХВС","BTS2_VD0_1000237","ГВС","0","ХВС2","0","ГВС2","MRC2_8277443");	$this->chanals= array(7,21,0,22);	 break;
case"55":$this->sensors = array("BTS2_VD2_1000237","ХВС","BTS2_VD3_1000237","ГВС","0","ХВС2","0","ГВС2","MRC2_8277410");	$this->chanals= array(2,22,3,22);	 break;
case"56":$this->sensors = array("BTS2_VD0_1000184","ХВС","BTS2_VD1_1000184","ГВС","0","ХВС2","0","ГВС2","MRC2_8277633");	$this->chanals= array(0,23,1,23);	 break;
case"57":$this->sensors = array("BTS2_VD3_1000184","ХВС","BTS2_VD4_1000184","ГВС","0","ХВС2","0","ГВС2","MRC2_8277390");	$this->chanals= array(3,23,4,23);	 break;
case"58":$this->sensors = array("BTS2_VD6_1000184","ХВС","BTS2_VD7_1000184","ГВС","0","ХВС2","0","ГВС2","MRC2_8272800");	$this->chanals= array(6,23,7,23);	 break;
case"59":$this->sensors = array("BTS2_VD1_1000190","ХВС","BTS2_VD2_1000190","ГВС","0","ХВС2","0","ГВС2","MRC2_8277512");	$this->chanals= array(1,24,2,24);	 break;
case"60":$this->sensors = array("BTS2_VD4_1000190","ХВС","BTS2_VD5_1000190","ГВС","0","ХВС2","0","ГВС2","MRC2_8277467");	$this->chanals= array(4,24,5,24);	 break;
case"61":$this->sensors = array("BTS2_VD7_1000190","ХВС","BTS2_VD0_1000128","ГВС","0","ХВС2","0","ГВС2","MRC2_9760101");	$this->chanals= array(7,24,0,25);	 break;
case"62":$this->sensors = array("BTS2_VD2_1000128","ХВС","BTS2_VD3_1000128","ГВС","0","ХВС2","0","ГВС2","MRC2_9760266");	$this->chanals= array(2,25,3,25);	 break;
case"63":$this->sensors = array("BTS2_VD5_1000128","ХВС","BTS2_VD6_1000128","ГВС","0","ХВС2","0","ГВС2","MRC2_8277366");	$this->chanals= array(5,25,6,25);	 break;
case"64":$this->sensors = array("BTS2_VD0_1000108","ХВС","BTS2_VD1_1000108","ГВС","0","ХВС2","0","ГВС2","MRC2_8272768");	$this->chanals= array(0,26,1,26);	 break;
case"65":$this->sensors = array("BTS2_VD3_1000108","ХВС","BTS2_VD4_1000108","ГВС","0","ХВС2","0","ГВС2","MRC2_8277356");	$this->chanals= array(3,26,4,26);	 break;
case"66":$this->sensors = array("BTS2_VD6_1000108","ХВС","BTS2_VD7_1000108","ГВС","0","ХВС2","0","ГВС2","MRC2_8272345");	$this->chanals= array(6,26,7,26);	 break;
case"67":$this->sensors = array("BTS2_VD1_1000232","ХВС","BTS2_VD2_1000232","ГВС","0","ХВС2","0","ГВС2","MRC2_8277376");	$this->chanals= array(1,27,2,27);	 break;
case"68":$this->sensors = array("BTS2_VD4_1000232","ХВС","BTS2_VD5_1000232","ГВС","0","ХВС2","0","ГВС2","MRC2_8277345");	$this->chanals= array(4,27,5,27);	 break;
case"69":$this->sensors = array("BTS2_VD7_1000232","ХВС","BTS2_VD0_1000380","ГВС","0","ХВС2","0","ГВС2","MRC2_9760247");	$this->chanals= array(7,27,0,28);	 break;
case"70":$this->sensors = array("BTS2_VD2_1000380","ХВС","BTS2_VD3_1000380","ГВС","0","ХВС2","0","ГВС2","MRC2_9760066");	$this->chanals= array(2,28,3,28);	 break;
case"71":$this->sensors = array("BTS2_VD0_1000372","ХВС","BTS2_VD1_1000372","ГВС","0","ХВС2","0","ГВС2","MRC2_9760383");	$this->chanals= array(0,29,1,29);	 break;
case"72":$this->sensors = array("BTS2_VD3_1000372","ХВС","BTS2_VD4_1000372","ГВС","0","ХВС2","0","ГВС2","MRC2_9760381");	$this->chanals= array(3,29,4,29);	 break;
case"73":$this->sensors = array("BTS2_VD6_1000372","ХВС","BTS2_VD7_1000372","ГВС","0","ХВС2","0","ГВС2","MRC2_9760190");	$this->chanals= array(6,29,7,29);	 break;
case"74":$this->sensors = array("BTS2_VD1_1000408","ХВС","BTS2_VD2_1000408","ГВС","0","ХВС2","0","ГВС2","MRC2_9760111");	$this->chanals= array(1,30,2,30);	 break;
case"75":$this->sensors = array("BTS2_VD4_1000408","ХВС","BTS2_VD5_1000408","ГВС","0","ХВС2","0","ГВС2","MRC2_9760323");	$this->chanals= array(4,30,5,30);	 break;
case"76":$this->sensors = array("BTS2_VD7_1000408","ХВС","BTS2_VD0_1000404","ГВС","0","ХВС2","0","ГВС2","MRC2_9760339");	$this->chanals= array(7,30,0,31);	 break;
case"77":$this->sensors = array("BTS2_VD2_1000404","ХВС","BTS2_VD3_1000404","ГВС","0","ХВС2","0","ГВС2","MRC2_9760150");	$this->chanals= array(2,31,3,31);	 break;
case"78":$this->sensors = array("BTS2_VD5_1000404","ХВС","BTS2_VD6_1000404","ГВС","0","ХВС2","0","ГВС2","MRC2_9760177");	$this->chanals= array(5,31,6,31);	 break;
case"79":$this->sensors = array("BTS2_VD0_1000105","ХВС","BTS2_VD1_1000105","ГВС","0","ХВС2","0","ГВС2","MRC2_9760167");	$this->chanals= array(0,32,1,32);	 break;
case"80":$this->sensors = array("BTS2_VD3_1000105","ХВС","BTS2_VD4_1000105","ГВС","0","ХВС2","0","ГВС2","MRC2_9760334");	$this->chanals= array(3,32,4,32);	 break;
case"81":$this->sensors = array("BTS2_VD6_1000105","ХВС","BTS2_VD7_1000105","ГВС","0","ХВС2","0","ГВС2","MRC2_9760337");	$this->chanals= array(6,32,7,32);	 break;
case"82":$this->sensors = array("BTS2_VD1_1000134","ХВС","BTS2_VD2_1000134","ГВС","0","ХВС2","0","ГВС2","MRC2_9760173");	$this->chanals= array(1,33,2,33);	 break;
case"83":$this->sensors = array("BTS2_VD4_1000134","ХВС","BTS2_VD5_1000134","ГВС","0","ХВС2","0","ГВС2","MRC2_9760347");	$this->chanals= array(4,33,5,33);	 break;
case"84":$this->sensors = array("BTS2_VD7_1000134","ХВС","BTS2_VD0_1000206","ГВС","0","ХВС2","0","ГВС2","MRC2_9760335");	$this->chanals= array(7,33,0,34);	 break;
case"85":$this->sensors = array("BTS2_VD2_1000206","ХВС","BTS2_VD3_1000206","ГВС","0","ХВС2","0","ГВС2","MRC2_8277388");	$this->chanals= array(2,34,3,34);	 break;
case"86":$this->sensors = array("BTS2_VD5_1000206","ХВС","BTS2_VD6_1000206","ГВС","0","ХВС2","0","ГВС2","MRC2_8277617");	$this->chanals= array(5,34,6,34);	 break;
case"87":$this->sensors = array("BTS2_VD0_1000148","ХВС","BTS2_VD1_1000148","ГВС","0","ХВС2","0","ГВС2","MRC2_8277474");	$this->chanals= array(0,35,1,35);	 break;
case"88":$this->sensors = array("BTS2_VD3_1000148","ХВС","BTS2_VD4_1000148","ГВС","0","ХВС2","0","ГВС2","MRC2_8277485");	$this->chanals= array(3,35,4,35);	 break;
case"89":$this->sensors = array("BTS2_VD6_1000148","ХВС","BTS2_VD7_1000148","ГВС","0","ХВС2","0","ГВС2","MRC2_8277384");	$this->chanals= array(6,35,7,35);	 break;
case"90":$this->sensors = array("BTS2_VD1_1000409","ХВС","BTS2_VD2_1000409","ГВС","0","ХВС2","0","ГВС2","MRC2_8277472");	$this->chanals= array(1,36,2,36); 	 break;
case"Все": break;		
default: require 'alert_flat.js'; die;	
}		