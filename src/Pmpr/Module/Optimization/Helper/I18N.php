<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f15ea6553f3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Module\Optimization\Optimization; class I18N extends Common { public function essaugkeosgskqme() : string { global $sitepress, $q_config, $polylang; $mkysicwccoeicumg = ''; if (!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\x67\x65\x74\x5f\141\x63\x74\x69\166\145\x5f\154\x61\x6e\x67\x75\x61\x67\145\x73")) { goto oaociaioauummsey; } if (!empty($polylang) && function_exists("\x70\154\154\x5f\x6c\141\156\147\x75\x61\x67\145\x73\x5f\x6c\x69\163\x74")) { goto qayiqaykkywcyisq; } if (!empty($q_config) && is_array($q_config)) { goto aqeyqwuywqcmuoce; } $mkysicwccoeicumg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\150\x61\x73\x5f\151\61\70\156", ''); if (is_string($mkysicwccoeicumg)) { goto kikkkocywiyuyuqw; } $mkysicwccoeicumg = ''; kikkkocywiyuyuqw: goto aymoguycgmuggcik; aqeyqwuywqcmuoce: if (function_exists("\161\x74\162\141\x6e\x78\x66\x5f\x63\157\x6e\166\145\x72\x74\x55\x52\x4c")) { goto yosyyiksyyscacus; } if (!function_exists("\161\164\162\x61\156\x73\137\143\157\156\x76\x65\162\x74\125\122\x4c")) { goto qiqegseqwywcmwoe; } $mkysicwccoeicumg = "\161\164\x72\141\x6e\163\154\x61\x74\x65"; qiqegseqwywcmwoe: goto kwcscewawgicomok; yosyyiksyyscacus: $mkysicwccoeicumg = "\161\164\162\141\156\163\154\x61\164\145\55\x78"; kwcscewawgicomok: aymoguycgmuggcik: goto akoweomooyuwamow; qayiqaykkywcyisq: if (empty(pll_languages_list())) { goto koiyaaokigmamqyc; } $mkysicwccoeicumg = "\160\157\x6c\171\154\x61\x6e\x67"; koiyaaokigmamqyc: akoweomooyuwamow: goto cueuscqkicwwicei; oaociaioauummsey: $mkysicwccoeicumg = "\x77\160\x6d\154"; cueuscqkicwwicei: return $mkysicwccoeicumg; } public function oiceouwgwuakccqu() : array { $ymkomcgesksuuysk = []; if (!($mkysicwccoeicumg = $this->essaugkeosgskqme())) { goto kiewcwsykccgocuc; } switch ($mkysicwccoeicumg) { case "\x77\160\x6d\x6c": $ymkomcgesksuuysk = $GLOBALS["\163\x69\x74\x65\160\162\145\163\x73"]->get_active_languages(); $ymkomcgesksuuysk = array_keys($ymkomcgesksuuysk); goto gcecamucuogcciig; case "\x71\x74\x72\x61\156\163\x6c\141\x74\x65": case "\161\164\x72\x61\156\163\154\141\164\145\x2d\x78": $ymkomcgesksuuysk = !empty($GLOBALS["\161\x5f\143\x6f\156\146\151\147"]["\x65\x6e\141\x62\x6c\x65\x64\x5f\154\141\x6e\147\165\x61\147\145\163"]) ? $GLOBALS["\161\137\x63\x6f\156\146\151\147"]["\145\x6e\x61\x62\154\x65\144\137\x6c\141\156\147\165\x61\147\145\163"] : []; goto gcecamucuogcciig; case "\x70\157\x6c\171\x6c\141\x6e\x67": $ymkomcgesksuuysk = pll_languages_list(); goto gcecamucuogcciig; default: $ymkomcgesksuuysk = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\151\x31\x38\x6e\x5f\154\x61\x6e\x67\165\141\x67\145\x73", []); } suscosoukqeyyqgs: gcecamucuogcciig: kiewcwsykccgocuc: if (is_array($ymkomcgesksuuysk)) { goto eysuawiooiswaseq; } $ymkomcgesksuuysk = []; eysuawiooiswaseq: return $ymkomcgesksuuysk; } public function mceoyuqgagciommq() { } public function mqguyieewyqcqamy() : array { } public function emqmaiomewcmuacu($gcqseksiskwueksc) { $swaukaagekiououo = ''; $eokyomeiuimoaiac = $this->essaugkeosgskqme(); if ("\x77\160\x6d\x6c" === $eokyomeiuimoaiac && !$this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\x77\x6f\157\143\x6f\x6d\x6d\145\162\143\x65\55\x6d\x75\x6c\x74\x69\x6c\151\156\147\165\141\154\x2f\x77\160\155\x6c\55\x77\x6f\157\143\157\155\x6d\145\x72\x63\145\56\x70\150\x70")) { goto eogomkswkaqwyycm; } if (!("\160\157\x6c\x79\x6c\141\156\x67" === $eokyomeiuimoaiac && function_exists("\160\x6c\x6c\137\x67\x65\x74\x5f\160\157\163\x74\x5f\x6c\141\156\147\x75\141\147\145"))) { goto iecqkqoiqimmisyw; } $swaukaagekiououo = pll_get_post_language($gcqseksiskwueksc); iecqkqoiqimmisyw: goto egiauwuekseyeaeq; eogomkswkaqwyycm: $swaukaagekiououo = $GLOBALS["\163\x69\164\x65\160\162\x65\163\163"]->get_language_for_element($gcqseksiskwueksc, "\x70\157\163\x74\137" . $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc)); egiauwuekseyeaeq: return $swaukaagekiououo; } }
