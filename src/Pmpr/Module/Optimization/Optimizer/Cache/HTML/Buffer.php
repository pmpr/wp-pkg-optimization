<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce11a697384             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Detection\MobileDetect; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; class Buffer extends BaseClass { protected ?string $id = "\x63\x61\143\x68\x69\156\x67\137\x70\162\157\143\x65\x73\163"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\160\141\x74\150"], "\57") . "\x2f"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto uyeyscsaigimsqwq; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; uyeyscsaigimsqwq: $xswggycymueygwse = $this->gskqygiceygcguyo(); $this->log("\x4c\157\157\153\151\156\147\40\x66\x6f\162\x20\x63\141\143\150\145\40\146\151\154\x65\x2e", ["\x70\141\164\x68" => $xswggycymueygwse]); if (!$this->aceaeommyuooiqge()->get("\x67\x7a\x69\160\137\x65\x6e\x61\142\154\145")) { goto wkiymcoqqiigqaaw; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\137\147\x7a\151\x70"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\x54\x50\x5f\101\x43\103\105\120\x54\137\105\116\x43\x4f\x44\x49\x4e\x47"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\x67\x7a\151\x70"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto mwieyyqamgwicgco; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); mwieyyqamgwicgco: wkiymcoqqiigqaaw: if (!@is_readable($xswggycymueygwse)) { goto esqwswmoegiqcckg; } $this->ecsimoiakyygwais($xswggycymueygwse); esqwswmoegiqcckg: $this->log("\123\164\141\x72\x74\40\142\x75\146\x66\x65\x72\56", ["\x70\x61\x74\x68" => $xswggycymueygwse]); ob_start([$this, "\157\161\143\x71\x6b\157\161\x77\x63\165\157\161\x75\x73\153\165"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto qmokwkocmcyeyesc; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; qmokwkocmcyeyesc: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto mosuacsuaasssciu; } $kaaaegwagmaoscys = $this->mgecqegqseukmmwg(); mosuacsuaasssciu: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto qksckewucmosemuo; } $this->log("\103\141\156\40\156\x6f\x74\x20\163\x74\x61\x72\164\40\142\165\x66\146\145\x72\40\160\x72\157\143\145\x73\163\54\40\155\x61\x79\142\145\40\x70\141\x67\145\x20\156\157\164\x20\x65\170\151\163\164\x73\40\x6f\162\x20\x6e\157\x74\40\x61\x63\x74\x69\166\145"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay . $kaaaegwagmaoscys; qksckewucmosemuo: if ($this->omgegoiwsakgwwug()) { goto kmooekeyemqgucci; } $this->log("\101\166\x6f\151\144\x20\x63\x61\143\x68\145\40\x70\141\x67\x65\x20\x62\171\x20\146\151\154\164\145\x72", ["\146\151\154\164\145\x72" => "\160\162\x5f\157\160\x74\151\155\x69\172\141\x74\x69\x6f\156\x5f\143\x61\x63\x68\x65\137\150\164\155\x6c\x5f\144\x6f\x5f\147\145\156\x65\162\x61\164\145\x5f\x63\x61\x63\150\151\156\x67\x5f\x66\151\x6c\x65\163"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; kmooekeyemqgucci: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto skuuyysooocugyww; } $this->log("\143\141\143\150\x65\40\144\x69\x72\145\143\164\157\162\x79\x20\156\157\164\x20\x67\145\x6e\145\162\141\164\145\x64\72\40{$qwqyukkaswwygsyg}"); goto cmmusgkieoqyymgs; skuuyysooocugyww: cmmusgkieoqyymgs: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto mkgmaguyswskyioa; } header("\x4c\141\x73\164\x2d\115\157\144\x69\146\x69\x65\144\72\x20" . gmdate("\x44\x2c\x20\144\40\x4d\x20\131\40\110\72\x69\72\163", filemtime($xswggycymueygwse)) . "\x20\107\115\x54"); mkgmaguyswskyioa: $this->log("\x50\141\x67\x65\x20\x63\x61\x63\x68\145\144\56", ["\160\x61\x74\x68" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\x43\141\x63\150\x65\55\x43\157\x6e\x74\162\x6f\154\72\x20\156\157\55\x73\x74\x6f\162\x65\54\x20\x6e\x6f\x2d\143\x61\x63\150\145\54\x20\x6d\x75\x73\x74\x2d\162\x65\166\x61\x6c\151\x64\141\164\x65\x2c\x20\155\141\170\x2d\141\x67\x65\75\60"); header("\x50\x72\x61\147\155\141\72\x20\156\157\55\x63\141\143\x68\x65"); header("\x45\x78\160\151\x72\x65\163\72\40" . gmdate("\x44\54\40\144\40\115\40\131\40\110\x3a\151\72\163\40\134\107\x5c\115\134\x54", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\x61\163\164\x2d\115\x6f\144\x69\x66\x69\x65\144\x3a\40" . gmdate("\x44\54\40\x64\40\x4d\x20\131\x20\x48\x3a\x69\72\163", filemtime($esaqeawoigqgagum)) . "\x20\107\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto skwusmoyomgqkimm; } readfile($esaqeawoigqgagum); $this->log("\x53\x65\162\x76\151\156\147\40\143\141\x63\150\145\x20\x66\151\x6c\x65\56", ["\x70\141\x74\x68" => $esaqeawoigqgagum, "\x6d\x6f\x64\151\x66\x69\145\x64" => $cocykkikgmcykggu]); skwusmoyomgqkimm: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\114\x61\x73\x74\55\x4d\157\144\x69\x66\151\145\144\x3a\40" . gmdate("\x44\54\x20\x64\x20\115\40\131\40\x48\72\x69\72\163", filemtime($esaqeawoigqgagum)) . "\x20\x47\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto usyckeewsgwaysam; } readgzfile($esaqeawoigqgagum); $this->log("\x53\145\x72\166\151\156\147\40\x67\172\151\x70\40\143\x61\143\150\145\40\146\151\x6c\145\56", ["\160\x61\x74\150" => $esaqeawoigqgagum, "\155\157\144\x69\x66\151\x65\x64" => $cocykkikgmcykggu]); usyckeewsgwaysam: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\x74\145\155\160"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto gicuuwuuuwumyooa; } return; gicuuwuuuwumyooa: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto kakkuyeccaacewyo; } return; kakkuyeccaacewyo: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\x67\172\x69\160\137\x65\156\x61\x62\x6c\x65")) { goto qsokkkyoackoycie; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\147\x7a\151\160"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\x5f\x74\145\x6d\x70"; if (!function_exists("\147\172\145\156\143\x6f\144\145")) { goto ismeikacqqyqcmqe; } $gomewsucumqsiske = apply_filters("\x70\162\x5f\157\x70\164\x69\x6d\151\x7a\141\x74\151\157\x6e\x5f\x63\x61\143\150\145\x5f\x68\x74\155\x6c\137\147\x7a\145\x6e\x63\157\144\145\x5f\x6c\x65\x76\145\x6c\x5f\143\157\155\x70\162\145\x73\163\151\x6f\156", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto cysgqimowcqoqqsc; } return; cysgqimowcqoqqsc: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); ismeikacqqyqcmqe: qsokkkyoackoycie: pmpr_do_action("\160\162\x5f\x6f\160\x74\151\x6d\x69\x7a\x61\x74\151\157\156\x5f\x63\x61\143\x68\145\x5f\x68\x74\x6d\154\137\147\x65\156\x65\162\141\x74\145\x64", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\x63\x61\143\x68\145\x20\146\151\x6c\145\x20\147\x65\x6e\145\x72\141\164\145\144\x2e"); } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto casgoamcqkekgeeo; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\105\x52\126\105\122\x5f\120\122\x4f\x54\x4f\x43\x4f\x4c", '') . "\x20\x33\x30\64\x20\116\x6f\x74\x20\x4d\157\144\x69\146\151\x65\x64", true, 304); header("\105\170\x70\151\x72\x65\163\72\40" . gmdate("\104\x2c\x20\144\40\115\x20\131\x20\x48\x3a\151\x3a\163") . "\x20\x47\x4d\x54"); header("\103\x61\x63\x68\x65\x2d\103\x6f\156\164\x72\157\154\x3a\x20\156\157\x2d\x63\141\143\x68\x65\54\x20\155\165\163\164\55\162\145\166\141\x6c\151\x64\x61\x74\x65"); $this->log("\123\x65\x72\x76\x69\x6e\x67\40\140\x33\x30\64\140\x20\143\141\x63\150\145\x20\x66\151\154\x65\56", ["\x70\x61\x74\x68" => $esaqeawoigqgagum, "\155\x6f\144\151\146\x69\x65\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; casgoamcqkekgeeo: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(array $ywmkwiwkosakssii = []) : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\x69\156\x64\145\170"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\57\45\133\x30\x2d\71\101\x2d\106\135\x7b\62\175\57", [$this, "\155\161\x77\157\163\x79\x69\165\155\145\x77\x71\x65\x67\x6d\x6b"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\x3f", "\x23", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\x2f" . substr($wkcwykowmmmwioqs, 0, 250) . "\x2e\150\164\155\154"; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\104\x65\164\145\143\x74\151\x6f\156\x5c\x4d\157\x62\x69\x6c\145\104\x65\x74\x65\143\164") && $this->aceaeommyuooiqge()->get("\x6d\x6f\142\x69\154\145\x5f\143\141\143\x68\x65"))) { goto qcgyggiaowuqswuw; } $swwqmuqmmyoquiyi = new MobileDetect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto yseyyukqaowwouua; } $wkcwykowmmmwioqs .= "\x2d\155\x6f\x62\151\154\x65"; yseyyukqaowwouua: qcgyggiaowuqswuw: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\x50\122\137\x4f\x50\x54\x49\115\x49\132\x41\124\111\117\x4e\x5f\104\x4f\x4e\124\x5f\x4f\120\124\x49\115\111\132\x45", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\141\x70\x61\x63\150\145\137\162\x65\x71\x75\x65\163\x74\x5f\x68\145\x61\144\145\162\x73")) { goto sooecucuakgkuyis; } $uykgysuswksgmwqy = apache_request_headers(); sooecucuakgkuyis: if ($uykgysuswksgmwqy) { goto ywqakqkmmcoceqka; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\120\137\111\x46\137\115\x4f\104\x49\106\x49\105\x44\137\123\x49\116\x43\105", ''); goto kwsqgqmwyyeykgum; ywqakqkmmcoceqka: $sieoyimycoskwwku = $uykgysuswksgmwqy["\x49\146\x2d\115\x6f\x64\151\x66\x69\145\x64\55\x53\151\156\143\x65"] ?? ''; kwsqgqmwyyeykgum: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\160\x72\x5f\x6f\160\x74\151\x6d\151\172\141\164\151\157\x6e\x5f\143\141\x63\150\145\x5f\x68\164\x6d\154\137\x64\157\x5f\x67\145\156\145\162\141\x74\x65\137\143\x61\143\x68\x69\x6e\x67\137\x66\151\x6c\x65\163", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\120\122\x5f\x4f\x50\x54\x5f\x43\x41\x43\110\105\137\104\117\116\124\137\105\x4e\103\x4f\x44\x45\137\106\x49\114\105\x4e\101\115\x45\123")) { goto ekakkiuuquqkccse; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); koukiyqaccegmquc: } emauuoieewwoeyqq: $migiiksoiymissge = implode("\x2f", $ymkqyawksmqcgsei); ekakkiuuquqkccse: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\x2f\x5c") . "\57\x66\151\154\145\163"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto oqwwacmigasucsoc; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); oqwwacmigasucsoc: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\x3c\41\55\55\40\x43\141\x63\x68\x65\144\40\146\x6f\162\x20\147\162\145\141\164\40\160\x65\x72\146\x6f\162\155\x61\x6e\x63\145\40\x62\171\40\x50\115\x50\122\40\x4f\x70\164\x69\155\x69\172\x61\x74\151\157\156\40\115\157\x64\165\154\145"; if (empty($cqgoimumaewouews)) { goto egkeqqgakieyimuq; } $kaaaegwagmaoscys .= "\x20\x2d\x20\104\x65\142\x75\147\72\x20\143\141\x63\150\145\144\x40{$cqgoimumaewouews}"; egkeqqgakieyimuq: $kaaaegwagmaoscys .= "\x20\55\55\76"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\174", ["\x28\x2e\52\x29\x77\x70\x5c\55\152\163\157\156\x28\57\x2e\52\174\x24\51"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\x23{$seooyyaygyioqeue}\43", $aweiaismcsuikses)) { goto cakuguiciaiaeukg; } return false; cakuguiciaiaeukg: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\x70\145\x72\x6d\141\154\151\x6e\x6b\137\163\x74\x72\165\143\x74\165\x72\145"); $qmgwgiyuicsgkmcs = "\x2f" !== substr($mqqisesagsuooios, -1) ? '' : "\57"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\57" !== substr($magawcseesgowoeo, -1) ? '' : "\57"; if (!('' === $qmgwgiyuicsgkmcs)) { goto awwaiioyywmokwsm; } $ygygweamcggggmce = "\x2f" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\160\x61\164\x68"])); $sycgeiyakseiumqy = str_replace(["\x2e\x70\x68\160", "\x2e"], ['', "\x2f"], $sycgeiyakseiumqy); if (!("\x2f" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\57") === $sycgeiyakseiumqy)) { goto wswikooyuaaouqgk; } $ygygweamcggggmce = ''; wswikooyuaaouqgk: awwaiioyywmokwsm: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
