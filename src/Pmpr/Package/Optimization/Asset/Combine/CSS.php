<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61eec5407a60a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Combine; use _WP_Dependency; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Optimization\Manipulate\Manipulate; use WP_Styles; class CSS extends Combiner { const emmwouuqieykokuw = "\57\165\x72\154\134\163\x2a\134\x28\x5c\x73\x2a\50\77\41\133\42\x27\135\x3f\144\141\164\x61\72\x29\x28\x3f\x21\x5b\47\174\x5c\42\135\77\x5b\x5c\43\x7c\134\45\x7c\x5d\x29\x28\133\x5e\x29\135\53\51\x5c\163\x2a\x5c\51\50\x5b\x5e\x3b\x7d\54\134\x73\x5d\x2a\51\57\151"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\160\x5f\x70\x72\151\156\x74\x5f\163\164\171\154\x65\163", [$this, "\161\x71\143\171\153\x61\x65\x69\157\151\x77\x77\141\x71\x6f\x73"], 0, 999); parent::wigskegsqequoeks(); } public function qqcykaeioiwwaqos() { global $wp_styles; $this->gaiaksuyqkeeiqgo($wp_styles); } public function mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq) { $ogomymegcoacqisg = $egsumesakcaaukem->src; if (!$ugmuiugkaygmsagq instanceof WP_Styles) { goto qmoocweoekqueuyy; } $eueuqacmukymcyya = $egsumesakcaaukem->handle; $cksswamugeeeawgw = $egsumesakcaaukem->ver; $awyimywmcyoukaao = ManipulateArray::get($egsumesakcaaukem->extra, "\x72\164\154"); $ogomymegcoacqisg = $ugmuiugkaygmsagq->_css_href($ogomymegcoacqisg, $cksswamugeeeawgw, $eueuqacmukymcyya); if (!("\162\x74\x6c" === $ugmuiugkaygmsagq->text_direction && $awyimywmcyoukaao)) { goto mqiiqkuaoekeuswo; } if (is_bool($awyimywmcyoukaao) || "\162\145\x70\154\x61\x63\x65" === $awyimywmcyoukaao) { goto eckcqesiokgwkkiw; } $ogomymegcoacqisg = $ugmuiugkaygmsagq->_css_href($awyimywmcyoukaao, $cksswamugeeeawgw, "{$eueuqacmukymcyya}\x2d\x72\x74\154"); goto ecouwqosmoyyqmkw; eckcqesiokgwkkiw: $scqcgogsiaiksiiq = ManipulateArray::get($egsumesakcaaukem->extra, "\x73\165\x66\146\x69\x78", ''); $ogomymegcoacqisg = str_replace("{$scqcgogsiaiksiiq}\56\x63\x73\163", "\55\x72\x74\154{$scqcgogsiaiksiiq}\56\x63\x73\x73", $ugmuiugkaygmsagq->_css_href($ogomymegcoacqisg, $cksswamugeeeawgw, "{$eueuqacmukymcyya}\55\x72\x74\154")); ecouwqosmoyyqmkw: mqiiqkuaoekeuswo: qmoocweoekqueuyy: return $this->ukacwyckseuqsqgc($ogomymegcoacqisg); } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem) { $ewgwqamkygiqaawc = $this->msgwwgomkkomssew($ewgwqamkygiqaawc, $egsumesakcaaukem); return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem); } public function msgwwgomkkomssew($ewgwqamkygiqaawc, $egsumesakcaaukem) { $couygeouymagssgw = untrailingslashit(Manipulate::cmaecekuqkwmemms("\x41\102\123\x50\101\124\110")); $cgmkimaosyyuqeyg = site_url(); if (!($couygeouymagssgw && $egsumesakcaaukem instanceof _WP_Dependency)) { goto wmumywgyyeagqoeq; } $geagigaoacaqqcwc = $couygeouymagssgw . trailingslashit(dirname(str_replace($cgmkimaosyyuqeyg, '', $egsumesakcaaukem->src))); $ksiyqouuaoymsycg = []; $gwgucoaaqcwwciqq = ManipulateArray::get(ManipulateFormat::gooqqcmsyseiaikc($cgmkimaosyyuqeyg), "\x68\x6f\x73\164"); preg_match_all(self::emmwouuqieykokuw, $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); if (!(is_array($meyiiwcswqmuggyg) && $meyiiwcswqmuggyg)) { goto mmgmqogugasaqkgg; } foreach ($meyiiwcswqmuggyg[1] as $wsiwwymgaoqsyagc) { $eeamcawaiqocomwy = trim($wsiwwymgaoqsyagc, "\x20\11\12\15\x0\13\x22\47"); $qoqyywgqmicskwsc = realpath("{$geagigaoacaqqcwc}{$eeamcawaiqocomwy}"); if (!$qoqyywgqmicskwsc) { goto quyogmwugsyoaaiu; } $ksiyqouuaoymsycg[$wsiwwymgaoqsyagc] = "\57\57" . str_replace($couygeouymagssgw, $gwgucoaaqcwwciqq, $qoqyywgqmicskwsc); quyogmwugsyoaaiu: skuqigsokaguscas: } sgiwoiscywusgmmm: mmgmqogugasaqkgg: $ewgwqamkygiqaawc = $this->qgsuqwiisyaoycya($ewgwqamkygiqaawc, $ksiyqouuaoymsycg); wmumywgyyeagqoeq: return $ewgwqamkygiqaawc; } public function qgsuqwiisyaoycya($ewgwqamkygiqaawc, $qqueccegigsqmmmg = []) { if (!$qqueccegigsqmmmg) { goto smcguieygyqcaqgs; } $yygmoeguaqyumuui = array_map("\163\164\162\154\x65\156", array_keys($qqueccegigsqmmmg)); array_multisort($yygmoeguaqyumuui, SORT_DESC, $qqueccegigsqmmmg); $ewgwqamkygiqaawc = str_replace(array_keys($qqueccegigsqmmmg), array_values($qqueccegigsqmmmg), $ewgwqamkygiqaawc); smcguieygyqcaqgs: return $ewgwqamkygiqaawc; } }
