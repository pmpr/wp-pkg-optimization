<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce6347bb78c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\x72\151" => 1, "\x73\x73\154" => 0, "\x77\x70\x5f\64\60\x34" => 1, "\163\145\141\x72\x63\150" => 1, "\x6d\157\142\x69\x6c\x65" => 1, "\151\x73\137\150\164\155\x6c" => 1, "\161\x75\145\162\x79\x5f\x73\x74\x72\151\x6e\x67" => 1, "\x64\157\x6e\157\x74\143\141\143\x68\145\x70\141\x67\145" => 1, "\x72\x65\152\x65\x63\164\145\x64\x5f\143\x6f\157\x6b\x69\145" => 1, "\x6d\141\156\144\x61\164\x6f\x72\171\137\x63\x6f\157\x6b\151\x65" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\x74\x65\163\x74\x73"])) { goto uaukmuiwskcemcsw; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\x74\x65\x73\x74\163"]); uaukmuiwskcemcsw: if (!(!isset($ywmkwiwkosakssii["\143\157\x6f\x6b\x69\145\163"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto sockeswygwcskeuq; } $ywmkwiwkosakssii["\143\157\157\x6b\x69\x65\x73"] = $_COOKIE; sockeswygwcskeuq: if (!(!isset($ywmkwiwkosakssii["\x70\157\163\164"]) && !empty($_POST) && is_array($_POST))) { goto mkwkkmkgiqiamacc; } $ywmkwiwkosakssii["\x70\157\x73\x74"] = $_POST; mkwkkmkgiqiamacc: if (!(!isset($ywmkwiwkosakssii["\x67\145\164"]) && !empty($_GET) && is_array($_GET))) { goto uaqackioaiqwcocy; } $ywmkwiwkosakssii["\x67\145\164"] = $_GET; uaqackioaiqwcocy: $this->get = !empty($ywmkwiwkosakssii["\x67\x65\x74"]) && is_array($ywmkwiwkosakssii["\x67\x65\x74"]) ? $ywmkwiwkosakssii["\147\145\164"] : []; $this->post = !empty($ywmkwiwkosakssii["\x70\x6f\163\164"]) && is_array($ywmkwiwkosakssii["\160\x6f\x73\x74"]) ? $ywmkwiwkosakssii["\160\x6f\163\164"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\143\x6f\x6f\x6b\151\145\163"]) && is_array($ywmkwiwkosakssii["\x63\157\x6f\153\151\x65\163"]) ? $ywmkwiwkosakssii["\x63\x6f\x6f\x6b\151\x65\163"] : []; if (!$this->ayueggmoqeeukqmq()) { goto cscusseysqygsoiy; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\167\160\x5f\x63\x75\x73\x74\x6f\155\151\172\x65" => '']); cscusseysqygsoiy: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->aiukiaokcgsiomew()) { goto isgwkwacoyimiauk; } $this->yauwooaeicgosquo("\x44\145\166\x20\x4d\157\144\x65\x20\x45\156\141\142\154\145\x64\x20\141\156\144\40\x61\x6c\x6c\40\x72\x65\161\x75\145\x73\x74\40\151\x73\x20\142\171\x70\141\x73\x73\56"); return false; isgwkwacoyimiauk: if (!$this->kgkoeoeseyuugaao()) { goto mggeqkcksyaymcsa; } $this->yauwooaeicgosquo("\122\157\142\157\164\163\56\x74\x78\x74\x20\157\162\40\x2e\x68\x74\x61\x63\143\x65\x73\x73\40\x66\x69\154\x65\x20\151\163\40\145\170\143\154\165\x64\145\144\x2e"); return false; mggeqkcksyaymcsa: if (!$this->gymgcceeqssmesiu()) { goto uegouoiuyoqkcscg; } $this->yauwooaeicgosquo("\120\110\x50\x2c\40\x58\x4d\114\54\x20\157\162\40\x58\x53\114\x20\146\x69\x6c\x65\x20\x69\163\40\145\170\143\154\165\144\145\144\56"); return false; uegouoiuyoqkcscg: if (!$this->goecwaaykqoaaagg()) { goto cgyakcqgugqgkqiw; } $this->yauwooaeicgosquo("\x41\x64\155\x69\x6e\x20\157\x72\40\x41\x4a\x41\x58\x20\x55\x52\114\40\x69\163\x20\145\x78\x63\x6c\165\144\x65\x64\x2e"); return false; cgyakcqgugqgkqiw: if (!$this->sgsscqasgeyeicoe()) { goto eeyyskqsmquyquqw; } $this->yauwooaeicgosquo("\101\144\x6d\x69\x6e\40\157\x72\x20\x41\x4a\x41\130\x20\x55\122\114\40\151\x73\x20\145\170\x63\154\165\144\x65\x64\56"); return false; eeyyskqsmquyquqw: if ($this->gooeyogikcusgwuu()) { goto ewscugeuicukkycc; } $this->yauwooaeicgosquo("\122\x65\x71\165\145\163\164\x20\155\x65\x74\150\157\144\40\x69\163\40\x6e\157\x74\x20\141\154\x6c\157\x77\x65\x64\56\x20\x50\x61\x67\145\40\x63\x61\x6e\156\x6f\164\x20\x62\x65\40\x63\141\143\x68\x65\144\x2e", ["\162\x65\161\x75\145\163\164\137\155\x65\164\150\157\x64" => $this->ciyocmkwssocskiy()]); return false; ewscugeuicukkycc: if ($this->cskwmweqysskwckg()) { goto kqswcsysqawkcgye; } $this->lastError = []; return true; kqswcsysqawkcgye: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\163\165\x63\x63\145\163\163"]) { goto wusciwkkckmqigms; } $this->yauwooaeicgosquo("\116\x6f\40\143\157\x6e\146\x69\x67\40\x66\151\x6c\145\x20\x66\x6f\165\156\144", ["\143\157\x6e\x66\x69\x67\137\x70\141\164\x68" => $uiewakwqscemywuo["\x70\141\x74\x68"]]); return false; wusciwkkckmqigms: if (!($this->cskwmweqysskwckg("\x71\165\145\x72\171\x5f\x73\x74\x72\x69\156\x67") && !$this->koguieumooaesyww())) { goto iiiccouaaqsyikae; } $this->yauwooaeicgosquo("\121\x75\145\x72\x79\x20\163\x74\x72\x69\x6e\x67\x20\x55\122\114\40\x69\163\40\145\x78\x63\154\165\144\x65\x64\x2e", $_GET); return false; iiiccouaaqsyikae: if (!($this->cskwmweqysskwckg("\163\x73\154") & !$this->eqwgocqwoyyykwke())) { goto ukkcmocamwgiqayu; } $this->yauwooaeicgosquo("\123\x53\114\40\x63\x61\143\150\145\x20\156\157\x74\x20\141\x70\x70\x6c\151\145\144\40\164\157\40\x70\x61\x67\145\56"); return false; ukkcmocamwgiqayu: if (!($this->cskwmweqysskwckg("\x75\162\151") && !$this->qweiomkkuikwugks())) { goto mwysseaekcsiesmm; } $this->yauwooaeicgosquo("\120\x61\147\x65\40\x69\x73\x20\145\x78\143\154\165\144\x65\144\x2e"); return false; mwysseaekcsiesmm: if (!($this->cskwmweqysskwckg("\162\x65\x6a\x65\x63\x74\145\x64\x5f\143\x6f\x6f\x6b\x69\145") && $this->cokqaygwwygweuyk())) { goto amgsueumgaguceaa; } $this->yauwooaeicgosquo("\105\170\143\x6c\165\x64\x65\144\x20\x63\157\x6f\x6b\151\x65\40\x66\157\x75\x6e\x64\x2e", ["\x65\170\x63\154\x75\144\x65\144\137\x63\157\x6f\x6b\151\145\x73" => $this->cokqaygwwygweuyk()]); return false; amgsueumgaguceaa: if (!($this->cskwmweqysskwckg("\x6d\141\156\144\141\164\x6f\x72\x79\137\x63\x6f\157\x6b\x69\x65") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto gygwewcqsmwqismo; } $this->yauwooaeicgosquo("\115\x69\x73\163\x69\x6e\x67\x20\x6d\x61\156\144\x61\x74\x6f\162\171\x20\x63\157\157\x6b\151\x65\72\x20\160\141\147\x65\x20\156\157\x74\40\x70\162\x6f\143\145\x73\163\x65\144\56", ["\x6d\x69\163\x73\151\156\x67\x5f\143\157\x6f\153\x69\x65\x73" => $this->qgymyeqwqaiwmmea()]); return false; gygwewcqsmwqismo: if (!($this->cskwmweqysskwckg("\x75\x73\x65\x72\x5f\141\x67\145\156\x74") && !$this->mqiqsuksgyekwkii())) { goto uougwgeyiokewkkm; } $this->yauwooaeicgosquo("\x55\x73\x65\x72\x20\x41\147\145\x6e\164\40\x69\x73\x20\145\170\143\x6c\165\144\x65\144\56", ["\x75\x73\145\x72\137\141\x67\145\x6e\x74" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\120\137\x55\x53\x45\x52\x5f\x41\x47\105\x4e\x54")]); return false; uougwgeyiokewkkm: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto gommacygsykyussk; } $this->yauwooaeicgosquo("\x42\165\x66\x66\x65\162\40\143\x6f\x6e\164\145\x6e\164\x20\165\x6e\x64\x65\162\40\62\x35\x35\x20\143\x68\x61\x72\141\x63\x74\x65\162\163\56"); return false; gommacygsykyussk: if (!(http_response_code() !== 200)) { goto ukqocwewouckikso; } $this->yauwooaeicgosquo("\120\x61\x67\x65\x20\x69\x73\x20\x6e\x6f\x74\40\141\x20\x32\x30\x30\x20\110\124\x54\120\40\x72\x65\x73\160\x6f\156\x73\x65\40\x61\156\144\40\x63\141\x6e\156\x6f\164\x20\142\145\x20\x63\141\x63\150\x65\x64\56"); return false; ukqocwewouckikso: if (!($this->cskwmweqysskwckg("\144\x6f\x6e\x6f\x74\157\x70\x74\x69\155\x69\x7a\145\160\x61\x67\145") && $this->cowcgqokiosgaqic())) { goto ucqmumuygcywwqma; } $this->yauwooaeicgosquo("\104\x4f\x4e\x54\117\x50\x54\111\x4d\x49\x5a\105\104\x50\101\107\x45\40\x69\163\x20\x64\145\146\x69\x6e\145\144\56\x20\x50\141\147\145\x20\x63\141\x6e\156\x6f\164\x20\142\x65\x20\143\x61\143\150\145\144\x2e"); return false; ucqmumuygcywwqma: if (!($this->cskwmweqysskwckg("\x77\160\x5f\64\60\64") && $this->kmmyuiwaogukwqqi())) { goto uykousayyomcaeaa; } $this->yauwooaeicgosquo("\127\x50\x20\64\60\x34\40\160\x61\x67\x65\x20\151\x73\40\145\x78\x63\154\165\x64\145\x64\x2e"); return false; uykousayyomcaeaa: if (!($this->cskwmweqysskwckg("\x73\x65\141\x72\x63\150") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto uimeeckqksqeekqq; } $this->yauwooaeicgosquo("\123\x65\x61\162\143\x68\40\x70\141\147\145\40\x69\163\x20\145\170\143\x6c\x75\x64\x65\144\x2e"); return false; uimeeckqksqeekqq: if (!$this->cskwmweqysskwckg("\x69\163\x5f\x68\164\x6d\154")) { goto kocqqoyymosmuksu; } if (!($this->cmaecekuqkwmemms("\122\x45\x53\124\x5f\x52\105\121\125\x45\123\124") || $this->gaiygescoqgyusaa())) { goto iuuuususuuuaieem; } unset($this->tests["\x69\163\137\150\x74\x6d\154"]); iuuuususuuuaieem: kocqqoyymosmuksu: if (!($this->cskwmweqysskwckg("\151\x73\x5f\x68\164\155\154") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto uqokiksoqcwwqgio; } $this->yauwooaeicgosquo("\x4e\x6f\x20\143\x6c\x6f\x73\x69\x6e\x67\x20\x3c\x2f\x68\x74\155\154\76\x20\x77\x61\163\40\x66\157\x75\x6e\x64\56"); return false; uqokiksoqcwwqgio: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\160\162\137\157\160\x74\x69\x6d\x69\x7a\x61\x74\151\157\156\137\x61\x6c\x6c\157\x77\x5f\x74\157\x5f\163\164\141\x72\x74\137\x62\165\x66\x66\x65\x72\137\x70\162\x6f\x63\145\163\163", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto qukocuwgakemmyga; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto sioekkmekwygemyc; qukocuwgakemmyga: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); sioekkmekwygemyc: return apply_filters("\160\162\x5f\157\x70\x74\151\x6d\x69\172\x61\x74\151\x6f\x6e\x5f\x68\141\163\x5f{$ymqmyyeuycgmigyo}\137\164\x65\x73\x74", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\x2f\74\134\163\52\x5c\57\x5c\x73\x2a\150\164\155\x6c\134\x73\52\76\57\x69", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\57\50\x3f\72\56\x2b\x2f\51\x3f" . $wp_rewrite->feed_base . "\x28\77\72\x2f\x28\x3f\x3a\x2e\x2b\x2f\x3f\x29\77\x29\x3f\x24"; return (bool) preg_match("\x23\x5e\x28{$uckmmkmoeikwsiqg}\51\x24\x23\151", $this->gygiweeesqqckgme()); } public function aiukiaokcgsiomew() { return $this->aceaeommyuooiqge()->get("\x64\145\166\x5f\155\157\144\x65"); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yiowgigkkwsoqcci; } return $this->eecucukcqkqysiau(__FUNCTION__); yiowgigkkwsoqcci: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto ieqesiiageaauiuw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ieqesiiageaauiuw: $ucasskoyoewwmmii = ["\x72\x6f\x62\x6f\164\x73\x2e\164\x78\164", "\56\x68\x74\x61\143\143\x65\163\163"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\57" . $qogsmwakwacwqogk))) { goto oyeyomcgkmgymogq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); oyeyomcgkmgymogq: mscyggqcesgqqksu: } gamqcwuwkikwqoay: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iesekaeqeomeuaui; } return $this->eecucukcqkqysiau(__FUNCTION__); iesekaeqeomeuaui: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto mogkoocsoeuyoqqa; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto wsesqmcqoiyyqkqi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wsesqmcqoiyyqkqi: mogkoocsoeuyoqqa: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wkwamkgkwykeqkec; } return $this->eecucukcqkqysiau(__FUNCTION__); wkwamkgkwykeqkec: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto oimkeqocuguqqsqk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); oimkeqocuguqqsqk: if (!(strtolower($iyiwooigkweeewey) === "\57\151\x6e\x64\145\x78\56\x70\x68\160")) { goto oeocukauoyosicso; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); oeocukauoyosicso: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\x70\x68\x70" => 1, "\x78\155\x6c" => 1, "\170\163\154" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\104\117\111\116\x47\137\101\x4a\101\x58"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\x50\123")), ["\157\156", "\61"]) || "\64\64\63" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\105\122\126\105\122\137\120\117\x52\124"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\x70\x5f\x63\x75\163\x74\157\x6d\x69\172\145"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\x47\105\124" => 1, "\110\x45\101\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto suqceasgacskcmkc; } return $this->eecucukcqkqysiau(__FUNCTION__); suqceasgacskcmkc: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto yykqaowwsqgqysmq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yykqaowwsqgqysmq: $yccgiaiouekkouay = ["\x73" => 1, "\154\141\156\x67" => 1, "\160\145\x72\x6d\x61\x6c\151\156\153\137\156\141\155\145" => 1, "\x6c\160\x2d\x76\141\162\151\141\x74\x69\x6f\x6e\x2d\151\x64" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto kwiggogcgciwuwqk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kwiggogcgciwuwqk: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\x63\x61\x63\x68\x65\137\161\x75\x65\x72\171\x5f\x73\164\162\x69\x6e\147\163"); if ($yccgiaiouekkouay) { goto uckewycoogsogwiy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); uckewycoogsogwiy: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ikuuiauwouuqawuw; } return $this->eecucukcqkqysiau(__FUNCTION__); ikuuiauwouuqawuw: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto yoqakewookqoqacm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); yoqakewookqoqacm: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto gswcoeiisamakwii; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); gswcoeiisamakwii: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto emqswoaawgeyosmi; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; emqswoaawgeyosmi: ocywegekakimmwcq: } yuimwyoywaiiqacs: if (empty($eiocugauqgouiuyi)) { goto iwsmmkqaoksmocok; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); iwsmmkqaoksmocok: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto esikeyqyuikmaiek; } return $this->eecucukcqkqysiau(__FUNCTION__); esikeyqyuikmaiek: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto okkmcocqokkskasy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); okkmcocqokkskasy: $yiycakoikkyuokgk = array_flip(explode("\x7c", $this->aceaeommyuooiqge()->get("\143\141\143\150\x65\x5f\x6d\x61\x6e\x64\141\164\x6f\162\x79\137\143\x6f\x6f\153\x69\145\163"))); if ($this->wemyikwikgwqwuoc()) { goto qiiigwkqeoewsuwm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); qiiigwkqeoewsuwm: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto mscgewkcqcoowweg; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); mscgewkcqcoowweg: ikqeeaysmqgcgawq: } esaqcqqwuussiiwo: if (!empty($yiycakoikkyuokgk)) { goto suqcsgaosywaauuu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); suqcsgaosywaauuu: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\x70\x72\x5f\x6f\160\164\x69\x6d\151\172\x61\164\x69\157\156\x5f\x6f\166\x65\162\x72\x69\x64\x65\x5f\144\x6f\x6e\x74\x5f\x6f\x70\164\x69\155\x69\x7a\x65", $this->cmaecekuqkwmemms("\x50\x52\x5f\117\120\124\111\115\111\x5a\x41\124\111\x4f\x4e\137\104\117\x4e\124\x5f\117\x50\124\111\115\111\132\x45", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\x69\163\x5f\64\60\x34") && is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\151\163\137\163\145\141\162\x63\150") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\x70\x72\137\157\x70\x74\151\155\151\x7a\141\164\151\157\156\x5f\x6f\160\164\151\155\x69\x7a\x65\137\163\x65\141\162\x63\150", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\143\141\143\150\145\137\163\163\154"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wwukgaquuyoissgy; } return $this->eecucukcqkqysiau(__FUNCTION__); wwukgaquuyoissgy: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto gsygwgsiawgmqiyi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gsygwgsiawgmqiyi: if (!$this->aceaeommyuooiqge()->get("\x6d\x6f\x62\x69\x6c\145\137\143\x61\x63\x68\x65")) { goto qsgqwyqaqiowkmco; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qsgqwyqaqiowkmco: $wayquiskgeuoqamk = "\62\x2e\60\x5c\x20\115\115\x50\x7c\x32\64\x30\170\63\62\60\x7c\64\60\60\130\x32\x34\60\174\x41\x76\141\156\x74\107\157\x7c\x42\x6c\x61\x63\153\x42\x65\162\162\x79\174\102\154\141\x7a\145\x72\174\103\145\x6c\154\160\x68\157\x6e\145\x7c\104\141\156\x67\145\x72\174\104\x6f\103\x6f\115\157\x7c\x45\154\141\151\x6e\x65\x2f\63\56\x30\174\105\165\144\x6f\162\x61\127\x65\x62\174\x47\x6f\157\x67\154\x65\x62\x6f\x74\55\x4d\157\142\x69\154\145\174\150\x69\x70\x74\157\160\174\x49\x45\x4d\x6f\x62\x69\154\145\174\113\x59\117\103\105\x52\x41\57\127\x58\x33\61\x30\113\174\114\107\x2f\125\x39\x39\x30\x7c\115\x49\x44\x50\55\62\56\174\x4d\115\105\x46\x32\60\x7c\115\117\x54\x2d\126\x7c\116\145\x74\106\x72\x6f\x6e\x74\x7c\116\145\x77\x74\174\x4e\151\x6e\x74\145\156\144\x6f\134\x20\127\x69\x69\174\x4e\151\164\162\x6f\x7c\x4e\157\x6b\x69\141\x7c\117\x70\x65\162\x61\134\x20\115\151\x6e\x69\174\120\x61\x6c\x6d\174\120\154\x61\171\123\164\x61\164\x69\157\x6e\x5c\40\x50\157\x72\164\x61\x62\x6c\x65\x7c\x70\x6f\162\164\141\154\155\155\x6d\174\x50\x72\157\170\x69\156\145\x74\x7c\x50\162\x6f\x78\151\116\x65\164\x7c\x53\x48\101\x52\x50\55\x54\121\55\x47\x58\61\60\x7c\123\x48\x47\x2d\151\x39\x30\x30\x7c\x53\x6d\141\154\x6c\174\123\x6f\156\171\105\162\151\x63\163\163\x6f\156\x7c\123\171\x6d\x62\x69\141\x6e\134\40\x4f\123\x7c\123\171\155\142\151\141\156\x4f\123\x7c\x54\x53\62\x31\151\x2d\61\60\x7c\125\x50\56\102\162\157\167\163\x65\x72\x7c\x55\120\x2e\x4c\151\x6e\x6b\x7c\167\145\142\117\x53\174\x57\151\x6e\x64\157\x77\x73\x5c\40\x43\x45\x7c\127\151\x6e\x57\x41\120\174\131\141\150\157\x6f\123\145\145\153\x65\x72\57\x4d\61\101\61\55\x52\x32\104\62\x7c\x69\x50\150\x6f\156\x65\x7c\151\x50\x6f\144\174\x41\x6e\144\162\157\151\x64\x7c\x42\x6c\141\x63\x6b\102\x65\162\162\x79\71\65\x33\x30\174\x4c\x47\55\x54\x55\x39\61\x35\134\x20\117\142\151\x67\x6f\x7c\114\107\105\x5c\x20\x56\130\x7c\167\x65\x62\x4f\123\174\116\x6f\x6b\151\141\x35\70\x30\x30"; if (!preg_match("\43\136\x2e\x2a\50{$wayquiskgeuoqamk}\x29\x2e\x2a\43\x69", $uowwycywwssskuys)) { goto yqagomygmeoecwey; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); yqagomygmeoecwey: $wayquiskgeuoqamk = "\x77\x33\x63\134\x20\174\167\x33\143\x2d\x7c\x61\143\x73\55\x7c\141\x6c\x61\x76\174\141\x6c\143\x61\174\x61\x6d\x6f\x69\x7c\x61\165\x64\151\x7c\x61\166\141\156\174\x62\145\156\x71\x7c\142\151\162\x64\x7c\142\154\141\143\x7c\142\x6c\141\x7a\x7c\142\162\x65\167\174\x63\145\x6c\x6c\174\x63\x6c\x64\x63\174\143\155\x64\x2d\174\x64\x61\156\x67\174\x64\157\143\x6f\x7c\145\162\x69\x63\174\x68\x69\160\164\174\150\x74\143\137\174\x69\x6e\x6e\x6f\174\x69\x70\141\161\174\151\x70\x6f\x64\174\152\x69\x67\163\x7c\x6b\x64\x64\151\x7c\x6b\x65\152\151\x7c\x6c\145\x6e\157\174\154\147\55\x63\x7c\x6c\147\x2d\144\x7c\x6c\x67\x2d\x67\174\154\147\145\x2d\x7c\x6c\x67\x2f\x75\174\155\141\x75\x69\x7c\155\x61\x78\157\x7c\155\151\x64\160\x7c\x6d\x69\164\163\x7c\155\x6d\x65\146\174\155\157\142\x69\174\155\157\164\x2d\174\155\157\164\157\174\x6d\167\x62\x70\174\156\x65\x63\x2d\x7c\x6e\x65\167\164\174\x6e\157\153\x69\174\x70\141\x6c\x6d\174\160\x61\156\x61\174\160\141\x6e\164\174\160\150\x69\154\174\x70\154\141\x79\174\x70\x6f\162\x74\174\160\162\157\170\x7c\x71\x77\x61\x70\x7c\x73\141\147\145\x7c\163\141\155\x73\x7c\163\141\156\x79\x7c\x73\143\x68\55\x7c\x73\x65\143\55\x7c\163\145\156\x64\x7c\x73\145\x72\x69\174\x73\x67\x68\x2d\174\163\x68\141\x72\x7c\163\x69\145\x2d\174\x73\151\x65\155\174\163\x6d\x61\x6c\174\x73\x6d\x61\x72\x7c\163\x6f\156\x79\x7c\x73\160\150\55\174\x73\x79\155\142\174\x74\55\x6d\x6f\174\x74\x65\x6c\151\174\164\x69\x6d\55\174\164\157\163\150\x7c\164\163\x6d\x2d\174\165\x70\x67\61\174\x75\x70\163\151\174\x76\x6b\55\x76\x7c\x76\x6f\144\141\x7c\167\x61\160\55\x7c\x77\x61\x70\141\x7c\x77\x61\x70\151\174\x77\x61\x70\160\x7c\x77\x61\160\x72\x7c\167\145\x62\143\174\x77\x69\156\x77\x7c\x77\x69\x6e\167\174\170\x64\x61\134\40\x7c\170\144\141\55"; if (!preg_match("\x23\x5e\x28{$wayquiskgeuoqamk}\51\56\52\x23\x69", $uowwycywwssskuys)) { goto qikaewekoecykeou; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qikaewekoecykeou: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto eucqomyqykgoiuge; } return $this->eecucukcqkqysiau(__FUNCTION__); eucqomyqykgoiuge: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto usymasgsyqgsuocg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); usymasgsyqgsuocg: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\x63\141\x63\150\x65\137\x72\x65\x6a\x65\143\x74\137\x75\x61"); if ($mqsuiayuwmwqaqwm) { goto aiccyaswigkaycqk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); aiccyaswigkaycqk: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\x23{$mqsuiayuwmwqaqwm}\43", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto sqyokemumceysegy; } return $this->eecucukcqkqysiau(__FUNCTION__); sqyokemumceysegy: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\x63\141\x63\x68\x65\137\162\145\152\145\x63\164\137\x75\x72\151"); if ($escsaeeosigewsme) { goto oqousikwiiqagoyw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); oqousikwiiqagoyw: $yciaosuiyeieceug = !preg_match("\43\136\50{$escsaeeosigewsme}\51\x24\43\x69", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\120\x5f\x55\x53\105\122\x5f\x41\107\x45\x4e\124"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto zayqqeqgcwkekwws; } return $this->eecucukcqkqysiau(__FUNCTION__); zayqqeqgcwkekwws: $yygmoeguaqyumuui = [ "\110\x54\124\120\137\103\x46\x5f\103\x4f\116\x4e\x45\103\124\111\116\x47\137\x49\120", "\x48\124\124\120\x5f\x43\x4c\x49\105\116\x54\137\111\x50", "\x48\x54\x54\x50\x5f\x58\x5f\x46\x4f\122\x57\x41\x52\104\x45\104\137\106\x4f\x52", "\x48\124\124\120\x5f\130\137\x46\x4f\x52\x57\x41\x52\x44\x45\x44", "\x48\x54\124\120\137\130\137\x43\x4c\x55\x53\124\x45\122\x5f\x43\114\x49\x45\116\124\137\111\120", "\110\124\x54\120\137\130\x5f\122\105\101\114\137\x49\120", "\110\x54\x54\120\137\x46\117\x52\127\x41\122\104\105\x44\x5f\x46\117\x52", "\x48\124\x54\x50\x5f\x46\x4f\122\x57\101\x52\x44\105\x44", "\122\x45\115\x4f\124\x45\137\101\x44\104\x52", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto ucuoeymyqeokgsya; } $kucumcusyyckayas = explode("\54", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto egmayaiikwsskgmy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); egmayaiikwsskgmy: ucuoeymyqeokgsya: mysueeoswqgccmui: } aueaceeyommgkicu: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\x30\56\60\56\60\x2e\x30"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yuuyikiacmmueosu; } return $this->eecucukcqkqysiau(__FUNCTION__); yuuyikiacmmueosu: $yywgiquyoymymqwk = [ "\62\60\x38\56\x37\60\56\x32\64\x37\56\61\65\67" => '', "\61\x37\62\56\62\65\65\56\x34\70\56\x31\x33\x30" => '', "\61\x37\62\x2e\x32\x35\65\x2e\x34\70\x2e\x31\x33\x31" => '', "\61\67\x32\56\x32\x35\65\56\64\x38\56\61\63\x32" => '', "\61\x37\62\x2e\62\x35\65\56\x34\x38\x2e\x31\63\63" => '', "\61\67\62\x2e\x32\65\65\x2e\x34\x38\x2e\x31\x33\x34" => '', "\61\67\62\56\x32\65\65\56\64\x38\56\x31\63\65" => '', "\61\x37\x32\x2e\x32\x35\65\56\64\x38\56\61\63\x36" => '', "\61\x37\x32\56\x32\65\x35\x2e\x34\x38\x2e\x31\63\x37" => '', "\x31\x37\62\x2e\x32\x35\65\x2e\64\70\x2e\61\63\x38" => '', "\x31\67\62\56\x32\65\65\x2e\x34\70\x2e\61\63\x39" => '', "\61\x37\62\x2e\x32\x35\x35\56\x34\70\x2e\x31\x34\x30" => '', "\x31\x37\62\56\62\x35\65\56\x34\x38\56\61\x34\x31" => '', "\x31\67\x32\x2e\x32\x35\65\56\x34\x38\56\x31\x34\x32" => '', "\61\x37\x32\56\62\65\x35\56\x34\70\56\61\x34\x33" => '', "\x31\67\x32\56\62\65\65\x2e\x34\70\56\61\64\x34" => '', "\x31\67\x32\x2e\62\65\x35\56\64\x38\56\61\64\65" => '', "\61\67\62\56\62\x35\x35\x2e\64\x38\x2e\x31\x34\x36" => '', "\61\x37\x32\56\x32\65\x35\56\64\x38\x2e\61\x34\x37" => '', "\65\62\x2e\x32\x32\71\56\61\62\62\56\62\64\x30" => '', "\x31\60\x34\56\62\61\x34\56\x37\x32\x2e\x31\x30\61" => '', "\61\x33\x2e\x36\66\56\x37\56\61\61" => '', "\61\x33\x2e\x38\65\56\62\x34\x2e\70\63" => '', "\61\x33\56\x38\65\56\62\x34\56\x39\x30" => '', "\x31\x33\56\70\65\x2e\x38\62\56\x32\66" => '', "\64\60\56\67\64\56\x32\64\62\x2e\x32\x35\63" => '', "\x34\60\56\x37\64\x2e\x32\x34\x33\x2e\x31\x33" => '', "\x34\x30\x2e\67\x34\56\x32\x34\63\x2e\x31\67\x36" => '', "\61\x30\64\56\x32\61\x34\56\64\70\x2e\x32\x34\67" => '', "\x31\x35\67\56\x35\x35\x2e\61\x38\71\56\x31\70\x39" => '', "\x31\60\x34\x2e\62\x31\x34\x2e\61\x31\x30\56\61\63\x35" => '', "\67\60\56\63\x37\x2e\x38\63\x2e\x32\x34\x30" => '', "\x36\65\56\65\x32\56\63\66\x2e\x32\x35\60" => '', "\61\x33\56\67\70\56\62\x31\x36\x2e\65\x36" => '', "\x35\62\56\61\66\x32\x2e\x32\61\62\x2e\61\x36\x33" => '', "\62\x33\x2e\71\x36\x2e\63\64\x2e\61\x30\x35" => '', "\66\x35\56\65\62\x2e\61\61\63\56\x32\63\66" => '', "\x31\x37\x32\x2e\62\65\x35\56\x36\61\56\63\64" => '', "\61\x37\62\x2e\62\x35\65\56\x36\61\56\x33\x35" => '', "\61\67\62\x2e\62\65\65\x2e\66\x31\56\x33\66" => '', "\61\x37\62\x2e\x32\65\x35\56\66\x31\x2e\63\67" => '', "\x31\67\62\56\x32\x35\x35\56\66\x31\56\x33\70" => '', "\61\x37\x32\x2e\x32\65\x35\x2e\66\61\56\63\71" => '', "\x31\x37\62\56\x32\x35\65\x2e\66\x31\x2e\x34\x30" => '', "\65\62\56\x32\x33\67\56\62\63\x35\56\x31\70\65" => '', "\x35\x32\56\62\x33\67\56\x32\65\60\56\67\63" => '', "\x35\x32\x2e\x32\x33\67\x2e\x32\63\x36\x2e\x31\x34\x35" => '', "\x31\x30\64\x2e\64\61\56\62\x2e\61\x39" => '', "\x31\71\61\x2e\62\63\65\x2e\x39\x38\56\x31\x36\x34" => '', "\61\x39\61\56\x32\63\x35\56\71\x39\56\62\62\x31" => '', "\x31\x39\x31\x2e\x32\x33\62\x2e\x31\71\x34\56\65\x31" => '', "\61\60\64\56\x32\61\x31\x2e\x31\x34\x33\x2e\70" => '', "\61\60\x34\56\x32\x31\x31\56\61\66\x35\56\x35\63" => '', "\x35\62\56\x31\67\62\56\x31\x34\x2e\70\67" => '', "\x34\x30\56\70\x33\56\x38\71\56\62\x31\64" => '', "\x35\62\x2e\x31\x37\x35\56\65\x37\x2e\70\x31" => '', "\62\60\x2e\x31\x38\70\56\66\63\56\61\65\x31" => '', "\x32\60\x2e\x35\62\x2e\x33\66\56\x34\x39" => '', "\65\x32\56\62\x34\x36\x2e\61\66\65\x2e\x31\65\x33" => '', "\x35\x31\x2e\61\x34\64\56\61\x30\x32\56\x32\63\63" => '', "\x31\x33\56\67\x36\x2e\x39\x37\x2e\x32\x32\64" => '', "\61\60\62\x2e\x31\63\63\56\61\66\71\56\x36\x36" => '', "\x35\62\x2e\x32\x33\61\x2e\61\71\x39\56\61\67\60" => '', "\x31\63\56\65\x33\x2e\61\x36\x32\x2e\67" => '', "\x34\x30\x2e\x31\x32\63\56\62\x31\70\56\x39\64" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto sguskaeaaqcagqgc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); sguskaeaaqcagqgc: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\124\120\x5f\x55\x53\105\122\x5f\x41\107\x45\116\124"); if ($uowwycywwssskuys) { goto agkmiayuawacakau; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); agkmiayuawacakau: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\x23\120\151\156\x67\144\157\155\120\x61\147\x65\123\160\x65\x65\144\x7c\x44\x61\162\x65\102\157\157\x73\x74\x7c\107\x6f\x6f\x67\x6c\x65\x7c\x50\x54\x53\x54\174\103\150\x72\157\x6d\x65\x2d\114\151\147\x68\x74\150\157\165\x73\145\174\127\120\x20\122\x6f\143\x6b\145\x74\43\151", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\105\x51\x55\x45\123\x54\137\125\122\x49", ''); if (!$iyiwooigkweeewey) { goto syuaummumssgwwee; } $iyiwooigkweeewey = "\57" . ltrim($iyiwooigkweeewey, "\57"); syuaummumssgwwee: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto oocuemosmeeekgas; } return ''; oocuemosmeeekgas: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto qkcsykuocwuyaice; } return $magawcseesgowoeo; qkcsykuocwuyaice: return "{$magawcseesgowoeo}\x3f{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto uoeasoimegouymka; } $magawcseesgowoeo = explode("\77", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); uoeasoimegouymka: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\121\125\105\x53\x54\x5f\115\x45\124\110\117\x44", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto qiaimmucomukkeka; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\x63\x61\143\150\x65\137\151\x67\x6e\157\x72\145\x64\137\160\x61\162\141\x6d\145\x74\x65\162\163"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto egsycocugqyyswsi; } ksort($eyagkkkqkwcuygso); egsycocugqyyswsi: qiaimmucomukkeka: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; osuscoaaomwcqkew: if (!(strpos($euueacigmgoqkimu, "\x2e\57") !== false || strpos($euueacigmgoqkimu, "\x2f\x2e") !== false || "\x2e" === $euueacigmgoqkimu || "\x2e\56" === $euueacigmgoqkimu)) { goto aoquoewagkseayug; } if (strpos($euueacigmgoqkimu, "\56\56\57") === 0) { goto qkuiwoqksgayqqmg; } if (strpos($euueacigmgoqkimu, "\x2e\x2f") === 0) { goto goqmywuiicciasyk; } if (strpos($euueacigmgoqkimu, "\57\56\x2f") === 0) { goto wkgskiuiukiuyque; } if ("\57\x2e" === $euueacigmgoqkimu) { goto ceiwqkyquikcemmo; } if (strpos($euueacigmgoqkimu, "\x2f\x2e\x2e\57") === 0) { goto sqmoqymckwsogsqg; } if ("\57\x2e\x2e" === $euueacigmgoqkimu) { goto oyiuemaaykgkqqam; } if ("\56" === $euueacigmgoqkimu || "\x2e\56" === $euueacigmgoqkimu) { goto mkomygccqkmkumsi; } if (strpos($euueacigmgoqkimu, "\x2f", 1) !== false) { goto ciucewqgyoiouesq; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto cgmgqucewwssmicq; ciucewqgyoiouesq: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\57", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); cgmgqucewwssmicq: goto ussceseaimqywuiy; mkomygccqkmkumsi: $euueacigmgoqkimu = ''; ussceseaimqywuiy: goto gqmewagyagamokok; oyiuemaaykgkqqam: $euueacigmgoqkimu = "\x2f"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); gqmewagyagamokok: goto uycesqqkoeamocgm; sqmoqymckwsogsqg: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); uycesqqkoeamocgm: goto ukomuiwukymcoaso; ceiwqkyquikcemmo: $euueacigmgoqkimu = "\x2f"; ukomuiwukymcoaso: goto oyiuyywyeoskckuw; wkgskiuiukiuyque: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); oyiuyywyeoskckuw: goto siecswkggyikqkga; goqmywuiicciasyk: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); siecswkggyikqkga: goto easqmyamcmeesgya; qkuiwoqksgayqqmg: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); easqmyamcmeesgya: goto osuscoaaomwcqkew; aoquoewagkseayug: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto yuqgwwmqwqiuwmaw; } yuqgwwmqwqiuwmaw: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto quaqmuusokiyqgqe; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); quaqmuusokiyqgqe: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto smiemmcqqukyguuu; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); smiemmcqqukyguuu: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\x75\x72\154"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\155\145\x73\x73\x61\x67\x65" => $uamcoiueqaamsqma, "\143\157\x6e\164\145\170\x74" => $icwicymcioeyeyek]; } }
