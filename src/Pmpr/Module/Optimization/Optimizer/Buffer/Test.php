<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce6e608ebb7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\x75\162\x69" => 1, "\163\163\x6c" => 0, "\x77\x70\x5f\x34\x30\64" => 1, "\x73\x65\141\x72\143\150" => 1, "\155\x6f\142\151\x6c\145" => 1, "\151\163\x5f\150\164\155\154" => 1, "\x71\165\145\x72\x79\x5f\163\x74\162\151\156\x67" => 1, "\x64\x6f\x6e\157\164\143\141\x63\x68\145\160\141\147\x65" => 1, "\162\145\152\145\143\x74\x65\144\x5f\x63\157\x6f\x6b\151\145" => 1, "\x6d\x61\156\x64\x61\x74\x6f\162\x79\137\x63\x6f\x6f\x6b\151\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\164\x65\x73\164\163"])) { goto uaukmuiwskcemcsw; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\x74\x65\163\164\163"]); uaukmuiwskcemcsw: if (!(!isset($ywmkwiwkosakssii["\143\157\157\153\151\145\163"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto sockeswygwcskeuq; } $ywmkwiwkosakssii["\x63\157\157\153\x69\x65\x73"] = $_COOKIE; sockeswygwcskeuq: if (!(!isset($ywmkwiwkosakssii["\x70\157\163\164"]) && !empty($_POST) && is_array($_POST))) { goto mkwkkmkgiqiamacc; } $ywmkwiwkosakssii["\x70\157\x73\164"] = $_POST; mkwkkmkgiqiamacc: if (!(!isset($ywmkwiwkosakssii["\147\x65\164"]) && !empty($_GET) && is_array($_GET))) { goto uaqackioaiqwcocy; } $ywmkwiwkosakssii["\x67\145\x74"] = $_GET; uaqackioaiqwcocy: $this->get = !empty($ywmkwiwkosakssii["\147\x65\164"]) && is_array($ywmkwiwkosakssii["\x67\145\164"]) ? $ywmkwiwkosakssii["\147\145\x74"] : []; $this->post = !empty($ywmkwiwkosakssii["\160\157\x73\x74"]) && is_array($ywmkwiwkosakssii["\160\x6f\163\x74"]) ? $ywmkwiwkosakssii["\x70\x6f\163\x74"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\x63\x6f\x6f\x6b\151\145\x73"]) && is_array($ywmkwiwkosakssii["\x63\x6f\x6f\153\151\x65\x73"]) ? $ywmkwiwkosakssii["\x63\157\x6f\x6b\x69\x65\163"] : []; if (!$this->ayueggmoqeeukqmq()) { goto cscusseysqygsoiy; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\x77\x70\x5f\143\x75\x73\x74\157\x6d\151\x7a\x65" => '']); cscusseysqygsoiy: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->aiukiaokcgsiomew()) { goto isgwkwacoyimiauk; } $this->yauwooaeicgosquo("\x44\x65\x76\40\115\157\x64\145\40\105\156\141\x62\154\145\144\x20\141\156\144\x20\x61\154\x6c\x20\162\x65\161\165\145\163\164\x20\151\163\x20\x62\171\160\141\x73\163\56"); return false; isgwkwacoyimiauk: if (!$this->kgkoeoeseyuugaao()) { goto mggeqkcksyaymcsa; } $this->yauwooaeicgosquo("\x52\x6f\x62\x6f\164\x73\56\164\170\164\x20\157\162\40\x2e\150\x74\x61\143\x63\145\163\x73\40\146\x69\x6c\145\40\151\x73\x20\x65\170\143\x6c\165\x64\145\144\x2e"); return false; mggeqkcksyaymcsa: if (!$this->gymgcceeqssmesiu()) { goto uegouoiuyoqkcscg; } $this->yauwooaeicgosquo("\x50\110\x50\54\40\x58\x4d\114\54\40\x6f\x72\40\130\123\x4c\x20\x66\x69\154\x65\x20\151\x73\40\145\170\143\154\x75\x64\145\144\x2e"); return false; uegouoiuyoqkcscg: if (!$this->goecwaaykqoaaagg()) { goto cgyakcqgugqgkqiw; } $this->yauwooaeicgosquo("\101\144\155\151\156\x20\157\162\40\x41\112\101\x58\40\x55\x52\114\x20\151\163\40\145\x78\x63\x6c\x75\144\x65\x64\x2e"); return false; cgyakcqgugqgkqiw: if (!$this->sgsscqasgeyeicoe()) { goto eeyyskqsmquyquqw; } $this->yauwooaeicgosquo("\x41\144\x6d\151\x6e\x20\157\x72\40\x41\x4a\101\130\x20\x55\122\114\x20\151\x73\x20\x65\170\x63\154\165\x64\x65\x64\56"); return false; eeyyskqsmquyquqw: if ($this->gooeyogikcusgwuu()) { goto ewscugeuicukkycc; } $this->yauwooaeicgosquo("\x52\x65\x71\165\x65\x73\x74\40\x6d\145\164\x68\x6f\x64\x20\x69\x73\40\156\157\164\40\141\x6c\x6c\x6f\x77\x65\144\x2e\x20\120\141\147\x65\x20\143\x61\x6e\x6e\x6f\x74\x20\x62\x65\x20\x63\x61\143\x68\x65\144\x2e", ["\162\145\161\x75\145\163\164\137\x6d\x65\x74\150\157\x64" => $this->ciyocmkwssocskiy()]); return false; ewscugeuicukkycc: if ($this->cskwmweqysskwckg()) { goto kqswcsysqawkcgye; } $this->lastError = []; return true; kqswcsysqawkcgye: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\x73\x75\143\x63\145\x73\163"]) { goto wusciwkkckmqigms; } $this->yauwooaeicgosquo("\x4e\157\x20\143\157\x6e\x66\151\x67\40\146\x69\x6c\145\x20\x66\157\x75\156\x64", ["\x63\157\x6e\x66\x69\x67\x5f\160\141\x74\150" => $uiewakwqscemywuo["\x70\141\164\150"]]); return false; wusciwkkckmqigms: if (!($this->cskwmweqysskwckg("\x71\x75\145\x72\x79\x5f\x73\x74\162\151\156\x67") && !$this->koguieumooaesyww())) { goto iiiccouaaqsyikae; } $this->yauwooaeicgosquo("\x51\x75\145\162\171\40\x73\x74\x72\151\156\147\x20\x55\122\114\40\x69\x73\40\145\170\x63\x6c\165\x64\145\x64\x2e", $_GET); return false; iiiccouaaqsyikae: if (!($this->cskwmweqysskwckg("\x73\163\154") & !$this->eqwgocqwoyyykwke())) { goto ukkcmocamwgiqayu; } $this->yauwooaeicgosquo("\x53\x53\x4c\x20\143\x61\143\x68\145\x20\x6e\157\164\x20\x61\160\x70\154\x69\145\144\40\x74\157\x20\160\141\147\x65\x2e"); return false; ukkcmocamwgiqayu: if (!($this->cskwmweqysskwckg("\165\162\x69") && !$this->qweiomkkuikwugks())) { goto mwysseaekcsiesmm; } $this->yauwooaeicgosquo("\x50\141\147\x65\40\151\163\40\x65\x78\143\154\165\x64\145\144\x2e"); return false; mwysseaekcsiesmm: if (!($this->cskwmweqysskwckg("\162\x65\x6a\145\143\x74\145\x64\x5f\143\157\157\x6b\x69\145") && $this->cokqaygwwygweuyk())) { goto amgsueumgaguceaa; } $this->yauwooaeicgosquo("\105\x78\143\x6c\165\x64\145\x64\x20\143\157\x6f\153\151\145\40\x66\157\x75\x6e\x64\56", ["\x65\170\x63\x6c\x75\x64\x65\x64\x5f\143\157\x6f\153\151\145\x73" => $this->cokqaygwwygweuyk()]); return false; amgsueumgaguceaa: if (!($this->cskwmweqysskwckg("\x6d\x61\x6e\x64\141\164\x6f\x72\171\137\x63\x6f\157\x6b\151\145") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto gygwewcqsmwqismo; } $this->yauwooaeicgosquo("\115\x69\x73\x73\x69\156\147\x20\x6d\141\x6e\x64\141\164\x6f\162\x79\x20\143\157\157\153\x69\145\x3a\40\x70\x61\147\x65\x20\156\x6f\164\40\160\x72\157\143\145\163\163\x65\144\x2e", ["\155\151\x73\163\x69\x6e\x67\x5f\143\x6f\x6f\x6b\x69\145\x73" => $this->qgymyeqwqaiwmmea()]); return false; gygwewcqsmwqismo: if (!($this->cskwmweqysskwckg("\165\163\x65\162\x5f\x61\x67\145\x6e\164") && !$this->mqiqsuksgyekwkii())) { goto uougwgeyiokewkkm; } $this->yauwooaeicgosquo("\125\x73\x65\x72\x20\101\x67\145\156\x74\40\x69\163\40\145\x78\x63\154\165\144\145\144\56", ["\x75\163\145\162\x5f\x61\x67\x65\156\164" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\120\x5f\x55\123\105\x52\x5f\101\107\x45\116\x54")]); return false; uougwgeyiokewkkm: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto gommacygsykyussk; } $this->yauwooaeicgosquo("\x42\165\x66\x66\145\x72\x20\143\157\x6e\164\145\x6e\x74\40\165\x6e\x64\145\162\40\62\65\x35\x20\143\x68\x61\x72\x61\x63\164\145\x72\163\56"); return false; gommacygsykyussk: if (!(http_response_code() !== 200)) { goto ukqocwewouckikso; } $this->yauwooaeicgosquo("\120\x61\147\x65\40\151\x73\40\x6e\157\164\40\x61\x20\62\60\60\x20\x48\124\124\x50\40\x72\x65\x73\160\157\156\x73\x65\40\x61\156\x64\40\143\x61\x6e\x6e\157\164\40\142\x65\40\143\x61\143\150\x65\144\56"); return false; ukqocwewouckikso: if (!($this->cskwmweqysskwckg("\x64\x6f\156\x6f\x74\157\x70\164\x69\155\x69\172\145\x70\141\147\x65") && $this->cowcgqokiosgaqic())) { goto ucqmumuygcywwqma; } $this->yauwooaeicgosquo("\104\x4f\116\124\x4f\120\x54\x49\115\111\132\x45\104\x50\x41\x47\105\x20\x69\163\40\144\145\x66\x69\156\145\x64\56\x20\x50\x61\x67\145\40\143\x61\x6e\x6e\x6f\164\40\142\145\40\143\x61\143\150\x65\x64\x2e"); return false; ucqmumuygcywwqma: if (!($this->cskwmweqysskwckg("\167\160\x5f\64\x30\64") && $this->kmmyuiwaogukwqqi())) { goto uykousayyomcaeaa; } $this->yauwooaeicgosquo("\127\x50\x20\64\x30\x34\x20\160\x61\147\145\40\x69\163\40\145\x78\x63\154\165\144\145\x64\56"); return false; uykousayyomcaeaa: if (!($this->cskwmweqysskwckg("\163\x65\x61\162\143\x68") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto uimeeckqksqeekqq; } $this->yauwooaeicgosquo("\123\145\141\x72\x63\x68\x20\160\x61\x67\145\40\x69\x73\x20\145\x78\143\x6c\x75\x64\145\144\56"); return false; uimeeckqksqeekqq: if (!$this->cskwmweqysskwckg("\151\163\137\150\x74\155\x6c")) { goto kocqqoyymosmuksu; } if (!($this->cmaecekuqkwmemms("\x52\105\x53\x54\137\122\105\121\125\105\x53\124") || $this->gaiygescoqgyusaa())) { goto iuuuususuuuaieem; } unset($this->tests["\x69\163\x5f\150\x74\155\x6c"]); iuuuususuuuaieem: kocqqoyymosmuksu: if (!($this->cskwmweqysskwckg("\x69\163\x5f\150\164\155\154") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto uqokiksoqcwwqgio; } $this->yauwooaeicgosquo("\x4e\157\x20\x63\x6c\157\x73\151\x6e\x67\x20\74\57\x68\x74\155\154\x3e\40\167\x61\163\40\146\157\x75\156\144\x2e"); return false; uqokiksoqcwwqgio: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\160\162\x5f\157\x70\x74\151\x6d\x69\172\141\x74\151\157\x6e\137\141\154\x6c\157\x77\x5f\164\157\137\163\x74\x61\162\164\x5f\x62\165\146\146\145\162\137\160\x72\x6f\x63\145\x73\163", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto qukocuwgakemmyga; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto sioekkmekwygemyc; qukocuwgakemmyga: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); sioekkmekwygemyc: return apply_filters("\160\162\x5f\157\x70\164\x69\155\x69\x7a\x61\x74\151\x6f\x6e\137\x68\141\x73\x5f{$ymqmyyeuycgmigyo}\x5f\164\x65\x73\164", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\x2f\x3c\134\x73\x2a\x5c\57\134\x73\x2a\x68\164\x6d\154\x5c\163\x2a\76\x2f\151", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\57\50\77\x3a\x2e\x2b\x2f\x29\x3f" . $wp_rewrite->feed_base . "\50\x3f\72\57\x28\x3f\72\56\x2b\x2f\77\x29\77\51\x3f\44"; return (bool) preg_match("\43\136\50{$uckmmkmoeikwsiqg}\x29\x24\43\x69", $this->gygiweeesqqckgme()); } public function aiukiaokcgsiomew() { return $this->aceaeommyuooiqge()->get("\x64\145\166\x5f\155\157\x64\x65"); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yiowgigkkwsoqcci; } return $this->eecucukcqkqysiau(__FUNCTION__); yiowgigkkwsoqcci: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto ieqesiiageaauiuw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ieqesiiageaauiuw: $ucasskoyoewwmmii = ["\x72\x6f\142\x6f\164\x73\x2e\x74\x78\x74", "\x2e\150\x74\141\x63\x63\145\x73\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\x2f" . $qogsmwakwacwqogk))) { goto oyeyomcgkmgymogq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); oyeyomcgkmgymogq: mscyggqcesgqqksu: } gamqcwuwkikwqoay: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iesekaeqeomeuaui; } return $this->eecucukcqkqysiau(__FUNCTION__); iesekaeqeomeuaui: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto mogkoocsoeuyoqqa; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto wsesqmcqoiyyqkqi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wsesqmcqoiyyqkqi: mogkoocsoeuyoqqa: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wkwamkgkwykeqkec; } return $this->eecucukcqkqysiau(__FUNCTION__); wkwamkgkwykeqkec: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto oimkeqocuguqqsqk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); oimkeqocuguqqsqk: if (!(strtolower($iyiwooigkweeewey) === "\57\151\156\144\145\x78\56\160\150\160")) { goto oeocukauoyosicso; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); oeocukauoyosicso: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\160\150\x70" => 1, "\x78\155\x6c" => 1, "\170\163\154" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\104\117\x49\116\x47\137\101\x4a\101\x58"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\120\123")), ["\157\x6e", "\x31"]) || "\x34\64\63" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\x52\126\105\122\x5f\x50\x4f\x52\x54"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\167\160\x5f\143\x75\163\x74\157\x6d\x69\172\145"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\x47\105\124" => 1, "\x48\x45\101\104" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto suqceasgacskcmkc; } return $this->eecucukcqkqysiau(__FUNCTION__); suqceasgacskcmkc: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto yykqaowwsqgqysmq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yykqaowwsqgqysmq: $yccgiaiouekkouay = ["\x73" => 1, "\x6c\141\x6e\147" => 1, "\160\145\x72\155\x61\x6c\x69\x6e\x6b\x5f\x6e\141\x6d\145" => 1, "\x6c\160\x2d\166\x61\x72\151\141\164\151\157\156\x2d\151\144" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto kwiggogcgciwuwqk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kwiggogcgciwuwqk: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\x63\x61\x63\150\145\x5f\x71\165\145\x72\x79\x5f\163\x74\x72\x69\x6e\147\163"); if ($yccgiaiouekkouay) { goto uckewycoogsogwiy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); uckewycoogsogwiy: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ikuuiauwouuqawuw; } return $this->eecucukcqkqysiau(__FUNCTION__); ikuuiauwouuqawuw: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto yoqakewookqoqacm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); yoqakewookqoqacm: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto gswcoeiisamakwii; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); gswcoeiisamakwii: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto emqswoaawgeyosmi; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; emqswoaawgeyosmi: ocywegekakimmwcq: } yuimwyoywaiiqacs: if (empty($eiocugauqgouiuyi)) { goto iwsmmkqaoksmocok; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); iwsmmkqaoksmocok: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto esikeyqyuikmaiek; } return $this->eecucukcqkqysiau(__FUNCTION__); esikeyqyuikmaiek: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto okkmcocqokkskasy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); okkmcocqokkskasy: $yiycakoikkyuokgk = array_flip(explode("\x7c", $this->aceaeommyuooiqge()->get("\143\141\x63\x68\145\137\155\x61\156\x64\x61\x74\157\162\171\x5f\x63\157\x6f\153\151\145\x73"))); if ($this->wemyikwikgwqwuoc()) { goto qiiigwkqeoewsuwm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); qiiigwkqeoewsuwm: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto mscgewkcqcoowweg; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); mscgewkcqcoowweg: ikqeeaysmqgcgawq: } esaqcqqwuussiiwo: if (!empty($yiycakoikkyuokgk)) { goto suqcsgaosywaauuu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); suqcsgaosywaauuu: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\160\162\137\157\160\164\151\155\x69\x7a\x61\164\x69\157\156\x5f\x6f\x76\145\x72\162\x69\x64\x65\137\144\x6f\x6e\164\137\157\x70\164\x69\155\151\x7a\x65", $this->cmaecekuqkwmemms("\x50\122\137\117\x50\x54\111\115\x49\x5a\101\124\x49\117\x4e\x5f\x44\x4f\116\x54\137\x4f\120\x54\111\115\x49\132\x45", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\151\x73\x5f\x34\60\64") && is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\151\x73\137\163\145\141\162\143\150") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\x70\162\x5f\x6f\x70\164\x69\x6d\151\172\141\x74\x69\x6f\156\x5f\157\x70\164\151\x6d\151\172\x65\137\163\x65\141\162\x63\x68", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\x63\141\x63\150\x65\x5f\163\x73\x6c"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wwukgaquuyoissgy; } return $this->eecucukcqkqysiau(__FUNCTION__); wwukgaquuyoissgy: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto gsygwgsiawgmqiyi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gsygwgsiawgmqiyi: if (!$this->aceaeommyuooiqge()->get("\155\x6f\142\151\x6c\145\137\x63\x61\x63\150\x65")) { goto qsgqwyqaqiowkmco; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qsgqwyqaqiowkmco: $wayquiskgeuoqamk = "\62\56\x30\134\40\x4d\x4d\120\174\x32\x34\60\170\63\62\x30\174\64\x30\x30\x58\62\x34\60\174\101\166\x61\156\x74\107\x6f\174\x42\x6c\141\x63\x6b\102\x65\x72\162\x79\x7c\x42\154\x61\172\145\162\x7c\x43\145\x6c\x6c\160\150\157\x6e\145\x7c\x44\141\x6e\147\145\x72\x7c\104\157\103\x6f\115\157\x7c\x45\154\x61\x69\x6e\x65\57\63\x2e\x30\x7c\x45\x75\x64\157\x72\x61\x57\145\142\174\107\x6f\157\x67\x6c\x65\x62\157\x74\55\115\x6f\x62\x69\x6c\x65\174\150\x69\160\x74\x6f\x70\174\111\x45\x4d\157\x62\151\154\145\x7c\113\x59\x4f\x43\x45\x52\101\x2f\127\130\63\61\60\113\x7c\x4c\107\x2f\125\x39\x39\x30\174\x4d\111\x44\120\x2d\x32\x2e\x7c\115\115\x45\x46\62\x30\174\115\117\124\x2d\126\x7c\116\145\164\106\x72\157\x6e\164\x7c\x4e\x65\167\x74\x7c\116\x69\x6e\x74\145\156\x64\157\x5c\40\127\x69\151\174\116\151\164\x72\x6f\174\116\157\153\x69\141\x7c\117\160\145\x72\141\x5c\x20\115\151\x6e\x69\174\120\x61\x6c\x6d\x7c\x50\x6c\x61\171\123\x74\x61\164\x69\x6f\x6e\x5c\40\x50\157\x72\x74\x61\x62\154\x65\174\160\157\x72\164\141\154\155\x6d\155\174\x50\162\157\170\x69\156\x65\164\x7c\x50\162\157\170\x69\x4e\x65\x74\x7c\123\x48\x41\122\120\55\x54\121\55\x47\130\61\x30\x7c\123\110\107\x2d\x69\x39\60\x30\x7c\x53\155\x61\154\x6c\x7c\x53\157\156\x79\x45\x72\x69\x63\163\x73\157\x6e\x7c\x53\171\x6d\x62\151\141\x6e\134\40\117\x53\x7c\x53\x79\x6d\142\x69\141\x6e\x4f\x53\174\x54\x53\62\x31\151\55\61\x30\174\125\120\x2e\x42\x72\x6f\x77\163\145\162\174\125\120\56\114\x69\156\153\174\167\x65\x62\117\123\x7c\127\x69\x6e\x64\x6f\167\163\x5c\40\x43\x45\174\127\151\156\127\x41\120\174\x59\x61\150\x6f\x6f\x53\x65\x65\153\x65\x72\x2f\x4d\61\101\61\55\122\62\x44\x32\x7c\x69\x50\150\157\156\145\174\151\x50\x6f\x64\174\x41\x6e\x64\x72\x6f\151\144\174\x42\x6c\141\143\x6b\102\x65\x72\x72\x79\x39\65\63\60\174\114\107\x2d\124\125\71\61\x35\x5c\40\x4f\x62\x69\x67\157\x7c\114\107\105\134\40\126\x58\x7c\x77\x65\142\117\123\x7c\x4e\157\153\151\141\65\x38\60\x30"; if (!preg_match("\x23\136\x2e\x2a\50{$wayquiskgeuoqamk}\x29\x2e\x2a\43\151", $uowwycywwssskuys)) { goto yqagomygmeoecwey; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); yqagomygmeoecwey: $wayquiskgeuoqamk = "\167\x33\143\x5c\40\x7c\167\63\143\55\174\x61\x63\x73\55\174\x61\154\141\166\174\141\154\143\141\x7c\x61\155\x6f\x69\x7c\x61\x75\x64\x69\x7c\141\166\141\156\x7c\x62\145\x6e\x71\x7c\x62\151\162\144\174\x62\x6c\x61\x63\174\x62\x6c\x61\172\x7c\142\162\x65\167\x7c\x63\145\154\x6c\174\x63\154\x64\143\174\143\x6d\144\55\174\144\141\156\147\x7c\x64\x6f\x63\x6f\174\145\162\151\x63\174\150\x69\160\164\x7c\x68\164\143\137\x7c\x69\156\156\157\x7c\x69\160\x61\161\174\151\160\157\144\174\152\x69\x67\163\x7c\153\144\144\x69\x7c\153\x65\152\x69\174\x6c\x65\156\x6f\174\154\x67\55\143\x7c\154\147\x2d\144\174\154\x67\x2d\x67\x7c\154\147\x65\55\174\154\x67\57\x75\x7c\x6d\141\x75\x69\x7c\155\141\170\x6f\x7c\155\151\x64\x70\174\155\151\164\x73\174\x6d\x6d\145\146\174\155\x6f\142\151\174\155\157\164\55\x7c\x6d\157\164\157\174\x6d\x77\142\160\x7c\156\x65\x63\x2d\x7c\x6e\145\x77\164\x7c\x6e\157\153\x69\174\160\141\154\x6d\174\x70\x61\156\x61\174\160\x61\156\164\174\160\x68\151\154\x7c\x70\x6c\141\171\x7c\160\x6f\x72\x74\174\160\162\157\x78\174\161\x77\141\x70\x7c\163\x61\x67\145\x7c\x73\141\x6d\163\174\x73\x61\156\x79\x7c\163\x63\150\x2d\x7c\x73\x65\143\x2d\174\x73\x65\x6e\x64\174\x73\145\162\151\x7c\x73\147\150\x2d\174\x73\150\141\x72\x7c\163\x69\145\x2d\174\x73\151\x65\155\x7c\163\x6d\141\x6c\174\163\155\x61\162\174\x73\x6f\156\171\x7c\163\x70\x68\x2d\174\163\171\155\142\x7c\164\x2d\155\157\174\164\x65\x6c\x69\174\164\x69\x6d\55\174\x74\157\163\x68\174\164\163\x6d\x2d\174\165\x70\x67\x31\174\165\160\163\151\174\166\x6b\x2d\x76\174\x76\x6f\x64\x61\174\167\x61\x70\55\174\167\x61\x70\141\x7c\167\x61\160\151\x7c\167\141\160\160\x7c\x77\x61\160\x72\174\x77\x65\142\x63\x7c\167\151\156\167\174\167\x69\156\x77\174\170\x64\x61\134\x20\174\x78\144\141\x2d"; if (!preg_match("\43\x5e\50{$wayquiskgeuoqamk}\x29\56\x2a\x23\x69", $uowwycywwssskuys)) { goto qikaewekoecykeou; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qikaewekoecykeou: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto eucqomyqykgoiuge; } return $this->eecucukcqkqysiau(__FUNCTION__); eucqomyqykgoiuge: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto usymasgsyqgsuocg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); usymasgsyqgsuocg: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\x63\141\x63\x68\x65\137\x72\145\152\145\143\164\x5f\x75\141"); if ($mqsuiayuwmwqaqwm) { goto aiccyaswigkaycqk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); aiccyaswigkaycqk: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\43{$mqsuiayuwmwqaqwm}\x23", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto sqyokemumceysegy; } return $this->eecucukcqkqysiau(__FUNCTION__); sqyokemumceysegy: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\x63\141\143\150\145\137\x72\x65\152\x65\x63\x74\x5f\x75\162\151"); if ($escsaeeosigewsme) { goto oqousikwiiqagoyw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); oqousikwiiqagoyw: $yciaosuiyeieceug = !preg_match("\x23\136\x28{$escsaeeosigewsme}\x29\44\43\x69", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\124\x50\x5f\x55\123\x45\x52\137\101\107\x45\116\x54"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto zayqqeqgcwkekwws; } return $this->eecucukcqkqysiau(__FUNCTION__); zayqqeqgcwkekwws: $yygmoeguaqyumuui = [ "\110\124\124\x50\137\x43\x46\137\103\117\116\x4e\x45\103\x54\x49\116\107\137\x49\120", "\110\124\x54\120\x5f\x43\114\x49\x45\116\124\x5f\x49\x50", "\x48\124\x54\x50\137\130\137\106\117\x52\x57\x41\122\104\x45\x44\137\106\x4f\x52", "\x48\124\124\120\x5f\x58\x5f\x46\117\122\x57\101\x52\104\105\104", "\110\x54\x54\x50\x5f\x58\137\x43\114\x55\x53\124\x45\122\137\x43\114\x49\x45\116\x54\x5f\111\120", "\x48\124\x54\x50\137\x58\137\x52\105\x41\114\x5f\x49\120", "\x48\x54\124\120\137\x46\117\x52\x57\101\x52\104\x45\x44\137\x46\117\x52", "\x48\x54\x54\x50\x5f\x46\x4f\x52\x57\x41\x52\104\105\x44", "\122\105\115\x4f\124\105\x5f\101\x44\x44\122", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto ucuoeymyqeokgsya; } $kucumcusyyckayas = explode("\54", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto egmayaiikwsskgmy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); egmayaiikwsskgmy: ucuoeymyqeokgsya: mysueeoswqgccmui: } aueaceeyommgkicu: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\x30\56\60\56\x30\x2e\x30"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yuuyikiacmmueosu; } return $this->eecucukcqkqysiau(__FUNCTION__); yuuyikiacmmueosu: $yywgiquyoymymqwk = [ "\x32\60\x38\x2e\x37\60\56\x32\64\67\x2e\x31\x35\67" => '', "\61\67\62\56\x32\x35\65\56\x34\x38\x2e\x31\63\x30" => '', "\61\x37\62\x2e\62\65\x35\56\64\x38\x2e\x31\63\61" => '', "\x31\x37\62\56\x32\65\65\x2e\64\70\x2e\61\63\62" => '', "\x31\67\62\x2e\62\65\65\56\x34\70\x2e\61\x33\x33" => '', "\61\67\x32\x2e\x32\x35\65\x2e\x34\x38\x2e\x31\63\x34" => '', "\61\x37\62\x2e\x32\x35\x35\x2e\x34\x38\56\61\x33\65" => '', "\61\x37\x32\x2e\x32\65\x35\56\64\70\56\x31\x33\x36" => '', "\x31\x37\62\x2e\62\x35\65\56\64\70\x2e\x31\63\x37" => '', "\x31\x37\x32\56\62\65\65\56\64\70\56\x31\63\70" => '', "\61\x37\x32\x2e\62\x35\x35\56\x34\x38\x2e\61\x33\x39" => '', "\61\x37\62\56\62\x35\x35\x2e\x34\70\x2e\61\x34\60" => '', "\x31\x37\62\x2e\x32\x35\x35\56\64\x38\56\61\x34\x31" => '', "\x31\x37\62\x2e\62\x35\x35\56\x34\70\56\61\64\62" => '', "\61\x37\62\x2e\62\x35\x35\x2e\64\x38\56\x31\x34\x33" => '', "\61\67\x32\x2e\62\x35\x35\x2e\x34\x38\x2e\61\64\x34" => '', "\61\x37\62\x2e\62\65\x35\56\64\x38\56\61\64\x35" => '', "\61\67\x32\56\62\65\65\x2e\x34\x38\56\x31\64\66" => '', "\61\x37\x32\x2e\62\x35\65\x2e\x34\70\x2e\x31\64\67" => '', "\65\x32\x2e\62\62\71\x2e\x31\x32\62\56\62\64\60" => '', "\61\60\x34\x2e\62\x31\x34\56\x37\62\x2e\x31\x30\61" => '', "\x31\63\56\x36\x36\x2e\67\56\x31\61" => '', "\x31\63\x2e\70\65\x2e\62\x34\56\x38\63" => '', "\x31\x33\56\70\65\56\x32\x34\x2e\71\x30" => '', "\x31\63\x2e\70\65\56\x38\62\56\x32\66" => '', "\x34\60\x2e\x37\64\56\62\x34\62\x2e\62\65\63" => '', "\64\60\x2e\67\64\x2e\62\x34\63\56\x31\x33" => '', "\64\60\56\67\64\x2e\x32\64\63\x2e\x31\67\x36" => '', "\x31\60\x34\56\x32\x31\64\56\64\70\x2e\x32\x34\67" => '', "\x31\65\x37\x2e\65\65\x2e\x31\x38\71\x2e\x31\x38\71" => '', "\x31\x30\64\56\x32\x31\64\x2e\61\61\x30\x2e\x31\63\65" => '', "\67\60\x2e\x33\x37\x2e\70\63\56\x32\64\x30" => '', "\66\x35\56\x35\62\x2e\63\x36\56\62\x35\x30" => '', "\x31\x33\56\67\70\56\x32\x31\66\56\x35\x36" => '', "\x35\x32\56\x31\66\x32\x2e\x32\x31\62\x2e\x31\66\x33" => '', "\x32\63\x2e\x39\66\56\63\64\56\x31\60\65" => '', "\66\65\56\65\62\x2e\61\x31\x33\x2e\62\x33\66" => '', "\61\67\x32\56\62\x35\x35\56\66\x31\56\63\x34" => '', "\61\x37\x32\56\62\x35\x35\x2e\66\61\56\63\65" => '', "\61\67\x32\56\x32\x35\65\x2e\x36\61\x2e\x33\66" => '', "\x31\x37\62\56\x32\65\65\x2e\66\x31\56\63\67" => '', "\x31\67\x32\x2e\x32\65\65\x2e\x36\61\x2e\63\70" => '', "\61\x37\62\x2e\x32\x35\65\x2e\x36\61\56\63\x39" => '', "\x31\x37\62\x2e\62\65\x35\56\66\61\56\64\x30" => '', "\x35\62\x2e\62\63\67\x2e\x32\63\65\x2e\61\x38\x35" => '', "\x35\62\56\62\x33\67\56\62\65\60\56\67\x33" => '', "\65\x32\x2e\62\63\x37\x2e\x32\x33\x36\x2e\x31\64\65" => '', "\x31\60\x34\56\x34\x31\56\62\x2e\x31\x39" => '', "\x31\71\x31\x2e\62\x33\65\56\71\70\56\x31\x36\x34" => '', "\x31\71\61\x2e\x32\x33\x35\x2e\x39\71\x2e\62\x32\x31" => '', "\x31\71\61\56\x32\63\x32\x2e\x31\71\64\x2e\x35\61" => '', "\x31\60\64\56\62\61\61\x2e\x31\64\x33\56\70" => '', "\x31\x30\64\x2e\x32\61\x31\56\61\66\x35\x2e\65\63" => '', "\x35\x32\x2e\x31\x37\x32\56\61\64\56\70\x37" => '', "\64\x30\56\x38\63\56\x38\71\56\x32\x31\64" => '', "\x35\x32\x2e\61\x37\65\x2e\x35\67\x2e\x38\x31" => '', "\62\x30\56\61\x38\x38\x2e\x36\x33\x2e\x31\65\x31" => '', "\62\60\56\65\62\x2e\63\x36\56\64\x39" => '', "\65\x32\x2e\62\64\x36\x2e\x31\66\x35\56\61\65\63" => '', "\x35\x31\x2e\x31\64\64\56\x31\x30\62\x2e\62\63\63" => '', "\x31\63\56\x37\66\56\71\67\x2e\x32\x32\64" => '', "\x31\x30\x32\56\x31\63\x33\56\61\66\71\56\66\66" => '', "\65\x32\x2e\x32\x33\x31\x2e\61\x39\71\56\x31\x37\x30" => '', "\x31\63\56\x35\x33\x2e\61\x36\x32\56\x37" => '', "\x34\60\56\x31\62\x33\x2e\62\61\70\56\71\64" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto sguskaeaaqcagqgc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); sguskaeaaqcagqgc: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\x50\137\x55\x53\x45\122\137\x41\x47\x45\116\x54"); if ($uowwycywwssskuys) { goto agkmiayuawacakau; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); agkmiayuawacakau: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\x23\120\151\156\x67\x64\x6f\x6d\x50\x61\x67\x65\123\x70\x65\x65\x64\174\x44\141\162\145\x42\x6f\157\163\x74\x7c\107\x6f\157\147\154\x65\x7c\x50\x54\123\x54\174\x43\x68\162\157\155\145\55\x4c\x69\147\150\x74\x68\x6f\165\163\x65\174\127\120\40\x52\x6f\x63\153\145\164\43\x69", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\105\121\125\x45\123\x54\x5f\x55\122\111", ''); if (!$iyiwooigkweeewey) { goto syuaummumssgwwee; } $iyiwooigkweeewey = "\x2f" . ltrim($iyiwooigkweeewey, "\x2f"); syuaummumssgwwee: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto oocuemosmeeekgas; } return ''; oocuemosmeeekgas: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto qkcsykuocwuyaice; } return $magawcseesgowoeo; qkcsykuocwuyaice: return "{$magawcseesgowoeo}\x3f{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto uoeasoimegouymka; } $magawcseesgowoeo = explode("\77", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); uoeasoimegouymka: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\105\x51\x55\105\x53\124\137\x4d\105\x54\110\x4f\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto qiaimmucomukkeka; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\x63\x61\x63\150\145\137\x69\147\156\x6f\x72\x65\x64\x5f\160\x61\162\141\x6d\145\x74\145\162\x73"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto egsycocugqyyswsi; } ksort($eyagkkkqkwcuygso); egsycocugqyyswsi: qiaimmucomukkeka: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; osuscoaaomwcqkew: if (!(strpos($euueacigmgoqkimu, "\x2e\57") !== false || strpos($euueacigmgoqkimu, "\57\56") !== false || "\x2e" === $euueacigmgoqkimu || "\56\56" === $euueacigmgoqkimu)) { goto aoquoewagkseayug; } if (strpos($euueacigmgoqkimu, "\56\x2e\57") === 0) { goto qkuiwoqksgayqqmg; } if (strpos($euueacigmgoqkimu, "\x2e\x2f") === 0) { goto goqmywuiicciasyk; } if (strpos($euueacigmgoqkimu, "\x2f\56\57") === 0) { goto wkgskiuiukiuyque; } if ("\57\x2e" === $euueacigmgoqkimu) { goto ceiwqkyquikcemmo; } if (strpos($euueacigmgoqkimu, "\57\56\x2e\x2f") === 0) { goto sqmoqymckwsogsqg; } if ("\57\56\56" === $euueacigmgoqkimu) { goto oyiuemaaykgkqqam; } if ("\56" === $euueacigmgoqkimu || "\x2e\x2e" === $euueacigmgoqkimu) { goto mkomygccqkmkumsi; } if (strpos($euueacigmgoqkimu, "\x2f", 1) !== false) { goto ciucewqgyoiouesq; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto cgmgqucewwssmicq; ciucewqgyoiouesq: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\57", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); cgmgqucewwssmicq: goto ussceseaimqywuiy; mkomygccqkmkumsi: $euueacigmgoqkimu = ''; ussceseaimqywuiy: goto gqmewagyagamokok; oyiuemaaykgkqqam: $euueacigmgoqkimu = "\x2f"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); gqmewagyagamokok: goto uycesqqkoeamocgm; sqmoqymckwsogsqg: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); uycesqqkoeamocgm: goto ukomuiwukymcoaso; ceiwqkyquikcemmo: $euueacigmgoqkimu = "\x2f"; ukomuiwukymcoaso: goto oyiuyywyeoskckuw; wkgskiuiukiuyque: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); oyiuyywyeoskckuw: goto siecswkggyikqkga; goqmywuiicciasyk: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); siecswkggyikqkga: goto easqmyamcmeesgya; qkuiwoqksgayqqmg: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); easqmyamcmeesgya: goto osuscoaaomwcqkew; aoquoewagkseayug: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto yuqgwwmqwqiuwmaw; } yuqgwwmqwqiuwmaw: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto quaqmuusokiyqgqe; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); quaqmuusokiyqgqe: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto smiemmcqqukyguuu; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); smiemmcqqukyguuu: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\x75\x72\154"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\x6d\145\163\163\x61\x67\145" => $uamcoiueqaamsqma, "\143\157\156\x74\x65\x78\x74" => $icwicymcioeyeyek]; } }
