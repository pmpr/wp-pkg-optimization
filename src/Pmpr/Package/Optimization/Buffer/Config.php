<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61eec5407a60a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Buffer; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Package\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct($ywmkwiwkosakssii = []) { if ($this->amqagusacuuuaswg()) { goto uaicwcqwauosmsqm; } $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\x61\164\150" => '', "\x73\145\162\x76\x65\162" => $_SERVER]); $this->path = trailingslashit($ywmkwiwkosakssii["\160\x61\164\150"]); if (!(is_array($ywmkwiwkosakssii["\x73\145\162\166\x65\x72"]) && $ywmkwiwkosakssii["\163\x65\162\166\x65\162"])) { goto cumeycwmuuqawwyu; } $this->server = $ywmkwiwkosakssii["\163\x65\x72\x76\x65\162"]; cumeycwmuuqawwyu: uaicwcqwauosmsqm: } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto gsqcoqqsioiyoykq; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; gsqcoqqsioiyoykq: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto goaowamiyyamueiw; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; goaowamiyyamueiw: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iaomqomgiwiegoca; } return $this->eecucukcqkqysiau(__FUNCTION__); iaomqomgiwiegoca: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\x73\165\143\x63\145\x73\163"]) || !$oqwuasygwcckkios["\163\165\143\143\x65\163\163"])) { goto ysweqawmawicakeo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ysweqawmawicakeo: if (!file_exists($oqwuasygwcckkios["\x70\x61\164\x68"])) { goto owisckseoogsugqq; } include $oqwuasygwcckkios["\x70\141\164\150"]; owisckseoogsugqq: $uiewakwqscemywuo = ["\144\x65\142\x75\x67\x5f\155\157\x64\145" => 0, "\143\x61\143\150\145\x5f\x77\145\x62\x70" => 0, "\143\x6f\157\x6b\x69\x65\x5f\150\141\163\x68" => '', "\143\141\x63\x68\x65\137\145\x6e\x61\142\x6c\x65" => 1, "\151\x67\x6e\157\x72\x65\144\137\165\x72\x6c\x73" => [], "\162\145\152\x65\x63\164\137\143\x6f\x6f\153\x69\x65\163" => '', "\163\145\x63\162\x65\x74\x5f\x63\x61\143\x68\x65\137\153\145\171" => '', "\154\x6f\147\147\x65\144\137\151\156\137\x63\x6f\x6f\x6b\151\145" => '', "\x63\157\155\155\157\156\x5f\143\x61\143\150\x65\x5f\x6c\x6f\x67\x67\x65\144\x5f\165\x73\145\162\x73" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto kgysyqkoqgwmoscq; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; kgysyqkoqgwmoscq: cuseccewekgcgkyg: } ookcgumoacskyymy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto makomwwyomweyamm; } return $this->eecucukcqkqysiau(__FUNCTION__); makomwwyomweyamm: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\110\124\124\x50\137\110\x4f\x53\x54", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\x2f\x3a\134\144\x2b\44\x2f", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = trim(strtolower($gwgucoaaqcwwciqq), "\56"); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto oqwcmgwimeisusoe; } return $this->eecucukcqkqysiau(__FUNCTION__); oqwcmgwimeisusoe: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\x2e\x70\150\160"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto owgakkqgckqcegoi; } $mkomwsiykqigmqca = str_replace("\x5c", "\57", strtok($this->iuocyymeygwuweag("\122\x45\x51\x55\105\x53\124\x5f\125\x52\111", ''), "\x3f")); $mkomwsiykqigmqca = preg_replace("\174\x28\x3f\74\75\56\x29\x2f\x2b\x7c", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\x25\62\106", preg_replace("\57\x5e\50\77\x3a\45\x32\x46\x29\x2a\50\56\52\77\x29\50\x3f\x3a\x25\62\106\51\x2a\x24\57", "\x24\x31", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\x70\x68\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\160\150\x70"), $yykkewcosaecgqyg)) { goto ugswokwmkumcmigc; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\x68\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\x68\x70"), $yykkewcosaecgqyg))) { goto qiaaqkymeuuueoqk; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\150\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\143\x63\x65\x73\163" => true, "\x70\x61\164\150" => $oqwuasygwcckkios]); qiaaqkymeuuueoqk: goto gwiaimosqoiquwkc; ugswokwmkumcmigc: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\160\150\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\x63\143\x65\163\x73" => true, "\160\x61\164\150" => $oqwuasygwcckkios]); gwiaimosqoiquwkc: $miawkwqioaeasiig .= $uwgioieamckgqics . "\x2e"; asaowisseacciyia: } acesyuieuuqwgkwm: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\x63\x63\145\163\163" => false, "\160\141\x74\150" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\57", $mkomwsiykqigmqca) . "\56\160\150\160"]); goto cigesysuauaiccms; owgakkqgckqcegoi: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\143\143\145\x73\x73" => true, "\x70\x61\x74\x68" => $oqwuasygwcckkios]); cigesysuauaiccms: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\162\145\152\145\x63\x74\x5f\x63\157\157\153\x69\x65\x73"); if (!$osqkgokmuiasuukg) { goto qumkwsqqocooyuoq; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\x23"; qumkwsqqocooyuoq: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { $osqkgokmuiasuukg = $this->get("\151\147\156\x6f\x72\145\x64\137\x75\x72\x6c\x73"); if (!$osqkgokmuiasuukg) { goto gcskyqewysqaceeg; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\x23"; gcskyqewysqaceeg: return $osqkgokmuiasuukg; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\143\141\x63\x68\145\x5f\155\x61\156\144\x61\164\157\162\171\137\x63\157\157\153\151\x65\163"); if (!('' !== $osqkgokmuiasuukg)) { goto kkewoqqowugagwoy; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\x23"; kkewoqqowugagwoy: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\144\145\x62\x75\147\x5f\155\157\144\x65"); } }
