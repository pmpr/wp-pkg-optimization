<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d2182256c51             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\ImageDimension; use DOMElement; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; class Engine extends BufferEngine { public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, "\143\x61\153\x6b\x79\161\151\x79\x77\143\x73\157\x69\x6b\x77\x73"]); } public function cakkyqiywcsoikws($moooemyaqewumiay) { $yuumukkaswwoywya = "\x69\x6d\x67\x3a\x6e\157\x74\50\x5b\x77\x69\144\x74\150\135\51\x3a\x6e\x6f\x74\x28\133\150\145\x69\x67\150\x74\135\51"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto ssagcgqaucssyego; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!(!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\144\141\x74\x61\55\154\141\172\171\x2d\157\162\151\x67\151\x6e\x61\x6c") && !$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\144\141\164\141\55\156\x6f\55\x69\x6d\141\147\145\x2d\x64\x69\155\x65\156\x73\x69\157\x6e\x73"))) { goto sycougcyeqmeiagk; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\162\143"); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($egsumesakcaaukem); try { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->aoaeiwswyagmesku($egsumesakcaaukem)) { goto qwisiamkmkkwucyo; } if (!ini_get("\141\154\x6c\x6f\x77\137\x75\x72\154\137\x66\x6f\160\145\156")) { goto sgocecweikecwwgq; } $mkomwsiykqigmqca = $yiasugywggckywoa[Constants::okmiyqowuqogaiiy]; if (!in_array(pathinfo($mkomwsiykqigmqca, PATHINFO_EXTENSION), ["\x70\156\x67", "\x77\145\142\x70", "\147\151\146", "\163\166\x67", "\152\160\145\147", "\x6a\160\147"], true)) { goto yiceawuuiusakwiq; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\163\x63\150\145\155\x65"] . "\72\x2f\57" . $yiasugywggckywoa[Constants::ckiaowgkqoewoseo] . $mkomwsiykqigmqca); yiceawuuiusakwiq: sgocecweikecwwgq: goto yqcusaeysomccaok; qwisiamkmkkwucyo: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa[Constants::okmiyqowuqogaiiy]; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto qeuyekusasqmcqms; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); qeuyekusasqmcqms: yqcusaeysomccaok: } catch (Exception $wgaoewqkwgomoaai) { } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto suqckoccuyeeymww; } if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\163\164\171\154\145")) { goto yoqsigmoyaaceqky; } $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x74\x79\154\x65"); if (!preg_match_all("\57\x28\x77\151\x64\x74\x68\x29\x3a\134\x73\x2a\x28\x5c\x64\53\x29\160\x78\x3b\x7c\x28\150\145\x69\x67\150\164\51\x3a\x5c\x73\52\50\134\144\53\51\x70\x78\73\x2f", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto yksywwikmeksikqc; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; masakmomqmeocqqg: } iwkckkeimmeoquyq: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, Constants::qomookamaskuoswk, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, Constants::sogmkkcwuamuqegw, 0); yksywwikmeksikqc: yoqsigmoyaaceqky: goto giugwaeuwaomossq; suqckoccuyeeymww: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 1); giugwaeuwaomossq: if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto acgqaeakoyasgkku; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::qomookamaskuoswk, $qeswwaqqsyymqawg); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::sogmkkcwuamuqegw, $cswemwoyesycwkuq); acgqaeakoyasgkku: sycougcyeqmeiagk: return $ymyisaeksssueeik; }, false); ssagcgqaucssyego: return $moooemyaqewumiay; } }
