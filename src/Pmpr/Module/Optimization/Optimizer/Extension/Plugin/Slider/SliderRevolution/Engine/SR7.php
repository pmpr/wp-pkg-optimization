<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eb16dc16c38             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Extension\Plugin\Slider\SliderRevolution\Engine; use Pmpr\Common\Foundation\Interfaces\Constants; class SR7 extends Common { protected $useMultiple = ["\x6c\150" => "\x72\x6f\x75\x6e\x64", "\x70\x6f\x73\x2e\170" => "\x72\x6f\x75\156\x64", "\160\x6f\163\x2e\x79" => "\x72\157\165\x6e\144", "\x73\151\x7a\145\x2e\x77" => "\x72\x6f\x75\x6e\x64", "\x73\x69\172\x65\x2e\x68" => "\162\157\165\156\144", "\x66\x6f\156\164\56\x6c\163" => null, "\146\x6f\156\164\x2e\x73\x69\x7a\x65" => "\162\x6f\x75\x6e\x64"]; protected array $useSizes = []; protected int $level = 4; protected function qiccuiwooiquycsg() { $this->type = "\163\162\x37\x2d\155\157\x64\165\x6c\x65"; $eyagkkkqkwcuygso = $this->slider->get_params(); $this->useSizes = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\x75\x53\x69\172\x65", null, []); $this->level = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\154\145\166\145\154", null, 4); } protected function tsioiooeoyeieqye(array $weyumiemecumqwiy) : string { return $weyumiemecumqwiy[Constants::gouqcwikiiygyasc] ?? ''; } protected function qooeaookuemoqecm($eqgoocgaqwqcimie, ?string $uusmaiomayssaecw = null) { if (!($uusmaiomayssaecw !== null && is_array($eqgoocgaqwqcimie) && isset($eqgoocgaqwqcimie[$uusmaiomayssaecw]))) { goto waiqmywasoeggkce; } $eqgoocgaqwqcimie = $eqgoocgaqwqcimie[$uusmaiomayssaecw]; waiqmywasoeggkce: return $eqgoocgaqwqcimie; } public function euisqgeeigoksqui($eqgoocgaqwqcimie, $yqyousioqsoaouig) : bool { return $this->useSizes[$yqyousioqsoaouig] && !empty($eqgoocgaqwqcimie[$yqyousioqsoaouig]) && $this->qooeaookuemoqecm($eqgoocgaqwqcimie, $yqyousioqsoaouig) !== "\x23\141"; } protected function uaskqakcsowgmccg($momcykaoccoymeig) { return $this->breakpoints[$momcykaoccoymeig + 1]; } protected function wgogsacggwigyuee($momcykaoccoymeig) { return $this->breakpoints[$momcykaoccoymeig - 1]; } protected function ywogaocmueoimkuq($weyumiemecumqwiy) : bool { return "\x73\x6c\x69\144\145\x62\x67" === $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\163\x75\x62\x74\x79\160\145"); } protected function gkyiccimoqwmoack($eyagkkkqkwcuygso, $yqyousioqsoaouig) : array { $eygasqqkgouqiuqk = []; $gyquugwkmmgwmkki = ["\155\x61\162\x67\151\x6e" => "\141\165\164\157", "\144\151\163\160\154\141\x79" => "\142\x6c\157\x63\x6b", "\x70\x6f\163\x69\x74\151\x6f\x6e" => "\x72\x65\x6c\141\x74\x69\166\x65"]; switch ($eyagkkkqkwcuygso[Constants::squoamkioomemiyi] ?? '') { case "\163\164\141\156\144\x61\162\x64": $qeswwaqqsyymqawg = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\x73\x69\x7a\145\x2e\167\151\144\164\x68", $yqyousioqsoaouig, "\141\x75\x74\157"); $cswemwoyesycwkuq = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\163\151\x7a\x65\56\x68\x65\151\x67\x68\164", $yqyousioqsoaouig, "\x61\165\164\x6f"); $aqiccywoiqiskwaw = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\x73\151\172\145\x2e\146\x75\154\154\127\x69\144\164\x68", null, true); $kisgwkkagogawumc = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\163\151\x7a\x65\x2e\x66\165\x6c\x6c\x48\145\x69\147\150\164"); $eygasqqkgouqiuqk["\155\141\x78\x2d\x68\145\151\x67\150\x74"] = $cswemwoyesycwkuq; if ($kisgwkkagogawumc) { goto muaigwwqgsgowgkk; } $cwugisscoiasuuyg = $cswemwoyesycwkuq / max(1, $qeswwaqqsyymqawg); if (!($cwugisscoiasuuyg < $cswemwoyesycwkuq)) { goto eskmkooukwwieuke; } $cswemwoyesycwkuq = "\x63\141\x6c\x63\x28\61\x30\60\x76\167\40\x2a\40{$cwugisscoiasuuyg}\x29"; eskmkooukwwieuke: muaigwwqgsgowgkk: $eygasqqkgouqiuqk["\x68\145\x69\x67\x68\x74"] = $cswemwoyesycwkuq; $gyquugwkmmgwmkki["\x68\x65\151\147\150\x74"] = "\x31\60\60\45"; $eygasqqkgouqiuqk["\155\x61\x72\147\151\156"] = "\141\x75\x74\x6f"; $eygasqqkgouqiuqk["\x64\151\x73\160\154\x61\171"] = "\142\154\x6f\143\153"; $eygasqqkgouqiuqk["\160\157\x73\151\164\x69\x6f\x6e"] = "\x61\x62\163\x6f\154\165\164\145"; $eygasqqkgouqiuqk["\x6f\166\x65\x72\x66\x6c\157\167"] = "\150\x69\x64\144\145\156"; $gyquugwkmmgwmkki["\167\x69\x64\164\x68"] = $qeswwaqqsyymqawg; if (!$aqiccywoiqiskwaw) { goto imgyqyeaoawqscae; } $eygasqqkgouqiuqk["\x77\x69\144\x74\x68"] = "\x31\60\60\45"; $gyquugwkmmgwmkki["\x6d\x61\x78\x2d\167\151\x64\164\150"] = "\61\60\x30\45"; goto isssemmuiiaewiwi; imgyqyeaoawqscae: $eygasqqkgouqiuqk["\x77\x69\144\164\150"] = $qeswwaqqsyymqawg; $eygasqqkgouqiuqk["\x6d\x61\170\x2d\167\151\144\164\x68"] = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\163\x69\172\x65\56\x6d\141\x78\127\x69\x64\164\150", null, 0); isssemmuiiaewiwi: $eygasqqkgouqiuqk["\x62\141\143\x6b\147\162\157\x75\x6e\x64"] = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\x62\147\x2e\x63\x6f\x6c\x6f\162\x2e\163\164\162\x69\x6e\147", null, "\164\x72\141\x6e\x73\160\x61\162\x65\156\x74"); goto ggcayqaayysyqmia; } miiegqgiuamasook: ggcayqaayysyqmia: return [$eygasqqkgouqiuqk, $gyquugwkmmgwmkki]; } protected function ecsmecuykayuiqas($weyumiemecumqwiy, $yqyousioqsoaouig) : array { $egkakcquemweqoum = []; $sqeykgyoooqysmca = $weyumiemecumqwiy[Constants::squoamkioomemiyi]; $ueamwqwegewocqgc = $weyumiemecumqwiy["\163\x75\142\x74\x79\160\x65"] ?? ''; switch ($sqeykgyoooqysmca) { case Constants::mkousmkiawwousws: case Constants::qwqqkkoggeeyeogk: case Constants::TEXT: $qeswwaqqsyymqawg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x73\x69\x7a\x65\56\x77", $yqyousioqsoaouig, "\x61\165\x74\x6f"); $cswemwoyesycwkuq = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x73\x69\172\x65\56\150", $yqyousioqsoaouig, "\141\x75\164\x6f"); $egkakcquemweqoum["\155\x69\156\55\167\151\x64\164\x68"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x73\x69\172\145\56\x6d\x69\x6e\127", $yqyousioqsoaouig); $egkakcquemweqoum["\155\151\156\x2d\x68\x65\151\x67\150\x74"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x73\x69\x7a\x65\56\x6d\x69\x6e\x48", $yqyousioqsoaouig); switch ($sqeykgyoooqysmca) { case Constants::qwqqkkoggeeyeogk: if (!isset($weyumiemecumqwiy["\142\147"]["\x69\x6d\x61\147\145"])) { goto semymwueqcweowae; } $egkakcquemweqoum["\x74\x6f\x70"] = "\x30"; $egkakcquemweqoum["\x62\x61\143\x6b\x67\x72\x6f\165\156\144\55\x69\x6d\141\x67\145"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x62\x67\x2e\151\155\x61\x67\x65\56\163\162\x63"); $oiegiwogmwmawkeo = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x62\147\x2e\x69\155\141\x67\145\56\x73\151\x7a\145"); $egkakcquemweqoum["\x62\141\143\153\x67\x72\x6f\165\156\x64\55\163\151\x7a\x65"] = $oiegiwogmwmawkeo === "\160\145\x72\x63\145\156\164\x61\x67\x65" ? $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\142\x67\x2e\151\155\x61\x67\x65\56\163\x69\x7a\145\x56\141\x6c") : $oiegiwogmwmawkeo; $egkakcquemweqoum["\x62\141\143\x6b\x67\162\157\165\x6e\144\x2d\x72\145\160\x65\x61\x74"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x62\x67\x2e\x69\x6d\x61\x67\145\56\x72\145\x70\145\x61\164", null, "\156\x6f\55\x72\145\160\x65\141\164"); $iegmsyuiekaayqqy = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\142\147\56\x69\155\141\x67\145\56\160\x6f\163\x2e\x78", null, "\x30"); $ymsweociooeskgwg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x62\147\x2e\151\x6d\x61\147\x65\56\160\157\x73\56\171", null, "\60"); $egkakcquemweqoum["\x62\x61\143\153\x67\x72\157\165\x6e\144\55\x70\157\x73\151\164\x69\x6f\156"] = "{$iegmsyuiekaayqqy}\40{$ymsweociooeskgwg}"; semymwueqcweowae: if (!(!$qeswwaqqsyymqawg || $qeswwaqqsyymqawg === "\x61\x75\164\x6f")) { goto oegcoaeyokkgoqyg; } $qeswwaqqsyymqawg = "\61\60\60\x25"; oegcoaeyokkgoqyg: if (!(!$cswemwoyesycwkuq || $cswemwoyesycwkuq === "\141\x75\164\x6f")) { goto euuoiciaiieoqyws; } $cswemwoyesycwkuq = "\x31\x30\60\45"; euuoiciaiieoqyws: $qoiwmokisgikggia = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\142\x67\56\143\x6f\x6c\157\x72\56\x73\x74\x72\151\156\x67"); if (!$qoiwmokisgikggia) { goto wcmksyiisiciasko; } $egkakcquemweqoum["\142\141\143\x6b\x67\162\x6f\x75\x6e\x64"] = $qoiwmokisgikggia; wcmksyiisiciasko: goto isumwussqyqawwmy; case Constants::mkousmkiawwousws: $egkakcquemweqoum["\142\141\x63\x6b\x67\162\157\165\156\144\55\x73\151\172\x65"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\143\x6f\156\164\145\x6e\164\56\163\151\x7a\145", null, "\x63\x6f\156\x74\x61\x69\156"); $egkakcquemweqoum["\142\141\143\x6b\147\162\x6f\x75\x6e\144\55\x72\x65\x70\x65\x61\x74"] = "\x6e\157\55\162\x65\x70\x65\141\164"; $egkakcquemweqoum["\142\x61\x63\153\147\162\157\x75\x6e\144\55\x70\157\x73\x69\164\x69\x6f\156"] = "\x35\x30\45\x20\65\x30\x25"; $egkakcquemweqoum["\142\x61\143\153\147\x72\x6f\x75\x6e\x64\55\x69\x6d\141\x67\145"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\143\x6f\156\164\x65\156\164\x2e\x73\162\143", null, ''); goto isumwussqyqawwmy; case Constants::TEXT: case Constants::gqmuoaykeqeuoukm: $eswoackiciccgasc = $sqeykgyoooqysmca !== Constants::gqmuoaykeqeuoukm && $ueamwqwegewocqgc !== Constants::gqmuoaykeqeuoukm; $qeswwaqqsyymqawg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x73\151\172\145\56\167", $yqyousioqsoaouig, "\x61\165\164\157", $eswoackiciccgasc); $cswemwoyesycwkuq = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x73\x69\x7a\145\56\x68", $yqyousioqsoaouig, "\141\165\164\x6f", $eswoackiciccgasc); $egkakcquemweqoum["\142\141\x63\153\x67\162\157\x75\156\144"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x62\x67\56\x63\x6f\154\157\x72\56\163\x74\x72\151\x6e\147", null, "\164\162\141\156\163\160\141\162\145\156\x74"); $qgssmoqemoeqyuua = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x77\163", $yqyousioqsoaouig); if (!($qeswwaqqsyymqawg === "\141\165\164\x6f")) { goto augyqmcwawmsykme; } $qgssmoqemoeqyuua = "\x6e\157\167\x72\x61\160"; augyqmcwawmsykme: if (!$qgssmoqemoeqyuua) { goto igkeawygswqouuym; } $egkakcquemweqoum["\167\x68\x69\x74\x65\55\x73\160\x61\143\145"] = $qgssmoqemoeqyuua; igkeawygswqouuym: $wwqyeeagywueicqa = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\143\x6f\156\x74\x65\156\164\x2e\x64\x65\143\x6f", null, "\x6e\x6f\x6e\x65"); if (!($wwqyeeagywueicqa !== "\x6e\157\156\143\x65")) { goto acuyqioeqaoeskya; } $egkakcquemweqoum["\164\145\x78\x74\x2d\144\145\x63\x6f\162\x61\x74\x69\157\156"] = $wwqyeeagywueicqa; acuyqioeqaoeskya: $miaumeemcuuauoyk = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x63\157\x6e\x74\145\156\x74\56\164\x72\141\x6e\163", null, "\x6e\157\x6e\145"); if (!($miaumeemcuuauoyk !== "\156\157\x6e\143\x65")) { goto ukkmusemcqayowoa; } $egkakcquemweqoum["\x74\145\x78\x74\x2d\x74\162\x61\x6e\163\x66\x6f\162\x6d"] = $miaumeemcuuauoyk; ukkmusemcqayowoa: $egkakcquemweqoum["\x66\157\156\x74\x2d\163\151\172\145"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x66\x6f\156\x74\x2e\x73\x69\172\x65", $yqyousioqsoaouig, $eswoackiciccgasc); $egkakcquemweqoum["\x74\145\x78\x74\55\141\x6c\x69\147\156"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\164\101", $yqyousioqsoaouig, "\154\x65\146\164"); $egkakcquemweqoum["\146\x6f\156\x74\x2d\x66\141\155\151\x6c\x79"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\146\x6f\x6e\164\56\x66\141\x6d\151\x6c\x79", null, "\151\x6e\151\164\x69\x61\154"); $egkakcquemweqoum["\146\157\x6e\164\x2d\x77\145\x69\147\150\x74"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\146\157\156\x74\56\x77\145\x69\147\x68\x74", $yqyousioqsoaouig, $eswoackiciccgasc); $egkakcquemweqoum["\154\x69\156\x65\55\150\145\x69\x67\x68\164"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\154\x68", $yqyousioqsoaouig, $eswoackiciccgasc); $egkakcquemweqoum["\x6c\x65\x74\164\x65\x72\55\163\x70\141\143\151\x6e\x67"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x66\157\x6e\x74\x2e\154\163", $yqyousioqsoaouig, $eswoackiciccgasc); $egkakcquemweqoum["\143\x6f\154\x6f\162"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x63\157\x6c\x6f\x72", $yqyousioqsoaouig, "\43\x46\x46\106"); goto isumwussqyqawwmy; } ksaimkacqesiguyg: isumwussqyqawwmy: $iuikoekwkkmcimwq = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x74\154\x2e\x69\x6e\x2e\x63\x6f\156\x74\x65\x6e\x74\x2e\x61\154\x6c\56\60\56\162\132"); if (!is_numeric($iuikoekwkkmcimwq)) { goto ugoeueisekcsquug; } $egkakcquemweqoum["\164\x72\141\156\x73\146\x6f\x72\x6d"] = "\x72\157\x74\141\164\145\x28{$iuikoekwkkmcimwq}\x64\x65\x67\x29"; ugoeueisekcsquug: $egkakcquemweqoum["\167\151\x64\164\x68"] = $qeswwaqqsyymqawg; $egkakcquemweqoum["\150\145\151\147\x68\164"] = $cswemwoyesycwkuq; $iegmsyuiekaayqqy = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\160\157\x73\56\170", $yqyousioqsoaouig, "\141\x75\164\157"); $ymsweociooeskgwg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\160\x6f\x73\x2e\171", $yqyousioqsoaouig, "\x61\165\164\x6f"); $ywcogicgakiqmesa = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x70\x6f\163\56\166", $yqyousioqsoaouig, "\164\157\160"); $uyyeawaokwsoigkk = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\160\x6f\163\x2e\150", $yqyousioqsoaouig, "\154\x65\146\164"); $egkakcquemweqoum = $this->kegiemoekkccwkoa($egkakcquemweqoum, $iegmsyuiekaayqqy, $ymsweociooeskgwg, $ywcogicgakiqmesa, $uyyeawaokwsoigkk); $egkakcquemweqoum["\x66\154\x6f\x61\164"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x70\x6f\x73\56\146\154\x6f\141\164", $yqyousioqsoaouig); $egkakcquemweqoum["\x7a\55\x69\156\x64\x65\170"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\172\x49\x6e\x64\145\x78", null, 1); $egkakcquemweqoum["\155\141\x72\x67\x69\x6e"] = $this->yqooukeogwwoqeau($weyumiemecumqwiy, "\155", $yqyousioqsoaouig); $egkakcquemweqoum["\x70\x61\144\144\151\156\147"] = $this->yqooukeogwwoqeau($weyumiemecumqwiy, "\160", $yqyousioqsoaouig); $egkakcquemweqoum["\x70\157\163\x69\x74\151\157\156"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\160\157\163\56\x70\157\163"); $egkakcquemweqoum["\x76\x65\162\164\x69\143\x61\x6c\55\x61\154\x69\x67\x6e"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\166\101", null, "\164\x6f\160"); $egkakcquemweqoum["\144\151\163\x70\154\141\171"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x64\x69\x73\x70\154\141\x79", $yqyousioqsoaouig, "\142\154\x6f\x63\153"); $egkakcquemweqoum["\142\157\162\x64\145\x72\x2d\x72\x61\x64\x69\x75\x73"] = $this->yqooukeogwwoqeau($weyumiemecumqwiy, "\162\141\x64\x69\x75\163"); $eeaqcswmqmqgkgcc = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x62\x6f\x72\x64\x65\162\56\x63"); if (!$eeaqcswmqmqgkgcc) { goto koueosuswmucsaec; } $egkakcquemweqoum["\x62\157\x72\x64\145\162\55\167\151\144\x74\150"] = $this->yqooukeogwwoqeau($weyumiemecumqwiy, "\x62\x6f\x72\x64\145\x72\56\x77", $yqyousioqsoaouig); $egkakcquemweqoum["\142\x6f\162\144\x65\162\55\x63\157\154\x6f\162"] = $eeaqcswmqmqgkgcc; $egkakcquemweqoum["\x62\157\x72\x64\x65\x72\55\x73\x74\171\x6c\145"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x62\x6f\x72\x64\145\162\56\x73", $yqyousioqsoaouig); koueosuswmucsaec: goto oiguycsiaweycioe; } ueeowyociayoygsa: oiguycsiaweycioe: return $egkakcquemweqoum; } protected function yiiekkiwayooaqiy($weyumiemecumqwiy) : string { return $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x63\x6f\156\x74\145\x6e\x74\56\164\x65\170\x74", null, ''); } protected function usywmiiwiggsyium(string $mkomwsiykqigmqca, $eqgoocgaqwqcimie, $yqyousioqsoaouig) { $equckmqsamsmgcwy = $this->qooeaookuemoqecm($eqgoocgaqwqcimie, $yqyousioqsoaouig); $cqcuwemuusesmqsq = 1; if ($yqyousioqsoaouig !== null) { goto oqccquoqqkkaqksk; } $qsqwqsymmqeoqwcu = $equckmqsamsmgcwy; goto wouekamwmcuguaoa; oqccquoqqkkaqksk: $icuyogeyaokmwusi = 4; if (is_array($eqgoocgaqwqcimie)) { goto uwiaeuuiaimugqys; } $qsqwqsymmqeoqwcu = $equckmqsamsmgcwy; goto eyyamwsogeqwamug; uwiaeuuiaimugqys: $piuesceqiguuskme = $yqyousioqsoaouig; sswmueweogqkqumq: if (!(isset($this->useSizes[$piuesceqiguuskme]) && !$this->useSizes[$piuesceqiguuskme] && $piuesceqiguuskme > 0)) { goto wyqmackmyaikcggs; } $piuesceqiguuskme--; goto sswmueweogqkqumq; wyqmackmyaikcggs: if ($equckmqsamsmgcwy === "\x23\141" || !$equckmqsamsmgcwy || !$this->useSizes[$yqyousioqsoaouig] && isset($this->useMultiple[$mkomwsiykqigmqca])) { goto wsmkoikacqsiweuw; } $qsqwqsymmqeoqwcu = $equckmqsamsmgcwy; goto gaikqsuyumumsesg; wsmkoikacqsiweuw: $uqmawqusmmkkkoaq = null; $ciyackuwsqkoqese = $piuesceqiguuskme; ekwmcssqowkcoyci: if (!($ciyackuwsqkoqese >= $icuyogeyaokmwusi)) { goto qscmokiskqyuswqo; } if (!$this->euisqgeeigoksqui($eqgoocgaqwqcimie, $ciyackuwsqkoqese)) { goto yckkwcimmakkieos; } $uqmawqusmmkkkoaq = $ciyackuwsqkoqese; goto qscmokiskqyuswqo; yckkwcimmakkieos: gecywkyeskagueqm: $ciyackuwsqkoqese--; goto ekwmcssqowkcoyci; qscmokiskqyuswqo: if (!($uqmawqusmmkkkoaq === null)) { goto guackgkaeswkcaoq; } $ciyackuwsqkoqese = $piuesceqiguuskme; qmwmasuoyuwmcigw: if (!($ciyackuwsqkoqese < 4)) { goto oqkcuegyumswqekg; } if (!$this->euisqgeeigoksqui($eqgoocgaqwqcimie, $ciyackuwsqkoqese)) { goto ewiwaeckgqaiwgio; } $uqmawqusmmkkkoaq = $ciyackuwsqkoqese; goto oqkcuegyumswqekg; ewiwaeckgqaiwgio: wcgoiisqmmawuiag: $ciyackuwsqkoqese++; goto qmwmasuoyuwmcigw; oqkcuegyumswqekg: guackgkaeswkcaoq: if (!($uqmawqusmmkkkoaq !== null && $icuyogeyaokmwusi === 0 && $piuesceqiguuskme === 0)) { goto wyoouquciqoosuim; } $cqcuwemuusesmqsq = max(1, (int) $this->slider->get_param(["\163\x69\172\x65", "\x77\x69\144\164\150", 0])) / max(1, (int) $this->slider->get_param(["\x73\x69\x7a\x65", "\x77\151\144\x74\x68", $uqmawqusmmkkkoaq], 1)); wyoouquciqoosuim: $qsqwqsymmqeoqwcu = null; if (!($uqmawqusmmkkkoaq !== null)) { goto aiociqsiiwguaywy; } $qsqwqsymmqeoqwcu = $this->qooeaookuemoqecm($eqgoocgaqwqcimie, $uqmawqusmmkkkoaq) ?: null; aiociqsiiwguaywy: if ($qsqwqsymmqeoqwcu) { goto isomygcucicwccgy; } $qsqwqsymmqeoqwcu = $equckmqsamsmgcwy; isomygcucicwccgy: if (is_array($qsqwqsymmqeoqwcu)) { goto wcaeyoeeuiqqgqou; } $qsqwqsymmqeoqwcu = $this->ooeaouwceyecskck($qsqwqsymmqeoqwcu, (float) $qsqwqsymmqeoqwcu, $cqcuwemuusesmqsq); wcaeyoeeuiqqgqou: gaikqsuyumumsesg: eyyamwsogeqwamug: wouekamwmcuguaoa: return $qsqwqsymmqeoqwcu; } protected function gqkyomsuwooussyk($ocouqoqqcgauwkuq) : array { return $ocouqoqqcgauwkuq->get_bg_layer(); } protected function yqooukeogwwoqeau($weyumiemecumqwiy, $mkomwsiykqigmqca, $yqyousioqsoaouig = null) : string { $igqsaukqcqscimok = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, $mkomwsiykqigmqca); $aqykuigiuwmmcieu = ''; if (!$igqsaukqcqscimok) { goto wuuucygsmqmsiyoi; } $yguacsiqkqgiauaa = ["\164", "\162", "\142", "\154"]; foreach ($yguacsiqkqgiauaa as $mcaisukqqyosuasi) { $eqgoocgaqwqcimie = $igqsaukqcqscimok[$mcaisukqqyosuasi] ?? ''; if (!(null !== $yqyousioqsoaouig && is_array($eqgoocgaqwqcimie))) { goto ymwckeawsukyukqs; } $eqgoocgaqwqcimie = $eqgoocgaqwqcimie[$yqyousioqsoaouig] ?? ''; ymwckeawsukyukqs: if (!($eqgoocgaqwqcimie && is_numeric($eqgoocgaqwqcimie))) { goto gosaiqsaqksagqsg; } $eqgoocgaqwqcimie .= "\160\x78"; gosaiqsaqksagqsg: $aqykuigiuwmmcieu .= "{$eqgoocgaqwqcimie}\x20"; someqooawckycwao: } iougqueaywwucoko: wuuucygsmqmsiyoi: return rtrim($aqykuigiuwmmcieu); } }
