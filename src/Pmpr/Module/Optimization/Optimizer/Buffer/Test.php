<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66aeb5d8f13cb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\162\x69" => 1, "\x73\163\154" => 0, "\x77\x70\x5f\x34\x30\64" => 1, "\163\145\141\x72\143\150" => 1, "\x6d\x6f\x62\x69\154\145" => 1, "\151\163\x5f\150\x74\155\x6c" => 1, "\x71\165\145\162\x79\137\x73\164\x72\151\156\x67" => 1, "\144\157\x6e\157\164\x63\x61\143\x68\x65\x70\141\147\x65" => 1, "\162\x65\x6a\x65\143\x74\x65\144\x5f\x63\x6f\157\x6b\x69\x65" => 1, "\155\x61\x6e\x64\x61\164\157\162\x79\137\143\157\157\153\151\x65" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\164\145\163\x74\163"])) { goto yuiouamaogkkqmck; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\x74\x65\x73\x74\163"]); yuiouamaogkkqmck: if (!(!isset($ywmkwiwkosakssii["\x63\157\157\153\x69\x65\x73"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto mmwqwowqcaseyyki; } $ywmkwiwkosakssii["\x63\157\157\x6b\151\x65\163"] = $_COOKIE; mmwqwowqcaseyyki: if (!(!isset($ywmkwiwkosakssii["\x70\157\x73\x74"]) && !empty($_POST) && is_array($_POST))) { goto wsckacayikksiswo; } $ywmkwiwkosakssii["\x70\157\x73\x74"] = $_POST; wsckacayikksiswo: if (!(!isset($ywmkwiwkosakssii["\x67\145\x74"]) && !empty($_GET) && is_array($_GET))) { goto qiawociayswicugw; } $ywmkwiwkosakssii["\x67\145\164"] = $_GET; qiawociayswicugw: $this->get = !empty($ywmkwiwkosakssii["\x67\x65\x74"]) && is_array($ywmkwiwkosakssii["\x67\x65\x74"]) ? $ywmkwiwkosakssii["\147\145\x74"] : []; $this->post = !empty($ywmkwiwkosakssii["\x70\x6f\163\164"]) && is_array($ywmkwiwkosakssii["\x70\x6f\163\164"]) ? $ywmkwiwkosakssii["\160\157\163\x74"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\x63\x6f\157\153\151\145\x73"]) && is_array($ywmkwiwkosakssii["\x63\157\x6f\153\x69\x65\x73"]) ? $ywmkwiwkosakssii["\143\x6f\x6f\x6b\x69\x65\x73"] : []; if (!$this->ayueggmoqeeukqmq()) { goto ngagwiymmmycgscu; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\x77\x70\x5f\143\165\x73\164\157\155\x69\x7a\x65" => '']); ngagwiymmmycgscu: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->aiukiaokcgsiomew()) { goto qimomesqamyyicmo; } $this->yauwooaeicgosquo("\104\x65\x76\40\x4d\x6f\x64\145\40\x45\x6e\141\142\154\x65\144\40\x61\x6e\x64\x20\141\154\154\x20\162\x65\161\x75\145\x73\x74\x20\151\x73\x20\x62\171\x70\141\163\x73\56"); return false; qimomesqamyyicmo: if (!$this->kgkoeoeseyuugaao()) { goto kkacggiosquqagew; } $this->yauwooaeicgosquo("\x52\157\142\157\164\163\x2e\164\x78\x74\x20\x6f\162\x20\56\x68\164\x61\143\143\x65\163\163\40\146\x69\x6c\145\40\151\163\40\x65\x78\x63\154\x75\x64\x65\144\x2e"); return false; kkacggiosquqagew: if (!$this->gymgcceeqssmesiu()) { goto augqweqsqioesmim; } $this->yauwooaeicgosquo("\x50\110\120\54\40\x58\x4d\114\x2c\40\x6f\x72\x20\130\x53\x4c\40\x66\x69\x6c\145\40\151\163\40\x65\170\143\154\x75\144\145\144\x2e"); return false; augqweqsqioesmim: if (!$this->goecwaaykqoaaagg()) { goto aescssauecumgwso; } $this->yauwooaeicgosquo("\x41\x64\155\151\156\x20\157\162\x20\x41\x4a\101\x58\40\x55\x52\114\40\x69\163\x20\x65\170\143\154\x75\x64\x65\144\56"); return false; aescssauecumgwso: if (!$this->sgsscqasgeyeicoe()) { goto cooeoemccqiyewks; } $this->yauwooaeicgosquo("\x41\x64\155\151\x6e\40\157\162\40\x41\112\x41\x58\x20\125\x52\114\x20\151\x73\40\145\x78\x63\154\165\144\x65\x64\x2e"); return false; cooeoemccqiyewks: if ($this->gooeyogikcusgwuu()) { goto qcceyyqiuiqcyqqm; } $this->yauwooaeicgosquo("\x52\145\x71\165\145\x73\x74\x20\x6d\x65\x74\150\x6f\144\x20\151\163\x20\x6e\157\x74\x20\141\x6c\154\157\x77\x65\144\x2e\x20\120\x61\x67\x65\40\143\x61\156\156\157\164\40\x62\145\40\x63\141\143\x68\x65\x64\56", ["\162\145\161\x75\x65\x73\x74\137\155\x65\164\x68\x6f\x64" => $this->ciyocmkwssocskiy()]); return false; qcceyyqiuiqcyqqm: if ($this->cskwmweqysskwckg()) { goto ssesmiwwmsayksum; } $this->lastError = []; return true; ssesmiwwmsayksum: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\163\165\x63\x63\145\x73\163"]) { goto qkwckeqowgaokkuy; } $this->yauwooaeicgosquo("\116\x6f\40\143\157\x6e\146\151\147\x20\x66\151\154\x65\40\146\157\x75\x6e\144", ["\143\157\156\146\151\x67\137\160\141\164\150" => $uiewakwqscemywuo["\160\x61\x74\x68"]]); return false; qkwckeqowgaokkuy: if (!($this->cskwmweqysskwckg("\161\165\145\x72\x79\x5f\163\x74\162\x69\156\x67") && !$this->koguieumooaesyww())) { goto kqkymieyyqaoeymw; } $this->yauwooaeicgosquo("\x51\165\x65\x72\x79\x20\163\164\x72\x69\156\x67\40\125\122\114\40\x69\x73\40\x65\170\143\x6c\165\x64\x65\x64\x2e", $_GET); return false; kqkymieyyqaoeymw: if (!($this->cskwmweqysskwckg("\163\163\154") & !$this->eqwgocqwoyyykwke())) { goto gqyyccceswkqcmaa; } $this->yauwooaeicgosquo("\123\x53\114\40\143\x61\143\150\145\x20\156\157\x74\x20\141\160\x70\x6c\x69\x65\x64\x20\x74\157\40\x70\141\x67\x65\56"); return false; gqyyccceswkqcmaa: if (!($this->cskwmweqysskwckg("\165\162\x69") && !$this->qweiomkkuikwugks())) { goto sykuuisikqcwuaqu; } $this->yauwooaeicgosquo("\120\141\147\x65\40\x69\163\x20\145\x78\x63\154\165\x64\145\144\56"); return false; sykuuisikqcwuaqu: if (!($this->cskwmweqysskwckg("\162\145\x6a\145\143\x74\145\x64\137\143\x6f\x6f\x6b\x69\145") && $this->cokqaygwwygweuyk())) { goto mquyemuqcqeassqc; } $this->yauwooaeicgosquo("\x45\x78\143\154\x75\x64\145\144\40\x63\x6f\157\x6b\x69\145\x20\x66\x6f\x75\x6e\x64\56", ["\x65\170\143\154\165\144\x65\144\137\143\x6f\157\x6b\x69\x65\x73" => $this->cokqaygwwygweuyk()]); return false; mquyemuqcqeassqc: if (!($this->cskwmweqysskwckg("\155\141\x6e\x64\141\x74\157\x72\171\x5f\x63\x6f\157\x6b\151\x65") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto weiaigyyigkusucy; } $this->yauwooaeicgosquo("\115\x69\163\163\x69\156\x67\x20\x6d\141\x6e\x64\141\x74\x6f\x72\171\x20\143\x6f\x6f\x6b\x69\x65\72\40\160\x61\147\x65\x20\x6e\157\x74\40\160\162\x6f\143\145\x73\163\x65\144\56", ["\x6d\151\x73\163\x69\156\x67\137\143\157\157\x6b\x69\145\163" => $this->qgymyeqwqaiwmmea()]); return false; weiaigyyigkusucy: if (!($this->cskwmweqysskwckg("\x75\163\x65\x72\137\x61\147\145\x6e\164") && !$this->mqiqsuksgyekwkii())) { goto bagkewioewygysea; } $this->yauwooaeicgosquo("\x55\x73\145\162\40\101\147\x65\x6e\x74\40\x69\x73\x20\x65\x78\x63\154\x75\x64\145\x64\x2e", ["\x75\163\x65\x72\x5f\141\147\145\156\164" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\120\137\125\123\x45\122\x5f\x41\107\105\x4e\124")]); return false; bagkewioewygysea: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto mgieeyuyuoeccaog; } $this->yauwooaeicgosquo("\102\165\x66\x66\x65\162\x20\143\157\156\164\145\x6e\164\40\165\156\144\145\x72\40\62\65\65\40\x63\150\141\162\x61\143\x74\x65\x72\163\x2e"); return false; mgieeyuyuoeccaog: if (!(http_response_code() !== 200)) { goto amgsicqmemeuuaem; } $this->yauwooaeicgosquo("\120\x61\147\x65\40\151\x73\40\x6e\157\x74\x20\141\40\62\60\x30\x20\110\124\124\120\40\162\x65\x73\160\x6f\156\163\x65\x20\x61\x6e\x64\x20\143\141\x6e\156\x6f\164\40\x62\145\40\143\x61\143\150\x65\x64\56"); return false; amgsicqmemeuuaem: if (!($this->cskwmweqysskwckg("\x64\x6f\156\x6f\x74\x6f\160\164\151\x6d\151\172\x65\160\141\147\x65") && $this->cowcgqokiosgaqic())) { goto gwksywaoeowkesei; } $this->yauwooaeicgosquo("\x44\x4f\x4e\124\x4f\x50\x54\x49\x4d\111\x5a\105\104\120\101\x47\105\x20\x69\163\x20\144\145\146\x69\156\x65\x64\56\x20\x50\x61\x67\145\x20\x63\141\156\x6e\x6f\164\x20\x62\145\x20\143\141\x63\x68\145\144\56"); return false; gwksywaoeowkesei: if (!($this->cskwmweqysskwckg("\167\160\137\64\x30\x34") && $this->kmmyuiwaogukwqqi())) { goto sgkwaiuukkaqyqki; } $this->yauwooaeicgosquo("\x57\x50\x20\x34\x30\x34\40\160\141\147\145\x20\151\163\x20\x65\x78\x63\154\165\144\145\x64\x2e"); return false; sgkwaiuukkaqyqki: if (!($this->cskwmweqysskwckg("\x73\x65\141\162\143\150") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto emagssesowicacoa; } $this->yauwooaeicgosquo("\x53\x65\141\x72\143\x68\x20\160\x61\147\x65\x20\151\x73\40\145\x78\x63\154\x75\x64\145\144\x2e"); return false; emagssesowicacoa: if (!$this->cskwmweqysskwckg("\x69\163\x5f\x68\x74\155\154")) { goto gusgywuaimwooawc; } if (!($this->cmaecekuqkwmemms("\x52\105\x53\x54\137\x52\105\x51\125\105\x53\x54") || $this->gaiygescoqgyusaa())) { goto cauqmacqkssciwyq; } unset($this->tests["\151\x73\137\x68\164\x6d\154"]); cauqmacqkssciwyq: gusgywuaimwooawc: if (!($this->cskwmweqysskwckg("\x69\163\x5f\150\164\x6d\154") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto uugwoygiyecgymgw; } $this->yauwooaeicgosquo("\x4e\x6f\x20\143\x6c\157\163\x69\x6e\147\40\x3c\x2f\150\164\155\154\76\x20\x77\x61\x73\x20\x66\157\x75\x6e\x64\56"); return false; uugwoygiyecgymgw: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\160\x72\x5f\x6f\x70\x74\x69\x6d\151\x7a\141\164\151\157\x6e\137\141\154\x6c\157\x77\137\164\157\137\163\164\x61\x72\164\137\142\165\146\146\145\162\137\x70\162\x6f\x63\x65\163\x73", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto acmgueaoaaweiqqu; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto awaaowoqskgokwiy; acmgueaoaaweiqqu: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); awaaowoqskgokwiy: return apply_filters("\x70\x72\137\x6f\x70\x74\151\x6d\151\x7a\x61\164\151\x6f\156\137\x68\141\163\x5f{$ymqmyyeuycgmigyo}\x5f\164\145\x73\x74", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\x2f\74\x5c\x73\x2a\134\x2f\134\x73\52\150\164\155\x6c\x5c\163\52\x3e\x2f\151", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\x2f\x28\77\72\56\53\x2f\x29\x3f" . $wp_rewrite->feed_base . "\50\x3f\72\x2f\x28\x3f\x3a\56\x2b\x2f\x3f\x29\x3f\51\77\44"; return (bool) preg_match("\x23\x5e\x28{$uckmmkmoeikwsiqg}\51\x24\43\151", $this->gygiweeesqqckgme()); } public function aiukiaokcgsiomew() { return $this->aceaeommyuooiqge()->get("\144\145\x76\137\x6d\157\144\145"); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uqiekawkwcegsumy; } return $this->eecucukcqkqysiau(__FUNCTION__); uqiekawkwcegsumy: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto kgikoagqwkuocesg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kgikoagqwkuocesg: $ucasskoyoewwmmii = ["\162\x6f\142\157\x74\x73\56\x74\x78\x74", "\x2e\150\164\x61\x63\x63\x65\163\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\57" . $qogsmwakwacwqogk))) { goto sgikkoswwyesqomo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); sgikkoswwyesqomo: gkoyqgogsukuowqi: } skaayekywasksoug: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto aayysiegiyweiyuu; } return $this->eecucukcqkqysiau(__FUNCTION__); aayysiegiyweiyuu: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto cyqokqcacysioeyc; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto cksoeiwawiygyiyg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); cksoeiwawiygyiyg: cyqokqcacysioeyc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto akwwuuiykscgicuw; } return $this->eecucukcqkqysiau(__FUNCTION__); akwwuuiykscgicuw: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto ueqsiwuwumoqgsck; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ueqsiwuwumoqgsck: if (!(strtolower($iyiwooigkweeewey) === "\57\151\x6e\x64\x65\x78\x2e\160\150\x70")) { goto iikgiaocummweiga; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); iikgiaocummweiga: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\160\x68\x70" => 1, "\x78\x6d\x6c" => 1, "\170\x73\x6c" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\104\117\111\116\x47\137\x41\112\x41\130"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\x50\123")), ["\157\x6e", "\x31"]) || "\x34\x34\x33" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\105\122\x56\105\122\x5f\120\117\x52\124"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\167\x70\137\x63\165\163\164\157\155\x69\x7a\145"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\x47\105\124" => 1, "\110\105\x41\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto gsusqquicmukegcs; } return $this->eecucukcqkqysiau(__FUNCTION__); gsusqquicmukegcs: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto wcsysckgigeykkwy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wcsysckgigeykkwy: $yccgiaiouekkouay = ["\x73" => 1, "\x6c\x61\156\x67" => 1, "\x70\x65\162\x6d\141\x6c\x69\156\153\x5f\156\x61\x6d\145" => 1, "\154\160\55\x76\x61\162\x69\141\164\151\x6f\156\55\x69\144" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto scgmwokeuqwiekkk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); scgmwokeuqwiekkk: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\143\141\x63\x68\x65\x5f\161\x75\145\x72\x79\x5f\x73\x74\x72\151\x6e\147\163"); if ($yccgiaiouekkouay) { goto ceusyscosamyaiws; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ceusyscosamyaiws: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto gysmmooawoeggaow; } return $this->eecucukcqkqysiau(__FUNCTION__); gysmmooawoeggaow: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto iyikuwuweqigiuey; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); iyikuwuweqigiuey: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto acsigwcaesyyoiie; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); acsigwcaesyyoiie: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto qcweoyigoaeacsow; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; qcweoyigoaeacsow: wycmcqaauqkgegau: } aqaaqeucgoegeeuk: if (empty($eiocugauqgouiuyi)) { goto iyceygqsmokgmams; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); iyceygqsmokgmams: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wcekgciqeggiiwgk; } return $this->eecucukcqkqysiau(__FUNCTION__); wcekgciqeggiiwgk: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto gkwuewqmqeswqukg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gkwuewqmqeswqukg: $yiycakoikkyuokgk = array_flip(explode("\x7c", $this->aceaeommyuooiqge()->get("\143\x61\143\x68\145\x5f\155\141\156\x64\141\x74\157\162\171\137\143\x6f\x6f\x6b\151\x65\163"))); if ($this->wemyikwikgwqwuoc()) { goto sagemooicmgceiug; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); sagemooicmgceiug: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto kkmwwqyesmkescyg; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); kkmwwqyesmkescyg: yeiokcoikcysyimu: } uqcwyyiykmwygeau: if (!empty($yiycakoikkyuokgk)) { goto uamuuwkyuqomqyuy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); uamuuwkyuqomqyuy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\160\x72\137\x6f\x70\164\151\x6d\151\172\x61\x74\x69\157\156\137\157\x76\145\162\x72\151\x64\145\x5f\x64\x6f\156\x74\137\x6f\x70\x74\151\x6d\x69\x7a\x65", $this->cmaecekuqkwmemms("\x50\x52\x5f\117\120\x54\111\115\111\x5a\101\124\x49\117\x4e\x5f\104\x4f\x4e\124\x5f\x4f\120\x54\x49\x4d\111\132\105", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\x69\163\137\64\x30\x34") && is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\151\x73\x5f\x73\145\141\x72\x63\150") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\160\x72\x5f\x6f\x70\x74\x69\155\x69\x7a\x61\164\151\x6f\156\137\x6f\x70\x74\x69\155\x69\172\145\137\163\145\141\x72\x63\x68", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\143\141\143\150\x65\137\163\x73\154"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ekwuycsiuqwycqea; } return $this->eecucukcqkqysiau(__FUNCTION__); ekwuycsiuqwycqea: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto iyaugygcsmqqqkmo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); iyaugygcsmqqqkmo: if (!$this->aceaeommyuooiqge()->get("\155\x6f\x62\x69\154\x65\137\x63\x61\143\x68\x65")) { goto cieumoqayigkoocy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); cieumoqayigkoocy: $wayquiskgeuoqamk = "\x32\56\60\134\x20\x4d\115\120\174\x32\64\x30\170\63\x32\x30\x7c\64\x30\60\x58\x32\64\x30\x7c\101\166\x61\x6e\x74\x47\x6f\x7c\102\154\x61\x63\x6b\102\145\162\x72\x79\174\102\x6c\x61\172\x65\x72\x7c\x43\x65\154\154\x70\x68\x6f\x6e\x65\x7c\x44\141\156\x67\145\162\174\104\157\x43\157\x4d\x6f\x7c\105\154\141\x69\x6e\x65\x2f\x33\56\x30\174\105\x75\x64\x6f\x72\x61\127\145\142\x7c\x47\157\x6f\x67\x6c\x65\142\157\x74\x2d\115\157\142\x69\154\145\x7c\x68\x69\x70\164\x6f\x70\x7c\x49\x45\115\157\142\151\x6c\145\174\113\x59\x4f\x43\x45\x52\x41\57\x57\x58\63\x31\60\x4b\174\x4c\x47\x2f\125\71\71\60\174\x4d\x49\x44\120\55\62\56\x7c\x4d\x4d\105\x46\62\x30\174\x4d\x4f\x54\x2d\126\174\x4e\145\164\x46\162\x6f\156\164\174\116\145\167\164\174\116\151\156\164\x65\156\144\157\x5c\40\x57\x69\x69\x7c\116\x69\164\162\x6f\x7c\x4e\x6f\153\151\x61\x7c\x4f\x70\x65\162\x61\x5c\40\x4d\x69\156\x69\174\x50\141\154\155\x7c\120\x6c\141\171\x53\x74\x61\164\x69\x6f\x6e\134\x20\120\x6f\x72\164\141\142\154\x65\x7c\x70\x6f\162\x74\141\x6c\x6d\x6d\x6d\x7c\x50\x72\157\x78\x69\x6e\x65\164\x7c\120\x72\x6f\170\151\116\x65\x74\174\x53\110\x41\122\120\x2d\x54\121\55\107\130\x31\x30\x7c\x53\110\x47\55\151\71\x30\x30\174\x53\155\141\154\x6c\174\123\157\x6e\x79\x45\162\151\143\x73\163\157\156\174\123\x79\155\142\x69\141\x6e\x5c\40\117\x53\174\x53\x79\x6d\142\x69\141\x6e\117\123\x7c\x54\x53\x32\61\x69\x2d\x31\x30\174\125\120\56\x42\162\157\167\x73\145\162\x7c\125\x50\x2e\114\x69\156\x6b\174\x77\145\x62\117\x53\174\127\151\x6e\x64\x6f\167\x73\134\40\103\x45\x7c\127\x69\156\x57\x41\x50\x7c\x59\x61\x68\x6f\157\123\x65\145\x6b\145\162\x2f\x4d\x31\101\x31\55\x52\62\104\x32\174\151\x50\150\157\156\x65\174\x69\x50\x6f\144\x7c\x41\x6e\144\x72\x6f\x69\x64\x7c\x42\154\x61\143\x6b\102\145\162\162\x79\x39\65\x33\60\x7c\114\107\x2d\124\125\x39\x31\65\x5c\x20\117\142\151\x67\157\174\x4c\107\x45\134\x20\x56\x58\x7c\167\x65\x62\117\123\x7c\x4e\157\153\x69\141\65\x38\60\x30"; if (!preg_match("\x23\x5e\56\x2a\x28{$wayquiskgeuoqamk}\x29\x2e\x2a\x23\x69", $uowwycywwssskuys)) { goto yggciikgkomgeqsc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); yggciikgkomgeqsc: $wayquiskgeuoqamk = "\x77\x33\143\134\40\174\167\63\x63\x2d\174\141\143\163\55\174\x61\154\x61\x76\174\x61\x6c\x63\141\174\141\155\x6f\151\x7c\141\x75\x64\151\174\x61\166\141\x6e\174\x62\145\x6e\x71\174\x62\151\x72\x64\174\142\x6c\x61\143\x7c\142\154\141\x7a\x7c\x62\162\x65\x77\x7c\143\x65\154\x6c\174\143\x6c\x64\143\174\x63\x6d\x64\x2d\174\144\141\156\x67\x7c\x64\157\143\157\x7c\145\162\151\143\x7c\150\x69\x70\164\x7c\150\164\x63\x5f\174\151\x6e\x6e\x6f\174\x69\x70\141\161\x7c\x69\160\157\x64\x7c\x6a\151\x67\163\174\x6b\144\144\151\174\x6b\145\x6a\151\x7c\x6c\x65\156\157\x7c\154\147\x2d\x63\174\154\x67\55\x64\174\154\147\55\x67\174\154\147\145\55\174\154\147\57\x75\174\155\x61\165\x69\174\155\x61\x78\x6f\x7c\155\x69\x64\160\x7c\x6d\151\164\163\x7c\155\x6d\x65\146\x7c\155\x6f\x62\151\x7c\155\x6f\x74\x2d\x7c\155\x6f\x74\x6f\x7c\x6d\167\x62\160\174\156\x65\x63\55\174\x6e\x65\x77\164\x7c\x6e\x6f\x6b\151\x7c\x70\141\x6c\x6d\174\x70\x61\x6e\x61\x7c\x70\141\156\164\x7c\x70\150\151\154\x7c\x70\x6c\141\171\x7c\160\x6f\x72\164\174\160\162\x6f\170\174\161\x77\141\x70\174\x73\141\147\145\x7c\163\x61\155\163\174\x73\141\156\x79\x7c\163\x63\x68\55\174\x73\145\143\55\174\x73\145\156\x64\x7c\163\x65\x72\151\174\163\147\150\55\x7c\163\x68\x61\x72\x7c\x73\151\145\x2d\x7c\x73\151\145\x6d\x7c\163\155\x61\154\174\163\x6d\x61\x72\x7c\163\x6f\156\x79\174\x73\160\x68\x2d\x7c\163\171\x6d\142\174\x74\55\155\x6f\174\x74\145\x6c\151\174\x74\x69\155\55\x7c\164\157\x73\150\174\164\x73\155\55\x7c\x75\160\147\x31\174\x75\160\x73\151\x7c\166\x6b\x2d\166\174\166\x6f\x64\x61\174\x77\x61\x70\x2d\x7c\x77\x61\160\x61\x7c\x77\x61\160\151\174\x77\x61\x70\x70\174\167\x61\160\x72\x7c\x77\145\x62\143\x7c\167\x69\x6e\167\x7c\x77\151\x6e\x77\x7c\x78\x64\x61\x5c\40\x7c\x78\x64\141\55"; if (!preg_match("\43\136\50{$wayquiskgeuoqamk}\x29\x2e\52\x23\x69", $uowwycywwssskuys)) { goto eoeiaccouaymakgm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); eoeiaccouaymakgm: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto owaimkmgemoqewmm; } return $this->eecucukcqkqysiau(__FUNCTION__); owaimkmgemoqewmm: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto ysoqeuugiuswykyu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ysoqeuugiuswykyu: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\x63\141\x63\x68\145\x5f\x72\x65\x6a\145\143\x74\x5f\165\141"); if ($mqsuiayuwmwqaqwm) { goto usmuqsuwuueogimc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); usmuqsuwuueogimc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\43{$mqsuiayuwmwqaqwm}\x23", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto koiiaewwicsckseu; } return $this->eecucukcqkqysiau(__FUNCTION__); koiiaewwicsckseu: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\143\x61\x63\150\145\x5f\x72\145\x6a\145\143\164\137\165\x72\151"); if ($escsaeeosigewsme) { goto umcyeiusoakewyaa; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); umcyeiusoakewyaa: $yciaosuiyeieceug = !preg_match("\43\136\x28{$escsaeeosigewsme}\x29\x24\x23\x69", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\x50\x5f\125\x53\x45\x52\x5f\101\x47\105\116\124"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ksawwekgswywwuwm; } return $this->eecucukcqkqysiau(__FUNCTION__); ksawwekgswywwuwm: $yygmoeguaqyumuui = [ "\x48\x54\x54\120\137\103\x46\x5f\103\x4f\x4e\x4e\x45\x43\x54\111\x4e\107\137\111\x50", "\110\124\124\120\137\103\x4c\111\105\x4e\124\137\111\x50", "\x48\x54\124\120\x5f\x58\x5f\x46\x4f\x52\x57\101\122\x44\105\x44\137\x46\x4f\x52", "\110\x54\x54\120\137\x58\137\x46\117\122\127\101\122\104\105\104", "\110\x54\124\120\137\130\137\x43\x4c\x55\x53\x54\x45\x52\x5f\103\114\x49\105\x4e\x54\x5f\111\x50", "\110\x54\124\x50\x5f\x58\x5f\x52\x45\101\x4c\137\111\x50", "\x48\124\x54\x50\x5f\106\x4f\122\x57\101\122\104\105\104\137\x46\117\122", "\x48\124\124\x50\137\106\117\122\127\101\122\104\x45\104", "\122\105\115\x4f\124\105\x5f\101\x44\104\x52", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto uqugcugeomqakcqo; } $kucumcusyyckayas = explode("\54", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto wmwgeoequuwwwywa; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); wmwgeoequuwwwywa: uqugcugeomqakcqo: wickgagwgqqsomum: } yuqisiwgqacgmsym: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\x30\56\x30\56\60\56\60"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qmoisuweiskkekca; } return $this->eecucukcqkqysiau(__FUNCTION__); qmoisuweiskkekca: $yywgiquyoymymqwk = [ "\62\x30\70\56\67\x30\56\62\x34\67\x2e\61\x35\x37" => '', "\61\x37\62\56\x32\65\x35\56\64\70\56\61\x33\60" => '', "\x31\x37\62\x2e\x32\65\65\56\x34\x38\56\x31\63\x31" => '', "\x31\67\62\x2e\x32\65\x35\x2e\64\x38\x2e\x31\x33\62" => '', "\61\67\x32\56\x32\x35\65\56\x34\x38\x2e\x31\x33\x33" => '', "\61\67\62\x2e\62\65\65\56\x34\70\56\61\63\x34" => '', "\x31\67\x32\56\62\x35\65\x2e\64\70\56\61\x33\65" => '', "\x31\67\62\x2e\62\x35\65\x2e\64\70\56\x31\63\x36" => '', "\x31\67\62\56\x32\65\x35\x2e\x34\x38\x2e\x31\63\x37" => '', "\61\x37\x32\x2e\62\x35\x35\x2e\64\70\x2e\x31\x33\70" => '', "\x31\67\62\56\62\x35\x35\x2e\64\70\x2e\61\63\71" => '', "\x31\67\x32\x2e\x32\65\x35\x2e\64\70\x2e\61\x34\60" => '', "\61\x37\62\56\62\x35\x35\56\x34\70\56\61\x34\61" => '', "\x31\x37\62\56\x32\x35\x35\56\x34\x38\56\x31\x34\62" => '', "\x31\x37\62\56\x32\x35\65\x2e\64\x38\56\61\x34\63" => '', "\x31\67\62\56\x32\65\65\56\64\x38\56\61\64\64" => '', "\x31\x37\x32\56\62\65\x35\x2e\64\70\56\61\x34\x35" => '', "\61\x37\62\56\62\x35\65\56\x34\70\x2e\61\64\x36" => '', "\x31\67\x32\x2e\62\65\65\x2e\64\x38\56\61\64\67" => '', "\x35\62\x2e\x32\62\x39\x2e\61\62\x32\56\x32\x34\x30" => '', "\61\60\64\56\62\61\64\x2e\x37\62\x2e\61\x30\x31" => '', "\61\x33\x2e\x36\x36\56\x37\x2e\61\x31" => '', "\x31\63\56\70\65\x2e\62\x34\56\70\x33" => '', "\61\x33\x2e\70\x35\56\x32\64\x2e\71\x30" => '', "\x31\x33\x2e\70\65\56\x38\x32\56\x32\66" => '', "\x34\60\x2e\67\64\56\62\x34\x32\x2e\x32\65\63" => '', "\x34\x30\x2e\x37\64\x2e\62\64\x33\x2e\61\x33" => '', "\64\x30\56\67\x34\x2e\x32\64\63\56\61\67\x36" => '', "\x31\60\x34\56\x32\61\x34\x2e\x34\x38\56\62\x34\67" => '', "\61\x35\67\56\x35\65\x2e\x31\70\71\56\61\70\x39" => '', "\x31\x30\x34\x2e\x32\x31\x34\x2e\x31\61\60\x2e\61\x33\65" => '', "\67\60\x2e\63\67\x2e\x38\x33\x2e\x32\x34\x30" => '', "\66\65\x2e\65\62\x2e\x33\66\x2e\x32\x35\x30" => '', "\x31\63\56\67\70\x2e\x32\61\x36\56\65\x36" => '', "\65\62\56\x31\66\x32\x2e\62\61\62\x2e\61\x36\63" => '', "\62\x33\x2e\71\x36\x2e\63\64\56\x31\x30\65" => '', "\x36\65\x2e\65\62\x2e\61\61\x33\56\62\63\66" => '', "\61\x37\x32\x2e\62\65\65\56\66\61\x2e\x33\64" => '', "\x31\67\x32\x2e\62\x35\65\x2e\66\61\x2e\63\x35" => '', "\61\x37\62\x2e\62\65\65\56\66\x31\56\63\66" => '', "\61\67\x32\56\x32\65\65\56\66\61\56\63\x37" => '', "\x31\67\62\x2e\x32\65\x35\56\x36\x31\56\x33\x38" => '', "\x31\67\x32\x2e\62\x35\x35\56\x36\61\56\63\71" => '', "\x31\67\x32\x2e\x32\65\x35\x2e\66\x31\x2e\x34\x30" => '', "\65\x32\56\x32\x33\x37\56\62\x33\65\x2e\61\x38\x35" => '', "\x35\62\56\62\x33\x37\56\62\65\60\56\x37\63" => '', "\65\62\x2e\x32\63\x37\x2e\62\x33\66\56\61\64\x35" => '', "\61\x30\x34\x2e\x34\x31\x2e\x32\56\61\71" => '', "\x31\71\61\x2e\62\63\x35\x2e\x39\70\56\61\66\64" => '', "\61\71\61\56\x32\x33\65\56\71\71\56\62\x32\x31" => '', "\61\x39\61\x2e\x32\63\62\56\61\x39\64\56\65\61" => '', "\61\60\x34\56\x32\x31\61\56\x31\64\x33\56\70" => '', "\61\60\x34\x2e\62\61\x31\56\x31\66\x35\x2e\65\x33" => '', "\x35\62\x2e\61\x37\x32\x2e\61\64\56\70\x37" => '', "\64\x30\x2e\70\x33\56\70\x39\x2e\62\61\64" => '', "\x35\x32\x2e\x31\67\x35\x2e\65\67\56\x38\x31" => '', "\62\60\56\x31\70\70\x2e\x36\x33\56\x31\x35\x31" => '', "\62\60\x2e\x35\62\56\x33\66\56\64\71" => '', "\x35\62\56\62\x34\66\x2e\61\x36\x35\x2e\61\x35\63" => '', "\65\x31\56\x31\64\x34\56\x31\x30\x32\x2e\62\63\x33" => '', "\61\63\56\x37\x36\56\71\67\x2e\62\62\64" => '', "\61\60\62\56\61\x33\63\x2e\61\66\x39\x2e\x36\x36" => '', "\x35\62\56\62\63\61\x2e\x31\71\71\x2e\61\67\60" => '', "\61\63\56\65\x33\x2e\61\66\62\x2e\x37" => '', "\64\x30\56\61\x32\x33\56\x32\61\x38\56\71\x34" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto wywwieycqskuqcwc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wywwieycqskuqcwc: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\x50\x5f\125\123\105\x52\x5f\x41\107\105\116\x54"); if ($uowwycywwssskuys) { goto gwyseusuceuwwccu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); gwyseusuceuwwccu: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\43\x50\x69\x6e\147\144\157\155\x50\x61\x67\x65\123\160\145\145\144\x7c\104\x61\x72\x65\102\x6f\157\x73\164\x7c\107\x6f\157\147\154\x65\174\x50\124\x53\x54\174\x43\150\162\x6f\155\145\x2d\114\151\147\150\x74\150\x6f\x75\x73\x65\174\127\x50\x20\122\x6f\x63\x6b\x65\x74\43\151", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\x51\x55\x45\123\124\x5f\125\122\x49", ''); if (!$iyiwooigkweeewey) { goto icouowaoycuuisqe; } $iyiwooigkweeewey = "\57" . ltrim($iyiwooigkweeewey, "\57"); icouowaoycuuisqe: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto ocmwuquguuqigose; } return ''; ocmwuquguuqigose: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto kmqusaiaiogecyiy; } return $magawcseesgowoeo; kmqusaiaiogecyiy: return "{$magawcseesgowoeo}\77{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto swckikycciugciqq; } $magawcseesgowoeo = explode("\77", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); swckikycciugciqq: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\105\121\x55\x45\x53\124\137\115\x45\x54\110\x4f\x44", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto iqwsqykoueqyyomy; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\143\141\143\150\145\x5f\151\x67\x6e\x6f\x72\145\144\137\160\141\162\x61\155\x65\164\x65\x72\x73"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto coogyackikgmecic; } ksort($eyagkkkqkwcuygso); coogyackikgmecic: iqwsqykoueqyyomy: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; egikqoaqqegawugu: if (!(strpos($euueacigmgoqkimu, "\56\x2f") !== false || strpos($euueacigmgoqkimu, "\57\56") !== false || "\56" === $euueacigmgoqkimu || "\x2e\56" === $euueacigmgoqkimu)) { goto ggaucuaykyuiikem; } if (strpos($euueacigmgoqkimu, "\x2e\x2e\57") === 0) { goto sescaagayikiggyq; } if (strpos($euueacigmgoqkimu, "\x2e\57") === 0) { goto esqiocgueosoksyq; } if (strpos($euueacigmgoqkimu, "\x2f\56\57") === 0) { goto sqmiymiemeegegic; } if ("\57\x2e" === $euueacigmgoqkimu) { goto wycuyiukyceccaow; } if (strpos($euueacigmgoqkimu, "\57\56\x2e\x2f") === 0) { goto ugcwqacogqoswyse; } if ("\x2f\x2e\56" === $euueacigmgoqkimu) { goto qsmoiwqcuamyuwyu; } if ("\x2e" === $euueacigmgoqkimu || "\56\56" === $euueacigmgoqkimu) { goto wmcmqmmcweecqmsw; } if (strpos($euueacigmgoqkimu, "\x2f", 1) !== false) { goto caaygouikgagsssc; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto yoaewquyogiimyic; caaygouikgagsssc: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\x2f", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); yoaewquyogiimyic: goto aakoeuuosouyeemc; wmcmqmmcweecqmsw: $euueacigmgoqkimu = ''; aakoeuuosouyeemc: goto cicegcoqyuoggiwy; qsmoiwqcuamyuwyu: $euueacigmgoqkimu = "\x2f"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); cicegcoqyuoggiwy: goto saekesoeysauokkq; ugcwqacogqoswyse: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); saekesoeysauokkq: goto meseuuacmkuowqau; wycuyiukyceccaow: $euueacigmgoqkimu = "\57"; meseuuacmkuowqau: goto csqakuuiyywassgw; sqmiymiemeegegic: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); csqakuuiyywassgw: goto csggsqueaqmwgwkk; esqiocgueosoksyq: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); csggsqueaqmwgwkk: goto wwwggoemicgwwasy; sescaagayikiggyq: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); wwwggoemicgwwasy: goto egikqoaqqegawugu; ggaucuaykyuiikem: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto egmocemomockemia; } $icwicymcioeyeyek["\x70\x65\162\x6d\x61\x6c\151\156\x6b"] = $this->aakgigyaookyiaqk(); $this->oaumimwssciwumys($uamcoiueqaamsqma, $icwicymcioeyeyek); egmocemomockemia: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto gemwkqocygssmequ; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); gemwkqocygssmequ: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto cqaeiesyciakcagu; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); cqaeiesyciakcagu: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\x75\x72\154"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\x6d\145\x73\x73\x61\147\x65" => $uamcoiueqaamsqma, "\143\157\x6e\164\x65\170\164" => $icwicymcioeyeyek]; } }
