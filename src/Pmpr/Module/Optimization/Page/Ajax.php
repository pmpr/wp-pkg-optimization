<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e6b0646cf09             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use stdClass; class Ajax extends Common { const yccmkuqymgwukyoy = self::wowuwuigyoceikas . "\x5f\154\x69\143\145\156\x73\145"; const ucwkciyokauwsyes = self::yccmkuqymgwukyoy . "\137\143\x68\x65\x63\153\137\x62\x75\x64\x67\x65\164"; const kgmmcocskmwmmyse = self::yccmkuqymgwukyoy . "\x5f\143\150\x65\x63\153\x5f\x70\x61\147\x65\x5f\x73\164\141\x74\x75\x73"; const ikageqoesymqusss = self::yccmkuqymgwukyoy . "\137\147\145\x74\x5f\160\157\163\x74\163\137\142\171\x5f\x72\x75\x6c\x65\163"; const qeyyssmaimicgksm = self::yccmkuqymgwukyoy . "\137\141\144\144\x5f\160\x61\x67\x65\x73\137\142\x79\x5f\162\x75\x6c\145\163"; const awqksmkmsquoymem = self::yccmkuqymgwukyoy . "\x5f\x63\x68\x61\156\147\145\x5f\160\x61\x67\x65\x5f\x73\x74\x61\164\165\163"; const ygggeyeauuuaqwou = self::wowuwuigyoceikas . "\x5f\156\x65\170\x74\x5f\143\150\145\143\153\x5f\142\165\144\x67\x65\164"; const myikkigscysoykgy = ["\x67\145\x74\x5f\x70\157\x73\x74\163" => self::ikageqoesymqusss, "\141\x64\x64\137\x70\x61\147\x65\x73" => self::qeyyssmaimicgksm, "\x63\150\x65\x63\153\137\x73\164\x61\164\165\x73" => self::kgmmcocskmwmmyse, "\x63\150\x65\143\x6b\x5f\x62\x75\144\147\145\x74" => self::ucwkciyokauwsyes, "\x63\x68\x61\156\147\x65\x5f\x73\x74\141\x74\x75\163" => self::awqksmkmsquoymem]; protected ?API $api = null; public function __construct() { $this->api = API::symcgieuakksimmu(); parent::__construct(); } public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::ucwkciyokauwsyes, [$this, "\x71\x77\x6d\167\145\x77\x69\x71\x65\x63\x77\x69\145\x6f\165\x65"])->koaegcswmcqsiykq(self::kgmmcocskmwmmyse, [$this, "\161\145\171\x75\x63\145\x65\141\x65\171\x67\x65\163\x75\143\141"])->koaegcswmcqsiykq(self::ikageqoesymqusss, [$this, "\x75\x79\145\143\171\x73\x6f\163\x61\x73\171\155\171\x79\165\147"])->koaegcswmcqsiykq(self::qeyyssmaimicgksm, [$this, "\x75\147\x67\x77\x63\161\165\155\157\141\x73\x73\145\x73\x75\x65"])->koaegcswmcqsiykq(self::awqksmkmsquoymem, [$this, "\x63\x79\x73\x6d\x63\x79\143\153\x75\x75\145\x6f\x61\x69\141\147"]); } public function auamgqiwisysomsa() : ?API { return $this->api; } public function qeyuceeaeygesuca() { $kigowwqauiumummw = false; if (!$this->miueaekaaugaccmg($keccaugmemegoimu)) { goto ywoyioqqyuocoygk; } $iqaosyayeiuaisqi = ManipulateServer::yyqgamuwwakgciey(self::iiooageieusuyomy); $migiiksoiymissge = ManipulateServer::yyqgamuwwakgciey(self::sauwwsocmukoaayu); if ($iqaosyayeiuaisqi && $migiiksoiymissge) { goto mwqcykaeywsmoumm; } $keccaugmemegoimu = __("\x6c\145\166\145\154\40\141\156\x64\40\x70\145\x72\x6d\141\x6c\151\156\153\40\x69\x73\x20\162\x65\161\165\x69\162\x65\40\x70\x61\162\x61\x6d\145\x74\x65\162\163\56", PR__MDL__OPTIMIZATION); goto awgmyaycugswmwae; mwqcykaeywsmoumm: $iueymcwwscwqkiyq = $this->eaoemakycwuywqsy($migiiksoiymissge); if (!(self::kywgiyyageyqwuuc !== $iueymcwwscwqkiyq)) { goto kkwqmoeeqygoimwg; } $keccaugmemegoimu = $this->ccioymuswicowwkw($migiiksoiymissge); kkwqmoeeqygoimwg: $kigowwqauiumummw = true; awgmyaycugswmwae: ywoyioqqyuocoygk: $this->uaggqsoeugksgooc($kigowwqauiumummw, $keccaugmemegoimu); } public function qwmwewiqecwieoue() { $uuyoeicyoayimaoa = 1; $kigowwqauiumummw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto iwcmgioeaiyuacwi; } $ccosicygoaweskom = DecoratorOption::get(self::ygggeyeauuuaqwou, false); if (!$ccosicygoaweskom || ManipulateDatetime::wguceomqgwouoyks($ccosicygoaweskom)) { goto aycqgowuwagcgque; } $uamcoiueqaamsqma = sprintf(__("\x50\x6c\145\141\163\145\40\164\162\x79\x20\x61\x67\x61\151\x6e\40\141\x66\164\x65\x72\x20\x25\x73\40\x68\x6f\165\x72", PR__MDL__OPTIMIZATION), $this->msywmyaoqmaegsuy($uuyoeicyoayimaoa)); goto icuukwkwqeoogyae; aycqgowuwagcgque: $kigowwqauiumummw = $this->yoeoaweeseqiyesg($uamcoiueqaamsqma); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\137\165\160\x64\141\164\x65\137\162\145\x6d\x6f\x74\x65\137\x61\160\x70\163")); if (!$kigowwqauiumummw) { goto iauwkeeaqsgweeoo; } DecoratorOption::update(self::ygggeyeauuuaqwou, date("\x59\55\x6d\55\x64\x20\x48\72\151\72\x73", strtotime("\53{$uuyoeicyoayimaoa}\40\150\x6f\x75\162"))); iauwkeeaqsgweeoo: icuukwkwqeoogyae: iwcmgioeaiyuacwi: $this->uaggqsoeugksgooc($kigowwqauiumummw, $uamcoiueqaamsqma); } public function uyecysosasymyyug() { $occymigcemkqucuw = false; $keccaugmemegoimu = []; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto kisccmsaieigisiu; } $suuagcecoyuweoqk = []; $acqqmqmcquukaqsc = ManipulateServer::ayueggmoqeeukqmq("\162\165\x6c\145\163", []); $keccaugmemegoimu = $this->ioucsiguaciwkgqc($acqqmqmcquukaqsc, $uamcoiueqaamsqma); foreach ($keccaugmemegoimu as $igqsaukqcqscimok) { $sqsyqsscqaauwyyy = ManipulateArray::get($igqsaukqcqscimok, "\165\x73\x65\x64"); $ocqawgquwsqioses = ManipulateArray::unset($igqsaukqcqscimok, "\160\x61\x67\x65\163"); if (!($sqsyqsscqaauwyyy > 0 && $ocqawgquwsqioses)) { goto gcogomgmqcgkeceg; } $suuagcecoyuweoqk = array_merge($suuagcecoyuweoqk, array_slice($ocqawgquwsqioses, 0, $sqsyqsscqaauwyyy)); gcogomgmqcgkeceg: ikqagqacuwcgwmqy: } iyyaiuccouqowyga: if ($suuagcecoyuweoqk) { goto cksomiiqscosigke; } $uamcoiueqaamsqma = __("\116\x6f\40\x72\145\x73\165\x6c\164\x20\x66\x6f\165\156\144\40\x74\157\40\x73\150\157\x77\54\x20\160\154\x65\x61\x73\145\40\143\150\x61\x6e\147\x65\40\x72\165\x6c\x65\x73\40\x61\x6e\144\x20\x74\x72\171\40\141\147\141\151\x6e\56", PR__MDL__OPTIMIZATION); goto ugmukcwgcioqgywy; cksomiiqscosigke: $occymigcemkqucuw = true; $keccaugmemegoimu["\x6c\151\163\164"] = $this->iuygowkemiiwqmiw("\x74\141\142\x6c\145", ["\151\164\145\x6d\x73" => $suuagcecoyuweoqk, "\x61\x63\164\x69\157\156\x73" => ["\162\x65\155\157\166\145" => ["\x74\x69\164\154\145" => __("\x52\x65\x6d\157\x76\x65", PR__MDL__OPTIMIZATION), "\151\143\x6f\x6e" => IconFontawesomeInterface::cugwqwigakiwyiuk, "\141\x74\x74\162\x73" => ["\x63\154\141\x73\163" => "\162\x75\x6c\x65\x2d\x72\x65\155\157\166\x65\55\x61\143\x74\x69\157\156\x20\142\165\x74\164\157\156"]]], "\x74\x69\x74\x6c\x65\163" => ["\x74\x69\x74\x6c\x65" => __("\x54\151\x74\154\145", PR__MDL__OPTIMIZATION), "\x70\141\x67\145\x5f\x74\x79\x70\145" => __("\x50\141\x67\145\40\124\171\x70\x65", PR__MDL__OPTIMIZATION), "\x61\143\x74\x69\157\x6e\x73" => __("\101\x63\x74\151\x6f\x6e\163", PR__MDL__OPTIMIZATION)]]); ugmukcwgcioqgywy: kisccmsaieigisiu: if ($occymigcemkqucuw) { goto euoscysqgugsqewc; } $keccaugmemegoimu = $uamcoiueqaamsqma; euoscysqgugsqewc: $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } public function uggwcqumoassesue() { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto qykcggwgkweasuii; } $eciuecguuowmeyqg = []; $ocqawgquwsqioses = ManipulateServer::ayueggmoqeeukqmq(self::yusuiaeueqwieqqq, []); $gqswsiquqaayuakq = $this->ewcikckouwmuqkms(); if ($ocqawgquwsqioses && is_array($ocqawgquwsqioses)) { goto sukcyismwageqgok; } $uamcoiueqaamsqma = __("\120\x61\147\x65\x20\x6c\151\x73\164\x20\151\x73\40\x65\155\160\164\x79\54\40\160\x6c\145\x61\x73\145\40\162\x65\144\145\146\151\156\145\x20\x70\141\x67\x65\163\x2e", PR__MDL__OPTIMIZATION); goto ukmgwuiqwgyiouec; sukcyismwageqgok: $camgsweqsqeqkcue = $this->auamgqiwisysomsa(); $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); if ($camgsweqsqeqkcue && $jwsqucqyaoaasykk) { goto eomqeimoequmagum; } $uamcoiueqaamsqma = $this->gcsweumukyckmgik($this->aqgegcykekmuggsu()); goto cqkyumayoemqsueu; eomqeimoequmagum: $iakeqscciwukguku = []; foreach ($ocqawgquwsqioses as $momcykaoccoymeig => $suaemuyiacqyugsm) { if (!($momcykaoccoymeig >= $gqswsiquqaayuakq)) { goto eeomcmuiqwgwwuqk; } goto mwwygasiagaqsimo; eeomcmuiqwgwwuqk: $sqeykgyoooqysmca = ManipulateArray::get($suaemuyiacqyugsm, self::squoamkioomemiyi); $ccamueccusigaaio = ManipulateArray::get($suaemuyiacqyugsm, self::mgsccwumkcawaqcy); if (!($ccamueccusigaaio && $sqeykgyoooqysmca && !$jwsqucqyaoaasykk->syoquewuemwigaaw($ccamueccusigaaio, $sqeykgyoooqysmca))) { goto mseokuecmeoyoggk; } $iakeqscciwukguku["{$sqeykgyoooqysmca}\55{$ccamueccusigaaio}"] = [self::squoamkioomemiyi => $sqeykgyoooqysmca, self::iiooageieusuyomy => $jwsqucqyaoaasykk::cwoackywkgsameww, self::mgsccwumkcawaqcy => $ccamueccusigaaio, self::ciywsqoeiymemsys => self::eqewsqmqmsiocaeg]; mseokuecmeoyoggk: wucacaegysmiusai: } mwwygasiagaqsimo: $ukgsssmgkskkuoow = array_chunk($iakeqscciwukguku, 30, true); foreach ($ukgsssmgkskkuoow as $wegougocoeeookww) { if ($susecoucqwaskimo = $camgsweqsqeqkcue->eqgwiuussiawqewi($wegougocoeeookww, $iswcokucwmiosiaq)) { goto oysyuiqmsokoykaq; } if ($iswcokucwmiosiaq) { goto misiasooemyskoay; } goto omqyuuomwywmqeiq; oysyuiqmsokoykaq: foreach ($wegougocoeeookww as $uusmaiomayssaecw => $suaemuyiacqyugsm) { if (!(isset($susecoucqwaskimo[$uusmaiomayssaecw]) && $susecoucqwaskimo[$uusmaiomayssaecw])) { goto aeockieewgkequae; } $sogksuscggsicmac = $jwsqucqyaoaasykk->gscuuyuyauokoyuo($suaemuyiacqyugsm); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto ycaqooeeseougumo; } $camgsweqsqeqkcue->kgyokgoeqoaewyye($suaemuyiacqyugsm, $uamcoiueqaamsqma, $kgicwkyskyemksca); goto eceeoiwuagocweus; ycaqooeeseougumo: $eciuecguuowmeyqg[] = ManipulateArray::get($sogksuscggsicmac, $jwsqucqyaoaasykk->kumuygiiqswoyasy()); eceeoiwuagocweus: aeockieewgkequae: iigmgswcogqemgao: } esgyqksmcukeuwyk: goto omqyuuomwywmqeiq; misiasooemyskoay: goto uookseqsmsqgweuy; omqyuuomwywmqeiq: yeaqsiqgakskoykg: } uookseqsmsqgweuy: cqkyumayoemqsueu: if (!$eciuecguuowmeyqg) { goto ksqmcugkcmsooeaw; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\137\x70\x75\162\x67\x65\137\160\141\147\145\163"), $eciuecguuowmeyqg); $occymigcemkqucuw = true; $uamcoiueqaamsqma = sprintf(__("\x25\x73\40\x70\141\147\x65\x73\40\x6f\x75\x74\x20\157\146\x20\x25\x73\40\x70\x61\x67\145\163\40\x61\x64\x64\x65\x64\40\163\x75\143\x63\x65\163\163\146\165\x6c\154\171\x2e", PR__MDL__OPTIMIZATION), $this->msywmyaoqmaegsuy(count($eciuecguuowmeyqg)), $this->msywmyaoqmaegsuy(count($ocqawgquwsqioses))); ksqmcugkcmsooeaw: ukmgwuiqwgyiouec: qykcggwgkweasuii: if (!(!$uamcoiueqaamsqma && !$occymigcemkqucuw)) { goto geoiegikocwmwosi; } $uamcoiueqaamsqma = __("\x53\x6f\x6d\x65\164\150\x69\156\x67\x20\x77\x72\157\156\147\40\x6f\x6e\x20\160\x61\x67\145\40\x61\144\x64\x69\x6e\147\x20\x70\x72\x6f\143\145\163\x73\54\40\160\x6c\145\x61\163\x65\x20\x74\x72\x79\40\x61\147\141\151\156\x2e", PR__MDL__OPTIMIZATION); geoiegikocwmwosi: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } public function cysmcyckuueoaiag() { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto isaacywgkascmcsw; } $suaemuyiacqyugsm = ManipulateServer::ayueggmoqeeukqmq("\x70\x61\147\x65\x5f\151\x64"); $iueymcwwscwqkiyq = ManipulateServer::ayueggmoqeeukqmq("\160\x61\x67\x65\137\163\x74\x61\x74\x75\163"); if ($suaemuyiacqyugsm && $iueymcwwscwqkiyq) { goto oyeygeykqwcqoeic; } $uamcoiueqaamsqma = __("\155\x69\x73\x73\151\x6e\x67\40\x70\141\162\141\x6d\145\164\x65\162\54\40\162\x65\161\x75\145\x73\164\40\x69\163\40\156\x6f\164\40\166\141\x6c\151\x64\x2e", PR__MDL__OPTIMIZATION); goto eomcuogskessyicy; oyeygeykqwcqoeic: try { $meywaqqsugaoeyys = Model::symcgieuakksimmu(); $wkawwaegamqisugs = $meywaqqsugaoeyys->akkkoiiymmamsauc($suaemuyiacqyugsm); if ($wkawwaegamqisugs instanceof stdClass) { goto ogciikaecauiwgyk; } $uamcoiueqaamsqma = __("\122\x65\x71\x75\151\x72\145\40\160\x61\x72\x61\x6d\145\x74\x65\162\x20\156\157\164\x20\146\157\x75\x6e\x64\54\40\162\145\154\157\141\144\40\160\141\147\x65\x20\141\x6e\x64\x20\x74\162\171\x20\x61\x67\x61\x69\156\56", PR__MDL__OPTIMIZATION); goto meiqywmwuoogckss; ogciikaecauiwgyk: if ($meywaqqsugaoeyys->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $wkawwaegamqisugs) === self::wiewguakgwmoqaea && $this->ewcikckouwmuqkms() <= 0) { goto eqsuaywswuesuika; } if (!$meywaqqsugaoeyys->ayakoikewusskayc($wkawwaegamqisugs, $iueymcwwscwqkiyq, $uamcoiueqaamsqma, $kgicwkyskyemksca)) { goto wasuquysysmqyegg; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\x5f\160\165\x72\147\145\x5f\x70\141\147\145"), $suaemuyiacqyugsm); $occymigcemkqucuw = true; wasuquysysmqyegg: goto okawiaowosqickgq; eqsuaywswuesuika: $uamcoiueqaamsqma = __("\123\x6f\x72\162\171\x20\171\157\x75\x20\141\x72\x65\40\157\165\164\x20\x6f\146\40\142\165\x64\147\x65\164\54\x20\143\x61\156\x20\156\157\x74\40\143\150\141\x6e\147\x65\40\x74\x68\x69\163\40\160\x61\147\145\x20\x73\164\x61\164\x75\163\x20\164\x6f\40\x61\x63\164\x69\166\145\56\x20\x63\x68\141\162\147\x65\40\171\157\x75\x72\x20\154\151\x63\145\x6e\x73\x65\x20\x66\162\157\155\x20\123\145\164\x74\151\156\147\x73\40\x3e\x20\104\141\x73\150\x62\157\x61\162\x64\40\76\40\114\151\x63\145\x6e\163\x65", PR__MDL__OPTIMIZATION); okawiaowosqickgq: meiqywmwuoogckss: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); } eomcuogskessyicy: isaacywgkascmcsw: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } public function cssaamgmuamuqeug($ekuqiqmikiicgoss, $sqeykgyoooqysmca, $gaeqamemwmwsyukm = 0) : array { $ocqawgquwsqioses = []; $cwwmimsuyiesweye = ManipulateArray::get($ekuqiqmikiicgoss, self::ayumoauqiqamccyu, []); $ocykusouawesukco = ManipulateArray::get($ekuqiqmikiicgoss, self::ksmykycegeiykemu); if (!$cwwmimsuyiesweye) { goto qiiqceousoicgeee; } foreach ($cwwmimsuyiesweye as $ooiewiwkegguusum) { switch ($ooiewiwkegguusum) { case self::mswmgkkakuooukme: $igqsaukqcqscimok = $this->okgswumokyoaosow(ManipulatePost::waaisqccqacqeium($sqeykgyoooqysmca)); if (!$igqsaukqcqscimok) { goto eiegguecasykwmyq; } $ocqawgquwsqioses[$sqeykgyoooqysmca] = $igqsaukqcqscimok; eiegguecasykwmyq: goto ogwwasqkaageiwwi; } sosqgaswegsomgkw: ogwwasqkaageiwwi: iicaisyekagswmey: } quiguyyimiqeqcwa: qiiqceousoicgeee: $scsyuucsumiwkqqc = ManipulateArray::get($ekuqiqmikiicgoss, self::osqayuckuuyukoiw); $ywmkwiwkosakssii = [self::goqgcigmiawyauai => $gaeqamemwmwsyukm]; switch ($ocykusouawesukco) { case self::ackcaikowcokggsc: $ywmkwiwkosakssii[self::eqomgewoayseioos] = $scsyuucsumiwkqqc; goto iaywwgssaoecwmeg; case self::ccyeycyyykwuymsy: $ywmkwiwkosakssii[self::kcaoouwiygwwmiok] = $scsyuucsumiwkqqc; goto iaywwgssaoecwmeg; } maeueeueqoywkiom: iaywwgssaoecwmeg: $gsgqiucqammycmco = Model::symcgieuakksimmu()->woemiikgwoyowsic($sqeykgyoooqysmca); if (!$gsgqiucqammycmco) { goto jyekikocgagcgywq; } $ywmkwiwkosakssii[self::kcaoouwiygwwmiok] = array_merge(ManipulateArray::get($ywmkwiwkosakssii, self::kcaoouwiygwwmiok, []), $gsgqiucqammycmco); jyekikocgagcgywq: $suuagcecoyuweoqk = ManipulatePost::ciugwooasaqcywas($sqeykgyoooqysmca, $ywmkwiwkosakssii); foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $igqsaukqcqscimok = $this->okgswumokyoaosow($igqsaukqcqscimok); if (!$igqsaukqcqscimok) { goto uowiiyqmiaaaaoas; } $ocqawgquwsqioses[$igqsaukqcqscimok[self::mgsccwumkcawaqcy]] = $igqsaukqcqscimok; uowiiyqmiaaaaoas: oeogyayooiwqcmia: } qoiyiuoyamwimusy: return $ocqawgquwsqioses; } public function ioucsiguaciwkgqc($acqqmqmcquukaqsc, &$iswcokucwmiosiaq) : array { $ksaameoqigiaoigg = []; if ($acqqmqmcquukaqsc) { goto sckyiekoceuisqyq; } $iswcokucwmiosiaq = __("\122\165\x6c\x65\163\x20\151\163\40\x65\x6d\160\x74\171", PR__MDL__OPTIMIZATION); goto kusuakkwcuqkcqaw; sckyiekoceuisqyq: $gqswsiquqaayuakq = $this->ewcikckouwmuqkms(); foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $sqeykgyoooqysmca = ManipulateArray::get($ekuqiqmikiicgoss, self::immuuyigkyiuukwy); $ocqawgquwsqioses = $this->cssaamgmuamuqeug($ekuqiqmikiicgoss, $sqeykgyoooqysmca, $gqswsiquqaayuakq); $uuwmqqqiwksuaise = count($ocqawgquwsqioses); $sqsyqsscqaauwyyy = min($uuwmqqqiwksuaise, $gqswsiquqaayuakq); $ksaameoqigiaoigg[$sqeykgyoooqysmca] = ["\x70\x61\147\x65\x73" => $ocqawgquwsqioses, "\x75\x73\x65\144" => $sqsyqsscqaauwyyy, "\164\x6f\x74\141\x6c" => $uuwmqqqiwksuaise, "\162\145\x6d\x61\x69\x6e" => max($uuwmqqqiwksuaise, $gqswsiquqaayuakq) - $sqsyqsscqaauwyyy]; $gqswsiquqaayuakq -= $sqsyqsscqaauwyyy; ooykyoowougqkaso: } vokekoceocuskqsm: kusuakkwcuqkcqaw: return $ksaameoqigiaoigg; } }
