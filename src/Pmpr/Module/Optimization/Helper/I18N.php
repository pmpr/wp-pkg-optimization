<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d1de2caabf8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Module\Optimization\Optimization; class I18N extends Common { public function essaugkeosgskqme() : string { global $sitepress, $q_config, $polylang; $mkysicwccoeicumg = ''; if (!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\x67\145\x74\137\x61\143\x74\151\166\x65\x5f\154\141\x6e\x67\165\141\147\x65\163")) { goto emagssesowicacoa; } if (!empty($polylang) && function_exists("\160\x6c\154\x5f\154\141\156\147\x75\141\147\x65\163\x5f\154\x69\163\x74")) { goto gwksywaoeowkesei; } if (!empty($q_config) && is_array($q_config)) { goto mgieeyuyuoeccaog; } $mkysicwccoeicumg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\150\141\x73\137\x69\x31\70\x6e", ''); if (is_string($mkysicwccoeicumg)) { goto bagkewioewygysea; } $mkysicwccoeicumg = ''; bagkewioewygysea: goto amgsicqmemeuuaem; mgieeyuyuoeccaog: if (function_exists("\161\x74\x72\141\156\170\x66\137\143\157\x6e\166\x65\x72\164\x55\x52\x4c")) { goto mquyemuqcqeassqc; } if (!function_exists("\x71\x74\162\141\156\x73\x5f\143\x6f\156\x76\x65\x72\164\x55\122\x4c")) { goto sykuuisikqcwuaqu; } $mkysicwccoeicumg = "\161\164\x72\x61\156\x73\154\141\x74\145"; sykuuisikqcwuaqu: goto weiaigyyigkusucy; mquyemuqcqeassqc: $mkysicwccoeicumg = "\161\x74\162\x61\x6e\x73\x6c\141\x74\x65\x2d\170"; weiaigyyigkusucy: amgsicqmemeuuaem: goto sgkwaiuukkaqyqki; gwksywaoeowkesei: if (empty(pll_languages_list())) { goto gqyyccceswkqcmaa; } $mkysicwccoeicumg = "\x70\157\154\171\154\141\x6e\147"; gqyyccceswkqcmaa: sgkwaiuukkaqyqki: goto cauqmacqkssciwyq; emagssesowicacoa: $mkysicwccoeicumg = "\167\160\x6d\x6c"; cauqmacqkssciwyq: return $mkysicwccoeicumg; } public function oiceouwgwuakccqu() : array { $ymkomcgesksuuysk = []; if (!($mkysicwccoeicumg = $this->essaugkeosgskqme())) { goto acmgueaoaaweiqqu; } switch ($mkysicwccoeicumg) { case "\x77\x70\x6d\x6c": $ymkomcgesksuuysk = $GLOBALS["\163\x69\164\x65\160\162\145\163\163"]->get_active_languages(); $ymkomcgesksuuysk = array_keys($ymkomcgesksuuysk); goto gusgywuaimwooawc; case "\x71\164\x72\x61\156\x73\154\x61\x74\145": case "\161\164\x72\x61\156\163\x6c\x61\164\145\x2d\170": $ymkomcgesksuuysk = !empty($GLOBALS["\161\x5f\x63\x6f\156\146\151\147"]["\x65\156\141\142\x6c\x65\144\x5f\x6c\x61\156\147\165\141\147\x65\163"]) ? $GLOBALS["\x71\137\x63\x6f\156\146\x69\x67"]["\145\156\x61\x62\154\x65\144\137\154\141\x6e\147\x75\141\147\145\163"] : []; goto gusgywuaimwooawc; case "\x70\157\154\x79\x6c\141\156\x67": $ymkomcgesksuuysk = pll_languages_list(); goto gusgywuaimwooawc; default: $ymkomcgesksuuysk = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x69\61\x38\156\x5f\154\x61\156\x67\165\x61\x67\145\163", []); } uugwoygiyecgymgw: gusgywuaimwooawc: acmgueaoaaweiqqu: if (is_array($ymkomcgesksuuysk)) { goto awaaowoqskgokwiy; } $ymkomcgesksuuysk = []; awaaowoqskgokwiy: return $ymkomcgesksuuysk; } public function mceoyuqgagciommq() { } public function mqguyieewyqcqamy() : array { } public function emqmaiomewcmuacu($gcqseksiskwueksc) { $swaukaagekiououo = ''; $eokyomeiuimoaiac = $this->essaugkeosgskqme(); if ("\167\160\155\154" === $eokyomeiuimoaiac && !$this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\x77\157\x6f\x63\x6f\155\155\145\162\143\145\55\x6d\x75\154\164\151\x6c\x69\x6e\x67\165\141\x6c\x2f\x77\x70\x6d\154\55\167\x6f\x6f\x63\x6f\155\x6d\x65\x72\143\145\56\160\x68\x70")) { goto kgikoagqwkuocesg; } if (!("\x70\157\x6c\171\154\x61\x6e\147" === $eokyomeiuimoaiac && function_exists("\160\x6c\154\x5f\147\x65\x74\x5f\x70\157\x73\x74\137\154\141\156\x67\165\x61\x67\145"))) { goto uqiekawkwcegsumy; } $swaukaagekiououo = pll_get_post_language($gcqseksiskwueksc); uqiekawkwcegsumy: goto skaayekywasksoug; kgikoagqwkuocesg: $swaukaagekiououo = $GLOBALS["\x73\151\x74\145\x70\x72\145\x73\163"]->get_language_for_element($gcqseksiskwueksc, "\160\x6f\163\x74\x5f" . $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc)); skaayekywasksoug: return $swaukaagekiououo; } }
