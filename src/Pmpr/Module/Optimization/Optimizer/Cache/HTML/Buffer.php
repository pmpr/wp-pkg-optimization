<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668682bec25a4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Mobile_Detect; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; class Buffer extends BaseClass { protected ?string $id = "\143\x61\143\x68\151\156\x67\x5f\x70\162\157\x63\x65\x73\163"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\x70\x61\164\x68"], "\x2f") . "\x2f"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto qkcsykuocwuyaice; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; qkcsykuocwuyaice: $xswggycymueygwse = $this->gskqygiceygcguyo(); $this->log("\114\157\157\153\151\x6e\147\40\x66\x6f\x72\40\143\x61\x63\150\x65\x20\x66\151\154\145\x2e", ["\x70\x61\164\150" => $xswggycymueygwse]); if (!$this->aceaeommyuooiqge()->get("\147\x7a\x69\160\137\145\156\141\142\154\145")) { goto egsycocugqyyswsi; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\137\147\172\151\x70"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\x50\137\101\103\x43\x45\x50\x54\137\105\116\x43\x4f\104\111\x4e\107"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\147\172\x69\160"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto uoeasoimegouymka; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); uoeasoimegouymka: egsycocugqyyswsi: if (!@is_readable($xswggycymueygwse)) { goto qiaimmucomukkeka; } $this->ecsimoiakyygwais($xswggycymueygwse); qiaimmucomukkeka: $this->log("\123\164\141\x72\164\40\142\x75\146\x66\145\162\x2e", ["\160\x61\x74\150" => $xswggycymueygwse]); ob_start([$this, "\x6f\x71\x63\x71\x6b\x6f\161\x77\x63\165\x6f\x71\165\163\x6b\x75"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto aoquoewagkseayug; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; aoquoewagkseayug: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto osuscoaaomwcqkew; } $kaaaegwagmaoscys = $this->mgecqegqseukmmwg(); osuscoaaomwcqkew: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto ciucewqgyoiouesq; } $this->log("\103\141\156\x20\156\157\x74\40\x73\x74\x61\x72\164\40\x62\165\146\146\145\x72\40\160\x72\x6f\x63\x65\x73\163\x2c\40\x6d\x61\171\x62\145\x20\x70\x61\x67\x65\40\x6e\x6f\x74\x20\145\x78\x69\x73\164\x73\40\x6f\x72\x20\156\x6f\164\40\141\x63\x74\151\x76\145"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay . $kaaaegwagmaoscys; ciucewqgyoiouesq: if ($this->omgegoiwsakgwwug()) { goto cgmgqucewwssmicq; } $this->log("\x41\166\x6f\151\144\40\143\141\143\x68\145\40\x70\141\147\145\40\x62\171\x20\x66\x69\154\164\x65\x72", ["\146\151\154\164\145\x72" => "\160\162\137\x6f\160\164\151\155\x69\x7a\x61\164\151\x6f\156\137\143\141\143\x68\145\137\x68\164\155\x6c\x5f\144\157\x5f\147\x65\x6e\145\x72\x61\x74\x65\x5f\x63\141\143\150\x69\x6e\x67\137\x66\151\154\x65\x73"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; cgmgqucewwssmicq: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto mkomygccqkmkumsi; } $this->log("\x63\141\x63\x68\145\40\x64\151\162\x65\143\x74\x6f\x72\x79\x20\x6e\x6f\164\40\x67\145\156\x65\162\141\164\x65\144\72\40{$qwqyukkaswwygsyg}"); goto ussceseaimqywuiy; mkomygccqkmkumsi: $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); ussceseaimqywuiy: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto oyiuemaaykgkqqam; } header("\x4c\x61\x73\164\x2d\x4d\157\144\x69\146\151\x65\144\72\x20" . gmdate("\x44\x2c\x20\144\x20\x4d\40\131\x20\x48\72\x69\72\x73", filemtime($xswggycymueygwse)) . "\40\107\x4d\124"); oyiuemaaykgkqqam: $this->log("\x50\x61\147\x65\40\143\141\x63\150\145\144\x2e", ["\160\x61\x74\x68" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\x43\141\x63\x68\145\x2d\103\157\156\164\162\x6f\154\x3a\40\156\157\x2d\x73\164\x6f\162\145\x2c\x20\x6e\157\x2d\143\141\143\x68\x65\54\x20\x6d\165\163\x74\x2d\162\x65\166\x61\x6c\151\144\141\164\x65\x2c\40\x6d\141\170\55\141\x67\145\x3d\x30"); header("\x50\x72\141\x67\x6d\141\x3a\40\156\x6f\x2d\143\141\x63\150\x65"); header("\x45\170\x70\151\x72\x65\163\x3a\x20" . gmdate("\x44\54\40\144\40\115\x20\x59\x20\x48\72\151\x3a\x73\x20\x5c\107\134\115\x5c\x54", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\x61\x73\164\55\115\157\144\x69\146\x69\145\x64\72\40" . gmdate("\x44\54\40\x64\x20\x4d\x20\x59\40\110\x3a\x69\x3a\163", filemtime($esaqeawoigqgagum)) . "\40\107\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto gqmewagyagamokok; } readfile($esaqeawoigqgagum); $this->log("\x53\x65\x72\166\x69\x6e\147\x20\143\141\143\x68\145\40\146\x69\154\145\x2e", ["\160\141\x74\150" => $esaqeawoigqgagum, "\x6d\x6f\x64\151\146\151\145\x64" => $cocykkikgmcykggu]); gqmewagyagamokok: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\x4c\141\163\164\55\x4d\x6f\x64\151\x66\x69\145\144\72\40" . gmdate("\104\54\40\x64\40\115\x20\131\40\110\x3a\151\x3a\x73", filemtime($esaqeawoigqgagum)) . "\x20\107\x4d\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto sqmoqymckwsogsqg; } readgzfile($esaqeawoigqgagum); $this->log("\123\145\x72\166\x69\x6e\x67\40\147\172\x69\160\x20\x63\x61\143\150\145\40\146\x69\x6c\x65\x2e", ["\x70\x61\x74\150" => $esaqeawoigqgagum, "\x6d\x6f\144\x69\146\x69\145\144" => $cocykkikgmcykggu]); sqmoqymckwsogsqg: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\164\x65\x6d\160"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto uycesqqkoeamocgm; } return; uycesqqkoeamocgm: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto ceiwqkyquikcemmo; } return; ceiwqkyquikcemmo: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\147\172\151\x70\x5f\145\156\141\x62\x6c\x65")) { goto oyiuyywyeoskckuw; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\x5f\147\172\x69\x70"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\164\145\x6d\160"; if (!function_exists("\147\172\x65\x6e\143\x6f\144\145")) { goto wkgskiuiukiuyque; } $gomewsucumqsiske = apply_filters("\160\x72\x5f\157\160\x74\151\x6d\x69\x7a\141\x74\151\x6f\x6e\137\143\141\x63\x68\x65\137\x68\x74\155\x6c\137\x67\x7a\x65\156\x63\x6f\144\145\137\154\x65\x76\x65\154\137\x63\x6f\x6d\160\x72\145\x73\x73\x69\x6f\x6e", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto ukomuiwukymcoaso; } return; ukomuiwukymcoaso: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); wkgskiuiukiuyque: oyiuyywyeoskckuw: $this->log("\143\x61\143\x68\145\x20\146\x69\154\x65\40\147\145\156\x65\162\141\x74\x65\144\56"); } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto goqmywuiicciasyk; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\x52\126\105\x52\137\120\122\117\x54\117\103\x4f\114", '') . "\x20\63\60\64\40\x4e\157\x74\40\x4d\x6f\144\x69\146\x69\x65\x64", true, 304); header("\x45\170\160\x69\162\145\x73\72\x20" . gmdate("\104\x2c\x20\x64\x20\x4d\x20\x59\x20\110\72\151\72\163") . "\40\107\x4d\124"); header("\103\x61\143\150\145\55\103\x6f\x6e\164\x72\157\x6c\x3a\40\x6e\x6f\x2d\x63\141\x63\150\x65\54\40\x6d\x75\163\x74\55\x72\145\x76\141\x6c\x69\x64\141\x74\145"); $this->log("\123\145\x72\x76\x69\x6e\147\40\x60\63\x30\64\x60\40\x63\x61\x63\x68\x65\x20\146\x69\154\145\56", ["\x70\x61\164\x68" => $esaqeawoigqgagum, "\155\157\144\x69\146\x69\145\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; goqmywuiicciasyk: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(array $ywmkwiwkosakssii = []) : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\151\x6e\144\x65\x78"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\x2f\45\133\60\55\71\x41\x2d\x46\135\x7b\x32\175\57", [$this, "\155\161\x77\157\163\x79\x69\x75\155\145\x77\x71\x65\147\x6d\153"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\x3f", "\43", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\x2f" . substr($wkcwykowmmmwioqs, 0, 250) . "\x2e\x68\x74\x6d\154"; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\115\x6f\x62\x69\154\145\x5f\x44\145\164\x65\x63\164") && $this->aceaeommyuooiqge()->get("\155\x6f\142\151\x6c\x65\137\143\x61\x63\x68\x65"))) { goto qkuiwoqksgayqqmg; } $swwqmuqmmyoquiyi = new Mobile_Detect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto siecswkggyikqkga; } $wkcwykowmmmwioqs .= "\55\x6d\x6f\x62\x69\154\145"; siecswkggyikqkga: qkuiwoqksgayqqmg: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\120\122\x5f\117\120\124\x49\115\111\x5a\101\x54\111\117\x4e\137\104\x4f\116\x54\x5f\117\x50\124\x49\115\x49\132\x45", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\x61\160\x61\x63\150\145\x5f\162\145\161\x75\x65\x73\164\x5f\x68\145\x61\144\145\162\163")) { goto easqmyamcmeesgya; } $uykgysuswksgmwqy = apache_request_headers(); easqmyamcmeesgya: if ($uykgysuswksgmwqy) { goto yuqgwwmqwqiuwmaw; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\120\x5f\111\x46\x5f\x4d\117\104\x49\x46\111\x45\x44\x5f\x53\x49\116\103\105", ''); goto quaqmuusokiyqgqe; yuqgwwmqwqiuwmaw: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\146\55\115\x6f\x64\x69\x66\x69\x65\x64\55\123\151\x6e\143\145"] ?? ''; quaqmuusokiyqgqe: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\x70\162\x5f\157\160\164\x69\155\151\x7a\141\x74\151\157\156\x5f\143\x61\143\x68\x65\137\x68\x74\x6d\x6c\137\x64\x6f\137\x67\145\x6e\145\162\x61\x74\145\x5f\143\141\143\x68\x69\156\147\137\x66\x69\x6c\x65\x73", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\120\122\137\x4f\120\124\137\103\x41\103\110\105\137\104\117\116\x54\137\x45\x4e\x43\x4f\104\105\137\x46\x49\114\105\x4e\101\x4d\x45\x53")) { goto yamyagayiooyeekg; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); iksewmsaugayqaqq: } smiemmcqqukyguuu: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); yamyagayiooyeekg: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\x2f\x5c") . "\x2f\146\151\154\x65\163"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto yoagcooekomeokwg; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); yoagcooekomeokwg: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\x3c\x21\55\55\40\x43\141\143\x68\145\x64\40\146\157\162\x20\x67\x72\x65\x61\x74\40\160\145\x72\146\x6f\162\155\141\156\x63\x65\x20\142\171\40\120\115\x50\x52\40\x4f\160\164\151\x6d\x69\x7a\141\x74\151\157\x6e\x20\x4d\x6f\x64\165\x6c\x65"; if (empty($cqgoimumaewouews)) { goto eckcqesiokgwkkiw; } $kaaaegwagmaoscys .= "\x20\55\x20\x44\145\142\x75\147\72\x20\143\141\x63\150\x65\144\x40{$cqgoimumaewouews}"; eckcqesiokgwkkiw: $kaaaegwagmaoscys .= "\x20\x2d\x2d\76"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\x7c", ["\50\56\52\51\167\160\x5c\55\x6a\x73\x6f\156\50\x2f\x2e\x2a\174\44\51"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\43{$seooyyaygyioqeue}\43", $aweiaismcsuikses)) { goto ecouwqosmoyyqmkw; } return false; ecouwqosmoyyqmkw: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\160\145\162\155\141\154\x69\156\x6b\137\x73\x74\x72\x75\143\164\165\x72\x65"); $qmgwgiyuicsgkmcs = "\57" !== substr($mqqisesagsuooios, -1) ? '' : "\x2f"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\57" !== substr($magawcseesgowoeo, -1) ? '' : "\57"; if (!('' === $qmgwgiyuicsgkmcs)) { goto qmoocweoekqueuyy; } $ygygweamcggggmce = "\57" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\160\141\164\150"])); $sycgeiyakseiumqy = str_replace(["\56\160\x68\x70", "\x2e"], ['', "\x2f"], $sycgeiyakseiumqy); if (!("\57" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\x2f") === $sycgeiyakseiumqy)) { goto mqiiqkuaoekeuswo; } $ygygweamcggggmce = ''; mqiiqkuaoekeuswo: qmoocweoekqueuyy: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
