<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6668a93c5745b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if (!$this->amqagusacuuuaswg()) { goto ggeoqeowscwkeumy; } return; ggeoqeowscwkeumy: if (!(!isset($ywmkwiwkosakssii["\x73\145\162\166\145\x72"]) && !empty($_SERVER) && is_array($_SERVER))) { goto qyeswawykmasuqye; } $ywmkwiwkosakssii["\163\145\162\166\145\x72"] = $_SERVER; qyeswawykmasuqye: $this->path = rtrim($ywmkwiwkosakssii["\x70\141\x74\x68"], "\x2f") . "\x2f"; $this->server = !empty($ywmkwiwkosakssii["\163\x65\162\166\145\x72"]) && is_array($ywmkwiwkosakssii["\x73\x65\x72\166\x65\162"]) ? $ywmkwiwkosakssii["\163\x65\x72\x76\x65\162"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto uwaimsisescsgyqk; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; uwaimsisescsgyqk: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto uqcsksaywyqeumig; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; uqcsksaywyqeumig: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yggmaskeguaqkusc; } return $this->eecucukcqkqysiau(__FUNCTION__); yggmaskeguaqkusc: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\163\x75\x63\143\x65\x73\163"]) || !$oqwuasygwcckkios["\163\x75\x63\143\145\163\163"])) { goto ukwoswyyogmsygqg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ukwoswyyogmsygqg: if (!file_exists($oqwuasygwcckkios["\x70\141\164\150"])) { goto jsmisuccwyukksgc; } include $oqwuasygwcckkios["\160\x61\164\150"]; jsmisuccwyukksgc: $uiewakwqscemywuo = ["\144\x65\166\137\155\x6f\144\x65" => 0, "\x64\145\142\165\x67\x5f\155\157\144\145" => 1, "\x63\141\143\x68\145\x5f\167\x65\x62\x70" => 0, "\x67\172\x69\x70\137\x65\x6e\x61\142\154\145" => 1, "\143\x6f\157\153\151\145\x5f\150\x61\x73\150" => '', "\155\157\142\x69\x6c\145\x5f\x63\141\x63\x68\145" => 1, "\143\x61\143\150\x65\137\x65\x6e\x61\x62\x6c\x65" => 1, "\x69\147\156\157\162\x65\144\137\165\162\x6c\163" => [], "\x72\x65\152\x65\143\x74\137\x63\x6f\x6f\x6b\x69\145\163" => '', "\163\145\143\162\x65\164\x5f\x63\x61\143\150\x65\x5f\153\145\x79" => '', "\154\x6f\147\147\145\144\137\151\x6e\137\x63\x6f\x6f\x6b\x69\x65" => '', "\143\x6f\155\x6d\157\x6e\x5f\x63\x61\143\x68\x65\137\154\157\147\147\145\144\x5f\165\x73\x65\162\x73" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto gkoaeuekqockuoiq; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; gkoaeuekqockuoiq: yqicwmekwuoywyus: } kwmiwaecqcgiaqye: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto eekaiaeqewiqkkgm; } return $this->eecucukcqkqysiau(__FUNCTION__); eekaiaeqewiqkkgm: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\x48\x54\x54\120\x5f\x48\117\x53\x54", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\x2f\x3a\134\x64\x2b\44\57", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = strtolower(trim($gwgucoaaqcwwciqq, "\x2e")); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kceuusiekagyeoys; } return $this->eecucukcqkqysiau(__FUNCTION__); kceuusiekagyeoys: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\x2e\160\x68\160"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto mosuacsuaasssciu; } $mkomwsiykqigmqca = str_replace("\134", "\x2f", strtok($this->iuocyymeygwuweag("\x52\105\121\x55\x45\123\x54\x5f\125\122\111", ''), "\77")); $mkomwsiykqigmqca = preg_replace("\174\50\77\74\75\x2e\x29\57\53\x7c", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\x25\62\x46", preg_replace("\x2f\136\x28\x3f\x3a\45\62\106\51\52\50\x2e\52\77\x29\x28\77\x3a\x25\x32\106\51\x2a\44\x2f", "\44\61", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\x70\150\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\x70\150\x70"), $yykkewcosaecgqyg)) { goto esqwswmoegiqcckg; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\150\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\x68\160"), $yykkewcosaecgqyg))) { goto wkiymcoqqiigqaaw; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\x70\150\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\x63\143\145\x73\163" => true, "\x70\x61\164\x68" => $oqwuasygwcckkios]); wkiymcoqqiigqaaw: goto qmokwkocmcyeyesc; esqwswmoegiqcckg: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\160\150\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\143\143\145\x73\x73" => true, "\160\x61\x74\150" => $oqwuasygwcckkios]); qmokwkocmcyeyesc: $miawkwqioaeasiig .= $uwgioieamckgqics . "\56"; mwieyyqamgwicgco: } uyeyscsaigimsqwq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\143\143\145\163\163" => false, "\x70\x61\164\150" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\57", $mkomwsiykqigmqca) . "\56\160\x68\160"]); goto qksckewucmosemuo; mosuacsuaasssciu: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\143\x63\x65\x73\x73" => true, "\160\141\x74\150" => $oqwuasygwcckkios]); qksckewucmosemuo: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\x72\145\x6a\x65\143\x74\x5f\x63\x6f\157\x6b\x69\145\163"); if (!$osqkgokmuiasuukg) { goto kmooekeyemqgucci; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\x23"; kmooekeyemqgucci: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if (!($iqisissicwwuksyi = $this->get("\x69\x67\156\x6f\x72\x65\144\137\165\162\154\163"))) { goto skuuyysooocugyww; } $iqisissicwwuksyi = "\43{$iqisissicwwuksyi}\43"; skuuyysooocugyww: return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\x63\x61\x63\x68\x65\137\155\141\156\144\x61\164\157\x72\x79\x5f\x63\157\157\x6b\x69\145\x73") ?: ''; if (!($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg))) { goto cmmusgkieoqyymgs; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\x23"; cmmusgkieoqyymgs: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\x64\x65\142\x75\x67\137\155\157\x64\x65"); } }
