<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec0900f0e3e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Detection\MobileDetect; use JsonException; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; use WpOrg\Requests\Exception; class Buffer extends BaseClass { protected ?string $id = "\x63\141\143\x68\151\x6e\x67\x5f\x70\x72\157\x63\x65\163\163"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\x70\141\x74\x68"], "\57") . "\x2f"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto icmsyimgycuocisu; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; icmsyimgycuocisu: $xswggycymueygwse = $this->gskqygiceygcguyo(); $kqeuymmkaacwmkic = $this->gskqygiceygcguyo("\56\152\x73\157\x6e"); $this->log("\x4c\157\x6f\153\x69\x6e\147\40\x66\157\162\40\143\141\x63\150\x65\x20\146\151\154\145\56", ["\160\141\x74\150" => $xswggycymueygwse]); if (!@is_readable($kqeuymmkaacwmkic)) { goto wassyiqsqasaoiau; } $this->egygswiqouyukscu($kqeuymmkaacwmkic); wassyiqsqasaoiau: if (!$this->aceaeommyuooiqge()->get("\147\172\151\x70\137\145\x6e\x61\142\154\x65")) { goto uaiiuywoakccusge; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\137\147\172\151\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\120\137\101\x43\x43\x45\120\124\137\105\x4e\x43\117\x44\111\116\107"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\x67\x7a\151\160"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto uekueeyqaackuwao; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); uekueeyqaackuwao: uaiiuywoakccusge: if (!@is_readable($xswggycymueygwse)) { goto ysiwoiqiaosqoikm; } $this->ecsimoiakyygwais($xswggycymueygwse); ysiwoiqiaosqoikm: $this->log("\123\x74\x61\x72\x74\x20\x62\165\x66\146\145\162\x2e", ["\160\141\164\150" => $xswggycymueygwse]); ob_start([$this, "\157\161\143\x71\x6b\x6f\161\167\x63\165\x6f\x71\x75\x73\153\165"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto eieiwacwqkgsewai; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; eieiwacwqkgsewai: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto gokwmwmaumiwscua; } $this->log("\x43\x61\156\x20\x6e\157\x74\40\163\x74\x61\162\x74\40\x62\x75\146\x66\145\162\40\x70\162\x6f\x63\x65\x73\x73\54\x20\155\x61\x79\x62\x65\x20\x70\141\147\x65\x20\156\157\x74\40\x65\x78\x69\163\x74\x73\x20\x6f\162\x20\156\157\164\40\141\143\164\x69\x76\145"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; gokwmwmaumiwscua: if ($this->omgegoiwsakgwwug()) { goto eauiumeeyckucuyc; } $this->log("\101\166\x6f\x69\144\40\x63\141\143\x68\145\40\x70\141\147\145\x20\142\171\40\146\151\x6c\x74\x65\x72", ["\146\151\x6c\164\x65\162" => "\x70\162\137\x6f\x70\x74\151\x6d\151\172\x61\x74\x69\x6f\156\x5f\143\x61\x63\150\x65\137\150\164\x6d\x6c\137\x64\x6f\x5f\147\x65\156\x65\162\141\164\145\137\143\141\143\150\151\156\147\137\x66\x69\154\x65\x73"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; eauiumeeyckucuyc: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto gigiwwouakeekoim; } $moooemyaqewumiay .= $this->mgecqegqseukmmwg(); gigiwwouakeekoim: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto esuuweysgwuwcuue; } $this->log("\x63\141\143\x68\x65\40\x64\x69\162\145\143\164\157\x72\171\x20\156\x6f\164\40\147\x65\156\x65\162\x61\164\x65\x64\x3a\x20{$qwqyukkaswwygsyg}"); goto ykuycowuguumseuu; esuuweysgwuwcuue: $this->qsokwouigmyqagkc($this->gskqygiceygcguyo("\56\152\163\157\x6e")); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); ykuycowuguumseuu: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto qugsgsscqyikugyc; } header("\x4c\x61\163\x74\x2d\x4d\157\144\x69\x66\x69\145\x64\72\x20" . gmdate("\104\54\40\x64\x20\x4d\x20\131\x20\x48\x3a\151\72\x73", filemtime($xswggycymueygwse)) . "\40\x47\115\x54"); qugsgsscqyikugyc: $this->log("\120\141\147\x65\x20\143\x61\x63\150\145\x64\x2e", ["\x70\141\164\x68" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\x43\x61\x63\150\x65\x2d\103\157\156\x74\x72\x6f\154\72\x20\156\x6f\x2d\163\x74\x6f\162\x65\x2c\40\x6e\x6f\55\143\x61\143\x68\x65\54\40\155\165\x73\x74\55\162\145\x76\x61\154\151\x64\x61\164\x65\x2c\x20\x6d\x61\170\55\141\147\x65\75\x30"); header("\120\162\x61\147\155\x61\x3a\40\156\157\55\x63\x61\x63\x68\145"); header("\x45\170\160\x69\x72\x65\x73\72\x20" . gmdate("\104\x2c\40\144\x20\x4d\x20\x59\x20\x48\72\x69\x3a\x73\x20\134\x47\134\x4d\134\x54", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\141\x73\x74\x2d\115\157\144\x69\146\x69\145\144\72\40" . gmdate("\104\x2c\40\144\40\x4d\40\x59\x20\x48\x3a\x69\x3a\x73", filemtime($esaqeawoigqgagum)) . "\40\x47\x4d\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto gskaqcgccswmuqsy; } readfile($esaqeawoigqgagum); $this->log("\x53\x65\x72\166\151\156\x67\x20\x63\x61\x63\150\145\x20\x66\x69\154\x65\56", ["\x70\141\164\x68" => $esaqeawoigqgagum, "\155\157\144\151\146\151\145\x64" => $cocykkikgmcykggu]); gskaqcgccswmuqsy: exit; } private function egygswiqouyukscu(?string $esaqeawoigqgagum) { try { $uykgysuswksgmwqy = json_decode(@file_get_contents($esaqeawoigqgagum), true, 512, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES); } catch (JsonException $iewosgggaueeyymg) { $uykgysuswksgmwqy = []; } if (!$uykgysuswksgmwqy) { goto waycokyiesmqgqcg; } foreach ($uykgysuswksgmwqy as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (is_numeric($ymqmyyeuycgmigyo)) { goto sqaowueaequoigsa; } header("{$ymqmyyeuycgmigyo}\x3a\x20{$eqgoocgaqwqcimie}", false); goto eqmauwqqowsiwaue; sqaowueaequoigsa: header($eqgoocgaqwqcimie, false); eqmauwqqowsiwaue: saycoceqywiekqsi: } uccuykggugcmiyam: $this->log("\123\x65\162\166\x69\156\x67\40\143\141\143\x68\x65\x20\x68\145\141\x64\145\162\163\56", ["\x70\x61\x74\150" => $esaqeawoigqgagum]); waycokyiesmqgqcg: } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\x4c\x61\x73\x74\55\x4d\157\x64\151\146\x69\x65\144\x3a\x20" . gmdate("\104\54\x20\x64\x20\115\x20\131\x20\x48\72\x69\x3a\x73", filemtime($esaqeawoigqgagum)) . "\x20\107\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto yqkyoaiwcyqeaqwu; } readgzfile($esaqeawoigqgagum); $this->log("\x53\145\x72\x76\x69\x6e\x67\40\147\172\151\160\x20\x63\x61\143\x68\145\x20\146\151\x6c\x65\x2e", ["\x70\x61\x74\150" => $esaqeawoigqgagum, "\155\157\x64\x69\146\151\x65\144" => $cocykkikgmcykggu]); yqkyoaiwcyqeaqwu: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\x74\145\x6d\160"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto yuyiqaawwgaywgqo; } return; yuyiqaawwgaywgqo: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto kkogaccoqmsmmkmo; } return; kkogaccoqmsmmkmo: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\x67\172\x69\x70\x5f\145\x6e\141\x62\154\x65")) { goto oegaywiwywuyksaq; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\147\172\151\160"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\x74\x65\x6d\x70"; if (!function_exists("\147\172\145\156\x63\x6f\x64\145")) { goto ysaumykuimqigeqa; } $gomewsucumqsiske = apply_filters("\x70\162\x5f\x6f\x70\x74\x69\155\151\172\x61\164\x69\157\156\137\x63\141\x63\x68\145\137\150\x74\155\154\137\x67\x7a\x65\156\143\157\x64\145\x5f\x6c\145\x76\x65\154\137\143\x6f\x6d\x70\162\145\x73\x73\151\157\156", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto qmiqicgscsuoyeqo; } return; qmiqicgscsuoyeqo: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); ysaumykuimqigeqa: oegaywiwywuyksaq: pmpr_do_action("\160\x72\x5f\157\160\164\151\155\x69\172\141\164\x69\157\156\x5f\x63\141\x63\150\x65\x5f\x68\164\155\154\137\x67\145\156\x65\162\141\164\x65\x64", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\143\x61\x63\x68\x65\40\146\151\154\145\40\x67\x65\156\x65\x72\x61\x74\x65\x64\56"); } private function qsokwouigmyqagkc(?string $esaqeawoigqgagum) { $uykgysuswksgmwqy = apply_filters("\160\x72\x5f\x6f\160\x74\x69\155\x69\172\141\164\x69\157\x6e\x5f\143\x61\143\150\x65\137\150\x65\x61\144\x65\162\x73\137\x6c\151\163\164", []); if (!$uykgysuswksgmwqy) { goto wscikmsmwmocsqeu; } $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\x74\x65\x6d\160"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto eyskqaccgeomqmyw; } return; eyskqaccgeomqmyw: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, wp_json_encode($uykgysuswksgmwqy, JSON_UNESCAPED_SLASHES))) { goto uiowwckamqucksim; } return; uiowwckamqucksim: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); pmpr_do_action("\160\162\x5f\157\x70\x74\x69\155\151\172\141\164\x69\x6f\x6e\137\x63\x61\143\150\145\137\150\145\141\x64\x65\x72\x73\137\147\x65\156\145\162\141\x74\145\144", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\150\x65\x61\x64\145\x72\163\x20\x63\x61\x63\150\x65\x20\146\x69\154\145\40\x67\x65\156\x65\162\x61\164\145\x64\x2e"); wscikmsmwmocsqeu: } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto icawmkaswkmwicsa; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\122\126\x45\x52\x5f\120\x52\x4f\124\x4f\103\117\114", '') . "\x20\x33\x30\x34\40\x4e\157\x74\40\x4d\x6f\144\x69\146\x69\145\144", true, 304); header("\105\x78\x70\x69\x72\145\163\72\40" . gmdate("\x44\54\x20\144\40\115\x20\131\40\110\x3a\151\72\x73") . "\40\107\x4d\x54"); header("\x43\141\x63\150\145\55\103\x6f\x6e\x74\162\x6f\154\x3a\40\156\157\55\x63\x61\143\150\x65\54\40\x6d\x75\x73\164\x2d\x72\x65\x76\141\x6c\x69\x64\141\x74\x65"); $this->log("\x53\145\162\x76\x69\x6e\x67\x20\x60\63\60\64\x60\40\x63\141\x63\x68\145\40\146\x69\154\145\x2e", ["\x70\141\164\x68" => $esaqeawoigqgagum, "\x6d\x6f\x64\x69\146\151\x65\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; icawmkaswkmwicsa: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(string $sqeykgyoooqysmca = "\56\x68\x74\155\x6c") : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\151\x6e\x64\145\x78"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\x2f\x25\x5b\x30\55\71\x41\x2d\106\x5d\173\x32\x7d\x2f", [$this, "\x6d\161\x77\157\163\171\x69\x75\x6d\x65\167\161\x65\x67\155\x6b"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\77", "\43", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\x2f" . substr($wkcwykowmmmwioqs, 0, 250) . $sqeykgyoooqysmca; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\104\145\164\145\143\x74\x69\157\x6e\134\x4d\157\142\x69\154\145\x44\x65\164\x65\x63\164") && $this->aceaeommyuooiqge()->get("\155\x6f\x62\x69\x6c\145\x5f\143\141\x63\150\x65"))) { goto qwueqigcisoogaec; } $swwqmuqmmyoquiyi = new MobileDetect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto imsgusweocmiyygi; } $wkcwykowmmmwioqs .= "\55\x6d\x6f\x62\x69\154\x65"; imsgusweocmiyygi: qwueqigcisoogaec: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\x50\x52\x5f\x4f\x50\124\111\115\111\132\x41\x54\x49\x4f\x4e\x5f\x44\x4f\116\x54\x5f\x4f\120\124\x49\x4d\111\132\105", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\x61\x70\141\143\x68\x65\137\162\145\161\165\145\163\164\137\150\x65\141\144\145\x72\163")) { goto kmeekqukcecuscye; } $uykgysuswksgmwqy = apache_request_headers(); kmeekqukcecuscye: if ($uykgysuswksgmwqy) { goto csoeisssoumqqeoa; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\x50\x5f\x49\x46\x5f\x4d\x4f\x44\111\x46\111\x45\x44\x5f\123\111\x4e\x43\x45", ''); goto weuueokkumksgaeo; csoeisssoumqqeoa: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\x66\55\x4d\x6f\144\151\146\x69\x65\x64\55\x53\151\x6e\143\145"] ?? ''; weuueokkumksgaeo: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\160\x72\137\x6f\160\164\x69\155\x69\x7a\x61\x74\151\x6f\x6e\137\143\141\143\150\145\x5f\150\164\x6d\154\x5f\x64\x6f\x5f\147\145\156\x65\x72\x61\164\x65\137\143\141\x63\x68\x69\x6e\x67\x5f\x66\x69\x6c\145\x73", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\x50\x52\137\x4f\120\124\x5f\x43\x41\x43\x48\x45\x5f\104\x4f\x4e\x54\x5f\105\116\x43\117\104\105\x5f\106\111\114\105\x4e\x41\115\105\x53")) { goto ykiyuciecskusaae; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); wgmeyycmqioioaqc: } igckskemqkqueukg: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); ykiyuciecskusaae: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\57\134") . "\x2f\137\x70\x72\55\x66\151\154\145\163"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto pssquaaiioygwqoq; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); pssquaaiioygwqoq: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\74\41\x2d\x2d\x20\x43\x61\143\150\x65\x64\40\146\157\162\x20\x67\162\x65\141\x74\40\x70\145\x72\x66\x6f\x72\x6d\x61\156\x63\145\x20\x62\x79\40\x50\x4d\120\122\x20\x4f\160\164\151\x6d\x69\172\141\x74\151\x6f\156\x20\x4d\157\144\165\154\x65"; if (empty($cqgoimumaewouews)) { goto ucugeysomcyceyos; } $kaaaegwagmaoscys .= "\x20\x2d\40\x44\145\x62\x75\147\72\x20\x63\141\x63\x68\x65\x64\x40{$cqgoimumaewouews}"; ucugeysomcyceyos: $kaaaegwagmaoscys .= "\x20\55\x2d\76"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\174", ["\x28\56\x2a\x29\167\160\134\55\152\x73\157\156\50\x2f\56\x2a\x7c\x24\x29"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\x23{$seooyyaygyioqeue}\x23", $aweiaismcsuikses)) { goto momgmqemgcasyuqq; } return false; momgmqemgcasyuqq: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\x70\x65\x72\155\141\154\151\156\x6b\x5f\x73\x74\x72\x75\143\x74\165\162\x65"); $qmgwgiyuicsgkmcs = "\57" !== substr($mqqisesagsuooios, -1) ? '' : "\57"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\57" !== substr($magawcseesgowoeo, -1) ? '' : "\x2f"; if (!('' === $qmgwgiyuicsgkmcs)) { goto keyiswqkmqqquosw; } $ygygweamcggggmce = "\x2f" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\x70\141\x74\x68"])); $sycgeiyakseiumqy = str_replace(["\56\160\x68\160", "\x2e"], ['', "\57"], $sycgeiyakseiumqy); if (!("\57" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\x2f") === $sycgeiyakseiumqy)) { goto qmuikumqukcyaeqa; } $ygygweamcggggmce = ''; qmuikumqukcyaeqa: keyiswqkmqqquosw: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
