<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616c16f754a56             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Buffer; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Package\Optimization\Traits\MemoizeTrait; class Test implements ConstantInterface { use ComponentTrait, MemoizeTrait, HookTrait; protected $logger = null; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\x75\x72\151" => 1, "\x77\160\137\64\60\x34" => 1, "\x73\145\141\x72\x63\x68" => 1, "\161\165\145\162\x79\x5f\163\x74\162\x69\x6e\x67" => 1, "\151\x67\156\x6f\x72\145\x64\137\165\x72\154\x73" => 1, "\x64\157\x6e\157\x74\x63\x61\143\x68\145\160\x61\147\x65" => 1, "\162\x65\152\145\x63\x74\145\x64\x5f\x63\x6f\x6f\153\151\x65" => 1, "\x6d\x61\x6e\144\141\164\157\162\x79\x5f\x63\157\x6f\x6b\x69\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { goto gwkmcaioucoamkao; oiciueyaoucowgmw: $this->okkwqquawsoemamu((array) $ywmkwiwkosakssii["\x74\145\163\x74"]); goto qokewqqmgqgmqaqy; cwekckceoqoymiwm: $this->post = $ywmkwiwkosakssii["\x70\157\163\x74"] && is_array($ywmkwiwkosakssii["\160\x6f\x73\x74"]) ? $ywmkwiwkosakssii["\x70\157\x73\x74"] : []; goto awuwaqciyuukqeag; yyyamkcqacumuegm: if ($ywmkwiwkosakssii["\x74\x65\163\x74"]) { goto wayiayqaaoyykyaa; } goto oiciueyaoucowgmw; sueyccoqkgccsoyw: $this->get = $ywmkwiwkosakssii["\x67\145\x74"] && is_array($ywmkwiwkosakssii["\147\145\164"]) ? $ywmkwiwkosakssii["\147\x65\164"] : []; goto cwekckceoqoymiwm; qokewqqmgqgmqaqy: wayiayqaaoyykyaa: goto sueyccoqkgccsoyw; csaweyksigegicem: kcyymkyskosacoym: goto sgwwumsasamqmqky; aekiswqkimmgcmac: $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\167\x70\137\143\165\163\164\157\x6d\x69\x7a\x65" => '']); goto csaweyksigegicem; awuwaqciyuukqeag: $this->logger = $ywmkwiwkosakssii["\154\157\x67\x67\145\x72"] ?: null; goto ymkwowqeeacsguym; ggqciukoakmkiauk: if (!$this->ayueggmoqeeukqmq()) { goto kcyymkyskosacoym; } goto aekiswqkimmgcmac; ymkwowqeeacsguym: $this->cookies = $ywmkwiwkosakssii["\143\x6f\x6f\153\x69\x65\x73"] && is_array($ywmkwiwkosakssii["\143\157\157\x6b\x69\x65\163"]) ? $ywmkwiwkosakssii["\x63\157\x6f\153\151\x65\163"] : []; goto ggqciukoakmkiauk; gwkmcaioucoamkao: $this->config = $uiewakwqscemywuo; goto aaccqgcuggcugeqw; aaccqgcuggcugeqw: $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x67\x65\x74" => is_array($_GET) && $_GET ? $_GET : [], "\x70\157\x73\164" => is_array($_POST) && $_POST ? $_POST : [], "\164\x65\x73\x74" => [], "\x6c\x6f\147\147\145\x72" => null, "\x63\x6f\157\153\151\145\163" => is_array($_COOKIE) && $_COOKIE ? $_COOKIE : []]); goto yyyamkcqacumuegm; sgwwumsasamqmqky: } public function mskuyeumceaigegs() { return $this->logger; } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { goto swwsoucgukwwokou; swwsoucgukwwokou: $yciaosuiyeieceug = true; goto scgiymugkuqikuoo; iquamkkkakqceico: $yciaosuiyeieceug = false; goto dakcgwwcguscwcgs; isiseiywogusquiy: $yciaosuiyeieceug = false; goto uquciwyocygmwaeq; eggksuwcamuciuyu: goto uyaugcksmygwamwo; goto kmcoguowgwkcuaec; hwcueuuaimkiawcg: $this->log("\x50\110\x50\54\x20\x58\x4d\x4c\54\x20\x6f\x72\40\130\x53\x4c\x20\146\151\154\x65\x20\x69\163\x20\145\x78\x63\154\165\x64\145\x64\x2e"); goto yyiuaymyqkoooyse; acymaqouwqmcmisy: qcaiegucqcakoguk: goto kuusqsqwcyeicqcu; yyiuaymyqkoooyse: $yciaosuiyeieceug = false; goto iacsmyoeqsisuoqq; soeqqoegkeocasic: goto eewmmuqwyuumymau; goto euyueamqiaoyikie; cwqgyckguaiciiam: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); goto qeeakiaqiwkogiki; euyueamqiaoyikie: ieescsoooicgswmc: goto uaokswasiaegemqu; kiieeckyooaiakiy: if ($this->sgsscqasgeyeicoe()) { goto weiqkaaeieoaycas; } goto mkwcgkgauikuqkgs; scgiymugkuqikuoo: $this->lastError = []; goto kggqciusmciogeoc; mkwcgkgauikuqkgs: if (!$this->gooeyogikcusgwuu()) { goto ieescsoooicgswmc; } goto iekoocwecouagekw; eawommuykgayesso: mkiiukgsugssgoea: goto iyyskykwysmaiosq; ekqawkaqkgwygyys: if ($this->cskwmweqysskwckg("\x71\x75\x65\x72\171\x5f\163\164\x72\151\156\x67") && !$this->koguieumooaesyww()) { goto oeqeikgwugwquskq; } goto gaaikwwqsgaskqos; ywqaqwigqqqcsyos: kqwioeqkgsgmmymg: goto eussomccqmmumkoc; qucimmcmsoikwmau: ysceuaykccoiqqec: goto csscwckocuaykoew; eusesuocygoggmyw: gsyaeawoooqaaeee: goto oyuyqykycywqikma; yoigaymqwkcqioac: $yciaosuiyeieceug = false; goto eusesuocygoggmyw; muemymcgeomwgqka: qkmciokkseyqoiye: goto soeqqoegkeocasic; guyaeuucuqosewwe: if (!($this->cskwmweqysskwckg("\151\x67\x6e\157\162\x65\x64\x5f\165\162\x6c\163") && $this->sywgeyscigqsokyg())) { goto kgsqmocueuiwmmcs; } goto scwgaeqqquyqoeey; iekoocwecouagekw: if (!$this->cskwmweqysskwckg()) { goto qkmciokkseyqoiye; } goto cwqgyckguaiciiam; kuusqsqwcyeicqcu: $this->log("\105\170\x63\154\x75\x64\145\x64\x20\143\157\157\153\x69\145\x20\x66\x6f\x75\156\144\56", ["\160\145\162\155\x61\x6c\x69\156\153" => $this->iqyukmiuoisswoei(), "\x65\x78\x63\154\165\144\145\x64\137\143\157\157\x6b\x69\145\163" => $this->cokqaygwwygweuyk()]); goto yoigaymqwkcqioac; oeeayggmgimqigqm: $this->log("\x43\165\x73\164\157\155\151\x7a\x65\162\x20\160\x72\145\166\151\145\x77\40\151\x73\x20\145\x78\x63\154\x75\x64\x65\144\56"); goto amciqasycmesgweq; eussomccqmmumkoc: $this->log("\x52\157\x62\157\x74\163\56\x74\170\x74\x20\157\162\x20\x2e\150\x74\141\x63\143\x65\163\163\x20\146\151\x6c\x65\40\x69\163\40\x65\170\x63\x6c\165\144\x65\144\56"); goto isiseiywogusquiy; uiikmyqamcckswyq: $yciaosuiyeieceug = false; goto kggkkkouaeowcuea; uaokswasiaegemqu: $this->log("\x52\145\x71\165\145\163\164\40\x6d\x65\164\150\x6f\x64\40\x69\163\40\156\157\164\x20\141\x6c\x6c\x6f\x77\145\x64\x2e\x20\x50\141\147\x65\x20\143\x61\156\x6e\157\164\40\142\x65\40\143\x61\143\x68\x65\144\x2e", ["\x72\x65\161\x75\x65\x73\164\x5f\x6d\x65\164\x68\x6f\144" => $this->ciyocmkwssocskiy()]); goto yyciyacskyymkcks; uquciwyocygmwaeq: ssiykmokuqwoukkq: goto ukuqoksosmkiycci; ukuqoksosmkiycci: return $yciaosuiyeieceug; goto ycoiwiguwggowsug; oakqasoccyooqcqk: $yciaosuiyeieceug = false; goto eawommuykgayesso; qqooskcsgmwcqmyo: goto gsyaeawoooqaaeee; goto acymaqouwqmcmisy; muyyguewmgkysmqi: $yciaosuiyeieceug = false; goto acqcuwoawoiqqcgw; qeeakiaqiwkogiki: if (!isset($uiewakwqscemywuo["\163\x75\x63\x63\145\x73\163"]) || !$uiewakwqscemywuo["\163\x75\x63\x63\x65\163\163"]) { goto skqaokokoiksumqq; } goto ekqawkaqkgwygyys; kggqciusmciogeoc: if ($this->kgkoeoeseyuugaao()) { goto kqwioeqkgsgmmymg; } goto weookqwiumeyqgqe; yaysquwmiyumwecu: weiqkaaeieoaycas: goto oeeayggmgimqigqm; gaaikwwqsgaskqos: if ($this->cskwmweqysskwckg("\162\x65\x6a\x65\143\x74\145\144\137\x63\157\x6f\x6b\x69\145") && $this->cokqaygwwygweuyk()) { goto qcaiegucqcakoguk; } goto guyaeuucuqosewwe; csscwckocuaykoew: goto mkiiukgsugssgoea; goto mqkaiyymkmeyewiw; scwgaeqqquyqoeey: $this->log("\111\147\x6e\157\162\145\x64\40\x75\x72\154\40\x66\157\x75\156\x64\56", ["\160\145\x72\x6d\141\x6c\x69\x6e\153" => $this->iqyukmiuoisswoei()]); goto muyyguewmgkysmqi; iacsmyoeqsisuoqq: ceuqgimswukikqiq: goto wieuocqaikcuwsmg; kmcoguowgwkcuaec: skqaokokoiksumqq: goto ogeqwcqesgmkyqaw; swuiymekcguiocgu: ygyqyeocqgucysak: goto hwcueuuaimkiawcg; syowoqgquwemkyuy: goto ysceuaykccoiqqec; goto yaysquwmiyumwecu; kymoeekcwkmosuqm: $this->log("\x41\x64\x6d\x69\x6e\40\157\x72\40\101\112\101\x58\40\x55\122\x4c\x20\151\163\x20\x65\x78\x63\154\x75\x64\145\x64\56"); goto oakqasoccyooqcqk; weookqwiumeyqgqe: if ($this->gymgcceeqssmesiu()) { goto ygyqyeocqgucysak; } goto eqeggksucqsyyqgy; ogeqwcqesgmkyqaw: $this->log("\x4e\157\x20\143\157\x6e\146\x69\x67\40\146\x69\x6c\145\40\x66\157\165\156\x64\x2e", ["\x63\157\156\146\x69\x67\137\x70\141\x74\150" => $uiewakwqscemywuo["\160\x61\x74\x68"]]); goto iquamkkkakqceico; iyyskykwysmaiosq: goto ceuqgimswukikqiq; goto swuiymekcguiocgu; gescaykeyikwwqos: oeqeikgwugwquskq: goto eeaicwceqqsiymuq; dakcgwwcguscwcgs: uyaugcksmygwamwo: goto muemymcgeomwgqka; yyciyacskyymkcks: $yciaosuiyeieceug = false; goto tiyaygouckaskgga; mqkaiyymkmeyewiw: sagguseommuioaag: goto kymoeekcwkmosuqm; acqcuwoawoiqqcgw: kgsqmocueuiwmmcs: goto qqooskcsgmwcqmyo; wieuocqaikcuwsmg: goto ssiykmokuqwoukkq; goto ywqaqwigqqqcsyos; kggkkkouaeowcuea: oyuowamwkcqmgawq: goto eggksuwcamuciuyu; tiyaygouckaskgga: eewmmuqwyuumymau: goto syowoqgquwemkyuy; eeaicwceqqsiymuq: $this->log("\121\165\x65\162\x79\40\x73\x74\x72\151\x6e\x67\40\x55\122\114\x20\x69\163\x20\145\170\x63\x6c\165\x64\x65\144\x2e"); goto uiikmyqamcckswyq; eqeggksucqsyyqgy: if ($this->goecwaaykqoaaagg()) { goto sagguseommuioaag; } goto kiieeckyooaiakiy; amciqasycmesgweq: $yciaosuiyeieceug = false; goto qucimmcmsoikwmau; oyuyqykycywqikma: goto oyuowamwkcqmgawq; goto gescaykeyikwwqos; ycoiwiguwggowsug: } public function ocysssyiuaueqiei() : bool { return (bool) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\137\141\154\x6c\x6f\x77\x5f\164\157\x5f\x6f\x70\164\x69\155\151\x7a\x65"), false); } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { goto eqgwseukuesiwuuq; qykicwksywyiiqkk: $this->log("\120\141\x67\145\40\151\163\x20\x6e\x6f\164\x20\141\40\62\60\60\40\x48\124\x54\120\40\162\x65\163\160\157\x6e\x73\145\40\141\156\x64\x20\x63\x61\156\x6e\x6f\164\40\142\145\40\143\x61\x63\x68\145\x64\x2e"); goto awiawgewcmmiugqm; omikseuuygmokqsw: oewkyegysuioqeuy: goto sqackyqqakkykaus; awiawgewcmmiugqm: $yciaosuiyeieceug = false; goto meayoamiqaqouykk; oscqsgwcimqawseu: $this->log("\x6e\157\x74\40\x61\x6c\x6c\157\167\40\x74\x6f\x20\157\160\164\x69\x6d\x69\172\145\40\x74\x68\151\x73\x20\160\141\x67\145\x2e"); goto ysqeawycwuosoawe; egkiiogswgakiack: if (strlen($moooemyaqewumiay) <= 255) { goto wmigqcwwousgyuqc; } goto mgyqaewckasyuiie; iuqoaqsqmamokiaa: kaycsosiqusqeiio: goto uquoikaaykqmayco; uoeogwamkogoqoow: goto kkckckioiqcwoukw; goto emyigiiocasusaea; yackuaqwsqcwciyo: wmaqigaciaqiikcy: goto yqiaqmigsoeqmgwo; wuesuwyyyaesmkas: gosgumwgamwesssq: goto uoeogwamkogoqoow; uquoikaaykqmayco: return $yciaosuiyeieceug; goto qemwkwgoywqqwscg; wiaauiiuyogwauum: $this->log("\123\145\x61\x72\143\150\40\160\141\147\145\40\x69\x73\40\x65\x78\x63\x6c\165\x64\x65\144\56"); goto amwiioosseiocuic; cyueaiekggqumaic: ykyuusouwcesskqe: goto owseqyqgagqaacmy; yiqceakcgqweqwkq: wmigqcwwousgyuqc: goto sgykyaiuwiykyqqc; ggkkqomssqyqiquq: $yciaosuiyeieceug = false; goto iuqoaqsqmamokiaa; qweasgqgummkgesw: if (http_response_code() !== 200) { goto makeckokeoicueia; } goto skkkocayisgiuaoq; ykkuoyukeqkaiamg: if ($this->cskwmweqysskwckg("\x77\x70\137\64\x30\64") && $this->kmmyuiwaogukwqqi()) { goto aiwaekeqciwyimwi; } goto womyiwaoigaequiw; sqackyqqakkykaus: goto kaycsosiqusqeiio; goto yiqceakcgqweqwkq; iekwmuigmiooiugw: zocygeecusggsqgy: goto oscqsgwcimqawseu; emyigiiocasusaea: makeckokeoicueia: goto qykicwksywyiiqkk; owseqyqgagqaacmy: goto wqwmkcisgiyyoyam; goto squkoccwioggcaye; womyiwaoigaequiw: if (!($this->cskwmweqysskwckg("\163\x65\141\x72\x63\150") && $this->gouusicsisumuiei())) { goto ykyuusouwcesskqe; } goto wiaauiiuyogwauum; oqokmmqoikgwmsai: goto gosgumwgamwesssq; goto yackuaqwsqcwciyo; mgyqaewckasyuiie: if (!$this->ocysssyiuaueqiei()) { goto zocygeecusggsqgy; } goto qweasgqgummkgesw; yqiaqmigsoeqmgwo: $this->log("\104\117\116\x4f\124\x43\101\x43\x48\105\120\x41\107\105\x20\x69\x73\x20\x64\145\x66\x69\x6e\x65\x64\x2e\40\x50\x61\147\145\40\x63\x61\156\156\157\x74\x20\142\145\x20\x63\x61\143\150\145\144\56"); goto aiswkmkmkckuociu; skkkocayisgiuaoq: if ($this->cskwmweqysskwckg("\x64\157\x6e\x6f\164\143\141\143\x68\x65\160\x61\x67\x65") && $this->uykysuaiooyewmsc()) { goto wmaqigaciaqiikcy; } goto ykkuoyukeqkaiamg; aiswkmkmkckuociu: $yciaosuiyeieceug = false; goto wuesuwyyyaesmkas; amwiioosseiocuic: $yciaosuiyeieceug = false; goto cyueaiekggqumaic; ysqeawycwuosoawe: $yciaosuiyeieceug = false; goto omikseuuygmokqsw; cyeauauawcaoqwsi: $yciaosuiyeieceug = true; goto egkiiogswgakiack; sgykyaiuwiykyqqc: $this->log("\102\x75\146\146\145\162\40\x63\x6f\156\164\145\x6e\x74\x20\x75\x6e\144\145\162\40\62\x35\65\x20\143\141\x72\141\143\x74\145\x72\x73\56\72\40{$moooemyaqewumiay}"); goto ggkkqomssqyqiquq; mcacwiaagqysweem: wqwmkcisgiyyoyam: goto oqokmmqoikgwmsai; meayoamiqaqouykk: kkckckioiqcwoukw: goto igsmkqcwksaogqaq; oocgwowiyomcosac: $this->log("\127\120\40\x34\60\x34\x20\160\x61\147\145\40\151\163\40\145\170\x63\x6c\165\x64\145\x64\56"); goto ggywsksyyogoocie; eqgwseukuesiwuuq: $this->lastError = []; goto cyeauauawcaoqwsi; squkoccwioggcaye: aiwaekeqciwyimwi: goto oocgwowiyomcosac; ggywsksyyogoocie: $yciaosuiyeieceug = false; goto mcacwiaagqysweem; igsmkqcwksaogqaq: goto oewkyegysuioqeuy; goto iekwmuigmiooiugw; qemwkwgoywqqwscg: } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg($ymqmyyeuycgmigyo = '') : bool { goto muuoiakkusqamoia; ecsieaukkkskmiye: if (!$ymqmyyeuycgmigyo) { goto csmemsmogwosqkks; } goto iqoqyuokokywiqsg; qocgiimiggeksoky: return $umuecysoywoumgwo; goto uwowyggggqcqiuao; mickaocycsqkssoi: csmemsmogwosqkks: goto eeegygkcwmqmqyes; muuoiakkusqamoia: $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); goto ecsieaukkkskmiye; iqoqyuokokywiqsg: $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]); goto soqqgkywqwwiuymo; eeegygkcwmqmqyes: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); goto cgewwoksiyocyiga; cgewwoksiyocyiga: wiuqggsaqsscggyq: goto qocgiimiggeksoky; soqqgkywqwwiuymo: goto wiuqggsaqsscggyq; goto mickaocycsqkssoi; uwowyggggqcqiuao: } public function okkwqquawsoemamu(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function kgkoeoeseyuugaao() : bool { goto comoigwsemiiwoks; seimmqskqimoouui: oagaqukqswwgeqsa: goto ceycsuymgwmceuew; omkuusmocycoywqq: $ucasskoyoewwmmii = ["\162\x6f\x62\157\164\x73\x2e\x74\170\x74", "\56\x68\x74\141\x63\x63\x65\x73\x73"]; goto ycuossoamymsusws; cicagciwwymgewcm: ewuugiguuowassgm: goto omkuusmocycoywqq; uioqqaiayukmemcg: return $this->eecucukcqkqysiau(__FUNCTION__); goto seimmqskqimoouui; ceycsuymgwmceuew: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); goto ygyacaeuykeookuw; comoigwsemiiwoks: if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto oagaqukqswwgeqsa; } goto uioqqaiayukmemcg; ygyacaeuykeookuw: if ($iyiwooigkweeewey) { goto ewuugiguuowassgm; } goto ggaemwcyouewkgcm; ycuossoamymsusws: foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { goto wywgewmwqwqsysig; wywgewmwqwqsysig: if (!(false !== strpos($iyiwooigkweeewey, "\x2f" . $qogsmwakwacwqogk))) { goto eqwkmqasacseyecw; } goto ggkyameswcsquisg; uqwoeksekoweiwke: cmkiwqcgsmwyuggk: goto ykqeemyaewkmowyu; ggkyameswcsquisg: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); goto mwwimgssiegweqes; mwwimgssiegweqes: eqwkmqasacseyecw: goto uqwoeksekoweiwke; ykqeemyaewkmowyu: } goto egsqiegeesaowyyo; ggaemwcyouewkgcm: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); goto cicagciwwymgewcm; egsqiegeesaowyyo: usukksgaqiqwqeys: goto oouoqmemwouuymam; oouoqmemwouuymam: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); goto kmokgyokoacsqkcg; kmokgyokoacsqkcg: } public function sywgeyscigqsokyg() : bool { goto yyacgikiikmoesek; muwsmoccecigsoqc: if ($iyiwooigkweeewey && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $iyiwooigkweeewey)) { goto segicigoioeuyass; } goto aykkageemggigccw; yyacgikiikmoesek: if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto mkummeawiecmouws; } goto syumssoiimkseoum; wwskqqaskwicmaay: uqqiokcseqswsgia: goto koiysaseasuyieym; cemqmygogskcoygo: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); goto wwskqqaskwicmaay; iiswiwucogikyuse: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); goto aqysowuwkoqgsoku; kmcewougmoaciyky: mkummeawiecmouws: goto iiswiwucogikyuse; aykkageemggigccw: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); goto ikwcwqmomksisice; ikwcwqmomksisice: goto uqqiokcseqswsgia; goto ssayikwmgomomkkq; syumssoiimkseoum: return $this->eecucukcqkqysiau(__FUNCTION__); goto kmcewougmoaciyky; aqysowuwkoqgsoku: $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); goto muwsmoccecigsoqc; ssayikwmgomomkkq: segicigoioeuyass: goto cemqmygogskcoygo; koiysaseasuyieym: } public function gymgcceeqssmesiu() : bool { goto eykuqgakcouscsks; wokayyqugqaoewiy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); goto kgskcgusosyauysg; kcakqaaesggwiooc: $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); goto cwykioaoamgqueey; kicewoesgqwaasem: $wscgwsmykwacamuy = ["\x70\x68\160" => 1, "\170\155\x6c" => 1, "\x78\x73\154" => 1]; goto kcakqaaesggwiooc; mscskuyuseuoqaqm: awasoqakauqikkya: goto eicmoywsowuqoaou; yeequkyciegceoeo: return $this->eecucukcqkqysiau(__FUNCTION__); goto ggiqousqgowseosg; yymkyucwwqwymsse: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); goto mscskuyuseuoqaqm; eykuqgakcouscsks: if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto emiksyiouuqsigmq; } goto yeequkyciegceoeo; eicmoywsowuqoaou: if (!(strtolower($iyiwooigkweeewey) === "\57\151\156\144\145\x78\x2e\160\x68\x70")) { goto sqimcsougcukocky; } goto wokayyqugqaoewiy; kgskcgusosyauysg: sqimcsougcukocky: goto wagiyaqsgwiqyaie; cwykioaoamgqueey: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); goto uwiyeosqocyekygy; wagiyaqsgwiqyaie: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); goto kicewoesgqwaasem; wyeguiaumcoesuiy: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); goto auomkekgcqwsmgqu; auomkekgcqwsmgqu: if ($iyiwooigkweeewey) { goto awasoqakauqikkya; } goto yymkyucwwqwymsse; ggiqousqgowseosg: emiksyiouuqsigmq: goto wyeguiaumcoesuiy; uwiyeosqocyekygy: } public function goecwaaykqoaaagg() : bool { return is_admin() || defined("\104\x4f\x49\x4e\107\137\x41\112\101\x58") && DOING_AJAX; } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\160\137\143\165\x73\x74\157\155\x69\172\145"]); } public function gooeyogikcusgwuu() { $ickwkwoiegqacgqq = ["\x47\105\124" => 1, "\x48\105\x41\104" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { goto iuumaowkqqsoicgy; qaiaymokiyasqmic: qwimoyomwmmwkucy: goto eyyiqqumygsogaoq; iskggyooogqgowys: if ($eyagkkkqkwcuygso) { goto ackciywssqaumgac; } goto skqkiegmwieyweww; kiqcuyecmyaegims: $yccgiaiouekkouay = [ "\154\141\x6e\147" => 1, "\160\145\x72\x6d\141\x6c\x69\x6e\153\137\x6e\141\155\x65" => 1, "\154\x70\55\x76\141\162\x69\x61\164\x69\157\x6e\55\x69\x64" => 1, ]; goto comcaymsaykamcgi; essswiygiqegaayw: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); goto yugqeemimuuqeucm; skomukgmucsuaggq: cgiakccyuqqwmomc: goto essswiygiqegaayw; eyyiqqumygsogaoq: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); goto iskggyooogqgowys; caegiamkkykaqmqu: if ($yccgiaiouekkouay) { goto cgiakccyuqqwmomc; } goto wykyuuuooigicwgs; iuumaowkqqsoicgy: if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qwimoyomwmmwkucy; } goto awwiackkekswgamo; ousiwuqmksykqcec: ackciywssqaumgac: goto kiqcuyecmyaegims; yagmcusocgoqkewa: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); goto wesewyeqgccwmaos; awwiackkekswgamo: return $this->eecucukcqkqysiau(__FUNCTION__); goto qaiaymokiyasqmic; skqkiegmwieyweww: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); goto ousiwuqmksykqcec; yugqeemimuuqeucm: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); goto kuemgcgokyyggkoi; aoeeywugooqmewcc: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\143\x61\x63\150\145\137\x71\165\145\162\171\x5f\x73\x74\162\151\156\x67\163"); goto caegiamkkykaqmqu; wykyuuuooigicwgs: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); goto skomukgmucsuaggq; wesewyeqgccwmaos: cwygwqacakmoesuw: goto aoeeywugooqmewcc; comcaymsaykamcgi: if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto cwygwqacakmoesuw; } goto yagmcusocgoqkewa; kuemgcgokyyggkoi: } public function cokqaygwwygweuyk() { goto gwokcyciswoaygie; imsysaygciegsqok: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); goto mygsucymimsqmqky; qysommommieagsuw: eseawwcgusiywyge: goto aekaikwiqmuwwqia; mkcsckwgisqasmao: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); goto woikwmiiusqmoygy; aekaikwiqmuwwqia: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); goto ikmicisyykkwmeso; mygsucymimsqmqky: gugywasieysgmmyw: goto uwemyeqsgcieyymm; lhsckqwkqqauiqwy: foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { goto uewgegcascsimmaq; gcgwykikiomgmgqa: $eiocugauqgouiuyi[] = $aecgggeoymywyumm; goto kiaawmeeisegyugk; kiaawmeeisegyugk: suugmuecwqaakaoc: goto wysmsmaeqiucoycu; wysmsmaeqiucoycu: qimcgqssayewaygw: goto akeoiekwqqqgqamo; uewgegcascsimmaq: if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto suugmuecwqaakaoc; } goto gcgwykikiomgmgqa; akeoiekwqqqgqamo: } goto eosuykwimywegmse; uwemyeqsgcieyymm: $eiocugauqgouiuyi = []; goto lhsckqwkqqauiqwy; swuywmmasggeiqou: if (empty($eiocugauqgouiuyi)) { goto sqqqyyimyskaygea; } goto ceugiycaewioseoe; ceugiycaewioseoe: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); goto ieycgksaoqioisky; gwokcyciswoaygie: if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto eseawwcgusiywyge; } goto squqowgmqgocyqmi; ikmicisyykkwmeso: if ($osqkgokmuiasuukg) { goto soeiamgkkekwcoss; } goto cyqyggywyykwqyak; squqowgmqgocyqmi: return $this->eecucukcqkqysiau(__FUNCTION__); goto qysommommieagsuw; woikwmiiusqmoygy: if ($eymuoguywceaakys) { goto gugywasieysgmmyw; } goto imsysaygciegsqok; ieycgksaoqioisky: sqqqyyimyskaygea: goto qigcoauseeigksyc; qigcoauseeigksyc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); goto yakmisgikescmgoo; cyqyggywyykwqyak: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); goto osumgoskasckcieg; eosuykwimywegmse: uaamscmwcmumgasy: goto swuywmmasggeiqou; osumgoskasckcieg: soeiamgkkekwcoss: goto mkcsckwgisqasmao; yakmisgikescmgoo: } public function uykysuaiooyewmsc() : bool { goto gwqqoewaikqqueoe; sigosycgcicoiuuc: return !apply_filters("\x63\x61\x63\x68\145\137\157\x76\145\x72\162\151\x64\145\x5f\144\x6f\x6e\x74\x5f\x63\141\143\150\145\x5f\x70\x61\x67\145", false); goto iycocuaeccqgyoia; gwqqoewaikqqueoe: if (!(!defined("\117\x50\124\111\115\x49\x5a\x41\x54\111\117\x4e\137\x44\117\116\124\137\x43\101\103\x48\105\137\x50\101\x47\105") || !OPTIMIZATION_DONT_CACHE_PAGE)) { goto aacosyksiacoaeig; } goto muyymwciiieqymqw; dqcamiqqkwiowaag: aacosyksiacoaeig: goto sigosycgcicoiuuc; muyymwciiieqymqw: return false; goto dqcamiqqkwiowaag; iycocuaeccqgyoia: } public function kmmyuiwaogukwqqi() : bool { return !function_exists("\x69\163\137\x34\60\x34") || is_404(); } public function gouusicsisumuiei() : bool { goto kccciwsgesamyyau; omccwaywmcmqksmq: ycyyicuqwqcyqeig: goto imkwmsokcecosyse; imkwmsokcecosyse: return !apply_filters("\143\x61\x63\x68\x65\137\143\141\143\x68\145\137\x73\145\141\162\143\x68", false); goto osuskyuuggamicou; kccciwsgesamyyau: if (!(function_exists("\x69\x73\x5f\163\145\x61\162\143\x68") && !is_search())) { goto ycyyicuqwqcyqeig; } goto oameuaooiigaiucg; oameuaooiigaiucg: return false; goto omccwaywmcmqksmq; osuskyuuggamicou: } public function iqyukmiuoisswoei() : string { goto naiguckqsyeaesek; eqqaouecoaseisgq: if (!$iyiwooigkweeewey) { goto uaaiysoikgsuscqw; } goto kqmkicwuyqakoika; naiguckqsyeaesek: $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\105\x51\125\105\x53\x54\137\x55\122\x49", ''); goto eqqaouecoaseisgq; kmayccieqkkiqicw: return $iyiwooigkweeewey; goto umsckeuyiggsewac; suagmomycmooyggu: uaaiysoikgsuscqw: goto kmayccieqkkiqicw; kqmkicwuyqakoika: $iyiwooigkweeewey = "\57" . ltrim($iyiwooigkweeewey, "\x2f"); goto suagmomycmooyggu; umsckeuyiggsewac: } public function mcqmgiwowqqyiewk() : string { goto iymeugimwgcywusq; gwkeoekmeeqmmwgy: return $iyiwooigkweeewey; goto aikqumiqkkqaqgee; eiswwscyoaqoggge: $iyiwooigkweeewey = explode("\77", $iyiwooigkweeewey); goto qaqmwuwwqycmqkyg; iymeugimwgcywusq: if (!($iyiwooigkweeewey = $this->iqyukmiuoisswoei())) { goto skqmieiumikceamg; } goto eiswwscyoaqoggge; qaqmwuwwqycmqkyg: $iyiwooigkweeewey = reset($iyiwooigkweeewey); goto eyogsqkuigcksouq; eyogsqkuigcksouq: skqmieiumikceamg: goto gwkeoekmeeqmmwgy; aikqumiqkkqaqgee: } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\x45\x51\125\x45\123\x54\137\x4d\105\x54\x48\117\x44", '')); } public function sgqsyoyomwumyoky() : array { goto swusyoymaokumies; qqusymyoygwwueco: ksort($eyagkkkqkwcuygso); goto iuoiiwaosgqoeask; iuoiiwaosgqoeask: ukeksoegcoqokeik: goto giuuqwcsockoiqem; smqoegcueykkkiiq: return $eyagkkkqkwcuygso; goto wsqgykwqkgiwaksw; swusyoymaokumies: $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); goto xwymaakqyeoqaams; cmasgwmooaiccewo: $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\143\141\143\150\x65\x5f\x69\147\156\x6f\x72\x65\144\137\x70\141\x72\x61\155\x65\x74\x65\162\163"); goto cyckkcksiwwqasio; amcsamiamksyqmuq: if (!$ouwwgcimmokaqgeq) { goto iigucumgucicccac; } goto cmasgwmooaiccewo; giuuqwcsockoiqem: iigucumgucicccac: goto smqoegcueykkkiiq; xwymaakqyeoqaams: $eyagkkkqkwcuygso = []; goto amcsamiamksyqmuq; cyckkcksiwwqasio: $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); goto egemeuggwgwuayoi; egemeuggwgwuayoi: if (!$eyagkkkqkwcuygso) { goto ukeksoegcoqokeik; } goto qqusymyoygwwueco; wsqgykwqkgiwaksw: } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log($uamcoiueqaamsqma, $mgkceomocowocqyo = []) { goto qqyasyisimsuyiiw; gmgemamkswqeskmo: goto uegccyuaemgmocgu; goto gswsuaquqikkycwi; kyemcamscwoeeoiy: uegccyuaemgmocgu: goto ggawqqciikeiqiau; ywiyqcgyoweomkqg: error_log($uamcoiueqaamsqma); goto gmgemamkswqeskmo; eemgwkicuicwskms: $eawuoscsaksyqwiw->uimukyawykswgwsm("\x64\145\146\x61\165\x6c\164", $eawuoscsaksyqwiw::INFO_CODE, $uamcoiueqaamsqma, $mgkceomocowocqyo); goto kyemcamscwoeeoiy; gswsuaquqikkycwi: qcwaessgikigogay: goto eemgwkicuicwskms; yeywuuiugmgeuygm: if ($eawuoscsaksyqwiw && is_a($eawuoscsaksyqwiw, "\x50\x6d\x70\x72\x5c\x43\157\x6d\x6d\157\x6e\134\x46\157\x75\x6e\x64\x61\x74\x69\x6f\156\134\114\157\x67\147\x65\x72\134\105\156\x67\x69\x6e\145")) { goto qcwaessgikigogay; } goto ywiyqcgyoweomkqg; qqyasyisimsuyiiw: if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto iouecsmwqgaiycoq; } goto geqcuwsuqymcqiou; ggawqqciikeiqiau: iouecsmwqgaiycoq: goto mucqymyysqeiaqwk; geqcuwsuqymcqiou: $eawuoscsaksyqwiw = $this->mskuyeumceaigegs(); goto yeywuuiugmgeuygm; mucqymyysqeiaqwk: } }
