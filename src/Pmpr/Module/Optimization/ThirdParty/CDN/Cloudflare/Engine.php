<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a608b965f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; class Engine extends Common { const gwqkkoaoiwoiyiag = "\142\x72\157\x77\x73\x65\x72\137\x74\164\x6c"; const ewoiqwokqwgckgko = "\x72\x65\163\160\145\143\164\137\x6f\x72\151\x67\x69\x6e"; const semgeiqsogkegsee = "\141\143\x74\x69\157\156\137\160\x61\x72\141\155\145\164\x65\x72\163"; const meigsywkomcimgyk = "\x73\x65\164\x5f\143\141\x63\150\145\x5f\163\x65\x74\x74\151\x6e\147\x73"; const mcquuuwkyksuqaso = "\143\x61\x63\150\x65\x5f\x62\x79\x5f\144\145\166\x69\x63\145\x5f\164\171\x70\x65"; const sosggameqyisqsaw = "\143\141\143\x68\x65\x5f\x64\x65\x63\145\x70\164\151\x6f\x6e\x5f\x61\x72\x6d\x6f\x72"; private ?API $api = null; public function mgmmiqgyemaeicim() : API { if ($this->api) { goto xogaycsaesgqeqig; } $this->api = API::symcgieuakksimmu(); xogaycsaesgqeqig: return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto gsiaskgsukseumig; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); gsiaskgsukseumig: return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto syiyemqigyugagks; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); syiyemqigyugagks: return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto woqkgwmkmqsuceuy; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); woqkgwmkmqsuceuy: return $ksaameoqigiaoigg; } public function oakemcgacwakmawm() { $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $this->weysguygiseoukqw(Setting::kskcqqggeskwysas, ''); if (!($keyoqcuykssgcoau !== '')) { goto omsmaougqkqigogw; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($keyoqcuykssgcoau); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto imwiyqcekcykscui; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto umemmgiwimkymaya; imwiyqcekcykscui: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, ''); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, ''); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, ''); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; umemmgiwimkymaya: omsmaougqkqigogw: return $ksaameoqigiaoigg; } public function qmykgskisgoyymoc() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto eciksmgaqikwegwq; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $yqimccamkgmmuuyg->ymygowkkwyigwcea(); if (!(!$keyoqcuykssgcoau || !is_string($keyoqcuykssgcoau))) { goto geasgywiogoeamek; } $keyoqcuykssgcoau = $yqimccamkgmmuuyg->cgkaaimwgiesmwaw(); geasgywiogoeamek: if ($keyoqcuykssgcoau && is_string($keyoqcuykssgcoau)) { goto iokemmkgmcaksiqu; } $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\103\141\156\x20\156\x6f\x74\40\143\162\x65\141\x74\145\x20\157\162\40\x66\x65\164\143\150\x20\x63\141\143\150\145\x20\x72\x75\x6c\145\163\x65\164\x3a\x20{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keyoqcuykssgcoau)}"); goto okagauksoqkoqygi; iokemmkgmcaksiqu: $acqqmqmcquukaqsc = $yqimccamkgmmuuyg->wooogwsuiygsuuso($keyoqcuykssgcoau); if (!($acqqmqmcquukaqsc && is_array($acqqmqmcquukaqsc))) { goto ucaoyoamaycsiacq; } foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ymawgemiwyykseqg = $ekuqiqmikiicgoss[Constants::gouqcwikiiygyasc] ?? 0; if (!$ymawgemiwyykseqg) { goto mccimkgwkkamsime; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $ymawgemiwyykseqg); mccimkgwkkamsime: guqmgiqaaowaauyo: } qweyymyuuqwcmkqg: ucaoyoamaycsiacq: $emqycqesyamqucem = $this->cqcmymomccgkimum($keyoqcuykssgcoau); if (!($emqycqesyamqucem && is_string($emqycqesyamqucem))) { goto iaoyeugekskmewgs; } $oaugeqsymqaoycyq = $this->aucomcawieaawqeo($keyoqcuykssgcoau); if ($oaugeqsymqaoycyq && is_string($oaugeqsymqaoycyq)) { goto iuyagqakcieasiua; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $emqycqesyamqucem); goto oasisywuwssumsok; iuyagqakcieasiua: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, $keyoqcuykssgcoau); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, $oaugeqsymqaoycyq); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, $emqycqesyamqucem); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; oasisywuwssumsok: iaoyeugekskmewgs: okagauksoqkoqygi: $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $ksaameoqigiaoigg); eciksmgaqikwegwq: return $ksaameoqigiaoigg; } public function aucomcawieaawqeo(?string $uiwqqmmiwqqqaugc = '', bool $seqoqauciqkusakq = true) { if ($uiwqqmmiwqqqaugc) { goto kieyoaoawqacqamy; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); kieyoaoawqacqamy: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\x28\x73\164\141\x72\164\x73\x5f\x77\x69\164\x68\x28\x68\164\164\160\56\x72\145\x71\165\145\x73\x74\x2e\x75\x72\x69\56\160\x61\164\x68\x2c\x20\x22\x2f\x22\51\51", Constants::eqkeooqcsscoggia => "\103\x61\x63\150\x65\40\x46\x72\x6f\156\x74\145\156\x64\x20\x41\162\145\141", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => true, Constants::ccqguwgsqaugymus => [self::mcquuuwkyksuqaso => $seqoqauciqkusakq, self::sosggameqyisqsaw => true], self::gwqkkoaoiwoiyiag => [Constants::kwkgsmiueykcqisc => self::ewoiqwokqwgckgko]]]); } public function cqcmymomccgkimum(?string $uiwqqmmiwqqqaugc = '') { if ($uiwqqmmiwqqqaugc) { goto qckouamqueqiykqi; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); qckouamqueqiykqi: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\x28\163\x74\141\162\164\x73\137\167\x69\x74\150\x28\x68\164\164\x70\x2e\162\145\x71\x75\145\x73\x74\56\165\x72\x69\x2e\160\141\164\x68\x2c\x20\x22\57\167\160\x2d\x61\x64\155\x69\x6e\57\x22\51\x29", Constants::eqkeooqcsscoggia => "\102\171\160\141\163\x73\x20\x42\x61\x63\153\x65\x6e\x64\x20\x41\x72\145\141", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => false]]); } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ammwuioucccacgwc() : bool { return !empty($this->weysguygiseoukqw(Setting::kskcqqggeskwysas)) && !empty($this->weysguygiseoukqw(Setting::qsqggqaguqoawwea)) && !empty($this->weysguygiseoukqw(Setting::uswuyomyeyomqumi)); } public function omimwscgequgiaue(bool $mgsisqykeuaqsmmk = true) { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (!empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { goto measoqewessauqma; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\x6c\x6f\165\x64\x66\154\141\162\145\x20\x25\163\x20\x6e\x6f\164\40\x65\156\164\x65\162\x65\144\41", PR__MDL__OPTIMIZATION), __("\x65\55\155\x61\x69\154", PR__MDL__OPTIMIZATION))); measoqewessauqma: switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (!empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { goto mcucegiogmuyogki; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\154\x6f\165\144\146\x6c\141\162\145\x20\x25\x73\x20\x6e\x6f\x74\x20\x65\156\164\x65\x72\x65\144\41", PR__MDL__OPTIMIZATION), __("\x41\120\111\40\x54\x6f\x6b\x65\x6e", PR__MDL__OPTIMIZATION))); mcucegiogmuyogki: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->sawoqaskqkasksge()))) { goto gqaimiooakyykccy; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\150\x65\x72\x65\x20\x69\163\40\141\x20\x70\x72\157\142\154\145\155\x20\157\156\40\146\145\x74\x63\x68\151\156\x67\x20\162\145\154\141\x74\145\x64\x20\144\157\155\x61\151\x6e\x20\164\x6f\40\145\x6e\164\145\x72\x65\x64\40\x61\160\151\40\x74\x6f\x6b\x65\156\56", PR__MDL__OPTIMIZATION)); gqaimiooakyykccy: goto auaigccmwqwsqsku; case Setting::fsekswokoseswcqm: if (!empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { goto agemeseegiuuowgo; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\x6c\157\x75\144\x66\154\141\x72\145\40\45\x73\x20\156\157\164\x20\145\x6e\164\145\x72\145\x64\x21", PR__MDL__OPTIMIZATION), __("\x41\x50\111\x20\x4b\x65\171", PR__MDL__OPTIMIZATION))); agemeseegiuuowgo: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->mekmkysuwsuseaow()))) { goto goswwiomuackymqi; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\x68\x65\162\x65\40\151\163\40\x61\40\160\x72\x6f\142\154\145\155\x20\x6f\156\x20\146\145\x74\143\150\x69\156\147\40\x72\145\x6c\x61\164\x65\144\x20\x7a\x6f\156\145\40\151\144\x20\164\157\40\x65\156\164\145\x72\x65\144\40\141\160\151\x20\x6b\145\171\56", PR__MDL__OPTIMIZATION)); goswwiomuackymqi: goto auaigccmwqwsqsku; } wiaesksmicgikqcm: auaigccmwqwsqsku: return true; } }
