<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa800b89726             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Asset\JSDeliver; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\CDNData; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\Common; use WP_Dependencies; use WP_Scripts; class JSDeliver extends Common { const uaiimqkkiecgmkwm = "\x68\x74\164\x70\x73\72\57\x2f\143\x64\x6e\56\x6a\x73\x64\145\x6c\151\166\162\56\156\x65\x74\x2f"; const qswqmkwmqmggomug = "\150\x74\164\x70\163\72\x2f\57\x64\141\x74\x61\56\152\x73\x64\x65\154\151\166\162\x2e\143\x6f\155\57\166\x31\57\x6c\157\x6f\153\165\160\57\x68\141\x73\x68\57"; const iqcyaamgiewkaowe = "\57\x5c\57\x5c\x2a\133\134\x73\x5c\123\135\52\77\134\52\x5c\57\x7c\x5c\x2f\x5c\57\56\52\77\50\77\72\134\x6e\174\44\51\x2f"; public function mameiwsayuyquoeq() { Setting::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\151\x74", [$this, "\151\x6e\151\164"])->qcsmikeggeemccuu(Process::ANALYZE, [$this, "\x79\161\147\151\161\x71\x61\x79\141\x6d\171\x65\x65\155\x75\x75"])->qcsmikeggeemccuu(Process::akguikecmoggsykg, [$this, "\141\x73\x71\167\x71\141\161\157\167\147\145\171\x79\141\171\167"]); } public function init() { Process::symcgieuakksimmu()->cywkaeaiwmweciui(); Process::symcgieuakksimmu()->mciwicaywiwmccoc(); } public function yqgiqqayamyeemuu() { global $wp_scripts, $wp_styles; $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $oammesyieqmwuwyi = $gcskoooiimggowew->cwkywyqksyucoyia([Constants::igecewwoemccgwsq => $gcskoooiimggowew::gycwocuuococmiqw, Constants::iocouekmygsaocuo => [Constants::euoaaiqkqcqcgeco => Constants::weigugswsgkycqkc]]); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { $uueqecyckaweeyai = $gcskoooiimggowew->qogaqkcsogcqiaic($egsumesakcaaukem, Constants::acyomymuuygeoqks); $iakkeikwceeomgyq = $wp_styles->registered[$uueqecyckaweeyai] ?? $wp_scripts[$uueqecyckaweeyai] ?? false; if (!($iakkeikwceeomgyq->src && ($eeamcawaiqocomwy = $this->giyqgiugumwkewgw($iakkeikwceeomgyq)))) { goto wcioaoeiiawwqqqq; } $gcskoooiimggowew->wqikesawekycweoi($egsumesakcaaukem, [Constants::iocouekmygsaocuo => $eeamcawaiqocomwy]); wcioaoeiiawwqqqq: cqemkecywkkwaaii: } kmiqskugkmaiugae: } public function asqwqaqowgeyyayw() { $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $oammesyieqmwuwyi = $gcskoooiimggowew->cyyqcumykgmwakcs(CDNData::gycwocuuococmiqw); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { if (!(time() - strtotime($gcskoooiimggowew->qogaqkcsogcqiaic($egsumesakcaaukem, $gcskoooiimggowew::equemyqwoqoousqq)) > DAY_IN_SECONDS * 2)) { goto gkuwmiusoqwesqoo; } $gcskoooiimggowew->wqikesawekycweoi($egsumesakcaaukem, [Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo]); gkuwmiusoqwesqoo: ieoiygycmseqmmgc: } qaikeckkiwasykwk: } public function giyqgiugumwkewgw($iakkeikwceeomgyq) : ?string { $myeuaywkqeuqowes = ''; $wsqkocmmsoiquqwm = $iakkeikwceeomgyq->src; if (!$wsqkocmmsoiquqwm) { goto ksoawacwkgasqgmk; } $muqcqaqwsaoagykg = []; $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); $kuuiuigeacouwmaa = strpos($wsqkocmmsoiquqwm, "\57\x2f"); if (false !== $kuuiuigeacouwmaa) { goto wmsiqkyqsiysgcyy; } $ykscweuoqwqcmsmo = $iiaumsgauuyeqksw->souwykwwmyygqyqi($wsqkocmmsoiquqwm); goto ysggiwiksocomkek; wmsiqkyqsiysgcyy: $keccaugmemegoimu = wp_safe_remote_get((0 === $kuuiuigeacouwmaa ? "\x68\x74\164\160\72" : '') . $wsqkocmmsoiquqwm, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = wp_remote_retrieve_body($keccaugmemegoimu); ysggiwiksocomkek: if (!$ykscweuoqwqcmsmo) { goto ekmogkwmcqsykgsq; } $mgeemcksyiuqaemy = hash("\x73\150\x61\62\x35\66", $ykscweuoqwqcmsmo); $icwicymcioeyeyek = $this->yaouiiywcouyyimi($mgeemcksyiuqaemy); if (isset($icwicymcioeyeyek[Constants::kekgqaemqessuwmq])) { goto kumuckkicykgwqqm; } if (preg_match("\x2f\167\160\x2d\x63\157\x6e\x74\145\156\164\x5c\x2f\160\154\165\147\151\x6e\163\x5c\x2f\x28\77\x3c\160\x6c\x75\x67\x69\156\76\x5b\x5e\x5c\57\135\x2a\51\x5c\57\50\77\x3c\146\x69\x6c\x65\x3e\56\x2a\x29\57\x69", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto moqcomgmwiamuomq; } if (!preg_match("\x2f\167\160\x2d\143\x6f\x6e\x74\x65\x6e\164\x5c\57\164\x68\145\155\x65\163\x5c\57\x28\77\74\164\150\x65\x6d\145\x3e\133\136\134\x2f\135\52\x29\134\x2f\x28\77\74\x66\151\154\x65\76\56\x2a\51\57\151", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto uiqycwuommmmuowy; } if (!($meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy] && $meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq])) { goto iqamwyasyoqsugeu; } $mumucmmgemqwqiia = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ogciwyoqgciosgcw($meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy]); if (!$mumucmmgemqwqiia->exists()) { goto oqsecqsucukywaee; } $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\167\160\57\x74\x68\x65\155\x65\x73\x2f{$meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy]}\x2f{$mumucmmgemqwqiia->get(Constants::auugqowqueaocgsu)}\x2f{$meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto keewmqmgqegumiwa; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; keewmqmgqegumiwa: oqsecqsucukywaee: iqamwyasyoqsugeu: uiqycwuommmmuowy: goto omgkuuyoiugcymmy; moqcomgmwiamuomq: if (!($meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo] && $meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq])) { goto eqemoayymokeqaqi; } $plugin_file = ABSPATH . "\167\160\55\143\157\x6e\164\145\x6e\x74\x2f\160\x6c\165\x67\151\x6e\x73\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\56\x70\x68\160"; if (file_exists($plugin_file)) { goto giuswooyckooaoms; } $php_files = glob(ABSPATH . "\x77\x70\x2d\143\157\156\x74\145\x6e\x74\x2f\x70\154\165\147\x69\156\163\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\x2f\x2a\56\160\150\160"); foreach ($php_files as $mkomwsiykqigmqca) { $muqcqaqwsaoagykg = get_plugin_data($mkomwsiykqigmqca); if (!$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]) { goto omekuqkuugyocmoc; } goto aueiggyawkmkamum; omekuqkuugyocmoc: qswqmgiwiyyqwioa: } aueiggyawkmkamum: goto uogkcsaewswoaosw; giuswooyckooaoms: $muqcqaqwsaoagykg = get_plugin_data($plugin_file); uogkcsaewswoaosw: if (!$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]) { goto cykaikwsaskgeemo; } $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\x77\x70\57\160\154\x75\x67\151\x6e\163\57{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\57\164\x61\147\x73\57{$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]}\57{$meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto miqmoasmioksggkm; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; miqmoasmioksggkm: cykaikwsaskgeemo: eqemoayymokeqaqi: omgkuuyoiugcymmy: goto sguyyaygwyikaggk; kumuckkicykgwqqm: if (!("\x57\x6f\162\144\x50\162\x65\x73\x73\57\127\157\162\x64\x50\x72\x65\163\x73" === $icwicymcioeyeyek[Constants::NAME])) { goto wkqwywgikoyqkyeg; } $icwicymcioeyeyek[Constants::auugqowqueaocgsu] = get_bloginfo(Constants::auugqowqueaocgsu); wkqwywgikoyqkyeg: $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "{$icwicymcioeyeyek[Constants::squoamkioomemiyi]}\57{$icwicymcioeyeyek[Constants::NAME]}\100{$icwicymcioeyeyek[Constants::auugqowqueaocgsu]}{$icwicymcioeyeyek[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto wqieuwguumokgyqg; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; wqieuwguumokgyqg: sguyyaygwyikaggk: if ($this->cgsqaegiswcuoggi($ykscweuoqwqcmsmo)) { goto ayyyeiyaosoacoqm; } $myeuaywkqeuqowes = substr_replace($myeuaywkqeuqowes, "\x2e\x6d\x69\156", strrpos($myeuaywkqeuqowes, "\56"), 0); ayyyeiyaosoacoqm: $gqqycaoyaweqigmi = wp_check_filetype($myeuaywkqeuqowes); $wuayakmyggcomiuy = wp_check_filetype($wsqkocmmsoiquqwm); if (!($wuayakmyggcomiuy["\x65\x78\164"] !== $gqqycaoyaweqigmi["\x65\170\x74"])) { goto aiwygewkmigcwusw; } $myeuaywkqeuqowes = ''; aiwygewkmigcwusw: ekmogkwmcqsykgsq: ksoawacwkgasqgmk: return $myeuaywkqeuqowes; } private function cgsqaegiswcuoggi($ykscweuoqwqcmsmo) : bool { $ymacoouqwcqwwagu = preg_replace(self::iqcyaamgiewkaowe, '', $ykscweuoqwqcmsmo); return strlen($ymacoouqwcqwwagu) / count(explode("\12", $ymacoouqwcqwwagu)) > 200; } private function yaouiiywcouyyimi(string $mgeemcksyiuqaemy) : array { $sogksuscggsicmac = []; $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk(self::qswqmkwmqmggomug . $mgeemcksyiuqaemy, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); if (!$ykscweuoqwqcmsmo) { goto yqeqouqemksasmqc; } $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ykscweuoqwqcmsmo); $sogksuscggsicmac["\163\x68\x61\x32\65\x36"] = $mgeemcksyiuqaemy; yqeqouqemksasmqc: return $sogksuscggsicmac; } public function qycuagacqaecigyi(string $eeamcawaiqocomwy, string $mgeemcksyiuqaemy) : bool { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->awemwqyugsqgcsyu($eeamcawaiqocomwy, $this->eeykuoewogequiii()); if (!(is_wp_error($keccaugmemegoimu) || (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) !== 200)) { goto wgaqkacekoyiwggi; } return false; wgaqkacekoyiwggi: $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); $kyquyseskckkouak = hash("\x73\x68\141\62\65\66", $ykscweuoqwqcmsmo); return $kyquyseskckkouak === $mgeemcksyiuqaemy; } public function agkwcckksaegcsce(?string $ogomymegcoacqisg) : string { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if ($yyauwyaeewsickwk->skksumsyamssouqc($ogomymegcoacqisg, "\x2f\57")) { goto jkaemsuwyyoamwim; } $acqcekoeswseswws = ltrim($ogomymegcoacqisg, "\x2f"); goto suwsiaeoumiwkiqg; jkaemsuwyyoamwim: $cgmkimaosyyuqeyg = site_url(); if (str_starts_with($ogomymegcoacqisg, $cgmkimaosyyuqeyg)) { goto cscskwugoamcmqyu; } $acqcekoeswseswws = $ogomymegcoacqisg; goto emioyucskiowqumg; cscskwugoamcmqyu: $acqcekoeswseswws = ltrim(str_replace($cgmkimaosyyuqeyg, '', $ogomymegcoacqisg), "\x2f"); emioyucskiowqumg: suwsiaeoumiwkiqg: return $acqcekoeswseswws; } private function eeykuoewogequiii() : array { return ["\x68\x65\x61\144\x65\162\163" => ["\125\x73\145\162\x2d\x41\147\145\x6e\x74" => "\x50\x4d\x50\x52\40\117\x70\x74\151\155\x69\172\141\x74\151\x6f\x6e\40\x4d\157\x64\165\154\145\57" . $this->couwksyewgyeooqe()->gikwwgqmwccescgy()]]; } }
