<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6681a8b6b9a73             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\ImageDimension; use DOMElement; use Exception; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; class Engine extends BufferEngine { public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, "\x63\141\x6b\x6b\x79\161\x69\x79\x77\143\163\x6f\151\x6b\x77\x73"]); } public function cakkyqiywcsoikws($moooemyaqewumiay) { $yuumukkaswwoywya = "\x69\155\147\72\156\x6f\x74\x28\x5b\167\x69\144\164\x68\x5d\x29\x3a\156\157\x74\50\133\x68\145\x69\x67\x68\x74\135\x29"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto oeamoqweiueaueay; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!(!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\144\141\164\x61\x2d\x6c\141\x7a\171\55\x6f\x72\x69\147\x69\156\141\154") && !$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\144\141\x74\x61\55\156\157\55\x69\x6d\141\147\145\55\x64\151\155\145\156\x73\x69\x6f\156\x73"))) { goto icumkkykaoqycqqu; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\162\x63"); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($egsumesakcaaukem); try { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->aoaeiwswyagmesku($egsumesakcaaukem)) { goto eouwacqiommmeaqc; } if (!ini_get("\141\x6c\x6c\157\167\x5f\165\x72\x6c\137\146\157\x70\145\156")) { goto igmmqwyawcuuckkq; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\163\x63\x68\x65\155\145"] . "\72\x2f\57" . $yiasugywggckywoa["\x68\x6f\x73\164"] . $yiasugywggckywoa["\x70\141\x74\x68"]); igmmqwyawcuuckkq: goto sqwuqegeiisoiiuq; eouwacqiommmeaqc: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa["\x70\141\x74\x68"]; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto wiwoiyoakywqyaiy; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); wiwoiyoakywqyaiy: sqwuqegeiisoiiuq: } catch (Exception $wgaoewqkwgomoaai) { } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto syusgosewwkoagoq; } if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\163\164\x79\x6c\145")) { goto egesuwkqkmaigaoe; } $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x74\x79\154\x65"); if (!preg_match_all("\x2f\x28\167\x69\x64\x74\x68\x29\x3a\134\163\52\x28\x5c\144\53\51\160\170\73\174\50\150\145\x69\147\150\164\51\x3a\134\x73\52\50\134\x64\53\x29\x70\170\73\x2f", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto ugogoekeckgcmuaw; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; ykqsuiyyosyeyscc: } uscokkmquayiukag: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, self::qomookamaskuoswk, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, self::sogmkkcwuamuqegw, 0); ugogoekeckgcmuaw: egesuwkqkmaigaoe: goto mcqucouuiuoagqwc; syusgosewwkoagoq: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 1); mcqucouuiuoagqwc: if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto eweaaismksecwagy; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::qomookamaskuoswk, $qeswwaqqsyymqawg); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::sogmkkcwuamuqegw, $cswemwoyesycwkuq); eweaaismksecwagy: icumkkykaoqycqqu: return $ymyisaeksssueeik; }, false, true); oeamoqweiueaueay: return $moooemyaqewumiay; } }
