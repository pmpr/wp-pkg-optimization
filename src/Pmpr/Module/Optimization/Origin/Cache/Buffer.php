<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62ea46af9a44c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Module\Optimization\Buffer\Config; use Pmpr\Module\Optimization\Buffer\Test; use Pmpr\Module\Optimization\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; class Buffer extends BaseClass { protected ?string $id = "\143\x61\143\150\x69\156\147\137\x70\x72\157\x63\145\163\163"; protected Config $config; protected ?string $path; protected ?Filesystem $filesystem = null; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = trailingslashit($ywmkwiwkosakssii["\160\x61\x74\x68"]); $this->config = $uiewakwqscemywuo; $this->filesystem = Filesystem::symcgieuakksimmu(); parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function kcciqwskewsuaemk() : ?Filesystem { return $this->filesystem; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq() && $this->wmgoigiyyeauqwaq()->aceaeommyuooiqge()->get("\x63\141\x63\150\145\137\145\156\141\x62\x6c\x65")) { goto sooecucuakgkuyis; } $this->muiwqeouwouegcao(); goto ywqakqkmmcoceqka; sooecucuakgkuyis: $xswggycymueygwse = $this->gskqygiceygcguyo(); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\x2e\x68\x74\155\154"; $this->log("\114\x6f\x6f\153\x69\x6e\147\x20\x66\x6f\x72\x20\x63\141\x63\x68\145\x20\x66\151\x6c\x65\x2e", ["\160\141\164\x68" => $nsmgceoqaqogqmuw]); $ecggassyswkoyocq = $nsmgceoqaqogqmuw . "\137\x67\x7a\x69\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\120\137\x41\103\x43\105\x50\x54\137\105\x4e\x43\117\x44\111\116\x47"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\x67\x7a\151\160"); if (!($acggykmsksykwyqy && $iiaumsgauuyeqksw->coeoweawgagkycwe($ecggassyswkoyocq))) { goto yseyyukqaowwouua; } $this->qmkgowiegksamcou($ecggassyswkoyocq); yseyyukqaowwouua: if (!$iiaumsgauuyeqksw->coeoweawgagkycwe($nsmgceoqaqogqmuw)) { goto qcgyggiaowuqswuw; } $this->ecsimoiakyygwais($nsmgceoqaqogqmuw); qcgyggiaowuqswuw: $this->log("\x53\x74\141\x72\x74\x20\x62\x75\x66\146\145\162\56", ["\x70\141\x74\150" => $nsmgceoqaqogqmuw]); ob_start([$this, "\x6f\x71\x63\161\153\x6f\x71\x77\143\165\157\161\165\x73\x6b\x75"]); ywqakqkmmcoceqka: } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { $yciaosuiyeieceug = true; if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto oqwwacmigasucsoc; } $yciaosuiyeieceug = false; goto egkeqqgakieyimuq; oqwwacmigasucsoc: $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($this->omgegoiwsakgwwug()) { goto koukiyqaccegmquc; } $yciaosuiyeieceug = false; goto ekakkiuuquqkccse; koukiyqaccegmquc: $xswggycymueygwse = $this->gskqygiceygcguyo(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\x2e\x68\x74\x6d\154"; $qwqyukkaswwygsyg = dirname($nsmgceoqaqogqmuw); $wmgiiumwscoyqkqa = $iiaumsgauuyeqksw->mkdir($qwqyukkaswwygsyg); if (!$wmgiiumwscoyqkqa) { goto kwsqgqmwyyeykgum; } $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($nsmgceoqaqogqmuw, $moooemyaqewumiay); kwsqgqmwyyeykgum: if (!$iiaumsgauuyeqksw->exists($nsmgceoqaqogqmuw)) { goto emauuoieewwoeyqq; } header("\x4c\x61\163\164\x2d\x4d\157\144\151\146\151\x65\144\x3a\40" . gmdate("\x44\x2c\40\x64\40\115\40\131\x20\x48\72\x69\72\x73", filemtime($nsmgceoqaqogqmuw)) . "\x20\107\x4d\x54"); emauuoieewwoeyqq: ekakkiuuquqkccse: egkeqqgakieyimuq: if ($yciaosuiyeieceug) { goto cakuguiciaiaeukg; } header("\103\141\x63\150\x65\55\103\x6f\x6e\x74\162\x6f\154\72\x20\x6e\x6f\55\163\164\157\x72\145\x2c\40\x6e\x6f\x2d\143\x61\x63\x68\x65\54\x20\155\165\163\x74\55\162\x65\166\x61\154\151\x64\141\164\145\x2c\x20\155\141\x78\x2d\x61\x67\x65\75\x30"); header("\120\162\141\147\x6d\141\x3a\x20\156\157\x2d\x63\141\143\150\145"); header("\105\x78\160\151\x72\145\163\x3a\40" . gmdate("\x44\54\x20\144\40\115\40\x59\x20\x48\x3a\x69\72\x73\x20\134\107\134\x4d\x5c\124", time())); cakuguiciaiaeukg: return $moooemyaqewumiay; } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\141\x73\164\55\x4d\157\144\151\x66\x69\x65\x64\x3a\40" . gmdate("\104\54\40\x64\40\115\x20\131\x20\x48\x3a\151\72\163", filemtime($esaqeawoigqgagum)) . "\x20\107\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto wswikooyuaaouqgk; } readfile($esaqeawoigqgagum); $this->log("\x53\145\x72\x76\151\156\147\x20\x63\x61\x63\x68\145\40\x66\x69\154\x65\56", ["\160\x61\164\x68" => $esaqeawoigqgagum, "\x6d\157\x64\151\146\151\x65\x64" => $cocykkikgmcykggu]); wswikooyuaaouqgk: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\x4c\x61\163\x74\55\115\x6f\144\x69\x66\x69\145\x64\x3a\x20" . gmdate("\104\x2c\40\144\40\115\40\131\x20\x48\72\x69\x3a\x73", filemtime($esaqeawoigqgagum)) . "\40\107\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto awwaiioyywmokwsm; } readgzfile($esaqeawoigqgagum); $this->log("\123\145\x72\x76\x69\x6e\x67\x20\x67\172\151\160\40\143\141\143\x68\145\40\x66\151\x6c\x65\x2e", ["\160\141\x74\150" => $esaqeawoigqgagum, "\155\x6f\144\151\146\151\145\144" => $cocykkikgmcykggu]); awwaiioyywmokwsm: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\x67\x7a\151\160"; $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\164\145\155\x70"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\164\x65\x6d\x70"; if ($iiaumsgauuyeqksw->exists($egqeikuccqmogcum)) { goto cumeycwmuuqawwyu; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->rename($egqeikuccqmogcum, $esaqeawoigqgagum, true); if (!function_exists("\x67\172\x65\156\143\157\x64\145")) { goto ckwmkquuyyugigom; } $gomewsucumqsiske = DecoratorHook::sscegwueamckwmcy("\143\x61\143\x68\145\x5f\147\172\145\156\143\157\144\145\x5f\154\x65\x76\145\154\137\143\157\x6d\x70\x72\145\x73\163\x69\x6f\156", 6); $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske)); $iiaumsgauuyeqksw->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw, true); ckwmkquuyyugigom: cumeycwmuuqawwyu: } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto uaicwcqwauosmsqm; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\122\x56\x45\x52\137\120\122\x4f\124\117\103\x4f\114", '') . "\x20\63\60\x34\40\x4e\157\x74\x20\115\x6f\x64\151\146\x69\145\x64", true, 304); header("\x45\170\x70\151\x72\145\x73\x3a\40" . gmdate("\x44\54\x20\x64\x20\115\x20\x59\40\110\x3a\151\x3a\163") . "\x20\x47\115\x54"); header("\x43\x61\143\x68\145\x2d\x43\157\156\164\x72\157\154\x3a\40\156\157\x2d\143\x61\x63\x68\x65\x2c\40\x6d\x75\163\164\55\162\x65\x76\x61\154\151\144\141\x74\145"); $this->log("\x53\x65\162\x76\151\x6e\x67\40\x60\63\x30\x34\x60\x20\143\x61\143\150\x65\x20\x66\151\x6c\x65\56", ["\160\x61\x74\x68" => $esaqeawoigqgagum, "\x6d\157\144\151\146\151\145\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; uaicwcqwauosmsqm: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo() : string { $ouwgeioocoeccyik = $this->scsyywuaiumequqw(); $ouwgeioocoeccyik = preg_replace_callback("\57\45\x5b\x30\55\x39\x41\55\106\x5d\x7b\62\x7d\57", [$this, "\155\x71\x77\x6f\163\x79\x69\165\x6d\145\167\x71\145\x67\155\x6b"], $ouwgeioocoeccyik); return str_replace("\x3f", "\43", $ouwgeioocoeccyik); } private final function muiwqeouwouegcao() { if (defined("\x44\117\116\x54\x5f\120\x45\x52\x46\117\x52\115\x41\116\x43\x45\137\117\120\x54\111\x4d\x49\x5a\105")) { goto gsqcoqqsioiyoykq; } define("\x44\x4f\116\124\x5f\x50\x45\122\x46\x4f\x52\115\x41\x4e\103\x45\x5f\x4f\x50\x54\x49\x4d\111\x5a\x45", true); gsqcoqqsioiyoykq: } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = ManipulateServer::iawueuwikeeeseya(); if ($uykgysuswksgmwqy) { goto goaowamiyyamueiw; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\120\137\111\106\x5f\115\117\104\111\106\111\105\x44\137\x53\x49\x4e\x43\105", ''); goto iaomqomgiwiegoca; goaowamiyyamueiw: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\146\55\115\x6f\144\x69\146\151\x65\144\x2d\123\151\x6e\x63\145"] ?? ''; iaomqomgiwiegoca: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\144\x6f\137\143\141\143\150\x65\x5f\147\x65\x6e\x65\x72\x61\x74\145\x5f\143\x61\143\x68\151\156\147\x5f\x66\x69\154\145\x73", true); } private function scsyywuaiumequqw() : string { $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc(); $migiiksoiymissge = ManipulateFormat::gokuyqsimauyacke($migiiksoiymissge); $migiiksoiymissge = rawurldecode($migiiksoiymissge); return $this->amqagusacuuuaswg() . sha1(untrailingslashit($migiiksoiymissge)); } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto ysweqawmawicakeo; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); ysweqawmawicakeo: return $qcgkuqesqqymcuui; } }
