<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d2393d5ec4b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Detection\MobileDetect; use JsonException; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; use WpOrg\Requests\Exception; class Buffer extends BaseClass { protected ?string $id = "\143\141\x63\x68\x69\156\147\x5f\x70\x72\x6f\143\145\x73\163"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\x70\141\164\x68"], "\57") . "\x2f"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto wswikooyuaaouqgk; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; wswikooyuaaouqgk: $xswggycymueygwse = $this->gskqygiceygcguyo(); $kqeuymmkaacwmkic = $this->gskqygiceygcguyo("\x2e\x6a\x73\157\x6e"); $this->log("\x4c\157\x6f\x6b\151\x6e\x67\40\146\x6f\x72\x20\x63\141\143\x68\x65\40\x66\151\x6c\145\x2e", ["\160\x61\x74\x68" => $xswggycymueygwse]); if (!@is_readable($kqeuymmkaacwmkic)) { goto awwaiioyywmokwsm; } $this->egygswiqouyukscu($kqeuymmkaacwmkic); awwaiioyywmokwsm: if (!$this->aceaeommyuooiqge()->get("\x67\x7a\x69\x70\x5f\145\156\x61\142\x6c\145")) { goto cumeycwmuuqawwyu; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\137\147\x7a\151\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\x50\137\x41\x43\103\x45\x50\124\137\105\116\x43\x4f\104\111\116\x47"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\147\172\x69\160"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto ckwmkquuyyugigom; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); ckwmkquuyyugigom: cumeycwmuuqawwyu: if (!@is_readable($xswggycymueygwse)) { goto uaicwcqwauosmsqm; } $this->ecsimoiakyygwais($xswggycymueygwse); uaicwcqwauosmsqm: $this->log("\123\x74\141\162\x74\x20\x62\x75\146\146\145\x72\56", ["\160\x61\164\x68" => $xswggycymueygwse]); ob_start([$this, "\x6f\x71\x63\161\153\157\161\x77\x63\x75\x6f\161\x75\163\x6b\x75"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto gsqcoqqsioiyoykq; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; gsqcoqqsioiyoykq: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto goaowamiyyamueiw; } $kaaaegwagmaoscys = $this->mgecqegqseukmmwg(); goaowamiyyamueiw: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto iaomqomgiwiegoca; } $this->log("\x43\141\156\x20\x6e\x6f\x74\40\163\164\x61\x72\164\x20\x62\165\146\x66\x65\x72\40\x70\x72\x6f\143\x65\x73\x73\x2c\40\155\141\171\x62\x65\x20\160\x61\x67\x65\x20\x6e\x6f\164\x20\145\170\151\x73\x74\x73\x20\157\x72\x20\x6e\157\164\x20\141\143\x74\x69\x76\x65"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay . $kaaaegwagmaoscys; iaomqomgiwiegoca: if ($this->omgegoiwsakgwwug()) { goto ysweqawmawicakeo; } $this->log("\x41\x76\x6f\x69\144\40\143\x61\143\150\x65\x20\x70\141\147\145\40\x62\171\40\146\x69\154\164\x65\x72", ["\146\151\154\x74\x65\x72" => "\x70\x72\x5f\x6f\160\164\151\155\151\x7a\x61\164\x69\x6f\x6e\137\143\141\143\x68\145\x5f\150\164\x6d\x6c\137\144\157\x5f\x67\145\x6e\145\x72\x61\x74\x65\x5f\143\x61\143\150\151\156\147\137\146\x69\154\x65\163"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; ysweqawmawicakeo: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto owisckseoogsugqq; } $this->log("\143\x61\x63\x68\145\x20\144\151\x72\145\x63\x74\157\162\x79\40\x6e\x6f\x74\40\x67\x65\x6e\145\162\x61\x74\145\144\72\40{$qwqyukkaswwygsyg}"); goto ookcgumoacskyymy; owisckseoogsugqq: ookcgumoacskyymy: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto cuseccewekgcgkyg; } header("\114\141\x73\164\55\x4d\157\x64\151\x66\x69\x65\144\72\40" . gmdate("\x44\x2c\x20\144\x20\115\x20\x59\40\110\x3a\x69\x3a\163", filemtime($xswggycymueygwse)) . "\40\107\x4d\x54"); cuseccewekgcgkyg: $this->log("\120\141\x67\145\40\x63\141\x63\x68\x65\144\56", ["\160\141\164\x68" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\x43\141\x63\150\145\x2d\103\x6f\156\x74\x72\x6f\x6c\x3a\x20\x6e\157\x2d\x73\164\x6f\x72\145\54\x20\156\157\55\x63\x61\x63\x68\145\54\40\x6d\165\x73\x74\x2d\x72\x65\x76\x61\x6c\151\x64\141\x74\x65\54\x20\155\x61\170\55\x61\147\145\75\60"); header("\120\x72\141\147\x6d\x61\72\40\156\x6f\55\143\x61\x63\150\x65"); header("\x45\x78\x70\x69\x72\145\x73\x3a\x20" . gmdate("\x44\x2c\40\144\x20\x4d\x20\x59\40\x48\72\x69\x3a\x73\x20\x5c\x47\x5c\115\134\124", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\x61\x73\x74\55\115\x6f\144\x69\x66\x69\145\x64\x3a\40" . gmdate("\x44\x2c\x20\144\x20\115\40\x59\40\110\72\151\x3a\x73", filemtime($esaqeawoigqgagum)) . "\x20\107\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto kgysyqkoqgwmoscq; } readfile($esaqeawoigqgagum); $this->log("\x53\145\162\x76\151\x6e\x67\40\143\141\x63\x68\x65\x20\x66\x69\154\145\56", ["\160\x61\164\x68" => $esaqeawoigqgagum, "\155\157\x64\x69\146\151\x65\144" => $cocykkikgmcykggu]); kgysyqkoqgwmoscq: exit; } private function egygswiqouyukscu(?string $esaqeawoigqgagum) { try { $uykgysuswksgmwqy = json_decode(@file_get_contents($esaqeawoigqgagum), true, 512, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES); } catch (JsonException $iewosgggaueeyymg) { $uykgysuswksgmwqy = []; } if (!$uykgysuswksgmwqy) { goto qiaaqkymeuuueoqk; } foreach ($uykgysuswksgmwqy as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (is_numeric($ymqmyyeuycgmigyo)) { goto acesyuieuuqwgkwm; } header("{$ymqmyyeuycgmigyo}\72\x20{$eqgoocgaqwqcimie}", false); goto asaowisseacciyia; acesyuieuuqwgkwm: header($eqgoocgaqwqcimie, false); asaowisseacciyia: oqwcmgwimeisusoe: } makomwwyomweyamm: $this->log("\x53\x65\162\x76\151\x6e\147\x20\143\141\x63\150\145\40\150\x65\x61\x64\x65\x72\x73\56", ["\160\141\x74\150" => $esaqeawoigqgagum]); qiaaqkymeuuueoqk: } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\x4c\x61\x73\x74\x2d\115\157\x64\151\146\x69\x65\x64\x3a\x20" . gmdate("\104\54\x20\x64\x20\115\x20\x59\40\110\x3a\151\x3a\163", filemtime($esaqeawoigqgagum)) . "\40\x47\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto ugswokwmkumcmigc; } readgzfile($esaqeawoigqgagum); $this->log("\123\x65\x72\166\151\156\147\40\x67\x7a\x69\x70\x20\x63\x61\143\x68\145\x20\146\x69\154\x65\x2e", ["\160\141\164\150" => $esaqeawoigqgagum, "\155\x6f\144\x69\146\x69\x65\x64" => $cocykkikgmcykggu]); ugswokwmkumcmigc: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\164\145\x6d\x70"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto gwiaimosqoiquwkc; } return; gwiaimosqoiquwkc: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto owgakkqgckqcegoi; } return; owgakkqgckqcegoi: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\x67\x7a\x69\160\x5f\145\x6e\x61\142\154\x65")) { goto gcskyqewysqaceeg; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\x67\172\x69\160"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\x74\x65\155\x70"; if (!function_exists("\x67\x7a\x65\x6e\x63\157\144\x65")) { goto qumkwsqqocooyuoq; } $gomewsucumqsiske = apply_filters("\160\162\x5f\x6f\x70\164\151\155\x69\172\141\164\151\157\x6e\x5f\143\141\x63\x68\145\137\x68\164\155\x6c\137\147\172\145\x6e\143\157\x64\x65\137\154\145\x76\x65\x6c\137\143\x6f\x6d\160\162\x65\x73\x73\x69\x6f\x6e", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto cigesysuauaiccms; } return; cigesysuauaiccms: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); qumkwsqqocooyuoq: gcskyqewysqaceeg: pmpr_do_action("\160\x72\137\157\x70\164\x69\x6d\151\172\141\164\x69\x6f\156\137\x63\141\x63\150\x65\x5f\150\164\x6d\154\137\147\x65\156\x65\x72\141\x74\x65\x64", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\x63\x61\x63\x68\145\40\x66\151\x6c\145\x20\147\145\x6e\145\x72\141\x74\x65\x64\56"); } private function qsokwouigmyqagkc(?string $esaqeawoigqgagum) { $uykgysuswksgmwqy = apply_filters("\160\162\137\x6f\x70\x74\x69\155\x69\x7a\x61\164\x69\x6f\156\137\x63\x61\x63\x68\145\137\150\145\141\144\145\162\x73\137\x6c\x69\163\x74", []); if (!$uykgysuswksgmwqy) { goto wsemeeocquawyauo; } $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\x74\x65\x6d\x70"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto kkewoqqowugagwoy; } return; kkewoqqowugagwoy: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, wp_json_encode($uykgysuswksgmwqy, JSON_UNESCAPED_SLASHES))) { goto wwswmaewcaisauei; } return; wwswmaewcaisauei: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); pmpr_do_action("\160\x72\x5f\157\x70\164\151\x6d\151\x7a\141\164\151\x6f\x6e\x5f\143\141\143\150\x65\x5f\x68\x65\x61\x64\145\162\x73\x5f\x67\145\156\145\x72\x61\x74\x65\x64", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\x68\x65\141\144\145\162\163\x20\x63\x61\143\x68\x65\40\x66\151\x6c\145\x20\147\x65\x6e\145\162\x61\164\145\144\56"); wsemeeocquawyauo: } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto ocgkwqqmgasuoies; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\x45\x52\126\105\x52\x5f\120\122\x4f\x54\x4f\x43\x4f\x4c", '') . "\40\x33\60\x34\40\x4e\157\x74\x20\115\157\x64\x69\146\x69\x65\144", true, 304); header("\105\x78\x70\x69\x72\145\163\x3a\x20" . gmdate("\104\54\40\x64\40\115\x20\x59\x20\110\72\151\72\163") . "\40\107\x4d\124"); header("\x43\x61\x63\x68\145\55\x43\157\x6e\164\x72\x6f\154\x3a\40\x6e\x6f\55\143\141\143\x68\145\x2c\40\x6d\x75\x73\x74\x2d\x72\x65\166\141\x6c\151\x64\x61\164\145"); $this->log("\x53\145\x72\166\x69\156\147\x20\x60\x33\x30\x34\x60\40\143\141\143\150\145\x20\x66\x69\x6c\x65\x2e", ["\160\x61\164\150" => $esaqeawoigqgagum, "\155\x6f\x64\x69\146\x69\x65\x64" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; ocgkwqqmgasuoies: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(string $sqeykgyoooqysmca = "\x2e\150\164\x6d\x6c") : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\x69\156\144\x65\x78"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\57\45\x5b\60\x2d\71\x41\x2d\x46\x5d\x7b\62\x7d\57", [$this, "\155\x71\x77\x6f\163\x79\151\x75\x6d\x65\x77\161\145\147\x6d\153"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\77", "\43", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\x2f" . substr($wkcwykowmmmwioqs, 0, 250) . $sqeykgyoooqysmca; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\x44\145\164\145\143\164\x69\x6f\x6e\134\115\x6f\x62\x69\154\x65\104\x65\x74\145\143\164") && $this->aceaeommyuooiqge()->get("\x6d\x6f\x62\x69\x6c\x65\137\x63\x61\x63\x68\145"))) { goto ooysmgyeqoiesgqm; } $swwqmuqmmyoquiyi = new MobileDetect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto wmaeicoyyciuaiuy; } $wkcwykowmmmwioqs .= "\55\x6d\157\142\x69\x6c\x65"; wmaeicoyyciuaiuy: ooysmgyeqoiesgqm: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\120\x52\137\117\x50\124\111\x4d\111\132\101\x54\x49\x4f\116\x5f\x44\x4f\116\x54\x5f\117\x50\x54\x49\x4d\x49\x5a\105", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\141\x70\141\143\x68\145\137\162\145\161\x75\145\163\164\x5f\150\x65\141\144\145\162\163")) { goto kwoyiysciqumswcy; } $uykgysuswksgmwqy = apache_request_headers(); kwoyiysciqumswcy: if ($uykgysuswksgmwqy) { goto aaogeemgkogagkai; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\x50\x5f\111\x46\137\x4d\x4f\x44\x49\x46\111\x45\x44\x5f\123\111\x4e\x43\105", ''); goto qqmmycmsoqegcqqw; aaogeemgkogagkai: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\146\x2d\x4d\157\x64\x69\146\x69\145\x64\x2d\x53\x69\x6e\143\145"] ?? ''; qqmmycmsoqegcqqw: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\x70\162\137\x6f\x70\x74\151\155\x69\x7a\141\x74\151\157\x6e\137\x63\x61\143\x68\x65\137\150\164\155\154\x5f\x64\x6f\x5f\x67\x65\x6e\145\x72\141\164\x65\137\143\141\x63\x68\151\156\x67\x5f\146\x69\154\x65\163", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\120\x52\x5f\x4f\x50\124\x5f\103\x41\x43\110\x45\x5f\x44\x4f\116\124\x5f\105\x4e\x43\x4f\x44\105\137\x46\x49\114\105\x4e\x41\x4d\x45\123")) { goto magymcqykamwqigw; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); oiiqqgyqmggyiums: } isqwwmikecauwyuc: $migiiksoiymissge = implode("\x2f", $ymkqyawksmqcgsei); magymcqykamwqigw: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\x2f\x5c") . "\57\x66\151\154\145\x73"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto ukogwqiuuuakkawy; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); ukogwqiuuuakkawy: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\74\x21\55\x2d\40\x43\x61\143\x68\x65\144\40\x66\x6f\162\x20\x67\x72\145\x61\164\x20\x70\x65\162\146\x6f\x72\155\141\x6e\143\145\40\x62\x79\x20\x50\x4d\120\122\x20\x4f\160\164\151\x6d\151\172\x61\x74\151\157\x6e\40\x4d\x6f\144\165\154\145"; if (empty($cqgoimumaewouews)) { goto gicmaqmuscawegie; } $kaaaegwagmaoscys .= "\x20\55\x20\x44\145\142\x75\147\x3a\40\143\x61\143\x68\145\144\x40{$cqgoimumaewouews}"; gicmaqmuscawegie: $kaaaegwagmaoscys .= "\40\55\x2d\76"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\174", ["\50\x2e\x2a\x29\167\160\134\55\x6a\163\x6f\x6e\50\57\x2e\52\174\x24\x29"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\x23{$seooyyaygyioqeue}\43", $aweiaismcsuikses)) { goto oymyqcoekqyuiguq; } return false; oymyqcoekqyuiguq: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\160\145\162\x6d\141\x6c\151\x6e\153\x5f\x73\164\162\165\x63\164\x75\x72\x65"); $qmgwgiyuicsgkmcs = "\57" !== substr($mqqisesagsuooios, -1) ? '' : "\57"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\x2f" !== substr($magawcseesgowoeo, -1) ? '' : "\x2f"; if (!('' === $qmgwgiyuicsgkmcs)) { goto gygqgauaceiuawkq; } $ygygweamcggggmce = "\57" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\x70\x61\164\150"])); $sycgeiyakseiumqy = str_replace(["\56\160\x68\x70", "\x2e"], ['', "\x2f"], $sycgeiyakseiumqy); if (!("\57" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\x2f") === $sycgeiyakseiumqy)) { goto ayamomygygmgwgkg; } $ygygweamcggggmce = ''; ayamomygygmgwgkg: gygqgauaceiuawkq: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
