<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6261aa1543cbb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Module\Optimization\Buffer\Config; use Pmpr\Module\Optimization\Buffer\Test; use Pmpr\Module\Optimization\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; class Buffer extends BaseClass { protected ?string $id = "\x63\x61\143\150\151\x6e\147\137\x70\x72\x6f\143\x65\163\163"; protected Config $config; protected ?string $path; protected ?Filesystem $filesystem = null; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = trailingslashit($ywmkwiwkosakssii["\160\141\x74\x68"]); $this->config = $uiewakwqscemywuo; $this->filesystem = Filesystem::symcgieuakksimmu(); parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function kcciqwskewsuaemk() : ?Filesystem { return $this->filesystem; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq() && $this->wmgoigiyyeauqwaq()->aceaeommyuooiqge()->get("\143\x61\x63\150\x65\x5f\x65\156\x61\x62\x6c\145")) { goto aaiymmkqmocgakei; } $this->muiwqeouwouegcao(); goto kucqcqeesaiacekm; aaiymmkqmocgakei: $xswggycymueygwse = $this->gskqygiceygcguyo(); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\56\150\164\155\154"; $this->log("\114\x6f\157\x6b\x69\156\147\40\x66\157\x72\x20\x63\141\143\x68\145\x20\146\x69\154\x65\x2e", ["\160\141\164\x68" => $nsmgceoqaqogqmuw]); $ecggassyswkoyocq = $nsmgceoqaqogqmuw . "\137\x67\x7a\x69\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\x50\x5f\x41\103\x43\105\x50\124\137\x45\x4e\103\117\104\111\x4e\107"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\147\x7a\151\160"); if (!($acggykmsksykwyqy && $iiaumsgauuyeqksw->coeoweawgagkycwe($ecggassyswkoyocq))) { goto cqaeiesyciakcagu; } $this->qmkgowiegksamcou($ecggassyswkoyocq); cqaeiesyciakcagu: if (!$iiaumsgauuyeqksw->coeoweawgagkycwe($nsmgceoqaqogqmuw)) { goto acisycocoswkekik; } $this->ecsimoiakyygwais($nsmgceoqaqogqmuw); acisycocoswkekik: $this->log("\x53\x74\x61\x72\164\40\x62\165\x66\x66\x65\162\x2e", ["\160\141\x74\150" => $nsmgceoqaqogqmuw]); ob_start([$this, "\x6f\161\x63\x71\153\157\x71\x77\143\x75\157\161\165\163\153\x75"]); kucqcqeesaiacekm: } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { $yciaosuiyeieceug = true; if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto sccqekuwywiisami; } $yciaosuiyeieceug = false; goto eokcuuwqaomkooag; sccqekuwywiisami: $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($this->omgegoiwsakgwwug()) { goto ycweseaccsomkioa; } $yciaosuiyeieceug = false; goto ciwggusyecgskagy; ycweseaccsomkioa: $xswggycymueygwse = $this->gskqygiceygcguyo(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\x2e\x68\x74\x6d\154"; $qwqyukkaswwygsyg = dirname($nsmgceoqaqogqmuw); $wmgiiumwscoyqkqa = $iiaumsgauuyeqksw->mkdir($qwqyukkaswwygsyg); if (!$wmgiiumwscoyqkqa) { goto cewyaqiqmmwmauce; } $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($nsmgceoqaqogqmuw, $moooemyaqewumiay); cewyaqiqmmwmauce: if (!$iiaumsgauuyeqksw->exists($nsmgceoqaqogqmuw)) { goto scyqmcegwikkoesw; } header("\x4c\x61\163\x74\55\x4d\157\144\x69\146\x69\x65\x64\x3a\x20" . gmdate("\104\54\40\144\40\x4d\40\x59\x20\110\72\151\x3a\x73", filemtime($nsmgceoqaqogqmuw)) . "\40\x47\115\124"); scyqmcegwikkoesw: ciwggusyecgskagy: eokcuuwqaomkooag: if ($yciaosuiyeieceug) { goto qgqasacusgwmoegy; } header("\103\x61\x63\x68\145\55\103\157\156\x74\162\x6f\x6c\x3a\x20\156\157\x2d\x73\x74\157\x72\x65\54\40\x6e\157\x2d\x63\141\x63\x68\x65\x2c\40\155\x75\x73\x74\55\162\145\166\x61\x6c\151\144\141\164\x65\54\x20\x6d\x61\170\x2d\x61\147\x65\x3d\x30"); header("\x50\x72\x61\x67\x6d\141\x3a\40\x6e\157\x2d\143\x61\x63\x68\145"); header("\x45\x78\x70\x69\x72\145\x73\72\40" . gmdate("\x44\x2c\x20\x64\40\115\x20\x59\40\x48\x3a\151\72\163\40\134\x47\134\115\x5c\124", time())); qgqasacusgwmoegy: return $moooemyaqewumiay; } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\141\x73\x74\55\115\157\144\151\x66\x69\145\x64\x3a\40" . gmdate("\x44\54\x20\144\40\115\x20\131\x20\110\x3a\151\72\x73", filemtime($esaqeawoigqgagum)) . "\x20\x47\x4d\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto qscqkykqskqmisgw; } readfile($esaqeawoigqgagum); $this->log("\123\x65\162\166\151\156\147\x20\x63\141\x63\x68\145\40\x66\151\154\145\x2e", ["\160\x61\164\x68" => $esaqeawoigqgagum, "\x6d\157\x64\151\x66\151\x65\144" => $cocykkikgmcykggu]); qscqkykqskqmisgw: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\114\x61\163\x74\x2d\115\x6f\144\x69\x66\151\x65\144\72\x20" . gmdate("\104\x2c\40\144\x20\115\40\x59\40\110\72\x69\72\x73", filemtime($esaqeawoigqgagum)) . "\40\107\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto ksqgwiceoomkuuiy; } readgzfile($esaqeawoigqgagum); $this->log("\123\145\x72\x76\151\x6e\x67\x20\x67\x7a\151\x70\40\143\141\143\150\x65\40\146\151\154\145\x2e", ["\160\x61\164\150" => $esaqeawoigqgagum, "\155\157\x64\x69\x66\x69\x65\x64" => $cocykkikgmcykggu]); ksqgwiceoomkuuiy: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $ckikaauwqiigkskw = $esaqeawoigqgagum . "\x5f\x67\172\151\160"; $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\x74\x65\155\160"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\164\145\x6d\x70"; if ($iiaumsgauuyeqksw->exists($egqeikuccqmogcum)) { goto ysssquieawyysiyc; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->rename($egqeikuccqmogcum, $esaqeawoigqgagum, true); if (!function_exists("\x67\172\145\x6e\x63\157\x64\145")) { goto gkoiyaagwgycysim; } $gomewsucumqsiske = DecoratorHook::sscegwueamckwmcy("\143\x61\x63\x68\x65\x5f\147\172\x65\156\143\157\144\x65\137\154\145\x76\x65\154\137\x63\x6f\155\160\162\x65\163\x73\151\x6f\156", 6); $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske)); $iiaumsgauuyeqksw->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw, true); gkoiyaagwgycysim: ysssquieawyysiyc: } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto yomoeykcqyukscmi; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\x45\122\x56\x45\x52\x5f\x50\122\x4f\x54\117\103\117\114", '') . "\x20\63\x30\x34\40\116\157\x74\40\x4d\157\144\x69\x66\x69\x65\144", true, 304); header("\x45\x78\x70\151\162\x65\163\72\40" . gmdate("\x44\x2c\x20\x64\40\x4d\40\131\40\110\x3a\x69\72\163") . "\40\x47\x4d\x54"); header("\x43\141\143\150\145\55\x43\157\x6e\164\x72\x6f\x6c\72\x20\x6e\157\x2d\x63\x61\x63\150\x65\54\x20\x6d\165\x73\164\55\x72\x65\166\141\x6c\151\x64\x61\x74\145"); $this->log("\123\x65\x72\166\151\x6e\147\40\x60\x33\x30\x34\x60\x20\x63\141\x63\x68\145\x20\146\x69\154\145\56", ["\160\x61\x74\150" => $esaqeawoigqgagum, "\x6d\157\144\x69\x66\151\145\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; yomoeykcqyukscmi: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo() : string { $ouwgeioocoeccyik = $this->scsyywuaiumequqw(); $ouwgeioocoeccyik = preg_replace_callback("\x2f\x25\133\60\55\x39\101\55\106\x5d\173\62\x7d\57", [$this, "\155\x71\x77\157\x73\171\151\165\155\145\x77\x71\145\x67\155\153"], $ouwgeioocoeccyik); return str_replace("\x3f", "\43", $ouwgeioocoeccyik); } private final function muiwqeouwouegcao() { if (defined("\x44\117\x4e\124\x5f\120\105\122\x46\x4f\x52\x4d\101\x4e\103\105\x5f\x4f\120\x54\111\115\111\x5a\x45")) { goto swmgucaogosuueug; } define("\104\117\x4e\124\x5f\x50\105\x52\106\x4f\x52\x4d\x41\116\x43\105\137\x4f\120\124\x49\115\111\132\x45", true); swmgucaogosuueug: } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = ManipulateServer::iawueuwikeeeseya(); if ($uykgysuswksgmwqy) { goto uwsmcsiiisuocgwg; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\x54\x50\x5f\111\x46\x5f\x4d\117\104\x49\106\x49\105\x44\x5f\123\111\x4e\103\x45", ''); goto suaymckwwgmugsaa; uwsmcsiiisuocgwg: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\146\x2d\x4d\157\144\x69\146\151\x65\x64\55\123\x69\156\x63\x65"] ?? ''; suaymckwwgmugsaa: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\x64\x6f\137\x63\141\143\150\x65\x5f\147\x65\x6e\x65\162\x61\x74\x65\x5f\x63\x61\143\x68\151\156\147\x5f\x66\151\154\x65\163", true); } private function scsyywuaiumequqw() : string { $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc(); $migiiksoiymissge = ManipulateFormat::gokuyqsimauyacke($migiiksoiymissge); $migiiksoiymissge = rawurldecode($migiiksoiymissge); return $this->amqagusacuuuaswg() . sha1(untrailingslashit($migiiksoiymissge)); } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto wsqoskqgyooqeyga; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); wsqoskqgyooqeyga: return $qcgkuqesqqymcuui; } }
