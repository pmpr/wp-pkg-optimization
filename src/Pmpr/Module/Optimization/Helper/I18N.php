<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d323439fdb4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Module\Optimization\Optimization; class I18N extends Common { public function essaugkeosgskqme() : string { global $sitepress, $q_config, $polylang; $mkysicwccoeicumg = ''; if (!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\x67\x65\x74\137\x61\x63\164\x69\166\145\137\154\141\x6e\x67\165\x61\147\145\163")) { goto gkoyqgogsukuowqi; } if (!empty($polylang) && function_exists("\x70\x6c\x6c\137\154\x61\156\x67\165\x61\147\x65\163\137\154\x69\x73\x74")) { goto kgikoagqwkuocesg; } if (!empty($q_config) && is_array($q_config)) { goto awaaowoqskgokwiy; } $mkysicwccoeicumg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\150\141\163\137\151\x31\70\x6e", ''); if (is_string($mkysicwccoeicumg)) { goto acmgueaoaaweiqqu; } $mkysicwccoeicumg = ''; acmgueaoaaweiqqu: goto uqiekawkwcegsumy; awaaowoqskgokwiy: if (function_exists("\161\x74\x72\141\x6e\170\x66\x5f\143\x6f\x6e\166\x65\x72\164\x55\122\114")) { goto gusgywuaimwooawc; } if (!function_exists("\161\164\x72\x61\156\x73\137\x63\157\156\x76\x65\x72\164\125\122\x4c")) { goto cauqmacqkssciwyq; } $mkysicwccoeicumg = "\x71\x74\162\141\x6e\x73\x6c\141\164\x65"; cauqmacqkssciwyq: goto uugwoygiyecgymgw; gusgywuaimwooawc: $mkysicwccoeicumg = "\161\x74\x72\141\x6e\x73\x6c\x61\164\145\55\170"; uugwoygiyecgymgw: uqiekawkwcegsumy: goto skaayekywasksoug; kgikoagqwkuocesg: if (empty(pll_languages_list())) { goto emagssesowicacoa; } $mkysicwccoeicumg = "\160\x6f\x6c\x79\154\141\156\147"; emagssesowicacoa: skaayekywasksoug: goto sgikkoswwyesqomo; gkoyqgogsukuowqi: $mkysicwccoeicumg = "\x77\160\155\154"; sgikkoswwyesqomo: return $mkysicwccoeicumg; } public function oiceouwgwuakccqu() : array { $ymkomcgesksuuysk = []; if (!($mkysicwccoeicumg = $this->essaugkeosgskqme())) { goto cyqokqcacysioeyc; } switch ($mkysicwccoeicumg) { case "\167\160\x6d\154": $ymkomcgesksuuysk = $GLOBALS["\x73\151\x74\145\160\x72\145\x73\163"]->get_active_languages(); $ymkomcgesksuuysk = array_keys($ymkomcgesksuuysk); goto aayysiegiyweiyuu; case "\x71\164\x72\x61\x6e\163\x6c\x61\164\145": case "\161\164\x72\x61\156\163\154\141\164\145\x2d\x78": $ymkomcgesksuuysk = !empty($GLOBALS["\161\x5f\143\157\x6e\146\x69\x67"]["\145\x6e\141\x62\x6c\145\144\137\154\141\156\147\x75\x61\147\145\x73"]) ? $GLOBALS["\161\137\x63\x6f\x6e\146\151\x67"]["\145\156\x61\142\154\x65\144\137\x6c\x61\156\147\165\x61\147\145\x73"] : []; goto aayysiegiyweiyuu; case "\x70\x6f\154\171\154\141\156\x67": $ymkomcgesksuuysk = pll_languages_list(); goto aayysiegiyweiyuu; default: $ymkomcgesksuuysk = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\151\x31\70\156\x5f\x6c\141\156\147\x75\x61\147\145\x73", []); } cksoeiwawiygyiyg: aayysiegiyweiyuu: cyqokqcacysioeyc: if (is_array($ymkomcgesksuuysk)) { goto akwwuuiykscgicuw; } $ymkomcgesksuuysk = []; akwwuuiykscgicuw: return $ymkomcgesksuuysk; } public function mceoyuqgagciommq() { } public function mqguyieewyqcqamy() : array { } public function emqmaiomewcmuacu($gcqseksiskwueksc) { $swaukaagekiououo = ''; $eokyomeiuimoaiac = $this->essaugkeosgskqme(); if ("\x77\x70\155\154" === $eokyomeiuimoaiac && !$this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\167\157\x6f\x63\157\x6d\x6d\145\162\143\x65\55\155\x75\154\x74\x69\x6c\151\156\x67\x75\141\x6c\57\x77\x70\155\x6c\x2d\167\x6f\157\x63\x6f\155\155\145\x72\143\145\56\160\150\160")) { goto iikgiaocummweiga; } if (!("\x70\157\x6c\x79\154\141\x6e\147" === $eokyomeiuimoaiac && function_exists("\x70\154\x6c\137\147\145\x74\137\160\157\x73\x74\137\x6c\141\x6e\x67\165\x61\147\x65"))) { goto ueqsiwuwumoqgsck; } $swaukaagekiououo = pll_get_post_language($gcqseksiskwueksc); ueqsiwuwumoqgsck: goto gsusqquicmukegcs; iikgiaocummweiga: $swaukaagekiououo = $GLOBALS["\163\151\164\x65\x70\x72\x65\x73\163"]->get_language_for_element($gcqseksiskwueksc, "\160\x6f\x73\164\137" . $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc)); gsusqquicmukegcs: return $swaukaagekiououo; } }
