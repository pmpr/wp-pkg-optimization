<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c066895a7f9             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Page; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use stdClass; class Ajax extends Common { const PREFIX = self::wowuwuigyoceikas . "\137\x6c\x69\143\145\x6e\x73\145"; const CHECK_BUDGET = self::PREFIX . "\x5f\143\150\x65\143\x6b\x5f\142\x75\x64\x67\145\164"; const GET_POSTS_BY_RULES = self::PREFIX . "\137\147\x65\x74\x5f\160\157\x73\x74\163\137\x62\171\x5f\162\165\154\145\163"; const ADD_PAGES_BY_RULES = self::PREFIX . "\137\141\144\144\137\x70\x61\147\145\163\x5f\142\171\137\162\165\x6c\145\x73"; const CHANGE_PAGE_STATUS = self::PREFIX . "\x5f\x63\150\x61\156\x67\x65\137\x70\x61\147\145\x5f\163\x74\x61\164\165\163"; const NEXT_CHECK_BUDGET = self::wowuwuigyoceikas . "\x5f\x6e\x65\170\164\137\143\x68\145\x63\x6b\x5f\x62\165\x64\147\x65\x74"; const myikkigscysoykgy = ["\147\145\x74\137\x70\157\x73\x74\163" => self::GET_POSTS_BY_RULES, "\x61\144\x64\x5f\160\141\147\145\163" => self::ADD_PAGES_BY_RULES, "\x63\150\145\143\x6b\137\x62\165\144\147\145\164" => self::CHECK_BUDGET, "\143\150\x61\x6e\x67\145\x5f\x73\x74\141\164\165\x73" => self::CHANGE_PAGE_STATUS]; protected ?API $api = null; public function __construct() { $this->api = API::symcgieuakksimmu(); parent::__construct(); } public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::CHECK_BUDGET, [$this, "\x71\167\155\x77\145\x77\x69\161\145\143\167\151\x65\x6f\165\x65"])->koaegcswmcqsiykq(self::GET_POSTS_BY_RULES, [$this, "\x75\x79\x65\143\171\x73\x6f\x73\x61\x73\x79\155\x79\x79\x75\x67"])->koaegcswmcqsiykq(self::ADD_PAGES_BY_RULES, [$this, "\x75\x67\x67\x77\x63\x71\165\155\x6f\141\x73\163\x65\x73\165\145"])->koaegcswmcqsiykq(self::CHANGE_PAGE_STATUS, [$this, "\x63\x79\163\x6d\143\x79\x63\x6b\x75\165\x65\x6f\141\x69\141\x67"]); parent::wigskegsqequoeks(); } public function auamgqiwisysomsa() : ?API { return $this->api; } public function qwmwewiqecwieoue() { $uuyoeicyoayimaoa = 1; $kigowwqauiumummw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto qoaawmmcqyacokws; } $ccosicygoaweskom = DecoratorOption::get(self::NEXT_CHECK_BUDGET, false); if (!$ccosicygoaweskom || ManipulateDatetime::wguceomqgwouoyks($ccosicygoaweskom)) { goto uugiuqkesegaamqw; } $uamcoiueqaamsqma = sprintf(__("\x50\x6c\145\x61\163\x65\40\164\162\171\40\141\147\141\x69\x6e\40\x61\146\x74\x65\x72\40\x25\x73\40\150\x6f\165\162", PR__PKG__OPTIMIZATION), $this->msywmyaoqmaegsuy($uuyoeicyoayimaoa)); goto ykcmomsiayaymysm; uugiuqkesegaamqw: $kigowwqauiumummw = $this->yoeoaweeseqiyesg($uamcoiueqaamsqma); if (!$kigowwqauiumummw) { goto seyygcwcaogkmaqe; } DecoratorOption::update(self::NEXT_CHECK_BUDGET, date("\x59\55\x6d\x2d\144\x20\x48\x3a\151\x3a\163", strtotime("\x2b{$uuyoeicyoayimaoa}\40\x68\157\165\x72"))); seyygcwcaogkmaqe: ykcmomsiayaymysm: qoaawmmcqyacokws: $this->uaggqsoeugksgooc($kigowwqauiumummw, $uamcoiueqaamsqma); } public function uyecysosasymyyug() { $occymigcemkqucuw = false; $keccaugmemegoimu = []; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto kcwgiwimgqesukqu; } $suuagcecoyuweoqk = []; $acqqmqmcquukaqsc = ManipulateServer::ayueggmoqeeukqmq("\x72\x75\154\145\163", []); $keccaugmemegoimu = $this->ioucsiguaciwkgqc($acqqmqmcquukaqsc, $uamcoiueqaamsqma); foreach ($keccaugmemegoimu as $igqsaukqcqscimok) { $sqsyqsscqaauwyyy = ManipulateArray::get($igqsaukqcqscimok, "\x75\163\145\144"); $ocqawgquwsqioses = ManipulateArray::unset($igqsaukqcqscimok, "\x70\141\x67\145\163"); if (!($sqsyqsscqaauwyyy > 0 && $ocqawgquwsqioses)) { goto eiecgqokmuekaesc; } $suuagcecoyuweoqk = array_merge($suuagcecoyuweoqk, array_slice($ocqawgquwsqioses, 0, $sqsyqsscqaauwyyy)); eiecgqokmuekaesc: cwmuqmoeauqcewoy: } uwyeycaywowwiquu: if ($suuagcecoyuweoqk) { goto ggsugekocmsukuci; } $uamcoiueqaamsqma = __("\116\157\40\162\145\163\165\x6c\164\x20\146\x6f\x75\156\144\40\x74\157\x20\x73\x68\x6f\167\x2c\x20\x70\x6c\145\x61\163\145\40\143\x68\x61\x6e\x67\x65\x20\162\165\154\x65\163\40\x61\x6e\x64\x20\x74\162\171\40\x61\147\141\x69\x6e\x2e", PR__PKG__OPTIMIZATION); goto ceosmkqgqgwsowwg; ggsugekocmsukuci: $occymigcemkqucuw = true; $keccaugmemegoimu["\154\151\x73\164"] = $this->iuygowkemiiwqmiw("\164\141\142\x6c\145", ["\x69\164\x65\155\x73" => $suuagcecoyuweoqk, "\x61\143\164\151\x6f\x6e\163" => ["\162\x65\155\157\x76\145" => ["\164\x69\x74\x6c\x65" => __("\122\x65\x6d\157\166\145", PR__PKG__OPTIMIZATION), "\x69\143\157\156" => IconFontawesomeInterface::ICON_XMARK, "\x61\x74\x74\x72\x73" => ["\x63\154\141\163\x73" => "\x72\165\x6c\x65\x2d\162\x65\155\x6f\x76\x65\55\141\143\164\151\157\156\40\x62\x75\164\x74\157\x6e"]]], "\x74\151\x74\154\145\x73" => ["\164\x69\164\x6c\x65" => __("\124\x69\x74\x6c\x65", PR__PKG__OPTIMIZATION), "\x70\141\x67\x65\137\x74\171\160\145" => __("\x50\141\x67\x65\x20\124\x79\x70\145", PR__PKG__OPTIMIZATION), "\x61\x63\x74\151\x6f\x6e\163" => __("\x41\143\164\151\x6f\156\163", PR__PKG__OPTIMIZATION)]]); ceosmkqgqgwsowwg: kcwgiwimgqesukqu: if ($occymigcemkqucuw) { goto wicuauokauykwoeu; } $keccaugmemegoimu = $uamcoiueqaamsqma; wicuauokauykwoeu: $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } public function uggwcqumoassesue() { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto cuayqmasemsqsume; } $eciuecguuowmeyqg = []; $ocqawgquwsqioses = ManipulateServer::ayueggmoqeeukqmq(self::yusuiaeueqwieqqq, []); $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $gqswsiquqaayuakq = $this->ewcikckouwmuqkms(); if ($ocqawgquwsqioses && is_array($ocqawgquwsqioses)) { goto gcqssckowmywoesw; } $uamcoiueqaamsqma = __("\x50\x61\147\x65\x20\x6c\151\163\164\40\151\163\40\145\155\x70\164\171\x2c\x20\160\154\x65\x61\163\145\x20\x72\145\x64\x65\x66\151\156\145\40\x70\141\x67\x65\163\x2e", PR__PKG__OPTIMIZATION); goto eekkcooqswqouoei; gcqssckowmywoesw: foreach ($ocqawgquwsqioses as $momcykaoccoymeig => $suaemuyiacqyugsm) { if (!($momcykaoccoymeig >= $gqswsiquqaayuakq)) { goto oksqsucimimsswcg; } goto gcecieuocqawmgci; oksqsucimimsswcg: $sqeykgyoooqysmca = ManipulateArray::get($suaemuyiacqyugsm, self::squoamkioomemiyi); $ccamueccusigaaio = ManipulateArray::get($suaemuyiacqyugsm, self::mgsccwumkcawaqcy); if (!($ccamueccusigaaio && $sqeykgyoooqysmca)) { goto icoiqskygugkgmkm; } $myagqecycsaiyqsk = $jwsqucqyaoaasykk->syoquewuemwigaaw($ccamueccusigaaio, $sqeykgyoooqysmca); $icwicymcioeyeyek = []; if ($myagqecycsaiyqsk) { goto gqeoaceyoiicoaec; } $icwicymcioeyeyek = [self::squoamkioomemiyi => $sqeykgyoooqysmca, self::iiooageieusuyomy => $jwsqucqyaoaasykk::LEVEL_2, self::mgsccwumkcawaqcy => $ccamueccusigaaio, self::ciywsqoeiymemsys => self::eqewsqmqmsiocaeg]; gqeoaceyoiicoaec: if (!$icwicymcioeyeyek) { goto maguoggkqamaiuag; } if ($this->auamgqiwisysomsa()->auuqggkaeoomcksu($sqeykgyoooqysmca, $ccamueccusigaaio, $uamcoiueqaamsqma, $kgicwkyskyemksca)) { goto qosswumywsaeyqus; } switch ($kgicwkyskyemksca) { case "\157\x75\164\137\x6f\146\137\x62\x75\x64\x67\145\164": if ($momcykaoccoymeig == 0) { goto gscyiqmmegqmqcoe; } $uamcoiueqaamsqma = sprintf(__("\x25\163\40\x6f\x66\x20\171\x6f\x75\x72\40\x72\145\161\165\145\x73\x74\145\x64\x20\160\x61\x67\145\x73\40\141\x64\x64\145\144\54\40\164\150\x65\40\162\145\155\141\x69\x6e\x73\x20\141\162\x65\x20\156\x6f\164\40\141\154\x6c\x6f\167\40\164\x6f\x20\141\x64\x64\x2e", PR__PKG__OPTIMIZATION), $this->msywmyaoqmaegsuy($momcykaoccoymeig)); goto mieoguuqiwqioeqa; gscyiqmmegqmqcoe: $uamcoiueqaamsqma = __("\x53\157\x72\x72\x79\54\x20\171\x6f\x75\x72\40\162\145\x71\x75\x65\x73\164\x65\x64\x20\x70\162\x6f\143\145\x73\163\40\x74\145\x72\x6d\151\x6e\x61\164\145\144\54\40\x62\145\143\141\165\163\x65\40\x79\x6f\x75\x20\x61\162\145\40\157\x75\x74\40\157\x66\x20\142\165\144\x67\x65\164\x2e", PR__PKG__OPTIMIZATION); mieoguuqiwqioeqa: goto cciakcwuweqmcose; } uckusgwkoycmkeam: cciakcwuweqmcose: goto gcecieuocqawmgci; goto swicauyqusmgeccu; qosswumywsaeyqus: $sogksuscggsicmac = $jwsqucqyaoaasykk->gscuuyuyauokoyuo($icwicymcioeyeyek); if (!ManipulateArray::get($sogksuscggsicmac, self::ckcawaoawwioqecq)) { goto kkckyqmcyussauma; } $eciuecguuowmeyqg[] = ManipulateArray::get($sogksuscggsicmac, $jwsqucqyaoaasykk->kumuygiiqswoyasy()); goto ikukqooiowqywyqo; kkckyqmcyussauma: $uamcoiueqaamsqma .= print_r(ManipulateArray::get($sogksuscggsicmac, self::iwyueouqaqegmcas), true); ikukqooiowqywyqo: swicauyqusmgeccu: maguoggkqamaiuag: icoiqskygugkgmkm: msmmiaumiasmsiog: } gcecieuocqawmgci: if (!$eciuecguuowmeyqg) { goto kocaieyauyiqmyiy; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\160\x75\x72\x67\x65\x5f\x70\141\147\145\163"), $eciuecguuowmeyqg); kocaieyauyiqmyiy: eekkcooqswqouoei: cuayqmasemsqsume: if ($uamcoiueqaamsqma) { goto igmawmwssyskqqag; } $uamcoiueqaamsqma = __("\120\141\x67\145\x73\x20\141\x64\x64\145\x64\x20\163\x75\x63\143\x65\x73\x73\146\x75\x6c\154\x79\56", PR__PKG__OPTIMIZATION); $occymigcemkqucuw = true; igmawmwssyskqqag: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } public function cysmcyckuueoaiag() { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto sgkqgucguyccaaki; } $suaemuyiacqyugsm = ManipulateServer::ayueggmoqeeukqmq("\160\x61\x67\145\137\151\x64"); $iueymcwwscwqkiyq = ManipulateServer::ayueggmoqeeukqmq("\160\141\x67\145\137\163\164\141\x74\165\163"); if ($suaemuyiacqyugsm && $iueymcwwscwqkiyq) { goto okuqsqaiwwiigmyu; } $uamcoiueqaamsqma = __("\155\151\163\163\151\x6e\147\x20\160\x61\162\x61\x6d\145\x74\145\162\x2c\40\162\x65\x71\x75\x65\x73\164\40\x69\x73\40\x6e\157\x74\40\x76\x61\154\x69\144\x2e", PR__PKG__OPTIMIZATION); goto ksiwgckusukisueg; okuqsqaiwwiigmyu: try { $meywaqqsugaoeyys = Model::symcgieuakksimmu(); $wkawwaegamqisugs = $meywaqqsugaoeyys->akkkoiiymmamsauc($suaemuyiacqyugsm); if ($wkawwaegamqisugs instanceof stdClass) { goto gaskcgoeywuyukke; } $uamcoiueqaamsqma = __("\122\x65\161\165\151\162\145\40\160\x61\162\141\155\x65\x74\145\162\x20\156\x6f\x74\x20\146\157\165\156\144\54\40\162\145\x6c\x6f\141\144\40\160\141\147\x65\40\x61\156\x64\40\164\162\171\x20\x61\147\x61\x69\156\56", PR__PKG__OPTIMIZATION); goto gqaqamewqeaqwcia; gaskcgoeywuyukke: if (ManipulateArray::get($wkawwaegamqisugs, self::ciywsqoeiymemsys) === self::wiewguakgwmoqaea && $this->ewcikckouwmuqkms() <= 0) { goto eussqkkimciywios; } if (!$meywaqqsugaoeyys->ayakoikewusskayc($wkawwaegamqisugs, $iueymcwwscwqkiyq, $uamcoiueqaamsqma, $kgicwkyskyemksca)) { goto iomwkkieqcswkkaw; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\137\160\x75\x72\147\x65\137\x70\141\x67\145"), $suaemuyiacqyugsm); $occymigcemkqucuw = true; iomwkkieqcswkkaw: goto ewsigoeswimiueqe; eussqkkimciywios: $uamcoiueqaamsqma = __("\123\x6f\x72\x72\171\40\171\157\x75\x20\x61\162\x65\40\x6f\x75\164\x20\157\146\x20\142\x75\x64\x67\145\x74\54\x20\x63\x61\x6e\x20\x6e\157\x74\40\143\x68\141\x6e\147\x65\x20\164\x68\151\163\40\160\x61\x67\x65\40\x73\164\141\x74\x75\163\x20\x74\157\40\141\143\164\x69\x76\x65\56\x20\143\150\x61\x72\x67\145\40\171\157\x75\x72\x20\x6c\x69\x63\145\x6e\x73\x65\40\146\162\x6f\x6d\40\x53\145\x74\x74\x69\x6e\147\x73\x20\x3e\40\x44\141\x73\150\x62\x6f\141\x72\144\x20\x3e\x20\114\151\143\145\x6e\163\x65", PR__PKG__OPTIMIZATION); ewsigoeswimiueqe: gqaqamewqeaqwcia: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); } ksiwgckusukisueg: sgkqgucguyccaaki: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } public function cssaamgmuamuqeug($ekuqiqmikiicgoss, $sqeykgyoooqysmca, $gaeqamemwmwsyukm = 0) : array { $ocqawgquwsqioses = []; $cwwmimsuyiesweye = ManipulateArray::get($ekuqiqmikiicgoss, self::RULE_SPECIAL_PAGES, []); $ocykusouawesukco = ManipulateArray::get($ekuqiqmikiicgoss, self::RULE_TARGET_FILTER_TYPE); if (!$cwwmimsuyiesweye) { goto gmeiuoeewucukque; } foreach ($cwwmimsuyiesweye as $ooiewiwkegguusum) { switch ($ooiewiwkegguusum) { case self::mswmgkkakuooukme: $igqsaukqcqscimok = $this->okgswumokyoaosow(ManipulatePost::waaisqccqacqeium($sqeykgyoooqysmca)); if (!$igqsaukqcqscimok) { goto ccgsycueagwegqeu; } $ocqawgquwsqioses[$sqeykgyoooqysmca] = $igqsaukqcqscimok; ccgsycueagwegqeu: goto cmsiuimsiycomyay; } qmqmskywcgiqgygm: cmsiuimsiycomyay: geyiosucqswaeasw: } omuemegmkesqgwys: gmeiuoeewucukque: $scsyuucsumiwkqqc = ManipulateArray::get($ekuqiqmikiicgoss, self::RULE_TARGET_FILTER); $ywmkwiwkosakssii = [self::POSTS_PER_PAGE => $gaeqamemwmwsyukm]; switch ($ocykusouawesukco) { case self::ackcaikowcokggsc: $ywmkwiwkosakssii[self::POST__IN] = $scsyuucsumiwkqqc; goto sayqggaieocmskko; case self::ccyeycyyykwuymsy: $ywmkwiwkosakssii[self::POST__NOT_IN] = $scsyuucsumiwkqqc; goto sayqggaieocmskko; } qmguoqeawegcoeoa: sayqggaieocmskko: $gsgqiucqammycmco = Model::symcgieuakksimmu()->yicuwciwamwisgsa($sqeykgyoooqysmca); if (!$gsgqiucqammycmco) { goto ycecaauekkiqacuu; } $ywmkwiwkosakssii[self::POST__NOT_IN] = array_merge(ManipulateArray::get($ywmkwiwkosakssii, self::POST__NOT_IN, []), $gsgqiucqammycmco); ycecaauekkiqacuu: $suuagcecoyuweoqk = ManipulatePost::ciugwooasaqcywas($sqeykgyoooqysmca, $ywmkwiwkosakssii); foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $igqsaukqcqscimok = $this->okgswumokyoaosow($igqsaukqcqscimok); if (!$igqsaukqcqscimok) { goto igyesgemqesackws; } $ocqawgquwsqioses[$igqsaukqcqscimok[self::mgsccwumkcawaqcy]] = $igqsaukqcqscimok; igyesgemqesackws: omumkeywqqogwwue: } ceaamccscgcmqgka: return $ocqawgquwsqioses; } public function ioucsiguaciwkgqc($acqqmqmcquukaqsc, &$iswcokucwmiosiaq) : array { $ksaameoqigiaoigg = []; if ($acqqmqmcquukaqsc) { goto ymucaguacemwsgsi; } $iswcokucwmiosiaq = __("\122\x75\154\145\163\x20\151\x73\x20\x65\155\160\x74\171", PR__PKG__OPTIMIZATION); goto qiikwossequwiuom; ymucaguacemwsgsi: $gqswsiquqaayuakq = $this->ewcikckouwmuqkms(); foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $sqeykgyoooqysmca = ManipulateArray::get($ekuqiqmikiicgoss, self::RULE_TARGET_TYPE); $ocqawgquwsqioses = $this->cssaamgmuamuqeug($ekuqiqmikiicgoss, $sqeykgyoooqysmca, $gqswsiquqaayuakq); $uuwmqqqiwksuaise = count($ocqawgquwsqioses); $sqsyqsscqaauwyyy = min($uuwmqqqiwksuaise, $gqswsiquqaayuakq); $ksaameoqigiaoigg[$sqeykgyoooqysmca] = ["\x70\x61\147\145\x73" => $ocqawgquwsqioses, "\165\163\145\x64" => $sqsyqsscqaauwyyy, "\164\157\x74\x61\x6c" => $uuwmqqqiwksuaise, "\162\145\x6d\x61\151\x6e" => max($uuwmqqqiwksuaise, $gqswsiquqaayuakq) - $sqsyqsscqaauwyyy]; $gqswsiquqaayuakq -= $sqsyqsscqaauwyyy; ociesuicgmkekcue: } wiaymoucakyaikii: qiikwossequwiuom: return $ksaameoqigiaoigg; } }
