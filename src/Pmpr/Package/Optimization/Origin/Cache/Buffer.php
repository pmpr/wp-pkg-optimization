<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6226653654432             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Package\Optimization\Buffer\Config; use Pmpr\Package\Optimization\Buffer\Test; use Pmpr\Package\Optimization\Buffer\Buffer as BaseClass; use Pmpr\Package\Optimization\Manipulate\ManipulateFormat; class Buffer extends BaseClass { protected ?string $id = "\x63\x61\x63\x68\x69\156\x67\x5f\x70\162\157\x63\x65\x73\x73"; protected Config $config; protected ?string $path; protected ?Filesystem $filesystem = null; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = trailingslashit($ywmkwiwkosakssii["\160\141\x74\150"]); $this->config = $uiewakwqscemywuo; $this->filesystem = Filesystem::symcgieuakksimmu(); parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function kcciqwskewsuaemk() : ?Filesystem { return $this->filesystem; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq() && $this->wmgoigiyyeauqwaq()->aceaeommyuooiqge()->get("\x63\x61\x63\150\x65\137\145\x6e\141\142\154\145")) { goto eygqeoiskweuiuqi; } $this->muiwqeouwouegcao(); goto uykwmucgoywoesui; eygqeoiskweuiuqi: $xswggycymueygwse = $this->gskqygiceygcguyo(); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\56\150\164\x6d\x6c"; $this->log("\x4c\157\x6f\153\151\x6e\x67\40\146\157\162\40\x63\141\x63\150\x65\40\x66\151\x6c\x65\x2e", ["\160\x61\164\150" => $nsmgceoqaqogqmuw]); $ecggassyswkoyocq = $nsmgceoqaqogqmuw . "\x5f\147\x7a\151\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\x50\x5f\101\103\x43\105\120\124\137\x45\x4e\103\x4f\x44\111\116\107"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\147\x7a\151\160"); if (!($acggykmsksykwyqy && $iiaumsgauuyeqksw->coeoweawgagkycwe($ecggassyswkoyocq))) { goto iamooqskosymqsmw; } $this->qmkgowiegksamcou($ecggassyswkoyocq); iamooqskosymqsmw: if (!$iiaumsgauuyeqksw->coeoweawgagkycwe($nsmgceoqaqogqmuw)) { goto wwccoougkywoaoui; } $this->ecsimoiakyygwais($nsmgceoqaqogqmuw); wwccoougkywoaoui: $this->log("\x53\x74\141\162\x74\x20\142\x75\146\146\x65\162\56", ["\x70\141\x74\x68" => $nsmgceoqaqogqmuw]); ob_start([$this, "\x6f\x71\x63\x71\153\x6f\x71\x77\x63\x75\x6f\x71\x75\x73\x6b\x75"]); uykwmucgoywoesui: } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { $yciaosuiyeieceug = true; if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto iwosouqsesoqcska; } $yciaosuiyeieceug = false; goto iacwyogogoccmwsg; iwosouqsesoqcska: $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($this->omgegoiwsakgwwug()) { goto kiqmcymowosckmii; } $yciaosuiyeieceug = false; goto iaygaasesyymwgss; kiqmcymowosckmii: $xswggycymueygwse = $this->gskqygiceygcguyo(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\x2e\x68\164\155\x6c"; $qwqyukkaswwygsyg = dirname($nsmgceoqaqogqmuw); $wmgiiumwscoyqkqa = $iiaumsgauuyeqksw->mkdir($qwqyukkaswwygsyg); if (!$wmgiiumwscoyqkqa) { goto iisieuaeyiqwckou; } $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($nsmgceoqaqogqmuw, $moooemyaqewumiay); iisieuaeyiqwckou: if (!$iiaumsgauuyeqksw->exists($nsmgceoqaqogqmuw)) { goto oskwkeaemiqcaqkc; } header("\x4c\x61\163\164\x2d\x4d\157\x64\151\x66\151\x65\144\x3a\x20" . gmdate("\104\x2c\x20\144\40\115\40\131\40\x48\72\x69\72\163", filemtime($nsmgceoqaqogqmuw)) . "\40\107\115\124"); oskwkeaemiqcaqkc: iaygaasesyymwgss: iacwyogogoccmwsg: if ($yciaosuiyeieceug) { goto wqmwcuggcisqieao; } header("\x43\141\143\x68\145\55\x43\x6f\x6e\164\162\x6f\x6c\72\40\x6e\x6f\x2d\163\164\157\x72\145\54\x20\156\157\x2d\x63\141\143\x68\145\x2c\40\155\x75\x73\x74\x2d\162\145\x76\x61\154\x69\x64\141\164\x65\54\40\x6d\x61\x78\x2d\x61\x67\145\75\60"); header("\120\162\x61\x67\x6d\141\x3a\x20\x6e\x6f\x2d\x63\141\143\150\x65"); header("\x45\170\160\x69\162\x65\x73\72\x20" . gmdate("\x44\x2c\40\144\40\x4d\40\131\x20\110\x3a\x69\x3a\x73\40\x5c\x47\x5c\x4d\134\124", time())); wqmwcuggcisqieao: return $moooemyaqewumiay; } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\141\x73\x74\55\x4d\157\144\151\146\151\145\144\72\40" . gmdate("\104\x2c\40\x64\x20\x4d\x20\x59\x20\x48\72\151\72\x73", filemtime($esaqeawoigqgagum)) . "\x20\x47\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto qsyqcokomswykyso; } readfile($esaqeawoigqgagum); $this->log("\123\145\162\x76\151\156\147\40\143\141\x63\150\x65\40\146\x69\x6c\x65\56", ["\x70\x61\x74\x68" => $esaqeawoigqgagum, "\155\x6f\144\151\x66\x69\145\x64" => $cocykkikgmcykggu]); qsyqcokomswykyso: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\x4c\x61\x73\164\55\x4d\157\144\151\146\x69\145\144\72\x20" . gmdate("\104\x2c\x20\144\40\x4d\40\131\x20\110\x3a\x69\72\x73", filemtime($esaqeawoigqgagum)) . "\40\x47\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto issgmmkcgesyeoas; } readgzfile($esaqeawoigqgagum); $this->log("\x53\145\x72\166\x69\x6e\147\x20\x67\x7a\x69\x70\40\x63\141\x63\150\145\40\146\x69\x6c\145\x2e", ["\160\141\x74\x68" => $esaqeawoigqgagum, "\x6d\157\144\x69\146\151\145\144" => $cocykkikgmcykggu]); issgmmkcgesyeoas: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\147\x7a\151\x70"; $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\164\145\155\x70"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\164\x65\x6d\160"; if ($iiaumsgauuyeqksw->exists($egqeikuccqmogcum)) { goto yueosioyegouuwqo; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->rename($egqeikuccqmogcum, $esaqeawoigqgagum, true); if (!function_exists("\x67\x7a\145\156\143\x6f\x64\x65")) { goto yeiicwscguyokwyu; } $gomewsucumqsiske = DecoratorHook::sscegwueamckwmcy("\x63\141\143\150\x65\x5f\147\x7a\145\x6e\x63\x6f\x64\x65\x5f\x6c\145\166\145\154\x5f\x63\x6f\155\x70\162\x65\163\163\x69\157\x6e", 6); $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske)); $iiaumsgauuyeqksw->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw, true); yeiicwscguyokwyu: yueosioyegouuwqo: } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto giuoqsumkimmuaya; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\105\x52\x56\x45\122\137\120\122\x4f\124\x4f\103\x4f\x4c", '') . "\x20\63\x30\x34\x20\116\157\x74\x20\115\157\144\x69\x66\x69\x65\x64", true, 304); header("\x45\170\x70\x69\x72\x65\x73\x3a\x20" . gmdate("\104\54\x20\x64\40\x4d\x20\x59\x20\x48\x3a\x69\x3a\163") . "\40\x47\115\x54"); header("\x43\141\143\150\145\55\103\157\156\x74\162\157\x6c\x3a\40\156\157\x2d\143\141\x63\150\145\54\40\x6d\165\x73\x74\55\x72\x65\x76\141\154\x69\144\141\164\145"); $this->log("\123\145\x72\166\x69\x6e\x67\x20\140\63\60\64\140\40\143\141\x63\150\145\40\146\x69\154\145\x2e", ["\160\x61\x74\150" => $esaqeawoigqgagum, "\155\157\x64\x69\146\151\145\x64" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; giuoqsumkimmuaya: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo() : string { $ouwgeioocoeccyik = $this->scsyywuaiumequqw(); $ouwgeioocoeccyik = preg_replace_callback("\x2f\x25\133\60\55\71\x41\55\x46\x5d\173\62\175\x2f", [$this, "\155\161\167\157\163\x79\151\x75\x6d\x65\167\x71\145\x67\155\153"], $ouwgeioocoeccyik); return str_replace("\x3f", "\43", $ouwgeioocoeccyik); } private final function muiwqeouwouegcao() { if (defined("\104\x4f\x4e\x54\137\x50\105\x52\106\x4f\122\115\x41\x4e\x43\105\137\117\120\x54\x49\115\x49\x5a\105")) { goto mssaawaiaimogowg; } define("\x44\x4f\116\124\x5f\120\105\x52\x46\x4f\x52\115\x41\x4e\x43\x45\137\x4f\120\124\111\x4d\x49\x5a\x45", true); mssaawaiaimogowg: } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = ManipulateServer::iawueuwikeeeseya(); if ($uykgysuswksgmwqy) { goto ccyiggckemwgooco; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\124\120\x5f\x49\106\x5f\x4d\117\104\x49\x46\111\x45\x44\137\x53\111\x4e\x43\x45", ''); goto umamqqwcoewcigew; ccyiggckemwgooco: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\146\55\115\x6f\144\151\146\x69\145\x64\55\x53\x69\156\143\145"] ?? ''; umamqqwcoewcigew: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\144\157\137\x63\141\x63\x68\x65\x5f\x67\x65\156\145\162\x61\x74\x65\137\x63\141\143\x68\151\x6e\147\137\x66\x69\154\x65\x73", true); } private function scsyywuaiumequqw() : string { $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc(); $migiiksoiymissge = ManipulateFormat::gokuyqsimauyacke($migiiksoiymissge); $migiiksoiymissge = rawurldecode($migiiksoiymissge); return $this->amqagusacuuuaswg() . sha1(untrailingslashit($migiiksoiymissge)); } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto swkeiggkawwgewuw; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); swkeiggkawwgewuw: return $qcgkuqesqqymcuui; } }
