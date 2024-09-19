<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec0900f0e3e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\PageManager\SpeedTest\Setting as SpeedTestSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use WP_Error; class Ajax extends Common { use PageManagerEngineTrait; const swkaqiikoaickuui = "\157\160\x74\151\x6d\151\172\145"; const eueyiwccigugisqe = "\x63\150\x65\143\153\x5f\x6c\x69\156\153"; const wwgqqgayyagycysu = "\160\165\162\147\145\x5f\x63\x61\x63\150\x65"; const aeksqkkekigwssku = Optimization::kgswyesggeyekgmg . "\163\145\164\165\x70\x5f\160\x61\x74\x74\145\162\x6e\x5f\141\x63\x74\151\157\x6e"; const quuasuseuccsemsw = Optimization::kgswyesggeyekgmg . "\141\143\164\x69\166\x65\137\160\141\164\164\145\x72\156\x5f\x61\x63\x74\x69\x6f\156"; const qskskgmuqiggaqeg = Optimization::kgswyesggeyekgmg . "\x63\150\x65\x63\x6b\137\160\x61\x74\164\x65\162\156\x5f\x72\x75\x6e\137\141\x63\164\151\157\x6e"; const kaqawyqaekuookgi = Optimization::kgswyesggeyekgmg . "\160\x61\x67\145\x73\x5f\x63\x61\x63\x68\x65\137\163\x74\x61\164\165\163"; const kusgmosaoigiukgi = Optimization::kgswyesggeyekgmg . "\x72\145\157\160\x74\151\155\151\x7a\x65\137\x70\141\x74\x74\145\162\x6e\137\x61\x63\x74\151\157\x6e"; const wegmeawoaymsqkyi = Optimization::kgswyesggeyekgmg . "\144\x65\x61\x63\164\x69\166\x61\164\x65\x5f\x70\141\164\164\145\x72\156\x5f\x61\143\x74\x69\157\x6e"; const maqcykaweqimuomu = Optimization::kgswyesggeyekgmg . "\143\150\x65\x63\x6b\137\x63\141\x6e\144\151\144\141\164\x65\x5f\x75\162\154\137\x61\143\x74\x69\x6f\x6e"; const ggmmioeoauiyccec = Optimization::kgswyesggeyekgmg . "\160\141\147\x65\x73\137\143\141\x63\150\x65\x5f\160\162\157\x67\x72\145\x73\x73"; const aikyaygyasegygma = Optimization::kgswyesggeyekgmg . "\160\x61\164\x74\145\162\x6e\137\x6d\141\156\x75\x61\154\137\x6f\160\x74\151\155\x69\x7a\x65\x5f\141\x63\164\151\157\x6e"; const esiucesqiemeickk = Optimization::kgswyesggeyekgmg . "\160\x75\162\147\x65\137\160\x61\164\164\x65\x72\x6e\x5f\160\x61\x67\x65\x73\x5f\x63\141\x63\x68\x65\137\141\x63\x74\x69\x6f\156"; const sggmuowkoiiuacig = Optimization::kgswyesggeyekgmg . "\x73\x70\145\145\x64\x5f\164\145\x73\164\x5f\x6e\x6f\x74\137\144\x69\x73\160\x61\x63\x68\x61\142\154\145\137\146\x69\x78\145\144"; const awqksmkmsquoymem = Optimization::kgswyesggeyekgmg . "\x63\150\141\x6e\x67\145\x5f\x70\141\x67\145\137\x73\164\141\164\x75\163"; const imigmiemwmuayaca = Optimization::kgswyesggeyekgmg . "\143\x68\x61\156\x67\145\137\x70\x61\147\x65\137\x69\x6d\x70\157\162\x74\x61\x6e\x74\137\163\x74\x61\x74\165\x73"; const uyuegiyaymqqkcwa = Optimization::kgswyesggeyekgmg . "\143\150\141\156\147\x65\137\x70\141\x67\x65\137\163\160\145\145\x64\137\x74\x65\163\x74\137\x63\x61\x6e\144\x69\144\141\164\x65\137\x73\164\x61\164\x75\163"; const ccyqqagwskwauoem = ["\143\x68\141\x6e\147\x65\x5f\160\141\x67\x65\137\163\160\x65\x65\x64\x5f\x74\145\163\x74\x5f\x63\141\156\x64\151\x64\x61\x74\145\x5f\163\x74\x61\164\165\x73" => self::uyuegiyaymqqkcwa, "\143\x68\x61\x6e\147\x65\137\x70\x61\x67\145\x5f\151\x6d\160\157\x72\164\141\x6e\x74\137\163\164\141\164\x75\163" => self::imigmiemwmuayaca, "\x70\x75\162\147\x65\137\x70\x61\164\x74\145\x72\x6e\x5f\160\141\x67\145\163\137\143\x61\143\x68\145" => self::esiucesqiemeickk, "\x70\x61\x74\x74\145\162\x6e\137\x6d\x61\156\x75\x61\x6c\x5f\157\160\x74\151\x6d\151\x7a\x65" => self::aikyaygyasegygma, "\x6e\157\164\x5f\144\151\163\160\141\x63\150\141\x62\154\145\137\146\151\x78\145\144" => self::sggmuowkoiiuacig, "\160\141\147\x65\x73\x5f\x63\141\x63\150\x65\137\160\x72\157\147\162\x65\x73\163" => self::ggmmioeoauiyccec, "\x63\x68\x65\x63\153\x5f\143\x61\156\144\151\x64\x61\x74\145\137\x6c\x69\x6e\153" => self::maqcykaweqimuomu, "\143\150\x61\x6e\x67\145\137\160\141\x67\x65\137\163\x74\141\x74\165\x73" => self::awqksmkmsquoymem, "\160\141\147\145\163\x5f\143\141\x63\x68\145\x5f\163\164\141\164\165\x73" => self::kaqawyqaekuookgi, "\144\x65\x61\143\x74\151\166\x61\x74\145\137\160\x61\164\164\x65\x72\156" => self::wegmeawoaymsqkyi, "\x72\x65\x6f\x70\164\x69\x6d\151\x7a\145\x5f\160\141\164\164\x65\162\156" => self::kusgmosaoigiukgi, "\x63\x68\x65\x63\x6b\x5f\x70\141\x74\x74\x65\162\156\x5f\162\x75\156" => self::qskskgmuqiggaqeg, "\141\x63\x74\151\166\141\x74\x65\x5f\160\141\x74\x74\x65\x72\x6e" => self::quuasuseuccsemsw, "\163\145\x74\x75\x70\x5f\160\141\164\x74\145\162\x6e" => self::aeksqkkekigwssku]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::aeksqkkekigwssku, [$this, "\x63\147\143\161\155\x69\x6f\153\163\171\167\x6b\145\153\141\157"])->koaegcswmcqsiykq(self::quuasuseuccsemsw, [$this, "\x63\151\167\167\x6f\157\x77\x77\x63\x73\143\163\x63\147\165\x67"])->koaegcswmcqsiykq(self::qskskgmuqiggaqeg, [$this, "\x75\167\155\x71\x61\x73\x6b\x63\x77\x61\x6d\151\x67\151\155\x65"])->koaegcswmcqsiykq(self::kaqawyqaekuookgi, [$this, "\x67\x71\x75\x63\171\x71\161\x6b\x67\163\161\171\x73\141\157\151"])->koaegcswmcqsiykq(self::kusgmosaoigiukgi, [$this, "\151\167\165\141\x71\x6f\163\155\x71\x6d\167\x6d\145\157\151\x77"])->koaegcswmcqsiykq(self::wegmeawoaymsqkyi, [$this, "\155\x77\x75\167\x79\x69\x61\x67\145\145\x61\145\157\x79\165\x79"])->koaegcswmcqsiykq(self::maqcykaweqimuomu, [$this, "\145\153\x61\x6d\x67\x65\x71\157\147\157\x73\x67\x67\145\157\141"])->koaegcswmcqsiykq(self::ggmmioeoauiyccec, [$this, "\141\x61\x65\x6d\143\163\153\x65\x6d\147\x79\x61\x6f\141\x6f\x77"])->koaegcswmcqsiykq(self::aikyaygyasegygma, [$this, "\x71\x77\171\147\143\x67\165\x79\147\x75\x63\151\x77\x6f\153\165"])->koaegcswmcqsiykq(self::esiucesqiemeickk, [$this, "\x73\x65\163\x61\161\x6b\x65\x73\141\145\x61\145\x63\x6f\x61\x6f"]); $this->koaegcswmcqsiykq(self::sggmuowkoiiuacig, [$this, "\x6d\x67\143\x65\x6b\x71\x65\163\143\161\155\147\143\153\155\x79"]); $this->koaegcswmcqsiykq(self::awqksmkmsquoymem, [$this, "\143\171\163\155\143\171\143\x6b\x75\165\x65\157\x61\151\x61\147"], 10, 0)->koaegcswmcqsiykq(self::imigmiemwmuayaca, [$this, "\x67\143\x69\x63\x65\163\167\147\151\x73\145\x6b\151\x63\147\151"], 10, 0)->koaegcswmcqsiykq(self::uyuegiyaymqqkcwa, [$this, "\157\x6b\x6b\x79\x73\x65\x79\145\171\x67\141\x73\x65\x69\157\161"], 10, 0); } public function mgcekqescqmgckmy() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto uimeeckqksqeekqq; } $keccaugmemegoimu = __("\131\157\x75\x20\x68\x61\166\145\x20\156\157\40\x70\145\x72\x6d\x69\163\x73\x69\157\x6e\x20\164\x6f\x20\144\x6f\40\164\x68\151\163\56", PR__MDL__OPTIMIZATION); goto iuuuususuuuaieem; uimeeckqksqeekqq: $occymigcemkqucuw = true; Setting::symcgieuakksimmu()->qioweyiqewmsocem(SpeedTestSetting::quyascocmiiossme, false, false); $keccaugmemegoimu = __("\x53\160\145\x65\x64\40\124\x65\163\164\40\x66\165\x6e\143\x74\151\x6f\156\141\154\x69\164\x79\x20\x66\x6f\162\40\x63\x61\x6e\144\151\x64\x61\x74\145\x20\160\x61\x67\145\x73\40\x72\145\x73\x75\x6d\x65\x64\x2e", PR__MDL__OPTIMIZATION); iuuuususuuuaieem: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function cysmcyckuueoaiag() { $this->ssgwweggiwmeowkw(Constants::ciywsqoeiymemsys, Page::symcgieuakksimmu()->uqeoyqiwywwmsiew(Constants::ciywsqoeiymemsys)->gkwkqmwweiawigae(Constants::eoaiagsgqsmskugs)); } public function gciceswgisekicgi() { $this->ssgwweggiwmeowkw(Page::uyeaawkisqygakmy, [0 => __("\x4e\157\x72\155\x61\x6c", PR__MDL__OPTIMIZATION), 1 => __("\x49\155\x70\x6f\162\x74\141\156\x74", PR__MDL__OPTIMIZATION)]); } public function okkyseyeygaseioq() { $this->ssgwweggiwmeowkw(Page::aewquksqwqiawiei, [0 => __("\x44\x6f\x6e\164\40\124\141\x6b\145\40\123\160\x65\x65\144\x20\124\x65\163\x74", PR__MDL__OPTIMIZATION), 1 => __("\x54\141\x6b\x65\40\x53\160\145\x65\144\40\x54\145\163\x74", PR__MDL__OPTIMIZATION)]); } public function ssgwweggiwmeowkw($qgoqiacsiccwoawi = Constants::ciywsqoeiymemsys, $oqseeekuqisekiwy = []) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto gamqcwuwkikwqoay; } $keccaugmemegoimu = __("\x59\x6f\165\x20\150\x61\166\145\x20\x6e\x6f\x20\160\x65\162\x6d\151\x73\163\x69\x6f\x6e\40\164\157\x20\144\x6f\40\x74\150\x69\163\56", PR__MDL__OPTIMIZATION); goto mscyggqcesgqqksu; gamqcwuwkikwqoay: $qkcoyiyeuoyyoocy = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::imywcsggckkcywgk); if ($qkcoyiyeuoyyoocy) { goto yiowgigkkwsoqcci; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); goto ieqesiiageaauiuw; yiowgigkkwsoqcci: $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $iueymcwwscwqkiyq = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::ciywsqoeiymemsys, 0); if (isset($oqseeekuqisekiwy[$iueymcwwscwqkiyq])) { goto qukocuwgakemmyga; } $keccaugmemegoimu = __("\x59\x6f\165\162\x20\163\x75\142\155\151\163\163\x69\x6f\x6e\x20\163\164\x61\x74\x75\163\40\151\x73\x20\x6e\x6f\x74\x20\x61\40\x76\141\154\x69\x64\x20\163\164\x61\x74\165\x73\x2e", PR__MDL__OPTIMIZATION); goto sioekkmekwygemyc; qukocuwgakemmyga: $sogksuscggsicmac = $iuekmkswcsacoawq->wqikesawekycweoi($qkcoyiyeuoyyoocy, [$qgoqiacsiccwoawi => $iueymcwwscwqkiyq]); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto kocqqoyymosmuksu; } $keccaugmemegoimu = $sogksuscggsicmac[Constants::iwyueouqaqegmcas]; goto uqokiksoqcwwqgio; kocqqoyymosmuksu: $occymigcemkqucuw = true; $keccaugmemegoimu = sprintf(__("\120\141\x67\x65\40\163\164\141\164\165\x73\40\x63\150\141\x6e\x67\x65\144\40\164\x6f\x20\x25\163\40\x73\x75\x63\143\x65\163\163\146\165\x6c\x6c\x79\x2e", PR__MDL__OPTIMIZATION), $oqseeekuqisekiwy[$iueymcwwscwqkiyq]); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\160\x75\162\147\145\137\x65\154\145\143\164\145\x64\137\x70\141\x67\145\137\150\x74\x6d\x6c\137\143\x61\x63\x68\x65", $qkcoyiyeuoyyoocy); uqokiksoqcwwqgio: sioekkmekwygemyc: ieqesiiageaauiuw: mscyggqcesgqqksu: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function qwygcguyguciwoku() { $this->cgywqskcmcgkwueu(self::aikyaygyasegygma); } public function gqucyqqkgsqysaoi() { $this->cgywqskcmcgkwueu(self::kaqawyqaekuookgi); } public function aaemcskemgyaoaow() { $this->cgywqskcmcgkwueu(self::ggmmioeoauiyccec); } public function uwmqaskcwamigime() { $this->cgywqskcmcgkwueu(self::qskskgmuqiggaqeg); } public function iwuaqosmqmwmeoiw() { $this->cgywqskcmcgkwueu(Pattern::ccoesaeoiusskiew); } public function cgcqmioksywkekao() { $this->cgywqskcmcgkwueu(Constants::gqgwsyegwkicuomu); } public function ciwwoowwcscscgug() { $this->cgywqskcmcgkwueu(Constants::kueyauseicqqwesu); } public function mwuwyiageeaeoyuy() { $this->cgywqskcmcgkwueu(Constants::yewqymwwigegyeuk); } public function ekamgeqogosggeoa() { $this->cgywqskcmcgkwueu(self::eueyiwccigugisqe); } public function sesaqkesaeaecoao() { $this->cgywqskcmcgkwueu(self::wwgqqgayyagycysu); } private function cgywqskcmcgkwueu($aiamqeawckcsuaou) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto esikeyqyuikmaiek; } $keccaugmemegoimu = __("\131\157\x75\x20\x68\x61\x76\145\40\156\157\x20\160\x65\x72\x6d\151\x73\163\151\157\x6e\x20\x74\x6f\x20\x64\x6f\40\164\150\x69\163\56", PR__MDL__OPTIMIZATION); goto okkmcocqokkskasy; esikeyqyuikmaiek: $keccaugmemegoimu = false; $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::qakegsaikiimcmkc, 0, true); if ($eouekqmooogkoqoo = $jwkieqegmyuwayce->akkkoiiymmamsauc($sameaqkagyqomooq)) { goto emqswoaawgeyosmi; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\120\141\164\x74\x65\162\156\x20\x4e\157\x74\x20\x46\x6f\165\x6e\x64", PR__MDL__OPTIMIZATION)); goto iwsmmkqaoksmocok; emqswoaawgeyosmi: switch ($aiamqeawckcsuaou) { case self::aikyaygyasegygma: $smgooosyoeqwcaeg = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::qmwqkaeamecekiso); if ($smgooosyoeqwcaeg) { goto wsesqmcqoiyyqkqi; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__("\x4a\123\117\x4e", PR__MDL__OPTIMIZATION)); goto mogkoocsoeuyoqqa; wsesqmcqoiyyqkqi: $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\166\x69\x72\164\x75\141\154\137\x62\x72\157\x77\x73\145\x72\x5f\x63\x61\143\150\x65\x5f\162\x65\163\165\154\164", $sameaqkagyqomooq, wp_unslash($smgooosyoeqwcaeg)); $keccaugmemegoimu = __("\120\141\x74\x74\145\x72\x6e\x20\x64\x61\164\x61\40\x63\141\143\x68\145\144\40\x73\x75\143\x63\145\x73\163\x66\x75\154\154\x79\56", PR__MDL__OPTIMIZATION); mogkoocsoeuyoqqa: goto oyeyomcgkmgymogq; case self::ggmmioeoauiyccec: $keccaugmemegoimu = ["\160\x72\x6f\x67\162\145\x73\x73" => $goqqimcssiyagkwy->emygimuicqcskaam($sameaqkagyqomooq), Constants::ciywsqoeiymemsys => $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq, false)]; goto oyeyomcgkmgymogq; case self::kaqawyqaekuookgi: $keccaugmemegoimu = $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq); goto oyeyomcgkmgymogq; case self::qskskgmuqiggaqeg: if ($scwwcyaqyywsweoq = $goqqimcssiyagkwy->iwuigwiooogcgwwu($sameaqkagyqomooq)) { goto kwiggogcgciwuwqk; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\x68\x65\x72\145\40\x69\163\40\156\x6f\40\162\x65\x6d\x6f\x74\145\x20\x72\x75\156\40\146\x6f\162\x20\160\x61\164\x74\145\x72\156\x2e", PR__MDL__OPTIMIZATION)); goto uckewycoogsogwiy; kwiggogcgciwuwqk: $iueymcwwscwqkiyq = Remote::symcgieuakksimmu()->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $scwwcyaqyywsweoq); if (!($iueymcwwscwqkiyq === Constants::eyemmiwoaayukksq)) { goto yykqaowwsqgqysmq; } $sogksuscggsicmac = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\166\x69\162\x74\x75\141\x6c\x5f\142\162\157\167\x73\145\162\137\143\150\145\143\x6b\137\x66\x69\x6e\x69\x73\150\x65\144", $sameaqkagyqomooq); if (!($sogksuscggsicmac !== $sameaqkagyqomooq)) { goto suqceasgacskcmkc; } if (is_wp_error($sogksuscggsicmac)) { goto oimkeqocuguqqsqk; } if (!$sogksuscggsicmac) { goto wkwamkgkwykeqkec; } $iueymcwwscwqkiyq = Constants::amcogigwsaqssuai; wkwamkgkwykeqkec: goto oeocukauoyosicso; oimkeqocuguqqsqk: $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; oeocukauoyosicso: suqceasgacskcmkc: yykqaowwsqgqysmq: $keccaugmemegoimu = [Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, "\x6c\141\x74\145\163\x74\x5f\162\165\x6e" => $iueymcwwscwqkiyq !== Constants::eyemmiwoaayukksq ? $goqqimcssiyagkwy->voqagyawicswcaau($sameaqkagyqomooq, "\x6c\141\164\x65\163\164\137\x72\x75\156", true) : '', "\160\x61\147\x65\x73\137\x63\x61\143\x68\x65" => $iueymcwwscwqkiyq !== Constants::eyemmiwoaayukksq ? $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq) : '']; uckewycoogsogwiy: goto oyeyomcgkmgymogq; case Constants::gqgwsyegwkicuomu: $keccaugmemegoimu = $this->_setupPattern($eouekqmooogkoqoo); goto oyeyomcgkmgymogq; case Pattern::ccoesaeoiusskiew: if (!$goqqimcssiyagkwy->gqwuqkumkkkygwuw($sameaqkagyqomooq)) { goto yoqakewookqoqacm; } $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); if (is_wp_error($keccaugmemegoimu)) { goto ikuuiauwouuqawuw; } $keccaugmemegoimu = $this->_optimizePattern($sameaqkagyqomooq, $keccaugmemegoimu); ikuuiauwouuqawuw: yoqakewookqoqacm: goto oyeyomcgkmgymogq; case Constants::kueyauseicqqwesu: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::eqewsqmqmsiocaeg); if (is_wp_error($keccaugmemegoimu)) { goto gswcoeiisamakwii; } $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo); gswcoeiisamakwii: goto oyeyomcgkmgymogq; case Constants::yewqymwwigegyeuk: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::uucoeqmmykkwsmqc); goto oyeyomcgkmgymogq; case self::wwgqqgayyagycysu: if ($goqqimcssiyagkwy->sesaqkesaeaecoao($eouekqmooogkoqoo)) { goto yuimwyoywaiiqacs; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\157\x6d\145\x74\x68\151\156\147\x20\x77\162\157\x6e\147\40\157\x6e\x20\x70\x75\162\147\151\x6e\147\40\160\141\x67\x65\x73\x20\143\141\143\150\145\56", PR__MDL__OPTIMIZATION)); goto ocywegekakimmwcq; yuimwyoywaiiqacs: $keccaugmemegoimu = __("\x50\x61\x67\x65\x73\x20\143\x61\143\x68\x65\40\x70\x75\x72\x67\x65\144\40\x73\165\143\143\x65\163\x73\x66\x75\154\x6c\x79\x2e", PR__MDL__OPTIMIZATION); ocywegekakimmwcq: goto oyeyomcgkmgymogq; case self::eueyiwccigugisqe: $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); goto oyeyomcgkmgymogq; } iesekaeqeomeuaui: oyeyomcgkmgymogq: iwsmmkqaoksmocok: $occymigcemkqucuw = !is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu; okkmcocqokkskasy: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } private function _checkLink($eouekqmooogkoqoo, array $ocqawgquwsqioses = []) { if ($ocqawgquwsqioses) { goto qiiigwkqeoewsuwm; } $ocqawgquwsqioses = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); qiiigwkqeoewsuwm: $ksaameoqigiaoigg = ''; if (!($iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::ogigqueukwysusii, '', true))) { goto mscgewkcqcoowweg; } $iwywmkygwewiamwm = trailingslashit($iwywmkygwewiamwm); if (isset($ocqawgquwsqioses[$iwywmkygwewiamwm])) { goto esaqcqqwuussiiwo; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\122\x4c\x20\x69\163\40\156\x6f\164\40\x6d\141\x74\x63\150\x65\x64\40\164\157\40\160\141\x74\164\145\162\x6e\x2e", PR__MDL__OPTIMIZATION)); goto ikqeeaysmqgcgawq; esaqcqqwuussiiwo: $ksaameoqigiaoigg = $iwywmkygwewiamwm; ikqeeaysmqgcgawq: mscgewkcqcoowweg: return $ksaameoqigiaoigg; } private function _setupPattern($eouekqmooogkoqoo) { $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); if (!$jwkieqegmyuwayce->wuwcyeequuwaeias($eouekqmooogkoqoo)) { goto oqousikwiiqagoyw; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\120\141\164\164\x65\162\156\x20\x61\x6c\x72\x65\141\144\x79\40\x73\x65\164\165\160\x65\144\56", PR__MDL__OPTIMIZATION)); goto zayqqeqgcwkekwws; oqousikwiiqagoyw: $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::ogigqueukwysusii, '', true); $mokmmyiueoiqokyc = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); if ($iwywmkygwewiamwm && is_wp_error($this->_checkLink($eouekqmooogkoqoo, $mokmmyiueoiqokyc))) { goto aiccyaswigkaycqk; } $awyumwiewiauosqy = $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo, $mokmmyiueoiqokyc); if (empty($awyumwiewiauosqy)) { goto eucqomyqykgoiuge; } $ueeagokqmgisgauy = ''; foreach ($awyumwiewiauosqy as $igqsaukqcqscimok) { if (!(isset($igqsaukqcqscimok[Constants::iwyueouqaqegmcas]) && $igqsaukqcqscimok[Constants::iwyueouqaqegmcas])) { goto qikaewekoecykeou; } $ueeagokqmgisgauy .= "\x3c\x62\x72\x3e{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($igqsaukqcqscimok[Constants::iwyueouqaqegmcas])}"; qikaewekoecykeou: yqagomygmeoecwey: } qsgqwyqaqiowkmco: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\123\157\155\x65\x20\x70\x61\x67\145\40\156\157\164\40\x61\144\144\x2e\40\x25\x73", PR__MDL__OPTIMIZATION), $ueeagokqmgisgauy)); goto usymasgsyqgsuocg; eucqomyqykgoiuge: if ($this->wkagassgcaqeosio()->gqwuqkumkkkygwuw($jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo))) { goto wwukgaquuyoissgy; } $ksaameoqigiaoigg = $this->wkagassgcaqeosio()->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::eqewsqmqmsiocaeg); goto gsygwgsiawgmqiyi; wwukgaquuyoissgy: if ($iwywmkygwewiamwm) { goto suqcsgaosywaauuu; } $iwywmkygwewiamwm = array_key_first($mokmmyiueoiqokyc); suqcsgaosywaauuu: $sameaqkagyqomooq = $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo); $ksaameoqigiaoigg = $this->_optimizePattern($sameaqkagyqomooq, $iwywmkygwewiamwm); gsygwgsiawgmqiyi: usymasgsyqgsuocg: goto sqyokemumceysegy; aiccyaswigkaycqk: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\122\114\x20\151\x73\x20\x6e\x6f\164\x20\155\141\164\143\150\145\144\x20\164\157\x20\x70\x61\164\x74\x65\x72\156\x2e", PR__MDL__OPTIMIZATION)); sqyokemumceysegy: zayqqeqgcwkekwws: return $ksaameoqigiaoigg; } private function _optimizePattern($sameaqkagyqomooq, $emyowuimauuisimy = '') { if (!(!$emyowuimauuisimy || !is_string($emyowuimauuisimy))) { goto mysueeoswqgccmui; } $iuekmkswcsacoawq = Page::symcgieuakksimmu(); if (!($suaemuyiacqyugsm = $iuekmkswcsacoawq->oqomcmyuuakigusk([Page::ewyamgkooeqiecwg => $sameaqkagyqomooq, Constants::ciywsqoeiymemsys => Constants::eqewsqmqmsiocaeg]))) { goto aueaceeyommgkicu; } $emyowuimauuisimy = $iuekmkswcsacoawq->esewqawcwouwyesq($iuekmkswcsacoawq->qogaqkcsogcqiaic($suaemuyiacqyugsm, Constants::auqoykcmsiauccao)); aueaceeyommgkicu: mysueeoswqgccmui: $sogksuscggsicmac = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x76\x69\x72\x74\x75\x61\x6c\x5f\x62\x72\x6f\167\x73\x65\162\137\141\144\144\x5f\152\x6f\x62", [], $sameaqkagyqomooq, $emyowuimauuisimy); if (is_wp_error($sogksuscggsicmac)) { goto ucuoeymyqeokgsya; } $sogksuscggsicmac = ["\160\141\147\x65\163\x5f\x63\x61\143\x68\x65\x5f\163\x74\141\164\x75\163" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\x70\x61\147\145\x73\137\143\x61\x63\x68\145", true), "\x70\141\164\x74\145\162\156\137\x70\162\157\147\x72\145\x73\163\142\x61\162" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\x6c\x61\164\x65\x73\164\137\162\165\156", true)]; goto yuuyikiacmmueosu; ucuoeymyqeokgsya: $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac); if (!(false !== $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($iswcokucwmiosiaq, "\x63\x75\162\154\40\145\162\x72\x6f\162"))) { goto egmayaiikwsskgmy; } $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x43\141\x6e\40\x6e\157\164\40\143\x6f\x6e\x6e\x65\143\x74\x20\x74\x6f\x20\163\x65\162\x76\145\x72\x20\x72\x69\147\x68\164\x20\156\x6f\167\54\40\x70\x6c\x65\141\163\145\40\x74\162\x79\x20\x6c\x61\164\x65\162\x20\157\162\40\143\157\156\164\x61\x63\x74\40\x75\163\x2e", PR__MDL__OPTIMIZATION), 500); egmayaiikwsskgmy: yuuyikiacmmueosu: return $sogksuscggsicmac; } private function _assignMatchedPagesToPattern($eouekqmooogkoqoo, array $mokmmyiueoiqokyc = []) : array { return $this->wkagassgcaqeosio()->iwuykycuaameiqes($eouekqmooogkoqoo, $mokmmyiueoiqokyc); } }
