<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66583cba0bde7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Mobile_Detect; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; class Buffer extends BaseClass { protected ?string $id = "\143\x61\143\150\151\156\147\137\160\x72\x6f\x63\145\163\x73"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\x70\x61\x74\150"], "\57") . "\x2f"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto mwysseaekcsiesmm; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; mwysseaekcsiesmm: $xswggycymueygwse = $this->gskqygiceygcguyo(); $this->log("\114\157\x6f\x6b\x69\156\x67\40\x66\x6f\162\x20\x63\141\143\150\x65\40\x66\151\x6c\x65\56", ["\160\141\x74\x68" => $xswggycymueygwse]); if (!$this->aceaeommyuooiqge()->get("\147\x7a\151\x70\x5f\145\156\141\x62\x6c\x65")) { goto gygwewcqsmwqismo; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\x5f\x67\172\151\x70"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\x50\x5f\x41\x43\103\105\x50\x54\x5f\x45\116\x43\x4f\x44\x49\116\x47"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\x67\x7a\151\x70"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto amgsueumgaguceaa; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); amgsueumgaguceaa: gygwewcqsmwqismo: if (!@is_readable($xswggycymueygwse)) { goto uougwgeyiokewkkm; } $this->ecsimoiakyygwais($xswggycymueygwse); uougwgeyiokewkkm: $this->log("\x53\x74\141\162\x74\40\142\165\146\146\145\x72\56", ["\x70\141\x74\x68" => $xswggycymueygwse]); ob_start([$this, "\157\x71\x63\x71\153\x6f\x71\x77\x63\165\x6f\x71\165\163\153\x75"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto gommacygsykyussk; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; gommacygsykyussk: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto ukqocwewouckikso; } $kaaaegwagmaoscys = $this->mgecqegqseukmmwg(); ukqocwewouckikso: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto ucqmumuygcywwqma; } $this->log("\x43\141\x6e\x20\x6e\157\164\x20\x73\x74\141\x72\164\x20\x62\x75\146\x66\x65\162\x20\x70\x72\157\143\145\163\163\54\x20\155\141\171\x62\x65\x20\160\x61\x67\145\x20\x6e\x6f\x74\x20\145\x78\x69\163\x74\163\x20\157\162\x20\156\x6f\164\x20\x61\x63\x74\x69\166\145"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay . $kaaaegwagmaoscys; ucqmumuygcywwqma: if ($this->omgegoiwsakgwwug()) { goto uykousayyomcaeaa; } $this->log("\101\166\157\x69\x64\x20\x63\141\143\150\x65\40\160\141\147\x65\40\142\x79\x20\146\x69\154\x74\145\162", ["\x66\x69\x6c\x74\145\162" => "\x70\x72\x5f\x6f\x70\164\151\155\x69\x7a\141\164\x69\157\x6e\137\x63\141\143\x68\145\x5f\x68\x74\x6d\x6c\137\x64\157\137\147\x65\156\x65\x72\141\x74\x65\137\143\x61\143\150\151\156\x67\137\146\151\154\x65\163"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; uykousayyomcaeaa: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto uimeeckqksqeekqq; } $this->log("\143\141\143\150\x65\40\x64\151\162\x65\x63\x74\157\162\171\x20\156\x6f\x74\x20\x67\145\x6e\x65\x72\x61\x74\x65\x64\72\x20{$qwqyukkaswwygsyg}"); goto iuuuususuuuaieem; uimeeckqksqeekqq: $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); iuuuususuuuaieem: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto kocqqoyymosmuksu; } header("\114\x61\163\164\55\115\157\144\x69\146\x69\x65\144\72\40" . gmdate("\104\x2c\x20\x64\40\115\40\x59\40\110\72\151\72\x73", filemtime($xswggycymueygwse)) . "\40\107\x4d\x54"); kocqqoyymosmuksu: $this->log("\120\141\x67\x65\40\x63\141\143\150\145\x64\56", ["\x70\x61\164\x68" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\103\141\x63\x68\x65\55\x43\x6f\156\164\x72\x6f\x6c\x3a\40\156\x6f\x2d\163\x74\157\162\145\x2c\40\x6e\x6f\55\143\141\x63\150\145\x2c\x20\x6d\x75\163\x74\55\162\145\x76\x61\154\x69\x64\141\x74\145\54\x20\155\141\170\55\141\147\145\x3d\60"); header("\120\x72\141\147\x6d\x61\x3a\40\156\157\55\x63\x61\143\150\x65"); header("\x45\170\x70\x69\162\145\163\x3a\x20" . gmdate("\104\54\x20\x64\40\x4d\40\131\x20\x48\x3a\151\x3a\163\40\x5c\107\134\x4d\x5c\x54", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\x61\163\164\55\x4d\157\144\151\146\x69\145\144\72\40" . gmdate("\104\54\40\144\40\x4d\40\x59\40\110\x3a\151\x3a\x73", filemtime($esaqeawoigqgagum)) . "\40\x47\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto uqokiksoqcwwqgio; } readfile($esaqeawoigqgagum); $this->log("\123\145\x72\x76\x69\156\x67\40\143\141\143\x68\145\x20\x66\x69\x6c\145\56", ["\160\141\x74\x68" => $esaqeawoigqgagum, "\x6d\157\x64\151\x66\151\x65\144" => $cocykkikgmcykggu]); uqokiksoqcwwqgio: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\x4c\141\163\164\55\115\157\144\x69\x66\x69\145\144\x3a\x20" . gmdate("\104\x2c\40\144\x20\115\x20\131\x20\110\x3a\151\72\x73", filemtime($esaqeawoigqgagum)) . "\40\x47\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto qukocuwgakemmyga; } readgzfile($esaqeawoigqgagum); $this->log("\x53\145\162\x76\x69\x6e\x67\40\147\x7a\151\x70\40\143\141\x63\x68\x65\x20\x66\x69\154\145\56", ["\160\141\x74\x68" => $esaqeawoigqgagum, "\155\x6f\144\x69\x66\x69\x65\x64" => $cocykkikgmcykggu]); qukocuwgakemmyga: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\164\x65\x6d\160"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto sioekkmekwygemyc; } return; sioekkmekwygemyc: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto yiowgigkkwsoqcci; } return; yiowgigkkwsoqcci: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\x67\172\x69\160\x5f\145\x6e\x61\142\x6c\145")) { goto mscyggqcesgqqksu; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\147\172\x69\x70"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\x74\x65\x6d\x70"; if (!function_exists("\x67\x7a\145\156\143\157\144\145")) { goto gamqcwuwkikwqoay; } $gomewsucumqsiske = apply_filters("\160\x72\x5f\x6f\x70\x74\151\x6d\x69\x7a\x61\x74\151\157\156\137\143\141\143\x68\x65\x5f\x68\164\x6d\x6c\x5f\147\x7a\x65\x6e\x63\x6f\144\x65\137\x6c\145\x76\145\154\137\143\157\155\160\162\x65\x73\x73\x69\157\x6e", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto ieqesiiageaauiuw; } return; ieqesiiageaauiuw: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); gamqcwuwkikwqoay: mscyggqcesgqqksu: $this->log("\143\141\x63\x68\145\40\x66\151\x6c\x65\40\x67\x65\156\145\162\x61\x74\145\x64\56"); } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto oyeyomcgkmgymogq; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\105\x52\126\105\122\x5f\120\x52\x4f\x54\x4f\x43\x4f\114", '') . "\x20\63\x30\x34\x20\x4e\157\x74\40\x4d\157\x64\x69\146\x69\145\x64", true, 304); header("\x45\x78\x70\x69\162\x65\x73\x3a\40" . gmdate("\104\x2c\x20\144\x20\x4d\40\x59\40\110\x3a\x69\x3a\x73") . "\40\107\x4d\x54"); header("\x43\x61\143\x68\145\x2d\103\x6f\x6e\164\x72\157\x6c\72\x20\156\157\x2d\x63\141\x63\x68\145\54\40\x6d\165\163\x74\x2d\162\145\166\x61\154\x69\x64\141\164\145"); $this->log("\123\x65\162\x76\x69\x6e\x67\40\x60\x33\x30\x34\140\40\143\x61\x63\x68\145\40\146\x69\154\x65\x2e", ["\160\x61\164\150" => $esaqeawoigqgagum, "\155\157\x64\151\146\151\x65\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; oyeyomcgkmgymogq: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(array $ywmkwiwkosakssii = []) : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\x69\156\144\x65\170"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\x2f\x25\133\60\x2d\x39\101\x2d\106\135\x7b\x32\x7d\x2f", [$this, "\155\161\167\157\x73\x79\151\x75\x6d\x65\167\161\x65\x67\x6d\153"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\x3f", "\x23", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\x2f" . substr($wkcwykowmmmwioqs, 0, 250) . "\56\x68\x74\155\154"; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\x4d\x6f\x62\151\x6c\x65\137\x44\145\164\x65\x63\x74") && $this->aceaeommyuooiqge()->get("\155\x6f\x62\x69\x6c\x65\x5f\x63\141\143\150\145"))) { goto wkwamkgkwykeqkec; } $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); if (false !== strpos($magawcseesgowoeo, "\57\x6d\x2f")) { goto iesekaeqeomeuaui; } $swwqmuqmmyoquiyi = new Mobile_Detect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); goto wsesqmcqoiyyqkqi; iesekaeqeomeuaui: $aasascamegmwqmqk = false; $iomcqougosimesoq = true; wsesqmcqoiyyqkqi: if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto mogkoocsoeuyoqqa; } $wkcwykowmmmwioqs .= "\x2d\155\157\142\151\x6c\145"; mogkoocsoeuyoqqa: wkwamkgkwykeqkec: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\x50\122\x5f\117\x50\124\111\x4d\111\132\x41\124\x49\117\x4e\137\x44\x4f\116\124\137\117\x50\x54\x49\x4d\111\x5a\x45", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\141\x70\x61\x63\150\x65\137\162\x65\161\165\x65\x73\164\137\x68\145\x61\x64\145\x72\x73")) { goto oimkeqocuguqqsqk; } $uykgysuswksgmwqy = apache_request_headers(); oimkeqocuguqqsqk: if ($uykgysuswksgmwqy) { goto oeocukauoyosicso; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\124\120\x5f\x49\x46\137\115\117\x44\111\x46\111\105\x44\x5f\x53\x49\116\103\x45", ''); goto suqceasgacskcmkc; oeocukauoyosicso: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\x66\55\115\157\x64\151\146\151\145\x64\x2d\x53\151\x6e\143\x65"] ?? ''; suqceasgacskcmkc: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\x70\162\137\157\160\x74\x69\x6d\151\172\141\x74\x69\157\x6e\x5f\x63\141\x63\150\145\137\150\x74\x6d\x6c\x5f\x64\157\137\147\145\x6e\145\x72\141\164\145\x5f\143\x61\x63\150\151\x6e\147\137\146\151\x6c\x65\x73", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $magawcseesgowoeo = str_replace("\57\x6d\x2f", "\x2f", $magawcseesgowoeo); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\120\x52\137\x4f\x50\x54\137\x43\x41\x43\110\x45\x5f\x44\117\x4e\124\x5f\x45\116\x43\x4f\x44\105\137\106\111\114\x45\116\x41\115\x45\123")) { goto uckewycoogsogwiy; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); kwiggogcgciwuwqk: } yykqaowwsqgqysmq: $migiiksoiymissge = implode("\x2f", $ymkqyawksmqcgsei); uckewycoogsogwiy: return $mkomwsiykqigmqca . $migiiksoiymissge . "\x2f\x66\x69\x6c\145\163"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto ikuuiauwouuqawuw; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); ikuuiauwouuqawuw: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\x3c\x21\x2d\55\40\x43\x61\143\x68\x65\144\x20\146\157\162\40\x67\x72\145\x61\x74\40\x70\x65\162\x66\x6f\x72\x6d\x61\156\143\145\40\x62\x79\x20\x50\x4d\120\122\40\117\x70\164\151\x6d\151\172\141\164\x69\x6f\156\40\115\157\144\x75\x6c\x65"; if (empty($cqgoimumaewouews)) { goto yoqakewookqoqacm; } $kaaaegwagmaoscys .= "\40\55\40\104\x65\x62\x75\x67\72\40\x63\x61\x63\150\x65\x64\x40{$cqgoimumaewouews}"; yoqakewookqoqacm: $kaaaegwagmaoscys .= "\40\x2d\55\x3e"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\174", ["\x28\x2e\52\x29\x77\160\x5c\x2d\152\163\x6f\156\50\x2f\x2e\52\x7c\44\x29"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\43{$seooyyaygyioqeue}\x23", $aweiaismcsuikses)) { goto gswcoeiisamakwii; } return false; gswcoeiisamakwii: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\x70\x65\x72\155\141\154\x69\x6e\x6b\137\x73\164\x72\165\x63\164\165\x72\145"); $qmgwgiyuicsgkmcs = "\x2f" !== substr($mqqisesagsuooios, -1) ? '' : "\x2f"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\57" !== substr($magawcseesgowoeo, -1) ? '' : "\57"; if (!('' === $qmgwgiyuicsgkmcs)) { goto ocywegekakimmwcq; } $ygygweamcggggmce = "\x2f" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\160\x61\164\x68"])); $sycgeiyakseiumqy = str_replace(["\56\x70\150\160", "\56"], ['', "\x2f"], $sycgeiyakseiumqy); if (!("\x2f" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\x2f") === $sycgeiyakseiumqy)) { goto yuimwyoywaiiqacs; } $ygygweamcggggmce = ''; yuimwyoywaiiqacs: ocywegekakimmwcq: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
