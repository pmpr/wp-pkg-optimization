<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66c508f721bbb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Asset\JSDeliver; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\CDNData; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\Common; use WP_Dependencies; use WP_Scripts; class JSDeliver extends Common { const uaiimqkkiecgmkwm = "\x68\164\x74\x70\x73\x3a\x2f\57\x63\x64\156\56\x6a\163\144\145\154\x69\x76\162\56\x6e\x65\x74\x2f"; const qswqmkwmqmggomug = "\150\x74\x74\x70\163\72\x2f\57\144\141\164\x61\56\x6a\163\x64\145\154\x69\166\x72\x2e\x63\x6f\155\x2f\166\61\57\x6c\157\157\x6b\165\x70\x2f\150\141\163\150\x2f"; const iqcyaamgiewkaowe = "\x2f\x5c\x2f\134\x2a\133\134\163\x5c\123\135\x2a\x3f\x5c\x2a\134\57\174\134\57\134\57\56\52\77\50\77\x3a\134\156\174\x24\x29\x2f"; public function mameiwsayuyquoeq() { Setting::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\151\164", [$this, "\x69\x6e\x69\x74"])->qcsmikeggeemccuu(Process::ANALYZE, [$this, "\x79\x71\x67\151\x71\x71\x61\171\141\155\171\x65\x65\155\165\x75"])->qcsmikeggeemccuu(Process::akguikecmoggsykg, [$this, "\141\163\161\167\161\x61\x71\x6f\167\x67\x65\x79\171\141\x79\167"]); } public function init() { Process::symcgieuakksimmu()->cywkaeaiwmweciui(); Process::symcgieuakksimmu()->mciwicaywiwmccoc(); } public function yqgiqqayamyeemuu() { global $wp_scripts, $wp_styles; $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $oammesyieqmwuwyi = $gcskoooiimggowew->cwkywyqksyucoyia([self::igecewwoemccgwsq => $gcskoooiimggowew::gycwocuuococmiqw, self::iocouekmygsaocuo => [self::euoaaiqkqcqcgeco => self::weigugswsgkycqkc]]); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { $uueqecyckaweeyai = $gcskoooiimggowew->qogaqkcsogcqiaic($egsumesakcaaukem, self::acyomymuuygeoqks); $iakkeikwceeomgyq = $wp_styles->registered[$uueqecyckaweeyai] ?? $wp_scripts[$uueqecyckaweeyai] ?? false; if (!($iakkeikwceeomgyq->src && ($eeamcawaiqocomwy = $this->giyqgiugumwkewgw($iakkeikwceeomgyq)))) { goto gusgywuaimwooawc; } $gcskoooiimggowew->wqikesawekycweoi($egsumesakcaaukem, [$gcskoooiimggowew::iocouekmygsaocuo => $eeamcawaiqocomwy]); gusgywuaimwooawc: cauqmacqkssciwyq: } emagssesowicacoa: } public function asqwqaqowgeyyayw() { $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $oammesyieqmwuwyi = $gcskoooiimggowew->cyyqcumykgmwakcs(CDNData::gycwocuuococmiqw); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { if (!(time() - strtotime($gcskoooiimggowew->qogaqkcsogcqiaic($egsumesakcaaukem, $gcskoooiimggowew::equemyqwoqoousqq)) > DAY_IN_SECONDS * 2)) { goto awaaowoqskgokwiy; } $gcskoooiimggowew->wqikesawekycweoi($egsumesakcaaukem, [self::ciywsqoeiymemsys => self::sgoswgskyiiwkyuo]); awaaowoqskgokwiy: acmgueaoaaweiqqu: } uugwoygiyecgymgw: } public function giyqgiugumwkewgw($iakkeikwceeomgyq) : ?string { $myeuaywkqeuqowes = ''; $wsqkocmmsoiquqwm = $iakkeikwceeomgyq->src; if (!$wsqkocmmsoiquqwm) { goto gkwuewqmqeswqukg; } $muqcqaqwsaoagykg = []; $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); $kuuiuigeacouwmaa = strpos($wsqkocmmsoiquqwm, "\x2f\57"); if (false !== $kuuiuigeacouwmaa) { goto uqiekawkwcegsumy; } $ykscweuoqwqcmsmo = $iiaumsgauuyeqksw->souwykwwmyygqyqi($wsqkocmmsoiquqwm); goto kgikoagqwkuocesg; uqiekawkwcegsumy: $keccaugmemegoimu = wp_safe_remote_get((0 === $kuuiuigeacouwmaa ? "\x68\x74\164\x70\72" : '') . $wsqkocmmsoiquqwm, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = wp_remote_retrieve_body($keccaugmemegoimu); kgikoagqwkuocesg: if (!$ykscweuoqwqcmsmo) { goto wcekgciqeggiiwgk; } $mgeemcksyiuqaemy = hash("\163\x68\141\62\65\66", $ykscweuoqwqcmsmo); $icwicymcioeyeyek = $this->yaouiiywcouyyimi($mgeemcksyiuqaemy); if (isset($icwicymcioeyeyek[self::kekgqaemqessuwmq])) { goto aqaaqeucgoegeeuk; } if (preg_match("\x2f\167\x70\x2d\x63\x6f\156\x74\x65\156\x74\134\57\x70\154\165\147\151\x6e\163\x5c\x2f\x28\x3f\x3c\160\154\x75\x67\x69\x6e\76\x5b\136\x5c\57\x5d\52\51\x5c\x2f\50\x3f\74\146\x69\x6c\x65\x3e\x2e\x2a\51\x2f\151", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto iyikuwuweqigiuey; } if (!preg_match("\57\167\160\x2d\143\157\156\164\145\156\164\x5c\x2f\x74\x68\x65\155\x65\x73\134\57\x28\77\74\164\x68\x65\x6d\145\76\x5b\136\x5c\57\x5d\x2a\x29\134\57\x28\x3f\74\146\151\x6c\145\x3e\x2e\52\51\57\x69", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto gysmmooawoeggaow; } if (!($meyiiwcswqmuggyg[self::memoaagcmqqowsoy] && $meyiiwcswqmuggyg[self::kekgqaemqessuwmq])) { goto ceusyscosamyaiws; } $mumucmmgemqwqiia = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ogciwyoqgciosgcw($meyiiwcswqmuggyg[self::memoaagcmqqowsoy]); if (!$mumucmmgemqwqiia->exists()) { goto scgmwokeuqwiekkk; } $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\x77\x70\x2f\164\150\x65\155\145\163\x2f{$meyiiwcswqmuggyg[self::memoaagcmqqowsoy]}\57{$mumucmmgemqwqiia->get(self::auugqowqueaocgsu)}\57{$meyiiwcswqmuggyg[self::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto wcsysckgigeykkwy; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; wcsysckgigeykkwy: scgmwokeuqwiekkk: ceusyscosamyaiws: gysmmooawoeggaow: goto acsigwcaesyyoiie; iyikuwuweqigiuey: if (!($meyiiwcswqmuggyg[self::akoscweoqiuiiooo] && $meyiiwcswqmuggyg[self::kekgqaemqessuwmq])) { goto gsusqquicmukegcs; } $plugin_file = ABSPATH . "\167\x70\55\x63\x6f\156\164\x65\156\164\x2f\x70\154\x75\x67\151\x6e\x73\57{$meyiiwcswqmuggyg[self::akoscweoqiuiiooo]}\x2f{$meyiiwcswqmuggyg[self::akoscweoqiuiiooo]}\56\x70\150\160"; if (file_exists($plugin_file)) { goto cyqokqcacysioeyc; } $php_files = glob(ABSPATH . "\167\160\55\x63\157\156\164\x65\156\164\57\x70\x6c\x75\x67\151\x6e\163\x2f{$meyiiwcswqmuggyg[self::akoscweoqiuiiooo]}\x2f\52\56\x70\x68\x70"); foreach ($php_files as $mkomwsiykqigmqca) { $muqcqaqwsaoagykg = get_plugin_data($mkomwsiykqigmqca); if (!$muqcqaqwsaoagykg[self::auugqowqueaocgsu]) { goto cksoeiwawiygyiyg; } goto sgikkoswwyesqomo; cksoeiwawiygyiyg: aayysiegiyweiyuu: } sgikkoswwyesqomo: goto akwwuuiykscgicuw; cyqokqcacysioeyc: $muqcqaqwsaoagykg = get_plugin_data($plugin_file); akwwuuiykscgicuw: if (!$muqcqaqwsaoagykg[self::auugqowqueaocgsu]) { goto iikgiaocummweiga; } $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\x77\160\x2f\x70\x6c\x75\x67\x69\156\x73\x2f{$meyiiwcswqmuggyg[self::akoscweoqiuiiooo]}\57\164\141\x67\x73\57{$muqcqaqwsaoagykg[self::auugqowqueaocgsu]}\57{$meyiiwcswqmuggyg[self::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto ueqsiwuwumoqgsck; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; ueqsiwuwumoqgsck: iikgiaocummweiga: gsusqquicmukegcs: acsigwcaesyyoiie: goto wycmcqaauqkgegau; aqaaqeucgoegeeuk: if (!("\x57\x6f\162\x64\x50\162\x65\163\x73\57\127\x6f\162\x64\120\x72\145\x73\x73" === $icwicymcioeyeyek[self::NAME])) { goto skaayekywasksoug; } $icwicymcioeyeyek[self::auugqowqueaocgsu] = get_bloginfo(self::auugqowqueaocgsu); skaayekywasksoug: $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "{$icwicymcioeyeyek[self::squoamkioomemiyi]}\x2f{$icwicymcioeyeyek[self::NAME]}\100{$icwicymcioeyeyek[self::auugqowqueaocgsu]}{$icwicymcioeyeyek[self::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto gkoyqgogsukuowqi; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; gkoyqgogsukuowqi: wycmcqaauqkgegau: if ($this->cgsqaegiswcuoggi($ykscweuoqwqcmsmo)) { goto qcweoyigoaeacsow; } $myeuaywkqeuqowes = substr_replace($myeuaywkqeuqowes, "\56\155\x69\x6e", strrpos($myeuaywkqeuqowes, "\x2e"), 0); qcweoyigoaeacsow: $gqqycaoyaweqigmi = wp_check_filetype($myeuaywkqeuqowes); $wuayakmyggcomiuy = wp_check_filetype($wsqkocmmsoiquqwm); if (!($wuayakmyggcomiuy["\145\170\x74"] !== $gqqycaoyaweqigmi["\x65\x78\164"])) { goto iyceygqsmokgmams; } $myeuaywkqeuqowes = ''; iyceygqsmokgmams: wcekgciqeggiiwgk: gkwuewqmqeswqukg: return $myeuaywkqeuqowes; } private function cgsqaegiswcuoggi($ykscweuoqwqcmsmo) : bool { $ymacoouqwcqwwagu = preg_replace(self::iqcyaamgiewkaowe, '', $ykscweuoqwqcmsmo); return strlen($ymacoouqwcqwwagu) / count(explode("\xa", $ymacoouqwcqwwagu)) > 200; } private function yaouiiywcouyyimi(string $mgeemcksyiuqaemy) : array { $sogksuscggsicmac = []; $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk(self::qswqmkwmqmggomug . $mgeemcksyiuqaemy, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); if (!$ykscweuoqwqcmsmo) { goto sagemooicmgceiug; } $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ykscweuoqwqcmsmo); $sogksuscggsicmac["\163\150\x61\x32\x35\66"] = $mgeemcksyiuqaemy; sagemooicmgceiug: return $sogksuscggsicmac; } public function qycuagacqaecigyi(string $eeamcawaiqocomwy, string $mgeemcksyiuqaemy) : bool { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->awemwqyugsqgcsyu($eeamcawaiqocomwy, $this->eeykuoewogequiii()); if (!(is_wp_error($keccaugmemegoimu) || (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) !== 200)) { goto uqcwyyiykmwygeau; } return false; uqcwyyiykmwygeau: $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); $kyquyseskckkouak = hash("\163\150\x61\62\65\66", $ykscweuoqwqcmsmo); return $kyquyseskckkouak === $mgeemcksyiuqaemy; } public function agkwcckksaegcsce(?string $ogomymegcoacqisg) : string { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if ($yyauwyaeewsickwk->skksumsyamssouqc($ogomymegcoacqisg, "\57\57")) { goto uamuuwkyuqomqyuy; } $acqcekoeswseswws = ltrim($ogomymegcoacqisg, "\x2f"); goto ekwuycsiuqwycqea; uamuuwkyuqomqyuy: $cgmkimaosyyuqeyg = site_url(); if (str_starts_with($ogomymegcoacqisg, $cgmkimaosyyuqeyg)) { goto yeiokcoikcysyimu; } $acqcekoeswseswws = $ogomymegcoacqisg; goto kkmwwqyesmkescyg; yeiokcoikcysyimu: $acqcekoeswseswws = ltrim(str_replace($cgmkimaosyyuqeyg, '', $ogomymegcoacqisg), "\x2f"); kkmwwqyesmkescyg: ekwuycsiuqwycqea: return $acqcekoeswseswws; } private function eeykuoewogequiii() : array { return ["\150\x65\141\x64\x65\x72\x73" => ["\125\x73\145\162\x2d\x41\147\145\156\x74" => "\120\115\x50\122\x20\x4f\x70\164\151\x6d\151\172\141\x74\151\157\156\40\115\157\x64\x75\154\x65\x2f" . $this->couwksyewgyeooqe()->gikwwgqmwccescgy()]]; } }
