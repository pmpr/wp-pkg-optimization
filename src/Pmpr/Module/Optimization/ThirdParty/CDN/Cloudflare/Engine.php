<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665af1935df9c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use WP_Error; class Engine extends Common { private ?API $api = null; public function mgmmiqgyemaeicim() : API { if ($this->api) { goto ywokggauuiosegog; } $this->api = API::symcgieuakksimmu(); ywokggauuiosegog: return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto uoewiggumomegksg; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); uoewiggumomegksg: return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto sockocsycmkaeosg; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); sockocsycmkaeosg: return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto ugkwqaywmwqucoeo; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); ugkwqaywmwqucoeo: return $ksaameoqigiaoigg; } public function mikgocywwwusmsas() { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ekmacukqumaiaquo = true; $yqqcyigggososiuo = $this->weysguygiseoukqw(Setting::aamcsokqosuccmmw, ''); if (!$yqqcyigggososiuo) { goto syisomgawcsqeemk; } $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($yqqcyigggososiuo); $ekmacukqumaiaquo = $kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo); syisomgawcsqeemk: if (!$ekmacukqumaiaquo) { goto kwasqmcyiswoaiuu; } $yqqcyigggososiuo = $yqimccamkgmmuuyg->ecciuwqaigwgcgca(); if (!(!$yqqcyigggososiuo || is_wp_error($yqqcyigggososiuo))) { goto asoecuscmsyusmkg; } $yqqcyigggososiuo = ''; asoecuscmsyusmkg: kwasqmcyiswoaiuu: $this->ewqscwwmugoqwomg(Setting::aamcsokqosuccmmw, $yqqcyigggososiuo); return $yqqcyigggososiuo; } public function cwwaoacweogeycuc() { $ksaameoqigiaoigg = false; $suaeeqiusywgcoyy = $this->weysguygiseoukqw(Setting::waigouyyouwkmeak, ''); if (!($suaeeqiusywgcoyy !== '')) { goto aqekkeqmmewoyawu; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($suaeeqiusywgcoyy); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto awuwuuuagqysukku; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto miugmimciywcgswm; awuwuuuagqysukku: $this->ewqscwwmugoqwomg(Setting::waigouyyouwkmeak, ''); $yqqcyigggososiuo = $this->weysguygiseoukqw(Setting::aamcsokqosuccmmw); if (!($yqqcyigggososiuo !== '')) { goto kkmuuoscccmokkiw; } $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($yqqcyigggososiuo); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto kiskwawumeiiieuk; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto oaqeoqsksuyyggmg; kiskwawumeiiieuk: $this->ewqscwwmugoqwomg(Setting::aamcsokqosuccmmw, ''); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $ksaameoqigiaoigg = true; oaqeoqsksuyyggmg: kkmuuoscccmokkiw: miugmimciywcgswm: aqekkeqmmewoyawu: return $ksaameoqigiaoigg; } public function eigwgcuaamoqkuyw(bool $qegcgsquckcqmkea = false) { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto easuiqiooiwgswmm; } $ksaameoqigiaoigg = false; $ekmacukqumaiaquo = [Setting::waigouyyouwkmeak => false, Setting::aamcsokqosuccmmw => false]; if (!($suaeeqiusywgcoyy = $this->weysguygiseoukqw(Setting::waigouyyouwkmeak, ''))) { goto emeeocqaisksyioq; } $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($suaeeqiusywgcoyy); if (!($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo))) { goto mcqwuawosciucemq; } $ekmacukqumaiaquo[Setting::waigouyyouwkmeak] = true; mcqwuawosciucemq: emeeocqaisksyioq: $yqqcyigggososiuo = $this->weysguygiseoukqw(Setting::aamcsokqosuccmmw, ''); if (!$yqqcyigggososiuo) { goto csaksaisgawusswg; } $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($yqqcyigggososiuo); if (!($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo))) { goto maggecymmmesqmqs; } $ekmacukqumaiaquo[Setting::aamcsokqosuccmmw] = true; maggecymmmesqmqs: csaksaisgawusswg: if (!in_array(false, $ekmacukqumaiaquo, true)) { goto aamgqoqyyooimqkm; } $ykweyckckyeqgyew = $yqimccamkgmmuuyg->kioykumgimksiaec(); if (!is_array($ykweyckckyeqgyew)) { goto mcagemacuqyskogs; } foreach ($ykweyckckyeqgyew as $uiwqqmmiwqqqaugc => $ymqmyyeuycgmigyo) { $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($uiwqqmmiwqqqaugc); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto gyskcwykkyakeims; } $this->oaumimwssciwumys("\x52\165\154\x65\163\145\x74\40{$uiwqqmmiwqqqaugc}\72{$ymqmyyeuycgmigyo}\x20\162\x65\x6d\157\166\x65\x20\146\141\151\x6c\145\x64\x3a\40{$this->gcsweumukyckmgik($kwogmsuwiyakckuo)}"); goto ossakckwskyqusmm; gyskcwykkyakeims: $this->oaumimwssciwumys("\122\x75\154\x65\163\145\x74\40{$uiwqqmmiwqqqaugc}\72{$ymqmyyeuycgmigyo}\x20\x72\x65\x6d\157\x76\145\x64\40\163\x75\143\x63\145\163\163\146\x75\x6c\x6c\x79\56"); ossakckwskyqusmm: qkiyyywwuiuackao: } ecgwgamiseokmise: mcagemacuqyskogs: aamgqoqyyooimqkm: $this->ewqscwwmugoqwomg(Setting::waigouyyouwkmeak, ''); $this->ewqscwwmugoqwomg(Setting::aamcsokqosuccmmw, ''); $wmeouoowkwmimwcu = $yqimccamkgmmuuyg->wmeouoowkwmimwcu(); if (!($wmeouoowkwmimwcu && !is_wp_error($wmeouoowkwmimwcu))) { goto cimascmiesomqgqs; } $ksaameoqigiaoigg = true; cimascmiesomqgqs: $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $qegcgsquckcqmkea); easuiqiooiwgswmm: return $ksaameoqigiaoigg; } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function omimwscgequgiaue() { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (!empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { goto saiuoomgskwgyeya; } return $this->oemauiimmycumcsk(sprintf(__("\x43\x6c\157\x75\144\146\154\141\x72\145\40\45\x73\40\156\x6f\x74\x20\145\156\164\x65\x72\145\144\41", PR__MDL__OPTIMIZATION), __("\145\55\x6d\x61\151\154", PR__MDL__OPTIMIZATION))); saiuoomgskwgyeya: switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (!empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { goto momuweiasiwskekw; } return $this->oemauiimmycumcsk(sprintf(__("\103\154\157\165\144\x66\x6c\x61\x72\x65\40\x25\163\40\156\x6f\164\x20\145\156\x74\x65\162\145\144\x21", PR__MDL__OPTIMIZATION), __("\101\120\111\x20\124\157\153\x65\x6e", PR__MDL__OPTIMIZATION))); momuweiasiwskekw: if (!empty($yqimccamkgmmuuyg->sawoqaskqkasksge())) { goto qaewauyekqucciyc; } return $this->oemauiimmycumcsk(__("\124\x68\145\162\x65\40\x69\x73\40\141\x20\x70\x72\x6f\x62\154\145\155\x20\157\156\x20\146\x65\x74\143\150\151\156\x67\40\x72\x65\x6c\x61\164\x65\x64\40\144\x6f\155\x61\151\156\x20\x74\x6f\x20\145\x6e\x74\145\162\x65\x64\40\x61\160\151\40\164\157\153\145\156\56", PR__MDL__OPTIMIZATION)); qaewauyekqucciyc: goto kuuawiosmkgqsscy; case Setting::fsekswokoseswcqm: if (!empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { goto bgakaasgwwygosyi; } return $this->oemauiimmycumcsk(sprintf(__("\103\154\x6f\165\x64\x66\x6c\x61\x72\x65\40\45\x73\x20\x6e\157\164\40\x65\x6e\164\145\x72\145\144\41", PR__MDL__OPTIMIZATION), __("\101\120\111\40\113\145\x79", PR__MDL__OPTIMIZATION))); bgakaasgwwygosyi: if (!empty($yqimccamkgmmuuyg->mekmkysuwsuseaow())) { goto aucwccaiqwsmyuaq; } return $this->oemauiimmycumcsk(__("\x54\x68\x65\162\x65\x20\x69\x73\x20\141\40\x70\x72\157\142\154\145\x6d\x20\x6f\x6e\40\146\145\x74\143\150\151\x6e\147\x20\162\145\154\x61\164\x65\x64\x20\172\157\156\145\x20\151\144\40\x74\157\x20\145\156\x74\145\162\145\x64\x20\141\x70\151\x20\x6b\145\x79\56", PR__MDL__OPTIMIZATION)); aucwccaiqwsmyuaq: goto kuuawiosmkgqsscy; } kwocaqggwcksesce: kuuawiosmkgqsscy: return true; } }
