<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624c0a8a4dc93             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use stdClass; class Ajax extends Common { const PREFIX = self::wowuwuigyoceikas . "\137\x6c\151\143\145\156\x73\x65"; const ucwkciyokauwsyes = self::PREFIX . "\137\143\x68\145\143\153\137\x62\x75\144\x67\145\x74"; const ikageqoesymqusss = self::PREFIX . "\137\x67\x65\x74\137\x70\157\163\x74\163\x5f\142\171\137\162\x75\x6c\x65\x73"; const qeyyssmaimicgksm = self::PREFIX . "\x5f\x61\x64\144\137\160\x61\147\x65\x73\137\x62\171\x5f\x72\x75\x6c\145\x73"; const awqksmkmsquoymem = self::PREFIX . "\x5f\143\x68\141\156\x67\145\x5f\160\x61\x67\x65\x5f\x73\164\x61\x74\x75\163"; const ygggeyeauuuaqwou = self::wowuwuigyoceikas . "\137\x6e\x65\x78\164\137\143\x68\145\x63\153\137\142\x75\x64\x67\x65\164"; const myikkigscysoykgy = ["\x67\x65\164\x5f\x70\x6f\x73\x74\163" => self::ikageqoesymqusss, "\x61\x64\144\x5f\x70\x61\x67\x65\163" => self::qeyyssmaimicgksm, "\x63\x68\145\143\x6b\137\x62\x75\144\147\145\164" => self::ucwkciyokauwsyes, "\143\150\x61\156\147\145\137\163\x74\141\x74\165\x73" => self::awqksmkmsquoymem]; protected ?API $api = null; public function __construct() { $this->api = API::symcgieuakksimmu(); parent::__construct(); } public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::ucwkciyokauwsyes, [$this, "\161\167\x6d\167\x65\x77\x69\161\145\143\x77\x69\x65\157\165\x65"])->koaegcswmcqsiykq(self::ikageqoesymqusss, [$this, "\165\171\x65\143\171\x73\157\x73\x61\163\x79\155\x79\171\x75\x67"])->koaegcswmcqsiykq(self::qeyyssmaimicgksm, [$this, "\165\147\147\167\x63\x71\x75\x6d\157\141\x73\x73\x65\163\165\145"])->koaegcswmcqsiykq(self::awqksmkmsquoymem, [$this, "\x63\x79\x73\155\x63\171\x63\153\x75\x75\145\x6f\x61\151\x61\x67"]); parent::wigskegsqequoeks(); } public function auamgqiwisysomsa() : ?API { return $this->api; } public function qwmwewiqecwieoue() { $uuyoeicyoayimaoa = 1; $kigowwqauiumummw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto euymeegkukskiowq; } $ccosicygoaweskom = DecoratorOption::get(self::ygggeyeauuuaqwou, false); if (!$ccosicygoaweskom || ManipulateDatetime::wguceomqgwouoyks($ccosicygoaweskom)) { goto awimwukcyiceackk; } $uamcoiueqaamsqma = sprintf(__("\x50\154\145\x61\x73\x65\x20\x74\x72\171\40\141\x67\141\151\156\40\141\x66\x74\x65\162\40\45\163\x20\x68\x6f\165\162", PR__MDL__OPTIMIZATION), $this->msywmyaoqmaegsuy($uuyoeicyoayimaoa)); goto mugeiwyysiemwaym; awimwukcyiceackk: $kigowwqauiumummw = $this->yoeoaweeseqiyesg($uamcoiueqaamsqma); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\137\165\x70\x64\141\164\145\x5f\x68\x65\x72\157\153\165\137\x61\x70\x70\x73")); if (!$kigowwqauiumummw) { goto ycueoqkeakismiqw; } DecoratorOption::update(self::ygggeyeauuuaqwou, date("\x59\x2d\x6d\x2d\144\x20\110\72\151\72\163", strtotime("\53{$uuyoeicyoayimaoa}\40\x68\157\x75\x72"))); ycueoqkeakismiqw: mugeiwyysiemwaym: euymeegkukskiowq: $this->uaggqsoeugksgooc($kigowwqauiumummw, $uamcoiueqaamsqma); } public function uyecysosasymyyug() { $occymigcemkqucuw = false; $keccaugmemegoimu = []; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto auaywaskqooasiuq; } $suuagcecoyuweoqk = []; $acqqmqmcquukaqsc = ManipulateServer::ayueggmoqeeukqmq("\x72\165\154\x65\163", []); $keccaugmemegoimu = $this->ioucsiguaciwkgqc($acqqmqmcquukaqsc, $uamcoiueqaamsqma); foreach ($keccaugmemegoimu as $igqsaukqcqscimok) { $sqsyqsscqaauwyyy = ManipulateArray::get($igqsaukqcqscimok, "\165\x73\x65\144"); $ocqawgquwsqioses = ManipulateArray::unset($igqsaukqcqscimok, "\x70\x61\147\145\163"); if (!($sqsyqsscqaauwyyy > 0 && $ocqawgquwsqioses)) { goto uwscegkmmumymoaq; } $suuagcecoyuweoqk = array_merge($suuagcecoyuweoqk, array_slice($ocqawgquwsqioses, 0, $sqsyqsscqaauwyyy)); uwscegkmmumymoaq: cyymeyomuakqakwo: } cquikgykuscqmigw: if ($suuagcecoyuweoqk) { goto gkwoqoeaecgkymeu; } $uamcoiueqaamsqma = __("\x4e\157\x20\x72\145\163\x75\x6c\x74\x20\x66\157\x75\156\144\40\164\x6f\40\x73\x68\157\167\54\x20\x70\154\145\x61\x73\x65\x20\x63\150\x61\156\147\x65\40\162\x75\154\x65\163\40\x61\x6e\144\40\164\x72\171\40\141\147\x61\x69\156\x2e", PR__MDL__OPTIMIZATION); goto ouaoyqugwsagkqaa; gkwoqoeaecgkymeu: $occymigcemkqucuw = true; $keccaugmemegoimu["\154\x69\x73\x74"] = $this->iuygowkemiiwqmiw("\x74\x61\x62\154\x65", ["\x69\164\x65\x6d\163" => $suuagcecoyuweoqk, "\141\143\x74\x69\x6f\156\163" => ["\x72\145\x6d\x6f\x76\145" => ["\x74\151\164\x6c\x65" => __("\122\x65\155\x6f\x76\145", PR__MDL__OPTIMIZATION), "\151\x63\x6f\x6e" => IconFontawesomeInterface::cugwqwigakiwyiuk, "\x61\x74\164\162\163" => ["\x63\x6c\141\x73\x73" => "\x72\165\x6c\x65\55\x72\145\x6d\x6f\x76\145\55\141\x63\x74\x69\x6f\x6e\40\x62\165\164\164\x6f\156"]]], "\x74\151\164\154\x65\163" => ["\x74\x69\164\154\x65" => __("\x54\151\164\154\145", PR__MDL__OPTIMIZATION), "\x70\x61\147\x65\x5f\164\x79\x70\x65" => __("\120\141\147\x65\40\x54\x79\160\x65", PR__MDL__OPTIMIZATION), "\141\x63\164\x69\157\156\x73" => __("\101\143\164\x69\157\x6e\x73", PR__MDL__OPTIMIZATION)]]); ouaoyqugwsagkqaa: auaywaskqooasiuq: if ($occymigcemkqucuw) { goto ewoqyogcaksucksk; } $keccaugmemegoimu = $uamcoiueqaamsqma; ewoqyogcaksucksk: $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } public function uggwcqumoassesue() { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto qswqmgiwiyyqwioa; } $eciuecguuowmeyqg = []; $ocqawgquwsqioses = ManipulateServer::ayueggmoqeeukqmq(self::yusuiaeueqwieqqq, []); $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $gqswsiquqaayuakq = $this->ewcikckouwmuqkms(); if ($ocqawgquwsqioses && is_array($ocqawgquwsqioses)) { goto wqieuwguumokgyqg; } $uamcoiueqaamsqma = __("\x50\141\147\145\40\x6c\x69\163\x74\x20\151\x73\x20\145\x6d\160\164\171\54\x20\160\x6c\x65\x61\163\145\x20\x72\145\x64\145\146\151\x6e\145\40\x70\141\147\x65\x73\x2e", PR__MDL__OPTIMIZATION); goto aueiggyawkmkamum; wqieuwguumokgyqg: foreach ($ocqawgquwsqioses as $momcykaoccoymeig => $suaemuyiacqyugsm) { if (!($momcykaoccoymeig >= $gqswsiquqaayuakq)) { goto qgyaeoqgekocwkmw; } goto wgeueumgacuuuama; qgyaeoqgekocwkmw: $sqeykgyoooqysmca = ManipulateArray::get($suaemuyiacqyugsm, self::squoamkioomemiyi); $ccamueccusigaaio = ManipulateArray::get($suaemuyiacqyugsm, self::mgsccwumkcawaqcy); if (!($ccamueccusigaaio && $sqeykgyoooqysmca)) { goto ysggiwiksocomkek; } $myagqecycsaiyqsk = $jwsqucqyaoaasykk->syoquewuemwigaaw($ccamueccusigaaio, $sqeykgyoooqysmca); $icwicymcioeyeyek = []; if ($myagqecycsaiyqsk) { goto sieykcqauaygcais; } $icwicymcioeyeyek = [self::squoamkioomemiyi => $sqeykgyoooqysmca, self::iiooageieusuyomy => $jwsqucqyaoaasykk::cwoackywkgsameww, self::mgsccwumkcawaqcy => $ccamueccusigaaio, self::ciywsqoeiymemsys => self::eqewsqmqmsiocaeg]; sieykcqauaygcais: if (!$icwicymcioeyeyek) { goto wmsiqkyqsiysgcyy; } if ($this->auamgqiwisysomsa()->auuqggkaeoomcksu($sqeykgyoooqysmca, $ccamueccusigaaio, $uamcoiueqaamsqma, $kgicwkyskyemksca)) { goto ieoiygycmseqmmgc; } switch ($kgicwkyskyemksca) { case "\157\165\x74\x5f\x6f\146\137\142\x75\144\147\145\164": if ($momcykaoccoymeig == 0) { goto wcioaoeiiawwqqqq; } $uamcoiueqaamsqma = sprintf(__("\45\x73\x20\x6f\x66\40\x79\x6f\x75\x72\x20\x72\x65\161\x75\145\x73\164\145\144\x20\x70\141\x67\145\163\x20\141\x64\144\x65\144\54\x20\x74\x68\x65\40\x72\145\x6d\141\151\x6e\163\40\x61\x72\x65\40\x6e\x6f\x74\40\x61\x6c\x6c\157\167\40\x74\x6f\40\x61\x64\x64\x2e", PR__MDL__OPTIMIZATION), $this->msywmyaoqmaegsuy($momcykaoccoymeig)); goto qaikeckkiwasykwk; wcioaoeiiawwqqqq: $uamcoiueqaamsqma = __("\x53\157\162\x72\171\54\40\x79\x6f\x75\162\40\x72\145\161\x75\x65\163\164\145\x64\40\x70\162\x6f\143\145\163\163\40\164\145\x72\155\x69\156\141\164\x65\x64\x2c\40\142\145\x63\x61\165\x73\x65\40\x79\157\165\40\141\x72\x65\40\157\x75\164\x20\157\146\x20\x62\165\x64\x67\145\164\56", PR__MDL__OPTIMIZATION); qaikeckkiwasykwk: goto kmiqskugkmaiugae; } cqemkecywkkwaaii: kmiqskugkmaiugae: goto wgeueumgacuuuama; goto gkuwmiusoqwesqoo; ieoiygycmseqmmgc: $sogksuscggsicmac = $jwsqucqyaoaasykk->gscuuyuyauokoyuo($icwicymcioeyeyek); if (!ManipulateArray::get($sogksuscggsicmac, self::ckcawaoawwioqecq)) { goto simkiasocoimioew; } $eciuecguuowmeyqg[] = ManipulateArray::get($sogksuscggsicmac, $jwsqucqyaoaasykk->kumuygiiqswoyasy()); goto iuaeeeeggkikuiig; simkiasocoimioew: $uamcoiueqaamsqma .= print_r(ManipulateArray::get($sogksuscggsicmac, self::iwyueouqaqegmcas), true); iuaeeeeggkikuiig: gkuwmiusoqwesqoo: wmsiqkyqsiysgcyy: ysggiwiksocomkek: yukacyeckkwagusw: } wgeueumgacuuuama: if (!$eciuecguuowmeyqg) { goto wkqwywgikoyqkyeg; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\137\160\165\162\x67\145\137\160\x61\x67\x65\x73"), $eciuecguuowmeyqg); wkqwywgikoyqkyeg: aueiggyawkmkamum: qswqmgiwiyyqwioa: if ($uamcoiueqaamsqma) { goto omekuqkuugyocmoc; } $uamcoiueqaamsqma = __("\120\x61\x67\x65\x73\40\141\x64\x64\x65\144\x20\163\165\x63\x63\x65\x73\x73\146\x75\154\154\171\x2e", PR__MDL__OPTIMIZATION); $occymigcemkqucuw = true; omekuqkuugyocmoc: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } public function cysmcyckuueoaiag() { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto iqamwyasyoqsugeu; } $suaemuyiacqyugsm = ManipulateServer::ayueggmoqeeukqmq("\x70\141\147\145\137\151\x64"); $iueymcwwscwqkiyq = ManipulateServer::ayueggmoqeeukqmq("\160\141\x67\x65\137\163\164\141\x74\x75\x73"); if ($suaemuyiacqyugsm && $iueymcwwscwqkiyq) { goto keewmqmgqegumiwa; } $uamcoiueqaamsqma = __("\155\x69\x73\163\151\x6e\x67\40\x70\141\162\141\155\x65\164\145\162\54\x20\x72\145\x71\165\x65\x73\x74\x20\151\x73\x20\156\x6f\164\40\166\141\x6c\151\x64\56", PR__MDL__OPTIMIZATION); goto oqsecqsucukywaee; keewmqmgqegumiwa: try { $meywaqqsugaoeyys = Model::symcgieuakksimmu(); $wkawwaegamqisugs = $meywaqqsugaoeyys->akkkoiiymmamsauc($suaemuyiacqyugsm); if ($wkawwaegamqisugs instanceof stdClass) { goto cykaikwsaskgeemo; } $uamcoiueqaamsqma = __("\122\x65\161\165\x69\162\x65\40\160\x61\162\141\x6d\x65\x74\145\162\40\x6e\x6f\x74\40\146\157\165\156\x64\x2c\x20\162\x65\x6c\x6f\141\x64\x20\x70\x61\147\145\x20\x61\x6e\x64\40\164\162\x79\x20\x61\x67\x61\x69\x6e\56", PR__MDL__OPTIMIZATION); goto eqemoayymokeqaqi; cykaikwsaskgeemo: if (ManipulateArray::get($wkawwaegamqisugs, self::ciywsqoeiymemsys) === self::wiewguakgwmoqaea && $this->ewcikckouwmuqkms() <= 0) { goto uogkcsaewswoaosw; } if (!$meywaqqsugaoeyys->ayakoikewusskayc($wkawwaegamqisugs, $iueymcwwscwqkiyq, $uamcoiueqaamsqma, $kgicwkyskyemksca)) { goto giuswooyckooaoms; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\137\160\165\162\x67\145\x5f\160\x61\x67\145"), $suaemuyiacqyugsm); $occymigcemkqucuw = true; giuswooyckooaoms: goto miqmoasmioksggkm; uogkcsaewswoaosw: $uamcoiueqaamsqma = __("\123\x6f\162\x72\x79\x20\171\x6f\165\40\x61\x72\x65\x20\157\165\164\x20\x6f\146\40\x62\x75\x64\147\145\x74\x2c\40\x63\141\156\x20\156\x6f\x74\x20\143\x68\x61\156\x67\x65\40\x74\150\151\x73\x20\x70\x61\x67\145\40\163\164\x61\164\x75\x73\40\164\x6f\x20\141\x63\164\x69\166\145\56\x20\x63\x68\x61\x72\x67\x65\x20\x79\x6f\x75\x72\40\154\151\x63\x65\x6e\163\x65\40\146\162\157\155\x20\x53\x65\164\164\151\156\x67\x73\x20\76\x20\104\141\163\x68\x62\x6f\141\162\x64\x20\76\40\x4c\151\x63\145\156\163\145", PR__MDL__OPTIMIZATION); miqmoasmioksggkm: eqemoayymokeqaqi: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); } oqsecqsucukywaee: iqamwyasyoqsugeu: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } public function cssaamgmuamuqeug($ekuqiqmikiicgoss, $sqeykgyoooqysmca, $gaeqamemwmwsyukm = 0) : array { $ocqawgquwsqioses = []; $cwwmimsuyiesweye = ManipulateArray::get($ekuqiqmikiicgoss, self::ayumoauqiqamccyu, []); $ocykusouawesukco = ManipulateArray::get($ekuqiqmikiicgoss, self::ksmykycegeiykemu); if (!$cwwmimsuyiesweye) { goto ayyyeiyaosoacoqm; } foreach ($cwwmimsuyiesweye as $ooiewiwkegguusum) { switch ($ooiewiwkegguusum) { case self::mswmgkkakuooukme: $igqsaukqcqscimok = $this->okgswumokyoaosow(ManipulatePost::waaisqccqacqeium($sqeykgyoooqysmca)); if (!$igqsaukqcqscimok) { goto sguyyaygwyikaggk; } $ocqawgquwsqioses[$sqeykgyoooqysmca] = $igqsaukqcqscimok; sguyyaygwyikaggk: goto omgkuuyoiugcymmy; } kumuckkicykgwqqm: omgkuuyoiugcymmy: moqcomgmwiamuomq: } uiqycwuommmmuowy: ayyyeiyaosoacoqm: $scsyuucsumiwkqqc = ManipulateArray::get($ekuqiqmikiicgoss, self::osqayuckuuyukoiw); $ywmkwiwkosakssii = [self::goqgcigmiawyauai => $gaeqamemwmwsyukm]; switch ($ocykusouawesukco) { case self::ackcaikowcokggsc: $ywmkwiwkosakssii[self::eqomgewoayseioos] = $scsyuucsumiwkqqc; goto aiwygewkmigcwusw; case self::ccyeycyyykwuymsy: $ywmkwiwkosakssii[self::kcaoouwiygwwmiok] = $scsyuucsumiwkqqc; goto aiwygewkmigcwusw; } ekmogkwmcqsykgsq: aiwygewkmigcwusw: $gsgqiucqammycmco = Model::symcgieuakksimmu()->woemiikgwoyowsic($sqeykgyoooqysmca); if (!$gsgqiucqammycmco) { goto ksoawacwkgasqgmk; } $ywmkwiwkosakssii[self::kcaoouwiygwwmiok] = array_merge(ManipulateArray::get($ywmkwiwkosakssii, self::kcaoouwiygwwmiok, []), $gsgqiucqammycmco); ksoawacwkgasqgmk: $suuagcecoyuweoqk = ManipulatePost::ciugwooasaqcywas($sqeykgyoooqysmca, $ywmkwiwkosakssii); foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $igqsaukqcqscimok = $this->okgswumokyoaosow($igqsaukqcqscimok); if (!$igqsaukqcqscimok) { goto cscskwugoamcmqyu; } $ocqawgquwsqioses[$igqsaukqcqscimok[self::mgsccwumkcawaqcy]] = $igqsaukqcqscimok; cscskwugoamcmqyu: wgaqkacekoyiwggi: } yqeqouqemksasmqc: return $ocqawgquwsqioses; } public function ioucsiguaciwkgqc($acqqmqmcquukaqsc, &$iswcokucwmiosiaq) : array { $ksaameoqigiaoigg = []; if ($acqqmqmcquukaqsc) { goto suwsiaeoumiwkiqg; } $iswcokucwmiosiaq = __("\x52\165\x6c\x65\x73\x20\151\x73\40\x65\x6d\x70\164\x79", PR__MDL__OPTIMIZATION); goto yoauoocuckogmsuw; suwsiaeoumiwkiqg: $gqswsiquqaayuakq = $this->ewcikckouwmuqkms(); foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $sqeykgyoooqysmca = ManipulateArray::get($ekuqiqmikiicgoss, self::immuuyigkyiuukwy); $ocqawgquwsqioses = $this->cssaamgmuamuqeug($ekuqiqmikiicgoss, $sqeykgyoooqysmca, $gqswsiquqaayuakq); $uuwmqqqiwksuaise = count($ocqawgquwsqioses); $sqsyqsscqaauwyyy = min($uuwmqqqiwksuaise, $gqswsiquqaayuakq); $ksaameoqigiaoigg[$sqeykgyoooqysmca] = ["\x70\x61\x67\145\x73" => $ocqawgquwsqioses, "\165\x73\x65\144" => $sqsyqsscqaauwyyy, "\164\157\164\x61\x6c" => $uuwmqqqiwksuaise, "\162\145\155\141\151\156" => max($uuwmqqqiwksuaise, $gqswsiquqaayuakq) - $sqsyqsscqaauwyyy]; $gqswsiquqaayuakq -= $sqsyqsscqaauwyyy; jkaemsuwyyoamwim: } emioyucskiowqumg: yoauoocuckogmsuw: return $ksaameoqigiaoigg; } }