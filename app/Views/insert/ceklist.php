<?php
require_once 'db_connection.php';
$NOMR = $_GET["nomr"];
// Establish database connection
$host = '192.168.1.178';
$db = 'simrs';
$user = 'root';
$pass = 'takonbudi';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int) $e->getCode());
}
$stmt = $pdo->query("SELECT *
FROM simrs.t_clinicalpathway WHERE NOMR = $NOMR
");
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$dxutama = $row['dxutama'];
$dxsekunder = $row['dxsekunder'];

$biaya1 = isset($_SESSION['biaya1']) ? $_SESSION['biaya1'] : $row['biaya1'];
$biaya2 = isset($_SESSION['biaya2']) ? $_SESSION['biaya2'] : $row['biaya2'];
$biaya3 = isset($_SESSION['biaya3']) ? $_SESSION['biaya3'] : $row['biaya3'];
$biaya4 = isset($_SESSION['biaya4']) ? $_SESSION['biaya4'] : $row['biaya4'];
$biaya5 = isset($_SESSION['biaya5']) ? $_SESSION['biaya5'] : $row['biaya5'];
$biaya6 = isset($_SESSION['biaya6']) ? $_SESSION['biaya6'] : $row['biaya6'];
$biaya7 = isset($_SESSION['biaya7']) ? $_SESSION['biaya7'] : $row['biaya7'];
$biaya8 = isset($_SESSION['biaya8']) ? $_SESSION['biaya8'] : $row['biaya8'];
$biaya9 = isset($_SESSION['biaya9']) ? $_SESSION['biaya9'] : $row['biaya9'];
$biaya10 = isset($_SESSION['biaya10']) ? $_SESSION['biaya10'] : $row['biaya10'];
$biaya11 = isset($_SESSION['biaya11']) ? $_SESSION['biaya11'] : $row['biaya11'];
$biaya12 = isset($_SESSION['biaya12']) ? $_SESSION['biaya12'] : $row['biaya12'];

$biaya13 = isset($_SESSION['biaya13']) ? $_SESSION['biaya13'] : $row['biaya13'];
$biaya14 = isset($_SESSION['biaya14']) ? $_SESSION['biaya14'] : $row['biaya14'];
$biaya15 = isset($_SESSION['biaya15']) ? $_SESSION['biaya15'] : $row['biaya15'];
$biaya16 = isset($_SESSION['biaya16']) ? $_SESSION['biaya16'] : $row['biaya16'];
$biaya17 = isset($_SESSION['biaya17']) ? $_SESSION['biaya17'] : $row['biaya17'];
$biaya18 = isset($_SESSION['biaya18']) ? $_SESSION['biaya18'] : $row['biaya18'];
$biaya19 = isset($_SESSION['biaya19']) ? $_SESSION['biaya19'] : $row['biaya19'];
$biaya20 = isset($_SESSION['biaya20']) ? $_SESSION['biaya20'] : $row['biaya20'];
$biaya21 = isset($_SESSION['biaya21']) ? $_SESSION['biaya21'] : $row['biaya21'];
$biaya22 = isset($_SESSION['biaya22']) ? $_SESSION['biaya22'] : $row['biaya22'];
$biaya23 = isset($_SESSION['biaya23']) ? $_SESSION['biaya23'] : $row['biaya23'];
$biaya24 = isset($_SESSION['biaya24']) ? $_SESSION['biaya24'] : $row['biaya24'];

$biaya25 = isset($_SESSION['biaya25']) ? $_SESSION['biaya25'] : $row['biaya25'];
$biaya26 = isset($_SESSION['biaya26']) ? $_SESSION['biaya26'] : $row['biaya26'];
$biaya27 = isset($_SESSION['biaya27']) ? $_SESSION['biaya27'] : $row['biaya27'];
$biaya28 = isset($_SESSION['biaya28']) ? $_SESSION['biaya28'] : $row['biaya28'];
$biaya29 = isset($_SESSION['biaya29']) ? $_SESSION['biaya29'] : $row['biaya29'];
$biaya30 = isset($_SESSION['biaya30']) ? $_SESSION['biaya30'] : $row['biaya30'];
$biaya31 = isset($_SESSION['biaya31']) ? $_SESSION['biaya31'] : $row['biaya31'];
$biaya32 = isset($_SESSION['biaya32']) ? $_SESSION['biaya32'] : $row['biaya32'];
$biaya33 = isset($_SESSION['biaya33']) ? $_SESSION['biaya33'] : $row['biaya33'];
$biaya34 = isset($_SESSION['biaya34']) ? $_SESSION['biaya34'] : $row['biaya34'];
$biaya35 = isset($_SESSION['biaya35']) ? $_SESSION['biaya35'] : $row['biaya35'];
$biaya36 = isset($_SESSION['biaya36']) ? $_SESSION['biaya36'] : $row['biaya36'];

$biaya37 = isset($_SESSION['biaya37']) ? $_SESSION['biaya37'] : $row['biaya37'];
$biaya38 = isset($_SESSION['biaya38']) ? $_SESSION['biaya38'] : $row['biaya38'];
$biaya39 = isset($_SESSION['biaya39']) ? $_SESSION['biaya39'] : $row['biaya39'];
$biaya40 = isset($_SESSION['biaya40']) ? $_SESSION['biaya40'] : $row['biaya40'];
$biaya41 = isset($_SESSION['biaya41']) ? $_SESSION['biaya41'] : $row['biaya41'];
$biaya42 = isset($_SESSION['biaya42']) ? $_SESSION['biaya42'] : $row['biaya42'];
$biaya43 = isset($_SESSION['biaya43']) ? $_SESSION['biaya43'] : $row['biaya43'];
$biaya44 = isset($_SESSION['biaya44']) ? $_SESSION['biaya44'] : $row['biaya44'];
$biaya45 = isset($_SESSION['biaya45']) ? $_SESSION['biaya45'] : $row['biaya45'];
$biaya46 = isset($_SESSION['biaya46']) ? $_SESSION['biaya46'] : $row['biaya46'];
$biaya47 = isset($_SESSION['biaya47']) ? $_SESSION['biaya47'] : $row['biaya47'];
$biaya48 = isset($_SESSION['biaya48']) ? $_SESSION['biaya48'] : $row['biaya48'];

$biaya49 = isset($_SESSION['biaya49']) ? $_SESSION['biaya49'] : $row['biaya49'];
$biaya50 = isset($_SESSION['biaya50']) ? $_SESSION['biaya50'] : $row['biaya50'];
$biaya51 = isset($_SESSION['biaya51']) ? $_SESSION['biaya51'] : $row['biaya51'];
$biaya52 = isset($_SESSION['biaya52']) ? $_SESSION['biaya52'] : $row['biaya52'];
$biaya53 = isset($_SESSION['biaya53']) ? $_SESSION['biaya53'] : $row['biaya53'];
$biaya54 = isset($_SESSION['biaya54']) ? $_SESSION['biaya54'] : $row['biaya54'];
$biaya55 = isset($_SESSION['biaya55']) ? $_SESSION['biaya55'] : $row['biaya55'];
$biaya56 = isset($_SESSION['biaya56']) ? $_SESSION['biaya56'] : $row['biaya56'];
$biaya57 = isset($_SESSION['biaya57']) ? $_SESSION['biaya57'] : $row['biaya57'];
$biaya58 = isset($_SESSION['biaya58']) ? $_SESSION['biaya58'] : $row['biaya58'];
$biaya59 = isset($_SESSION['biaya59']) ? $_SESSION['biaya59'] : $row['biaya59'];
$biaya60 = isset($_SESSION['biaya60']) ? $_SESSION['biaya60'] : $row['biaya60'];

$biaya61 = isset($_SESSION['biaya61']) ? $_SESSION['biaya61'] : $row['biaya61'];
$biaya62 = isset($_SESSION['biaya62']) ? $_SESSION['biaya62'] : $row['biaya62'];
$biaya63 = isset($_SESSION['biaya63']) ? $_SESSION['biaya63'] : $row['biaya63'];
$biaya64 = isset($_SESSION['biaya64']) ? $_SESSION['biaya64'] : $row['biaya64'];
$biaya65 = isset($_SESSION['biaya65']) ? $_SESSION['biaya65'] : $row['biaya65'];
$biaya66 = isset($_SESSION['biaya66']) ? $_SESSION['biaya66'] : $row['biaya66'];
$biaya67 = isset($_SESSION['biaya67']) ? $_SESSION['biaya67'] : $row['biaya67'];
$biaya68 = isset($_SESSION['biaya68']) ? $_SESSION['biaya68'] : $row['biaya68'];
$biaya69 = isset($_SESSION['biaya69']) ? $_SESSION['biaya69'] : $row['biaya69'];
$biaya70 = isset($_SESSION['biaya70']) ? $_SESSION['biaya70'] : $row['biaya70'];
$biaya71 = isset($_SESSION['biaya71']) ? $_SESSION['biaya71'] : $row['biaya71'];
$biaya72 = isset($_SESSION['biaya72']) ? $_SESSION['biaya72'] : $row['biaya72'];

$biaya73 = isset($_SESSION['biaya73']) ? $_SESSION['biaya73'] : $row['biaya73'];
$biaya74 = isset($_SESSION['biaya74']) ? $_SESSION['biaya74'] : $row['biaya74'];
$biaya75 = isset($_SESSION['biaya75']) ? $_SESSION['biaya75'] : $row['biaya75'];
$biaya76 = isset($_SESSION['biaya76']) ? $_SESSION['biaya76'] : $row['biaya76'];
$biaya77 = isset($_SESSION['biaya77']) ? $_SESSION['biaya77'] : $row['biaya77'];
$biaya78 = isset($_SESSION['biaya78']) ? $_SESSION['biaya78'] : $row['biaya78'];
$biaya79 = isset($_SESSION['biaya79']) ? $_SESSION['biaya79'] : $row['biaya79'];
$biaya80 = isset($_SESSION['biaya80']) ? $_SESSION['biaya80'] : $row['biaya80'];
$biaya81 = isset($_SESSION['biaya81']) ? $_SESSION['biaya81'] : $row['biaya81'];
$biaya82 = isset($_SESSION['biaya82']) ? $_SESSION['biaya82'] : $row['biaya82'];
$biaya83 = isset($_SESSION['biaya83']) ? $_SESSION['biaya83'] : $row['biaya83'];
$biaya84 = isset($_SESSION['biaya84']) ? $_SESSION['biaya84'] : $row['biaya84'];

$biaya85 = isset($_SESSION['biaya85']) ? $_SESSION['biaya85'] : $row['biaya85'];
$biaya86 = isset($_SESSION['biaya86']) ? $_SESSION['biaya86'] : $row['biaya86'];
$biaya87 = isset($_SESSION['biaya87']) ? $_SESSION['biaya87'] : $row['biaya87'];
$biaya88 = isset($_SESSION['biaya88']) ? $_SESSION['biaya88'] : $row['biaya88'];
$biaya89 = isset($_SESSION['biaya89']) ? $_SESSION['biaya89'] : $row['biaya89'];
$biaya90 = isset($_SESSION['biaya90']) ? $_SESSION['biaya90'] : $row['biaya90'];
$biaya91 = isset($_SESSION['biaya91']) ? $_SESSION['biaya91'] : $row['biaya91'];
$biaya92 = isset($_SESSION['biaya92']) ? $_SESSION['biaya92'] : $row['biaya92'];
$biaya93 = isset($_SESSION['biaya93']) ? $_SESSION['biaya93'] : $row['biaya93'];
$biaya94 = isset($_SESSION['biaya94']) ? $_SESSION['biaya94'] : $row['biaya94'];
$biaya95 = isset($_SESSION['biaya95']) ? $_SESSION['biaya95'] : $row['biaya95'];
$biaya96 = isset($_SESSION['biaya96']) ? $_SESSION['biaya96'] : $row['biaya96'];

$biaya97 = isset($_SESSION['biaya97']) ? $_SESSION['biaya97'] : $row['biaya97'];
$biaya98 = isset($_SESSION['biaya98']) ? $_SESSION['biaya98'] : $row['biaya98'];
$biaya99 = isset($_SESSION['biaya99']) ? $_SESSION['biaya99'] : $row['biaya99'];
$biaya100 = isset($_SESSION['biaya100']) ? $_SESSION['biaya100'] : $row['biaya100'];
$biaya101 = isset($_SESSION['biaya101']) ? $_SESSION['biaya101'] : $row['biaya101'];
$biaya102 = isset($_SESSION['biaya102']) ? $_SESSION['biaya102'] : $row['biaya102'];
$biaya103 = isset($_SESSION['biaya103']) ? $_SESSION['biaya103'] : $row['biaya103'];
$biaya104 = isset($_SESSION['biaya104']) ? $_SESSION['biaya104'] : $row['biaya104'];
$biaya105 = isset($_SESSION['biaya105']) ? $_SESSION['biaya105'] : $row['biaya105'];
$biaya106 = isset($_SESSION['biaya106']) ? $_SESSION['biaya106'] : $row['biaya106'];
$biaya107 = isset($_SESSION['biaya107']) ? $_SESSION['biaya107'] : $row['biaya107'];
$biaya108 = isset($_SESSION['biaya108']) ? $_SESSION['biaya108'] : $row['biaya108'];

$biaya109 = isset($_SESSION['biaya109']) ? $_SESSION['biaya109'] : $row['biaya109'];
$biaya110 = isset($_SESSION['biaya110']) ? $_SESSION['biaya110'] : $row['biaya110'];
$biaya111 = isset($_SESSION['biaya111']) ? $_SESSION['biaya111'] : $row['biaya111'];
$biaya112 = isset($_SESSION['biaya112']) ? $_SESSION['biaya112'] : $row['biaya112'];
$biaya113 = isset($_SESSION['biaya113']) ? $_SESSION['biaya113'] : $row['biaya113'];
$biaya114 = isset($_SESSION['biaya114']) ? $_SESSION['biaya114'] : $row['biaya114'];
$biaya115 = isset($_SESSION['biaya115']) ? $_SESSION['biaya115'] : $row['biaya115'];
$biaya116 = isset($_SESSION['biaya116']) ? $_SESSION['biaya116'] : $row['biaya116'];
$biaya117 = isset($_SESSION['biaya117']) ? $_SESSION['biaya117'] : $row['biaya117'];
$biaya118 = isset($_SESSION['biaya118']) ? $_SESSION['biaya118'] : $row['biaya118'];
$biaya119 = isset($_SESSION['biaya119']) ? $_SESSION['biaya119'] : $row['biaya119'];
$biaya120 = isset($_SESSION['biaya120']) ? $_SESSION['biaya120'] : $row['biaya120'];

$biaya121 = isset($_SESSION['biaya121']) ? $_SESSION['biaya121'] : $row['biaya121'];
$biaya122 = isset($_SESSION['biaya122']) ? $_SESSION['biaya122'] : $row['biaya122'];
$biaya123 = isset($_SESSION['biaya123']) ? $_SESSION['biaya123'] : $row['biaya123'];
$biaya124 = isset($_SESSION['biaya124']) ? $_SESSION['biaya124'] : $row['biaya124'];
$biaya125 = isset($_SESSION['biaya125']) ? $_SESSION['biaya125'] : $row['biaya125'];
$biaya126 = isset($_SESSION['biaya126']) ? $_SESSION['biaya126'] : $row['biaya126'];
$biaya127 = isset($_SESSION['biaya127']) ? $_SESSION['biaya127'] : $row['biaya127'];
$biaya128 = isset($_SESSION['biaya128']) ? $_SESSION['biaya128'] : $row['biaya128'];
$biaya129 = isset($_SESSION['biaya129']) ? $_SESSION['biaya129'] : $row['biaya129'];
$biaya130 = isset($_SESSION['biaya130']) ? $_SESSION['biaya130'] : $row['biaya130'];

$biaya131 = isset($_SESSION['biaya131']) ? $_SESSION['biaya131'] : $row['biaya131'];
$biaya132 = isset($_SESSION['biaya132']) ? $_SESSION['biaya132'] : $row['biaya132'];
$biaya133 = isset($_SESSION['biaya133']) ? $_SESSION['biaya133'] : $row['biaya133'];
$biaya134 = isset($_SESSION['biaya134']) ? $_SESSION['biaya134'] : $row['biaya134'];
$biaya135 = isset($_SESSION['biaya135']) ? $_SESSION['biaya135'] : $row['biaya135'];
$biaya136 = isset($_SESSION['biaya136']) ? $_SESSION['biaya136'] : $row['biaya136'];
$biaya137 = isset($_SESSION['biaya137']) ? $_SESSION['biaya137'] : $row['biaya137'];
$biaya138 = isset($_SESSION['biaya138']) ? $_SESSION['biaya138'] : $row['biaya138'];
$biaya139 = isset($_SESSION['biaya139']) ? $_SESSION['biaya139'] : $row['biaya139'];
$biaya140 = isset($_SESSION['biaya140']) ? $_SESSION['biaya140'] : $row['biaya140'];

$biaya141 = isset($_SESSION['biaya141']) ? $_SESSION['biaya141'] : $row['biaya141'];
$biaya142 = isset($_SESSION['biaya142']) ? $_SESSION['biaya142'] : $row['biaya142'];
$biaya143 = isset($_SESSION['biaya143']) ? $_SESSION['biaya143'] : $row['biaya143'];
$biaya144 = isset($_SESSION['biaya144']) ? $_SESSION['biaya144'] : $row['biaya144'];
$biaya145 = isset($_SESSION['biaya145']) ? $_SESSION['biaya145'] : $row['biaya145'];
$biaya146 = isset($_SESSION['biaya146']) ? $_SESSION['biaya146'] : $row['biaya146'];
$biaya147 = isset($_SESSION['biaya147']) ? $_SESSION['biaya147'] : $row['biaya147'];
$biaya148 = isset($_SESSION['biaya148']) ? $_SESSION['biaya148'] : $row['biaya148'];
$biaya149 = isset($_SESSION['biaya149']) ? $_SESSION['biaya149'] : $row['biaya149'];
$biaya150 = isset($_SESSION['biaya150']) ? $_SESSION['biaya150'] : $row['biaya150'];
$biaya151 = isset($_SESSION['biaya151']) ? $_SESSION['biaya151'] : $row['biaya151'];
$biaya152 = isset($_SESSION['biaya152']) ? $_SESSION['biaya152'] : $row['biaya152'];
$biaya153 = isset($_SESSION['biaya153']) ? $_SESSION['biaya153'] : $row['biaya153'];
$biaya154 = isset($_SESSION['biaya154']) ? $_SESSION['biaya154'] : $row['biaya154'];
$biaya155 = isset($_SESSION['biaya155']) ? $_SESSION['biaya155'] : $row['biaya155'];
$biaya156 = isset($_SESSION['biaya156']) ? $_SESSION['biaya156'] : $row['biaya156'];
$biaya157 = isset($_SESSION['biaya157']) ? $_SESSION['biaya157'] : $row['biaya157'];
$biaya158 = isset($_SESSION['biaya158']) ? $_SESSION['biaya158'] : $row['biaya158'];
$biaya159 = isset($_SESSION['biaya159']) ? $_SESSION['biaya159'] : $row['biaya159'];
$biaya160 = isset($_SESSION['biaya160']) ? $_SESSION['biaya160'] : $row['biaya160'];
$biaya161 = isset($_SESSION['biaya161']) ? $_SESSION['biaya161'] : $row['biaya161'];
$biaya162 = isset($_SESSION['biaya162']) ? $_SESSION['biaya162'] : $row['biaya162'];
$biaya163 = isset($_SESSION['biaya163']) ? $_SESSION['biaya163'] : $row['biaya163'];
$biaya164 = isset($_SESSION['biaya164']) ? $_SESSION['biaya164'] : $row['biaya164'];
$biaya165 = isset($_SESSION['biaya165']) ? $_SESSION['biaya165'] : $row['biaya165'];
$biaya166 = isset($_SESSION['biaya166']) ? $_SESSION['biaya166'] : $row['biaya166'];
$biaya167 = isset($_SESSION['biaya167']) ? $_SESSION['biaya167'] : $row['biaya167'];
$biaya168 = isset($_SESSION['biaya168']) ? $_SESSION['biaya168'] : $row['biaya168'];
$biaya169 = isset($_SESSION['biaya169']) ? $_SESSION['biaya169'] : $row['biaya169'];
$biaya170 = isset($_SESSION['biaya170']) ? $_SESSION['biaya170'] : $row['biaya170'];
$biaya171 = isset($_SESSION['biaya171']) ? $_SESSION['biaya171'] : $row['biaya171'];
$biaya172 = isset($_SESSION['biaya172']) ? $_SESSION['biaya172'] : $row['biaya172'];
$biaya173 = isset($_SESSION['biaya173']) ? $_SESSION['biaya173'] : $row['biaya173'];
$biaya174 = isset($_SESSION['biaya174']) ? $_SESSION['biaya174'] : $row['biaya174'];
$biaya175 = isset($_SESSION['biaya175']) ? $_SESSION['biaya175'] : $row['biaya175'];
$biaya176 = isset($_SESSION['biaya176']) ? $_SESSION['biaya176'] : $row['biaya176'];
$biaya177 = isset($_SESSION['biaya177']) ? $_SESSION['biaya177'] : $row['biaya177'];
$biaya178 = isset($_SESSION['biaya178']) ? $_SESSION['biaya178'] : $row['biaya178'];
$biaya179 = isset($_SESSION['biaya179']) ? $_SESSION['biaya179'] : $row['biaya179'];
$biaya180 = isset($_SESSION['biaya180']) ? $_SESSION['biaya180'] : $row['biaya180'];
$biaya181 = isset($_SESSION['biaya181']) ? $_SESSION['biaya181'] : $row['biaya181'];
$biaya182 = isset($_SESSION['biaya182']) ? $_SESSION['biaya182'] : $row['biaya182'];
$biaya183 = isset($_SESSION['biaya183']) ? $_SESSION['biaya183'] : $row['biaya183'];
$biaya184 = isset($_SESSION['biaya184']) ? $_SESSION['biaya184'] : $row['biaya184'];
$biaya185 = isset($_SESSION['biaya185']) ? $_SESSION['biaya185'] : $row['biaya185'];
$biaya186 = isset($_SESSION['biaya186']) ? $_SESSION['biaya186'] : $row['biaya186'];
$biaya187 = isset($_SESSION['biaya187']) ? $_SESSION['biaya187'] : $row['biaya187'];
$biaya188 = isset($_SESSION['biaya188']) ? $_SESSION['biaya188'] : $row['biaya188'];
$biaya189 = isset($_SESSION['biaya189']) ? $_SESSION['biaya189'] : $row['biaya189'];
$biaya190 = isset($_SESSION['biaya190']) ? $_SESSION['biaya190'] : $row['biaya190'];
$biaya191 = isset($_SESSION['biaya191']) ? $_SESSION['biaya191'] : $row['biaya191'];
$biaya192 = isset($_SESSION['biaya192']) ? $_SESSION['biaya192'] : $row['biaya192'];
$biaya193 = isset($_SESSION['biaya193']) ? $_SESSION['biaya193'] : $row['biaya193'];
$biaya194 = isset($_SESSION['biaya194']) ? $_SESSION['biaya194'] : $row['biaya194'];
$biaya195 = isset($_SESSION['biaya195']) ? $_SESSION['biaya195'] : $row['biaya195'];
$biaya196 = isset($_SESSION['biaya196']) ? $_SESSION['biaya196'] : $row['biaya196'];
$biaya197 = isset($_SESSION['biaya197']) ? $_SESSION['biaya197'] : $row['biaya197'];
$biaya198 = isset($_SESSION['biaya198']) ? $_SESSION['biaya198'] : $row['biaya198'];
$biaya199 = isset($_SESSION['biaya199']) ? $_SESSION['biaya199'] : $row['biaya199'];
$biaya200 = isset($_SESSION['biaya200']) ? $_SESSION['biaya200'] : $row['biaya200'];
$biaya201 = isset($_SESSION['biaya201']) ? $_SESSION['biaya201'] : $row['biaya201'];
$biaya202 = isset($_SESSION['biaya202']) ? $_SESSION['biaya202'] : $row['biaya202'];
$biaya203 = isset($_SESSION['biaya203']) ? $_SESSION['biaya203'] : $row['biaya203'];
$biaya204 = isset($_SESSION['biaya204']) ? $_SESSION['biaya204'] : $row['biaya204'];
$biaya205 = isset($_SESSION['biaya205']) ? $_SESSION['biaya205'] : $row['biaya205'];
$biaya206 = isset($_SESSION['biaya206']) ? $_SESSION['biaya206'] : $row['biaya206'];
$biaya207 = isset($_SESSION['biaya207']) ? $_SESSION['biaya207'] : $row['biaya207'];
$biaya208 = isset($_SESSION['biaya208']) ? $_SESSION['biaya208'] : $row['biaya208'];
$biaya209 = isset($_SESSION['biaya209']) ? $_SESSION['biaya209'] : $row['biaya209'];
$biaya210 = isset($_SESSION['biaya210']) ? $_SESSION['biaya210'] : $row['biaya210'];
$biaya211 = isset($_SESSION['biaya211']) ? $_SESSION['biaya211'] : $row['biaya211'];
$biaya212 = isset($_SESSION['biaya212']) ? $_SESSION['biaya212'] : $row['biaya212'];
$biaya213 = isset($_SESSION['biaya213']) ? $_SESSION['biaya213'] : $row['biaya213'];
$biaya214 = isset($_SESSION['biaya214']) ? $_SESSION['biaya214'] : $row['biaya214'];
$biaya215 = isset($_SESSION['biaya215']) ? $_SESSION['biaya215'] : $row['biaya215'];
$biaya216 = isset($_SESSION['biaya216']) ? $_SESSION['biaya216'] : $row['biaya216'];
$biaya217 = isset($_SESSION['biaya217']) ? $_SESSION['biaya217'] : $row['biaya217'];
$biaya218 = isset($_SESSION['biaya218']) ? $_SESSION['biaya218'] : $row['biaya218'];
$biaya219 = isset($_SESSION['biaya219']) ? $_SESSION['biaya219'] : $row['biaya219'];
$biaya220 = isset($_SESSION['biaya220']) ? $_SESSION['biaya220'] : $row['biaya220'];
$biaya221 = isset($_SESSION['biaya221']) ? $_SESSION['biaya221'] : $row['biaya221'];
$biaya222 = isset($_SESSION['biaya222']) ? $_SESSION['biaya222'] : $row['biaya222'];
$biaya223 = isset($_SESSION['biaya223']) ? $_SESSION['biaya223'] : $row['biaya223'];
$biaya224 = isset($_SESSION['biaya224']) ? $_SESSION['biaya224'] : $row['biaya224'];
$biaya225 = isset($_SESSION['biaya225']) ? $_SESSION['biaya225'] : $row['biaya225'];
$biaya226 = isset($_SESSION['biaya226']) ? $_SESSION['biaya226'] : $row['biaya226'];
$biaya227 = isset($_SESSION['biaya227']) ? $_SESSION['biaya227'] : $row['biaya227'];
$biaya228 = isset($_SESSION['biaya228']) ? $_SESSION['biaya228'] : $row['biaya228'];
$biaya229 = isset($_SESSION['biaya229']) ? $_SESSION['biaya229'] : $row['biaya229'];
$biaya230 = isset($_SESSION['biaya230']) ? $_SESSION['biaya230'] : $row['biaya230'];
$biaya231 = isset($_SESSION['biaya231']) ? $_SESSION['biaya231'] : $row['biaya231'];
$biaya232 = isset($_SESSION['biaya232']) ? $_SESSION['biaya232'] : $row['biaya232'];
$biaya233 = isset($_SESSION['biaya233']) ? $_SESSION['biaya233'] : $row['biaya233'];
$biaya234 = isset($_SESSION['biaya234']) ? $_SESSION['biaya234'] : $row['biaya234'];
$biaya235 = isset($_SESSION['biaya235']) ? $_SESSION['biaya235'] : $row['biaya235'];
$biaya236 = isset($_SESSION['biaya236']) ? $_SESSION['biaya236'] : $row['biaya236'];
$biaya237 = isset($_SESSION['biaya237']) ? $_SESSION['biaya237'] : $row['biaya237'];
$biaya238 = isset($_SESSION['biaya238']) ? $_SESSION['biaya238'] : $row['biaya238'];
$biaya239 = isset($_SESSION['biaya239']) ? $_SESSION['biaya239'] : $row['biaya239'];
$biaya240 = isset($_SESSION['biaya240']) ? $_SESSION['biaya240'] : $row['biaya240'];
$biaya241 = isset($_SESSION['biaya241']) ? $_SESSION['biaya241'] : $row['biaya241'];
$biaya242 = isset($_SESSION['biaya242']) ? $_SESSION['biaya242'] : $row['biaya242'];
$biaya243 = isset($_SESSION['biaya243']) ? $_SESSION['biaya243'] : $row['biaya243'];
$biaya244 = isset($_SESSION['biaya244']) ? $_SESSION['biaya244'] : $row['biaya244'];
$biaya245 = isset($_SESSION['biaya245']) ? $_SESSION['biaya245'] : $row['biaya245'];
$biaya246 = isset($_SESSION['biaya246']) ? $_SESSION['biaya246'] : $row['biaya246'];
$biaya247 = isset($_SESSION['biaya247']) ? $_SESSION['biaya247'] : $row['biaya247'];
$biaya248 = isset($_SESSION['biaya248']) ? $_SESSION['biaya248'] : $row['biaya248'];
$biaya249 = isset($_SESSION['biaya249']) ? $_SESSION['biaya249'] : $row['biaya249'];
$biaya250 = isset($_SESSION['biaya250']) ? $_SESSION['biaya250'] : $row['biaya250'];
$biaya251 = isset($_SESSION['biaya251']) ? $_SESSION['biaya251'] : $row['biaya251'];
$biaya252 = isset($_SESSION['biaya252']) ? $_SESSION['biaya252'] : $row['biaya252'];
$biaya253 = isset($_SESSION['biaya253']) ? $_SESSION['biaya253'] : $row['biaya253'];
$biaya254 = isset($_SESSION['biaya254']) ? $_SESSION['biaya254'] : $row['biaya254'];
$biaya255 = isset($_SESSION['biaya255']) ? $_SESSION['biaya255'] : $row['biaya255'];
$biaya256 = isset($_SESSION['biaya256']) ? $_SESSION['biaya256'] : $row['biaya256'];
$biaya257 = isset($_SESSION['biaya257']) ? $_SESSION['biaya257'] : $row['biaya257'];
$biaya258 = isset($_SESSION['biaya258']) ? $_SESSION['biaya258'] : $row['biaya258'];
$biaya259 = isset($_SESSION['biaya259']) ? $_SESSION['biaya259'] : $row['biaya259'];
$biaya260 = isset($_SESSION['biaya260']) ? $_SESSION['biaya260'] : $row['biaya260'];
$biaya261 = isset($_SESSION['biaya261']) ? $_SESSION['biaya261'] : $row['biaya261'];
$biaya262 = isset($_SESSION['biaya262']) ? $_SESSION['biaya262'] : $row['biaya262'];
$biaya263 = isset($_SESSION['biaya263']) ? $_SESSION['biaya263'] : $row['biaya263'];
$biaya264 = isset($_SESSION['biaya264']) ? $_SESSION['biaya264'] : $row['biaya264'];
$biaya265 = isset($_SESSION['biaya265']) ? $_SESSION['biaya265'] : $row['biaya265'];
$biaya266 = isset($_SESSION['biaya266']) ? $_SESSION['biaya266'] : $row['biaya266'];
$biaya267 = isset($_SESSION['biaya267']) ? $_SESSION['biaya267'] : $row['biaya267'];
$biaya268 = isset($_SESSION['biaya268']) ? $_SESSION['biaya268'] : $row['biaya268'];
$biaya269 = isset($_SESSION['biaya269']) ? $_SESSION['biaya269'] : $row['biaya269'];
$biaya270 = isset($_SESSION['biaya270']) ? $_SESSION['biaya270'] : $row['biaya270'];

$biaya271 = isset($_SESSION['biaya271']) ? $_SESSION['biaya271'] : $row['biaya271'];
$biaya272 = isset($_SESSION['biaya272']) ? $_SESSION['biaya272'] : $row['biaya272'];
$biaya273 = isset($_SESSION['biaya273']) ? $_SESSION['biaya273'] : $row['biaya273'];
$biaya274 = isset($_SESSION['biaya274']) ? $_SESSION['biaya274'] : $row['biaya274'];
$biaya275 = isset($_SESSION['biaya275']) ? $_SESSION['biaya275'] : $row['biaya275'];
$biaya276 = isset($_SESSION['biaya276']) ? $_SESSION['biaya276'] : $row['biaya276'];
$biaya277 = isset($_SESSION['biaya277']) ? $_SESSION['biaya277'] : $row['biaya277'];
$biaya278 = isset($_SESSION['biaya278']) ? $_SESSION['biaya278'] : $row['biaya278'];
$biaya279 = isset($_SESSION['biaya279']) ? $_SESSION['biaya279'] : $row['biaya279'];
$biaya280 = isset($_SESSION['biaya280']) ? $_SESSION['biaya280'] : $row['biaya280'];
$biaya281 = isset($_SESSION['biaya281']) ? $_SESSION['biaya281'] : $row['biaya281'];
$biaya282 = isset($_SESSION['biaya282']) ? $_SESSION['biaya282'] : $row['biaya282'];
$biaya283 = isset($_SESSION['biaya283']) ? $_SESSION['biaya283'] : $row['biaya283'];
$biaya284 = isset($_SESSION['biaya284']) ? $_SESSION['biaya284'] : $row['biaya284'];
$biaya285 = isset($_SESSION['biaya285']) ? $_SESSION['biaya285'] : $row['biaya285'];
$biaya286 = isset($_SESSION['biaya286']) ? $_SESSION['biaya286'] : $row['biaya286'];
$biaya287 = isset($_SESSION['biaya287']) ? $_SESSION['biaya287'] : $row['biaya287'];
$biaya288 = isset($_SESSION['biaya288']) ? $_SESSION['biaya288'] : $row['biaya288'];
$biaya289 = isset($_SESSION['biaya289']) ? $_SESSION['biaya289'] : $row['biaya289'];
$biaya290 = isset($_SESSION['biaya290']) ? $_SESSION['biaya290'] : $row['biaya290'];
$biaya291 = isset($_SESSION['biaya291']) ? $_SESSION['biaya291'] : $row['biaya291'];
$biaya292 = isset($_SESSION['biaya292']) ? $_SESSION['biaya292'] : $row['biaya292'];
$biaya293 = isset($_SESSION['biaya293']) ? $_SESSION['biaya293'] : $row['biaya293'];
$biaya294 = isset($_SESSION['biaya294']) ? $_SESSION['biaya294'] : $row['biaya294'];
$biaya295 = isset($_SESSION['biaya295']) ? $_SESSION['biaya295'] : $row['biaya295'];
$biaya296 = isset($_SESSION['biaya296']) ? $_SESSION['biaya296'] : $row['biaya296'];
$biaya297 = isset($_SESSION['biaya297']) ? $_SESSION['biaya297'] : $row['biaya297'];
$biaya298 = isset($_SESSION['biaya298']) ? $_SESSION['biaya298'] : $row['biaya298'];
$biaya299 = isset($_SESSION['biaya299']) ? $_SESSION['biaya299'] : $row['biaya299'];
$biaya300 = isset($_SESSION['biaya300']) ? $_SESSION['biaya300'] : $row['biaya300'];
$biaya301 = isset($_SESSION['biaya301']) ? $_SESSION['biaya301'] : $row['biaya301'];
$biaya302 = isset($_SESSION['biaya302']) ? $_SESSION['biaya302'] : $row['biaya302'];
$biaya303 = isset($_SESSION['biaya303']) ? $_SESSION['biaya303'] : $row['biaya303'];
$biaya304 = isset($_SESSION['biaya304']) ? $_SESSION['biaya304'] : $row['biaya304'];
$biaya305 = isset($_SESSION['biaya305']) ? $_SESSION['biaya305'] : $row['biaya305'];
$biaya306 = isset($_SESSION['biaya306']) ? $_SESSION['biaya306'] : $row['biaya306'];
$biaya307 = isset($_SESSION['biaya307']) ? $_SESSION['biaya307'] : $row['biaya307'];
$biaya308 = isset($_SESSION['biaya308']) ? $_SESSION['biaya308'] : $row['biaya308'];
$biaya309 = isset($_SESSION['biaya309']) ? $_SESSION['biaya309'] : $row['biaya309'];
$biaya310 = isset($_SESSION['biaya310']) ? $_SESSION['biaya310'] : $row['biaya310'];
$biaya311 = isset($_SESSION['biaya311']) ? $_SESSION['biaya311'] : $row['biaya311'];
$biaya312 = isset($_SESSION['biaya312']) ? $_SESSION['biaya312'] : $row['biaya312'];

$biaya313 = isset($_SESSION['biaya313']) ? $_SESSION['biaya313'] : $row['biaya313'];
$biaya314 = isset($_SESSION['biaya314']) ? $_SESSION['biaya314'] : $row['biaya314'];
$biaya315 = isset($_SESSION['biaya315']) ? $_SESSION['biaya315'] : $row['biaya315'];
$biaya316 = isset($_SESSION['biaya316']) ? $_SESSION['biaya316'] : $row['biaya316'];
$biaya317 = isset($_SESSION['biaya317']) ? $_SESSION['biaya317'] : $row['biaya317'];
$biaya318 = isset($_SESSION['biaya318']) ? $_SESSION['biaya318'] : $row['biaya318'];
$biaya319 = isset($_SESSION['biaya319']) ? $_SESSION['biaya319'] : $row['biaya319'];
$biaya320 = isset($_SESSION['biaya320']) ? $_SESSION['biaya320'] : $row['biaya320'];
$biaya321 = isset($_SESSION['biaya321']) ? $_SESSION['biaya321'] : $row['biaya321'];
$biaya322 = isset($_SESSION['biaya322']) ? $_SESSION['biaya322'] : $row['biaya322'];
$biaya323 = isset($_SESSION['biaya323']) ? $_SESSION['biaya323'] : $row['biaya323'];
$biaya324 = isset($_SESSION['biaya324']) ? $_SESSION['biaya324'] : $row['biaya324'];
$biaya325 = isset($_SESSION['biaya325']) ? $_SESSION['biaya325'] : $row['biaya325'];
$biaya326 = isset($_SESSION['biaya326']) ? $_SESSION['biaya326'] : $row['biaya326'];
$biaya327 = isset($_SESSION['biaya327']) ? $_SESSION['biaya327'] : $row['biaya327'];
$biaya328 = isset($_SESSION['biaya328']) ? $_SESSION['biaya328'] : $row['biaya328'];
$biaya329 = isset($_SESSION['biaya329']) ? $_SESSION['biaya329'] : $row['biaya329'];
$biaya330 = isset($_SESSION['biaya330']) ? $_SESSION['biaya330'] : $row['biaya330'];

$biaya331 = isset($_SESSION['biaya331']) ? $_SESSION['biaya331'] : $row['biaya331'];
$biaya332 = isset($_SESSION['biaya332']) ? $_SESSION['biaya332'] : $row['biaya332'];
$biaya333 = isset($_SESSION['biaya333']) ? $_SESSION['biaya333'] : $row['biaya333'];
$biaya334 = isset($_SESSION['biaya334']) ? $_SESSION['biaya334'] : $row['biaya334'];
$biaya335 = isset($_SESSION['biaya335']) ? $_SESSION['biaya335'] : $row['biaya335'];
$biaya336 = isset($_SESSION['biaya336']) ? $_SESSION['biaya336'] : $row['biaya336'];

$biaya337 = isset($_SESSION['biaya337']) ? $_SESSION['biaya337'] : $row['biaya337'];
$biaya338 = isset($_SESSION['biaya338']) ? $_SESSION['biaya338'] : $row['biaya338'];
$biaya339 = isset($_SESSION['biaya339']) ? $_SESSION['biaya339'] : $row['biaya339'];
$biaya340 = isset($_SESSION['biaya340']) ? $_SESSION['biaya340'] : $row['biaya340'];
$biaya341 = isset($_SESSION['biaya341']) ? $_SESSION['biaya341'] : $row['biaya341'];
$biaya342 = isset($_SESSION['biaya342']) ? $_SESSION['biaya342'] : $row['biaya342'];

$biaya343 = isset($_SESSION['biaya343']) ? $_SESSION['biaya343'] : $row['biaya343'];
$biaya344 = isset($_SESSION['biaya344']) ? $_SESSION['biaya344'] : $row['biaya344'];
$biaya345 = isset($_SESSION['biaya345']) ? $_SESSION['biaya345'] : $row['biaya345'];
$biaya346 = isset($_SESSION['biaya346']) ? $_SESSION['biaya346'] : $row['biaya346'];
$biaya347 = isset($_SESSION['biaya347']) ? $_SESSION['biaya347'] : $row['biaya347'];
$biaya348 = isset($_SESSION['biaya348']) ? $_SESSION['biaya348'] : $row['biaya348'];

$biaya349 = isset($_SESSION['biaya349']) ? $_SESSION['biaya349'] : $row['biaya349'];
$biaya350 = isset($_SESSION['biaya350']) ? $_SESSION['biaya350'] : $row['biaya350'];
$biaya351 = isset($_SESSION['biaya351']) ? $_SESSION['biaya351'] : $row['biaya351'];
$biaya352 = isset($_SESSION['biaya352']) ? $_SESSION['biaya352'] : $row['biaya352'];
$biaya353 = isset($_SESSION['biaya353']) ? $_SESSION['biaya353'] : $row['biaya353'];
$biaya354 = isset($_SESSION['biaya354']) ? $_SESSION['biaya354'] : $row['biaya354'];
 
    $biaya355 = isset($_SESSION['biaya355']) ? $_SESSION['biaya355'] : $row['biaya355'];
    $biaya356 = isset($_SESSION['biaya356']) ? $_SESSION['biaya356'] : $row['biaya356'];
    $biaya357 = isset($_SESSION['biaya357']) ? $_SESSION['biaya357'] : $row['biaya357'];
    $biaya358 = isset($_SESSION['biaya358']) ? $_SESSION['biaya358'] : $row['biaya358'];
    $biaya359 = isset($_SESSION['biaya359']) ? $_SESSION['biaya359'] : $row['biaya359'];
    $biaya360 = isset($_SESSION['biaya360']) ? $_SESSION['biaya360'] : $row['biaya360'];
    $biaya361 = isset($_SESSION['biaya361']) ? $_SESSION['biaya361'] : $row['biaya361'];
    $biaya362 = isset($_SESSION['biaya362']) ? $_SESSION['biaya362'] : $row['biaya362'];
    $biaya363 = isset($_SESSION['biaya363']) ? $_SESSION['biaya363'] : $row['biaya363'];
    $biaya364 = isset($_SESSION['biaya364']) ? $_SESSION['biaya364'] : $row['biaya364'];
    $biaya365 = isset($_SESSION['biaya365']) ? $_SESSION['biaya365'] : $row['biaya365'];
    $biaya366 = isset($_SESSION['biaya366']) ? $_SESSION['biaya366'] : $row['biaya366'];
    $biaya367 = isset($_SESSION['biaya367']) ? $_SESSION['biaya367'] : $row['biaya367'];
    $biaya368 = isset($_SESSION['biaya368']) ? $_SESSION['biaya368'] : $row['biaya368'];
    $biaya369 = isset($_SESSION['biaya369']) ? $_SESSION['biaya369'] : $row['biaya369'];
    $biaya370 = isset($_SESSION['biaya370']) ? $_SESSION['biaya370'] : $row['biaya370'];
    $biaya371 = isset($_SESSION['biaya371']) ? $_SESSION['biaya371'] : $row['biaya371'];
    $biaya372 = isset($_SESSION['biaya372']) ? $_SESSION['biaya372'] : $row['biaya372'];
    $biaya373 = isset($_SESSION['biaya373']) ? $_SESSION['biaya373'] : $row['biaya373'];
    $biaya374 = isset($_SESSION['biaya374']) ? $_SESSION['biaya374'] : $row['biaya374'];
    $biaya375 = isset($_SESSION['biaya375']) ? $_SESSION['biaya375'] : $row['biaya375'];
    $biaya376 = isset($_SESSION['biaya376']) ? $_SESSION['biaya376'] : $row['biaya376'];
    $biaya377 = isset($_SESSION['biaya377']) ? $_SESSION['biaya377'] : $row['biaya377'];
    $biaya378 = isset($_SESSION['biaya378']) ? $_SESSION['biaya378'] : $row['biaya378'];
    $biaya379 = isset($_SESSION['biaya379']) ? $_SESSION['biaya379'] : $row['biaya379'];
    $biaya380 = isset($_SESSION['biaya380']) ? $_SESSION['biaya380'] : $row['biaya380'];
    $biaya381 = isset($_SESSION['biaya381']) ? $_SESSION['biaya381'] : $row['biaya381'];
    $biaya382 = isset($_SESSION['biaya382']) ? $_SESSION['biaya382'] : $row['biaya382'];
    $biaya383 = isset($_SESSION['biaya383']) ? $_SESSION['biaya383'] : $row['biaya383'];
    $biaya384 = isset($_SESSION['biaya384']) ? $_SESSION['biaya384'] : $row['biaya384'];
    $biaya385 = isset($_SESSION['biaya385']) ? $_SESSION['biaya385'] : $row['biaya385'];
    $biaya386 = isset($_SESSION['biaya386']) ? $_SESSION['biaya386'] : $row['biaya386'];
    $biaya387 = isset($_SESSION['biaya387']) ? $_SESSION['biaya387'] : $row['biaya387'];
    $biaya388 = isset($_SESSION['biaya388']) ? $_SESSION['biaya388'] : $row['biaya388'];
    $biaya389 = isset($_SESSION['biaya389']) ? $_SESSION['biaya389'] : $row['biaya389'];
    $biaya390 = isset($_SESSION['biaya390']) ? $_SESSION['biaya390'] : $row['biaya390'];
    $biaya391 = isset($_SESSION['biaya391']) ? $_SESSION['biaya391'] : $row['biaya391'];
    $biaya392 = isset($_SESSION['biaya392']) ? $_SESSION['biaya392'] : $row['biaya392'];
    $biaya393 = isset($_SESSION['biaya393']) ? $_SESSION['biaya393'] : $row['biaya393'];
    $biaya394 = isset($_SESSION['biaya394']) ? $_SESSION['biaya394'] : $row['biaya394'];
    $biaya395 = isset($_SESSION['biaya395']) ? $_SESSION['biaya395'] : $row['biaya395'];
    $biaya396 = isset($_SESSION['biaya396']) ? $_SESSION['biaya396'] : $row['biaya396'];
    $biaya397 = isset($_SESSION['biaya397']) ? $_SESSION['biaya397'] : $row['biaya397'];
    $biaya398 = isset($_SESSION['biaya398']) ? $_SESSION['biaya398'] : $row['biaya398'];
    $biaya399 = isset($_SESSION['biaya399']) ? $_SESSION['biaya399'] : $row['biaya399'];
    $biaya400 = isset($_SESSION['biaya400']) ? $_SESSION['biaya400'] : $row['biaya400'];
    $biaya401 = isset($_SESSION['biaya401']) ? $_SESSION['biaya401'] : $row['biaya401'];
    $biaya402 = isset($_SESSION['biaya402']) ? $_SESSION['biaya402'] : $row['biaya402'];
    $biaya403 = isset($_SESSION['biaya403']) ? $_SESSION['biaya403'] : $row['biaya403'];
    $biaya404 = isset($_SESSION['biaya404']) ? $_SESSION['biaya404'] : $row['biaya404'];
    $biaya405 = isset($_SESSION['biaya405']) ? $_SESSION['biaya405'] : $row['biaya405'];
    $biaya406 = isset($_SESSION['biaya406']) ? $_SESSION['biaya406'] : $row['biaya406'];
    $biaya407 = isset($_SESSION['biaya407']) ? $_SESSION['biaya407'] : $row['biaya407'];
    $biaya408 = isset($_SESSION['biaya408']) ? $_SESSION['biaya408'] : $row['biaya408'];
    $biaya409 = isset($_SESSION['biaya409']) ? $_SESSION['biaya409'] : $row['biaya409'];
    $biaya410 = isset($_SESSION['biaya410']) ? $_SESSION['biaya410'] : $row['biaya410'];
    $biaya411 = isset($_SESSION['biaya411']) ? $_SESSION['biaya411'] : $row['biaya411'];
    $biaya412 = isset($_SESSION['biaya412']) ? $_SESSION['biaya412'] : $row['biaya412'];
    $biaya413 = isset($_SESSION['biaya413']) ? $_SESSION['biaya413'] : $row['biaya413'];
    $biaya414 = isset($_SESSION['biaya414']) ? $_SESSION['biaya414'] : $row['biaya414'];
    $biaya415 = isset($_SESSION['biaya415']) ? $_SESSION['biaya415'] : $row['biaya415'];
    $biaya416 = isset($_SESSION['biaya416']) ? $_SESSION['biaya416'] : $row['biaya416'];
    $biaya417 = isset($_SESSION['biaya417']) ? $_SESSION['biaya417'] : $row['biaya417'];
    $biaya418 = isset($_SESSION['biaya418']) ? $_SESSION['biaya418'] : $row['biaya418'];
    $biaya419 = isset($_SESSION['biaya419']) ? $_SESSION['biaya419'] : $row['biaya419'];
    $biaya420 = isset($_SESSION['biaya420']) ? $_SESSION['biaya420'] : $row['biaya420'];
    $biaya421 = isset($_SESSION['biaya421']) ? $_SESSION['biaya421'] : $row['biaya421'];
    $biaya422 = isset($_SESSION['biaya422']) ? $_SESSION['biaya422'] : $row['biaya422'];
    $biaya423 = isset($_SESSION['biaya423']) ? $_SESSION['biaya423'] : $row['biaya423'];
    $biaya424 = isset($_SESSION['biaya424']) ? $_SESSION['biaya424'] : $row['biaya424'];
    $biaya425 = isset($_SESSION['biaya425']) ? $_SESSION['biaya425'] : $row['biaya425'];
    $biaya426 = isset($_SESSION['biaya426']) ? $_SESSION['biaya426'] : $row['biaya426'];
    $biaya427 = isset($_SESSION['biaya427']) ? $_SESSION['biaya427'] : $row['biaya427'];
    $biaya428 = isset($_SESSION['biaya428']) ? $_SESSION['biaya428'] : $row['biaya428'];
    $biaya429 = isset($_SESSION['biaya429']) ? $_SESSION['biaya429'] : $row['biaya429'];
    $biaya430 = isset($_SESSION['biaya430']) ? $_SESSION['biaya430'] : $row['biaya430'];
    $biaya431 = isset($_SESSION['biaya431']) ? $_SESSION['biaya431'] : $row['biaya431'];
    $biaya432 = isset($_SESSION['biaya432']) ? $_SESSION['biaya432'] : $row['biaya432'];
    $biaya433 = isset($_SESSION['biaya433']) ? $_SESSION['biaya433'] : $row['biaya433'];
    $biaya434 = isset($_SESSION['biaya434']) ? $_SESSION['biaya434'] : $row['biaya434'];
    $biaya435 = isset($_SESSION['biaya435']) ? $_SESSION['biaya435'] : $row['biaya435'];
    $biaya436 = isset($_SESSION['biaya436']) ? $_SESSION['biaya436'] : $row['biaya436'];
    $biaya437 = isset($_SESSION['biaya437']) ? $_SESSION['biaya437'] : $row['biaya437'];
    $biaya438 = isset($_SESSION['biaya438']) ? $_SESSION['biaya438'] : $row['biaya438'];
    $biaya439 = isset($_SESSION['biaya439']) ? $_SESSION['biaya439'] : $row['biaya439'];
    $biaya440 = isset($_SESSION['biaya440']) ? $_SESSION['biaya440'] : $row['biaya440'];
    $biaya441 = isset($_SESSION['biaya441']) ? $_SESSION['biaya441'] : $row['biaya441'];
    $biaya442 = isset($_SESSION['biaya442']) ? $_SESSION['biaya442'] : $row['biaya442'];
    $biaya443 = isset($_SESSION['biaya443']) ? $_SESSION['biaya443'] : $row['biaya443'];
    $biaya444 = isset($_SESSION['biaya444']) ? $_SESSION['biaya444'] : $row['biaya444'];
    $biaya445 = isset($_SESSION['biaya445']) ? $_SESSION['biaya445'] : $row['biaya445'];
    $biaya446 = isset($_SESSION['biaya446']) ? $_SESSION['biaya446'] : $row['biaya446'];
    $biaya447 = isset($_SESSION['biaya447']) ? $_SESSION['biaya447'] : $row['biaya447'];
    $biaya448 = isset($_SESSION['biaya448']) ? $_SESSION['biaya448'] : $row['biaya448'];
    $biaya449 = isset($_SESSION['biaya449']) ? $_SESSION['biaya449'] : $row['biaya449'];
    $biaya450 = isset($_SESSION['biaya450']) ? $_SESSION['biaya450'] : $row['biaya450'];
    $biaya451 = isset($_SESSION['biaya451']) ? $_SESSION['biaya451'] : $row['biaya451'];
    $biaya452 = isset($_SESSION['biaya452']) ? $_SESSION['biaya452'] : $row['biaya452'];
    $biaya453 = isset($_SESSION['biaya453']) ? $_SESSION['biaya453'] : $row['biaya453'];
    $biaya454 = isset($_SESSION['biaya454']) ? $_SESSION['biaya454'] : $row['biaya454'];
    $biaya455 = isset($_SESSION['biaya455']) ? $_SESSION['biaya455'] : $row['biaya455'];
    $biaya456 = isset($_SESSION['biaya456']) ? $_SESSION['biaya456'] : $row['biaya456'];
    $biaya457 = isset($_SESSION['biaya457']) ? $_SESSION['biaya457'] : $row['biaya457'];
    $biaya458 = isset($_SESSION['biaya458']) ? $_SESSION['biaya458'] : $row['biaya458'];
    $biaya459 = isset($_SESSION['biaya459']) ? $_SESSION['biaya459'] : $row['biaya459'];
    $biaya460 = isset($_SESSION['biaya460']) ? $_SESSION['biaya460'] : $row['biaya460'];
    $biaya461 = isset($_SESSION['biaya461']) ? $_SESSION['biaya461'] : $row['biaya461'];
    $biaya462 = isset($_SESSION['biaya462']) ? $_SESSION['biaya462'] : $row['biaya462'];
    $biaya463 = isset($_SESSION['biaya463']) ? $_SESSION['biaya463'] : $row['biaya463'];
    $biaya464 = isset($_SESSION['biaya464']) ? $_SESSION['biaya464'] : $row['biaya464'];
    $biaya465 = isset($_SESSION['biaya465']) ? $_SESSION['biaya465'] : $row['biaya465'];
    $biaya466 = isset($_SESSION['biaya466']) ? $_SESSION['biaya466'] : $row['biaya466'];
    $biaya467 = isset($_SESSION['biaya467']) ? $_SESSION['biaya467'] : $row['biaya467'];
    $biaya468 = isset($_SESSION['biaya468']) ? $_SESSION['biaya468'] : $row['biaya468'];
    $biaya469 = isset($_SESSION['biaya469']) ? $_SESSION['biaya469'] : $row['biaya469'];
    $biaya470 = isset($_SESSION['biaya470']) ? $_SESSION['biaya470'] : $row['biaya470'];
    $biaya471 = isset($_SESSION['biaya471']) ? $_SESSION['biaya471'] : $row['biaya471'];
    $biaya472 = isset($_SESSION['biaya472']) ? $_SESSION['biaya472'] : $row['biaya472'];
    $biaya473 = isset($_SESSION['biaya473']) ? $_SESSION['biaya473'] : $row['biaya473'];
    $biaya474 = isset($_SESSION['biaya474']) ? $_SESSION['biaya474'] : $row['biaya474'];
    $biaya475 = isset($_SESSION['biaya475']) ? $_SESSION['biaya475'] : $row['biaya475'];
    $biaya476 = isset($_SESSION['biaya476']) ? $_SESSION['biaya476'] : $row['biaya476'];
    $biaya477 = isset($_SESSION['biaya477']) ? $_SESSION['biaya477'] : $row['biaya477'];
    $biaya478 = isset($_SESSION['biaya478']) ? $_SESSION['biaya478'] : $row['biaya478'];
    $biaya479 = isset($_SESSION['biaya479']) ? $_SESSION['biaya479'] : $row['biaya479'];
    $biaya480 = isset($_SESSION['biaya480']) ? $_SESSION['biaya480'] : $row['biaya480'];
    $biaya481 = isset($_SESSION['biaya481']) ? $_SESSION['biaya481'] : $row['biaya481'];
    $biaya482 = isset($_SESSION['biaya482']) ? $_SESSION['biaya482'] : $row['biaya482'];
    $biaya483 = isset($_SESSION['biaya483']) ? $_SESSION['biaya483'] : $row['biaya483'];
    $biaya484 = isset($_SESSION['biaya484']) ? $_SESSION['biaya484'] : $row['biaya484'];
    $biaya485 = isset($_SESSION['biaya485']) ? $_SESSION['biaya485'] : $row['biaya485'];
    $biaya486 = isset($_SESSION['biaya486']) ? $_SESSION['biaya486'] : $row['biaya486'];
    $biaya487 = isset($_SESSION['biaya487']) ? $_SESSION['biaya487'] : $row['biaya487'];
    $biaya488 = isset($_SESSION['biaya488']) ? $_SESSION['biaya488'] : $row['biaya488'];
    $biaya489 = isset($_SESSION['biaya489']) ? $_SESSION['biaya489'] : $row['biaya489'];
    $biaya490 = isset($_SESSION['biaya490']) ? $_SESSION['biaya490'] : $row['biaya490'];
    $biaya491 = isset($_SESSION['biaya491']) ? $_SESSION['biaya491'] : $row['biaya491'];
    $biaya492 = isset($_SESSION['biaya492']) ? $_SESSION['biaya492'] : $row['biaya492'];
    $biaya493 = isset($_SESSION['biaya493']) ? $_SESSION['biaya493'] : $row['biaya493'];
    $biaya494 = isset($_SESSION['biaya494']) ? $_SESSION['biaya494'] : $row['biaya494'];
    $biaya495 = isset($_SESSION['biaya495']) ? $_SESSION['biaya495'] : $row['biaya495'];
    $biaya496 = isset($_SESSION['biaya496']) ? $_SESSION['biaya496'] : $row['biaya496'];
    $biaya497 = isset($_SESSION['biaya497']) ? $_SESSION['biaya497'] : $row['biaya497'];
    $biaya498 = isset($_SESSION['biaya498']) ? $_SESSION['biaya498'] : $row['biaya498'];
    $biaya499 = isset($_SESSION['biaya499']) ? $_SESSION['biaya499'] : $row['biaya499'];
    $biaya500 = isset($_SESSION['biaya500']) ? $_SESSION['biaya500'] : $row['biaya500'];
    $biaya501 = isset($_SESSION['biaya501']) ? $_SESSION['biaya501'] : $row['biaya501'];
    $biaya502 = isset($_SESSION['biaya502']) ? $_SESSION['biaya502'] : $row['biaya502'];
    $biaya503 = isset($_SESSION['biaya503']) ? $_SESSION['biaya503'] : $row['biaya503'];
    $biaya504 = isset($_SESSION['biaya504']) ? $_SESSION['biaya504'] : $row['biaya504'];
    $biaya505 = isset($_SESSION['biaya505']) ? $_SESSION['biaya505'] : $row['biaya505'];
    $biaya506 = isset($_SESSION['biaya506']) ? $_SESSION['biaya506'] : $row['biaya506'];
    $biaya507 = isset($_SESSION['biaya507']) ? $_SESSION['biaya507'] : $row['biaya507'];
    $biaya508 = isset($_SESSION['biaya508']) ? $_SESSION['biaya508'] : $row['biaya508'];
    $biaya509 = isset($_SESSION['biaya509']) ? $_SESSION['biaya509'] : $row['biaya509'];
    $biaya510 = isset($_SESSION['biaya510']) ? $_SESSION['biaya510'] : $row['biaya510'];
    $biaya511 = isset($_SESSION['biaya511']) ? $_SESSION['biaya511'] : $row['biaya511'];
    $biaya512 = isset($_SESSION['biaya512']) ? $_SESSION['biaya512'] : $row['biaya512'];
    $biaya513 = isset($_SESSION['biaya513']) ? $_SESSION['biaya513'] : $row['biaya513'];
    $biaya514 = isset($_SESSION['biaya514']) ? $_SESSION['biaya514'] : $row['biaya514'];
    $biaya515 = isset($_SESSION['biaya515']) ? $_SESSION['biaya515'] : $row['biaya515'];
    $biaya516 = isset($_SESSION['biaya516']) ? $_SESSION['biaya516'] : $row['biaya516'];
    $biaya517 = isset($_SESSION['biaya517']) ? $_SESSION['biaya517'] : $row['biaya517'];
    $biaya518 = isset($_SESSION['biaya518']) ? $_SESSION['biaya518'] : $row['biaya518'];
    $biaya519 = isset($_SESSION['biaya519']) ? $_SESSION['biaya519'] : $row['biaya519'];
    $biaya520 = isset($_SESSION['biaya520']) ? $_SESSION['biaya520'] : $row['biaya520'];
    $biaya521 = isset($_SESSION['biaya521']) ? $_SESSION['biaya521'] : $row['biaya521'];
    $biaya522 = isset($_SESSION['biaya522']) ? $_SESSION['biaya522'] : $row['biaya522'];


    $biaya1049 = isset($_SESSION['biaya1049']) ? $_SESSION['biaya1049'] : $row['biaya1049'];
    $biaya1050 = isset($_SESSION['biaya1050']) ? $_SESSION['biaya1050'] : $row['biaya1050'];
    $biaya1051 = isset($_SESSION['biaya1051']) ? $_SESSION['biaya1051'] : $row['biaya1051'];
    $biaya1052 = isset($_SESSION['biaya1052']) ? $_SESSION['biaya1052'] : $row['biaya1052'];
    $biaya1053 = isset($_SESSION['biaya1053']) ? $_SESSION['biaya1053'] : $row['biaya1053'];
    $biaya1054 = isset($_SESSION['biaya1054']) ? $_SESSION['biaya1054'] : $row['biaya1054'];


// Update checkbox values when the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // $NOMR = $_GET["nomr"];
    $dxutama = isset($_POST['dxutama']) ? $_POST['dxutama'] : 0;
    $dxsekunder = isset($_POST['dxsekunder']) ? $_POST['dxsekunder'] : 0;

    $biaya1 = isset($_POST['biaya1']) ? $_POST['biaya1'] : 0;
    $biaya2 = isset($_POST['biaya2']) ? $_POST['biaya2'] : 0;
    $biaya3 = isset($_POST['biaya3']) ? $_POST['biaya3'] : 0;
    $biaya4 = isset($_POST['biaya4']) ? $_POST['biaya4'] : 0;
    $biaya5 = isset($_POST['biaya5']) ? $_POST['biaya5'] : 0;
    $biaya6 = isset($_POST['biaya6']) ? $_POST['biaya6'] : 0;
    $biaya7 = isset($_POST['biaya7']) ? $_POST['biaya7'] : 0;
    $biaya8 = isset($_POST['biaya8']) ? $_POST['biaya8'] : 0;
    $biaya9 = isset($_POST['biaya9']) ? $_POST['biaya9'] : 0;
    $biaya10 = isset($_POST['biaya10']) ? $_POST['biaya10'] : 0;
    $biaya11 = isset($_POST['biaya11']) ? $_POST['biaya11'] : 0;
    $biaya12 = isset($_POST['biaya12']) ? $_POST['biaya12'] : 0;
    $biaya13 = isset($_POST['biaya13']) ? $_POST['biaya13'] : 0;
    $biaya14 = isset($_POST['biaya14']) ? $_POST['biaya14'] : 0;
    $biaya15 = isset($_POST['biaya15']) ? $_POST['biaya15'] : 0;
    $biaya16 = isset($_POST['biaya16']) ? $_POST['biaya16'] : 0;
    $biaya17 = isset($_POST['biaya17']) ? $_POST['biaya17'] : 0;
    $biaya18 = isset($_POST['biaya18']) ? $_POST['biaya18'] : 0;
    $biaya19 = isset($_POST['biaya19']) ? $_POST['biaya19'] : 0;
    $biaya20 = isset($_POST['biaya20']) ? $_POST['biaya20'] : 0;
    $biaya21 = isset($_POST['biaya21']) ? $_POST['biaya21'] : 0;
    $biaya22 = isset($_POST['biaya22']) ? $_POST['biaya22'] : 0;
    $biaya23 = isset($_POST['biaya23']) ? $_POST['biaya23'] : 0;
    $biaya24 = isset($_POST['biaya24']) ? $_POST['biaya24'] : 0;
    $biaya25 = isset($_POST['biaya25']) ? $_POST['biaya25'] : 0;
    $biaya26 = isset($_POST['biaya26']) ? $_POST['biaya26'] : 0;
    $biaya27 = isset($_POST['biaya27']) ? $_POST['biaya27'] : 0;
    $biaya28 = isset($_POST['biaya28']) ? $_POST['biaya28'] : 0;
    $biaya29 = isset($_POST['biaya29']) ? $_POST['biaya29'] : 0;
    $biaya30 = isset($_POST['biaya30']) ? $_POST['biaya30'] : 0;
    $biaya31 = isset($_POST['biaya31']) ? $_POST['biaya31'] : 0;
    $biaya32 = isset($_POST['biaya32']) ? $_POST['biaya32'] : 0;
    $biaya33 = isset($_POST['biaya33']) ? $_POST['biaya33'] : 0;
    $biaya34 = isset($_POST['biaya34']) ? $_POST['biaya34'] : 0;
    $biaya35 = isset($_POST['biaya35']) ? $_POST['biaya35'] : 0;
    $biaya36 = isset($_POST['biaya36']) ? $_POST['biaya36'] : 0;
    $biaya37 = isset($_POST['biaya37']) ? $_POST['biaya37'] : 0;
    $biaya38 = isset($_POST['biaya38']) ? $_POST['biaya38'] : 0;
    $biaya39 = isset($_POST['biaya39']) ? $_POST['biaya39'] : 0;
    $biaya40 = isset($_POST['biaya40']) ? $_POST['biaya40'] : 0;
    $biaya41 = isset($_POST['biaya41']) ? $_POST['biaya41'] : 0;
    $biaya42 = isset($_POST['biaya42']) ? $_POST['biaya42'] : 0;
    $biaya43 = isset($_POST['biaya43']) ? $_POST['biaya43'] : 0;
    $biaya44 = isset($_POST['biaya44']) ? $_POST['biaya44'] : 0;
    $biaya45 = isset($_POST['biaya45']) ? $_POST['biaya45'] : 0;
    $biaya46 = isset($_POST['biaya46']) ? $_POST['biaya46'] : 0;
    $biaya47 = isset($_POST['biaya47']) ? $_POST['biaya47'] : 0;
    $biaya48 = isset($_POST['biaya48']) ? $_POST['biaya48'] : 0;
    $biaya49 = isset($_POST['biaya49']) ? $_POST['biaya49'] : 0;
    $biaya50 = isset($_POST['biaya50']) ? $_POST['biaya50'] : 0;
    $biaya51 = isset($_POST['biaya51']) ? $_POST['biaya51'] : 0;
    $biaya52 = isset($_POST['biaya52']) ? $_POST['biaya52'] : 0;
    $biaya53 = isset($_POST['biaya53']) ? $_POST['biaya53'] : 0;
    $biaya54 = isset($_POST['biaya54']) ? $_POST['biaya54'] : 0;
    $biaya55 = isset($_POST['biaya55']) ? $_POST['biaya55'] : 0;
    $biaya56 = isset($_POST['biaya56']) ? $_POST['biaya56'] : 0;
    $biaya57 = isset($_POST['biaya57']) ? $_POST['biaya57'] : 0;
    $biaya58 = isset($_POST['biaya58']) ? $_POST['biaya58'] : 0;
    $biaya59 = isset($_POST['biaya59']) ? $_POST['biaya59'] : 0;
    $biaya60 = isset($_POST['biaya60']) ? $_POST['biaya60'] : 0;
    $biaya61 = isset($_POST['biaya61']) ? $_POST['biaya61'] : 0;
    $biaya62 = isset($_POST['biaya62']) ? $_POST['biaya62'] : 0;
    $biaya63 = isset($_POST['biaya63']) ? $_POST['biaya63'] : 0;
    $biaya64 = isset($_POST['biaya64']) ? $_POST['biaya64'] : 0;
    $biaya65 = isset($_POST['biaya65']) ? $_POST['biaya65'] : 0;
    $biaya66 = isset($_POST['biaya66']) ? $_POST['biaya66'] : 0;
    $biaya67 = isset($_POST['biaya67']) ? $_POST['biaya67'] : 0;
    $biaya68 = isset($_POST['biaya68']) ? $_POST['biaya68'] : 0;
    $biaya69 = isset($_POST['biaya69']) ? $_POST['biaya69'] : 0;
    $biaya70 = isset($_POST['biaya70']) ? $_POST['biaya70'] : 0;
    $biaya71 = isset($_POST['biaya71']) ? $_POST['biaya71'] : 0;
    $biaya72 = isset($_POST['biaya72']) ? $_POST['biaya72'] : 0;
    $biaya73 = isset($_POST['biaya73']) ? $_POST['biaya73'] : 0;
    $biaya74 = isset($_POST['biaya74']) ? $_POST['biaya74'] : 0;
    $biaya75 = isset($_POST['biaya75']) ? $_POST['biaya75'] : 0;
    $biaya76 = isset($_POST['biaya76']) ? $_POST['biaya76'] : 0;
    $biaya77 = isset($_POST['biaya77']) ? $_POST['biaya77'] : 0;
    $biaya78 = isset($_POST['biaya78']) ? $_POST['biaya78'] : 0;
    $biaya79 = isset($_POST['biaya79']) ? $_POST['biaya79'] : 0;
    $biaya80 = isset($_POST['biaya80']) ? $_POST['biaya80'] : 0;
    $biaya81 = isset($_POST['biaya81']) ? $_POST['biaya81'] : 0;
    $biaya82 = isset($_POST['biaya82']) ? $_POST['biaya82'] : 0;
    $biaya83 = isset($_POST['biaya83']) ? $_POST['biaya83'] : 0;
    $biaya84 = isset($_POST['biaya84']) ? $_POST['biaya84'] : 0;
    $biaya85 = isset($_POST['biaya85']) ? $_POST['biaya85'] : 0;
    $biaya86 = isset($_POST['biaya86']) ? $_POST['biaya86'] : 0;
    $biaya87 = isset($_POST['biaya87']) ? $_POST['biaya87'] : 0;
    $biaya88 = isset($_POST['biaya88']) ? $_POST['biaya88'] : 0;
    $biaya89 = isset($_POST['biaya89']) ? $_POST['biaya89'] : 0;
    $biaya90 = isset($_POST['biaya90']) ? $_POST['biaya90'] : 0;
    $biaya91 = isset($_POST['biaya91']) ? $_POST['biaya91'] : 0;
    $biaya92 = isset($_POST['biaya92']) ? $_POST['biaya92'] : 0;
    $biaya93 = isset($_POST['biaya93']) ? $_POST['biaya93'] : 0;
    $biaya94 = isset($_POST['biaya94']) ? $_POST['biaya94'] : 0;
    $biaya95 = isset($_POST['biaya95']) ? $_POST['biaya95'] : 0;
    $biaya96 = isset($_POST['biaya96']) ? $_POST['biaya96'] : 0;
    $biaya97 = isset($_POST['biaya97']) ? $_POST['biaya97'] : 0;
    $biaya98 = isset($_POST['biaya98']) ? $_POST['biaya98'] : 0;
    $biaya99 = isset($_POST['biaya99']) ? $_POST['biaya99'] : 0;
    $biaya100 = isset($_POST['biaya100']) ? $_POST['biaya100'] : 0;
    $biaya101 = isset($_POST['biaya101']) ? $_POST['biaya101'] : 0;
    $biaya102 = isset($_POST['biaya102']) ? $_POST['biaya102'] : 0;
    $biaya103 = isset($_POST['biaya103']) ? $_POST['biaya103'] : 0;
    $biaya104 = isset($_POST['biaya104']) ? $_POST['biaya104'] : 0;
    $biaya105 = isset($_POST['biaya105']) ? $_POST['biaya105'] : 0;
    $biaya106 = isset($_POST['biaya106']) ? $_POST['biaya106'] : 0;
    $biaya107 = isset($_POST['biaya107']) ? $_POST['biaya107'] : 0;
    $biaya108 = isset($_POST['biaya108']) ? $_POST['biaya108'] : 0;
    $biaya109 = isset($_POST['biaya109']) ? $_POST['biaya109'] : 0;
    $biaya110 = isset($_POST['biaya110']) ? $_POST['biaya110'] : 0;
    $biaya111 = isset($_POST['biaya111']) ? $_POST['biaya111'] : 0;
    $biaya112 = isset($_POST['biaya112']) ? $_POST['biaya112'] : 0;
    $biaya113 = isset($_POST['biaya113']) ? $_POST['biaya113'] : 0;
    $biaya114 = isset($_POST['biaya114']) ? $_POST['biaya114'] : 0;
    $biaya115 = isset($_POST['biaya115']) ? $_POST['biaya115'] : 0;
    $biaya116 = isset($_POST['biaya116']) ? $_POST['biaya116'] : 0;
    $biaya117 = isset($_POST['biaya117']) ? $_POST['biaya117'] : 0;
    $biaya118 = isset($_POST['biaya118']) ? $_POST['biaya118'] : 0;
    $biaya119 = isset($_POST['biaya119']) ? $_POST['biaya119'] : 0;
    $biaya117 = isset($_POST['biaya117']) ? $_POST['biaya117'] : 0;
    $biaya118 = isset($_POST['biaya118']) ? $_POST['biaya118'] : 0;
    $biaya119 = isset($_POST['biaya119']) ? $_POST['biaya119'] : 0;
    $biaya120 = isset($_POST['biaya120']) ? $_POST['biaya120'] : 0;
    $biaya121 = isset($_POST['biaya121']) ? $_POST['biaya121'] : 0;
    $biaya122 = isset($_POST['biaya122']) ? $_POST['biaya122'] : 0;
    $biaya123 = isset($_POST['biaya123']) ? $_POST['biaya123'] : 0;
    $biaya124 = isset($_POST['biaya124']) ? $_POST['biaya124'] : 0;
    $biaya125 = isset($_POST['biaya125']) ? $_POST['biaya125'] : 0;
    $biaya126 = isset($_POST['biaya126']) ? $_POST['biaya126'] : 0;
    $biaya127 = isset($_POST['biaya127']) ? $_POST['biaya127'] : 0;
    $biaya128 = isset($_POST['biaya128']) ? $_POST['biaya128'] : 0;
    $biaya129 = isset($_POST['biaya129']) ? $_POST['biaya129'] : 0;
    $biaya130 = isset($_POST['biaya130']) ? $_POST['biaya130'] : 0;
    $biaya131 = isset($_POST['biaya131']) ? $_POST['biaya131'] : 0;
    $biaya132 = isset($_POST['biaya132']) ? $_POST['biaya132'] : 0;
    $biaya133 = isset($_POST['biaya133']) ? $_POST['biaya133'] : 0;
    $biaya134 = isset($_POST['biaya134']) ? $_POST['biaya134'] : 0;
    $biaya135 = isset($_POST['biaya135']) ? $_POST['biaya135'] : 0;
    $biaya136 = isset($_POST['biaya136']) ? $_POST['biaya136'] : 0;
    $biaya137 = isset($_POST['biaya137']) ? $_POST['biaya137'] : 0;
    $biaya138 = isset($_POST['biaya138']) ? $_POST['biaya138'] : 0;
    $biaya139 = isset($_POST['biaya139']) ? $_POST['biaya139'] : 0;
    $biaya140 = isset($_POST['biaya140']) ? $_POST['biaya140'] : 0;
    $biaya141 = isset($_POST['biaya141']) ? $_POST['biaya141'] : 0;
    $biaya142 = isset($_POST['biaya142']) ? $_POST['biaya142'] : 0;
    $biaya143 = isset($_POST['biaya143']) ? $_POST['biaya143'] : 0;
    $biaya144 = isset($_POST['biaya144']) ? $_POST['biaya144'] : 0;
    $biaya145 = isset($_POST['biaya145']) ? $_POST['biaya145'] : 0;
    $biaya146 = isset($_POST['biaya146']) ? $_POST['biaya146'] : 0;
    $biaya147 = isset($_POST['biaya147']) ? $_POST['biaya147'] : 0;
    $biaya148 = isset($_POST['biaya148']) ? $_POST['biaya148'] : 0;
    $biaya149 = isset($_POST['biaya149']) ? $_POST['biaya149'] : 0;
    $biaya150 = isset($_POST['biaya150']) ? $_POST['biaya150'] : 0;
    $biaya151 = isset($_POST['biaya151']) ? $_POST['biaya151'] : 0;
    $biaya152 = isset($_POST['biaya152']) ? $_POST['biaya152'] : 0;
    $biaya153 = isset($_POST['biaya153']) ? $_POST['biaya153'] : 0;
    $biaya154 = isset($_POST['biaya154']) ? $_POST['biaya154'] : 0;
    $biaya155 = isset($_POST['biaya155']) ? $_POST['biaya155'] : 0;
    $biaya156 = isset($_POST['biaya156']) ? $_POST['biaya156'] : 0;
    $biaya157 = isset($_POST['biaya157']) ? $_POST['biaya157'] : 0;
    $biaya158 = isset($_POST['biaya158']) ? $_POST['biaya158'] : 0;
    $biaya159 = isset($_POST['biaya159']) ? $_POST['biaya159'] : 0;
    $biaya160 = isset($_POST['biaya160']) ? $_POST['biaya160'] : 0;
    $biaya161 = isset($_POST['biaya161']) ? $_POST['biaya161'] : 0;
    $biaya162 = isset($_POST['biaya162']) ? $_POST['biaya162'] : 0;
    $biaya163 = isset($_POST['biaya163']) ? $_POST['biaya163'] : 0;
    $biaya164 = isset($_POST['biaya164']) ? $_POST['biaya164'] : 0;
    $biaya165 = isset($_POST['biaya165']) ? $_POST['biaya165'] : 0;
    $biaya166 = isset($_POST['biaya166']) ? $_POST['biaya166'] : 0;
    $biaya167 = isset($_POST['biaya167']) ? $_POST['biaya167'] : 0;
    $biaya168 = isset($_POST['biaya168']) ? $_POST['biaya168'] : 0;
    $biaya169 = isset($_POST['biaya169']) ? $_POST['biaya169'] : 0;
    $biaya170 = isset($_POST['biaya170']) ? $_POST['biaya170'] : 0;
    $biaya171 = isset($_POST['biaya171']) ? $_POST['biaya171'] : 0;
    $biaya172 = isset($_POST['biaya172']) ? $_POST['biaya172'] : 0;
    $biaya173 = isset($_POST['biaya173']) ? $_POST['biaya173'] : 0;
    $biaya174 = isset($_POST['biaya174']) ? $_POST['biaya174'] : 0;
    $biaya175 = isset($_POST['biaya175']) ? $_POST['biaya175'] : 0;
    $biaya176 = isset($_POST['biaya176']) ? $_POST['biaya176'] : 0;
    $biaya177 = isset($_POST['biaya177']) ? $_POST['biaya177'] : 0;
    $biaya178 = isset($_POST['biaya178']) ? $_POST['biaya178'] : 0;
    $biaya179 = isset($_POST['biaya179']) ? $_POST['biaya179'] : 0;
    $biaya180 = isset($_POST['biaya180']) ? $_POST['biaya180'] : 0;
    $biaya181 = isset($_POST['biaya181']) ? $_POST['biaya181'] : 0;
    $biaya182 = isset($_POST['biaya182']) ? $_POST['biaya182'] : 0;
    $biaya183 = isset($_POST['biaya183']) ? $_POST['biaya183'] : 0;
    $biaya184 = isset($_POST['biaya184']) ? $_POST['biaya184'] : 0;
    $biaya185 = isset($_POST['biaya185']) ? $_POST['biaya185'] : 0;
    $biaya186 = isset($_POST['biaya186']) ? $_POST['biaya186'] : 0;
    $biaya187 = isset($_POST['biaya187']) ? $_POST['biaya187'] : 0;
    $biaya188 = isset($_POST['biaya188']) ? $_POST['biaya188'] : 0;
    $biaya189 = isset($_POST['biaya189']) ? $_POST['biaya189'] : 0;
    $biaya190 = isset($_POST['biaya190']) ? $_POST['biaya190'] : 0;
    $biaya191 = isset($_POST['biaya191']) ? $_POST['biaya191'] : 0;
    $biaya192 = isset($_POST['biaya192']) ? $_POST['biaya192'] : 0;
    $biaya193 = isset($_POST['biaya193']) ? $_POST['biaya193'] : 0;
    $biaya194 = isset($_POST['biaya194']) ? $_POST['biaya194'] : 0;
    $biaya195 = isset($_POST['biaya195']) ? $_POST['biaya195'] : 0;
    $biaya196 = isset($_POST['biaya196']) ? $_POST['biaya196'] : 0;
    $biaya197 = isset($_POST['biaya197']) ? $_POST['biaya197'] : 0;
    $biaya198 = isset($_POST['biaya198']) ? $_POST['biaya198'] : 0;
    $biaya199 = isset($_POST['biaya199']) ? $_POST['biaya199'] : 0;
    $biaya200 = isset($_POST['biaya200']) ? $_POST['biaya200'] : 0;
    $biaya201 = isset($_POST['biaya201']) ? $_POST['biaya201'] : 0;
    $biaya202 = isset($_POST['biaya202']) ? $_POST['biaya202'] : 0;
    $biaya203 = isset($_POST['biaya203']) ? $_POST['biaya203'] : 0;
    $biaya204 = isset($_POST['biaya204']) ? $_POST['biaya204'] : 0;
    $biaya205 = isset($_POST['biaya205']) ? $_POST['biaya205'] : 0;
    $biaya206 = isset($_POST['biaya206']) ? $_POST['biaya206'] : 0;
    $biaya207 = isset($_POST['biaya207']) ? $_POST['biaya207'] : 0;
    $biaya208 = isset($_POST['biaya208']) ? $_POST['biaya208'] : 0;
    $biaya209 = isset($_POST['biaya209']) ? $_POST['biaya209'] : 0;
    $biaya210 = isset($_POST['biaya210']) ? $_POST['biaya210'] : 0;
    $biaya211 = isset($_POST['biaya211']) ? $_POST['biaya211'] : 0;
    $biaya212 = isset($_POST['biaya212']) ? $_POST['biaya212'] : 0;
    $biaya213 = isset($_POST['biaya213']) ? $_POST['biaya213'] : 0;
    $biaya214 = isset($_POST['biaya214']) ? $_POST['biaya214'] : 0;
    $biaya215 = isset($_POST['biaya215']) ? $_POST['biaya215'] : 0;
    $biaya216 = isset($_POST['biaya216']) ? $_POST['biaya216'] : 0;
    $biaya217 = isset($_POST['biaya217']) ? $_POST['biaya217'] : 0;
    $biaya218 = isset($_POST['biaya218']) ? $_POST['biaya218'] : 0;
    $biaya219 = isset($_POST['biaya219']) ? $_POST['biaya219'] : 0;
    $biaya220 = isset($_POST['biaya220']) ? $_POST['biaya220'] : 0;
    $biaya221 = isset($_POST['biaya221']) ? $_POST['biaya221'] : 0;
    $biaya222 = isset($_POST['biaya222']) ? $_POST['biaya222'] : 0;
    $biaya223 = isset($_POST['biaya223']) ? $_POST['biaya223'] : 0;
    $biaya224 = isset($_POST['biaya224']) ? $_POST['biaya224'] : 0;
    $biaya225 = isset($_POST['biaya225']) ? $_POST['biaya225'] : 0;
    $biaya226 = isset($_POST['biaya226']) ? $_POST['biaya226'] : 0;
    $biaya227 = isset($_POST['biaya227']) ? $_POST['biaya227'] : 0;
    $biaya228 = isset($_POST['biaya228']) ? $_POST['biaya228'] : 0;
    $biaya229 = isset($_POST['biaya229']) ? $_POST['biaya229'] : 0;
    $biaya230 = isset($_POST['biaya230']) ? $_POST['biaya230'] : 0;
    $biaya231 = isset($_POST['biaya231']) ? $_POST['biaya231'] : 0;
    $biaya232 = isset($_POST['biaya232']) ? $_POST['biaya232'] : 0;
    $biaya233 = isset($_POST['biaya233']) ? $_POST['biaya233'] : 0;
    $biaya234 = isset($_POST['biaya234']) ? $_POST['biaya234'] : 0;
    $biaya235 = isset($_POST['biaya235']) ? $_POST['biaya235'] : 0;
    $biaya236 = isset($_POST['biaya236']) ? $_POST['biaya236'] : 0;
    $biaya237 = isset($_POST['biaya237']) ? $_POST['biaya237'] : 0;
    $biaya238 = isset($_POST['biaya238']) ? $_POST['biaya238'] : 0;
    $biaya239 = isset($_POST['biaya239']) ? $_POST['biaya239'] : 0;
    $biaya240 = isset($_POST['biaya240']) ? $_POST['biaya240'] : 0;
    $biaya241 = isset($_POST['biaya241']) ? $_POST['biaya241'] : 0;
    $biaya242 = isset($_POST['biaya242']) ? $_POST['biaya242'] : 0;
    $biaya243 = isset($_POST['biaya243']) ? $_POST['biaya243'] : 0;
    $biaya244 = isset($_POST['biaya244']) ? $_POST['biaya244'] : 0;
    $biaya245 = isset($_POST['biaya245']) ? $_POST['biaya245'] : 0;
    $biaya246 = isset($_POST['biaya246']) ? $_POST['biaya246'] : 0;
    $biaya247 = isset($_POST['biaya247']) ? $_POST['biaya247'] : 0;
    $biaya248 = isset($_POST['biaya248']) ? $_POST['biaya248'] : 0;
    $biaya249 = isset($_POST['biaya249']) ? $_POST['biaya249'] : 0;
    $biaya250 = isset($_POST['biaya250']) ? $_POST['biaya250'] : 0;
    $biaya251 = isset($_POST['biaya251']) ? $_POST['biaya251'] : 0;
    $biaya252 = isset($_POST['biaya252']) ? $_POST['biaya252'] : 0;
    $biaya253 = isset($_POST['biaya253']) ? $_POST['biaya253'] : 0;
    $biaya254 = isset($_POST['biaya254']) ? $_POST['biaya254'] : 0;
    $biaya255 = isset($_POST['biaya255']) ? $_POST['biaya255'] : 0;
    $biaya256 = isset($_POST['biaya256']) ? $_POST['biaya256'] : 0;
    $biaya257 = isset($_POST['biaya257']) ? $_POST['biaya257'] : 0;
    $biaya258 = isset($_POST['biaya258']) ? $_POST['biaya258'] : 0;
    $biaya259 = isset($_POST['biaya259']) ? $_POST['biaya259'] : 0;
    $biaya260 = isset($_POST['biaya260']) ? $_POST['biaya260'] : 0;
    $biaya261 = isset($_POST['biaya261']) ? $_POST['biaya261'] : 0;
    $biaya262 = isset($_POST['biaya262']) ? $_POST['biaya262'] : 0;
    $biaya263 = isset($_POST['biaya263']) ? $_POST['biaya263'] : 0;
    $biaya264 = isset($_POST['biaya264']) ? $_POST['biaya264'] : 0;
    $biaya265 = isset($_POST['biaya265']) ? $_POST['biaya265'] : 0;
    $biaya266 = isset($_POST['biaya266']) ? $_POST['biaya266'] : 0;
    $biaya267 = isset($_POST['biaya267']) ? $_POST['biaya267'] : 0;
    $biaya268 = isset($_POST['biaya268']) ? $_POST['biaya268'] : 0;
    $biaya269 = isset($_POST['biaya269']) ? $_POST['biaya269'] : 0;
    $biaya270 = isset($_POST['biaya270']) ? $_POST['biaya270'] : 0;

    $biaya271 = isset($_POST['biaya271']) ? $_POST['biaya271'] : 0;
    $biaya272 = isset($_POST['biaya272']) ? $_POST['biaya272'] : 0;
    $biaya273 = isset($_POST['biaya273']) ? $_POST['biaya273'] : 0;
    $biaya274 = isset($_POST['biaya274']) ? $_POST['biaya274'] : 0;
    $biaya275 = isset($_POST['biaya275']) ? $_POST['biaya275'] : 0;
    $biaya276 = isset($_POST['biaya276']) ? $_POST['biaya276'] : 0;
    $biaya277 = isset($_POST['biaya277']) ? $_POST['biaya277'] : 0;
    $biaya278 = isset($_POST['biaya278']) ? $_POST['biaya278'] : 0;
    $biaya279 = isset($_POST['biaya279']) ? $_POST['biaya279'] : 0;
    $biaya280 = isset($_POST['biaya280']) ? $_POST['biaya280'] : 0;
    $biaya281 = isset($_POST['biaya281']) ? $_POST['biaya281'] : 0;
    $biaya282 = isset($_POST['biaya282']) ? $_POST['biaya282'] : 0;
    $biaya283 = isset($_POST['biaya283']) ? $_POST['biaya283'] : 0;
    $biaya284 = isset($_POST['biaya284']) ? $_POST['biaya284'] : 0;
    $biaya285 = isset($_POST['biaya285']) ? $_POST['biaya285'] : 0;
    $biaya286 = isset($_POST['biaya286']) ? $_POST['biaya286'] : 0;
    $biaya287 = isset($_POST['biaya287']) ? $_POST['biaya287'] : 0;
    $biaya288 = isset($_POST['biaya288']) ? $_POST['biaya288'] : 0;
    $biaya289 = isset($_POST['biaya289']) ? $_POST['biaya289'] : 0;
    $biaya290 = isset($_POST['biaya290']) ? $_POST['biaya290'] : 0;
    $biaya291 = isset($_POST['biaya291']) ? $_POST['biaya291'] : 0;
    $biaya292 = isset($_POST['biaya292']) ? $_POST['biaya292'] : 0;
    $biaya293 = isset($_POST['biaya293']) ? $_POST['biaya293'] : 0;
    $biaya294 = isset($_POST['biaya294']) ? $_POST['biaya294'] : 0;
    $biaya295 = isset($_POST['biaya295']) ? $_POST['biaya295'] : 0;
    $biaya296 = isset($_POST['biaya296']) ? $_POST['biaya296'] : 0;
    $biaya297 = isset($_POST['biaya297']) ? $_POST['biaya297'] : 0;
    $biaya298 = isset($_POST['biaya298']) ? $_POST['biaya298'] : 0;
    $biaya299 = isset($_POST['biaya299']) ? $_POST['biaya299'] : 0;
    $biaya300 = isset($_POST['biaya300']) ? $_POST['biaya300'] : 0;
    $biaya301 = isset($_POST['biaya301']) ? $_POST['biaya301'] : 0;
    $biaya302 = isset($_POST['biaya302']) ? $_POST['biaya302'] : 0;
    $biaya303 = isset($_POST['biaya303']) ? $_POST['biaya303'] : 0;
    $biaya304 = isset($_POST['biaya304']) ? $_POST['biaya304'] : 0;
    $biaya305 = isset($_POST['biaya305']) ? $_POST['biaya305'] : 0;
    $biaya306 = isset($_POST['biaya306']) ? $_POST['biaya306'] : 0;
    $biaya307 = isset($_POST['biaya307']) ? $_POST['biaya307'] : 0;
    $biaya308 = isset($_POST['biaya308']) ? $_POST['biaya308'] : 0;
    $biaya309 = isset($_POST['biaya309']) ? $_POST['biaya309'] : 0;
    $biaya310 = isset($_POST['biaya310']) ? $_POST['biaya310'] : 0;
    $biaya311 = isset($_POST['biaya311']) ? $_POST['biaya311'] : 0;
    $biaya312 = isset($_POST['biaya312']) ? $_POST['biaya312'] : 0;

    $biaya313 = isset($_POST['biaya313']) ? $_POST['biaya313'] : 0;
    $biaya314 = isset($_POST['biaya314']) ? $_POST['biaya314'] : 0;
    $biaya315 = isset($_POST['biaya315']) ? $_POST['biaya315'] : 0;
    $biaya316 = isset($_POST['biaya316']) ? $_POST['biaya316'] : 0;
    $biaya317 = isset($_POST['biaya317']) ? $_POST['biaya317'] : 0;
    $biaya318 = isset($_POST['biaya318']) ? $_POST['biaya318'] : 0;
    $biaya319 = isset($_POST['biaya319']) ? $_POST['biaya319'] : 0;
    $biaya320 = isset($_POST['biaya320']) ? $_POST['biaya320'] : 0;
    $biaya321 = isset($_POST['biaya321']) ? $_POST['biaya321'] : 0;
    $biaya322 = isset($_POST['biaya322']) ? $_POST['biaya322'] : 0;
    $biaya323 = isset($_POST['biaya323']) ? $_POST['biaya323'] : 0;

    $biaya324 = isset($_POST['biaya324']) ? $_POST['biaya324'] : 0;
    $biaya325 = isset($_POST['biaya325']) ? $_POST['biaya325'] : 0;
    $biaya326 = isset($_POST['biaya326']) ? $_POST['biaya326'] : 0;
    $biaya327 = isset($_POST['biaya327']) ? $_POST['biaya327'] : 0;
    $biaya328 = isset($_POST['biaya328']) ? $_POST['biaya328'] : 0;
    $biaya329 = isset($_POST['biaya329']) ? $_POST['biaya329'] : 0;
    $biaya330 = isset($_POST['biaya330']) ? $_POST['biaya330'] : 0;

    $biaya331 = isset($_POST['biaya331']) ? $_POST['biaya331'] : 0;
    $biaya332 = isset($_POST['biaya332']) ? $_POST['biaya332'] : 0;
    $biaya333 = isset($_POST['biaya333']) ? $_POST['biaya333'] : 0;
    $biaya334 = isset($_POST['biaya334']) ? $_POST['biaya334'] : 0;
    $biaya335 = isset($_POST['biaya335']) ? $_POST['biaya335'] : 0;
    $biaya336 = isset($_POST['biaya336']) ? $_POST['biaya336'] : 0;

    $biaya337 = isset($_POST['biaya337']) ? $_POST['biaya337'] : 0;
    $biaya338 = isset($_POST['biaya338']) ? $_POST['biaya338'] : 0;
    $biaya339 = isset($_POST['biaya339']) ? $_POST['biaya339'] : 0;
    $biaya340 = isset($_POST['biaya340']) ? $_POST['biaya340'] : 0;
    $biaya341 = isset($_POST['biaya341']) ? $_POST['biaya341'] : 0;
    $biaya342 = isset($_POST['biaya342']) ? $_POST['biaya342'] : 0;

    $biaya343 = isset($_POST['biaya343']) ? $_POST['biaya343'] : 0;
    $biaya344 = isset($_POST['biaya344']) ? $_POST['biaya344'] : 0;
    $biaya345 = isset($_POST['biaya345']) ? $_POST['biaya345'] : 0;
    $biaya346 = isset($_POST['biaya346']) ? $_POST['biaya346'] : 0;
    $biaya347 = isset($_POST['biaya347']) ? $_POST['biaya347'] : 0;
    $biaya348 = isset($_POST['biaya348']) ? $_POST['biaya348'] : 0;

    $biaya349 = isset($_POST['biaya349']) ? $_POST['biaya349'] : 0;
    $biaya350 = isset($_POST['biaya350']) ? $_POST['biaya350'] : 0;
    $biaya351 = isset($_POST['biaya351']) ? $_POST['biaya351'] : 0;
    $biaya352 = isset($_POST['biaya352']) ? $_POST['biaya352'] : 0;
    $biaya353 = isset($_POST['biaya353']) ? $_POST['biaya353'] : 0;
    $biaya354 = isset($_POST['biaya354']) ? $_POST['biaya354'] : 0;

    $biaya355 = isset($_POST['biaya355']) ? $_POST['biaya355'] : 0;
    $biaya356 = isset($_POST['biaya356']) ? $_POST['biaya356'] : 0;
    $biaya357 = isset($_POST['biaya357']) ? $_POST['biaya357'] : 0;
    $biaya358 = isset($_POST['biaya358']) ? $_POST['biaya358'] : 0;
    $biaya359 = isset($_POST['biaya359']) ? $_POST['biaya359'] : 0;
    $biaya360 = isset($_POST['biaya360']) ? $_POST['biaya360'] : 0;
    $biaya361 = isset($_POST['biaya361']) ? $_POST['biaya361'] : 0;
    $biaya362 = isset($_POST['biaya362']) ? $_POST['biaya362'] : 0;
    $biaya363 = isset($_POST['biaya363']) ? $_POST['biaya363'] : 0;
    $biaya364 = isset($_POST['biaya364']) ? $_POST['biaya364'] : 0;
    $biaya365 = isset($_POST['biaya365']) ? $_POST['biaya365'] : 0;
    $biaya366 = isset($_POST['biaya366']) ? $_POST['biaya366'] : 0;
    $biaya367 = isset($_POST['biaya367']) ? $_POST['biaya367'] : 0;
    $biaya368 = isset($_POST['biaya368']) ? $_POST['biaya368'] : 0;
    $biaya369 = isset($_POST['biaya369']) ? $_POST['biaya369'] : 0;
    $biaya370 = isset($_POST['biaya370']) ? $_POST['biaya370'] : 0;
    $biaya371 = isset($_POST['biaya371']) ? $_POST['biaya371'] : 0;
    $biaya372 = isset($_POST['biaya372']) ? $_POST['biaya372'] : 0;
    $biaya373 = isset($_POST['biaya373']) ? $_POST['biaya373'] : 0;
    $biaya374 = isset($_POST['biaya374']) ? $_POST['biaya374'] : 0;
    $biaya375 = isset($_POST['biaya375']) ? $_POST['biaya375'] : 0;
    $biaya376 = isset($_POST['biaya376']) ? $_POST['biaya376'] : 0;
    $biaya377 = isset($_POST['biaya377']) ? $_POST['biaya377'] : 0;
    $biaya378 = isset($_POST['biaya378']) ? $_POST['biaya378'] : 0;
    $biaya379 = isset($_POST['biaya379']) ? $_POST['biaya379'] : 0;
    $biaya380 = isset($_POST['biaya380']) ? $_POST['biaya380'] : 0;
    $biaya381 = isset($_POST['biaya381']) ? $_POST['biaya381'] : 0;
    $biaya382 = isset($_POST['biaya382']) ? $_POST['biaya382'] : 0;
    $biaya383 = isset($_POST['biaya383']) ? $_POST['biaya383'] : 0;
    $biaya384 = isset($_POST['biaya384']) ? $_POST['biaya384'] : 0;
    $biaya385 = isset($_POST['biaya385']) ? $_POST['biaya385'] : 0;
    $biaya386 = isset($_POST['biaya386']) ? $_POST['biaya386'] : 0;
    $biaya387 = isset($_POST['biaya387']) ? $_POST['biaya387'] : 0;
    $biaya388 = isset($_POST['biaya388']) ? $_POST['biaya388'] : 0;
    $biaya389 = isset($_POST['biaya389']) ? $_POST['biaya389'] : 0;
    $biaya390 = isset($_POST['biaya390']) ? $_POST['biaya390'] : 0;
    $biaya391 = isset($_POST['biaya391']) ? $_POST['biaya391'] : 0;
    $biaya392 = isset($_POST['biaya392']) ? $_POST['biaya392'] : 0;
    $biaya393 = isset($_POST['biaya393']) ? $_POST['biaya393'] : 0;
    $biaya394 = isset($_POST['biaya394']) ? $_POST['biaya394'] : 0;
    $biaya395 = isset($_POST['biaya395']) ? $_POST['biaya395'] : 0;
    $biaya396 = isset($_POST['biaya396']) ? $_POST['biaya396'] : 0;
    $biaya397 = isset($_POST['biaya397']) ? $_POST['biaya397'] : 0;
    $biaya398 = isset($_POST['biaya398']) ? $_POST['biaya398'] : 0;
    $biaya399 = isset($_POST['biaya399']) ? $_POST['biaya399'] : 0;
    $biaya400 = isset($_POST['biaya400']) ? $_POST['biaya400'] : 0;
    $biaya401 = isset($_POST['biaya401']) ? $_POST['biaya401'] : 0;
    $biaya402 = isset($_POST['biaya402']) ? $_POST['biaya402'] : 0;
    $biaya403 = isset($_POST['biaya403']) ? $_POST['biaya403'] : 0;
    $biaya404 = isset($_POST['biaya404']) ? $_POST['biaya404'] : 0;
    $biaya405 = isset($_POST['biaya405']) ? $_POST['biaya405'] : 0;
    $biaya406 = isset($_POST['biaya406']) ? $_POST['biaya406'] : 0;
    $biaya407 = isset($_POST['biaya407']) ? $_POST['biaya407'] : 0;
    $biaya408 = isset($_POST['biaya408']) ? $_POST['biaya408'] : 0;
    $biaya409 = isset($_POST['biaya409']) ? $_POST['biaya409'] : 0;
    $biaya410 = isset($_POST['biaya410']) ? $_POST['biaya410'] : 0;
    $biaya411 = isset($_POST['biaya411']) ? $_POST['biaya411'] : 0;
    $biaya412 = isset($_POST['biaya412']) ? $_POST['biaya412'] : 0;
    $biaya413 = isset($_POST['biaya413']) ? $_POST['biaya413'] : 0;
    $biaya414 = isset($_POST['biaya414']) ? $_POST['biaya414'] : 0;
    $biaya415 = isset($_POST['biaya415']) ? $_POST['biaya415'] : 0;
    $biaya416 = isset($_POST['biaya416']) ? $_POST['biaya416'] : 0;
    $biaya417 = isset($_POST['biaya417']) ? $_POST['biaya417'] : 0;
    $biaya418 = isset($_POST['biaya418']) ? $_POST['biaya418'] : 0;
    $biaya419 = isset($_POST['biaya419']) ? $_POST['biaya419'] : 0;
    $biaya420 = isset($_POST['biaya420']) ? $_POST['biaya420'] : 0;
    $biaya421 = isset($_POST['biaya421']) ? $_POST['biaya421'] : 0;
    $biaya422 = isset($_POST['biaya422']) ? $_POST['biaya422'] : 0;
    $biaya423 = isset($_POST['biaya423']) ? $_POST['biaya423'] : 0;
    $biaya424 = isset($_POST['biaya424']) ? $_POST['biaya424'] : 0;
    $biaya425 = isset($_POST['biaya425']) ? $_POST['biaya425'] : 0;
    $biaya426 = isset($_POST['biaya426']) ? $_POST['biaya426'] : 0;
    $biaya427 = isset($_POST['biaya427']) ? $_POST['biaya427'] : 0;
    $biaya428 = isset($_POST['biaya428']) ? $_POST['biaya428'] : 0;
    $biaya429 = isset($_POST['biaya429']) ? $_POST['biaya429'] : 0;
    $biaya430 = isset($_POST['biaya430']) ? $_POST['biaya430'] : 0;
    $biaya431 = isset($_POST['biaya431']) ? $_POST['biaya431'] : 0;
    $biaya432 = isset($_POST['biaya432']) ? $_POST['biaya432'] : 0;
    $biaya433 = isset($_POST['biaya433']) ? $_POST['biaya433'] : 0;
    $biaya434 = isset($_POST['biaya434']) ? $_POST['biaya434'] : 0;
    $biaya435 = isset($_POST['biaya435']) ? $_POST['biaya435'] : 0;
    $biaya436 = isset($_POST['biaya436']) ? $_POST['biaya436'] : 0;
    $biaya437 = isset($_POST['biaya437']) ? $_POST['biaya437'] : 0;
    $biaya438 = isset($_POST['biaya438']) ? $_POST['biaya438'] : 0;
    $biaya439 = isset($_POST['biaya439']) ? $_POST['biaya439'] : 0;
    $biaya440 = isset($_POST['biaya440']) ? $_POST['biaya440'] : 0;
    $biaya441 = isset($_POST['biaya441']) ? $_POST['biaya441'] : 0;
    $biaya442 = isset($_POST['biaya442']) ? $_POST['biaya442'] : 0;
    $biaya443 = isset($_POST['biaya443']) ? $_POST['biaya443'] : 0;
    $biaya444 = isset($_POST['biaya444']) ? $_POST['biaya444'] : 0;
    $biaya445 = isset($_POST['biaya445']) ? $_POST['biaya445'] : 0;
    $biaya446 = isset($_POST['biaya446']) ? $_POST['biaya446'] : 0;
    $biaya447 = isset($_POST['biaya447']) ? $_POST['biaya447'] : 0;
    $biaya448 = isset($_POST['biaya448']) ? $_POST['biaya448'] : 0;
    $biaya449 = isset($_POST['biaya449']) ? $_POST['biaya449'] : 0;
    $biaya450 = isset($_POST['biaya450']) ? $_POST['biaya450'] : 0;
    $biaya451 = isset($_POST['biaya451']) ? $_POST['biaya451'] : 0;
    $biaya452 = isset($_POST['biaya452']) ? $_POST['biaya452'] : 0;
    $biaya453 = isset($_POST['biaya453']) ? $_POST['biaya453'] : 0;
    $biaya454 = isset($_POST['biaya454']) ? $_POST['biaya454'] : 0;
    $biaya455 = isset($_POST['biaya455']) ? $_POST['biaya455'] : 0;
    $biaya456 = isset($_POST['biaya456']) ? $_POST['biaya456'] : 0;
    $biaya457 = isset($_POST['biaya457']) ? $_POST['biaya457'] : 0;
    $biaya458 = isset($_POST['biaya458']) ? $_POST['biaya458'] : 0;
    $biaya459 = isset($_POST['biaya459']) ? $_POST['biaya459'] : 0;
    $biaya460 = isset($_POST['biaya460']) ? $_POST['biaya460'] : 0;
    $biaya461 = isset($_POST['biaya461']) ? $_POST['biaya461'] : 0;
    $biaya462 = isset($_POST['biaya462']) ? $_POST['biaya462'] : 0;
    $biaya463 = isset($_POST['biaya463']) ? $_POST['biaya463'] : 0;
    $biaya464 = isset($_POST['biaya464']) ? $_POST['biaya464'] : 0;
    $biaya465 = isset($_POST['biaya465']) ? $_POST['biaya465'] : 0;
    $biaya466 = isset($_POST['biaya466']) ? $_POST['biaya466'] : 0;
    $biaya467 = isset($_POST['biaya467']) ? $_POST['biaya467'] : 0;
    $biaya468 = isset($_POST['biaya468']) ? $_POST['biaya468'] : 0;
    $biaya469 = isset($_POST['biaya469']) ? $_POST['biaya469'] : 0;
    $biaya470 = isset($_POST['biaya470']) ? $_POST['biaya470'] : 0;
    $biaya471 = isset($_POST['biaya471']) ? $_POST['biaya471'] : 0;
    $biaya472 = isset($_POST['biaya472']) ? $_POST['biaya472'] : 0;
    $biaya473 = isset($_POST['biaya473']) ? $_POST['biaya473'] : 0;
    $biaya474 = isset($_POST['biaya474']) ? $_POST['biaya474'] : 0;
    $biaya475 = isset($_POST['biaya475']) ? $_POST['biaya475'] : 0;
    $biaya476 = isset($_POST['biaya476']) ? $_POST['biaya476'] : 0;
    $biaya477 = isset($_POST['biaya477']) ? $_POST['biaya477'] : 0;
    $biaya478 = isset($_POST['biaya478']) ? $_POST['biaya478'] : 0;
    $biaya479 = isset($_POST['biaya479']) ? $_POST['biaya479'] : 0;
    $biaya480 = isset($_POST['biaya480']) ? $_POST['biaya480'] : 0;
    $biaya481 = isset($_POST['biaya481']) ? $_POST['biaya481'] : 0;
    $biaya482 = isset($_POST['biaya482']) ? $_POST['biaya482'] : 0;
    $biaya483 = isset($_POST['biaya483']) ? $_POST['biaya483'] : 0;
    $biaya484 = isset($_POST['biaya484']) ? $_POST['biaya484'] : 0;
    $biaya485 = isset($_POST['biaya485']) ? $_POST['biaya485'] : 0;
    $biaya486 = isset($_POST['biaya486']) ? $_POST['biaya486'] : 0;
    $biaya487 = isset($_POST['biaya487']) ? $_POST['biaya487'] : 0;
    $biaya488 = isset($_POST['biaya488']) ? $_POST['biaya488'] : 0;
    $biaya489 = isset($_POST['biaya489']) ? $_POST['biaya489'] : 0;
    $biaya490 = isset($_POST['biaya490']) ? $_POST['biaya490'] : 0;
    $biaya491 = isset($_POST['biaya491']) ? $_POST['biaya491'] : 0;
    $biaya492 = isset($_POST['biaya492']) ? $_POST['biaya492'] : 0;
    $biaya493 = isset($_POST['biaya493']) ? $_POST['biaya493'] : 0;
    $biaya494 = isset($_POST['biaya494']) ? $_POST['biaya494'] : 0;
    $biaya495 = isset($_POST['biaya495']) ? $_POST['biaya495'] : 0;
    $biaya496 = isset($_POST['biaya496']) ? $_POST['biaya496'] : 0;
    $biaya497 = isset($_POST['biaya497']) ? $_POST['biaya497'] : 0;
    $biaya498 = isset($_POST['biaya498']) ? $_POST['biaya498'] : 0;
    $biaya499 = isset($_POST['biaya499']) ? $_POST['biaya499'] : 0;
    $biaya500 = isset($_POST['biaya500']) ? $_POST['biaya500'] : 0;
    $biaya501 = isset($_POST['biaya501']) ? $_POST['biaya501'] : 0;
    $biaya502 = isset($_POST['biaya502']) ? $_POST['biaya502'] : 0;
    $biaya503 = isset($_POST['biaya503']) ? $_POST['biaya503'] : 0;
    $biaya504 = isset($_POST['biaya504']) ? $_POST['biaya504'] : 0;
    $biaya505 = isset($_POST['biaya505']) ? $_POST['biaya505'] : 0;
    $biaya506 = isset($_POST['biaya506']) ? $_POST['biaya506'] : 0;
    $biaya507 = isset($_POST['biaya507']) ? $_POST['biaya507'] : 0;
    $biaya508 = isset($_POST['biaya508']) ? $_POST['biaya508'] : 0;
    $biaya509 = isset($_POST['biaya509']) ? $_POST['biaya509'] : 0;
    $biaya510 = isset($_POST['biaya510']) ? $_POST['biaya510'] : 0;
    $biaya511 = isset($_POST['biaya511']) ? $_POST['biaya511'] : 0;
    $biaya512 = isset($_POST['biaya512']) ? $_POST['biaya512'] : 0;
    $biaya513 = isset($_POST['biaya513']) ? $_POST['biaya513'] : 0;
    $biaya514 = isset($_POST['biaya514']) ? $_POST['biaya514'] : 0;
    $biaya515 = isset($_POST['biaya515']) ? $_POST['biaya515'] : 0;
    $biaya516 = isset($_POST['biaya516']) ? $_POST['biaya516'] : 0;
    $biaya517 = isset($_POST['biaya517']) ? $_POST['biaya517'] : 0;
    $biaya518 = isset($_POST['biaya518']) ? $_POST['biaya518'] : 0;
    $biaya519 = isset($_POST['biaya519']) ? $_POST['biaya519'] : 0;
    $biaya520 = isset($_POST['biaya520']) ? $_POST['biaya520'] : 0;
    $biaya521 = isset($_POST['biaya521']) ? $_POST['biaya521'] : 0;
    $biaya522 = isset($_POST['biaya522']) ? $_POST['biaya522'] : 0;


    $biaya1049 = isset($_POST['biaya1049']) ? $_POST['biaya1049'] : 0;
    $biaya1050 = isset($_POST['biaya1050']) ? $_POST['biaya1050'] : 0;
    $biaya1051 = isset($_POST['biaya1051']) ? $_POST['biaya1051'] : 0;
    $biaya1052 = isset($_POST['biaya1052']) ? $_POST['biaya1052'] : 0;
    $biaya1053 = isset($_POST['biaya1053']) ? $_POST['biaya1053'] : 0;
    $biaya1054 = isset($_POST['biaya1054']) ? $_POST['biaya1054'] : 0;
    // Update session variables with checkbox values
    $_SESSION['biaya1'] = $biaya1;
    $_SESSION['biaya2'] = $biaya2;
    $_SESSION['biaya3'] = $biaya3;
    $_SESSION['biaya4'] = $biaya4;
    $_SESSION['biaya5'] = $biaya5;
    $_SESSION['biaya6'] = $biaya6;
    $_SESSION['biaya7'] = $biaya7;
    $_SESSION['biaya8'] = $biaya8;
    $_SESSION['biaya9'] = $biaya9;
    $_SESSION['biaya10'] = $biaya10;
    $_SESSION['biaya11'] = $biaya11;
    $_SESSION['biaya12'] = $biaya12;
    $_SESSION['biaya13'] = $biaya13;
    $_SESSION['biaya14'] = $biaya14;
    $_SESSION['biaya15'] = $biaya15;
    $_SESSION['biaya16'] = $biaya16;
    $_SESSION['biaya17'] = $biaya17;
    $_SESSION['biaya18'] = $biaya18;
    $_SESSION['biaya19'] = $biaya19;
    $_SESSION['biaya20'] = $biaya20;
    $_SESSION['biaya21'] = $biaya21;
    $_SESSION['biaya22'] = $biaya22;
    $_SESSION['biaya23'] = $biaya23;
    $_SESSION['biaya24'] = $biaya24;
    $_SESSION['biaya25'] = $biaya25;
    $_SESSION['biaya26'] = $biaya26;
    $_SESSION['biaya27'] = $biaya27;
    $_SESSION['biaya28'] = $biaya28;
    $_SESSION['biaya29'] = $biaya29;
    $_SESSION['biaya30'] = $biaya30;
    $_SESSION['biaya31'] = $biaya31;
    $_SESSION['biaya32'] = $biaya32;
    $_SESSION['biaya33'] = $biaya33;
    $_SESSION['biaya34'] = $biaya34;
    $_SESSION['biaya35'] = $biaya35;
    $_SESSION['biaya36'] = $biaya36;
    $_SESSION['biaya37'] = $biaya37;
    $_SESSION['biaya38'] = $biaya38;
    $_SESSION['biaya39'] = $biaya39;
    $_SESSION['biaya40'] = $biaya40;
    $_SESSION['biaya41'] = $biaya41;
    $_SESSION['biaya42'] = $biaya42;
    $_SESSION['biaya43'] = $biaya43;
    $_SESSION['biaya44'] = $biaya44;
    $_SESSION['biaya45'] = $biaya45;
    $_SESSION['biaya46'] = $biaya46;
    $_SESSION['biaya47'] = $biaya47;
    $_SESSION['biaya48'] = $biaya48;
    $_SESSION['biaya49'] = $biaya49;
    $_SESSION['biaya50'] = $biaya50;
    $_SESSION['biaya51'] = $biaya51;
    $_SESSION['biaya52'] = $biaya52;
    $_SESSION['biaya53'] = $biaya53;
    $_SESSION['biaya54'] = $biaya54;
    $_SESSION['biaya55'] = $biaya55;
    $_SESSION['biaya56'] = $biaya56;
    $_SESSION['biaya57'] = $biaya57;
    $_SESSION['biaya58'] = $biaya58;
    $_SESSION['biaya59'] = $biaya59;
    $_SESSION['biaya60'] = $biaya60;
    $_SESSION['biaya61'] = $biaya61;
    $_SESSION['biaya62'] = $biaya62;
    $_SESSION['biaya63'] = $biaya63;
    $_SESSION['biaya64'] = $biaya64;
    $_SESSION['biaya65'] = $biaya65;
    $_SESSION['biaya66'] = $biaya66;
    $_SESSION['biaya67'] = $biaya67;
    $_SESSION['biaya68'] = $biaya68;
    $_SESSION['biaya69'] = $biaya69;
    $_SESSION['biaya70'] = $biaya70;
    $_SESSION['biaya71'] = $biaya71;
    $_SESSION['biaya72'] = $biaya72;
    $_SESSION['biaya73'] = $biaya73;
    $_SESSION['biaya74'] = $biaya74;
    $_SESSION['biaya75'] = $biaya75;
    $_SESSION['biaya76'] = $biaya76;
    $_SESSION['biaya77'] = $biaya77;
    $_SESSION['biaya78'] = $biaya78;
    $_SESSION['biaya79'] = $biaya79;
    $_SESSION['biaya80'] = $biaya80;
    $_SESSION['biaya81'] = $biaya81;
    $_SESSION['biaya82'] = $biaya82;
    $_SESSION['biaya83'] = $biaya83;
    $_SESSION['biaya84'] = $biaya84;
    $_SESSION['biaya85'] = $biaya85;
    $_SESSION['biaya86'] = $biaya86;
    $_SESSION['biaya87'] = $biaya87;
    $_SESSION['biaya88'] = $biaya88;
    $_SESSION['biaya89'] = $biaya89;
    $_SESSION['biaya90'] = $biaya90;
    $_SESSION['biaya91'] = $biaya91;
    $_SESSION['biaya92'] = $biaya92;
    $_SESSION['biaya93'] = $biaya93;
    $_SESSION['biaya94'] = $biaya94;
    $_SESSION['biaya95'] = $biaya95;
    $_SESSION['biaya96'] = $biaya96;
    $_SESSION['biaya97'] = $biaya97;
    $_SESSION['biaya98'] = $biaya98;
    $_SESSION['biaya99'] = $biaya99;
    $_SESSION['biaya100'] = $biaya100;
    $_SESSION['biaya101'] = $biaya101;
    $_SESSION['biaya102'] = $biaya102;
    $_SESSION['biaya103'] = $biaya103;
    $_SESSION['biaya104'] = $biaya104;
    $_SESSION['biaya105'] = $biaya105;
    $_SESSION['biaya106'] = $biaya106;
    $_SESSION['biaya107'] = $biaya107;
    $_SESSION['biaya108'] = $biaya108;
    $_SESSION['biaya109'] = $biaya109;
    $_SESSION['biaya110'] = $biaya110;
    $_SESSION['biaya111'] = $biaya111;
    $_SESSION['biaya112'] = $biaya112;
    $_SESSION['biaya113'] = $biaya113;
    $_SESSION['biaya114'] = $biaya114;
    $_SESSION['biaya115'] = $biaya115;
    $_SESSION['biaya116'] = $biaya116;
    $_SESSION['biaya117'] = $biaya117;
    $_SESSION['biaya118'] = $biaya118;
    $_SESSION['biaya119'] = $biaya119;
    $_SESSION['biaya120'] = $biaya120;
    $_SESSION['biaya121'] = $biaya121;
    $_SESSION['biaya122'] = $biaya122;
    $_SESSION['biaya123'] = $biaya123;
    $_SESSION['biaya124'] = $biaya124;
    $_SESSION['biaya125'] = $biaya125;
    $_SESSION['biaya126'] = $biaya126;
    $_SESSION['biaya127'] = $biaya127;
    $_SESSION['biaya128'] = $biaya128;
    $_SESSION['biaya129'] = $biaya129;
    $_SESSION['biaya130'] = $biaya130;
    $_SESSION['biaya131'] = $biaya131;
    $_SESSION['biaya132'] = $biaya132;
    $_SESSION['biaya133'] = $biaya133;
    $_SESSION['biaya134'] = $biaya134;
    $_SESSION['biaya135'] = $biaya135;
    $_SESSION['biaya136'] = $biaya136;
    $_SESSION['biaya137'] = $biaya137;
    $_SESSION['biaya138'] = $biaya138;
    $_SESSION['biaya139'] = $biaya139;
    $_SESSION['biaya140'] = $biaya140;
    $_SESSION['biaya141'] = $biaya141;
    $_SESSION['biaya142'] = $biaya142;
    $_SESSION['biaya143'] = $biaya143;
    $_SESSION['biaya144'] = $biaya144;
    $_SESSION['biaya145'] = $biaya145;
    $_SESSION['biaya146'] = $biaya146;
    $_SESSION['biaya147'] = $biaya147;
    $_SESSION['biaya148'] = $biaya148;
    $_SESSION['biaya149'] = $biaya149;
    $_SESSION['biaya150'] = $biaya150;
    $_SESSION['biaya151'] = $biaya151;
    $_SESSION['biaya152'] = $biaya152;
    $_SESSION['biaya153'] = $biaya153;
    $_SESSION['biaya154'] = $biaya154;
    $_SESSION['biaya155'] = $biaya155;
    $_SESSION['biaya156'] = $biaya156;
    $_SESSION['biaya157'] = $biaya157;
    $_SESSION['biaya158'] = $biaya158;
    $_SESSION['biaya159'] = $biaya159;
    $_SESSION['biaya160'] = $biaya160;
    $_SESSION['biaya161'] = $biaya161;
    $_SESSION['biaya162'] = $biaya162;
    $_SESSION['biaya163'] = $biaya163;
    $_SESSION['biaya164'] = $biaya164;
    $_SESSION['biaya165'] = $biaya165;
    $_SESSION['biaya166'] = $biaya166;
    $_SESSION['biaya167'] = $biaya167;
    $_SESSION['biaya168'] = $biaya168;
    $_SESSION['biaya169'] = $biaya169;
    $_SESSION['biaya170'] = $biaya170;
    $_SESSION['biaya171'] = $biaya171;
    $_SESSION['biaya172'] = $biaya172;
    $_SESSION['biaya173'] = $biaya173;
    $_SESSION['biaya174'] = $biaya174;
    $_SESSION['biaya175'] = $biaya175;
    $_SESSION['biaya176'] = $biaya176;
    $_SESSION['biaya177'] = $biaya177;
    $_SESSION['biaya178'] = $biaya178;
    $_SESSION['biaya179'] = $biaya179;
    $_SESSION['biaya180'] = $biaya180;
    $_SESSION['biaya181'] = $biaya181;
    $_SESSION['biaya182'] = $biaya182;
    $_SESSION['biaya183'] = $biaya183;
    $_SESSION['biaya184'] = $biaya184;
    $_SESSION['biaya185'] = $biaya185;
    $_SESSION['biaya186'] = $biaya186;
    $_SESSION['biaya187'] = $biaya187;
    $_SESSION['biaya188'] = $biaya188;
    $_SESSION['biaya189'] = $biaya189;
    $_SESSION['biaya190'] = $biaya190;
    $_SESSION['biaya191'] = $biaya191;
    $_SESSION['biaya192'] = $biaya192;
    $_SESSION['biaya193'] = $biaya193;
    $_SESSION['biaya194'] = $biaya194;
    $_SESSION['biaya195'] = $biaya195;
    $_SESSION['biaya196'] = $biaya196;
    $_SESSION['biaya197'] = $biaya197;
    $_SESSION['biaya198'] = $biaya198;
    $_SESSION['biaya199'] = $biaya199;
    $_SESSION['biaya200'] = $biaya200;
    $_SESSION['biaya201'] = $biaya201;
    $_SESSION['biaya202'] = $biaya202;
    $_SESSION['biaya203'] = $biaya203;
    $_SESSION['biaya204'] = $biaya204;
    $_SESSION['biaya205'] = $biaya205;
    $_SESSION['biaya206'] = $biaya206;
    $_SESSION['biaya207'] = $biaya207;
    $_SESSION['biaya208'] = $biaya208;
    $_SESSION['biaya209'] = $biaya209;
    $_SESSION['biaya210'] = $biaya210;
    $_SESSION['biaya211'] = $biaya211;
    $_SESSION['biaya212'] = $biaya212;
    $_SESSION['biaya213'] = $biaya213;
    $_SESSION['biaya214'] = $biaya214;
    $_SESSION['biaya215'] = $biaya215;
    $_SESSION['biaya216'] = $biaya216;
    $_SESSION['biaya217'] = $biaya217;
    $_SESSION['biaya218'] = $biaya218;
    $_SESSION['biaya219'] = $biaya219;
    $_SESSION['biaya220'] = $biaya220;
    $_SESSION['biaya221'] = $biaya221;
    $_SESSION['biaya222'] = $biaya222;
    $_SESSION['biaya223'] = $biaya223;
    $_SESSION['biaya224'] = $biaya224;
    $_SESSION['biaya225'] = $biaya225;
    $_SESSION['biaya226'] = $biaya226;
    $_SESSION['biaya227'] = $biaya227;
    $_SESSION['biaya228'] = $biaya228;
    $_SESSION['biaya229'] = $biaya229;
    $_SESSION['biaya230'] = $biaya230;
    $_SESSION['biaya231'] = $biaya231;
    $_SESSION['biaya232'] = $biaya232;
    $_SESSION['biaya233'] = $biaya233;
    $_SESSION['biaya234'] = $biaya234;
    $_SESSION['biaya235'] = $biaya235;
    $_SESSION['biaya236'] = $biaya236;
    $_SESSION['biaya237'] = $biaya237;
    $_SESSION['biaya238'] = $biaya238;
    $_SESSION['biaya239'] = $biaya239;
    $_SESSION['biaya240'] = $biaya240;
    $_SESSION['biaya241'] = $biaya241;
    $_SESSION['biaya242'] = $biaya242;
    $_SESSION['biaya243'] = $biaya243;
    $_SESSION['biaya244'] = $biaya244;
    $_SESSION['biaya245'] = $biaya245;
    $_SESSION['biaya246'] = $biaya246;
    $_SESSION['biaya247'] = $biaya247;
    $_SESSION['biaya248'] = $biaya248;
    $_SESSION['biaya249'] = $biaya249;
    $_SESSION['biaya250'] = $biaya250;
    $_SESSION['biaya251'] = $biaya251;
    $_SESSION['biaya252'] = $biaya252;
    $_SESSION['biaya253'] = $biaya253;
    $_SESSION['biaya254'] = $biaya254;
    $_SESSION['biaya255'] = $biaya255;
    $_SESSION['biaya256'] = $biaya256;
    $_SESSION['biaya257'] = $biaya257;
    $_SESSION['biaya258'] = $biaya258;
    $_SESSION['biaya259'] = $biaya259;
    $_SESSION['biaya260'] = $biaya260;
    $_SESSION['biaya261'] = $biaya261;
    $_SESSION['biaya262'] = $biaya262;
    $_SESSION['biaya263'] = $biaya263;
    $_SESSION['biaya264'] = $biaya264;
    $_SESSION['biaya265'] = $biaya265;
    $_SESSION['biaya266'] = $biaya266;
    $_SESSION['biaya267'] = $biaya267;
    $_SESSION['biaya268'] = $biaya268;
    $_SESSION['biaya269'] = $biaya269;
    $_SESSION['biaya270'] = $biaya270;

    $_SESSION['biaya271'] = $biaya271;
    $_SESSION['biaya272'] = $biaya272;
    $_SESSION['biaya273'] = $biaya273;
    $_SESSION['biaya274'] = $biaya274;
    $_SESSION['biaya275'] = $biaya275;
    $_SESSION['biaya276'] = $biaya276;
    $_SESSION['biaya277'] = $biaya277;
    $_SESSION['biaya278'] = $biaya278;
    $_SESSION['biaya279'] = $biaya279;
    $_SESSION['biaya280'] = $biaya280;
    $_SESSION['biaya281'] = $biaya281;
    $_SESSION['biaya282'] = $biaya282;
    $_SESSION['biaya283'] = $biaya283;
    $_SESSION['biaya284'] = $biaya284;
    $_SESSION['biaya285'] = $biaya285;
    $_SESSION['biaya286'] = $biaya286;
    $_SESSION['biaya287'] = $biaya287;
    $_SESSION['biaya288'] = $biaya288;
    $_SESSION['biaya289'] = $biaya289;
    $_SESSION['biaya290'] = $biaya290;
    $_SESSION['biaya291'] = $biaya291;
    $_SESSION['biaya292'] = $biaya292;
    $_SESSION['biaya293'] = $biaya293;
    $_SESSION['biaya294'] = $biaya294;
    $_SESSION['biaya295'] = $biaya295;
    $_SESSION['biaya296'] = $biaya296;
    $_SESSION['biaya297'] = $biaya297;
    $_SESSION['biaya298'] = $biaya298;
    $_SESSION['biaya299'] = $biaya299;
    $_SESSION['biaya300'] = $biaya300;
    $_SESSION['biaya301'] = $biaya301;
    $_SESSION['biaya302'] = $biaya302;
    $_SESSION['biaya303'] = $biaya303;
    $_SESSION['biaya304'] = $biaya304;
    $_SESSION['biaya305'] = $biaya305;
    $_SESSION['biaya306'] = $biaya306;
    $_SESSION['biaya307'] = $biaya307;
    $_SESSION['biaya308'] = $biaya308;
    $_SESSION['biaya309'] = $biaya309;
    $_SESSION['biaya310'] = $biaya310;
    $_SESSION['biaya311'] = $biaya311;
    $_SESSION['biaya312'] = $biaya312;

    $_SESSION['biaya313'] = $biaya313;
    $_SESSION['biaya314'] = $biaya314;
    $_SESSION['biaya315'] = $biaya315;
    $_SESSION['biaya316'] = $biaya316;
    $_SESSION['biaya317'] = $biaya317;
    $_SESSION['biaya318'] = $biaya318;
    $_SESSION['biaya319'] = $biaya319;
    $_SESSION['biaya320'] = $biaya320;
    $_SESSION['biaya321'] = $biaya321;
    $_SESSION['biaya322'] = $biaya322;
    $_SESSION['biaya323'] = $biaya323;
    $_SESSION['biaya324'] = $biaya324;
    $_SESSION['biaya325'] = $biaya325;
    $_SESSION['biaya326'] = $biaya326;
    $_SESSION['biaya327'] = $biaya327;
    $_SESSION['biaya328'] = $biaya328;
    $_SESSION['biaya329'] = $biaya329;
    $_SESSION['biaya330'] = $biaya330;

    $_SESSION['biaya331'] = $biaya331;
    $_SESSION['biaya332'] = $biaya332;
    $_SESSION['biaya333'] = $biaya333;
    $_SESSION['biaya334'] = $biaya334;
    $_SESSION['biaya335'] = $biaya335;
    $_SESSION['biaya336'] = $biaya336;

    $_SESSION['biaya337'] = $biaya337;
    $_SESSION['biaya338'] = $biaya338;
    $_SESSION['biaya339'] = $biaya339;
    $_SESSION['biaya340'] = $biaya340;
    $_SESSION['biaya341'] = $biaya341;
    $_SESSION['biaya342'] = $biaya342;

    $_SESSION['biaya343'] = $biaya343;
    $_SESSION['biaya344'] = $biaya344;
    $_SESSION['biaya345'] = $biaya345;
    $_SESSION['biaya346'] = $biaya346;
    $_SESSION['biaya347'] = $biaya347;
    $_SESSION['biaya348'] = $biaya348;

    $_SESSION['biaya349'] = $biaya349;
    $_SESSION['biaya350'] = $biaya350;
    $_SESSION['biaya351'] = $biaya351;
    $_SESSION['biaya352'] = $biaya352;
    $_SESSION['biaya353'] = $biaya353;
    $_SESSION['biaya354'] = $biaya354;

    $_SESSION['biaya355'] = $biaya355;
    $_SESSION['biaya356'] = $biaya356;
    $_SESSION['biaya357'] = $biaya357;
    $_SESSION['biaya358'] = $biaya358;
    $_SESSION['biaya359'] = $biaya359;
    $_SESSION['biaya360'] = $biaya360;
    $_SESSION['biaya361'] = $biaya361;
    $_SESSION['biaya362'] = $biaya362;
    $_SESSION['biaya363'] = $biaya363;
    $_SESSION['biaya364'] = $biaya364;
    $_SESSION['biaya365'] = $biaya365;
    $_SESSION['biaya366'] = $biaya366;
    $_SESSION['biaya367'] = $biaya367;
    $_SESSION['biaya368'] = $biaya368;
    $_SESSION['biaya369'] = $biaya369;
    $_SESSION['biaya370'] = $biaya370;
    $_SESSION['biaya371'] = $biaya371;
    $_SESSION['biaya372'] = $biaya372;
    $_SESSION['biaya373'] = $biaya373;
    $_SESSION['biaya374'] = $biaya374;
    $_SESSION['biaya375'] = $biaya375;
    $_SESSION['biaya376'] = $biaya376;
    $_SESSION['biaya377'] = $biaya377;
    $_SESSION['biaya378'] = $biaya378;
    $_SESSION['biaya379'] = $biaya379;
    $_SESSION['biaya380'] = $biaya380;
    $_SESSION['biaya381'] = $biaya381;
    $_SESSION['biaya382'] = $biaya382;
    $_SESSION['biaya383'] = $biaya383;
    $_SESSION['biaya384'] = $biaya384;
    $_SESSION['biaya385'] = $biaya385;
    $_SESSION['biaya386'] = $biaya386;
    $_SESSION['biaya387'] = $biaya387;
    $_SESSION['biaya388'] = $biaya388;
    $_SESSION['biaya389'] = $biaya389;
    $_SESSION['biaya390'] = $biaya390;
    $_SESSION['biaya391'] = $biaya391;
    $_SESSION['biaya392'] = $biaya392;
    $_SESSION['biaya393'] = $biaya393;
    $_SESSION['biaya394'] = $biaya394;
    $_SESSION['biaya395'] = $biaya395;
    $_SESSION['biaya396'] = $biaya396;
    $_SESSION['biaya397'] = $biaya397;
    $_SESSION['biaya398'] = $biaya398;
    $_SESSION['biaya399'] = $biaya399;
    $_SESSION['biaya400'] = $biaya400;
    $_SESSION['biaya401'] = $biaya401;
    $_SESSION['biaya402'] = $biaya402;
    $_SESSION['biaya403'] = $biaya403;
    $_SESSION['biaya404'] = $biaya404;
    $_SESSION['biaya405'] = $biaya405;
    $_SESSION['biaya406'] = $biaya406;
    $_SESSION['biaya407'] = $biaya407;
    $_SESSION['biaya408'] = $biaya408;
    $_SESSION['biaya409'] = $biaya409;
    $_SESSION['biaya410'] = $biaya410;
    $_SESSION['biaya411'] = $biaya411;
    $_SESSION['biaya412'] = $biaya412;
    $_SESSION['biaya413'] = $biaya413;
    $_SESSION['biaya414'] = $biaya414;
    $_SESSION['biaya415'] = $biaya415;
    $_SESSION['biaya416'] = $biaya416;
    $_SESSION['biaya417'] = $biaya417;
    $_SESSION['biaya418'] = $biaya418;
    $_SESSION['biaya419'] = $biaya419;
    $_SESSION['biaya420'] = $biaya420;
    $_SESSION['biaya421'] = $biaya421;
    $_SESSION['biaya422'] = $biaya422;
    $_SESSION['biaya423'] = $biaya423;
    $_SESSION['biaya424'] = $biaya424;
    $_SESSION['biaya425'] = $biaya425;
    $_SESSION['biaya426'] = $biaya426;
    $_SESSION['biaya427'] = $biaya427;
    $_SESSION['biaya428'] = $biaya428;
    $_SESSION['biaya429'] = $biaya429;
    $_SESSION['biaya430'] = $biaya430;
    $_SESSION['biaya431'] = $biaya431;
    $_SESSION['biaya432'] = $biaya432;
    $_SESSION['biaya433'] = $biaya433;
    $_SESSION['biaya434'] = $biaya434;
    $_SESSION['biaya435'] = $biaya435;
    $_SESSION['biaya436'] = $biaya436;
    $_SESSION['biaya437'] = $biaya437;
    $_SESSION['biaya438'] = $biaya438;
    $_SESSION['biaya439'] = $biaya439;
    $_SESSION['biaya440'] = $biaya440;
    $_SESSION['biaya441'] = $biaya441;
    $_SESSION['biaya442'] = $biaya442;
    $_SESSION['biaya443'] = $biaya443;
    $_SESSION['biaya444'] = $biaya444;
    $_SESSION['biaya445'] = $biaya445;
    $_SESSION['biaya446'] = $biaya446;
    $_SESSION['biaya447'] = $biaya447;
    $_SESSION['biaya448'] = $biaya448;
    $_SESSION['biaya449'] = $biaya449;
    $_SESSION['biaya450'] = $biaya450;
    $_SESSION['biaya451'] = $biaya451;
    $_SESSION['biaya452'] = $biaya452;
    $_SESSION['biaya453'] = $biaya453;
    $_SESSION['biaya454'] = $biaya454;
    $_SESSION['biaya455'] = $biaya455;
    $_SESSION['biaya456'] = $biaya456;
    $_SESSION['biaya457'] = $biaya457;
    $_SESSION['biaya458'] = $biaya458;
    $_SESSION['biaya459'] = $biaya459;
    $_SESSION['biaya460'] = $biaya460;
    $_SESSION['biaya461'] = $biaya461;
    $_SESSION['biaya462'] = $biaya462;
    $_SESSION['biaya463'] = $biaya463;
    $_SESSION['biaya464'] = $biaya464;
    $_SESSION['biaya465'] = $biaya465;
    $_SESSION['biaya466'] = $biaya466;
    $_SESSION['biaya467'] = $biaya467;
    $_SESSION['biaya468'] = $biaya468;
    $_SESSION['biaya469'] = $biaya469;
    $_SESSION['biaya470'] = $biaya470;
    $_SESSION['biaya471'] = $biaya471;
    $_SESSION['biaya472'] = $biaya472;
    $_SESSION['biaya473'] = $biaya473;
    $_SESSION['biaya474'] = $biaya474;
    $_SESSION['biaya475'] = $biaya475;
    $_SESSION['biaya476'] = $biaya476;
    $_SESSION['biaya477'] = $biaya477;
    $_SESSION['biaya478'] = $biaya478;
    $_SESSION['biaya479'] = $biaya479;
    $_SESSION['biaya480'] = $biaya480;
    $_SESSION['biaya481'] = $biaya481;
    $_SESSION['biaya482'] = $biaya482;
    $_SESSION['biaya483'] = $biaya483;
    $_SESSION['biaya484'] = $biaya484;
    $_SESSION['biaya485'] = $biaya485;
    $_SESSION['biaya486'] = $biaya486;
    $_SESSION['biaya487'] = $biaya487;
    $_SESSION['biaya488'] = $biaya488;
    $_SESSION['biaya489'] = $biaya489;
    $_SESSION['biaya490'] = $biaya490;
    $_SESSION['biaya491'] = $biaya491;
    $_SESSION['biaya492'] = $biaya492;
    $_SESSION['biaya493'] = $biaya493;
    $_SESSION['biaya494'] = $biaya494;
    $_SESSION['biaya495'] = $biaya495;
    $_SESSION['biaya496'] = $biaya496;
    $_SESSION['biaya497'] = $biaya497;
    $_SESSION['biaya498'] = $biaya498;
    $_SESSION['biaya499'] = $biaya499;
    $_SESSION['biaya500'] = $biaya500;
    $_SESSION['biaya501'] = $biaya501;
    $_SESSION['biaya502'] = $biaya502;
    $_SESSION['biaya503'] = $biaya503;
    $_SESSION['biaya504'] = $biaya504;
    $_SESSION['biaya505'] = $biaya505;
    $_SESSION['biaya506'] = $biaya506;
    $_SESSION['biaya507'] = $biaya507;
    $_SESSION['biaya508'] = $biaya508;
    $_SESSION['biaya509'] = $biaya509;
    $_SESSION['biaya510'] = $biaya510;
    $_SESSION['biaya511'] = $biaya511;
    $_SESSION['biaya512'] = $biaya512;
    $_SESSION['biaya513'] = $biaya513;
    $_SESSION['biaya514'] = $biaya514;
    $_SESSION['biaya515'] = $biaya515;
    $_SESSION['biaya516'] = $biaya516;
    $_SESSION['biaya517'] = $biaya517;
    $_SESSION['biaya518'] = $biaya518;
    $_SESSION['biaya519'] = $biaya519;
    $_SESSION['biaya520'] = $biaya520;
    $_SESSION['biaya521'] = $biaya521;
    $_SESSION['biaya522'] = $biaya522;

    $_SESSION['biaya1049'] = $biaya1049;
    $_SESSION['biaya1050'] = $biaya1050;
    $_SESSION['biaya1051'] = $biaya1051;
    $_SESSION['biaya1052'] = $biaya1052;
    $_SESSION['biaya1053'] = $biaya1053;
    $_SESSION['biaya1054'] = $biaya1054;

    if ($row) {
        // Prepare and execute an SQL statement to update the checkbox values
        $stmt = $pdo->prepare("UPDATE t_clinicalpathway SET
dxutama = ?, dxsekunder = ?,
biaya1 = ?, biaya2 = ?, biaya3 = ?, biaya4 = ?, biaya5 = ?, biaya6 = ?, biaya7 = ?, biaya8 = ?, biaya9 = ?, biaya10 = ?, biaya11 = ?, 
biaya12 = ?, biaya13 = ?, biaya14 = ?, biaya15 = ?, biaya16 = ?, biaya17 = ?, biaya18 = ?, biaya19 = ?, biaya20 = ?, biaya21 = ?, 
biaya22 = ?, biaya23 = ?, biaya24 = ?, biaya25 = ?, biaya26 = ?, biaya27 = ?, biaya28 = ?, biaya29 = ?, biaya30 = ?, biaya31 = ?, 
biaya32 = ?, biaya33 = ?, biaya34 = ?, biaya35 = ?, biaya36 = ?, biaya37 = ?, biaya38 = ?, biaya39 = ?, biaya40 = ?, biaya41 = ?, 
biaya42 = ?, biaya43 = ?, biaya44 = ?, biaya45 = ?, biaya46 = ?, biaya47 = ?, biaya48 = ?, biaya49 = ?, biaya50 = ?, biaya51 = ?, 
biaya52 = ?, biaya53 = ?, biaya54 = ?, biaya55 = ?, biaya56 = ?, biaya57 = ?, biaya58 = ?, biaya59 = ?, biaya60 = ?, biaya61 = ?, 
biaya62 = ?, biaya63 = ?, biaya64 = ?, biaya65 = ?, biaya66 = ?, biaya67 = ?, biaya68 = ?, biaya69 = ?, biaya70 = ?, biaya71 = ?, 
biaya72 = ?, biaya73 = ?, biaya74 = ?, biaya75 = ?, biaya76 = ?, biaya77 = ?, biaya78 = ?, biaya79 = ?, biaya80 = ?, biaya81 = ?, 
biaya82 = ?, biaya83 = ?, biaya84 = ?, biaya85 = ?, biaya86 = ?, biaya87 = ?, biaya88 = ?, biaya89 = ?, biaya90 = ?, biaya91 = ?, 
biaya92 = ?, biaya93 = ?, biaya94 = ?, biaya95 = ?, biaya96 = ?, biaya97 = ?, biaya98 = ?, biaya99 = ?, biaya100 = ?, biaya101 = ?, 
biaya102 = ?, biaya103 = ?, biaya104 = ?, biaya105 = ?, biaya106 = ?, biaya107 = ?, biaya108 = ?, biaya109 = ?, biaya110 = ?, biaya111 = ?,
biaya112 = ?, biaya113 = ?, biaya114 = ?, biaya115 = ?, biaya116 = ?, biaya117 = ?, biaya118 = ?, biaya119 = ?, biaya120 = ?, biaya121 = ?, 
biaya122 = ?, biaya123 = ?, biaya124 = ?, biaya125 = ?, biaya126 = ?, biaya127 = ?, biaya128 = ?, biaya129 = ?, biaya130 = ?, biaya131 = ?, 
biaya132 = ?, biaya133 = ?, biaya134 = ?, biaya135 = ?, biaya136 = ?, biaya137 = ?, biaya138 = ?, biaya139 = ?, biaya140 = ?, biaya141 = ?, 
biaya142 = ?, biaya143 = ?, biaya144 = ?, biaya145 = ?, biaya146 = ?, biaya147 = ?, biaya148 = ?, biaya149 = ?, biaya150 = ?, biaya151 = ?, 
biaya152 = ?, biaya153 = ?, biaya154 = ?, biaya155 = ?, biaya156 = ?, biaya157 = ?, biaya158 = ?, biaya159 = ?, biaya160 = ?, biaya161 = ?, 
biaya162 = ?, biaya163 = ?, biaya164 = ?, biaya165 = ?, biaya166 = ?, biaya167 = ?, biaya168 = ?, biaya169 = ?, biaya170 = ?, biaya171 = ?, 
biaya172 = ?, biaya173 = ?, biaya174 = ?, biaya175 = ?, biaya176 = ?, biaya177 = ?, biaya178 = ?, biaya179 = ?, biaya180 = ?, biaya181 = ?, 
biaya182 = ?, biaya183 = ?, biaya184 = ?, biaya185 = ?, biaya186 = ?, biaya187 = ?, biaya188 = ?, biaya189 = ?, biaya190 = ?, biaya191 = ?, 
biaya192 = ?, biaya193 = ?, biaya194 = ?, biaya195 = ?, biaya196 = ?, biaya197 = ?, biaya198 = ?, biaya199 = ?, biaya200 = ?, biaya201 = ?, 
biaya202 = ?, biaya203 = ?, biaya204 = ?, biaya205 = ?, biaya206 = ?, biaya207 = ?, biaya208 = ?, biaya209 = ?, biaya210 = ?, biaya211 = ?, 
biaya212 = ?, biaya213 = ?, biaya214 = ?, biaya215 = ?, biaya216 = ?, biaya217 = ?, biaya218 = ?, biaya219 = ?, biaya220 = ?, biaya221 = ?, 
biaya222 = ?, biaya223 = ?, biaya224 = ?, biaya225 = ?, biaya226 = ?, biaya227 = ?, biaya228 = ?, biaya229 = ?, biaya230 = ?, biaya231 = ?, 
biaya232 = ?, biaya233 = ?, biaya234 = ?, biaya235 = ?, biaya236 = ?, biaya237 = ?, biaya238 = ?, biaya239 = ?, biaya240 = ?, biaya241 = ?, 
biaya242 = ?, biaya243 = ?, biaya244 = ?, biaya245 = ?, biaya246 = ?, biaya247 = ?, biaya248 = ?, biaya249 = ?, biaya250 = ?, biaya251 = ?, 
biaya252 = ?, biaya253 = ?, biaya254 = ?, biaya255 = ?, biaya256 = ?, biaya257 = ?, biaya258 = ?, biaya259 = ?, biaya260 = ?, biaya261 = ?, 
biaya262 = ?, biaya263 = ?, biaya264 = ?, biaya265 = ?, biaya266 = ?, biaya267 = ?, biaya268 = ?, biaya269 = ?, biaya270 = ?, biaya271 = ?, 
biaya272 = ?, biaya273 = ?, biaya274 = ?, biaya275 = ?, biaya276 = ?, biaya277 = ?, biaya278 = ?, biaya279 = ?, biaya280 = ?, biaya281 = ?, 
biaya282 = ?, biaya283 = ?, biaya284 = ?, biaya285 = ?, biaya286 = ?, biaya287 = ?, biaya288 = ?, biaya289 = ?, biaya290 = ?, biaya291 = ?, 
biaya292 = ?, biaya293 = ?, biaya294 = ?, biaya295 = ?, biaya296 = ?, biaya297 = ?, biaya298 = ?, biaya299 = ?, biaya300 = ?, biaya301 = ?, 
biaya302 = ?, biaya303 = ?, biaya304 = ?, biaya305 = ?, biaya306 = ?, biaya307 = ?, biaya308 = ?, biaya309 = ?, biaya310 = ?, biaya311 = ?, 
biaya312 = ?, biaya313 = ?, biaya314 = ?, biaya315 = ?, biaya316 = ?, biaya317 = ?, biaya318 = ?, biaya319 = ?, biaya320 = ?, biaya321 = ?, 
biaya322 = ?, biaya323 = ?, biaya324 = ?, biaya325 = ?, biaya326 = ?, biaya327 = ?, biaya328 = ?, biaya329 = ?, biaya330 = ?, biaya331 = ?, 
biaya332 = ?, biaya333 = ?, biaya334 = ?, biaya335 = ?, biaya336 = ?, biaya337 = ?, biaya338 = ?, biaya339 = ?, biaya340 = ?, biaya341 = ?, 
biaya342 = ?, biaya343 = ?, biaya344 = ?, biaya345 = ?, biaya346 = ?, biaya347 = ?, biaya348 = ?, biaya349 = ?, biaya350 = ?, biaya351 = ?, 
biaya352 = ?, biaya353 = ?, biaya354 = ?,

biaya355 = ?, biaya356 = ?, biaya357 = ?, biaya358 = ?, biaya359 = ?, biaya360 = ?, biaya361 = ?, biaya362 = ?, biaya363 = ?, biaya364 = ?, 
biaya365 = ?, biaya366 = ?, biaya367 = ?, biaya368 = ?, biaya369 = ?, biaya370 = ?, biaya371 = ?, biaya372 = ?, biaya373 = ?, biaya374 = ?, 
biaya375 = ?, biaya376 = ?, biaya377 = ?, biaya378 = ?, biaya379 = ?, biaya380 = ?, biaya381 = ?, biaya382 = ?, biaya383 = ?, biaya384 = ?, 
biaya385 = ?, biaya386 = ?, biaya387 = ?, biaya388 = ?, biaya389 = ?, biaya390 = ?, biaya391 = ?, biaya392 = ?, biaya393 = ?, biaya394 = ?, 
biaya395 = ?, biaya396 = ?, biaya397 = ?, biaya398 = ?, biaya399 = ?, biaya400 = ?, biaya401 = ?, biaya402 = ?, biaya403 = ?, biaya404 = ?,
biaya405 = ?, biaya406 = ?, biaya407 = ?, biaya408 = ?, biaya409 = ?, biaya410 = ?, biaya411 = ?, biaya412 = ?, biaya413 = ?, biaya414 = ?, 
biaya415 = ?, biaya416 = ?, biaya417 = ?, biaya418 = ?, biaya419 = ?, biaya420 = ?, biaya421 = ?, biaya422 = ?, biaya423 = ?, biaya424 = ?, 
biaya425 = ?, biaya426 = ?, biaya427 = ?, biaya428 = ?, biaya429 = ?, biaya430 = ?, biaya431 = ?, biaya432 = ?, biaya433 = ?, biaya434 = ?, 
biaya435 = ?, biaya436 = ?, biaya437 = ?, biaya438 = ?, biaya439 = ?, biaya440 = ?, biaya441 = ?, biaya442 = ?, biaya443 = ?, biaya444 = ?, 
biaya445 = ?, biaya446 = ?, biaya447 = ?, biaya448 = ?, biaya449 = ?, biaya450 = ?, biaya451 = ?, biaya452 = ?, biaya453 = ?, biaya454 = ?, 
biaya455 = ?, biaya456 = ?, biaya457 = ?, biaya458 = ?, biaya459 = ?, biaya460 = ?, biaya461 = ?, biaya462 = ?, biaya463 = ?, biaya464 = ?,
biaya465 = ?, biaya466 = ?, biaya467 = ?, biaya468 = ?, biaya469 = ?, biaya470 = ?, biaya471 = ?, biaya472 = ?, biaya473 = ?, biaya474 = ?, 
biaya475 = ?, biaya476 = ?, biaya477 = ?, biaya478 = ?, biaya479 = ?, biaya480 = ?, biaya481 = ?, biaya482 = ?, biaya483 = ?, biaya484 = ?, 
biaya485 = ?, biaya486 = ?, biaya487 = ?, biaya488 = ?, biaya489 = ?, biaya490 = ?, biaya491 = ?, biaya492 = ?, biaya493 = ?, biaya494 = ?, 
biaya495 = ?, biaya496 = ?, biaya497 = ?, biaya498 = ?, biaya499 = ?, biaya500 = ?, biaya501 = ?, biaya502 = ?, biaya503 = ?, biaya504 = ?, 
biaya505 = ?, biaya506 = ?, biaya507 = ?, biaya508 = ?, biaya509 = ?, biaya510 = ?, biaya511 = ?, biaya512 = ?, biaya513 = ?, biaya514 = ?, 
biaya515 = ?, biaya516 = ?, biaya517 = ?, biaya518 = ?, biaya519 = ?, biaya520 = ?, biaya521 = ?, biaya522 = ?,

biaya1049= ?, biaya1050= ?, biaya1051= ?, biaya1052= ?, biaya1053= ?, biaya1054= ?
where nomr = $NOMR ");
        $stmt->execute([
            $dxutama,
            $dxsekunder,

            $biaya1,
            $biaya2,
            $biaya3,
            $biaya4,
            $biaya5,
            $biaya6,
            $biaya7,
            $biaya8,
            $biaya9,
            $biaya10,
            $biaya11,
            $biaya12,
            $biaya13,
            $biaya14,
            $biaya15,
            $biaya16,
            $biaya17,
            $biaya18,
            $biaya19,
            $biaya20,
            $biaya21,
            $biaya22,
            $biaya23,
            $biaya24,
            $biaya25,
            $biaya26,
            $biaya27,
            $biaya28,
            $biaya29,
            $biaya30,
            $biaya31,
            $biaya32,
            $biaya33,
            $biaya34,
            $biaya35,
            $biaya36,
            $biaya37,
            $biaya38,
            $biaya39,
            $biaya40,
            $biaya41,
            $biaya42,
            $biaya43,
            $biaya44,
            $biaya45,
            $biaya46,
            $biaya47,
            $biaya48,
            $biaya49,
            $biaya50,
            $biaya51,
            $biaya52,
            $biaya53,
            $biaya54,
            $biaya55,
            $biaya56,
            $biaya57,
            $biaya58,
            $biaya59,
            $biaya60,
            $biaya61,
            $biaya62,
            $biaya63,
            $biaya64,
            $biaya65,
            $biaya66,
            $biaya67,
            $biaya68,
            $biaya69,
            $biaya70,
            $biaya71,
            $biaya72,
            $biaya73,
            $biaya74,
            $biaya75,
            $biaya76,
            $biaya77,
            $biaya78,
            $biaya79,
            $biaya80,
            $biaya81,
            $biaya82,
            $biaya83,
            $biaya84,
            $biaya85,
            $biaya86,
            $biaya87,
            $biaya88,
            $biaya89,
            $biaya90,
            $biaya91,
            $biaya92,
            $biaya93,
            $biaya94,
            $biaya95,
            $biaya96,
            $biaya97,
            $biaya98,
            $biaya99,
            $biaya100,
            $biaya101,
            $biaya102,
            $biaya103,
            $biaya104,
            $biaya105,
            $biaya106,
            $biaya107,
            $biaya108,
            $biaya109,
            $biaya110,
            $biaya111,
            $biaya112,
            $biaya113,
            $biaya114,
            $biaya115,
            $biaya116,
            $biaya117,
            $biaya118,
            $biaya119,
            $biaya120,
            $biaya121,
            $biaya122,
            $biaya123,
            $biaya124,
            $biaya125,
            $biaya126,
            $biaya127,
            $biaya128,
            $biaya129,
            $biaya130,
            $biaya131,
            $biaya132,
            $biaya133,
            $biaya134,
            $biaya135,
            $biaya136,
            $biaya137,
            $biaya138,
            $biaya139,
            $biaya140,
            $biaya141,
            $biaya142,
            $biaya143,
            $biaya144,
            $biaya145,
            $biaya146,
            $biaya147,
            $biaya148,
            $biaya149,
            $biaya150,
            $biaya151,
            $biaya152,
            $biaya153,
            $biaya154,
            $biaya155,
            $biaya156,
            $biaya157,
            $biaya158,
            $biaya159,
            $biaya160,
            $biaya161,
            $biaya162,
            $biaya163,
            $biaya164,
            $biaya165,
            $biaya166,
            $biaya167,
            $biaya168,
            $biaya169,
            $biaya170,
            $biaya171,
            $biaya172,
            $biaya173,
            $biaya174,
            $biaya175,
            $biaya176,
            $biaya177,
            $biaya178,
            $biaya179,
            $biaya180,
            $biaya181,
            $biaya182,
            $biaya183,
            $biaya184,
            $biaya185,
            $biaya186,
            $biaya187,
            $biaya188,
            $biaya189,
            $biaya190,
            $biaya191,
            $biaya192,
            $biaya193,
            $biaya194,
            $biaya195,
            $biaya196,
            $biaya197,
            $biaya198,
            $biaya199,
            $biaya200,
            $biaya201,
            $biaya202,
            $biaya203,
            $biaya204,
            $biaya205,
            $biaya206,
            $biaya207,
            $biaya208,
            $biaya209,
            $biaya210,
            $biaya211,
            $biaya212,
            $biaya213,
            $biaya214,
            $biaya215,
            $biaya216,
            $biaya217,
            $biaya218,
            $biaya219,
            $biaya220,
            $biaya221,
            $biaya222,
            $biaya223,
            $biaya224,
            $biaya225,
            $biaya226,
            $biaya227,
            $biaya228,
            $biaya229,
            $biaya230,
            $biaya231,
            $biaya232,
            $biaya233,
            $biaya234,
            $biaya235,
            $biaya236,
            $biaya237,
            $biaya238,
            $biaya239,
            $biaya240,
            $biaya241,
            $biaya242,
            $biaya243,
            $biaya244,
            $biaya245,
            $biaya246,
            $biaya247,
            $biaya248,
            $biaya249,
            $biaya250,
            $biaya251,
            $biaya252,
            $biaya253,
            $biaya254,
            $biaya255,
            $biaya256,
            $biaya257,
            $biaya258,
            $biaya259,
            $biaya260,
            $biaya261,
            $biaya262,
            $biaya263,
            $biaya264,
            $biaya265,
            $biaya266,
            $biaya267,
            $biaya268,
            $biaya269,
            $biaya270,

            $biaya271,
            $biaya272,
            $biaya273,
            $biaya274,
            $biaya275,
            $biaya276,
            $biaya277,
            $biaya278,
            $biaya279,
            $biaya280,
            $biaya281,
            $biaya282,
            $biaya283,
            $biaya284,
            $biaya285,
            $biaya286,
            $biaya287,
            $biaya288,
            $biaya289,
            $biaya290,
            $biaya291,
            $biaya292,
            $biaya293,
            $biaya294,
            $biaya295,
            $biaya296,
            $biaya297,
            $biaya298,
            $biaya299,
            $biaya300,
            $biaya301,
            $biaya302,
            $biaya303,
            $biaya304,
            $biaya305,
            $biaya306,
            $biaya307,
            $biaya308,
            $biaya309,
            $biaya310,
            $biaya311,
            $biaya312,

            $biaya313,
            $biaya314,
            $biaya315,
            $biaya316,
            $biaya317,
            $biaya318,
            $biaya319,
            $biaya320,
            $biaya321,
            $biaya322,
            $biaya323,
            $biaya324,
            $biaya325,
            $biaya326,
            $biaya327,
            $biaya328,
            $biaya329,
            $biaya330,

            $biaya331,
            $biaya332,
            $biaya333,
            $biaya334,
            $biaya335,
            $biaya336,

            $biaya337,
            $biaya338,
            $biaya339,
            $biaya340,
            $biaya341,
            $biaya342,

            $biaya343,
            $biaya344,
            $biaya345,
            $biaya346,
            $biaya347,
            $biaya348,

            $biaya349,
            $biaya350,
            $biaya351,
            $biaya352,
            $biaya353,
            $biaya354,

            $biaya355,
            $biaya356,
            $biaya357,
            $biaya358,
            $biaya359,
            $biaya360,
            $biaya361,
            $biaya362,
            $biaya363,
            $biaya364,
            $biaya365,
            $biaya366,
            $biaya367,
            $biaya368,
            $biaya369,
            $biaya370,
            $biaya371,
            $biaya372,
            $biaya373,
            $biaya374,
            $biaya375,
            $biaya376,
            $biaya377,
            $biaya378,
            $biaya379,
            $biaya380,
            $biaya381,
            $biaya382,
            $biaya383,
            $biaya384,
            $biaya385,
            $biaya386,
            $biaya387,
            $biaya388,
            $biaya389,
            $biaya390,
            $biaya391,
            $biaya392,
            $biaya393,
            $biaya394,
            $biaya395,
            $biaya396,
            $biaya397,
            $biaya398,
            $biaya399,
            $biaya400,
            $biaya401,
            $biaya402,
            $biaya403,
            $biaya404,
            $biaya405,
            $biaya406,
            $biaya407,
            $biaya408,
            $biaya409,
            $biaya410,
            $biaya411,
            $biaya412,
            $biaya413,
            $biaya414,
            $biaya415,
            $biaya416,
            $biaya417,
            $biaya418,
            $biaya419,
            $biaya420,
            $biaya421,
            $biaya422,
            $biaya423,
            $biaya424,
            $biaya425,
            $biaya426,
            $biaya427,
            $biaya428,
            $biaya429,
            $biaya430,
            $biaya431,
            $biaya432,
            $biaya433,
            $biaya434,
            $biaya435,
            $biaya436,
            $biaya437,
            $biaya438,
            $biaya439,
            $biaya440,
            $biaya441,
            $biaya442,
            $biaya443,
            $biaya444,
            $biaya445,
            $biaya446,
            $biaya447,
            $biaya448,
            $biaya449,
            $biaya450,
            $biaya451,
            $biaya452,
            $biaya453,
            $biaya454,
            $biaya455,
            $biaya456,
            $biaya457,
            $biaya458,
            $biaya459,
            $biaya460,
            $biaya461,
            $biaya462,
            $biaya463,
            $biaya464,
            $biaya465,
            $biaya466,
            $biaya467,
            $biaya468,
            $biaya469,
            $biaya470,
            $biaya471,
            $biaya472,
            $biaya473,
            $biaya474,
            $biaya475,
            $biaya476,
            $biaya477,
            $biaya478,
            $biaya479,
            $biaya480,
            $biaya481,
            $biaya482,
            $biaya483,
            $biaya484,
            $biaya485,
            $biaya486,
            $biaya487,
            $biaya488,
            $biaya489,
            $biaya490,
            $biaya491,
            $biaya492,
            $biaya493,
            $biaya494,
            $biaya495,
            $biaya496,
            $biaya497,
            $biaya498,
            $biaya499,
            $biaya500,
            $biaya501,
            $biaya502,
            $biaya503,
            $biaya504,
            $biaya505,
            $biaya506,
            $biaya507,
            $biaya508,
            $biaya509,
            $biaya510,
            $biaya511,
            $biaya512,
            $biaya513,
            $biaya514,
            $biaya515,
            $biaya516,
            $biaya517,
            $biaya518,
            $biaya519,
            $biaya520,
            $biaya521,
            $biaya522,

            $biaya1049,
            $biaya1050,
            $biaya1051,
            $biaya1052,
            $biaya1053,
            $biaya1054

        ]);
    } else {
        // Prepare and execute an SQL statement to insert the checkbox values
        $stmt = $pdo->prepare("INSERT INTO t_clinicalpathway(
dxutama, dxsekunder,
biaya1, biaya2, biaya3, biaya4, biaya5, biaya6, biaya7, biaya8, biaya9, biaya10, biaya11, biaya12,
biaya13, biaya14, biaya15, biaya16, biaya17, biaya18, biaya19, biaya20, biaya21, biaya22, biaya23, biaya24,
biaya25, biaya26, biaya27, biaya28, biaya29, biaya30, biaya31, biaya32, biaya33, biaya34, biaya35, biaya36,
biaya37, biaya38, biaya39, biaya40, biaya41, biaya42, biaya43, biaya44, biaya45, biaya46, biaya47, biaya48,
biaya49, biaya50, biaya51, biaya52, biaya53, biaya54, biaya55, biaya56, biaya57, biaya58, biaya59, biaya60,
biaya61, biaya62, biaya63, biaya64, biaya65, biaya66, biaya67, biaya68, biaya69, biaya70, biaya71, biaya72,
biaya73, biaya74, biaya75, biaya76, biaya77, biaya78, biaya79, biaya80, biaya81, biaya82, biaya83, biaya84,
biaya85, biaya86, biaya87, biaya88, biaya89, biaya90, biaya91, biaya92, biaya93, biaya94, biaya95, biaya96,
biaya97, biaya98, biaya99, biaya100, biaya101, biaya102, biaya103, biaya104, biaya105, biaya106, biaya107, biaya108,
biaya109, biaya110, biaya111, biaya112, biaya113, biaya114, biaya115, biaya116, biaya117, biaya118, biaya119, biaya120,

biaya121, biaya122, biaya123, biaya124, biaya125, biaya126, biaya127, biaya128, biaya129, biaya130, biaya131, biaya132,
biaya133, biaya134, biaya135, biaya136, biaya137, biaya138, biaya139, biaya140, biaya141, biaya142, biaya143, biaya144,
biaya145, biaya146, biaya147, biaya148, biaya149, biaya150, biaya151, biaya152, biaya153, biaya154, biaya155, biaya156,
biaya157, biaya158, biaya159, biaya160, biaya161, biaya162, biaya163, biaya164, biaya165, biaya166, biaya167, biaya168,
biaya169, biaya170, biaya171, biaya172, biaya173, biaya174, biaya175, biaya176, biaya177, biaya178, biaya179, biaya180,
biaya181, biaya182, biaya183, biaya184, biaya185, biaya186, biaya187, biaya188, biaya189, biaya190, biaya191, biaya192,
biaya193, biaya194, biaya195, biaya196, biaya197, biaya198, biaya199, biaya200, biaya201, biaya202, biaya203, biaya204,
biaya205, biaya206, biaya207, biaya208, biaya209, biaya210, biaya211, biaya212, biaya213, biaya214, biaya215, biaya216,
biaya217, biaya218, biaya219, biaya220, biaya221, biaya222, biaya223, biaya224, biaya225, biaya226, biaya227, biaya228,
biaya229, biaya230, biaya231, biaya232, biaya233, biaya234, biaya235, biaya236, biaya237, biaya238, biaya239, biaya240,

biaya241, biaya242, biaya243, biaya244, biaya245, biaya246, biaya247, biaya248, biaya249, biaya250, biaya251, biaya252,
biaya253, biaya254, biaya255, biaya256, biaya257, biaya258, biaya259, biaya260, biaya261, biaya262, biaya263, biaya264,
biaya265, biaya266, biaya267, biaya268, biaya269, biaya270, biaya271, biaya272, biaya273, biaya274, biaya275, biaya276,
biaya277, biaya278, biaya279, biaya280, biaya281, biaya282, biaya283, biaya284, biaya285, biaya286, biaya287, biaya288,
biaya289, biaya290, biaya291, biaya292, biaya293, biaya294, biaya295, biaya296, biaya297, biaya298, biaya299, biaya300,
biaya301, biaya302, biaya303, biaya304, biaya305, biaya306, biaya307, biaya308, biaya309, biaya310, biaya311, biaya312,
biaya313, biaya314, biaya315, biaya316, biaya317, biaya318, biaya319, biaya320, biaya321, biaya322, biaya323, biaya324,
biaya325, biaya326, biaya327, biaya328, biaya329, biaya330, biaya331, biaya332, biaya333, biaya334, biaya335, biaya336,
biaya337, biaya338, biaya339, biaya340, biaya341, biaya342, biaya343, biaya344, biaya345, biaya346, biaya347, biaya348,
biaya349, biaya350, biaya351, biaya352, biaya353, biaya354, biaya355, biaya356, biaya357, biaya358, biaya359, biaya360,
biaya361, biaya362, biaya363, biaya364, biaya365, biaya366, biaya367, biaya368, biaya369, biaya370, biaya371, biaya372, 
biaya373, biaya374, biaya375, biaya376, biaya377, biaya378, biaya379, biaya380, biaya381, biaya382, biaya383, biaya384, 
biaya385, biaya386, biaya387, biaya388, biaya389, biaya390, biaya391, biaya392, biaya393, biaya394, biaya395, biaya396, 
biaya397, biaya398, biaya399, biaya400, biaya401, biaya402, biaya403, biaya404, biaya405, biaya406, biaya407, biaya408, 
biaya409, biaya410, biaya411, biaya412, biaya413, biaya414, biaya415, biaya416, biaya417, biaya418, biaya419, biaya420, 
biaya421, biaya422, biaya423, biaya424, biaya425, biaya426, biaya427, biaya428, biaya429, biaya430, biaya431, biaya432, 
biaya433, biaya434, biaya435, biaya436, biaya437, biaya438, biaya439, biaya440, biaya441, biaya442, biaya443, biaya444, 
biaya445, biaya446, biaya447, biaya448, biaya449, biaya450, biaya451, biaya452, biaya453, biaya454, biaya455, biaya456, 
biaya457, biaya458, biaya459, biaya460, biaya461, biaya462, biaya463, biaya464, biaya465, biaya466, biaya467, biaya468, 
biaya469, biaya470, biaya471, biaya472, biaya473, biaya474, biaya475, biaya476, biaya477, biaya478, biaya479, biaya480, 
biaya481, biaya482, biaya483, biaya484, biaya485, biaya486, biaya487, biaya488, biaya489, biaya490, biaya491, biaya492, 
biaya493, biaya494, biaya495, biaya496, biaya497, biaya498, biaya499, biaya500, biaya501, biaya502, biaya503, biaya504, 
biaya505, biaya506, biaya507, biaya508, biaya509, biaya510, biaya511, biaya512, biaya513, biaya514, biaya515, biaya516,
biaya517, biaya518, biaya519, biaya520, biaya521, biaya522, 

biaya1049, biaya1050, biaya1051, biaya1052, biaya1053, biaya1054
) VALUES (
?, ?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,

?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,

?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,

?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,

?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?
)");
        $stmt->execute([
            $biaya1,
            $biaya2,
            $biaya3,
            $biaya4,
            $biaya5,
            $biaya6,
            $biaya7,
            $biaya8,
            $biaya9,
            $biaya10,
            $biaya11,
            $biaya12,
            $biaya13,
            $biaya14,
            $biaya15,
            $biaya16,
            $biaya17,
            $biaya18,
            $biaya19,
            $biaya20,
            $biaya21,
            $biaya22,
            $biaya23,
            $biaya24,
            $biaya25,
            $biaya26,
            $biaya27,
            $biaya28,
            $biaya29,
            $biaya30,
            $biaya31,
            $biaya32,
            $biaya33,
            $biaya34,
            $biaya35,
            $biaya36,
            $biaya37,
            $biaya38,
            $biaya39,
            $biaya40,
            $biaya41,
            $biaya42,
            $biaya43,
            $biaya44,
            $biaya45,
            $biaya46,
            $biaya47,
            $biaya48,
            $biaya49,
            $biaya50,
            $biaya51,
            $biaya52,
            $biaya53,
            $biaya54,
            $biaya55,
            $biaya56,
            $biaya57,
            $biaya58,
            $biaya59,
            $biaya60,
            $biaya61,
            $biaya62,
            $biaya63,
            $biaya64,
            $biaya65,
            $biaya66,
            $biaya67,
            $biaya68,
            $biaya69,
            $biaya70,
            $biaya71,
            $biaya72,
            $biaya73,
            $biaya74,
            $biaya75,
            $biaya76,
            $biaya77,
            $biaya78,
            $biaya79,
            $biaya80,
            $biaya81,
            $biaya82,
            $biaya83,
            $biaya84,
            $biaya85,
            $biaya86,
            $biaya87,
            $biaya88,
            $biaya89,
            $biaya90,
            $biaya91,
            $biaya92,
            $biaya93,
            $biaya94,
            $biaya95,
            $biaya96,
            $biaya97,
            $biaya98,
            $biaya99,
            $biaya100,
            $biaya101,
            $biaya102,
            $biaya103,
            $biaya104,
            $biaya105,
            $biaya106,
            $biaya107,
            $biaya108,
            $biaya109,
            $biaya110,
            $biaya111,
            $biaya112,
            $biaya113,
            $biaya114,
            $biaya115,
            $biaya116,
            $biaya117,
            $biaya118,
            $biaya119,
            $biaya120,
            $biaya121,
            $biaya122,
            $biaya123,
            $biaya124,
            $biaya125,
            $biaya126,
            $biaya127,
            $biaya128,
            $biaya129,
            $biaya130,
            $biaya131,
            $biaya132,
            $biaya133,
            $biaya134,
            $biaya135,
            $biaya136,
            $biaya137,
            $biaya138,
            $biaya139,
            $biaya140,
            $biaya141,
            $biaya142,
            $biaya143,
            $biaya144,
            $biaya145,
            $biaya146,
            $biaya147,
            $biaya148,
            $biaya149,
            $biaya150,
            $biaya151,
            $biaya152,
            $biaya153,
            $biaya154,
            $biaya155,
            $biaya156,
            $biaya157,
            $biaya158,
            $biaya159,
            $biaya160,
            $biaya161,
            $biaya162,
            $biaya163,
            $biaya164,
            $biaya165,
            $biaya166,
            $biaya167,
            $biaya168,
            $biaya169,
            $biaya170,
            $biaya171,
            $biaya172,
            $biaya173,
            $biaya174,
            $biaya175,
            $biaya176,
            $biaya177,
            $biaya178,
            $biaya179,
            $biaya180,
            $biaya181,
            $biaya182,
            $biaya183,
            $biaya184,
            $biaya185,
            $biaya186,
            $biaya187,
            $biaya188,
            $biaya189,
            $biaya190,
            $biaya191,
            $biaya192,
            $biaya193,
            $biaya194,
            $biaya195,
            $biaya196,
            $biaya197,
            $biaya198,
            $biaya199,
            $biaya200,
            $biaya201,
            $biaya202,
            $biaya203,
            $biaya204,
            $biaya205,
            $biaya206,
            $biaya207,
            $biaya208,
            $biaya209,
            $biaya210,
            $biaya211,
            $biaya212,
            $biaya213,
            $biaya214,
            $biaya215,
            $biaya216,
            $biaya217,
            $biaya218,
            $biaya219,
            $biaya220,
            $biaya221,
            $biaya222,
            $biaya223,
            $biaya224,
            $biaya225,
            $biaya226,
            $biaya227,
            $biaya228,
            $biaya229,
            $biaya230,
            $biaya231,
            $biaya232,
            $biaya233,
            $biaya234,
            $biaya235,
            $biaya236,
            $biaya237,
            $biaya238,
            $biaya239,
            $biaya240,
            $biaya241,
            $biaya242,
            $biaya243,
            $biaya244,
            $biaya245,
            $biaya246,
            $biaya247,
            $biaya248,
            $biaya249,
            $biaya250,
            $biaya251,
            $biaya252,
            $biaya253,
            $biaya254,
            $biaya255,
            $biaya256,
            $biaya257,
            $biaya258,
            $biaya259,
            $biaya260,
            $biaya261,
            $biaya262,
            $biaya263,
            $biaya264,
            $biaya265,
            $biaya266,
            $biaya267,
            $biaya268,
            $biaya269,
            $biaya270,

            $biaya271,
            $biaya272,
            $biaya273,
            $biaya274,
            $biaya275,
            $biaya276,
            $biaya277,
            $biaya278,
            $biaya279,
            $biaya280,
            $biaya281,
            $biaya282,
            $biaya283,
            $biaya284,
            $biaya285,
            $biaya286,
            $biaya287,
            $biaya288,
            $biaya289,
            $biaya290,
            $biaya291,
            $biaya292,
            $biaya293,
            $biaya294,
            $biaya295,
            $biaya296,
            $biaya297,
            $biaya298,
            $biaya299,
            $biaya300,
            $biaya301,
            $biaya302,
            $biaya303,
            $biaya304,
            $biaya305,
            $biaya306,
            $biaya307,
            $biaya308,
            $biaya309,
            $biaya310,
            $biaya311,
            $biaya312,

            $biaya313,
            $biaya314,
            $biaya315,
            $biaya316,
            $biaya317,
            $biaya318,
            $biaya319,
            $biaya320,
            $biaya321,
            $biaya322,
            $biaya323,
            $biaya324,

            $biaya325,
            $biaya326,
            $biaya327,
            $biaya328,
            $biaya329,
            $biaya330,
            $biaya331,
            $biaya332,
            $biaya333,
            $biaya334,
            $biaya335,
            $biaya336,

            $biaya337,
            $biaya338,
            $biaya339,
            $biaya340,
            $biaya341,
            $biaya342,

            $biaya343,
            $biaya344,
            $biaya345,
            $biaya346,
            $biaya347,
            $biaya348,

            $biaya349,
            $biaya350,
            $biaya351,
            $biaya352,
            $biaya353,
            $biaya354,

            $biaya355,
            $biaya356,
            $biaya357,
            $biaya358,
            $biaya359,
            $biaya360,
            $biaya361,
            $biaya362,
            $biaya363,
            $biaya364,
            $biaya365,
            $biaya366,
            $biaya367,
            $biaya368,
            $biaya369,
            $biaya370,
            $biaya371,
            $biaya372,
            $biaya373,
            $biaya374,
            $biaya375,
            $biaya376,
            $biaya377,
            $biaya378,
            $biaya379,
            $biaya380,
            $biaya381,
            $biaya382,
            $biaya383,
            $biaya384,
            $biaya385,
            $biaya386,
            $biaya387,
            $biaya388,
            $biaya389,
            $biaya390,
            $biaya391,
            $biaya392,
            $biaya393,
            $biaya394,
            $biaya395,
            $biaya396,
            $biaya397,
            $biaya398,
            $biaya399,
            $biaya400,
            $biaya401,
            $biaya402,
            $biaya403,
            $biaya404,
            $biaya405,
            $biaya406,
            $biaya407,
            $biaya408,
            $biaya409,
            $biaya410,
            $biaya411,
            $biaya412,
            $biaya413,
            $biaya414,
            $biaya415,
            $biaya416,
            $biaya417,
            $biaya418,
            $biaya419,
            $biaya420,
            $biaya421,
            $biaya422,
            $biaya423,
            $biaya424,
            $biaya425,
            $biaya426,
            $biaya427,
            $biaya428,
            $biaya429,
            $biaya430,
            $biaya431,
            $biaya432,
            $biaya433,
            $biaya434,
            $biaya435,
            $biaya436,
            $biaya437,
            $biaya438,
            $biaya439,
            $biaya440,
            $biaya441,
            $biaya442,
            $biaya443,
            $biaya444,
            $biaya445,
            $biaya446,
            $biaya447,
            $biaya448,
            $biaya449,
            $biaya450,
            $biaya451,
            $biaya452,
            $biaya453,
            $biaya454,
            $biaya455,
            $biaya456,
            $biaya457,
            $biaya458,
            $biaya459,
            $biaya460,
            $biaya461,
            $biaya462,
            $biaya463,
            $biaya464,
            $biaya465,
            $biaya466,
            $biaya467,
            $biaya468,
            $biaya469,
            $biaya470,
            $biaya471,
            $biaya472,
            $biaya473,
            $biaya474,
            $biaya475,
            $biaya476,
            $biaya477,
            $biaya478,
            $biaya479,
            $biaya480,
            $biaya481,
            $biaya482,
            $biaya483,
            $biaya484,
            $biaya485,
            $biaya486,
            $biaya487,
            $biaya488,
            $biaya489,
            $biaya490,
            $biaya491,
            $biaya492,
            $biaya493,
            $biaya494,
            $biaya495,
            $biaya496,
            $biaya497,
            $biaya498,
            $biaya499,
            $biaya500,
            $biaya501,
            $biaya502,
            $biaya503,
            $biaya504,
            $biaya505,
            $biaya506,
            $biaya507,
            $biaya508,
            $biaya509,
            $biaya510,
            $biaya511,
            $biaya512,
            $biaya513,
            $biaya514,
            $biaya515,
            $biaya516,
            $biaya517,
            $biaya518,
            $biaya519,
            $biaya520,
            $biaya521,
            $biaya522,


            $biaya1049,
            $biaya1050,
            $biaya1051,
            $biaya1052,
            $biaya1053,
            $biaya1054
        ]);
    }

    // Redirect back to index.php
    header("Location: detailkelas3.php?nomr=$NOMR");
    echo "<script>
    alert('data berhasil disimpan');
</script>";


    // header("Location: kelas1.php");
    unset($_SESSION["biaya1"]);
    unset($_SESSION["biaya2"]);
    unset($_SESSION["biaya3"]);
    unset($_SESSION["biaya4"]);
    unset($_SESSION["biaya5"]);
    unset($_SESSION["biaya6"]);
    unset($_SESSION["biaya7"]);
    unset($_SESSION["biaya8"]);
    unset($_SESSION["biaya9"]);
    unset($_SESSION["biaya10"]);
    unset($_SESSION["biaya11"]);
    unset($_SESSION["biaya12"]);
    unset($_SESSION["biaya13"]);
    unset($_SESSION["biaya14"]);
    unset($_SESSION["biaya15"]);
    unset($_SESSION["biaya16"]);
    unset($_SESSION["biaya17"]);
    unset($_SESSION["biaya18"]);
    unset($_SESSION["biaya19"]);
    unset($_SESSION["biaya20"]);
    unset($_SESSION["biaya21"]);
    unset($_SESSION["biaya22"]);
    unset($_SESSION["biaya23"]);
    unset($_SESSION["biaya24"]);
    unset($_SESSION["biaya25"]);
    unset($_SESSION["biaya26"]);
    unset($_SESSION["biaya27"]);
    unset($_SESSION["biaya28"]);
    unset($_SESSION["biaya29"]);
    unset($_SESSION["biaya30"]);
    unset($_SESSION["biaya31"]);
    unset($_SESSION["biaya32"]);
    unset($_SESSION["biaya33"]);
    unset($_SESSION["biaya34"]);
    unset($_SESSION["biaya35"]);
    unset($_SESSION["biaya36"]);
    unset($_SESSION["biaya37"]);
    unset($_SESSION["biaya38"]);
    unset($_SESSION["biaya39"]);
    unset($_SESSION["biaya40"]);
    unset($_SESSION["biaya41"]);
    unset($_SESSION["biaya42"]);
    unset($_SESSION["biaya43"]);
    unset($_SESSION["biaya44"]);
    unset($_SESSION["biaya45"]);
    unset($_SESSION["biaya46"]);
    unset($_SESSION["biaya47"]);
    unset($_SESSION["biaya48"]);
    unset($_SESSION["biaya49"]);
    unset($_SESSION["biaya50"]);
    unset($_SESSION["biaya51"]);
    unset($_SESSION["biaya52"]);
    unset($_SESSION["biaya53"]);
    unset($_SESSION["biaya54"]);
    unset($_SESSION["biaya55"]);
    unset($_SESSION["biaya56"]);
    unset($_SESSION["biaya57"]);
    unset($_SESSION["biaya58"]);
    unset($_SESSION["biaya59"]);
    unset($_SESSION["biaya60"]);
    unset($_SESSION["biaya61"]);
    unset($_SESSION["biaya62"]);
    unset($_SESSION["biaya63"]);
    unset($_SESSION["biaya64"]);
    unset($_SESSION["biaya65"]);
    unset($_SESSION["biaya66"]);
    unset($_SESSION["biaya67"]);
    unset($_SESSION["biaya68"]);
    unset($_SESSION["biaya69"]);
    unset($_SESSION["biaya70"]);
    unset($_SESSION["biaya71"]);
    unset($_SESSION["biaya72"]);
    unset($_SESSION["biaya73"]);
    unset($_SESSION["biaya74"]);
    unset($_SESSION["biaya75"]);
    unset($_SESSION["biaya76"]);
    unset($_SESSION["biaya77"]);
    unset($_SESSION["biaya78"]);
    unset($_SESSION["biaya79"]);
    unset($_SESSION["biaya80"]);
    unset($_SESSION["biaya81"]);
    unset($_SESSION["biaya82"]);
    unset($_SESSION["biaya83"]);
    unset($_SESSION["biaya84"]);
    unset($_SESSION["biaya85"]);
    unset($_SESSION["biaya86"]);
    unset($_SESSION["biaya87"]);
    unset($_SESSION["biaya88"]);
    unset($_SESSION["biaya89"]);
    unset($_SESSION["biaya90"]);
    unset($_SESSION["biaya91"]);
    unset($_SESSION["biaya92"]);
    unset($_SESSION["biaya93"]);
    unset($_SESSION["biaya94"]);
    unset($_SESSION["biaya95"]);
    unset($_SESSION["biaya96"]);
    unset($_SESSION["biaya97"]);
    unset($_SESSION["biaya98"]);
    unset($_SESSION["biaya99"]);
    unset($_SESSION["biaya100"]);
    unset($_SESSION["biaya101"]);
    unset($_SESSION["biaya102"]);
    unset($_SESSION["biaya103"]);
    unset($_SESSION["biaya104"]);
    unset($_SESSION["biaya105"]);
    unset($_SESSION["biaya106"]);
    unset($_SESSION["biaya107"]);
    unset($_SESSION["biaya108"]);
    unset($_SESSION["biaya109"]);
    unset($_SESSION["biaya110"]);
    unset($_SESSION["biaya111"]);
    unset($_SESSION["biaya112"]);
    unset($_SESSION["biaya113"]);
    unset($_SESSION["biaya114"]);
    unset($_SESSION["biaya115"]);
    unset($_SESSION["biaya116"]);
    unset($_SESSION["biaya117"]);
    unset($_SESSION["biaya118"]);
    unset($_SESSION["biaya119"]);
    unset($_SESSION["biaya120"]);
    unset($_SESSION["biaya121"]);
    unset($_SESSION["biaya122"]);
    unset($_SESSION["biaya123"]);
    unset($_SESSION["biaya124"]);
    unset($_SESSION["biaya125"]);
    unset($_SESSION["biaya126"]);
    unset($_SESSION["biaya127"]);
    unset($_SESSION["biaya128"]);
    unset($_SESSION["biaya129"]);
    unset($_SESSION["biaya130"]);
    unset($_SESSION["biaya131"]);
    unset($_SESSION["biaya132"]);
    unset($_SESSION["biaya133"]);
    unset($_SESSION["biaya134"]);
    unset($_SESSION["biaya135"]);
    unset($_SESSION["biaya136"]);
    unset($_SESSION["biaya137"]);
    unset($_SESSION["biaya138"]);
    unset($_SESSION["biaya139"]);
    unset($_SESSION["biaya140"]);
    unset($_SESSION["biaya141"]);
    unset($_SESSION["biaya142"]);
    unset($_SESSION["biaya143"]);
    unset($_SESSION["biaya144"]);
    unset($_SESSION["biaya145"]);
    unset($_SESSION["biaya146"]);
    unset($_SESSION["biaya147"]);
    unset($_SESSION["biaya148"]);
    unset($_SESSION["biaya149"]);
    unset($_SESSION["biaya150"]);
    unset($_SESSION["biaya151"]);
    unset($_SESSION["biaya152"]);
    unset($_SESSION["biaya153"]);
    unset($_SESSION["biaya154"]);
    unset($_SESSION["biaya155"]);
    unset($_SESSION["biaya156"]);
    unset($_SESSION["biaya157"]);
    unset($_SESSION["biaya158"]);
    unset($_SESSION["biaya159"]);
    unset($_SESSION["biaya160"]);
    unset($_SESSION["biaya161"]);
    unset($_SESSION["biaya162"]);
    unset($_SESSION["biaya163"]);
    unset($_SESSION["biaya164"]);
    unset($_SESSION["biaya165"]);
    unset($_SESSION["biaya166"]);
    unset($_SESSION["biaya167"]);
    unset($_SESSION["biaya168"]);
    unset($_SESSION["biaya169"]);
    unset($_SESSION["biaya170"]);
    unset($_SESSION["biaya171"]);
    unset($_SESSION["biaya172"]);
    unset($_SESSION["biaya173"]);
    unset($_SESSION["biaya174"]);
    unset($_SESSION["biaya175"]);
    unset($_SESSION["biaya176"]);
    unset($_SESSION["biaya177"]);
    unset($_SESSION["biaya178"]);
    unset($_SESSION["biaya179"]);
    unset($_SESSION["biaya180"]);
    unset($_SESSION["biaya181"]);
    unset($_SESSION["biaya182"]);
    unset($_SESSION["biaya183"]);
    unset($_SESSION["biaya184"]);
    unset($_SESSION["biaya185"]);
    unset($_SESSION["biaya186"]);
    unset($_SESSION["biaya187"]);
    unset($_SESSION["biaya188"]);
    unset($_SESSION["biaya189"]);
    unset($_SESSION["biaya190"]);
    unset($_SESSION["biaya191"]);
    unset($_SESSION["biaya192"]);
    unset($_SESSION["biaya193"]);
    unset($_SESSION["biaya194"]);
    unset($_SESSION["biaya195"]);
    unset($_SESSION["biaya196"]);
    unset($_SESSION["biaya197"]);
    unset($_SESSION["biaya198"]);
    unset($_SESSION["biaya199"]);
    unset($_SESSION["biaya200"]);
    unset($_SESSION["biaya201"]);
    unset($_SESSION["biaya202"]);
    unset($_SESSION["biaya203"]);
    unset($_SESSION["biaya204"]);
    unset($_SESSION["biaya205"]);
    unset($_SESSION["biaya206"]);
    unset($_SESSION["biaya207"]);
    unset($_SESSION["biaya208"]);
    unset($_SESSION["biaya209"]);
    unset($_SESSION["biaya210"]);
    unset($_SESSION["biaya211"]);
    unset($_SESSION["biaya212"]);
    unset($_SESSION["biaya213"]);
    unset($_SESSION["biaya214"]);
    unset($_SESSION["biaya215"]);
    unset($_SESSION["biaya216"]);
    unset($_SESSION["biaya217"]);
    unset($_SESSION["biaya218"]);
    unset($_SESSION["biaya219"]);
    unset($_SESSION["biaya220"]);
    unset($_SESSION["biaya221"]);
    unset($_SESSION["biaya222"]);
    unset($_SESSION["biaya223"]);
    unset($_SESSION["biaya224"]);
    unset($_SESSION["biaya225"]);
    unset($_SESSION["biaya226"]);
    unset($_SESSION["biaya227"]);
    unset($_SESSION["biaya228"]);
    unset($_SESSION["biaya229"]);
    unset($_SESSION["biaya230"]);
    unset($_SESSION["biaya231"]);
    unset($_SESSION["biaya232"]);
    unset($_SESSION["biaya233"]);
    unset($_SESSION["biaya234"]);
    unset($_SESSION["biaya235"]);
    unset($_SESSION["biaya236"]);
    unset($_SESSION["biaya237"]);
    unset($_SESSION["biaya238"]);
    unset($_SESSION["biaya239"]);
    unset($_SESSION["biaya240"]);
    unset($_SESSION["biaya241"]);
    unset($_SESSION["biaya242"]);
    unset($_SESSION["biaya243"]);
    unset($_SESSION["biaya244"]);
    unset($_SESSION["biaya245"]);
    unset($_SESSION["biaya246"]);
    unset($_SESSION["biaya247"]);
    unset($_SESSION["biaya248"]);
    unset($_SESSION["biaya249"]);
    unset($_SESSION["biaya250"]);
    unset($_SESSION["biaya251"]);
    unset($_SESSION["biaya252"]);
    unset($_SESSION["biaya253"]);
    unset($_SESSION["biaya254"]);
    unset($_SESSION["biaya255"]);
    unset($_SESSION["biaya256"]);
    unset($_SESSION["biaya257"]);
    unset($_SESSION["biaya258"]);
    unset($_SESSION["biaya259"]);
    unset($_SESSION["biaya260"]);
    unset($_SESSION["biaya261"]);
    unset($_SESSION["biaya262"]);
    unset($_SESSION["biaya263"]);
    unset($_SESSION["biaya264"]);
    unset($_SESSION["biaya265"]);
    unset($_SESSION["biaya266"]);
    unset($_SESSION["biaya267"]);
    unset($_SESSION["biaya268"]);
    unset($_SESSION["biaya269"]);
    unset($_SESSION["biaya270"]);

    unset($_SESSION["biaya271"]);
    unset($_SESSION["biaya272"]);
    unset($_SESSION["biaya273"]);
    unset($_SESSION["biaya274"]);
    unset($_SESSION["biaya275"]);
    unset($_SESSION["biaya276"]);
    unset($_SESSION["biaya277"]);
    unset($_SESSION["biaya278"]);
    unset($_SESSION["biaya279"]);
    unset($_SESSION["biaya280"]);
    unset($_SESSION["biaya281"]);
    unset($_SESSION["biaya282"]);
    unset($_SESSION["biaya283"]);
    unset($_SESSION["biaya284"]);
    unset($_SESSION["biaya285"]);
    unset($_SESSION["biaya286"]);
    unset($_SESSION["biaya287"]);
    unset($_SESSION["biaya288"]);
    unset($_SESSION["biaya289"]);
    unset($_SESSION["biaya290"]);
    unset($_SESSION["biaya291"]);
    unset($_SESSION["biaya292"]);
    unset($_SESSION["biaya293"]);
    unset($_SESSION["biaya294"]);
    unset($_SESSION["biaya295"]);
    unset($_SESSION["biaya296"]);
    unset($_SESSION["biaya297"]);
    unset($_SESSION["biaya298"]);
    unset($_SESSION["biaya299"]);
    unset($_SESSION["biaya300"]);
    unset($_SESSION["biaya301"]);
    unset($_SESSION["biaya302"]);
    unset($_SESSION["biaya303"]);
    unset($_SESSION["biaya304"]);
    unset($_SESSION["biaya305"]);
    unset($_SESSION["biaya306"]);
    unset($_SESSION["biaya307"]);
    unset($_SESSION["biaya308"]);
    unset($_SESSION["biaya309"]);
    unset($_SESSION["biaya310"]);
    unset($_SESSION["biaya311"]);
    unset($_SESSION["biaya312"]);

    unset($_SESSION["biaya313"]);
    unset($_SESSION["biaya314"]);
    unset($_SESSION["biaya315"]);
    unset($_SESSION["biaya316"]);
    unset($_SESSION["biaya317"]);
    unset($_SESSION["biaya318"]);
    unset($_SESSION["biaya319"]);
    unset($_SESSION["biaya320"]);
    unset($_SESSION["biaya321"]);
    unset($_SESSION["biaya322"]);
    unset($_SESSION["biaya323"]);
    unset($_SESSION["biaya324"]);

    unset($_SESSION["biaya325"]);
    unset($_SESSION["biaya326"]);
    unset($_SESSION["biaya327"]);
    unset($_SESSION["biaya328"]);
    unset($_SESSION["biaya329"]);
    unset($_SESSION["biaya330"]);
    unset($_SESSION["biaya331"]);
    unset($_SESSION["biaya332"]);
    unset($_SESSION["biaya333"]);
    unset($_SESSION["biaya334"]);
    unset($_SESSION["biaya335"]);
    unset($_SESSION["biaya336"]);

    unset($_SESSION["biaya337"]);
    unset($_SESSION["biaya338"]);
    unset($_SESSION["biaya339"]);
    unset($_SESSION["biaya340"]);
    unset($_SESSION["biaya341"]);
    unset($_SESSION["biaya342"]);

    unset($_SESSION["biaya343"]);
    unset($_SESSION["biaya344"]);
    unset($_SESSION["biaya345"]);
    unset($_SESSION["biaya346"]);
    unset($_SESSION["biaya347"]);
    unset($_SESSION["biaya348"]);

    unset($_SESSION["biaya349"]);
    unset($_SESSION["biaya350"]);
    unset($_SESSION["biaya351"]);
    unset($_SESSION["biaya352"]);
    unset($_SESSION["biaya353"]);
    unset($_SESSION["biaya354"]);

    unset($_SESSION["biaya355"]);
    unset($_SESSION["biaya356"]);
    unset($_SESSION["biaya357"]);
    unset($_SESSION["biaya358"]);
    unset($_SESSION["biaya359"]);
    unset($_SESSION["biaya360"]);
    unset($_SESSION["biaya361"]);
    unset($_SESSION["biaya362"]);
    unset($_SESSION["biaya363"]);
    unset($_SESSION["biaya364"]);
    unset($_SESSION["biaya365"]);
    unset($_SESSION["biaya366"]);
    unset($_SESSION["biaya367"]);
    unset($_SESSION["biaya368"]);
    unset($_SESSION["biaya369"]);
    unset($_SESSION["biaya370"]);
    unset($_SESSION["biaya371"]);
    unset($_SESSION["biaya372"]);
    unset($_SESSION["biaya373"]);
    unset($_SESSION["biaya374"]);
    unset($_SESSION["biaya375"]);
    unset($_SESSION["biaya376"]);
    unset($_SESSION["biaya377"]);
    unset($_SESSION["biaya378"]);
    unset($_SESSION["biaya379"]);
    unset($_SESSION["biaya380"]);
    unset($_SESSION["biaya381"]);
    unset($_SESSION["biaya382"]);
    unset($_SESSION["biaya383"]);
    unset($_SESSION["biaya384"]);
    unset($_SESSION["biaya385"]);
    unset($_SESSION["biaya386"]);
    unset($_SESSION["biaya387"]);
    unset($_SESSION["biaya388"]);
    unset($_SESSION["biaya389"]);
    unset($_SESSION["biaya390"]);
    unset($_SESSION["biaya391"]);
    unset($_SESSION["biaya392"]);
    unset($_SESSION["biaya393"]);
    unset($_SESSION["biaya394"]);
    unset($_SESSION["biaya395"]);
    unset($_SESSION["biaya396"]);
    unset($_SESSION["biaya397"]);
    unset($_SESSION["biaya398"]);
    unset($_SESSION["biaya399"]);
    unset($_SESSION["biaya400"]);
    unset($_SESSION["biaya401"]);
    unset($_SESSION["biaya402"]);
    unset($_SESSION["biaya403"]);
    unset($_SESSION["biaya404"]);
    unset($_SESSION["biaya405"]);
    unset($_SESSION["biaya406"]);
    unset($_SESSION["biaya407"]);
    unset($_SESSION["biaya408"]);
    unset($_SESSION["biaya409"]);
    unset($_SESSION["biaya410"]);
    unset($_SESSION["biaya411"]);
    unset($_SESSION["biaya412"]);
    unset($_SESSION["biaya413"]);
    unset($_SESSION["biaya414"]);
    unset($_SESSION["biaya415"]);
    unset($_SESSION["biaya416"]);
    unset($_SESSION["biaya417"]);
    unset($_SESSION["biaya418"]);
    unset($_SESSION["biaya419"]);
    unset($_SESSION["biaya420"]);
    unset($_SESSION["biaya421"]);
    unset($_SESSION["biaya422"]);
    unset($_SESSION["biaya423"]);
    unset($_SESSION["biaya424"]);
    unset($_SESSION["biaya425"]);
    unset($_SESSION["biaya426"]);
    unset($_SESSION["biaya427"]);
    unset($_SESSION["biaya428"]);
    unset($_SESSION["biaya429"]);
    unset($_SESSION["biaya430"]);
    unset($_SESSION["biaya431"]);
    unset($_SESSION["biaya432"]);
    unset($_SESSION["biaya433"]);
    unset($_SESSION["biaya434"]);
    unset($_SESSION["biaya435"]);
    unset($_SESSION["biaya436"]);
    unset($_SESSION["biaya437"]);
    unset($_SESSION["biaya438"]);
    unset($_SESSION["biaya439"]);
    unset($_SESSION["biaya440"]);
    unset($_SESSION["biaya441"]);
    unset($_SESSION["biaya442"]);
    unset($_SESSION["biaya443"]);
    unset($_SESSION["biaya444"]);
    unset($_SESSION["biaya445"]);
    unset($_SESSION["biaya446"]);
    unset($_SESSION["biaya447"]);
    unset($_SESSION["biaya448"]);
    unset($_SESSION["biaya449"]);
    unset($_SESSION["biaya450"]);
    unset($_SESSION["biaya451"]);
    unset($_SESSION["biaya452"]);
    unset($_SESSION["biaya453"]);
    unset($_SESSION["biaya454"]);
    unset($_SESSION["biaya455"]);
    unset($_SESSION["biaya456"]);
    unset($_SESSION["biaya457"]);
    unset($_SESSION["biaya458"]);
    unset($_SESSION["biaya459"]);
    unset($_SESSION["biaya460"]);
    unset($_SESSION["biaya461"]);
    unset($_SESSION["biaya462"]);
    unset($_SESSION["biaya463"]);
    unset($_SESSION["biaya464"]);
    unset($_SESSION["biaya465"]);
    unset($_SESSION["biaya466"]);
    unset($_SESSION["biaya467"]);
    unset($_SESSION["biaya468"]);
    unset($_SESSION["biaya469"]);
    unset($_SESSION["biaya470"]);
    unset($_SESSION["biaya471"]);
    unset($_SESSION["biaya472"]);
    unset($_SESSION["biaya473"]);
    unset($_SESSION["biaya474"]);
    unset($_SESSION["biaya475"]);
    unset($_SESSION["biaya476"]);
    unset($_SESSION["biaya477"]);
    unset($_SESSION["biaya478"]);
    unset($_SESSION["biaya479"]);
    unset($_SESSION["biaya480"]);
    unset($_SESSION["biaya481"]);
    unset($_SESSION["biaya482"]);
    unset($_SESSION["biaya483"]);
    unset($_SESSION["biaya484"]);
    unset($_SESSION["biaya485"]);
    unset($_SESSION["biaya486"]);
    unset($_SESSION["biaya487"]);
    unset($_SESSION["biaya488"]);
    unset($_SESSION["biaya489"]);
    unset($_SESSION["biaya490"]);
    unset($_SESSION["biaya491"]);
    unset($_SESSION["biaya492"]);
    unset($_SESSION["biaya493"]);
    unset($_SESSION["biaya494"]);
    unset($_SESSION["biaya495"]);
    unset($_SESSION["biaya496"]);
    unset($_SESSION["biaya497"]);
    unset($_SESSION["biaya498"]);
    unset($_SESSION["biaya499"]);
    unset($_SESSION["biaya500"]);
    unset($_SESSION["biaya501"]);
    unset($_SESSION["biaya502"]);
    unset($_SESSION["biaya503"]);
    unset($_SESSION["biaya504"]);
    unset($_SESSION["biaya505"]);
    unset($_SESSION["biaya506"]);
    unset($_SESSION["biaya507"]);
    unset($_SESSION["biaya508"]);
    unset($_SESSION["biaya509"]);
    unset($_SESSION["biaya510"]);
    unset($_SESSION["biaya511"]);
    unset($_SESSION["biaya512"]);
    unset($_SESSION["biaya513"]);
    unset($_SESSION["biaya514"]);
    unset($_SESSION["biaya515"]);
    unset($_SESSION["biaya516"]);
    unset($_SESSION["biaya517"]);
    unset($_SESSION["biaya518"]);
    unset($_SESSION["biaya519"]);
    unset($_SESSION["biaya520"]);
    unset($_SESSION["biaya521"]);
    unset($_SESSION["biaya522"]);


    unset($_SESSION['biaya1049'] );
    unset($_SESSION['biaya1050'] );
    unset($_SESSION['biaya1051'] );
    unset($_SESSION['biaya1052'] );
    unset($_SESSION['biaya1053'] );
    unset($_SESSION['biaya1054'] );


    exit();
} elseif (!$row) {
    // If no checkbox data is found in the database, insert default values
    $stmt = $pdo->prepare("INSERT INTO t_clinicalpathway (
dxutama, dxsekunder, 
biaya1, biaya2, biaya3, biaya4, biaya5, biaya6, biaya7, biaya8, biaya9, biaya10, biaya11, biaya12,
biaya13, biaya14, biaya15, biaya16, biaya17, biaya18, biaya19, biaya20, biaya21, biaya22, biaya23, biaya24,
biaya25, biaya26, biaya27, biaya28, biaya29, biaya30, biaya31, biaya32, biaya33, biaya34, biaya35, biaya36,
biaya37, biaya38, biaya39, biaya40, biaya41, biaya42, biaya43, biaya44, biaya45, biaya46, biaya47, biaya48,
biaya49, biaya50, biaya51, biaya52, biaya53, biaya54, biaya55, biaya56, biaya57, biaya58, biaya59, biaya60,

biaya61, biaya62, biaya63, biaya64, biaya65, biaya66, biaya67, biaya68, biaya69, biaya70, biaya71, biaya72,
biaya73, biaya74, biaya75, biaya76, biaya77, biaya78, biaya79, biaya80, biaya81, biaya82, biaya83, biaya84,
biaya85, biaya86, biaya87, biaya88, biaya89, biaya90, biaya91, biaya92, biaya93, biaya94, biaya95, biaya96,
biaya97, biaya98, biaya99, biaya100, biaya101, biaya102, biaya103, biaya104, biaya105, biaya106, biaya107, biaya108,
biaya109, biaya110, biaya111, biaya112, biaya113, biaya114, biaya115, biaya116, biaya117, biaya118, biaya119, biaya120,

biaya121, biaya122, biaya123, biaya124, biaya125, biaya126, biaya127, biaya128, biaya129, biaya130, biaya131, biaya132,
biaya133, biaya134, biaya135, biaya136, biaya137, biaya138, biaya139, biaya140, biaya141, biaya142, biaya143, biaya144,
biaya145, biaya146, biaya147, biaya148, biaya149, biaya150, biaya151, biaya152, biaya153, biaya154, biaya155, biaya156,
biaya157, biaya158, biaya159, biaya160, biaya161, biaya162, biaya163, biaya164, biaya165, biaya166, biaya167, biaya168,
biaya169, biaya170, biaya171, biaya172, biaya173, biaya174, biaya175, biaya176, biaya177, biaya178, biaya179, biaya180,

biaya181, biaya182, biaya183, biaya184, biaya185, biaya186, biaya187, biaya188, biaya189, biaya190, biaya191, biaya192,
biaya193, biaya194, biaya195, biaya196, biaya197, biaya198, biaya199, biaya200, biaya201, biaya202, biaya203, biaya204,
biaya205, biaya206, biaya207, biaya208, biaya209, biaya210, biaya211, biaya212, biaya213, biaya214, biaya215, biaya216,
biaya217, biaya218, biaya219, biaya220, biaya221, biaya222, biaya223, biaya224, biaya225, biaya226, biaya227, biaya228,
biaya229, biaya230, biaya231, biaya232, biaya233, biaya234, biaya235, biaya236, biaya237, biaya238, biaya239, biaya240,

biaya241, biaya242, biaya243, biaya244, biaya245, biaya246, biaya247, biaya248, biaya249, biaya250, biaya251, biaya252,
biaya253, biaya254, biaya255, biaya256, biaya257, biaya258, biaya259, biaya260, biaya261, biaya262, biaya263, biaya264,
biaya265, biaya266, biaya267, biaya268, biaya269, biaya270, biaya271, biaya272, biaya273, biaya274, biaya275, biaya276,
biaya277, biaya278, biaya279, biaya280, biaya281, biaya282, biaya283, biaya284, biaya285, biaya286, biaya287, biaya288,
biaya289, biaya290, biaya291, biaya292, biaya293, biaya294, biaya295, biaya296, biaya297, biaya298, biaya299, biaya300,

biaya301, biaya302, biaya303, biaya304, biaya305, biaya306, biaya307, biaya308, biaya309, biaya310, biaya311, biaya312,
biaya313, biaya314, biaya315, biaya316, biaya317, biaya318, biaya319, biaya320, biaya321, biaya322, biaya323, biaya324,
biaya325, biaya326, biaya327, biaya328, biaya329, biaya330, biaya331, biaya332, biaya333, biaya334, biaya335, biaya336,
biaya337, biaya338, biaya339, biaya340, biaya341, biaya342, biaya343, biaya344, biaya345, biaya346, biaya347, biaya348,
biaya349, biaya350, biaya351, biaya352, biaya353, biaya354, biaya355, biaya356, biaya357, biaya358, biaya359, biaya360,
biaya361, biaya362, biaya363, biaya364, biaya365, biaya366, biaya367, biaya368, biaya369, biaya370, biaya371, biaya372, 
biaya373, biaya374, biaya375, biaya376, biaya377, biaya378, biaya379, biaya380, biaya381, biaya382, biaya383, biaya384, 
biaya385, biaya386, biaya387, biaya388, biaya389, biaya390, biaya391, biaya392, biaya393, biaya394, biaya395, biaya396, 
biaya397, biaya398, biaya399, biaya400, biaya401, biaya402, biaya403, biaya404, biaya405, biaya406, biaya407, biaya408, 
biaya409, biaya410, biaya411, biaya412, biaya413, biaya414, biaya415, biaya416, biaya417, biaya418, biaya419, biaya420, 
biaya421, biaya422, biaya423, biaya424, biaya425, biaya426, biaya427, biaya428, biaya429, biaya430, biaya431, biaya432, 
biaya433, biaya434, biaya435, biaya436, biaya437, biaya438, biaya439, biaya440, biaya441, biaya442, biaya443, biaya444, 
biaya445, biaya446, biaya447, biaya448, biaya449, biaya450, biaya451, biaya452, biaya453, biaya454, biaya455, biaya456, 
biaya457, biaya458, biaya459, biaya460, biaya461, biaya462, biaya463, biaya464, biaya465, biaya466, biaya467, biaya468, 
biaya469, biaya470, biaya471, biaya472, biaya473, biaya474, biaya475, biaya476, biaya477, biaya478, biaya479, biaya480, 
biaya481, biaya482, biaya483, biaya484, biaya485, biaya486, biaya487, biaya488, biaya489, biaya490, biaya491, biaya492, 
biaya493, biaya494, biaya495, biaya496, biaya497, biaya498, biaya499, biaya500, biaya501, biaya502, biaya503, biaya504, 
biaya505, biaya506, biaya507, biaya508, biaya509, biaya510, biaya511, biaya512, biaya513, biaya514, biaya515, biaya516,
biaya517, biaya518, biaya519, biaya520, biaya521, biaya522,


biaya1049, biaya1050, biaya1051, biaya1052, biaya1053, biaya1054
) VALUES (
            $dxutama, $dxsekunder, 
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,

            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,

            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,

            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,

            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,

            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,

            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0
)");
    $stmt->execute();
}
?>