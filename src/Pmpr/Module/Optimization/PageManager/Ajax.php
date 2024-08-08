<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b4181e072c1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\PageManager\SpeedTest\Setting as SpeedTestSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use WP_Error; class Ajax extends Common { use PageManagerEngineTrait; const swkaqiikoaickuui = "\x6f\160\x74\x69\x6d\x69\x7a\145"; const eueyiwccigugisqe = "\143\x68\145\x63\x6b\x5f\154\151\x6e\153"; const wwgqqgayyagycysu = "\x70\x75\162\147\x65\137\x63\141\143\x68\145"; const aeksqkkekigwssku = self::kgswyesggeyekgmg . "\x73\x65\x74\165\160\137\x70\x61\x74\164\145\162\x6e\x5f\141\x63\x74\x69\157\156"; const quuasuseuccsemsw = self::kgswyesggeyekgmg . "\141\143\x74\x69\x76\145\137\160\x61\164\x74\x65\162\x6e\x5f\141\143\x74\x69\157\x6e"; const qskskgmuqiggaqeg = self::kgswyesggeyekgmg . "\143\x68\145\x63\x6b\137\160\141\164\164\x65\x72\156\137\162\165\x6e\137\141\x63\x74\x69\157\x6e"; const kaqawyqaekuookgi = self::kgswyesggeyekgmg . "\160\141\x67\x65\163\x5f\x63\141\x63\150\145\x5f\163\164\141\164\165\163"; const kusgmosaoigiukgi = self::kgswyesggeyekgmg . "\162\x65\x6f\160\164\x69\155\151\x7a\145\137\160\x61\164\164\x65\162\156\137\x61\143\x74\151\157\156"; const wegmeawoaymsqkyi = self::kgswyesggeyekgmg . "\144\145\141\x63\x74\x69\x76\x61\x74\145\x5f\160\141\164\164\x65\162\156\137\x61\143\x74\151\x6f\x6e"; const maqcykaweqimuomu = self::kgswyesggeyekgmg . "\x63\150\145\143\153\137\x63\141\x6e\144\x69\144\x61\x74\x65\x5f\x75\162\154\137\141\143\164\151\157\156"; const ggmmioeoauiyccec = self::kgswyesggeyekgmg . "\x70\141\147\145\x73\x5f\x63\141\x63\x68\x65\137\x70\x72\157\147\162\x65\x73\x73"; const aikyaygyasegygma = self::kgswyesggeyekgmg . "\x70\x61\x74\x74\x65\x72\156\137\155\x61\156\x75\x61\x6c\x5f\x6f\160\x74\x69\x6d\x69\172\145\137\141\143\164\x69\157\156"; const esiucesqiemeickk = self::kgswyesggeyekgmg . "\x70\x75\162\x67\x65\x5f\x70\x61\164\x74\x65\162\x6e\137\160\x61\x67\145\x73\x5f\143\141\x63\x68\145\x5f\x61\x63\x74\151\157\x6e"; const sggmuowkoiiuacig = self::kgswyesggeyekgmg . "\163\x70\x65\145\x64\x5f\x74\145\x73\x74\x5f\x6e\157\x74\x5f\x64\151\163\160\141\x63\x68\141\142\154\x65\137\146\151\170\x65\x64"; const awqksmkmsquoymem = self::kgswyesggeyekgmg . "\143\x68\141\156\147\x65\137\x70\141\147\x65\x5f\163\164\x61\164\165\163"; const imigmiemwmuayaca = self::kgswyesggeyekgmg . "\143\x68\x61\x6e\147\x65\x5f\x70\141\x67\145\x5f\151\155\x70\157\162\x74\x61\156\x74\137\x73\164\141\164\165\163"; const uyuegiyaymqqkcwa = self::kgswyesggeyekgmg . "\x63\150\x61\156\147\x65\137\160\141\147\145\x5f\x73\160\145\x65\144\x5f\164\145\x73\x74\x5f\143\141\156\144\x69\144\x61\x74\145\x5f\163\x74\x61\164\x75\x73"; const ccyqqagwskwauoem = ["\143\150\141\156\x67\x65\x5f\160\141\x67\145\137\x73\160\145\x65\x64\x5f\x74\145\163\x74\137\x63\141\x6e\144\x69\x64\x61\164\145\137\163\x74\141\164\165\163" => self::uyuegiyaymqqkcwa, "\143\150\141\156\147\145\137\160\141\x67\145\x5f\x69\155\160\157\x72\164\x61\156\x74\137\163\164\141\164\165\x73" => self::imigmiemwmuayaca, "\160\x75\x72\x67\x65\137\x70\x61\x74\x74\x65\x72\x6e\137\x70\x61\147\145\x73\x5f\x63\x61\x63\x68\x65" => self::esiucesqiemeickk, "\x70\141\x74\x74\145\162\x6e\x5f\155\x61\156\x75\141\154\137\157\x70\164\x69\155\151\172\145" => self::aikyaygyasegygma, "\x6e\157\164\x5f\144\151\x73\x70\141\143\150\x61\142\x6c\145\137\146\x69\x78\145\x64" => self::sggmuowkoiiuacig, "\x70\141\x67\145\x73\x5f\x63\x61\143\x68\x65\x5f\x70\162\157\147\162\145\x73\163" => self::ggmmioeoauiyccec, "\143\x68\145\x63\153\137\x63\x61\x6e\x64\151\144\x61\x74\x65\x5f\154\151\156\153" => self::maqcykaweqimuomu, "\143\x68\x61\x6e\147\x65\x5f\160\x61\147\x65\137\163\x74\x61\164\x75\x73" => self::awqksmkmsquoymem, "\160\141\147\145\163\137\x63\x61\x63\150\145\137\x73\164\141\164\x75\163" => self::kaqawyqaekuookgi, "\144\x65\141\143\164\x69\x76\x61\164\145\x5f\160\141\164\164\145\x72\156" => self::wegmeawoaymsqkyi, "\162\145\157\x70\164\x69\155\151\x7a\x65\x5f\160\141\x74\164\145\x72\x6e" => self::kusgmosaoigiukgi, "\x63\150\145\143\153\137\x70\x61\164\x74\145\162\156\137\x72\165\156" => self::qskskgmuqiggaqeg, "\141\x63\164\151\x76\x61\x74\145\x5f\160\x61\x74\x74\x65\162\x6e" => self::quuasuseuccsemsw, "\163\145\x74\x75\x70\137\160\x61\164\164\145\x72\156" => self::aeksqkkekigwssku]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::aeksqkkekigwssku, [$this, "\143\147\x63\x71\x6d\151\x6f\x6b\x73\171\x77\153\145\153\x61\157"])->koaegcswmcqsiykq(self::quuasuseuccsemsw, [$this, "\143\x69\167\x77\x6f\x6f\x77\167\143\163\x63\x73\143\x67\x75\x67"])->koaegcswmcqsiykq(self::qskskgmuqiggaqeg, [$this, "\x75\x77\x6d\x71\141\163\x6b\x63\167\141\155\x69\147\151\155\x65"])->koaegcswmcqsiykq(self::kaqawyqaekuookgi, [$this, "\147\161\x75\x63\171\x71\161\153\147\x73\x71\171\x73\x61\157\x69"])->koaegcswmcqsiykq(self::kusgmosaoigiukgi, [$this, "\x69\x77\x75\141\x71\157\163\155\x71\155\x77\x6d\145\x6f\151\x77"])->koaegcswmcqsiykq(self::wegmeawoaymsqkyi, [$this, "\155\x77\x75\167\171\151\x61\147\145\145\x61\145\157\x79\165\171"])->koaegcswmcqsiykq(self::maqcykaweqimuomu, [$this, "\145\153\141\x6d\147\x65\x71\157\147\157\163\147\147\x65\157\141"])->koaegcswmcqsiykq(self::ggmmioeoauiyccec, [$this, "\x61\141\145\155\143\x73\153\145\x6d\x67\171\x61\157\141\x6f\167"])->koaegcswmcqsiykq(self::aikyaygyasegygma, [$this, "\x71\167\x79\147\143\147\165\171\x67\x75\x63\151\167\x6f\x6b\165"])->koaegcswmcqsiykq(self::esiucesqiemeickk, [$this, "\163\145\x73\141\x71\153\145\x73\141\145\141\x65\x63\x6f\141\x6f"]); $this->koaegcswmcqsiykq(self::sggmuowkoiiuacig, [$this, "\x6d\147\143\145\153\161\x65\x73\x63\x71\x6d\147\x63\x6b\x6d\x79"]); $this->koaegcswmcqsiykq(self::awqksmkmsquoymem, [$this, "\143\x79\x73\155\143\x79\x63\153\165\165\x65\x6f\141\151\x61\x67"], 10, 0)->koaegcswmcqsiykq(self::imigmiemwmuayaca, [$this, "\x67\x63\x69\143\145\x73\167\x67\x69\163\145\x6b\x69\x63\147\x69"], 10, 0)->koaegcswmcqsiykq(self::uyuegiyaymqqkcwa, [$this, "\x6f\153\153\171\163\x65\x79\x65\x79\x67\x61\x73\145\151\x6f\161"], 10, 0); } public function mgcekqescqmgckmy() { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($keccaugmemegoimu)) { goto wasuquysysmqyegg; } $occymigcemkqucuw = true; Setting::symcgieuakksimmu()->qioweyiqewmsocem(SpeedTestSetting::quyascocmiiossme, false, false); $keccaugmemegoimu = __("\x53\160\145\145\x64\x20\124\145\163\x74\40\x66\165\156\x63\164\151\x6f\x6e\x61\x6c\151\164\x79\40\x66\x6f\162\x20\143\x61\x6e\144\x69\x64\141\164\x65\x20\x70\x61\147\x65\x73\x20\162\145\163\165\x6d\x65\144\x2e", PR__MDL__OPTIMIZATION); wasuquysysmqyegg: $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } public function cysmcyckuueoaiag() { $this->ssgwweggiwmeowkw(self::ciywsqoeiymemsys, Page::symcgieuakksimmu()->uqeoyqiwywwmsiew(self::ciywsqoeiymemsys)->gkwkqmwweiawigae(self::eoaiagsgqsmskugs)); } public function gciceswgisekicgi() { $this->ssgwweggiwmeowkw(Page::uyeaawkisqygakmy, [0 => __("\x4e\x6f\162\155\x61\154", PR__MDL__OPTIMIZATION), 1 => __("\x49\155\160\x6f\x72\164\141\156\164", PR__MDL__OPTIMIZATION)]); } public function okkyseyeygaseioq() { $this->ssgwweggiwmeowkw(Page::aewquksqwqiawiei, [0 => __("\x44\157\x6e\x74\40\124\x61\153\x65\40\x53\x70\145\x65\144\40\124\x65\x73\164", PR__MDL__OPTIMIZATION), 1 => __("\x54\141\x6b\x65\40\123\x70\x65\145\144\x20\x54\145\x73\164", PR__MDL__OPTIMIZATION)]); } public function ssgwweggiwmeowkw($qgoqiacsiccwoawi = self::ciywsqoeiymemsys, $oqseeekuqisekiwy = []) { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($keccaugmemegoimu)) { goto isaacywgkascmcsw; } $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $qkcoyiyeuoyyoocy = $eiicaiwgqkgsekce->yyqgamuwwakgciey(self::imywcsggckkcywgk); $iueymcwwscwqkiyq = $eiicaiwgqkgsekce->yyqgamuwwakgciey(self::ciywsqoeiymemsys); if ($qkcoyiyeuoyyoocy && $iueymcwwscwqkiyq) { goto oyeygeykqwcqoeic; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(); goto eomcuogskessyicy; oyeygeykqwcqoeic: $iuekmkswcsacoawq = Page::symcgieuakksimmu(); if (isset($oqseeekuqisekiwy[$iueymcwwscwqkiyq])) { goto ogciikaecauiwgyk; } $keccaugmemegoimu = __("\x59\157\x75\x72\40\163\x75\x62\155\x69\163\163\x69\157\x6e\40\x73\164\x61\x74\x75\163\40\151\163\x20\x6e\157\164\x20\141\x20\166\x61\154\151\x64\x20\x73\x74\141\164\165\x73\56", PR__MDL__OPTIMIZATION); goto meiqywmwuoogckss; ogciikaecauiwgyk: $sogksuscggsicmac = $iuekmkswcsacoawq->wqikesawekycweoi($qkcoyiyeuoyyoocy, [$qgoqiacsiccwoawi => $iueymcwwscwqkiyq]); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto eqsuaywswuesuika; } $keccaugmemegoimu = $sogksuscggsicmac[self::iwyueouqaqegmcas]; goto okawiaowosqickgq; eqsuaywswuesuika: $occymigcemkqucuw = true; $keccaugmemegoimu = sprintf(__("\120\141\x67\x65\40\x73\x74\x61\164\165\x73\40\x63\x68\141\156\x67\x65\144\40\164\157\40\45\163\40\x73\165\143\x63\x65\x73\163\146\165\154\154\x79\x2e", PR__MDL__OPTIMIZATION), $oqseeekuqisekiwy[$iueymcwwscwqkiyq]); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\160\165\x72\x67\x65\137\145\x6c\x65\143\164\x65\x64\137\x70\141\x67\x65\x5f\150\164\x6d\x6c\137\143\x61\x63\150\x65", $qkcoyiyeuoyyoocy); okawiaowosqickgq: meiqywmwuoogckss: eomcuogskessyicy: isaacywgkascmcsw: $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } public function qwygcguyguciwoku() { $this->cgywqskcmcgkwueu(self::aikyaygyasegygma); } public function gqucyqqkgsqysaoi() { $this->cgywqskcmcgkwueu(self::kaqawyqaekuookgi); } public function aaemcskemgyaoaow() { $this->cgywqskcmcgkwueu(self::ggmmioeoauiyccec); } public function uwmqaskcwamigime() { $this->cgywqskcmcgkwueu(self::qskskgmuqiggaqeg); } public function iwuaqosmqmwmeoiw() { $this->cgywqskcmcgkwueu(self::ccoesaeoiusskiew); } public function cgcqmioksywkekao() { $this->cgywqskcmcgkwueu(self::gqgwsyegwkicuomu); } public function ciwwoowwcscscgug() { $this->cgywqskcmcgkwueu(self::kueyauseicqqwesu); } public function mwuwyiageeaeoyuy() { $this->cgywqskcmcgkwueu(self::yewqymwwigegyeuk); } public function ekamgeqogosggeoa() { $this->cgywqskcmcgkwueu(self::eueyiwccigugisqe); } public function sesaqkesaeaecoao() { $this->cgywqskcmcgkwueu(self::wwgqqgayyagycysu); } private function cgywqskcmcgkwueu($aiamqeawckcsuaou) { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($keccaugmemegoimu)) { goto yagscaikmmuagqcu; } $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(self::qakegsaikiimcmkc, 0, true); if ($eouekqmooogkoqoo = $jwkieqegmyuwayce->akkkoiiymmamsauc($sameaqkagyqomooq)) { goto ikuwigsmisimaqoc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\120\x61\164\x74\145\162\156\40\116\x6f\x74\40\x46\157\x75\156\144", PR__MDL__OPTIMIZATION)); goto sigukociqouigous; ikuwigsmisimaqoc: switch ($aiamqeawckcsuaou) { case self::aikyaygyasegygma: if ($goqqimcssiyagkwy->iwoekuysekysqmke()) { goto eiegguecasykwmyq; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\120\141\x74\x74\145\162\x6e\x20\x6d\141\x6e\x75\141\154\x20\157\x70\x74\x69\155\x69\x7a\145\x20\156\x6f\x74\40\x61\166\141\x69\154\x61\x62\x6c\x65\40\162\x69\147\x68\164\x20\156\157\167\x21", PR__MDL__OPTIMIZATION)); goto qiiqceousoicgeee; eiegguecasykwmyq: $smgooosyoeqwcaeg = $eiicaiwgqkgsekce->yyqgamuwwakgciey(self::qmwqkaeamecekiso); if ($smgooosyoeqwcaeg) { goto ogwwasqkaageiwwi; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(__("\x4a\123\117\x4e", PR__MDL__OPTIMIZATION)); goto sosqgaswegsomgkw; ogwwasqkaageiwwi: $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\166\x69\162\x74\165\x61\154\137\x62\x72\157\167\x73\145\162\137\x63\141\x63\150\145\137\162\145\163\165\x6c\x74", $sameaqkagyqomooq, wp_unslash($smgooosyoeqwcaeg)); $keccaugmemegoimu = __("\x50\x61\164\164\145\162\156\x20\144\141\x74\141\x20\x63\141\143\x68\145\x64\40\x73\165\143\x63\145\163\x73\146\x75\154\154\x79\x2e", PR__MDL__OPTIMIZATION); sosqgaswegsomgkw: qiiqceousoicgeee: goto quiguyyimiqeqcwa; case self::ggmmioeoauiyccec: $keccaugmemegoimu = ["\160\x72\157\x67\x72\145\x73\163" => $goqqimcssiyagkwy->emygimuicqcskaam($sameaqkagyqomooq), self::ciywsqoeiymemsys => $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq, false)]; goto quiguyyimiqeqcwa; case self::kaqawyqaekuookgi: $keccaugmemegoimu = $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq); goto quiguyyimiqeqcwa; case self::qskskgmuqiggaqeg: if ($scwwcyaqyywsweoq = $goqqimcssiyagkwy->iwuigwiooogcgwwu($sameaqkagyqomooq)) { goto uowiiyqmiaaaaoas; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\124\150\x65\162\x65\40\151\x73\40\156\157\x20\162\x65\155\157\x74\x65\x20\162\x75\x6e\x20\146\x6f\x72\40\x70\141\164\x74\x65\162\x6e\56", PR__MDL__OPTIMIZATION)); goto vokekoceocuskqsm; uowiiyqmiaaaaoas: $iueymcwwscwqkiyq = Remote::symcgieuakksimmu()->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $scwwcyaqyywsweoq); if (!($iueymcwwscwqkiyq === self::eyemmiwoaayukksq)) { goto oeogyayooiwqcmia; } $sogksuscggsicmac = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\166\151\162\164\x75\x61\x6c\x5f\x62\x72\x6f\x77\163\x65\162\x5f\143\x68\145\x63\x6b\137\146\x69\x6e\151\163\x68\x65\144", $sameaqkagyqomooq); if (!($sogksuscggsicmac !== $sameaqkagyqomooq)) { goto qoiyiuoyamwimusy; } if (is_wp_error($sogksuscggsicmac)) { goto maeueeueqoywkiom; } if (!$sogksuscggsicmac) { goto iaywwgssaoecwmeg; } $iueymcwwscwqkiyq = self::amcogigwsaqssuai; iaywwgssaoecwmeg: goto jyekikocgagcgywq; maeueeueqoywkiom: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; jyekikocgagcgywq: qoiyiuoyamwimusy: oeogyayooiwqcmia: $keccaugmemegoimu = [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, "\154\x61\164\x65\x73\164\x5f\x72\165\x6e" => $iueymcwwscwqkiyq !== self::eyemmiwoaayukksq ? $goqqimcssiyagkwy->voqagyawicswcaau($sameaqkagyqomooq, "\x6c\x61\164\x65\163\164\x5f\x72\165\156", true) : '', "\160\141\x67\145\163\x5f\143\x61\143\150\145" => $iueymcwwscwqkiyq !== self::eyemmiwoaayukksq ? $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq) : '']; vokekoceocuskqsm: goto quiguyyimiqeqcwa; case self::gqgwsyegwkicuomu: $keccaugmemegoimu = $this->_setupPattern($eouekqmooogkoqoo); goto quiguyyimiqeqcwa; case self::ccoesaeoiusskiew: if (!$goqqimcssiyagkwy->gqwuqkumkkkygwuw($sameaqkagyqomooq)) { goto sckyiekoceuisqyq; } $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); if (is_wp_error($keccaugmemegoimu)) { goto ooykyoowougqkaso; } $keccaugmemegoimu = $this->_optimizePattern($sameaqkagyqomooq, $keccaugmemegoimu); ooykyoowougqkaso: sckyiekoceuisqyq: goto quiguyyimiqeqcwa; case self::kueyauseicqqwesu: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, self::eqewsqmqmsiocaeg); if (is_wp_error($keccaugmemegoimu)) { goto kusuakkwcuqkcqaw; } $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo); kusuakkwcuqkcqaw: goto quiguyyimiqeqcwa; case self::yewqymwwigegyeuk: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, self::uucoeqmmykkwsmqc); goto quiguyyimiqeqcwa; case self::wwgqqgayyagycysu: if ($goqqimcssiyagkwy->sesaqkesaeaecoao($eouekqmooogkoqoo)) { goto sikckcmeiwmyakeu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\x6d\145\164\x68\x69\x6e\x67\x20\x77\x72\157\156\x67\x20\x6f\x6e\x20\160\x75\162\x67\151\156\x67\40\160\x61\x67\145\163\x20\x63\141\143\x68\x65\56", PR__MDL__OPTIMIZATION)); goto qaycycmeqkqcumog; sikckcmeiwmyakeu: $keccaugmemegoimu = __("\x50\141\x67\x65\x73\40\x63\x61\143\150\x65\40\x70\165\162\x67\x65\144\x20\163\165\143\143\145\163\163\x66\x75\154\154\171\56", PR__MDL__OPTIMIZATION); qaycycmeqkqcumog: goto quiguyyimiqeqcwa; case self::eueyiwccigugisqe: $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); goto quiguyyimiqeqcwa; } iicaisyekagswmey: quiguyyimiqeqcwa: sigukociqouigous: $occymigcemkqucuw = !is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu; yagscaikmmuagqcu: $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } private function _checkLink($eouekqmooogkoqoo, array $ocqawgquwsqioses = []) { if ($ocqawgquwsqioses) { goto iyawqekeeawqkymm; } $ocqawgquwsqioses = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); iyawqekeeawqkymm: $ksaameoqigiaoigg = ''; if (!($iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(self::ogigqueukwysusii, '', true))) { goto qaqooueskgciuqgc; } $iwywmkygwewiamwm = trailingslashit($iwywmkygwewiamwm); if (isset($ocqawgquwsqioses[$iwywmkygwewiamwm])) { goto iumgcesksuawyuyo; } $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\x55\122\x4c\x20\151\163\40\x6e\157\x74\40\x6d\141\x74\143\150\x65\x64\x20\x74\157\40\160\x61\164\x74\145\162\x6e\x2e", PR__MDL__OPTIMIZATION)); goto qwosyqcomiosguoa; iumgcesksuawyuyo: $ksaameoqigiaoigg = $iwywmkygwewiamwm; qwosyqcomiosguoa: qaqooueskgciuqgc: return $ksaameoqigiaoigg; } private function _setupPattern($eouekqmooogkoqoo) { $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); if (!$jwkieqegmyuwayce->wuwcyeequuwaeias($eouekqmooogkoqoo)) { goto qsaoyggkqwcgskwk; } $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\120\x61\x74\164\x65\162\x6e\40\141\154\x72\x65\x61\144\171\40\163\145\164\165\x70\x65\144\56", PR__MDL__OPTIMIZATION)); goto myooisakyuggoggc; qsaoyggkqwcgskwk: $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(self::ogigqueukwysusii, '', true); $mokmmyiueoiqokyc = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); if ($iwywmkygwewiamwm && is_wp_error($this->_checkLink($eouekqmooogkoqoo, $mokmmyiueoiqokyc))) { goto oiywguooqeasueqq; } $awyumwiewiauosqy = $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo, $mokmmyiueoiqokyc); if (empty($awyumwiewiauosqy)) { goto oqckuigyqswmqcqg; } $ueeagokqmgisgauy = ''; foreach ($awyumwiewiauosqy as $igqsaukqcqscimok) { if (!(isset($igqsaukqcqscimok[self::iwyueouqaqegmcas]) && $igqsaukqcqscimok[self::iwyueouqaqegmcas])) { goto ioiwoukauoeamuca; } $ueeagokqmgisgauy .= "\74\x62\162\x3e{$this->gcsweumukyckmgik($igqsaukqcqscimok[self::iwyueouqaqegmcas])}"; ioiwoukauoeamuca: cceggewquoaemcwq: } iuwccksomkkouogy: $ksaameoqigiaoigg = $this->oemauiimmycumcsk(sprintf(__("\x53\x6f\x6d\145\x20\160\x61\x67\145\x20\x6e\x6f\x74\x20\141\x64\x64\56\x20\x25\x73", PR__MDL__OPTIMIZATION), $ueeagokqmgisgauy)); goto owismwmeqcmukagu; oqckuigyqswmqcqg: if ($this->wkagassgcaqeosio()->gqwuqkumkkkygwuw($jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo))) { goto aqwoykqaquewcaki; } $ksaameoqigiaoigg = $this->wkagassgcaqeosio()->cmgakiqmkkiokgmk($eouekqmooogkoqoo, self::eqewsqmqmsiocaeg); goto mesesokuoomcioom; aqwoykqaquewcaki: if ($iwywmkygwewiamwm) { goto omyquyiguuaociwq; } $iwywmkygwewiamwm = array_key_first($mokmmyiueoiqokyc); omyquyiguuaociwq: $sameaqkagyqomooq = $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo); $ksaameoqigiaoigg = $this->_optimizePattern($sameaqkagyqomooq, $iwywmkygwewiamwm); mesesokuoomcioom: owismwmeqcmukagu: goto equwcsciiggsuiam; oiywguooqeasueqq: $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\125\x52\x4c\x20\151\x73\40\x6e\x6f\x74\x20\x6d\141\164\143\x68\145\144\40\x74\x6f\x20\x70\x61\164\164\145\x72\x6e\56", PR__MDL__OPTIMIZATION)); equwcsciiggsuiam: myooisakyuggoggc: return $ksaameoqigiaoigg; } private function _optimizePattern($sameaqkagyqomooq, $emyowuimauuisimy = '') { $ycikkiiimgoqqgsq = Remote::symcgieuakksimmu(); if (!$ycikkiiimgoqqgsq->qumqowkwyaceeqwu([self::ciywsqoeiymemsys => self::eyemmiwoaayukksq, Remote::eqgewieksoieoqiq => $sameaqkagyqomooq, Remote::esewkmgyoesiksyw => self::qakegsaikiimcmkc])) { goto eiicmcasqikiyasw; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\101\156\157\164\150\x65\162\x20\160\162\x6f\143\145\x73\163\40\141\x6c\x72\x65\x61\x64\171\40\163\x74\x61\x72\x74\145\x64\x2e", PR__MDL__OPTIMIZATION), 401); goto ayucsuwsiocgycww; eiicmcasqikiyasw: if (!(!$emyowuimauuisimy || !is_string($emyowuimauuisimy))) { goto yugmwomumkosucsc; } $iuekmkswcsacoawq = Page::symcgieuakksimmu(); if (!($suaemuyiacqyugsm = $iuekmkswcsacoawq->oqomcmyuuakigusk([$iuekmkswcsacoawq::ewyamgkooeqiecwg => $sameaqkagyqomooq, $iuekmkswcsacoawq::ciywsqoeiymemsys => self::eqewsqmqmsiocaeg]))) { goto awkqcyusycccekwq; } $emyowuimauuisimy = $iuekmkswcsacoawq->esewqawcwouwyesq($iuekmkswcsacoawq->qogaqkcsogcqiaic($suaemuyiacqyugsm, self::auqoykcmsiauccao)); awkqcyusycccekwq: yugmwomumkosucsc: $sogksuscggsicmac = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\166\151\x72\x74\165\x61\154\x5f\142\x72\157\x77\163\x65\x72\x5f\x61\144\x64\x5f\152\157\142", [], $sameaqkagyqomooq, $emyowuimauuisimy); if (!($sogksuscggsicmac && !is_wp_error($sogksuscggsicmac))) { goto kqwyogqqwumumiwg; } $ycikkiiimgoqqgsq->gscuuyuyauokoyuo([self::uiwqcumqkgikqyue => $sogksuscggsicmac, self::ciywsqoeiymemsys => self::eyemmiwoaayukksq, Remote::oayciggqokqmayuy => $this->wkagassgcaqeosio()->mqaysguwaikckgey($sameaqkagyqomooq), Remote::eksgkcqkmumuceii => self::meksegaoamowuwoq, Remote::eqgewieksoieoqiq => $sameaqkagyqomooq, Remote::esewkmgyoesiksyw => self::qakegsaikiimcmkc]); kqwyogqqwumumiwg: if (is_wp_error($sogksuscggsicmac)) { goto aqksouwmeckaqyaq; } $sogksuscggsicmac = ["\x70\x61\x67\x65\x73\x5f\143\141\143\150\145\x5f\163\x74\141\x74\x75\163" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\160\141\x67\x65\x73\x5f\143\141\143\150\x65", true), "\x70\x61\x74\164\145\162\156\x5f\160\x72\157\x67\162\x65\x73\163\x62\x61\162" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\x6c\x61\x74\145\163\x74\x5f\162\x75\156", true)]; goto gmsyoscesymiwwue; aqksouwmeckaqyaq: $iswcokucwmiosiaq = $this->gcsweumukyckmgik($sogksuscggsicmac); if (!(false !== $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($iswcokucwmiosiaq, "\x63\165\162\x6c\x20\145\x72\x72\x6f\162"))) { goto ykogqmmywykgouqy; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x43\141\x6e\40\156\x6f\164\x20\x63\x6f\x6e\x6e\x65\x63\164\40\x74\x6f\40\x73\145\162\x76\x65\162\40\x72\151\147\x68\x74\x20\156\157\167\54\x20\160\x6c\x65\x61\163\145\40\x74\162\171\x20\154\x61\164\x65\x72\x20\157\162\x20\143\157\156\164\141\x63\164\x20\x75\x73\x2e", PR__MDL__OPTIMIZATION), 500); ykogqmmywykgouqy: gmsyoscesymiwwue: ayucsuwsiocgycww: return $sogksuscggsicmac; } private function _assignMatchedPagesToPattern($eouekqmooogkoqoo, array $mokmmyiueoiqokyc = []) : array { return $this->wkagassgcaqeosio()->iwuykycuaameiqes($eouekqmooogkoqoo, $mokmmyiueoiqokyc); } }
