<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             623bbb7c4a174             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Buffer; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Package\Optimization\Traits\MemoizeTrait; class Test { use MemoizeTrait; protected $logger = null; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\x75\x72\151" => 1, "\x77\x70\x5f\64\60\x34" => 1, "\x73\145\141\162\143\x68" => 1, "\161\165\x65\162\x79\137\x73\164\162\151\156\147" => 1, "\x69\x67\156\157\162\145\x64\x5f\165\x72\x6c\x73" => 1, "\144\x6f\x6e\x6f\164\143\x61\x63\x68\x65\160\x61\x67\x65" => 1, "\x72\145\x6a\145\143\164\145\144\x5f\x63\157\x6f\x6b\x69\x65" => 1, "\x6d\x61\156\144\x61\164\x6f\162\171\x5f\x63\x6f\157\x6b\151\x65" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; $ywmkwiwkosakssii = wp_parse_args($ywmkwiwkosakssii, ["\x67\x65\164" => is_array($_GET) && $_GET ? $_GET : [], "\x70\x6f\163\164" => is_array($_POST) && $_POST ? $_POST : [], "\x74\x65\163\164" => [], "\x6c\157\147\x67\145\x72" => null, "\143\157\x6f\x6b\151\145\163" => is_array($_COOKIE) && $_COOKIE ? $_COOKIE : []]); if ($ywmkwiwkosakssii["\x74\x65\x73\164"]) { goto ykiyuciecskusaae; } $this->okkwqquawsoemamu((array) $ywmkwiwkosakssii["\164\x65\163\164"]); ykiyuciecskusaae: $this->get = $ywmkwiwkosakssii["\147\x65\x74"] && is_array($ywmkwiwkosakssii["\x67\x65\164"]) ? $ywmkwiwkosakssii["\147\x65\x74"] : []; $this->post = $ywmkwiwkosakssii["\x70\157\x73\164"] && is_array($ywmkwiwkosakssii["\160\157\x73\x74"]) ? $ywmkwiwkosakssii["\x70\157\x73\164"] : []; $this->logger = $ywmkwiwkosakssii["\x6c\157\147\x67\x65\162"] ?: null; $this->cookies = $ywmkwiwkosakssii["\143\x6f\157\x6b\151\x65\x73"] && is_array($ywmkwiwkosakssii["\x63\x6f\x6f\153\x69\x65\x73"]) ? $ywmkwiwkosakssii["\143\x6f\x6f\153\151\145\163"] : []; if (!$this->ayueggmoqeeukqmq()) { goto pssquaaiioygwqoq; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\167\160\137\x63\165\x73\x74\157\x6d\151\x7a\x65" => '']); pssquaaiioygwqoq: } public function mskuyeumceaigegs() { return $this->logger; } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { $uamcoiueqaamsqma = ''; $mgkceomocowocqyo = []; $this->lastError = []; if ($this->kgkoeoeseyuugaao()) { goto asueqykmkoaimguq; } if ($this->gymgcceeqssmesiu()) { goto meegaqaesckqmyec; } if ($this->goecwaaykqoaaagg()) { goto aosasoogesueygak; } if ($this->sgsscqasgeyeicoe()) { goto kisuswmyqsocukgk; } if (!$this->gooeyogikcusgwuu()) { goto kuymgsewmeoimeuq; } if (!$this->cskwmweqysskwckg()) { goto oaseseemoaqcgqeu; } $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if (!isset($uiewakwqscemywuo["\x73\x75\143\x63\145\x73\163"]) || !$uiewakwqscemywuo["\x73\x75\x63\143\145\x73\163"]) { goto mioqycmmeucswoms; } if ($this->cskwmweqysskwckg("\161\x75\x65\162\171\x5f\163\164\x72\x69\x6e\147") && !$this->koguieumooaesyww()) { goto keyiswqkmqqquosw; } if ($this->cskwmweqysskwckg("\162\145\152\x65\143\x74\145\144\137\143\x6f\x6f\153\151\x65") && $this->cokqaygwwygweuyk()) { goto momgmqemgcasyuqq; } if (!($this->cskwmweqysskwckg("\x69\147\156\x6f\x72\x65\144\137\165\x72\x6c\x73") && $this->sywgeyscigqsokyg())) { goto ucugeysomcyceyos; } $uamcoiueqaamsqma = "\x49\x67\x6e\157\x72\145\144\40\165\162\154\40\146\x6f\x75\x6e\144\x2e"; $mgkceomocowocqyo = ["\160\x65\x72\x6d\x61\x6c\151\x6e\x6b" => $this->iqyukmiuoisswoei()]; ucugeysomcyceyos: goto qmuikumqukcyaeqa; momgmqemgcasyuqq: $uamcoiueqaamsqma = "\x45\x78\143\x6c\x75\x64\145\144\x20\143\157\157\153\x69\145\40\x66\157\165\156\x64\56"; $mgkceomocowocqyo = ["\x70\x65\x72\x6d\141\154\x69\156\153" => $this->iqyukmiuoisswoei(), "\x65\x78\143\x6c\x75\144\145\144\x5f\143\x6f\157\153\151\145\x73" => $this->cokqaygwwygweuyk()]; qmuikumqukcyaeqa: goto imaiuooqwwokwemw; keyiswqkmqqquosw: $uamcoiueqaamsqma = "\x51\165\x65\x72\171\x20\163\x74\162\x69\x6e\x67\40\125\122\x4c\x20\151\x73\x20\145\170\x63\x6c\165\x64\145\x64\56"; imaiuooqwwokwemw: goto mioaoacqueiyueak; mioqycmmeucswoms: $uamcoiueqaamsqma = "\116\x6f\x20\143\x6f\x6e\146\x69\147\x20\x66\151\x6c\x65\x20\x66\157\x75\x6e\144\x2e"; $mgkceomocowocqyo = ["\143\x6f\156\x66\x69\147\137\160\141\x74\x68" => $uiewakwqscemywuo["\x70\x61\x74\150"]]; mioaoacqueiyueak: oaseseemoaqcgqeu: goto gimsiyauegmikyka; kuymgsewmeoimeuq: $uamcoiueqaamsqma = "\122\145\161\x75\x65\x73\x74\40\155\x65\x74\x68\157\x64\x20\x69\163\40\x6e\x6f\164\x20\x61\x6c\x6c\157\167\x65\x64\x2e\40\120\141\x67\x65\x20\x63\141\x6e\156\157\164\40\142\x65\x20\x63\141\143\x68\145\x64\x2e"; $mgkceomocowocqyo = ["\x72\x65\x71\165\x65\163\x74\137\155\145\x74\x68\x6f\x64" => $this->ciyocmkwssocskiy()]; gimsiyauegmikyka: goto wisaekiyyweeemuy; kisuswmyqsocukgk: $uamcoiueqaamsqma = "\103\x75\163\x74\157\155\151\172\145\162\40\160\162\x65\x76\151\145\167\40\x69\163\40\x65\x78\x63\x6c\165\x64\x65\144\56"; wisaekiyyweeemuy: goto emqmqkeygumaasam; aosasoogesueygak: $uamcoiueqaamsqma = "\x41\x64\x6d\151\156\x20\157\x72\x20\101\x4a\x41\x58\40\125\122\x4c\40\x69\x73\40\145\170\143\154\165\x64\x65\144\56"; emqmqkeygumaasam: goto scccyaiaggeasgqg; meegaqaesckqmyec: $uamcoiueqaamsqma = "\120\110\x50\x2c\x20\130\115\x4c\54\40\x6f\162\40\130\123\x4c\40\x66\151\154\x65\x20\x69\163\40\145\170\x63\x6c\165\144\x65\144\x2e"; scccyaiaggeasgqg: goto iyocimuyeemkaaso; asueqykmkoaimguq: $uamcoiueqaamsqma = "\x52\x6f\142\157\x74\x73\56\164\170\164\x20\157\x72\40\56\150\164\141\143\143\145\163\163\x20\146\x69\x6c\145\40\x69\163\x20\145\170\x63\154\x75\x64\x65\x64\x2e"; iyocimuyeemkaaso: $yciaosuiyeieceug = true; if (!$uamcoiueqaamsqma) { goto isaouwiaamimceeg; } $this->log($uamcoiueqaamsqma, $mgkceomocowocqyo); $yciaosuiyeieceug = false; isaouwiaamimceeg: return $yciaosuiyeieceug; } public function ocysssyiuaueqiei($iqaosyayeiuaisqi = null) : bool { return (bool) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x6f\160\164\x5f\x61\x6c\x6c\x6f\167\x5f\x74\157\137\157\x70\164\151\155\x69\172\145"), false, $iqaosyayeiuaisqi); } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { $this->lastError = []; $yciaosuiyeieceug = true; if (strlen($moooemyaqewumiay) <= 255) { goto oaciskoioaecgwee; } if (!$this->ocysssyiuaueqiei("\x6c\x65\x76\145\154\55\61")) { goto ysusaysykymegguk; } if (http_response_code() !== 200) { goto oeosugomyqyekmuq; } if ($this->cskwmweqysskwckg("\x64\157\156\157\164\143\x61\x63\x68\145\x70\141\x67\x65") && $this->uykysuaiooyewmsc()) { goto ugowqoisymsioeye; } if ($this->cskwmweqysskwckg("\167\160\137\64\x30\x34") && $this->kmmyuiwaogukwqqi()) { goto wamgcqkaieummksu; } if (!($this->cskwmweqysskwckg("\x73\x65\x61\162\143\x68") && $this->gouusicsisumuiei())) { goto kcwyeqmysgqkoqcm; } $this->log("\x53\145\141\162\143\150\40\x70\141\147\x65\x20\x69\163\40\x65\x78\x63\x6c\x75\144\x65\144\56"); $yciaosuiyeieceug = false; kcwyeqmysgqkoqcm: goto mwgaaiaswusakkaq; wamgcqkaieummksu: $this->log("\127\120\x20\64\60\64\40\160\141\x67\x65\x20\151\163\x20\x65\x78\x63\154\x75\144\x65\x64\56"); $yciaosuiyeieceug = false; mwgaaiaswusakkaq: goto gooqkmwgsmseuiwq; ugowqoisymsioeye: $this->log("\x44\117\x4e\x4f\124\x43\x41\x43\110\105\x50\x41\107\x45\40\151\x73\x20\144\x65\146\151\156\145\x64\x2e\40\x50\141\147\x65\40\x63\141\156\156\x6f\x74\40\142\x65\x20\143\x61\x63\x68\x65\x64\x2e"); $yciaosuiyeieceug = false; gooqkmwgsmseuiwq: goto emgssiqceagusgyg; oeosugomyqyekmuq: $this->log("\120\141\x67\145\x20\x69\163\40\x6e\157\x74\40\x61\x20\62\x30\x30\x20\110\124\124\120\x20\162\145\x73\160\157\156\x73\x65\x20\141\x6e\x64\x20\143\141\x6e\x6e\157\x74\x20\142\x65\40\x63\141\143\150\x65\x64\x2e"); $yciaosuiyeieceug = false; emgssiqceagusgyg: goto yskswskmsgoouyco; ysusaysykymegguk: $this->log("\x6e\x6f\x74\40\x61\x6c\x6c\x6f\167\x20\164\x6f\40\157\x70\x74\x69\155\151\x7a\145\x20\164\150\x69\x73\40\x70\141\147\145\x2e"); $yciaosuiyeieceug = false; yskswskmsgoouyco: goto csskguekqcwcmocu; oaciskoioaecgwee: $this->log("\x42\x75\146\x66\x65\162\40\x63\x6f\156\x74\145\x6e\x74\40\x75\x6e\144\145\162\40\x32\x35\65\40\143\141\162\x61\x63\x74\x65\x72\163\56\x3a\40{$moooemyaqewumiay}"); $yciaosuiyeieceug = false; csskguekqcwcmocu: return $yciaosuiyeieceug; } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg($ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto mmusoowesqcmuqew; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]); goto wkwkeicwosmkcygc; mmusoowesqcmuqew: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); wkwkeicwosmkcygc: return $umuecysoywoumgwo; } public function okkwqquawsoemamu(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ugcyukgoaiiysymc; } return $this->eecucukcqkqysiau(__FUNCTION__); ugcyukgoaiiysymc: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); if ($iyiwooigkweeewey) { goto yuoyeeuqqaockyqw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); yuoyeeuqqaockyqw: $ucasskoyoewwmmii = ["\x72\157\142\157\164\163\x2e\x74\x78\x74", "\56\150\164\x61\x63\143\145\163\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\x2f" . $qogsmwakwacwqogk))) { goto iqukigoyiqgcggue; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); iqukigoyiqgcggue: qkiqquymecyoouki: } kygcymkakucoeock: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto amkcomscieegkygc; } return $this->eecucukcqkqysiau(__FUNCTION__); amkcomscieegkygc: $iyiwooigkweeewey = $this->iqyukmiuoisswoei(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($iyiwooigkweeewey && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $iyiwooigkweeewey, $meyiiwcswqmuggyg))) { goto qoameasiqwaqgmca; } if (!($meyiiwcswqmuggyg[0] == $iyiwooigkweeewey)) { goto uugekiumuwemyuyc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); uugekiumuwemyuyc: qoameasiqwaqgmca: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto osoqssymqqoqcuky; } return $this->eecucukcqkqysiau(__FUNCTION__); osoqssymqqoqcuky: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); if ($iyiwooigkweeewey) { goto qcywwqceiqogcoyo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qcywwqceiqogcoyo: if (!(strtolower($iyiwooigkweeewey) === "\57\151\x6e\144\x65\x78\x2e\x70\x68\x70")) { goto giiucsyqgcooaima; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); giiucsyqgcooaima: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\x70\150\160" => 1, "\x78\155\154" => 1, "\170\x73\x6c" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || defined("\x44\117\111\x4e\x47\137\101\112\101\130") && DOING_AJAX; } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\167\160\x5f\x63\x75\x73\x74\x6f\x6d\x69\172\x65"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\107\x45\x54" => 1, "\x48\105\101\104" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto awikkaqmmuqkukma; } return $this->eecucukcqkqysiau(__FUNCTION__); awikkaqmmuqkukma: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto uckeuuaqimqamuyc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); uckeuuaqimqamuyc: $yccgiaiouekkouay = [ "\x6c\x61\156\147" => 1, "\160\x72\145\x6c\157\x61\144" => 1, "\157\x70\164\55\160\x72\x65\x6c\x6f\x61\144" => 1, "\160\145\x72\155\x61\154\x69\x6e\153\137\156\x61\x6d\145" => 1, "\x6c\160\x2d\166\141\x72\151\x61\x74\151\157\x6e\55\151\x64" => 1, ]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto mieeugiewckceagc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); mieeugiewckceagc: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\x63\141\x63\x68\x65\x5f\161\x75\x65\x72\x79\137\163\x74\162\151\156\x67\163"); if ($yccgiaiouekkouay) { goto uqkqmseoeemyaqck; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); uqkqmseoeemyaqck: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto cceyoumkiicaguio; } return $this->eecucukcqkqysiau(__FUNCTION__); cceyoumkiicaguio: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto yayykakkyeoieicm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); yayykakkyeoieicm: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto yuiouamaogkkqmck; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); yuiouamaogkkqmck: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto qiawociayswicugw; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; qiawociayswicugw: wsckacayikksiswo: } mmwqwowqcaseyyki: if (empty($eiocugauqgouiuyi)) { goto ngagwiymmmycgscu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); ngagwiymmmycgscu: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function uykysuaiooyewmsc() : bool { if (!(!defined("\x4f\120\x54\111\x4d\x49\132\101\124\111\117\x4e\137\x44\117\116\x54\137\x43\101\x43\x48\x45\x5f\x50\x41\x47\105") || !OPTIMIZATION_DONT_CACHE_PAGE)) { goto qimomesqamyyicmo; } return false; qimomesqamyyicmo: return !apply_filters("\x63\x61\143\x68\145\x5f\x6f\166\x65\162\162\151\144\145\137\144\157\x6e\164\137\143\141\x63\150\x65\137\x70\141\x67\145", false); } public function kmmyuiwaogukwqqi() : bool { return !function_exists("\151\163\x5f\64\60\64") || is_404(); } public function gouusicsisumuiei() : bool { if (!(function_exists("\x69\163\137\x73\145\x61\x72\143\150") && !is_search())) { goto kkacggiosquqagew; } return false; kkacggiosquqagew: return !apply_filters("\143\141\143\150\145\x5f\x63\x61\x63\150\x65\x5f\163\145\141\x72\143\x68", false); } public function iqyukmiuoisswoei() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\105\x51\125\105\x53\x54\137\x55\x52\111", ''); if (!$iyiwooigkweeewey) { goto augqweqsqioesmim; } $iyiwooigkweeewey = "\x2f" . ltrim($iyiwooigkweeewey, "\x2f"); augqweqsqioesmim: return $iyiwooigkweeewey; } public function mcqmgiwowqqyiewk() : string { if (!($iyiwooigkweeewey = $this->iqyukmiuoisswoei())) { goto aescssauecumgwso; } $iyiwooigkweeewey = explode("\77", $iyiwooigkweeewey); $iyiwooigkweeewey = reset($iyiwooigkweeewey); aescssauecumgwso: return $iyiwooigkweeewey; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\121\125\x45\x53\124\137\115\105\x54\110\x4f\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto qcceyyqiuiqcyqqm; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\143\x61\x63\150\x65\137\x69\147\156\157\x72\145\144\x5f\160\141\162\141\x6d\145\164\145\162\x73"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto cooeoemccqiyewks; } ksort($eyagkkkqkwcuygso); cooeoemccqiyewks: qcceyyqiuiqcyqqm: return $eyagkkkqkwcuygso; } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log($uamcoiueqaamsqma, $mgkceomocowocqyo = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto kqkymieyyqaoeymw; } $eawuoscsaksyqwiw = $this->mskuyeumceaigegs(); if ($eawuoscsaksyqwiw && is_a($eawuoscsaksyqwiw, "\x50\155\x70\162\134\103\157\x6d\x6d\x6f\156\x5c\106\x6f\x75\156\144\141\x74\151\x6f\x6e\x5c\114\x6f\147\x67\145\x72\x5c\x45\x6e\147\151\156\x65")) { goto ssesmiwwmsayksum; } error_log($uamcoiueqaamsqma); goto qkwckeqowgaokkuy; ssesmiwwmsayksum: $eawuoscsaksyqwiw->uimukyawykswgwsm("\144\145\146\x61\x75\154\164", $eawuoscsaksyqwiw::swmsegkcoseieecu, $uamcoiueqaamsqma, $mgkceomocowocqyo); qkwckeqowgaokkuy: kqkymieyyqaoeymw: } }
