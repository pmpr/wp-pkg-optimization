<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d2393d5ec4b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if (!$this->amqagusacuuuaswg()) { goto skkamseieeusycye; } return; skkamseieeusycye: if (!(!isset($ywmkwiwkosakssii["\x73\145\x72\x76\x65\x72"]) && !empty($_SERVER) && is_array($_SERVER))) { goto cgiscsqwwgqqaeqi; } $ywmkwiwkosakssii["\163\145\162\166\145\x72"] = $_SERVER; cgiscsqwwgqqaeqi: $this->path = rtrim($ywmkwiwkosakssii["\x70\x61\x74\x68"], "\x2f") . "\x2f"; $this->server = !empty($ywmkwiwkosakssii["\x73\x65\162\166\145\x72"]) && is_array($ywmkwiwkosakssii["\x73\x65\162\x76\x65\162"]) ? $ywmkwiwkosakssii["\163\x65\162\x76\145\162"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto syiqkaasoueowwui; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; syiqkaasoueowwui: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto giaacoqqqsekcayy; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; giaacoqqqsekcayy: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ewymsmkkiksgwysk; } return $this->eecucukcqkqysiau(__FUNCTION__); ewymsmkkiksgwysk: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\x73\x75\143\143\145\163\x73"]) || !$oqwuasygwcckkios["\x73\165\x63\143\145\163\163"])) { goto cmegwsegsosyqcai; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); cmegwsegsosyqcai: if (!file_exists($oqwuasygwcckkios["\160\141\x74\x68"])) { goto wmywuusgukmmaams; } include $oqwuasygwcckkios["\160\x61\x74\150"]; wmywuusgukmmaams: $uiewakwqscemywuo = ["\x64\x65\x76\137\155\157\144\x65" => 0, "\x64\x65\x62\165\147\x5f\x6d\157\x64\x65" => 1, "\x63\141\x63\x68\145\x5f\x77\x65\x62\x70" => 0, "\x67\172\151\x70\x5f\x65\156\x61\142\x6c\145" => 1, "\x63\x6f\x6f\x6b\151\x65\x5f\x68\x61\x73\150" => '', "\x6d\x6f\x62\x69\x6c\x65\x5f\143\x61\x63\x68\x65" => 1, "\143\x61\x63\150\x65\x5f\145\x6e\x61\x62\x6c\x65" => 1, "\151\147\x6e\157\162\x65\144\x5f\x75\x72\x6c\x73" => [], "\x72\145\152\x65\143\164\x5f\143\157\x6f\x6b\x69\145\x73" => '', "\x73\x65\143\162\145\x74\137\143\x61\143\150\145\137\153\x65\171" => '', "\x6c\x6f\x67\147\145\144\137\151\156\x5f\143\157\x6f\153\x69\145" => '', "\x63\157\x6d\x6d\157\x6e\x5f\x63\141\143\150\x65\x5f\x6c\157\x67\147\145\x64\x5f\165\163\145\x72\x73" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto egyyiccaeeiooaua; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; egyyiccaeeiooaua: ooeausyowguqicuo: } gkyawqqcmigqgaiq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto scisgsyemmsekgos; } return $this->eecucukcqkqysiau(__FUNCTION__); scisgsyemmsekgos: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\x48\x54\124\120\137\x48\117\x53\124", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\x2f\x3a\134\x64\53\44\x2f", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = strtolower(trim($gwgucoaaqcwwciqq, "\56")); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto cewmoqyysgsmuiya; } return $this->eecucukcqkqysiau(__FUNCTION__); cewmoqyysgsmuiya: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\56\x70\150\x70"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto ueigkucgaucgeimc; } $mkomwsiykqigmqca = str_replace("\x5c", "\57", strtok($this->iuocyymeygwuweag("\x52\x45\x51\125\105\123\124\137\x55\122\x49", ''), "\x3f")); $mkomwsiykqigmqca = preg_replace("\x7c\x28\77\74\x3d\x2e\51\57\x2b\x7c", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\45\62\106", preg_replace("\x2f\136\x28\x3f\x3a\45\x32\x46\51\x2a\50\x2e\52\77\x29\50\x3f\x3a\45\x32\x46\x29\x2a\44\x2f", "\44\x31", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\x70\150\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\160\x68\x70"), $yykkewcosaecgqyg)) { goto wgewmqieuamsoayy; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\x70\x68\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\x68\x70"), $yykkewcosaecgqyg))) { goto ugqaaewwmkocwwgy; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\x70\150\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\x63\143\x65\x73\163" => true, "\x70\x61\x74\150" => $oqwuasygwcckkios]); ugqaaewwmkocwwgy: goto kqgcyoscsusgoaqi; wgewmqieuamsoayy: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\x70\x68\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\143\143\145\x73\163" => true, "\160\x61\x74\x68" => $oqwuasygwcckkios]); kqgcyoscsusgoaqi: $miawkwqioaeasiig .= $uwgioieamckgqics . "\56"; omqiayeucoioqoao: } igooksugieceoege: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\x63\x63\x65\163\x73" => false, "\160\141\x74\x68" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\x2f", $mkomwsiykqigmqca) . "\x2e\x70\150\160"]); goto sggawugoykqcmsug; ueigkucgaucgeimc: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\x63\x63\x65\163\163" => true, "\160\141\164\150" => $oqwuasygwcckkios]); sggawugoykqcmsug: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\x72\145\152\145\x63\164\x5f\143\157\x6f\153\151\145\x73"); if (!$osqkgokmuiasuukg) { goto wkeuuycukmuqiaom; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\x23"; wkeuuycukmuqiaom: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if (!($iqisissicwwuksyi = $this->get("\151\147\156\x6f\162\x65\x64\x5f\165\x72\154\x73"))) { goto wakmayaoqoskekqy; } $iqisissicwwuksyi = "\x23{$iqisissicwwuksyi}\43"; wakmayaoqoskekqy: return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\x63\141\x63\150\x65\137\155\x61\156\x64\141\164\157\162\171\x5f\143\157\x6f\153\151\x65\x73") ?: ''; if (!($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg))) { goto qmuwoecuacmkwgem; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\x23"; qmuwoecuacmkwgem: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\x64\x65\x62\x75\147\x5f\155\157\144\x65"); } }
