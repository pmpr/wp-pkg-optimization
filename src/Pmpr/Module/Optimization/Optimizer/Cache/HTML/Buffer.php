<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6757fc96ddb33             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Detection\MobileDetect; use JsonException; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; class Buffer extends BaseClass { protected ?string $id = "\143\x61\143\150\151\x6e\x67\x5f\x70\x72\157\143\x65\x73\x73"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\160\x61\164\x68"], "\x2f") . "\x2f"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if (!$this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; } $xswggycymueygwse = $this->gskqygiceygcguyo(); $kqeuymmkaacwmkic = $this->gskqygiceygcguyo("\56\152\163\x6f\x6e"); $this->log("\114\157\x6f\x6b\151\x6e\x67\x20\x66\x6f\x72\40\x63\x61\143\150\145\40\x66\x69\x6c\x65\x2e", ["\160\x61\164\x68" => $xswggycymueygwse]); if (@is_readable($kqeuymmkaacwmkic)) { $this->egygswiqouyukscu($kqeuymmkaacwmkic); } if ($this->aceaeommyuooiqge()->get("\147\x7a\151\160\x5f\x65\x6e\x61\x62\154\145")) { $gqkgiwwgeyuauoka = $xswggycymueygwse . "\x5f\x67\172\x69\x70"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\120\137\x41\103\x43\x45\120\124\x5f\105\116\x43\117\104\x49\x4e\x47"); $acggykmsksykwyqy = $wicowimsieqwwsuu && str_contains($wicowimsieqwwsuu, "\147\172\x69\x70"); if ($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka)) { $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); } } if (@is_readable($xswggycymueygwse)) { $this->ecsimoiakyygwais($xswggycymueygwse); } $this->log("\123\164\x61\x72\164\x20\142\x75\146\x66\x65\x72\56", ["\160\x61\164\x68" => $xswggycymueygwse]); ob_start([$this, "\157\161\143\161\153\x6f\x71\x77\143\165\157\x71\x75\163\153\x75"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if (!$this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; } if (!$this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { $this->log("\103\x61\156\x20\x6e\157\164\x20\x73\x74\x61\162\x74\x20\x62\165\x66\x66\145\x72\40\160\x72\x6f\x63\145\x73\x73\x2c\x20\x6d\x61\x79\x62\x65\x20\x70\141\147\145\x20\156\157\164\x20\x65\x78\151\163\x74\163\40\157\x72\x20\156\157\164\x20\x61\143\x74\x69\166\145"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; } if (!$this->omgegoiwsakgwwug()) { $this->log("\x41\x76\x6f\151\x64\x20\143\141\143\150\145\x20\x70\x61\147\x65\40\142\x79\x20\146\151\x6c\x74\145\162", ["\146\x69\154\164\x65\162" => "\160\x72\x5f\157\160\164\x69\155\x69\x7a\141\x74\151\x6f\156\137\143\141\143\x68\x65\137\x68\164\x6d\x6c\137\144\157\x5f\x67\145\x6e\x65\162\141\x74\145\137\x63\x61\x63\150\x69\156\x67\137\x66\151\x6c\145\163"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; } $kaaaegwagmaoscys = ''; if ($this->qmyusgwkaqieouwi($moooemyaqewumiay)) { $moooemyaqewumiay .= $this->mgecqegqseukmmwg(); } $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { $this->qsokwouigmyqagkc($this->gskqygiceygcguyo("\56\x6a\163\157\x6e")); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); } else { $this->log("\143\x61\143\150\145\x20\144\151\162\145\143\x74\157\x72\171\40\x6e\x6f\x74\x20\x67\145\156\145\162\x61\164\145\x64\72\x20{$qwqyukkaswwygsyg}"); } if ($swyigkueoywiacam->exists($xswggycymueygwse)) { header("\x4c\141\163\x74\x2d\115\157\144\x69\x66\x69\145\144\72\40" . gmdate("\104\54\40\x64\40\115\40\131\x20\110\72\x69\72\x73", filemtime($xswggycymueygwse)) . "\x20\107\x4d\x54"); } $this->log("\x50\141\x67\145\40\x63\141\x63\150\145\144\56", ["\160\x61\x74\150" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\103\x61\x63\x68\145\55\x43\157\156\x74\162\157\x6c\x3a\x20\x6e\157\55\163\164\x6f\162\x65\x2c\x20\156\x6f\55\143\x61\143\x68\x65\x2c\x20\x6d\165\163\x74\x2d\162\x65\x76\141\154\151\144\141\164\145\x2c\40\x6d\141\x78\55\x61\147\x65\x3d\x30"); header("\120\162\x61\147\155\x61\72\x20\x6e\x6f\55\x63\141\143\150\x65"); header("\x45\x78\x70\x69\x72\145\x73\72\40" . gmdate("\x44\54\40\144\40\x4d\x20\x59\40\110\72\x69\x3a\x73\x20\x5c\x47\134\115\134\x54", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\x4c\141\x73\164\x2d\x4d\157\x64\151\x66\x69\145\x64\72\x20" . gmdate("\x44\x2c\x20\x64\40\x4d\40\x59\40\110\x3a\151\72\x73", filemtime($esaqeawoigqgagum)) . "\x20\107\x4d\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if (!$this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { readfile($esaqeawoigqgagum); $this->log("\123\x65\162\x76\151\156\147\x20\143\141\x63\150\145\40\146\x69\x6c\145\56", ["\160\x61\x74\x68" => $esaqeawoigqgagum, "\155\x6f\144\x69\x66\151\x65\x64" => $cocykkikgmcykggu]); } exit; } private function egygswiqouyukscu(?string $esaqeawoigqgagum) { try { $uykgysuswksgmwqy = json_decode(@file_get_contents($esaqeawoigqgagum), true, 512, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES); } catch (JsonException $iewosgggaueeyymg) { $uykgysuswksgmwqy = []; } if ($uykgysuswksgmwqy) { foreach ($uykgysuswksgmwqy as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (is_numeric($ymqmyyeuycgmigyo)) { header($eqgoocgaqwqcimie, false); } else { header("{$ymqmyyeuycgmigyo}\72\40{$eqgoocgaqwqcimie}", false); } } $this->log("\x53\145\162\x76\x69\x6e\147\40\143\141\143\x68\x65\40\150\145\141\x64\145\162\x73\56", ["\x70\x61\x74\x68" => $esaqeawoigqgagum]); } } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\x4c\x61\163\x74\55\115\157\x64\151\146\151\x65\144\72\40" . gmdate("\x44\x2c\40\x64\x20\x4d\x20\131\40\110\72\x69\x3a\163", filemtime($esaqeawoigqgagum)) . "\40\107\x4d\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if (!$this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { readgzfile($esaqeawoigqgagum); $this->log("\x53\145\162\x76\151\156\147\40\x67\x7a\151\160\40\x63\x61\143\x68\x65\x20\146\151\x6c\x65\x2e", ["\160\x61\164\x68" => $esaqeawoigqgagum, "\x6d\x6f\x64\151\x66\151\x65\x64" => $cocykkikgmcykggu]); } exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\x74\x65\x6d\x70"; if ($swyigkueoywiacam->exists($egqeikuccqmogcum)) { return; } if (!$swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { return; } $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if ($this->aceaeommyuooiqge()->get("\147\172\151\160\137\x65\x6e\x61\142\154\145")) { $ckikaauwqiigkskw = $esaqeawoigqgagum . "\x5f\x67\x7a\x69\x70"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\164\145\x6d\x70"; if (function_exists("\x67\172\145\156\x63\x6f\x64\x65")) { $gomewsucumqsiske = apply_filters("\160\x72\x5f\x6f\160\x74\x69\x6d\x69\x7a\141\164\x69\157\x6e\137\143\141\x63\150\145\137\150\x74\155\154\x5f\x67\x7a\x65\x6e\x63\x6f\x64\x65\x5f\x6c\x65\166\x65\x6c\x5f\143\157\x6d\x70\162\145\163\x73\151\x6f\156", 6); if (!$swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { return; } $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); } } pmpr_do_action("\x70\162\x5f\157\x70\164\151\x6d\x69\x7a\141\x74\151\157\x6e\x5f\143\x61\x63\150\145\x5f\150\x74\155\x6c\137\x67\x65\156\145\162\141\x74\145\x64", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\143\x61\143\x68\x65\x20\146\x69\154\x65\40\x67\145\156\x65\x72\141\164\145\144\56"); } private function qsokwouigmyqagkc(?string $esaqeawoigqgagum) { $uykgysuswksgmwqy = apply_filters("\x70\162\x5f\157\x70\x74\151\x6d\x69\172\141\x74\x69\x6f\x6e\x5f\143\141\x63\150\x65\x5f\150\145\x61\x64\145\x72\163\137\154\151\x73\x74", []); if ($uykgysuswksgmwqy) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\x74\x65\155\x70"; if ($swyigkueoywiacam->exists($egqeikuccqmogcum)) { return; } if (!$swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, wp_json_encode($uykgysuswksgmwqy, JSON_UNESCAPED_SLASHES))) { return; } $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); pmpr_do_action("\x70\x72\x5f\157\160\x74\x69\x6d\151\x7a\x61\164\x69\157\x6e\137\143\141\x63\x68\145\x5f\x68\x65\x61\144\145\x72\163\137\147\x65\156\x65\162\x61\x74\145\x64", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\x68\x65\x61\144\145\162\x73\x20\x63\x61\x63\150\145\x20\x66\151\154\x65\40\147\x65\x6e\x65\162\141\x74\145\144\56"); } } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if ($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum)) { header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\105\122\x56\105\122\x5f\x50\122\117\124\x4f\x43\117\114", '') . "\x20\63\x30\x34\x20\x4e\x6f\164\x20\x4d\x6f\x64\151\x66\x69\145\x64", true, 304); header("\105\170\160\x69\162\145\x73\72\x20" . gmdate("\104\54\x20\x64\x20\115\x20\x59\x20\x48\72\151\x3a\x73") . "\x20\x47\x4d\x54"); header("\x43\141\143\150\x65\x2d\103\157\x6e\x74\162\157\x6c\x3a\40\x6e\x6f\x2d\143\141\x63\150\145\54\40\155\x75\163\x74\x2d\x72\145\x76\x61\x6c\x69\x64\x61\x74\145"); $this->log("\x53\x65\162\166\151\x6e\147\40\140\63\x30\64\140\x20\x63\141\x63\x68\145\x20\146\x69\x6c\x65\x2e", ["\x70\141\164\x68" => $esaqeawoigqgagum, "\x6d\157\144\151\146\151\145\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; } return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(string $sqeykgyoooqysmca = "\x2e\x68\x74\155\154") : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\151\x6e\144\145\x78"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\57\x25\133\60\x2d\x39\101\x2d\x46\135\173\62\x7d\x2f", [$this, "\155\161\x77\x6f\x73\171\x69\165\x6d\145\167\x71\x65\x67\x6d\x6b"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\77", "\x23", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\57" . substr($wkcwykowmmmwioqs, 0, 250) . $sqeykgyoooqysmca; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (class_exists("\104\x65\164\x65\143\164\151\x6f\156\134\x4d\157\142\151\x6c\145\104\x65\x74\145\143\164") && $this->aceaeommyuooiqge()->get("\155\x6f\142\151\x6c\x65\137\143\141\x63\150\145")) { $swwqmuqmmyoquiyi = new MobileDetect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if ($iomcqougosimesoq && !$aasascamegmwqmqk) { $wkcwykowmmmwioqs .= "\55\x6d\x6f\142\151\154\x65"; } } return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\120\x52\x5f\117\120\x54\x49\115\111\x5a\101\x54\111\117\x4e\137\104\117\x4e\124\x5f\117\120\124\x49\115\x49\132\x45", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (function_exists("\141\x70\141\143\150\x65\137\162\x65\x71\165\145\x73\164\137\150\145\141\x64\145\x72\163")) { $uykgysuswksgmwqy = apache_request_headers(); } if ($uykgysuswksgmwqy) { $sieoyimycoskwwku = $uykgysuswksgmwqy["\x49\x66\x2d\115\x6f\144\x69\x66\x69\145\144\x2d\x53\151\156\x63\145"] ?? ''; } else { $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\120\x5f\111\x46\x5f\115\117\104\x49\106\x49\x45\x44\137\123\x49\x4e\103\x45", ''); } return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\x70\162\x5f\157\x70\x74\151\155\x69\172\x61\164\x69\x6f\156\x5f\143\141\143\150\x65\137\x68\164\x6d\x6c\137\x64\x6f\137\147\145\x6e\145\162\141\164\145\x5f\x63\141\143\150\x69\156\147\137\x66\x69\x6c\145\163", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if (!$this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\120\x52\x5f\117\x50\124\x5f\x43\x41\x43\x48\105\137\x44\117\x4e\124\x5f\x45\x4e\103\x4f\x44\x45\137\x46\111\x4c\x45\x4e\101\x4d\x45\x53")) { $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); } $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); } return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\57\x5c") . "\x2f\x5f\x70\x72\x2d\x66\151\x6c\x65\163"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (isset($meyiiwcswqmuggyg[0])) { $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); } return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\x3c\41\55\55\x20\103\x61\143\x68\x65\x64\40\146\157\x72\40\x67\162\x65\141\x74\40\160\145\162\x66\x6f\162\155\141\156\x63\145\x20\x62\171\x20\120\x4d\x50\x52\40\x4f\160\x74\x69\x6d\151\x7a\x61\x74\151\157\x6e\40\x4d\157\144\x75\154\145"; if (!empty($cqgoimumaewouews)) { $kaaaegwagmaoscys .= "\40\x2d\40\104\x65\x62\165\147\x3a\x20\143\141\143\150\145\144\100{$cqgoimumaewouews}"; } $kaaaegwagmaoscys .= "\x20\x2d\x2d\76"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\x7c", ["\50\x2e\x2a\x29\x77\160\x5c\55\x6a\163\x6f\156\50\57\56\52\174\44\x29"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (preg_match("\x23{$seooyyaygyioqeue}\43", $aweiaismcsuikses)) { return false; } $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\x70\x65\x72\x6d\141\154\151\156\153\137\163\x74\x72\x75\x63\164\x75\162\145"); $qmgwgiyuicsgkmcs = "\x2f" !== substr($mqqisesagsuooios, -1) ? '' : "\x2f"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\x2f" !== substr($magawcseesgowoeo, -1) ? '' : "\57"; if ('' === $qmgwgiyuicsgkmcs) { $ygygweamcggggmce = "\57" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\x70\141\164\150"])); $sycgeiyakseiumqy = str_replace(["\56\x70\150\160", "\x2e"], ['', "\57"], $sycgeiyakseiumqy); if ("\x2f" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\57") === $sycgeiyakseiumqy) { $ygygweamcggggmce = ''; } } return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
