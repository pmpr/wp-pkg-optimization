<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669ada83915b0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if (!$this->amqagusacuuuaswg()) { goto oaqeoqsksuyyggmg; } return; oaqeoqsksuyyggmg: if (!(!isset($ywmkwiwkosakssii["\x73\145\x72\166\145\x72"]) && !empty($_SERVER) && is_array($_SERVER))) { goto kkmuuoscccmokkiw; } $ywmkwiwkosakssii["\163\x65\162\x76\145\162"] = $_SERVER; kkmuuoscccmokkiw: $this->path = rtrim($ywmkwiwkosakssii["\x70\x61\x74\x68"], "\57") . "\57"; $this->server = !empty($ywmkwiwkosakssii["\x73\x65\x72\x76\x65\162"]) && is_array($ywmkwiwkosakssii["\x73\145\162\166\145\162"]) ? $ywmkwiwkosakssii["\163\x65\162\x76\x65\x72"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto awuwuuuagqysukku; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; awuwuuuagqysukku: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto miugmimciywcgswm; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; miugmimciywcgswm: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto aqekkeqmmewoyawu; } return $this->eecucukcqkqysiau(__FUNCTION__); aqekkeqmmewoyawu: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\163\x75\x63\x63\x65\163\x73"]) || !$oqwuasygwcckkios["\x73\165\x63\143\145\163\x73"])) { goto mcqwuawosciucemq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); mcqwuawosciucemq: if (!file_exists($oqwuasygwcckkios["\x70\x61\164\x68"])) { goto emeeocqaisksyioq; } include $oqwuasygwcckkios["\160\x61\x74\150"]; emeeocqaisksyioq: $uiewakwqscemywuo = ["\x64\145\166\x5f\x6d\x6f\x64\145" => 0, "\144\x65\142\165\x67\137\x6d\157\144\145" => 1, "\x63\141\143\150\x65\x5f\167\x65\142\160" => 0, "\147\172\x69\160\137\145\156\141\142\x6c\x65" => 1, "\143\157\x6f\x6b\x69\x65\137\150\141\163\150" => '', "\155\x6f\x62\151\154\145\137\143\141\143\150\x65" => 1, "\143\x61\x63\150\145\137\x65\x6e\141\x62\154\x65" => 1, "\151\147\x6e\157\x72\x65\x64\137\165\162\154\x73" => [], "\x72\145\152\145\x63\164\x5f\143\157\x6f\x6b\151\145\163" => '', "\163\145\x63\162\x65\164\137\143\x61\143\150\145\x5f\153\145\x79" => '', "\154\x6f\147\x67\x65\144\x5f\151\x6e\137\143\157\x6f\153\x69\145" => '', "\143\157\155\x6d\157\x6e\137\143\x61\143\150\x65\137\x6c\x6f\x67\147\x65\144\137\165\x73\x65\162\163" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto ecgwgamiseokmise; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; ecgwgamiseokmise: csaksaisgawusswg: } maggecymmmesqmqs: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qkiyyywwuiuackao; } return $this->eecucukcqkqysiau(__FUNCTION__); qkiyyywwuiuackao: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\x48\124\x54\x50\x5f\110\117\x53\x54", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\x2f\72\134\144\53\44\x2f", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = strtolower(trim($gwgucoaaqcwwciqq, "\x2e")); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto gyskcwykkyakeims; } return $this->eecucukcqkqysiau(__FUNCTION__); gyskcwykkyakeims: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\x2e\x70\x68\x70"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto saiuoomgskwgyeya; } $mkomwsiykqigmqca = str_replace("\134", "\x2f", strtok($this->iuocyymeygwuweag("\122\105\121\125\x45\123\124\137\x55\122\111", ''), "\x3f")); $mkomwsiykqigmqca = preg_replace("\174\50\77\74\75\x2e\x29\x2f\x2b\174", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\x25\x32\x46", preg_replace("\57\x5e\x28\77\72\45\x32\106\x29\52\x28\56\52\x3f\51\50\77\72\45\62\106\51\x2a\44\x2f", "\44\61", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\x70\150\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\160\x68\x70"), $yykkewcosaecgqyg)) { goto cimascmiesomqgqs; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\x70\x68\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\150\160"), $yykkewcosaecgqyg))) { goto aamgqoqyyooimqkm; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\150\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\x63\x63\x65\163\x73" => true, "\160\141\x74\x68" => $oqwuasygwcckkios]); aamgqoqyyooimqkm: goto easuiqiooiwgswmm; cimascmiesomqgqs: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\x70\150\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\143\x63\145\x73\x73" => true, "\160\141\x74\150" => $oqwuasygwcckkios]); easuiqiooiwgswmm: $miawkwqioaeasiig .= $uwgioieamckgqics . "\56"; mcagemacuqyskogs: } ossakckwskyqusmm: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\x63\143\x65\163\163" => false, "\x70\x61\x74\x68" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\57", $mkomwsiykqigmqca) . "\56\x70\150\x70"]); goto kuuawiosmkgqsscy; saiuoomgskwgyeya: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\x63\x63\145\163\x73" => true, "\160\x61\x74\150" => $oqwuasygwcckkios]); kuuawiosmkgqsscy: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\162\145\152\145\x63\x74\137\143\157\x6f\153\151\x65\163"); if (!$osqkgokmuiasuukg) { goto kwocaqggwcksesce; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; kwocaqggwcksesce: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if (!($iqisissicwwuksyi = $this->get("\x69\x67\x6e\157\162\145\144\x5f\x75\x72\x6c\x73"))) { goto momuweiasiwskekw; } $iqisissicwwuksyi = "\43{$iqisissicwwuksyi}\43"; momuweiasiwskekw: return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\143\141\x63\150\145\137\x6d\x61\x6e\144\x61\x74\157\162\x79\x5f\x63\x6f\157\153\x69\x65\x73") ?: ''; if (!($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg))) { goto qaewauyekqucciyc; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\43"; qaewauyekqucciyc: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\x64\x65\142\165\x67\x5f\155\x6f\x64\x65"); } }
