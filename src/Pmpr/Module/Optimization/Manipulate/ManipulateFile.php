<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             634ceeff4f14f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Exception; use FilesystemIterator; use Pmpr\Common\Foundation\Decorator\DecoratorFile; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\ManipulateFile as BaseClass; class ManipulateFile extends BaseClass { public static function kmyyisssekummkcg() { $yckucuyiaykemqea = self::cmaecekuqkwmemms("\x4f\x50\124\111\115\x49\132\x41\124\x49\117\x4e\x5f\x43\117\x4e\x46\111\107\137\120\101\124\x48"); $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); if (!($yckucuyiaykemqea && $iiaumsgauuyeqksw->exists($yckucuyiaykemqea))) { goto amoygaweoeymiuiy; } $mcowwqgmkuemoumu = self::kiygcugekegoqauw($yckucuyiaykemqea); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!self::mecmkmogggamegic($igqsaukqcqscimok)) { goto moimkkmkooeiyisc; } $iiaumsgauuyeqksw->remove(self::scikcaaaiwcsqowm($igqsaukqcqscimok)); moimkkmkooeiyisc: caoikoqmyeqsqqqe: } gwayeyymscmgwqkg: amoygaweoeymiuiy: } public static function cqciwowseqkmwcwg(?string $sqeykgyoooqysmca) : int { static $acymccsiqqqsmkyo = []; switch ($sqeykgyoooqysmca) { case "\x64\151\162": case "\x64\151\162\163": case "\146\x6f\x6c\144\145\162": case "\146\157\x6c\x64\145\x72\163": $sqeykgyoooqysmca = "\144\151\x72"; goto kcomueysiyyqagus; case "\x66\151\154\145": case "\x66\151\x6c\145\163": $sqeykgyoooqysmca = "\146\x69\x6c\145"; goto kcomueysiyyqagus; default: return 0755; } ckuagmyqkyoeeaeu: kcomueysiyyqagus: if (!isset($acymccsiqqqsmkyo[$sqeykgyoooqysmca])) { goto cqwgmwqiakmgyuee; } return $acymccsiqqqsmkyo[$sqeykgyoooqysmca]; cqwgmwqiakmgyuee: if ("\x64\x69\162" === $sqeykgyoooqysmca) { goto ksgwgcguemcescqg; } $qecuaowsssqskeqe = (int) self::cmaecekuqkwmemms("\106\123\137\103\x48\115\x4f\x44\x5f\x46\x49\114\105", 0); $acymccsiqqqsmkyo[$sqeykgyoooqysmca] = $qecuaowsssqskeqe > 0 ? $qecuaowsssqskeqe : fileperms(self::cmaecekuqkwmemms("\101\x42\123\120\x41\124\110") . "\x69\156\144\x65\x78\56\x70\150\x70") & 0777 | 0644; goto kiwiesucugwoiuum; ksgwgcguemcescqg: $qkmeeoscasiwuega = (int) self::cmaecekuqkwmemms("\x46\x53\137\103\110\115\x4f\x44\x5f\x44\x49\122", 0); $acymccsiqqqsmkyo[$sqeykgyoooqysmca] = $qkmeeoscasiwuega > 0 ? $qkmeeoscasiwuega : fileperms(self::cmaecekuqkwmemms("\x41\x42\123\x50\x41\x54\x48")) & 0777 | 0755; kiwiesucugwoiuum: return $acymccsiqqqsmkyo[$sqeykgyoooqysmca]; } public static function cgwcgscqeqauaagi($mkomwsiykqigmqca, $sekkmwqwqwcayiwg = false, $cwwowqyuwccuykom = false) : string { if (!self::ikeooymesgsuggoe($mkomwsiykqigmqca)) { goto cmagycousakeeaei; } $mkomwsiykqigmqca = str_replace("\x2f", "\x5c", $mkomwsiykqigmqca); return $sekkmwqwqwcayiwg ? str_replace("\134", "\134\134", $mkomwsiykqigmqca) : $mkomwsiykqigmqca; cmagycousakeeaei: if (!$sekkmwqwqwcayiwg) { goto eekeksysqeuoskoo; } return str_replace("\x2f", "\134\x2f", $mkomwsiykqigmqca); eekeksysqeuoskoo: if ($cwwowqyuwccuykom) { goto okemsmmeceoeaswi; } return $mkomwsiykqigmqca; okemsmmeceoeaswi: return DecoratorFile::cgwcgscqeqauaagi($mkomwsiykqigmqca); } public static function cseoaieqoukqgcay($miawkwqioaeasiig, array $gwyacgiwokuuwouo = [], $iiaumsgauuyeqksw = null) { if ($iiaumsgauuyeqksw) { goto ossyqogewmggmaoc; } $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); ossyqogewmggmaoc: $miawkwqioaeasiig = untrailingslashit($miawkwqioaeasiig); DecoratorHook::cqscqicucmeamkyq(self::usoyisqwsqsegiam("\x6f\x70\x74\137\x62\x65\146\157\x72\x65\x5f\162\x72\155\144\x69\x72"), $miawkwqioaeasiig, $gwyacgiwokuuwouo); $eagqciqqakiuokus = $miawkwqioaeasiig . "\57\x2e\x6d\157\x62\x69\154\145\55\141\x63\164\151\166\145"; if (!($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig) && $iiaumsgauuyeqksw->exists($eagqciqqakiuokus))) { goto ggkoiouwecyiosym; } $iiaumsgauuyeqksw->remove($eagqciqqakiuokus); ggkoiouwecyiosym: $kaggcuumyeuscqui = $miawkwqioaeasiig . "\x2f\x2e\x6e\157\x2d\167\145\x62\x70"; if (!($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig) && $iiaumsgauuyeqksw->exists($kaggcuumyeuscqui))) { goto egosmwkuuikwqeak; } $iiaumsgauuyeqksw->remove($kaggcuumyeuscqui); egosmwkuuikwqeak: if ($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig)) { goto eosmwawqaocwgccq; } $iiaumsgauuyeqksw->remove($miawkwqioaeasiig); return; eosmwawqaocwgccq: $owouacqkcukeeomw = []; try { foreach (new FilesystemIterator($miawkwqioaeasiig) as $uwsgakoiqomwikmy) { $owouacqkcukeeomw[] = $uwsgakoiqomwikmy->scikcaaaiwcsqowm(); keqagmaiqqsgkmso: } eymiqwsygoowowuu: } catch (Exception $iewosgggaueeyymg) { } if (!(!empty($gwyacgiwokuuwouo) && !empty($owouacqkcukeeomw))) { goto usgmimcwygsmcioa; } $yygmoeguaqyumuui = []; foreach ($gwyacgiwokuuwouo as $aqgogemocmauywas) { $meyiiwcswqmuggyg = preg_grep("\43\x5e{$aqgogemocmauywas}\44\43", $owouacqkcukeeomw); $yygmoeguaqyumuui[] = reset($meyiiwcswqmuggyg); uiwswesymogiwsgg: } ekgsawcuswowmosm: if (empty($yygmoeguaqyumuui)) { goto wkcwuemioaiyouek; } $yygmoeguaqyumuui = array_filter($yygmoeguaqyumuui); if (empty($yygmoeguaqyumuui)) { goto euogcyyayioyyiyg; } $owouacqkcukeeomw = array_diff($owouacqkcukeeomw, $yygmoeguaqyumuui); euogcyyayioyyiyg: wkcwuemioaiyouek: usgmimcwygsmcioa: foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { if (!$iiaumsgauuyeqksw->asysewkmisimumay($uwsgakoiqomwikmy)) { goto qosckaqceoumcasm; } self::cseoaieqoukqgcay($uwsgakoiqomwikmy, $gwyacgiwokuuwouo, $iiaumsgauuyeqksw); goto gmcqkoqwkiawaikw; qosckaqceoumcasm: $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); gmcqkoqwkiawaikw: ekgcquiosyesyism: } qggiogeyowcoaiqy: $iiaumsgauuyeqksw->remove($miawkwqioaeasiig); DecoratorHook::cqscqicucmeamkyq(self::usoyisqwsqsegiam("\157\160\164\x5f\x61\x66\164\x65\162\x5f\162\162\x6d\x64\x69\x72"), $miawkwqioaeasiig, $gwyacgiwokuuwouo); } }
