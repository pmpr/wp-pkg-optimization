<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa77c6c5682             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; class Engine extends Common { const gwqkkoaoiwoiyiag = "\142\x72\x6f\x77\163\x65\x72\137\164\x74\154"; const ewoiqwokqwgckgko = "\x72\145\163\x70\145\x63\x74\x5f\157\x72\151\x67\151\x6e"; const semgeiqsogkegsee = "\141\143\x74\151\157\x6e\137\160\141\x72\141\x6d\x65\164\x65\162\163"; const meigsywkomcimgyk = "\x73\145\x74\x5f\x63\141\143\150\145\137\163\145\x74\x74\151\156\x67\x73"; const mcquuuwkyksuqaso = "\143\141\143\x68\145\137\x62\171\x5f\x64\145\166\151\x63\145\137\164\171\160\x65"; const sosggameqyisqsaw = "\143\141\x63\x68\145\x5f\x64\x65\x63\x65\x70\164\151\x6f\x6e\137\141\162\x6d\x6f\162"; private ?API $api = null; public function mgmmiqgyemaeicim() : API { if ($this->api) { goto ucaoyoamaycsiacq; } $this->api = API::symcgieuakksimmu(); ucaoyoamaycsiacq: return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto iuyagqakcieasiua; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); iuyagqakcieasiua: return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto oasisywuwssumsok; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); oasisywuwssumsok: return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto iaoyeugekskmewgs; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); iaoyeugekskmewgs: return $ksaameoqigiaoigg; } public function oakemcgacwakmawm() { $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $this->weysguygiseoukqw(Setting::kskcqqggeskwysas, ''); if (!($keyoqcuykssgcoau !== '')) { goto eciksmgaqikwegwq; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($keyoqcuykssgcoau); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto iokemmkgmcaksiqu; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto okagauksoqkoqygi; iokemmkgmcaksiqu: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, ''); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, ''); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, ''); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; okagauksoqkoqygi: eciksmgaqikwegwq: return $ksaameoqigiaoigg; } public function qmykgskisgoyymoc() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto camawumockccayaq; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $yqimccamkgmmuuyg->ymygowkkwyigwcea(); if (!(!$keyoqcuykssgcoau || !is_string($keyoqcuykssgcoau))) { goto kieyoaoawqacqamy; } $keyoqcuykssgcoau = $yqimccamkgmmuuyg->cgkaaimwgiesmwaw(); kieyoaoawqacqamy: if ($keyoqcuykssgcoau && is_string($keyoqcuykssgcoau)) { goto goswwiomuackymqi; } $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\103\141\156\40\156\x6f\164\40\x63\162\x65\141\x74\x65\x20\157\162\x20\x66\x65\164\x63\150\x20\x63\141\x63\x68\x65\x20\x72\165\154\145\x73\145\164\72\40{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keyoqcuykssgcoau)}"); goto gykuaukukosiocoy; goswwiomuackymqi: $acqqmqmcquukaqsc = $yqimccamkgmmuuyg->wooogwsuiygsuuso($keyoqcuykssgcoau); if (!($acqqmqmcquukaqsc && is_array($acqqmqmcquukaqsc))) { goto wiaesksmicgikqcm; } foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ymawgemiwyykseqg = $ekuqiqmikiicgoss[Constants::gouqcwikiiygyasc] ?? 0; if (!$ymawgemiwyykseqg) { goto auaigccmwqwsqsku; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $ymawgemiwyykseqg); auaigccmwqwsqsku: measoqewessauqma: } qckouamqueqiykqi: wiaesksmicgikqcm: $emqycqesyamqucem = $this->cqcmymomccgkimum($keyoqcuykssgcoau); if (!($emqycqesyamqucem && is_string($emqycqesyamqucem))) { goto agemeseegiuuowgo; } $oaugeqsymqaoycyq = $this->aucomcawieaawqeo($keyoqcuykssgcoau); if ($oaugeqsymqaoycyq && is_string($oaugeqsymqaoycyq)) { goto mcucegiogmuyogki; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $emqycqesyamqucem); goto gqaimiooakyykccy; mcucegiogmuyogki: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, $keyoqcuykssgcoau); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, $oaugeqsymqaoycyq); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, $emqycqesyamqucem); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; gqaimiooakyykccy: agemeseegiuuowgo: gykuaukukosiocoy: $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $ksaameoqigiaoigg); camawumockccayaq: return $ksaameoqigiaoigg; } public function aucomcawieaawqeo(?string $uiwqqmmiwqqqaugc = '', bool $seqoqauciqkusakq = true) { if ($uiwqqmmiwqqqaugc) { goto uuisaeysawuagysg; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); uuisaeysawuagysg: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\x28\x73\164\x61\x72\x74\163\137\167\x69\164\150\x28\150\x74\x74\160\56\162\x65\161\x75\x65\163\164\56\x75\x72\151\x2e\160\x61\164\x68\x2c\40\x22\57\42\x29\x29", Constants::eqkeooqcsscoggia => "\x43\141\x63\x68\145\40\x46\162\157\x6e\164\145\156\144\x20\101\x72\x65\x61", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => true, Constants::ccqguwgsqaugymus => [self::mcquuuwkyksuqaso => $seqoqauciqkusakq, self::sosggameqyisqsaw => true], self::gwqkkoaoiwoiyiag => [Constants::kwkgsmiueykcqisc => self::ewoiqwokqwgckgko]]]); } public function cqcmymomccgkimum(?string $uiwqqmmiwqqqaugc = '') { if ($uiwqqmmiwqqqaugc) { goto ggqeakyaggiuegek; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); ggqeakyaggiuegek: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\x28\x73\164\x61\x72\164\163\137\x77\151\x74\150\50\x68\x74\x74\x70\x2e\162\x65\161\165\x65\x73\164\x2e\165\x72\151\x2e\x70\141\164\150\54\40\x22\x2f\x77\160\x2d\141\144\x6d\151\156\x2f\x22\51\x29", Constants::eqkeooqcsscoggia => "\102\x79\160\x61\163\163\40\x42\141\143\x6b\x65\x6e\144\40\x41\x72\x65\x61", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => false]]); } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ammwuioucccacgwc() : bool { return !empty($this->weysguygiseoukqw(Setting::kskcqqggeskwysas)) && !empty($this->weysguygiseoukqw(Setting::qsqggqaguqoawwea)) && !empty($this->weysguygiseoukqw(Setting::uswuyomyeyomqumi)); } public function omimwscgequgiaue(bool $mgsisqykeuaqsmmk = true) { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (!empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { goto usgcoawgqswoeiec; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\x6c\157\x75\144\146\x6c\x61\162\x65\40\x25\163\x20\156\x6f\x74\40\x65\x6e\x74\145\162\x65\144\41", PR__MDL__OPTIMIZATION), __("\x65\55\155\x61\151\154", PR__MDL__OPTIMIZATION))); usgcoawgqswoeiec: switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (!empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { goto qesqgumuouyymcwa; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x43\154\x6f\x75\144\146\x6c\x61\x72\x65\40\x25\x73\x20\156\157\164\x20\145\156\x74\x65\x72\x65\144\x21", PR__MDL__OPTIMIZATION), __("\101\120\x49\40\124\157\x6b\145\156", PR__MDL__OPTIMIZATION))); qesqgumuouyymcwa: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->sawoqaskqkasksge()))) { goto csyoimsqgwcmiwki; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\x68\x65\x72\x65\40\x69\163\40\x61\x20\x70\162\157\x62\x6c\x65\x6d\40\157\x6e\x20\x66\145\x74\x63\x68\151\156\147\x20\162\x65\154\141\164\145\x64\x20\x64\x6f\155\141\x69\x6e\x20\x74\157\x20\145\156\x74\145\x72\145\144\x20\141\160\151\40\x74\157\x6b\145\156\56", PR__MDL__OPTIMIZATION)); csyoimsqgwcmiwki: goto qowcwmsiyscackaa; case Setting::fsekswokoseswcqm: if (!empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { goto ggqwcqssoauckuic; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x43\154\x6f\x75\144\146\154\141\162\145\x20\45\163\x20\156\157\164\x20\x65\x6e\164\x65\x72\x65\144\x21", PR__MDL__OPTIMIZATION), __("\x41\x50\x49\40\113\x65\x79", PR__MDL__OPTIMIZATION))); ggqwcqssoauckuic: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->mekmkysuwsuseaow()))) { goto ggwcauaeuagekeyo; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\x68\x65\162\x65\x20\151\163\x20\141\40\160\x72\x6f\142\154\145\x6d\x20\157\x6e\40\x66\145\x74\143\x68\x69\x6e\x67\x20\x72\145\x6c\141\164\145\x64\40\172\157\x6e\x65\40\x69\x64\x20\164\157\40\x65\156\x74\145\x72\145\144\40\141\x70\x69\40\x6b\145\171\56", PR__MDL__OPTIMIZATION)); ggwcauaeuagekeyo: goto qowcwmsiyscackaa; } aqigiwmamkowomiw: qowcwmsiyscackaa: return true; } }
