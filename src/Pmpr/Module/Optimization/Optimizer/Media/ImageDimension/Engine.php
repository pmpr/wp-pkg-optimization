<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b4181e072c1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\ImageDimension; use DOMElement; use Exception; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; class Engine extends BufferEngine { public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, "\143\141\153\153\x79\161\x69\x79\x77\143\x73\157\x69\153\167\x73"]); } public function cakkyqiywcsoikws($moooemyaqewumiay) { $yuumukkaswwoywya = "\151\x6d\147\x3a\156\157\164\x28\133\x77\151\144\164\150\x5d\x29\72\x6e\157\164\x28\x5b\150\x65\x69\147\x68\164\135\x29"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto kwyimqumkuuyaiku; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!(!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\141\x74\x61\x2d\154\x61\x7a\x79\x2d\157\x72\151\x67\x69\156\x61\154") && !$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\141\164\141\x2d\x6e\157\55\151\155\x61\x67\x65\x2d\x64\151\155\x65\x6e\163\151\x6f\x6e\163"))) { goto mqimkwickkgqqeoi; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\x72\x63"); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($egsumesakcaaukem); try { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->aoaeiwswyagmesku($egsumesakcaaukem)) { goto csieaismmmocyacu; } if (!ini_get("\x61\154\x6c\x6f\167\137\165\162\x6c\137\x66\x6f\160\145\156")) { goto omykokikgocoikec; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\163\143\x68\x65\x6d\x65"] . "\72\x2f\57" . $yiasugywggckywoa["\x68\x6f\x73\x74"] . $yiasugywggckywoa["\160\141\x74\x68"]); omykokikgocoikec: goto aquqkiggamaoegoo; csieaismmmocyacu: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa["\160\141\x74\x68"]; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto suuskagowwgsouqw; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); suuskagowwgsouqw: aquqkiggamaoegoo: } catch (Exception $wgaoewqkwgomoaai) { } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto owuuuiekkaeoeacq; } if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x73\x74\171\x6c\x65")) { goto koiscokkkaimiecq; } $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x74\171\x6c\145"); if (!preg_match_all("\x2f\50\x77\151\x64\164\150\x29\x3a\134\x73\x2a\x28\x5c\144\x2b\51\160\170\73\174\x28\x68\x65\151\x67\x68\x74\51\72\134\x73\x2a\50\x5c\x64\53\x29\160\170\x3b\x2f", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto cquecqekuucwoumw; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; agemwookwseyycqo: } mykiyqcqiegkiqys: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, self::qomookamaskuoswk, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, self::sogmkkcwuamuqegw, 0); cquecqekuucwoumw: koiscokkkaimiecq: goto saauykgakaeiyoua; owuuuiekkaeoeacq: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 1); saauykgakaeiyoua: if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto qwemkcoaseywkuuc; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::qomookamaskuoswk, $qeswwaqqsyymqawg); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::sogmkkcwuamuqegw, $cswemwoyesycwkuq); qwemkcoaseywkuuc: mqimkwickkgqqeoi: return $ymyisaeksssueeik; }, false, true); kwyimqumkuuyaiku: return $moooemyaqewumiay; } }
