<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d323439fdb4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Asset; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; class Preload extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160\137\150\145\141\x64", [$this, "\163\x67\157\157\x6f\x75\141\x69\x67\x71\167\151\x61\161\157\161"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse(Optimization::kgswyesggeyekgmg . "\x63\x61\x63\x68\x65\x5f\150\x65\141\144\x65\162\163\137\x6c\x69\x73\x74", [$this, "\163\163\147\171\x6b\165\x75\165\143\153\x61\x6b\171\x67\x77\147"]); } public function auwoukwweaicagsq() { return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\141\163\163\145\x74\137\x70\x72\145\154\x6f\x61\x64\x5f\x6c\x69\x6e\153\x73", []); } public function sgooouaigqwiaqoq() { if (!$this->ocysssyiuaueqiei()) { goto oeamoqweiueaueay; } if (!headers_sent()) { goto eweaaismksecwagy; } echo $this->ukkcoiggmmycaeuw(); goto icumkkykaoqycqqu; eweaaismksecwagy: header("\61\60\63\40\x45\141\162\154\x79\x20\x48\151\x6e\164\163", false); header("\114\151\156\153\72\x20" . $this->wecsewaimwquoqkk(), false); icumkkykaoqycqqu: oeamoqweiueaueay: } public function wecsewaimwquoqkk() : string { $aiwcguiecocoyqqi = $this->auwoukwweaicagsq(); $aqykuigiuwmmcieu = ''; foreach ($aiwcguiecocoyqqi as $ogiyyuwciysokiuc) { $aqykuigiuwmmcieu .= $this->gqiiiaisiqmqomww($ogiyyuwciysokiuc) . "\x2c"; kyiwsiakwgiwouyi: } owgsameoayaogsma: return rtrim($aqykuigiuwmmcieu, "\54"); } public function ukkcoiggmmycaeuw() : string { $aiwcguiecocoyqqi = $this->auwoukwweaicagsq(); $aqykuigiuwmmcieu = ''; foreach ($aiwcguiecocoyqqi as $ogiyyuwciysokiuc) { if (!isset($ogiyyuwciysokiuc["\x6e\157\163\143\x72\x69\160\164"])) { goto aoaqwygkaagiuuws; } $cuiaccicqeqwyyuo = $ogiyyuwciysokiuc["\156\x6f\163\x63\x72\151\x70\164"]; unset($ogiyyuwciysokiuc["\x6e\x6f\163\x63\162\x69\160\164"]); $aqykuigiuwmmcieu .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yoamscgeuweiugse($cuiaccicqeqwyyuo); aoaqwygkaagiuuws: $aqykuigiuwmmcieu .= $this->oqsucquusggqcoao($ogiyyuwciysokiuc); gqimwsyemoewagcy: } awgmegueeqeyqamu: return $aqykuigiuwmmcieu; } public function ssgykuuuckakygwg($uykgysuswksgmwqy) : array { $aiwcguiecocoyqqi = $this->wecsewaimwquoqkk(); if (!$aiwcguiecocoyqqi) { goto esagiiawomyacuiw; } $uykgysuswksgmwqy[] = "\61\x30\63\x20\105\141\162\154\171\x20\x48\151\156\164\163"; $uykgysuswksgmwqy["\114\151\156\153"] = $aiwcguiecocoyqqi; esagiiawomyacuiw: return $uykgysuswksgmwqy; } private function gqiiiaisiqmqomww(array $siquossayskcwkea) : string { $sogksuscggsicmac = ''; $siquossayskcwkea = $this->iwwioqumuewcikoq($siquossayskcwkea); if (!$siquossayskcwkea) { goto aeiemwacaiygemmg; } if (isset($siquossayskcwkea["\162\x65\154"])) { goto maaisuqwkymeguys; } $siquossayskcwkea["\162\x65\154"] = Constants::iwksyuwwwkucsisq; maaisuqwkymeguys: $qookweymeqawmcwo = ''; foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { if (!(!is_scalar($eqgoocgaqwqcimie) || !is_numeric($ymkomoccmymcoiea) && !in_array($ymkomoccmymcoiea, ["\x72\145\154", "\141\x73", "\143\x72\157\163\x73\157\x72\151\x67\151\156", "\164\x79\x70\145", "\x6e\157\160\x75\x73\x68"], true))) { goto ayceeyuocgowqwsa; } goto sksgcusuyqcwqswe; ayceeyuocgowqwsa: if (!is_string($eqgoocgaqwqcimie)) { goto iuwkiyimqmgguose; } $qookweymeqawmcwo .= "\x20{$ymkomoccmymcoiea}\75\x22{$eqgoocgaqwqcimie}\x22\73"; goto yggseoaommssscwo; iuwkiyimqmgguose: $qookweymeqawmcwo .= "\40{$eqgoocgaqwqcimie}\x3b"; yggseoaommssscwo: sksgcusuyqcwqswe: } qkyciyiwkmgkmquk: $qookweymeqawmcwo = trim($qookweymeqawmcwo); $qookweymeqawmcwo = rtrim($qookweymeqawmcwo, "\x3b"); $sogksuscggsicmac = sprintf("\x3c\x25\163\76\x3b\x20\45\163", esc_url_raw($siquossayskcwkea["\150\x72\145\x66"]), $qookweymeqawmcwo); aeiemwacaiygemmg: return $sogksuscggsicmac; } public function oqsucquusggqcoao(array $siquossayskcwkea) : string { $sogksuscggsicmac = ''; $siquossayskcwkea = $this->iwwioqumuewcikoq($siquossayskcwkea); if (!$siquossayskcwkea) { goto giuccakymqymawgk; } $wwgucssaecqekuek = []; foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { if (!(!is_scalar($eqgoocgaqwqcimie) || !is_numeric($ymkomoccmymcoiea) && !in_array($ymkomoccmymcoiea, ["\x72\x65\154", "\150\x72\145\x66", "\141\x73", "\x63\162\157\163\x73\157\162\151\x67\x69\156", "\x74\x79\160\145", "\157\156\x6c\x6f\x61\144"], true))) { goto kwuckkyqaygwgcuy; } goto oeusomaaeekakake; kwuckkyqaygwgcuy: $wwgucssaecqekuek[$ymkomoccmymcoiea] = $eqgoocgaqwqcimie; oeusomaaeekakake: } yyqygaokeccgugos: $sogksuscggsicmac = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\x6c\x69\156\x6b", $wwgucssaecqekuek); giuccakymqymawgk: return $sogksuscggsicmac; } public function iwwioqumuewcikoq(array $siquossayskcwkea) : array { if (isset($siquossayskcwkea["\150\162\145\146"])) { goto sicgyiyiocyygkoc; } return []; sicgyiyiocyygkoc: if (!isset($siquossayskcwkea[Constants::caoiqkqugiqqqimm])) { goto cyosacayacumuaks; } $siquossayskcwkea[Constants::caoiqkqugiqqqimm] = Constants::iwksyuwwwkucsisq; cyosacayacumuaks: return $siquossayskcwkea; } }
