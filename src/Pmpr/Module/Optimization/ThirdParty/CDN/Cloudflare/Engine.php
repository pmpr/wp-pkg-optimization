<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6668a93c5745b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use WP_Error; class Engine extends Common { private ?API $api = null; public function mgmmiqgyemaeicim() : API { if ($this->api) { goto cimascmiesomqgqs; } $this->api = API::symcgieuakksimmu(); cimascmiesomqgqs: return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto easuiqiooiwgswmm; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); easuiqiooiwgswmm: return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto saiuoomgskwgyeya; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); saiuoomgskwgyeya: return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto kuuawiosmkgqsscy; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); kuuawiosmkgqsscy: return $ksaameoqigiaoigg; } public function oakemcgacwakmawm() { $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $this->weysguygiseoukqw(Setting::kskcqqggeskwysas, ''); if (!($keyoqcuykssgcoau !== '')) { goto qaewauyekqucciyc; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($keyoqcuykssgcoau); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto kwocaqggwcksesce; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto momuweiasiwskekw; kwocaqggwcksesce: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, ''); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, ''); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, ''); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; momuweiasiwskekw: qaewauyekqucciyc: return $ksaameoqigiaoigg; } public function qmykgskisgoyymoc() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto uwusswwekqcsisus; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $yqimccamkgmmuuyg->ymygowkkwyigwcea(); if (!(!$keyoqcuykssgcoau || !is_string($keyoqcuykssgcoau))) { goto bgakaasgwwygosyi; } $keyoqcuykssgcoau = $yqimccamkgmmuuyg->cgkaaimwgiesmwaw(); bgakaasgwwygosyi: if ($keyoqcuykssgcoau && is_string($keyoqcuykssgcoau)) { goto egwgyekaiqomyeaa; } $this->oaumimwssciwumys("\x43\x61\156\40\x6e\157\164\40\143\162\x65\141\164\145\x20\157\162\40\x66\145\x74\x63\150\40\x63\x61\143\x68\145\x20\x72\165\x6c\x65\x73\145\164\72\40{$this->gcsweumukyckmgik($keyoqcuykssgcoau)}"); goto kssuqmsgmaaeqigw; egwgyekaiqomyeaa: $acqqmqmcquukaqsc = $yqimccamkgmmuuyg->wooogwsuiygsuuso($keyoqcuykssgcoau); if (!($acqqmqmcquukaqsc && is_array($acqqmqmcquukaqsc))) { goto mcukocaaoyuugoeu; } foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ymawgemiwyykseqg = $ekuqiqmikiicgoss[self::gouqcwikiiygyasc] ?? 0; if (!$ymawgemiwyykseqg) { goto iiiwsgameuomumgw; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $ymawgemiwyykseqg); iiiwsgameuomumgw: agyooskogigyayws: } aucwccaiqwsmyuaq: mcukocaaoyuugoeu: $emqycqesyamqucem = $this->cqcmymomccgkimum($keyoqcuykssgcoau); if (!($emqycqesyamqucem && is_string($emqycqesyamqucem))) { goto cgwokqwakqcmiieo; } $oaugeqsymqaoycyq = $this->aucomcawieaawqeo($keyoqcuykssgcoau); if ($oaugeqsymqaoycyq && is_string($oaugeqsymqaoycyq)) { goto scockmiqikwwkqse; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $emqycqesyamqucem); goto okycquokqoamsquy; scockmiqikwwkqse: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, $keyoqcuykssgcoau); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, $oaugeqsymqaoycyq); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, $emqycqesyamqucem); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; okycquokqoamsquy: cgwokqwakqcmiieo: kssuqmsgmaaeqigw: $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $ksaameoqigiaoigg); uwusswwekqcsisus: return $ksaameoqigiaoigg; } public function aucomcawieaawqeo(?string $uiwqqmmiwqqqaugc = '', bool $seqoqauciqkusakq = true) { if ($uiwqqmmiwqqqaugc) { goto mciumqyyossyiuyk; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); mciumqyyossyiuyk: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [self::uqgcmmosieyimiku => self::meigsywkomcimgyk, self::yyicwqsqaecyqwco => true, self::guqyegycwyqquagq => "\50\163\x74\141\162\164\163\x5f\167\x69\x74\x68\x28\150\164\164\160\x2e\x72\145\x71\x75\x65\163\164\x2e\x75\162\151\x2e\x70\x61\164\x68\54\40\x22\57\42\x29\x29", self::eqkeooqcsscoggia => "\103\141\143\150\x65\x20\106\x72\x6f\156\164\x65\x6e\144\x20\101\162\145\x61", self::semgeiqsogkegsee => [self::mqakwueykamgwqci => true, self::ccqguwgsqaugymus => [self::mcquuuwkyksuqaso => $seqoqauciqkusakq, self::sosggameqyisqsaw => true], self::gwqkkoaoiwoiyiag => [self::kwkgsmiueykcqisc => self::ewoiqwokqwgckgko]]]); } public function cqcmymomccgkimum(?string $uiwqqmmiwqqqaugc = '') { if ($uiwqqmmiwqqqaugc) { goto acaeigkmigikeuyu; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); acaeigkmigikeuyu: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [self::uqgcmmosieyimiku => self::meigsywkomcimgyk, self::yyicwqsqaecyqwco => true, self::guqyegycwyqquagq => "\x28\x73\164\141\162\164\x73\x5f\167\x69\x74\150\50\150\x74\164\x70\x2e\x72\x65\x71\x75\x65\163\x74\x2e\165\162\151\x2e\160\141\x74\150\54\40\42\x2f\167\160\55\141\144\x6d\151\156\57\x22\51\51", self::eqkeooqcsscoggia => "\102\171\x70\x61\163\163\40\102\x61\143\x6b\145\156\144\x20\101\x72\145\x61", self::semgeiqsogkegsee => [self::mqakwueykamgwqci => false]]); } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ammwuioucccacgwc() : bool { return !empty($this->weysguygiseoukqw(Setting::kskcqqggeskwysas)) && !empty($this->weysguygiseoukqw(Setting::qsqggqaguqoawwea)) && !empty($this->weysguygiseoukqw(Setting::uswuyomyeyomqumi)); } public function omimwscgequgiaue() { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (!empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { goto kqyeukywmgismyaq; } return $this->oemauiimmycumcsk(sprintf(__("\103\154\x6f\x75\x64\146\154\x61\x72\145\40\x25\163\x20\156\157\164\x20\x65\x6e\164\145\162\145\x64\41", PR__MDL__OPTIMIZATION), __("\145\x2d\x6d\141\x69\154", PR__MDL__OPTIMIZATION))); kqyeukywmgismyaq: switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (!empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { goto omgcsmsikaggaooc; } return $this->oemauiimmycumcsk(sprintf(__("\x43\154\157\x75\144\146\154\x61\x72\x65\x20\x25\x73\40\x6e\157\164\40\x65\156\x74\145\162\145\x64\x21", PR__MDL__OPTIMIZATION), __("\x41\x50\111\40\x54\157\x6b\145\x6e", PR__MDL__OPTIMIZATION))); omgcsmsikaggaooc: if (!empty($yqimccamkgmmuuyg->sawoqaskqkasksge())) { goto wykuosegisygosiq; } return $this->oemauiimmycumcsk(__("\x54\x68\145\162\x65\40\x69\163\x20\x61\40\x70\x72\157\x62\x6c\x65\155\x20\x6f\156\x20\146\x65\x74\143\x68\151\156\x67\40\x72\145\154\141\164\145\144\x20\x64\157\x6d\141\151\x6e\x20\164\157\x20\145\156\x74\145\162\145\x64\x20\141\x70\151\x20\x74\x6f\x6b\145\156\x2e", PR__MDL__OPTIMIZATION)); wykuosegisygosiq: goto mukwsuuuqcgesmwc; case Setting::fsekswokoseswcqm: if (!empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { goto ugikgkwuwmgymgus; } return $this->oemauiimmycumcsk(sprintf(__("\103\x6c\157\x75\144\x66\154\141\x72\145\40\45\163\x20\x6e\157\164\40\145\156\x74\145\162\x65\144\x21", PR__MDL__OPTIMIZATION), __("\101\x50\x49\x20\x4b\145\x79", PR__MDL__OPTIMIZATION))); ugikgkwuwmgymgus: if (!empty($yqimccamkgmmuuyg->mekmkysuwsuseaow())) { goto gsgyayuaekgyoumc; } return $this->oemauiimmycumcsk(__("\x54\x68\x65\162\x65\40\x69\163\x20\141\x20\x70\x72\157\142\154\145\155\x20\x6f\156\40\146\x65\164\x63\150\151\156\x67\40\162\145\154\141\x74\145\x64\40\x7a\x6f\x6e\x65\40\151\144\40\x74\157\x20\x65\156\x74\x65\x72\145\x64\x20\141\160\x69\x20\153\x65\x79\56", PR__MDL__OPTIMIZATION)); gsgyayuaekgyoumc: goto mukwsuuuqcgesmwc; } cqeoguiqiymkyweo: mukwsuuuqcgesmwc: return true; } }
