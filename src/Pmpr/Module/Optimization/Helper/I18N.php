<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce6347bb78c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Module\Optimization\Optimization; class I18N extends Common { public function essaugkeosgskqme() : string { global $sitepress, $q_config, $polylang; $mkysicwccoeicumg = ''; if (!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\147\x65\164\x5f\x61\143\164\151\166\x65\x5f\x6c\141\156\147\165\141\x67\x65\x73")) { goto iqukigoyiqgcggue; } if (!empty($polylang) && function_exists("\160\154\154\x5f\x6c\141\156\147\165\141\147\145\163\x5f\x6c\151\163\164")) { goto kygcymkakucoeock; } if (!empty($q_config) && is_array($q_config)) { goto ugcyukgoaiiysymc; } $mkysicwccoeicumg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x68\x61\163\137\151\x31\70\x6e", ''); if (is_string($mkysicwccoeicumg)) { goto wkwkeicwosmkcygc; } $mkysicwccoeicumg = ''; wkwkeicwosmkcygc: goto yuoyeeuqqaockyqw; ugcyukgoaiiysymc: if (function_exists("\x71\x74\162\141\x6e\170\x66\x5f\x63\157\x6e\x76\145\162\164\125\122\x4c")) { goto csskguekqcwcmocu; } if (!function_exists("\161\164\x72\x61\156\x73\x5f\143\x6f\x6e\x76\145\162\x74\125\x52\x4c")) { goto oaciskoioaecgwee; } $mkysicwccoeicumg = "\x71\x74\x72\x61\x6e\163\x6c\x61\x74\145"; oaciskoioaecgwee: goto mmusoowesqcmuqew; csskguekqcwcmocu: $mkysicwccoeicumg = "\161\x74\x72\141\156\163\154\141\x74\x65\x2d\170"; mmusoowesqcmuqew: yuoyeeuqqaockyqw: goto qkiqquymecyoouki; kygcymkakucoeock: if (empty(pll_languages_list())) { goto yskswskmsgoouyco; } $mkysicwccoeicumg = "\x70\x6f\x6c\x79\x6c\141\x6e\x67"; yskswskmsgoouyco: qkiqquymecyoouki: goto amkcomscieegkygc; iqukigoyiqgcggue: $mkysicwccoeicumg = "\x77\160\155\154"; amkcomscieegkygc: return $mkysicwccoeicumg; } public function oiceouwgwuakccqu() : array { $ymkomcgesksuuysk = []; if (!($mkysicwccoeicumg = $this->essaugkeosgskqme())) { goto osoqssymqqoqcuky; } switch ($mkysicwccoeicumg) { case "\x77\x70\155\154": $ymkomcgesksuuysk = $GLOBALS["\x73\x69\164\x65\x70\162\x65\163\x73"]->get_active_languages(); $ymkomcgesksuuysk = array_keys($ymkomcgesksuuysk); goto uugekiumuwemyuyc; case "\x71\164\x72\141\x6e\x73\x6c\141\164\145": case "\x71\x74\162\x61\156\163\x6c\141\x74\x65\x2d\170": $ymkomcgesksuuysk = !empty($GLOBALS["\x71\x5f\x63\157\156\x66\151\147"]["\145\x6e\141\x62\x6c\x65\x64\137\x6c\x61\156\x67\x75\x61\x67\145\x73"]) ? $GLOBALS["\161\x5f\x63\157\x6e\146\x69\147"]["\145\156\141\x62\x6c\x65\144\x5f\154\x61\156\x67\x75\141\147\145\x73"] : []; goto uugekiumuwemyuyc; case "\160\x6f\x6c\x79\x6c\141\156\x67": $ymkomcgesksuuysk = pll_languages_list(); goto uugekiumuwemyuyc; default: $ymkomcgesksuuysk = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x69\61\x38\156\x5f\x6c\141\156\147\165\x61\x67\145\x73", []); } qoameasiqwaqgmca: uugekiumuwemyuyc: osoqssymqqoqcuky: if (is_array($ymkomcgesksuuysk)) { goto qcywwqceiqogcoyo; } $ymkomcgesksuuysk = []; qcywwqceiqogcoyo: return $ymkomcgesksuuysk; } public function mceoyuqgagciommq() { } public function mqguyieewyqcqamy() : array { } public function emqmaiomewcmuacu($gcqseksiskwueksc) { $swaukaagekiououo = ''; $eokyomeiuimoaiac = $this->essaugkeosgskqme(); if ("\x77\160\155\x6c" === $eokyomeiuimoaiac && !$this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\167\x6f\x6f\143\x6f\155\155\145\162\x63\x65\55\155\x75\154\x74\151\x6c\151\156\147\165\x61\154\57\x77\x70\x6d\x6c\x2d\167\157\157\143\157\x6d\155\145\x72\x63\145\x2e\x70\150\x70")) { goto awikkaqmmuqkukma; } if (!("\x70\157\x6c\171\154\141\x6e\x67" === $eokyomeiuimoaiac && function_exists("\x70\x6c\x6c\137\147\145\164\x5f\160\157\x73\164\137\x6c\141\156\147\165\141\147\x65"))) { goto giiucsyqgcooaima; } $swaukaagekiououo = pll_get_post_language($gcqseksiskwueksc); giiucsyqgcooaima: goto uckeuuaqimqamuyc; awikkaqmmuqkukma: $swaukaagekiououo = $GLOBALS["\x73\151\164\x65\160\162\145\163\x73"]->get_language_for_element($gcqseksiskwueksc, "\160\157\163\x74\x5f" . $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc)); uckeuuaqimqamuyc: return $swaukaagekiououo; } }
