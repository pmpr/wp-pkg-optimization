<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63217f9c731b7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Combine; use _WP_Dependency; use Pmpr\Common\Foundation\Decorator\DecoratorAsset; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\Optimization\Manipulate\Manipulate; use WP_Dependencies; use WP_Styles; abstract class Combiner extends Common { const qqckkouoyyeimmac = 90000; const osusmouuukykwasy = 30000; public function gaiaksuyqkeeiqgo($ugmuiugkaygmsagq) { $megmggkiokqkcwou = 0; $ssimsmwwkqmmgqeg = []; $usyqkyomqcuocgoa = []; $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!($this->ocysssyiuaueqiei() && $ugmuiugkaygmsagq instanceof WP_Dependencies)) { goto esaqcqqwuussiiwo; } $qmyyckkowqwaacqi = $ugmuiugkaygmsagq instanceof WP_Styles; $okcwyqcycoicewqy = $qmyyckkowqwaacqi ? "\x63\x73\x73" : "\152\x73"; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $qamuuegkguqmisam = $this->agkwcckksaegcsce("\x6d\x61\x6e\151\146\x65\163\164\x2e\x6a\163\157\x6e", $okcwyqcycoicewqy); if ($iiaumsgauuyeqksw->exists($qamuuegkguqmisam)) { goto uimeeckqksqeekqq; } $aoiemswgeosamowe = []; goto iuuuususuuuaieem; uimeeckqksqeekqq: $aoiemswgeosamowe = json_decode($iiaumsgauuyeqksw->souwykwwmyygqyqi($qamuuegkguqmisam), true); iuuuususuuuaieem: $coagmqgaakeqmqmw = $ugmuiugkaygmsagq->queue; $eswwueuissckicww = ManipulateServer::ekcymmyqoceukosc(); $yyimiwcuegayoskq = ManipulateArray::get($aoiemswgeosamowe, $eswwueuissckicww); if (!$yyimiwcuegayoskq) { goto yykqaowwsqgqysmq; } $umgkqiimgiyocmqy = ManipulateArray::get($yyimiwcuegayoskq, "\x6d\141\x69\156"); $siwkgiismmgqgykc = ManipulateArray::get($yyimiwcuegayoskq, "\143\x6f\x6d\x62\151\x6e\x65\144"); $oqciymuueukmciea = ManipulateArray::get($yyimiwcuegayoskq, "\x69\x6e\x6c\151\156\x65"); $gaemwaimkkayyegw = $iiaumsgauuyeqksw->souwykwwmyygqyqi($oqciymuueukmciea); goto kwiggogcgciwuwqk; yykqaowwsqgqysmq: foreach ($coagmqgaakeqmqmw as $momcykaoccoymeig => $eueuqacmukymcyya) { $egsumesakcaaukem = ManipulateArray::get($ugmuiugkaygmsagq->registered, $eueuqacmukymcyya); if (!$egsumesakcaaukem instanceof _WP_Dependency) { goto mogkoocsoeuyoqqa; } $ogomymegcoacqisg = $this->mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq); $ewgwqamkygiqaawc = $this->miocmcoykayoyyau()->souwykwwmyygqyqi($ogomymegcoacqisg); $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem); if ($ewgwqamkygiqaawc) { goto iesekaeqeomeuaui; } ManipulateArray::unset($coagmqgaakeqmqmw, $momcykaoccoymeig); goto wsesqmcqoiyyqkqi; iesekaeqeomeuaui: $oiegiwogmwmawkeo = mb_strlen($ewgwqamkygiqaawc, "\x38\x62\x69\164"); if ($oiegiwogmwmawkeo <= self::osusmouuukykwasy && $megmggkiokqkcwou <= self::qqckkouoyyeimmac) { goto mscyggqcesgqqksu; } if (!$egsumesakcaaukem->extra) { goto gamqcwuwkikwqoay; } foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (!($eqgoocgaqwqcimie && in_array($uusmaiomayssaecw, ["\x61\x66\x74\x65\162", "\x62\x65\146\x6f\162\145"]))) { goto ieqesiiageaauiuw; } if (!is_array($eqgoocgaqwqcimie)) { goto yiowgigkkwsoqcci; } $eqgoocgaqwqcimie = implode('', $eqgoocgaqwqcimie); yiowgigkkwsoqcci: $usyqkyomqcuocgoa[] = $eqgoocgaqwqcimie; ieqesiiageaauiuw: sioekkmekwygemyc: } qukocuwgakemmyga: gamqcwuwkikwqoay: $ssimsmwwkqmmgqeg[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; goto oyeyomcgkmgymogq; mscyggqcesgqqksu: $megmggkiokqkcwou += $oiegiwogmwmawkeo; $usyqkyomqcuocgoa[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; oyeyomcgkmgymogq: wsesqmcqoiyyqkqi: mogkoocsoeuyoqqa: uqokiksoqcwwqgio: } kocqqoyymosmuksu: $wkcwykowmmmwioqs = "{$this->ygykiseoqukukskk($okcwyqcycoicewqy)}\57\x73\x74\x79\x6c\145"; $umgkqiimgiyocmqy = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\56{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $oqciymuueukmciea = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\x2d\151\x6e\x6c\x69\x6e\145\x2e{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $ewwqgggaowaceeso = $this->wamiiiagcwwigucu(implode('', $ssimsmwwkqmmgqeg), $okcwyqcycoicewqy); $gaemwaimkkayyegw = $this->wamiiiagcwwigucu(implode('', $usyqkyomqcuocgoa), $okcwyqcycoicewqy); if (!($ewwqgggaowaceeso && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($umgkqiimgiyocmqy, $ewwqgggaowaceeso))) { goto wkwamkgkwykeqkec; } $aoiemswgeosamowe[$eswwueuissckicww]["\x6d\141\151\156"] = $umgkqiimgiyocmqy; wkwamkgkwykeqkec: if (!($gaemwaimkkayyegw && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($oqciymuueukmciea, $gaemwaimkkayyegw))) { goto oimkeqocuguqqsqk; } $aoiemswgeosamowe[$eswwueuissckicww]["\x69\x6e\154\151\x6e\145"] = $oqciymuueukmciea; oimkeqocuguqqsqk: $siwkgiismmgqgykc = $coagmqgaakeqmqmw; if (!$siwkgiismmgqgykc) { goto oeocukauoyosicso; } $aoiemswgeosamowe[$eswwueuissckicww]["\143\x6f\155\x62\151\156\x65\144"] = $siwkgiismmgqgykc; oeocukauoyosicso: if (!$aoiemswgeosamowe) { goto suqceasgacskcmkc; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($qamuuegkguqmisam, json_encode($aoiemswgeosamowe, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)); suqceasgacskcmkc: kwiggogcgciwuwqk: if (!is_array($siwkgiismmgqgykc)) { goto yuimwyoywaiiqacs; } foreach ($siwkgiismmgqgykc as $eueuqacmukymcyya) { if ($qmyyckkowqwaacqi) { goto yoqakewookqoqacm; } wp_dequeue_script($eueuqacmukymcyya); wp_deregister_script($eueuqacmukymcyya); goto gswcoeiisamakwii; yoqakewookqoqacm: wp_dequeue_style($eueuqacmukymcyya); wp_deregister_style($eueuqacmukymcyya); gswcoeiisamakwii: ikuuiauwouuqawuw: } uckewycoogsogwiy: yuimwyoywaiiqacs: $eueuqacmukymcyya = "\x6f\160\x74\x2d\143\157\155\x62\151\156\145\144\55{$okcwyqcycoicewqy}"; if (!($umgkqiimgiyocmqy && $iiaumsgauuyeqksw->exists($umgkqiimgiyocmqy))) { goto iwsmmkqaoksmocok; } $eeamcawaiqocomwy = $eygsasmqycagyayw->cwuqascimsgmiyca($umgkqiimgiyocmqy); if ($qmyyckkowqwaacqi) { goto ocywegekakimmwcq; } DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); goto emqswoaawgeyosmi; ocywegekakimmwcq: DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); emqswoaawgeyosmi: iwsmmkqaoksmocok: if (!$gaemwaimkkayyegw) { goto qiiigwkqeoewsuwm; } if ($qmyyckkowqwaacqi) { goto esikeyqyuikmaiek; } DecoratorAsset::yocqwqycwegayowg($eueuqacmukymcyya, $gaemwaimkkayyegw); goto okkmcocqokkskasy; esikeyqyuikmaiek: DecoratorAsset::oiqqguakwcieaioo($eueuqacmukymcyya, $gaemwaimkkayyegw); okkmcocqokkskasy: qiiigwkqeoewsuwm: esaqcqqwuussiiwo: } public abstract function qqcykaeioiwwaqos(); public function ywgkkwweiyqsyiwu($esaqeawoigqgagum) : bool { return $this->kcciqwskewsuaemk()->exists($esaqeawoigqgagum); } public function mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq) { return $this->ukacwyckseuqsqgc($egsumesakcaaukem->src); } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem) { return $ewgwqamkygiqaawc; } public function agkwcckksaegcsce($wkcwykowmmmwioqs, $sqeykgyoooqysmca) : string { $mkomwsiykqigmqca = Manipulate::cmaecekuqkwmemms("\x4f\x50\x54\111\x4d\x49\132\x41\x54\x49\117\116\137\x43\117\x4d\102\x49\116\x45\x5f\120\101\x54\110"); return "{$mkomwsiykqigmqca}\57{$sqeykgyoooqysmca}\x2f{$wkcwykowmmmwioqs}"; } public function ygykiseoqukukskk($sqeykgyoooqysmca, $cywsgckammeuyqyq = 4) { $ymqmyyeuycgmigyo = ManipulateString::uniqid($cywsgckammeuyqyq); $mkomwsiykqigmqca = $this->agkwcckksaegcsce($ymqmyyeuycgmigyo, $sqeykgyoooqysmca); if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto ikqeeaysmqgcgawq; } $ymqmyyeuycgmigyo = $this->ygykiseoqukukskk($sqeykgyoooqysmca); ikqeeaysmqgcgawq: return $ymqmyyeuycgmigyo; } public function wamiiiagcwwigucu($ewgwqamkygiqaawc, $sqeykgyoooqysmca) { $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\x6f\x70\x74\151\x6d\151\172\141\164\x69\x6f\156\137\x6d\151\156\x69\146\x79\137{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\157\160\164\x69\155\x69\x7a\x61\164\x69\157\x6e\x5f\141\x64\x76\x61\156\143\x65\x5f\x6d\151\x6e\x69\x66\171\x5f{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); return $ewgwqamkygiqaawc; } }
