<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c7258cc4499             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Combine; use _WP_Dependency; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Optimization\Manipulate\Manipulate; use WP_Styles; class CSS extends Combiner { const emmwouuqieykokuw = "\57\x75\162\154\134\x73\x2a\134\50\x5c\163\52\50\77\x21\x5b\42\x27\x5d\77\x64\141\x74\x61\x3a\x29\x28\x3f\41\x5b\47\x7c\x5c\x22\135\x3f\133\134\43\174\134\x25\x7c\135\51\50\x5b\x5e\51\x5d\x2b\51\134\163\52\x5c\x29\50\133\136\73\x7d\x2c\x5c\163\x5d\52\51\x2f\x69"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\x70\x5f\160\x72\x69\156\164\x5f\163\x74\x79\x6c\145\163", [$this, "\x71\161\x63\x79\x6b\141\145\x69\157\x69\167\167\141\161\x6f\x73"], 0, 999); parent::wigskegsqequoeks(); } public function qqcykaeioiwwaqos() { global $wp_styles; $this->gaiaksuyqkeeiqgo($wp_styles); } public function mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq) { $ogomymegcoacqisg = $egsumesakcaaukem->src; if (!$ugmuiugkaygmsagq instanceof WP_Styles) { goto emagssesowicacoa; } $eueuqacmukymcyya = $egsumesakcaaukem->handle; $cksswamugeeeawgw = $egsumesakcaaukem->ver; $awyimywmcyoukaao = ManipulateArray::get($egsumesakcaaukem->extra, "\162\x74\154"); $ogomymegcoacqisg = $ugmuiugkaygmsagq->_css_href($ogomymegcoacqisg, $cksswamugeeeawgw, $eueuqacmukymcyya); if (!("\162\x74\154" === $ugmuiugkaygmsagq->text_direction && $awyimywmcyoukaao)) { goto sgkwaiuukkaqyqki; } if (is_bool($awyimywmcyoukaao) || "\162\145\x70\x6c\x61\143\x65" === $awyimywmcyoukaao) { goto amgsicqmemeuuaem; } $ogomymegcoacqisg = $ugmuiugkaygmsagq->_css_href($awyimywmcyoukaao, $cksswamugeeeawgw, "{$eueuqacmukymcyya}\55\x72\x74\154"); goto gwksywaoeowkesei; amgsicqmemeuuaem: $scqcgogsiaiksiiq = ManipulateArray::get($egsumesakcaaukem->extra, "\x73\x75\146\146\151\170", ''); $ogomymegcoacqisg = str_replace("{$scqcgogsiaiksiiq}\56\x63\x73\x73", "\x2d\162\x74\x6c{$scqcgogsiaiksiiq}\56\x63\x73\163", $ugmuiugkaygmsagq->_css_href($ogomymegcoacqisg, $cksswamugeeeawgw, "{$eueuqacmukymcyya}\55\162\x74\154")); gwksywaoeowkesei: sgkwaiuukkaqyqki: emagssesowicacoa: return $this->ukacwyckseuqsqgc($ogomymegcoacqisg); } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem) { $ewgwqamkygiqaawc = $this->msgwwgomkkomssew($ewgwqamkygiqaawc, $egsumesakcaaukem); return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem); } public function msgwwgomkkomssew($ewgwqamkygiqaawc, $egsumesakcaaukem) { $couygeouymagssgw = untrailingslashit(Manipulate::cmaecekuqkwmemms("\x41\x42\x53\x50\x41\124\110")); $cgmkimaosyyuqeyg = site_url(); if (!($couygeouymagssgw && $egsumesakcaaukem instanceof _WP_Dependency)) { goto awaaowoqskgokwiy; } $geagigaoacaqqcwc = $couygeouymagssgw . trailingslashit(dirname(str_replace($cgmkimaosyyuqeyg, '', $egsumesakcaaukem->src))); $ksiyqouuaoymsycg = []; $gwgucoaaqcwwciqq = ManipulateArray::get(ManipulateFormat::gooqqcmsyseiaikc($cgmkimaosyyuqeyg), "\150\157\163\164"); preg_match_all(self::emmwouuqieykokuw, $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); if (!(is_array($meyiiwcswqmuggyg) && $meyiiwcswqmuggyg)) { goto acmgueaoaaweiqqu; } foreach ($meyiiwcswqmuggyg[1] as $wsiwwymgaoqsyagc) { $eeamcawaiqocomwy = trim($wsiwwymgaoqsyagc, "\40\11\12\xd\x0\xb\x22\x27"); $qoqyywgqmicskwsc = realpath("{$geagigaoacaqqcwc}{$eeamcawaiqocomwy}"); if (!$qoqyywgqmicskwsc) { goto uugwoygiyecgymgw; } $ksiyqouuaoymsycg[$wsiwwymgaoqsyagc] = "\x2f\57" . str_replace($couygeouymagssgw, $gwgucoaaqcwwciqq, $qoqyywgqmicskwsc); uugwoygiyecgymgw: gusgywuaimwooawc: } cauqmacqkssciwyq: acmgueaoaaweiqqu: $ewgwqamkygiqaawc = $this->qgsuqwiisyaoycya($ewgwqamkygiqaawc, $ksiyqouuaoymsycg); awaaowoqskgokwiy: return $ewgwqamkygiqaawc; } public function qgsuqwiisyaoycya($ewgwqamkygiqaawc, $qqueccegigsqmmmg = []) { if (!$qqueccegigsqmmmg) { goto uqiekawkwcegsumy; } $yygmoeguaqyumuui = array_map("\163\164\x72\x6c\145\156", array_keys($qqueccegigsqmmmg)); array_multisort($yygmoeguaqyumuui, SORT_DESC, $qqueccegigsqmmmg); $ewgwqamkygiqaawc = str_replace(array_keys($qqueccegigsqmmmg), array_values($qqueccegigsqmmmg), $ewgwqamkygiqaawc); uqiekawkwcegsumy: return $ewgwqamkygiqaawc; } }
