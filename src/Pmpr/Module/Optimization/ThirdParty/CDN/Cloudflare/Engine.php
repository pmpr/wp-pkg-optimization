<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6758115135c8b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; class Engine extends Common { const gwqkkoaoiwoiyiag = "\142\162\157\167\x73\145\x72\137\164\164\154"; const ewoiqwokqwgckgko = "\x72\145\x73\160\145\143\x74\x5f\157\x72\151\x67\151\x6e"; const semgeiqsogkegsee = "\141\x63\164\151\x6f\x6e\137\160\x61\162\141\155\x65\x74\145\x72\x73"; const meigsywkomcimgyk = "\x73\x65\x74\137\x63\x61\143\x68\145\x5f\x73\145\x74\x74\x69\x6e\x67\163"; const mcquuuwkyksuqaso = "\143\141\143\150\x65\137\x62\x79\x5f\144\145\x76\151\143\145\137\164\171\160\145"; const sosggameqyisqsaw = "\143\141\143\150\x65\x5f\x64\x65\143\145\x70\164\x69\157\156\x5f\x61\x72\x6d\157\x72"; private ?API $api = null; public function mgmmiqgyemaeicim() : API { if (!$this->api) { $this->api = API::symcgieuakksimmu(); } return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (!is_wp_error($ksaameoqigiaoigg)) { $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); } return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (!is_wp_error($ksaameoqigiaoigg)) { $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); } return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (!is_wp_error($ksaameoqigiaoigg)) { $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); } return $ksaameoqigiaoigg; } public function oakemcgacwakmawm() { $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $this->weysguygiseoukqw(Setting::kskcqqggeskwysas, ''); if ($keyoqcuykssgcoau !== '') { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($keyoqcuykssgcoau); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, ''); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, ''); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, ''); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; } else { $ksaameoqigiaoigg = $kwogmsuwiyakckuo; } } return $ksaameoqigiaoigg; } public function qmykgskisgoyymoc() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (!is_wp_error($ksaameoqigiaoigg)) { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $yqimccamkgmmuuyg->ymygowkkwyigwcea(); if (!$keyoqcuykssgcoau || !is_string($keyoqcuykssgcoau)) { $keyoqcuykssgcoau = $yqimccamkgmmuuyg->cgkaaimwgiesmwaw(); } if ($keyoqcuykssgcoau && is_string($keyoqcuykssgcoau)) { $acqqmqmcquukaqsc = $yqimccamkgmmuuyg->wooogwsuiygsuuso($keyoqcuykssgcoau); if ($acqqmqmcquukaqsc && is_array($acqqmqmcquukaqsc)) { foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ymawgemiwyykseqg = $ekuqiqmikiicgoss[Constants::gouqcwikiiygyasc] ?? 0; if ($ymawgemiwyykseqg) { $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $ymawgemiwyykseqg); } } } $emqycqesyamqucem = $this->cqcmymomccgkimum($keyoqcuykssgcoau); if ($emqycqesyamqucem && is_string($emqycqesyamqucem)) { $oaugeqsymqaoycyq = $this->aucomcawieaawqeo($keyoqcuykssgcoau); if ($oaugeqsymqaoycyq && is_string($oaugeqsymqaoycyq)) { $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, $keyoqcuykssgcoau); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, $oaugeqsymqaoycyq); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, $emqycqesyamqucem); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; } else { $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $emqycqesyamqucem); } } } else { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x43\x61\x6e\40\156\x6f\164\x20\143\x72\145\x61\x74\x65\40\157\162\40\146\x65\x74\143\150\x20\143\141\x63\150\x65\x20\162\x75\x6c\145\163\145\164\72\x20{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keyoqcuykssgcoau)}"); } $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $ksaameoqigiaoigg); } return $ksaameoqigiaoigg; } public function aucomcawieaawqeo(?string $uiwqqmmiwqqqaugc = '', bool $seqoqauciqkusakq = true) { if (!$uiwqqmmiwqqqaugc) { $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); } return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\x28\x73\x74\141\162\x74\x73\137\167\x69\164\x68\50\150\x74\x74\x70\x2e\x72\145\x71\x75\145\x73\x74\56\165\162\x69\56\160\x61\x74\150\54\x20\42\x2f\x22\51\51", Constants::eqkeooqcsscoggia => "\x43\x61\x63\150\145\x20\x46\162\157\156\164\145\x6e\144\40\x41\162\145\x61", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => true, Constants::ccqguwgsqaugymus => [self::mcquuuwkyksuqaso => $seqoqauciqkusakq, self::sosggameqyisqsaw => true], self::gwqkkoaoiwoiyiag => [Constants::kwkgsmiueykcqisc => self::ewoiqwokqwgckgko]]]); } public function cqcmymomccgkimum(?string $uiwqqmmiwqqqaugc = '') { if (!$uiwqqmmiwqqqaugc) { $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); } return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\x28\163\x74\141\162\x74\x73\x5f\167\151\164\150\x28\x68\x74\x74\160\56\162\145\161\165\x65\163\164\56\x75\x72\x69\56\160\141\164\x68\x2c\40\42\x2f\x77\x70\55\141\144\155\x69\x6e\x2f\x22\x29\51", Constants::eqkeooqcsscoggia => "\x42\x79\x70\141\163\163\x20\102\x61\143\153\145\x6e\x64\x20\101\x72\145\141", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => false]]); } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ammwuioucccacgwc() : bool { return !empty($this->weysguygiseoukqw(Setting::kskcqqggeskwysas)) && !empty($this->weysguygiseoukqw(Setting::qsqggqaguqoawwea)) && !empty($this->weysguygiseoukqw(Setting::uswuyomyeyomqumi)); } public function omimwscgequgiaue(bool $mgsisqykeuaqsmmk = true) { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\x6c\157\x75\x64\146\x6c\x61\x72\145\x20\45\163\x20\x6e\x6f\164\40\x65\x6e\164\145\162\x65\x64\x21", PR__MDL__OPTIMIZATION), __("\x65\x2d\155\x61\x69\x6c", PR__MDL__OPTIMIZATION))); } switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\x6c\x6f\x75\144\146\154\141\x72\x65\40\45\163\x20\156\157\x74\x20\145\156\164\x65\162\x65\144\x21", PR__MDL__OPTIMIZATION), __("\x41\x50\x49\x20\x54\157\153\x65\156", PR__MDL__OPTIMIZATION))); } if ($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->sawoqaskqkasksge())) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\x68\145\x72\x65\40\151\x73\40\x61\40\x70\x72\157\x62\x6c\x65\x6d\40\157\156\x20\146\x65\x74\x63\150\x69\x6e\x67\x20\x72\x65\x6c\x61\164\x65\144\40\x64\x6f\155\141\151\156\x20\x74\x6f\40\145\156\164\x65\162\145\144\x20\x61\160\151\x20\164\x6f\x6b\145\x6e\56", PR__MDL__OPTIMIZATION)); } break; case Setting::fsekswokoseswcqm: if (empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\154\157\165\x64\x66\x6c\x61\x72\x65\40\45\163\40\156\x6f\x74\x20\145\x6e\x74\x65\162\145\144\x21", PR__MDL__OPTIMIZATION), __("\101\120\x49\40\113\145\171", PR__MDL__OPTIMIZATION))); } if ($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->mekmkysuwsuseaow())) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\x68\x65\x72\x65\x20\x69\163\x20\x61\x20\x70\162\x6f\142\154\x65\155\40\157\156\x20\146\x65\x74\143\150\151\156\x67\40\162\145\x6c\x61\164\x65\144\x20\172\x6f\156\145\40\x69\144\40\x74\157\x20\x65\x6e\164\x65\x72\x65\x64\40\141\x70\x69\40\x6b\x65\x79\56", PR__MDL__OPTIMIZATION)); } break; } return true; } }
