<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cf88a1c26f3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Subscription; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\View\Index; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\VirtualBrowser; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Subscription\Model\Purchase; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Setting as VirtualBrowserSetting; class Engine extends Common { const eeyiwgsusysqessu = "\x70\x6c\x61\156\x73"; const mkciamyomkiccoes = "\143\x6f\x69\x6e\163"; const owimkwkiwawmeicq = "\165\163\x61\x67\145\x73"; const moamckowewogygog = "\x70\x75\162\x63\x68\x61\x73\x65\x73"; const ikmkgmwegyasgqmo = "\x72\145\x6d\x6f\164\x65\x5f\x61\x70\x70\163"; const uysmymaeucegyiyw = "\145\170\164\x72\x61\x5f\x63\x6f\x69\x6e\x73"; const emywgcsiygeskckg = "\x72\x65\155\141\x69\x6e\x5f\x63\x6f\x69\x6e\163"; public function aackauiyyagmeqso() : array { return (array) $this->weysguygiseoukqw(self::eeyiwgsusysqessu, []); } public function sqamsikemwwsuwey() : array { return (array) $this->weysguygiseoukqw(self::uysmymaeucegyiyw, []); } public function qcgwasumiaaemeei() : array { return (array) $this->weysguygiseoukqw(Constants::eoigaocgcaekssuw, []); } public function ewgciagyquksawee() : array { return (array) $this->weysguygiseoukqw(self::mkciamyomkiccoes, []); } public function wskswuomqkmqkkmm() : array { return (array) $this->weysguygiseoukqw(self::ikmkgmwegyasgqmo, []); } public function acgeiccowcqiwmqa() { $icwicymcioeyeyek = API::symcgieuakksimmu()->msyoakwyskammgqi(); if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek && ($ykquycoiqesuckco = $this->kmuweyayaqoeqiyw()))) { goto okawiaowosqickgq; } $yygmoeguaqyumuui = [self::mkciamyomkiccoes, self::eeyiwgsusysqessu, self::uysmymaeucegyiyw, self::ikmkgmwegyasgqmo, Constants::eoigaocgcaekssuw]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!empty($icwicymcioeyeyek[$uusmaiomayssaecw])) { goto wasuquysysmqyegg; } if (!(self::eeyiwgsusysqessu === $uusmaiomayssaecw)) { goto geoiegikocwmwosi; } $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, ''); geoiegikocwmwosi: goto eqsuaywswuesuika; wasuquysysmqyegg: $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, $icwicymcioeyeyek[$uusmaiomayssaecw]); eqsuaywswuesuika: qykcggwgkweasuii: } ukmgwuiqwgyiouec: okawiaowosqickgq: return $icwicymcioeyeyek; } public function aiamukikcuowsiku($suaemuyiacqyugsm = 1) : bool { $icwicymcioeyeyek = API::symcgieuakksimmu()->qqwmsyyqyoeeqsoo($suaemuyiacqyugsm); $gigyyisyuaacmwmq = false; if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek)) { goto qiiqceousoicgeee; } $yygmoeguaqyumuui = ["\145\170\x74\x72\141\163", "\163\x75\x62\x73\x63\x72\151\x70\x74\151\157\156\163"]; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $suuagcecoyuweoqk = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::qwumqqyuasyskkkc] ?? []; if (!$suuagcecoyuweoqk) { goto sosqgaswegsomgkw; } $geeyaumoyycymeks = $uusmaiomayssaecw === "\x73\x75\x62\163\x63\162\x69\x70\164\x69\x6f\156\x73"; foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $qkasemkceamoceiy = $igqsaukqcqscimok[Constants::gouqcwikiiygyasc]; $sqeykgyoooqysmca = $geeyaumoyycymeks ? Constants::eoigaocgcaekssuw : Constants::mayesweykoooyugy; if (!$qkasemkceamoceiy) { goto ogwwasqkaageiwwi; } $cmaccwokqweqweqi = $yakcyegsoqusmiak->oqomcmyuuakigusk([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); if (empty($cmaccwokqweqweqi)) { goto quiguyyimiqeqcwa; } $aasekyoqiwumiqom = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($igqsaukqcqscimok[Constants::uiwqcumqkgikqyue]); $wuegiysyymkmsuyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cmaccwokqweqweqi, Constants::uiwqcumqkgikqyue); if (!($aasekyoqiwumiqom !== $wuegiysyymkmsuyi)) { goto isaacywgkascmcsw; } $yakcyegsoqusmiak->wqikesawekycweoi($cmaccwokqweqweqi, [Constants::uiwqcumqkgikqyue => $aasekyoqiwumiqom]); isaacywgkascmcsw: goto iicaisyekagswmey; quiguyyimiqeqcwa: $yakcyegsoqusmiak->gscuuyuyauokoyuo([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::kumuoysauoagaiiy => $igqsaukqcqscimok[Constants::kumuoysauoagaiiy], Constants::uiwqcumqkgikqyue => $igqsaukqcqscimok[Constants::uiwqcumqkgikqyue], Constants::acymsykymkiewqsy => $igqsaukqcqscimok[Constants::acymsykymkiewqsy], Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); iicaisyekagswmey: ogwwasqkaageiwwi: eomcuogskessyicy: } oyeygeykqwcqoeic: sosqgaswegsomgkw: $ymiyawysimukkoso = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::ycuusiweasqygwiw] ?? []; if ($gigyyisyuaacmwmq) { goto eiegguecasykwmyq; } $gigyyisyuaacmwmq = $ymiyawysimukkoso && isset($ymiyawysimukkoso[Constants::asmooogmgyecqqka], $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]) && $ymiyawysimukkoso[Constants::asmooogmgyecqqka] < $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]; eiegguecasykwmyq: meiqywmwuoogckss: } ogciikaecauiwgyk: qiiqceousoicgeee: return $gigyyisyuaacmwmq; } public function kscwewuywiakosos() : string { $meqocwsecsywiiqs = __("\x53\x79\x6e\x63\x20\104\141\x74\x61", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::smkwuwawwaqyimcq, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\x54\x68\x65\40\x64\141\x74\141\x20\141\163\163\157\x63\x69\x61\x74\145\144\40\x77\x69\x74\150\40\171\157\x75\x72\40\x61\143\143\x6f\x75\x6e\x74\x20\151\x73\x20\x75\160\x64\141\164\x65\144\x20\167\151\x74\x68\x20\164\x68\x65\x20\163\x65\x72\x76\145\x72\40\141\164\40\x72\x65\147\165\x6c\141\x72\x20\151\156\x74\145\x72\x76\x61\x6c\x73\x2e\x20\x54\157\x20\145\x6e\163\165\162\145\x20\164\150\145\40\154\x61\x74\x65\163\x74\40\x75\160\144\x61\164\145\54\40\171\157\x75\x20\x63\141\x6e\40\165\160\x64\141\x74\x65\40\171\x6f\x75\x72\x20\141\x63\143\157\x75\x6e\164\x20\144\x61\164\x61\x20\167\x69\164\150\40\x74\x68\x65\x20\163\145\x72\x76\145\x72\x20\x6e\x6f\167\x2e", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\154\x61\x73\x73" => "\x6f\x70\164\55\x73\171\x6e\x63\x2d\144\x61\164\x61\x20\x70\x72\55\x62\x74\x6e\40\142\164\156\x2d\x70\162\x69\155\x61\162\x79", Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]]], $meqocwsecsywiiqs, ["\x63\x6c\141\163\x73" => "\x77\55\61\x30\60\x20\x70\162\x2d\142\x74\x6e\40\x62\164\x6e\x2d\x61\143\164\x69\157\156\40\x62\164\x6e\55\x6f\x75\x74\154\151\x6e\x65\x2d\160\162\151\155\x61\162\x79"]); } public function samoqkkuimogeyew() : array { $qwgquweoiskugckg = $this->ewgciagyquksawee(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($umwagewoweuckiso) { goto maeueeueqoywkiom; } $icwicymcioeyeyek = $this->acgeiccowcqiwmqa(); if (!($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek))) { goto iaywwgssaoecwmeg; } $umwagewoweuckiso = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::eoigaocgcaekssuw); iaywwgssaoecwmeg: maeueeueqoywkiom: $eymaoksggoskuikg = __("\x55\156\x6b\x6e\157\167\156", PR__MDL__OPTIMIZATION); $momcqeuuwwsaagyc = __("\45\163\40\x63\x6f\x69\x6e\163", PR__MDL__OPTIMIZATION); $wekousyuiguacggm = $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::icymuyeowqaciyyu); $ymyueyaumiqiuaqa = 0; if (!$wekousyuiguacggm) { goto jyekikocgagcgywq; } $ymyueyaumiqiuaqa = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->omyucuigmqgqmwio($wekousyuiguacggm); jyekikocgagcgywq: if ($ymyueyaumiqiuaqa <= 0) { goto qoiyiuoyamwimusy; } $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(_n("\45\x73\40\x44\x61\x79", "\x25\163\40\104\141\171\163", $ymyueyaumiqiuaqa, PR__MDL__OPTIMIZATION), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($ymyueyaumiqiuaqa)), ["\143\x6c\141\163\163" => "\x74\145\170\164\x2d\x73\x75\143\143\145\x73\x73"]); goto oeogyayooiwqcmia; qoiyiuoyamwimusy: $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x45\x78\160\x69\x72\x65\x64", PR__MDL__OPTIMIZATION), ["\143\154\x61\x73\x73" => "\x74\145\x78\164\55\144\141\x6e\147\145\162"]); oeogyayooiwqcmia: $cesmwwwcymckqaku = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::ALL] ?? 0; $mcoyqciicgkwcmac = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::gikauwqcswqcsmqw] ?? 0; $yeyequgieweqoume = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::ALL] ?? 0; $ceaoyakceaaoaaei = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::gikauwqcswqcsmqw] ?? 0; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $okmuwqcyiyiommaq = $yakcyegsoqusmiak->oqomcmyuuakigusk([Constants::squoamkioomemiyi => Constants::mayesweykoooyugy, [Constants::euoaaiqkqcqcgeco => Constants::cqcimoqckgmaacyw, Constants::meisqwykgaymauka => Constants::kumuoysauoagaiiy, Constants::ciyoccqkiamemcmm => Constants::omaksceqmigeaoko]]); if ($okmuwqcyiyiommaq) { goto uowiiyqmiaaaaoas; } $scyqmomasqcossoq = $ocsquaqymuwoyisw = __("\116\x6f\40\120\x75\x72\143\150\x61\163\145", PR__MDL__OPTIMIZATION); goto vokekoceocuskqsm; uowiiyqmiaaaaoas: $ocsquaqymuwoyisw = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, Constants::uiwqcumqkgikqyue)[Constants::ciyoccqkiamemcmm] ?? 0); $scyqmomasqcossoq = $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, Constants::kumuoysauoagaiiy), $this->caokeucsksukesyo()->eiwcuqigayigimak()->yoaaussmackoisuw()); vokekoceocuskqsm: $gkeiousaoygaimia = [Constants::eoigaocgcaekssuw => [Constants::qescuiwgsyuikume => __("\x53\165\142\163\143\162\x69\160\x74\x69\157\x6e\x20\120\x6c\x61\156", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\160\154\x61\156" => [Constants::qescuiwgsyuikume => __("\x53\165\x62\163\x63\162\151\x70\164\151\x6f\x6e\x20\x50\154\141\156", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::qescuiwgsyuikume, $eymaoksggoskuikg)], "\x70\145\162\151\x6f\144" => [Constants::qescuiwgsyuikume => __("\x50\x6c\x61\x6e\x20\120\x65\x72\151\157\x64", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::eeeyoywyquqywwoo, $eymaoksggoskuikg)], "\x72\145\x6d\141\151\x6e\137\144\141\171" => [Constants::qescuiwgsyuikume => __("\122\145\x6d\x61\x69\156\151\156\147\x20\x54\x69\155\145", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ymyueyaumiqiuaqa], "\x63\x6f\151\x6e\163" => [Constants::qescuiwgsyuikume => __("\103\x6f\x75\x6e\164\x20\x6f\146\40\x49\x6e\x69\x74\x69\141\x6c\40\x43\157\151\156\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($cesmwwwcymckqaku))], "\x75\x73\x65\144\x5f\x63\x6f\x69\x6e\x73" => [Constants::qescuiwgsyuikume => __("\x55\163\145\144\40\103\157\151\156\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($cesmwwwcymckqaku, $mcoyqciicgkwcmac)))], "\162\x65\x6d\x61\151\156\x5f\x63\x6f\x69\156\x73" => [Constants::qescuiwgsyuikume => __("\x52\x65\x6d\x61\151\156\x20\x43\x6f\x69\156\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $cesmwwwcymckqaku - $mcoyqciicgkwcmac)))]]], self::uysmymaeucegyiyw => [Constants::qescuiwgsyuikume => __("\105\x78\164\x72\141\40\103\157\151\156", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\154\141\x74\145\x73\x74\x5f\x70\x75\162\x63\150\x61\163\145\137\x63\157\x75\x6e\x74" => [Constants::qescuiwgsyuikume => __("\114\141\x74\x65\163\164\40\120\x75\162\x63\150\x61\x73\145\x20\x43\157\x75\x6e\164", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ocsquaqymuwoyisw], "\154\141\x74\145\163\x74\x5f\x70\165\162\x63\150\x61\163\x65\x5f\x64\x61\164\x65" => [Constants::qescuiwgsyuikume => __("\x4c\141\164\145\163\x74\40\120\x75\162\x63\x68\141\163\145\40\x44\x61\x74\145", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $scyqmomasqcossoq], "\145\x78\x70\151\162\x61\x74\x69\157\x6e" => [Constants::qescuiwgsyuikume => __("\105\170\160\151\x72\145\40\x44\141\x74\145", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\127\151\164\150\x6f\x75\164\x20\x65\x78\x70\151\x72\x65\x20\144\x61\164\145", PR__MDL__OPTIMIZATION), ["\143\x6c\x61\163\163" => "\164\x65\170\x74\x2d\x73\x75\x63\143\x65\163\163"])], "\x63\x6f\x69\156\163\137\x63\x6f\165\x6e\x74" => [Constants::qescuiwgsyuikume => __("\x41\154\x6c\40\x43\x6f\x69\x6e\163\x20\x43\157\165\x6e\164", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yeyequgieweqoume))], "\165\163\145\x64\x5f\143\157\x69\x6e\x73" => [Constants::qescuiwgsyuikume => __("\x55\x73\145\x64\x20\x43\157\x69\x6e\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($yeyequgieweqoume, $ceaoyakceaaoaaei)))], "\x72\x65\155\x61\x69\156\137\143\x6f\151\156\163" => [Constants::qescuiwgsyuikume => __("\122\x65\155\141\151\156\x20\x43\x6f\x69\x6e\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $yeyequgieweqoume - $ceaoyakceaaoaaei)))]]]]; foreach ($gkeiousaoygaimia as $uusmaiomayssaecw => $keymuysuaseeokmy) { $gkeiousaoygaimia[$uusmaiomayssaecw][Constants::ugsuecoyuqcamsac] = $swqimwqeweekeusq->kuumcaywkqiasisk($keymuysuaseeokmy[Constants::qwumqqyuasyskkkc], ["\164\x61\142\154\x65\137\141\x74\x74\x72\163" => ["\x63\154\141\163\x73" => "\x6d\142\x2d\x30\40\x74\141\x62\154\145\x20\164\141\x62\x6c\145\55\142\x6f\162\x64\145\x72\x6c\145\x73\x73"], "\x74\144\x5f\141\x74\x74\x72\x73" => ["\143\x6c\x61\163\x73" => "\160\170\x2d\60\x20\160\171\55\x32"], "\x6c\141\163\x74\137\164\x64\x5f\141\x74\164\x72\163" => ["\143\154\x61\x73\163" => "\x70\170\55\60\x20\160\171\55\62\40\x66\x6f\156\x74\x2d\x77\x65\x69\147\150\164\55\142\x6f\154\x64\40\x74\145\x78\x74\x2d\162\151\147\150\x74"]]); sckyiekoceuisqyq: } ooykyoowougqkaso: return $gkeiousaoygaimia; } public function aaasykywsggkskse(bool $scsaeueqgyymsyei = false) : string { $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); if (!($yakcyegsoqusmiak->asskucacysemeoiu() === 0 && $this->aiamukikcuowsiku())) { goto kusuakkwcuqkcqaw; } Process::symcgieuakksimmu()->gposkkqsquyqiguk(2); kusuakkwcuqkcqaw: $qookweymeqawmcwo = ["\154\151\x73\x74\x5f\150\x74\155\154" => $this->wwqmoqsgmkosymuu($yakcyegsoqusmiak, "\x70\165\162\143\150\x61\x73\145\x73", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\x72\145\x70\x6f\x72\164\x2f\x70\x75\162\x63\x68\141\163\145", $qookweymeqawmcwo); } public function aksiycwcekcecuec(bool $scsaeueqgyymsyei = false) : string { $qookweymeqawmcwo = ["\x6c\x69\163\x74\137\x68\164\155\154" => $this->wwqmoqsgmkosymuu(Remote::symcgieuakksimmu(), "\165\x73\141\x67\x65\163", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\x72\x65\x70\x6f\x72\x74\57\x75\163\141\x67\x65", $qookweymeqawmcwo); } public function wmeeckgouqiwiqco($sameaqkagyqomooq = 0) : array { $ccowyogiqwikkkie = []; if (!(Constants::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(VirtualBrowserSetting::eoeewcigeywcquis))) { goto sikckcmeiwmyakeu; } $ccowyogiqwikkkie[] = VirtualBrowser::eoeewcigeywcquis; sikckcmeiwmyakeu: return $ccowyogiqwikkkie; } private function wwqmoqsgmkosymuu($meywaqqsugaoeyys, string $ymqmyyeuycgmigyo, bool $scsaeueqgyymsyei = false) { $wqgwesyciiqcoocs = ''; $gikeqowakccckkqe = $meywaqqsugaoeyys->cgswceaawqgeskua(Constants::weiosaewqequuyuq); if (!$gikeqowakccckkqe instanceof Index) { goto sigukociqouigous; } $ywmkwiwkosakssii = [Constants::cacismqswgaewkuu => $meywaqqsugaoeyys->miwqiiqeegeqcwis()]; if (!$scsaeueqgyymsyei) { goto qaycycmeqkqcumog; } $ywmkwiwkosakssii[Constants::ausqeuugegoygouq] = 4; qaycycmeqkqcumog: $wqgwesyciiqcoocs = $gikeqowakccckkqe->ekysoioumkkwawwm($ywmkwiwkosakssii, $scsaeueqgyymsyei); if (!$scsaeueqgyymsyei) { goto ikuwigsmisimaqoc; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = Page::symcgieuakksimmu()->oiucukewkckkwiqc(); $wqgwesyciiqcoocs .= $swqimwqeweekeusq->yuawgssgauywkiia(__("\126\151\145\167\x20\164\x68\x65\40\106\165\x6c\154\x20\x52\x65\x70\x6f\162\164", PR__MDL__OPTIMIZATION), $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\x73\x65\147\x6d\145\156\x74" => "{$ymqmyyeuycgmigyo}\x5f\162\x65\x70\x6f\x72\x74"], $eeamcawaiqocomwy), ["\143\154\x61\163\x73" => "\160\162\x2d\x62\164\156\40\142\164\x6e\x2d\160\x72\x69\155\141\x72\171\40\x62\x74\156\x2d\141\x63\x74\x69\157\x6e"]); ikuwigsmisimaqoc: sigukociqouigous: return $wqgwesyciiqcoocs; } public function sqequueykkkyoqwc($sameaqkagyqomooq) : int { $imeywacwecgemcco = 0; $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!$umwagewoweuckiso) { goto omyquyiguuaociwq; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ccowyogiqwikkkie = $this->wmeeckgouqiwiqco($sameaqkagyqomooq); foreach ($ccowyogiqwikkkie as $aiamqeawckcsuaou) { $uymsgmyyeikucgae = false; switch ($aiamqeawckcsuaou) { case VirtualBrowser::eoeewcigeywcquis: $uymsgmyyeikucgae = $aiamqeawckcsuaou; goto iumgcesksuawyuyo; } qwosyqcomiosguoa: iumgcesksuawyuyo: if (!$uymsgmyyeikucgae) { goto qaqooueskgciuqgc; } $imeywacwecgemcco += (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, $uymsgmyyeikucgae . "\x5f\165\163\141\x67\x65", 0); qaqooueskgciuqgc: iyawqekeeawqkymm: } yagscaikmmuagqcu: omyquyiguuaociwq: return $imeywacwecgemcco; } public function gwcqgaaameykykci() : string { if ($kekgkgqeyesmkywu = $this->aackauiyyagmeqso()) { goto qsaoyggkqwcgskwk; } $nsmgceoqaqogqmuw = __("\124\150\x65\x72\145\40\151\x73\x20\x6e\x6f\164\x20\x64\141\x74\141\40\164\x6f\x20\163\x68\x6f\167\40\x79\x6f\165\54\x20\x70\154\x65\141\x73\x65\40\x72\145\x66\x72\145\x73\150\40\x70\x61\x67\x65\40\157\x72\40\143\x6f\x6e\164\x61\143\x74\x20\x75\x73\56", PR__MDL__OPTIMIZATION); goto myooisakyuggoggc; qsaoyggkqwcgskwk: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!($umwagewoweuckiso && ($ogaeiucyqmowuqms = $gkyciwoiiisgywcs->get($umwagewoweuckiso, "\160\154\141\x6e\137\151\x64")))) { goto equwcsciiggsuiam; } $guacamgosccsckmq = $kekgkgqeyesmkywu[$ogaeiucyqmowuqms] ?? ''; if ($guacamgosccsckmq) { goto oqckuigyqswmqcqg; } $guacamgosccsckmq = [Constants::eqewsqmqmsiocaeg => true, Constants::qescuiwgsyuikume => __("\131\157\x75\x72\40\123\165\142\163\143\x72\x69\x70\164\151\157\x6e", PR__MDL__OPTIMIZATION)]; goto owismwmeqcmukagu; oqckuigyqswmqcqg: $ycqsugugqomewkke = false; $yygmoeguaqyumuui = ["\167\145\142\137\166\x69\x74\x61\154\x5f\165\x73\x61\147\x65", "\143\162\151\164\x69\143\141\x6c\x5f\143\163\x73\x5f\165\x73\x61\147\x65"]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!(isset($guacamgosccsckmq[$uusmaiomayssaecw], $umwagewoweuckiso[$uusmaiomayssaecw]) && (int) $guacamgosccsckmq[$uusmaiomayssaecw] !== (int) $umwagewoweuckiso[$uusmaiomayssaecw])) { goto iuwccksomkkouogy; } $ycqsugugqomewkke = true; $guacamgosccsckmq = $umwagewoweuckiso; goto aqwoykqaquewcaki; iuwccksomkkouogy: mesesokuoomcioom: } aqwoykqaquewcaki: if ($ycqsugugqomewkke) { goto cceggewquoaemcwq; } $guacamgosccsckmq = null; $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\x25\163\40\50\45\x73\51", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] ?? '', __("\x59\157\x75\x72\40\x53\165\x62\163\x63\x72\x69\x70\x74\151\x6f\x6e", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::eqewsqmqmsiocaeg] = true; goto ioiwoukauoeamuca; cceggewquoaemcwq: $guacamgosccsckmq[Constants::qescuiwgsyuikume] = sprintf("\x25\x73\x20\50\45\x73\51", $guacamgosccsckmq[Constants::qescuiwgsyuikume], __("\x59\157\165\x72\x20\123\165\142\x73\143\x72\151\160\x74\151\x6f\x6e", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\x25\x73\40\x28\x25\x73\x29", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume], __("\116\145\167", PR__MDL__OPTIMIZATION)); $guacamgosccsckmq[Constants::eqewsqmqmsiocaeg] = true; ioiwoukauoeamuca: owismwmeqcmukagu: if (!$guacamgosccsckmq) { goto oiywguooqeasueqq; } array_splice($kekgkgqeyesmkywu, 0, 0, [$guacamgosccsckmq]); oiywguooqeasueqq: equwcsciiggsuiam: $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x73\x65\162\x76\151\x63\145\x5f\x63\x6f\x73\x74\163", ["\x70\154\x61\156\163" => $kekgkgqeyesmkywu, "\155\145\164\x72\x69\x63\x73" => ["\143\x72\x69\x74\151\x63\x61\x6c\137\x63\163\163" => __("\103\x72\151\x74\151\x63\141\154\40\x43\x53\123", PR__MDL__OPTIMIZATION), "\167\x65\x62\137\x76\151\x74\141\x6c" => __("\111\x6d\x70\162\157\166\x65\x20\x4c\103\x50", PR__MDL__OPTIMIZATION)], "\x63\157\x69\156\137\x6d\x61\163\x6b" => __("\45\163\x20\143\157\x69\x6e\x73", PR__MDL__OPTIMIZATION), "\163\165\142\x73\x63\x72\x69\x70\x74\x69\157\156\137\160\154\x61\156\x73\137\x74\151\164\154\145" => __("\123\x75\142\x73\x63\162\151\x70\164\x69\x6f\x6e\40\120\x6c\x61\156\x73", PR__MDL__OPTIMIZATION)]); myooisakyuggoggc: return $nsmgceoqaqogqmuw; } public function yeeeeqaamyquwaii($iwywmkygwewiamwm) : string { $mokawwccycoiqeka = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::weayyoewessosyko => $mokawwccycoiqeka], $iwywmkygwewiamwm); } }
