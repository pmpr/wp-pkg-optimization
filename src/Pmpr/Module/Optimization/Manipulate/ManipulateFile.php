<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e6b0646cf09             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Exception; use FilesystemIterator; use Pmpr\Common\Foundation\Decorator\DecoratorFile; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\ManipulateFile as BaseClass; class ManipulateFile extends BaseClass { public static function kmyyisssekummkcg() { $yckucuyiaykemqea = self::cmaecekuqkwmemms("\x4f\120\x54\111\x4d\111\132\x41\124\x49\x4f\116\x5f\x43\x4f\116\106\111\107\x5f\x50\x41\124\x48"); $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); if (!($yckucuyiaykemqea && $iiaumsgauuyeqksw->exists($yckucuyiaykemqea))) { goto acsigwcaesyyoiie; } $mcowwqgmkuemoumu = self::kiygcugekegoqauw($yckucuyiaykemqea); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!self::mecmkmogggamegic($igqsaukqcqscimok)) { goto iyikuwuweqigiuey; } $iiaumsgauuyeqksw->remove(self::scikcaaaiwcsqowm($igqsaukqcqscimok)); iyikuwuweqigiuey: gysmmooawoeggaow: } ceusyscosamyaiws: acsigwcaesyyoiie: } public static function cqciwowseqkmwcwg(?string $sqeykgyoooqysmca) : int { static $acymccsiqqqsmkyo = []; switch ($sqeykgyoooqysmca) { case "\x64\151\x72": case "\144\151\162\163": case "\146\157\x6c\144\145\162": case "\x66\157\x6c\144\x65\x72\x73": $sqeykgyoooqysmca = "\144\x69\x72"; goto aqaaqeucgoegeeuk; case "\x66\x69\154\145": case "\146\151\x6c\x65\163": $sqeykgyoooqysmca = "\x66\x69\x6c\x65"; goto aqaaqeucgoegeeuk; default: return 0755; } wycmcqaauqkgegau: aqaaqeucgoegeeuk: if (!isset($acymccsiqqqsmkyo[$sqeykgyoooqysmca])) { goto qcweoyigoaeacsow; } return $acymccsiqqqsmkyo[$sqeykgyoooqysmca]; qcweoyigoaeacsow: if ("\144\151\x72" === $sqeykgyoooqysmca) { goto iyceygqsmokgmams; } $qecuaowsssqskeqe = (int) self::cmaecekuqkwmemms("\x46\123\x5f\x43\110\115\x4f\104\x5f\x46\x49\x4c\x45", 0); $acymccsiqqqsmkyo[$sqeykgyoooqysmca] = $qecuaowsssqskeqe > 0 ? $qecuaowsssqskeqe : fileperms(self::cmaecekuqkwmemms("\x41\102\123\x50\101\x54\110") . "\151\x6e\144\x65\x78\56\x70\x68\160") & 0777 | 0644; goto wcekgciqeggiiwgk; iyceygqsmokgmams: $qkmeeoscasiwuega = (int) self::cmaecekuqkwmemms("\x46\x53\x5f\103\110\x4d\117\104\x5f\104\111\x52", 0); $acymccsiqqqsmkyo[$sqeykgyoooqysmca] = $qkmeeoscasiwuega > 0 ? $qkmeeoscasiwuega : fileperms(self::cmaecekuqkwmemms("\x41\x42\x53\120\101\124\x48")) & 0777 | 0755; wcekgciqeggiiwgk: return $acymccsiqqqsmkyo[$sqeykgyoooqysmca]; } public static function cgwcgscqeqauaagi($mkomwsiykqigmqca, $sekkmwqwqwcayiwg = false, $cwwowqyuwccuykom = false) : string { if (!self::ikeooymesgsuggoe($mkomwsiykqigmqca)) { goto gkwuewqmqeswqukg; } $mkomwsiykqigmqca = str_replace("\57", "\134", $mkomwsiykqigmqca); return $sekkmwqwqwcayiwg ? str_replace("\x5c", "\134\134", $mkomwsiykqigmqca) : $mkomwsiykqigmqca; gkwuewqmqeswqukg: if (!$sekkmwqwqwcayiwg) { goto sagemooicmgceiug; } return str_replace("\x2f", "\x5c\57", $mkomwsiykqigmqca); sagemooicmgceiug: if ($cwwowqyuwccuykom) { goto uqcwyyiykmwygeau; } return $mkomwsiykqigmqca; uqcwyyiykmwygeau: return DecoratorFile::cgwcgscqeqauaagi($mkomwsiykqigmqca); } public static function cseoaieqoukqgcay($miawkwqioaeasiig, array $gwyacgiwokuuwouo = [], $iiaumsgauuyeqksw = null) { if ($iiaumsgauuyeqksw) { goto yeiokcoikcysyimu; } $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); yeiokcoikcysyimu: $miawkwqioaeasiig = untrailingslashit($miawkwqioaeasiig); DecoratorHook::cqscqicucmeamkyq(self::usoyisqwsqsegiam("\x6f\x70\x74\x5f\x62\145\x66\157\x72\x65\x5f\162\x72\x6d\x64\151\x72"), $miawkwqioaeasiig, $gwyacgiwokuuwouo); $eagqciqqakiuokus = $miawkwqioaeasiig . "\57\x2e\x6d\x6f\x62\151\x6c\145\55\x61\143\x74\x69\166\145"; if (!($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig) && $iiaumsgauuyeqksw->exists($eagqciqqakiuokus))) { goto kkmwwqyesmkescyg; } $iiaumsgauuyeqksw->remove($eagqciqqakiuokus); kkmwwqyesmkescyg: $kaggcuumyeuscqui = $miawkwqioaeasiig . "\57\x2e\x6e\x6f\55\167\145\142\x70"; if (!($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig) && $iiaumsgauuyeqksw->exists($kaggcuumyeuscqui))) { goto uamuuwkyuqomqyuy; } $iiaumsgauuyeqksw->remove($kaggcuumyeuscqui); uamuuwkyuqomqyuy: if ($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig)) { goto ekwuycsiuqwycqea; } $iiaumsgauuyeqksw->remove($miawkwqioaeasiig); return; ekwuycsiuqwycqea: $owouacqkcukeeomw = []; try { foreach (new FilesystemIterator($miawkwqioaeasiig) as $uwsgakoiqomwikmy) { $owouacqkcukeeomw[] = $uwsgakoiqomwikmy->scikcaaaiwcsqowm(); cieumoqayigkoocy: } iyaugygcsmqqqkmo: } catch (Exception $iewosgggaueeyymg) { } if (!(!empty($gwyacgiwokuuwouo) && !empty($owouacqkcukeeomw))) { goto usmuqsuwuueogimc; } $yygmoeguaqyumuui = []; foreach ($gwyacgiwokuuwouo as $aqgogemocmauywas) { $meyiiwcswqmuggyg = preg_grep("\x23\136{$aqgogemocmauywas}\x24\43", $owouacqkcukeeomw); $yygmoeguaqyumuui[] = reset($meyiiwcswqmuggyg); eoeiaccouaymakgm: } yggciikgkomgeqsc: if (empty($yygmoeguaqyumuui)) { goto ysoqeuugiuswykyu; } $yygmoeguaqyumuui = array_filter($yygmoeguaqyumuui); if (empty($yygmoeguaqyumuui)) { goto owaimkmgemoqewmm; } $owouacqkcukeeomw = array_diff($owouacqkcukeeomw, $yygmoeguaqyumuui); owaimkmgemoqewmm: ysoqeuugiuswykyu: usmuqsuwuueogimc: foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { if (!$iiaumsgauuyeqksw->asysewkmisimumay($uwsgakoiqomwikmy)) { goto ksawwekgswywwuwm; } self::cseoaieqoukqgcay($uwsgakoiqomwikmy, $gwyacgiwokuuwouo, $iiaumsgauuyeqksw); goto yuqisiwgqacgmsym; ksawwekgswywwuwm: $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); yuqisiwgqacgmsym: umcyeiusoakewyaa: } koiiaewwicsckseu: $iiaumsgauuyeqksw->remove($miawkwqioaeasiig); DecoratorHook::cqscqicucmeamkyq(self::usoyisqwsqsegiam("\x6f\160\x74\x5f\x61\146\x74\x65\162\x5f\162\x72\x6d\x64\151\162"), $miawkwqioaeasiig, $gwyacgiwokuuwouo); } }
