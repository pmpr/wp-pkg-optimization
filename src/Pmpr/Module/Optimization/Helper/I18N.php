<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669ada83915b0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; class I18N extends Common { public function essaugkeosgskqme() : string { global $sitepress, $q_config, $polylang; $mkysicwccoeicumg = ''; if (!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\147\145\164\x5f\141\x63\x74\x69\166\x65\137\x6c\141\156\147\x75\x61\x67\145\163")) { goto uukumskkeggaowck; } if (!empty($polylang) && function_exists("\160\x6c\x6c\137\154\141\x6e\x67\x75\141\x67\x65\163\137\x6c\x69\163\164")) { goto sqiciiuwmykocycc; } if (!empty($q_config) && is_array($q_config)) { goto kiqogmwcgcamwiig; } $mkysicwccoeicumg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x68\141\163\137\151\61\70\x6e", ''); if (is_string($mkysicwccoeicumg)) { goto yowsmsiyimmimemc; } $mkysicwccoeicumg = ''; yowsmsiyimmimemc: goto iomcaiwewsawiamu; kiqogmwcgcamwiig: if (function_exists("\161\x74\162\x61\x6e\x78\146\137\143\157\156\166\x65\x72\x74\125\122\114")) { goto eqkauqciwewmgeoi; } if (!function_exists("\x71\x74\x72\141\x6e\163\x5f\143\157\156\x76\145\x72\164\125\122\114")) { goto sciwggaeogcoesiu; } $mkysicwccoeicumg = "\161\x74\x72\x61\x6e\163\x6c\x61\x74\145"; sciwggaeogcoesiu: goto kwagwqyusyiyoaqs; eqkauqciwewmgeoi: $mkysicwccoeicumg = "\x71\x74\162\x61\x6e\163\154\141\164\x65\55\x78"; kwagwqyusyiyoaqs: iomcaiwewsawiamu: goto eequksumcoogyoem; sqiciiuwmykocycc: if (empty(pll_languages_list())) { goto mkwskuycuyguqqok; } $mkysicwccoeicumg = "\x70\157\154\x79\154\141\x6e\x67"; mkwskuycuyguqqok: eequksumcoogyoem: goto cggowoquuiwqkyew; uukumskkeggaowck: $mkysicwccoeicumg = "\167\160\x6d\x6c"; cggowoquuiwqkyew: return $mkysicwccoeicumg; } public function oiceouwgwuakccqu() : array { $ymkomcgesksuuysk = []; if (!($mkysicwccoeicumg = $this->essaugkeosgskqme())) { goto goacqqsgaaigyuaw; } switch ($mkysicwccoeicumg) { case "\x77\160\x6d\x6c": $ymkomcgesksuuysk = $GLOBALS["\163\151\164\x65\160\x72\x65\163\x73"]->get_active_languages(); $ymkomcgesksuuysk = array_keys($ymkomcgesksuuysk); goto ocokwuuquaokmasc; case "\161\x74\x72\x61\156\163\x6c\141\164\145": case "\x71\x74\162\141\x6e\x73\154\x61\x74\145\55\170": $ymkomcgesksuuysk = !empty($GLOBALS["\161\137\x63\x6f\156\146\x69\147"]["\145\156\x61\142\x6c\145\x64\137\154\x61\156\147\x75\x61\147\145\163"]) ? $GLOBALS["\161\x5f\x63\x6f\156\146\151\x67"]["\145\156\141\142\x6c\145\x64\x5f\154\141\x6e\x67\165\x61\147\145\163"] : []; goto ocokwuuquaokmasc; case "\x70\x6f\x6c\171\154\x61\156\147": $ymkomcgesksuuysk = pll_languages_list(); goto ocokwuuquaokmasc; default: $ymkomcgesksuuysk = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\151\x31\x38\x6e\x5f\154\141\x6e\147\165\141\147\x65\163", []); } yiwiqaqmwiogawym: ocokwuuquaokmasc: goacqqsgaaigyuaw: if (is_array($ymkomcgesksuuysk)) { goto meawswgwagoqgkye; } $ymkomcgesksuuysk = []; meawswgwagoqgkye: return $ymkomcgesksuuysk; } public function mceoyuqgagciommq() { } public function mqguyieewyqcqamy() : array { } public function emqmaiomewcmuacu($gcqseksiskwueksc) { $swaukaagekiououo = ''; $eokyomeiuimoaiac = $this->essaugkeosgskqme(); if ("\167\160\x6d\154" === $eokyomeiuimoaiac && !$this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\x77\x6f\x6f\143\157\x6d\155\145\x72\143\145\x2d\155\165\x6c\x74\x69\x6c\151\x6e\x67\x75\x61\154\x2f\167\x70\155\154\55\x77\157\157\x63\x6f\x6d\x6d\x65\x72\143\x65\x2e\x70\150\x70")) { goto usqgaogkqgemuima; } if (!("\160\x6f\154\x79\x6c\x61\156\x67" === $eokyomeiuimoaiac && function_exists("\160\154\x6c\x5f\x67\145\x74\x5f\160\x6f\163\x74\137\154\x61\x6e\147\x75\141\x67\x65"))) { goto wcesymwqykqoyuqk; } $swaukaagekiououo = pll_get_post_language($gcqseksiskwueksc); wcesymwqykqoyuqk: goto mswsoaimesegiiic; usqgaogkqgemuima: $swaukaagekiououo = $GLOBALS["\x73\151\164\145\160\x72\x65\163\x73"]->get_language_for_element($gcqseksiskwueksc, "\160\157\163\x74\x5f" . $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc)); mswsoaimesegiiic: return $swaukaagekiououo; } }
