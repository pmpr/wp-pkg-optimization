<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66872493a1a65             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\162\x69" => 1, "\163\x73\154" => 0, "\167\160\x5f\x34\x30\64" => 1, "\163\x65\x61\x72\x63\x68" => 1, "\x6d\x6f\142\x69\x6c\145" => 1, "\x69\163\x5f\x68\164\x6d\x6c" => 1, "\x71\x75\x65\162\171\137\x73\164\162\x69\156\147" => 1, "\x64\157\x6e\157\x74\143\141\143\150\x65\160\141\x67\x65" => 1, "\162\145\x6a\x65\143\164\145\144\137\x63\x6f\157\153\x69\145" => 1, "\x6d\x61\156\144\x61\x74\157\x72\171\137\x63\157\157\153\x69\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\164\x65\x73\164\x73"])) { goto ygcgoaokauigwuus; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\x74\145\x73\x74\x73"]); ygcgoaokauigwuus: if (!(!isset($ywmkwiwkosakssii["\x63\157\157\153\151\145\163"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto ysiqakyaiooyscwy; } $ywmkwiwkosakssii["\143\157\157\x6b\x69\145\x73"] = $_COOKIE; ysiqakyaiooyscwy: if (!(!isset($ywmkwiwkosakssii["\160\157\163\164"]) && !empty($_POST) && is_array($_POST))) { goto auumaoycmsmsgigs; } $ywmkwiwkosakssii["\160\157\x73\164"] = $_POST; auumaoycmsmsgigs: if (!(!isset($ywmkwiwkosakssii["\147\x65\x74"]) && !empty($_GET) && is_array($_GET))) { goto ousmyagwsiooumos; } $ywmkwiwkosakssii["\147\x65\164"] = $_GET; ousmyagwsiooumos: $this->get = !empty($ywmkwiwkosakssii["\x67\x65\164"]) && is_array($ywmkwiwkosakssii["\x67\x65\x74"]) ? $ywmkwiwkosakssii["\147\145\x74"] : []; $this->post = !empty($ywmkwiwkosakssii["\x70\157\x73\164"]) && is_array($ywmkwiwkosakssii["\x70\157\163\164"]) ? $ywmkwiwkosakssii["\160\x6f\163\164"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\143\x6f\x6f\153\151\145\163"]) && is_array($ywmkwiwkosakssii["\143\157\x6f\153\151\145\163"]) ? $ywmkwiwkosakssii["\x63\x6f\x6f\153\x69\x65\x73"] : []; if (!$this->ayueggmoqeeukqmq()) { goto qeuyekusasqmcqms; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\x77\x70\x5f\143\x75\163\164\x6f\x6d\151\x7a\145" => '']); qeuyekusasqmcqms: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->aiukiaokcgsiomew()) { goto yiceawuuiusakwiq; } $this->yauwooaeicgosquo("\104\x65\x76\40\x4d\x6f\144\x65\x20\x45\156\141\x62\154\x65\x64\40\141\x6e\144\40\141\154\x6c\x20\x72\x65\x71\x75\x65\163\164\40\151\x73\x20\x62\171\x70\141\163\163\56"); return false; yiceawuuiusakwiq: if (!$this->kgkoeoeseyuugaao()) { goto sgocecweikecwwgq; } $this->yauwooaeicgosquo("\122\157\x62\157\164\x73\x2e\164\x78\x74\40\x6f\x72\x20\56\150\x74\x61\x63\143\x65\x73\163\x20\x66\x69\154\x65\x20\151\163\40\x65\170\143\x6c\165\144\x65\144\56"); return false; sgocecweikecwwgq: if (!$this->gymgcceeqssmesiu()) { goto qwisiamkmkkwucyo; } $this->yauwooaeicgosquo("\x50\110\x50\x2c\40\130\x4d\x4c\x2c\40\157\162\40\x58\123\x4c\40\146\151\x6c\x65\40\x69\163\x20\x65\x78\x63\154\165\144\x65\x64\x2e"); return false; qwisiamkmkkwucyo: if (!$this->goecwaaykqoaaagg()) { goto yqcusaeysomccaok; } $this->yauwooaeicgosquo("\x41\x64\x6d\x69\156\x20\157\162\40\101\112\101\x58\40\x55\x52\x4c\40\151\x73\x20\x65\170\143\154\x75\144\145\144\56"); return false; yqcusaeysomccaok: if (!$this->sgsscqasgeyeicoe()) { goto iwkckkeimmeoquyq; } $this->yauwooaeicgosquo("\101\x64\155\x69\156\40\x6f\x72\x20\x41\112\101\130\40\125\122\x4c\40\x69\163\40\145\x78\x63\x6c\165\144\145\x64\56"); return false; iwkckkeimmeoquyq: if ($this->gooeyogikcusgwuu()) { goto masakmomqmeocqqg; } $this->yauwooaeicgosquo("\x52\x65\161\165\145\163\x74\40\155\x65\164\x68\x6f\x64\40\151\163\40\x6e\x6f\164\40\141\154\154\157\x77\x65\x64\x2e\40\120\x61\x67\x65\40\x63\141\x6e\x6e\157\x74\x20\142\x65\40\x63\x61\x63\150\145\x64\x2e", ["\x72\145\x71\x75\x65\x73\x74\x5f\x6d\145\x74\150\x6f\x64" => $this->ciyocmkwssocskiy()]); return false; masakmomqmeocqqg: if ($this->cskwmweqysskwckg()) { goto yksywwikmeksikqc; } $this->lastError = []; return true; yksywwikmeksikqc: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\x73\x75\143\143\145\163\x73"]) { goto yoqsigmoyaaceqky; } $this->yauwooaeicgosquo("\116\x6f\40\x63\157\156\x66\x69\147\40\x66\x69\x6c\x65\x20\x66\157\x75\156\144", ["\143\157\156\146\x69\147\x5f\160\141\x74\150" => $uiewakwqscemywuo["\x70\141\164\x68"]]); return false; yoqsigmoyaaceqky: if (!($this->cskwmweqysskwckg("\x71\x75\145\162\171\x5f\163\164\162\x69\156\x67") && !$this->koguieumooaesyww())) { goto suqckoccuyeeymww; } $this->yauwooaeicgosquo("\x51\x75\145\162\171\40\x73\x74\x72\x69\x6e\x67\40\125\x52\114\40\151\163\40\145\x78\x63\154\165\x64\x65\144\56", $_GET); return false; suqckoccuyeeymww: if (!($this->cskwmweqysskwckg("\x73\x73\x6c") & !$this->eqwgocqwoyyykwke())) { goto giugwaeuwaomossq; } $this->yauwooaeicgosquo("\x53\123\x4c\40\143\x61\x63\x68\x65\40\156\157\164\x20\141\160\160\154\151\145\144\40\164\157\x20\160\141\x67\x65\x2e"); return false; giugwaeuwaomossq: if (!($this->cskwmweqysskwckg("\x75\x72\x69") && !$this->qweiomkkuikwugks())) { goto acgqaeakoyasgkku; } $this->yauwooaeicgosquo("\120\141\x67\145\x20\x69\163\40\145\x78\x63\x6c\x75\144\145\144\x2e"); return false; acgqaeakoyasgkku: if (!($this->cskwmweqysskwckg("\x72\145\x6a\x65\143\x74\x65\144\137\143\157\157\153\x69\x65") && $this->cokqaygwwygweuyk())) { goto sycougcyeqmeiagk; } $this->yauwooaeicgosquo("\x45\x78\143\154\165\144\x65\x64\40\x63\x6f\157\x6b\151\x65\x20\x66\157\x75\156\144\x2e", ["\145\170\x63\154\165\144\145\x64\x5f\x63\x6f\157\x6b\151\x65\x73" => $this->cokqaygwwygweuyk()]); return false; sycougcyeqmeiagk: if (!($this->cskwmweqysskwckg("\155\x61\156\x64\x61\x74\157\x72\x79\x5f\143\157\x6f\153\151\x65") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto ssagcgqaucssyego; } $this->yauwooaeicgosquo("\115\151\163\x73\151\156\147\40\155\x61\156\144\141\x74\157\162\171\x20\143\x6f\157\x6b\x69\145\x3a\40\160\141\x67\145\x20\156\157\164\40\160\162\157\x63\145\163\x73\x65\x64\x2e", ["\x6d\x69\x73\x73\x69\156\x67\137\143\x6f\157\153\151\x65\163" => $this->qgymyeqwqaiwmmea()]); return false; ssagcgqaucssyego: if (!($this->cskwmweqysskwckg("\x75\163\x65\162\137\141\147\145\x6e\164") && !$this->mqiqsuksgyekwkii())) { goto mqgeseysuwcaqwiy; } $this->yauwooaeicgosquo("\125\163\145\162\x20\x41\147\145\x6e\164\x20\x69\163\40\145\170\x63\154\165\x64\x65\x64\56", ["\165\163\x65\x72\x5f\141\147\145\x6e\164" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\120\x5f\125\x53\x45\122\137\x41\107\105\x4e\124")]); return false; mqgeseysuwcaqwiy: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto ekoqieigyoeyauqa; } $this->yauwooaeicgosquo("\x42\165\146\146\145\x72\40\x63\157\156\164\145\156\x74\x20\x75\156\x64\x65\x72\40\62\65\x35\x20\143\150\141\162\141\x63\x74\x65\x72\163\x2e"); return false; ekoqieigyoeyauqa: if (!(http_response_code() !== 200)) { goto cuwcsamuuqyuyqsu; } $this->yauwooaeicgosquo("\x50\141\147\145\x20\x69\x73\x20\x6e\157\x74\x20\141\40\62\x30\60\40\110\x54\124\x50\x20\x72\x65\x73\160\157\x6e\x73\145\x20\x61\156\x64\x20\x63\x61\x6e\156\x6f\164\x20\142\x65\x20\143\x61\x63\x68\x65\x64\56"); return false; cuwcsamuuqyuyqsu: if (!($this->cskwmweqysskwckg("\144\157\x6e\157\x74\x6f\x70\164\151\155\x69\172\145\x70\141\x67\145") && $this->cowcgqokiosgaqic())) { goto mimacwyuueomgwwy; } $this->yauwooaeicgosquo("\104\117\116\124\x4f\120\124\111\x4d\111\x5a\105\x44\120\x41\107\105\40\151\163\x20\144\145\146\151\x6e\x65\144\x2e\40\x50\x61\x67\145\x20\143\x61\156\x6e\157\x74\40\142\145\x20\143\141\143\x68\x65\144\x2e"); return false; mimacwyuueomgwwy: if (!($this->cskwmweqysskwckg("\x77\x70\x5f\x34\60\x34") && $this->kmmyuiwaogukwqqi())) { goto ksckqkmwiqggykke; } $this->yauwooaeicgosquo("\x57\120\x20\64\x30\x34\40\x70\x61\x67\145\x20\x69\163\40\x65\170\143\154\165\144\145\x64\x2e"); return false; ksckqkmwiqggykke: if (!($this->cskwmweqysskwckg("\163\145\141\162\x63\150") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto igwkcikeyoowosoi; } $this->yauwooaeicgosquo("\x53\x65\141\x72\x63\x68\40\x70\x61\147\x65\40\151\163\40\x65\x78\x63\154\165\x64\x65\x64\x2e"); return false; igwkcikeyoowosoi: if (!$this->cskwmweqysskwckg("\x69\x73\137\x68\x74\x6d\x6c")) { goto awaqksikyomsuaeo; } if (!($this->cmaecekuqkwmemms("\x52\x45\123\124\x5f\x52\105\121\125\x45\123\x54") || $this->gaiygescoqgyusaa())) { goto iqsgossweywksoia; } unset($this->tests["\151\163\137\150\164\155\154"]); iqsgossweywksoia: awaqksikyomsuaeo: if (!($this->cskwmweqysskwckg("\151\163\x5f\x68\164\155\154") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto cuommomwmsackoqc; } $this->yauwooaeicgosquo("\x4e\x6f\40\x63\154\157\x73\151\156\147\x20\x3c\57\150\164\155\154\76\x20\x77\141\163\40\146\x6f\x75\156\144\x2e"); return false; cuommomwmsackoqc: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\160\162\137\157\160\x74\151\x6d\x69\172\x61\164\151\x6f\156\x5f\141\x6c\154\157\167\x5f\164\x6f\x5f\x73\164\x61\x72\164\x5f\142\165\146\x66\x65\x72\137\x70\x72\x6f\x63\x65\x73\x73", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto ggeoqeowscwkeumy; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto qyeswawykmasuqye; ggeoqeowscwkeumy: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); qyeswawykmasuqye: return apply_filters("\x70\x72\137\x6f\160\x74\151\155\151\172\x61\x74\x69\x6f\x6e\x5f\x68\x61\163\137{$ymqmyyeuycgmigyo}\137\164\x65\163\x74", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\57\x3c\x5c\x73\52\134\x2f\134\x73\x2a\x68\164\x6d\154\134\x73\52\76\57\x69", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\x2f\50\x3f\x3a\56\53\57\x29\x3f" . $wp_rewrite->feed_base . "\50\x3f\x3a\x2f\50\x3f\72\56\x2b\x2f\x3f\51\x3f\51\x3f\x24"; return (bool) preg_match("\43\136\x28{$uckmmkmoeikwsiqg}\x29\44\43\151", $this->gygiweeesqqckgme()); } public function aiukiaokcgsiomew() { return $this->aceaeommyuooiqge()->get("\x64\x65\x76\137\x6d\157\144\x65"); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uwaimsisescsgyqk; } return $this->eecucukcqkqysiau(__FUNCTION__); uwaimsisescsgyqk: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto uqcsksaywyqeumig; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); uqcsksaywyqeumig: $ucasskoyoewwmmii = ["\x72\x6f\142\157\164\163\56\164\170\x74", "\x2e\x68\x74\141\143\x63\145\x73\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\57" . $qogsmwakwacwqogk))) { goto jsmisuccwyukksgc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); jsmisuccwyukksgc: ukwoswyyogmsygqg: } yggmaskeguaqkusc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kwmiwaecqcgiaqye; } return $this->eecucukcqkqysiau(__FUNCTION__); kwmiwaecqcgiaqye: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto gkoaeuekqockuoiq; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto yqicwmekwuoywyus; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yqicwmekwuoywyus: gkoaeuekqockuoiq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto eekaiaeqewiqkkgm; } return $this->eecucukcqkqysiau(__FUNCTION__); eekaiaeqewiqkkgm: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto kceuusiekagyeoys; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kceuusiekagyeoys: if (!(strtolower($iyiwooigkweeewey) === "\x2f\x69\156\x64\x65\x78\x2e\160\x68\x70")) { goto uyeyscsaigimsqwq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); uyeyscsaigimsqwq: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\160\x68\160" => 1, "\x78\155\x6c" => 1, "\170\163\x6c" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\104\x4f\x49\x4e\107\137\x41\112\x41\130"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\x54\120\x53")), ["\x6f\156", "\61"]) || "\x34\x34\x33" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\x45\x52\126\105\x52\x5f\x50\117\x52\124"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\160\x5f\143\x75\x73\x74\x6f\155\x69\x7a\145"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\107\105\x54" => 1, "\110\x45\x41\104" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto mwieyyqamgwicgco; } return $this->eecucukcqkqysiau(__FUNCTION__); mwieyyqamgwicgco: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto wkiymcoqqiigqaaw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wkiymcoqqiigqaaw: $yccgiaiouekkouay = ["\x73" => 1, "\154\x61\156\x67" => 1, "\160\x65\x72\155\x61\154\151\x6e\x6b\x5f\x6e\x61\155\145" => 1, "\x6c\x70\55\166\x61\162\151\x61\164\151\157\156\x2d\x69\144" => 1, "\x58\x44\x45\102\x55\107\x5f\123\105\x53\x53\111\x4f\x4e\x5f\x53\124\x41\x52\124" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto esqwswmoegiqcckg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); esqwswmoegiqcckg: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\143\x61\143\x68\145\137\x71\165\145\162\171\x5f\163\x74\x72\151\156\147\163"); if ($yccgiaiouekkouay) { goto qmokwkocmcyeyesc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qmokwkocmcyeyesc: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto mosuacsuaasssciu; } return $this->eecucukcqkqysiau(__FUNCTION__); mosuacsuaasssciu: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto qksckewucmosemuo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qksckewucmosemuo: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto kmooekeyemqgucci; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kmooekeyemqgucci: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto mkgmaguyswskyioa; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; mkgmaguyswskyioa: cmmusgkieoqyymgs: } skuuyysooocugyww: if (empty($eiocugauqgouiuyi)) { goto skwusmoyomgqkimm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); skwusmoyomgqkimm: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto usyckeewsgwaysam; } return $this->eecucukcqkqysiau(__FUNCTION__); usyckeewsgwaysam: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto gicuuwuuuwumyooa; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gicuuwuuuwumyooa: $yiycakoikkyuokgk = array_flip(explode("\x7c", $this->aceaeommyuooiqge()->get("\x63\141\143\x68\x65\x5f\155\x61\x6e\x64\x61\164\x6f\162\x79\x5f\143\157\x6f\153\151\145\163"))); if ($this->wemyikwikgwqwuoc()) { goto kakkuyeccaacewyo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); kakkuyeccaacewyo: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto qsokkkyoackoycie; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); qsokkkyoackoycie: ismeikacqqyqcmqe: } cysgqimowcqoqqsc: if (!empty($yiycakoikkyuokgk)) { goto casgoamcqkekgeeo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); casgoamcqkekgeeo: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\x70\162\137\x6f\160\164\x69\155\151\x7a\141\164\151\x6f\156\x5f\157\166\x65\x72\162\151\144\x65\137\x64\157\x6e\x74\x5f\x6f\160\164\x69\x6d\151\172\145", $this->cmaecekuqkwmemms("\x50\x52\137\117\120\x54\111\115\111\132\101\x54\111\117\x4e\137\x44\117\116\x54\x5f\x4f\120\x54\x49\x4d\x49\132\105", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\x69\163\x5f\x34\60\64") || is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\151\163\137\x73\x65\141\x72\x63\x68") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\160\162\x5f\x6f\160\164\151\x6d\151\x7a\141\164\151\x6f\156\137\157\160\x74\x69\x6d\151\172\145\x5f\163\x65\141\162\x63\150", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\143\x61\x63\x68\x65\137\163\x73\x6c"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yseyyukqaowwouua; } return $this->eecucukcqkqysiau(__FUNCTION__); yseyyukqaowwouua: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto qcgyggiaowuqswuw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qcgyggiaowuqswuw: if (!$this->aceaeommyuooiqge()->get("\x6d\157\x62\151\x6c\145\x5f\143\141\143\150\145")) { goto sooecucuakgkuyis; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); sooecucuakgkuyis: $wayquiskgeuoqamk = "\62\56\60\134\x20\115\x4d\120\174\x32\64\x30\170\63\62\x30\x7c\64\60\x30\x58\x32\x34\60\x7c\x41\x76\141\x6e\x74\107\157\x7c\102\x6c\x61\x63\x6b\x42\x65\162\x72\x79\174\x42\154\x61\x7a\x65\x72\174\103\145\154\154\160\150\157\156\x65\x7c\x44\x61\156\x67\145\x72\x7c\104\157\103\157\115\157\x7c\105\x6c\141\151\156\x65\x2f\x33\56\x30\x7c\x45\x75\144\x6f\x72\x61\127\x65\x62\174\x47\157\x6f\147\x6c\x65\142\x6f\x74\55\x4d\x6f\142\x69\154\x65\x7c\x68\151\160\x74\157\x70\x7c\x49\x45\115\157\142\151\x6c\x65\x7c\113\131\117\x43\105\122\101\x2f\127\130\63\61\60\x4b\x7c\x4c\x47\x2f\x55\x39\71\x30\x7c\115\111\x44\120\x2d\x32\56\174\115\115\x45\x46\62\60\174\x4d\117\124\x2d\126\x7c\116\x65\x74\106\162\x6f\x6e\x74\174\x4e\x65\167\164\x7c\116\x69\x6e\164\145\156\x64\157\134\x20\x57\151\151\x7c\x4e\151\x74\x72\157\174\116\x6f\x6b\x69\x61\174\x4f\x70\x65\x72\141\134\40\115\x69\x6e\x69\174\120\141\x6c\155\x7c\x50\154\141\x79\123\164\x61\164\x69\157\x6e\134\x20\x50\x6f\162\x74\x61\x62\154\x65\174\x70\x6f\x72\x74\141\x6c\x6d\155\155\x7c\x50\162\x6f\x78\151\x6e\145\x74\174\120\162\x6f\170\x69\116\x65\x74\174\123\x48\x41\x52\120\x2d\124\121\x2d\x47\x58\61\x30\174\x53\x48\107\x2d\x69\71\60\x30\174\x53\155\141\x6c\x6c\x7c\123\x6f\156\x79\x45\x72\x69\143\163\163\157\x6e\x7c\x53\x79\x6d\x62\151\x61\156\x5c\40\x4f\123\174\123\171\x6d\142\151\141\x6e\x4f\x53\x7c\124\x53\x32\61\x69\x2d\x31\60\174\125\120\x2e\102\x72\157\167\x73\x65\162\174\125\120\x2e\x4c\x69\x6e\153\174\167\x65\x62\117\123\x7c\x57\151\156\x64\x6f\167\163\134\x20\103\105\174\x57\x69\x6e\x57\101\120\174\x59\x61\x68\157\157\123\145\x65\x6b\x65\x72\57\115\61\x41\x31\x2d\122\x32\x44\62\174\x69\x50\x68\157\156\x65\174\x69\x50\157\144\174\101\x6e\144\162\x6f\151\x64\x7c\x42\154\x61\x63\153\x42\x65\x72\x72\x79\x39\x35\x33\60\x7c\x4c\x47\55\124\125\x39\61\65\x5c\x20\117\142\151\x67\x6f\174\x4c\107\x45\x5c\40\126\x58\x7c\167\145\x62\117\123\x7c\116\157\153\151\x61\x35\70\x30\x30"; if (!preg_match("\x23\x5e\x2e\52\50{$wayquiskgeuoqamk}\51\56\52\x23\151", $uowwycywwssskuys)) { goto ywqakqkmmcoceqka; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ywqakqkmmcoceqka: $wayquiskgeuoqamk = "\167\x33\143\x5c\x20\x7c\x77\x33\143\55\174\x61\x63\x73\55\174\x61\x6c\141\x76\x7c\x61\154\143\x61\174\141\x6d\x6f\151\x7c\141\165\x64\x69\174\141\x76\x61\156\174\x62\145\x6e\161\174\x62\x69\x72\144\174\x62\x6c\141\143\x7c\142\154\141\172\x7c\142\162\145\167\174\143\145\154\x6c\174\x63\x6c\144\143\x7c\143\x6d\x64\x2d\x7c\144\141\156\x67\174\x64\157\143\157\x7c\145\162\151\143\x7c\150\x69\x70\164\174\x68\x74\x63\137\174\151\156\156\157\x7c\x69\x70\141\161\x7c\x69\160\x6f\144\174\x6a\x69\147\x73\174\x6b\144\144\x69\x7c\x6b\x65\152\151\174\154\x65\156\157\x7c\x6c\x67\55\143\174\154\147\55\x64\174\154\147\x2d\147\x7c\154\x67\x65\55\x7c\x6c\x67\x2f\x75\174\x6d\x61\x75\x69\x7c\x6d\x61\170\x6f\x7c\155\151\x64\160\174\155\x69\x74\163\174\155\x6d\145\146\x7c\155\157\142\151\x7c\155\x6f\164\x2d\x7c\155\x6f\x74\157\x7c\155\167\142\x70\x7c\156\145\143\x2d\174\x6e\x65\x77\x74\174\x6e\157\153\151\x7c\x70\141\x6c\x6d\174\160\141\156\141\174\160\x61\x6e\164\x7c\160\x68\x69\154\174\x70\154\x61\x79\x7c\160\157\x72\164\174\160\162\x6f\x78\x7c\x71\x77\141\x70\x7c\163\141\147\x65\174\163\141\155\163\174\x73\141\156\x79\x7c\163\x63\150\55\174\x73\145\x63\55\174\x73\x65\x6e\144\x7c\163\145\162\x69\x7c\x73\x67\150\x2d\174\163\150\x61\162\x7c\163\x69\145\55\x7c\163\151\x65\155\174\163\x6d\141\x6c\174\x73\x6d\141\162\174\163\157\156\x79\x7c\x73\x70\x68\55\x7c\x73\171\155\x62\174\164\55\x6d\157\174\164\x65\154\x69\174\x74\151\155\x2d\174\x74\157\163\150\x7c\x74\x73\155\55\x7c\x75\x70\x67\61\174\x75\x70\163\x69\174\166\153\x2d\x76\x7c\166\157\x64\141\174\x77\x61\x70\55\174\x77\141\x70\141\x7c\167\141\160\151\174\x77\141\160\x70\x7c\x77\x61\x70\162\x7c\x77\145\x62\143\x7c\x77\151\x6e\x77\x7c\x77\x69\156\167\x7c\x78\x64\141\x5c\x20\x7c\170\x64\x61\x2d"; if (!preg_match("\43\136\x28{$wayquiskgeuoqamk}\51\56\x2a\x23\x69", $uowwycywwssskuys)) { goto kwsqgqmwyyeykgum; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kwsqgqmwyyeykgum: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto emauuoieewwoeyqq; } return $this->eecucukcqkqysiau(__FUNCTION__); emauuoieewwoeyqq: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto koukiyqaccegmquc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); koukiyqaccegmquc: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\143\x61\x63\150\x65\137\162\145\x6a\145\143\x74\137\165\141"); if ($mqsuiayuwmwqaqwm) { goto ekakkiuuquqkccse; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ekakkiuuquqkccse: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\x23{$mqsuiayuwmwqaqwm}\x23", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto oqwwacmigasucsoc; } return $this->eecucukcqkqysiau(__FUNCTION__); oqwwacmigasucsoc: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\x63\x61\143\150\x65\137\x72\145\x6a\145\x63\x74\137\x75\x72\x69"); if ($escsaeeosigewsme) { goto egkeqqgakieyimuq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); egkeqqgakieyimuq: $yciaosuiyeieceug = !preg_match("\x23\x5e\x28{$escsaeeosigewsme}\x29\44\43\x69", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\x50\137\x55\123\105\x52\137\101\107\105\x4e\x54"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto cakuguiciaiaeukg; } return $this->eecucukcqkqysiau(__FUNCTION__); cakuguiciaiaeukg: $yygmoeguaqyumuui = [ "\110\x54\x54\120\137\103\x46\x5f\103\117\x4e\116\x45\x43\x54\x49\116\107\x5f\x49\120", "\110\x54\124\x50\x5f\103\x4c\x49\x45\116\124\137\x49\120", "\110\124\x54\120\137\130\137\x46\x4f\122\x57\x41\122\x44\x45\104\137\x46\x4f\x52", "\110\x54\124\120\137\x58\137\x46\x4f\x52\127\101\x52\104\105\x44", "\x48\124\x54\x50\x5f\130\137\x43\114\125\123\124\105\x52\137\103\114\111\105\x4e\x54\x5f\111\120", "\x48\124\x54\x50\137\130\x5f\x52\x45\101\x4c\x5f\111\120", "\110\x54\x54\x50\137\106\x4f\122\127\101\122\x44\x45\x44\x5f\x46\117\122", "\110\x54\x54\x50\x5f\106\x4f\x52\127\x41\x52\104\105\104", "\122\x45\115\x4f\x54\105\137\101\x44\x44\122", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto cumeycwmuuqawwyu; } $kucumcusyyckayas = explode("\x2c", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto ckwmkquuyyugigom; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); ckwmkquuyyugigom: cumeycwmuuqawwyu: awwaiioyywmokwsm: } wswikooyuaaouqgk: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\x30\x2e\x30\56\x30\x2e\x30"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uaicwcqwauosmsqm; } return $this->eecucukcqkqysiau(__FUNCTION__); uaicwcqwauosmsqm: $yywgiquyoymymqwk = [ "\x32\x30\70\56\x37\x30\56\62\64\x37\56\x31\x35\x37" => '', "\61\67\62\x2e\x32\65\65\x2e\64\x38\x2e\61\63\x30" => '', "\61\x37\62\x2e\x32\x35\x35\x2e\64\x38\x2e\x31\x33\x31" => '', "\61\x37\x32\x2e\x32\x35\x35\x2e\64\x38\x2e\x31\63\62" => '', "\x31\67\x32\56\x32\65\65\56\64\70\56\x31\63\63" => '', "\x31\x37\x32\56\62\65\65\56\64\x38\56\61\x33\64" => '', "\x31\67\x32\56\x32\x35\x35\56\64\70\56\61\x33\x35" => '', "\x31\x37\x32\56\62\65\65\x2e\64\x38\56\61\63\x36" => '', "\x31\x37\62\56\x32\x35\x35\x2e\x34\70\x2e\61\63\x37" => '', "\61\67\x32\x2e\62\65\x35\x2e\64\x38\x2e\x31\x33\70" => '', "\x31\67\62\x2e\x32\x35\65\x2e\x34\x38\x2e\x31\x33\x39" => '', "\61\67\x32\56\62\x35\65\x2e\x34\x38\x2e\x31\x34\x30" => '', "\61\x37\x32\x2e\62\x35\65\56\x34\x38\56\x31\64\x31" => '', "\61\x37\62\56\62\65\65\56\x34\70\x2e\x31\x34\62" => '', "\61\x37\62\56\x32\x35\x35\56\x34\70\x2e\x31\x34\x33" => '', "\x31\x37\x32\56\62\65\x35\56\x34\x38\56\x31\64\64" => '', "\61\x37\x32\x2e\62\65\x35\56\x34\x38\56\x31\64\x35" => '', "\x31\67\62\x2e\x32\x35\x35\56\64\70\x2e\61\x34\66" => '', "\61\x37\x32\x2e\62\x35\x35\x2e\64\x38\56\x31\x34\67" => '', "\65\x32\56\62\62\x39\56\61\62\62\56\62\x34\x30" => '', "\x31\60\x34\56\62\x31\64\x2e\x37\x32\56\61\60\61" => '', "\61\63\x2e\x36\x36\x2e\x37\x2e\61\61" => '', "\x31\63\x2e\70\65\56\62\64\56\70\63" => '', "\61\63\56\70\x35\56\62\64\x2e\71\x30" => '', "\61\x33\x2e\x38\x35\56\x38\62\x2e\x32\x36" => '', "\x34\x30\x2e\x37\64\x2e\62\x34\62\56\x32\65\x33" => '', "\64\x30\56\67\64\x2e\x32\x34\63\56\61\63" => '', "\64\x30\x2e\x37\64\56\x32\64\63\x2e\61\67\66" => '', "\61\60\64\56\62\61\x34\56\x34\70\56\x32\64\67" => '', "\61\x35\67\x2e\x35\x35\56\61\70\71\56\x31\70\x39" => '', "\x31\60\x34\x2e\x32\61\x34\x2e\x31\61\x30\56\61\63\65" => '', "\67\60\x2e\x33\67\56\70\63\x2e\x32\x34\60" => '', "\66\65\56\65\x32\x2e\63\66\x2e\62\65\x30" => '', "\61\x33\56\x37\70\x2e\62\61\66\56\x35\66" => '', "\x35\x32\56\61\x36\x32\56\x32\x31\62\x2e\x31\66\63" => '', "\62\63\56\71\66\x2e\63\64\x2e\61\x30\x35" => '', "\66\65\x2e\65\62\56\61\x31\x33\56\x32\63\x36" => '', "\61\67\62\x2e\62\x35\x35\x2e\x36\61\x2e\x33\x34" => '', "\x31\x37\x32\56\62\x35\x35\56\x36\61\56\x33\x35" => '', "\x31\x37\x32\x2e\62\65\x35\x2e\x36\61\x2e\63\66" => '', "\x31\67\x32\x2e\x32\65\x35\x2e\66\x31\56\x33\67" => '', "\61\x37\62\x2e\62\65\65\56\x36\x31\x2e\63\x38" => '', "\61\x37\62\56\62\x35\65\56\66\61\x2e\63\x39" => '', "\61\x37\x32\56\62\65\65\x2e\66\x31\56\64\60" => '', "\65\62\56\x32\63\67\x2e\62\63\x35\x2e\61\70\65" => '', "\x35\x32\56\62\x33\x37\x2e\x32\65\60\56\x37\63" => '', "\x35\x32\56\62\63\x37\x2e\x32\63\x36\56\x31\x34\x35" => '', "\x31\60\64\56\x34\x31\x2e\x32\56\61\71" => '', "\61\x39\61\x2e\62\63\x35\56\x39\x38\x2e\x31\x36\64" => '', "\x31\71\61\56\x32\63\x35\56\71\71\56\x32\62\61" => '', "\61\x39\61\x2e\x32\63\62\x2e\61\x39\64\56\x35\x31" => '', "\x31\60\64\56\62\x31\x31\x2e\61\64\x33\x2e\70" => '', "\x31\60\x34\56\x32\61\x31\x2e\61\x36\x35\x2e\65\63" => '', "\65\62\x2e\x31\x37\62\x2e\x31\64\56\x38\67" => '', "\x34\x30\x2e\x38\x33\x2e\70\71\56\x32\x31\x34" => '', "\65\x32\x2e\61\67\x35\x2e\65\67\56\70\61" => '', "\x32\x30\x2e\x31\70\70\x2e\x36\63\x2e\x31\65\x31" => '', "\62\x30\x2e\x35\x32\x2e\x33\66\x2e\64\x39" => '', "\65\x32\56\62\64\x36\x2e\x31\66\x35\56\x31\65\63" => '', "\65\61\x2e\x31\x34\64\56\x31\x30\x32\x2e\x32\x33\x33" => '', "\61\x33\56\x37\66\56\71\67\56\x32\62\x34" => '', "\x31\x30\62\56\x31\x33\x33\x2e\x31\x36\71\56\66\66" => '', "\x35\x32\56\62\63\61\x2e\61\x39\x39\56\61\67\60" => '', "\x31\x33\56\65\x33\56\x31\x36\62\56\x37" => '', "\x34\60\56\61\62\x33\x2e\x32\61\x38\x2e\71\64" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto gsqcoqqsioiyoykq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gsqcoqqsioiyoykq: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\x50\x5f\x55\x53\x45\122\x5f\101\107\x45\116\x54"); if ($uowwycywwssskuys) { goto goaowamiyyamueiw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); goaowamiyyamueiw: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\43\120\x69\156\x67\x64\x6f\155\x50\141\x67\x65\123\x70\145\x65\x64\x7c\x44\141\x72\x65\x42\x6f\x6f\x73\164\174\x47\157\157\147\x6c\x65\174\120\x54\x53\x54\x7c\103\150\162\x6f\155\x65\55\x4c\151\x67\150\x74\150\x6f\165\163\145\174\127\x50\40\x52\x6f\x63\x6b\145\164\x23\x69", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\105\121\125\x45\123\124\x5f\125\x52\111", ''); if (!$iyiwooigkweeewey) { goto iaomqomgiwiegoca; } $iyiwooigkweeewey = "\57" . ltrim($iyiwooigkweeewey, "\57"); iaomqomgiwiegoca: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto ysweqawmawicakeo; } return ''; ysweqawmawicakeo: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto owisckseoogsugqq; } return $magawcseesgowoeo; owisckseoogsugqq: return "{$magawcseesgowoeo}\77{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto ookcgumoacskyymy; } $magawcseesgowoeo = explode("\77", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); ookcgumoacskyymy: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\x45\x51\x55\105\x53\124\137\115\105\124\110\117\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto kgysyqkoqgwmoscq; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\143\x61\x63\150\x65\x5f\151\x67\x6e\x6f\162\145\x64\137\160\141\162\141\x6d\145\x74\145\162\163"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto cuseccewekgcgkyg; } ksort($eyagkkkqkwcuygso); cuseccewekgcgkyg: kgysyqkoqgwmoscq: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; oqwcmgwimeisusoe: if (!(strpos($euueacigmgoqkimu, "\56\x2f") !== false || strpos($euueacigmgoqkimu, "\x2f\x2e") !== false || "\x2e" === $euueacigmgoqkimu || "\x2e\x2e" === $euueacigmgoqkimu)) { goto makomwwyomweyamm; } if (strpos($euueacigmgoqkimu, "\56\x2e\x2f") === 0) { goto ooysmgyeqoiesgqm; } if (strpos($euueacigmgoqkimu, "\x2e\57") === 0) { goto ocgkwqqmgasuoies; } if (strpos($euueacigmgoqkimu, "\57\x2e\x2f") === 0) { goto wwswmaewcaisauei; } if ("\x2f\x2e" === $euueacigmgoqkimu) { goto gcskyqewysqaceeg; } if (strpos($euueacigmgoqkimu, "\x2f\x2e\x2e\57") === 0) { goto cigesysuauaiccms; } if ("\57\56\x2e" === $euueacigmgoqkimu) { goto gwiaimosqoiquwkc; } if ("\x2e" === $euueacigmgoqkimu || "\56\56" === $euueacigmgoqkimu) { goto qiaaqkymeuuueoqk; } if (strpos($euueacigmgoqkimu, "\57", 1) !== false) { goto acesyuieuuqwgkwm; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto asaowisseacciyia; acesyuieuuqwgkwm: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\x2f", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); asaowisseacciyia: goto ugswokwmkumcmigc; qiaaqkymeuuueoqk: $euueacigmgoqkimu = ''; ugswokwmkumcmigc: goto owgakkqgckqcegoi; gwiaimosqoiquwkc: $euueacigmgoqkimu = "\57"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); owgakkqgckqcegoi: goto qumkwsqqocooyuoq; cigesysuauaiccms: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); qumkwsqqocooyuoq: goto kkewoqqowugagwoy; gcskyqewysqaceeg: $euueacigmgoqkimu = "\x2f"; kkewoqqowugagwoy: goto wsemeeocquawyauo; wwswmaewcaisauei: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); wsemeeocquawyauo: goto wmaeicoyyciuaiuy; ocgkwqqmgasuoies: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); wmaeicoyyciuaiuy: goto kwoyiysciqumswcy; ooysmgyeqoiesgqm: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); kwoyiysciqumswcy: goto oqwcmgwimeisusoe; makomwwyomweyamm: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto aaogeemgkogagkai; } $icwicymcioeyeyek["\x70\145\x72\x6d\141\x6c\x69\x6e\x6b"] = $this->aakgigyaookyiaqk(); $this->oaumimwssciwumys($uamcoiueqaamsqma, $icwicymcioeyeyek); aaogeemgkogagkai: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto qqmmycmsoqegcqqw; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); qqmmycmsoqegcqqw: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto isqwwmikecauwyuc; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); isqwwmikecauwyuc: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\165\162\x6c"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\x6d\x65\163\x73\141\x67\145" => $uamcoiueqaamsqma, "\143\x6f\x6e\164\145\x78\x74" => $icwicymcioeyeyek]; } }
