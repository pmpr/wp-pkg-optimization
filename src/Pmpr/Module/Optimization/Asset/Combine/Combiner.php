<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62400e586ca94             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Combine; use _WP_Dependency; use Pmpr\Common\Foundation\Decorator\DecoratorAsset; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\Optimization\Manipulate\Manipulate; use WP_Dependencies; use WP_Styles; abstract class Combiner extends Common { const qqckkouoyyeimmac = 90000; const osusmouuukykwasy = 30000; public function gaiaksuyqkeeiqgo($ugmuiugkaygmsagq) { $megmggkiokqkcwou = 0; $ssimsmwwkqmmgqeg = []; $usyqkyomqcuocgoa = []; $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!($this->ocysssyiuaueqiei() && $ugmuiugkaygmsagq instanceof WP_Dependencies)) { goto mgcuiguaomoqwwwm; } $qmyyckkowqwaacqi = $ugmuiugkaygmsagq instanceof WP_Styles; $okcwyqcycoicewqy = $qmyyckkowqwaacqi ? "\x63\163\163" : "\x6a\163"; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $qamuuegkguqmisam = $this->agkwcckksaegcsce("\155\x61\x6e\151\146\145\163\x74\x2e\152\x73\157\x6e", $okcwyqcycoicewqy); if ($iiaumsgauuyeqksw->exists($qamuuegkguqmisam)) { goto cgmgqucewwssmicq; } $aoiemswgeosamowe = []; goto mkomygccqkmkumsi; cgmgqucewwssmicq: $aoiemswgeosamowe = json_decode($iiaumsgauuyeqksw->souwykwwmyygqyqi($qamuuegkguqmisam), true); mkomygccqkmkumsi: $coagmqgaakeqmqmw = $ugmuiugkaygmsagq->queue; $eswwueuissckicww = ManipulateServer::ekcymmyqoceukosc(); $yyimiwcuegayoskq = ManipulateArray::get($aoiemswgeosamowe, $eswwueuissckicww); if (!$yyimiwcuegayoskq) { goto iksewmsaugayqaqq; } $umgkqiimgiyocmqy = ManipulateArray::get($yyimiwcuegayoskq, "\155\141\x69\156"); $siwkgiismmgqgykc = ManipulateArray::get($yyimiwcuegayoskq, "\143\x6f\x6d\142\151\156\x65\144"); $oqciymuueukmciea = ManipulateArray::get($yyimiwcuegayoskq, "\x69\x6e\154\151\156\x65"); $gaemwaimkkayyegw = $iiaumsgauuyeqksw->souwykwwmyygqyqi($oqciymuueukmciea); goto yamyagayiooyeekg; iksewmsaugayqaqq: foreach ($coagmqgaakeqmqmw as $momcykaoccoymeig => $eueuqacmukymcyya) { $egsumesakcaaukem = ManipulateArray::get($ugmuiugkaygmsagq->registered, $eueuqacmukymcyya); if (!$egsumesakcaaukem instanceof _WP_Dependency) { goto qkuiwoqksgayqqmg; } $ogomymegcoacqisg = $this->mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq); $ewgwqamkygiqaawc = $this->miocmcoykayoyyau()->souwykwwmyygqyqi($ogomymegcoacqisg); $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem); if ($ewgwqamkygiqaawc) { goto goqmywuiicciasyk; } ManipulateArray::unset($coagmqgaakeqmqmw, $momcykaoccoymeig); goto siecswkggyikqkga; goqmywuiicciasyk: $oiegiwogmwmawkeo = mb_strlen($ewgwqamkygiqaawc, "\70\142\x69\x74"); if ($oiegiwogmwmawkeo <= self::osusmouuukykwasy && $megmggkiokqkcwou <= self::qqckkouoyyeimmac) { goto wkgskiuiukiuyque; } if (!$egsumesakcaaukem->extra) { goto ukomuiwukymcoaso; } foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (!($eqgoocgaqwqcimie && in_array($uusmaiomayssaecw, ["\x61\x66\x74\145\162", "\x62\x65\146\157\162\145"]))) { goto ceiwqkyquikcemmo; } if (!is_array($eqgoocgaqwqcimie)) { goto uycesqqkoeamocgm; } $eqgoocgaqwqcimie = implode('', $eqgoocgaqwqcimie); uycesqqkoeamocgm: $usyqkyomqcuocgoa[] = $eqgoocgaqwqcimie; ceiwqkyquikcemmo: sqmoqymckwsogsqg: } gqmewagyagamokok: ukomuiwukymcoaso: $ssimsmwwkqmmgqeg[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; goto oyiuyywyeoskckuw; wkgskiuiukiuyque: $megmggkiokqkcwou += $oiegiwogmwmawkeo; $usyqkyomqcuocgoa[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; oyiuyywyeoskckuw: siecswkggyikqkga: qkuiwoqksgayqqmg: oyiuemaaykgkqqam: } ussceseaimqywuiy: $wkcwykowmmmwioqs = "{$this->ygykiseoqukukskk($okcwyqcycoicewqy)}\57\163\164\171\x6c\x65"; $umgkqiimgiyocmqy = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\x2e{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $oqciymuueukmciea = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\x2d\x69\x6e\x6c\151\x6e\145\56{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $ewwqgggaowaceeso = $this->wamiiiagcwwigucu(implode('', $ssimsmwwkqmmgqeg), $okcwyqcycoicewqy); $gaemwaimkkayyegw = $this->wamiiiagcwwigucu(implode('', $usyqkyomqcuocgoa), $okcwyqcycoicewqy); if (!($ewwqgggaowaceeso && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($umgkqiimgiyocmqy, $ewwqgggaowaceeso))) { goto easqmyamcmeesgya; } $aoiemswgeosamowe[$eswwueuissckicww]["\x6d\141\x69\x6e"] = $umgkqiimgiyocmqy; easqmyamcmeesgya: if (!($gaemwaimkkayyegw && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($oqciymuueukmciea, $gaemwaimkkayyegw))) { goto yuqgwwmqwqiuwmaw; } $aoiemswgeosamowe[$eswwueuissckicww]["\151\x6e\154\151\156\x65"] = $oqciymuueukmciea; yuqgwwmqwqiuwmaw: $siwkgiismmgqgykc = $coagmqgaakeqmqmw; if (!$siwkgiismmgqgykc) { goto quaqmuusokiyqgqe; } $aoiemswgeosamowe[$eswwueuissckicww]["\x63\157\155\x62\151\156\x65\x64"] = $siwkgiismmgqgykc; quaqmuusokiyqgqe: if (!$aoiemswgeosamowe) { goto smiemmcqqukyguuu; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($qamuuegkguqmisam, json_encode($aoiemswgeosamowe, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)); smiemmcqqukyguuu: yamyagayiooyeekg: if (!is_array($siwkgiismmgqgykc)) { goto qmoocweoekqueuyy; } foreach ($siwkgiismmgqgykc as $eueuqacmukymcyya) { if ($qmyyckkowqwaacqi) { goto ecouwqosmoyyqmkw; } wp_dequeue_script($eueuqacmukymcyya); wp_deregister_script($eueuqacmukymcyya); goto mqiiqkuaoekeuswo; ecouwqosmoyyqmkw: wp_dequeue_style($eueuqacmukymcyya); wp_deregister_style($eueuqacmukymcyya); mqiiqkuaoekeuswo: eckcqesiokgwkkiw: } yoagcooekomeokwg: qmoocweoekqueuyy: $eueuqacmukymcyya = "\x6f\x70\164\55\x63\157\x6d\142\151\x6e\145\x64\55{$okcwyqcycoicewqy}"; if (!($umgkqiimgiyocmqy && $iiaumsgauuyeqksw->exists($umgkqiimgiyocmqy))) { goto quyogmwugsyoaaiu; } $eeamcawaiqocomwy = $eygsasmqycagyayw->cwuqascimsgmiyca($umgkqiimgiyocmqy); if ($qmyyckkowqwaacqi) { goto sgiwoiscywusgmmm; } DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); goto skuqigsokaguscas; sgiwoiscywusgmmm: DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); skuqigsokaguscas: quyogmwugsyoaaiu: if (!$gaemwaimkkayyegw) { goto smcguieygyqcaqgs; } if ($qmyyckkowqwaacqi) { goto mmgmqogugasaqkgg; } DecoratorAsset::yocqwqycwegayowg($eueuqacmukymcyya, $gaemwaimkkayyegw); goto wmumywgyyeagqoeq; mmgmqogugasaqkgg: DecoratorAsset::oiqqguakwcieaioo($eueuqacmukymcyya, $gaemwaimkkayyegw); wmumywgyyeagqoeq: smcguieygyqcaqgs: mgcuiguaomoqwwwm: } public abstract function qqcykaeioiwwaqos(); public function ywgkkwweiyqsyiwu($esaqeawoigqgagum) : bool { return $this->kcciqwskewsuaemk()->exists($esaqeawoigqgagum); } public function mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq) { return $this->ukacwyckseuqsqgc($egsumesakcaaukem->src); } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem) { return $ewgwqamkygiqaawc; } public function agkwcckksaegcsce($wkcwykowmmmwioqs, $sqeykgyoooqysmca) : string { $mkomwsiykqigmqca = Manipulate::cmaecekuqkwmemms("\x4f\x50\x54\111\x4d\111\x5a\101\124\x49\117\x4e\x5f\103\117\115\x42\x49\x4e\x45\137\x50\101\x54\110"); return "{$mkomwsiykqigmqca}\57{$sqeykgyoooqysmca}\x2f{$wkcwykowmmmwioqs}"; } public function ygykiseoqukukskk($sqeykgyoooqysmca, $cywsgckammeuyqyq = 4) { $ymqmyyeuycgmigyo = ManipulateString::uniqid($cywsgckammeuyqyq); $mkomwsiykqigmqca = $this->agkwcckksaegcsce($ymqmyyeuycgmigyo, $sqeykgyoooqysmca); if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto eoyiumycaigawmmc; } $ymqmyyeuycgmigyo = $this->ygykiseoqukukskk($sqeykgyoooqysmca); eoyiumycaigawmmc: return $ymqmyyeuycgmigyo; } public function wamiiiagcwwigucu($ewgwqamkygiqaawc, $sqeykgyoooqysmca) { $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\157\x70\x74\x69\155\x69\172\x61\x74\x69\x6f\x6e\x5f\x6d\x69\156\151\x66\x79\137{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\x6f\x70\164\x69\x6d\151\172\141\x74\x69\x6f\x6e\137\x61\144\x76\141\156\143\145\137\x6d\151\156\151\x66\171\x5f{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); return $ewgwqamkygiqaawc; } }
