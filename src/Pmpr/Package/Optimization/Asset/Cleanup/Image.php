<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c0324e0f3b2             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Cleanup; use DOMElement; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Optimization\Asset\Setting; class Image extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\x70\137\150\145\141\144", [$this, "\x6b\143\157\x6b\155\163\155\x6b\x75\153\x6b\161\151\155\x69\x71"])->qcsmikeggeemccuu("\x61\144\155\x69\x6e\x5f\150\145\x61\144", [$this, "\x6b\x63\x6f\x6b\155\163\155\x6b\165\x6b\153\x71\151\155\151\x71"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\x74\137\142\165\x66\x66\145\x72\137\160\x72\157\x63\145\x73\x73"), [$this, "\171\167\155\x6b\153\x69\x6f\157\141\x6d\x75\151\167\147\x6f\x69"]); parent::kgquecmsgcouyaya(); } public function kcokmsmkukkqimiq() { if (!(!DecoratorOption::get("\163\151\164\x65\x5f\x69\x63\157\156", false) && $this->weysguygiseoukqw(Setting::ADD_BLANK_FAVICON))) { goto wycmcqaauqkgegau; } ManipulateHTML::awwqwouuoioauoaw("\x6c\151\x6e\153", ["\150\162\145\146" => "\144\141\164\x61\72\151\x6d\x61\x67\x65\x2f\170\55\151\x63\157\x6e\x3b\142\x61\163\x65\x36\x34\x2c\151\126\x42\x4f\122\x77\60\113\107\147\x6f\101\101\101\101\x4e\x53\x55\150\x45\x55\147\101\x41\101\x42\x41\x41\x41\x41\101\x51\x45\101\131\101\x41\x41\102\x50\131\x79\x4d\151\101\x41\x41\101\x42\155\112\114\x52\60\x54\x2f\x2f\57\57\x2f\x2f\57\x38\x4a\127\120\x66\x63\x41\x41\x41\x41\103\x58\102\x49\x57\130\x4d\x41\101\x41\102\x49\101\101\x41\101\x53\x41\102\107\x79\127\x73\53\x41\101\101\x41\x46\60\x6c\x45\121\126\x52\111\170\62\116\147\107\x41\x57\152\131\102\x53\x4d\x67\154\x45\167\103\153\x62\102\x53\x41\143\x41\x43\x42\101\101\101\145\x61\122\x39\143\111\x41\101\x41\101\x41\x53\x55\x56\x4f\x52\x4b\x35\x43\x59\111\111\75", "\x72\145\154" => "\151\143\157\156", "\164\171\160\x65" => "\x69\x6d\x61\x67\x65\57\x78\55\x69\x63\157\x6e"]); wycmcqaauqkgegau: } public function ywmkkiooamuiwgoi(?string $moooemyaqewumiay) : ?string { if (!$this->weysguygiseoukqw(Setting::SPECIFY_DIMENSIONS)) { goto owaimkmgemoqewmm; } $yuumukkaswwoywya = "\x69\x6d\x67\72\x6e\157\164\50\133\167\151\144\164\x68\135\x29\72\156\x6f\164\x28\133\150\x65\151\x67\x68\164\135\51"; if (!DOMCrawler::umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto eoeiaccouaymakgm; } $moooemyaqewumiay = DOMCrawler::qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik, $kasgukgceywckyou) { if (!(!DOMCrawler::owgokkumqicyuyiy($ymyisaeksssueeik, "\144\141\x74\x61\x2d\x6c\141\x7a\171\55\x6f\x72\x69\x67\151\x6e\x61\x6c") && !DOMCrawler::owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\141\164\141\x2d\x6e\157\55\151\155\141\x67\x65\55\144\x69\155\145\156\163\x69\x6f\156\x73"))) { goto yggciikgkomgeqsc; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\162\x63"); $yiasugywggckywoa = wp_parse_url($egsumesakcaaukem); if (!$this->aoaeiwswyagmesku($egsumesakcaaukem)) { goto wcekgciqeggiiwgk; } if (!(ini_get("\x61\154\x6c\x6f\167\x5f\x75\x72\x6c\x5f\146\157\160\145\156") && $this->weysguygiseoukqw(Setting::IMAGE_EXTERNAL_SPECIFY_DIMENSIONS))) { goto iyceygqsmokgmams; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\x73\x63\x68\x65\x6d\x65"] . "\72\x2f\x2f" . $yiasugywggckywoa["\150\157\x73\164"] . $yiasugywggckywoa["\x70\x61\164\x68"]); iyceygqsmokgmams: goto gkwuewqmqeswqukg; wcekgciqeggiiwgk: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa["\160\x61\x74\x68"]; if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto qcweoyigoaeacsow; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); qcweoyigoaeacsow: gkwuewqmqeswqukg: $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto uamuuwkyuqomqyuy; } if (!DOMCrawler::owgokkumqicyuyiy($ymyisaeksssueeik, "\163\164\x79\154\x65")) { goto kkmwwqyesmkescyg; } $kswaimykcacqyaay = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x74\171\154\x65"); if (!preg_match_all("\57\x28\x77\151\x64\164\150\51\72\x5c\x73\x2a\x28\x5c\x64\53\51\x70\x78\x3b\x7c\50\150\145\x69\147\150\x74\51\x3a\x5c\163\52\50\134\x64\53\x29\160\x78\x3b\57", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto yeiokcoikcysyimu; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = ManipulateArray::get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = ManipulateArray::get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; uqcwyyiykmwygeau: } sagemooicmgceiug: $qeswwaqqsyymqawg = ManipulateArray::get($meyiiwcswqmuggyg, "\167\x69\144\164\150", 0); $cswemwoyesycwkuq = ManipulateArray::get($meyiiwcswqmuggyg, "\x68\145\x69\x67\150\164", 0); yeiokcoikcysyimu: kkmwwqyesmkescyg: goto ekwuycsiuqwycqea; uamuuwkyuqomqyuy: $qeswwaqqsyymqawg = ManipulateArray::get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = ManipulateArray::get($wyicceigkekkkwgs, 1); ekwuycsiuqwycqea: if ($qeswwaqqsyymqawg && $cswemwoyesycwkuq) { goto iyaugygcsmqqqkmo; } $this->oaumimwssciwumys("\143\x61\x6e\x20\x6e\x6f\x74\40\x66\157\165\156\x64\40\167\x69\x64\164\150\x20\x61\x6e\x64\40\x68\x65\x69\147\150\x74\x20\x74\157\x20\x73\x70\145\143\151\146\x79\40\x69\156\x20\x69\x6d\x61\x67\x65\x2e"); goto cieumoqayigkoocy; iyaugygcsmqqqkmo: DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\x77\x69\144\x74\150", $qeswwaqqsyymqawg); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\150\145\151\x67\x68\164", $cswemwoyesycwkuq); cieumoqayigkoocy: yggciikgkomgeqsc: return $ymyisaeksssueeik; }, false, true); eoeiaccouaymakgm: owaimkmgemoqewmm: return $moooemyaqewumiay; } }
