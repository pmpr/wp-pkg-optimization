<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a68e6136ef8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if (!$this->amqagusacuuuaswg()) { goto yccuomocgmewkeca; } return; yccuomocgmewkeca: if (!(!isset($ywmkwiwkosakssii["\163\145\x72\x76\145\x72"]) && !empty($_SERVER) && is_array($_SERVER))) { goto suiywiakesiegcwu; } $ywmkwiwkosakssii["\x73\145\x72\x76\x65\162"] = $_SERVER; suiywiakesiegcwu: $this->path = rtrim($ywmkwiwkosakssii["\160\141\x74\x68"], "\x2f") . "\57"; $this->server = !empty($ywmkwiwkosakssii["\x73\x65\162\166\145\162"]) && is_array($ywmkwiwkosakssii["\x73\x65\162\x76\145\x72"]) ? $ywmkwiwkosakssii["\x73\x65\x72\x76\145\x72"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto kmseiouukkqiumum; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; kmseiouukkqiumum: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto syuywgysqyckcqay; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; syuywgysqyckcqay: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ggewkaiwwgkmkwgc; } return $this->eecucukcqkqysiau(__FUNCTION__); ggewkaiwwgkmkwgc: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\x73\165\143\x63\145\163\163"]) || !$oqwuasygwcckkios["\163\x75\x63\143\145\x73\163"])) { goto kkieqqwwascekcmo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kkieqqwwascekcmo: if (!file_exists($oqwuasygwcckkios["\x70\x61\x74\150"])) { goto ycueoqkeakismiqw; } include $oqwuasygwcckkios["\160\x61\164\150"]; ycueoqkeakismiqw: $uiewakwqscemywuo = ["\144\145\x76\137\x6d\x6f\144\145" => 0, "\144\145\142\x75\x67\137\155\x6f\144\x65" => 1, "\143\141\x63\x68\x65\x5f\x77\x65\142\160" => 0, "\x67\x7a\x69\160\x5f\x65\x6e\141\x62\x6c\x65" => 1, "\x63\157\x6f\x6b\151\x65\x5f\150\x61\163\150" => '', "\155\157\142\x69\154\x65\x5f\143\141\143\150\x65" => 1, "\x63\141\x63\x68\145\137\x65\x6e\141\x62\x6c\145" => 1, "\151\x67\156\157\162\145\144\x5f\165\162\x6c\163" => [], "\x72\x65\x6a\x65\x63\x74\137\143\x6f\x6f\153\x69\x65\163" => '', "\163\145\x63\x72\x65\x74\x5f\x63\141\143\x68\145\137\x6b\145\x79" => '', "\x6c\157\x67\x67\x65\x64\137\151\156\137\x63\157\x6f\x6b\x69\x65" => '', "\143\157\x6d\155\157\x6e\137\x63\x61\143\x68\145\137\154\157\x67\x67\x65\x64\x5f\165\x73\145\162\x73" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto euymeegkukskiowq; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; euymeegkukskiowq: mugeiwyysiemwaym: } awimwukcyiceackk: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto cquikgykuscqmigw; } return $this->eecucukcqkqysiau(__FUNCTION__); cquikgykuscqmigw: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\x48\124\124\x50\x5f\x48\117\x53\124", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\x2f\x3a\x5c\144\x2b\44\x2f", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = strtolower(trim($gwgucoaaqcwwciqq, "\56")); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto cyymeyomuakqakwo; } return $this->eecucukcqkqysiau(__FUNCTION__); cyymeyomuakqakwo: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\56\x70\x68\x70"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto wgeueumgacuuuama; } $mkomwsiykqigmqca = str_replace("\x5c", "\57", strtok($this->iuocyymeygwuweag("\122\105\121\125\x45\x53\x54\x5f\125\x52\111", ''), "\77")); $mkomwsiykqigmqca = preg_replace("\174\50\x3f\x3c\x3d\x2e\x29\57\x2b\x7c", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\45\62\106", preg_replace("\57\136\x28\77\x3a\x25\x32\x46\x29\52\x28\x2e\52\77\x29\50\x3f\x3a\45\62\106\x29\52\44\x2f", "\x24\x31", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\56\x70\x68\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\160\x68\160"), $yykkewcosaecgqyg)) { goto auaywaskqooasiuq; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\x70\150\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\x68\160"), $yykkewcosaecgqyg))) { goto ouaoyqugwsagkqaa; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\150\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\x63\x63\x65\163\x73" => true, "\160\x61\164\150" => $oqwuasygwcckkios]); ouaoyqugwsagkqaa: goto ewoqyogcaksucksk; auaywaskqooasiuq: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\x70\150\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\x63\143\x65\x73\x73" => true, "\160\x61\164\150" => $oqwuasygwcckkios]); ewoqyogcaksucksk: $miawkwqioaeasiig .= $uwgioieamckgqics . "\56"; gkwoqoeaecgkymeu: } uwscegkmmumymoaq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\x63\x63\145\163\163" => false, "\x70\141\164\150" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\57", $mkomwsiykqigmqca) . "\56\160\150\x70"]); goto yukacyeckkwagusw; wgeueumgacuuuama: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\x63\143\145\163\x73" => true, "\x70\141\x74\x68" => $oqwuasygwcckkios]); yukacyeckkwagusw: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\x72\145\x6a\145\143\x74\x5f\x63\157\x6f\x6b\x69\x65\x73"); if (!$osqkgokmuiasuukg) { goto qgyaeoqgekocwkmw; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\43"; qgyaeoqgekocwkmw: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if (!($iqisissicwwuksyi = $this->get("\x69\x67\x6e\x6f\162\145\144\137\165\x72\154\x73"))) { goto sieykcqauaygcais; } $iqisissicwwuksyi = "\43{$iqisissicwwuksyi}\x23"; sieykcqauaygcais: return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\143\141\143\150\x65\137\x6d\x61\x6e\x64\x61\x74\x6f\x72\x79\137\143\157\x6f\153\x69\145\x73") ?: ''; if (!($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg))) { goto simkiasocoimioew; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; simkiasocoimioew: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\x64\x65\x62\x75\147\137\155\x6f\x64\145"); } }
