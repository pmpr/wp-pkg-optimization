<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             634ceeff4f14f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Combine; use _WP_Dependency; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Manipulate\Manipulate; use WP_Styles; class CSS extends Combiner { const emmwouuqieykokuw = "\x2f\x75\162\154\x5c\163\52\x5c\50\134\x73\x2a\50\x3f\41\x5b\x22\x27\135\x3f\x64\141\x74\x61\x3a\51\50\77\x21\133\x27\174\x5c\42\135\x3f\x5b\x5c\x23\x7c\134\45\174\x5d\x29\x28\x5b\x5e\x29\x5d\53\51\134\x73\x2a\134\x29\50\x5b\136\73\175\x2c\134\x73\135\x2a\51\x2f\x69"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\x70\x5f\x70\x72\x69\156\164\x5f\163\x74\171\x6c\x65\163", [$this, "\161\161\x63\x79\x6b\141\x65\x69\x6f\x69\x77\x77\141\161\x6f\x73"], 0, 999); parent::wigskegsqequoeks(); } public function qqcykaeioiwwaqos() { global $wp_styles; $this->gaiaksuyqkeeiqgo($wp_styles); } public function mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq) { $ogomymegcoacqisg = $egsumesakcaaukem->src; if (!$ugmuiugkaygmsagq instanceof WP_Styles) { goto asiqwuoswmigcaki; } $eueuqacmukymcyya = $egsumesakcaaukem->handle; $cksswamugeeeawgw = $egsumesakcaaukem->ver; $awyimywmcyoukaao = ManipulateArray::get($egsumesakcaaukem->extra, "\162\x74\154"); $ogomymegcoacqisg = $ugmuiugkaygmsagq->_css_href($ogomymegcoacqisg, $cksswamugeeeawgw, $eueuqacmukymcyya); if (!("\x72\164\154" === $ugmuiugkaygmsagq->text_direction && $awyimywmcyoukaao)) { goto wcugqegqsuuuwqao; } if (is_bool($awyimywmcyoukaao) || "\x72\x65\160\x6c\x61\143\x65" === $awyimywmcyoukaao) { goto qoqskyuuwueqkquk; } $ogomymegcoacqisg = $ugmuiugkaygmsagq->_css_href($awyimywmcyoukaao, $cksswamugeeeawgw, "{$eueuqacmukymcyya}\55\x72\164\x6c"); goto iwsuawwqomaowuii; qoqskyuuwueqkquk: $scqcgogsiaiksiiq = ManipulateArray::get($egsumesakcaaukem->extra, "\163\x75\x66\146\151\x78", ''); $ogomymegcoacqisg = str_replace("{$scqcgogsiaiksiiq}\56\x63\x73\x73", "\x2d\162\164\154{$scqcgogsiaiksiiq}\x2e\143\163\163", $ugmuiugkaygmsagq->_css_href($ogomymegcoacqisg, $cksswamugeeeawgw, "{$eueuqacmukymcyya}\x2d\x72\x74\154")); iwsuawwqomaowuii: wcugqegqsuuuwqao: asiqwuoswmigcaki: return $this->ukacwyckseuqsqgc($ogomymegcoacqisg); } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem) { $ewgwqamkygiqaawc = $this->msgwwgomkkomssew($ewgwqamkygiqaawc, $egsumesakcaaukem); return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem); } public function msgwwgomkkomssew($ewgwqamkygiqaawc, $egsumesakcaaukem) { $couygeouymagssgw = untrailingslashit(Manipulate::cmaecekuqkwmemms("\x41\102\123\x50\101\x54\110")); $cgmkimaosyyuqeyg = site_url(); if (!($couygeouymagssgw && $egsumesakcaaukem instanceof _WP_Dependency)) { goto ouamogymawucwswu; } $geagigaoacaqqcwc = $couygeouymagssgw . trailingslashit(dirname(str_replace($cgmkimaosyyuqeyg, '', $egsumesakcaaukem->src))); $ksiyqouuaoymsycg = []; $gwgucoaaqcwwciqq = ManipulateArray::get(ManipulateFormat::gooqqcmsyseiaikc($cgmkimaosyyuqeyg), "\x68\157\163\x74"); preg_match_all(self::emmwouuqieykokuw, $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); if (!(is_array($meyiiwcswqmuggyg) && $meyiiwcswqmuggyg)) { goto emmsycooskoqmgeg; } foreach ($meyiiwcswqmuggyg[1] as $wsiwwymgaoqsyagc) { $eeamcawaiqocomwy = trim($wsiwwymgaoqsyagc, "\40\11\12\15\x0\13\x22\x27"); $qoqyywgqmicskwsc = realpath("{$geagigaoacaqqcwc}{$eeamcawaiqocomwy}"); if (!$qoqyywgqmicskwsc) { goto qgeugwymkkiacwoc; } $ksiyqouuaoymsycg[$wsiwwymgaoqsyagc] = "\57\x2f" . str_replace($couygeouymagssgw, $gwgucoaaqcwwciqq, $qoqyywgqmicskwsc); qgeugwymkkiacwoc: mqicocmqegwukkwg: } ciykoyeioqgyaeqo: emmsycooskoqmgeg: $ewgwqamkygiqaawc = $this->qgsuqwiisyaoycya($ewgwqamkygiqaawc, $ksiyqouuaoymsycg); ouamogymawucwswu: return $ewgwqamkygiqaawc; } public function qgsuqwiisyaoycya($ewgwqamkygiqaawc, $qqueccegigsqmmmg = []) { if (!$qqueccegigsqmmmg) { goto mugqyyeayeyggqqk; } $yygmoeguaqyumuui = array_map("\163\164\162\x6c\x65\x6e", array_keys($qqueccegigsqmmmg)); array_multisort($yygmoeguaqyumuui, SORT_DESC, $qqueccegigsqmmmg); $ewgwqamkygiqaawc = str_replace(array_keys($qqueccegigsqmmmg), array_values($qqueccegigsqmmmg), $ewgwqamkygiqaawc); mugqyyeayeyggqqk: return $ewgwqamkygiqaawc; } }
