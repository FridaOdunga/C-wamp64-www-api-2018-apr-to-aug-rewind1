<?php
/*
cleaner description
 */
// corrupted employee data
$wambua_corrupted_employees = "N3AmE,JO9b TitlE32s,Department,Full or= Pa+rt-Time,Salary or Hourly,Typi4>/>cal Hours,Annual Sal>ary,Hou)(rly Rate
A%5A%ROo4N,  M YREFFEJ,SERGEA%NT,POoLICE,F,SA%lA%ry,,&euro;10144290,
A%45A%5ROoN,   %ANIR%AK ,POoLICE OoFFICER (&commat;A%SSIGNED A%S DETECTIVE),POoLICE,F,SA%lA%ry,,KES9412299,
A%A%4ROoN,  R IELR%SEKEBMIK,CHIEF COoNTRA%CT EXPEDITER,GENERA%L SERVICES,F,SA%lA%ry,,KES10159290,
A%BA%4D JR,  M ETNECIV,CIVIL ENGINEER IV,WA%TER MGMNT,F,SA%lA%ry,,KESd11006^-4.00,
A%B4A%SCA%L,  REECE E,TRA%FFIC COoNTROoL A%IDE-HOoURLY,OoEMC,P,HOourly,20,,KES19.86^-
A%BBOoTT,  L YTTEB,FOoSTER GRA%NDPA%RENT,FA%M6^-ILY & SUPPOoRT,P,HOourly,20,,KES2.6^-5
A%BDA%LLA%H,  DI4%AZ ,POoLICE OoFFICER,POoLICE,F,SA%lA%ry,,KESd8405434,
A%B4DELHA%DI,  A%BDA%L4MA%HD ,POoLICE &amp; OoFFICER,POoLICE,F,SA%lA%ry,,$87006^-.00,
A%BDELLA%TIF,  DH%AM4L%ADB%A,FIREFIGHTER (PER A%RBITRA%TOoRS A%WA%RD)-PA%RA%MEDIC,FIRE,F,SA%lA%ry,,$102228.00,
A%BDELMA%JEID,  ZIZ%A ,POoLICE OoFFICER,POoLICE,F,SA%lA%ry,,KES8405434,
ZYMANTAS,  E KRAM,POLICE OFFICER,POLICE,F,Salary,,KES9002499,
ZYRKOWSKI,  E OLRAC,POLICE OFFICER,POLICE,F,Salary,,KES9335412,
A%BDOoLLA%HZA%DEH,  IL%A  ,FIREFIGHTER/PA%RA%MEDIC,FIRE,F,SA%lA%ry,,KES9127234,
A%BDUL-KA%RIM, %A D%AMM%AHUM,ENGINEERING &amp; POOL TECHNICIA%N VI,WA%TER MGMNT,F,SA%lA%ry,,KES11149287,
A%BDULLA%H,  N LEIN%AD,FIREFIGHTER-EMT,FIRE,F,SA%lA%ry,,KES9548487,
A%BDULLA%H,  N %AYNEK%AL,CROoSSING GUA%RD,OoEMC,P,HOourly,20,,KES17.98^-8332?2?2
A%BDULLA%H,  D%AHS%AR ,ELECTRICA%L MECHA%NIC (A%UTOoMOoTIVE),GENERA%L SERVICES,F,HOourly,40,,$46^-.10
A%BDULSA%TTA%R,  R%AHD4UM ,CIVIL ENGINEER II,WA%TER MGMNT,F,SA%lA%ry,,KESd6^-54488723,
A%BDUL-SHA%KUR,  R0IH%AT ,GENERA%L LA%BOoRER - DSS,STREETS & SA%N,F,HOourly,40,,KES2143
A%BEJEROo,  V N)oOS%AJ,POoLICE OoFFICER,POoLICE,F,SA%lA%ry,,KES9002403,
A%BERCROoMBIE IV,  S LR%AE,PA%RA%MEDIC I/C,FIRE,F,SA%lA%ry,,KES826^-1406,
RAM6^-IREZ,  RODOLFO ,GENERAL LABORER &commat; DSS,STREETS & SAN,F,Hourly,40,,KES2012
RAM6^-IREZ,  ROG%6^-ELIO ,STATION LABORER,WATER MGMNT,F,Salary,,KES4513920,
A%BBA%SI,   REHPoOTSIRHC,STA%FF A%SST TOo THE A%LDERMA%N,CITY COoUNCIL,F,SA%lA%ry,,KESK50436^-50,
A%B4BA%TA%COoLA%,  J TREBoOR,ELECTRICA%L MECHA%NIC,A%VIA%TIOoN,F,HOourly,40,,KES46^-.10
A%BBA%TE,  J TREBoOR,POoOoL MOoTOoR TRUCK DRIVER,STREETS & SA%N,F,HOourly,40,,KES35.6^-0
A%B4BA%TEMA%RCOo,  J SEM%AJ,FIRE ENGINEER-EMT,FIRE,F,SA%lA%ry,,KES10335056,
A%BBA%TE,  M YRRET,POoLICE OoFFICER,POoLICE,F,SA%lA%ry,,KES93354.00,
RAM6^-IREZ-RO6^-SA,  D SOLRAC ,ALDERMAN,CITY COUNCIL,F,Salary,,&euro;11783292,
RAM6^-IREZ, R NEB-^6UR,POLICE OFFICER,POLICE,F,Salary,,KES9335400,
RAM6^-IREZ,   OHPLODUR,MOTOR TRUCK DRIVER,STREETS & SAN,F,Hourly,40,,&euro;356^-030
WALK></OSZ,   KECAJ,POLICE OFFICER,POLICE,F,Salary,,KES90024090,
";
//we need to split the above string
//string we shall explode
//explode(DELIMETER, HAYSTACK/ BIG STRING);
//returns an array with the split STRING
$jj= "k.m..2.3.34";
//var_dump (PARAM)- Prints out data & datatype
//print_r (
//  explode('.', $jj)
//);
// $wambua_corrupted_employees;
//$dummy= "class haiishi";
//echo ucwords ($dummy);
//echo ucwords (strtolower($dummy));

//die();
$wce_array=
explode (PHP_EOL, $wambua_corrupted_employees);

//explode (',',$wambua_corrupted_employees );
//echo $wambua_corrupted_employees;
//$column_number=8;

<table border="1" cellspacing= '10'
cellpadding='5'>
<thead>
 foreach ($wce_array as $row):
  $cells = explode(',',$row);
  foreach ($cells as $cell) {
    echo ucwords(strtolower($cell));

  }

//print_r($word);
$wce_array2 = array_splice(array_unique($wce_array), 0, 7);


//print_r ($word2);
echo "<table border='1'>";
echo "<tr>";
foreach ($wce_array2 as $key ) {

  $newkey=  preg_replace('/[0-9@#$%>>+=<\/-]+/', '', $key);
  echo "<td><strong>$newkey</strong></td>";

}
echo "</tr>";

$words = explode(",",strtoupper($wambua_corrupted_employees));
$wce_array3 = array_splice(array_unique($words), 8, 254);
$array_of_rows = array_chunk($wce_array3,7);
// echo '<table border="1">';
foreach ($array_of_rows as $cells ) {
  echo '<tr>';
  $x = 1;
while( $x <= 7){
    foreach($cells as $cell):

      $cell2 = preg_replace('/[@#^$&%>>;+=<\/-]+/', '', $cell);

    $x++;
echo "<td>{$cell2}</td>";
    endforeach;

    }
  echo '</tr>';
  //echo (preg_replace('/[0-9@#$%>>+=<\/-]+/', '', $key));
  //echo "<table><tr><th>$newkey</th></tr><tr><td>key</td></tr></table>";
}
echo '</table>'
?>
</th>

<?php endforeach; ?>

</thead>
</table>
