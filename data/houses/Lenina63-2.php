<?php		
//$this->flat = $_POST['flat']		
$this->ipAddres = "192.168.1.233";	

if ($this->flat>0 && $this->flat<21){$this->rsNum = "9";}		
elseif (($this->flat>20 && $this->flat<41)) {$this->rsNum = "17";}
elseif (($this->flat>40 && $this->flat<61)) {$this->rsNum = "27";}
elseif (($this->flat>60 && $this->flat<91)) {$this->rsNum = "35";}

switch ($this->flat) {		
case"1":$this->sensors = array("BTS2_VD0_800107","ХВС","BTS2_VD1_800107","ГВС","0","ХВС2","0","ГВС2","MRC2_9766280");	$this->chanals= array(0,1,1,1);	 break;
case"2":$this->sensors = array("BTS2_VD3_800107","ХВС","BTS2_VD4_800107","ГВС","0","ХВС2","0","ГВС2","MRC2_10178495");	$this->chanals= array(3,1,4,1);	 break;
case"3":$this->sensors = array("BTS2_VD6_800107","ХВС","BTS2_VD7_800107","ГВС","0","ХВС2","0","ГВС2","MRC2_9765645");	$this->chanals= array(6,1,7,1);	 break;
case"4":$this->sensors = array("BTS2_VD1_800040","ХВС","BTS2_VD2_800040","ГВС","0","ХВС2","0","ГВС2","MRC2_9766425");	$this->chanals= array(1,2,2,2);	 break;
case"5":$this->sensors = array("BTS2_VD4_800040","ХВС","BTS2_VD5_800040","ГВС","0","ХВС2","0","ГВС2","MRC2_10178476");	$this->chanals= array(4,2,5,2);	 break;
case"6":$this->sensors = array("BTS2_VD7_800040","ХВС","BTS2_VD0_900035","ГВС","0","ХВС2","0","ГВС2","MRC2_10178508");	$this->chanals= array(7,2,0,3);	 break;
case"7":$this->sensors = array("BTS2_VD2_900035","ХВС","BTS2_VD3_900035","ГВС","0","ХВС2","0","ГВС2","MRC2_9768959");	$this->chanals= array(2,3,3,3);	 break;
case"8":$this->sensors = array("BTS2_VD5_900035","ХВС","BTS2_VD6_900035","ГВС","0","ХВС2","0","ГВС2","MRC2_10178433");	$this->chanals= array(5,3,6,3);	 break;
case"9":$this->sensors = array("BTS2_VD0_800022","ХВС","BTS2_VD1_800022","ГВС","0","ХВС2","0","ГВС2","MRC2_10178522");	$this->chanals= array(0,4,1,4);	 break;
case"10":$this->sensors = array("BTS2_VD3_800022","ХВС","BTS2_VD4_800022","ГВС","0","ХВС2","0","ГВС2","MRC2_10178483");	$this->chanals= array(3,4,4,4);	 break;
case"11":$this->sensors = array("BTS2_VD6_800022","ХВС","BTS2_VD7_800022","ГВС","0","ХВС2","0","ГВС2","MRC2_10178491");	$this->chanals= array(6,4,7,4);	 break;
case"12":$this->sensors = array("BTS2_VD1_1300650","ХВС","BTS2_VD2_1300650","ГВС","0","ХВС2","0","ГВС2","MRC2_10178451");	$this->chanals= array(1,5,2,5);	 break;
case"13":$this->sensors = array("BTS2_VD4_1300650","ХВС","BTS2_VD5_1300650","ГВС","0","ХВС2","0","ГВС2","MRC2_10178496");	$this->chanals= array(4,5,5,5);	 break;
case"14":$this->sensors = array("BTS2_VD7_1300650","ХВС","BTS2_VD0_800141","ГВС","0","ХВС2","0","ГВС2","MRC2_10180106");	$this->chanals= array(7,5,0,6);	 break;
case"15":$this->sensors = array("BTS2_VD2_800141","ХВС","BTS2_VD3_800141","ГВС","0","ХВС2","0","ГВС2","MRC2_10178486");	$this->chanals= array(2,6,3,6);	 break;
case"16":$this->sensors = array("BTS2_VD5_800141","ХВС","BTS2_VD6_800141","ГВС","0","ХВС2","0","ГВС2","MRC2_9768960");	$this->chanals= array(5,6,6,6);	 break;
case"17":$this->sensors = array("BTS2_VD0_800031","ХВС","BTS2_VD1_800031","ГВС","0","ХВС2","0","ГВС2","MRC2_10178446");	$this->chanals= array(0,7,1,7);	 break;
case"18":$this->sensors = array("BTS2_VD3_800031","ХВС","BTS2_VD4_800031","ГВС","0","ХВС2","0","ГВС2","MRC2_10178437");	$this->chanals= array(3,7,4,7);	 break;
case"19":$this->sensors = array("BTS2_VD6_800031","ХВС","BTS2_VD7_800031","ГВС","0","ХВС2","0","ГВС2","MRC2_10178529");	$this->chanals= array(6,7,7,7);	 break;
case"20":$this->sensors = array("BTS2_VD1_8408923","ХВС","BTS2_VD2_8408923","ГВС","0","ХВС2","0","ГВС2","MRC2_10178485");	$this->chanals= array(1,8,2,8);	 break;
case"21":$this->sensors = array("BTS2_VD4_8408923","ХВС","BTS2_VD5_8408923","ГВС","0","ХВС2","0","ГВС2","MRC2_10178528");	$this->chanals= array(4,8,5,8);	 break;
case"22":$this->sensors = array("BTS2_VD7_8408923","ХВС","BTS2_VD0_1300028","ГВС","0","ХВС2","0","ГВС2","MRC2_10178492");	$this->chanals= array(7,8,0,10);	 break;
case"23":$this->sensors = array("BTS2_VD2_1300028","ХВС","BTS2_VD3_1300028","ГВС","0","ХВС2","0","ГВС2","MRC2_10178493");	$this->chanals= array(2,10,3,10);	 break;
case"24":$this->sensors = array("BTS2_VD5_1300028","ХВС","BTS2_VD6_1300028","ГВС","0","ХВС2","0","ГВС2","MRC2_20164895");	$this->chanals= array(5,10,6,10);	 break;
case"25":$this->sensors = array("BTS2_VD0_1300607","ХВС","BTS2_VD1_1300607","ГВС","0","ХВС2","0","ГВС2","MRC2_10178478");	$this->chanals= array(0,11,1,11);	 break;
case"26":$this->sensors = array("BTS2_VD3_1300607","ХВС","BTS2_VD4_1300607","ГВС","0","ХВС2","0","ГВС2","MRC2_33739047");	$this->chanals= array(3,11,4,11);	 break;
case"27":$this->sensors = array("BTS2_VD6_1300607","ХВС","BTS2_VD7_1300607","ГВС","0","ХВС2","0","ГВС2","MRC2_8277576");	$this->chanals= array(6,11,7,11);	 break;
case"28":$this->sensors = array("BTS2_VD1_900029","ХВС","BTS2_VD2_900029","ГВС","0","ХВС2","0","ГВС2","MRC2_10178472");	$this->chanals= array(1,12,2,12);	 break;
case"29":$this->sensors = array("BTS2_VD4_900029","ХВС","BTS2_VD5_900029","ГВС","0","ХВС2","0","ГВС2","MRC2_10178432");	$this->chanals= array(4,12,5,12);	 break;
case"30":$this->sensors = array("BTS2_VD7_900029","ХВС","BTS2_VD0_800012","ГВС","0","ХВС2","0","ГВС2","MRC2_10178513");	$this->chanals= array(7,12,0,13);	 break;
case"31":$this->sensors = array("BTS2_VD2_800012","ХВС","BTS2_VD3_800012","ГВС","0","ХВС2","0","ГВС2","MRC2_9768965");	$this->chanals= array(2,13,3,13);	 break;
case"32":$this->sensors = array("BTS2_VD5_800012","ХВС","BTS2_VD6_800012","ГВС","0","ХВС2","0","ГВС2","MRC2_10178484");	$this->chanals= array(5,13,6,13);	 break;
case"33":$this->sensors = array("BTS2_VD0_800147","ХВС","BTS2_VD1_800147","ГВС","0","ХВС2","0","ГВС2","MRC2_10178452");	$this->chanals= array(0,14,1,14);	 break;
case"34":$this->sensors = array("BTS2_VD3_800147","ХВС","BTS2_VD4_800147","ГВС","0","ХВС2","0","ГВС2","MRC2_10178444");	$this->chanals= array(3,14,4,14);	 break;
case"35":$this->sensors = array("BTS2_VD6_800147","ХВС","BTS2_VD7_800147","ГВС","0","ХВС2","0","ГВС2","MRC2_10178519");	$this->chanals= array(6,14,7,14);	 break;
case"36":$this->sensors = array("BTS2_VD1_800003","ХВС","BTS2_VD2_800003","ГВС","0","ХВС2","0","ГВС2","MRC2_10178514");	$this->chanals= array(1,15,2,15);	 break;
case"37":$this->sensors = array("BTS2_VD4_800003","ХВС","BTS2_VD5_800003","ГВС","0","ХВС2","0","ГВС2","MRC2_9765715");	$this->chanals= array(4,15,5,15);	 break;
case"38":$this->sensors = array("BTS2_VD7_800003","ХВС","BTS2_VD0_800100","ГВС","0","ХВС2","0","ГВС2","MRC2_10180109");	$this->chanals= array(7,15,0,16);	 break;
case"39":$this->sensors = array("BTS2_VD2_800100","ХВС","BTS2_VD3_800100","ГВС","0","ХВС2","0","ГВС2","MRC2_10180103");	$this->chanals= array(2,16,3,16);	 break;
case"40":$this->sensors = array("BTS2_VD5_800100","ХВС","BTS2_VD6_800100","ГВС","0","ХВС2","0","ГВС2","MRC2_10178466");	$this->chanals= array(5,16,6,16);	 break;
case"41":$this->sensors = array("BTS2_VD0_800127","ХВС","BTS2_VD1_800127","ГВС","0","ХВС2","0","ГВС2","MRC2_10178500");	$this->chanals= array(0,19,1,19);	 break;
case"42":$this->sensors = array("BTS2_VD3_800127","ХВС","BTS2_VD4_800127","ГВС","0","ХВС2","0","ГВС2","MRC2_10178524");	$this->chanals= array(3,19,4,19);	 break;
case"43":$this->sensors = array("BTS2_VD6_800127","ХВС","BTS2_VD7_800127","ГВС","0","ХВС2","0","ГВС2","MRC2_9768957");	$this->chanals= array(6,19,7,19);	 break;
case"44":$this->sensors = array("BTS2_VD1_800134","ХВС","BTS2_VD2_800134","ГВС","0","ХВС2","0","ГВС2","MRC2_9768955");	$this->chanals= array(1,20,2,20);	 break;
case"45":$this->sensors = array("BTS2_VD4_800134","ХВС","BTS2_VD5_800134","ГВС","0","ХВС2","0","ГВС2","MRC2_10178450");	$this->chanals= array(4,20,5,20);	 break;
case"46":$this->sensors = array("BTS2_VD7_800134","ХВС","BTS2_VD0_800146","ГВС","0","ХВС2","0","ГВС2","MRC2_9760385");	$this->chanals= array(7,20,0,21);	 break;
case"47":$this->sensors = array("BTS2_VD2_800146","ХВС","BTS2_VD3_800146","ГВС","0","ХВС2","0","ГВС2","MRC2_10178517");	$this->chanals= array(2,21,3,21);	 break;
case"48":$this->sensors = array("BTS2_VD5_800146","ХВС","BTS2_VD6_800146","ГВС","0","ХВС2","0","ГВС2","MRC2_10178511");	$this->chanals= array(5,21,6,21);	 break;
case"49":$this->sensors = array("BTS2_VD0_800049","ХВС","BTS2_VD1_800049","ГВС","0","ХВС2","0","ГВС2","MRC2_10178512");	$this->chanals= array(0,22,1,22);	 break;
case"50":$this->sensors = array("BTS2_VD3_800049","ХВС","BTS2_VD4_800049","ГВС","0","ХВС2","0","ГВС2","MRC2_10178510");	$this->chanals= array(3,22,4,22);	 break;
case"51":$this->sensors = array("BTS2_VD6_800049","ХВС","BTS2_VD7_800049","ГВС","0","ХВС2","0","ГВС2","MRC2_10178445");	$this->chanals= array(6,22,7,22);	 break;
case"52":$this->sensors = array("BTS2_VD1_800057","ХВС","BTS2_VD2_800057","ГВС","0","ХВС2","0","ГВС2","MRC2_10178488");	$this->chanals= array(1,23,2,23);	 break;
case"53":$this->sensors = array("BTS2_VD4_800057","ХВС","BTS2_VD5_800057","ГВС","0","ХВС2","0","ГВС2","MRC2_9765774");	$this->chanals= array(4,23,5,23);	 break;
case"54":$this->sensors = array("BTS2_VD7_800057","ХВС","BTS2_VD0_800128","ГВС","0","ХВС2","0","ГВС2","MRC2_9765612");	$this->chanals= array(7,23,0,24);	 break;
case"55":$this->sensors = array("BTS2_VD2_800128","ХВС","BTS2_VD3_800128","ГВС","0","ХВС2","0","ГВС2","MRC2_10178498");	$this->chanals= array(2,24,3,24);	 break;
case"56":$this->sensors = array("BTS2_VD5_800128","ХВС","BTS2_VD6_800128","ГВС","0","ХВС2","0","ГВС2","MRC2_10178434");	$this->chanals= array(5,24,6,24);	 break;
case"57":$this->sensors = array("BTS2_VD0_800053","ХВС","BTS2_VD1_800053","ГВС","0","ХВС2","0","ГВС2","MRC2_10178462");	$this->chanals= array(0,25,1,25);	 break;
case"58":$this->sensors = array("BTS2_VD3_800053","ХВС","BTS2_VD4_800053","ГВС","0","ХВС2","0","ГВС2","MRC2_10180105");	$this->chanals= array(3,25,4,25);	 break;
case"59":$this->sensors = array("BTS2_VD6_800053","ХВС","BTS2_VD7_800053","ГВС","0","ХВС2","0","ГВС2","MRC2_10178531");	$this->chanals= array(6,25,7,25);	 break;
case"60":$this->sensors = array("BTS2_VD1_800008","ХВС","BTS2_VD2_800008","ГВС","0","ХВС2","0","ГВС2","MRC2_31369297");	$this->chanals= array(1,26,2,26);	 break;
case"61":$this->sensors = array("BTS2_VD4_800008","ХВС","BTS2_VD5_800008","ГВС","0","ХВС2","0","ГВС2","MRC2_10178449");	$this->chanals= array(4,26,5,26);	 break;
case"62":$this->sensors = array("BTS2_VD7_800008","ХВС","BTS2_VD0_1300189","ГВС","0","ХВС2","0","ГВС2","MRC2_10178471");	$this->chanals= array(7,26,0,28);	 break;
case"63":$this->sensors = array("BTS2_VD2_1300189","ХВС","BTS2_VD3_1300189","ГВС","0","ХВС2","0","ГВС2","MRC2_10178482");	$this->chanals= array(2,28,3,28);	 break;
case"64":$this->sensors = array("BTS2_VD5_1300189","ХВС","BTS2_VD6_1300189","ГВС","0","ХВС2","0","ГВС2","MRC2_10180108");	$this->chanals= array(5,28,6,28);	 break;
case"65":$this->sensors = array("BTS2_VD0_1300620","ХВС","BTS2_VD1_1300620","ГВС","0","ХВС2","0","ГВС2","MRC2_10178503");	$this->chanals= array(0,29,1,29);	 break;
case"66":$this->sensors = array("BTS2_VD3_1300620","ХВС","BTS2_VD4_1300620","ГВС","0","ХВС2","0","ГВС2","MRC2_10178463");	$this->chanals= array(3,29,4,29);	 break;
case"67":$this->sensors = array("BTS2_VD6_1300620","ХВС","BTS2_VD7_1300620","ГВС","0","ХВС2","0","ГВС2","MRC2_10178525");	$this->chanals= array(6,29,7,29);	 break;
case"68":$this->sensors = array("BTS2_VD1_800121","ХВС","BTS2_VD2_800121","ГВС","0","ХВС2","0","ГВС2","MRC2_10178506");	$this->chanals= array(1,30,2,30);	 break;
case"69":$this->sensors = array("BTS2_VD4_800121","ХВС","BTS2_VD5_800121","ГВС","0","ХВС2","0","ГВС2","MRC2_10178502");	$this->chanals= array(4,30,5,30);	 break;
case"70":$this->sensors = array("BTS2_VD7_800121","ХВС","BTS2_VD0_1300510","ГВС","0","ХВС2","0","ГВС2","MRC2_10178442");	$this->chanals= array(7,30,0,31);	 break;
case"71":$this->sensors = array("BTS2_VD2_1300510","ХВС","BTS2_VD3_1300510","ГВС","0","ХВС2","0","ГВС2","MRC2_10178431");	$this->chanals= array(2,31,3,31);	 break;
case"72":$this->sensors = array("BTS2_VD5_1300510","ХВС","BTS2_VD6_1300510","ГВС","0","ХВС2","0","ГВС2","MRC2_10178515");	$this->chanals= array(5,31,6,31);	 break;
case"73":$this->sensors = array("BTS2_VD0_800112","ХВС","BTS2_VD1_800112","ГВС","0","ХВС2","0","ГВС2","MRC2_10178533");	$this->chanals= array(0,32,1,32);	 break;
case"74":$this->sensors = array("BTS2_VD3_800112","ХВС","BTS2_VD4_800112","ГВС","0","ХВС2","0","ГВС2","MRC2_10180107");	$this->chanals= array(3,32,4,32);	 break;
case"75":$this->sensors = array("BTS2_VD6_800112","ХВС","BTS2_VD7_800112","ГВС","0","ХВС2","0","ГВС2","MRC2_10178438");	$this->chanals= array(6,32,7,32);	 break;
case"76":$this->sensors = array("BTS2_VD1_800095","ХВС","BTS2_VD2_800095","ГВС","0","ХВС2","0","ГВС2","MRC2_10178509");	$this->chanals= array(1,33,2,33);	 break;
case"77":$this->sensors = array("BTS2_VD4_800095","ХВС","BTS2_VD5_800095","ГВС","0","ХВС2","0","ГВС2","MRC2_5933182");	$this->chanals= array(4,33,5,33);	 break;
case"78":$this->sensors = array("BTS2_VD7_800095","ХВС","BTS2_VD0_800098","ГВС","0","ХВС2","0","ГВС2","MRC2_10178521");	$this->chanals= array(7,33,0,34);	 break;
case"79":$this->sensors = array("BTS2_VD2_800098","ХВС","BTS2_VD3_800098","ГВС","0","ХВС2","0","ГВС2","MRC2_10178530");	$this->chanals= array(2,34,3,34);	 break;
case"80":$this->sensors = array("BTS2_VD5_800098","ХВС","BTS2_VD6_800098","ГВС","0","ХВС2","0","ГВС2","MRC2_10178459");	$this->chanals= array(5,34,6,34);	 break;
case"81":$this->sensors = array("BTS2_VD0_800099","ХВС","BTS2_VD1_800099","ГВС","0","ХВС2","0","ГВС2","MRC2_10180104");	$this->chanals= array(0,36,1,36);	 break;
case"82":$this->sensors = array("BTS2_VD3_800099","ХВС","BTS2_VD4_800099","ГВС","0","ХВС2","0","ГВС2","MRC2_10178428");	$this->chanals= array(3,36,4,36);	 break;
case"83":$this->sensors = array("BTS2_VD6_800099","ХВС","BTS2_VD7_800099","ГВС","0","ХВС2","0","ГВС2","MRC2_9766628");	$this->chanals= array(6,36,7,36);	 break;
case"84":$this->sensors = array("BTS2_VD1_810539","ХВС","BTS2_VD2_810539","ГВС","0","ХВС2","0","ГВС2","MRC2_10178520");	$this->chanals= array(1,37,2,37);	 break;
case"85":$this->sensors = array("BTS2_VD4_810539","ХВС","BTS2_VD5_810539","ГВС","0","ХВС2","0","ГВС2","MRC2_10178440");	$this->chanals= array(4,37,5,37);	 break;
case"86":$this->sensors = array("BTS2_VD7_810539","ХВС","BTS2_VD0_800148","ГВС","0","ХВС2","0","ГВС2","MRC2_21943987");	$this->chanals= array(7,37,0,38);	 break;
case"87":$this->sensors = array("BTS2_VD2_800148","ХВС","BTS2_VD3_800148","ГВС","0","ХВС2","0","ГВС2","MRC2_10178534");	$this->chanals= array(2,38,3,38);	 break;
case"88":$this->sensors = array("BTS2_VD5_800148","ХВС","BTS2_VD6_800148","ГВС","0","ХВС2","0","ГВС2","MRC2_10178523");	$this->chanals= array(5,38,6,38);	 break;
case"89":$this->sensors = array("BTS2_VD0_800009","ХВС","BTS2_VD1_800009","ГВС","0","ХВС2","0","ГВС2","MRC2_10178536");	$this->chanals= array(0,39,1,39);	 break;
case"90":$this->sensors = array("BTS2_VD3_800009","ХВС","BTS2_VD4_800009","ГВС","0","ХВС2","0","ГВС2","MRC2_10178453");	$this->chanals= array(3,39,4,39);	 break;
case"Все": break;		
//default: require 'alert_flat.js'; die;
}		
?>		
