<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c707b39ae82             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Package\Optimization\Buffer\Config; use Pmpr\Package\Optimization\Buffer\Test; use Pmpr\Package\Optimization\Buffer\Buffer as BaseClass; use Pmpr\Package\Optimization\Manipulate\ManipulateFormat; class Buffer extends BaseClass { protected ?string $id = "\143\141\143\150\151\156\x67\137\x70\162\157\143\145\x73\163"; protected Config $config; protected ?string $path; protected ?Filesystem $filesystem = null; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = trailingslashit($ywmkwiwkosakssii["\x70\141\x74\x68"]); $this->config = $uiewakwqscemywuo; $this->filesystem = Filesystem::symcgieuakksimmu(); parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function kcciqwskewsuaemk() : ?Filesystem { return $this->filesystem; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq() && $this->wmgoigiyyeauqwaq()->aceaeommyuooiqge()->get("\x63\141\x63\150\x65\137\x65\x6e\x61\142\154\x65")) { goto kuyqusuycscumuek; } $this->muiwqeouwouegcao(); goto cycwgukowsksmkyc; kuyqusuycscumuek: $xswggycymueygwse = $this->gskqygiceygcguyo(); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\56\x68\164\155\x6c"; $this->log("\114\x6f\x6f\153\151\x6e\x67\40\146\x6f\162\40\143\x61\x63\150\x65\x20\146\x69\x6c\145\x2e", ["\160\141\164\x68" => $nsmgceoqaqogqmuw]); $ecggassyswkoyocq = $nsmgceoqaqogqmuw . "\137\x67\x7a\151\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\124\x50\137\101\103\x43\x45\x50\x54\x5f\x45\x4e\x43\117\104\x49\x4e\x47"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\147\172\151\160"); if (!($acggykmsksykwyqy && $iiaumsgauuyeqksw->coeoweawgagkycwe($ecggassyswkoyocq))) { goto ooqmaweuqmcmwsuk; } $this->qmkgowiegksamcou($ecggassyswkoyocq); ooqmaweuqmcmwsuk: if (!$iiaumsgauuyeqksw->coeoweawgagkycwe($nsmgceoqaqogqmuw)) { goto uscissuaiyuiukea; } $this->ecsimoiakyygwais($nsmgceoqaqogqmuw); uscissuaiyuiukea: $this->log("\x53\x74\141\x72\164\40\142\165\146\146\x65\x72\56", ["\160\141\164\150" => $nsmgceoqaqogqmuw]); ob_start([$this, "\157\161\143\x71\x6b\157\161\x77\x63\x75\x6f\x71\165\x73\x6b\x75"]); cycwgukowsksmkyc: } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { $yciaosuiyeieceug = true; if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto ggoimgeeuugseiwk; } $yciaosuiyeieceug = false; goto gimquiiwucueoqkw; ggoimgeeuugseiwk: $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($this->omgegoiwsakgwwug()) { goto qycsooiomiugimqc; } $yciaosuiyeieceug = false; goto qioswooukgoowsuc; qycsooiomiugimqc: $xswggycymueygwse = $this->gskqygiceygcguyo(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\x2e\x68\164\x6d\x6c"; $qwqyukkaswwygsyg = dirname($nsmgceoqaqogqmuw); $wmgiiumwscoyqkqa = $iiaumsgauuyeqksw->mkdir($qwqyukkaswwygsyg); if (!$wmgiiumwscoyqkqa) { goto siuyaemoiiqyoggo; } $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($nsmgceoqaqogqmuw, $moooemyaqewumiay); siuyaemoiiqyoggo: if (!$iiaumsgauuyeqksw->exists($nsmgceoqaqogqmuw)) { goto koemwyegoqwiikom; } header("\114\141\x73\164\x2d\115\157\144\x69\146\151\145\144\72\40" . gmdate("\104\x2c\x20\144\40\115\40\131\40\x48\x3a\151\x3a\x73", filemtime($nsmgceoqaqogqmuw)) . "\40\107\x4d\124"); koemwyegoqwiikom: qioswooukgoowsuc: gimquiiwucueoqkw: if ($yciaosuiyeieceug) { goto eimouyomcoqkmaae; } header("\x43\141\143\150\145\55\x43\x6f\x6e\x74\x72\157\x6c\72\x20\156\x6f\x2d\163\164\157\x72\x65\x2c\40\x6e\157\x2d\x63\x61\x63\x68\x65\x2c\x20\x6d\x75\163\x74\x2d\162\x65\166\141\154\x69\144\141\x74\x65\54\x20\155\x61\170\x2d\x61\147\x65\x3d\60"); header("\120\162\x61\x67\x6d\141\x3a\40\x6e\157\55\x63\141\143\x68\x65"); header("\x45\170\160\151\x72\x65\x73\x3a\40" . gmdate("\104\54\40\x64\x20\x4d\40\x59\40\110\x3a\x69\72\163\x20\x5c\107\x5c\115\x5c\124", time())); eimouyomcoqkmaae: return $moooemyaqewumiay; } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\x4c\141\x73\164\55\115\x6f\x64\151\146\x69\145\144\x3a\x20" . gmdate("\104\54\x20\144\x20\x4d\40\131\40\110\x3a\x69\x3a\x73", filemtime($esaqeawoigqgagum)) . "\x20\x47\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto kkwqmoeeqygoimwg; } readfile($esaqeawoigqgagum); $this->log("\123\145\162\166\151\156\147\x20\x63\x61\143\150\145\x20\x66\151\x6c\x65\x2e", ["\160\x61\x74\150" => $esaqeawoigqgagum, "\x6d\157\144\x69\x66\151\x65\x64" => $cocykkikgmcykggu]); kkwqmoeeqygoimwg: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\x4c\141\x73\x74\x2d\x4d\x6f\144\x69\x66\151\x65\144\72\x20" . gmdate("\104\54\40\x64\40\115\x20\x59\x20\110\72\x69\x3a\x73", filemtime($esaqeawoigqgagum)) . "\x20\107\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto mwqcykaeywsmoumm; } readgzfile($esaqeawoigqgagum); $this->log("\x53\x65\x72\166\x69\x6e\x67\40\x67\x7a\151\x70\x20\x63\141\143\150\x65\x20\x66\151\x6c\x65\56", ["\x70\141\x74\x68" => $esaqeawoigqgagum, "\155\x6f\144\151\146\x69\145\x64" => $cocykkikgmcykggu]); mwqcykaeywsmoumm: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $ckikaauwqiigkskw = $esaqeawoigqgagum . "\x5f\147\172\151\x70"; $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\x74\x65\x6d\x70"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\x74\x65\x6d\160"; if ($iiaumsgauuyeqksw->exists($egqeikuccqmogcum)) { goto ywoyioqqyuocoygk; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->rename($egqeikuccqmogcum, $esaqeawoigqgagum, true); if (!function_exists("\x67\x7a\145\156\143\x6f\144\x65")) { goto awgmyaycugswmwae; } $gomewsucumqsiske = DecoratorHook::sscegwueamckwmcy("\143\141\143\150\x65\137\x67\x7a\x65\x6e\143\157\x64\x65\x5f\154\x65\166\145\154\x5f\x63\x6f\155\x70\162\x65\x73\163\151\x6f\156", 6); $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske)); $iiaumsgauuyeqksw->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw, true); awgmyaycugswmwae: ywoyioqqyuocoygk: } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto iauwkeeaqsgweeoo; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\105\x52\x56\x45\x52\137\x50\122\117\x54\117\103\117\x4c", '') . "\x20\63\60\64\x20\116\x6f\164\x20\115\157\144\x69\146\151\x65\144", true, 304); header("\x45\x78\x70\151\162\145\x73\72\40" . gmdate("\x44\x2c\x20\x64\40\115\x20\x59\40\x48\x3a\x69\72\163") . "\40\x47\115\x54"); header("\103\x61\143\150\145\55\103\157\x6e\x74\162\157\154\72\x20\156\x6f\55\143\141\143\x68\x65\54\40\155\165\163\x74\x2d\x72\x65\166\141\x6c\x69\x64\x61\x74\145"); $this->log("\123\x65\162\x76\x69\156\147\x20\140\63\60\64\x60\x20\143\141\143\150\x65\x20\146\x69\x6c\x65\56", ["\160\141\164\x68" => $esaqeawoigqgagum, "\155\x6f\x64\x69\146\151\145\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; iauwkeeaqsgweeoo: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo() : string { $ouwgeioocoeccyik = $this->scsyywuaiumequqw(); $ouwgeioocoeccyik = preg_replace_callback("\x2f\x25\x5b\x30\55\71\101\x2d\x46\x5d\173\62\175\x2f", [$this, "\x6d\161\x77\157\x73\171\x69\165\155\x65\x77\161\145\147\x6d\153"], $ouwgeioocoeccyik); return str_replace("\77", "\x23", $ouwgeioocoeccyik); } private final function muiwqeouwouegcao() { if (defined("\x44\117\116\x54\137\x50\x45\122\106\x4f\122\115\101\116\103\105\x5f\x4f\120\x54\x49\115\x49\132\105")) { goto aycqgowuwagcgque; } define("\104\x4f\116\124\x5f\x50\x45\122\x46\117\122\x4d\101\x4e\x43\x45\x5f\117\120\x54\111\115\111\132\x45", true); aycqgowuwagcgque: } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = ManipulateServer::iawueuwikeeeseya(); if ($uykgysuswksgmwqy) { goto icuukwkwqeoogyae; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\120\137\x49\106\x5f\115\x4f\104\111\106\111\x45\104\x5f\123\x49\x4e\103\105", ''); goto iwcmgioeaiyuacwi; icuukwkwqeoogyae: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\146\55\115\x6f\144\151\x66\x69\145\x64\x2d\123\151\156\x63\x65"] ?? ''; iwcmgioeaiyuacwi: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\144\157\x5f\x63\x61\143\150\x65\137\147\145\156\x65\x72\141\164\x65\x5f\143\141\143\x68\x69\156\x67\137\x66\151\x6c\145\x73", true); } private function scsyywuaiumequqw() : string { $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc(); $migiiksoiymissge = ManipulateFormat::gokuyqsimauyacke($migiiksoiymissge); $migiiksoiymissge = rawurldecode($migiiksoiymissge); return $this->amqagusacuuuaswg() . sha1(untrailingslashit($migiiksoiymissge)); } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto iyyaiuccouqowyga; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); iyyaiuccouqowyga: return $qcgkuqesqqymcuui; } }
