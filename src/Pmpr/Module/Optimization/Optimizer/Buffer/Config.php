<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665af1935df9c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if (!$this->amqagusacuuuaswg()) { goto iqsgossweywksoia; } return; iqsgossweywksoia: if (!(!isset($ywmkwiwkosakssii["\163\x65\162\166\145\x72"]) && !empty($_SERVER) && is_array($_SERVER))) { goto awaqksikyomsuaeo; } $ywmkwiwkosakssii["\x73\145\162\166\x65\162"] = $_SERVER; awaqksikyomsuaeo: $this->path = rtrim($ywmkwiwkosakssii["\x70\x61\164\150"], "\x2f") . "\x2f"; $this->server = !empty($ywmkwiwkosakssii["\163\145\162\166\x65\162"]) && is_array($ywmkwiwkosakssii["\163\x65\162\x76\x65\x72"]) ? $ywmkwiwkosakssii["\163\145\x72\166\145\x72"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto cuommomwmsackoqc; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; cuommomwmsackoqc: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto ggeoqeowscwkeumy; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; ggeoqeowscwkeumy: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qyeswawykmasuqye; } return $this->eecucukcqkqysiau(__FUNCTION__); qyeswawykmasuqye: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\x73\165\x63\x63\x65\x73\x73"]) || !$oqwuasygwcckkios["\163\165\143\x63\x65\x73\163"])) { goto uwaimsisescsgyqk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); uwaimsisescsgyqk: if (!file_exists($oqwuasygwcckkios["\x70\141\164\150"])) { goto uqcsksaywyqeumig; } include $oqwuasygwcckkios["\x70\x61\x74\150"]; uqcsksaywyqeumig: $uiewakwqscemywuo = ["\x64\x65\x62\165\147\x5f\155\x6f\144\x65" => 1, "\x63\141\143\x68\145\137\x77\145\x62\x70" => 0, "\147\172\151\160\137\145\x6e\x61\x62\x6c\145" => 1, "\x63\x6f\x6f\153\x69\x65\137\x68\x61\x73\x68" => '', "\155\157\142\x69\154\145\137\143\141\143\x68\x65" => 1, "\x63\x61\x63\x68\145\x5f\145\156\141\142\154\145" => 1, "\151\147\x6e\x6f\162\x65\144\137\165\x72\x6c\163" => [], "\x72\145\152\x65\143\164\x5f\x63\x6f\x6f\153\151\145\x73" => '', "\x73\x65\x63\162\145\x74\x5f\143\141\143\x68\x65\x5f\153\x65\x79" => '', "\154\x6f\x67\147\145\144\x5f\x69\x6e\x5f\143\x6f\x6f\153\x69\x65" => '', "\x63\x6f\x6d\x6d\157\156\137\x63\x61\x63\150\145\137\x6c\x6f\147\x67\145\144\x5f\165\163\x65\x72\163" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto jsmisuccwyukksgc; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; jsmisuccwyukksgc: ukwoswyyogmsygqg: } yggmaskeguaqkusc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kwmiwaecqcgiaqye; } return $this->eecucukcqkqysiau(__FUNCTION__); kwmiwaecqcgiaqye: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\x48\124\x54\x50\137\110\117\123\x54", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\x2f\72\x5c\144\x2b\x24\57", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = trim(strtolower($gwgucoaaqcwwciqq), "\x2e"); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yqicwmekwuoywyus; } return $this->eecucukcqkqysiau(__FUNCTION__); yqicwmekwuoywyus: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\x2e\x70\x68\160"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto wkiymcoqqiigqaaw; } $mkomwsiykqigmqca = str_replace("\x5c", "\x2f", strtok($this->iuocyymeygwuweag("\x52\x45\x51\x55\x45\123\x54\x5f\125\122\111", ''), "\77")); $mkomwsiykqigmqca = preg_replace("\x7c\x28\x3f\74\75\x2e\x29\57\x2b\x7c", "\57", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\x25\62\x46", preg_replace("\57\x5e\x28\x3f\x3a\x25\62\x46\51\52\x28\x2e\x2a\77\51\x28\77\x3a\45\62\106\x29\52\x24\x2f", "\x24\61", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\x70\150\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\56\x70\150\x70"), $yykkewcosaecgqyg)) { goto uyeyscsaigimsqwq; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\150\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\150\160"), $yykkewcosaecgqyg))) { goto kceuusiekagyeoys; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\150\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\x63\x63\145\163\x73" => true, "\x70\141\164\x68" => $oqwuasygwcckkios]); kceuusiekagyeoys: goto mwieyyqamgwicgco; uyeyscsaigimsqwq: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\56\x70\x68\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\x63\x63\x65\x73\163" => true, "\160\x61\x74\x68" => $oqwuasygwcckkios]); mwieyyqamgwicgco: $miawkwqioaeasiig .= $uwgioieamckgqics . "\56"; eekaiaeqewiqkkgm: } gkoaeuekqockuoiq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\x63\x63\x65\x73\x73" => false, "\x70\141\164\x68" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\x2f", $mkomwsiykqigmqca) . "\x2e\x70\150\x70"]); goto esqwswmoegiqcckg; wkiymcoqqiigqaaw: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\143\x63\x65\x73\x73" => true, "\x70\x61\164\150" => $oqwuasygwcckkios]); esqwswmoegiqcckg: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\x72\x65\x6a\145\143\x74\x5f\x63\157\157\x6b\x69\x65\x73"); if (!$osqkgokmuiasuukg) { goto qmokwkocmcyeyesc; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\x23"; qmokwkocmcyeyesc: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if (!($iqisissicwwuksyi = $this->get("\151\147\x6e\157\x72\145\144\x5f\x75\162\154\x73"))) { goto mosuacsuaasssciu; } $iqisissicwwuksyi = "\x23{$iqisissicwwuksyi}\x23"; mosuacsuaasssciu: return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\x63\x61\143\150\x65\x5f\x6d\141\156\144\x61\164\157\162\x79\x5f\x63\157\157\153\151\145\x73") ?: ''; if (!($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg))) { goto qksckewucmosemuo; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\43"; qksckewucmosemuo: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\x64\145\x62\x75\147\137\x6d\x6f\x64\145"); } }
