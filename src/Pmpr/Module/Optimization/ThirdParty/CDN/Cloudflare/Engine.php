<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668682bec25a4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use WP_Error; class Engine extends Common { private ?API $api = null; public function mgmmiqgyemaeicim() : API { if ($this->api) { goto cquyuwsisgqscemm; } $this->api = API::symcgieuakksimmu(); cquyuwsisgqscemm: return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto imykswegcuekqwio; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); imykswegcuekqwio: return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto eokikuciuqkyauum; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); eokikuciuqkyauum: return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto ykuqeyogsasokqis; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); ykuqeyogsasokqis: return $ksaameoqigiaoigg; } public function oakemcgacwakmawm() { $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $this->weysguygiseoukqw(Setting::kskcqqggeskwysas, ''); if (!($keyoqcuykssgcoau !== '')) { goto zggweikegkcgkmma; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($keyoqcuykssgcoau); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto mqaamqyoywyekiko; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto smkakiyekkqoggao; mqaamqyoywyekiko: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, ''); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, ''); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, ''); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; smkakiyekkqoggao: zggweikegkcgkmma: return $ksaameoqigiaoigg; } public function qmykgskisgoyymoc() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto maeccckgcsaaumkw; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $yqimccamkgmmuuyg->ymygowkkwyigwcea(); if (!(!$keyoqcuykssgcoau || !is_string($keyoqcuykssgcoau))) { goto yisoawmmammassqk; } $keyoqcuykssgcoau = $yqimccamkgmmuuyg->cgkaaimwgiesmwaw(); yisoawmmammassqk: if ($keyoqcuykssgcoau && is_string($keyoqcuykssgcoau)) { goto smksoismyouykeoa; } $this->oaumimwssciwumys("\103\x61\x6e\x20\156\x6f\164\x20\143\162\145\141\164\145\x20\157\x72\40\x66\x65\164\x63\x68\x20\143\x61\143\x68\145\x20\162\x75\154\145\x73\x65\164\x3a\40{$this->gcsweumukyckmgik($keyoqcuykssgcoau)}"); goto qwgkwokcyocqiyee; smksoismyouykeoa: $acqqmqmcquukaqsc = $yqimccamkgmmuuyg->wooogwsuiygsuuso($keyoqcuykssgcoau); if (!($acqqmqmcquukaqsc && is_array($acqqmqmcquukaqsc))) { goto umccwcqwkoiaakmu; } foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ymawgemiwyykseqg = $ekuqiqmikiicgoss[self::gouqcwikiiygyasc] ?? 0; if (!$ymawgemiwyykseqg) { goto coskmuqsawiaeyqg; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $ymawgemiwyykseqg); coskmuqsawiaeyqg: seqammocqkyswaim: } gcsosokicycukoyc: umccwcqwkoiaakmu: $emqycqesyamqucem = $this->cqcmymomccgkimum($keyoqcuykssgcoau); if (!($emqycqesyamqucem && is_string($emqycqesyamqucem))) { goto imquwacukaswoyka; } $oaugeqsymqaoycyq = $this->aucomcawieaawqeo($keyoqcuykssgcoau); if ($oaugeqsymqaoycyq && is_string($oaugeqsymqaoycyq)) { goto ekgkiioywougquka; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $emqycqesyamqucem); goto wyyowcsciaqkuiuq; ekgkiioywougquka: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, $keyoqcuykssgcoau); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, $oaugeqsymqaoycyq); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, $emqycqesyamqucem); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; wyyowcsciaqkuiuq: imquwacukaswoyka: qwgkwokcyocqiyee: $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $ksaameoqigiaoigg); maeccckgcsaaumkw: return $ksaameoqigiaoigg; } public function aucomcawieaawqeo(?string $uiwqqmmiwqqqaugc = '', bool $seqoqauciqkusakq = true) { if ($uiwqqmmiwqqqaugc) { goto gcoeaokkagaaeuse; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); gcoeaokkagaaeuse: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [self::uqgcmmosieyimiku => self::meigsywkomcimgyk, self::yyicwqsqaecyqwco => true, self::guqyegycwyqquagq => "\x28\163\x74\141\162\164\x73\x5f\x77\x69\x74\150\50\150\x74\164\x70\56\x72\x65\161\x75\x65\x73\x74\56\165\x72\x69\56\x70\141\164\x68\x2c\40\42\57\x22\x29\51", self::eqkeooqcsscoggia => "\103\x61\x63\150\x65\40\x46\162\x6f\x6e\164\145\x6e\144\x20\101\x72\145\x61", self::semgeiqsogkegsee => [self::mqakwueykamgwqci => true, self::ccqguwgsqaugymus => [self::mcquuuwkyksuqaso => $seqoqauciqkusakq, self::sosggameqyisqsaw => true], self::gwqkkoaoiwoiyiag => [self::kwkgsmiueykcqisc => self::ewoiqwokqwgckgko]]]); } public function cqcmymomccgkimum(?string $uiwqqmmiwqqqaugc = '') { if ($uiwqqmmiwqqqaugc) { goto kcqueaewmayywqeq; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); kcqueaewmayywqeq: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [self::uqgcmmosieyimiku => self::meigsywkomcimgyk, self::yyicwqsqaecyqwco => true, self::guqyegycwyqquagq => "\50\163\x74\141\x72\164\x73\x5f\x77\x69\164\150\x28\x68\x74\x74\160\56\162\x65\x71\x75\145\x73\x74\56\165\x72\x69\x2e\160\x61\164\x68\x2c\x20\42\x2f\x77\x70\x2d\x61\x64\x6d\x69\x6e\57\x22\51\x29", self::eqkeooqcsscoggia => "\102\171\x70\141\x73\x73\x20\x42\141\x63\x6b\x65\156\x64\x20\101\x72\145\141", self::semgeiqsogkegsee => [self::mqakwueykamgwqci => false]]); } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ammwuioucccacgwc() : bool { return !empty($this->weysguygiseoukqw(Setting::kskcqqggeskwysas)) && !empty($this->weysguygiseoukqw(Setting::qsqggqaguqoawwea)) && !empty($this->weysguygiseoukqw(Setting::uswuyomyeyomqumi)); } public function omimwscgequgiaue() { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (!empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { goto uagsgicwwcakecwq; } return $this->oemauiimmycumcsk(sprintf(__("\x43\154\157\x75\144\x66\x6c\x61\162\145\x20\45\x73\40\x6e\x6f\x74\x20\145\156\x74\145\162\x65\144\41", PR__MDL__OPTIMIZATION), __("\x65\55\x6d\141\151\154", PR__MDL__OPTIMIZATION))); uagsgicwwcakecwq: switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (!empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { goto yweucowesgsoewyc; } return $this->oemauiimmycumcsk(sprintf(__("\x43\154\x6f\165\x64\146\154\141\x72\x65\x20\45\x73\40\156\157\164\x20\145\156\164\x65\x72\145\144\41", PR__MDL__OPTIMIZATION), __("\101\x50\x49\40\x54\157\153\x65\156", PR__MDL__OPTIMIZATION))); yweucowesgsoewyc: if (!empty($yqimccamkgmmuuyg->sawoqaskqkasksge())) { goto ikygockuuyimmmwk; } return $this->oemauiimmycumcsk(__("\124\x68\145\162\145\x20\151\163\40\141\40\160\x72\157\x62\x6c\145\155\x20\157\x6e\x20\146\x65\164\143\x68\x69\x6e\147\x20\162\145\x6c\x61\164\145\x64\x20\x64\x6f\155\141\x69\x6e\40\164\157\x20\145\156\x74\145\x72\145\x64\40\141\160\x69\40\x74\x6f\153\x65\x6e\x2e", PR__MDL__OPTIMIZATION)); ikygockuuyimmmwk: goto qocgmocqauaaekii; case Setting::fsekswokoseswcqm: if (!empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { goto uwmcugkwqwcuqqsq; } return $this->oemauiimmycumcsk(sprintf(__("\x43\x6c\157\x75\144\146\154\141\162\x65\x20\45\x73\x20\156\157\164\40\x65\156\164\145\x72\145\144\x21", PR__MDL__OPTIMIZATION), __("\x41\x50\x49\x20\x4b\x65\171", PR__MDL__OPTIMIZATION))); uwmcugkwqwcuqqsq: if (!empty($yqimccamkgmmuuyg->mekmkysuwsuseaow())) { goto cycasoiysmksuwqk; } return $this->oemauiimmycumcsk(__("\124\x68\x65\x72\x65\x20\151\163\40\141\40\160\x72\157\142\154\x65\155\x20\157\156\x20\x66\145\x74\x63\150\151\x6e\147\x20\162\145\154\141\164\145\144\40\x7a\157\156\145\x20\151\x64\x20\164\x6f\40\145\156\x74\x65\162\x65\144\x20\x61\160\151\40\153\145\x79\56", PR__MDL__OPTIMIZATION)); cycasoiysmksuwqk: goto qocgmocqauaaekii; } gsggsmmwcmkgyyss: qocgmocqauaaekii: return true; } }
