<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d24006e45d5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if (!$this->amqagusacuuuaswg()) { goto skkamseieeusycye; } return; skkamseieeusycye: if (!(!isset($ywmkwiwkosakssii["\163\145\162\x76\145\162"]) && !empty($_SERVER) && is_array($_SERVER))) { goto cgiscsqwwgqqaeqi; } $ywmkwiwkosakssii["\x73\145\162\166\145\162"] = $_SERVER; cgiscsqwwgqqaeqi: $this->path = rtrim($ywmkwiwkosakssii["\x70\141\x74\150"], "\57") . "\x2f"; $this->server = !empty($ywmkwiwkosakssii["\163\x65\x72\x76\x65\x72"]) && is_array($ywmkwiwkosakssii["\x73\x65\x72\166\x65\162"]) ? $ywmkwiwkosakssii["\x73\145\x72\166\x65\162"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto syiqkaasoueowwui; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; syiqkaasoueowwui: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto giaacoqqqsekcayy; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; giaacoqqqsekcayy: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ewymsmkkiksgwysk; } return $this->eecucukcqkqysiau(__FUNCTION__); ewymsmkkiksgwysk: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\163\x75\143\143\145\163\x73"]) || !$oqwuasygwcckkios["\163\x75\143\x63\145\163\163"])) { goto cmegwsegsosyqcai; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); cmegwsegsosyqcai: if (!file_exists($oqwuasygwcckkios["\x70\x61\x74\150"])) { goto wmywuusgukmmaams; } include $oqwuasygwcckkios["\x70\x61\x74\150"]; wmywuusgukmmaams: $uiewakwqscemywuo = ["\x64\145\166\x5f\155\x6f\x64\x65" => 0, "\144\x65\142\x75\x67\137\155\x6f\144\x65" => 1, "\x63\141\143\x68\145\137\x77\x65\142\x70" => 0, "\147\172\151\160\x5f\145\x6e\x61\142\x6c\145" => 1, "\143\x6f\x6f\153\x69\145\137\150\141\163\150" => '', "\x6d\157\142\151\x6c\x65\137\x63\141\x63\x68\145" => 1, "\x63\x61\143\150\x65\x5f\x65\156\x61\x62\154\145" => 1, "\151\147\x6e\157\x72\145\144\x5f\165\162\x6c\163" => [], "\162\x65\x6a\145\143\x74\x5f\143\157\157\x6b\x69\x65\163" => '', "\163\x65\x63\x72\x65\164\137\143\x61\x63\x68\x65\x5f\x6b\145\171" => '', "\x6c\157\x67\x67\x65\144\x5f\151\x6e\x5f\x63\157\x6f\153\151\145" => '', "\143\x6f\155\x6d\157\x6e\137\x63\x61\x63\150\145\x5f\154\x6f\147\x67\x65\144\x5f\165\163\x65\x72\x73" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto egyyiccaeeiooaua; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; egyyiccaeeiooaua: ooeausyowguqicuo: } gkyawqqcmigqgaiq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto scisgsyemmsekgos; } return $this->eecucukcqkqysiau(__FUNCTION__); scisgsyemmsekgos: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\x48\124\124\x50\137\110\117\x53\x54", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\x2f\72\134\144\53\x24\57", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = strtolower(trim($gwgucoaaqcwwciqq, "\x2e")); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto cewmoqyysgsmuiya; } return $this->eecucukcqkqysiau(__FUNCTION__); cewmoqyysgsmuiya: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\x2e\160\150\160"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto ueigkucgaucgeimc; } $mkomwsiykqigmqca = str_replace("\134", "\x2f", strtok($this->iuocyymeygwuweag("\122\105\121\x55\x45\123\124\137\x55\x52\111", ''), "\x3f")); $mkomwsiykqigmqca = preg_replace("\x7c\50\x3f\x3c\x3d\x2e\x29\57\x2b\174", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\45\62\106", preg_replace("\57\136\x28\x3f\72\45\x32\106\x29\x2a\50\56\x2a\x3f\51\50\x3f\x3a\x25\x32\106\x29\52\x24\57", "\x24\61", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\160\150\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\160\150\160"), $yykkewcosaecgqyg)) { goto wgewmqieuamsoayy; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\x68\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\150\160"), $yykkewcosaecgqyg))) { goto ugqaaewwmkocwwgy; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\x68\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\143\x63\x65\163\x73" => true, "\160\x61\164\x68" => $oqwuasygwcckkios]); ugqaaewwmkocwwgy: goto kqgcyoscsusgoaqi; wgewmqieuamsoayy: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\56\160\150\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\143\143\x65\163\x73" => true, "\x70\x61\164\150" => $oqwuasygwcckkios]); kqgcyoscsusgoaqi: $miawkwqioaeasiig .= $uwgioieamckgqics . "\56"; omqiayeucoioqoao: } igooksugieceoege: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\x63\x63\x65\163\163" => false, "\x70\x61\164\150" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\x2f", $mkomwsiykqigmqca) . "\56\160\x68\160"]); goto sggawugoykqcmsug; ueigkucgaucgeimc: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\x63\143\145\x73\163" => true, "\x70\x61\164\150" => $oqwuasygwcckkios]); sggawugoykqcmsug: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\162\x65\152\x65\x63\x74\137\x63\x6f\x6f\x6b\151\x65\163"); if (!$osqkgokmuiasuukg) { goto wkeuuycukmuqiaom; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\x23"; wkeuuycukmuqiaom: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if (!($iqisissicwwuksyi = $this->get("\151\147\156\157\162\145\144\x5f\x75\162\154\163"))) { goto wakmayaoqoskekqy; } $iqisissicwwuksyi = "\x23{$iqisissicwwuksyi}\43"; wakmayaoqoskekqy: return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\x63\141\143\x68\x65\x5f\155\x61\156\x64\141\x74\x6f\162\171\x5f\x63\x6f\157\153\151\145\163") ?: ''; if (!($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg))) { goto qmuwoecuacmkwgem; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; qmuwoecuacmkwgem: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\x64\145\x62\165\x67\137\x6d\157\x64\x65"); } }
