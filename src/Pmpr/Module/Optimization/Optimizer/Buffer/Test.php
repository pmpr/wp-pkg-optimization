<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a608b965f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\162\x69" => 1, "\163\x73\154" => 0, "\x77\x70\137\x34\x30\x34" => 1, "\163\145\141\162\143\150" => 1, "\155\x6f\x62\x69\x6c\145" => 1, "\151\163\x5f\150\x74\x6d\154" => 1, "\161\x75\145\x72\171\137\163\x74\x72\151\156\147" => 1, "\144\157\x6e\x6f\164\143\x61\x63\x68\145\x70\141\147\x65" => 1, "\162\x65\152\x65\143\164\145\x64\137\x63\157\x6f\153\x69\145" => 1, "\155\141\x6e\x64\141\x74\157\x72\x79\137\x63\x6f\x6f\153\x69\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\164\x65\163\164\163"])) { goto yyieomeeqycmikqw; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\164\145\x73\x74\163"]); yyieomeeqycmikqw: if (!(!isset($ywmkwiwkosakssii["\143\157\x6f\x6b\x69\145\x73"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto kwiuqqwamsimqgme; } $ywmkwiwkosakssii["\143\157\157\x6b\151\145\x73"] = $_COOKIE; kwiuqqwamsimqgme: if (!(!isset($ywmkwiwkosakssii["\160\x6f\x73\x74"]) && !empty($_POST) && is_array($_POST))) { goto qmegcmqemmywoqas; } $ywmkwiwkosakssii["\x70\x6f\x73\164"] = $_POST; qmegcmqemmywoqas: if (!(!isset($ywmkwiwkosakssii["\x67\x65\164"]) && !empty($_GET) && is_array($_GET))) { goto giooasyeqwaaocea; } $ywmkwiwkosakssii["\x67\145\164"] = $_GET; giooasyeqwaaocea: $this->get = !empty($ywmkwiwkosakssii["\x67\x65\x74"]) && is_array($ywmkwiwkosakssii["\x67\x65\x74"]) ? $ywmkwiwkosakssii["\x67\x65\164"] : []; $this->post = !empty($ywmkwiwkosakssii["\160\x6f\163\164"]) && is_array($ywmkwiwkosakssii["\x70\157\x73\164"]) ? $ywmkwiwkosakssii["\160\x6f\x73\x74"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\143\x6f\x6f\153\151\x65\x73"]) && is_array($ywmkwiwkosakssii["\x63\x6f\157\153\x69\145\x73"]) ? $ywmkwiwkosakssii["\x63\x6f\x6f\153\x69\x65\163"] : []; if (!$this->ayueggmoqeeukqmq()) { goto uueywyysiicuauem; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\167\160\137\143\165\x73\x74\x6f\x6d\x69\172\145" => '']); uueywyysiicuauem: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->aiukiaokcgsiomew()) { goto seieguyaaiqismgo; } $this->yauwooaeicgosquo("\x44\145\x76\40\x4d\x6f\x64\x65\x20\x45\156\141\142\154\x65\144\40\141\156\144\x20\x61\154\x6c\40\x72\145\161\165\145\163\164\40\151\163\40\142\171\x70\141\x73\163\x2e"); return false; seieguyaaiqismgo: if (!$this->kgkoeoeseyuugaao()) { goto qgyoesyiasqimcoe; } $this->yauwooaeicgosquo("\x52\x6f\x62\x6f\164\163\56\164\x78\x74\40\x6f\x72\40\56\x68\164\141\143\x63\145\x73\163\40\146\x69\154\145\40\151\x73\40\x65\170\143\x6c\x75\x64\145\x64\x2e"); return false; qgyoesyiasqimcoe: if (!$this->gymgcceeqssmesiu()) { goto kkwqmewaksmokuqy; } $this->yauwooaeicgosquo("\120\110\120\54\40\x58\x4d\114\54\x20\157\x72\40\130\x53\x4c\40\x66\x69\154\145\x20\x69\163\40\x65\170\143\x6c\x75\x64\145\x64\x2e"); return false; kkwqmewaksmokuqy: if (!$this->goecwaaykqoaaagg()) { goto gsgkayokisiesciy; } $this->yauwooaeicgosquo("\x41\x64\x6d\151\156\x20\157\162\40\x41\x4a\x41\x58\40\x55\122\114\40\151\163\x20\145\170\x63\154\x75\144\145\144\x2e"); return false; gsgkayokisiesciy: if (!$this->sgsscqasgeyeicoe()) { goto ascogkesqmuuaesq; } $this->yauwooaeicgosquo("\101\x64\155\151\x6e\x20\157\162\40\101\x4a\101\130\40\125\122\x4c\x20\x69\x73\x20\145\x78\143\154\165\144\145\x64\x2e"); return false; ascogkesqmuuaesq: if ($this->gooeyogikcusgwuu()) { goto askukaucmocewkgg; } $this->yauwooaeicgosquo("\122\x65\x71\x75\145\x73\164\x20\155\145\x74\150\x6f\x64\x20\151\x73\40\156\x6f\164\x20\x61\x6c\154\157\167\x65\144\56\40\x50\141\147\145\40\143\141\x6e\x6e\157\164\40\x62\145\40\143\141\x63\150\145\144\x2e", ["\162\x65\x71\x75\145\x73\x74\x5f\x6d\145\x74\150\x6f\144" => $this->ciyocmkwssocskiy()]); return false; askukaucmocewkgg: if ($this->cskwmweqysskwckg()) { goto kiemqsgcmouqscao; } $this->lastError = []; return true; kiemqsgcmouqscao: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\x73\165\x63\x63\x65\x73\163"]) { goto wssaaemscmmiomee; } $this->yauwooaeicgosquo("\116\157\40\143\157\x6e\x66\x69\147\40\146\151\154\x65\x20\x66\x6f\165\x6e\x64", ["\143\157\x6e\146\151\x67\137\160\x61\x74\150" => $uiewakwqscemywuo["\x70\141\x74\x68"]]); return false; wssaaemscmmiomee: if (!($this->cskwmweqysskwckg("\161\165\145\162\x79\x5f\163\164\x72\x69\x6e\147") && !$this->koguieumooaesyww())) { goto meqmcgmksqiqcoyq; } $this->yauwooaeicgosquo("\121\x75\145\162\x79\x20\163\164\x72\151\x6e\x67\40\125\122\114\40\x69\x73\x20\145\170\143\x6c\165\144\x65\x64\56", $_GET); return false; meqmcgmksqiqcoyq: if (!($this->cskwmweqysskwckg("\163\x73\154") & !$this->eqwgocqwoyyykwke())) { goto euskosgaksmimgug; } $this->yauwooaeicgosquo("\123\123\114\x20\x63\141\143\x68\145\40\156\157\x74\40\x61\160\160\x6c\151\145\144\x20\x74\x6f\40\160\x61\147\x65\56"); return false; euskosgaksmimgug: if (!($this->cskwmweqysskwckg("\165\x72\151") && !$this->qweiomkkuikwugks())) { goto iusaeoimukymskgs; } $this->yauwooaeicgosquo("\x50\x61\147\x65\x20\x69\163\x20\145\x78\x63\154\165\144\x65\144\56"); return false; iusaeoimukymskgs: if (!($this->cskwmweqysskwckg("\162\x65\x6a\145\x63\164\x65\144\137\143\157\157\153\151\145") && $this->cokqaygwwygweuyk())) { goto asciaakaoygususy; } $this->yauwooaeicgosquo("\x45\170\x63\x6c\165\x64\x65\x64\40\x63\x6f\x6f\x6b\x69\145\x20\x66\x6f\165\156\x64\56", ["\145\x78\143\x6c\x75\x64\x65\x64\137\x63\157\x6f\x6b\x69\x65\163" => $this->cokqaygwwygweuyk()]); return false; asciaakaoygususy: if (!($this->cskwmweqysskwckg("\155\x61\156\144\141\x74\157\x72\x79\x5f\x63\157\157\153\x69\x65") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto eaggoasiwogmquwc; } $this->yauwooaeicgosquo("\x4d\151\x73\163\x69\x6e\147\x20\155\x61\x6e\x64\x61\164\157\162\171\40\143\x6f\x6f\153\x69\145\x3a\x20\x70\141\x67\x65\x20\156\157\x74\x20\x70\x72\x6f\x63\145\163\163\x65\144\x2e", ["\x6d\x69\x73\163\151\x6e\x67\137\143\157\x6f\153\x69\x65\x73" => $this->qgymyeqwqaiwmmea()]); return false; eaggoasiwogmquwc: if (!($this->cskwmweqysskwckg("\165\163\x65\x72\137\141\x67\x65\156\164") && !$this->mqiqsuksgyekwkii())) { goto meoweqcaaosoomeu; } $this->yauwooaeicgosquo("\125\163\145\x72\40\x41\x67\145\156\x74\40\x69\x73\x20\x65\x78\x63\154\165\144\145\144\x2e", ["\x75\163\145\162\137\141\x67\145\156\164" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\x54\120\x5f\x55\123\x45\122\137\x41\x47\105\x4e\124")]); return false; meoweqcaaosoomeu: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto ywmoieqkigsykequ; } $this->yauwooaeicgosquo("\102\x75\146\146\145\x72\40\143\x6f\156\x74\x65\x6e\x74\40\x75\x6e\144\x65\162\x20\x32\65\x35\40\143\150\x61\162\x61\x63\164\x65\162\163\56"); return false; ywmoieqkigsykequ: if (!(http_response_code() !== 200)) { goto iaousaauoawkqkkg; } $this->yauwooaeicgosquo("\120\x61\147\145\x20\x69\163\x20\156\x6f\164\x20\x61\x20\x32\60\60\x20\110\x54\x54\x50\x20\x72\145\163\x70\x6f\156\x73\x65\x20\x61\156\144\x20\143\141\x6e\x6e\x6f\164\x20\142\145\40\143\141\x63\x68\145\x64\56"); return false; iaousaauoawkqkkg: if (!($this->cskwmweqysskwckg("\x64\157\x6e\x6f\x74\x6f\x70\x74\x69\155\151\x7a\x65\x70\141\147\x65") && $this->cowcgqokiosgaqic())) { goto kkwucaoumyayagcq; } $this->yauwooaeicgosquo("\x44\117\116\124\117\120\x54\111\115\111\x5a\x45\104\120\101\x47\x45\x20\x69\x73\x20\x64\145\146\151\156\x65\144\x2e\x20\120\x61\147\x65\x20\143\x61\156\x6e\157\164\x20\x62\145\x20\143\141\143\x68\145\144\x2e"); return false; kkwucaoumyayagcq: if (!($this->cskwmweqysskwckg("\167\x70\x5f\x34\x30\64") && $this->kmmyuiwaogukwqqi())) { goto muwyuiikuywigwso; } $this->yauwooaeicgosquo("\127\x50\40\x34\x30\x34\40\160\141\147\145\40\151\x73\x20\x65\x78\143\154\x75\144\x65\144\56"); return false; muwyuiikuywigwso: if (!($this->cskwmweqysskwckg("\163\145\141\162\x63\150") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto gikaiicgqyueeoco; } $this->yauwooaeicgosquo("\123\145\x61\162\143\x68\x20\x70\x61\x67\145\x20\x69\x73\40\145\170\143\x6c\x75\144\145\x64\56"); return false; gikaiicgqyueeoco: if (!$this->cskwmweqysskwckg("\151\x73\x5f\x68\164\x6d\154")) { goto akoiqkoqmmmcieug; } if (!($this->cmaecekuqkwmemms("\122\105\123\124\137\122\105\x51\125\105\x53\x54") || $this->gaiygescoqgyusaa())) { goto akcakssqcqcouwew; } unset($this->tests["\x69\163\x5f\150\x74\155\x6c"]); akcakssqcqcouwew: akoiqkoqmmmcieug: if (!($this->cskwmweqysskwckg("\151\163\137\150\164\x6d\154") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto cgasgmiiqegqesic; } $this->yauwooaeicgosquo("\x4e\157\x20\x63\154\157\x73\151\156\147\x20\74\57\150\x74\x6d\154\76\40\167\141\x73\x20\x66\157\165\156\144\56"); return false; cgasgmiiqegqesic: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\x70\162\137\157\160\164\x69\x6d\x69\x7a\x61\x74\151\157\156\x5f\141\154\x6c\157\x77\137\164\157\x5f\163\x74\x61\162\164\x5f\142\165\146\x66\x65\162\x5f\x70\x72\x6f\143\x65\163\x73", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto yamoiggaeugmgkku; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto eqekaoaioiykuaiw; yamoiggaeugmgkku: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); eqekaoaioiykuaiw: return apply_filters("\160\x72\137\157\x70\x74\151\155\x69\x7a\x61\x74\151\x6f\156\x5f\150\x61\163\137{$ymqmyyeuycgmigyo}\137\164\x65\163\x74", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\57\x3c\x5c\x73\x2a\x5c\x2f\134\x73\52\x68\164\x6d\154\134\x73\x2a\x3e\x2f\x69", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\57\x28\x3f\72\56\x2b\x2f\x29\x3f" . $wp_rewrite->feed_base . "\x28\x3f\72\57\x28\x3f\x3a\56\x2b\57\77\x29\x3f\51\x3f\x24"; return (bool) preg_match("\43\136\50{$uckmmkmoeikwsiqg}\x29\x24\43\x69", $this->gygiweeesqqckgme()); } public function aiukiaokcgsiomew() { return $this->aceaeommyuooiqge()->get("\x64\145\x76\137\155\157\x64\x65"); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qoiuwyogucoeaoew; } return $this->eecucukcqkqysiau(__FUNCTION__); qoiuwyogucoeaoew: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto qkkqiagwgaoyauki; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qkkqiagwgaoyauki: $ucasskoyoewwmmii = ["\162\157\142\157\164\x73\x2e\x74\x78\164", "\56\150\x74\x61\x63\x63\x65\163\163"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\57" . $qogsmwakwacwqogk))) { goto gioqkcywauuckmua; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gioqkcywauuckmua: iqeqqwcmaiqakawc: } oyywywoqaqcykucs: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto miaiggsoiaekmqwy; } return $this->eecucukcqkqysiau(__FUNCTION__); miaiggsoiaekmqwy: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto uqagqomggiacosqm; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto suoymucmyegewkmu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); suoymucmyegewkmu: uqagqomggiacosqm: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto mwskgsimqagmkcgq; } return $this->eecucukcqkqysiau(__FUNCTION__); mwskgsimqagmkcgq: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto mkuigmcgkawyawee; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); mkuigmcgkawyawee: if (!(strtolower($iyiwooigkweeewey) === "\57\x69\156\144\x65\x78\56\160\150\160")) { goto ouqwmaaskykywyqo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ouqwmaaskykywyqo: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\160\x68\x70" => 1, "\170\155\x6c" => 1, "\x78\163\x6c" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\104\x4f\x49\x4e\x47\x5f\x41\112\101\130"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\x54\120\123")), ["\x6f\x6e", "\x31"]) || "\x34\64\63" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\122\126\105\122\x5f\120\x4f\122\124"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\160\x5f\143\165\x73\x74\x6f\x6d\x69\172\145"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\107\105\x54" => 1, "\x48\105\101\104" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto agqmoymkiswqswqo; } return $this->eecucukcqkqysiau(__FUNCTION__); agqmoymkiswqswqo: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto kwaqakoogeiacmwi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kwaqakoogeiacmwi: $yccgiaiouekkouay = ["\163" => 1, "\154\x61\x6e\x67" => 1, "\x70\x65\x72\155\141\x6c\x69\x6e\153\137\156\141\x6d\145" => 1, "\x6c\160\x2d\166\x61\162\x69\141\x74\x69\157\x6e\55\x69\x64" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto ccqgkeesikyegcik; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ccqgkeesikyegcik: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\x63\x61\x63\150\x65\137\x71\x75\145\162\x79\x5f\x73\164\162\151\156\147\163"); if ($yccgiaiouekkouay) { goto aakwscykmyyykoms; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); aakwscykmyyykoms: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iiuawywwoaeyauge; } return $this->eecucukcqkqysiau(__FUNCTION__); iiuawywwoaeyauge: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto wcoqiwuusoeqiqwi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); wcoqiwuusoeqiqwi: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto oqwyemgwoossauyk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); oqwyemgwoossauyk: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto kcqieuukskyiywss; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; kcqieuukskyiywss: yuoyackaoigyyyso: } cwcmwogseemgqgqq: if (empty($eiocugauqgouiuyi)) { goto wukuisoeoeomgegu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); wukuisoeoeomgegu: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto gsimeiqkoyqkuecq; } return $this->eecucukcqkqysiau(__FUNCTION__); gsimeiqkoyqkuecq: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto gqywcowiigceimaw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gqywcowiigceimaw: $yiycakoikkyuokgk = array_flip(explode("\174", $this->aceaeommyuooiqge()->get("\x63\x61\143\150\x65\x5f\155\x61\156\x64\x61\164\157\162\171\137\143\157\157\153\151\145\163"))); if ($this->wemyikwikgwqwuoc()) { goto eyuoecmogqwkmomi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); eyuoecmogqwkmomi: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto mgwgiesscqoaqcau; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); mgwgiesscqoaqcau: geugsymgsiuuqccg: } quewwumogiocouii: if (!empty($yiycakoikkyuokgk)) { goto ioacywuoyuskqmwy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ioacywuoyuskqmwy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\x70\x72\x5f\x6f\160\x74\151\x6d\x69\x7a\141\164\x69\x6f\156\x5f\157\x76\x65\x72\162\151\144\x65\x5f\x64\x6f\156\x74\x5f\x6f\160\164\x69\x6d\151\x7a\145", $this->cmaecekuqkwmemms("\x50\122\x5f\x4f\120\124\111\115\111\132\x41\124\111\x4f\116\x5f\x44\x4f\x4e\x54\137\x4f\x50\124\x49\x4d\111\x5a\x45", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\151\x73\137\64\x30\x34") && is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\151\x73\137\x73\145\x61\x72\x63\x68") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\160\x72\137\157\x70\164\151\x6d\151\x7a\x61\x74\151\157\156\x5f\x6f\x70\x74\x69\x6d\151\172\x65\137\163\145\x61\x72\143\x68", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\x63\x61\x63\x68\x65\137\x73\x73\x6c"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto bgoygegmogcmeaou; } return $this->eecucukcqkqysiau(__FUNCTION__); bgoygegmogcmeaou: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto awgaewwsskasueke; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); awgaewwsskasueke: if (!$this->aceaeommyuooiqge()->get("\x6d\x6f\142\x69\154\145\137\x63\x61\x63\150\x65")) { goto cgmcwkmmcmmkiooc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); cgmcwkmmcmmkiooc: $wayquiskgeuoqamk = "\62\56\60\134\40\x4d\x4d\x50\174\62\64\60\x78\63\x32\x30\x7c\x34\x30\60\x58\62\64\60\174\x41\x76\141\x6e\x74\x47\x6f\x7c\102\154\x61\143\153\102\x65\x72\162\x79\x7c\102\x6c\141\x7a\145\x72\x7c\x43\x65\x6c\x6c\x70\150\x6f\156\145\x7c\x44\141\x6e\147\145\162\174\x44\x6f\103\x6f\x4d\157\174\105\x6c\141\x69\x6e\145\x2f\x33\x2e\60\x7c\105\x75\x64\x6f\x72\141\x57\x65\142\x7c\107\x6f\157\147\x6c\x65\142\157\x74\x2d\x4d\x6f\142\x69\154\x65\174\150\151\160\x74\x6f\x70\x7c\x49\105\x4d\x6f\142\151\154\145\174\113\131\x4f\x43\105\122\x41\x2f\127\130\63\61\x30\x4b\174\114\x47\57\x55\x39\x39\60\x7c\x4d\111\104\x50\x2d\62\x2e\x7c\115\115\x45\106\62\60\x7c\x4d\117\x54\55\126\x7c\x4e\x65\164\106\162\157\x6e\x74\174\x4e\145\x77\x74\x7c\x4e\x69\x6e\164\x65\x6e\x64\x6f\x5c\40\x57\151\x69\174\116\151\x74\162\157\x7c\x4e\157\153\x69\x61\174\x4f\x70\145\x72\x61\134\40\115\x69\x6e\x69\x7c\120\x61\x6c\155\174\x50\x6c\141\x79\123\164\x61\164\x69\157\x6e\134\x20\x50\157\x72\164\141\x62\x6c\145\x7c\160\x6f\x72\x74\x61\x6c\x6d\x6d\x6d\x7c\120\162\157\170\x69\156\x65\164\174\x50\162\x6f\170\x69\x4e\145\164\x7c\x53\110\101\122\120\55\124\121\x2d\107\x58\x31\60\x7c\123\110\107\55\151\x39\x30\x30\x7c\123\x6d\x61\x6c\154\174\x53\x6f\x6e\171\x45\162\x69\x63\163\x73\x6f\156\174\123\x79\155\142\151\141\156\x5c\x20\x4f\x53\174\123\171\x6d\x62\151\141\x6e\117\123\x7c\x54\123\x32\x31\x69\x2d\x31\x30\174\x55\120\x2e\x42\x72\157\167\x73\x65\162\x7c\x55\x50\56\114\151\x6e\x6b\174\x77\145\x62\x4f\123\174\127\x69\x6e\x64\x6f\x77\x73\134\x20\x43\105\x7c\127\x69\156\127\x41\x50\x7c\131\x61\x68\x6f\x6f\123\145\145\153\145\162\x2f\115\61\101\x31\x2d\x52\x32\x44\x32\174\x69\120\150\x6f\156\x65\174\151\x50\x6f\144\174\101\156\144\162\x6f\151\144\x7c\102\154\141\143\153\102\x65\162\x72\171\71\x35\63\x30\x7c\114\x47\55\124\x55\71\61\65\x5c\x20\x4f\142\x69\147\157\x7c\x4c\107\105\x5c\x20\126\x58\174\167\x65\142\117\x53\174\116\x6f\153\151\x61\x35\x38\x30\60"; if (!preg_match("\43\136\56\52\x28{$wayquiskgeuoqamk}\51\56\x2a\43\x69", $uowwycywwssskuys)) { goto iamooqskosymqsmw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); iamooqskosymqsmw: $wayquiskgeuoqamk = "\167\63\143\134\40\x7c\167\63\x63\x2d\x7c\x61\x63\x73\x2d\x7c\x61\154\x61\166\x7c\141\154\143\141\x7c\x61\x6d\157\151\x7c\141\x75\x64\151\174\141\166\141\156\x7c\142\x65\156\x71\174\142\x69\x72\144\174\142\x6c\x61\x63\174\x62\x6c\141\172\174\142\162\x65\x77\x7c\143\x65\x6c\154\x7c\x63\154\x64\143\174\143\x6d\144\55\174\x64\x61\156\147\x7c\144\157\143\157\174\145\x72\151\x63\174\150\x69\160\x74\174\x68\164\143\137\x7c\151\156\156\x6f\174\151\160\141\161\x7c\151\160\157\x64\x7c\x6a\x69\x67\x73\x7c\x6b\144\144\151\x7c\153\145\152\x69\174\x6c\145\156\x6f\x7c\x6c\147\x2d\x63\x7c\x6c\x67\x2d\x64\x7c\154\x67\55\147\174\x6c\x67\x65\x2d\174\x6c\x67\57\165\x7c\155\x61\x75\151\174\155\x61\170\x6f\x7c\155\x69\x64\x70\x7c\155\151\164\163\174\155\x6d\x65\146\174\x6d\x6f\142\x69\x7c\x6d\157\164\x2d\x7c\x6d\x6f\x74\157\174\x6d\x77\142\160\174\156\145\x63\55\x7c\156\145\167\x74\174\156\157\x6b\151\174\160\x61\x6c\155\174\160\x61\156\x61\x7c\160\x61\x6e\164\x7c\x70\x68\151\154\174\160\154\x61\171\x7c\160\157\162\164\174\160\x72\157\x78\x7c\x71\167\x61\160\x7c\x73\141\147\145\x7c\163\141\x6d\163\174\x73\x61\156\171\174\x73\x63\150\55\174\x73\x65\143\x2d\174\163\145\x6e\x64\174\163\145\x72\x69\x7c\x73\x67\x68\55\174\163\x68\141\162\x7c\163\x69\x65\x2d\174\x73\x69\145\x6d\x7c\x73\x6d\141\154\x7c\163\x6d\141\x72\174\163\157\x6e\x79\174\x73\160\150\x2d\x7c\x73\x79\x6d\142\x7c\164\x2d\x6d\157\174\x74\x65\154\151\174\164\x69\155\x2d\174\164\x6f\163\150\174\x74\163\155\x2d\x7c\165\x70\147\x31\x7c\x75\160\x73\151\174\x76\153\55\x76\x7c\166\157\x64\x61\x7c\167\x61\160\x2d\x7c\x77\x61\x70\x61\174\167\x61\160\x69\x7c\x77\141\160\x70\174\167\141\x70\162\x7c\167\x65\142\x63\174\x77\x69\156\x77\x7c\x77\x69\x6e\167\x7c\x78\x64\141\134\x20\x7c\x78\144\x61\55"; if (!preg_match("\x23\x5e\x28{$wayquiskgeuoqamk}\x29\56\52\43\151", $uowwycywwssskuys)) { goto wwccoougkywoaoui; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); wwccoougkywoaoui: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto eygqeoiskweuiuqi; } return $this->eecucukcqkqysiau(__FUNCTION__); eygqeoiskweuiuqi: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto uykwmucgoywoesui; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); uykwmucgoywoesui: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\x63\141\143\x68\x65\x5f\x72\x65\152\x65\143\164\137\165\141"); if ($mqsuiayuwmwqaqwm) { goto iisieuaeyiqwckou; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); iisieuaeyiqwckou: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\x23{$mqsuiayuwmwqaqwm}\43", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto oskwkeaemiqcaqkc; } return $this->eecucukcqkqysiau(__FUNCTION__); oskwkeaemiqcaqkc: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\x63\x61\x63\x68\145\x5f\x72\145\x6a\x65\143\x74\x5f\165\x72\x69"); if ($escsaeeosigewsme) { goto kiqmcymowosckmii; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kiqmcymowosckmii: $yciaosuiyeieceug = !preg_match("\43\136\50{$escsaeeosigewsme}\x29\44\x23\x69", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\120\x5f\125\x53\x45\122\x5f\x41\107\x45\x4e\124"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iaygaasesyymwgss; } return $this->eecucukcqkqysiau(__FUNCTION__); iaygaasesyymwgss: $yygmoeguaqyumuui = [ "\110\x54\x54\x50\x5f\x43\106\137\103\x4f\116\116\105\x43\124\111\x4e\x47\137\111\x50", "\x48\124\x54\120\x5f\x43\x4c\x49\105\x4e\124\137\111\x50", "\110\124\x54\x50\x5f\x58\x5f\x46\117\122\127\x41\x52\x44\105\104\x5f\x46\117\x52", "\110\x54\124\x50\137\130\x5f\106\117\x52\127\101\x52\x44\x45\x44", "\x48\x54\124\x50\x5f\x58\x5f\x43\114\x55\123\124\x45\122\137\x43\114\111\105\116\x54\137\111\x50", "\x48\124\124\x50\x5f\x58\137\x52\105\x41\114\137\111\120", "\x48\124\124\120\137\106\117\x52\127\101\x52\104\x45\104\x5f\106\117\x52", "\x48\x54\x54\120\x5f\x46\x4f\x52\127\101\x52\104\105\104", "\122\x45\115\117\x54\105\x5f\101\104\104\x52", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto qsyqcokomswykyso; } $kucumcusyyckayas = explode("\54", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto wqmwcuggcisqieao; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); wqmwcuggcisqieao: qsyqcokomswykyso: iacwyogogoccmwsg: } iwosouqsesoqcska: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\60\56\60\56\x30\x2e\60"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto issgmmkcgesyeoas; } return $this->eecucukcqkqysiau(__FUNCTION__); issgmmkcgesyeoas: $yywgiquyoymymqwk = [ "\x32\60\70\x2e\x37\x30\56\x32\64\67\56\x31\x35\x37" => '', "\x31\x37\x32\56\x32\x35\65\x2e\64\70\x2e\61\x33\60" => '', "\61\x37\x32\56\x32\x35\65\56\64\70\56\x31\x33\x31" => '', "\x31\x37\x32\56\x32\x35\65\56\x34\x38\x2e\x31\63\x32" => '', "\61\67\62\x2e\x32\x35\x35\x2e\x34\x38\x2e\61\63\63" => '', "\x31\x37\62\x2e\x32\x35\x35\56\64\x38\56\x31\x33\x34" => '', "\x31\67\62\x2e\62\65\65\x2e\64\x38\x2e\x31\x33\65" => '', "\61\x37\62\56\x32\65\65\56\64\70\56\61\x33\66" => '', "\x31\67\62\56\62\65\x35\56\64\70\x2e\61\x33\x37" => '', "\x31\67\x32\56\62\x35\x35\56\64\x38\56\x31\63\70" => '', "\61\67\x32\56\x32\65\x35\x2e\64\70\x2e\61\x33\71" => '', "\x31\x37\62\56\x32\65\x35\56\x34\70\x2e\61\64\x30" => '', "\x31\x37\62\x2e\62\65\65\x2e\64\x38\x2e\x31\x34\x31" => '', "\x31\x37\62\x2e\x32\65\x35\56\x34\x38\56\61\64\x32" => '', "\x31\x37\x32\x2e\x32\65\65\x2e\x34\x38\56\x31\64\63" => '', "\x31\67\62\56\x32\x35\x35\56\64\70\x2e\x31\64\x34" => '', "\61\x37\62\56\x32\65\65\x2e\64\x38\56\61\64\x35" => '', "\x31\x37\x32\x2e\62\65\65\56\64\70\x2e\x31\64\x36" => '', "\61\67\62\56\x32\65\65\x2e\64\x38\x2e\x31\64\67" => '', "\x35\62\x2e\x32\x32\71\x2e\61\62\62\56\62\64\60" => '', "\x31\x30\x34\56\x32\x31\64\x2e\67\x32\x2e\x31\60\x31" => '', "\x31\x33\56\66\66\56\x37\x2e\x31\61" => '', "\61\x33\56\70\x35\56\62\64\56\x38\63" => '', "\61\63\56\70\65\x2e\62\x34\56\71\60" => '', "\x31\63\56\x38\x35\56\70\62\x2e\x32\66" => '', "\64\60\x2e\67\64\x2e\x32\64\62\x2e\62\x35\x33" => '', "\x34\60\x2e\x37\64\56\x32\x34\63\x2e\x31\x33" => '', "\64\x30\56\x37\x34\56\x32\x34\63\x2e\x31\67\x36" => '', "\61\60\64\x2e\x32\61\x34\56\64\70\56\62\64\67" => '', "\61\65\x37\x2e\65\x35\x2e\61\x38\x39\56\x31\x38\71" => '', "\61\60\64\56\x32\61\x34\56\61\61\x30\x2e\61\x33\65" => '', "\x37\60\56\x33\x37\56\x38\63\56\62\64\60" => '', "\x36\x35\x2e\x35\62\x2e\x33\x36\x2e\62\65\60" => '', "\x31\x33\x2e\x37\70\56\x32\61\x36\56\65\x36" => '', "\x35\62\x2e\x31\x36\x32\56\x32\x31\x32\x2e\x31\66\x33" => '', "\x32\x33\56\x39\66\x2e\63\x34\x2e\x31\60\65" => '', "\x36\x35\56\65\x32\56\61\61\63\56\x32\63\66" => '', "\x31\67\x32\x2e\x32\x35\65\56\x36\61\56\x33\64" => '', "\x31\67\62\x2e\62\65\65\56\x36\x31\x2e\63\65" => '', "\61\67\62\56\x32\65\x35\56\66\61\x2e\63\x36" => '', "\x31\67\x32\x2e\62\65\x35\x2e\x36\61\x2e\63\67" => '', "\x31\x37\62\56\62\x35\65\x2e\x36\x31\56\63\x38" => '', "\x31\67\x32\x2e\x32\65\65\56\x36\x31\x2e\63\x39" => '', "\x31\x37\x32\56\x32\65\65\56\x36\x31\x2e\x34\60" => '', "\x35\62\x2e\62\63\67\x2e\62\x33\x35\56\x31\x38\x35" => '', "\65\x32\56\62\x33\67\x2e\x32\65\x30\56\67\63" => '', "\x35\x32\56\x32\63\67\56\62\x33\66\x2e\x31\x34\65" => '', "\61\60\64\56\64\x31\x2e\x32\x2e\61\x39" => '', "\x31\71\61\56\x32\63\x35\56\x39\x38\56\61\x36\x34" => '', "\61\x39\x31\x2e\62\x33\65\56\71\x39\x2e\x32\62\x31" => '', "\61\x39\x31\x2e\x32\x33\62\x2e\61\x39\x34\56\65\61" => '', "\x31\x30\x34\x2e\x32\61\x31\x2e\61\x34\63\56\70" => '', "\61\60\x34\56\62\61\x31\56\x31\x36\65\56\x35\63" => '', "\65\x32\56\61\67\x32\56\61\x34\x2e\70\67" => '', "\x34\x30\x2e\x38\63\56\70\x39\x2e\62\x31\64" => '', "\x35\x32\x2e\x31\67\x35\56\65\x37\56\x38\61" => '', "\x32\60\x2e\x31\70\x38\56\x36\x33\x2e\61\65\61" => '', "\x32\60\x2e\65\62\56\63\66\x2e\64\x39" => '', "\x35\x32\56\62\x34\66\x2e\61\x36\x35\56\61\x35\63" => '', "\x35\61\x2e\61\x34\64\56\61\x30\62\x2e\x32\x33\63" => '', "\x31\63\x2e\67\66\x2e\x39\67\56\62\x32\64" => '', "\61\60\x32\x2e\x31\x33\63\x2e\61\66\x39\x2e\x36\66" => '', "\65\x32\56\62\63\61\x2e\61\71\x39\56\x31\67\60" => '', "\61\x33\56\65\63\56\x31\x36\x32\x2e\67" => '', "\64\x30\x2e\x31\62\63\x2e\62\x31\x38\x2e\x39\64" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto yeiicwscguyokwyu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yeiicwscguyokwyu: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\x54\x50\137\125\x53\x45\122\x5f\101\x47\105\x4e\x54"); if ($uowwycywwssskuys) { goto yueosioyegouuwqo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); yueosioyegouuwqo: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\43\120\151\x6e\147\x64\x6f\155\x50\141\x67\145\x53\x70\x65\x65\144\174\x44\x61\x72\145\x42\157\x6f\163\164\x7c\x47\157\x6f\x67\154\145\x7c\x50\124\123\124\174\103\150\162\157\155\x65\x2d\x4c\151\147\150\164\150\x6f\x75\163\x65\174\127\x50\40\122\x6f\143\x6b\x65\x74\x23\x69", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\105\x51\x55\105\123\x54\137\x55\122\x49", ''); if (!$iyiwooigkweeewey) { goto giuoqsumkimmuaya; } $iyiwooigkweeewey = "\57" . ltrim($iyiwooigkweeewey, "\x2f"); giuoqsumkimmuaya: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto mssaawaiaimogowg; } return ''; mssaawaiaimogowg: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto ccyiggckemwgooco; } return $magawcseesgowoeo; ccyiggckemwgooco: return "{$magawcseesgowoeo}\x3f{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto umamqqwcoewcigew; } $magawcseesgowoeo = explode("\x3f", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); umamqqwcoewcigew: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\x45\x51\125\x45\123\x54\x5f\x4d\105\124\x48\x4f\x44", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto gaiaucesmcqgqwac; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\143\x61\x63\150\145\137\x69\x67\156\157\x72\145\144\137\160\141\162\x61\155\145\164\145\x72\x73"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto swkeiggkawwgewuw; } ksort($eyagkkkqkwcuygso); swkeiggkawwgewuw: gaiaucesmcqgqwac: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; oaskqsoyesmmeaew: if (!(strpos($euueacigmgoqkimu, "\x2e\57") !== false || strpos($euueacigmgoqkimu, "\57\56") !== false || "\56" === $euueacigmgoqkimu || "\56\x2e" === $euueacigmgoqkimu)) { goto kuimgwmkcgcoecko; } if (strpos($euueacigmgoqkimu, "\56\56\x2f") === 0) { goto cquyuwsisgqscemm; } if (strpos($euueacigmgoqkimu, "\x2e\x2f") === 0) { goto wammkmaqucqagqww; } if (strpos($euueacigmgoqkimu, "\x2f\x2e\57") === 0) { goto sikmqkecsiyciaei; } if ("\57\56" === $euueacigmgoqkimu) { goto yyyyawaqcowsgqcs; } if (strpos($euueacigmgoqkimu, "\57\56\x2e\x2f") === 0) { goto wmcucyuieqgqisis; } if ("\57\x2e\x2e" === $euueacigmgoqkimu) { goto ywqouwqomiqwoquu; } if ("\56" === $euueacigmgoqkimu || "\x2e\56" === $euueacigmgoqkimu) { goto yywwaaiicukuwcao; } if (strpos($euueacigmgoqkimu, "\57", 1) !== false) { goto aacaoywsaqscgyua; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto miigqygoawqmkkqm; aacaoywsaqscgyua: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\57", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); miigqygoawqmkkqm: goto eykiuqsamowqykam; yywwaaiicukuwcao: $euueacigmgoqkimu = ''; eykiuqsamowqykam: goto qcwkymcgqacaaywc; ywqouwqomiqwoquu: $euueacigmgoqkimu = "\x2f"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); qcwkymcgqacaaywc: goto qwsmiaegmcwuskwi; wmcucyuieqgqisis: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); qwsmiaegmcwuskwi: goto usmagcaocwiugqum; yyyyawaqcowsgqcs: $euueacigmgoqkimu = "\57"; usmagcaocwiugqum: goto wmycwscioqackeig; sikmqkecsiyciaei: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); wmycwscioqackeig: goto iuooqassskiyeemo; wammkmaqucqagqww: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); iuooqassskiyeemo: goto imykswegcuekqwio; cquyuwsisgqscemm: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); imykswegcuekqwio: goto oaskqsoyesmmeaew; kuimgwmkcgcoecko: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto eokikuciuqkyauum; } eokikuciuqkyauum: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto ykuqeyogsasokqis; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); ykuqeyogsasokqis: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto mqaamqyoywyekiko; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); mqaamqyoywyekiko: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\x75\162\x6c"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\x6d\x65\163\163\141\x67\x65" => $uamcoiueqaamsqma, "\143\157\x6e\164\x65\x78\164" => $icwicymcioeyeyek]; } }
