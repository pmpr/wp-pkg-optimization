<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             652e61ac134c6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Combine; use _WP_Dependency; use Pmpr\Common\Foundation\Decorator\DecoratorAsset; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\Optimization\Manipulate\Manipulate; use WP_Dependencies; use WP_Styles; abstract class Combiner extends Common { const qqckkouoyyeimmac = 90000; const osusmouuukykwasy = 30000; public function gaiaksuyqkeeiqgo($ugmuiugkaygmsagq) { $megmggkiokqkcwou = 0; $ssimsmwwkqmmgqeg = []; $usyqkyomqcuocgoa = []; $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!($this->ocysssyiuaueqiei() && $ugmuiugkaygmsagq instanceof WP_Dependencies)) { goto eyiwqgqcsqakwqss; } $qmyyckkowqwaacqi = $ugmuiugkaygmsagq instanceof WP_Styles; $okcwyqcycoicewqy = $qmyyckkowqwaacqi ? "\x63\163\163" : "\152\163"; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $qamuuegkguqmisam = $this->agkwcckksaegcsce("\155\x61\x6e\151\146\x65\163\164\x2e\x6a\x73\x6f\x6e", $okcwyqcycoicewqy); if ($iiaumsgauuyeqksw->exists($qamuuegkguqmisam)) { goto oyiuemaaykgkqqam; } $aoiemswgeosamowe = []; goto gqmewagyagamokok; oyiuemaaykgkqqam: $aoiemswgeosamowe = json_decode($iiaumsgauuyeqksw->souwykwwmyygqyqi($qamuuegkguqmisam), true); gqmewagyagamokok: $coagmqgaakeqmqmw = $ugmuiugkaygmsagq->queue; $eswwueuissckicww = ManipulateServer::ekcymmyqoceukosc(); $yyimiwcuegayoskq = ManipulateArray::get($aoiemswgeosamowe, $eswwueuissckicww); if (!$yyimiwcuegayoskq) { goto eckcqesiokgwkkiw; } $umgkqiimgiyocmqy = ManipulateArray::get($yyimiwcuegayoskq, "\x6d\141\x69\156"); $siwkgiismmgqgykc = ManipulateArray::get($yyimiwcuegayoskq, "\x63\157\x6d\x62\151\x6e\x65\x64"); $oqciymuueukmciea = ManipulateArray::get($yyimiwcuegayoskq, "\x69\x6e\x6c\x69\x6e\x65"); $gaemwaimkkayyegw = $iiaumsgauuyeqksw->souwykwwmyygqyqi($oqciymuueukmciea); goto ecouwqosmoyyqmkw; eckcqesiokgwkkiw: foreach ($coagmqgaakeqmqmw as $momcykaoccoymeig => $eueuqacmukymcyya) { $egsumesakcaaukem = ManipulateArray::get($ugmuiugkaygmsagq->registered, $eueuqacmukymcyya); if (!$egsumesakcaaukem instanceof _WP_Dependency) { goto quaqmuusokiyqgqe; } $ogomymegcoacqisg = $this->mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq); $ewgwqamkygiqaawc = $this->miocmcoykayoyyau()->souwykwwmyygqyqi($ogomymegcoacqisg); $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem); if ($ewgwqamkygiqaawc) { goto easqmyamcmeesgya; } ManipulateArray::unset($coagmqgaakeqmqmw, $momcykaoccoymeig); goto yuqgwwmqwqiuwmaw; easqmyamcmeesgya: $oiegiwogmwmawkeo = mb_strlen($ewgwqamkygiqaawc, "\70\142\151\x74"); if ($oiegiwogmwmawkeo <= self::osusmouuukykwasy && $megmggkiokqkcwou <= self::qqckkouoyyeimmac) { goto siecswkggyikqkga; } if (!$egsumesakcaaukem->extra) { goto goqmywuiicciasyk; } foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (!($eqgoocgaqwqcimie && in_array($uusmaiomayssaecw, ["\x61\146\x74\x65\162", "\x62\145\146\x6f\x72\145"]))) { goto oyiuyywyeoskckuw; } if (!is_array($eqgoocgaqwqcimie)) { goto wkgskiuiukiuyque; } $eqgoocgaqwqcimie = implode('', $eqgoocgaqwqcimie); wkgskiuiukiuyque: $usyqkyomqcuocgoa[] = $eqgoocgaqwqcimie; oyiuyywyeoskckuw: ukomuiwukymcoaso: } ceiwqkyquikcemmo: goqmywuiicciasyk: $ssimsmwwkqmmgqeg[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; goto qkuiwoqksgayqqmg; siecswkggyikqkga: $megmggkiokqkcwou += $oiegiwogmwmawkeo; $usyqkyomqcuocgoa[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; qkuiwoqksgayqqmg: yuqgwwmqwqiuwmaw: quaqmuusokiyqgqe: uycesqqkoeamocgm: } sqmoqymckwsogsqg: $wkcwykowmmmwioqs = "{$this->ygykiseoqukukskk($okcwyqcycoicewqy)}\57\163\164\171\x6c\x65"; $umgkqiimgiyocmqy = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\x2e{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $oqciymuueukmciea = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\55\151\x6e\154\151\156\x65\56{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $ewwqgggaowaceeso = $this->wamiiiagcwwigucu(implode('', $ssimsmwwkqmmgqeg), $okcwyqcycoicewqy); $gaemwaimkkayyegw = $this->wamiiiagcwwigucu(implode('', $usyqkyomqcuocgoa), $okcwyqcycoicewqy); if (!($ewwqgggaowaceeso && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($umgkqiimgiyocmqy, $ewwqgggaowaceeso))) { goto smiemmcqqukyguuu; } $aoiemswgeosamowe[$eswwueuissckicww]["\x6d\141\x69\156"] = $umgkqiimgiyocmqy; smiemmcqqukyguuu: if (!($gaemwaimkkayyegw && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($oqciymuueukmciea, $gaemwaimkkayyegw))) { goto iksewmsaugayqaqq; } $aoiemswgeosamowe[$eswwueuissckicww]["\x69\x6e\154\151\156\145"] = $oqciymuueukmciea; iksewmsaugayqaqq: $siwkgiismmgqgykc = $coagmqgaakeqmqmw; if (!$siwkgiismmgqgykc) { goto yamyagayiooyeekg; } $aoiemswgeosamowe[$eswwueuissckicww]["\x63\x6f\155\x62\x69\156\x65\x64"] = $siwkgiismmgqgykc; yamyagayiooyeekg: if (!$aoiemswgeosamowe) { goto yoagcooekomeokwg; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($qamuuegkguqmisam, json_encode($aoiemswgeosamowe, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)); yoagcooekomeokwg: ecouwqosmoyyqmkw: if (!is_array($siwkgiismmgqgykc)) { goto quyogmwugsyoaaiu; } foreach ($siwkgiismmgqgykc as $eueuqacmukymcyya) { if ($qmyyckkowqwaacqi) { goto sgiwoiscywusgmmm; } wp_dequeue_script($eueuqacmukymcyya); wp_deregister_script($eueuqacmukymcyya); goto skuqigsokaguscas; sgiwoiscywusgmmm: wp_dequeue_style($eueuqacmukymcyya); wp_deregister_style($eueuqacmukymcyya); skuqigsokaguscas: qmoocweoekqueuyy: } mqiiqkuaoekeuswo: quyogmwugsyoaaiu: $eueuqacmukymcyya = "\157\x70\x74\55\x63\157\155\142\151\x6e\145\144\55{$okcwyqcycoicewqy}"; if (!($umgkqiimgiyocmqy && $iiaumsgauuyeqksw->exists($umgkqiimgiyocmqy))) { goto smcguieygyqcaqgs; } $eeamcawaiqocomwy = $eygsasmqycagyayw->cwuqascimsgmiyca($umgkqiimgiyocmqy); if ($qmyyckkowqwaacqi) { goto mmgmqogugasaqkgg; } DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); goto wmumywgyyeagqoeq; mmgmqogugasaqkgg: DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); wmumywgyyeagqoeq: smcguieygyqcaqgs: if (!$gaemwaimkkayyegw) { goto yuoeumyiuqkuouey; } if ($qmyyckkowqwaacqi) { goto mgcuiguaomoqwwwm; } DecoratorAsset::yocqwqycwegayowg($eueuqacmukymcyya, $gaemwaimkkayyegw); goto eoyiumycaigawmmc; mgcuiguaomoqwwwm: DecoratorAsset::oiqqguakwcieaioo($eueuqacmukymcyya, $gaemwaimkkayyegw); eoyiumycaigawmmc: yuoeumyiuqkuouey: eyiwqgqcsqakwqss: } public abstract function qqcykaeioiwwaqos(); public function ywgkkwweiyqsyiwu($esaqeawoigqgagum) : bool { return $this->kcciqwskewsuaemk()->exists($esaqeawoigqgagum); } public function mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq) { return $this->ukacwyckseuqsqgc($egsumesakcaaukem->src); } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem) { return $ewgwqamkygiqaawc; } public function agkwcckksaegcsce($wkcwykowmmmwioqs, $sqeykgyoooqysmca) : string { $mkomwsiykqigmqca = $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\120\x52\137\117\120\124\x5f\103\117\115\102\111\116\x45\x5f\x50\101\124\x48"); return "{$mkomwsiykqigmqca}\57{$sqeykgyoooqysmca}\57{$wkcwykowmmmwioqs}"; } public function ygykiseoqukukskk($sqeykgyoooqysmca, $cywsgckammeuyqyq = 4) { $ymqmyyeuycgmigyo = ManipulateString::uniqid($cywsgckammeuyqyq); $mkomwsiykqigmqca = $this->agkwcckksaegcsce($ymqmyyeuycgmigyo, $sqeykgyoooqysmca); if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto sckioayasmkcoeoo; } $ymqmyyeuycgmigyo = $this->ygykiseoqukukskk($sqeykgyoooqysmca); sckioayasmkcoeoo: return $ymqmyyeuycgmigyo; } public function wamiiiagcwwigucu($ewgwqamkygiqaawc, $sqeykgyoooqysmca) { $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\x6f\160\164\x69\x6d\151\x7a\x61\x74\151\157\x6e\x5f\155\151\x6e\x69\x66\171\x5f{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\157\x70\x74\x69\155\151\x7a\x61\164\151\157\156\137\141\x64\166\x61\156\x63\x65\137\155\151\x6e\x69\x66\x79\x5f{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); return $ewgwqamkygiqaawc; } }
