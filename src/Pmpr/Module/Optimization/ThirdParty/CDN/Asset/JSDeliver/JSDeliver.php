<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             675819c784426             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Asset\JSDeliver; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\CDNData; class JSDeliver extends Container { const uaiimqkkiecgmkwm = "\x68\x74\164\160\163\72\57\x2f\x63\x64\156\56\152\163\x64\x65\x6c\x69\166\162\x2e\156\x65\x74\57"; const qswqmkwmqmggomug = "\x68\164\x74\x70\163\72\x2f\57\x64\x61\x74\141\x2e\x6a\163\x64\145\x6c\x69\166\162\56\143\157\155\x2f\166\61\57\x6c\157\x6f\153\x75\x70\x2f\x68\141\x73\150\x2f"; const iqcyaamgiewkaowe = "\57\x5c\x2f\134\x2a\133\x5c\x73\x5c\x53\135\x2a\77\134\x2a\134\x2f\174\134\57\x5c\x2f\x2e\x2a\77\50\77\x3a\x5c\156\174\x24\51\x2f"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\151\x74", [$this, "\151\156\151\164"])->qcsmikeggeemccuu(Process::ANALYZE, [$this, "\x79\161\147\x69\161\161\141\x79\x61\155\x79\145\x65\x6d\x75\165"])->qcsmikeggeemccuu(Process::akguikecmoggsykg, [$this, "\x61\x73\161\167\x71\x61\x71\157\167\x67\145\x79\x79\x61\171\167"]); } public function init() { Process::symcgieuakksimmu()->cywkaeaiwmweciui(); Process::symcgieuakksimmu()->mciwicaywiwmccoc(); } public function yqgiqqayamyeemuu() { global $wp_scripts, $wp_styles; $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $oammesyieqmwuwyi = $gcskoooiimggowew->iekyeyicoyyawomk()->cieaqygkucwoqwke([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::igecewwoemccgwsq, $gcskoooiimggowew::gycwocuuococmiqw), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::iocouekmygsaocuo)->wegeyaguowmkqiac()]); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { $uueqecyckaweeyai = $gcskoooiimggowew->waecsyqmwascmqoa($egsumesakcaaukem, Constants::acyomymuuygeoqks); $iakkeikwceeomgyq = $wp_styles->registered[$uueqecyckaweeyai] ?? $wp_scripts[$uueqecyckaweeyai] ?? false; if ($iakkeikwceeomgyq->src && ($eeamcawaiqocomwy = $this->giyqgiugumwkewgw($iakkeikwceeomgyq))) { $gcskoooiimggowew->gssiscqyqsacmeca()->wqikesawekycweoi($egsumesakcaaukem, [Constants::iocouekmygsaocuo => $eeamcawaiqocomwy]); } } } public function asqwqaqowgeyyayw() { $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $oammesyieqmwuwyi = $gcskoooiimggowew->cyyqcumykgmwakcs(CDNData::gycwocuuococmiqw); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { if (time() - strtotime($gcskoooiimggowew->waecsyqmwascmqoa($egsumesakcaaukem, $gcskoooiimggowew::equemyqwoqoousqq)) > DAY_IN_SECONDS * 2) { $gcskoooiimggowew->gssiscqyqsacmeca()->wqikesawekycweoi($egsumesakcaaukem, [Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo]); } } } public function giyqgiugumwkewgw($iakkeikwceeomgyq) : ?string { $myeuaywkqeuqowes = ''; $wsqkocmmsoiquqwm = $iakkeikwceeomgyq->src; if ($wsqkocmmsoiquqwm) { $muqcqaqwsaoagykg = []; $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); $kuuiuigeacouwmaa = strpos($wsqkocmmsoiquqwm, "\57\x2f"); if (false !== $kuuiuigeacouwmaa) { $keccaugmemegoimu = wp_safe_remote_get((0 === $kuuiuigeacouwmaa ? "\150\164\164\x70\x3a" : '') . $wsqkocmmsoiquqwm, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = wp_remote_retrieve_body($keccaugmemegoimu); } else { $ykscweuoqwqcmsmo = $iiaumsgauuyeqksw->souwykwwmyygqyqi($wsqkocmmsoiquqwm); } if ($ykscweuoqwqcmsmo) { $mgeemcksyiuqaemy = hash("\x73\x68\141\x32\x35\x36", $ykscweuoqwqcmsmo); $icwicymcioeyeyek = $this->yaouiiywcouyyimi($mgeemcksyiuqaemy); if (isset($icwicymcioeyeyek[Constants::kekgqaemqessuwmq])) { if ("\127\157\162\144\120\x72\x65\163\163\x2f\127\x6f\162\x64\120\x72\145\163\x73" === $icwicymcioeyeyek[Constants::NAME]) { $icwicymcioeyeyek[Constants::auugqowqueaocgsu] = get_bloginfo(Constants::auugqowqueaocgsu); } $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "{$icwicymcioeyeyek[Constants::squoamkioomemiyi]}\57{$icwicymcioeyeyek[Constants::NAME]}\x40{$icwicymcioeyeyek[Constants::auugqowqueaocgsu]}{$icwicymcioeyeyek[Constants::kekgqaemqessuwmq]}"; if ($this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { $myeuaywkqeuqowes = $mckmqeqaekwkwems; } } else { if (preg_match("\57\167\160\x2d\143\157\x6e\164\145\x6e\164\134\57\160\154\165\147\151\156\163\x5c\x2f\x28\77\x3c\160\x6c\165\147\151\156\x3e\133\136\134\57\x5d\x2a\51\x5c\57\x28\x3f\74\x66\151\x6c\145\76\x2e\x2a\x29\57\x69", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { if ($meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo] && $meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]) { $plugin_file = ABSPATH . "\x77\160\55\x63\x6f\156\164\x65\x6e\164\57\x70\x6c\x75\147\151\x6e\x73\57{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\56\x70\150\x70"; if (file_exists($plugin_file)) { $muqcqaqwsaoagykg = get_plugin_data($plugin_file); } else { $php_files = glob(ABSPATH . "\x77\x70\55\143\157\x6e\164\x65\156\164\57\160\x6c\165\147\x69\156\x73\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\57\52\56\160\150\160"); foreach ($php_files as $mkomwsiykqigmqca) { $muqcqaqwsaoagykg = get_plugin_data($mkomwsiykqigmqca); if ($muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]) { break; } } } if ($muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]) { $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\x77\x70\57\160\x6c\x75\x67\x69\156\x73\57{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\57\164\x61\147\x73\x2f{$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]}\57{$meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]}"; if ($this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { $myeuaywkqeuqowes = $mckmqeqaekwkwems; } } } } else { if (preg_match("\57\x77\160\x2d\x63\157\156\x74\x65\156\x74\x5c\x2f\x74\150\145\x6d\x65\x73\x5c\57\50\77\x3c\x74\x68\x65\155\x65\x3e\133\x5e\134\57\x5d\52\51\134\57\50\x3f\74\146\151\x6c\x65\x3e\x2e\52\51\57\x69", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { if ($meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy] && $meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]) { $mumucmmgemqwqiia = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ogciwyoqgciosgcw($meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy]); if ($mumucmmgemqwqiia->exists()) { $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\167\x70\x2f\x74\x68\145\155\145\163\57{$meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy]}\57{$mumucmmgemqwqiia->get(Constants::auugqowqueaocgsu)}\x2f{$meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]}"; if ($this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { $myeuaywkqeuqowes = $mckmqeqaekwkwems; } } } } } } if (!$this->cgsqaegiswcuoggi($ykscweuoqwqcmsmo)) { $myeuaywkqeuqowes = substr_replace($myeuaywkqeuqowes, "\56\x6d\151\156", strrpos($myeuaywkqeuqowes, "\x2e"), 0); } $gqqycaoyaweqigmi = wp_check_filetype($myeuaywkqeuqowes); $wuayakmyggcomiuy = wp_check_filetype($wsqkocmmsoiquqwm); if ($wuayakmyggcomiuy["\x65\x78\x74"] !== $gqqycaoyaweqigmi["\x65\170\164"]) { $myeuaywkqeuqowes = ''; } } } return $myeuaywkqeuqowes; } private function cgsqaegiswcuoggi($ykscweuoqwqcmsmo) : bool { $ymacoouqwcqwwagu = preg_replace(self::iqcyaamgiewkaowe, '', $ykscweuoqwqcmsmo); return strlen($ymacoouqwcqwwagu) / count(explode("\xa", $ymacoouqwcqwwagu)) > 200; } private function yaouiiywcouyyimi(string $mgeemcksyiuqaemy) : array { $sogksuscggsicmac = []; $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk(self::qswqmkwmqmggomug . $mgeemcksyiuqaemy, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); if ($ykscweuoqwqcmsmo) { $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ykscweuoqwqcmsmo); $sogksuscggsicmac["\163\x68\x61\62\65\x36"] = $mgeemcksyiuqaemy; } return $sogksuscggsicmac; } public function qycuagacqaecigyi(string $eeamcawaiqocomwy, string $mgeemcksyiuqaemy) : bool { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->awemwqyugsqgcsyu($eeamcawaiqocomwy, $this->eeykuoewogequiii()); if (is_wp_error($keccaugmemegoimu) || (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) !== 200) { return false; } $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); $kyquyseskckkouak = hash("\x73\150\141\62\x35\x36", $ykscweuoqwqcmsmo); return $kyquyseskckkouak === $mgeemcksyiuqaemy; } public function agkwcckksaegcsce(?string $ogomymegcoacqisg) : string { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if ($yyauwyaeewsickwk->skksumsyamssouqc($ogomymegcoacqisg, "\57\57")) { $cgmkimaosyyuqeyg = site_url(); if (str_starts_with($ogomymegcoacqisg, $cgmkimaosyyuqeyg)) { $acqcekoeswseswws = ltrim(str_replace($cgmkimaosyyuqeyg, '', $ogomymegcoacqisg), "\x2f"); } else { $acqcekoeswseswws = $ogomymegcoacqisg; } } else { $acqcekoeswseswws = ltrim($ogomymegcoacqisg, "\x2f"); } return $acqcekoeswseswws; } private function eeykuoewogequiii() : array { return ["\150\145\x61\144\145\x72\163" => ["\x55\x73\x65\x72\x2d\101\x67\x65\x6e\x74" => "\120\x4d\120\x52\40\x4f\160\164\151\x6d\x69\172\x61\x74\x69\157\x6e\x20\x4d\157\x64\165\154\x65\57" . $this->caokeucsksukesyo()->cqusmgskowmesgcg()->gikwwgqmwccescgy($this)]]; } }
