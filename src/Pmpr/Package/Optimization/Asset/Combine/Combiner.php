<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c707b39ae82             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Combine; use _WP_Dependency; use Pmpr\Common\Foundation\Decorator\DecoratorAsset; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Package\Optimization\Manipulate\Manipulate; use WP_Dependencies; use WP_Styles; abstract class Combiner extends Common { const qqckkouoyyeimmac = 90000; const osusmouuukykwasy = 30000; public function gaiaksuyqkeeiqgo($ugmuiugkaygmsagq) { $megmggkiokqkcwou = 0; $ssimsmwwkqmmgqeg = []; $usyqkyomqcuocgoa = []; $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!($this->ocysssyiuaueqiei() && $ugmuiugkaygmsagq instanceof WP_Dependencies)) { goto gqyyccceswkqcmaa; } $qmyyckkowqwaacqi = $ugmuiugkaygmsagq instanceof WP_Styles; $okcwyqcycoicewqy = $qmyyckkowqwaacqi ? "\143\163\x73" : "\152\163"; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $qamuuegkguqmisam = $this->agkwcckksaegcsce("\155\141\156\151\146\x65\163\164\x2e\152\x73\157\156", $okcwyqcycoicewqy); if ($iiaumsgauuyeqksw->exists($qamuuegkguqmisam)) { goto ugcyukgoaiiysymc; } $aoiemswgeosamowe = []; goto yuoyeeuqqaockyqw; ugcyukgoaiiysymc: $aoiemswgeosamowe = json_decode($iiaumsgauuyeqksw->souwykwwmyygqyqi($qamuuegkguqmisam), true); yuoyeeuqqaockyqw: $coagmqgaakeqmqmw = $ugmuiugkaygmsagq->queue; $eswwueuissckicww = ManipulateServer::ekcymmyqoceukosc(); $yyimiwcuegayoskq = ManipulateArray::get($aoiemswgeosamowe, $eswwueuissckicww); if (!$yyimiwcuegayoskq) { goto mmwqwowqcaseyyki; } $umgkqiimgiyocmqy = ManipulateArray::get($yyimiwcuegayoskq, "\155\x61\x69\156"); $siwkgiismmgqgykc = ManipulateArray::get($yyimiwcuegayoskq, "\143\157\x6d\142\151\x6e\x65\x64"); $oqciymuueukmciea = ManipulateArray::get($yyimiwcuegayoskq, "\151\x6e\154\151\x6e\145"); $gaemwaimkkayyegw = $iiaumsgauuyeqksw->souwykwwmyygqyqi($oqciymuueukmciea); goto wsckacayikksiswo; mmwqwowqcaseyyki: foreach ($coagmqgaakeqmqmw as $momcykaoccoymeig => $eueuqacmukymcyya) { $egsumesakcaaukem = ManipulateArray::get($ugmuiugkaygmsagq->registered, $eueuqacmukymcyya); if (!$egsumesakcaaukem instanceof _WP_Dependency) { goto mieeugiewckceagc; } $ogomymegcoacqisg = $this->mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq); $ewgwqamkygiqaawc = $this->miocmcoykayoyyau()->souwykwwmyygqyqi($ogomymegcoacqisg); $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem); if ($ewgwqamkygiqaawc) { goto awikkaqmmuqkukma; } ManipulateArray::unset($coagmqgaakeqmqmw, $momcykaoccoymeig); goto uckeuuaqimqamuyc; awikkaqmmuqkukma: $oiegiwogmwmawkeo = mb_strlen($ewgwqamkygiqaawc, "\x38\142\x69\x74"); if ($oiegiwogmwmawkeo <= self::osusmouuukykwasy && $megmggkiokqkcwou <= self::qqckkouoyyeimmac) { goto qcywwqceiqogcoyo; } if (!$egsumesakcaaukem->extra) { goto osoqssymqqoqcuky; } foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (!($eqgoocgaqwqcimie && in_array($uusmaiomayssaecw, ["\x61\146\164\145\x72", "\142\145\146\x6f\162\145"]))) { goto qoameasiqwaqgmca; } if (!is_array($eqgoocgaqwqcimie)) { goto uugekiumuwemyuyc; } $eqgoocgaqwqcimie = implode('', $eqgoocgaqwqcimie); uugekiumuwemyuyc: $usyqkyomqcuocgoa[] = $eqgoocgaqwqcimie; qoameasiqwaqgmca: amkcomscieegkygc: } iqukigoyiqgcggue: osoqssymqqoqcuky: $ssimsmwwkqmmgqeg[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; goto giiucsyqgcooaima; qcywwqceiqogcoyo: $megmggkiokqkcwou += $oiegiwogmwmawkeo; $usyqkyomqcuocgoa[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; giiucsyqgcooaima: uckeuuaqimqamuyc: mieeugiewckceagc: qkiqquymecyoouki: } kygcymkakucoeock: $wkcwykowmmmwioqs = "{$this->ygykiseoqukukskk($okcwyqcycoicewqy)}\57\163\164\171\154\145"; $umgkqiimgiyocmqy = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\x2e{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $oqciymuueukmciea = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\55\x69\156\x6c\x69\156\145\x2e{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $ewwqgggaowaceeso = $this->wamiiiagcwwigucu(implode('', $ssimsmwwkqmmgqeg), $okcwyqcycoicewqy); $gaemwaimkkayyegw = $this->wamiiiagcwwigucu(implode('', $usyqkyomqcuocgoa), $okcwyqcycoicewqy); if (!($ewwqgggaowaceeso && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($umgkqiimgiyocmqy, $ewwqgggaowaceeso))) { goto uqkqmseoeemyaqck; } $aoiemswgeosamowe[$eswwueuissckicww]["\155\x61\151\156"] = $umgkqiimgiyocmqy; uqkqmseoeemyaqck: if (!($gaemwaimkkayyegw && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($oqciymuueukmciea, $gaemwaimkkayyegw))) { goto cceyoumkiicaguio; } $aoiemswgeosamowe[$eswwueuissckicww]["\x69\156\154\x69\156\145"] = $oqciymuueukmciea; cceyoumkiicaguio: $siwkgiismmgqgykc = $coagmqgaakeqmqmw; if (!$siwkgiismmgqgykc) { goto yayykakkyeoieicm; } $aoiemswgeosamowe[$eswwueuissckicww]["\143\157\155\142\x69\156\145\144"] = $siwkgiismmgqgykc; yayykakkyeoieicm: if (!$aoiemswgeosamowe) { goto yuiouamaogkkqmck; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($qamuuegkguqmisam, json_encode($aoiemswgeosamowe, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)); yuiouamaogkkqmck: wsckacayikksiswo: if (!is_array($siwkgiismmgqgykc)) { goto augqweqsqioesmim; } foreach ($siwkgiismmgqgykc as $eueuqacmukymcyya) { if ($qmyyckkowqwaacqi) { goto qimomesqamyyicmo; } wp_dequeue_script($eueuqacmukymcyya); wp_deregister_script($eueuqacmukymcyya); goto kkacggiosquqagew; qimomesqamyyicmo: wp_dequeue_style($eueuqacmukymcyya); wp_deregister_style($eueuqacmukymcyya); kkacggiosquqagew: ngagwiymmmycgscu: } qiawociayswicugw: augqweqsqioesmim: $eueuqacmukymcyya = "\157\x70\164\55\143\157\x6d\x62\x69\156\x65\x64\x2d{$okcwyqcycoicewqy}"; if (!($umgkqiimgiyocmqy && $iiaumsgauuyeqksw->exists($umgkqiimgiyocmqy))) { goto qcceyyqiuiqcyqqm; } $eeamcawaiqocomwy = $eygsasmqycagyayw->cwuqascimsgmiyca($umgkqiimgiyocmqy); if ($qmyyckkowqwaacqi) { goto aescssauecumgwso; } DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); goto cooeoemccqiyewks; aescssauecumgwso: DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); cooeoemccqiyewks: qcceyyqiuiqcyqqm: if (!$gaemwaimkkayyegw) { goto kqkymieyyqaoeymw; } if ($qmyyckkowqwaacqi) { goto ssesmiwwmsayksum; } DecoratorAsset::yocqwqycwegayowg($eueuqacmukymcyya, $gaemwaimkkayyegw); goto qkwckeqowgaokkuy; ssesmiwwmsayksum: DecoratorAsset::oiqqguakwcieaioo($eueuqacmukymcyya, $gaemwaimkkayyegw); qkwckeqowgaokkuy: kqkymieyyqaoeymw: gqyyccceswkqcmaa: } public abstract function qqcykaeioiwwaqos(); public function ywgkkwweiyqsyiwu($esaqeawoigqgagum) : bool { return $this->kcciqwskewsuaemk()->exists($esaqeawoigqgagum); } public function mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq) { return $this->ukacwyckseuqsqgc($egsumesakcaaukem->src); } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem) { return $ewgwqamkygiqaawc; } public function agkwcckksaegcsce($wkcwykowmmmwioqs, $sqeykgyoooqysmca) : string { $mkomwsiykqigmqca = Manipulate::cmaecekuqkwmemms("\117\x50\x54\x49\115\x49\132\x41\124\111\x4f\x4e\x5f\x43\117\115\x42\111\x4e\105\x5f\x50\x41\124\x48"); return "{$mkomwsiykqigmqca}\57{$sqeykgyoooqysmca}\57{$wkcwykowmmmwioqs}"; } public function ygykiseoqukukskk($sqeykgyoooqysmca, $cywsgckammeuyqyq = 4) { $ymqmyyeuycgmigyo = ManipulateString::uniqid($cywsgckammeuyqyq); $mkomwsiykqigmqca = $this->agkwcckksaegcsce($ymqmyyeuycgmigyo, $sqeykgyoooqysmca); if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto sykuuisikqcwuaqu; } $ymqmyyeuycgmigyo = $this->ygykiseoqukukskk($sqeykgyoooqysmca); sykuuisikqcwuaqu: return $ymqmyyeuycgmigyo; } public function wamiiiagcwwigucu($ewgwqamkygiqaawc, $sqeykgyoooqysmca) { $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\157\x70\x74\151\x6d\x69\x7a\141\164\x69\157\x6e\137\155\151\156\x69\x66\171\137{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\157\x70\164\151\155\x69\x7a\141\164\x69\157\x6e\x5f\141\144\x76\141\156\143\x65\137\155\151\156\151\146\171\137{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); return $ewgwqamkygiqaawc; } }
