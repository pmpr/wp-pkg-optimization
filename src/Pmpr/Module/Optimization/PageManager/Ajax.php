<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6668a93c5745b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use WP_Error; class Ajax extends Common { use PageManagerEngineTrait; const swkaqiikoaickuui = "\157\x70\164\x69\x6d\151\172\x65"; const eueyiwccigugisqe = "\x63\150\145\x63\153\137\154\x69\156\153"; const wwgqqgayyagycysu = "\x70\165\x72\x67\145\137\143\141\143\x68\x65"; const aeksqkkekigwssku = self::kgswyesggeyekgmg . "\x73\145\x74\165\160\x5f\160\x61\164\164\145\162\156\137\141\x63\x74\151\157\156"; const quuasuseuccsemsw = self::kgswyesggeyekgmg . "\141\x63\x74\x69\166\x65\137\160\141\x74\164\145\x72\156\137\x61\x63\164\151\157\x6e"; const qskskgmuqiggaqeg = self::kgswyesggeyekgmg . "\x63\150\145\x63\153\137\x70\141\x74\x74\x65\162\x6e\x5f\162\x75\156\x5f\141\x63\164\x69\157\x6e"; const kaqawyqaekuookgi = self::kgswyesggeyekgmg . "\160\x61\147\145\163\x5f\x63\x61\143\150\145\x5f\163\x74\141\x74\165\163"; const kusgmosaoigiukgi = self::kgswyesggeyekgmg . "\x72\145\x6f\160\164\151\155\151\x7a\145\137\160\x61\164\164\x65\x72\156\137\141\x63\x74\151\x6f\156"; const wegmeawoaymsqkyi = self::kgswyesggeyekgmg . "\144\x65\141\143\x74\151\x76\141\164\x65\x5f\160\x61\x74\x74\145\x72\156\137\141\x63\x74\151\157\156"; const maqcykaweqimuomu = self::kgswyesggeyekgmg . "\143\150\145\x63\x6b\137\143\141\x6e\144\x69\x64\x61\x74\145\x5f\x75\x72\154\x5f\141\143\x74\151\x6f\x6e"; const ggmmioeoauiyccec = self::kgswyesggeyekgmg . "\160\141\147\x65\x73\x5f\x63\x61\x63\x68\x65\x5f\160\162\x6f\x67\x72\x65\163\163"; const esiucesqiemeickk = self::kgswyesggeyekgmg . "\x70\x75\162\x67\145\x5f\160\x61\x74\164\x65\x72\x6e\x5f\x70\x61\147\145\x73\137\143\141\143\x68\x65\x5f\141\143\x74\151\157\x6e"; const ccyqqagwskwauoem = ["\x70\x75\162\147\x65\137\x70\x61\x74\x74\x65\x72\x6e\x5f\x70\x61\x67\x65\x73\137\143\x61\x63\x68\x65" => self::esiucesqiemeickk, "\x70\141\x67\x65\163\137\x63\141\x63\x68\x65\137\160\x72\157\x67\162\x65\163\163" => self::ggmmioeoauiyccec, "\143\150\x65\x63\x6b\x5f\x63\141\x6e\x64\151\x64\x61\164\145\137\x6c\151\x6e\153" => self::maqcykaweqimuomu, "\x70\141\147\145\x73\x5f\x63\141\x63\x68\145\x5f\163\164\x61\x74\x75\163" => self::kaqawyqaekuookgi, "\144\x65\141\x63\164\x69\166\141\x74\x65\137\x70\141\x74\x74\x65\162\156" => self::wegmeawoaymsqkyi, "\162\x65\157\160\164\x69\155\151\172\x65\137\x70\x61\x74\164\x65\162\x6e" => self::kusgmosaoigiukgi, "\x63\150\145\143\153\x5f\x70\x61\164\164\145\x72\x6e\x5f\x72\165\x6e" => self::qskskgmuqiggaqeg, "\x61\x63\164\x69\x76\x61\164\145\137\x70\x61\164\x74\145\162\156" => self::quuasuseuccsemsw, "\163\145\x74\x75\160\x5f\x70\x61\x74\164\x65\x72\x6e" => self::aeksqkkekigwssku]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::aeksqkkekigwssku, [$this, "\143\x67\x63\x71\x6d\151\157\153\x73\171\167\153\x65\x6b\x61\x6f"])->koaegcswmcqsiykq(self::quuasuseuccsemsw, [$this, "\143\x69\x77\x77\x6f\157\167\167\x63\163\143\163\x63\x67\165\x67"])->koaegcswmcqsiykq(self::qskskgmuqiggaqeg, [$this, "\165\167\155\x71\141\163\153\x63\x77\141\x6d\x69\147\151\x6d\145"])->koaegcswmcqsiykq(self::kaqawyqaekuookgi, [$this, "\147\161\x75\x63\x79\161\161\x6b\x67\x73\161\171\163\x61\157\151"])->koaegcswmcqsiykq(self::kusgmosaoigiukgi, [$this, "\x69\x77\165\x61\x71\157\x73\x6d\161\x6d\167\155\145\157\151\167"])->koaegcswmcqsiykq(self::wegmeawoaymsqkyi, [$this, "\x6d\167\165\x77\171\x69\141\x67\x65\x65\x61\145\x6f\x79\165\171"])->koaegcswmcqsiykq(self::maqcykaweqimuomu, [$this, "\145\153\x61\155\x67\145\x71\157\x67\x6f\x73\x67\x67\145\x6f\141"])->koaegcswmcqsiykq(self::ggmmioeoauiyccec, [$this, "\141\x61\145\x6d\143\163\x6b\x65\x6d\x67\171\141\157\x61\157\x77"])->koaegcswmcqsiykq(self::esiucesqiemeickk, [$this, "\163\145\163\141\x71\153\145\x73\141\145\141\145\x63\157\141\x6f"]); } public function gqucyqqkgsqysaoi() { $this->cgywqskcmcgkwueu(self::kaqawyqaekuookgi); } public function aaemcskemgyaoaow() { $this->cgywqskcmcgkwueu(self::ggmmioeoauiyccec); } public function uwmqaskcwamigime() { $this->cgywqskcmcgkwueu(self::qskskgmuqiggaqeg); } public function iwuaqosmqmwmeoiw() { $this->cgywqskcmcgkwueu(self::ccoesaeoiusskiew); } public function cgcqmioksywkekao() { $this->cgywqskcmcgkwueu(self::gqgwsyegwkicuomu); } public function ciwwoowwcscscgug() { $this->cgywqskcmcgkwueu(self::kueyauseicqqwesu); } public function mwuwyiageeaeoyuy() { $this->cgywqskcmcgkwueu(self::yewqymwwigegyeuk); } public function ekamgeqogosggeoa() { $this->cgywqskcmcgkwueu(self::eueyiwccigugisqe); } public function sesaqkesaeaecoao() { $this->cgywqskcmcgkwueu(self::wwgqqgayyagycysu); } private function cgywqskcmcgkwueu($aiamqeawckcsuaou) { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($keccaugmemegoimu)) { goto gkwoqoeaecgkymeu; } $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(self::qakegsaikiimcmkc, 0, true); if ($eouekqmooogkoqoo = $jwkieqegmyuwayce->akkkoiiymmamsauc($sameaqkagyqomooq)) { goto cyymeyomuakqakwo; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x50\x61\x74\x74\x65\162\x6e\x20\116\x6f\164\x20\x46\157\x75\156\x64", PR__MDL__OPTIMIZATION)); goto uwscegkmmumymoaq; cyymeyomuakqakwo: switch ($aiamqeawckcsuaou) { case self::ggmmioeoauiyccec: $keccaugmemegoimu = ["\x70\162\x6f\x67\162\x65\163\163" => $goqqimcssiyagkwy->emygimuicqcskaam($sameaqkagyqomooq), self::ciywsqoeiymemsys => $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq, false)]; goto swuggqyiaiqywgge; case self::kaqawyqaekuookgi: $keccaugmemegoimu = $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq); goto swuggqyiaiqywgge; case self::qskskgmuqiggaqeg: if ($scwwcyaqyywsweoq = $goqqimcssiyagkwy->iwuigwiooogcgwwu($sameaqkagyqomooq)) { goto ggewkaiwwgkmkwgc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x54\x68\145\162\145\x20\x69\163\x20\156\x6f\x20\x72\x65\x6d\157\164\x65\x20\162\x75\156\40\x66\157\x72\40\160\x61\x74\x74\145\x72\x6e\x2e", PR__MDL__OPTIMIZATION)); goto kkieqqwwascekcmo; ggewkaiwwgkmkwgc: $iueymcwwscwqkiyq = Remote::symcgieuakksimmu()->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $scwwcyaqyywsweoq); if (!($iueymcwwscwqkiyq === self::eyemmiwoaayukksq)) { goto syuywgysqyckcqay; } $sogksuscggsicmac = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x76\x69\x72\164\x75\x61\x6c\x5f\142\162\157\x77\163\x65\162\137\143\x68\x65\x63\153\137\146\x69\x6e\151\x73\x68\145\144", $sameaqkagyqomooq); if (!($sogksuscggsicmac !== $sameaqkagyqomooq)) { goto kmseiouukkqiumum; } if (is_wp_error($sogksuscggsicmac)) { goto yccuomocgmewkeca; } if (!$sogksuscggsicmac) { goto gcaykgmmmqomsyis; } $iueymcwwscwqkiyq = self::amcogigwsaqssuai; gcaykgmmmqomsyis: goto suiywiakesiegcwu; yccuomocgmewkeca: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; suiywiakesiegcwu: kmseiouukkqiumum: syuywgysqyckcqay: $keccaugmemegoimu = [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, "\154\x61\164\145\x73\x74\137\162\165\x6e" => $iueymcwwscwqkiyq !== self::eyemmiwoaayukksq ? $goqqimcssiyagkwy->voqagyawicswcaau($sameaqkagyqomooq, "\x6c\x61\164\x65\163\x74\x5f\162\165\x6e", true) : '', "\160\141\147\x65\x73\137\x63\141\x63\x68\x65" => $iueymcwwscwqkiyq !== self::eyemmiwoaayukksq ? $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq) : '']; kkieqqwwascekcmo: goto swuggqyiaiqywgge; case self::gqgwsyegwkicuomu: $keccaugmemegoimu = $this->_setupPattern($eouekqmooogkoqoo); goto swuggqyiaiqywgge; case self::ccoesaeoiusskiew: if (!$goqqimcssiyagkwy->gqwuqkumkkkygwuw($sameaqkagyqomooq)) { goto awimwukcyiceackk; } $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); if (is_wp_error($keccaugmemegoimu)) { goto ycueoqkeakismiqw; } $keccaugmemegoimu = $this->_optimizePattern($sameaqkagyqomooq, $keccaugmemegoimu); ycueoqkeakismiqw: awimwukcyiceackk: goto swuggqyiaiqywgge; case self::kueyauseicqqwesu: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, self::eqewsqmqmsiocaeg); if (is_wp_error($keccaugmemegoimu)) { goto mugeiwyysiemwaym; } $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo); mugeiwyysiemwaym: goto swuggqyiaiqywgge; case self::yewqymwwigegyeuk: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, self::uucoeqmmykkwsmqc); goto swuggqyiaiqywgge; case self::wwgqqgayyagycysu: if ($goqqimcssiyagkwy->sesaqkesaeaecoao($eouekqmooogkoqoo)) { goto euymeegkukskiowq; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\x6f\155\145\x74\150\151\x6e\x67\x20\x77\x72\x6f\156\147\x20\157\156\40\x70\165\x72\x67\151\156\147\40\160\x61\x67\145\x73\x20\x63\x61\143\x68\x65\56", PR__MDL__OPTIMIZATION)); goto cquikgykuscqmigw; euymeegkukskiowq: $keccaugmemegoimu = __("\120\141\147\x65\163\x20\x63\141\143\x68\x65\x20\x70\x75\x72\147\x65\x64\x20\x73\165\143\x63\x65\163\163\146\165\154\x6c\171\x2e", PR__MDL__OPTIMIZATION); cquikgykuscqmigw: goto swuggqyiaiqywgge; case self::eueyiwccigugisqe: $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); goto swuggqyiaiqywgge; } ocwouquuwsaqakae: swuggqyiaiqywgge: uwscegkmmumymoaq: $occymigcemkqucuw = !is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu; gkwoqoeaecgkymeu: $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } private function _checkLink($eouekqmooogkoqoo, array $ocqawgquwsqioses = []) { if ($ocqawgquwsqioses) { goto ouaoyqugwsagkqaa; } $ocqawgquwsqioses = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); ouaoyqugwsagkqaa: $ksaameoqigiaoigg = ''; if (!($iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(self::ogigqueukwysusii, '', true))) { goto wgeueumgacuuuama; } $iwywmkygwewiamwm = trailingslashit($iwywmkygwewiamwm); if (isset($ocqawgquwsqioses[$iwywmkygwewiamwm])) { goto auaywaskqooasiuq; } $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\x55\x52\x4c\x20\x69\x73\40\x6e\157\164\x20\155\141\x74\x63\150\x65\144\40\x74\157\40\160\x61\x74\164\x65\x72\x6e\x2e", PR__MDL__OPTIMIZATION)); goto ewoqyogcaksucksk; auaywaskqooasiuq: $ksaameoqigiaoigg = $iwywmkygwewiamwm; ewoqyogcaksucksk: wgeueumgacuuuama: return $ksaameoqigiaoigg; } private function _setupPattern($eouekqmooogkoqoo) { $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); if (!$jwkieqegmyuwayce->wuwcyeequuwaeias($eouekqmooogkoqoo)) { goto gkuwmiusoqwesqoo; } $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\120\x61\x74\164\145\162\156\40\x61\x6c\x72\145\x61\x64\x79\40\163\x65\x74\x75\x70\x65\144\x2e", PR__MDL__OPTIMIZATION)); goto wmsiqkyqsiysgcyy; gkuwmiusoqwesqoo: $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(self::ogigqueukwysusii, '', true); $mokmmyiueoiqokyc = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); if ($iwywmkygwewiamwm && is_wp_error($this->_checkLink($eouekqmooogkoqoo, $mokmmyiueoiqokyc))) { goto qaikeckkiwasykwk; } $awyumwiewiauosqy = $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo, $mokmmyiueoiqokyc); if (empty($awyumwiewiauosqy)) { goto cqemkecywkkwaaii; } $ueeagokqmgisgauy = ''; foreach ($awyumwiewiauosqy as $igqsaukqcqscimok) { if (!(isset($igqsaukqcqscimok[self::iwyueouqaqegmcas]) && $igqsaukqcqscimok[self::iwyueouqaqegmcas])) { goto kmiqskugkmaiugae; } $ueeagokqmgisgauy .= "\74\142\x72\x3e{$this->gcsweumukyckmgik($igqsaukqcqscimok[self::iwyueouqaqegmcas])}"; kmiqskugkmaiugae: iuaeeeeggkikuiig: } simkiasocoimioew: $ksaameoqigiaoigg = $this->oemauiimmycumcsk(sprintf(__("\123\157\x6d\145\x20\160\141\x67\x65\40\x6e\157\x74\x20\x61\144\x64\x2e\x20\x25\x73", PR__MDL__OPTIMIZATION), $ueeagokqmgisgauy)); goto wcioaoeiiawwqqqq; cqemkecywkkwaaii: if ($this->wkagassgcaqeosio()->gqwuqkumkkkygwuw($jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo))) { goto qgyaeoqgekocwkmw; } $ksaameoqigiaoigg = $this->wkagassgcaqeosio()->cmgakiqmkkiokgmk($eouekqmooogkoqoo, self::eqewsqmqmsiocaeg); goto sieykcqauaygcais; qgyaeoqgekocwkmw: if ($iwywmkygwewiamwm) { goto yukacyeckkwagusw; } $iwywmkygwewiamwm = array_key_first($mokmmyiueoiqokyc); yukacyeckkwagusw: $sameaqkagyqomooq = $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo); $ksaameoqigiaoigg = $this->_optimizePattern($sameaqkagyqomooq, $iwywmkygwewiamwm); sieykcqauaygcais: wcioaoeiiawwqqqq: goto ieoiygycmseqmmgc; qaikeckkiwasykwk: $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\x55\122\x4c\40\x69\163\40\156\157\x74\x20\x6d\141\164\x63\150\145\x64\x20\164\x6f\x20\x70\x61\x74\x74\145\x72\156\56", PR__MDL__OPTIMIZATION)); ieoiygycmseqmmgc: wmsiqkyqsiysgcyy: return $ksaameoqigiaoigg; } private function _optimizePattern($sameaqkagyqomooq, $emyowuimauuisimy = '') { $ycikkiiimgoqqgsq = Remote::symcgieuakksimmu(); if (!$ycikkiiimgoqqgsq->qumqowkwyaceeqwu([self::ciywsqoeiymemsys => self::eyemmiwoaayukksq, Remote::eqgewieksoieoqiq => $sameaqkagyqomooq, Remote::esewkmgyoesiksyw => self::qakegsaikiimcmkc])) { goto giuswooyckooaoms; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\101\156\x6f\x74\x68\145\x72\40\x70\x72\x6f\x63\x65\x73\x73\40\x61\154\x72\145\141\x64\x79\40\x73\164\141\162\164\x65\144\56", PR__MDL__OPTIMIZATION), 401); goto uogkcsaewswoaosw; giuswooyckooaoms: if (!(!$emyowuimauuisimy || !is_string($emyowuimauuisimy))) { goto wkqwywgikoyqkyeg; } $iuekmkswcsacoawq = Page::symcgieuakksimmu(); if (!($suaemuyiacqyugsm = $iuekmkswcsacoawq->akkkoiiymmamsauc($sameaqkagyqomooq, $iuekmkswcsacoawq::ewyamgkooeqiecwg))) { goto ysggiwiksocomkek; } $emyowuimauuisimy = $iuekmkswcsacoawq->esewqawcwouwyesq($iuekmkswcsacoawq->qogaqkcsogcqiaic($suaemuyiacqyugsm, self::auqoykcmsiauccao)); ysggiwiksocomkek: wkqwywgikoyqkyeg: $sogksuscggsicmac = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\166\x69\162\164\x75\141\154\137\142\x72\157\167\163\x65\x72\137\x61\x64\144\137\x6a\157\x62", [], $sameaqkagyqomooq, $emyowuimauuisimy); if (!($sogksuscggsicmac && !is_wp_error($sogksuscggsicmac))) { goto wqieuwguumokgyqg; } $ycikkiiimgoqqgsq->gscuuyuyauokoyuo([self::uiwqcumqkgikqyue => $sogksuscggsicmac, self::ciywsqoeiymemsys => self::eyemmiwoaayukksq, Remote::oayciggqokqmayuy => $this->wkagassgcaqeosio()->mqaysguwaikckgey($sameaqkagyqomooq), Remote::eksgkcqkmumuceii => self::meksegaoamowuwoq, Remote::eqgewieksoieoqiq => $sameaqkagyqomooq, Remote::esewkmgyoesiksyw => self::qakegsaikiimcmkc]); wqieuwguumokgyqg: if (is_wp_error($sogksuscggsicmac)) { goto qswqmgiwiyyqwioa; } $sogksuscggsicmac = ["\160\141\x67\145\163\x5f\x63\141\143\150\x65\137\163\x74\x61\164\165\163" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\x70\x61\x67\145\163\x5f\x63\x61\143\x68\145", true), "\160\141\164\x74\x65\x72\156\137\x70\162\157\x67\162\145\163\x73\x62\141\162" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\154\x61\164\145\x73\164\137\x72\165\x6e", true)]; goto omekuqkuugyocmoc; qswqmgiwiyyqwioa: $iswcokucwmiosiaq = $this->gcsweumukyckmgik($sogksuscggsicmac); if (!(false !== $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($iswcokucwmiosiaq, "\x63\x75\x72\x6c\40\x65\x72\162\x6f\x72"))) { goto aueiggyawkmkamum; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\103\x61\x6e\40\x6e\x6f\164\x20\143\157\x6e\156\145\x63\164\x20\x74\x6f\x20\163\x65\162\166\145\162\x20\x72\151\x67\150\x74\40\x6e\x6f\x77\54\40\x70\x6c\x65\x61\x73\145\x20\x74\x72\171\x20\x6c\141\x74\145\x72\40\x6f\162\x20\143\x6f\x6e\x74\141\x63\x74\40\x75\163\x2e", PR__MDL__OPTIMIZATION), 500); aueiggyawkmkamum: omekuqkuugyocmoc: uogkcsaewswoaosw: return $sogksuscggsicmac; } private function _assignMatchedPagesToPattern($eouekqmooogkoqoo, array $mokmmyiueoiqokyc = []) : array { $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); if ($mokmmyiueoiqokyc) { goto miqmoasmioksggkm; } $mokmmyiueoiqokyc = $goqqimcssiyagkwy->wegymsqmyauaoqce($eouekqmooogkoqoo); miqmoasmioksggkm: $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo); $ccosqsyuggiqiuwu = $iuekmkswcsacoawq->cwkywyqksyucoyia([$iuekmkswcsacoawq::ewyamgkooeqiecwg => $sameaqkagyqomooq, self::auqoykcmsiauccao => [self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc, self::ciyoccqkiamemcmm => array_column($mokmmyiueoiqokyc, self::auqoykcmsiauccao), self::sieeooaigsmwocym => true]]); if (!$ccosqsyuggiqiuwu) { goto keewmqmgqegumiwa; } foreach ($ccosqsyuggiqiuwu as $mmoasaykomcwqeus) { $iuekmkswcsacoawq->gccwawquiskkswiu($mmoasaykomcwqeus, $iuekmkswcsacoawq::ewyamgkooeqiecwg); eqemoayymokeqaqi: } cykaikwsaskgeemo: keewmqmgqegumiwa: $awyumwiewiauosqy = []; foreach ($mokmmyiueoiqokyc as $oaeaekwuocwiymuy) { $sogksuscggsicmac = $goqqimcssiyagkwy->igwoeqicuykaamye($sameaqkagyqomooq, $oaeaekwuocwiymuy); if (!(isset($sogksuscggsicmac[self::ckcawaoawwioqecq]) && !$sogksuscggsicmac[self::ckcawaoawwioqecq])) { goto uiqycwuommmmuowy; } $this->oaumimwssciwumys($this->gcsweumukyckmgik($sogksuscggsicmac[self::iwyueouqaqegmcas])); $awyumwiewiauosqy[] = $oaeaekwuocwiymuy; uiqycwuommmmuowy: iqamwyasyoqsugeu: } oqsecqsucukywaee: return $awyumwiewiauosqy; } }
