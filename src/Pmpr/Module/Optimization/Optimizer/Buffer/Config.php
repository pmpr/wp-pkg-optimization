<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d1e5357c62d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if (!$this->amqagusacuuuaswg()) { goto skkamseieeusycye; } return; skkamseieeusycye: if (!(!isset($ywmkwiwkosakssii["\163\145\162\166\145\162"]) && !empty($_SERVER) && is_array($_SERVER))) { goto cgiscsqwwgqqaeqi; } $ywmkwiwkosakssii["\163\x65\162\x76\145\x72"] = $_SERVER; cgiscsqwwgqqaeqi: $this->path = rtrim($ywmkwiwkosakssii["\160\x61\x74\150"], "\57") . "\57"; $this->server = !empty($ywmkwiwkosakssii["\x73\145\162\x76\145\162"]) && is_array($ywmkwiwkosakssii["\x73\145\162\x76\x65\162"]) ? $ywmkwiwkosakssii["\x73\145\162\166\145\x72"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto syiqkaasoueowwui; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; syiqkaasoueowwui: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto giaacoqqqsekcayy; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; giaacoqqqsekcayy: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ewymsmkkiksgwysk; } return $this->eecucukcqkqysiau(__FUNCTION__); ewymsmkkiksgwysk: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\163\x75\143\x63\145\163\x73"]) || !$oqwuasygwcckkios["\163\165\143\143\x65\163\163"])) { goto cmegwsegsosyqcai; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); cmegwsegsosyqcai: if (!file_exists($oqwuasygwcckkios["\x70\141\164\x68"])) { goto wmywuusgukmmaams; } include $oqwuasygwcckkios["\160\141\164\x68"]; wmywuusgukmmaams: $uiewakwqscemywuo = ["\144\145\166\x5f\155\157\144\145" => 0, "\144\145\142\165\147\137\x6d\x6f\144\x65" => 1, "\143\x61\x63\x68\145\x5f\167\x65\x62\x70" => 0, "\147\x7a\x69\160\x5f\145\x6e\141\x62\x6c\145" => 1, "\x63\x6f\157\153\151\x65\137\x68\141\163\x68" => '', "\x6d\x6f\142\151\x6c\x65\x5f\x63\141\x63\150\145" => 1, "\x63\141\143\x68\x65\x5f\x65\x6e\141\142\x6c\x65" => 1, "\151\147\156\157\x72\x65\144\137\x75\x72\154\163" => [], "\x72\x65\x6a\145\143\164\x5f\143\x6f\x6f\153\x69\145\x73" => '', "\163\x65\x63\162\145\x74\137\x63\x61\143\x68\x65\137\153\x65\171" => '', "\x6c\157\147\147\x65\x64\x5f\x69\156\x5f\143\157\157\x6b\151\x65" => '', "\143\x6f\x6d\x6d\157\156\137\143\141\143\150\145\x5f\154\157\147\x67\145\x64\x5f\x75\x73\x65\x72\x73" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto egyyiccaeeiooaua; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; egyyiccaeeiooaua: ooeausyowguqicuo: } gkyawqqcmigqgaiq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto scisgsyemmsekgos; } return $this->eecucukcqkqysiau(__FUNCTION__); scisgsyemmsekgos: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\x48\124\124\120\137\110\x4f\123\x54", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\57\x3a\134\144\x2b\44\x2f", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = strtolower(trim($gwgucoaaqcwwciqq, "\x2e")); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto cewmoqyysgsmuiya; } return $this->eecucukcqkqysiau(__FUNCTION__); cewmoqyysgsmuiya: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\x2e\x70\150\160"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto ueigkucgaucgeimc; } $mkomwsiykqigmqca = str_replace("\x5c", "\x2f", strtok($this->iuocyymeygwuweag("\122\105\x51\125\105\123\124\x5f\x55\x52\111", ''), "\77")); $mkomwsiykqigmqca = preg_replace("\x7c\x28\x3f\74\x3d\x2e\x29\x2f\53\174", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\45\62\x46", preg_replace("\x2f\x5e\50\77\x3a\45\x32\106\x29\x2a\50\56\x2a\x3f\x29\x28\x3f\x3a\45\x32\106\51\x2a\x24\57", "\44\x31", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\160\x68\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\56\160\150\160"), $yykkewcosaecgqyg)) { goto wgewmqieuamsoayy; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\150\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\x68\160"), $yykkewcosaecgqyg))) { goto ugqaaewwmkocwwgy; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\x68\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\143\143\145\163\163" => true, "\x70\x61\x74\150" => $oqwuasygwcckkios]); ugqaaewwmkocwwgy: goto kqgcyoscsusgoaqi; wgewmqieuamsoayy: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\x70\150\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\x63\x63\x65\163\x73" => true, "\160\x61\x74\150" => $oqwuasygwcckkios]); kqgcyoscsusgoaqi: $miawkwqioaeasiig .= $uwgioieamckgqics . "\x2e"; omqiayeucoioqoao: } igooksugieceoege: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\x63\x63\145\x73\x73" => false, "\160\x61\x74\150" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\x2f", $mkomwsiykqigmqca) . "\x2e\x70\150\160"]); goto sggawugoykqcmsug; ueigkucgaucgeimc: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\x63\143\x65\163\x73" => true, "\160\141\164\150" => $oqwuasygwcckkios]); sggawugoykqcmsug: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\x72\x65\152\145\x63\164\x5f\x63\157\157\153\x69\145\x73"); if (!$osqkgokmuiasuukg) { goto wkeuuycukmuqiaom; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\x23"; wkeuuycukmuqiaom: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if (!($iqisissicwwuksyi = $this->get("\151\147\x6e\157\162\x65\144\x5f\x75\162\x6c\x73"))) { goto wakmayaoqoskekqy; } $iqisissicwwuksyi = "\x23{$iqisissicwwuksyi}\43"; wakmayaoqoskekqy: return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\143\x61\143\150\x65\137\155\141\156\144\x61\x74\x6f\162\171\x5f\x63\157\x6f\x6b\x69\145\x73") ?: ''; if (!($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg))) { goto qmuwoecuacmkwgem; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\x23"; qmuwoecuacmkwgem: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\144\145\142\x75\x67\x5f\155\157\x64\145"); } }
