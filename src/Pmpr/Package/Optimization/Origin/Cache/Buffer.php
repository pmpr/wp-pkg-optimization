<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c70dffa5ed1             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Package\Optimization\Buffer\Config; use Pmpr\Package\Optimization\Buffer\Test; use Pmpr\Package\Optimization\Buffer\Buffer as BaseClass; use Pmpr\Package\Optimization\Manipulate\ManipulateFormat; class Buffer extends BaseClass { protected ?string $id = "\143\x61\143\x68\151\156\x67\137\160\162\157\143\145\x73\x73"; protected Config $config; protected ?string $path; protected ?Filesystem $filesystem = null; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = trailingslashit($ywmkwiwkosakssii["\x70\141\164\x68"]); $this->config = $uiewakwqscemywuo; $this->filesystem = Filesystem::symcgieuakksimmu(); parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function kcciqwskewsuaemk() : ?Filesystem { return $this->filesystem; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq() && $this->wmgoigiyyeauqwaq()->aceaeommyuooiqge()->get("\143\x61\143\x68\145\137\x65\156\x61\x62\154\x65")) { goto kuyqusuycscumuek; } $this->muiwqeouwouegcao(); goto cycwgukowsksmkyc; kuyqusuycscumuek: $xswggycymueygwse = $this->gskqygiceygcguyo(); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\56\150\x74\155\x6c"; $this->log("\x4c\x6f\157\153\151\x6e\x67\40\146\x6f\162\40\x63\141\143\150\x65\x20\x66\x69\x6c\x65\56", ["\160\141\164\x68" => $nsmgceoqaqogqmuw]); $ecggassyswkoyocq = $nsmgceoqaqogqmuw . "\137\x67\172\x69\x70"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\120\137\x41\x43\x43\x45\x50\124\x5f\105\x4e\x43\117\104\x49\116\107"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\147\x7a\x69\x70"); if (!($acggykmsksykwyqy && $iiaumsgauuyeqksw->coeoweawgagkycwe($ecggassyswkoyocq))) { goto ooqmaweuqmcmwsuk; } $this->qmkgowiegksamcou($ecggassyswkoyocq); ooqmaweuqmcmwsuk: if (!$iiaumsgauuyeqksw->coeoweawgagkycwe($nsmgceoqaqogqmuw)) { goto uscissuaiyuiukea; } $this->ecsimoiakyygwais($nsmgceoqaqogqmuw); uscissuaiyuiukea: $this->log("\x53\164\x61\162\164\40\142\165\146\x66\145\162\x2e", ["\x70\141\164\150" => $nsmgceoqaqogqmuw]); ob_start([$this, "\157\161\x63\x71\153\157\x71\167\x63\x75\x6f\161\165\x73\153\165"]); cycwgukowsksmkyc: } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { $yciaosuiyeieceug = true; if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto ggoimgeeuugseiwk; } $yciaosuiyeieceug = false; goto gimquiiwucueoqkw; ggoimgeeuugseiwk: $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($this->omgegoiwsakgwwug()) { goto qycsooiomiugimqc; } $yciaosuiyeieceug = false; goto qioswooukgoowsuc; qycsooiomiugimqc: $xswggycymueygwse = $this->gskqygiceygcguyo(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\x2e\x68\x74\x6d\154"; $qwqyukkaswwygsyg = dirname($nsmgceoqaqogqmuw); $wmgiiumwscoyqkqa = $iiaumsgauuyeqksw->mkdir($qwqyukkaswwygsyg); if (!$wmgiiumwscoyqkqa) { goto siuyaemoiiqyoggo; } $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($nsmgceoqaqogqmuw, $moooemyaqewumiay); siuyaemoiiqyoggo: if (!$iiaumsgauuyeqksw->exists($nsmgceoqaqogqmuw)) { goto koemwyegoqwiikom; } header("\114\141\x73\164\x2d\x4d\x6f\144\x69\x66\151\145\144\72\x20" . gmdate("\104\x2c\40\144\x20\x4d\x20\x59\40\x48\72\x69\x3a\163", filemtime($nsmgceoqaqogqmuw)) . "\x20\107\x4d\x54"); koemwyegoqwiikom: qioswooukgoowsuc: gimquiiwucueoqkw: if ($yciaosuiyeieceug) { goto eimouyomcoqkmaae; } header("\x43\141\x63\x68\145\55\103\x6f\x6e\164\x72\x6f\x6c\72\x20\156\157\x2d\163\x74\x6f\162\x65\54\x20\156\157\x2d\x63\x61\x63\x68\145\x2c\40\x6d\x75\x73\164\x2d\162\145\166\141\154\x69\x64\x61\164\145\x2c\x20\x6d\141\x78\x2d\141\147\x65\x3d\60"); header("\120\x72\x61\x67\x6d\x61\x3a\x20\156\157\55\x63\141\x63\150\x65"); header("\105\x78\x70\x69\162\x65\x73\72\x20" . gmdate("\104\x2c\40\144\40\x4d\x20\x59\40\x48\x3a\151\72\x73\x20\x5c\x47\x5c\115\134\124", time())); eimouyomcoqkmaae: return $moooemyaqewumiay; } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\x61\x73\x74\x2d\x4d\x6f\144\151\146\151\x65\144\x3a\40" . gmdate("\x44\x2c\x20\144\x20\x4d\x20\131\40\x48\72\x69\x3a\x73", filemtime($esaqeawoigqgagum)) . "\x20\107\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto kkwqmoeeqygoimwg; } readfile($esaqeawoigqgagum); $this->log("\x53\145\162\x76\151\156\x67\40\x63\141\x63\150\x65\40\146\151\154\145\x2e", ["\x70\141\x74\150" => $esaqeawoigqgagum, "\x6d\x6f\x64\x69\146\x69\145\x64" => $cocykkikgmcykggu]); kkwqmoeeqygoimwg: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\x4c\x61\163\164\x2d\115\157\x64\x69\x66\x69\145\144\x3a\40" . gmdate("\104\x2c\x20\x64\40\x4d\x20\131\40\110\72\x69\x3a\x73", filemtime($esaqeawoigqgagum)) . "\x20\x47\x4d\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto mwqcykaeywsmoumm; } readgzfile($esaqeawoigqgagum); $this->log("\x53\x65\x72\166\151\x6e\147\40\x67\172\x69\160\40\x63\141\x63\x68\145\40\x66\x69\154\145\x2e", ["\160\141\x74\150" => $esaqeawoigqgagum, "\155\157\144\151\x66\x69\x65\144" => $cocykkikgmcykggu]); mwqcykaeywsmoumm: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\147\x7a\151\x70"; $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\164\145\155\160"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\x5f\x74\x65\155\x70"; if ($iiaumsgauuyeqksw->exists($egqeikuccqmogcum)) { goto ywoyioqqyuocoygk; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->rename($egqeikuccqmogcum, $esaqeawoigqgagum, true); if (!function_exists("\x67\172\145\x6e\x63\x6f\144\x65")) { goto awgmyaycugswmwae; } $gomewsucumqsiske = DecoratorHook::sscegwueamckwmcy("\x63\141\143\150\145\137\147\172\x65\x6e\143\x6f\x64\x65\137\x6c\145\x76\145\x6c\x5f\x63\157\155\160\162\145\x73\x73\151\157\x6e", 6); $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske)); $iiaumsgauuyeqksw->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw, true); awgmyaycugswmwae: ywoyioqqyuocoygk: } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto iauwkeeaqsgweeoo; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\105\122\x56\105\x52\x5f\120\x52\117\124\117\103\117\x4c", '') . "\x20\x33\60\x34\40\x4e\157\164\40\115\157\x64\x69\x66\x69\145\x64", true, 304); header("\105\x78\x70\x69\x72\145\163\72\x20" . gmdate("\104\54\x20\x64\40\x4d\x20\131\x20\110\72\151\x3a\163") . "\x20\107\115\124"); header("\103\141\x63\150\x65\55\103\x6f\156\x74\162\157\x6c\x3a\40\156\x6f\55\x63\141\x63\x68\145\54\x20\155\x75\x73\x74\55\162\145\166\x61\x6c\151\144\141\x74\145"); $this->log("\x53\x65\162\166\x69\x6e\x67\40\x60\x33\60\64\140\x20\x63\x61\143\x68\145\x20\x66\x69\x6c\x65\56", ["\x70\x61\x74\150" => $esaqeawoigqgagum, "\x6d\157\144\151\146\151\145\x64" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; iauwkeeaqsgweeoo: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo() : string { $ouwgeioocoeccyik = $this->scsyywuaiumequqw(); $ouwgeioocoeccyik = preg_replace_callback("\x2f\x25\133\60\55\71\101\55\x46\135\173\x32\175\x2f", [$this, "\155\161\x77\157\163\171\151\x75\x6d\145\167\161\145\x67\x6d\x6b"], $ouwgeioocoeccyik); return str_replace("\x3f", "\43", $ouwgeioocoeccyik); } private final function muiwqeouwouegcao() { if (defined("\x44\x4f\116\x54\137\120\x45\x52\x46\117\122\x4d\x41\x4e\103\105\137\117\120\124\x49\x4d\111\132\105")) { goto aycqgowuwagcgque; } define("\x44\x4f\x4e\x54\137\120\x45\x52\x46\x4f\x52\115\101\116\103\x45\137\x4f\x50\x54\111\115\111\x5a\105", true); aycqgowuwagcgque: } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = ManipulateServer::iawueuwikeeeseya(); if ($uykgysuswksgmwqy) { goto icuukwkwqeoogyae; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\x54\120\x5f\111\x46\x5f\115\117\104\111\106\x49\x45\x44\x5f\x53\x49\x4e\103\x45", ''); goto iwcmgioeaiyuacwi; icuukwkwqeoogyae: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\146\x2d\x4d\x6f\x64\x69\146\151\x65\x64\55\x53\151\x6e\x63\145"] ?? ''; iwcmgioeaiyuacwi: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\x64\x6f\x5f\143\141\143\x68\145\x5f\x67\145\156\x65\x72\141\x74\145\x5f\143\x61\143\x68\151\156\x67\x5f\146\151\154\145\163", true); } private function scsyywuaiumequqw() : string { $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc(); $migiiksoiymissge = ManipulateFormat::gokuyqsimauyacke($migiiksoiymissge); $migiiksoiymissge = rawurldecode($migiiksoiymissge); return $this->amqagusacuuuaswg() . sha1(untrailingslashit($migiiksoiymissge)); } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto iyyaiuccouqowyga; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); iyyaiuccouqowyga: return $qcgkuqesqqymcuui; } }
