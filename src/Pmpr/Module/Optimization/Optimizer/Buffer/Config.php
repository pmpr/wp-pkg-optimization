<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66c508f721bbb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if (!$this->amqagusacuuuaswg()) { goto ousiuuwgwkiyikyq; } return; ousiuuwgwkiyikyq: if (!(!isset($ywmkwiwkosakssii["\163\145\x72\x76\x65\162"]) && !empty($_SERVER) && is_array($_SERVER))) { goto ogsaaqsaogcqiouy; } $ywmkwiwkosakssii["\163\145\162\166\145\x72"] = $_SERVER; ogsaaqsaogcqiouy: $this->path = rtrim($ywmkwiwkosakssii["\160\x61\x74\x68"], "\57") . "\57"; $this->server = !empty($ywmkwiwkosakssii["\163\x65\162\x76\x65\x72"]) && is_array($ywmkwiwkosakssii["\x73\x65\162\x76\x65\x72"]) ? $ywmkwiwkosakssii["\x73\145\x72\x76\x65\x72"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto iwekmyyccgiyuecc; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; iwekmyyccgiyuecc: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto ikqqskkqqwmwssoo; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; ikqqskkqqwmwssoo: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto aomysykcgikegiau; } return $this->eecucukcqkqysiau(__FUNCTION__); aomysykcgikegiau: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\x73\x75\143\143\145\x73\x73"]) || !$oqwuasygwcckkios["\163\x75\x63\143\145\x73\163"])) { goto cwwmimggaaecmucw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); cwwmimggaaecmucw: if (!file_exists($oqwuasygwcckkios["\160\141\164\x68"])) { goto awoaooyoeoyeeqee; } include $oqwuasygwcckkios["\160\x61\x74\x68"]; awoaooyoeoyeeqee: $uiewakwqscemywuo = ["\x64\x65\x76\137\x6d\x6f\x64\x65" => 0, "\144\145\x62\x75\147\x5f\155\157\x64\x65" => 1, "\143\x61\x63\x68\x65\137\167\145\x62\x70" => 0, "\147\172\151\x70\x5f\x65\x6e\141\x62\154\x65" => 1, "\143\x6f\x6f\x6b\x69\x65\137\x68\x61\163\150" => '', "\155\x6f\x62\151\x6c\x65\x5f\143\141\x63\x68\145" => 1, "\x63\x61\x63\x68\x65\x5f\x65\156\141\x62\154\x65" => 1, "\151\147\156\157\x72\x65\144\137\165\x72\154\x73" => [], "\x72\x65\x6a\x65\143\x74\x5f\x63\x6f\x6f\x6b\x69\145\163" => '', "\163\x65\143\162\145\164\137\143\x61\143\150\145\137\153\x65\171" => '', "\154\157\147\147\x65\144\x5f\x69\156\137\x63\x6f\157\x6b\151\x65" => '', "\x63\157\x6d\x6d\157\x6e\137\143\141\143\x68\x65\x5f\x6c\157\147\147\x65\144\x5f\165\163\x65\x72\163" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto mqkmcysgoiaouiwm; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; mqkmcysgoiaouiwm: ykomgumacooyomsk: } ogqmesokykywseys: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kosaqwikueyksqmw; } return $this->eecucukcqkqysiau(__FUNCTION__); kosaqwikueyksqmw: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\110\124\x54\120\x5f\x48\x4f\123\x54", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\57\72\x5c\x64\x2b\x24\x2f", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = strtolower(trim($gwgucoaaqcwwciqq, "\x2e")); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto gicyayswqyuoekcq; } return $this->eecucukcqkqysiau(__FUNCTION__); gicyayswqyuoekcq: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\56\x70\150\160"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto csammceowmqwaamq; } $mkomwsiykqigmqca = str_replace("\134", "\x2f", strtok($this->iuocyymeygwuweag("\x52\x45\x51\x55\105\x53\124\137\125\x52\111", ''), "\x3f")); $mkomwsiykqigmqca = preg_replace("\x7c\x28\77\74\75\x2e\51\57\x2b\174", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\45\x32\x46", preg_replace("\x2f\136\x28\77\x3a\x25\62\x46\51\52\x28\x2e\52\77\51\x28\x3f\72\45\62\106\x29\x2a\44\x2f", "\x24\x31", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\x70\150\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\x70\x68\x70"), $yykkewcosaecgqyg)) { goto gcckqucukawcasgk; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\150\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\150\x70"), $yykkewcosaecgqyg))) { goto cuumeogeomowqisc; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\x68\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\143\x63\x65\x73\x73" => true, "\x70\x61\x74\150" => $oqwuasygwcckkios]); cuumeogeomowqisc: goto qmkaeeomgkwggoyo; gcckqucukawcasgk: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\160\x68\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\143\x63\145\163\x73" => true, "\x70\141\x74\150" => $oqwuasygwcckkios]); qmkaeeomgkwggoyo: $miawkwqioaeasiig .= $uwgioieamckgqics . "\x2e"; uiosisocuwokwkie: } iikiiioqiyegyaak: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\143\x63\x65\163\163" => false, "\160\x61\164\150" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\x2f", $mkomwsiykqigmqca) . "\56\x70\x68\160"]); goto ocaguquugeamqckq; csammceowmqwaamq: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\143\143\x65\163\x73" => true, "\x70\141\164\x68" => $oqwuasygwcckkios]); ocaguquugeamqckq: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\162\145\x6a\x65\x63\164\x5f\143\x6f\157\153\x69\x65\163"); if (!$osqkgokmuiasuukg) { goto eekcoeikaeaaeyii; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; eekcoeikaeaaeyii: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if (!($iqisissicwwuksyi = $this->get("\x69\x67\156\x6f\x72\x65\x64\137\165\162\x6c\163"))) { goto cogywoqcqummsyus; } $iqisissicwwuksyi = "\43{$iqisissicwwuksyi}\43"; cogywoqcqummsyus: return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\143\x61\143\150\145\137\155\x61\156\x64\141\x74\x6f\162\x79\137\143\157\157\153\x69\x65\163") ?: ''; if (!($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg))) { goto gmwykkouysyaqwqm; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\x23"; gmwykkouysyaqwqm: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\144\x65\142\165\147\137\155\157\x64\x65"); } }
