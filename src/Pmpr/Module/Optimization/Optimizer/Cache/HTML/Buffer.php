<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66872493a1a65             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Mobile_Detect; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; class Buffer extends BaseClass { protected ?string $id = "\x63\141\143\x68\151\156\x67\x5f\160\162\157\143\145\x73\x73"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\x70\x61\164\150"], "\x2f") . "\57"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto uoeasoimegouymka; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; uoeasoimegouymka: $xswggycymueygwse = $this->gskqygiceygcguyo(); $this->log("\x4c\157\157\x6b\x69\156\147\40\x66\x6f\162\40\x63\141\143\x68\x65\x20\x66\x69\x6c\145\x2e", ["\160\141\x74\x68" => $xswggycymueygwse]); if (!$this->aceaeommyuooiqge()->get("\x67\172\x69\160\x5f\145\156\x61\x62\x6c\x65")) { goto qiaimmucomukkeka; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\137\x67\172\x69\x70"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\120\x5f\x41\x43\103\105\120\x54\137\105\x4e\103\x4f\x44\111\x4e\107"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\147\x7a\151\160"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto egsycocugqyyswsi; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); egsycocugqyyswsi: qiaimmucomukkeka: if (!@is_readable($xswggycymueygwse)) { goto aoquoewagkseayug; } $this->ecsimoiakyygwais($xswggycymueygwse); aoquoewagkseayug: $this->log("\x53\x74\141\162\164\x20\x62\x75\x66\x66\145\162\x2e", ["\x70\x61\164\150" => $xswggycymueygwse]); ob_start([$this, "\157\x71\x63\x71\x6b\157\x71\x77\x63\165\x6f\x71\165\163\x6b\x75"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto osuscoaaomwcqkew; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; osuscoaaomwcqkew: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto ciucewqgyoiouesq; } $kaaaegwagmaoscys = $this->mgecqegqseukmmwg(); ciucewqgyoiouesq: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto cgmgqucewwssmicq; } $this->log("\103\x61\x6e\40\x6e\157\x74\40\163\164\x61\x72\164\40\142\165\x66\x66\145\162\x20\x70\162\x6f\143\145\163\163\x2c\40\155\141\x79\x62\x65\x20\x70\141\147\x65\x20\x6e\x6f\164\x20\x65\x78\151\163\x74\163\x20\157\162\x20\x6e\x6f\x74\x20\x61\143\164\151\x76\145"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay . $kaaaegwagmaoscys; cgmgqucewwssmicq: if ($this->omgegoiwsakgwwug()) { goto mkomygccqkmkumsi; } $this->log("\x41\166\x6f\151\x64\40\143\141\143\x68\x65\40\160\141\147\x65\40\142\x79\x20\x66\x69\x6c\x74\145\x72", ["\x66\x69\154\x74\145\162" => "\160\162\137\x6f\x70\x74\x69\x6d\x69\x7a\x61\164\151\x6f\x6e\x5f\x63\141\143\150\145\137\150\164\x6d\154\137\x64\x6f\x5f\147\145\156\145\162\x61\164\x65\137\x63\141\x63\150\151\x6e\x67\137\146\x69\154\x65\163"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; mkomygccqkmkumsi: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto ussceseaimqywuiy; } $this->log("\143\141\143\x68\145\40\x64\151\x72\145\143\164\x6f\162\171\x20\x6e\157\164\40\x67\x65\156\145\x72\141\164\145\144\x3a\40{$qwqyukkaswwygsyg}"); goto oyiuemaaykgkqqam; ussceseaimqywuiy: $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); oyiuemaaykgkqqam: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto gqmewagyagamokok; } header("\x4c\141\x73\x74\55\x4d\157\x64\151\146\151\145\x64\72\40" . gmdate("\x44\x2c\x20\144\40\115\x20\131\x20\x48\x3a\x69\x3a\163", filemtime($xswggycymueygwse)) . "\40\107\115\x54"); gqmewagyagamokok: $this->log("\120\141\x67\145\40\x63\x61\143\150\x65\x64\x2e", ["\x70\x61\164\x68" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\103\141\143\150\145\55\x43\157\156\164\x72\157\154\72\x20\x6e\157\x2d\163\164\x6f\x72\145\54\40\x6e\x6f\x2d\x63\x61\x63\150\x65\x2c\40\x6d\x75\x73\x74\55\162\145\166\141\x6c\x69\144\141\164\x65\x2c\40\x6d\x61\170\55\x61\x67\x65\75\60"); header("\x50\162\141\147\155\141\x3a\40\x6e\157\x2d\143\x61\x63\150\x65"); header("\105\170\160\x69\x72\x65\163\x3a\40" . gmdate("\x44\x2c\40\x64\40\115\x20\x59\x20\x48\x3a\151\x3a\x73\40\134\x47\134\115\134\x54", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\x4c\141\x73\164\55\115\x6f\x64\151\146\151\x65\x64\72\40" . gmdate("\x44\54\x20\x64\x20\115\x20\x59\40\110\72\151\72\x73", filemtime($esaqeawoigqgagum)) . "\x20\107\x4d\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto sqmoqymckwsogsqg; } readfile($esaqeawoigqgagum); $this->log("\123\145\162\166\x69\x6e\147\x20\x63\x61\x63\x68\x65\40\x66\x69\154\x65\56", ["\160\141\x74\x68" => $esaqeawoigqgagum, "\155\x6f\144\x69\x66\x69\145\144" => $cocykkikgmcykggu]); sqmoqymckwsogsqg: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\114\x61\163\164\x2d\115\x6f\x64\151\x66\151\x65\144\x3a\x20" . gmdate("\104\54\40\x64\40\x4d\40\x59\40\x48\72\x69\72\163", filemtime($esaqeawoigqgagum)) . "\x20\x47\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto uycesqqkoeamocgm; } readgzfile($esaqeawoigqgagum); $this->log("\x53\145\x72\x76\151\156\x67\x20\x67\x7a\151\x70\x20\143\x61\x63\x68\x65\40\x66\151\x6c\x65\x2e", ["\x70\x61\164\x68" => $esaqeawoigqgagum, "\x6d\157\144\151\x66\151\145\144" => $cocykkikgmcykggu]); uycesqqkoeamocgm: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\x74\x65\155\160"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto ceiwqkyquikcemmo; } return; ceiwqkyquikcemmo: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto ukomuiwukymcoaso; } return; ukomuiwukymcoaso: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\x67\172\x69\x70\x5f\145\x6e\x61\x62\154\x65")) { goto goqmywuiicciasyk; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\x5f\x67\x7a\x69\x70"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\x5f\x74\x65\155\160"; if (!function_exists("\147\x7a\x65\156\143\x6f\144\145")) { goto oyiuyywyeoskckuw; } $gomewsucumqsiske = apply_filters("\160\162\x5f\157\x70\x74\151\x6d\151\x7a\x61\x74\151\157\156\x5f\x63\x61\x63\150\x65\x5f\150\x74\x6d\x6c\137\x67\172\x65\156\x63\x6f\x64\x65\x5f\154\145\x76\x65\x6c\137\x63\157\x6d\x70\x72\x65\x73\x73\151\157\x6e", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto wkgskiuiukiuyque; } return; wkgskiuiukiuyque: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); oyiuyywyeoskckuw: goqmywuiicciasyk: $this->log("\143\141\143\x68\x65\40\146\x69\154\x65\x20\147\x65\156\145\162\141\x74\x65\x64\56"); } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto siecswkggyikqkga; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\x45\122\x56\105\x52\137\120\122\117\x54\x4f\103\117\x4c", '') . "\x20\x33\60\64\x20\116\x6f\x74\40\115\157\x64\151\146\x69\145\144", true, 304); header("\105\x78\160\151\x72\145\163\72\40" . gmdate("\104\x2c\x20\x64\40\x4d\x20\x59\x20\110\72\151\72\163") . "\x20\107\x4d\124"); header("\103\141\143\x68\x65\x2d\103\x6f\x6e\x74\162\x6f\x6c\72\x20\156\x6f\x2d\143\141\x63\150\145\54\40\155\165\x73\x74\x2d\162\145\x76\x61\x6c\x69\144\141\164\x65"); $this->log("\123\x65\x72\166\151\x6e\147\40\x60\x33\x30\x34\x60\x20\143\141\x63\150\x65\40\x66\x69\154\x65\x2e", ["\160\141\x74\x68" => $esaqeawoigqgagum, "\x6d\157\x64\151\146\151\145\x64" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; siecswkggyikqkga: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(array $ywmkwiwkosakssii = []) : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\151\x6e\x64\145\170"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\57\x25\133\x30\55\x39\101\x2d\x46\135\x7b\x32\x7d\x2f", [$this, "\155\161\x77\157\x73\x79\151\165\x6d\x65\167\161\x65\x67\155\153"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\77", "\x23", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\x2f" . substr($wkcwykowmmmwioqs, 0, 250) . "\x2e\150\164\x6d\154"; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\115\157\x62\x69\x6c\x65\137\104\145\x74\145\x63\164") && $this->aceaeommyuooiqge()->get("\x6d\x6f\142\x69\154\x65\x5f\143\141\x63\x68\x65"))) { goto easqmyamcmeesgya; } $swwqmuqmmyoquiyi = new Mobile_Detect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto qkuiwoqksgayqqmg; } $wkcwykowmmmwioqs .= "\55\155\x6f\142\151\x6c\145"; qkuiwoqksgayqqmg: easqmyamcmeesgya: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\120\122\x5f\117\120\124\111\x4d\111\132\x41\x54\x49\x4f\116\x5f\104\117\116\x54\137\x4f\x50\124\x49\x4d\x49\x5a\x45", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\141\160\141\x63\150\x65\137\x72\145\161\165\x65\x73\x74\x5f\150\145\x61\x64\145\162\163")) { goto yuqgwwmqwqiuwmaw; } $uykgysuswksgmwqy = apache_request_headers(); yuqgwwmqwqiuwmaw: if ($uykgysuswksgmwqy) { goto quaqmuusokiyqgqe; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\124\120\x5f\x49\x46\137\115\117\104\111\106\111\x45\x44\137\123\x49\x4e\103\x45", ''); goto smiemmcqqukyguuu; quaqmuusokiyqgqe: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\146\x2d\x4d\157\x64\151\146\x69\145\144\55\123\x69\x6e\x63\145"] ?? ''; smiemmcqqukyguuu: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\x70\162\137\x6f\160\x74\x69\x6d\151\x7a\x61\164\x69\x6f\x6e\x5f\x63\x61\x63\150\x65\137\x68\x74\155\x6c\x5f\x64\157\x5f\x67\x65\156\x65\x72\x61\x74\x65\137\143\x61\143\x68\x69\156\147\x5f\x66\x69\154\145\x73", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\x50\x52\x5f\117\120\x54\137\x43\101\103\x48\x45\137\x44\117\116\x54\137\105\x4e\103\x4f\104\x45\x5f\x46\x49\114\105\x4e\x41\x4d\105\x53")) { goto yoagcooekomeokwg; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); yamyagayiooyeekg: } iksewmsaugayqaqq: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); yoagcooekomeokwg: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\x2f\134") . "\x2f\x66\x69\154\x65\163"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto eckcqesiokgwkkiw; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); eckcqesiokgwkkiw: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\x3c\41\x2d\55\40\103\141\x63\150\145\x64\x20\x66\157\x72\x20\147\x72\145\x61\x74\x20\x70\145\162\146\x6f\162\155\x61\156\x63\x65\40\142\x79\x20\120\115\120\x52\x20\x4f\x70\x74\x69\155\x69\172\141\164\x69\x6f\156\x20\115\157\144\165\x6c\145"; if (empty($cqgoimumaewouews)) { goto ecouwqosmoyyqmkw; } $kaaaegwagmaoscys .= "\40\x2d\x20\104\x65\142\x75\147\72\x20\143\141\x63\150\145\x64\x40{$cqgoimumaewouews}"; ecouwqosmoyyqmkw: $kaaaegwagmaoscys .= "\x20\x2d\55\76"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\x7c", ["\x28\56\x2a\51\x77\160\134\x2d\x6a\163\x6f\156\x28\x2f\56\52\174\44\51"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\43{$seooyyaygyioqeue}\x23", $aweiaismcsuikses)) { goto mqiiqkuaoekeuswo; } return false; mqiiqkuaoekeuswo: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\x70\145\162\x6d\x61\x6c\151\156\153\137\x73\x74\162\x75\143\x74\x75\162\x65"); $qmgwgiyuicsgkmcs = "\x2f" !== substr($mqqisesagsuooios, -1) ? '' : "\x2f"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\57" !== substr($magawcseesgowoeo, -1) ? '' : "\57"; if (!('' === $qmgwgiyuicsgkmcs)) { goto sgiwoiscywusgmmm; } $ygygweamcggggmce = "\57" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\x70\141\164\x68"])); $sycgeiyakseiumqy = str_replace(["\x2e\160\150\160", "\x2e"], ['', "\57"], $sycgeiyakseiumqy); if (!("\x2f" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\57") === $sycgeiyakseiumqy)) { goto qmoocweoekqueuyy; } $ygygweamcggggmce = ''; qmoocweoekqueuyy: sgiwoiscywusgmmm: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
