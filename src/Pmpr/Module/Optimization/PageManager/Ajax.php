<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d323439fdb4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\PageManager\SpeedTest\Setting as SpeedTestSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use WP_Error; class Ajax extends Common { use PageManagerEngineTrait; const swkaqiikoaickuui = "\x6f\160\164\151\155\151\x7a\145"; const eueyiwccigugisqe = "\143\x68\x65\x63\153\x5f\x6c\x69\x6e\153"; const wwgqqgayyagycysu = "\x70\x75\162\147\145\x5f\143\x61\143\150\145"; const aeksqkkekigwssku = Optimization::kgswyesggeyekgmg . "\x73\x65\x74\x75\x70\x5f\x70\141\164\x74\145\162\x6e\x5f\141\143\164\x69\x6f\156"; const quuasuseuccsemsw = Optimization::kgswyesggeyekgmg . "\141\x63\164\151\166\145\137\160\x61\x74\164\145\162\156\x5f\x61\143\x74\x69\157\156"; const qskskgmuqiggaqeg = Optimization::kgswyesggeyekgmg . "\x63\150\145\143\x6b\x5f\x70\141\x74\164\x65\x72\156\137\162\x75\x6e\137\141\143\164\151\157\156"; const kaqawyqaekuookgi = Optimization::kgswyesggeyekgmg . "\x70\141\x67\145\x73\x5f\x63\141\x63\x68\x65\137\x73\x74\141\x74\x75\163"; const kusgmosaoigiukgi = Optimization::kgswyesggeyekgmg . "\162\145\157\x70\x74\151\x6d\x69\172\x65\137\160\141\x74\x74\x65\162\156\137\x61\143\x74\151\x6f\156"; const wegmeawoaymsqkyi = Optimization::kgswyesggeyekgmg . "\x64\x65\141\x63\x74\151\x76\x61\164\145\137\160\141\164\164\145\162\156\x5f\x61\143\x74\x69\x6f\156"; const maqcykaweqimuomu = Optimization::kgswyesggeyekgmg . "\143\x68\x65\x63\x6b\x5f\x63\141\156\x64\151\x64\x61\x74\x65\137\x75\162\154\137\x61\143\164\151\x6f\156"; const ggmmioeoauiyccec = Optimization::kgswyesggeyekgmg . "\160\141\x67\145\x73\137\x63\x61\x63\150\145\x5f\160\x72\x6f\147\162\x65\x73\x73"; const aikyaygyasegygma = Optimization::kgswyesggeyekgmg . "\160\141\164\x74\x65\x72\156\137\x6d\141\156\x75\x61\x6c\137\157\x70\x74\x69\155\x69\x7a\145\137\x61\143\x74\151\157\x6e"; const esiucesqiemeickk = Optimization::kgswyesggeyekgmg . "\x70\x75\x72\x67\145\x5f\160\141\164\x74\145\162\x6e\x5f\x70\141\x67\145\x73\137\143\x61\143\x68\x65\x5f\141\x63\x74\151\157\156"; const sggmuowkoiiuacig = Optimization::kgswyesggeyekgmg . "\x73\x70\x65\145\x64\x5f\164\145\163\164\x5f\156\157\x74\x5f\144\151\163\160\141\x63\x68\x61\142\x6c\145\x5f\146\151\170\145\x64"; const awqksmkmsquoymem = Optimization::kgswyesggeyekgmg . "\143\x68\x61\x6e\x67\x65\x5f\x70\141\147\x65\x5f\163\x74\x61\x74\165\163"; const imigmiemwmuayaca = Optimization::kgswyesggeyekgmg . "\143\x68\141\156\147\145\137\x70\141\x67\145\x5f\151\x6d\160\157\162\164\x61\x6e\164\x5f\163\x74\141\164\165\x73"; const uyuegiyaymqqkcwa = Optimization::kgswyesggeyekgmg . "\x63\x68\141\x6e\x67\x65\137\160\141\x67\x65\137\x73\x70\x65\x65\x64\137\164\x65\163\x74\x5f\143\x61\156\144\151\x64\x61\x74\x65\137\x73\164\141\x74\x75\163"; const ccyqqagwskwauoem = ["\143\150\141\x6e\x67\145\x5f\160\141\147\145\137\x73\x70\145\x65\x64\137\x74\145\x73\164\x5f\143\x61\x6e\x64\x69\x64\x61\x74\x65\137\163\x74\141\164\165\x73" => self::uyuegiyaymqqkcwa, "\143\x68\x61\156\147\145\137\160\x61\x67\x65\137\151\x6d\x70\x6f\162\164\141\156\x74\137\x73\x74\141\164\x75\x73" => self::imigmiemwmuayaca, "\x70\x75\162\147\x65\137\160\141\164\164\x65\162\x6e\137\x70\x61\147\x65\x73\x5f\x63\x61\143\150\x65" => self::esiucesqiemeickk, "\x70\141\x74\164\x65\x72\x6e\137\x6d\141\x6e\165\x61\154\137\157\160\164\x69\155\151\x7a\145" => self::aikyaygyasegygma, "\156\x6f\x74\x5f\144\151\163\x70\141\x63\x68\141\x62\x6c\x65\137\146\151\x78\145\x64" => self::sggmuowkoiiuacig, "\160\x61\147\x65\x73\137\143\x61\143\150\145\137\160\162\157\147\162\145\163\163" => self::ggmmioeoauiyccec, "\143\x68\x65\143\x6b\137\x63\141\156\144\x69\x64\x61\x74\x65\137\154\x69\156\153" => self::maqcykaweqimuomu, "\143\150\141\x6e\147\145\137\x70\141\147\145\137\x73\x74\141\x74\165\163" => self::awqksmkmsquoymem, "\160\x61\147\x65\x73\x5f\143\141\x63\150\145\137\x73\164\141\164\x75\163" => self::kaqawyqaekuookgi, "\x64\x65\x61\143\164\x69\x76\141\x74\145\137\160\141\164\164\145\162\156" => self::wegmeawoaymsqkyi, "\x72\x65\157\x70\x74\x69\x6d\x69\x7a\x65\x5f\x70\x61\x74\164\145\x72\156" => self::kusgmosaoigiukgi, "\143\x68\145\x63\x6b\137\160\x61\x74\164\145\162\156\137\162\165\x6e" => self::qskskgmuqiggaqeg, "\141\143\x74\x69\x76\x61\x74\x65\137\x70\x61\x74\164\145\162\156" => self::quuasuseuccsemsw, "\x73\145\x74\165\x70\x5f\x70\x61\164\x74\x65\162\x6e" => self::aeksqkkekigwssku]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::aeksqkkekigwssku, [$this, "\x63\147\x63\161\155\x69\x6f\153\x73\x79\x77\153\145\153\141\x6f"])->koaegcswmcqsiykq(self::quuasuseuccsemsw, [$this, "\143\x69\167\167\157\157\167\x77\143\163\143\x73\143\x67\165\147"])->koaegcswmcqsiykq(self::qskskgmuqiggaqeg, [$this, "\165\167\155\161\x61\x73\x6b\x63\x77\x61\x6d\151\147\x69\x6d\x65"])->koaegcswmcqsiykq(self::kaqawyqaekuookgi, [$this, "\x67\161\x75\x63\171\161\161\153\x67\x73\161\x79\x73\141\x6f\x69"])->koaegcswmcqsiykq(self::kusgmosaoigiukgi, [$this, "\151\167\x75\141\161\157\163\x6d\x71\155\167\x6d\145\x6f\151\167"])->koaegcswmcqsiykq(self::wegmeawoaymsqkyi, [$this, "\155\x77\x75\167\x79\151\141\147\x65\145\141\x65\157\171\x75\x79"])->koaegcswmcqsiykq(self::maqcykaweqimuomu, [$this, "\x65\153\141\x6d\147\x65\x71\157\147\157\163\147\x67\x65\157\x61"])->koaegcswmcqsiykq(self::ggmmioeoauiyccec, [$this, "\141\141\145\155\x63\x73\x6b\x65\x6d\147\x79\141\157\141\157\167"])->koaegcswmcqsiykq(self::aikyaygyasegygma, [$this, "\161\167\171\x67\x63\147\165\x79\x67\165\143\151\x77\x6f\153\x75"])->koaegcswmcqsiykq(self::esiucesqiemeickk, [$this, "\163\145\163\141\161\153\x65\163\141\x65\141\x65\x63\157\x61\x6f"]); $this->koaegcswmcqsiykq(self::sggmuowkoiiuacig, [$this, "\155\x67\x63\x65\153\x71\145\x73\x63\161\155\147\143\x6b\155\x79"]); $this->koaegcswmcqsiykq(self::awqksmkmsquoymem, [$this, "\143\x79\163\x6d\x63\171\143\153\x75\165\145\157\141\x69\x61\147"], 10, 0)->koaegcswmcqsiykq(self::imigmiemwmuayaca, [$this, "\x67\x63\x69\143\145\163\x77\147\x69\x73\x65\153\x69\143\147\x69"], 10, 0)->koaegcswmcqsiykq(self::uyuegiyaymqqkcwa, [$this, "\157\x6b\153\171\163\x65\x79\145\171\147\x61\x73\145\151\157\161"], 10, 0); } public function mgcekqescqmgckmy() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto auaywaskqooasiuq; } $keccaugmemegoimu = __("\131\x6f\x75\40\x68\141\x76\x65\40\x6e\157\40\160\x65\x72\x6d\x69\163\163\151\x6f\156\40\x74\157\x20\144\x6f\40\164\x68\151\x73\x2e", PR__MDL__OPTIMIZATION); goto ewoqyogcaksucksk; auaywaskqooasiuq: $occymigcemkqucuw = true; Setting::symcgieuakksimmu()->qioweyiqewmsocem(SpeedTestSetting::quyascocmiiossme, false, false); $keccaugmemegoimu = __("\x53\x70\x65\145\x64\x20\124\145\x73\164\40\146\x75\x6e\143\164\151\157\156\x61\x6c\x69\164\171\x20\146\157\162\40\143\141\x6e\x64\x69\x64\x61\164\145\40\160\141\147\145\163\x20\162\x65\x73\165\155\145\x64\56", PR__MDL__OPTIMIZATION); ewoqyogcaksucksk: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function cysmcyckuueoaiag() { $this->ssgwweggiwmeowkw(Constants::ciywsqoeiymemsys, Page::symcgieuakksimmu()->uqeoyqiwywwmsiew(Constants::ciywsqoeiymemsys)->gkwkqmwweiawigae(Constants::eoaiagsgqsmskugs)); } public function gciceswgisekicgi() { $this->ssgwweggiwmeowkw(Page::uyeaawkisqygakmy, [0 => __("\116\x6f\x72\155\141\x6c", PR__MDL__OPTIMIZATION), 1 => __("\x49\x6d\160\157\162\x74\x61\156\164", PR__MDL__OPTIMIZATION)]); } public function okkyseyeygaseioq() { $this->ssgwweggiwmeowkw(Page::aewquksqwqiawiei, [0 => __("\x44\157\156\164\x20\124\141\x6b\x65\x20\x53\x70\x65\145\144\x20\x54\145\163\164", PR__MDL__OPTIMIZATION), 1 => __("\x54\x61\x6b\x65\x20\x53\x70\145\x65\x64\x20\124\x65\x73\164", PR__MDL__OPTIMIZATION)]); } public function ssgwweggiwmeowkw($qgoqiacsiccwoawi = Constants::ciywsqoeiymemsys, $oqseeekuqisekiwy = []) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto kmiqskugkmaiugae; } $keccaugmemegoimu = __("\x59\x6f\165\40\150\x61\x76\x65\40\x6e\157\x20\160\145\x72\155\x69\163\163\151\157\x6e\40\164\157\x20\x64\157\x20\164\150\151\x73\x2e", PR__MDL__OPTIMIZATION); goto cqemkecywkkwaaii; kmiqskugkmaiugae: $qkcoyiyeuoyyoocy = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::imywcsggckkcywgk); if ($qkcoyiyeuoyyoocy) { goto simkiasocoimioew; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); goto iuaeeeeggkikuiig; simkiasocoimioew: $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $iueymcwwscwqkiyq = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::ciywsqoeiymemsys, 0); if (isset($oqseeekuqisekiwy[$iueymcwwscwqkiyq])) { goto qgyaeoqgekocwkmw; } $keccaugmemegoimu = __("\131\x6f\x75\162\40\163\x75\x62\155\151\163\x73\x69\x6f\x6e\x20\x73\164\141\x74\x75\163\x20\x69\x73\40\156\x6f\x74\40\141\x20\x76\x61\x6c\x69\x64\x20\x73\x74\141\164\x75\163\56", PR__MDL__OPTIMIZATION); goto sieykcqauaygcais; qgyaeoqgekocwkmw: $sogksuscggsicmac = $iuekmkswcsacoawq->wqikesawekycweoi($qkcoyiyeuoyyoocy, [$qgoqiacsiccwoawi => $iueymcwwscwqkiyq]); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto wgeueumgacuuuama; } $keccaugmemegoimu = $sogksuscggsicmac[Constants::iwyueouqaqegmcas]; goto yukacyeckkwagusw; wgeueumgacuuuama: $occymigcemkqucuw = true; $keccaugmemegoimu = sprintf(__("\x50\x61\x67\x65\40\163\164\x61\x74\165\x73\40\x63\x68\x61\x6e\x67\145\x64\x20\164\157\40\x25\163\x20\163\x75\x63\143\x65\x73\163\146\x75\x6c\154\171\56", PR__MDL__OPTIMIZATION), $oqseeekuqisekiwy[$iueymcwwscwqkiyq]); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\160\165\162\147\145\137\x65\154\145\x63\x74\145\144\x5f\160\141\147\145\x5f\x68\164\x6d\x6c\137\x63\x61\143\x68\x65", $qkcoyiyeuoyyoocy); yukacyeckkwagusw: sieykcqauaygcais: iuaeeeeggkikuiig: cqemkecywkkwaaii: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function qwygcguyguciwoku() { $this->cgywqskcmcgkwueu(self::aikyaygyasegygma); } public function gqucyqqkgsqysaoi() { $this->cgywqskcmcgkwueu(self::kaqawyqaekuookgi); } public function aaemcskemgyaoaow() { $this->cgywqskcmcgkwueu(self::ggmmioeoauiyccec); } public function uwmqaskcwamigime() { $this->cgywqskcmcgkwueu(self::qskskgmuqiggaqeg); } public function iwuaqosmqmwmeoiw() { $this->cgywqskcmcgkwueu(Pattern::ccoesaeoiusskiew); } public function cgcqmioksywkekao() { $this->cgywqskcmcgkwueu(Constants::gqgwsyegwkicuomu); } public function ciwwoowwcscscgug() { $this->cgywqskcmcgkwueu(Constants::kueyauseicqqwesu); } public function mwuwyiageeaeoyuy() { $this->cgywqskcmcgkwueu(Constants::yewqymwwigegyeuk); } public function ekamgeqogosggeoa() { $this->cgywqskcmcgkwueu(self::eueyiwccigugisqe); } public function sesaqkesaeaecoao() { $this->cgywqskcmcgkwueu(self::wwgqqgayyagycysu); } private function cgywqskcmcgkwueu($aiamqeawckcsuaou) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto moqcomgmwiamuomq; } $keccaugmemegoimu = __("\x59\x6f\165\x20\x68\141\x76\145\x20\156\157\x20\x70\145\162\x6d\151\x73\x73\151\x6f\156\x20\164\157\40\x64\157\40\x74\150\151\163\x2e", PR__MDL__OPTIMIZATION); goto omgkuuyoiugcymmy; moqcomgmwiamuomq: $keccaugmemegoimu = false; $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::qakegsaikiimcmkc, 0, true); if ($eouekqmooogkoqoo = $jwkieqegmyuwayce->akkkoiiymmamsauc($sameaqkagyqomooq)) { goto iqamwyasyoqsugeu; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x50\141\x74\x74\x65\x72\x6e\40\x4e\157\x74\40\106\157\165\x6e\x64", PR__MDL__OPTIMIZATION)); goto uiqycwuommmmuowy; iqamwyasyoqsugeu: switch ($aiamqeawckcsuaou) { case self::aikyaygyasegygma: if ($goqqimcssiyagkwy->iwoekuysekysqmke()) { goto wmsiqkyqsiysgcyy; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x50\141\164\164\x65\x72\156\x20\x6d\x61\x6e\x75\x61\154\x20\x6f\x70\x74\151\155\151\x7a\x65\x20\x6e\157\x74\x20\141\x76\141\151\x6c\141\x62\x6c\x65\40\x72\151\x67\150\x74\40\x6e\157\167\41", PR__MDL__OPTIMIZATION)); goto ysggiwiksocomkek; wmsiqkyqsiysgcyy: $smgooosyoeqwcaeg = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::qmwqkaeamecekiso); if ($smgooosyoeqwcaeg) { goto ieoiygycmseqmmgc; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__("\112\123\117\116", PR__MDL__OPTIMIZATION)); goto gkuwmiusoqwesqoo; ieoiygycmseqmmgc: $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x76\151\x72\x74\165\x61\x6c\137\x62\162\157\x77\163\145\162\137\x63\141\143\150\x65\137\x72\x65\x73\165\x6c\164", $sameaqkagyqomooq, wp_unslash($smgooosyoeqwcaeg)); $keccaugmemegoimu = __("\120\141\164\x74\x65\162\x6e\40\144\141\164\x61\x20\x63\x61\x63\150\x65\144\x20\x73\165\143\143\x65\163\x73\146\165\x6c\x6c\x79\56", PR__MDL__OPTIMIZATION); gkuwmiusoqwesqoo: ysggiwiksocomkek: goto wcioaoeiiawwqqqq; case self::ggmmioeoauiyccec: $keccaugmemegoimu = ["\x70\x72\x6f\x67\x72\x65\x73\163" => $goqqimcssiyagkwy->emygimuicqcskaam($sameaqkagyqomooq), Constants::ciywsqoeiymemsys => $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq, false)]; goto wcioaoeiiawwqqqq; case self::kaqawyqaekuookgi: $keccaugmemegoimu = $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq); goto wcioaoeiiawwqqqq; case self::qskskgmuqiggaqeg: if ($scwwcyaqyywsweoq = $goqqimcssiyagkwy->iwuigwiooogcgwwu($sameaqkagyqomooq)) { goto giuswooyckooaoms; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\x68\x65\x72\145\40\x69\x73\x20\156\x6f\40\x72\x65\x6d\x6f\x74\x65\40\x72\x75\x6e\x20\x66\x6f\x72\40\160\x61\x74\164\145\x72\156\x2e", PR__MDL__OPTIMIZATION)); goto uogkcsaewswoaosw; giuswooyckooaoms: $iueymcwwscwqkiyq = Remote::symcgieuakksimmu()->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $scwwcyaqyywsweoq); if (!($iueymcwwscwqkiyq === Constants::eyemmiwoaayukksq)) { goto omekuqkuugyocmoc; } $sogksuscggsicmac = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\166\151\162\x74\x75\141\154\x5f\x62\x72\157\167\163\145\x72\x5f\x63\x68\x65\x63\153\137\146\x69\156\151\163\x68\x65\144", $sameaqkagyqomooq); if (!($sogksuscggsicmac !== $sameaqkagyqomooq)) { goto qswqmgiwiyyqwioa; } if (is_wp_error($sogksuscggsicmac)) { goto wqieuwguumokgyqg; } if (!$sogksuscggsicmac) { goto wkqwywgikoyqkyeg; } $iueymcwwscwqkiyq = Constants::amcogigwsaqssuai; wkqwywgikoyqkyeg: goto aueiggyawkmkamum; wqieuwguumokgyqg: $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; aueiggyawkmkamum: qswqmgiwiyyqwioa: omekuqkuugyocmoc: $keccaugmemegoimu = [Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, "\x6c\x61\x74\145\163\164\x5f\x72\165\156" => $iueymcwwscwqkiyq !== Constants::eyemmiwoaayukksq ? $goqqimcssiyagkwy->voqagyawicswcaau($sameaqkagyqomooq, "\154\141\x74\x65\x73\164\x5f\x72\x75\x6e", true) : '', "\160\x61\147\145\x73\137\143\x61\x63\x68\145" => $iueymcwwscwqkiyq !== Constants::eyemmiwoaayukksq ? $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq) : '']; uogkcsaewswoaosw: goto wcioaoeiiawwqqqq; case Constants::gqgwsyegwkicuomu: $keccaugmemegoimu = $this->_setupPattern($eouekqmooogkoqoo); goto wcioaoeiiawwqqqq; case Pattern::ccoesaeoiusskiew: if (!$goqqimcssiyagkwy->gqwuqkumkkkygwuw($sameaqkagyqomooq)) { goto cykaikwsaskgeemo; } $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); if (is_wp_error($keccaugmemegoimu)) { goto miqmoasmioksggkm; } $keccaugmemegoimu = $this->_optimizePattern($sameaqkagyqomooq, $keccaugmemegoimu); miqmoasmioksggkm: cykaikwsaskgeemo: goto wcioaoeiiawwqqqq; case Constants::kueyauseicqqwesu: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::eqewsqmqmsiocaeg); if (is_wp_error($keccaugmemegoimu)) { goto eqemoayymokeqaqi; } $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo); eqemoayymokeqaqi: goto wcioaoeiiawwqqqq; case Constants::yewqymwwigegyeuk: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::uucoeqmmykkwsmqc); goto wcioaoeiiawwqqqq; case self::wwgqqgayyagycysu: if ($goqqimcssiyagkwy->sesaqkesaeaecoao($eouekqmooogkoqoo)) { goto keewmqmgqegumiwa; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\x6f\155\x65\x74\150\151\x6e\147\x20\167\162\x6f\x6e\x67\40\x6f\x6e\40\x70\165\x72\x67\151\156\147\x20\160\x61\x67\145\163\40\143\141\x63\x68\x65\56", PR__MDL__OPTIMIZATION)); goto oqsecqsucukywaee; keewmqmgqegumiwa: $keccaugmemegoimu = __("\x50\141\147\x65\163\40\143\141\143\150\145\40\x70\x75\x72\147\x65\x64\x20\x73\x75\143\143\145\163\x73\146\165\154\154\x79\x2e", PR__MDL__OPTIMIZATION); oqsecqsucukywaee: goto wcioaoeiiawwqqqq; case self::eueyiwccigugisqe: $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); goto wcioaoeiiawwqqqq; } qaikeckkiwasykwk: wcioaoeiiawwqqqq: uiqycwuommmmuowy: $occymigcemkqucuw = !is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu; omgkuuyoiugcymmy: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } private function _checkLink($eouekqmooogkoqoo, array $ocqawgquwsqioses = []) { if ($ocqawgquwsqioses) { goto kumuckkicykgwqqm; } $ocqawgquwsqioses = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); kumuckkicykgwqqm: $ksaameoqigiaoigg = ''; if (!($iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::ogigqueukwysusii, '', true))) { goto aiwygewkmigcwusw; } $iwywmkygwewiamwm = trailingslashit($iwywmkygwewiamwm); if (isset($ocqawgquwsqioses[$iwywmkygwewiamwm])) { goto sguyyaygwyikaggk; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\x52\x4c\x20\151\163\40\x6e\157\x74\x20\155\141\x74\143\x68\145\144\40\164\157\40\160\141\164\164\145\x72\156\x2e", PR__MDL__OPTIMIZATION)); goto ayyyeiyaosoacoqm; sguyyaygwyikaggk: $ksaameoqigiaoigg = $iwywmkygwewiamwm; ayyyeiyaosoacoqm: aiwygewkmigcwusw: return $ksaameoqigiaoigg; } private function _setupPattern($eouekqmooogkoqoo) { $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); if (!$jwkieqegmyuwayce->wuwcyeequuwaeias($eouekqmooogkoqoo)) { goto koiyaaokigmamqyc; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x50\141\164\164\145\x72\x6e\x20\x61\x6c\x72\x65\141\x64\x79\40\163\x65\x74\x75\x70\145\x64\56", PR__MDL__OPTIMIZATION)); goto qiqegseqwywcmwoe; koiyaaokigmamqyc: $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::ogigqueukwysusii, '', true); $mokmmyiueoiqokyc = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); if ($iwywmkygwewiamwm && is_wp_error($this->_checkLink($eouekqmooogkoqoo, $mokmmyiueoiqokyc))) { goto yoauoocuckogmsuw; } $awyumwiewiauosqy = $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo, $mokmmyiueoiqokyc); if (empty($awyumwiewiauosqy)) { goto jkaemsuwyyoamwim; } $ueeagokqmgisgauy = ''; foreach ($awyumwiewiauosqy as $igqsaukqcqscimok) { if (!(isset($igqsaukqcqscimok[Constants::iwyueouqaqegmcas]) && $igqsaukqcqscimok[Constants::iwyueouqaqegmcas])) { goto emioyucskiowqumg; } $ueeagokqmgisgauy .= "\74\142\162\76{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($igqsaukqcqscimok[Constants::iwyueouqaqegmcas])}"; emioyucskiowqumg: cscskwugoamcmqyu: } wgaqkacekoyiwggi: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\123\x6f\155\145\40\x70\141\x67\x65\40\x6e\x6f\x74\x20\141\x64\144\x2e\40\45\x73", PR__MDL__OPTIMIZATION), $ueeagokqmgisgauy)); goto suwsiaeoumiwkiqg; jkaemsuwyyoamwim: if ($this->wkagassgcaqeosio()->gqwuqkumkkkygwuw($jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo))) { goto ksoawacwkgasqgmk; } $ksaameoqigiaoigg = $this->wkagassgcaqeosio()->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::eqewsqmqmsiocaeg); goto yqeqouqemksasmqc; ksoawacwkgasqgmk: if ($iwywmkygwewiamwm) { goto ekmogkwmcqsykgsq; } $iwywmkygwewiamwm = array_key_first($mokmmyiueoiqokyc); ekmogkwmcqsykgsq: $sameaqkagyqomooq = $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo); $ksaameoqigiaoigg = $this->_optimizePattern($sameaqkagyqomooq, $iwywmkygwewiamwm); yqeqouqemksasmqc: suwsiaeoumiwkiqg: goto amyaoueckysgmmas; yoauoocuckogmsuw: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\122\x4c\40\151\x73\x20\x6e\x6f\x74\40\x6d\141\164\x63\x68\145\x64\40\164\x6f\x20\x70\141\164\164\x65\162\x6e\x2e", PR__MDL__OPTIMIZATION)); amyaoueckysgmmas: qiqegseqwywcmwoe: return $ksaameoqigiaoigg; } private function _optimizePattern($sameaqkagyqomooq, $emyowuimauuisimy = '') { if (!(!$emyowuimauuisimy || !is_string($emyowuimauuisimy))) { goto kwcscewawgicomok; } $iuekmkswcsacoawq = Page::symcgieuakksimmu(); if (!($suaemuyiacqyugsm = $iuekmkswcsacoawq->oqomcmyuuakigusk([Page::ewyamgkooeqiecwg => $sameaqkagyqomooq, Constants::ciywsqoeiymemsys => Constants::eqewsqmqmsiocaeg]))) { goto yosyyiksyyscacus; } $emyowuimauuisimy = $iuekmkswcsacoawq->esewqawcwouwyesq($iuekmkswcsacoawq->qogaqkcsogcqiaic($suaemuyiacqyugsm, Constants::auqoykcmsiauccao)); yosyyiksyyscacus: kwcscewawgicomok: $sogksuscggsicmac = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x76\151\162\164\165\x61\x6c\137\x62\x72\157\167\163\x65\162\x5f\x61\144\144\137\152\x6f\x62", [], $sameaqkagyqomooq, $emyowuimauuisimy); if (is_wp_error($sogksuscggsicmac)) { goto aqeyqwuywqcmuoce; } $sogksuscggsicmac = ["\160\x61\x67\x65\x73\x5f\143\141\x63\150\x65\x5f\163\x74\x61\164\x75\x73" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\x70\141\x67\145\x73\x5f\143\x61\x63\150\x65", true), "\x70\x61\x74\x74\x65\162\x6e\137\160\162\x6f\x67\x72\145\x73\x73\142\141\x72" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\154\x61\164\145\x73\164\x5f\x72\x75\x6e", true)]; goto aymoguycgmuggcik; aqeyqwuywqcmuoce: $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac); if (!(false !== $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($iswcokucwmiosiaq, "\143\165\162\x6c\x20\x65\x72\x72\157\162"))) { goto kikkkocywiyuyuqw; } $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x43\x61\x6e\x20\x6e\157\164\40\x63\157\x6e\156\145\143\x74\40\x74\157\40\x73\145\x72\x76\x65\162\x20\162\x69\147\150\x74\40\156\157\x77\54\x20\x70\154\x65\x61\163\145\x20\164\x72\x79\x20\x6c\x61\164\145\162\x20\157\162\40\143\x6f\156\x74\x61\143\x74\40\x75\163\x2e", PR__MDL__OPTIMIZATION), 500); kikkkocywiyuyuqw: aymoguycgmuggcik: return $sogksuscggsicmac; } private function _assignMatchedPagesToPattern($eouekqmooogkoqoo, array $mokmmyiueoiqokyc = []) : array { return $this->wkagassgcaqeosio()->iwuykycuaameiqes($eouekqmooogkoqoo, $mokmmyiueoiqokyc); } }
