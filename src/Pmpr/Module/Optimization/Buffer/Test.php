<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             631c41f851e37             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Buffer; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\x75\162\x69" => 1, "\141\152\141\170" => 1, "\143\x72\x6f\156" => 1, "\x72\x65\163\164" => 1, "\167\160\x5f\x34\60\x34" => 1, "\163\x65\x61\x72\143\150" => 1, "\161\x75\x65\162\171\137\x73\x74\162\x69\156\x67" => 1, "\151\x67\156\157\162\x65\144\137\165\162\x6c\x73" => 1, "\144\157\156\157\164\x63\141\x63\x68\x65\x70\x61\x67\145" => 1, "\162\145\152\145\x63\x74\x65\144\x5f\x63\157\157\x6b\x69\145" => 1, "\155\141\156\x64\141\x74\157\x72\171\137\143\x6f\157\153\x69\x65" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; $ywmkwiwkosakssii = wp_parse_args($ywmkwiwkosakssii, ["\147\x65\164" => is_array($_GET) && $_GET ? $_GET : [], "\160\157\x73\164" => is_array($_POST) && $_POST ? $_POST : [], "\164\x65\163\164" => [], "\143\157\157\x6b\151\145\163" => is_array($_COOKIE) && $_COOKIE ? $_COOKIE : []]); if ($ywmkwiwkosakssii["\x74\145\x73\164"]) { goto euogcyyayioyyiyg; } $this->okkwqquawsoemamu((array) $ywmkwiwkosakssii["\164\x65\163\x74"]); euogcyyayioyyiyg: $this->get = $ywmkwiwkosakssii["\147\x65\x74"] && is_array($ywmkwiwkosakssii["\147\x65\164"]) ? $ywmkwiwkosakssii["\x67\145\164"] : []; $this->post = $ywmkwiwkosakssii["\x70\157\x73\x74"] && is_array($ywmkwiwkosakssii["\160\x6f\163\164"]) ? $ywmkwiwkosakssii["\x70\157\163\164"] : []; $this->cookies = $ywmkwiwkosakssii["\143\x6f\157\x6b\x69\145\x73"] && is_array($ywmkwiwkosakssii["\x63\x6f\x6f\153\151\x65\x73"]) ? $ywmkwiwkosakssii["\x63\157\x6f\x6b\x69\145\x73"] : []; if (!$this->ayueggmoqeeukqmq()) { goto wkcwuemioaiyouek; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\x77\x70\137\143\x75\x73\x74\157\x6d\x69\x7a\x65" => '']); wkcwuemioaiyouek: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { $uamcoiueqaamsqma = ''; $mgkceomocowocqyo = []; $this->lastError = []; if ($this->kgkoeoeseyuugaao()) { goto cuwkqgemkmuuegkc; } if ($this->gymgcceeqssmesiu()) { goto ikeyoyoigsuouokm; } if ($this->goecwaaykqoaaagg()) { goto ygywkqgioiscmuie; } if ($this->sgsscqasgeyeicoe()) { goto ckowiuagwmsqmiqc; } if (!$this->gooeyogikcusgwuu()) { goto cokacyaayuueyuuu; } if (!$this->cskwmweqysskwckg()) { goto koawwmccgquqqmwa; } $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if (!isset($uiewakwqscemywuo["\x73\x75\143\143\x65\x73\163"]) || !$uiewakwqscemywuo["\163\165\143\x63\145\163\163"]) { goto gmymycwymqkuiisi; } if ($this->cskwmweqysskwckg("\x71\165\x65\x72\x79\137\163\164\x72\151\156\147") && !$this->koguieumooaesyww()) { goto kgeggsckmgcgwcqm; } if ($this->cskwmweqysskwckg("\x72\145\152\x65\143\x74\x65\x64\137\143\157\157\153\x69\x65") && $this->cokqaygwwygweuyk()) { goto qosckaqceoumcasm; } if ($this->cskwmweqysskwckg("\151\147\x6e\157\162\x65\x64\137\x75\162\x6c\x73") && $this->sywgeyscigqsokyg()) { goto qggiogeyowcoaiqy; } if (!($this->cskwmweqysskwckg("\x72\x65\163\x74") && $this->okimameeykkqkuww())) { goto usgmimcwygsmcioa; } $uamcoiueqaamsqma = "\111\x67\156\157\162\x65\144\40\165\x72\x6c\x20\162\145\163\164\x20\162\x65\161\x75\x65\163\x74\163\x2e"; usgmimcwygsmcioa: goto ekgcquiosyesyism; qggiogeyowcoaiqy: $uamcoiueqaamsqma = "\111\x67\x6e\157\x72\145\x64\40\165\x72\154\x20\x66\x6f\x75\x6e\144\56"; ekgcquiosyesyism: goto gmcqkoqwkiawaikw; qosckaqceoumcasm: $uamcoiueqaamsqma = "\x45\x78\x63\x6c\x75\x64\x65\x64\x20\143\157\157\153\151\145\40\x66\x6f\165\156\144\56"; $mgkceomocowocqyo = ["\145\170\x63\154\x75\144\x65\x64\137\143\157\157\153\x69\x65\163" => $this->cokqaygwwygweuyk()]; gmcqkoqwkiawaikw: goto qimieogaimwmukmu; kgeggsckmgcgwcqm: $uamcoiueqaamsqma = "\x51\x75\x65\162\171\40\x73\x74\162\151\156\x67\40\x55\x52\114\x20\x69\163\x20\145\170\x63\154\x75\x64\145\x64\x2e"; qimieogaimwmukmu: goto wogokmgkgkumqcws; gmymycwymqkuiisi: $uamcoiueqaamsqma = "\x4e\x6f\40\143\x6f\156\x66\151\147\40\146\151\154\x65\x20\146\x6f\165\x6e\x64\56"; $mgkceomocowocqyo = ["\x63\157\x6e\x66\x69\x67\137\160\141\x74\150" => $uiewakwqscemywuo["\x70\141\x74\150"]]; wogokmgkgkumqcws: koawwmccgquqqmwa: goto cycyaqqawmwiywwe; cokacyaayuueyuuu: $uamcoiueqaamsqma = "\x52\x65\x71\165\x65\x73\164\40\x6d\145\x74\x68\157\144\40\x69\163\x20\x6e\x6f\164\40\141\x6c\x6c\157\167\x65\x64\x2e\40\120\141\147\x65\40\143\141\156\x6e\157\x74\x20\142\x65\40\x63\141\143\x68\145\x64\56"; $mgkceomocowocqyo = ["\162\x65\161\x75\x65\163\x74\137\155\145\x74\150\157\x64" => $this->ciyocmkwssocskiy()]; cycyaqqawmwiywwe: goto eqieeecackceeweg; ckowiuagwmsqmiqc: $uamcoiueqaamsqma = "\103\165\x73\x74\157\x6d\151\172\x65\162\x20\160\162\145\166\151\145\x77\40\151\x73\40\145\170\x63\x6c\165\144\x65\144\56"; eqieeecackceeweg: goto iuaommmyqoecmuss; ygywkqgioiscmuie: $uamcoiueqaamsqma = "\x41\144\155\151\x6e\40\x6f\x72\x20\x41\112\101\x58\x20\125\x52\x4c\40\x69\x73\40\145\x78\143\x6c\x75\x64\145\144\x2e"; iuaommmyqoecmuss: goto eecgougegqassgyq; ikeyoyoigsuouokm: $uamcoiueqaamsqma = "\x50\110\x50\x2c\x20\x58\115\x4c\54\x20\157\x72\x20\x58\123\114\40\146\151\154\x65\40\x69\x73\x20\145\170\x63\x6c\x75\x64\x65\144\56"; eecgougegqassgyq: goto oyicskieeaewgwce; cuwkqgemkmuuegkc: $uamcoiueqaamsqma = "\x52\157\x62\x6f\164\163\56\164\x78\164\40\x6f\162\40\x2e\x68\x74\x61\143\143\145\163\x73\x20\146\151\x6c\x65\40\x69\x73\40\x65\170\143\x6c\x75\144\145\x64\56"; oyicskieeaewgwce: $yciaosuiyeieceug = true; if (!$uamcoiueqaamsqma) { goto wemmseueskwkcwou; } $this->log($uamcoiueqaamsqma, $mgkceomocowocqyo); $yciaosuiyeieceug = false; wemmseueskwkcwou: return $yciaosuiyeieceug; } public function ocysssyiuaueqiei($iqaosyayeiuaisqi = null) : bool { return (bool) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x6f\x70\x74\137\141\x6c\x6c\157\167\137\x74\157\x5f\157\x70\164\x69\155\x69\x7a\145"), false, $iqaosyayeiuaisqi); } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { $yciaosuiyeieceug = true; $this->lastError = []; if (strlen($moooemyaqewumiay) <= 255) { goto iuieyqacggsykgus; } if (!$this->ocysssyiuaueqiei("\x6c\145\x76\145\x6c\55\61")) { goto cqyiukmuqceicqwa; } if (http_response_code() !== 200) { goto goimywgsweeqsewo; } if ($this->cskwmweqysskwckg("\x64\157\156\157\x74\x63\141\x63\x68\x65\x70\141\147\145") && $this->uykysuaiooyewmsc()) { goto ywmuoigomwwigqea; } if ($this->cskwmweqysskwckg("\x77\x70\137\64\60\x34") && $this->kmmyuiwaogukwqqi()) { goto kacgiqwewyeeyyam; } if ($this->cskwmweqysskwckg("\x73\x65\x61\x72\x63\x68") && $this->gouusicsisumuiei()) { goto ewooakeuigcyuemu; } if ($this->cskwmweqysskwckg("\141\152\141\170") && $this->mcgoysmkqsqooceq()) { goto ekmqouqsgsaukeiq; } if ($this->cskwmweqysskwckg("\x63\162\157\x6e") && $this->auqoeckqueqiiike()) { goto scaimkkukmgoeaya; } if (!($this->cskwmweqysskwckg("\162\x65\163\x74") && $this->okimameeykkqkuww())) { goto cceakqgoysacqwmc; } $this->log("\x52\145\x73\164\40\x41\120\x49\40\122\145\x71\165\145\x73\164\x20\x69\163\x20\145\170\143\x6c\x75\x64\x65\144\56"); $yciaosuiyeieceug = false; cceakqgoysacqwmc: goto ceeqguaoysyaasey; scaimkkukmgoeaya: $this->log("\103\162\157\x6e\40\x52\145\x71\165\145\x73\164\40\151\163\x20\145\x78\x63\x6c\x75\x64\145\x64\56"); $yciaosuiyeieceug = false; ceeqguaoysyaasey: goto cugkqmkuyuwwqcec; ekmqouqsgsaukeiq: $this->log("\101\152\x61\x78\40\122\x65\x71\165\x65\163\164\40\151\163\x20\x65\x78\143\154\x75\x64\x65\x64\x2e"); $yciaosuiyeieceug = false; cugkqmkuyuwwqcec: goto wceiuqaeywmgscww; ewooakeuigcyuemu: $this->log("\123\x65\141\162\x63\150\40\160\x61\147\145\40\151\x73\x20\x65\170\143\x6c\x75\144\x65\x64\56"); $yciaosuiyeieceug = false; wceiuqaeywmgscww: goto qwogeocemuaaasiw; kacgiqwewyeeyyam: $this->log("\x57\120\40\64\x30\x34\40\x70\x61\x67\145\x20\151\163\40\x65\x78\x63\154\165\x64\145\x64\x2e"); $yciaosuiyeieceug = false; qwogeocemuaaasiw: goto cgqkqmiekaageyka; ywmuoigomwwigqea: $this->log("\x44\x4f\x4e\117\124\x43\x41\103\110\x45\120\x41\x47\105\x20\x69\163\40\144\145\x66\x69\x6e\x65\x64\56\x20\x50\141\147\x65\40\143\x61\156\156\x6f\x74\40\142\145\40\x63\x61\143\150\145\x64\56"); $yciaosuiyeieceug = false; cgqkqmiekaageyka: goto uomwseyiqckeewgo; goimywgsweeqsewo: $this->log("\120\141\147\145\40\x69\163\x20\x6e\157\x74\40\x61\x20\62\x30\60\40\x48\x54\x54\120\40\x72\145\x73\x70\157\156\x73\145\x20\141\x6e\144\40\143\x61\x6e\x6e\157\164\40\142\x65\x20\143\141\x63\150\x65\144\x2e"); $yciaosuiyeieceug = false; uomwseyiqckeewgo: goto kmocamaieycogugg; cqyiukmuqceicqwa: $this->log("\156\157\x74\40\x61\x6c\x6c\x6f\x77\x20\x74\x6f\40\157\x70\164\x69\x6d\x69\x7a\x65\40\x74\150\x69\x73\x20\160\141\147\145\56"); $yciaosuiyeieceug = false; kmocamaieycogugg: goto wamkaouokmyoyuqu; iuieyqacggsykgus: $this->log("\102\165\x66\146\145\162\x20\143\157\156\164\145\156\164\40\165\x6e\x64\x65\x72\40\62\65\65\40\x63\x61\x72\141\143\x74\145\x72\x73\56\x3a\40{$moooemyaqewumiay}"); $yciaosuiyeieceug = false; wamkaouokmyoyuqu: return $yciaosuiyeieceug; } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg($ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto eywcgeccsmquugsw; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]); goto wwskeewecyukygeg; eywcgeccsmquugsw: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); wwskeewecyukygeg: return $umuecysoywoumgwo; } public function okkwqquawsoemamu(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto sickakeesgcgwisw; } return $this->eecucukcqkqysiau(__FUNCTION__); sickakeesgcgwisw: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); if ($iyiwooigkweeewey) { goto wmqegaqemgiggsce; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); wmqegaqemgiggsce: $ucasskoyoewwmmii = ["\162\x6f\142\x6f\164\163\x2e\164\x78\x74", "\56\x68\x74\141\x63\x63\145\163\163"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\57" . $qogsmwakwacwqogk))) { goto uauqmaeueukkmuwa; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); uauqmaeueukkmuwa: wggeggkumkwaaesu: } cqeceeagmysoyoqg: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto gkyguugwwoaqoigy; } return $this->eecucukcqkqysiau(__FUNCTION__); gkyguugwwoaqoigy: $iyiwooigkweeewey = $this->iqyukmiuoisswoei(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($iyiwooigkweeewey && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $iyiwooigkweeewey, $meyiiwcswqmuggyg))) { goto qcuywygiosoqycaa; } if (!($meyiiwcswqmuggyg[0] === $iyiwooigkweeewey)) { goto kmikwoqwigwuyqae; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kmikwoqwigwuyqae: qcuywygiosoqycaa: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto coaysoeouasaekie; } return $this->eecucukcqkqysiau(__FUNCTION__); coaysoeouasaekie: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); if ($iyiwooigkweeewey) { goto ykymogaqkgaiiiyi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ykymogaqkgaiiiyi: if (!(strtolower($iyiwooigkweeewey) === "\x2f\x69\x6e\144\145\x78\56\160\x68\160")) { goto uusyaguomkqeakkm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); uusyaguomkqeakkm: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\x70\x68\160" => 1, "\170\x6d\x6c" => 1, "\170\163\x6c" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || defined("\x44\117\x49\116\x47\137\101\112\101\x58") && DOING_AJAX; } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\167\160\137\143\165\x73\x74\x6f\155\x69\172\145"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\107\x45\x54" => 1, "\x48\105\x41\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qoigaauuokyusmgk; } return $this->eecucukcqkqysiau(__FUNCTION__); qoigaauuokyusmgk: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto qsyyeoosgigiiequ; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qsyyeoosgigiiequ: $yccgiaiouekkouay = [ "\154\141\x6e\x67" => 1, "\160\x72\x65\x6c\157\141\144" => 1, "\x6f\x70\x74\55\x70\x72\145\x6c\157\x61\144" => 1, "\x70\145\x72\155\141\154\x69\156\153\137\156\141\155\145" => 1, "\154\x70\55\x76\x61\x72\151\141\164\x69\157\156\55\x69\144" => 1, "\130\x44\105\102\125\x47\x5f\x53\105\x53\123\x49\x4f\116\x5f\x53\124\101\122\124" => 1, ]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto jweeyemwqyqmyuys; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); jweeyemwqyqmyuys: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\x63\141\x63\150\145\x5f\x71\x75\x65\162\171\137\x73\164\162\x69\x6e\147\163"); if ($yccgiaiouekkouay) { goto mgiwqumikeuieocg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); mgiwqumikeuieocg: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yegkgccwomcgkumi; } return $this->eecucukcqkqysiau(__FUNCTION__); yegkgccwomcgkumi: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto qikmwaessamuueoe; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qikmwaessamuueoe: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto aeekgeqawgsmgiqw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); aeekgeqawgsmgiqw: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto cesaaiguwciccysi; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; cesaaiguwciccysi: scaciowogmayswms: } imgagmqusgiqissi: if (empty($eiocugauqgouiuyi)) { goto wskccugoccagaqcw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); wskccugoccagaqcw: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function uykysuaiooyewmsc() : bool { if (!(!defined("\117\120\x54\111\x4d\x49\132\101\124\x49\x4f\116\x5f\x44\x4f\116\x54\x5f\103\x41\x43\110\x45\137\x50\x41\x47\x45") || !OPTIMIZATION_DONT_CACHE_PAGE)) { goto sqyceswygksmmqqa; } return false; sqyceswygksmmqqa: return !apply_filters("\x63\141\143\150\145\x5f\x6f\166\145\x72\x72\x69\x64\145\137\144\x6f\x6e\x74\137\143\141\x63\150\145\137\x70\x61\x67\145", false); } public function kmmyuiwaogukwqqi() : bool { $weksiguqgqscsoee = false; if (!function_exists("\x69\x73\x5f\64\x30\64")) { goto kqsyqwwscwoswsgk; } $weksiguqgqscsoee = is_404(); kqsyqwwscwoswsgk: return $weksiguqgqscsoee; } public function okimameeykkqkuww() : bool { $cccswkigaicmqkkc = "\x77\x70\x2d\x6a\163\x6f\x6e"; if (!function_exists("\x72\x65\163\164\x5f\x67\x65\164\x5f\x75\x72\x6c\x5f\x70\162\x65\146\x69\170")) { goto yemuiyokmqoqckwu; } $cccswkigaicmqkkc = rest_get_url_prefix(); yemuiyokmqoqckwu: return false !== strpos($this->iqyukmiuoisswoei(), trailingslashit($cccswkigaicmqkkc)); } public function auqoeckqueqiiike() : bool { $weksiguqgqscsoee = false; if (!function_exists("\167\x70\137\144\157\151\156\x67\x5f\143\162\x6f\x6e")) { goto qocmmyskykeuwsae; } $weksiguqgqscsoee = wp_doing_cron(); qocmmyskykeuwsae: return $weksiguqgqscsoee; } public function mcgoysmkqsqooceq() : bool { $weksiguqgqscsoee = false; if (function_exists("\167\160\137\x64\x6f\151\156\147\x5f\141\x6a\141\x78") && wp_doing_ajax()) { goto qsycguggqkgywgaq; } if (function_exists("\151\163\137\x61\x6a\141\x78") && is_ajax()) { goto syquiiogeymgicuy; } if (!(isset($_SERVER["\110\x54\x54\120\x5f\x58\137\x52\x45\x51\125\105\x53\124\x45\x44\137\127\111\124\110"]) && $_SERVER["\110\x54\x54\120\x5f\x58\x5f\x52\x45\121\x55\105\123\124\x45\x44\x5f\x57\111\124\110"] === "\130\x4d\x4c\110\x74\164\x70\122\x65\x71\165\x65\x73\164")) { goto kywmiquiiwmwgooy; } $weksiguqgqscsoee = true; kywmiquiiwmwgooy: goto yquysamwsoyyqcya; syquiiogeymgicuy: $weksiguqgqscsoee = true; yquysamwsoyyqcya: goto wsyeqyekimescwkq; qsycguggqkgywgaq: $weksiguqgqscsoee = true; wsyeqyekimescwkq: return $weksiguqgqscsoee; } public function gouusicsisumuiei() : bool { if (!(function_exists("\151\163\x5f\163\145\141\162\x63\x68") && !is_search())) { goto gyceukwoyaasuwik; } return false; gyceukwoyaasuwik: return !apply_filters("\143\141\x63\150\x65\137\x63\141\x63\150\x65\137\163\145\141\x72\143\x68", false); } public function iqyukmiuoisswoei() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\105\121\125\x45\123\x54\x5f\125\122\111", ''); if (!$iyiwooigkweeewey) { goto iiyamaquicwswcyu; } $iyiwooigkweeewey = "\57" . ltrim($iyiwooigkweeewey, "\x2f"); iiyamaquicwswcyu: return $iyiwooigkweeewey; } public function mcqmgiwowqqyiewk() : string { if (!($iyiwooigkweeewey = $this->iqyukmiuoisswoei())) { goto iiyggeuemwuwqiey; } $iyiwooigkweeewey = explode("\x3f", $iyiwooigkweeewey); $iyiwooigkweeewey = reset($iyiwooigkweeewey); iiyggeuemwuwqiey: return $iyiwooigkweeewey; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\121\x55\x45\x53\124\x5f\x4d\105\124\x48\x4f\x44", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto agokkauammisaqke; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\x63\141\x63\150\x65\137\151\147\156\x6f\162\145\x64\137\x70\141\x72\x61\155\145\164\145\162\x73"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto omeookmiomoieeee; } ksort($eyagkkkqkwcuygso); omeookmiomoieeee: agokkauammisaqke: return $eyagkkkqkwcuygso; } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto ggoyigsoyccmscum; } $icwicymcioeyeyek["\160\x65\162\x6d\x61\x6c\x69\x6e\x6b"] = $this->iqyukmiuoisswoei(); $this->uiagwusgwcassqua($uamcoiueqaamsqma, $icwicymcioeyeyek); ggoyigsoyccmscum: } }
