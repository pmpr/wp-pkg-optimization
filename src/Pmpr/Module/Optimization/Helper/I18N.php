<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b40b3181dac             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; class I18N extends Common { public function essaugkeosgskqme() : string { global $sitepress, $q_config, $polylang; $mkysicwccoeicumg = ''; if (!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\147\x65\x74\x5f\141\143\x74\151\166\x65\137\154\x61\156\x67\x75\141\147\x65\x73")) { goto saycoceqywiekqsi; } if (!empty($polylang) && function_exists("\x70\154\154\x5f\154\141\x6e\x67\x75\x61\147\145\x73\x5f\x6c\151\x73\164")) { goto gskaqcgccswmuqsy; } if (!empty($q_config) && is_array($q_config)) { goto ykuycowuguumseuu; } $mkysicwccoeicumg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\150\141\x73\x5f\x69\x31\70\156", ''); if (is_string($mkysicwccoeicumg)) { goto esuuweysgwuwcuue; } $mkysicwccoeicumg = ''; esuuweysgwuwcuue: goto qugsgsscqyikugyc; ykuycowuguumseuu: if (function_exists("\161\x74\162\141\156\x78\146\x5f\x63\157\156\x76\x65\162\164\125\x52\x4c")) { goto eauiumeeyckucuyc; } if (!function_exists("\x71\x74\162\x61\156\163\137\143\x6f\x6e\x76\x65\x72\x74\x55\x52\114")) { goto gokwmwmaumiwscua; } $mkysicwccoeicumg = "\161\164\x72\141\156\163\x6c\141\x74\x65"; gokwmwmaumiwscua: goto gigiwwouakeekoim; eauiumeeyckucuyc: $mkysicwccoeicumg = "\x71\x74\162\141\156\163\x6c\141\x74\x65\55\x78"; gigiwwouakeekoim: qugsgsscqyikugyc: goto uccuykggugcmiyam; gskaqcgccswmuqsy: if (empty(pll_languages_list())) { goto eieiwacwqkgsewai; } $mkysicwccoeicumg = "\x70\157\x6c\x79\154\x61\x6e\147"; eieiwacwqkgsewai: uccuykggugcmiyam: goto sqaowueaequoigsa; saycoceqywiekqsi: $mkysicwccoeicumg = "\x77\160\155\154"; sqaowueaequoigsa: return $mkysicwccoeicumg; } public function oiceouwgwuakccqu() : array { $ymkomcgesksuuysk = []; if (!($mkysicwccoeicumg = $this->essaugkeosgskqme())) { goto yqkyoaiwcyqeaqwu; } switch ($mkysicwccoeicumg) { case "\167\x70\155\x6c": $ymkomcgesksuuysk = $GLOBALS["\x73\151\164\145\160\162\x65\163\163"]->get_active_languages(); $ymkomcgesksuuysk = array_keys($ymkomcgesksuuysk); goto eqmauwqqowsiwaue; case "\161\x74\x72\x61\x6e\163\154\141\x74\145": case "\x71\164\162\x61\x6e\163\154\141\x74\x65\55\170": $ymkomcgesksuuysk = !empty($GLOBALS["\x71\137\143\157\x6e\146\151\147"]["\x65\156\141\x62\x6c\x65\x64\137\154\x61\x6e\147\165\141\x67\145\x73"]) ? $GLOBALS["\x71\x5f\x63\x6f\156\146\151\x67"]["\x65\x6e\141\x62\x6c\145\144\x5f\x6c\141\x6e\x67\x75\141\x67\145\x73"] : []; goto eqmauwqqowsiwaue; case "\160\x6f\x6c\x79\x6c\x61\x6e\147": $ymkomcgesksuuysk = pll_languages_list(); goto eqmauwqqowsiwaue; default: $ymkomcgesksuuysk = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\151\x31\70\x6e\137\154\x61\x6e\147\165\x61\x67\x65\x73", []); } waycokyiesmqgqcg: eqmauwqqowsiwaue: yqkyoaiwcyqeaqwu: if (is_array($ymkomcgesksuuysk)) { goto yuyiqaawwgaywgqo; } $ymkomcgesksuuysk = []; yuyiqaawwgaywgqo: return $ymkomcgesksuuysk; } public function mceoyuqgagciommq() { } public function mqguyieewyqcqamy() : array { } public function emqmaiomewcmuacu($gcqseksiskwueksc) { $swaukaagekiououo = ''; $eokyomeiuimoaiac = $this->essaugkeosgskqme(); if ("\x77\160\155\154" === $eokyomeiuimoaiac && !$this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\x77\x6f\157\143\x6f\155\x6d\x65\x72\143\145\55\x6d\165\154\164\151\x6c\151\156\x67\165\x61\x6c\57\x77\160\x6d\x6c\x2d\167\x6f\157\143\157\155\x6d\145\x72\143\145\x2e\x70\150\x70")) { goto qmiqicgscsuoyeqo; } if (!("\x70\157\154\171\x6c\141\156\147" === $eokyomeiuimoaiac && function_exists("\160\154\x6c\137\x67\145\x74\x5f\x70\157\163\x74\137\154\141\156\147\x75\141\x67\x65"))) { goto kkogaccoqmsmmkmo; } $swaukaagekiououo = pll_get_post_language($gcqseksiskwueksc); kkogaccoqmsmmkmo: goto ysaumykuimqigeqa; qmiqicgscsuoyeqo: $swaukaagekiououo = $GLOBALS["\163\151\x74\145\160\162\x65\x73\163"]->get_language_for_element($gcqseksiskwueksc, "\x70\157\x73\164\x5f" . $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc)); ysaumykuimqigeqa: return $swaukaagekiououo; } }
