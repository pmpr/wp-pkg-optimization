<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c6e7f595dcd             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Page; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use stdClass; class Ajax extends Common { const PREFIX = self::wowuwuigyoceikas . "\x5f\154\151\143\x65\156\x73\x65"; const ucwkciyokauwsyes = self::PREFIX . "\x5f\143\150\x65\x63\x6b\137\x62\165\x64\x67\x65\164"; const ikageqoesymqusss = self::PREFIX . "\x5f\x67\145\x74\137\x70\x6f\x73\x74\163\x5f\x62\x79\x5f\x72\165\154\x65\x73"; const qeyyssmaimicgksm = self::PREFIX . "\x5f\141\144\x64\x5f\160\x61\x67\145\163\137\x62\x79\x5f\162\x75\154\x65\x73"; const awqksmkmsquoymem = self::PREFIX . "\x5f\x63\x68\x61\x6e\x67\145\137\x70\x61\147\x65\137\163\x74\x61\164\x75\x73"; const ygggeyeauuuaqwou = self::wowuwuigyoceikas . "\137\156\145\170\x74\137\143\150\145\x63\153\137\x62\165\144\147\x65\164"; const myikkigscysoykgy = ["\x67\145\164\x5f\x70\157\x73\164\163" => self::ikageqoesymqusss, "\141\144\144\137\160\x61\147\145\x73" => self::qeyyssmaimicgksm, "\x63\150\x65\x63\x6b\137\142\x75\x64\147\x65\x74" => self::ucwkciyokauwsyes, "\x63\150\x61\x6e\x67\145\x5f\x73\x74\141\164\165\163" => self::awqksmkmsquoymem]; protected ?API $api = null; public function __construct() { $this->api = API::symcgieuakksimmu(); parent::__construct(); } public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::ucwkciyokauwsyes, [$this, "\x71\x77\x6d\x77\145\x77\151\x71\145\143\x77\x69\x65\x6f\165\145"])->koaegcswmcqsiykq(self::ikageqoesymqusss, [$this, "\165\x79\x65\143\x79\163\x6f\163\x61\163\171\x6d\x79\171\x75\x67"])->koaegcswmcqsiykq(self::qeyyssmaimicgksm, [$this, "\x75\x67\147\167\x63\x71\165\155\157\141\163\x73\x65\163\165\x65"])->koaegcswmcqsiykq(self::awqksmkmsquoymem, [$this, "\143\171\x73\x6d\x63\x79\x63\153\165\x75\x65\157\x61\151\x61\x67"]); parent::wigskegsqequoeks(); } public function auamgqiwisysomsa() : ?API { return $this->api; } public function qwmwewiqecwieoue() { $uuyoeicyoayimaoa = 1; $kigowwqauiumummw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto gcqssckowmywoesw; } $ccosicygoaweskom = DecoratorOption::get(self::ygggeyeauuuaqwou, false); if (!$ccosicygoaweskom || ManipulateDatetime::wguceomqgwouoyks($ccosicygoaweskom)) { goto icoiqskygugkgmkm; } $uamcoiueqaamsqma = sprintf(__("\120\154\145\141\163\145\40\164\x72\171\40\x61\x67\141\x69\x6e\x20\141\146\164\145\x72\x20\x25\163\x20\150\x6f\x75\x72", PR__PKG__OPTIMIZATION), $this->msywmyaoqmaegsuy($uuyoeicyoayimaoa)); goto kocaieyauyiqmyiy; icoiqskygugkgmkm: $kigowwqauiumummw = $this->yoeoaweeseqiyesg($uamcoiueqaamsqma); if (!$kigowwqauiumummw) { goto maguoggkqamaiuag; } DecoratorOption::update(self::ygggeyeauuuaqwou, date("\x59\55\x6d\55\x64\40\110\72\151\x3a\x73", strtotime("\x2b{$uuyoeicyoayimaoa}\40\150\x6f\x75\x72"))); maguoggkqamaiuag: kocaieyauyiqmyiy: gcqssckowmywoesw: $this->uaggqsoeugksgooc($kigowwqauiumummw, $uamcoiueqaamsqma); } public function uyecysosasymyyug() { $occymigcemkqucuw = false; $keccaugmemegoimu = []; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto ewsigoeswimiueqe; } $suuagcecoyuweoqk = []; $acqqmqmcquukaqsc = ManipulateServer::ayueggmoqeeukqmq("\x72\x75\154\x65\x73", []); $keccaugmemegoimu = $this->ioucsiguaciwkgqc($acqqmqmcquukaqsc, $uamcoiueqaamsqma); foreach ($keccaugmemegoimu as $igqsaukqcqscimok) { $sqsyqsscqaauwyyy = ManipulateArray::get($igqsaukqcqscimok, "\x75\163\x65\x64"); $ocqawgquwsqioses = ManipulateArray::unset($igqsaukqcqscimok, "\160\x61\147\x65\x73"); if (!($sqsyqsscqaauwyyy > 0 && $ocqawgquwsqioses)) { goto igmawmwssyskqqag; } $suuagcecoyuweoqk = array_merge($suuagcecoyuweoqk, array_slice($ocqawgquwsqioses, 0, $sqsyqsscqaauwyyy)); igmawmwssyskqqag: cuayqmasemsqsume: } eekkcooqswqouoei: if ($suuagcecoyuweoqk) { goto iomwkkieqcswkkaw; } $uamcoiueqaamsqma = __("\x4e\157\40\x72\145\163\165\154\164\x20\x66\157\x75\156\x64\x20\164\x6f\40\163\x68\157\167\x2c\40\160\154\x65\141\163\145\40\143\150\x61\x6e\x67\145\40\x72\165\154\x65\x73\x20\141\156\144\40\164\x72\x79\x20\x61\x67\x61\151\156\x2e", PR__PKG__OPTIMIZATION); goto eussqkkimciywios; iomwkkieqcswkkaw: $occymigcemkqucuw = true; $keccaugmemegoimu["\x6c\151\163\x74"] = $this->iuygowkemiiwqmiw("\164\141\x62\x6c\145", ["\x69\164\145\x6d\163" => $suuagcecoyuweoqk, "\141\143\x74\151\157\156\x73" => ["\x72\145\x6d\157\x76\x65" => ["\x74\151\164\154\145" => __("\x52\145\x6d\x6f\166\145", PR__PKG__OPTIMIZATION), "\151\x63\x6f\x6e" => IconFontawesomeInterface::cugwqwigakiwyiuk, "\x61\x74\164\162\163" => ["\x63\x6c\x61\x73\163" => "\162\x75\x6c\x65\55\x72\x65\x6d\157\166\x65\x2d\x61\x63\164\151\x6f\156\x20\x62\165\x74\164\157\156"]]], "\164\151\x74\x6c\145\x73" => ["\164\151\x74\154\145" => __("\x54\151\164\154\x65", PR__PKG__OPTIMIZATION), "\x70\141\147\x65\137\164\x79\x70\145" => __("\120\141\x67\x65\40\124\x79\x70\145", PR__PKG__OPTIMIZATION), "\x61\143\164\x69\x6f\x6e\x73" => __("\101\x63\164\151\x6f\x6e\x73", PR__PKG__OPTIMIZATION)]]); eussqkkimciywios: ewsigoeswimiueqe: if ($occymigcemkqucuw) { goto gaskcgoeywuyukke; } $keccaugmemegoimu = $uamcoiueqaamsqma; gaskcgoeywuyukke: $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } public function uggwcqumoassesue() { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto ociesuicgmkekcue; } $eciuecguuowmeyqg = []; $ocqawgquwsqioses = ManipulateServer::ayueggmoqeeukqmq(self::yusuiaeueqwieqqq, []); $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $gqswsiquqaayuakq = $this->ewcikckouwmuqkms(); if ($ocqawgquwsqioses && is_array($ocqawgquwsqioses)) { goto igyesgemqesackws; } $uamcoiueqaamsqma = __("\x50\141\147\145\x20\154\x69\163\x74\x20\x69\x73\x20\145\155\x70\164\171\x2c\40\x70\154\x65\141\163\145\40\x72\145\x64\145\146\x69\x6e\x65\x20\160\x61\147\x65\x73\x2e", PR__PKG__OPTIMIZATION); goto wiaymoucakyaikii; igyesgemqesackws: foreach ($ocqawgquwsqioses as $momcykaoccoymeig => $suaemuyiacqyugsm) { if (!($momcykaoccoymeig >= $gqswsiquqaayuakq)) { goto ksiwgckusukisueg; } goto gqaqamewqeaqwcia; ksiwgckusukisueg: $sqeykgyoooqysmca = ManipulateArray::get($suaemuyiacqyugsm, self::squoamkioomemiyi); $ccamueccusigaaio = ManipulateArray::get($suaemuyiacqyugsm, self::mgsccwumkcawaqcy); if (!($ccamueccusigaaio && $sqeykgyoooqysmca)) { goto ceaamccscgcmqgka; } $myagqecycsaiyqsk = $jwsqucqyaoaasykk->syoquewuemwigaaw($ccamueccusigaaio, $sqeykgyoooqysmca); $icwicymcioeyeyek = []; if ($myagqecycsaiyqsk) { goto sgkqgucguyccaaki; } $icwicymcioeyeyek = [self::squoamkioomemiyi => $sqeykgyoooqysmca, self::iiooageieusuyomy => $jwsqucqyaoaasykk::cwoackywkgsameww, self::mgsccwumkcawaqcy => $ccamueccusigaaio, self::ciywsqoeiymemsys => self::eqewsqmqmsiocaeg]; sgkqgucguyccaaki: if (!$icwicymcioeyeyek) { goto ycecaauekkiqacuu; } if ($this->auamgqiwisysomsa()->auuqggkaeoomcksu($sqeykgyoooqysmca, $ccamueccusigaaio, $uamcoiueqaamsqma, $kgicwkyskyemksca)) { goto sayqggaieocmskko; } switch ($kgicwkyskyemksca) { case "\157\x75\x74\137\157\x66\x5f\x62\165\x64\147\x65\164": if ($momcykaoccoymeig == 0) { goto ccgsycueagwegqeu; } $uamcoiueqaamsqma = sprintf(__("\x25\x73\40\x6f\146\x20\x79\x6f\x75\162\40\162\145\x71\165\x65\163\x74\145\144\x20\160\141\x67\x65\x73\40\x61\x64\144\x65\x64\54\40\x74\x68\145\x20\162\x65\x6d\x61\151\156\x73\x20\x61\x72\x65\x20\156\157\x74\x20\141\x6c\x6c\157\x77\40\164\x6f\40\141\144\x64\x2e", PR__PKG__OPTIMIZATION), $this->msywmyaoqmaegsuy($momcykaoccoymeig)); goto gmeiuoeewucukque; ccgsycueagwegqeu: $uamcoiueqaamsqma = __("\x53\x6f\162\162\171\x2c\x20\171\157\x75\162\x20\x72\x65\x71\165\145\163\164\x65\x64\x20\x70\162\157\143\x65\x73\x73\x20\164\145\162\155\x69\156\x61\164\x65\144\x2c\x20\142\x65\143\x61\x75\163\145\40\x79\157\165\40\141\162\x65\40\157\x75\x74\x20\157\146\40\x62\165\x64\x67\x65\164\x2e", PR__PKG__OPTIMIZATION); gmeiuoeewucukque: goto cmsiuimsiycomyay; } qmqmskywcgiqgygm: cmsiuimsiycomyay: goto gqaqamewqeaqwcia; goto qmguoqeawegcoeoa; sayqggaieocmskko: $sogksuscggsicmac = $jwsqucqyaoaasykk->gscuuyuyauokoyuo($icwicymcioeyeyek); if (!ManipulateArray::get($sogksuscggsicmac, self::ckcawaoawwioqecq)) { goto omuemegmkesqgwys; } $eciuecguuowmeyqg[] = ManipulateArray::get($sogksuscggsicmac, $jwsqucqyaoaasykk->kumuygiiqswoyasy()); goto geyiosucqswaeasw; omuemegmkesqgwys: $uamcoiueqaamsqma .= print_r(ManipulateArray::get($sogksuscggsicmac, self::iwyueouqaqegmcas), true); geyiosucqswaeasw: qmguoqeawegcoeoa: ycecaauekkiqacuu: ceaamccscgcmqgka: okuqsqaiwwiigmyu: } gqaqamewqeaqwcia: if (!$eciuecguuowmeyqg) { goto omumkeywqqogwwue; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\164\x5f\160\165\162\147\x65\x5f\x70\141\147\x65\163"), $eciuecguuowmeyqg); omumkeywqqogwwue: wiaymoucakyaikii: ociesuicgmkekcue: if ($uamcoiueqaamsqma) { goto ymucaguacemwsgsi; } $uamcoiueqaamsqma = __("\120\141\147\x65\x73\40\x61\x64\x64\145\144\x20\x73\x75\143\x63\145\x73\163\x66\x75\x6c\154\x79\56", PR__PKG__OPTIMIZATION); $occymigcemkqucuw = true; ymucaguacemwsgsi: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } public function cysmcyckuueoaiag() { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto uoewiggumomegksg; } $suaemuyiacqyugsm = ManipulateServer::ayueggmoqeeukqmq("\160\x61\x67\x65\137\151\x64"); $iueymcwwscwqkiyq = ManipulateServer::ayueggmoqeeukqmq("\160\141\x67\145\x5f\163\164\x61\164\165\163"); if ($suaemuyiacqyugsm && $iueymcwwscwqkiyq) { goto yqqseqskcqeqkacm; } $uamcoiueqaamsqma = __("\x6d\151\163\x73\x69\156\147\40\160\x61\162\141\155\x65\164\x65\162\54\x20\x72\x65\x71\165\145\x73\x74\x20\x69\163\x20\156\x6f\x74\40\x76\141\x6c\x69\144\x2e", PR__PKG__OPTIMIZATION); goto ywokggauuiosegog; yqqseqskcqeqkacm: try { $meywaqqsugaoeyys = Model::symcgieuakksimmu(); $wkawwaegamqisugs = $meywaqqsugaoeyys->akkkoiiymmamsauc($suaemuyiacqyugsm); if ($wkawwaegamqisugs instanceof stdClass) { goto oqgymyiwckkwueuw; } $uamcoiueqaamsqma = __("\x52\x65\x71\165\x69\162\145\40\x70\x61\x72\141\x6d\145\x74\x65\162\40\156\x6f\x74\x20\146\x6f\165\156\144\54\40\x72\x65\x6c\157\x61\x64\40\160\x61\x67\145\x20\141\156\144\40\x74\x72\171\40\x61\x67\141\x69\x6e\56", PR__PKG__OPTIMIZATION); goto qywkykqkeeuccoui; oqgymyiwckkwueuw: if (ManipulateArray::get($wkawwaegamqisugs, self::ciywsqoeiymemsys) === self::wiewguakgwmoqaea && $this->ewcikckouwmuqkms() <= 0) { goto gaouaiemokqqgssw; } if (!$meywaqqsugaoeyys->ayakoikewusskayc($wkawwaegamqisugs, $iueymcwwscwqkiyq, $uamcoiueqaamsqma, $kgicwkyskyemksca)) { goto qiikwossequwiuom; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\137\x70\x75\x72\x67\145\137\x70\141\147\x65"), $suaemuyiacqyugsm); $occymigcemkqucuw = true; qiikwossequwiuom: goto wqwmuuicoqigqwyc; gaouaiemokqqgssw: $uamcoiueqaamsqma = __("\123\x6f\162\x72\171\40\171\157\x75\x20\141\x72\145\40\x6f\165\x74\x20\157\x66\40\142\165\144\x67\x65\x74\x2c\40\143\x61\156\40\x6e\x6f\x74\x20\143\150\141\156\147\145\40\x74\x68\x69\163\x20\x70\141\147\145\x20\x73\164\141\x74\x75\163\x20\164\157\40\x61\x63\x74\151\x76\145\56\40\143\150\x61\x72\x67\x65\x20\x79\157\165\162\40\154\x69\x63\x65\x6e\x73\x65\40\146\162\x6f\x6d\x20\123\145\x74\x74\x69\156\x67\163\40\x3e\40\104\141\x73\150\142\157\x61\x72\x64\x20\76\x20\x4c\151\143\x65\x6e\163\145", PR__PKG__OPTIMIZATION); wqwmuuicoqigqwyc: qywkykqkeeuccoui: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); } ywokggauuiosegog: uoewiggumomegksg: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } public function cssaamgmuamuqeug($ekuqiqmikiicgoss, $sqeykgyoooqysmca, $gaeqamemwmwsyukm = 0) : array { $ocqawgquwsqioses = []; $cwwmimsuyiesweye = ManipulateArray::get($ekuqiqmikiicgoss, self::ayumoauqiqamccyu, []); $ocykusouawesukco = ManipulateArray::get($ekuqiqmikiicgoss, self::ksmykycegeiykemu); if (!$cwwmimsuyiesweye) { goto kiskwawumeiiieuk; } foreach ($cwwmimsuyiesweye as $ooiewiwkegguusum) { switch ($ooiewiwkegguusum) { case self::mswmgkkakuooukme: $igqsaukqcqscimok = $this->okgswumokyoaosow(ManipulatePost::waaisqccqacqeium($sqeykgyoooqysmca)); if (!$igqsaukqcqscimok) { goto kwasqmcyiswoaiuu; } $ocqawgquwsqioses[$sqeykgyoooqysmca] = $igqsaukqcqscimok; kwasqmcyiswoaiuu: goto syisomgawcsqeemk; } asoecuscmsyusmkg: syisomgawcsqeemk: ugkwqaywmwqucoeo: } sockocsycmkaeosg: kiskwawumeiiieuk: $scsyuucsumiwkqqc = ManipulateArray::get($ekuqiqmikiicgoss, self::osqayuckuuyukoiw); $ywmkwiwkosakssii = [self::goqgcigmiawyauai => $gaeqamemwmwsyukm]; switch ($ocykusouawesukco) { case self::ackcaikowcokggsc: $ywmkwiwkosakssii[self::eqomgewoayseioos] = $scsyuucsumiwkqqc; goto oaqeoqsksuyyggmg; case self::ccyeycyyykwuymsy: $ywmkwiwkosakssii[self::kcaoouwiygwwmiok] = $scsyuucsumiwkqqc; goto oaqeoqsksuyyggmg; } kkmuuoscccmokkiw: oaqeoqsksuyyggmg: $gsgqiucqammycmco = Model::symcgieuakksimmu()->woemiikgwoyowsic($sqeykgyoooqysmca); if (!$gsgqiucqammycmco) { goto awuwuuuagqysukku; } $ywmkwiwkosakssii[self::kcaoouwiygwwmiok] = array_merge(ManipulateArray::get($ywmkwiwkosakssii, self::kcaoouwiygwwmiok, []), $gsgqiucqammycmco); awuwuuuagqysukku: $suuagcecoyuweoqk = ManipulatePost::ciugwooasaqcywas($sqeykgyoooqysmca, $ywmkwiwkosakssii); foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $igqsaukqcqscimok = $this->okgswumokyoaosow($igqsaukqcqscimok); if (!$igqsaukqcqscimok) { goto mcqwuawosciucemq; } $ocqawgquwsqioses[$igqsaukqcqscimok[self::mgsccwumkcawaqcy]] = $igqsaukqcqscimok; mcqwuawosciucemq: aqekkeqmmewoyawu: } miugmimciywcgswm: return $ocqawgquwsqioses; } public function ioucsiguaciwkgqc($acqqmqmcquukaqsc, &$iswcokucwmiosiaq) : array { $ksaameoqigiaoigg = []; if ($acqqmqmcquukaqsc) { goto csaksaisgawusswg; } $iswcokucwmiosiaq = __("\122\x75\x6c\x65\x73\x20\x69\163\x20\x65\155\160\x74\171", PR__PKG__OPTIMIZATION); goto ecgwgamiseokmise; csaksaisgawusswg: $gqswsiquqaayuakq = $this->ewcikckouwmuqkms(); foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $sqeykgyoooqysmca = ManipulateArray::get($ekuqiqmikiicgoss, self::immuuyigkyiuukwy); $ocqawgquwsqioses = $this->cssaamgmuamuqeug($ekuqiqmikiicgoss, $sqeykgyoooqysmca, $gqswsiquqaayuakq); $uuwmqqqiwksuaise = count($ocqawgquwsqioses); $sqsyqsscqaauwyyy = min($uuwmqqqiwksuaise, $gqswsiquqaayuakq); $ksaameoqigiaoigg[$sqeykgyoooqysmca] = ["\x70\141\147\x65\163" => $ocqawgquwsqioses, "\165\163\x65\144" => $sqsyqsscqaauwyyy, "\164\x6f\164\141\154" => $uuwmqqqiwksuaise, "\x72\x65\x6d\x61\x69\156" => max($uuwmqqqiwksuaise, $gqswsiquqaayuakq) - $sqsyqsscqaauwyyy]; $gqswsiquqaayuakq -= $sqsyqsscqaauwyyy; maggecymmmesqmqs: } emeeocqaisksyioq: ecgwgamiseokmise: return $ksaameoqigiaoigg; } }
