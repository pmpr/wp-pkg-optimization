<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a555dadc1bf             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use WP_Error; class Engine extends Common { private ?API $api = null; public function mgmmiqgyemaeicim() : API { if ($this->api) { goto asmecuqiyyswueqe; } $this->api = API::symcgieuakksimmu(); asmecuqiyyswueqe: return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto csscmcacoikwsecs; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); csscmcacoikwsecs: return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto cuykwgmswkskqkyi; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); cuykwgmswkskqkyi: return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto kuicqywysciceggs; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); kuicqywysciceggs: return $ksaameoqigiaoigg; } public function oakemcgacwakmawm() { $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $this->weysguygiseoukqw(Setting::kskcqqggeskwysas, ''); if (!($keyoqcuykssgcoau !== '')) { goto eqkauqciwewmgeoi; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($keyoqcuykssgcoau); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto mkwskuycuyguqqok; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto sciwggaeogcoesiu; mkwskuycuyguqqok: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, ''); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, ''); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, ''); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; sciwggaeogcoesiu: eqkauqciwewmgeoi: return $ksaameoqigiaoigg; } public function qmykgskisgoyymoc() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto goacqqsgaaigyuaw; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $yqimccamkgmmuuyg->ymygowkkwyigwcea(); if (!(!$keyoqcuykssgcoau || !is_string($keyoqcuykssgcoau))) { goto kwagwqyusyiyoaqs; } $keyoqcuykssgcoau = $yqimccamkgmmuuyg->cgkaaimwgiesmwaw(); kwagwqyusyiyoaqs: if ($keyoqcuykssgcoau && is_string($keyoqcuykssgcoau)) { goto ocokwuuquaokmasc; } $this->oaumimwssciwumys("\103\141\x6e\x20\156\157\164\x20\143\x72\145\x61\x74\x65\x20\x6f\x72\40\146\x65\x74\143\150\40\x63\x61\143\150\x65\40\162\x75\154\145\163\x65\164\72\x20{$this->gcsweumukyckmgik($keyoqcuykssgcoau)}"); goto yiwiqaqmwiogawym; ocokwuuquaokmasc: $acqqmqmcquukaqsc = $yqimccamkgmmuuyg->wooogwsuiygsuuso($keyoqcuykssgcoau); if (!($acqqmqmcquukaqsc && is_array($acqqmqmcquukaqsc))) { goto sqiciiuwmykocycc; } foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ymawgemiwyykseqg = $ekuqiqmikiicgoss[self::gouqcwikiiygyasc] ?? 0; if (!$ymawgemiwyykseqg) { goto iomcaiwewsawiamu; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $ymawgemiwyykseqg); iomcaiwewsawiamu: kiqogmwcgcamwiig: } yowsmsiyimmimemc: sqiciiuwmykocycc: $emqycqesyamqucem = $this->cqcmymomccgkimum($keyoqcuykssgcoau); if (!($emqycqesyamqucem && is_string($emqycqesyamqucem))) { goto cggowoquuiwqkyew; } $oaugeqsymqaoycyq = $this->aucomcawieaawqeo($keyoqcuykssgcoau); if ($oaugeqsymqaoycyq && is_string($oaugeqsymqaoycyq)) { goto eequksumcoogyoem; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $emqycqesyamqucem); goto uukumskkeggaowck; eequksumcoogyoem: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, $keyoqcuykssgcoau); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, $oaugeqsymqaoycyq); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, $emqycqesyamqucem); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; uukumskkeggaowck: cggowoquuiwqkyew: yiwiqaqmwiogawym: $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $ksaameoqigiaoigg); goacqqsgaaigyuaw: return $ksaameoqigiaoigg; } public function aucomcawieaawqeo(?string $uiwqqmmiwqqqaugc = '', bool $seqoqauciqkusakq = true) { if ($uiwqqmmiwqqqaugc) { goto meawswgwagoqgkye; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); meawswgwagoqgkye: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [self::uqgcmmosieyimiku => self::meigsywkomcimgyk, self::yyicwqsqaecyqwco => true, self::guqyegycwyqquagq => "\50\x73\x74\141\162\x74\163\137\167\x69\x74\x68\50\x68\164\x74\160\56\162\x65\x71\165\145\163\164\x2e\x75\162\151\x2e\160\141\x74\150\x2c\40\42\57\42\51\x29", self::eqkeooqcsscoggia => "\103\x61\x63\x68\145\x20\106\162\157\156\x74\x65\x6e\144\40\x41\162\x65\141", self::semgeiqsogkegsee => [self::mqakwueykamgwqci => true, self::ccqguwgsqaugymus => [self::mcquuuwkyksuqaso => $seqoqauciqkusakq, self::sosggameqyisqsaw => true], self::gwqkkoaoiwoiyiag => [self::kwkgsmiueykcqisc => self::ewoiqwokqwgckgko]]]); } public function cqcmymomccgkimum(?string $uiwqqmmiwqqqaugc = '') { if ($uiwqqmmiwqqqaugc) { goto wcesymwqykqoyuqk; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); wcesymwqykqoyuqk: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [self::uqgcmmosieyimiku => self::meigsywkomcimgyk, self::yyicwqsqaecyqwco => true, self::guqyegycwyqquagq => "\50\x73\164\141\162\164\x73\x5f\x77\151\164\150\50\x68\x74\164\160\56\x72\145\x71\x75\x65\x73\164\x2e\x75\x72\151\56\160\x61\164\150\54\x20\x22\x2f\x77\160\x2d\141\144\155\x69\156\x2f\x22\x29\x29", self::eqkeooqcsscoggia => "\x42\171\160\141\x73\163\x20\x42\141\x63\153\145\x6e\144\x20\101\162\145\x61", self::semgeiqsogkegsee => [self::mqakwueykamgwqci => false]]); } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ammwuioucccacgwc() : bool { return !empty($this->weysguygiseoukqw(Setting::kskcqqggeskwysas)) && !empty($this->weysguygiseoukqw(Setting::qsqggqaguqoawwea)) && !empty($this->weysguygiseoukqw(Setting::uswuyomyeyomqumi)); } public function omimwscgequgiaue() { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (!empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { goto usqgaogkqgemuima; } return $this->oemauiimmycumcsk(sprintf(__("\103\154\157\165\x64\146\154\141\x72\x65\x20\x25\x73\x20\x6e\157\x74\x20\145\156\164\x65\162\x65\x64\x21", PR__MDL__OPTIMIZATION), __("\x65\x2d\155\141\151\x6c", PR__MDL__OPTIMIZATION))); usqgaogkqgemuima: switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (!empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { goto kecwuwwcwokuksyq; } return $this->oemauiimmycumcsk(sprintf(__("\103\154\x6f\165\144\146\154\x61\x72\x65\40\45\163\x20\156\157\164\x20\x65\x6e\164\x65\x72\x65\144\41", PR__MDL__OPTIMIZATION), __("\x41\120\x49\x20\124\x6f\x6b\145\x6e", PR__MDL__OPTIMIZATION))); kecwuwwcwokuksyq: if (!empty($yqimccamkgmmuuyg->sawoqaskqkasksge())) { goto qgegkeomwscwwiuw; } return $this->oemauiimmycumcsk(__("\124\150\x65\x72\145\x20\x69\163\40\x61\x20\x70\162\157\x62\154\145\155\40\x6f\156\40\x66\145\164\143\x68\x69\x6e\147\40\x72\145\154\x61\164\x65\144\x20\x64\157\155\x61\151\156\x20\x74\157\40\145\156\164\145\x72\145\144\x20\x61\160\x69\40\x74\157\x6b\x65\156\x2e", PR__MDL__OPTIMIZATION)); qgegkeomwscwwiuw: goto mswsoaimesegiiic; case Setting::fsekswokoseswcqm: if (!empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { goto qmiwsequckckoaei; } return $this->oemauiimmycumcsk(sprintf(__("\103\154\x6f\165\144\x66\154\141\162\145\x20\x25\x73\x20\x6e\x6f\164\x20\145\156\x74\145\x72\145\x64\x21", PR__MDL__OPTIMIZATION), __("\x41\120\x49\x20\x4b\x65\x79", PR__MDL__OPTIMIZATION))); qmiwsequckckoaei: if (!empty($yqimccamkgmmuuyg->mekmkysuwsuseaow())) { goto goeoymmqqqeeoime; } return $this->oemauiimmycumcsk(__("\x54\x68\x65\162\145\40\x69\163\x20\x61\x20\x70\x72\157\x62\154\145\x6d\40\x6f\x6e\x20\146\x65\164\143\x68\x69\x6e\147\40\162\x65\x6c\x61\x74\x65\144\40\172\157\156\x65\x20\151\144\40\x74\x6f\40\145\x6e\x74\x65\162\145\144\40\141\x70\x69\x20\153\x65\171\x2e", PR__MDL__OPTIMIZATION)); goeoymmqqqeeoime: goto mswsoaimesegiiic; } egasokooagakisiy: mswsoaimesegiiic: return true; } }
