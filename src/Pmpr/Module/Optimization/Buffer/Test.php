<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ffbdfd59a7a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Buffer; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\x75\162\151" => 1, "\x61\152\141\x78" => 1, "\x63\x72\x6f\x6e" => 1, "\x72\x65\x73\x74" => 1, "\x77\x70\137\x34\60\x34" => 1, "\x73\x65\x61\x72\x63\x68" => 1, "\x71\x75\145\162\171\137\x73\x74\162\151\156\x67" => 1, "\x69\147\156\x6f\x72\x65\x64\x5f\x75\x72\154\163" => 1, "\144\x6f\156\x6f\x74\143\141\x63\150\x65\x70\x61\147\145" => 1, "\x72\x65\x6a\145\143\164\x65\144\x5f\143\157\x6f\153\151\145" => 1, "\x6d\x61\x6e\144\141\164\x6f\162\x79\x5f\x63\x6f\157\153\151\x65" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; $ywmkwiwkosakssii = wp_parse_args($ywmkwiwkosakssii, ["\x67\x65\164" => is_array($_GET) && $_GET ? $_GET : [], "\160\157\x73\x74" => is_array($_POST) && $_POST ? $_POST : [], "\x74\145\x73\164" => [], "\143\x6f\157\153\x69\145\x73" => is_array($_COOKIE) && $_COOKIE ? $_COOKIE : []]); if ($ywmkwiwkosakssii["\x74\145\163\x74"]) { goto kkacggiosquqagew; } $this->okkwqquawsoemamu((array) $ywmkwiwkosakssii["\164\145\x73\164"]); kkacggiosquqagew: $this->get = $ywmkwiwkosakssii["\x67\x65\164"] && is_array($ywmkwiwkosakssii["\x67\145\164"]) ? $ywmkwiwkosakssii["\x67\145\164"] : []; $this->post = $ywmkwiwkosakssii["\160\157\163\164"] && is_array($ywmkwiwkosakssii["\160\157\x73\164"]) ? $ywmkwiwkosakssii["\x70\x6f\x73\x74"] : []; $this->cookies = $ywmkwiwkosakssii["\x63\157\x6f\x6b\x69\x65\x73"] && is_array($ywmkwiwkosakssii["\x63\157\x6f\x6b\x69\x65\x73"]) ? $ywmkwiwkosakssii["\x63\x6f\157\x6b\151\145\163"] : []; if (!$this->ayueggmoqeeukqmq()) { goto augqweqsqioesmim; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\x77\160\x5f\143\165\163\164\x6f\x6d\151\172\145" => '']); augqweqsqioesmim: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { $uamcoiueqaamsqma = ''; $mgkceomocowocqyo = []; $this->lastError = []; if ($this->kgkoeoeseyuugaao()) { goto uugwoygiyecgymgw; } if ($this->gymgcceeqssmesiu()) { goto cauqmacqkssciwyq; } if ($this->goecwaaykqoaaagg()) { goto sgkwaiuukkaqyqki; } if ($this->sgsscqasgeyeicoe()) { goto amgsicqmemeuuaem; } if (!$this->gooeyogikcusgwuu()) { goto bagkewioewygysea; } if (!$this->cskwmweqysskwckg()) { goto weiaigyyigkusucy; } $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if (!isset($uiewakwqscemywuo["\163\x75\143\143\145\163\x73"]) || !$uiewakwqscemywuo["\163\165\x63\143\x65\163\x73"]) { goto sykuuisikqcwuaqu; } if ($this->cskwmweqysskwckg("\x71\165\x65\x72\x79\137\x73\x74\162\x69\156\x67") && !$this->koguieumooaesyww()) { goto kqkymieyyqaoeymw; } if ($this->cskwmweqysskwckg("\162\x65\x6a\x65\143\164\x65\x64\137\x63\x6f\x6f\x6b\x69\x65") && $this->cokqaygwwygweuyk()) { goto ssesmiwwmsayksum; } if ($this->cskwmweqysskwckg("\x69\147\x6e\157\x72\145\x64\137\x75\162\154\x73") && $this->sywgeyscigqsokyg()) { goto cooeoemccqiyewks; } if (!($this->cskwmweqysskwckg("\x72\x65\x73\x74") && $this->okimameeykkqkuww())) { goto aescssauecumgwso; } $uamcoiueqaamsqma = "\111\147\156\x6f\x72\145\144\x20\x75\162\154\40\162\x65\163\164\40\x72\x65\x71\165\145\x73\164\163\56"; aescssauecumgwso: goto qcceyyqiuiqcyqqm; cooeoemccqiyewks: $uamcoiueqaamsqma = "\x49\147\x6e\x6f\x72\x65\144\x20\165\162\154\40\146\157\165\x6e\x64\56"; qcceyyqiuiqcyqqm: goto qkwckeqowgaokkuy; ssesmiwwmsayksum: $uamcoiueqaamsqma = "\x45\x78\x63\x6c\x75\x64\145\x64\x20\143\x6f\x6f\153\x69\145\x20\x66\x6f\x75\156\144\x2e"; $mgkceomocowocqyo = ["\x65\170\143\x6c\x75\x64\x65\x64\x5f\143\x6f\x6f\x6b\x69\145\163" => $this->cokqaygwwygweuyk()]; qkwckeqowgaokkuy: goto gqyyccceswkqcmaa; kqkymieyyqaoeymw: $uamcoiueqaamsqma = "\x51\x75\x65\x72\171\x20\163\x74\162\151\x6e\147\40\125\x52\x4c\40\151\163\x20\x65\x78\143\x6c\165\x64\x65\x64\56"; gqyyccceswkqcmaa: goto mquyemuqcqeassqc; sykuuisikqcwuaqu: $uamcoiueqaamsqma = "\x4e\x6f\40\x63\x6f\x6e\146\x69\x67\40\146\x69\x6c\x65\40\x66\157\x75\x6e\x64\56"; $mgkceomocowocqyo = ["\x63\157\x6e\146\x69\147\137\160\x61\164\150" => $uiewakwqscemywuo["\x70\141\164\150"]]; mquyemuqcqeassqc: weiaigyyigkusucy: goto mgieeyuyuoeccaog; bagkewioewygysea: $uamcoiueqaamsqma = "\122\x65\x71\x75\x65\x73\164\40\x6d\145\164\150\x6f\x64\40\151\163\40\x6e\157\164\40\141\154\154\157\x77\x65\x64\56\40\x50\141\147\145\40\143\x61\156\156\x6f\x74\x20\142\145\x20\143\x61\143\x68\x65\144\x2e"; $mgkceomocowocqyo = ["\162\x65\x71\165\145\x73\x74\137\x6d\x65\x74\x68\x6f\144" => $this->ciyocmkwssocskiy()]; mgieeyuyuoeccaog: goto gwksywaoeowkesei; amgsicqmemeuuaem: $uamcoiueqaamsqma = "\x43\165\163\164\x6f\x6d\x69\x7a\145\x72\x20\160\x72\x65\x76\x69\x65\x77\40\x69\163\40\145\170\143\x6c\165\x64\145\x64\56"; gwksywaoeowkesei: goto emagssesowicacoa; sgkwaiuukkaqyqki: $uamcoiueqaamsqma = "\101\144\155\x69\x6e\40\157\x72\x20\101\112\x41\x58\40\125\x52\x4c\x20\x69\163\x20\145\x78\143\154\x75\144\x65\144\56"; emagssesowicacoa: goto gusgywuaimwooawc; cauqmacqkssciwyq: $uamcoiueqaamsqma = "\x50\x48\120\54\40\x58\x4d\114\x2c\40\x6f\x72\x20\130\x53\x4c\x20\x66\151\154\145\x20\151\163\40\145\170\143\154\x75\x64\x65\x64\x2e"; gusgywuaimwooawc: goto acmgueaoaaweiqqu; uugwoygiyecgymgw: $uamcoiueqaamsqma = "\x52\157\x62\x6f\164\x73\x2e\164\x78\x74\x20\157\x72\40\56\150\164\141\143\x63\145\x73\163\x20\146\151\154\x65\40\x69\x73\40\x65\170\143\x6c\165\x64\x65\144\x2e"; acmgueaoaaweiqqu: $yciaosuiyeieceug = true; if (!$uamcoiueqaamsqma) { goto awaaowoqskgokwiy; } $this->log($uamcoiueqaamsqma, $mgkceomocowocqyo); $yciaosuiyeieceug = false; awaaowoqskgokwiy: return $yciaosuiyeieceug; } public function ocysssyiuaueqiei($iqaosyayeiuaisqi = null) : bool { return (bool) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\157\x70\164\137\x61\154\154\157\x77\137\164\x6f\137\x6f\160\x74\x69\x6d\151\172\x65"), false, $iqaosyayeiuaisqi); } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { $yciaosuiyeieceug = true; $this->lastError = []; if (strlen($moooemyaqewumiay) <= 255) { goto gysmmooawoeggaow; } if (!$this->ocysssyiuaueqiei("\154\145\166\x65\154\55\x31")) { goto scgmwokeuqwiekkk; } if (http_response_code() !== 200) { goto gsusqquicmukegcs; } if ($this->cskwmweqysskwckg("\x64\x6f\x6e\157\x74\x63\141\x63\150\145\x70\x61\147\x65") && $this->uykysuaiooyewmsc()) { goto ueqsiwuwumoqgsck; } if ($this->cskwmweqysskwckg("\x77\160\x5f\x34\x30\64") && $this->kmmyuiwaogukwqqi()) { goto cyqokqcacysioeyc; } if ($this->cskwmweqysskwckg("\163\x65\141\162\143\150") && $this->gouusicsisumuiei()) { goto aayysiegiyweiyuu; } if ($this->cskwmweqysskwckg("\x61\152\x61\170") && $this->mcgoysmkqsqooceq()) { goto gkoyqgogsukuowqi; } if ($this->cskwmweqysskwckg("\143\162\x6f\156") && $this->auqoeckqueqiiike()) { goto kgikoagqwkuocesg; } if (!($this->cskwmweqysskwckg("\162\145\x73\164") && $this->okimameeykkqkuww())) { goto uqiekawkwcegsumy; } $this->log("\122\145\163\164\x20\x41\120\111\40\x52\x65\161\165\145\163\164\40\151\163\40\x65\x78\x63\154\165\x64\x65\x64\56"); $yciaosuiyeieceug = false; uqiekawkwcegsumy: goto skaayekywasksoug; kgikoagqwkuocesg: $this->log("\x43\162\x6f\x6e\x20\x52\145\161\165\145\x73\164\40\151\x73\x20\x65\170\143\x6c\x75\144\145\144\56"); $yciaosuiyeieceug = false; skaayekywasksoug: goto sgikkoswwyesqomo; gkoyqgogsukuowqi: $this->log("\101\x6a\141\x78\40\x52\x65\161\165\145\x73\x74\40\151\163\x20\x65\x78\x63\154\x75\144\x65\144\56"); $yciaosuiyeieceug = false; sgikkoswwyesqomo: goto cksoeiwawiygyiyg; aayysiegiyweiyuu: $this->log("\x53\x65\141\162\143\x68\x20\160\141\x67\x65\40\x69\163\40\145\170\x63\x6c\165\x64\x65\144\56"); $yciaosuiyeieceug = false; cksoeiwawiygyiyg: goto akwwuuiykscgicuw; cyqokqcacysioeyc: $this->log("\x57\x50\x20\x34\60\64\x20\160\141\x67\x65\x20\x69\163\x20\x65\x78\143\x6c\165\144\x65\x64\x2e"); $yciaosuiyeieceug = false; akwwuuiykscgicuw: goto iikgiaocummweiga; ueqsiwuwumoqgsck: $this->log("\104\117\x4e\117\x54\x43\101\103\x48\x45\120\x41\107\x45\40\151\163\x20\144\x65\x66\151\x6e\145\144\56\x20\120\x61\x67\145\x20\143\x61\156\156\x6f\164\x20\x62\145\40\143\x61\x63\x68\x65\x64\x2e"); $yciaosuiyeieceug = false; iikgiaocummweiga: goto wcsysckgigeykkwy; gsusqquicmukegcs: $this->log("\120\x61\147\x65\40\x69\163\x20\x6e\157\x74\40\x61\x20\62\x30\x30\x20\110\x54\x54\120\x20\162\x65\163\x70\x6f\x6e\x73\x65\40\x61\x6e\x64\x20\143\141\156\x6e\157\x74\x20\142\x65\40\x63\x61\143\150\145\144\56"); $yciaosuiyeieceug = false; wcsysckgigeykkwy: goto ceusyscosamyaiws; scgmwokeuqwiekkk: $this->log("\156\157\x74\x20\x61\154\x6c\157\167\40\x74\157\40\x6f\x70\x74\x69\x6d\151\172\x65\x20\164\150\151\163\x20\x70\x61\x67\x65\x2e"); $yciaosuiyeieceug = false; ceusyscosamyaiws: goto iyikuwuweqigiuey; gysmmooawoeggaow: $this->log("\102\165\146\x66\x65\x72\x20\143\x6f\x6e\164\x65\156\164\40\165\156\x64\x65\x72\40\x32\x35\x35\40\x63\141\x72\x61\143\x74\145\162\x73\x2e\72\x20{$moooemyaqewumiay}"); $yciaosuiyeieceug = false; iyikuwuweqigiuey: return $yciaosuiyeieceug; } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg($ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto acsigwcaesyyoiie; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]); goto aqaaqeucgoegeeuk; acsigwcaesyyoiie: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); aqaaqeucgoegeeuk: return $umuecysoywoumgwo; } public function okkwqquawsoemamu(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wycmcqaauqkgegau; } return $this->eecucukcqkqysiau(__FUNCTION__); wycmcqaauqkgegau: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); if ($iyiwooigkweeewey) { goto qcweoyigoaeacsow; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qcweoyigoaeacsow: $ucasskoyoewwmmii = ["\x72\157\x62\x6f\x74\163\x2e\x74\170\164", "\x2e\x68\164\x61\x63\143\x65\x73\163"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\57" . $qogsmwakwacwqogk))) { goto gkwuewqmqeswqukg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gkwuewqmqeswqukg: wcekgciqeggiiwgk: } iyceygqsmokgmams: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto sagemooicmgceiug; } return $this->eecucukcqkqysiau(__FUNCTION__); sagemooicmgceiug: $iyiwooigkweeewey = $this->iqyukmiuoisswoei(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($iyiwooigkweeewey && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $iyiwooigkweeewey, $meyiiwcswqmuggyg))) { goto yeiokcoikcysyimu; } if (!($meyiiwcswqmuggyg[0] === $iyiwooigkweeewey)) { goto uqcwyyiykmwygeau; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); uqcwyyiykmwygeau: yeiokcoikcysyimu: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kkmwwqyesmkescyg; } return $this->eecucukcqkqysiau(__FUNCTION__); kkmwwqyesmkescyg: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); if ($iyiwooigkweeewey) { goto uamuuwkyuqomqyuy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); uamuuwkyuqomqyuy: if (!(strtolower($iyiwooigkweeewey) === "\x2f\151\156\144\145\170\x2e\x70\x68\x70")) { goto ekwuycsiuqwycqea; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ekwuycsiuqwycqea: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\x70\x68\x70" => 1, "\170\155\154" => 1, "\170\163\x6c" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || defined("\104\x4f\x49\x4e\x47\137\101\x4a\101\x58") && DOING_AJAX; } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\167\160\x5f\143\x75\x73\164\157\155\x69\172\x65"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\107\105\x54" => 1, "\x48\x45\101\104" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iyaugygcsmqqqkmo; } return $this->eecucukcqkqysiau(__FUNCTION__); iyaugygcsmqqqkmo: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto cieumoqayigkoocy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); cieumoqayigkoocy: $yccgiaiouekkouay = [ "\x6c\141\156\x67" => 1, "\160\162\145\154\x6f\141\144" => 1, "\x6f\x70\x74\55\160\x72\x65\x6c\157\141\x64" => 1, "\x70\x65\162\x6d\141\x6c\151\156\153\x5f\156\x61\x6d\145" => 1, "\x6c\160\x2d\x76\141\x72\x69\141\x74\x69\157\156\x2d\x69\x64" => 1, "\130\104\105\102\x55\x47\137\123\x45\123\x53\111\117\116\x5f\x53\124\x41\122\124" => 1, ]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto yggciikgkomgeqsc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yggciikgkomgeqsc: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\x63\x61\x63\150\145\x5f\x71\165\145\162\x79\137\x73\164\162\x69\x6e\x67\x73"); if ($yccgiaiouekkouay) { goto eoeiaccouaymakgm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); eoeiaccouaymakgm: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto owaimkmgemoqewmm; } return $this->eecucukcqkqysiau(__FUNCTION__); owaimkmgemoqewmm: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto ysoqeuugiuswykyu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ysoqeuugiuswykyu: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto usmuqsuwuueogimc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); usmuqsuwuueogimc: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto ksawwekgswywwuwm; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; ksawwekgswywwuwm: umcyeiusoakewyaa: } koiiaewwicsckseu: if (empty($eiocugauqgouiuyi)) { goto yuqisiwgqacgmsym; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); yuqisiwgqacgmsym: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function uykysuaiooyewmsc() : bool { if (!(!defined("\117\120\x54\111\x4d\111\x5a\x41\x54\111\x4f\116\x5f\x44\x4f\x4e\x54\x5f\x43\101\x43\x48\x45\137\120\101\x47\x45") || !OPTIMIZATION_DONT_CACHE_PAGE)) { goto wickgagwgqqsomum; } return false; wickgagwgqqsomum: return !apply_filters("\143\x61\143\x68\x65\x5f\157\166\x65\162\x72\x69\x64\145\x5f\x64\157\156\x74\x5f\x63\141\x63\x68\x65\137\160\141\x67\x65", false); } public function kmmyuiwaogukwqqi() : bool { $weksiguqgqscsoee = false; if (!function_exists("\151\163\137\x34\x30\64")) { goto wmwgeoequuwwwywa; } $weksiguqgqscsoee = is_404(); wmwgeoequuwwwywa: return $weksiguqgqscsoee; } public function okimameeykkqkuww() : bool { $cccswkigaicmqkkc = "\x77\160\x2d\x6a\x73\157\x6e"; if (!function_exists("\x72\145\x73\x74\x5f\x67\x65\164\137\x75\x72\x6c\137\160\162\x65\x66\151\170")) { goto uqugcugeomqakcqo; } $cccswkigaicmqkkc = rest_get_url_prefix(); uqugcugeomqakcqo: return false !== strpos($this->iqyukmiuoisswoei(), trailingslashit($cccswkigaicmqkkc)); } public function auqoeckqueqiiike() : bool { $weksiguqgqscsoee = false; if (!function_exists("\167\160\x5f\x64\x6f\151\156\147\137\143\x72\157\x6e")) { goto qmoisuweiskkekca; } $weksiguqgqscsoee = wp_doing_cron(); qmoisuweiskkekca: return $weksiguqgqscsoee; } public function mcgoysmkqsqooceq() : bool { $weksiguqgqscsoee = false; if (function_exists("\167\x70\137\144\x6f\151\x6e\x67\x5f\x61\152\141\170") && wp_doing_ajax()) { goto ocmwuquguuqigose; } if (function_exists("\151\163\137\x61\x6a\x61\x78") && is_ajax()) { goto gwyseusuceuwwccu; } if (!(isset($_SERVER["\x48\x54\124\x50\x5f\130\137\x52\x45\121\125\x45\123\x54\x45\x44\x5f\127\x49\124\x48"]) && $_SERVER["\110\124\x54\x50\137\x58\137\x52\105\121\125\105\x53\124\105\104\137\127\x49\x54\x48"] === "\x58\x4d\114\110\164\164\x70\x52\x65\x71\165\x65\163\164")) { goto wywwieycqskuqcwc; } $weksiguqgqscsoee = true; wywwieycqskuqcwc: goto icouowaoycuuisqe; gwyseusuceuwwccu: $weksiguqgqscsoee = true; icouowaoycuuisqe: goto kmqusaiaiogecyiy; ocmwuquguuqigose: $weksiguqgqscsoee = true; kmqusaiaiogecyiy: return $weksiguqgqscsoee; } public function gouusicsisumuiei() : bool { if (!(function_exists("\x69\163\x5f\163\145\141\162\x63\x68") && !is_search())) { goto swckikycciugciqq; } return false; swckikycciugciqq: return !apply_filters("\x63\141\x63\x68\x65\137\143\x61\x63\x68\x65\x5f\163\x65\141\x72\x63\x68", false); } public function iqyukmiuoisswoei() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\105\121\x55\x45\x53\x54\137\x55\x52\111", ''); if (!$iyiwooigkweeewey) { goto coogyackikgmecic; } $iyiwooigkweeewey = "\x2f" . ltrim($iyiwooigkweeewey, "\x2f"); coogyackikgmecic: return $iyiwooigkweeewey; } public function mcqmgiwowqqyiewk() : string { if (!($iyiwooigkweeewey = $this->iqyukmiuoisswoei())) { goto iqwsqykoueqyyomy; } $iyiwooigkweeewey = explode("\77", $iyiwooigkweeewey); $iyiwooigkweeewey = reset($iyiwooigkweeewey); iqwsqykoueqyyomy: return $iyiwooigkweeewey; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\x45\121\125\x45\x53\124\x5f\115\x45\124\x48\x4f\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto egikqoaqqegawugu; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\143\141\x63\x68\x65\137\151\x67\156\157\x72\145\x64\137\x70\x61\162\x61\x6d\x65\164\145\x72\163"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto ggaucuaykyuiikem; } ksort($eyagkkkqkwcuygso); ggaucuaykyuiikem: egikqoaqqegawugu: return $eyagkkkqkwcuygso; } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto caaygouikgagsssc; } $icwicymcioeyeyek["\x70\145\162\155\141\x6c\x69\156\153"] = $this->iqyukmiuoisswoei(); $this->uiagwusgwcassqua($uamcoiueqaamsqma, $icwicymcioeyeyek); caaygouikgagsssc: } }
