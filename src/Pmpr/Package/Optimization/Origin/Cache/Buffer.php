<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c6e9e36d31a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Package\Optimization\Buffer\Config; use Pmpr\Package\Optimization\Buffer\Test; use Pmpr\Package\Optimization\Buffer\Buffer as BaseClass; use Pmpr\Package\Optimization\Manipulate\ManipulateFormat; class Buffer extends BaseClass { protected ?string $id = "\x63\x61\x63\150\151\x6e\147\137\160\162\157\143\145\x73\x73"; protected Config $config; protected ?string $path; protected ?Filesystem $filesystem = null; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = trailingslashit($ywmkwiwkosakssii["\160\141\x74\x68"]); $this->config = $uiewakwqscemywuo; $this->filesystem = Filesystem::symcgieuakksimmu(); parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function kcciqwskewsuaemk() : ?Filesystem { return $this->filesystem; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq() && $this->wmgoigiyyeauqwaq()->aceaeommyuooiqge()->get("\x63\x61\143\x68\145\137\x65\x6e\x61\x62\154\145")) { goto kuyqusuycscumuek; } $this->muiwqeouwouegcao(); goto cycwgukowsksmkyc; kuyqusuycscumuek: $xswggycymueygwse = $this->gskqygiceygcguyo(); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\x2e\x68\164\x6d\154"; $this->log("\114\x6f\x6f\x6b\x69\x6e\147\40\146\157\162\40\143\141\143\150\145\x20\x66\x69\154\145\x2e", ["\x70\x61\164\150" => $nsmgceoqaqogqmuw]); $ecggassyswkoyocq = $nsmgceoqaqogqmuw . "\137\x67\172\151\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\120\137\x41\103\x43\105\120\124\x5f\x45\x4e\x43\x4f\104\x49\116\107"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\147\x7a\151\160"); if (!($acggykmsksykwyqy && $iiaumsgauuyeqksw->coeoweawgagkycwe($ecggassyswkoyocq))) { goto ooqmaweuqmcmwsuk; } $this->qmkgowiegksamcou($ecggassyswkoyocq); ooqmaweuqmcmwsuk: if (!$iiaumsgauuyeqksw->coeoweawgagkycwe($nsmgceoqaqogqmuw)) { goto uscissuaiyuiukea; } $this->ecsimoiakyygwais($nsmgceoqaqogqmuw); uscissuaiyuiukea: $this->log("\123\164\x61\x72\x74\40\142\165\146\x66\x65\x72\x2e", ["\x70\141\164\x68" => $nsmgceoqaqogqmuw]); ob_start([$this, "\157\161\x63\161\x6b\157\161\167\143\165\x6f\161\x75\163\x6b\165"]); cycwgukowsksmkyc: } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { $yciaosuiyeieceug = true; if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto ggoimgeeuugseiwk; } $yciaosuiyeieceug = false; goto gimquiiwucueoqkw; ggoimgeeuugseiwk: $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($this->omgegoiwsakgwwug()) { goto qycsooiomiugimqc; } $yciaosuiyeieceug = false; goto qioswooukgoowsuc; qycsooiomiugimqc: $xswggycymueygwse = $this->gskqygiceygcguyo(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\x2e\x68\164\155\154"; $qwqyukkaswwygsyg = dirname($nsmgceoqaqogqmuw); $wmgiiumwscoyqkqa = $iiaumsgauuyeqksw->mkdir($qwqyukkaswwygsyg); if (!$wmgiiumwscoyqkqa) { goto siuyaemoiiqyoggo; } $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($nsmgceoqaqogqmuw, $moooemyaqewumiay); siuyaemoiiqyoggo: if (!$iiaumsgauuyeqksw->exists($nsmgceoqaqogqmuw)) { goto koemwyegoqwiikom; } header("\x4c\141\x73\164\x2d\x4d\x6f\144\x69\146\x69\145\x64\x3a\x20" . gmdate("\104\54\40\144\x20\115\40\x59\x20\x48\x3a\151\72\163", filemtime($nsmgceoqaqogqmuw)) . "\x20\x47\x4d\x54"); koemwyegoqwiikom: qioswooukgoowsuc: gimquiiwucueoqkw: if ($yciaosuiyeieceug) { goto eimouyomcoqkmaae; } header("\103\141\x63\x68\145\55\x43\157\156\164\162\x6f\154\72\40\156\x6f\x2d\x73\164\157\x72\x65\54\40\x6e\157\55\143\x61\x63\x68\x65\x2c\x20\x6d\x75\x73\164\x2d\x72\145\166\141\x6c\x69\144\x61\164\145\54\x20\155\x61\x78\55\x61\147\x65\75\60"); header("\120\162\x61\147\155\141\x3a\40\156\x6f\x2d\143\141\143\150\x65"); header("\x45\170\160\x69\162\145\163\x3a\x20" . gmdate("\104\54\40\x64\40\115\40\x59\x20\x48\72\x69\x3a\163\40\x5c\x47\x5c\x4d\134\124", time())); eimouyomcoqkmaae: return $moooemyaqewumiay; } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\x4c\141\x73\164\55\x4d\157\x64\151\146\x69\145\144\72\40" . gmdate("\104\x2c\x20\144\x20\x4d\40\131\x20\x48\72\151\72\x73", filemtime($esaqeawoigqgagum)) . "\x20\107\x4d\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto kkwqmoeeqygoimwg; } readfile($esaqeawoigqgagum); $this->log("\x53\145\162\x76\151\156\x67\x20\x63\141\143\x68\x65\40\x66\x69\154\145\56", ["\x70\x61\x74\x68" => $esaqeawoigqgagum, "\155\157\144\x69\x66\151\145\x64" => $cocykkikgmcykggu]); kkwqmoeeqygoimwg: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\x4c\x61\163\164\x2d\x4d\157\x64\x69\x66\151\x65\x64\72\x20" . gmdate("\x44\54\x20\x64\x20\115\40\x59\40\110\72\x69\x3a\163", filemtime($esaqeawoigqgagum)) . "\x20\x47\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto mwqcykaeywsmoumm; } readgzfile($esaqeawoigqgagum); $this->log("\x53\x65\x72\x76\151\x6e\x67\x20\147\x7a\x69\160\x20\143\x61\x63\150\x65\40\x66\x69\154\x65\56", ["\160\141\x74\150" => $esaqeawoigqgagum, "\x6d\x6f\144\x69\146\151\x65\x64" => $cocykkikgmcykggu]); mwqcykaeywsmoumm: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\147\172\151\160"; $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\x74\x65\x6d\x70"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\x5f\164\145\x6d\x70"; if ($iiaumsgauuyeqksw->exists($egqeikuccqmogcum)) { goto ywoyioqqyuocoygk; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->rename($egqeikuccqmogcum, $esaqeawoigqgagum, true); if (!function_exists("\147\x7a\x65\156\143\157\x64\x65")) { goto awgmyaycugswmwae; } $gomewsucumqsiske = DecoratorHook::sscegwueamckwmcy("\143\141\x63\x68\x65\x5f\147\x7a\x65\x6e\143\x6f\144\x65\137\x6c\145\x76\145\x6c\137\x63\x6f\155\160\x72\x65\x73\163\151\x6f\156", 6); $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske)); $iiaumsgauuyeqksw->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw, true); awgmyaycugswmwae: ywoyioqqyuocoygk: } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto iauwkeeaqsgweeoo; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\105\x52\x56\x45\x52\137\x50\122\117\x54\x4f\x43\x4f\x4c", '') . "\x20\x33\60\64\x20\116\157\164\x20\x4d\x6f\144\x69\x66\x69\145\144", true, 304); header("\x45\x78\x70\151\162\x65\163\72\x20" . gmdate("\104\54\40\144\x20\x4d\x20\x59\40\x48\x3a\x69\72\163") . "\40\x47\x4d\124"); header("\103\x61\143\x68\145\55\103\157\156\164\162\x6f\x6c\x3a\x20\156\x6f\x2d\143\x61\143\150\145\54\40\155\165\163\164\55\162\145\x76\x61\154\x69\144\x61\x74\x65"); $this->log("\x53\x65\162\x76\151\x6e\x67\x20\x60\x33\x30\64\140\40\x63\x61\143\x68\145\x20\146\151\154\x65\x2e", ["\x70\x61\164\x68" => $esaqeawoigqgagum, "\155\157\x64\x69\x66\x69\145\x64" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; iauwkeeaqsgweeoo: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo() : string { $ouwgeioocoeccyik = $this->scsyywuaiumequqw(); $ouwgeioocoeccyik = preg_replace_callback("\57\x25\133\60\x2d\x39\101\55\106\x5d\x7b\62\x7d\x2f", [$this, "\x6d\x71\167\x6f\163\x79\x69\165\x6d\145\x77\161\x65\x67\x6d\153"], $ouwgeioocoeccyik); return str_replace("\77", "\x23", $ouwgeioocoeccyik); } private final function muiwqeouwouegcao() { if (defined("\x44\x4f\116\124\137\x50\105\x52\x46\117\122\x4d\x41\x4e\103\x45\137\x4f\120\x54\x49\x4d\111\x5a\105")) { goto aycqgowuwagcgque; } define("\104\117\x4e\x54\137\120\x45\x52\x46\x4f\122\115\101\116\x43\105\137\x4f\x50\x54\x49\x4d\111\132\105", true); aycqgowuwagcgque: } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = ManipulateServer::iawueuwikeeeseya(); if ($uykgysuswksgmwqy) { goto icuukwkwqeoogyae; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\120\137\x49\x46\137\115\x4f\x44\111\x46\x49\x45\104\x5f\123\111\116\x43\x45", ''); goto iwcmgioeaiyuacwi; icuukwkwqeoogyae: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\146\x2d\115\157\x64\151\x66\151\145\x64\55\123\151\x6e\x63\145"] ?? ''; iwcmgioeaiyuacwi: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\x64\x6f\137\143\x61\x63\x68\145\137\147\x65\x6e\145\162\x61\x74\x65\137\143\x61\143\150\x69\x6e\x67\137\x66\151\154\x65\163", true); } private function scsyywuaiumequqw() : string { $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc(); $migiiksoiymissge = ManipulateFormat::gokuyqsimauyacke($migiiksoiymissge); $migiiksoiymissge = rawurldecode($migiiksoiymissge); return $this->amqagusacuuuaswg() . sha1(untrailingslashit($migiiksoiymissge)); } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto iyyaiuccouqowyga; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); iyyaiuccouqowyga: return $qcgkuqesqqymcuui; } }
