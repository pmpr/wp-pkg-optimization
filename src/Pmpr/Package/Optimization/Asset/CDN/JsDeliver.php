<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c1fcad85629             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\CDN; use Pmpr\Common\Foundation\Decorator\DecoratorCron; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateRequest; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use WP_Dependencies; use WP_Scripts; class JsDeliver extends Common { const ADVANCED_MODE = "\x61\x64\x76\x61\x6e\x63\145\144\x5f\155\157\144\145"; const JSDELIVR_URL = "\x6a\163\144\x65\x6c\x69\166\162\x5f\x75\x72\154"; const AUTO_ENABLE = "\x61\165\164\x6f\145\156\141\142\x6c\145"; const AUTO_MINIFY = "\x61\x75\x74\x6f\155\x69\x6e\x69\x66\x79"; const SOURCE_LIST = "\x73\x6f\x75\162\143\145\x5f\x6c\x69\x73\164"; const SCHEDULE_KEY = "\157\x70\164\151\x6d\151\172\x61\x74\x69\x6f\156\137\x66\x69\x66\164\145\x65\156\137\x6d\x69\156\x75\164\145\163"; const CDN_URL = "\x68\x74\164\160\x73\x3a\57\x2f\x63\144\156\x2e\x6a\x73\x64\x65\154\x69\166\x72\x2e\x6e\x65\164\x2f"; const STORED_ITEMS = "\157\160\164\x69\155\151\x7a\x61\164\151\157\x6e\x5f\143\156\x64\137\152\x73\x5f\144\x65\154\151\166\145\x72\x5f\x69\164\x65\155\163"; const HASH_LOOKUP_URL = "\150\164\164\x70\x73\x3a\57\57\144\x61\x74\141\56\152\163\x64\x65\154\151\166\x72\56\x63\x6f\x6d\57\x76\61\x2f\x6c\157\x6f\x6b\x75\160\x2f\150\141\x73\150\x2f"; const LAST_LOADED_DATETIME = "\154\141\x73\x74\x5f\x6c\157\x61\144\x65\x64\137\144\x61\164\145\x74\x69\x6d\145"; const ANALYZE_CRON_HOOK = "\x6f\160\164\151\155\151\x7a\141\x74\151\x6f\156\x5f\x63\x6e\x64\x5f\152\163\144\x65\x6c\x69\166\162\137\141\156\x61\x6c\x79\x7a\145\x5f\143\162\157\x6e\137\150\x6f\157\153"; const REMOVE_OLD_CRON_HOOK = "\x6f\160\x74\151\x6d\x69\172\141\x74\x69\157\156\137\143\x6e\144\137\x6a\163\x64\x65\x6c\x69\x76\x72\137\162\x65\155\x6f\166\x65\x5f\157\x6c\x64\137\x63\162\x6f\x6e\x5f\150\157\x6f\153"; const COMMENT_PATTERN = "\x2f\134\x2f\134\x2a\x5b\x5c\163\x5c\x53\135\52\x3f\x5c\x2a\x5c\x2f\x7c\134\x2f\x5c\x2f\56\52\77\50\77\x3a\134\x6e\174\x24\x29\57"; protected array $items = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\151\164", [$this, "\x69\x6e\151\164"])->qcsmikeggeemccuu(self::ANALYZE_CRON_HOOK, [$this, "\x79\161\x67\x69\x71\161\x61\171\x61\x6d\x79\145\x65\155\165\x75"])->qcsmikeggeemccuu(self::REMOVE_OLD_CRON_HOOK, [$this, "\x61\x73\x71\167\x71\x61\x71\x6f\x77\x67\145\171\171\141\x79\167"])->qcsmikeggeemccuu("\167\160\x5f\160\162\x69\x6e\x74\137\163\x63\x72\x69\x70\164\163", [$this, "\x6f\171\x75\x71\163\155\153\x69\x77\151\153\x67\x61\161\x73\x77"], 9999)->qcsmikeggeemccuu("\167\x70\x5f\160\162\151\156\164\137\163\x74\x79\x6c\145\x73", [$this, "\x6b\171\x79\x77\167\161\157\147\143\x6f\x63\x67\x63\147\x77\x6d"], 9999); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x63\x72\157\x6e\x5f\x73\143\150\145\x64\165\x6c\145\x73", [$this, "\163\151\171\x6b\155\x6d\165\163\x6b\x73\155\161\x6d\163\x77\x63"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\164\x5f\x65\x78\x63\x6c\165\x64\145\137\163\157\165\162\x63\x65\x73"), [$this, "\147\163\147\163\155\x6b\x65\x79\x75\x77\x71\x71\155\163\151\151"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\x74\x5f\160\x65\162\x66\157\x72\155\141\156\143\145\x5f\x72\145\x73\x6f\165\162\143\x65\137\150\x69\x6e\x74"), [$this, "\x77\141\x6b\157\147\x63\x6d\x77\143\141\171\x63\x69\x6f\161\145"]); parent::kgquecmsgcouyaya(); } public function gsgsmkeyuwqqmsii(array $couiucmsqaieciue = []) : array { $couiucmsqaieciue[] = self::CDN_URL; return $couiucmsqaieciue; } public function wakogcmwcaycioqe($wqogggcaamgeiwew) { $wqogggcaamgeiwew[] = self::CDN_URL; return $wqogggcaamgeiwew; } public function init() { if (DecoratorCron::sceqickmyoseqcue(self::ANALYZE_CRON_HOOK)) { goto qkiyyywwuiuackao; } DecoratorCron::uwugaiqywmseksqm(time(), self::SCHEDULE_KEY, self::ANALYZE_CRON_HOOK); qkiyyywwuiuackao: if (DecoratorCron::sceqickmyoseqcue(self::REMOVE_OLD_CRON_HOOK)) { goto gyskcwykkyakeims; } DecoratorCron::uwugaiqywmseksqm(time(), self::wmasmcgmyeoaisoa, self::REMOVE_OLD_CRON_HOOK); gyskcwykkyakeims: $this->items = DecoratorOption::get(self::STORED_ITEMS, []); if ($this->wasgwsogmuquqeaa()) { goto ossakckwskyqusmm; } $this->items = [self::SOURCE_LIST => [], self::AUTO_MINIFY => true, self::AUTO_ENABLE => true, self::ADVANCED_MODE => false]; $this->ciaesowswgmgckaa(); ossakckwskyqusmm: } public function wasgwsogmuquqeaa() : array { return $this->items; } public function yqgiqqayamyeemuu() : array { global $wp_scripts, $wp_styles; $icwicymcioeyeyek = []; $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa(); $ecukkacusqswqoem = false; foreach ($oammesyieqmwuwyi[self::SOURCE_LIST] as $eueuqacmukymcyya => $egsumesakcaaukem) { $uueqecyckaweeyai = $egsumesakcaaukem["\x68\141\x6e\x64\x6c\x65"]; $iakkeikwceeomgyq = ManipulateArray::get($wp_styles->registered, $uueqecyckaweeyai, ManipulateArray::get($wp_scripts->registered, $uueqecyckaweeyai, false)); if (!$iakkeikwceeomgyq) { goto easuiqiooiwgswmm; } if (!(!$egsumesakcaaukem[self::JSDELIVR_URL] && $iakkeikwceeomgyq->src)) { goto cimascmiesomqgqs; } $oammesyieqmwuwyi[self::SOURCE_LIST][$eueuqacmukymcyya][self::JSDELIVR_URL] = $this->giqeuqaeqeaogcgo($iakkeikwceeomgyq); $ecukkacusqswqoem = true; cimascmiesomqgqs: $icwicymcioeyeyek[$eueuqacmukymcyya] = $oammesyieqmwuwyi[self::SOURCE_LIST][$eueuqacmukymcyya][self::JSDELIVR_URL]; easuiqiooiwgswmm: aamgqoqyyooimqkm: } mcagemacuqyskogs: if (!$ecukkacusqswqoem) { goto saiuoomgskwgyeya; } $this->items = $oammesyieqmwuwyi; $this->ciaesowswgmgckaa(); saiuoomgskwgyeya: return $icwicymcioeyeyek; } public function giqeuqaeqeaogcgo($iakkeikwceeomgyq) { $yuoeykkoggaegkiu = ''; $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa(); $wsqkocmmsoiquqwm = $iakkeikwceeomgyq->src; $muqcqaqwsaoagykg = []; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!$wsqkocmmsoiquqwm) { goto gsgyayuaekgyoumc; } $kuuiuigeacouwmaa = strpos($wsqkocmmsoiquqwm, "\57\x2f"); if (false !== $kuuiuigeacouwmaa) { goto kuuawiosmkgqsscy; } $ykscweuoqwqcmsmo = $iiaumsgauuyeqksw->souwykwwmyygqyqi($wsqkocmmsoiquqwm); goto kwocaqggwcksesce; kuuawiosmkgqsscy: $keccaugmemegoimu = wp_safe_remote_get((0 === $kuuiuigeacouwmaa ? "\x68\x74\x74\160\72" : '') . $wsqkocmmsoiquqwm, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = wp_remote_retrieve_body($keccaugmemegoimu); kwocaqggwcksesce: if (!$ykscweuoqwqcmsmo) { goto ugikgkwuwmgymgus; } $mgeemcksyiuqaemy = hash("\163\x68\x61\62\65\66", $ykscweuoqwqcmsmo); $icwicymcioeyeyek = $this->yaouiiywcouyyimi($mgeemcksyiuqaemy); if (isset($icwicymcioeyeyek["\146\151\x6c\145"])) { goto mukwsuuuqcgesmwc; } if (preg_match("\x2f\x77\x70\x2d\143\x6f\156\164\x65\x6e\x74\x5c\57\160\154\165\x67\151\156\163\134\x2f\50\77\74\x70\154\165\x67\x69\156\76\133\136\x5c\x2f\135\x2a\51\x5c\57\50\x3f\x3c\146\151\x6c\145\x3e\x2e\x2a\51\57\x69", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto acaeigkmigikeuyu; } if (!preg_match("\57\167\x70\x2d\143\157\x6e\164\145\x6e\x74\134\57\164\x68\x65\155\x65\163\x5c\x2f\x28\x3f\74\164\150\145\155\145\x3e\133\x5e\134\x2f\135\52\x29\x5c\57\x28\77\x3c\x66\x69\x6c\x65\x3e\x2e\x2a\x29\x2f\x69", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto mciumqyyossyiuyk; } if (!($meyiiwcswqmuggyg["\164\150\x65\x6d\145"] && $meyiiwcswqmuggyg["\x66\151\x6c\145"])) { goto uwusswwekqcsisus; } $mumucmmgemqwqiia = wp_get_theme($meyiiwcswqmuggyg["\x74\x68\x65\155\x65"]); if (!$mumucmmgemqwqiia->exists()) { goto kssuqmsgmaaeqigw; } $mckmqeqaekwkwems = self::CDN_URL . "\x77\160\57\164\x68\145\155\x65\163\x2f{$meyiiwcswqmuggyg["\x74\x68\x65\155\145"]}\57{$mumucmmgemqwqiia->get("\126\x65\162\x73\x69\x6f\156")}\x2f{$meyiiwcswqmuggyg["\x66\151\154\145"]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto egwgyekaiqomyeaa; } $yuoeykkoggaegkiu = $mckmqeqaekwkwems; egwgyekaiqomyeaa: kssuqmsgmaaeqigw: uwusswwekqcsisus: mciumqyyossyiuyk: goto kqyeukywmgismyaq; acaeigkmigikeuyu: if (!($meyiiwcswqmuggyg["\x70\154\x75\147\x69\156"] && $meyiiwcswqmuggyg["\x66\x69\x6c\145"])) { goto cgwokqwakqcmiieo; } $plugin_file = ABSPATH . "\167\x70\x2d\143\157\x6e\164\x65\x6e\164\57\x70\x6c\165\147\x69\x6e\x73\x2f{$meyiiwcswqmuggyg["\x70\x6c\x75\147\151\156"]}\x2f{$meyiiwcswqmuggyg["\x70\x6c\165\147\x69\156"]}\x2e\x70\x68\x70"; if (file_exists($plugin_file)) { goto iiiwsgameuomumgw; } $php_files = glob(ABSPATH . "\x77\x70\x2d\x63\157\x6e\x74\x65\x6e\x74\x2f\160\154\x75\x67\x69\156\x73\57{$meyiiwcswqmuggyg["\x70\154\x75\147\151\156"]}\x2f\52\56\x70\x68\160"); foreach ($php_files as $mkomwsiykqigmqca) { $muqcqaqwsaoagykg = get_plugin_data($mkomwsiykqigmqca); if (!$muqcqaqwsaoagykg["\x56\x65\162\163\151\x6f\x6e"]) { goto agyooskogigyayws; } goto bgakaasgwwygosyi; agyooskogigyayws: aucwccaiqwsmyuaq: } bgakaasgwwygosyi: goto mcukocaaoyuugoeu; iiiwsgameuomumgw: $muqcqaqwsaoagykg = get_plugin_data($plugin_file); mcukocaaoyuugoeu: if (!$muqcqaqwsaoagykg["\x56\145\162\x73\151\x6f\156"]) { goto okycquokqoamsquy; } $mckmqeqaekwkwems = self::CDN_URL . "\x77\x70\x2f\160\x6c\x75\147\x69\156\163\x2f{$meyiiwcswqmuggyg["\160\x6c\x75\147\151\x6e"]}\57\164\x61\x67\163\57{$muqcqaqwsaoagykg["\x56\145\x72\x73\151\157\156"]}\x2f{$meyiiwcswqmuggyg["\x66\151\154\145"]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto scockmiqikwwkqse; } $yuoeykkoggaegkiu = $mckmqeqaekwkwems; scockmiqikwwkqse: okycquokqoamsquy: cgwokqwakqcmiieo: kqyeukywmgismyaq: goto cqeoguiqiymkyweo; mukwsuuuqcgesmwc: if (!("\x57\157\x72\x64\x50\x72\x65\x73\163\57\x57\x6f\162\144\x50\x72\x65\163\x73" === $icwicymcioeyeyek["\x6e\x61\x6d\x65"])) { goto momuweiasiwskekw; } $icwicymcioeyeyek["\166\145\162\x73\151\157\156"] = get_bloginfo("\x76\145\x72\x73\x69\157\156"); momuweiasiwskekw: $mckmqeqaekwkwems = self::CDN_URL . "{$icwicymcioeyeyek["\x74\171\x70\145"]}\57{$icwicymcioeyeyek["\156\141\155\145"]}\100{$icwicymcioeyeyek["\x76\145\x72\x73\x69\x6f\156"]}{$icwicymcioeyeyek["\146\151\154\145"]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto qaewauyekqucciyc; } $yuoeykkoggaegkiu = $mckmqeqaekwkwems; qaewauyekqucciyc: cqeoguiqiymkyweo: if (!($oammesyieqmwuwyi[self::AUTO_MINIFY] && !$this->cgsqaegiswcuoggi($ykscweuoqwqcmsmo))) { goto omgcsmsikaggaooc; } $yuoeykkoggaegkiu = substr_replace($yuoeykkoggaegkiu, "\56\155\x69\x6e", strrpos($yuoeykkoggaegkiu, "\56"), 0); omgcsmsikaggaooc: $gqqycaoyaweqigmi = wp_check_filetype($yuoeykkoggaegkiu); $wuayakmyggcomiuy = wp_check_filetype($wsqkocmmsoiquqwm); if (!($wuayakmyggcomiuy["\x65\x78\164"] !== $gqqycaoyaweqigmi["\145\170\x74"])) { goto wykuosegisygosiq; } $yuoeykkoggaegkiu = ''; wykuosegisygosiq: ugikgkwuwmgymgus: gsgyayuaekgyoumc: return $yuoeykkoggaegkiu; } private function cgsqaegiswcuoggi($ykscweuoqwqcmsmo) : bool { $ymacoouqwcqwwagu = preg_replace(self::COMMENT_PATTERN, '', $ykscweuoqwqcmsmo); return strlen($ymacoouqwcqwwagu) / count(preg_split("\x2f\x5c\156\x2f", $ymacoouqwcqwwagu)) > 200; } private function yaouiiywcouyyimi(string $mgeemcksyiuqaemy) { $sogksuscggsicmac = false; $keccaugmemegoimu = ManipulateRequest::yyqgamuwwakgciey(self::HASH_LOOKUP_URL . $mgeemcksyiuqaemy, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = ManipulateRequest::ykqgmaeumqwokcmo($keccaugmemegoimu); if (!$ykscweuoqwqcmsmo) { goto omemqagskckoeoog; } $sogksuscggsicmac = json_decode($ykscweuoqwqcmsmo, true); $sogksuscggsicmac["\x73\150\x61\62\65\x36"] = $mgeemcksyiuqaemy; omemqagskckoeoog: return $sogksuscggsicmac; } public function qycuagacqaecigyi(string $eeamcawaiqocomwy, string $mgeemcksyiuqaemy) : bool { $cqaakiwueoeaoewq = [200]; $keccaugmemegoimu = wp_safe_remote_get($eeamcawaiqocomwy, $this->eeykuoewogequiii()); if (!(is_wp_error($keccaugmemegoimu) || !in_array(wp_remote_retrieve_response_code($keccaugmemegoimu), $cqaakiwueoeaoewq, true))) { goto aeuosggumiiwoesm; } return false; aeuosggumiiwoesm: $ykscweuoqwqcmsmo = wp_remote_retrieve_body($keccaugmemegoimu); $kyquyseskckkouak = hash("\163\x68\141\x32\65\x36", $ykscweuoqwqcmsmo); return $kyquyseskckkouak === $mgeemcksyiuqaemy; } public function enqueue($oseqkueswiwsceis) { if (!$this->ocysssyiuaueqiei()) { goto aiqekkyauwswayyq; } $ecukkacusqswqoem = false; if (!$oseqkueswiwsceis instanceof WP_Dependencies) { goto syykqmkiyoekqsek; } foreach ($oseqkueswiwsceis->queue as $eueuqacmukymcyya) { $ecukkacusqswqoem = $this->waowasqqegsqwoay($eueuqacmukymcyya, $oseqkueswiwsceis) || $ecukkacusqswqoem; uyksacasqywyessc: } wyqmeyoaggwuioak: if (!$ecukkacusqswqoem) { goto sqmqwqeoygcmqcim; } $this->ciaesowswgmgckaa(); sqmqwqeoygcmqcim: syykqmkiyoekqsek: aiqekkyauwswayyq: } public function kyywwqogcocgcgwm() { global $wp_styles; $this->enqueue($wp_styles); } public function oyuqsmkiwikgaqsw() { global $wp_scripts; $this->enqueue($wp_scripts); } public function ciaesowswgmgckaa() { DecoratorOption::update(self::STORED_ITEMS, $this->wasgwsogmuquqeaa()); } public function asqwqaqowgeyyayw() { $ecukkacusqswqoem = false; $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa(); foreach ($oammesyieqmwuwyi[self::SOURCE_LIST] as $momcykaoccoymeig => $egsumesakcaaukem) { if (!(time() - $egsumesakcaaukem[self::LAST_LOADED_DATETIME] > 60 * 60 * 24 * 2)) { goto wsqiqkiucakewgou; } unset($oammesyieqmwuwyi[self::SOURCE_LIST][$momcykaoccoymeig]); $ecukkacusqswqoem = true; wsqiqkiucakewgou: ywsywoumuaykkeaa: } mmcikqikqecaeswu: if (!$ecukkacusqswqoem) { goto yaumwqeommqigswq; } $this->items = $oammesyieqmwuwyi; $this->ciaesowswgmgckaa(); yaumwqeommqigswq: } public function siykmmusksmqmswc($immuisiomomksweo) { $immaoamcsocgawcg = ManipulateArray::get($immuisiomomksweo, self::SCHEDULE_KEY); if ($immaoamcsocgawcg) { goto wiiqigwgyuiuksia; } $immuisiomomksweo[self::SCHEDULE_KEY] = ["\151\x6e\164\145\162\x76\141\x6c" => 15 * 60, "\x64\x69\163\160\x6c\141\171" => esc_html__("\x45\x76\145\162\171\x20\x46\151\146\x74\x65\145\156\40\115\x69\x6e\165\164\x65\x73", PR__PKG__OPTIMIZATION)]; wiiqigwgyuiuksia: return $immuisiomomksweo; } private function waowasqqegsqwoay(string $eueuqacmukymcyya, ?WP_Dependencies $ugmuiugkaygmsagq = null) : bool { $ecukkacusqswqoem = false; if (!$ugmuiugkaygmsagq) { goto ascogkesqmuuaesq; } $sqeykgyoooqysmca = $ugmuiugkaygmsagq instanceof WP_Scripts ? "\163\143\162\x69\160\164" : "\163\x74\x79\154\145"; $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa(); $egsumesakcaaukem = ManipulateArray::get($ugmuiugkaygmsagq->registered, $eueuqacmukymcyya); $aguwegoioikwgooy = "{$sqeykgyoooqysmca}\x2d{$eueuqacmukymcyya}"; if (!($egsumesakcaaukem && !preg_match("\x2f\143\x64\156\56\x6a\x73\x64\145\x6c\x69\x76\x72\x2e\156\145\x74\x7c\147\157\x6f\147\154\x65\141\160\151\57\x69", $egsumesakcaaukem->src))) { goto gsgkayokisiesciy; } if (!isset($oammesyieqmwuwyi[self::SOURCE_LIST][$aguwegoioikwgooy])) { goto agyycikucwgmysee; } if (!(time() - $oammesyieqmwuwyi[self::SOURCE_LIST][$aguwegoioikwgooy][self::LAST_LOADED_DATETIME] > 60 * 60 * 24)) { goto mqoygcuqwacgycek; } $oammesyieqmwuwyi[self::SOURCE_LIST][$aguwegoioikwgooy][self::LAST_LOADED_DATETIME] = time(); $ecukkacusqswqoem = true; mqoygcuqwacgycek: goto aiukiwqmikscoswm; agyycikucwgmysee: $oammesyieqmwuwyi[self::SOURCE_LIST][$aguwegoioikwgooy] = ["\x68\x61\156\144\154\x65" => $eueuqacmukymcyya, self::JSDELIVR_URL => '', self::LAST_LOADED_DATETIME => time()]; $ecukkacusqswqoem = true; aiukiwqmikscoswm: if (!(isset($oammesyieqmwuwyi[self::SOURCE_LIST][$aguwegoioikwgooy]) && $oammesyieqmwuwyi[self::SOURCE_LIST][$aguwegoioikwgooy][self::JSDELIVR_URL])) { goto seieguyaaiqismgo; } $ogomymegcoacqisg = $oammesyieqmwuwyi[self::SOURCE_LIST][$aguwegoioikwgooy][self::JSDELIVR_URL]; if ($ogomymegcoacqisg) { goto mcmkqgkwyqoiikcq; } $ogomymegcoacqisg = $egsumesakcaaukem->src; mcmkqgkwyqoiikcq: if ("\x73\x63\162\151\x70\164" === $sqeykgyoooqysmca) { goto giooasyeqwaaocea; } if (!("\163\x74\x79\x6c\x65" === $sqeykgyoooqysmca)) { goto qmegcmqemmywoqas; } wp_deregister_style($eueuqacmukymcyya); wp_register_style($eueuqacmukymcyya, $ogomymegcoacqisg, $egsumesakcaaukem->deps, $egsumesakcaaukem->ver); foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { wp_style_add_data($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie); kwiuqqwamsimqgme: } yyieomeeqycmikqw: qmegcmqemmywoqas: goto uueywyysiicuauem; giooasyeqwaaocea: wp_deregister_script($eueuqacmukymcyya); wp_register_script($eueuqacmukymcyya, $ogomymegcoacqisg, $egsumesakcaaukem->deps, $egsumesakcaaukem->ver, true); foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { wp_script_add_data($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie); gskacikgkwcuauko: } ssyukuseoymackeo: uueywyysiicuauem: seieguyaaiqismgo: $this->items = $oammesyieqmwuwyi; foreach ($egsumesakcaaukem->deps as $icycamqakysyomsi) { $ecukkacusqswqoem = $ecukkacusqswqoem || $this->waowasqqegsqwoay($icycamqakysyomsi, $ugmuiugkaygmsagq); kkwqmewaksmokuqy: } qgyoesyiasqimcoe: gsgkayokisiesciy: ascogkesqmuuaesq: return $ecukkacusqswqoem; } public function agkwcckksaegcsce(string $ogomymegcoacqisg) : string { if (strpos($ogomymegcoacqisg, "\x2f\57") !== false) { goto wssaaemscmmiomee; } $acqcekoeswseswws = ltrim($ogomymegcoacqisg, "\57"); goto meqmcgmksqiqcoyq; wssaaemscmmiomee: $cgmkimaosyyuqeyg = site_url(); if (strpos($ogomymegcoacqisg, $cgmkimaosyyuqeyg) === 0) { goto askukaucmocewkgg; } $acqcekoeswseswws = $ogomymegcoacqisg; goto kiemqsgcmouqscao; askukaucmocewkgg: $acqcekoeswseswws = ltrim(str_replace($cgmkimaosyyuqeyg, '', $ogomymegcoacqisg), "\x2f"); kiemqsgcmouqscao: meqmcgmksqiqcoyq: return $acqcekoeswseswws; } private function eeykuoewogequiii() : array { return []; } }
