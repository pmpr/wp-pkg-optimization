<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa77c6c5682             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Extension\Plugin\Slider\SliderRevolution\Engine; use Pmpr\Common\Foundation\Interfaces\Constants; class SR7 extends Common { protected $useMultiple = ["\154\150" => "\x72\x6f\165\156\144", "\x70\x6f\x73\x2e\170" => "\x72\x6f\165\x6e\144", "\160\x6f\163\56\x79" => "\162\157\x75\156\144", "\163\151\172\x65\x2e\167" => "\x72\157\165\156\x64", "\163\x69\x7a\145\x2e\150" => "\162\157\x75\156\144", "\146\157\156\164\56\x6c\163" => null, "\146\157\x6e\164\x2e\163\151\172\145" => "\x72\x6f\165\x6e\144"]; protected array $useSizes = []; protected int $level = 4; protected function qiccuiwooiquycsg() { $this->type = "\x73\x72\x37\55\155\x6f\144\x75\154\145"; $eyagkkkqkwcuygso = $this->slider->get_params(); $this->useSizes = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\x75\123\x69\x7a\x65", null, []); $this->level = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\x6c\145\x76\x65\x6c", null, 4); } protected function tsioiooeoyeieqye(array $weyumiemecumqwiy) : string { return $weyumiemecumqwiy[Constants::gouqcwikiiygyasc] ?? ''; } protected function qooeaookuemoqecm($eqgoocgaqwqcimie, ?string $uusmaiomayssaecw = null) { if (!($uusmaiomayssaecw !== null && is_array($eqgoocgaqwqcimie) && isset($eqgoocgaqwqcimie[$uusmaiomayssaecw]))) { goto gmwcqkgsaesmsuea; } $eqgoocgaqwqcimie = $eqgoocgaqwqcimie[$uusmaiomayssaecw]; gmwcqkgsaesmsuea: return $eqgoocgaqwqcimie; } public function euisqgeeigoksqui($eqgoocgaqwqcimie, $yqyousioqsoaouig) : bool { return $this->useSizes[$yqyousioqsoaouig] && !empty($eqgoocgaqwqcimie[$yqyousioqsoaouig]) && $this->qooeaookuemoqecm($eqgoocgaqwqcimie, $yqyousioqsoaouig) !== "\x23\141"; } protected function uaskqakcsowgmccg($momcykaoccoymeig) { return $this->breakpoints[$momcykaoccoymeig + 1]; } protected function wgogsacggwigyuee($momcykaoccoymeig) { return $this->breakpoints[$momcykaoccoymeig - 1]; } protected function ywogaocmueoimkuq($weyumiemecumqwiy) : bool { return "\x73\154\151\144\x65\x62\x67" === $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\163\165\x62\x74\171\x70\145"); } protected function gkyiccimoqwmoack($eyagkkkqkwcuygso, $yqyousioqsoaouig) : array { $eygasqqkgouqiuqk = []; $gyquugwkmmgwmkki = ["\155\141\x72\x67\151\156" => "\x61\165\x74\157", "\144\151\163\160\x6c\x61\x79" => "\x62\154\157\x63\153", "\160\157\x73\151\x74\151\157\156" => "\162\145\154\141\x74\151\166\x65"]; switch ($eyagkkkqkwcuygso[Constants::squoamkioomemiyi] ?? '') { case "\163\x74\x61\156\x64\141\x72\144": $qeswwaqqsyymqawg = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\163\151\172\x65\x2e\167\x69\144\x74\150", $yqyousioqsoaouig, "\141\165\164\x6f"); $cswemwoyesycwkuq = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\x73\x69\172\x65\x2e\x68\x65\x69\147\x68\x74", $yqyousioqsoaouig, "\x61\x75\x74\157"); $aqiccywoiqiskwaw = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\x73\x69\172\145\56\x66\x75\154\x6c\127\151\144\x74\150", null, true); $kisgwkkagogawumc = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\163\x69\x7a\145\x2e\146\165\x6c\x6c\x48\145\x69\147\x68\x74"); $eygasqqkgouqiuqk["\x6d\x61\170\x2d\x68\145\151\x67\x68\164"] = $cswemwoyesycwkuq; if ($kisgwkkagogawumc) { goto ysicqksgomomkoek; } $cwugisscoiasuuyg = $cswemwoyesycwkuq / max(1, $qeswwaqqsyymqawg); if (!($cwugisscoiasuuyg < $cswemwoyesycwkuq)) { goto gscckcagyggagway; } $cswemwoyesycwkuq = "\143\x61\x6c\143\x28\x31\x30\x30\x76\167\x20\52\40{$cwugisscoiasuuyg}\51"; gscckcagyggagway: ysicqksgomomkoek: $eygasqqkgouqiuqk["\150\145\x69\x67\x68\x74"] = $cswemwoyesycwkuq; $gyquugwkmmgwmkki["\x68\x65\151\x67\150\x74"] = "\x31\60\60\45"; $eygasqqkgouqiuqk["\155\x61\x72\x67\x69\156"] = "\x61\x75\x74\157"; $eygasqqkgouqiuqk["\144\x69\x73\x70\x6c\141\x79"] = "\x62\154\157\x63\x6b"; $eygasqqkgouqiuqk["\160\157\x73\x69\164\x69\157\156"] = "\141\142\x73\x6f\x6c\165\x74\145"; $eygasqqkgouqiuqk["\x6f\x76\x65\162\146\x6c\x6f\x77"] = "\x68\x69\x64\144\x65\x6e"; $gyquugwkmmgwmkki["\167\151\x64\164\150"] = $qeswwaqqsyymqawg; if (!$aqiccywoiqiskwaw) { goto ocgsiomyyckcausy; } $eygasqqkgouqiuqk["\x77\151\144\164\150"] = "\x31\x30\60\45"; $gyquugwkmmgwmkki["\x6d\141\x78\x2d\x77\x69\144\164\150"] = "\x31\60\x30\45"; goto ccegsywqocccgegu; ocgsiomyyckcausy: $eygasqqkgouqiuqk["\x77\151\144\164\x68"] = $qeswwaqqsyymqawg; $eygasqqkgouqiuqk["\x6d\x61\x78\x2d\x77\x69\144\x74\150"] = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\x73\x69\172\x65\x2e\x6d\141\170\x57\x69\144\164\150", null, 0); ccegsywqocccgegu: $eygasqqkgouqiuqk["\x62\x61\x63\153\x67\162\x6f\165\156\x64"] = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\x62\147\x2e\143\157\154\x6f\162\x2e\163\x74\162\151\x6e\x67", null, "\164\162\141\156\163\160\x61\x72\x65\x6e\164"); goto cgkaoiyoqwmkaqck; } suokacgwamyumagy: cgkaoiyoqwmkaqck: return [$eygasqqkgouqiuqk, $gyquugwkmmgwmkki]; } protected function ecsmecuykayuiqas($weyumiemecumqwiy, $yqyousioqsoaouig) : array { $egkakcquemweqoum = []; $sqeykgyoooqysmca = $weyumiemecumqwiy[Constants::squoamkioomemiyi]; $ueamwqwegewocqgc = $weyumiemecumqwiy["\163\165\142\x74\171\160\x65"] ?? ''; switch ($sqeykgyoooqysmca) { case Constants::mkousmkiawwousws: case Constants::qwqqkkoggeeyeogk: case Constants::TEXT: $qeswwaqqsyymqawg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x73\x69\x7a\145\56\167", $yqyousioqsoaouig, "\141\x75\x74\x6f"); $cswemwoyesycwkuq = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x73\x69\x7a\x65\56\x68", $yqyousioqsoaouig, "\x61\165\164\x6f"); $egkakcquemweqoum["\155\151\x6e\55\x77\x69\144\x74\150"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x73\151\172\x65\x2e\155\x69\156\127", $yqyousioqsoaouig); $egkakcquemweqoum["\x6d\151\156\55\x68\x65\151\147\x68\164"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x73\x69\172\145\56\155\151\156\x48", $yqyousioqsoaouig); switch ($sqeykgyoooqysmca) { case Constants::qwqqkkoggeeyeogk: if (!isset($weyumiemecumqwiy["\x62\147"]["\x69\155\141\x67\x65"])) { goto okeecmwsuoikguuo; } $egkakcquemweqoum["\164\157\160"] = "\x30"; $egkakcquemweqoum["\142\141\143\153\147\x72\x6f\x75\x6e\144\x2d\151\x6d\141\147\x65"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\142\147\56\151\x6d\141\x67\145\56\x73\x72\x63"); $oiegiwogmwmawkeo = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\142\x67\x2e\x69\155\141\x67\145\56\x73\151\x7a\145"); $egkakcquemweqoum["\x62\x61\143\153\x67\162\157\165\x6e\x64\x2d\163\x69\x7a\145"] = $oiegiwogmwmawkeo === "\x70\145\162\143\x65\156\x74\141\x67\x65" ? $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x62\x67\56\151\x6d\141\147\x65\x2e\x73\151\172\145\x56\141\154") : $oiegiwogmwmawkeo; $egkakcquemweqoum["\142\141\143\153\x67\x72\157\x75\x6e\144\x2d\x72\145\160\x65\141\164"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\142\x67\x2e\151\155\141\147\145\x2e\x72\145\160\x65\x61\164", null, "\x6e\x6f\x2d\162\145\x70\x65\x61\x74"); $iegmsyuiekaayqqy = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\142\x67\x2e\x69\x6d\x61\147\x65\56\x70\x6f\x73\x2e\x78", null, "\60"); $ymsweociooeskgwg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\142\x67\56\x69\x6d\141\x67\x65\56\x70\157\163\x2e\x79", null, "\x30"); $egkakcquemweqoum["\142\141\x63\153\x67\162\x6f\x75\x6e\x64\55\x70\157\163\x69\164\151\x6f\x6e"] = "{$iegmsyuiekaayqqy}\40{$ymsweociooeskgwg}"; okeecmwsuoikguuo: if (!(!$qeswwaqqsyymqawg || $qeswwaqqsyymqawg === "\x61\165\164\157")) { goto iwycgkausoseqmwu; } $qeswwaqqsyymqawg = "\x31\x30\x30\45"; iwycgkausoseqmwu: if (!(!$cswemwoyesycwkuq || $cswemwoyesycwkuq === "\x61\x75\x74\x6f")) { goto aeoiiewygoiwuiii; } $cswemwoyesycwkuq = "\61\x30\60\x25"; aeoiiewygoiwuiii: $qoiwmokisgikggia = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x62\x67\56\143\x6f\x6c\x6f\x72\56\x73\164\x72\151\x6e\x67"); if (!$qoiwmokisgikggia) { goto cwoaockwkoukuwae; } $egkakcquemweqoum["\142\x61\x63\153\147\x72\x6f\x75\x6e\x64"] = $qoiwmokisgikggia; cwoaockwkoukuwae: goto uwswkegomekswkus; case Constants::mkousmkiawwousws: $egkakcquemweqoum["\x62\141\143\x6b\x67\162\x6f\165\x6e\144\55\163\151\x7a\145"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x63\157\156\164\145\x6e\x74\56\x73\151\x7a\x65", null, "\x63\157\x6e\164\141\x69\x6e"); $egkakcquemweqoum["\x62\141\143\153\147\162\157\x75\156\x64\55\x72\145\160\145\141\x74"] = "\x6e\x6f\x2d\x72\x65\x70\x65\x61\164"; $egkakcquemweqoum["\142\141\143\x6b\x67\162\x6f\x75\x6e\x64\x2d\x70\157\x73\x69\164\151\157\x6e"] = "\65\x30\45\x20\65\60\45"; $egkakcquemweqoum["\142\x61\x63\x6b\x67\162\x6f\165\156\144\55\x69\155\141\147\x65"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\143\x6f\x6e\x74\145\x6e\164\56\163\162\x63", null, ''); goto uwswkegomekswkus; case Constants::TEXT: case Constants::gqmuoaykeqeuoukm: $eswoackiciccgasc = $sqeykgyoooqysmca !== Constants::gqmuoaykeqeuoukm && $ueamwqwegewocqgc !== Constants::gqmuoaykeqeuoukm; $qeswwaqqsyymqawg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\163\151\x7a\x65\x2e\167", $yqyousioqsoaouig, "\141\165\x74\157", $eswoackiciccgasc); $cswemwoyesycwkuq = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x73\151\x7a\145\56\150", $yqyousioqsoaouig, "\x61\x75\x74\x6f", $eswoackiciccgasc); $egkakcquemweqoum["\x62\x61\x63\x6b\147\162\x6f\x75\x6e\144"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x62\x67\56\143\x6f\154\x6f\x72\x2e\163\x74\x72\151\156\147", null, "\x74\162\141\x6e\x73\160\141\162\x65\156\164"); $qgssmoqemoeqyuua = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x77\163", $yqyousioqsoaouig); if (!($qeswwaqqsyymqawg === "\141\165\x74\x6f")) { goto ksyukmeagigokcgi; } $qgssmoqemoeqyuua = "\156\157\167\162\141\x70"; ksyukmeagigokcgi: if (!$qgssmoqemoeqyuua) { goto eicuywagooikuusg; } $egkakcquemweqoum["\x77\x68\x69\164\145\55\163\x70\141\143\145"] = $qgssmoqemoeqyuua; eicuywagooikuusg: $wwqyeeagywueicqa = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x63\x6f\x6e\x74\145\156\164\56\144\x65\x63\x6f", null, "\156\x6f\156\145"); if (!($wwqyeeagywueicqa !== "\x6e\x6f\x6e\143\x65")) { goto iquykqikookaokgq; } $egkakcquemweqoum["\x74\145\170\x74\x2d\x64\x65\143\157\x72\141\164\x69\x6f\x6e"] = $wwqyeeagywueicqa; iquykqikookaokgq: $miaumeemcuuauoyk = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\143\x6f\156\x74\145\156\164\56\x74\x72\x61\x6e\x73", null, "\x6e\x6f\x6e\145"); if (!($miaumeemcuuauoyk !== "\156\157\156\143\x65")) { goto ceesgeawumeqkcic; } $egkakcquemweqoum["\164\145\x78\x74\55\x74\162\x61\x6e\163\x66\157\162\155"] = $miaumeemcuuauoyk; ceesgeawumeqkcic: $egkakcquemweqoum["\x66\x6f\x6e\164\x2d\x73\151\172\145"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\146\x6f\156\164\56\163\x69\x7a\145", $yqyousioqsoaouig, $eswoackiciccgasc); $egkakcquemweqoum["\164\145\170\164\x2d\x61\x6c\x69\x67\156"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\164\x41", $yqyousioqsoaouig, "\154\x65\x66\x74"); $egkakcquemweqoum["\x66\157\156\164\55\146\141\155\151\x6c\x79"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\146\x6f\x6e\x74\x2e\x66\141\155\x69\154\171", null, "\151\x6e\151\x74\x69\x61\154"); $egkakcquemweqoum["\146\157\x6e\164\55\x77\145\151\x67\150\164"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\146\x6f\x6e\164\56\x77\145\151\x67\x68\164", $yqyousioqsoaouig, $eswoackiciccgasc); $egkakcquemweqoum["\x6c\x69\x6e\145\x2d\x68\145\x69\147\x68\x74"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\154\x68", $yqyousioqsoaouig, $eswoackiciccgasc); $egkakcquemweqoum["\x6c\145\x74\164\145\162\55\163\160\141\x63\x69\x6e\147"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\146\157\x6e\164\x2e\154\x73", $yqyousioqsoaouig, $eswoackiciccgasc); $egkakcquemweqoum["\143\x6f\x6c\x6f\x72"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\143\x6f\x6c\x6f\x72", $yqyousioqsoaouig, "\x23\106\106\x46"); goto uwswkegomekswkus; } pmaiksascsegweci: uwswkegomekswkus: $iuikoekwkkmcimwq = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\164\154\x2e\151\156\56\x63\157\x6e\x74\x65\x6e\x74\x2e\x61\x6c\154\56\x30\56\x72\132"); if (!is_numeric($iuikoekwkkmcimwq)) { goto qiyiyuwmuoamwccs; } $egkakcquemweqoum["\164\x72\141\156\163\146\x6f\162\155"] = "\x72\157\x74\x61\164\145\50{$iuikoekwkkmcimwq}\x64\x65\147\x29"; qiyiyuwmuoamwccs: $egkakcquemweqoum["\x77\151\x64\x74\x68"] = $qeswwaqqsyymqawg; $egkakcquemweqoum["\x68\x65\x69\147\x68\164"] = $cswemwoyesycwkuq; $iegmsyuiekaayqqy = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\160\157\163\56\170", $yqyousioqsoaouig, "\141\165\x74\157"); $ymsweociooeskgwg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\160\157\163\56\171", $yqyousioqsoaouig, "\x61\x75\164\x6f"); $ywcogicgakiqmesa = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\160\157\x73\x2e\166", $yqyousioqsoaouig, "\164\157\x70"); $uyyeawaokwsoigkk = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x70\x6f\x73\56\150", $yqyousioqsoaouig, "\154\145\x66\164"); $egkakcquemweqoum = $this->kegiemoekkccwkoa($egkakcquemweqoum, $iegmsyuiekaayqqy, $ymsweociooeskgwg, $ywcogicgakiqmesa, $uyyeawaokwsoigkk); $egkakcquemweqoum["\146\154\x6f\141\164"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x70\157\x73\56\x66\x6c\157\x61\164", $yqyousioqsoaouig); $egkakcquemweqoum["\x7a\55\151\x6e\x64\x65\170"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x7a\111\156\x64\145\x78", null, 1); $egkakcquemweqoum["\x6d\x61\x72\x67\151\x6e"] = $this->yqooukeogwwoqeau($weyumiemecumqwiy, "\x6d", $yqyousioqsoaouig); $egkakcquemweqoum["\160\141\x64\144\151\156\x67"] = $this->yqooukeogwwoqeau($weyumiemecumqwiy, "\x70", $yqyousioqsoaouig); $egkakcquemweqoum["\x70\x6f\163\x69\x74\x69\157\x6e"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\160\157\163\x2e\x70\x6f\163"); $egkakcquemweqoum["\x76\145\x72\x74\x69\x63\x61\154\55\141\154\x69\x67\x6e"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x76\x41", null, "\x74\157\160"); $egkakcquemweqoum["\144\151\163\x70\x6c\x61\x79"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x64\x69\x73\x70\154\x61\x79", $yqyousioqsoaouig, "\142\x6c\157\x63\153"); $egkakcquemweqoum["\142\157\x72\144\145\162\55\162\x61\x64\x69\x75\163"] = $this->yqooukeogwwoqeau($weyumiemecumqwiy, "\162\141\144\x69\x75\163"); $eeaqcswmqmqgkgcc = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\142\x6f\x72\x64\145\162\56\x63"); if (!$eeaqcswmqmqgkgcc) { goto akkmaiaiamyaikqe; } $egkakcquemweqoum["\142\x6f\162\x64\145\x72\x2d\167\x69\144\x74\x68"] = $this->yqooukeogwwoqeau($weyumiemecumqwiy, "\x62\157\x72\x64\145\x72\x2e\167", $yqyousioqsoaouig); $egkakcquemweqoum["\142\157\x72\x64\x65\162\x2d\143\x6f\x6c\x6f\x72"] = $eeaqcswmqmqgkgcc; $egkakcquemweqoum["\x62\x6f\x72\x64\145\162\55\x73\x74\171\154\145"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x62\x6f\162\x64\145\x72\56\163", $yqyousioqsoaouig); akkmaiaiamyaikqe: goto swqkyoemiswegyci; } yuqiqaquoygggoqc: swqkyoemiswegyci: return $egkakcquemweqoum; } protected function yiiekkiwayooaqiy($weyumiemecumqwiy) : string { return $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x63\x6f\156\164\145\156\x74\56\x74\145\170\164", null, ''); } protected function usywmiiwiggsyium(string $mkomwsiykqigmqca, $eqgoocgaqwqcimie, $yqyousioqsoaouig) { $equckmqsamsmgcwy = $this->qooeaookuemoqecm($eqgoocgaqwqcimie, $yqyousioqsoaouig); $cqcuwemuusesmqsq = 1; if ($yqyousioqsoaouig !== null) { goto ismoiisskiwmmmiu; } $qsqwqsymmqeoqwcu = $equckmqsamsmgcwy; goto oikomikqcwikimkw; ismoiisskiwmmmiu: $icuyogeyaokmwusi = 4; if (is_array($eqgoocgaqwqcimie)) { goto ywykuacciwwkwmmy; } $qsqwqsymmqeoqwcu = $equckmqsamsmgcwy; goto qgcgucmskokqquwk; ywykuacciwwkwmmy: $piuesceqiguuskme = $yqyousioqsoaouig; iysiwmeymsoucaka: if (!(isset($this->useSizes[$piuesceqiguuskme]) && !$this->useSizes[$piuesceqiguuskme] && $piuesceqiguuskme > 0)) { goto iiikyaquagwawkce; } $piuesceqiguuskme--; goto iysiwmeymsoucaka; iiikyaquagwawkce: if ($equckmqsamsmgcwy === "\x23\x61" || !$equckmqsamsmgcwy || !$this->useSizes[$yqyousioqsoaouig] && isset($this->useMultiple[$mkomwsiykqigmqca])) { goto kswkouussqmqsssy; } $qsqwqsymmqeoqwcu = $equckmqsamsmgcwy; goto emomkqccysciiqya; kswkouussqmqsssy: $uqmawqusmmkkkoaq = null; $ciyackuwsqkoqese = $piuesceqiguuskme; qsecoiqswyiseake: if (!($ciyackuwsqkoqese >= $icuyogeyaokmwusi)) { goto cuyaakuucgwmcuqq; } if (!$this->euisqgeeigoksqui($eqgoocgaqwqcimie, $ciyackuwsqkoqese)) { goto oskwwcgyuwkiuacu; } $uqmawqusmmkkkoaq = $ciyackuwsqkoqese; goto cuyaakuucgwmcuqq; oskwwcgyuwkiuacu: gsgocqicesmaecse: $ciyackuwsqkoqese--; goto qsecoiqswyiseake; cuyaakuucgwmcuqq: if (!($uqmawqusmmkkkoaq === null)) { goto oqoogougwwcqeimq; } $ciyackuwsqkoqese = $piuesceqiguuskme; qgmgmkeiemcqkyim: if (!($ciyackuwsqkoqese < 4)) { goto swkukukimeueycaq; } if (!$this->euisqgeeigoksqui($eqgoocgaqwqcimie, $ciyackuwsqkoqese)) { goto waaammoiumecaiys; } $uqmawqusmmkkkoaq = $ciyackuwsqkoqese; goto swkukukimeueycaq; waaammoiumecaiys: ccqkugckigeckeqa: $ciyackuwsqkoqese++; goto qgmgmkeiemcqkyim; swkukukimeueycaq: oqoogougwwcqeimq: if (!($uqmawqusmmkkkoaq !== null && $icuyogeyaokmwusi === 0 && $piuesceqiguuskme === 0)) { goto eqiiqamuyewoowwy; } $cqcuwemuusesmqsq = max(1, (int) $this->slider->get_param(["\x73\x69\172\x65", "\x77\x69\144\x74\150", 0])) / max(1, (int) $this->slider->get_param(["\x73\151\172\145", "\x77\151\x64\164\x68", $uqmawqusmmkkkoaq], 1)); eqiiqamuyewoowwy: $qsqwqsymmqeoqwcu = null; if (!($uqmawqusmmkkkoaq !== null)) { goto cwomucmeuqqucyge; } $qsqwqsymmqeoqwcu = $this->qooeaookuemoqecm($eqgoocgaqwqcimie, $uqmawqusmmkkkoaq) ?: null; cwomucmeuqqucyge: if ($qsqwqsymmqeoqwcu) { goto eguukwmoyaaieuww; } $qsqwqsymmqeoqwcu = $equckmqsamsmgcwy; eguukwmoyaaieuww: if (is_array($qsqwqsymmqeoqwcu)) { goto kqkeomoaociyuoye; } $qsqwqsymmqeoqwcu = $this->ooeaouwceyecskck($qsqwqsymmqeoqwcu, (float) $qsqwqsymmqeoqwcu, $cqcuwemuusesmqsq); kqkeomoaociyuoye: emomkqccysciiqya: qgcgucmskokqquwk: oikomikqcwikimkw: return $qsqwqsymmqeoqwcu; } protected function gqkyomsuwooussyk($ocouqoqqcgauwkuq) : array { return $ocouqoqqcgauwkuq->get_bg_layer(); } protected function yqooukeogwwoqeau($weyumiemecumqwiy, $mkomwsiykqigmqca, $yqyousioqsoaouig = null) : string { $igqsaukqcqscimok = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, $mkomwsiykqigmqca); $aqykuigiuwmmcieu = ''; if (!$igqsaukqcqscimok) { goto yuccckoykmccwyce; } $yguacsiqkqgiauaa = ["\164", "\x72", "\142", "\x6c"]; foreach ($yguacsiqkqgiauaa as $mcaisukqqyosuasi) { $eqgoocgaqwqcimie = $igqsaukqcqscimok[$mcaisukqqyosuasi] ?? ''; if (!(null !== $yqyousioqsoaouig && is_array($eqgoocgaqwqcimie))) { goto ygqqeqgiaasoimgs; } $eqgoocgaqwqcimie = $eqgoocgaqwqcimie[$yqyousioqsoaouig] ?? ''; ygqqeqgiaasoimgs: if (!($eqgoocgaqwqcimie && is_numeric($eqgoocgaqwqcimie))) { goto gsiagogeoqwqekei; } $eqgoocgaqwqcimie .= "\160\x78"; gsiagogeoqwqekei: $aqykuigiuwmmcieu .= "{$eqgoocgaqwqcimie}\40"; cecamogauimuwoow: } uwmgacqaowuguiow: yuccckoykmccwyce: return rtrim($aqykuigiuwmmcieu); } }
