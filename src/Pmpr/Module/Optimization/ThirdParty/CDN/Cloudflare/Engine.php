<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f12a869bef5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; class Engine extends Common { const gwqkkoaoiwoiyiag = "\142\162\x6f\x77\x73\x65\162\x5f\x74\164\154"; const ewoiqwokqwgckgko = "\162\145\x73\x70\145\x63\164\137\157\162\151\x67\151\156"; const semgeiqsogkegsee = "\141\x63\164\151\x6f\156\137\x70\141\162\141\x6d\x65\x74\x65\x72\163"; const meigsywkomcimgyk = "\x73\x65\x74\x5f\143\x61\143\x68\x65\x5f\x73\145\164\164\x69\x6e\147\163"; const mcquuuwkyksuqaso = "\143\x61\143\x68\x65\137\142\171\137\x64\145\166\151\143\145\137\164\171\160\x65"; const sosggameqyisqsaw = "\x63\141\143\x68\145\x5f\x64\145\x63\145\x70\164\151\x6f\156\137\141\x72\155\x6f\x72"; private ?API $api = null; public function mgmmiqgyemaeicim() : API { if ($this->api) { goto amqgiisymksuuuss; } $this->api = API::symcgieuakksimmu(); amqgiisymksuuuss: return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto iwgmywqocewwgoeo; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); iwgmywqocewwgoeo: return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto syoeqaqkseguwmgy; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); syoeqaqkseguwmgy: return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto sgiouaqukyycswqm; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); sgiouaqukyycswqm: return $ksaameoqigiaoigg; } public function oakemcgacwakmawm() { $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $this->weysguygiseoukqw(Setting::kskcqqggeskwysas, ''); if (!($keyoqcuykssgcoau !== '')) { goto uugwmywmaqomeksa; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($keyoqcuykssgcoau); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto gwkawguwsamuomuo; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto ucasigqmoiwaimkk; gwkawguwsamuomuo: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, ''); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, ''); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, ''); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; ucasigqmoiwaimkk: uugwmywmaqomeksa: return $ksaameoqigiaoigg; } public function qmykgskisgoyymoc() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto geasgywiogoeamek; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $yqimccamkgmmuuyg->ymygowkkwyigwcea(); if (!(!$keyoqcuykssgcoau || !is_string($keyoqcuykssgcoau))) { goto wowmysuygugawmmu; } $keyoqcuykssgcoau = $yqimccamkgmmuuyg->cgkaaimwgiesmwaw(); wowmysuygugawmmu: if ($keyoqcuykssgcoau && is_string($keyoqcuykssgcoau)) { goto umemmgiwimkymaya; } $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x43\141\156\x20\156\x6f\164\x20\x63\162\x65\141\x74\x65\40\157\162\x20\146\145\x74\143\150\x20\143\x61\x63\150\145\x20\x72\x75\154\145\x73\145\x74\72\x20{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keyoqcuykssgcoau)}"); goto omsmaougqkqigogw; umemmgiwimkymaya: $acqqmqmcquukaqsc = $yqimccamkgmmuuyg->wooogwsuiygsuuso($keyoqcuykssgcoau); if (!($acqqmqmcquukaqsc && is_array($acqqmqmcquukaqsc))) { goto gsiaskgsukseumig; } foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ymawgemiwyykseqg = $ekuqiqmikiicgoss[Constants::gouqcwikiiygyasc] ?? 0; if (!$ymawgemiwyykseqg) { goto xogaycsaesgqeqig; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $ymawgemiwyykseqg); xogaycsaesgqeqig: iquugwoswgkoiieg: } mmmqqoemusicwgqg: gsiaskgsukseumig: $emqycqesyamqucem = $this->cqcmymomccgkimum($keyoqcuykssgcoau); if (!($emqycqesyamqucem && is_string($emqycqesyamqucem))) { goto imwiyqcekcykscui; } $oaugeqsymqaoycyq = $this->aucomcawieaawqeo($keyoqcuykssgcoau); if ($oaugeqsymqaoycyq && is_string($oaugeqsymqaoycyq)) { goto syiyemqigyugagks; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $emqycqesyamqucem); goto woqkgwmkmqsuceuy; syiyemqigyugagks: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, $keyoqcuykssgcoau); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, $oaugeqsymqaoycyq); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, $emqycqesyamqucem); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; woqkgwmkmqsuceuy: imwiyqcekcykscui: omsmaougqkqigogw: $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $ksaameoqigiaoigg); geasgywiogoeamek: return $ksaameoqigiaoigg; } public function aucomcawieaawqeo(?string $uiwqqmmiwqqqaugc = '', bool $seqoqauciqkusakq = true) { if ($uiwqqmmiwqqqaugc) { goto qweyymyuuqwcmkqg; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); qweyymyuuqwcmkqg: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\50\163\x74\141\162\164\163\137\167\151\x74\x68\50\150\x74\x74\160\x2e\162\145\x71\165\x65\163\x74\x2e\x75\x72\x69\56\x70\x61\x74\150\54\40\42\57\x22\51\51", Constants::eqkeooqcsscoggia => "\x43\141\143\150\145\x20\x46\x72\x6f\156\164\x65\x6e\144\x20\101\x72\x65\141", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => true, Constants::ccqguwgsqaugymus => [self::mcquuuwkyksuqaso => $seqoqauciqkusakq, self::sosggameqyisqsaw => true], self::gwqkkoaoiwoiyiag => [Constants::kwkgsmiueykcqisc => self::ewoiqwokqwgckgko]]]); } public function cqcmymomccgkimum(?string $uiwqqmmiwqqqaugc = '') { if ($uiwqqmmiwqqqaugc) { goto guqmgiqaaowaauyo; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); guqmgiqaaowaauyo: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\50\163\x74\141\x72\x74\163\x5f\167\x69\x74\x68\50\150\164\164\160\x2e\162\x65\161\x75\145\x73\x74\56\x75\162\x69\x2e\160\x61\164\x68\54\x20\42\57\x77\160\x2d\x61\144\155\x69\x6e\57\42\x29\x29", Constants::eqkeooqcsscoggia => "\x42\171\x70\141\x73\163\40\x42\141\x63\153\145\156\x64\x20\x41\162\145\x61", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => false]]); } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ammwuioucccacgwc() : bool { return !empty($this->weysguygiseoukqw(Setting::kskcqqggeskwysas)) && !empty($this->weysguygiseoukqw(Setting::qsqggqaguqoawwea)) && !empty($this->weysguygiseoukqw(Setting::uswuyomyeyomqumi)); } public function omimwscgequgiaue(bool $mgsisqykeuaqsmmk = true) { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (!empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { goto mccimkgwkkamsime; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x43\154\x6f\165\144\146\x6c\141\x72\145\x20\45\x73\40\156\157\x74\x20\145\x6e\x74\x65\162\145\144\x21", PR__MDL__OPTIMIZATION), __("\145\55\x6d\141\x69\154", PR__MDL__OPTIMIZATION))); mccimkgwkkamsime: switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (!empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { goto oasisywuwssumsok; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x43\154\x6f\165\144\x66\154\x61\x72\145\40\45\x73\40\156\157\164\x20\x65\x6e\x74\x65\x72\x65\144\x21", PR__MDL__OPTIMIZATION), __("\x41\x50\111\x20\x54\157\153\145\x6e", PR__MDL__OPTIMIZATION))); oasisywuwssumsok: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->sawoqaskqkasksge()))) { goto iaoyeugekskmewgs; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\150\145\162\145\x20\x69\x73\40\141\40\x70\162\157\x62\154\x65\155\40\157\x6e\40\x66\145\x74\143\x68\151\156\147\40\162\x65\154\x61\164\x65\x64\x20\144\157\x6d\x61\x69\156\40\164\x6f\x20\x65\x6e\164\145\x72\145\144\x20\141\x70\x69\x20\164\x6f\x6b\145\x6e\56", PR__MDL__OPTIMIZATION)); iaoyeugekskmewgs: goto ucaoyoamaycsiacq; case Setting::fsekswokoseswcqm: if (!empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { goto iokemmkgmcaksiqu; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\x6c\157\x75\144\x66\x6c\x61\162\145\x20\45\163\40\156\157\x74\x20\145\156\x74\145\162\145\144\x21", PR__MDL__OPTIMIZATION), __("\101\x50\x49\x20\113\145\x79", PR__MDL__OPTIMIZATION))); iokemmkgmcaksiqu: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->mekmkysuwsuseaow()))) { goto okagauksoqkoqygi; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\150\x65\x72\145\x20\x69\163\40\x61\40\160\162\x6f\x62\154\x65\155\x20\157\156\x20\x66\145\x74\143\x68\151\x6e\x67\x20\x72\x65\x6c\x61\x74\145\144\40\x7a\157\x6e\145\40\x69\144\x20\164\x6f\x20\145\156\x74\145\162\x65\144\x20\x61\x70\x69\x20\153\x65\171\56", PR__MDL__OPTIMIZATION)); okagauksoqkoqygi: goto ucaoyoamaycsiacq; } iuyagqakcieasiua: ucaoyoamaycsiacq: return true; } }
