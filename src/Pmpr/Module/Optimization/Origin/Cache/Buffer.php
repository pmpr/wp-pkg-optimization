<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             631ce1ad2f186             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Module\Optimization\Buffer\Config; use Pmpr\Module\Optimization\Buffer\Test; use Pmpr\Module\Optimization\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; class Buffer extends BaseClass { protected ?string $id = "\143\x61\x63\x68\x69\156\x67\137\x70\162\157\143\145\163\163"; protected Config $config; protected ?string $path; protected ?Filesystem $filesystem = null; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = trailingslashit($ywmkwiwkosakssii["\160\141\164\x68"]); $this->config = $uiewakwqscemywuo; $this->filesystem = Filesystem::symcgieuakksimmu(); parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function kcciqwskewsuaemk() : ?Filesystem { return $this->filesystem; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq() && $this->wmgoigiyyeauqwaq()->aceaeommyuooiqge()->get("\143\141\x63\150\145\x5f\145\156\x61\x62\x6c\x65")) { goto scgmwokeuqwiekkk; } $this->muiwqeouwouegcao(); goto ceusyscosamyaiws; scgmwokeuqwiekkk: $xswggycymueygwse = $this->gskqygiceygcguyo(); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\x2e\x68\x74\155\x6c"; $this->log("\x4c\157\x6f\x6b\151\156\147\40\146\x6f\162\40\x63\x61\x63\150\x65\x20\x66\151\154\x65\x2e", ["\160\141\164\x68" => $nsmgceoqaqogqmuw]); $ecggassyswkoyocq = $nsmgceoqaqogqmuw . "\x5f\x67\172\151\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\124\120\x5f\x41\103\x43\105\120\x54\137\105\116\x43\x4f\104\x49\116\107"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\x67\172\x69\160"); if (!($acggykmsksykwyqy && $iiaumsgauuyeqksw->coeoweawgagkycwe($ecggassyswkoyocq))) { goto gsusqquicmukegcs; } $this->qmkgowiegksamcou($ecggassyswkoyocq); gsusqquicmukegcs: if (!$iiaumsgauuyeqksw->coeoweawgagkycwe($nsmgceoqaqogqmuw)) { goto wcsysckgigeykkwy; } $this->ecsimoiakyygwais($nsmgceoqaqogqmuw); wcsysckgigeykkwy: $this->log("\123\164\141\x72\164\40\142\165\x66\x66\x65\x72\56", ["\x70\x61\164\x68" => $nsmgceoqaqogqmuw]); ob_start([$this, "\x6f\161\x63\161\153\x6f\x71\167\143\x75\x6f\161\x75\x73\153\x75"]); ceusyscosamyaiws: } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { $yciaosuiyeieceug = true; if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto wycmcqaauqkgegau; } $yciaosuiyeieceug = false; goto qcweoyigoaeacsow; wycmcqaauqkgegau: $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($this->omgegoiwsakgwwug()) { goto acsigwcaesyyoiie; } $yciaosuiyeieceug = false; goto aqaaqeucgoegeeuk; acsigwcaesyyoiie: $xswggycymueygwse = $this->gskqygiceygcguyo(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\56\150\164\155\154"; $qwqyukkaswwygsyg = dirname($nsmgceoqaqogqmuw); $wmgiiumwscoyqkqa = $iiaumsgauuyeqksw->mkdir($qwqyukkaswwygsyg); if (!$wmgiiumwscoyqkqa) { goto gysmmooawoeggaow; } $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($nsmgceoqaqogqmuw, $moooemyaqewumiay); gysmmooawoeggaow: if (!$iiaumsgauuyeqksw->exists($nsmgceoqaqogqmuw)) { goto iyikuwuweqigiuey; } header("\x4c\141\x73\x74\x2d\x4d\x6f\x64\x69\146\x69\145\x64\72\40" . gmdate("\x44\x2c\x20\x64\x20\x4d\x20\131\40\110\x3a\x69\x3a\x73", filemtime($nsmgceoqaqogqmuw)) . "\x20\x47\x4d\x54"); iyikuwuweqigiuey: aqaaqeucgoegeeuk: qcweoyigoaeacsow: if ($yciaosuiyeieceug) { goto iyceygqsmokgmams; } header("\x43\141\143\x68\145\55\x43\157\x6e\x74\162\x6f\154\x3a\x20\x6e\x6f\55\163\x74\x6f\162\145\54\40\x6e\157\x2d\x63\x61\143\150\145\54\40\155\x75\163\x74\55\x72\x65\166\x61\154\x69\144\141\164\x65\54\40\x6d\141\170\x2d\141\147\145\x3d\60"); header("\120\x72\x61\147\x6d\141\72\40\x6e\157\x2d\x63\x61\143\150\145"); header("\105\170\x70\x69\162\145\x73\72\40" . gmdate("\104\x2c\40\144\40\115\40\x59\40\110\x3a\151\x3a\163\40\134\107\x5c\115\x5c\124", time())); iyceygqsmokgmams: return $moooemyaqewumiay; } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\x4c\x61\x73\164\x2d\x4d\157\x64\x69\146\x69\x65\144\x3a\40" . gmdate("\104\54\40\x64\x20\115\x20\131\x20\x48\x3a\151\x3a\x73", filemtime($esaqeawoigqgagum)) . "\40\x47\x4d\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto wcekgciqeggiiwgk; } readfile($esaqeawoigqgagum); $this->log("\123\x65\162\166\x69\x6e\147\40\143\x61\143\x68\145\40\x66\x69\154\x65\56", ["\x70\x61\x74\x68" => $esaqeawoigqgagum, "\x6d\157\x64\151\x66\x69\x65\144" => $cocykkikgmcykggu]); wcekgciqeggiiwgk: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\x4c\x61\163\164\x2d\x4d\157\144\151\x66\151\x65\144\x3a\x20" . gmdate("\x44\x2c\x20\144\40\x4d\40\x59\40\x48\x3a\151\x3a\x73", filemtime($esaqeawoigqgagum)) . "\40\107\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto gkwuewqmqeswqukg; } readgzfile($esaqeawoigqgagum); $this->log("\x53\145\162\x76\151\x6e\x67\x20\x67\172\151\x70\x20\143\141\143\x68\x65\40\x66\x69\154\x65\56", ["\x70\141\x74\150" => $esaqeawoigqgagum, "\155\x6f\144\x69\146\151\x65\x64" => $cocykkikgmcykggu]); gkwuewqmqeswqukg: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\147\x7a\151\160"; $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\164\x65\x6d\160"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\x5f\164\x65\155\x70"; if ($iiaumsgauuyeqksw->exists($egqeikuccqmogcum)) { goto uqcwyyiykmwygeau; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->rename($egqeikuccqmogcum, $esaqeawoigqgagum, true); if (!function_exists("\x67\172\145\156\143\157\x64\145")) { goto sagemooicmgceiug; } $gomewsucumqsiske = DecoratorHook::sscegwueamckwmcy("\x63\141\x63\x68\145\x5f\x67\x7a\145\x6e\143\157\x64\x65\x5f\x6c\x65\x76\145\154\x5f\x63\157\x6d\x70\162\145\163\x73\x69\x6f\x6e", 6); $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske)); $iiaumsgauuyeqksw->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw, true); sagemooicmgceiug: uqcwyyiykmwygeau: } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto yeiokcoikcysyimu; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\105\x52\x56\105\x52\137\x50\x52\x4f\124\x4f\103\117\114", '') . "\x20\x33\x30\64\40\x4e\157\x74\40\115\157\144\151\146\151\145\144", true, 304); header("\x45\x78\x70\x69\162\145\x73\x3a\x20" . gmdate("\x44\54\x20\144\x20\x4d\x20\x59\40\x48\72\151\x3a\x73") . "\x20\107\x4d\124"); header("\103\x61\x63\150\145\x2d\103\x6f\156\164\x72\x6f\x6c\72\40\156\x6f\55\143\x61\143\x68\x65\54\40\155\165\x73\164\55\162\145\166\x61\154\151\144\x61\x74\x65"); $this->log("\123\145\x72\x76\x69\156\x67\40\140\x33\60\x34\140\40\143\141\x63\x68\145\x20\146\151\154\145\56", ["\160\x61\x74\150" => $esaqeawoigqgagum, "\155\x6f\x64\x69\146\x69\x65\x64" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; yeiokcoikcysyimu: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo() : string { $ouwgeioocoeccyik = $this->scsyywuaiumequqw(); $ouwgeioocoeccyik = preg_replace_callback("\57\45\133\x30\x2d\x39\101\x2d\x46\135\x7b\62\175\57", [$this, "\155\x71\x77\157\163\171\x69\165\155\x65\x77\x71\145\x67\x6d\x6b"], $ouwgeioocoeccyik); return str_replace("\x3f", "\43", $ouwgeioocoeccyik); } private final function muiwqeouwouegcao() { if (defined("\104\x4f\116\124\137\120\x45\122\x46\117\122\115\101\116\x43\x45\x5f\117\x50\x54\111\115\x49\132\x45")) { goto kkmwwqyesmkescyg; } define("\x44\x4f\x4e\124\x5f\x50\x45\x52\106\x4f\122\x4d\101\x4e\x43\105\x5f\117\x50\124\x49\x4d\x49\x5a\105", true); kkmwwqyesmkescyg: } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = ManipulateServer::iawueuwikeeeseya(); if ($uykgysuswksgmwqy) { goto uamuuwkyuqomqyuy; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\x50\x5f\x49\x46\137\115\117\x44\111\x46\111\105\x44\x5f\123\111\116\x43\x45", ''); goto ekwuycsiuqwycqea; uamuuwkyuqomqyuy: $sieoyimycoskwwku = $uykgysuswksgmwqy["\x49\146\x2d\115\157\x64\x69\x66\x69\145\144\x2d\123\x69\x6e\143\145"] ?? ''; ekwuycsiuqwycqea: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\x64\x6f\137\143\141\x63\150\x65\x5f\x67\x65\x6e\x65\162\x61\x74\145\x5f\143\x61\x63\150\x69\156\x67\137\x66\x69\x6c\145\163", true); } private function scsyywuaiumequqw() : string { return $this->amqagusacuuuaswg() . ManipulateFormat::ocyiomiukusoicuc(ManipulateServer::ekcymmyqoceukosc()); } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto iyaugygcsmqqqkmo; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); iyaugygcsmqqqkmo: return $qcgkuqesqqymcuui; } }
