<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d2182256c51             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Asset; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; class Preload extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x70\137\150\145\141\x64", [$this, "\x73\147\157\157\x6f\165\141\151\147\x71\167\x69\141\161\157\x71"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse(Optimization::kgswyesggeyekgmg . "\x63\x61\x63\x68\x65\137\x68\x65\141\144\x65\162\x73\137\154\151\163\x74", [$this, "\x73\x73\x67\x79\153\165\165\x75\x63\x6b\x61\153\171\147\167\147"]); } public function auwoukwweaicagsq() { return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x61\x73\x73\x65\x74\137\x70\x72\145\x6c\157\x61\x64\x5f\x6c\151\156\153\163", []); } public function sgooouaigqwiaqoq() { if (!$this->ocysssyiuaueqiei()) { goto ugogoekeckgcmuaw; } if (!headers_sent()) { goto uscokkmquayiukag; } echo $this->ukkcoiggmmycaeuw(); goto ykqsuiyyosyeyscc; uscokkmquayiukag: header("\61\x30\x33\40\105\141\x72\x6c\171\40\110\x69\x6e\164\x73", false); header("\x4c\151\156\153\72\x20" . $this->wecsewaimwquoqkk(), false); ykqsuiyyosyeyscc: ugogoekeckgcmuaw: } public function wecsewaimwquoqkk() : string { $aiwcguiecocoyqqi = $this->auwoukwweaicagsq(); $aqykuigiuwmmcieu = ''; foreach ($aiwcguiecocoyqqi as $ogiyyuwciysokiuc) { $aqykuigiuwmmcieu .= $this->gqiiiaisiqmqomww($ogiyyuwciysokiuc) . "\54"; syusgosewwkoagoq: } egesuwkqkmaigaoe: return rtrim($aqykuigiuwmmcieu, "\x2c"); } public function ukkcoiggmmycaeuw() : string { $aiwcguiecocoyqqi = $this->auwoukwweaicagsq(); $aqykuigiuwmmcieu = ''; foreach ($aiwcguiecocoyqqi as $ogiyyuwciysokiuc) { if (!isset($ogiyyuwciysokiuc["\x6e\157\163\x63\x72\151\160\164"])) { goto icumkkykaoqycqqu; } $cuiaccicqeqwyyuo = $ogiyyuwciysokiuc["\156\x6f\x73\x63\162\151\x70\164"]; unset($ogiyyuwciysokiuc["\156\x6f\x73\x63\x72\x69\160\x74"]); $aqykuigiuwmmcieu .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yoamscgeuweiugse($cuiaccicqeqwyyuo); icumkkykaoqycqqu: $aqykuigiuwmmcieu .= $this->oqsucquusggqcoao($ogiyyuwciysokiuc); eweaaismksecwagy: } mcqucouuiuoagqwc: return $aqykuigiuwmmcieu; } public function ssgykuuuckakygwg($uykgysuswksgmwqy) : array { $aiwcguiecocoyqqi = $this->wecsewaimwquoqkk(); if (!$aiwcguiecocoyqqi) { goto oeamoqweiueaueay; } $uykgysuswksgmwqy[] = "\x31\x30\x33\x20\x45\x61\x72\154\171\x20\110\151\x6e\x74\163"; $uykgysuswksgmwqy["\x4c\x69\x6e\153"] = $aiwcguiecocoyqqi; oeamoqweiueaueay: return $uykgysuswksgmwqy; } private function gqiiiaisiqmqomww(array $siquossayskcwkea) : string { $sogksuscggsicmac = ''; $siquossayskcwkea = $this->iwwioqumuewcikoq($siquossayskcwkea); if (!$siquossayskcwkea) { goto maaisuqwkymeguys; } if (isset($siquossayskcwkea["\x72\145\x6c"])) { goto owgsameoayaogsma; } $siquossayskcwkea["\x72\145\x6c"] = Constants::iwksyuwwwkucsisq; owgsameoayaogsma: $qookweymeqawmcwo = ''; foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { if (!(!is_scalar($eqgoocgaqwqcimie) || !is_numeric($ymkomoccmymcoiea) && !in_array($ymkomoccmymcoiea, ["\x72\145\x6c", "\141\163", "\143\162\x6f\163\163\x6f\162\x69\x67\151\x6e", "\164\171\160\x65", "\156\157\x70\165\163\150"], true))) { goto gqimwsyemoewagcy; } goto awgmegueeqeyqamu; gqimwsyemoewagcy: if (!is_string($eqgoocgaqwqcimie)) { goto aoaqwygkaagiuuws; } $qookweymeqawmcwo .= "\x20{$ymkomoccmymcoiea}\x3d\x22{$eqgoocgaqwqcimie}\42\73"; goto esagiiawomyacuiw; aoaqwygkaagiuuws: $qookweymeqawmcwo .= "\40{$eqgoocgaqwqcimie}\73"; esagiiawomyacuiw: awgmegueeqeyqamu: } kyiwsiakwgiwouyi: $qookweymeqawmcwo = trim($qookweymeqawmcwo); $qookweymeqawmcwo = rtrim($qookweymeqawmcwo, "\x3b"); $sogksuscggsicmac = sprintf("\74\45\163\x3e\x3b\x20\x25\163", esc_url_raw($siquossayskcwkea["\150\162\x65\146"]), $qookweymeqawmcwo); maaisuqwkymeguys: return $sogksuscggsicmac; } public function oqsucquusggqcoao(array $siquossayskcwkea) : string { $sogksuscggsicmac = ''; $siquossayskcwkea = $this->iwwioqumuewcikoq($siquossayskcwkea); if (!$siquossayskcwkea) { goto iuwkiyimqmgguose; } $wwgucssaecqekuek = []; foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { if (!(!is_scalar($eqgoocgaqwqcimie) || !is_numeric($ymkomoccmymcoiea) && !in_array($ymkomoccmymcoiea, ["\162\145\154", "\x68\162\x65\146", "\x61\x73", "\143\162\x6f\x73\x73\157\162\x69\x67\151\x6e", "\164\x79\160\x65", "\157\x6e\x6c\157\x61\144"], true))) { goto ayceeyuocgowqwsa; } goto sksgcusuyqcwqswe; ayceeyuocgowqwsa: $wwgucssaecqekuek[$ymkomoccmymcoiea] = $eqgoocgaqwqcimie; sksgcusuyqcwqswe: } qkyciyiwkmgkmquk: $sogksuscggsicmac = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\x6c\x69\x6e\x6b", $wwgucssaecqekuek); iuwkiyimqmgguose: return $sogksuscggsicmac; } public function iwwioqumuewcikoq(array $siquossayskcwkea) : array { if (isset($siquossayskcwkea["\x68\x72\145\146"])) { goto yggseoaommssscwo; } return []; yggseoaommssscwo: if (!isset($siquossayskcwkea[Constants::caoiqkqugiqqqimm])) { goto aeiemwacaiygemmg; } $siquossayskcwkea[Constants::caoiqkqugiqqqimm] = Constants::iwksyuwwwkucsisq; aeiemwacaiygemmg: return $siquossayskcwkea; } }
