<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668daba5a468b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\162\x69" => 1, "\163\163\154" => 0, "\x77\160\137\64\x30\x34" => 1, "\x73\x65\x61\162\x63\x68" => 1, "\155\157\142\151\154\x65" => 1, "\151\163\x5f\x68\164\x6d\154" => 1, "\x71\x75\x65\162\x79\x5f\163\164\162\x69\x6e\x67" => 1, "\x64\x6f\156\x6f\x74\143\x61\143\x68\x65\x70\141\x67\145" => 1, "\162\145\x6a\x65\143\164\x65\x64\137\143\157\157\x6b\151\x65" => 1, "\x6d\x61\x6e\x64\141\164\x6f\x72\171\x5f\x63\157\x6f\153\151\x65" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\164\145\163\164\163"])) { goto ysiqakyaiooyscwy; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\164\x65\163\164\163"]); ysiqakyaiooyscwy: if (!(!isset($ywmkwiwkosakssii["\x63\x6f\157\153\x69\x65\x73"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto auumaoycmsmsgigs; } $ywmkwiwkosakssii["\x63\x6f\x6f\153\151\x65\x73"] = $_COOKIE; auumaoycmsmsgigs: if (!(!isset($ywmkwiwkosakssii["\x70\157\163\164"]) && !empty($_POST) && is_array($_POST))) { goto ousmyagwsiooumos; } $ywmkwiwkosakssii["\160\157\163\x74"] = $_POST; ousmyagwsiooumos: if (!(!isset($ywmkwiwkosakssii["\x67\145\164"]) && !empty($_GET) && is_array($_GET))) { goto qeuyekusasqmcqms; } $ywmkwiwkosakssii["\147\x65\x74"] = $_GET; qeuyekusasqmcqms: $this->get = !empty($ywmkwiwkosakssii["\x67\145\x74"]) && is_array($ywmkwiwkosakssii["\x67\x65\164"]) ? $ywmkwiwkosakssii["\x67\145\x74"] : []; $this->post = !empty($ywmkwiwkosakssii["\160\157\163\x74"]) && is_array($ywmkwiwkosakssii["\160\x6f\x73\x74"]) ? $ywmkwiwkosakssii["\160\x6f\163\x74"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\x63\x6f\x6f\153\x69\x65\163"]) && is_array($ywmkwiwkosakssii["\x63\157\157\153\151\145\163"]) ? $ywmkwiwkosakssii["\x63\x6f\157\x6b\151\x65\x73"] : []; if (!$this->ayueggmoqeeukqmq()) { goto yiceawuuiusakwiq; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\x77\160\137\x63\165\x73\164\x6f\155\x69\x7a\x65" => '']); yiceawuuiusakwiq: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->aiukiaokcgsiomew()) { goto sgocecweikecwwgq; } $this->yauwooaeicgosquo("\x44\145\166\40\x4d\x6f\x64\x65\40\x45\x6e\141\x62\x6c\x65\144\40\x61\156\x64\x20\141\x6c\154\x20\x72\x65\x71\x75\145\163\x74\x20\151\x73\x20\142\x79\160\x61\163\x73\x2e"); return false; sgocecweikecwwgq: if (!$this->kgkoeoeseyuugaao()) { goto qwisiamkmkkwucyo; } $this->yauwooaeicgosquo("\x52\x6f\142\x6f\x74\x73\x2e\x74\x78\164\x20\x6f\x72\40\x2e\x68\x74\141\x63\x63\x65\x73\x73\x20\146\151\154\x65\40\x69\163\40\145\x78\143\154\165\x64\145\144\56"); return false; qwisiamkmkkwucyo: if (!$this->gymgcceeqssmesiu()) { goto yqcusaeysomccaok; } $this->yauwooaeicgosquo("\120\110\120\x2c\40\x58\x4d\114\54\x20\x6f\162\x20\x58\x53\114\x20\x66\x69\154\x65\x20\x69\x73\40\145\170\143\154\165\144\145\144\56"); return false; yqcusaeysomccaok: if (!$this->goecwaaykqoaaagg()) { goto iwkckkeimmeoquyq; } $this->yauwooaeicgosquo("\x41\144\x6d\x69\156\40\157\x72\x20\101\112\x41\x58\x20\x55\x52\114\40\x69\x73\40\x65\170\x63\x6c\x75\144\145\x64\56"); return false; iwkckkeimmeoquyq: if (!$this->sgsscqasgeyeicoe()) { goto masakmomqmeocqqg; } $this->yauwooaeicgosquo("\101\x64\x6d\151\156\x20\x6f\162\40\101\112\101\130\40\125\x52\114\40\151\163\40\145\x78\x63\x6c\x75\x64\145\144\x2e"); return false; masakmomqmeocqqg: if ($this->gooeyogikcusgwuu()) { goto yksywwikmeksikqc; } $this->yauwooaeicgosquo("\122\x65\x71\165\145\x73\164\40\x6d\145\x74\x68\x6f\144\40\151\163\x20\156\x6f\164\x20\x61\x6c\154\157\167\x65\144\56\40\x50\141\x67\145\x20\x63\x61\156\x6e\157\x74\40\x62\145\40\x63\x61\143\x68\x65\144\56", ["\162\145\x71\x75\145\163\164\x5f\x6d\145\164\150\x6f\144" => $this->ciyocmkwssocskiy()]); return false; yksywwikmeksikqc: if ($this->cskwmweqysskwckg()) { goto yoqsigmoyaaceqky; } $this->lastError = []; return true; yoqsigmoyaaceqky: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\163\165\143\x63\145\x73\163"]) { goto suqckoccuyeeymww; } $this->yauwooaeicgosquo("\116\x6f\40\x63\x6f\x6e\x66\x69\147\40\x66\x69\x6c\x65\x20\x66\x6f\x75\x6e\144", ["\143\157\x6e\x66\151\x67\137\x70\x61\164\x68" => $uiewakwqscemywuo["\160\141\164\150"]]); return false; suqckoccuyeeymww: if (!($this->cskwmweqysskwckg("\x71\x75\x65\x72\x79\137\x73\164\x72\x69\x6e\147") && !$this->koguieumooaesyww())) { goto giugwaeuwaomossq; } $this->yauwooaeicgosquo("\x51\x75\145\x72\x79\x20\163\164\x72\151\x6e\147\x20\x55\x52\114\40\151\x73\40\145\170\143\154\165\x64\145\144\x2e", $_GET); return false; giugwaeuwaomossq: if (!($this->cskwmweqysskwckg("\x73\x73\x6c") & !$this->eqwgocqwoyyykwke())) { goto acgqaeakoyasgkku; } $this->yauwooaeicgosquo("\x53\x53\114\40\x63\141\x63\x68\x65\x20\156\157\164\40\x61\x70\x70\x6c\151\145\144\40\164\157\40\160\141\x67\x65\56"); return false; acgqaeakoyasgkku: if (!($this->cskwmweqysskwckg("\165\x72\x69") && !$this->qweiomkkuikwugks())) { goto sycougcyeqmeiagk; } $this->yauwooaeicgosquo("\x50\x61\147\145\x20\151\163\40\x65\170\143\154\165\x64\x65\144\56"); return false; sycougcyeqmeiagk: if (!($this->cskwmweqysskwckg("\x72\145\152\145\x63\164\x65\144\x5f\x63\x6f\x6f\153\x69\x65") && $this->cokqaygwwygweuyk())) { goto ssagcgqaucssyego; } $this->yauwooaeicgosquo("\105\170\143\x6c\165\x64\145\144\x20\x63\157\157\x6b\x69\145\x20\x66\157\165\156\144\56", ["\x65\170\x63\x6c\x75\x64\x65\x64\x5f\x63\157\x6f\153\151\145\163" => $this->cokqaygwwygweuyk()]); return false; ssagcgqaucssyego: if (!($this->cskwmweqysskwckg("\155\141\x6e\x64\x61\164\x6f\162\x79\x5f\143\x6f\x6f\153\151\145") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto mqgeseysuwcaqwiy; } $this->yauwooaeicgosquo("\115\151\163\163\x69\x6e\x67\40\x6d\x61\156\x64\141\164\157\162\x79\x20\x63\157\x6f\153\x69\145\72\x20\160\141\x67\x65\40\x6e\x6f\164\x20\160\162\x6f\143\145\x73\163\x65\x64\x2e", ["\x6d\x69\163\163\x69\156\x67\137\143\x6f\157\153\151\x65\163" => $this->qgymyeqwqaiwmmea()]); return false; mqgeseysuwcaqwiy: if (!($this->cskwmweqysskwckg("\x75\x73\x65\162\x5f\141\147\x65\x6e\164") && !$this->mqiqsuksgyekwkii())) { goto ekoqieigyoeyauqa; } $this->yauwooaeicgosquo("\x55\x73\x65\x72\x20\x41\147\x65\x6e\x74\40\151\163\40\x65\170\143\154\x75\x64\x65\144\x2e", ["\x75\x73\x65\x72\137\141\x67\145\156\164" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\x54\x50\137\x55\x53\x45\x52\x5f\101\107\105\116\x54")]); return false; ekoqieigyoeyauqa: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto cuwcsamuuqyuyqsu; } $this->yauwooaeicgosquo("\x42\165\x66\146\145\162\x20\x63\x6f\156\x74\x65\x6e\x74\40\x75\156\144\145\162\x20\x32\x35\x35\40\x63\x68\141\x72\x61\x63\x74\145\162\x73\56"); return false; cuwcsamuuqyuyqsu: if (!(http_response_code() !== 200)) { goto mimacwyuueomgwwy; } $this->yauwooaeicgosquo("\x50\x61\147\x65\40\151\163\x20\156\x6f\x74\x20\x61\x20\62\60\60\40\110\x54\124\120\40\x72\145\163\160\157\156\x73\x65\x20\141\x6e\x64\x20\x63\x61\156\156\157\x74\40\x62\x65\40\x63\141\143\x68\145\x64\x2e"); return false; mimacwyuueomgwwy: if (!($this->cskwmweqysskwckg("\144\x6f\x6e\157\164\x6f\x70\x74\x69\155\151\x7a\x65\160\x61\147\x65") && $this->cowcgqokiosgaqic())) { goto ksckqkmwiqggykke; } $this->yauwooaeicgosquo("\104\x4f\x4e\x54\117\120\x54\x49\115\111\132\105\x44\120\x41\107\x45\40\151\x73\40\x64\145\146\x69\156\x65\144\56\x20\120\x61\x67\145\x20\143\141\156\x6e\x6f\164\x20\142\x65\40\x63\141\x63\150\145\144\x2e"); return false; ksckqkmwiqggykke: if (!($this->cskwmweqysskwckg("\x77\160\x5f\64\x30\x34") && $this->kmmyuiwaogukwqqi())) { goto igwkcikeyoowosoi; } $this->yauwooaeicgosquo("\127\x50\40\64\60\x34\x20\x70\x61\147\145\40\x69\163\40\x65\170\143\x6c\x75\144\145\x64\x2e"); return false; igwkcikeyoowosoi: if (!($this->cskwmweqysskwckg("\163\x65\x61\x72\143\150") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto iqsgossweywksoia; } $this->yauwooaeicgosquo("\x53\x65\141\x72\143\150\x20\x70\x61\x67\145\x20\151\163\40\x65\170\143\x6c\165\144\145\144\56"); return false; iqsgossweywksoia: if (!$this->cskwmweqysskwckg("\151\163\x5f\150\164\x6d\x6c")) { goto cuommomwmsackoqc; } if (!($this->cmaecekuqkwmemms("\x52\x45\123\124\137\x52\x45\121\125\105\123\x54") || $this->gaiygescoqgyusaa())) { goto awaqksikyomsuaeo; } unset($this->tests["\x69\163\137\150\164\155\x6c"]); awaqksikyomsuaeo: cuommomwmsackoqc: if (!($this->cskwmweqysskwckg("\x69\163\137\x68\x74\155\x6c") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto ggeoqeowscwkeumy; } $this->yauwooaeicgosquo("\x4e\157\x20\143\154\157\x73\x69\156\x67\40\x3c\57\x68\x74\x6d\x6c\x3e\x20\167\x61\163\40\146\157\x75\x6e\x64\56"); return false; ggeoqeowscwkeumy: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\160\x72\137\x6f\160\164\x69\155\x69\x7a\141\164\x69\157\x6e\x5f\141\154\x6c\x6f\x77\x5f\x74\x6f\137\x73\x74\141\x72\x74\x5f\x62\x75\x66\146\145\x72\137\x70\162\157\x63\145\163\163", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto qyeswawykmasuqye; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto uwaimsisescsgyqk; qyeswawykmasuqye: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); uwaimsisescsgyqk: return apply_filters("\160\162\x5f\157\x70\x74\151\x6d\x69\x7a\x61\164\x69\x6f\156\x5f\x68\x61\x73\x5f{$ymqmyyeuycgmigyo}\137\x74\145\x73\164", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\57\74\x5c\x73\x2a\x5c\57\x5c\163\52\150\164\155\154\134\163\x2a\x3e\57\x69", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\57\x28\x3f\72\x2e\53\57\51\77" . $wp_rewrite->feed_base . "\50\x3f\72\57\50\x3f\72\56\53\57\77\x29\77\51\x3f\44"; return (bool) preg_match("\x23\x5e\x28{$uckmmkmoeikwsiqg}\51\44\43\151", $this->gygiweeesqqckgme()); } public function aiukiaokcgsiomew() { return $this->aceaeommyuooiqge()->get("\144\x65\x76\x5f\155\x6f\144\145"); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uqcsksaywyqeumig; } return $this->eecucukcqkqysiau(__FUNCTION__); uqcsksaywyqeumig: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto yggmaskeguaqkusc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); yggmaskeguaqkusc: $ucasskoyoewwmmii = ["\162\157\142\157\164\163\x2e\x74\170\164", "\56\150\164\141\143\x63\145\163\163"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\x2f" . $qogsmwakwacwqogk))) { goto kwmiwaecqcgiaqye; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kwmiwaecqcgiaqye: jsmisuccwyukksgc: } ukwoswyyogmsygqg: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yqicwmekwuoywyus; } return $this->eecucukcqkqysiau(__FUNCTION__); yqicwmekwuoywyus: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto eekaiaeqewiqkkgm; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto gkoaeuekqockuoiq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gkoaeuekqockuoiq: eekaiaeqewiqkkgm: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kceuusiekagyeoys; } return $this->eecucukcqkqysiau(__FUNCTION__); kceuusiekagyeoys: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto uyeyscsaigimsqwq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); uyeyscsaigimsqwq: if (!(strtolower($iyiwooigkweeewey) === "\x2f\151\x6e\144\x65\x78\56\x70\150\x70")) { goto mwieyyqamgwicgco; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); mwieyyqamgwicgco: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\160\150\160" => 1, "\x78\155\x6c" => 1, "\170\163\154" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\104\x4f\111\x4e\x47\x5f\101\x4a\101\x58"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\x50\x53")), ["\x6f\x6e", "\61"]) || "\64\64\x33" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\x45\122\x56\105\122\x5f\x50\117\x52\x54"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\x70\137\143\x75\x73\164\157\x6d\151\x7a\x65"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\107\x45\x54" => 1, "\x48\x45\101\104" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wkiymcoqqiigqaaw; } return $this->eecucukcqkqysiau(__FUNCTION__); wkiymcoqqiigqaaw: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto esqwswmoegiqcckg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); esqwswmoegiqcckg: $yccgiaiouekkouay = ["\163" => 1, "\154\x61\x6e\x67" => 1, "\x70\x65\162\x6d\141\154\151\x6e\x6b\x5f\x6e\141\155\145" => 1, "\154\160\x2d\166\141\162\x69\x61\164\151\x6f\x6e\x2d\151\144" => 1, "\x58\104\x45\102\x55\x47\x5f\123\105\x53\x53\x49\x4f\x4e\x5f\123\x54\x41\x52\124" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto qmokwkocmcyeyesc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qmokwkocmcyeyesc: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\143\141\x63\150\145\137\x71\x75\145\x72\171\137\x73\x74\x72\x69\156\x67\163"); if ($yccgiaiouekkouay) { goto mosuacsuaasssciu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); mosuacsuaasssciu: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qksckewucmosemuo; } return $this->eecucukcqkqysiau(__FUNCTION__); qksckewucmosemuo: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto kmooekeyemqgucci; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kmooekeyemqgucci: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto skuuyysooocugyww; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); skuuyysooocugyww: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto skwusmoyomgqkimm; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; skwusmoyomgqkimm: mkgmaguyswskyioa: } cmmusgkieoqyymgs: if (empty($eiocugauqgouiuyi)) { goto usyckeewsgwaysam; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); usyckeewsgwaysam: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto gicuuwuuuwumyooa; } return $this->eecucukcqkqysiau(__FUNCTION__); gicuuwuuuwumyooa: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto kakkuyeccaacewyo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kakkuyeccaacewyo: $yiycakoikkyuokgk = array_flip(explode("\174", $this->aceaeommyuooiqge()->get("\143\x61\143\150\145\137\155\141\x6e\x64\141\164\x6f\162\171\x5f\x63\157\157\153\151\x65\x73"))); if ($this->wemyikwikgwqwuoc()) { goto cysgqimowcqoqqsc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); cysgqimowcqoqqsc: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto casgoamcqkekgeeo; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); casgoamcqkekgeeo: qsokkkyoackoycie: } ismeikacqqyqcmqe: if (!empty($yiycakoikkyuokgk)) { goto yseyyukqaowwouua; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yseyyukqaowwouua: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\160\x72\x5f\157\160\x74\x69\155\151\172\141\x74\x69\x6f\x6e\137\157\166\x65\x72\162\151\144\145\137\144\x6f\156\164\x5f\x6f\160\164\151\x6d\x69\x7a\x65", $this->cmaecekuqkwmemms("\120\122\x5f\x4f\x50\124\111\x4d\x49\x5a\x41\124\111\x4f\x4e\x5f\104\x4f\x4e\124\137\x4f\120\124\111\115\x49\132\x45", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\x69\163\137\x34\x30\64") || is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\x69\x73\137\163\x65\x61\162\143\x68") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\x70\x72\x5f\157\x70\x74\151\155\151\172\141\x74\x69\157\156\137\157\160\x74\x69\x6d\151\172\x65\137\x73\x65\x61\x72\143\x68", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\x63\141\x63\x68\145\137\x73\x73\154"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qcgyggiaowuqswuw; } return $this->eecucukcqkqysiau(__FUNCTION__); qcgyggiaowuqswuw: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto sooecucuakgkuyis; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); sooecucuakgkuyis: if (!$this->aceaeommyuooiqge()->get("\155\157\142\151\154\x65\137\143\x61\143\150\145")) { goto ywqakqkmmcoceqka; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ywqakqkmmcoceqka: $wayquiskgeuoqamk = "\62\56\60\134\x20\115\115\x50\174\62\64\x30\170\x33\62\60\x7c\64\x30\x30\130\x32\x34\60\174\x41\166\141\x6e\164\x47\x6f\174\102\x6c\x61\x63\x6b\x42\x65\162\x72\171\x7c\x42\x6c\x61\x7a\x65\x72\x7c\x43\145\154\154\x70\150\157\x6e\145\174\104\x61\156\147\145\x72\x7c\x44\x6f\103\157\x4d\157\x7c\105\x6c\141\x69\x6e\145\x2f\63\56\x30\x7c\105\x75\144\157\162\x61\x57\x65\142\174\x47\157\x6f\147\154\x65\142\x6f\164\55\115\157\142\x69\x6c\x65\174\x68\151\x70\x74\157\x70\174\x49\x45\115\x6f\142\x69\154\145\x7c\x4b\x59\117\103\105\122\x41\x2f\x57\x58\x33\x31\x30\x4b\x7c\x4c\x47\57\x55\x39\x39\x30\x7c\115\x49\x44\120\x2d\62\56\174\x4d\115\105\x46\62\60\x7c\x4d\x4f\x54\x2d\126\x7c\x4e\145\164\x46\162\x6f\x6e\164\174\116\x65\167\x74\174\116\151\156\164\145\156\144\157\134\40\127\x69\151\x7c\116\x69\x74\162\x6f\x7c\116\157\x6b\x69\x61\174\117\160\145\162\141\134\x20\115\151\156\151\174\120\141\x6c\x6d\x7c\x50\154\141\x79\x53\x74\141\164\x69\x6f\x6e\134\40\120\157\x72\164\x61\x62\x6c\145\174\160\157\162\x74\141\154\x6d\155\155\174\120\x72\x6f\x78\151\x6e\x65\x74\174\x50\162\157\170\x69\x4e\145\164\x7c\x53\110\x41\122\120\55\x54\121\x2d\107\x58\61\x30\174\123\x48\x47\x2d\x69\x39\60\60\174\x53\x6d\141\x6c\154\174\123\x6f\x6e\171\105\x72\x69\143\x73\163\x6f\156\174\123\x79\x6d\142\x69\x61\x6e\x5c\40\x4f\x53\x7c\x53\171\155\x62\x69\141\156\x4f\123\174\124\123\62\x31\151\55\x31\60\174\125\120\x2e\102\162\157\167\x73\145\x72\x7c\125\x50\56\114\x69\156\153\174\167\x65\x62\117\123\x7c\x57\x69\x6e\x64\x6f\167\163\134\x20\103\105\x7c\127\x69\x6e\127\x41\x50\174\x59\141\x68\x6f\x6f\x53\x65\145\153\x65\162\57\x4d\x31\x41\61\55\122\62\104\62\x7c\151\120\x68\157\x6e\x65\174\x69\120\x6f\x64\x7c\x41\x6e\x64\x72\157\151\144\174\102\154\x61\x63\x6b\x42\x65\162\x72\x79\71\x35\x33\60\x7c\114\x47\55\124\125\x39\x31\x35\134\x20\117\142\151\147\157\174\114\x47\x45\x5c\40\x56\130\174\x77\145\x62\117\123\174\x4e\157\x6b\151\x61\65\x38\60\60"; if (!preg_match("\43\136\56\x2a\x28{$wayquiskgeuoqamk}\x29\x2e\52\43\x69", $uowwycywwssskuys)) { goto kwsqgqmwyyeykgum; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kwsqgqmwyyeykgum: $wayquiskgeuoqamk = "\x77\63\143\134\40\x7c\167\x33\143\x2d\174\141\143\x73\55\174\x61\x6c\141\x76\x7c\141\x6c\x63\x61\x7c\x61\155\157\151\174\x61\165\x64\x69\174\141\x76\x61\156\x7c\142\x65\156\x71\x7c\x62\151\x72\x64\x7c\142\x6c\141\x63\174\x62\x6c\141\172\174\142\x72\x65\x77\174\143\145\154\x6c\174\143\x6c\x64\143\174\143\155\144\55\174\x64\x61\156\x67\x7c\x64\157\143\157\x7c\145\162\x69\143\x7c\150\151\160\x74\174\x68\164\143\x5f\x7c\151\x6e\156\x6f\x7c\151\160\x61\161\x7c\x69\x70\x6f\x64\x7c\152\151\x67\163\174\x6b\x64\x64\x69\174\x6b\x65\152\151\174\x6c\x65\156\157\174\x6c\147\x2d\x63\174\154\x67\55\144\x7c\154\x67\55\x67\x7c\x6c\147\145\55\174\154\147\x2f\165\174\x6d\x61\165\x69\174\155\x61\x78\157\x7c\x6d\x69\x64\x70\x7c\155\x69\164\163\174\x6d\155\x65\146\x7c\x6d\x6f\142\x69\x7c\155\x6f\x74\55\x7c\155\x6f\x74\x6f\174\155\x77\x62\x70\174\156\x65\143\55\x7c\x6e\145\x77\164\x7c\156\x6f\x6b\151\174\160\141\154\155\174\x70\x61\156\141\x7c\160\141\156\164\x7c\x70\x68\151\x6c\x7c\160\154\141\171\174\x70\157\x72\x74\174\x70\x72\x6f\x78\174\x71\167\x61\x70\x7c\163\x61\147\x65\174\x73\x61\155\163\x7c\163\x61\x6e\x79\x7c\x73\143\x68\55\174\x73\145\x63\x2d\x7c\x73\x65\156\x64\174\x73\x65\162\x69\x7c\x73\x67\x68\x2d\x7c\163\150\x61\x72\x7c\163\151\x65\55\174\x73\151\145\155\174\163\x6d\141\x6c\x7c\163\x6d\x61\x72\174\163\x6f\x6e\171\x7c\163\160\150\x2d\174\163\171\x6d\142\174\x74\x2d\155\x6f\174\164\x65\x6c\151\x7c\x74\x69\155\x2d\x7c\x74\x6f\163\x68\174\164\x73\155\55\x7c\x75\160\147\x31\x7c\165\x70\163\151\x7c\x76\153\55\166\174\x76\x6f\x64\x61\174\167\x61\x70\55\x7c\x77\141\x70\x61\174\167\x61\160\x69\174\167\141\x70\x70\x7c\167\141\x70\162\x7c\x77\x65\142\143\x7c\167\x69\156\x77\x7c\167\x69\x6e\x77\174\170\144\x61\134\x20\174\170\x64\x61\55"; if (!preg_match("\x23\x5e\50{$wayquiskgeuoqamk}\51\56\52\x23\151", $uowwycywwssskuys)) { goto emauuoieewwoeyqq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); emauuoieewwoeyqq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto koukiyqaccegmquc; } return $this->eecucukcqkqysiau(__FUNCTION__); koukiyqaccegmquc: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto ekakkiuuquqkccse; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ekakkiuuquqkccse: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\143\x61\x63\150\x65\x5f\x72\145\x6a\145\x63\164\x5f\x75\141"); if ($mqsuiayuwmwqaqwm) { goto oqwwacmigasucsoc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); oqwwacmigasucsoc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\43{$mqsuiayuwmwqaqwm}\x23", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto egkeqqgakieyimuq; } return $this->eecucukcqkqysiau(__FUNCTION__); egkeqqgakieyimuq: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\143\141\x63\x68\145\x5f\x72\145\152\145\143\x74\137\165\162\x69"); if ($escsaeeosigewsme) { goto cakuguiciaiaeukg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); cakuguiciaiaeukg: $yciaosuiyeieceug = !preg_match("\x23\x5e\50{$escsaeeosigewsme}\51\44\x23\x69", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\124\x50\x5f\x55\x53\105\x52\137\101\107\105\116\x54"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wswikooyuaaouqgk; } return $this->eecucukcqkqysiau(__FUNCTION__); wswikooyuaaouqgk: $yygmoeguaqyumuui = [ "\110\x54\124\120\x5f\x43\106\x5f\103\x4f\x4e\x4e\x45\x43\x54\111\x4e\x47\x5f\x49\120", "\x48\x54\x54\x50\137\103\x4c\x49\x45\x4e\x54\x5f\x49\120", "\110\124\x54\x50\x5f\x58\x5f\x46\x4f\122\x57\x41\122\x44\105\104\137\106\117\122", "\x48\124\x54\x50\137\130\137\106\x4f\122\x57\x41\122\104\x45\x44", "\x48\124\x54\120\137\x58\137\103\x4c\125\x53\x54\105\122\x5f\x43\x4c\111\105\116\x54\x5f\111\120", "\110\124\x54\x50\137\x58\137\122\x45\101\114\x5f\x49\x50", "\110\x54\x54\120\x5f\x46\117\x52\127\101\x52\x44\105\x44\137\x46\117\x52", "\x48\x54\x54\x50\x5f\x46\117\x52\127\x41\122\x44\105\104", "\x52\x45\x4d\117\124\x45\x5f\x41\104\x44\x52", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto uaicwcqwauosmsqm; } $kucumcusyyckayas = explode("\x2c", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto cumeycwmuuqawwyu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); cumeycwmuuqawwyu: uaicwcqwauosmsqm: ckwmkquuyyugigom: } awwaiioyywmokwsm: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\60\x2e\60\56\x30\x2e\60"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto gsqcoqqsioiyoykq; } return $this->eecucukcqkqysiau(__FUNCTION__); gsqcoqqsioiyoykq: $yywgiquyoymymqwk = [ "\62\x30\70\x2e\x37\60\56\62\64\67\x2e\61\65\x37" => '', "\x31\67\x32\56\62\65\65\x2e\x34\x38\56\x31\x33\60" => '', "\x31\x37\x32\56\62\65\x35\x2e\x34\70\56\x31\x33\61" => '', "\x31\67\62\56\x32\65\65\56\x34\70\56\x31\63\62" => '', "\x31\67\x32\56\x32\65\x35\56\x34\x38\x2e\61\63\63" => '', "\61\x37\62\56\62\x35\x35\56\64\70\56\x31\63\x34" => '', "\61\67\62\x2e\62\x35\65\56\64\70\x2e\x31\x33\65" => '', "\61\67\62\56\62\x35\x35\x2e\x34\70\56\61\63\66" => '', "\61\67\62\x2e\x32\x35\65\x2e\x34\70\56\61\63\67" => '', "\x31\x37\x32\56\x32\65\x35\x2e\x34\x38\x2e\x31\x33\70" => '', "\x31\x37\x32\x2e\x32\x35\x35\x2e\x34\70\56\61\63\71" => '', "\61\67\62\56\x32\x35\x35\56\x34\x38\56\61\64\x30" => '', "\61\67\62\x2e\x32\65\x35\x2e\x34\70\x2e\x31\x34\61" => '', "\61\x37\62\x2e\62\x35\65\56\64\x38\56\x31\x34\62" => '', "\x31\67\x32\x2e\62\x35\x35\x2e\64\x38\x2e\x31\64\x33" => '', "\x31\x37\62\x2e\62\65\65\56\64\70\56\61\64\64" => '', "\x31\67\x32\x2e\62\x35\x35\56\64\x38\x2e\61\x34\x35" => '', "\x31\x37\x32\56\x32\65\x35\56\x34\x38\x2e\61\64\x36" => '', "\61\x37\x32\x2e\x32\65\65\x2e\x34\x38\x2e\61\64\x37" => '', "\x35\x32\x2e\62\x32\x39\x2e\61\62\x32\x2e\x32\64\60" => '', "\61\60\64\56\x32\61\x34\x2e\67\62\56\x31\x30\61" => '', "\61\x33\56\66\66\56\67\56\61\61" => '', "\61\x33\56\70\65\x2e\x32\64\56\x38\x33" => '', "\x31\x33\56\x38\65\x2e\62\64\56\71\60" => '', "\x31\63\x2e\70\x35\x2e\70\x32\x2e\62\x36" => '', "\x34\60\56\67\64\x2e\62\x34\x32\x2e\x32\x35\63" => '', "\x34\x30\56\x37\x34\56\62\64\x33\x2e\61\x33" => '', "\x34\60\x2e\67\x34\56\62\64\x33\56\x31\67\66" => '', "\x31\60\x34\x2e\62\x31\x34\56\x34\70\56\62\x34\67" => '', "\61\65\67\x2e\65\x35\56\x31\x38\71\56\61\70\x39" => '', "\61\60\x34\x2e\62\x31\64\56\61\x31\x30\56\61\63\x35" => '', "\x37\x30\x2e\x33\67\x2e\x38\63\x2e\x32\x34\60" => '', "\66\65\x2e\65\x32\56\x33\66\x2e\62\x35\60" => '', "\61\x33\56\67\x38\56\62\61\x36\56\x35\x36" => '', "\x35\62\x2e\x31\66\62\56\62\x31\x32\56\61\66\x33" => '', "\62\x33\56\x39\66\56\x33\64\56\x31\60\65" => '', "\66\x35\x2e\x35\x32\x2e\61\x31\63\x2e\62\63\x36" => '', "\61\67\62\x2e\62\x35\65\56\x36\x31\56\x33\64" => '', "\61\x37\62\56\62\x35\65\x2e\66\x31\x2e\x33\x35" => '', "\x31\x37\62\x2e\62\65\65\56\66\61\56\63\66" => '', "\61\67\x32\x2e\62\x35\x35\x2e\x36\x31\x2e\x33\67" => '', "\61\67\62\x2e\62\65\x35\x2e\66\61\x2e\x33\70" => '', "\x31\67\62\56\62\65\65\56\x36\61\56\63\x39" => '', "\x31\67\x32\56\x32\x35\x35\x2e\66\x31\56\64\x30" => '', "\65\x32\56\62\63\67\56\62\x33\x35\x2e\61\70\65" => '', "\65\x32\56\x32\63\x37\x2e\62\65\x30\56\67\x33" => '', "\x35\62\x2e\x32\63\x37\x2e\62\63\66\x2e\61\x34\65" => '', "\61\x30\64\x2e\x34\x31\56\62\x2e\x31\71" => '', "\x31\x39\x31\56\x32\x33\65\x2e\x39\x38\56\x31\x36\x34" => '', "\61\x39\x31\x2e\62\x33\x35\56\71\71\56\x32\x32\61" => '', "\x31\x39\x31\x2e\62\x33\62\56\x31\x39\64\x2e\x35\61" => '', "\x31\x30\64\x2e\x32\x31\61\x2e\61\64\x33\x2e\x38" => '', "\x31\x30\x34\56\62\x31\61\x2e\x31\66\x35\x2e\65\x33" => '', "\65\x32\x2e\61\67\62\x2e\x31\64\x2e\70\67" => '', "\x34\x30\56\70\63\56\x38\x39\56\x32\x31\64" => '', "\65\62\x2e\61\67\x35\56\x35\67\x2e\x38\61" => '', "\62\60\56\61\70\x38\x2e\66\63\56\61\x35\x31" => '', "\x32\60\56\65\x32\56\63\x36\56\64\71" => '', "\x35\x32\56\x32\64\66\56\x31\66\x35\56\61\x35\x33" => '', "\65\x31\x2e\x31\64\64\56\61\x30\x32\x2e\62\63\x33" => '', "\x31\63\x2e\67\x36\56\x39\x37\56\62\x32\64" => '', "\61\x30\x32\x2e\61\x33\x33\x2e\x31\x36\x39\x2e\66\x36" => '', "\65\x32\56\62\63\x31\x2e\x31\71\x39\56\61\x37\x30" => '', "\61\x33\56\x35\63\56\x31\x36\x32\x2e\x37" => '', "\x34\60\x2e\x31\62\x33\56\62\61\70\x2e\x39\64" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto goaowamiyyamueiw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); goaowamiyyamueiw: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\x50\x5f\x55\x53\105\122\137\x41\x47\105\x4e\x54"); if ($uowwycywwssskuys) { goto iaomqomgiwiegoca; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); iaomqomgiwiegoca: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\x23\120\151\156\x67\144\157\x6d\x50\x61\x67\145\x53\x70\145\x65\144\174\104\x61\162\x65\102\x6f\157\x73\x74\x7c\107\157\x6f\x67\x6c\145\x7c\x50\x54\x53\124\174\x43\150\x72\157\x6d\145\55\114\151\x67\x68\x74\150\157\165\x73\145\174\x57\x50\x20\122\157\x63\153\145\x74\43\151", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\x45\x51\x55\105\123\124\137\125\x52\x49", ''); if (!$iyiwooigkweeewey) { goto ysweqawmawicakeo; } $iyiwooigkweeewey = "\57" . ltrim($iyiwooigkweeewey, "\x2f"); ysweqawmawicakeo: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto owisckseoogsugqq; } return ''; owisckseoogsugqq: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto ookcgumoacskyymy; } return $magawcseesgowoeo; ookcgumoacskyymy: return "{$magawcseesgowoeo}\77{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto cuseccewekgcgkyg; } $magawcseesgowoeo = explode("\77", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); cuseccewekgcgkyg: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\x45\121\125\x45\x53\x54\137\115\x45\x54\x48\117\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto makomwwyomweyamm; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\143\141\x63\150\x65\x5f\151\147\156\157\x72\x65\x64\137\x70\x61\x72\x61\155\x65\x74\x65\x72\x73"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto kgysyqkoqgwmoscq; } ksort($eyagkkkqkwcuygso); kgysyqkoqgwmoscq: makomwwyomweyamm: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; acesyuieuuqwgkwm: if (!(strpos($euueacigmgoqkimu, "\x2e\x2f") !== false || strpos($euueacigmgoqkimu, "\x2f\56") !== false || "\x2e" === $euueacigmgoqkimu || "\56\56" === $euueacigmgoqkimu)) { goto oqwcmgwimeisusoe; } if (strpos($euueacigmgoqkimu, "\56\x2e\x2f") === 0) { goto kwoyiysciqumswcy; } if (strpos($euueacigmgoqkimu, "\56\57") === 0) { goto wmaeicoyyciuaiuy; } if (strpos($euueacigmgoqkimu, "\x2f\56\57") === 0) { goto wsemeeocquawyauo; } if ("\57\56" === $euueacigmgoqkimu) { goto kkewoqqowugagwoy; } if (strpos($euueacigmgoqkimu, "\57\56\x2e\x2f") === 0) { goto qumkwsqqocooyuoq; } if ("\x2f\56\x2e" === $euueacigmgoqkimu) { goto owgakkqgckqcegoi; } if ("\x2e" === $euueacigmgoqkimu || "\x2e\x2e" === $euueacigmgoqkimu) { goto ugswokwmkumcmigc; } if (strpos($euueacigmgoqkimu, "\x2f", 1) !== false) { goto asaowisseacciyia; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto qiaaqkymeuuueoqk; asaowisseacciyia: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\57", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); qiaaqkymeuuueoqk: goto gwiaimosqoiquwkc; ugswokwmkumcmigc: $euueacigmgoqkimu = ''; gwiaimosqoiquwkc: goto cigesysuauaiccms; owgakkqgckqcegoi: $euueacigmgoqkimu = "\57"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); cigesysuauaiccms: goto gcskyqewysqaceeg; qumkwsqqocooyuoq: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); gcskyqewysqaceeg: goto wwswmaewcaisauei; kkewoqqowugagwoy: $euueacigmgoqkimu = "\57"; wwswmaewcaisauei: goto ocgkwqqmgasuoies; wsemeeocquawyauo: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); ocgkwqqmgasuoies: goto ooysmgyeqoiesgqm; wmaeicoyyciuaiuy: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); ooysmgyeqoiesgqm: goto aaogeemgkogagkai; kwoyiysciqumswcy: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); aaogeemgkogagkai: goto acesyuieuuqwgkwm; oqwcmgwimeisusoe: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto qqmmycmsoqegcqqw; } $icwicymcioeyeyek["\x70\x65\x72\x6d\141\154\151\x6e\153"] = $this->aakgigyaookyiaqk(); $this->oaumimwssciwumys($uamcoiueqaamsqma, $icwicymcioeyeyek); qqmmycmsoqegcqqw: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto isqwwmikecauwyuc; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); isqwwmikecauwyuc: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto oiiqqgyqmggyiums; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); oiiqqgyqmggyiums: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\165\162\154"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\155\x65\x73\163\x61\147\145" => $uamcoiueqaamsqma, "\x63\157\156\164\145\170\x74" => $icwicymcioeyeyek]; } }
