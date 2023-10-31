<?php
$host = '192.168.1.178';
$user = 'root';
$password = 'takonbudi';
$database = 'simrs';

// Create a connection
$connection = mysqli_connect($host, $user, $password, $database);

// Check if the connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the RM number from the URL parameter
$NOMR = $_GET["nomr"];

// Query to calculate the sum of biaya1, biaya2, and biaya3 for the specific RM number
$query = "SELECT 
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
                                
                                FROM simrs.t_clinicalpathway WHERE NOMR = $NOMR";
$result = mysqli_query($connection, $query);

// Check if the query was successful
if ($result) {
    // Fetch the total_biaya value
    $row = mysqli_fetch_assoc($result);
    $totalBiaya =
        $row['biaya1'] + $row['biaya2'] + $row['biaya3'] + $row['biaya4'] + $row['biaya5'] + $row['biaya6'] +
        $row['biaya7'] + $row['biaya8'] + $row['biaya9'] + $row['biaya10'] + $row['biaya11'] + $row['biaya12'] +
        $row['biaya13'] + $row['biaya14'] + $row['biaya15'] + $row['biaya16'] + $row['biaya17'] + $row['biaya18'] +
        $row['biaya19'] + $row['biaya20'] + $row['biaya21'] + $row['biaya22'] + $row['biaya23'] + $row['biaya24'] +
        $row['biaya25'] + $row['biaya26'] + $row['biaya27'] + $row['biaya28'] + $row['biaya29'] + $row['biaya30'] +
        $row['biaya31'] + $row['biaya32'] + $row['biaya33'] + $row['biaya34'] + $row['biaya35'] + $row['biaya36'] +
        $row['biaya37'] + $row['biaya38'] + $row['biaya39'] + $row['biaya40'] + $row['biaya41'] + $row['biaya42'] +
        $row['biaya43'] + $row['biaya44'] + $row['biaya45'] + $row['biaya46'] + $row['biaya47'] + $row['biaya48'] +
        $row['biaya49'] + $row['biaya50'] + $row['biaya51'] + $row['biaya52'] + $row['biaya53'] + $row['biaya54'] +
        $row['biaya55'] + $row['biaya56'] + $row['biaya57'] + $row['biaya58'] + $row['biaya59'] + $row['biaya60'] +
        $row['biaya61'] + $row['biaya62'] + $row['biaya63'] + $row['biaya64'] + $row['biaya65'] + $row['biaya66'] +
        $row['biaya67'] + $row['biaya68'] + $row['biaya69'] + $row['biaya70'] + $row['biaya71'] + $row['biaya72'] +
        $row['biaya73'] + $row['biaya74'] + $row['biaya75'] + $row['biaya76'] + $row['biaya77'] + $row['biaya78'] +
        $row['biaya79'] + $row['biaya80'] + $row['biaya81'] + $row['biaya82'] + $row['biaya83'] + $row['biaya84'] +
        $row['biaya85'] + $row['biaya86'] + $row['biaya87'] + $row['biaya88'] + $row['biaya89'] + $row['biaya90'] +
        $row['biaya91'] + $row['biaya92'] + $row['biaya93'] + $row['biaya94'] + $row['biaya95'] + $row['biaya96'] +
        $row['biaya97'] + $row['biaya98'] + $row['biaya99'] + $row['biaya100'] + $row['biaya101'] + $row['biaya102'] +
        $row['biaya103'] + $row['biaya104'] + $row['biaya105'] + $row['biaya106'] + $row['biaya107'] + $row['biaya108'] +
        $row['biaya109'] + $row['biaya110'] + $row['biaya111'] + $row['biaya112'] + $row['biaya113'] + $row['biaya114'] +
        $row['biaya115'] + $row['biaya116'] + $row['biaya117'] + $row['biaya118'] + $row['biaya119'] + $row['biaya120'] +
        $row['biaya121'] + $row['biaya122'] + $row['biaya123'] + $row['biaya124'] + $row['biaya125'] + $row['biaya126'] +
        $row['biaya127'] + $row['biaya128'] + $row['biaya129'] + $row['biaya130'] + $row['biaya131'] + $row['biaya132'] +
        $row['biaya133'] + $row['biaya134'] + $row['biaya135'] + $row['biaya136'] + $row['biaya137'] + $row['biaya138'] +
        $row['biaya139'] + $row['biaya140'] + $row['biaya141'] + $row['biaya142'] + $row['biaya143'] + $row['biaya144'] +
        $row['biaya145'] + $row['biaya146'] + $row['biaya147'] + $row['biaya148'] + $row['biaya149'] + $row['biaya150'] +
        $row['biaya151'] + $row['biaya152'] + $row['biaya153'] + $row['biaya154'] + $row['biaya155'] + $row['biaya156'] +
        $row['biaya157'] + $row['biaya158'] + $row['biaya159'] + $row['biaya160'] + $row['biaya161'] + $row['biaya162'] +
        $row['biaya163'] + $row['biaya164'] + $row['biaya165'] + $row['biaya166'] + $row['biaya167'] + $row['biaya168'] +
        $row['biaya169'] + $row['biaya170'] + $row['biaya171'] + $row['biaya172'] + $row['biaya173'] + $row['biaya174'] +
        $row['biaya175'] + $row['biaya176'] + $row['biaya177'] + $row['biaya178'] + $row['biaya179'] + $row['biaya180'] +
        $row['biaya181'] + $row['biaya182'] + $row['biaya183'] + $row['biaya184'] + $row['biaya185'] + $row['biaya186'] +
        $row['biaya187'] + $row['biaya188'] + $row['biaya189'] + $row['biaya190'] + $row['biaya191'] + $row['biaya192'] +
        $row['biaya193'] + $row['biaya194'] + $row['biaya195'] + $row['biaya196'] + $row['biaya197'] + $row['biaya198'] +
        $row['biaya199'] + $row['biaya200'] + $row['biaya201'] + $row['biaya202'] + $row['biaya203'] + $row['biaya204'] +
        $row['biaya205'] + $row['biaya206'] + $row['biaya207'] + $row['biaya208'] + $row['biaya209'] + $row['biaya210'] +
        $row['biaya211'] + $row['biaya212'] + $row['biaya213'] + $row['biaya214'] + $row['biaya215'] + $row['biaya216'] +
        $row['biaya217'] + $row['biaya218'] + $row['biaya219'] + $row['biaya220'] + $row['biaya221'] + $row['biaya222'] +
        $row['biaya223'] + $row['biaya224'] + $row['biaya225'] + $row['biaya226'] + $row['biaya227'] + $row['biaya228'] +
        $row['biaya229'] + $row['biaya230'] + $row['biaya231'] + $row['biaya232'] + $row['biaya233'] + $row['biaya234'] +
        $row['biaya235'] + $row['biaya236'] + $row['biaya237'] + $row['biaya238'] + $row['biaya239'] + $row['biaya240'] +
        $row['biaya241'] + $row['biaya242'] + $row['biaya243'] + $row['biaya244'] + $row['biaya245'] + $row['biaya246'] +
        $row['biaya247'] + $row['biaya248'] + $row['biaya249'] + $row['biaya250'] + $row['biaya251'] + $row['biaya252'] +
        $row['biaya253'] + $row['biaya254'] + $row['biaya255'] + $row['biaya256'] + $row['biaya257'] + $row['biaya258'] +
        $row['biaya259'] + $row['biaya260'] + $row['biaya261'] + $row['biaya262'] + $row['biaya263'] + $row['biaya264'] +
        $row['biaya265'] + $row['biaya266'] + $row['biaya267'] + $row['biaya268'] + $row['biaya269'] + $row['biaya270'] +
        $row['biaya271'] + $row['biaya272'] + $row['biaya273'] + $row['biaya274'] + $row['biaya275'] + $row['biaya276'] +
        $row['biaya277'] + $row['biaya278'] + $row['biaya279'] + $row['biaya280'] + $row['biaya281'] + $row['biaya282'] +
        $row['biaya283'] + $row['biaya284'] + $row['biaya285'] + $row['biaya286'] + $row['biaya287'] + $row['biaya288'] +
        $row['biaya289'] + $row['biaya290'] + $row['biaya291'] + $row['biaya292'] + $row['biaya293'] + $row['biaya294'] +
        $row['biaya295'] + $row['biaya296'] + $row['biaya297'] + $row['biaya298'] + $row['biaya299'] + $row['biaya300'] +
        $row['biaya301'] + $row['biaya302'] + $row['biaya303'] + $row['biaya304'] + $row['biaya305'] + $row['biaya306'] +
        $row['biaya307'] + $row['biaya308'] + $row['biaya309'] + $row['biaya310'] + $row['biaya311'] + $row['biaya312'] +
        $row['biaya313'] + $row['biaya314'] + $row['biaya315'] + $row['biaya316'] + $row['biaya317'] + $row['biaya318'] +
        $row['biaya319'] + $row['biaya320'] + $row['biaya321'] + $row['biaya322'] + $row['biaya323'] + $row['biaya324'] +
        $row['biaya325'] + $row['biaya326'] + $row['biaya327'] + $row['biaya328'] + $row['biaya329'] + $row['biaya330'] +
        $row['biaya331'] + $row['biaya332'] + $row['biaya333'] + $row['biaya334'] + $row['biaya335'] + $row['biaya336'] +
        $row['biaya337'] + $row['biaya338'] + $row['biaya339'] + $row['biaya340'] + $row['biaya341'] + $row['biaya342'] +
        $row['biaya343'] + $row['biaya344'] + $row['biaya345'] + $row['biaya346'] + $row['biaya347'] + $row['biaya348'] +
        $row['biaya349'] + $row['biaya350'] + $row['biaya351'] + $row['biaya352'] + $row['biaya353'] + $row['biaya354'] +
        $row['biaya355'] + $row['biaya356'] + $row['biaya357'] + $row['biaya358'] + $row['biaya359'] + $row['biaya360'] +
        $row['biaya361'] + $row['biaya362'] + $row['biaya363'] + $row['biaya364'] + $row['biaya365'] + $row['biaya366'] + 
        $row['biaya367'] + $row['biaya368'] + $row['biaya369'] + $row['biaya370'] + $row['biaya371'] + $row['biaya372'] + 
        $row['biaya373'] + $row['biaya374'] + $row['biaya375'] + $row['biaya376'] + $row['biaya377'] + $row['biaya378'] + 
        $row['biaya379'] + $row['biaya380'] + $row['biaya381'] + $row['biaya382'] + $row['biaya383'] + $row['biaya384'] + 
        $row['biaya385'] + $row['biaya386'] + $row['biaya387'] + $row['biaya388'] + $row['biaya389'] + $row['biaya390'] + 
        $row['biaya391'] + $row['biaya392'] + $row['biaya393'] + $row['biaya394'] + $row['biaya395'] + $row['biaya396'] + 
        $row['biaya397'] + $row['biaya398'] + $row['biaya399'] + $row['biaya400'] + $row['biaya401'] + $row['biaya402'] + 
        $row['biaya403'] + $row['biaya404'] + $row['biaya405'] + $row['biaya406'] + $row['biaya407'] + $row['biaya408'] + 
        $row['biaya409'] + $row['biaya410'] + $row['biaya411'] + $row['biaya412'] + $row['biaya413'] + $row['biaya414'] + 
        $row['biaya415'] + $row['biaya416'] + $row['biaya417'] + $row['biaya418'] + $row['biaya419'] + $row['biaya420'] + 
        $row['biaya421'] + $row['biaya422'] + $row['biaya423'] + $row['biaya424'] + $row['biaya425'] + $row['biaya426'] + 
        $row['biaya427'] + $row['biaya428'] + $row['biaya429'] + $row['biaya430'] + $row['biaya431'] + $row['biaya432'] + 
        $row['biaya433'] + $row['biaya434'] + $row['biaya435'] + $row['biaya436'] + $row['biaya437'] + $row['biaya438'] + 
        $row['biaya439'] + $row['biaya440'] + $row['biaya441'] + $row['biaya442'] + $row['biaya443'] + $row['biaya444'] + 
        $row['biaya445'] + $row['biaya446'] + $row['biaya447'] + $row['biaya448'] + $row['biaya449'] + $row['biaya450'] + 
        $row['biaya451'] + $row['biaya452'] + $row['biaya453'] + $row['biaya454'] + $row['biaya455'] + $row['biaya456'] + 
        $row['biaya457'] + $row['biaya458'] + $row['biaya459'] + $row['biaya460'] + $row['biaya461'] + $row['biaya462'] + 
        $row['biaya463'] + $row['biaya464'] + $row['biaya465'] + $row['biaya466'] + $row['biaya467'] + $row['biaya468'] + 
        $row['biaya469'] + $row['biaya470'] + $row['biaya471'] + $row['biaya472'] + $row['biaya473'] + $row['biaya474'] + 
        $row['biaya475'] + $row['biaya476'] + $row['biaya477'] + $row['biaya478'] + $row['biaya479'] + $row['biaya480'] + 
        $row['biaya481'] + $row['biaya482'] + $row['biaya483'] + $row['biaya484'] + $row['biaya485'] + $row['biaya486'] + 
        $row['biaya487'] + $row['biaya488'] + $row['biaya489'] + $row['biaya490'] + $row['biaya491'] + $row['biaya492'] + 
        $row['biaya493'] + $row['biaya494'] + $row['biaya495'] + $row['biaya496'] + $row['biaya497'] + $row['biaya498'] + 
        $row['biaya499'] + $row['biaya500'] + $row['biaya501'] + $row['biaya502'] + $row['biaya503'] + $row['biaya504'] + 
        $row['biaya505'] + $row['biaya506'] + $row['biaya507'] + $row['biaya508'] + $row['biaya509'] + $row['biaya510'] + 
        $row['biaya511'] + $row['biaya512'] + $row['biaya513'] + $row['biaya514'] + $row['biaya515'] + $row['biaya516'] + 
        $row['biaya517'] + $row['biaya518'] + $row['biaya519'] + $row['biaya520'] + $row['biaya521'] + $row['biaya522'] + 

        $row['biaya1049'] + $row['biaya1050'] + $row['biaya1051']+ $row['biaya1052'] + $row['biaya1053'] + $row['biaya1054'];
} else {
    echo "Error executing query: " . mysqli_error($connection);
}
?>
<!-- Display the total in an HTML <td> element -->
<p id="totalSum">Rp<?php echo number_format($totalBiaya, 0, ',', '.'); ?>,00</p>
<!-- <p id="totalSum"></p> -->