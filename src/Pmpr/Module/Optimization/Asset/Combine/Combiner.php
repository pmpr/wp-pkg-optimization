<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624c1ef6c8776             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Combine; use _WP_Dependency; use Pmpr\Common\Foundation\Decorator\DecoratorAsset; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\Optimization\Manipulate\Manipulate; use WP_Dependencies; use WP_Styles; abstract class Combiner extends Common { const qqckkouoyyeimmac = 90000; const osusmouuukykwasy = 30000; public function gaiaksuyqkeeiqgo($ugmuiugkaygmsagq) { $megmggkiokqkcwou = 0; $ssimsmwwkqmmgqeg = []; $usyqkyomqcuocgoa = []; $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!($this->ocysssyiuaueqiei() && $ugmuiugkaygmsagq instanceof WP_Dependencies)) { goto sicgyiyiocyygkoc; } $qmyyckkowqwaacqi = $ugmuiugkaygmsagq instanceof WP_Styles; $okcwyqcycoicewqy = $qmyyckkowqwaacqi ? "\x63\x73\163" : "\x6a\163"; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $qamuuegkguqmisam = $this->agkwcckksaegcsce("\155\x61\156\x69\146\145\163\x74\56\152\x73\x6f\x6e", $okcwyqcycoicewqy); if ($iiaumsgauuyeqksw->exists($qamuuegkguqmisam)) { goto isewysikysqewkis; } $aoiemswgeosamowe = []; goto wiwoiyoakywqyaiy; isewysikysqewkis: $aoiemswgeosamowe = json_decode($iiaumsgauuyeqksw->souwykwwmyygqyqi($qamuuegkguqmisam), true); wiwoiyoakywqyaiy: $coagmqgaakeqmqmw = $ugmuiugkaygmsagq->queue; $eswwueuissckicww = ManipulateServer::ekcymmyqoceukosc(); $yyimiwcuegayoskq = ManipulateArray::get($aoiemswgeosamowe, $eswwueuissckicww); if (!$yyimiwcuegayoskq) { goto aoaqwygkaagiuuws; } $umgkqiimgiyocmqy = ManipulateArray::get($yyimiwcuegayoskq, "\155\141\151\x6e"); $siwkgiismmgqgykc = ManipulateArray::get($yyimiwcuegayoskq, "\x63\x6f\155\142\151\156\145\144"); $oqciymuueukmciea = ManipulateArray::get($yyimiwcuegayoskq, "\x69\x6e\154\151\x6e\145"); $gaemwaimkkayyegw = $iiaumsgauuyeqksw->souwykwwmyygqyqi($oqciymuueukmciea); goto esagiiawomyacuiw; aoaqwygkaagiuuws: foreach ($coagmqgaakeqmqmw as $momcykaoccoymeig => $eueuqacmukymcyya) { $egsumesakcaaukem = ManipulateArray::get($ugmuiugkaygmsagq->registered, $eueuqacmukymcyya); if (!$egsumesakcaaukem instanceof _WP_Dependency) { goto oeamoqweiueaueay; } $ogomymegcoacqisg = $this->mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq); $ewgwqamkygiqaawc = $this->miocmcoykayoyyau()->souwykwwmyygqyqi($ogomymegcoacqisg); $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem); if ($ewgwqamkygiqaawc) { goto eweaaismksecwagy; } ManipulateArray::unset($coagmqgaakeqmqmw, $momcykaoccoymeig); goto icumkkykaoqycqqu; eweaaismksecwagy: $oiegiwogmwmawkeo = mb_strlen($ewgwqamkygiqaawc, "\70\142\151\164"); if ($oiegiwogmwmawkeo <= self::osusmouuukykwasy && $megmggkiokqkcwou <= self::qqckkouoyyeimmac) { goto syusgosewwkoagoq; } if (!$egsumesakcaaukem->extra) { goto egesuwkqkmaigaoe; } foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (!($eqgoocgaqwqcimie && in_array($uusmaiomayssaecw, ["\141\x66\164\145\162", "\x62\145\x66\x6f\x72\145"]))) { goto ugogoekeckgcmuaw; } if (!is_array($eqgoocgaqwqcimie)) { goto ykqsuiyyosyeyscc; } $eqgoocgaqwqcimie = implode('', $eqgoocgaqwqcimie); ykqsuiyyosyeyscc: $usyqkyomqcuocgoa[] = $eqgoocgaqwqcimie; ugogoekeckgcmuaw: uscokkmquayiukag: } sqwuqegeiisoiiuq: egesuwkqkmaigaoe: $ssimsmwwkqmmgqeg[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; goto mcqucouuiuoagqwc; syusgosewwkoagoq: $megmggkiokqkcwou += $oiegiwogmwmawkeo; $usyqkyomqcuocgoa[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; mcqucouuiuoagqwc: icumkkykaoqycqqu: oeamoqweiueaueay: eouwacqiommmeaqc: } igmmqwyawcuuckkq: $wkcwykowmmmwioqs = "{$this->ygykiseoqukukskk($okcwyqcycoicewqy)}\x2f\x73\164\171\x6c\x65"; $umgkqiimgiyocmqy = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\x2e{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $oqciymuueukmciea = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\55\151\x6e\x6c\x69\156\145\x2e{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $ewwqgggaowaceeso = $this->wamiiiagcwwigucu(implode('', $ssimsmwwkqmmgqeg), $okcwyqcycoicewqy); $gaemwaimkkayyegw = $this->wamiiiagcwwigucu(implode('', $usyqkyomqcuocgoa), $okcwyqcycoicewqy); if (!($ewwqgggaowaceeso && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($umgkqiimgiyocmqy, $ewwqgggaowaceeso))) { goto owgsameoayaogsma; } $aoiemswgeosamowe[$eswwueuissckicww]["\155\x61\x69\x6e"] = $umgkqiimgiyocmqy; owgsameoayaogsma: if (!($gaemwaimkkayyegw && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($oqciymuueukmciea, $gaemwaimkkayyegw))) { goto kyiwsiakwgiwouyi; } $aoiemswgeosamowe[$eswwueuissckicww]["\151\156\x6c\151\x6e\145"] = $oqciymuueukmciea; kyiwsiakwgiwouyi: $siwkgiismmgqgykc = $coagmqgaakeqmqmw; if (!$siwkgiismmgqgykc) { goto awgmegueeqeyqamu; } $aoiemswgeosamowe[$eswwueuissckicww]["\143\157\x6d\x62\151\156\145\144"] = $siwkgiismmgqgykc; awgmegueeqeyqamu: if (!$aoiemswgeosamowe) { goto gqimwsyemoewagcy; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($qamuuegkguqmisam, json_encode($aoiemswgeosamowe, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)); gqimwsyemoewagcy: esagiiawomyacuiw: if (!is_array($siwkgiismmgqgykc)) { goto iuwkiyimqmgguose; } foreach ($siwkgiismmgqgykc as $eueuqacmukymcyya) { if ($qmyyckkowqwaacqi) { goto sksgcusuyqcwqswe; } wp_dequeue_script($eueuqacmukymcyya); wp_deregister_script($eueuqacmukymcyya); goto ayceeyuocgowqwsa; sksgcusuyqcwqswe: wp_dequeue_style($eueuqacmukymcyya); wp_deregister_style($eueuqacmukymcyya); ayceeyuocgowqwsa: qkyciyiwkmgkmquk: } maaisuqwkymeguys: iuwkiyimqmgguose: $eueuqacmukymcyya = "\157\x70\164\x2d\143\x6f\x6d\x62\x69\x6e\x65\x64\x2d{$okcwyqcycoicewqy}"; if (!($umgkqiimgiyocmqy && $iiaumsgauuyeqksw->exists($umgkqiimgiyocmqy))) { goto yyqygaokeccgugos; } $eeamcawaiqocomwy = $eygsasmqycagyayw->cwuqascimsgmiyca($umgkqiimgiyocmqy); if ($qmyyckkowqwaacqi) { goto yggseoaommssscwo; } DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); goto aeiemwacaiygemmg; yggseoaommssscwo: DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); aeiemwacaiygemmg: yyqygaokeccgugos: if (!$gaemwaimkkayyegw) { goto giuccakymqymawgk; } if ($qmyyckkowqwaacqi) { goto oeusomaaeekakake; } DecoratorAsset::yocqwqycwegayowg($eueuqacmukymcyya, $gaemwaimkkayyegw); goto kwuckkyqaygwgcuy; oeusomaaeekakake: DecoratorAsset::oiqqguakwcieaioo($eueuqacmukymcyya, $gaemwaimkkayyegw); kwuckkyqaygwgcuy: giuccakymqymawgk: sicgyiyiocyygkoc: } public abstract function qqcykaeioiwwaqos(); public function ywgkkwweiyqsyiwu($esaqeawoigqgagum) : bool { return $this->kcciqwskewsuaemk()->exists($esaqeawoigqgagum); } public function mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq) { return $this->ukacwyckseuqsqgc($egsumesakcaaukem->src); } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem) { return $ewgwqamkygiqaawc; } public function agkwcckksaegcsce($wkcwykowmmmwioqs, $sqeykgyoooqysmca) : string { $mkomwsiykqigmqca = Manipulate::cmaecekuqkwmemms("\x4f\x50\x54\111\x4d\x49\132\101\124\x49\x4f\x4e\137\103\x4f\x4d\x42\x49\x4e\105\137\x50\x41\124\x48"); return "{$mkomwsiykqigmqca}\57{$sqeykgyoooqysmca}\x2f{$wkcwykowmmmwioqs}"; } public function ygykiseoqukukskk($sqeykgyoooqysmca, $cywsgckammeuyqyq = 4) { $ymqmyyeuycgmigyo = ManipulateString::uniqid($cywsgckammeuyqyq); $mkomwsiykqigmqca = $this->agkwcckksaegcsce($ymqmyyeuycgmigyo, $sqeykgyoooqysmca); if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto cyosacayacumuaks; } $ymqmyyeuycgmigyo = $this->ygykiseoqukukskk($sqeykgyoooqysmca); cyosacayacumuaks: return $ymqmyyeuycgmigyo; } public function wamiiiagcwwigucu($ewgwqamkygiqaawc, $sqeykgyoooqysmca) { $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\x6f\x70\x74\x69\155\151\172\x61\164\x69\x6f\156\x5f\x6d\151\156\x69\x66\x79\x5f{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\x6f\x70\x74\151\x6d\x69\172\x61\x74\151\157\156\x5f\141\144\166\x61\x6e\x63\145\137\155\151\x6e\x69\x66\x79\137{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); return $ewgwqamkygiqaawc; } }
