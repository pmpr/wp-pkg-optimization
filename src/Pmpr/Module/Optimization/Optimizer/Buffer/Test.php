<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f15ea6553f3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\x75\x72\151" => 1, "\x73\x73\x6c" => 0, "\167\160\x5f\x34\x30\x34" => 1, "\163\x65\141\x72\143\x68" => 1, "\155\157\x62\x69\x6c\145" => 1, "\151\x73\137\x68\x74\x6d\x6c" => 1, "\x71\x75\145\x72\171\x5f\x73\x74\162\151\156\x67" => 1, "\x64\157\156\157\164\143\141\143\150\145\x70\141\147\x65" => 1, "\162\145\x6a\145\x63\164\145\x64\x5f\143\157\157\x6b\151\145" => 1, "\x6d\x61\156\x64\x61\164\x6f\x72\171\137\x63\157\157\153\151\x65" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\x74\145\x73\164\163"])) { goto agyycikucwgmysee; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\x74\x65\x73\164\163"]); agyycikucwgmysee: if (!(!isset($ywmkwiwkosakssii["\x63\157\x6f\x6b\x69\145\163"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto aiukiwqmikscoswm; } $ywmkwiwkosakssii["\143\157\x6f\153\151\145\x73"] = $_COOKIE; aiukiwqmikscoswm: if (!(!isset($ywmkwiwkosakssii["\x70\157\163\164"]) && !empty($_POST) && is_array($_POST))) { goto mcmkqgkwyqoiikcq; } $ywmkwiwkosakssii["\x70\x6f\x73\x74"] = $_POST; mcmkqgkwyqoiikcq: if (!(!isset($ywmkwiwkosakssii["\x67\x65\164"]) && !empty($_GET) && is_array($_GET))) { goto ssyukuseoymackeo; } $ywmkwiwkosakssii["\x67\x65\164"] = $_GET; ssyukuseoymackeo: $this->get = !empty($ywmkwiwkosakssii["\x67\145\x74"]) && is_array($ywmkwiwkosakssii["\147\145\x74"]) ? $ywmkwiwkosakssii["\x67\x65\164"] : []; $this->post = !empty($ywmkwiwkosakssii["\160\x6f\x73\x74"]) && is_array($ywmkwiwkosakssii["\160\x6f\x73\164"]) ? $ywmkwiwkosakssii["\160\157\x73\164"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\143\x6f\x6f\153\x69\145\x73"]) && is_array($ywmkwiwkosakssii["\143\x6f\x6f\153\x69\x65\163"]) ? $ywmkwiwkosakssii["\x63\x6f\x6f\153\x69\x65\x73"] : []; if (!$this->ayueggmoqeeukqmq()) { goto gskacikgkwcuauko; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\167\x70\137\143\165\163\164\157\x6d\151\x7a\145" => '']); gskacikgkwcuauko: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->aiukiaokcgsiomew()) { goto yyieomeeqycmikqw; } $this->yauwooaeicgosquo("\104\x65\x76\40\x4d\x6f\x64\x65\40\x45\x6e\141\x62\154\145\144\x20\141\156\144\x20\x61\x6c\154\x20\x72\x65\161\165\145\163\164\40\x69\163\40\x62\x79\160\141\x73\x73\56"); return false; yyieomeeqycmikqw: if (!$this->kgkoeoeseyuugaao()) { goto kwiuqqwamsimqgme; } $this->yauwooaeicgosquo("\122\x6f\x62\x6f\164\163\56\x74\170\x74\x20\x6f\162\x20\56\150\x74\141\143\x63\145\163\x73\40\x66\151\154\x65\40\x69\x73\x20\x65\x78\143\x6c\165\144\145\x64\56"); return false; kwiuqqwamsimqgme: if (!$this->gymgcceeqssmesiu()) { goto qmegcmqemmywoqas; } $this->yauwooaeicgosquo("\120\110\120\54\40\x58\115\114\54\x20\x6f\x72\40\x58\123\x4c\40\146\151\x6c\x65\x20\151\x73\x20\145\x78\x63\154\165\x64\145\144\56"); return false; qmegcmqemmywoqas: if (!$this->goecwaaykqoaaagg()) { goto giooasyeqwaaocea; } $this->yauwooaeicgosquo("\101\x64\x6d\x69\156\40\157\162\40\x41\x4a\x41\x58\40\x55\x52\x4c\x20\151\x73\x20\x65\x78\143\154\x75\144\x65\x64\x2e"); return false; giooasyeqwaaocea: if (!$this->sgsscqasgeyeicoe()) { goto uueywyysiicuauem; } $this->yauwooaeicgosquo("\x41\x64\155\151\x6e\x20\157\162\x20\x41\112\x41\x58\x20\125\x52\114\x20\x69\163\x20\145\170\143\154\165\144\x65\144\56"); return false; uueywyysiicuauem: if ($this->gooeyogikcusgwuu()) { goto seieguyaaiqismgo; } $this->yauwooaeicgosquo("\122\x65\x71\165\145\x73\164\40\155\x65\164\150\157\144\40\151\163\x20\x6e\x6f\164\40\x61\154\x6c\x6f\167\145\x64\56\40\x50\141\x67\x65\x20\143\x61\156\156\x6f\x74\40\x62\x65\x20\x63\141\143\x68\145\144\x2e", ["\162\145\161\x75\x65\x73\164\137\155\x65\x74\150\x6f\144" => $this->ciyocmkwssocskiy()]); return false; seieguyaaiqismgo: if ($this->cskwmweqysskwckg()) { goto qgyoesyiasqimcoe; } $this->lastError = []; return true; qgyoesyiasqimcoe: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\163\x75\x63\x63\x65\x73\163"]) { goto kkwqmewaksmokuqy; } $this->yauwooaeicgosquo("\116\x6f\x20\x63\x6f\156\146\x69\x67\40\x66\x69\x6c\145\x20\x66\157\165\156\x64", ["\143\x6f\x6e\x66\151\x67\137\x70\141\x74\150" => $uiewakwqscemywuo["\160\141\164\150"]]); return false; kkwqmewaksmokuqy: if (!($this->cskwmweqysskwckg("\161\165\x65\162\171\137\163\x74\x72\x69\156\147") && !$this->koguieumooaesyww())) { goto gsgkayokisiesciy; } $this->yauwooaeicgosquo("\x51\x75\x65\x72\171\x20\x73\x74\x72\x69\156\147\x20\125\122\x4c\40\151\163\x20\145\170\x63\x6c\x75\144\x65\x64\x2e", $_GET); return false; gsgkayokisiesciy: if (!($this->cskwmweqysskwckg("\x73\x73\154") & !$this->eqwgocqwoyyykwke())) { goto ascogkesqmuuaesq; } $this->yauwooaeicgosquo("\123\123\x4c\x20\143\141\x63\x68\145\40\x6e\157\164\x20\x61\x70\x70\154\x69\145\144\x20\164\157\x20\x70\141\147\x65\x2e"); return false; ascogkesqmuuaesq: if (!($this->cskwmweqysskwckg("\x75\162\151") && !$this->qweiomkkuikwugks())) { goto askukaucmocewkgg; } $this->yauwooaeicgosquo("\x50\141\147\x65\40\151\x73\40\x65\x78\143\x6c\165\x64\x65\144\56"); return false; askukaucmocewkgg: if (!($this->cskwmweqysskwckg("\162\x65\x6a\145\143\164\145\144\x5f\x63\x6f\157\153\151\145") && $this->cokqaygwwygweuyk())) { goto kiemqsgcmouqscao; } $this->yauwooaeicgosquo("\x45\x78\143\154\165\x64\x65\144\x20\143\x6f\x6f\x6b\x69\x65\x20\146\x6f\x75\156\x64\x2e", ["\145\x78\x63\x6c\x75\x64\145\144\137\x63\157\x6f\x6b\x69\145\x73" => $this->cokqaygwwygweuyk()]); return false; kiemqsgcmouqscao: if (!($this->cskwmweqysskwckg("\x6d\x61\156\x64\141\x74\157\x72\x79\137\143\x6f\157\153\151\x65") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto wssaaemscmmiomee; } $this->yauwooaeicgosquo("\115\x69\163\163\x69\x6e\147\40\155\141\156\144\141\164\157\162\171\x20\143\x6f\157\x6b\x69\x65\72\x20\160\x61\147\x65\x20\x6e\x6f\x74\40\160\162\x6f\x63\x65\x73\x73\x65\x64\56", ["\155\x69\163\163\151\156\x67\x5f\143\157\157\x6b\x69\145\x73" => $this->qgymyeqwqaiwmmea()]); return false; wssaaemscmmiomee: if (!($this->cskwmweqysskwckg("\x75\163\145\x72\x5f\141\x67\x65\156\164") && !$this->mqiqsuksgyekwkii())) { goto meqmcgmksqiqcoyq; } $this->yauwooaeicgosquo("\x55\x73\x65\162\40\101\x67\145\156\x74\40\x69\x73\x20\145\170\143\x6c\x75\144\145\144\56", ["\165\163\x65\x72\x5f\x61\x67\145\x6e\164" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\x50\x5f\x55\123\105\x52\x5f\x41\107\x45\116\x54")]); return false; meqmcgmksqiqcoyq: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto euskosgaksmimgug; } $this->yauwooaeicgosquo("\x42\x75\x66\146\x65\162\40\x63\x6f\x6e\x74\145\x6e\164\x20\165\156\144\145\162\x20\62\65\x35\40\x63\150\141\162\141\143\164\145\x72\163\56"); return false; euskosgaksmimgug: if (!(http_response_code() !== 200)) { goto iusaeoimukymskgs; } $this->yauwooaeicgosquo("\x50\x61\x67\x65\40\151\163\40\156\157\x74\x20\x61\40\x32\60\60\x20\x48\x54\x54\120\x20\162\145\163\x70\x6f\x6e\163\145\x20\141\x6e\x64\40\143\141\156\156\x6f\164\40\x62\x65\x20\143\x61\x63\x68\145\144\56"); return false; iusaeoimukymskgs: if (!($this->cskwmweqysskwckg("\144\x6f\156\x6f\164\x6f\x70\x74\x69\x6d\151\172\x65\160\x61\x67\145") && $this->cowcgqokiosgaqic())) { goto asciaakaoygususy; } $this->yauwooaeicgosquo("\x44\x4f\x4e\124\117\x50\x54\x49\x4d\111\x5a\105\104\x50\x41\107\x45\40\151\163\x20\144\145\x66\x69\x6e\x65\x64\56\40\120\141\x67\x65\x20\143\x61\156\x6e\x6f\x74\40\x62\x65\40\143\x61\x63\x68\x65\144\56"); return false; asciaakaoygususy: if (!($this->cskwmweqysskwckg("\x77\160\x5f\x34\60\x34") && $this->kmmyuiwaogukwqqi())) { goto eaggoasiwogmquwc; } $this->yauwooaeicgosquo("\x57\x50\x20\x34\60\x34\40\x70\141\x67\145\x20\151\x73\x20\x65\x78\143\x6c\x75\x64\x65\x64\x2e"); return false; eaggoasiwogmquwc: if (!($this->cskwmweqysskwckg("\x73\x65\x61\162\x63\150") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto meoweqcaaosoomeu; } $this->yauwooaeicgosquo("\123\x65\141\x72\x63\150\40\x70\x61\x67\x65\40\151\163\x20\x65\x78\143\x6c\x75\x64\x65\x64\x2e"); return false; meoweqcaaosoomeu: if (!$this->cskwmweqysskwckg("\151\x73\137\150\164\155\x6c")) { goto iaousaauoawkqkkg; } if (!($this->cmaecekuqkwmemms("\122\x45\123\x54\x5f\x52\105\121\125\x45\x53\x54") || $this->gaiygescoqgyusaa())) { goto ywmoieqkigsykequ; } unset($this->tests["\x69\x73\137\x68\164\x6d\154"]); ywmoieqkigsykequ: iaousaauoawkqkkg: if (!($this->cskwmweqysskwckg("\151\x73\x5f\150\164\155\x6c") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto kkwucaoumyayagcq; } $this->yauwooaeicgosquo("\116\x6f\x20\x63\x6c\157\x73\151\x6e\x67\40\74\x2f\x68\164\x6d\154\x3e\x20\x77\141\163\x20\x66\157\165\x6e\x64\x2e"); return false; kkwucaoumyayagcq: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\160\x72\x5f\157\160\164\151\155\151\172\x61\x74\x69\157\x6e\x5f\x61\154\154\157\167\137\164\x6f\137\x73\164\x61\162\164\x5f\x62\165\146\x66\x65\162\x5f\x70\x72\x6f\x63\145\163\x73", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto muwyuiikuywigwso; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto gikaiicgqyueeoco; muwyuiikuywigwso: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); gikaiicgqyueeoco: return apply_filters("\x70\162\x5f\157\160\164\151\155\151\x7a\x61\x74\151\157\156\x5f\150\141\x73\137{$ymqmyyeuycgmigyo}\x5f\164\x65\163\x74", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\x2f\74\x5c\x73\x2a\x5c\x2f\134\163\52\150\x74\155\x6c\134\163\52\76\57\151", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\57\50\77\72\56\x2b\x2f\51\x3f" . $wp_rewrite->feed_base . "\50\77\x3a\57\50\x3f\72\56\x2b\x2f\x3f\x29\77\51\77\44"; return (bool) preg_match("\x23\x5e\50{$uckmmkmoeikwsiqg}\51\x24\x23\151", $this->gygiweeesqqckgme()); } public function aiukiaokcgsiomew() { return $this->aceaeommyuooiqge()->get("\144\145\166\137\155\x6f\144\145"); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto akcakssqcqcouwew; } return $this->eecucukcqkqysiau(__FUNCTION__); akcakssqcqcouwew: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto akoiqkoqmmmcieug; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); akoiqkoqmmmcieug: $ucasskoyoewwmmii = ["\162\157\x62\157\164\x73\56\x74\x78\164", "\56\x68\x74\x61\x63\143\x65\163\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\x2f" . $qogsmwakwacwqogk))) { goto eqekaoaioiykuaiw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); eqekaoaioiykuaiw: yamoiggaeugmgkku: } cgasgmiiqegqesic: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qoiuwyogucoeaoew; } return $this->eecucukcqkqysiau(__FUNCTION__); qoiuwyogucoeaoew: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto oyywywoqaqcykucs; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto qkkqiagwgaoyauki; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qkkqiagwgaoyauki: oyywywoqaqcykucs: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iqeqqwcmaiqakawc; } return $this->eecucukcqkqysiau(__FUNCTION__); iqeqqwcmaiqakawc: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto gioqkcywauuckmua; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); gioqkcywauuckmua: if (!(strtolower($iyiwooigkweeewey) === "\57\151\x6e\x64\145\x78\x2e\x70\150\x70")) { goto miaiggsoiaekmqwy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); miaiggsoiaekmqwy: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\x70\150\160" => 1, "\x78\x6d\154" => 1, "\x78\x73\x6c" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\104\x4f\x49\116\x47\x5f\x41\x4a\101\130"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\120\123")), ["\x6f\156", "\61"]) || "\64\x34\x33" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\105\x52\x56\105\x52\x5f\x50\117\122\x54"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\167\160\137\x63\x75\x73\x74\x6f\x6d\151\172\x65"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\x47\105\x54" => 1, "\110\105\101\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto suoymucmyegewkmu; } return $this->eecucukcqkqysiau(__FUNCTION__); suoymucmyegewkmu: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto uqagqomggiacosqm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); uqagqomggiacosqm: $yccgiaiouekkouay = ["\163" => 1, "\x6c\141\x6e\147" => 1, "\160\x65\x72\x6d\141\154\151\x6e\153\137\x6e\141\x6d\x65" => 1, "\x6c\160\55\166\141\x72\151\x61\x74\x69\157\x6e\x2d\x69\x64" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto mwskgsimqagmkcgq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); mwskgsimqagmkcgq: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\143\141\143\x68\x65\x5f\161\165\x65\x72\x79\x5f\x73\x74\162\x69\x6e\x67\163"); if ($yccgiaiouekkouay) { goto mkuigmcgkawyawee; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); mkuigmcgkawyawee: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ouqwmaaskykywyqo; } return $this->eecucukcqkqysiau(__FUNCTION__); ouqwmaaskykywyqo: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto agqmoymkiswqswqo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); agqmoymkiswqswqo: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto kwaqakoogeiacmwi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kwaqakoogeiacmwi: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto iiuawywwoaeyauge; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; iiuawywwoaeyauge: aakwscykmyyykoms: } ccqgkeesikyegcik: if (empty($eiocugauqgouiuyi)) { goto wcoqiwuusoeqiqwi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); wcoqiwuusoeqiqwi: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto oqwyemgwoossauyk; } return $this->eecucukcqkqysiau(__FUNCTION__); oqwyemgwoossauyk: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto cwcmwogseemgqgqq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); cwcmwogseemgqgqq: $yiycakoikkyuokgk = array_flip(explode("\x7c", $this->aceaeommyuooiqge()->get("\143\141\x63\150\145\x5f\x6d\x61\x6e\144\x61\164\x6f\162\171\x5f\x63\x6f\x6f\x6b\x69\x65\163"))); if ($this->wemyikwikgwqwuoc()) { goto yuoyackaoigyyyso; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); yuoyackaoigyyyso: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto gsimeiqkoyqkuecq; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); gsimeiqkoyqkuecq: wukuisoeoeomgegu: } kcqieuukskyiywss: if (!empty($yiycakoikkyuokgk)) { goto gqywcowiigceimaw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gqywcowiigceimaw: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\x70\162\137\157\160\x74\151\155\x69\172\x61\x74\x69\157\x6e\x5f\157\166\145\162\162\x69\144\145\x5f\x64\157\156\164\x5f\157\x70\164\x69\x6d\x69\172\145", $this->cmaecekuqkwmemms("\120\x52\x5f\117\120\124\x49\x4d\x49\x5a\101\124\111\117\116\137\x44\117\x4e\124\137\117\120\x54\x49\115\x49\x5a\x45", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\151\163\x5f\64\x30\x34") && is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\x69\163\137\x73\145\141\x72\x63\x68") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\x70\162\137\157\160\164\x69\155\x69\172\141\x74\x69\x6f\156\137\157\x70\164\151\155\x69\x7a\x65\137\x73\145\141\162\x63\x68", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\143\x61\143\150\x65\x5f\163\x73\x6c"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto eyuoecmogqwkmomi; } return $this->eecucukcqkqysiau(__FUNCTION__); eyuoecmogqwkmomi: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto quewwumogiocouii; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); quewwumogiocouii: if (!$this->aceaeommyuooiqge()->get("\155\157\142\x69\x6c\145\x5f\143\x61\143\x68\x65")) { goto geugsymgsiuuqccg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); geugsymgsiuuqccg: $wayquiskgeuoqamk = "\x32\x2e\x30\x5c\40\x4d\115\120\x7c\62\64\x30\170\x33\62\60\174\x34\60\60\130\x32\x34\60\x7c\101\166\x61\x6e\164\x47\157\174\x42\x6c\x61\143\x6b\x42\145\162\162\171\x7c\x42\154\x61\172\145\162\174\103\145\x6c\x6c\160\x68\157\x6e\x65\174\104\141\156\147\145\162\x7c\x44\x6f\103\157\115\x6f\174\x45\x6c\x61\151\x6e\145\x2f\63\56\x30\x7c\105\x75\144\x6f\x72\141\x57\x65\142\174\x47\x6f\157\147\x6c\145\x62\x6f\x74\55\115\157\x62\151\154\145\x7c\150\151\160\x74\x6f\160\174\111\105\115\x6f\142\x69\154\145\174\113\131\x4f\x43\105\122\101\x2f\127\x58\x33\61\60\x4b\174\x4c\x47\57\x55\71\71\60\174\115\x49\104\120\x2d\x32\56\x7c\x4d\x4d\x45\x46\62\x30\174\x4d\117\124\55\x56\x7c\x4e\x65\x74\x46\x72\157\x6e\x74\174\x4e\145\x77\164\x7c\116\151\156\164\x65\156\144\157\134\x20\127\x69\151\x7c\116\x69\x74\162\x6f\x7c\x4e\x6f\153\x69\141\174\x4f\x70\145\162\x61\134\40\x4d\x69\x6e\151\174\x50\141\x6c\x6d\174\120\154\141\171\x53\164\141\x74\x69\x6f\156\x5c\40\120\157\162\x74\141\x62\x6c\x65\174\x70\x6f\x72\x74\x61\154\x6d\x6d\155\174\120\x72\157\170\x69\x6e\x65\x74\x7c\x50\162\157\x78\151\x4e\x65\164\x7c\123\x48\x41\x52\120\55\x54\x51\55\107\130\61\x30\174\123\110\107\x2d\x69\x39\x30\x30\x7c\x53\x6d\x61\154\154\x7c\x53\x6f\156\x79\105\x72\x69\143\163\163\x6f\156\x7c\123\171\x6d\142\151\x61\156\134\40\117\123\x7c\x53\x79\x6d\142\x69\141\156\x4f\123\174\124\123\62\61\x69\x2d\x31\x30\x7c\125\120\56\102\162\157\167\x73\145\x72\174\125\x50\x2e\x4c\x69\x6e\153\x7c\x77\x65\142\x4f\x53\x7c\127\x69\x6e\x64\157\x77\163\x5c\x20\103\105\174\127\151\x6e\127\101\120\x7c\x59\x61\x68\x6f\157\123\145\145\x6b\145\x72\x2f\x4d\61\101\x31\55\x52\x32\x44\62\x7c\151\x50\x68\157\156\145\174\151\120\157\x64\174\x41\x6e\x64\162\157\151\x64\174\102\154\141\x63\153\x42\x65\x72\x72\x79\x39\65\63\60\174\114\x47\x2d\x54\x55\71\61\65\x5c\x20\117\142\x69\147\157\x7c\x4c\107\105\x5c\x20\x56\x58\x7c\x77\145\x62\117\123\174\x4e\157\x6b\x69\x61\65\70\60\x30"; if (!preg_match("\43\x5e\x2e\x2a\50{$wayquiskgeuoqamk}\x29\56\x2a\43\x69", $uowwycywwssskuys)) { goto mgwgiesscqoaqcau; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); mgwgiesscqoaqcau: $wayquiskgeuoqamk = "\167\63\x63\134\40\174\x77\63\143\55\174\x61\x63\x73\x2d\x7c\x61\x6c\141\x76\x7c\x61\154\143\x61\174\141\x6d\x6f\151\x7c\141\x75\144\x69\174\x61\166\141\156\174\142\145\156\x71\x7c\x62\x69\x72\144\x7c\142\x6c\141\143\174\x62\154\141\172\x7c\x62\x72\x65\x77\174\x63\145\x6c\x6c\174\143\x6c\x64\143\174\143\155\144\55\174\x64\x61\x6e\147\174\x64\157\143\x6f\174\145\162\x69\143\174\150\151\x70\164\174\150\x74\x63\x5f\x7c\151\156\156\157\174\x69\160\x61\x71\174\x69\x70\x6f\144\174\x6a\x69\147\x73\174\x6b\x64\x64\151\x7c\x6b\145\152\151\174\154\x65\x6e\x6f\174\154\x67\55\x63\x7c\154\x67\55\144\x7c\154\x67\x2d\147\174\154\147\145\55\174\154\x67\x2f\165\174\155\141\165\x69\x7c\155\x61\x78\x6f\174\x6d\x69\144\x70\174\155\x69\164\163\174\x6d\x6d\x65\146\174\155\x6f\142\151\174\155\x6f\164\55\174\155\x6f\x74\157\174\155\x77\x62\x70\174\156\145\x63\55\x7c\156\145\x77\164\174\156\x6f\x6b\x69\x7c\160\141\x6c\155\x7c\160\x61\156\x61\174\x70\141\x6e\164\x7c\160\150\x69\154\x7c\160\x6c\x61\x79\x7c\160\x6f\x72\x74\174\x70\x72\x6f\x78\x7c\161\x77\x61\160\174\163\x61\147\x65\x7c\163\x61\155\x73\x7c\163\x61\x6e\171\174\x73\143\x68\x2d\x7c\x73\145\x63\55\x7c\163\145\156\144\x7c\x73\145\x72\151\x7c\x73\147\x68\x2d\174\163\150\141\x72\x7c\x73\x69\145\55\x7c\163\151\145\x6d\x7c\x73\155\x61\154\x7c\x73\x6d\141\162\174\x73\x6f\156\x79\174\163\160\150\x2d\x7c\x73\x79\155\142\174\164\55\x6d\157\x7c\x74\145\154\x69\174\164\151\155\x2d\x7c\x74\x6f\x73\150\x7c\x74\x73\x6d\x2d\x7c\165\x70\x67\61\x7c\165\x70\x73\151\174\166\x6b\x2d\x76\174\x76\x6f\x64\x61\174\167\x61\160\55\x7c\x77\x61\160\141\174\x77\141\x70\151\174\167\141\160\160\174\x77\x61\160\x72\x7c\167\x65\x62\x63\174\167\151\156\167\x7c\167\151\156\167\x7c\170\144\x61\x5c\40\174\x78\144\x61\x2d"; if (!preg_match("\43\x5e\x28{$wayquiskgeuoqamk}\x29\x2e\52\x23\151", $uowwycywwssskuys)) { goto ioacywuoyuskqmwy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ioacywuoyuskqmwy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto bgoygegmogcmeaou; } return $this->eecucukcqkqysiau(__FUNCTION__); bgoygegmogcmeaou: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto awgaewwsskasueke; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); awgaewwsskasueke: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\x63\x61\143\150\x65\x5f\162\145\152\x65\143\x74\x5f\x75\141"); if ($mqsuiayuwmwqaqwm) { goto cgmcwkmmcmmkiooc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); cgmcwkmmcmmkiooc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\43{$mqsuiayuwmwqaqwm}\x23", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iamooqskosymqsmw; } return $this->eecucukcqkqysiau(__FUNCTION__); iamooqskosymqsmw: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\143\141\x63\x68\145\x5f\162\x65\x6a\145\x63\164\x5f\165\162\151"); if ($escsaeeosigewsme) { goto wwccoougkywoaoui; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wwccoougkywoaoui: $yciaosuiyeieceug = !preg_match("\43\136\x28{$escsaeeosigewsme}\x29\x24\43\151", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\x54\120\x5f\x55\x53\x45\x52\x5f\x41\x47\105\x4e\124"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto eygqeoiskweuiuqi; } return $this->eecucukcqkqysiau(__FUNCTION__); eygqeoiskweuiuqi: $yygmoeguaqyumuui = [ "\110\x54\124\x50\137\103\106\x5f\103\117\116\116\x45\x43\124\x49\116\x47\137\x49\120", "\x48\124\124\x50\137\x43\x4c\111\105\x4e\x54\x5f\x49\x50", "\110\x54\x54\120\137\x58\137\x46\x4f\x52\x57\101\122\104\105\x44\137\x46\117\122", "\x48\x54\124\120\137\130\137\106\x4f\122\x57\101\x52\x44\x45\104", "\110\124\124\x50\x5f\x58\137\103\x4c\x55\x53\x54\x45\x52\x5f\103\114\111\105\116\x54\137\x49\120", "\110\x54\124\120\x5f\130\x5f\122\x45\x41\x4c\x5f\x49\x50", "\110\124\x54\120\137\x46\117\122\x57\101\x52\x44\x45\104\x5f\106\117\122", "\110\x54\124\x50\x5f\106\x4f\x52\x57\101\x52\x44\105\104", "\x52\105\x4d\117\124\x45\x5f\101\104\104\x52", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto kiqmcymowosckmii; } $kucumcusyyckayas = explode("\x2c", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto oskwkeaemiqcaqkc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); oskwkeaemiqcaqkc: kiqmcymowosckmii: iisieuaeyiqwckou: } uykwmucgoywoesui: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\60\56\x30\56\60\56\x30"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iaygaasesyymwgss; } return $this->eecucukcqkqysiau(__FUNCTION__); iaygaasesyymwgss: $yywgiquyoymymqwk = [ "\62\60\x38\56\x37\x30\56\x32\64\x37\56\x31\x35\67" => '', "\61\67\62\x2e\62\65\x35\x2e\64\70\56\x31\x33\x30" => '', "\61\x37\x32\x2e\x32\65\x35\x2e\x34\70\x2e\x31\x33\61" => '', "\61\x37\62\56\62\65\65\56\64\70\56\x31\x33\x32" => '', "\61\67\62\56\62\x35\x35\x2e\x34\70\x2e\x31\63\63" => '', "\61\67\x32\56\x32\65\65\56\64\70\x2e\x31\63\64" => '', "\x31\67\x32\x2e\x32\x35\65\x2e\64\70\x2e\x31\63\65" => '', "\x31\67\x32\x2e\62\x35\x35\x2e\64\x38\56\x31\63\x36" => '', "\x31\67\62\56\62\x35\65\56\x34\70\56\61\x33\x37" => '', "\x31\x37\x32\56\x32\x35\65\56\x34\x38\56\x31\x33\x38" => '', "\x31\67\x32\x2e\x32\65\65\x2e\x34\70\56\61\63\71" => '', "\61\x37\62\x2e\x32\x35\65\56\x34\70\56\61\64\x30" => '', "\61\67\x32\56\62\x35\65\x2e\x34\70\56\61\64\x31" => '', "\x31\x37\x32\x2e\x32\65\65\x2e\x34\x38\56\x31\x34\62" => '', "\61\67\x32\x2e\x32\x35\65\56\64\70\56\x31\x34\63" => '', "\61\67\x32\56\62\65\65\x2e\64\x38\x2e\61\x34\64" => '', "\61\x37\x32\x2e\62\x35\65\x2e\x34\x38\56\x31\x34\x35" => '', "\61\x37\62\x2e\62\65\65\56\64\70\x2e\x31\64\66" => '', "\x31\67\62\56\x32\x35\65\56\64\70\56\61\x34\67" => '', "\x35\62\56\62\62\x39\56\x31\x32\x32\x2e\62\64\x30" => '', "\x31\x30\x34\56\x32\61\64\x2e\x37\x32\x2e\x31\x30\61" => '', "\61\63\56\66\66\56\x37\56\61\x31" => '', "\61\x33\56\70\65\x2e\x32\x34\56\x38\x33" => '', "\61\x33\56\x38\x35\x2e\62\x34\x2e\x39\60" => '', "\61\63\x2e\x38\65\56\70\62\x2e\x32\x36" => '', "\64\x30\x2e\67\x34\x2e\62\64\x32\56\62\65\63" => '', "\64\60\x2e\x37\x34\x2e\x32\64\63\56\61\x33" => '', "\64\x30\56\67\64\x2e\62\64\x33\x2e\x31\x37\x36" => '', "\x31\60\64\x2e\62\61\x34\56\64\70\56\x32\x34\x37" => '', "\61\x35\67\x2e\x35\x35\x2e\61\70\71\x2e\61\x38\x39" => '', "\61\60\64\56\62\61\64\x2e\x31\61\x30\x2e\x31\x33\x35" => '', "\67\x30\56\63\67\x2e\70\63\56\62\64\x30" => '', "\66\65\x2e\65\x32\x2e\63\x36\x2e\62\x35\x30" => '', "\61\x33\x2e\x37\x38\x2e\x32\61\66\x2e\x35\66" => '', "\65\62\56\x31\x36\x32\x2e\x32\x31\x32\56\x31\x36\x33" => '', "\x32\x33\56\71\66\56\63\x34\x2e\x31\60\x35" => '', "\66\65\56\65\62\56\x31\x31\x33\x2e\62\x33\66" => '', "\61\x37\62\x2e\x32\x35\65\x2e\66\61\56\x33\64" => '', "\61\67\x32\56\62\x35\65\x2e\66\61\x2e\x33\x35" => '', "\61\67\x32\56\x32\x35\65\56\66\61\x2e\63\x36" => '', "\x31\67\x32\56\62\x35\65\56\66\x31\x2e\x33\67" => '', "\x31\x37\62\56\62\x35\x35\x2e\x36\61\56\x33\70" => '', "\61\x37\x32\56\62\x35\x35\x2e\66\x31\x2e\x33\x39" => '', "\61\x37\62\56\62\65\65\56\66\x31\x2e\x34\60" => '', "\65\x32\56\62\x33\x37\x2e\x32\x33\65\56\61\70\x35" => '', "\x35\x32\56\62\63\67\x2e\62\x35\x30\56\x37\x33" => '', "\65\62\x2e\x32\63\x37\x2e\x32\63\x36\56\61\64\65" => '', "\x31\60\x34\56\x34\x31\56\62\x2e\61\71" => '', "\x31\x39\x31\56\62\63\65\56\71\70\x2e\61\x36\64" => '', "\x31\71\61\56\x32\63\x35\56\71\71\x2e\x32\62\x31" => '', "\x31\71\61\56\x32\63\x32\56\61\71\x34\56\65\61" => '', "\61\60\x34\56\62\x31\61\x2e\x31\x34\x33\x2e\x38" => '', "\61\x30\64\x2e\x32\61\61\56\x31\66\x35\56\65\x33" => '', "\x35\62\56\x31\x37\62\x2e\61\64\x2e\70\67" => '', "\x34\60\56\x38\x33\56\x38\x39\56\62\61\64" => '', "\x35\62\x2e\x31\x37\x35\56\x35\x37\x2e\70\61" => '', "\x32\60\x2e\x31\70\x38\56\x36\x33\x2e\61\65\x31" => '', "\62\x30\x2e\65\62\x2e\63\x36\x2e\x34\71" => '', "\65\x32\56\62\64\66\56\x31\x36\x35\x2e\61\65\63" => '', "\x35\x31\56\x31\64\x34\x2e\61\60\x32\x2e\62\63\x33" => '', "\61\63\x2e\67\x36\56\71\x37\x2e\62\62\64" => '', "\61\x30\62\x2e\61\x33\63\56\x31\66\x39\56\x36\x36" => '', "\x35\62\x2e\x32\x33\x31\x2e\x31\x39\71\56\61\x37\60" => '', "\x31\63\56\x35\63\56\61\x36\62\56\x37" => '', "\x34\x30\x2e\61\x32\x33\56\x32\61\70\56\71\64" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto iwosouqsesoqcska; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); iwosouqsesoqcska: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\x50\137\x55\x53\105\x52\137\x41\x47\105\x4e\124"); if ($uowwycywwssskuys) { goto iacwyogogoccmwsg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); iacwyogogoccmwsg: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\x23\120\x69\x6e\x67\x64\x6f\155\120\x61\147\145\123\160\145\145\x64\174\x44\x61\162\x65\x42\x6f\157\x73\x74\x7c\107\x6f\157\x67\154\145\174\x50\x54\123\124\174\103\150\x72\157\155\145\55\114\151\x67\x68\164\150\x6f\x75\x73\x65\174\x57\x50\40\122\x6f\x63\x6b\145\x74\43\x69", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\105\x51\x55\105\123\x54\137\125\122\x49", ''); if (!$iyiwooigkweeewey) { goto wqmwcuggcisqieao; } $iyiwooigkweeewey = "\57" . ltrim($iyiwooigkweeewey, "\x2f"); wqmwcuggcisqieao: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto qsyqcokomswykyso; } return ''; qsyqcokomswykyso: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto issgmmkcgesyeoas; } return $magawcseesgowoeo; issgmmkcgesyeoas: return "{$magawcseesgowoeo}\77{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto yeiicwscguyokwyu; } $magawcseesgowoeo = explode("\77", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); yeiicwscguyokwyu: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\x45\121\x55\105\x53\124\137\x4d\105\124\110\117\x44", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto giuoqsumkimmuaya; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\x63\x61\143\x68\145\x5f\151\x67\x6e\x6f\162\145\x64\137\x70\141\x72\141\x6d\145\x74\x65\162\163"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto yueosioyegouuwqo; } ksort($eyagkkkqkwcuygso); yueosioyegouuwqo: giuoqsumkimmuaya: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; ccyiggckemwgooco: if (!(strpos($euueacigmgoqkimu, "\x2e\57") !== false || strpos($euueacigmgoqkimu, "\57\x2e") !== false || "\56" === $euueacigmgoqkimu || "\56\x2e" === $euueacigmgoqkimu)) { goto mssaawaiaimogowg; } if (strpos($euueacigmgoqkimu, "\x2e\56\x2f") === 0) { goto usmagcaocwiugqum; } if (strpos($euueacigmgoqkimu, "\x2e\57") === 0) { goto qwsmiaegmcwuskwi; } if (strpos($euueacigmgoqkimu, "\57\x2e\x2f") === 0) { goto qcwkymcgqacaaywc; } if ("\x2f\56" === $euueacigmgoqkimu) { goto eykiuqsamowqykam; } if (strpos($euueacigmgoqkimu, "\57\56\x2e\57") === 0) { goto miigqygoawqmkkqm; } if ("\57\56\x2e" === $euueacigmgoqkimu) { goto oaskqsoyesmmeaew; } if ("\56" === $euueacigmgoqkimu || "\x2e\x2e" === $euueacigmgoqkimu) { goto gaiaucesmcqgqwac; } if (strpos($euueacigmgoqkimu, "\57", 1) !== false) { goto umamqqwcoewcigew; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto swkeiggkawwgewuw; umamqqwcoewcigew: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\57", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); swkeiggkawwgewuw: goto kuimgwmkcgcoecko; gaiaucesmcqgqwac: $euueacigmgoqkimu = ''; kuimgwmkcgcoecko: goto aacaoywsaqscgyua; oaskqsoyesmmeaew: $euueacigmgoqkimu = "\x2f"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); aacaoywsaqscgyua: goto yywwaaiicukuwcao; miigqygoawqmkkqm: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); yywwaaiicukuwcao: goto ywqouwqomiqwoquu; eykiuqsamowqykam: $euueacigmgoqkimu = "\x2f"; ywqouwqomiqwoquu: goto wmcucyuieqgqisis; qcwkymcgqacaaywc: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); wmcucyuieqgqisis: goto yyyyawaqcowsgqcs; qwsmiaegmcwuskwi: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); yyyyawaqcowsgqcs: goto sikmqkecsiyciaei; usmagcaocwiugqum: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); sikmqkecsiyciaei: goto ccyiggckemwgooco; mssaawaiaimogowg: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto wmycwscioqackeig; } wmycwscioqackeig: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto wammkmaqucqagqww; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); wammkmaqucqagqww: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto iuooqassskiyeemo; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); iuooqassskiyeemo: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\x75\162\154"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\x6d\145\x73\x73\x61\147\x65" => $uamcoiueqaamsqma, "\143\x6f\156\164\145\x78\164" => $icwicymcioeyeyek]; } }
