<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce1504adf49             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; class Engine extends Common { const gwqkkoaoiwoiyiag = "\142\x72\157\167\163\145\162\x5f\164\164\154"; const ewoiqwokqwgckgko = "\x72\x65\163\x70\x65\143\164\x5f\x6f\162\151\x67\x69\x6e"; const semgeiqsogkegsee = "\141\x63\x74\x69\x6f\156\x5f\x70\141\162\x61\x6d\x65\164\145\162\163"; const meigsywkomcimgyk = "\163\145\164\x5f\x63\x61\143\150\145\137\x73\x65\x74\x74\x69\x6e\147\x73"; const mcquuuwkyksuqaso = "\x63\141\143\150\x65\137\142\x79\x5f\x64\145\166\x69\x63\x65\x5f\164\x79\160\x65"; const sosggameqyisqsaw = "\143\x61\x63\150\x65\x5f\x64\145\143\145\160\164\x69\157\156\x5f\141\162\155\157\162"; private ?API $api = null; public function mgmmiqgyemaeicim() : API { if ($this->api) { goto aeekgeqawgsmgiqw; } $this->api = API::symcgieuakksimmu(); aeekgeqawgsmgiqw: return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto imgagmqusgiqissi; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); imgagmqusgiqissi: return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto scaciowogmayswms; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); scaciowogmayswms: return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto cesaaiguwciccysi; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); cesaaiguwciccysi: return $ksaameoqigiaoigg; } public function oakemcgacwakmawm() { $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $this->weysguygiseoukqw(Setting::kskcqqggeskwysas, ''); if (!($keyoqcuykssgcoau !== '')) { goto kqsyqwwscwoswsgk; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($keyoqcuykssgcoau); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto wskccugoccagaqcw; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto sqyceswygksmmqqa; wskccugoccagaqcw: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, ''); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, ''); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, ''); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; sqyceswygksmmqqa: kqsyqwwscwoswsgk: return $ksaameoqigiaoigg; } public function qmykgskisgoyymoc() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto omeookmiomoieeee; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $yqimccamkgmmuuyg->ymygowkkwyigwcea(); if (!(!$keyoqcuykssgcoau || !is_string($keyoqcuykssgcoau))) { goto yemuiyokmqoqckwu; } $keyoqcuykssgcoau = $yqimccamkgmmuuyg->cgkaaimwgiesmwaw(); yemuiyokmqoqckwu: if ($keyoqcuykssgcoau && is_string($keyoqcuykssgcoau)) { goto iiyamaquicwswcyu; } $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x43\x61\x6e\40\156\157\164\x20\143\x72\145\x61\x74\145\40\157\x72\40\146\x65\x74\143\150\x20\143\141\143\x68\145\40\x72\165\x6c\145\x73\145\x74\x3a\40{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keyoqcuykssgcoau)}"); goto iiyggeuemwuwqiey; iiyamaquicwswcyu: $acqqmqmcquukaqsc = $yqimccamkgmmuuyg->wooogwsuiygsuuso($keyoqcuykssgcoau); if (!($acqqmqmcquukaqsc && is_array($acqqmqmcquukaqsc))) { goto yquysamwsoyyqcya; } foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ymawgemiwyykseqg = $ekuqiqmikiicgoss[Constants::gouqcwikiiygyasc] ?? 0; if (!$ymawgemiwyykseqg) { goto syquiiogeymgicuy; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $ymawgemiwyykseqg); syquiiogeymgicuy: kywmiquiiwmwgooy: } qocmmyskykeuwsae: yquysamwsoyyqcya: $emqycqesyamqucem = $this->cqcmymomccgkimum($keyoqcuykssgcoau); if (!($emqycqesyamqucem && is_string($emqycqesyamqucem))) { goto gyceukwoyaasuwik; } $oaugeqsymqaoycyq = $this->aucomcawieaawqeo($keyoqcuykssgcoau); if ($oaugeqsymqaoycyq && is_string($oaugeqsymqaoycyq)) { goto qsycguggqkgywgaq; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $emqycqesyamqucem); goto wsyeqyekimescwkq; qsycguggqkgywgaq: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, $keyoqcuykssgcoau); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, $oaugeqsymqaoycyq); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, $emqycqesyamqucem); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; wsyeqyekimescwkq: gyceukwoyaasuwik: iiyggeuemwuwqiey: $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $ksaameoqigiaoigg); omeookmiomoieeee: return $ksaameoqigiaoigg; } public function aucomcawieaawqeo(?string $uiwqqmmiwqqqaugc = '', bool $seqoqauciqkusakq = true) { if ($uiwqqmmiwqqqaugc) { goto agokkauammisaqke; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); agokkauammisaqke: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\x28\x73\x74\x61\162\x74\x73\x5f\167\151\x74\x68\x28\x68\164\x74\x70\56\162\145\x71\165\145\x73\164\56\x75\162\151\x2e\160\141\x74\150\54\x20\42\x2f\42\x29\x29", Constants::eqkeooqcsscoggia => "\x43\x61\x63\150\x65\x20\x46\162\157\x6e\164\x65\156\144\x20\x41\x72\x65\x61", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => true, Constants::ccqguwgsqaugymus => [self::mcquuuwkyksuqaso => $seqoqauciqkusakq, self::sosggameqyisqsaw => true], self::gwqkkoaoiwoiyiag => [Constants::kwkgsmiueykcqisc => self::ewoiqwokqwgckgko]]]); } public function cqcmymomccgkimum(?string $uiwqqmmiwqqqaugc = '') { if ($uiwqqmmiwqqqaugc) { goto ggoyigsoyccmscum; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); ggoyigsoyccmscum: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\50\x73\164\141\162\164\163\137\x77\151\x74\150\50\x68\164\x74\x70\56\x72\x65\161\165\145\x73\164\56\165\162\x69\x2e\160\x61\x74\150\54\40\x22\57\167\160\x2d\141\x64\155\x69\156\57\x22\x29\x29", Constants::eqkeooqcsscoggia => "\102\x79\160\141\x73\163\x20\102\x61\x63\x6b\x65\x6e\x64\x20\x41\162\x65\x61", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => false]]); } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ammwuioucccacgwc() : bool { return !empty($this->weysguygiseoukqw(Setting::kskcqqggeskwysas)) && !empty($this->weysguygiseoukqw(Setting::qsqggqaguqoawwea)) && !empty($this->weysguygiseoukqw(Setting::uswuyomyeyomqumi)); } public function omimwscgequgiaue(bool $mgsisqykeuaqsmmk = true) { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (!empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { goto aigeoggkowgwwwqg; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x43\154\x6f\x75\x64\146\x6c\x61\x72\145\40\x25\x73\40\156\157\164\40\x65\156\164\x65\162\145\x64\41", PR__MDL__OPTIMIZATION), __("\145\55\x6d\141\x69\154", PR__MDL__OPTIMIZATION))); aigeoggkowgwwwqg: switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (!empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { goto muqeeocooyiosouk; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\x6c\157\165\144\146\154\x61\x72\x65\40\x25\163\x20\156\157\164\x20\x65\x6e\164\145\162\x65\144\x21", PR__MDL__OPTIMIZATION), __("\101\120\x49\40\x54\157\153\x65\156", PR__MDL__OPTIMIZATION))); muqeeocooyiosouk: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->sawoqaskqkasksge()))) { goto wcagqkquasswioos; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\x68\145\x72\145\x20\x69\163\40\x61\40\x70\x72\157\142\154\x65\155\x20\x6f\x6e\x20\146\x65\164\x63\150\151\x6e\x67\x20\162\145\154\x61\x74\x65\x64\40\x64\157\x6d\x61\151\x6e\40\x74\157\x20\x65\x6e\164\145\162\x65\x64\x20\141\x70\x69\40\164\x6f\153\145\x6e\56", PR__MDL__OPTIMIZATION)); wcagqkquasswioos: goto pscqogmyseiwuqye; case Setting::fsekswokoseswcqm: if (!empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { goto ogywsgmqcgioaoqk; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x43\x6c\157\x75\x64\x66\154\141\x72\145\40\45\x73\x20\x6e\x6f\x74\40\145\156\x74\145\x72\x65\x64\x21", PR__MDL__OPTIMIZATION), __("\x41\120\111\x20\x4b\x65\x79", PR__MDL__OPTIMIZATION))); ogywsgmqcgioaoqk: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->mekmkysuwsuseaow()))) { goto ayggiggmcqckqwom; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\150\145\x72\x65\40\151\x73\40\x61\x20\x70\162\157\x62\154\145\x6d\40\157\x6e\40\146\x65\164\x63\150\151\156\147\40\162\x65\x6c\x61\164\145\144\40\x7a\x6f\x6e\145\40\151\x64\x20\x74\x6f\x20\145\x6e\164\x65\x72\x65\144\40\141\x70\x69\x20\x6b\x65\171\56", PR__MDL__OPTIMIZATION)); ayggiggmcqckqwom: goto pscqogmyseiwuqye; } cyyecekuwygaqwcy: pscqogmyseiwuqye: return true; } }
