<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a68e6136ef8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Subscription; use Pmpr\Common\Foundation\ORM\View\Index; use Pmpr\Module\Optimization\Optimizer\Asset\Setting as AssetSetting; use Pmpr\Module\Optimization\Optimizer\Media\LazyLoad\Setting as LazyLoadSetting; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Subscription\Model\Purchase; class Engine extends Common { public function aackauiyyagmeqso() : array { return (array) $this->weysguygiseoukqw(self::eeyiwgsusysqessu, []); } public function sqamsikemwwsuwey() : array { return (array) $this->weysguygiseoukqw(self::uysmymaeucegyiyw, []); } public function qcgwasumiaaemeei() : array { return (array) $this->weysguygiseoukqw(self::eoigaocgcaekssuw, []); } public function ewgciagyquksawee() : array { return (array) $this->weysguygiseoukqw(self::mkciamyomkiccoes, []); } public function acgeiccowcqiwmqa() { $icwicymcioeyeyek = API::symcgieuakksimmu()->msyoakwyskammgqi(); if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek && ($ykquycoiqesuckco = $this->kmuweyayaqoeqiyw()))) { goto uqkqmseoeemyaqck; } $yygmoeguaqyumuui = [self::mkciamyomkiccoes, self::eeyiwgsusysqessu, self::uysmymaeucegyiyw, self::eoigaocgcaekssuw]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!empty($icwicymcioeyeyek[$uusmaiomayssaecw])) { goto uckeuuaqimqamuyc; } if (!(self::eeyiwgsusysqessu === $uusmaiomayssaecw)) { goto awikkaqmmuqkukma; } $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, ''); awikkaqmmuqkukma: goto mieeugiewckceagc; uckeuuaqimqamuyc: $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, $icwicymcioeyeyek[$uusmaiomayssaecw]); mieeugiewckceagc: giiucsyqgcooaima: } qcywwqceiqogcoyo: uqkqmseoeemyaqck: return $icwicymcioeyeyek; } public function aiamukikcuowsiku($suaemuyiacqyugsm = 1) : bool { $icwicymcioeyeyek = API::symcgieuakksimmu()->qqwmsyyqyoeeqsoo($suaemuyiacqyugsm); $gigyyisyuaacmwmq = false; if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek)) { goto aescssauecumgwso; } $yygmoeguaqyumuui = ["\x65\x78\x74\162\x61\x73", "\x73\165\142\x73\x63\x72\x69\x70\x74\x69\157\x6e\x73"]; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $suuagcecoyuweoqk = $icwicymcioeyeyek[$uusmaiomayssaecw][self::qwumqqyuasyskkkc] ?? []; if (!$suuagcecoyuweoqk) { goto kkacggiosquqagew; } $geeyaumoyycymeks = $uusmaiomayssaecw === "\x73\165\142\x73\x63\x72\x69\160\x74\151\x6f\156\163"; foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $qkasemkceamoceiy = $igqsaukqcqscimok[self::gouqcwikiiygyasc]; $sqeykgyoooqysmca = $geeyaumoyycymeks ? self::eoigaocgcaekssuw : self::mayesweykoooyugy; if (!$qkasemkceamoceiy) { goto qimomesqamyyicmo; } $cmaccwokqweqweqi = $yakcyegsoqusmiak->oqomcmyuuakigusk([$yakcyegsoqusmiak::squoamkioomemiyi => $sqeykgyoooqysmca, $yakcyegsoqusmiak::yocqkmeouaamomke => $qkasemkceamoceiy]); if (empty($cmaccwokqweqweqi)) { goto qiawociayswicugw; } $aasekyoqiwumiqom = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($igqsaukqcqscimok[self::uiwqcumqkgikqyue]); $wuegiysyymkmsuyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cmaccwokqweqweqi, self::uiwqcumqkgikqyue); if (!($aasekyoqiwumiqom !== $wuegiysyymkmsuyi)) { goto wsckacayikksiswo; } $yakcyegsoqusmiak->wqikesawekycweoi($cmaccwokqweqweqi, [self::uiwqcumqkgikqyue => $aasekyoqiwumiqom]); wsckacayikksiswo: goto ngagwiymmmycgscu; qiawociayswicugw: $yakcyegsoqusmiak->gscuuyuyauokoyuo([$yakcyegsoqusmiak::squoamkioomemiyi => $sqeykgyoooqysmca, $yakcyegsoqusmiak::kumuoysauoagaiiy => $igqsaukqcqscimok[self::kumuoysauoagaiiy], $yakcyegsoqusmiak::uiwqcumqkgikqyue => $igqsaukqcqscimok[self::uiwqcumqkgikqyue], $yakcyegsoqusmiak::acymsykymkiewqsy => $igqsaukqcqscimok[self::acymsykymkiewqsy], $yakcyegsoqusmiak::yocqkmeouaamomke => $qkasemkceamoceiy]); ngagwiymmmycgscu: qimomesqamyyicmo: mmwqwowqcaseyyki: } yuiouamaogkkqmck: kkacggiosquqagew: $ymiyawysimukkoso = $icwicymcioeyeyek[$uusmaiomayssaecw][self::ycuusiweasqygwiw] ?? []; if ($gigyyisyuaacmwmq) { goto augqweqsqioesmim; } $gigyyisyuaacmwmq = $ymiyawysimukkoso && isset($ymiyawysimukkoso[self::asmooogmgyecqqka], $ymiyawysimukkoso[self::yusuiaeueqwieqqq]) && $ymiyawysimukkoso[self::asmooogmgyecqqka] < $ymiyawysimukkoso[self::yusuiaeueqwieqqq]; augqweqsqioesmim: yayykakkyeoieicm: } cceyoumkiicaguio: aescssauecumgwso: return $gigyyisyuaacmwmq; } public function kscwewuywiakosos() : string { $meqocwsecsywiiqs = __("\123\171\x6e\143\x20\104\x61\x74\141", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([self::squoamkioomemiyi => self::smkwuwawwaqyimcq, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\124\x68\x65\x20\144\x61\164\x61\x20\141\x73\x73\157\x63\x69\141\x74\x65\144\x20\x77\x69\164\150\40\x79\157\165\162\40\141\x63\x63\x6f\165\x6e\x74\x20\x69\163\40\165\160\x64\x61\164\145\x64\x20\x77\x69\x74\150\40\164\150\145\x20\163\x65\162\x76\145\162\x20\x61\164\x20\x72\x65\x67\165\154\141\162\40\151\x6e\164\145\x72\166\x61\154\163\x2e\x20\x54\157\40\x65\x6e\x73\x75\162\x65\x20\x74\150\x65\x20\154\141\164\x65\x73\x74\x20\165\160\x64\x61\164\x65\54\x20\x79\157\165\40\143\141\156\x20\x75\160\x64\x61\164\145\40\171\x6f\165\x72\40\x61\x63\x63\157\165\x6e\x74\x20\x64\141\x74\141\40\167\151\x74\x68\40\x74\x68\145\x20\163\x65\162\x76\145\x72\40\156\157\167\56", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\143\x6c\141\163\x73" => "\157\160\164\x2d\x73\x79\x6e\143\55\144\x61\164\x61\40\160\162\55\x62\164\156\40\142\164\156\x2d\160\162\x69\x6d\141\162\x79", self::qescuiwgsyuikume => $meqocwsecsywiiqs]]], $meqocwsecsywiiqs, ["\143\154\141\x73\x73" => "\x77\55\x31\60\60\40\160\162\x2d\142\x74\x6e\x20\142\x74\x6e\55\x61\143\164\x69\x6f\156\40\142\164\156\x2d\157\x75\164\154\151\x6e\145\x2d\x70\162\151\x6d\141\x72\171"]); } public function samoqkkuimogeyew() : array { $qwgquweoiskugckg = $this->ewgciagyquksawee(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($umwagewoweuckiso) { goto qcceyyqiuiqcyqqm; } $icwicymcioeyeyek = $this->acgeiccowcqiwmqa(); if (!($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek))) { goto cooeoemccqiyewks; } $umwagewoweuckiso = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, self::eoigaocgcaekssuw); cooeoemccqiyewks: qcceyyqiuiqcyqqm: $eymaoksggoskuikg = __("\x55\x6e\x6b\156\157\167\156", PR__MDL__OPTIMIZATION); $momcqeuuwwsaagyc = __("\x25\163\x20\143\157\151\156\x73", PR__MDL__OPTIMIZATION); $wekousyuiguacggm = $gkyciwoiiisgywcs->get($umwagewoweuckiso, self::icymuyeowqaciyyu); $ymyueyaumiqiuaqa = 0; if (!$wekousyuiguacggm) { goto ssesmiwwmsayksum; } $ymyueyaumiqiuaqa = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->omyucuigmqgqmwio($wekousyuiguacggm); ssesmiwwmsayksum: if ($ymyueyaumiqiuaqa <= 0) { goto qkwckeqowgaokkuy; } $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(_n("\x25\x73\x20\104\141\171", "\45\x73\x20\104\141\171\x73", $ymyueyaumiqiuaqa, PR__MDL__OPTIMIZATION), $this->msywmyaoqmaegsuy($ymyueyaumiqiuaqa)), ["\143\x6c\141\163\163" => "\164\145\170\164\55\x73\x75\x63\143\145\163\163"]); goto kqkymieyyqaoeymw; qkwckeqowgaokkuy: $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x45\x78\160\151\x72\x65\144", PR__MDL__OPTIMIZATION), ["\x63\154\x61\163\163" => "\x74\x65\x78\x74\55\x64\141\156\x67\x65\x72"]); kqkymieyyqaoeymw: $cesmwwwcymckqaku = $qwgquweoiskugckg[self::eoigaocgcaekssuw][self::ALL] ?? 0; $mcoyqciicgkwcmac = $qwgquweoiskugckg[self::eoigaocgcaekssuw][self::gikauwqcswqcsmqw] ?? 0; $yeyequgieweqoume = $qwgquweoiskugckg[self::mayesweykoooyugy][self::ALL] ?? 0; $ceaoyakceaaoaaei = $qwgquweoiskugckg[self::mayesweykoooyugy][self::gikauwqcswqcsmqw] ?? 0; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $okmuwqcyiyiommaq = $yakcyegsoqusmiak->oqomcmyuuakigusk([self::squoamkioomemiyi => self::mayesweykoooyugy, [self::euoaaiqkqcqcgeco => self::cqcimoqckgmaacyw, self::meisqwykgaymauka => self::kumuoysauoagaiiy, self::ciyoccqkiamemcmm => self::omaksceqmigeaoko]]); if ($okmuwqcyiyiommaq) { goto gqyyccceswkqcmaa; } $scyqmomasqcossoq = $ocsquaqymuwoyisw = __("\116\157\x20\120\165\162\x63\150\x61\x73\145", PR__MDL__OPTIMIZATION); goto sykuuisikqcwuaqu; gqyyccceswkqcmaa: $ocsquaqymuwoyisw = $this->msywmyaoqmaegsuy($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, self::uiwqcumqkgikqyue)[self::ciyoccqkiamemcmm] ?? 0); $scyqmomasqcossoq = $this->eciukqcoqmyacwow($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, self::kumuoysauoagaiiy), $this->caokeucsksukesyo()->eiwcuqigayigimak()->yoaaussmackoisuw()); sykuuisikqcwuaqu: $gkeiousaoygaimia = [self::eoigaocgcaekssuw => [self::qescuiwgsyuikume => __("\123\165\142\163\143\162\151\x70\164\x69\157\156\x20\120\154\x61\156", PR__MDL__OPTIMIZATION), self::qwumqqyuasyskkkc => ["\x70\x6c\x61\x6e" => [self::qescuiwgsyuikume => __("\123\165\142\x73\x63\x72\x69\160\x74\151\157\x6e\40\120\154\141\156", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, self::qescuiwgsyuikume, $eymaoksggoskuikg)], "\x70\x65\x72\x69\157\144" => [self::qescuiwgsyuikume => __("\120\154\141\x6e\40\120\145\162\x69\157\144", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, self::eeeyoywyquqywwoo, $eymaoksggoskuikg)], "\x72\145\155\x61\x69\156\137\144\141\x79" => [self::qescuiwgsyuikume => __("\122\145\x6d\141\x69\156\x69\156\147\40\x54\151\x6d\x65", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $ymyueyaumiqiuaqa], "\x63\157\x69\156\x73" => [self::qescuiwgsyuikume => __("\x43\x6f\165\x6e\x74\40\x6f\146\x20\x49\x6e\151\x74\x69\141\154\x20\x43\x6f\x69\x6e\x73", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy($cesmwwwcymckqaku))], "\x75\x73\x65\x64\137\x63\157\x69\x6e\163" => [self::qescuiwgsyuikume => __("\125\163\x65\144\40\103\157\x69\156\163", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(min($cesmwwwcymckqaku, $mcoyqciicgkwcmac)))], "\x72\x65\155\141\x69\156\137\x63\x6f\x69\156\x73" => [self::qescuiwgsyuikume => __("\x52\145\x6d\141\x69\x6e\x20\103\157\x69\x6e\163", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(max(0, $cesmwwwcymckqaku - $mcoyqciicgkwcmac)))]]], self::uysmymaeucegyiyw => [self::qescuiwgsyuikume => __("\x45\x78\x74\x72\x61\x20\x43\x6f\151\156", PR__MDL__OPTIMIZATION), self::qwumqqyuasyskkkc => ["\154\x61\x74\145\163\x74\137\160\165\162\143\x68\x61\163\145\x5f\x63\x6f\x75\x6e\164" => [self::qescuiwgsyuikume => __("\x4c\141\x74\x65\163\x74\x20\120\x75\x72\143\150\141\x73\145\40\103\157\x75\156\x74", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $ocsquaqymuwoyisw], "\154\141\164\145\x73\x74\x5f\x70\x75\x72\x63\x68\x61\163\x65\x5f\144\x61\x74\145" => [self::qescuiwgsyuikume => __("\114\141\164\145\163\164\40\x50\165\x72\143\150\141\x73\x65\40\104\141\x74\145", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $scyqmomasqcossoq], "\x65\170\160\151\x72\x61\x74\151\157\x6e" => [self::qescuiwgsyuikume => __("\105\170\x70\x69\x72\145\40\x44\141\x74\x65", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\127\x69\x74\150\x6f\x75\164\x20\x65\x78\x70\x69\x72\x65\x20\144\141\x74\x65", PR__MDL__OPTIMIZATION), ["\x63\x6c\141\163\163" => "\x74\x65\170\x74\55\163\165\x63\x63\x65\x73\x73"])], "\x63\x6f\151\156\163\137\x63\157\165\156\x74" => [self::qescuiwgsyuikume => __("\x41\x6c\154\40\x43\x6f\x69\156\x73\40\x43\x6f\x75\x6e\164", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy($yeyequgieweqoume))], "\165\163\x65\144\x5f\x63\157\151\156\163" => [self::qescuiwgsyuikume => __("\x55\163\x65\144\40\103\x6f\151\156\x73", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(min($yeyequgieweqoume, $ceaoyakceaaoaaei)))], "\162\x65\x6d\141\x69\x6e\137\143\x6f\x69\156\x73" => [self::qescuiwgsyuikume => __("\x52\145\x6d\x61\151\156\x20\x43\x6f\151\x6e\x73", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(max(0, $yeyequgieweqoume - $ceaoyakceaaoaaei)))]]]]; foreach ($gkeiousaoygaimia as $uusmaiomayssaecw => $keymuysuaseeokmy) { $gkeiousaoygaimia[$uusmaiomayssaecw][self::ugsuecoyuqcamsac] = $swqimwqeweekeusq->kuumcaywkqiasisk($keymuysuaseeokmy[self::qwumqqyuasyskkkc], ["\164\141\142\154\x65\x5f\141\164\x74\162\x73" => ["\143\154\x61\x73\x73" => "\155\142\x2d\60\40\164\x61\x62\x6c\145\40\164\x61\142\154\145\55\142\157\x72\x64\145\162\x6c\145\163\x73"], "\164\144\137\x61\164\x74\x72\163" => ["\143\154\141\163\x73" => "\x70\x78\55\x30\40\x70\x79\x2d\x32"], "\154\141\x73\164\x5f\x74\144\137\141\164\164\162\163" => ["\143\x6c\x61\x73\x73" => "\160\170\55\60\40\x70\x79\55\x32\40\146\x6f\x6e\x74\x2d\x77\x65\x69\x67\150\x74\x2d\142\x6f\154\x64\x20\x74\x65\170\164\x2d\x72\x69\x67\150\x74"]]); weiaigyyigkusucy: } mquyemuqcqeassqc: return $gkeiousaoygaimia; } public function aaasykywsggkskse(bool $scsaeueqgyymsyei = false) : string { $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); if (!($yakcyegsoqusmiak->asskucacysemeoiu() === 0 && $this->aiamukikcuowsiku())) { goto bagkewioewygysea; } Process::symcgieuakksimmu()->gposkkqsquyqiguk(2); bagkewioewygysea: $qookweymeqawmcwo = ["\154\x69\x73\164\x5f\x68\x74\x6d\154" => $this->wwqmoqsgmkosymuu($yakcyegsoqusmiak, "\160\x75\x72\x63\150\141\163\145\x73", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\x72\145\160\x6f\x72\164\57\x70\165\162\x63\x68\x61\x73\145", $qookweymeqawmcwo); } public function aksiycwcekcecuec(bool $scsaeueqgyymsyei = false) : string { $qookweymeqawmcwo = ["\154\x69\163\x74\x5f\x68\x74\155\154" => $this->wwqmoqsgmkosymuu(Remote::symcgieuakksimmu(), "\165\163\141\x67\x65\163", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\x72\x65\160\157\x72\164\57\165\163\141\147\x65", $qookweymeqawmcwo); } public function wmeeckgouqiwiqco($sameaqkagyqomooq = 0) : array { $ccowyogiqwikkkie = []; if (!(self::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(AssetSetting::eoeewcigeywcquis))) { goto mgieeyuyuoeccaog; } $ccowyogiqwikkkie[] = self::eoeewcigeywcquis; mgieeyuyuoeccaog: if (!(LazyLoadSetting::ekoiwoksaoemsgky === $this->weysguygiseoukqw(LazyLoadSetting::kmkkamyqcgmygkoi))) { goto amgsicqmemeuuaem; } $ccowyogiqwikkkie[] = self::wgeawuowgusmmece; amgsicqmemeuuaem: return $ccowyogiqwikkkie; } private function wwqmoqsgmkosymuu($meywaqqsugaoeyys, string $ymqmyyeuycgmigyo, bool $scsaeueqgyymsyei = false) { $wqgwesyciiqcoocs = ''; $gikeqowakccckkqe = $meywaqqsugaoeyys->cgswceaawqgeskua(self::weiosaewqequuyuq); if (!$gikeqowakccckkqe instanceof Index) { goto emagssesowicacoa; } $ywmkwiwkosakssii = [self::cacismqswgaewkuu => $meywaqqsugaoeyys->miwqiiqeegeqcwis()]; if (!$scsaeueqgyymsyei) { goto gwksywaoeowkesei; } $ywmkwiwkosakssii[self::ausqeuugegoygouq] = 4; gwksywaoeowkesei: $wqgwesyciiqcoocs = $gikeqowakccckkqe->ekysoioumkkwawwm($ywmkwiwkosakssii, $scsaeueqgyymsyei); if (!$scsaeueqgyymsyei) { goto sgkwaiuukkaqyqki; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = Page::symcgieuakksimmu()->oiucukewkckkwiqc(); $wqgwesyciiqcoocs .= $swqimwqeweekeusq->yuawgssgauywkiia(__("\126\x69\x65\167\40\x74\150\145\40\x46\x75\x6c\154\x20\x52\x65\160\157\162\164", PR__MDL__OPTIMIZATION), $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\x73\145\147\155\x65\x6e\164" => "{$ymqmyyeuycgmigyo}\x5f\x72\145\160\157\x72\x74"], $eeamcawaiqocomwy), ["\143\x6c\141\163\163" => "\160\162\x2d\x62\x74\x6e\x20\x62\164\x6e\55\160\162\151\x6d\x61\162\x79\x20\142\x74\156\55\141\143\164\151\157\x6e"]); sgkwaiuukkaqyqki: emagssesowicacoa: return $wqgwesyciiqcoocs; } public function sqequueykkkyoqwc($sameaqkagyqomooq) : int { $imeywacwecgemcco = 0; $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!$umwagewoweuckiso) { goto uqiekawkwcegsumy; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ccowyogiqwikkkie = $this->wmeeckgouqiwiqco($sameaqkagyqomooq); foreach ($ccowyogiqwikkkie as $aiamqeawckcsuaou) { $uymsgmyyeikucgae = false; switch ($aiamqeawckcsuaou) { case self::eoeewcigeywcquis: $uymsgmyyeikucgae = $aiamqeawckcsuaou; goto uugwoygiyecgymgw; case self::wgeawuowgusmmece: $uymsgmyyeikucgae = "\x77\145\x62\137\x76\151\x74\x61\x6c"; goto uugwoygiyecgymgw; } acmgueaoaaweiqqu: uugwoygiyecgymgw: if (!$uymsgmyyeikucgae) { goto awaaowoqskgokwiy; } $imeywacwecgemcco += (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, $uymsgmyyeikucgae . "\137\x75\x73\x61\147\x65", 0); awaaowoqskgokwiy: gusgywuaimwooawc: } cauqmacqkssciwyq: uqiekawkwcegsumy: return $imeywacwecgemcco; } public function gwcqgaaameykykci() : string { if ($kekgkgqeyesmkywu = $this->aackauiyyagmeqso()) { goto iikgiaocummweiga; } $nsmgceoqaqogqmuw = __("\x54\150\x65\162\x65\40\x69\163\40\x6e\157\x74\40\x64\x61\x74\x61\40\164\x6f\x20\x73\150\x6f\167\40\x79\x6f\165\x2c\40\x70\x6c\145\x61\x73\145\40\x72\145\146\162\145\163\150\40\x70\141\x67\x65\x20\x6f\x72\x20\x63\157\x6e\164\141\143\164\x20\165\163\56", PR__MDL__OPTIMIZATION); goto gsusqquicmukegcs; iikgiaocummweiga: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!($umwagewoweuckiso && ($ogaeiucyqmowuqms = $gkyciwoiiisgywcs->get($umwagewoweuckiso, "\160\x6c\x61\x6e\x5f\151\144")))) { goto ueqsiwuwumoqgsck; } $guacamgosccsckmq = $kekgkgqeyesmkywu[$ogaeiucyqmowuqms] ?? ''; if ($guacamgosccsckmq) { goto cksoeiwawiygyiyg; } $guacamgosccsckmq = [self::eqewsqmqmsiocaeg => true, self::qescuiwgsyuikume => __("\x59\157\165\162\40\x53\165\x62\x73\x63\162\x69\160\164\151\157\x6e", PR__MDL__OPTIMIZATION)]; goto cyqokqcacysioeyc; cksoeiwawiygyiyg: $ycqsugugqomewkke = false; $yygmoeguaqyumuui = ["\167\x65\142\x5f\166\x69\x74\x61\x6c\x5f\165\x73\141\x67\145", "\x63\162\x69\x74\x69\143\x61\154\x5f\x63\x73\163\x5f\165\163\141\x67\x65"]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!(isset($guacamgosccsckmq[$uusmaiomayssaecw], $umwagewoweuckiso[$uusmaiomayssaecw]) && (int) $guacamgosccsckmq[$uusmaiomayssaecw] !== (int) $umwagewoweuckiso[$uusmaiomayssaecw])) { goto gkoyqgogsukuowqi; } $ycqsugugqomewkke = true; $guacamgosccsckmq = $umwagewoweuckiso; goto kgikoagqwkuocesg; gkoyqgogsukuowqi: skaayekywasksoug: } kgikoagqwkuocesg: if ($ycqsugugqomewkke) { goto sgikkoswwyesqomo; } $guacamgosccsckmq = null; $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][self::qescuiwgsyuikume] = sprintf("\45\163\x20\x28\x25\163\51", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][self::qescuiwgsyuikume] ?? '', __("\x59\157\165\x72\x20\123\165\142\163\x63\162\151\160\164\151\x6f\156", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][self::eqewsqmqmsiocaeg] = true; goto aayysiegiyweiyuu; sgikkoswwyesqomo: $guacamgosccsckmq[self::qescuiwgsyuikume] = sprintf("\x25\163\40\x28\45\x73\51", $guacamgosccsckmq[self::qescuiwgsyuikume], __("\x59\157\165\x72\40\123\x75\142\x73\x63\162\151\160\x74\151\x6f\156", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][self::qescuiwgsyuikume] = sprintf("\45\x73\40\x28\x25\x73\51", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][self::qescuiwgsyuikume], __("\x4e\145\167", PR__MDL__OPTIMIZATION)); $guacamgosccsckmq[self::eqewsqmqmsiocaeg] = true; aayysiegiyweiyuu: cyqokqcacysioeyc: if (!$guacamgosccsckmq) { goto akwwuuiykscgicuw; } array_splice($kekgkgqeyesmkywu, 0, 0, [$guacamgosccsckmq]); akwwuuiykscgicuw: ueqsiwuwumoqgsck: $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\163\145\x72\x76\151\x63\x65\137\x63\157\163\x74\x73", ["\160\x6c\x61\x6e\163" => $kekgkgqeyesmkywu, "\155\x65\x74\x72\151\x63\x73" => ["\143\162\x69\x74\x69\x63\141\154\137\143\x73\163" => __("\103\162\151\164\151\143\x61\154\x20\103\x53\x53", PR__MDL__OPTIMIZATION), "\167\145\142\x5f\166\x69\164\141\154" => __("\111\x6d\x70\x72\x6f\166\x65\40\114\103\120", PR__MDL__OPTIMIZATION)], "\143\157\151\156\137\155\141\163\x6b" => __("\45\163\40\x63\x6f\x69\x6e\163", PR__MDL__OPTIMIZATION), "\163\165\142\x73\143\162\x69\160\x74\x69\157\x6e\x5f\160\x6c\x61\x6e\163\x5f\x74\x69\164\x6c\145" => __("\x53\x75\x62\x73\x63\x72\151\x70\164\151\x6f\156\40\x50\x6c\x61\156\163", PR__MDL__OPTIMIZATION)]); gsusqquicmukegcs: return $nsmgceoqaqogqmuw; } public function yeeeeqaamyquwaii($iwywmkygwewiamwm) : string { $mokawwccycoiqeka = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([self::weayyoewessosyko => $mokawwccycoiqeka], $iwywmkygwewiamwm); } }
