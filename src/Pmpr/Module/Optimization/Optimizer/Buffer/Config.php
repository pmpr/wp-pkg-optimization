<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6668aef2e0bbf             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if (!$this->amqagusacuuuaswg()) { goto ggeoqeowscwkeumy; } return; ggeoqeowscwkeumy: if (!(!isset($ywmkwiwkosakssii["\163\x65\x72\166\x65\x72"]) && !empty($_SERVER) && is_array($_SERVER))) { goto qyeswawykmasuqye; } $ywmkwiwkosakssii["\x73\x65\x72\166\145\162"] = $_SERVER; qyeswawykmasuqye: $this->path = rtrim($ywmkwiwkosakssii["\x70\141\x74\x68"], "\x2f") . "\x2f"; $this->server = !empty($ywmkwiwkosakssii["\x73\145\x72\x76\145\x72"]) && is_array($ywmkwiwkosakssii["\163\145\x72\166\145\x72"]) ? $ywmkwiwkosakssii["\x73\145\162\x76\145\x72"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto uwaimsisescsgyqk; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; uwaimsisescsgyqk: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto uqcsksaywyqeumig; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; uqcsksaywyqeumig: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yggmaskeguaqkusc; } return $this->eecucukcqkqysiau(__FUNCTION__); yggmaskeguaqkusc: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\163\165\143\x63\x65\x73\163"]) || !$oqwuasygwcckkios["\x73\x75\143\143\x65\163\163"])) { goto ukwoswyyogmsygqg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ukwoswyyogmsygqg: if (!file_exists($oqwuasygwcckkios["\160\x61\164\x68"])) { goto jsmisuccwyukksgc; } include $oqwuasygwcckkios["\x70\x61\x74\150"]; jsmisuccwyukksgc: $uiewakwqscemywuo = ["\x64\145\166\137\x6d\157\x64\145" => 0, "\x64\x65\142\165\x67\x5f\x6d\157\144\x65" => 1, "\x63\x61\x63\x68\x65\137\x77\145\142\x70" => 0, "\x67\x7a\x69\x70\137\145\x6e\x61\142\x6c\x65" => 1, "\x63\157\157\153\151\x65\137\x68\x61\x73\150" => '', "\x6d\157\x62\151\x6c\145\x5f\143\141\143\150\x65" => 1, "\x63\141\x63\x68\145\137\145\x6e\x61\142\x6c\x65" => 1, "\151\x67\x6e\157\x72\145\x64\x5f\x75\x72\154\x73" => [], "\162\145\x6a\145\x63\164\137\x63\157\157\x6b\151\x65\163" => '', "\163\145\143\162\x65\x74\137\x63\141\x63\x68\x65\x5f\x6b\145\x79" => '', "\154\157\147\x67\145\144\137\x69\156\137\143\x6f\157\153\151\x65" => '', "\x63\157\155\x6d\157\156\137\143\141\143\x68\x65\x5f\154\x6f\x67\x67\145\144\x5f\x75\163\x65\162\163" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto gkoaeuekqockuoiq; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; gkoaeuekqockuoiq: yqicwmekwuoywyus: } kwmiwaecqcgiaqye: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto eekaiaeqewiqkkgm; } return $this->eecucukcqkqysiau(__FUNCTION__); eekaiaeqewiqkkgm: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\x48\124\124\120\x5f\x48\117\x53\x54", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\57\72\x5c\x64\53\44\57", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = strtolower(trim($gwgucoaaqcwwciqq, "\56")); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kceuusiekagyeoys; } return $this->eecucukcqkqysiau(__FUNCTION__); kceuusiekagyeoys: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\x2e\x70\x68\x70"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto mosuacsuaasssciu; } $mkomwsiykqigmqca = str_replace("\x5c", "\57", strtok($this->iuocyymeygwuweag("\122\105\121\125\x45\x53\124\x5f\125\122\x49", ''), "\x3f")); $mkomwsiykqigmqca = preg_replace("\174\50\77\74\75\x2e\x29\57\x2b\174", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\45\x32\106", preg_replace("\57\x5e\x28\77\72\x25\x32\x46\51\x2a\x28\56\x2a\77\x29\50\x3f\x3a\45\62\x46\x29\52\x24\x2f", "\44\61", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\56\x70\150\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\56\160\150\160"), $yykkewcosaecgqyg)) { goto esqwswmoegiqcckg; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\x68\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\x70\x68\160"), $yykkewcosaecgqyg))) { goto wkiymcoqqiigqaaw; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\x68\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\143\143\x65\163\163" => true, "\160\x61\164\x68" => $oqwuasygwcckkios]); wkiymcoqqiigqaaw: goto qmokwkocmcyeyesc; esqwswmoegiqcckg: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\x70\150\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\143\143\145\x73\163" => true, "\x70\x61\164\150" => $oqwuasygwcckkios]); qmokwkocmcyeyesc: $miawkwqioaeasiig .= $uwgioieamckgqics . "\x2e"; mwieyyqamgwicgco: } uyeyscsaigimsqwq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\x63\x63\x65\x73\x73" => false, "\x70\141\x74\x68" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\x2f", $mkomwsiykqigmqca) . "\x2e\160\150\x70"]); goto qksckewucmosemuo; mosuacsuaasssciu: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\143\x63\145\x73\x73" => true, "\160\x61\x74\150" => $oqwuasygwcckkios]); qksckewucmosemuo: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\x72\x65\152\x65\143\164\137\x63\157\157\x6b\x69\x65\x73"); if (!$osqkgokmuiasuukg) { goto kmooekeyemqgucci; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\x23"; kmooekeyemqgucci: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if (!($iqisissicwwuksyi = $this->get("\151\x67\156\x6f\x72\145\x64\x5f\165\x72\x6c\x73"))) { goto skuuyysooocugyww; } $iqisissicwwuksyi = "\x23{$iqisissicwwuksyi}\x23"; skuuyysooocugyww: return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\143\x61\x63\x68\x65\137\155\141\x6e\x64\x61\x74\x6f\x72\x79\x5f\143\157\157\153\x69\145\163") ?: ''; if (!($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg))) { goto cmmusgkieoqyymgs; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; cmmusgkieoqyymgs: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\x64\145\142\165\147\137\155\x6f\144\145"); } }
