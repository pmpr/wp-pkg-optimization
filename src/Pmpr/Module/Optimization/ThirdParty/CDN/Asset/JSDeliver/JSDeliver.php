<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce11a697384             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Asset\JSDeliver; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\CDNData; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\Common; use WP_Dependencies; use WP_Scripts; class JSDeliver extends Common { const uaiimqkkiecgmkwm = "\x68\164\164\x70\x73\72\x2f\x2f\x63\144\x6e\x2e\152\x73\144\145\x6c\151\x76\162\x2e\x6e\145\x74\57"; const qswqmkwmqmggomug = "\150\x74\164\x70\163\x3a\x2f\57\x64\141\164\x61\x2e\152\x73\144\x65\154\x69\x76\x72\56\143\x6f\x6d\57\x76\x31\57\154\157\157\x6b\x75\x70\x2f\150\x61\x73\150\57"; const iqcyaamgiewkaowe = "\57\134\x2f\134\52\133\x5c\x73\x5c\123\135\x2a\x3f\134\x2a\x5c\x2f\x7c\134\x2f\134\x2f\56\x2a\x3f\x28\x3f\x3a\134\x6e\174\x24\51\57"; public function mameiwsayuyquoeq() { Setting::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\x69\164", [$this, "\x69\156\x69\164"])->qcsmikeggeemccuu(Process::ANALYZE, [$this, "\171\x71\147\x69\161\x71\x61\171\x61\155\x79\145\145\x6d\x75\165"])->qcsmikeggeemccuu(Process::akguikecmoggsykg, [$this, "\x61\163\161\x77\161\141\161\x6f\x77\x67\145\171\x79\x61\x79\x77"]); } public function init() { Process::symcgieuakksimmu()->cywkaeaiwmweciui(); Process::symcgieuakksimmu()->mciwicaywiwmccoc(); } public function yqgiqqayamyeemuu() { global $wp_scripts, $wp_styles; $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $oammesyieqmwuwyi = $gcskoooiimggowew->cwkywyqksyucoyia([Constants::igecewwoemccgwsq => $gcskoooiimggowew::gycwocuuococmiqw, Constants::iocouekmygsaocuo => [Constants::euoaaiqkqcqcgeco => Constants::weigugswsgkycqkc]]); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { $uueqecyckaweeyai = $gcskoooiimggowew->qogaqkcsogcqiaic($egsumesakcaaukem, Constants::acyomymuuygeoqks); $iakkeikwceeomgyq = $wp_styles->registered[$uueqecyckaweeyai] ?? $wp_scripts[$uueqecyckaweeyai] ?? false; if (!($iakkeikwceeomgyq->src && ($eeamcawaiqocomwy = $this->giyqgiugumwkewgw($iakkeikwceeomgyq)))) { goto wcsysckgigeykkwy; } $gcskoooiimggowew->wqikesawekycweoi($egsumesakcaaukem, [Constants::iocouekmygsaocuo => $eeamcawaiqocomwy]); wcsysckgigeykkwy: gsusqquicmukegcs: } iikgiaocummweiga: } public function asqwqaqowgeyyayw() { $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $oammesyieqmwuwyi = $gcskoooiimggowew->cyyqcumykgmwakcs(CDNData::gycwocuuococmiqw); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { if (!(time() - strtotime($gcskoooiimggowew->qogaqkcsogcqiaic($egsumesakcaaukem, $gcskoooiimggowew::equemyqwoqoousqq)) > DAY_IN_SECONDS * 2)) { goto gysmmooawoeggaow; } $gcskoooiimggowew->wqikesawekycweoi($egsumesakcaaukem, [Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo]); gysmmooawoeggaow: ceusyscosamyaiws: } scgmwokeuqwiekkk: } public function giyqgiugumwkewgw($iakkeikwceeomgyq) : ?string { $myeuaywkqeuqowes = ''; $wsqkocmmsoiquqwm = $iakkeikwceeomgyq->src; if (!$wsqkocmmsoiquqwm) { goto ksawwekgswywwuwm; } $muqcqaqwsaoagykg = []; $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); $kuuiuigeacouwmaa = strpos($wsqkocmmsoiquqwm, "\x2f\x2f"); if (false !== $kuuiuigeacouwmaa) { goto iyikuwuweqigiuey; } $ykscweuoqwqcmsmo = $iiaumsgauuyeqksw->souwykwwmyygqyqi($wsqkocmmsoiquqwm); goto acsigwcaesyyoiie; iyikuwuweqigiuey: $keccaugmemegoimu = wp_safe_remote_get((0 === $kuuiuigeacouwmaa ? "\150\x74\x74\160\x3a" : '') . $wsqkocmmsoiquqwm, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = wp_remote_retrieve_body($keccaugmemegoimu); acsigwcaesyyoiie: if (!$ykscweuoqwqcmsmo) { goto umcyeiusoakewyaa; } $mgeemcksyiuqaemy = hash("\x73\x68\x61\62\x35\66", $ykscweuoqwqcmsmo); $icwicymcioeyeyek = $this->yaouiiywcouyyimi($mgeemcksyiuqaemy); if (isset($icwicymcioeyeyek[Constants::kekgqaemqessuwmq])) { goto owaimkmgemoqewmm; } if (preg_match("\x2f\x77\160\55\x63\x6f\x6e\x74\x65\156\x74\134\57\160\x6c\165\x67\x69\x6e\163\x5c\57\x28\77\x3c\x70\154\165\x67\x69\x6e\x3e\133\136\134\57\x5d\52\51\x5c\57\x28\77\x3c\x66\151\x6c\x65\x3e\x2e\x2a\51\57\x69", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto yggciikgkomgeqsc; } if (!preg_match("\57\x77\x70\x2d\x63\x6f\156\x74\x65\156\x74\134\57\164\150\145\155\x65\x73\134\x2f\50\x3f\x3c\x74\x68\145\155\x65\x3e\133\x5e\134\x2f\135\52\51\x5c\x2f\x28\77\x3c\x66\151\154\145\76\56\x2a\x29\57\x69", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto cieumoqayigkoocy; } if (!($meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy] && $meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq])) { goto iyaugygcsmqqqkmo; } $mumucmmgemqwqiia = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ogciwyoqgciosgcw($meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy]); if (!$mumucmmgemqwqiia->exists()) { goto ekwuycsiuqwycqea; } $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\x77\x70\x2f\164\x68\x65\x6d\x65\163\57{$meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy]}\x2f{$mumucmmgemqwqiia->get(Constants::auugqowqueaocgsu)}\57{$meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto uamuuwkyuqomqyuy; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; uamuuwkyuqomqyuy: ekwuycsiuqwycqea: iyaugygcsmqqqkmo: cieumoqayigkoocy: goto eoeiaccouaymakgm; yggciikgkomgeqsc: if (!($meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo] && $meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq])) { goto kkmwwqyesmkescyg; } $plugin_file = ABSPATH . "\167\160\x2d\143\x6f\156\x74\145\x6e\164\x2f\x70\x6c\x75\147\151\x6e\163\57{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\x2e\x70\150\160"; if (file_exists($plugin_file)) { goto gkwuewqmqeswqukg; } $php_files = glob(ABSPATH . "\167\160\x2d\143\x6f\156\164\145\156\164\x2f\x70\x6c\x75\x67\151\x6e\163\57{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\x2f\x2a\56\x70\150\x70"); foreach ($php_files as $mkomwsiykqigmqca) { $muqcqaqwsaoagykg = get_plugin_data($mkomwsiykqigmqca); if (!$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]) { goto wcekgciqeggiiwgk; } goto qcweoyigoaeacsow; wcekgciqeggiiwgk: iyceygqsmokgmams: } qcweoyigoaeacsow: goto sagemooicmgceiug; gkwuewqmqeswqukg: $muqcqaqwsaoagykg = get_plugin_data($plugin_file); sagemooicmgceiug: if (!$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]) { goto yeiokcoikcysyimu; } $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\x77\x70\x2f\x70\154\x75\147\151\156\x73\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\x2f\x74\x61\147\163\x2f{$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]}\x2f{$meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto uqcwyyiykmwygeau; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; uqcwyyiykmwygeau: yeiokcoikcysyimu: kkmwwqyesmkescyg: eoeiaccouaymakgm: goto ysoqeuugiuswykyu; owaimkmgemoqewmm: if (!("\127\x6f\x72\x64\120\162\x65\x73\x73\x2f\127\157\162\x64\120\162\145\163\x73" === $icwicymcioeyeyek[Constants::NAME])) { goto aqaaqeucgoegeeuk; } $icwicymcioeyeyek[Constants::auugqowqueaocgsu] = get_bloginfo(Constants::auugqowqueaocgsu); aqaaqeucgoegeeuk: $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "{$icwicymcioeyeyek[Constants::squoamkioomemiyi]}\x2f{$icwicymcioeyeyek[Constants::NAME]}\x40{$icwicymcioeyeyek[Constants::auugqowqueaocgsu]}{$icwicymcioeyeyek[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto wycmcqaauqkgegau; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; wycmcqaauqkgegau: ysoqeuugiuswykyu: if ($this->cgsqaegiswcuoggi($ykscweuoqwqcmsmo)) { goto usmuqsuwuueogimc; } $myeuaywkqeuqowes = substr_replace($myeuaywkqeuqowes, "\x2e\155\151\x6e", strrpos($myeuaywkqeuqowes, "\x2e"), 0); usmuqsuwuueogimc: $gqqycaoyaweqigmi = wp_check_filetype($myeuaywkqeuqowes); $wuayakmyggcomiuy = wp_check_filetype($wsqkocmmsoiquqwm); if (!($wuayakmyggcomiuy["\x65\170\164"] !== $gqqycaoyaweqigmi["\145\170\x74"])) { goto koiiaewwicsckseu; } $myeuaywkqeuqowes = ''; koiiaewwicsckseu: umcyeiusoakewyaa: ksawwekgswywwuwm: return $myeuaywkqeuqowes; } private function cgsqaegiswcuoggi($ykscweuoqwqcmsmo) : bool { $ymacoouqwcqwwagu = preg_replace(self::iqcyaamgiewkaowe, '', $ykscweuoqwqcmsmo); return strlen($ymacoouqwcqwwagu) / count(explode("\xa", $ymacoouqwcqwwagu)) > 200; } private function yaouiiywcouyyimi(string $mgeemcksyiuqaemy) : array { $sogksuscggsicmac = []; $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk(self::qswqmkwmqmggomug . $mgeemcksyiuqaemy, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); if (!$ykscweuoqwqcmsmo) { goto yuqisiwgqacgmsym; } $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ykscweuoqwqcmsmo); $sogksuscggsicmac["\x73\x68\141\62\x35\66"] = $mgeemcksyiuqaemy; yuqisiwgqacgmsym: return $sogksuscggsicmac; } public function qycuagacqaecigyi(string $eeamcawaiqocomwy, string $mgeemcksyiuqaemy) : bool { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->awemwqyugsqgcsyu($eeamcawaiqocomwy, $this->eeykuoewogequiii()); if (!(is_wp_error($keccaugmemegoimu) || (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) !== 200)) { goto wickgagwgqqsomum; } return false; wickgagwgqqsomum: $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); $kyquyseskckkouak = hash("\163\150\141\62\65\66", $ykscweuoqwqcmsmo); return $kyquyseskckkouak === $mgeemcksyiuqaemy; } public function agkwcckksaegcsce(?string $ogomymegcoacqisg) : string { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if ($yyauwyaeewsickwk->skksumsyamssouqc($ogomymegcoacqisg, "\57\x2f")) { goto qmoisuweiskkekca; } $acqcekoeswseswws = ltrim($ogomymegcoacqisg, "\x2f"); goto wywwieycqskuqcwc; qmoisuweiskkekca: $cgmkimaosyyuqeyg = site_url(); if (str_starts_with($ogomymegcoacqisg, $cgmkimaosyyuqeyg)) { goto wmwgeoequuwwwywa; } $acqcekoeswseswws = $ogomymegcoacqisg; goto uqugcugeomqakcqo; wmwgeoequuwwwywa: $acqcekoeswseswws = ltrim(str_replace($cgmkimaosyyuqeyg, '', $ogomymegcoacqisg), "\57"); uqugcugeomqakcqo: wywwieycqskuqcwc: return $acqcekoeswseswws; } private function eeykuoewogequiii() : array { return ["\150\x65\141\x64\x65\162\163" => ["\x55\x73\145\x72\x2d\x41\147\145\x6e\164" => "\120\115\120\122\x20\117\160\x74\x69\155\x69\x7a\141\x74\x69\157\x6e\x20\115\x6f\144\165\154\145\57" . $this->couwksyewgyeooqe()->gikwwgqmwccescgy()]]; } }
