<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668c5b6d38ae4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\x75\162\151" => 1, "\163\163\154" => 0, "\167\160\137\x34\x30\x34" => 1, "\x73\145\141\x72\x63\x68" => 1, "\155\x6f\x62\151\154\x65" => 1, "\151\x73\137\150\x74\x6d\x6c" => 1, "\x71\165\145\162\171\137\x73\x74\x72\x69\x6e\x67" => 1, "\x64\157\156\x6f\164\x63\x61\x63\150\145\x70\x61\147\145" => 1, "\x72\145\152\x65\143\x74\145\144\x5f\x63\x6f\157\x6b\x69\145" => 1, "\x6d\x61\156\x64\x61\164\x6f\162\171\137\143\157\x6f\x6b\x69\x65" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\x74\145\163\x74\163"])) { goto ysiqakyaiooyscwy; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\x74\145\163\164\163"]); ysiqakyaiooyscwy: if (!(!isset($ywmkwiwkosakssii["\143\x6f\x6f\x6b\x69\x65\163"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto auumaoycmsmsgigs; } $ywmkwiwkosakssii["\143\x6f\157\153\x69\x65\163"] = $_COOKIE; auumaoycmsmsgigs: if (!(!isset($ywmkwiwkosakssii["\x70\x6f\x73\164"]) && !empty($_POST) && is_array($_POST))) { goto ousmyagwsiooumos; } $ywmkwiwkosakssii["\160\x6f\x73\164"] = $_POST; ousmyagwsiooumos: if (!(!isset($ywmkwiwkosakssii["\147\145\164"]) && !empty($_GET) && is_array($_GET))) { goto qeuyekusasqmcqms; } $ywmkwiwkosakssii["\147\x65\164"] = $_GET; qeuyekusasqmcqms: $this->get = !empty($ywmkwiwkosakssii["\147\x65\164"]) && is_array($ywmkwiwkosakssii["\x67\x65\x74"]) ? $ywmkwiwkosakssii["\x67\x65\x74"] : []; $this->post = !empty($ywmkwiwkosakssii["\160\x6f\x73\x74"]) && is_array($ywmkwiwkosakssii["\x70\157\x73\x74"]) ? $ywmkwiwkosakssii["\x70\157\163\x74"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\x63\x6f\x6f\153\151\145\163"]) && is_array($ywmkwiwkosakssii["\x63\157\157\153\151\x65\163"]) ? $ywmkwiwkosakssii["\x63\157\x6f\x6b\x69\145\x73"] : []; if (!$this->ayueggmoqeeukqmq()) { goto yiceawuuiusakwiq; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\167\x70\x5f\x63\x75\x73\x74\157\x6d\151\x7a\x65" => '']); yiceawuuiusakwiq: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->aiukiaokcgsiomew()) { goto sgocecweikecwwgq; } $this->yauwooaeicgosquo("\x44\x65\166\40\x4d\x6f\x64\x65\x20\105\156\141\x62\154\145\x64\x20\141\x6e\x64\x20\x61\x6c\154\40\x72\145\161\x75\145\163\x74\40\x69\163\40\142\x79\160\141\x73\163\56"); return false; sgocecweikecwwgq: if (!$this->kgkoeoeseyuugaao()) { goto qwisiamkmkkwucyo; } $this->yauwooaeicgosquo("\x52\x6f\x62\157\164\x73\x2e\164\x78\164\40\157\x72\40\x2e\x68\x74\141\143\143\145\163\163\40\x66\x69\154\x65\x20\x69\x73\40\145\x78\143\154\165\x64\x65\x64\56"); return false; qwisiamkmkkwucyo: if (!$this->gymgcceeqssmesiu()) { goto yqcusaeysomccaok; } $this->yauwooaeicgosquo("\120\110\120\54\x20\130\115\x4c\54\x20\x6f\162\x20\130\123\x4c\x20\146\151\154\145\40\151\163\40\145\170\x63\154\165\x64\x65\x64\56"); return false; yqcusaeysomccaok: if (!$this->goecwaaykqoaaagg()) { goto iwkckkeimmeoquyq; } $this->yauwooaeicgosquo("\x41\x64\x6d\x69\156\40\x6f\x72\x20\x41\112\x41\130\40\125\x52\x4c\x20\x69\x73\40\145\x78\x63\154\165\144\145\144\x2e"); return false; iwkckkeimmeoquyq: if (!$this->sgsscqasgeyeicoe()) { goto masakmomqmeocqqg; } $this->yauwooaeicgosquo("\x41\x64\x6d\x69\156\40\157\162\x20\x41\x4a\101\130\40\125\x52\x4c\x20\151\x73\x20\145\x78\x63\154\165\x64\145\x64\56"); return false; masakmomqmeocqqg: if ($this->gooeyogikcusgwuu()) { goto yksywwikmeksikqc; } $this->yauwooaeicgosquo("\x52\145\x71\165\x65\x73\164\x20\155\x65\x74\x68\157\x64\x20\151\x73\x20\156\x6f\164\40\141\x6c\154\157\167\145\x64\56\40\120\141\x67\145\x20\x63\141\x6e\x6e\157\164\x20\142\x65\40\143\x61\143\150\145\144\56", ["\x72\x65\161\x75\145\x73\x74\137\155\x65\x74\x68\x6f\x64" => $this->ciyocmkwssocskiy()]); return false; yksywwikmeksikqc: if ($this->cskwmweqysskwckg()) { goto yoqsigmoyaaceqky; } $this->lastError = []; return true; yoqsigmoyaaceqky: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\163\165\x63\x63\x65\163\163"]) { goto suqckoccuyeeymww; } $this->yauwooaeicgosquo("\x4e\157\40\143\x6f\x6e\146\151\x67\x20\146\151\x6c\x65\40\x66\x6f\165\156\144", ["\143\x6f\156\146\151\147\x5f\x70\141\x74\150" => $uiewakwqscemywuo["\x70\x61\164\x68"]]); return false; suqckoccuyeeymww: if (!($this->cskwmweqysskwckg("\161\165\145\x72\x79\137\163\x74\162\151\156\147") && !$this->koguieumooaesyww())) { goto giugwaeuwaomossq; } $this->yauwooaeicgosquo("\121\x75\x65\x72\x79\x20\x73\x74\162\151\x6e\x67\x20\x55\122\x4c\40\x69\x73\x20\x65\170\x63\x6c\x75\x64\x65\144\56", $_GET); return false; giugwaeuwaomossq: if (!($this->cskwmweqysskwckg("\163\163\154") & !$this->eqwgocqwoyyykwke())) { goto acgqaeakoyasgkku; } $this->yauwooaeicgosquo("\123\123\x4c\x20\x63\141\x63\x68\145\40\x6e\x6f\164\x20\x61\160\160\154\151\x65\144\x20\x74\157\40\160\141\147\x65\x2e"); return false; acgqaeakoyasgkku: if (!($this->cskwmweqysskwckg("\165\162\x69") && !$this->qweiomkkuikwugks())) { goto sycougcyeqmeiagk; } $this->yauwooaeicgosquo("\x50\x61\147\x65\40\x69\x73\x20\x65\x78\x63\x6c\x75\x64\x65\x64\56"); return false; sycougcyeqmeiagk: if (!($this->cskwmweqysskwckg("\162\145\152\x65\143\x74\x65\x64\x5f\143\157\x6f\153\151\145") && $this->cokqaygwwygweuyk())) { goto ssagcgqaucssyego; } $this->yauwooaeicgosquo("\105\170\143\x6c\165\144\145\x64\x20\143\x6f\157\153\x69\145\x20\146\x6f\x75\156\144\x2e", ["\x65\170\x63\x6c\165\x64\x65\x64\x5f\x63\157\x6f\x6b\x69\145\x73" => $this->cokqaygwwygweuyk()]); return false; ssagcgqaucssyego: if (!($this->cskwmweqysskwckg("\155\x61\x6e\144\x61\x74\157\162\171\x5f\143\x6f\157\153\x69\145") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto mqgeseysuwcaqwiy; } $this->yauwooaeicgosquo("\x4d\151\x73\163\x69\156\147\40\x6d\x61\x6e\144\141\x74\x6f\162\171\40\143\157\x6f\x6b\x69\x65\72\40\160\141\147\145\40\156\x6f\x74\x20\160\162\x6f\x63\x65\163\x73\x65\144\56", ["\x6d\151\163\163\151\156\147\137\x63\x6f\157\153\151\145\163" => $this->qgymyeqwqaiwmmea()]); return false; mqgeseysuwcaqwiy: if (!($this->cskwmweqysskwckg("\165\x73\145\162\137\141\x67\145\156\x74") && !$this->mqiqsuksgyekwkii())) { goto ekoqieigyoeyauqa; } $this->yauwooaeicgosquo("\x55\x73\145\x72\x20\x41\147\145\156\x74\40\151\163\x20\145\x78\x63\154\x75\144\145\x64\x2e", ["\x75\163\145\x72\x5f\x61\x67\145\x6e\x74" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\120\x5f\125\x53\105\122\137\101\x47\x45\116\124")]); return false; ekoqieigyoeyauqa: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto cuwcsamuuqyuyqsu; } $this->yauwooaeicgosquo("\102\165\146\146\145\162\40\x63\x6f\x6e\x74\x65\156\x74\x20\165\x6e\x64\145\x72\40\62\65\x35\x20\143\150\141\x72\141\x63\x74\x65\x72\x73\x2e"); return false; cuwcsamuuqyuyqsu: if (!(http_response_code() !== 200)) { goto mimacwyuueomgwwy; } $this->yauwooaeicgosquo("\x50\x61\147\x65\x20\x69\163\x20\x6e\x6f\x74\40\141\40\x32\60\60\x20\110\124\124\120\40\162\x65\163\160\157\156\x73\x65\x20\141\x6e\144\x20\143\x61\156\156\x6f\164\40\x62\145\x20\143\141\143\150\x65\144\56"); return false; mimacwyuueomgwwy: if (!($this->cskwmweqysskwckg("\x64\x6f\156\157\164\x6f\160\x74\151\155\151\x7a\x65\x70\141\x67\145") && $this->cowcgqokiosgaqic())) { goto ksckqkmwiqggykke; } $this->yauwooaeicgosquo("\x44\x4f\x4e\124\x4f\x50\x54\111\115\x49\132\x45\104\120\101\107\x45\x20\151\163\40\x64\x65\x66\151\x6e\145\144\x2e\x20\120\141\147\145\40\x63\x61\156\156\x6f\164\40\142\145\x20\143\x61\143\x68\x65\144\x2e"); return false; ksckqkmwiqggykke: if (!($this->cskwmweqysskwckg("\x77\160\x5f\64\x30\x34") && $this->kmmyuiwaogukwqqi())) { goto igwkcikeyoowosoi; } $this->yauwooaeicgosquo("\x57\x50\40\x34\60\x34\x20\x70\x61\x67\x65\40\x69\x73\40\145\x78\x63\154\x75\x64\145\x64\56"); return false; igwkcikeyoowosoi: if (!($this->cskwmweqysskwckg("\163\145\x61\x72\143\x68") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto iqsgossweywksoia; } $this->yauwooaeicgosquo("\123\x65\x61\162\143\150\x20\160\141\147\x65\x20\x69\x73\x20\145\170\143\154\165\x64\145\144\56"); return false; iqsgossweywksoia: if (!$this->cskwmweqysskwckg("\x69\x73\x5f\x68\164\155\154")) { goto cuommomwmsackoqc; } if (!($this->cmaecekuqkwmemms("\x52\x45\x53\124\137\122\105\x51\x55\x45\x53\124") || $this->gaiygescoqgyusaa())) { goto awaqksikyomsuaeo; } unset($this->tests["\151\x73\137\150\164\155\x6c"]); awaqksikyomsuaeo: cuommomwmsackoqc: if (!($this->cskwmweqysskwckg("\151\x73\x5f\150\x74\155\154") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto ggeoqeowscwkeumy; } $this->yauwooaeicgosquo("\116\157\x20\143\154\157\x73\x69\x6e\147\40\x3c\x2f\x68\x74\155\x6c\76\x20\167\141\x73\x20\146\157\x75\x6e\144\56"); return false; ggeoqeowscwkeumy: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\160\x72\137\157\x70\164\x69\x6d\151\x7a\x61\x74\151\x6f\156\137\x61\154\x6c\157\x77\x5f\x74\157\x5f\163\164\x61\x72\164\x5f\142\165\x66\x66\x65\x72\x5f\x70\162\157\x63\x65\163\163", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto qyeswawykmasuqye; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto uwaimsisescsgyqk; qyeswawykmasuqye: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); uwaimsisescsgyqk: return apply_filters("\x70\x72\x5f\157\x70\164\x69\155\x69\x7a\141\164\151\157\156\137\150\x61\x73\137{$ymqmyyeuycgmigyo}\137\x74\145\x73\x74", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\x2f\74\134\x73\x2a\134\x2f\x5c\x73\52\150\x74\155\x6c\134\163\52\x3e\57\x69", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\57\x28\x3f\72\x2e\53\x2f\51\x3f" . $wp_rewrite->feed_base . "\50\77\72\57\x28\x3f\72\x2e\53\x2f\x3f\51\77\51\x3f\44"; return (bool) preg_match("\43\136\x28{$uckmmkmoeikwsiqg}\51\44\43\151", $this->gygiweeesqqckgme()); } public function aiukiaokcgsiomew() { return $this->aceaeommyuooiqge()->get("\144\x65\166\x5f\155\157\144\x65"); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uqcsksaywyqeumig; } return $this->eecucukcqkqysiau(__FUNCTION__); uqcsksaywyqeumig: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto yggmaskeguaqkusc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); yggmaskeguaqkusc: $ucasskoyoewwmmii = ["\162\x6f\x62\157\164\x73\56\x74\170\x74", "\x2e\150\x74\x61\143\x63\145\163\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\57" . $qogsmwakwacwqogk))) { goto kwmiwaecqcgiaqye; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kwmiwaecqcgiaqye: jsmisuccwyukksgc: } ukwoswyyogmsygqg: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yqicwmekwuoywyus; } return $this->eecucukcqkqysiau(__FUNCTION__); yqicwmekwuoywyus: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto eekaiaeqewiqkkgm; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto gkoaeuekqockuoiq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gkoaeuekqockuoiq: eekaiaeqewiqkkgm: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kceuusiekagyeoys; } return $this->eecucukcqkqysiau(__FUNCTION__); kceuusiekagyeoys: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto uyeyscsaigimsqwq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); uyeyscsaigimsqwq: if (!(strtolower($iyiwooigkweeewey) === "\57\151\x6e\x64\x65\170\x2e\160\x68\160")) { goto mwieyyqamgwicgco; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); mwieyyqamgwicgco: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\160\150\160" => 1, "\170\155\x6c" => 1, "\x78\163\x6c" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\104\117\x49\116\107\137\101\x4a\101\130"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\x50\x53")), ["\x6f\x6e", "\61"]) || "\x34\64\63" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\x52\x56\105\122\x5f\120\117\122\x54"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\160\137\x63\x75\x73\164\x6f\x6d\x69\x7a\145"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\107\x45\124" => 1, "\x48\105\x41\104" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wkiymcoqqiigqaaw; } return $this->eecucukcqkqysiau(__FUNCTION__); wkiymcoqqiigqaaw: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto esqwswmoegiqcckg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); esqwswmoegiqcckg: $yccgiaiouekkouay = ["\163" => 1, "\x6c\x61\x6e\147" => 1, "\160\x65\x72\155\141\154\x69\156\x6b\137\x6e\x61\155\x65" => 1, "\x6c\160\55\166\141\x72\x69\x61\x74\151\157\156\x2d\x69\x64" => 1, "\x58\x44\x45\x42\125\107\137\123\105\123\123\x49\x4f\x4e\x5f\123\x54\101\122\124" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto qmokwkocmcyeyesc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qmokwkocmcyeyesc: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\143\x61\x63\150\145\x5f\x71\165\x65\x72\x79\x5f\x73\164\x72\x69\x6e\x67\163"); if ($yccgiaiouekkouay) { goto mosuacsuaasssciu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); mosuacsuaasssciu: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qksckewucmosemuo; } return $this->eecucukcqkqysiau(__FUNCTION__); qksckewucmosemuo: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto kmooekeyemqgucci; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kmooekeyemqgucci: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto skuuyysooocugyww; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); skuuyysooocugyww: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto skwusmoyomgqkimm; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; skwusmoyomgqkimm: mkgmaguyswskyioa: } cmmusgkieoqyymgs: if (empty($eiocugauqgouiuyi)) { goto usyckeewsgwaysam; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); usyckeewsgwaysam: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto gicuuwuuuwumyooa; } return $this->eecucukcqkqysiau(__FUNCTION__); gicuuwuuuwumyooa: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto kakkuyeccaacewyo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kakkuyeccaacewyo: $yiycakoikkyuokgk = array_flip(explode("\x7c", $this->aceaeommyuooiqge()->get("\143\x61\x63\x68\x65\137\x6d\x61\x6e\144\141\164\x6f\162\x79\x5f\143\157\x6f\x6b\x69\x65\x73"))); if ($this->wemyikwikgwqwuoc()) { goto cysgqimowcqoqqsc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); cysgqimowcqoqqsc: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto casgoamcqkekgeeo; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); casgoamcqkekgeeo: qsokkkyoackoycie: } ismeikacqqyqcmqe: if (!empty($yiycakoikkyuokgk)) { goto yseyyukqaowwouua; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yseyyukqaowwouua: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\160\x72\137\157\160\x74\151\155\x69\x7a\141\x74\x69\157\x6e\x5f\x6f\x76\145\x72\x72\151\x64\x65\137\x64\x6f\x6e\164\137\x6f\160\x74\x69\155\x69\172\x65", $this->cmaecekuqkwmemms("\x50\x52\137\117\x50\124\x49\115\111\132\x41\x54\111\x4f\116\x5f\x44\x4f\116\x54\x5f\x4f\x50\x54\111\115\111\x5a\105", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\x69\x73\x5f\64\x30\x34") || is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\x69\163\x5f\163\x65\x61\162\x63\x68") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\x70\162\x5f\157\160\164\x69\x6d\x69\x7a\x61\164\151\157\x6e\x5f\157\160\x74\x69\155\x69\x7a\145\x5f\x73\145\141\x72\x63\x68", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\143\141\x63\150\145\137\163\163\154"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qcgyggiaowuqswuw; } return $this->eecucukcqkqysiau(__FUNCTION__); qcgyggiaowuqswuw: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto sooecucuakgkuyis; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); sooecucuakgkuyis: if (!$this->aceaeommyuooiqge()->get("\x6d\x6f\x62\x69\154\x65\137\x63\x61\143\x68\x65")) { goto ywqakqkmmcoceqka; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ywqakqkmmcoceqka: $wayquiskgeuoqamk = "\x32\56\60\134\40\x4d\x4d\x50\x7c\x32\64\60\170\x33\x32\x30\x7c\64\x30\60\130\x32\64\x30\174\101\x76\x61\x6e\x74\x47\157\x7c\102\x6c\141\143\x6b\102\145\x72\x72\x79\174\x42\154\141\x7a\145\x72\x7c\x43\x65\x6c\x6c\160\150\157\156\145\174\x44\x61\156\x67\145\x72\x7c\104\x6f\103\x6f\115\x6f\x7c\105\x6c\141\151\156\145\x2f\63\56\60\174\105\x75\144\157\162\141\127\145\x62\x7c\107\x6f\x6f\147\x6c\x65\x62\x6f\x74\x2d\x4d\x6f\x62\x69\x6c\x65\x7c\150\x69\160\164\x6f\160\174\111\105\x4d\x6f\x62\x69\x6c\145\174\113\131\117\x43\105\122\101\57\x57\x58\x33\61\x30\113\174\114\107\57\x55\x39\x39\60\174\115\111\x44\120\55\x32\x2e\x7c\115\115\x45\x46\x32\x30\174\x4d\x4f\x54\55\x56\x7c\x4e\145\164\106\x72\x6f\x6e\164\x7c\116\145\x77\x74\174\116\151\156\164\145\x6e\x64\x6f\x5c\x20\127\151\x69\174\x4e\151\164\x72\x6f\174\x4e\157\153\151\x61\x7c\x4f\x70\x65\x72\141\134\40\x4d\x69\156\x69\174\x50\x61\154\x6d\174\x50\154\x61\171\123\164\x61\x74\x69\157\156\x5c\x20\x50\157\162\164\x61\x62\x6c\x65\174\160\157\x72\x74\x61\x6c\x6d\x6d\155\174\x50\162\x6f\x78\x69\x6e\145\x74\174\x50\162\157\x78\x69\x4e\145\x74\x7c\x53\x48\x41\122\120\55\124\121\x2d\107\130\61\60\174\123\110\107\55\151\71\x30\60\174\x53\x6d\141\x6c\x6c\x7c\123\157\156\171\x45\162\151\x63\x73\x73\x6f\156\174\x53\x79\155\x62\x69\141\x6e\134\x20\117\123\x7c\x53\x79\155\142\x69\x61\x6e\x4f\123\x7c\x54\123\x32\61\151\x2d\61\60\x7c\125\x50\56\102\x72\x6f\167\163\x65\162\x7c\x55\120\56\x4c\x69\x6e\153\174\167\145\x62\x4f\123\x7c\x57\x69\x6e\x64\157\167\x73\134\x20\x43\105\x7c\x57\151\x6e\127\101\x50\174\x59\141\150\x6f\x6f\123\x65\145\153\145\162\x2f\x4d\61\x41\61\55\122\62\x44\x32\174\x69\120\x68\x6f\x6e\145\174\151\120\x6f\x64\x7c\101\156\144\162\157\x69\144\174\x42\154\141\143\x6b\x42\145\162\162\x79\x39\x35\x33\x30\174\x4c\107\55\124\x55\x39\61\65\134\40\x4f\142\151\x67\x6f\x7c\x4c\107\x45\134\40\126\130\x7c\x77\x65\x62\x4f\123\174\x4e\157\153\151\141\x35\70\60\x30"; if (!preg_match("\43\136\56\x2a\x28{$wayquiskgeuoqamk}\51\56\52\x23\151", $uowwycywwssskuys)) { goto kwsqgqmwyyeykgum; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kwsqgqmwyyeykgum: $wayquiskgeuoqamk = "\x77\63\143\134\40\x7c\167\63\x63\55\174\141\x63\163\x2d\174\141\154\x61\x76\x7c\x61\x6c\143\x61\174\141\x6d\x6f\x69\x7c\x61\165\x64\151\174\x61\166\x61\156\x7c\142\x65\x6e\161\174\x62\x69\x72\x64\174\x62\154\141\143\x7c\142\154\x61\172\174\x62\x72\145\167\x7c\143\x65\154\x6c\x7c\x63\x6c\x64\143\174\143\155\x64\55\x7c\x64\141\x6e\x67\174\x64\157\x63\x6f\x7c\x65\x72\x69\x63\174\150\x69\160\164\x7c\x68\x74\x63\x5f\x7c\x69\x6e\156\157\x7c\x69\x70\141\161\x7c\x69\x70\157\x64\174\152\x69\147\x73\174\153\144\x64\x69\174\153\145\152\151\x7c\x6c\145\156\x6f\174\154\147\x2d\x63\174\x6c\147\x2d\144\174\154\147\x2d\147\174\154\147\x65\55\x7c\154\x67\57\x75\x7c\x6d\141\x75\x69\174\x6d\141\x78\157\x7c\x6d\151\x64\x70\174\155\151\x74\163\x7c\x6d\155\145\x66\174\155\157\142\x69\x7c\155\x6f\164\55\x7c\155\157\164\x6f\x7c\155\x77\x62\160\174\x6e\145\143\x2d\x7c\156\x65\167\x74\174\x6e\x6f\153\151\x7c\x70\x61\154\155\174\x70\141\156\x61\x7c\x70\x61\156\164\x7c\160\x68\151\x6c\174\160\154\x61\x79\174\160\157\162\164\x7c\160\x72\157\x78\174\161\x77\141\x70\174\x73\x61\147\145\174\163\x61\x6d\x73\174\163\x61\156\x79\174\163\x63\150\55\174\163\145\143\x2d\174\x73\x65\156\144\x7c\163\145\x72\x69\174\163\147\150\55\174\163\150\141\162\x7c\x73\151\145\55\174\163\151\x65\155\x7c\163\155\141\x6c\x7c\163\155\x61\162\174\x73\x6f\x6e\171\174\163\160\150\55\x7c\163\x79\x6d\x62\174\x74\55\155\x6f\x7c\x74\145\154\x69\174\x74\151\x6d\55\174\x74\x6f\x73\150\x7c\x74\x73\x6d\x2d\x7c\x75\x70\147\x31\x7c\165\x70\163\x69\x7c\x76\153\x2d\166\x7c\x76\157\144\x61\x7c\x77\x61\x70\x2d\174\x77\141\x70\141\174\167\x61\160\x69\x7c\x77\x61\x70\160\174\167\x61\x70\162\174\167\145\142\143\174\x77\x69\x6e\167\174\167\x69\x6e\x77\174\x78\x64\x61\134\40\x7c\170\x64\x61\x2d"; if (!preg_match("\x23\x5e\50{$wayquiskgeuoqamk}\51\x2e\52\43\x69", $uowwycywwssskuys)) { goto emauuoieewwoeyqq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); emauuoieewwoeyqq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto koukiyqaccegmquc; } return $this->eecucukcqkqysiau(__FUNCTION__); koukiyqaccegmquc: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto ekakkiuuquqkccse; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ekakkiuuquqkccse: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\x63\x61\x63\150\145\137\162\x65\152\x65\x63\x74\x5f\165\x61"); if ($mqsuiayuwmwqaqwm) { goto oqwwacmigasucsoc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); oqwwacmigasucsoc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\x23{$mqsuiayuwmwqaqwm}\43", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto egkeqqgakieyimuq; } return $this->eecucukcqkqysiau(__FUNCTION__); egkeqqgakieyimuq: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\x63\x61\x63\x68\145\137\x72\145\x6a\145\x63\x74\137\x75\x72\151"); if ($escsaeeosigewsme) { goto cakuguiciaiaeukg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); cakuguiciaiaeukg: $yciaosuiyeieceug = !preg_match("\43\x5e\x28{$escsaeeosigewsme}\51\x24\x23\x69", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\120\137\x55\x53\105\x52\x5f\101\107\x45\x4e\x54"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wswikooyuaaouqgk; } return $this->eecucukcqkqysiau(__FUNCTION__); wswikooyuaaouqgk: $yygmoeguaqyumuui = [ "\110\124\x54\x50\137\x43\106\x5f\103\117\116\116\x45\x43\124\111\x4e\107\x5f\111\120", "\110\124\124\x50\x5f\103\x4c\111\x45\116\124\137\111\x50", "\110\x54\x54\x50\x5f\x58\x5f\x46\117\x52\127\x41\122\x44\105\x44\137\x46\117\x52", "\x48\124\124\x50\137\130\x5f\x46\x4f\122\127\x41\122\x44\x45\x44", "\x48\124\x54\120\137\130\137\103\114\125\x53\124\105\x52\x5f\x43\x4c\x49\105\116\x54\137\111\120", "\x48\x54\x54\x50\x5f\130\137\122\x45\101\114\137\111\120", "\x48\124\124\120\x5f\106\x4f\122\x57\x41\122\x44\105\104\x5f\106\x4f\122", "\x48\124\x54\x50\137\x46\117\x52\127\x41\x52\104\105\x44", "\122\x45\115\x4f\x54\x45\x5f\x41\104\104\122", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto uaicwcqwauosmsqm; } $kucumcusyyckayas = explode("\x2c", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto cumeycwmuuqawwyu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); cumeycwmuuqawwyu: uaicwcqwauosmsqm: ckwmkquuyyugigom: } awwaiioyywmokwsm: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\x30\x2e\60\56\x30\56\x30"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto gsqcoqqsioiyoykq; } return $this->eecucukcqkqysiau(__FUNCTION__); gsqcoqqsioiyoykq: $yywgiquyoymymqwk = [ "\x32\60\70\x2e\x37\x30\56\62\x34\67\56\x31\65\x37" => '', "\61\x37\62\x2e\62\65\65\56\64\x38\x2e\x31\x33\x30" => '', "\61\x37\x32\56\x32\65\65\56\64\70\56\61\63\61" => '', "\x31\x37\62\x2e\62\x35\65\56\x34\70\x2e\61\x33\x32" => '', "\61\67\62\x2e\x32\x35\65\56\64\x38\56\x31\63\x33" => '', "\61\x37\62\56\62\x35\65\x2e\64\70\x2e\61\63\x34" => '', "\x31\x37\62\x2e\x32\65\65\x2e\64\x38\x2e\x31\63\65" => '', "\x31\67\x32\x2e\62\65\x35\56\64\70\x2e\x31\x33\66" => '', "\x31\x37\62\56\62\65\x35\x2e\64\x38\x2e\61\x33\x37" => '', "\61\x37\62\x2e\62\x35\65\x2e\x34\70\x2e\x31\63\70" => '', "\x31\67\62\56\x32\65\65\x2e\64\x38\56\61\63\71" => '', "\x31\x37\x32\x2e\62\65\65\x2e\x34\x38\x2e\x31\64\x30" => '', "\x31\x37\x32\x2e\x32\x35\x35\x2e\64\x38\x2e\61\64\x31" => '', "\61\67\x32\56\x32\65\x35\x2e\64\x38\x2e\x31\x34\x32" => '', "\x31\67\62\56\x32\65\65\x2e\x34\70\x2e\x31\x34\63" => '', "\x31\67\62\x2e\x32\65\65\56\64\70\x2e\61\x34\64" => '', "\x31\x37\x32\56\x32\65\x35\x2e\64\70\56\61\64\65" => '', "\x31\67\62\x2e\x32\65\65\56\64\x38\56\61\64\66" => '', "\x31\x37\x32\x2e\x32\65\65\56\64\70\x2e\61\64\x37" => '', "\x35\x32\56\62\x32\71\56\61\x32\62\56\62\64\x30" => '', "\61\x30\x34\x2e\62\x31\64\56\67\62\56\x31\60\x31" => '', "\x31\x33\56\x36\66\x2e\x37\x2e\61\x31" => '', "\61\x33\56\70\65\x2e\x32\64\x2e\70\x33" => '', "\x31\x33\56\70\65\x2e\62\x34\x2e\71\60" => '', "\61\x33\x2e\70\x35\x2e\x38\x32\56\x32\66" => '', "\64\x30\56\x37\x34\56\62\x34\62\x2e\62\65\x33" => '', "\x34\60\x2e\x37\x34\x2e\62\64\x33\x2e\61\x33" => '', "\x34\60\56\67\x34\x2e\x32\x34\x33\x2e\61\x37\66" => '', "\61\60\64\x2e\62\61\64\x2e\x34\x38\x2e\62\64\67" => '', "\61\x35\x37\56\65\65\56\61\x38\x39\56\61\70\x39" => '', "\61\60\x34\56\x32\61\x34\x2e\x31\61\x30\x2e\61\63\65" => '', "\x37\x30\56\x33\67\56\70\63\56\62\64\60" => '', "\x36\65\x2e\65\62\56\63\x36\56\62\65\x30" => '', "\x31\x33\56\67\70\x2e\x32\x31\x36\56\x35\x36" => '', "\x35\62\56\61\66\62\x2e\x32\x31\x32\x2e\x31\66\x33" => '', "\62\x33\56\x39\x36\x2e\x33\64\x2e\x31\60\65" => '', "\66\x35\56\65\x32\56\x31\61\x33\x2e\x32\x33\66" => '', "\61\67\62\x2e\x32\x35\65\56\66\61\x2e\63\x34" => '', "\61\67\x32\x2e\62\65\65\x2e\66\61\56\x33\65" => '', "\x31\x37\62\x2e\x32\x35\x35\x2e\x36\x31\x2e\x33\x36" => '', "\x31\67\62\x2e\x32\65\x35\56\x36\61\56\x33\67" => '', "\x31\x37\x32\56\62\x35\65\x2e\x36\x31\56\x33\x38" => '', "\x31\x37\x32\56\62\65\x35\x2e\x36\x31\x2e\x33\71" => '', "\61\x37\62\x2e\62\x35\x35\x2e\66\x31\x2e\64\60" => '', "\x35\62\56\62\63\x37\x2e\x32\63\x35\x2e\61\x38\x35" => '', "\x35\x32\x2e\62\63\x37\56\62\65\x30\x2e\67\63" => '', "\65\62\56\62\63\67\x2e\x32\63\x36\x2e\x31\x34\65" => '', "\61\x30\x34\x2e\64\61\x2e\62\x2e\61\71" => '', "\61\x39\x31\x2e\62\63\x35\56\x39\x38\x2e\61\x36\x34" => '', "\x31\71\61\x2e\x32\x33\x35\56\x39\71\x2e\62\62\x31" => '', "\x31\x39\61\56\x32\63\x32\56\61\x39\64\56\x35\61" => '', "\x31\x30\64\x2e\62\x31\x31\56\61\64\x33\56\70" => '', "\x31\60\x34\x2e\x32\61\61\x2e\x31\x36\65\x2e\x35\63" => '', "\x35\62\56\x31\x37\x32\x2e\x31\64\56\70\x37" => '', "\64\60\x2e\70\x33\56\70\x39\56\62\x31\x34" => '', "\65\62\x2e\x31\x37\65\x2e\x35\67\56\70\x31" => '', "\62\60\56\x31\70\70\x2e\66\x33\56\x31\x35\61" => '', "\62\60\x2e\65\x32\x2e\63\x36\x2e\64\x39" => '', "\x35\62\x2e\x32\x34\x36\56\x31\66\65\x2e\x31\x35\63" => '', "\65\61\x2e\61\x34\x34\x2e\61\x30\62\x2e\x32\x33\x33" => '', "\61\63\56\67\x36\x2e\71\67\56\62\x32\64" => '', "\61\60\62\x2e\x31\63\63\x2e\61\66\x39\x2e\x36\66" => '', "\x35\x32\x2e\x32\63\61\x2e\61\x39\x39\56\x31\x37\60" => '', "\x31\x33\56\65\63\x2e\x31\x36\62\x2e\67" => '', "\x34\60\56\x31\x32\63\x2e\62\61\x38\x2e\71\64" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto goaowamiyyamueiw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); goaowamiyyamueiw: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\x50\x5f\x55\x53\105\122\x5f\101\x47\x45\x4e\124"); if ($uowwycywwssskuys) { goto iaomqomgiwiegoca; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); iaomqomgiwiegoca: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\43\120\x69\x6e\147\144\157\155\120\x61\147\x65\123\160\145\145\144\174\104\141\x72\145\x42\157\157\163\x74\x7c\x47\x6f\x6f\x67\154\x65\x7c\120\124\123\x54\174\103\150\x72\157\155\145\x2d\114\x69\147\150\x74\x68\x6f\165\x73\145\x7c\127\x50\x20\x52\157\143\153\x65\x74\43\x69", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\x45\x51\x55\105\x53\x54\x5f\x55\122\x49", ''); if (!$iyiwooigkweeewey) { goto ysweqawmawicakeo; } $iyiwooigkweeewey = "\x2f" . ltrim($iyiwooigkweeewey, "\x2f"); ysweqawmawicakeo: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto owisckseoogsugqq; } return ''; owisckseoogsugqq: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto ookcgumoacskyymy; } return $magawcseesgowoeo; ookcgumoacskyymy: return "{$magawcseesgowoeo}\x3f{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto cuseccewekgcgkyg; } $magawcseesgowoeo = explode("\x3f", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); cuseccewekgcgkyg: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\105\x51\125\105\x53\x54\x5f\x4d\x45\124\110\x4f\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto makomwwyomweyamm; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\143\141\143\x68\x65\137\x69\147\x6e\x6f\x72\145\x64\x5f\160\x61\x72\x61\x6d\145\164\x65\162\163"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto kgysyqkoqgwmoscq; } ksort($eyagkkkqkwcuygso); kgysyqkoqgwmoscq: makomwwyomweyamm: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; acesyuieuuqwgkwm: if (!(strpos($euueacigmgoqkimu, "\56\x2f") !== false || strpos($euueacigmgoqkimu, "\57\x2e") !== false || "\x2e" === $euueacigmgoqkimu || "\56\x2e" === $euueacigmgoqkimu)) { goto oqwcmgwimeisusoe; } if (strpos($euueacigmgoqkimu, "\x2e\x2e\x2f") === 0) { goto kwoyiysciqumswcy; } if (strpos($euueacigmgoqkimu, "\56\57") === 0) { goto wmaeicoyyciuaiuy; } if (strpos($euueacigmgoqkimu, "\57\56\x2f") === 0) { goto wsemeeocquawyauo; } if ("\x2f\56" === $euueacigmgoqkimu) { goto kkewoqqowugagwoy; } if (strpos($euueacigmgoqkimu, "\57\x2e\56\x2f") === 0) { goto qumkwsqqocooyuoq; } if ("\57\x2e\x2e" === $euueacigmgoqkimu) { goto owgakkqgckqcegoi; } if ("\x2e" === $euueacigmgoqkimu || "\56\56" === $euueacigmgoqkimu) { goto ugswokwmkumcmigc; } if (strpos($euueacigmgoqkimu, "\57", 1) !== false) { goto asaowisseacciyia; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto qiaaqkymeuuueoqk; asaowisseacciyia: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\57", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); qiaaqkymeuuueoqk: goto gwiaimosqoiquwkc; ugswokwmkumcmigc: $euueacigmgoqkimu = ''; gwiaimosqoiquwkc: goto cigesysuauaiccms; owgakkqgckqcegoi: $euueacigmgoqkimu = "\57"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); cigesysuauaiccms: goto gcskyqewysqaceeg; qumkwsqqocooyuoq: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); gcskyqewysqaceeg: goto wwswmaewcaisauei; kkewoqqowugagwoy: $euueacigmgoqkimu = "\x2f"; wwswmaewcaisauei: goto ocgkwqqmgasuoies; wsemeeocquawyauo: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); ocgkwqqmgasuoies: goto ooysmgyeqoiesgqm; wmaeicoyyciuaiuy: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); ooysmgyeqoiesgqm: goto aaogeemgkogagkai; kwoyiysciqumswcy: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); aaogeemgkogagkai: goto acesyuieuuqwgkwm; oqwcmgwimeisusoe: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto qqmmycmsoqegcqqw; } $icwicymcioeyeyek["\x70\x65\162\155\141\x6c\151\156\x6b"] = $this->aakgigyaookyiaqk(); $this->oaumimwssciwumys($uamcoiueqaamsqma, $icwicymcioeyeyek); qqmmycmsoqegcqqw: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto isqwwmikecauwyuc; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); isqwwmikecauwyuc: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto oiiqqgyqmggyiums; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); oiiqqgyqmggyiums: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\165\162\154"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\x6d\145\x73\x73\x61\147\x65" => $uamcoiueqaamsqma, "\x63\157\x6e\x74\x65\170\x74" => $icwicymcioeyeyek]; } }
