<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61afe111519f2             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Setting as BaseClass; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; class Setting extends BaseClass { const WEEKLY_FREQUENCY = "\167\x65\x65\x6b\154\x79"; const MONTHLY_FREQUENCY = "\x6d\157\156\164\x68\x6c\171"; const OPT_ = "\157\160\x74\x5f"; const SCHEDULE_AUTOMATIC_CLEANUP = self::OPT_ . "\x73\x63\x68\x65\x64\165\x6c\x65\x5f\x61\165\x74\x6f\x6d\x61\x74\151\143\137\x63\x6c\145\141\x6e\x75\160"; const AUTOMATIC_CLEANUP_FREQUENCY = self::OPT_ . "\141\165\x74\157\x6d\141\x74\151\x63\x5f\x63\154\145\141\x6e\165\160\x5f\x66\x72\x65\161\x75\145\x6e\x63\x79"; const AUTO_PURGE_ALL = "\160\165\x72\x67\x65\137\141\154\x6c"; const AUTO_PURGE_RELATED = "\x70\165\x72\147\x65\x5f\162\145\154\141\164\145\144"; const PURGE_ = self::OPT_ . "\x70\165\x72\147\x65\137"; const PURGE_PAGINATED = self::PURGE_ . "\x70\x61\147\x69\156\x61\164\x65\x64"; const PURGE_ON_COMMENTS = self::PURGE_ . "\x6f\156\x5f\x63\157\155\x6d\x65\156\x74\x73"; const PURGE_AUTOMATICALLY = self::PURGE_ . "\141\165\164\x6f\x6d\x61\x74\151\143\x61\x6c\154\171"; const PURGE_OPCACHE_ON_FLUSH = self::PURGE_ . "\157\x70\143\x61\x63\150\145\137\x6f\x6e\137\x66\154\x75\163\150"; const PURGE_AUTOMATICALLY_WOO_PRODUCT_PAGE = self::PURGE_AUTOMATICALLY . "\x5f\x77\157\x6f\137\160\162\x6f\144\x75\143\x74\137\x70\x61\x67\x65"; const PURGE_AUTOMATICALLY_WOO_SCHEDULED_SALES = self::PURGE_AUTOMATICALLY . "\137\x77\157\157\x5f\x73\143\x68\x65\x64\x75\x6c\x65\x64\137\x73\x61\154\145\x73"; const LICENSE_ = self::OPT_ . "\154\151\x63\145\156\x73\x65\137"; const SECRET_KEY = self::LICENSE_ . "\163\x65\143\x72\145\164\x5f\x6b\145\x79"; const ENABLE_DEBUG_MODE = self::ENABLE . "\137\144\x65\142\x75\x67\x5f\155\x6f\144\x65"; public function __construct() { goto yooqksokgugueoyu; yooqksokgugueoyu: $wksoawcgagcgoask = self::akuociswqmoigkas(); goto egasiugmqoomiams; mummsuuiqsqckmqu: parent::__construct(); goto agemwcwmiqisoagc; egasiugmqoomiams: $this->name = $wksoawcgagcgoask; goto kasmyowscwyiuqok; kasmyowscwyiuqok: $this->parentMenu = $wksoawcgagcgoask; goto mummsuuiqsqckmqu; agemwcwmiqisoagc: } public function gogaagekwoisaqgu() { $this->menuTitle = __("\x53\145\164\x74\x69\156\x67", PR__PKG__OPTIMIZATION); $this->pageTitle = __("\x4f\160\x74\x69\155\151\x7a\x61\x74\151\157\x6e\40\x53\x65\x74\x74\151\x6e\147", PR__PKG__OPTIMIZATION); } public function ecwgiiuacoaokqkw() { parent::ecwgiiuacoaokqkw(); $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$this->aakmagwggmkoiiyu()}\x5f\x64\x61\163\150\x62\x6f\141\x72\144", __("\x44\141\x73\150\x62\157\x61\162\144", PR__PKG__OPTIMIZATION))->sikqggwmmykuiymy(self::cgygmuguceeosoey(self::OPT_ . self::GENERAL, __("\x47\145\x6e\x65\x72\141\x6c", PR__PKG__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ENABLE, __("\x45\156\141\142\x6c\x65\40\117\160\x74\151\x6d\x69\172\x61\x74\x69\157\156", PR__PKG__OPTIMIZATION), __("\x43\x68\145\143\x6b\x20\164\157\40\x65\156\x61\x62\154\145\x20\141\x6c\x6c\40\x6f\x70\x74\x69\x6d\151\172\x61\164\151\x6f\156\x20\x66\x75\x6e\143\164\x69\157\x6e\141\x6c\x69\164\x79\x2c\40\x79\x6f\165\40\143\141\156\40\144\x69\x73\141\x62\x6c\145\40\x65\141\143\150\40\x73\145\x63\164\151\x6f\156\x20\151\x6e\40\164\x61\x62\163\x20\x74\x6f\x6f\56", PR__PKG__OPTIMIZATION))->agywyaaquwawwuiy([self::SECRET_KEY, self::ENABLE_DEBUG_MODE]))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ENABLE_DEBUG_MODE, __("\105\x6e\x61\x62\154\x65\x20\104\145\x62\165\x67\40\x4d\x6f\144\145", PR__PKG__OPTIMIZATION)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::SECRET_KEY, __("\123\145\143\x72\145\164\40\113\x65\x79", PR__PKG__OPTIMIZATION), __("\125\163\x65\144\40\x66\157\x72\40\160\x72\145\154\157\x61\144\x20\x61\x6e\x64\40\x70\165\162\147\x65\x20\x63\162\x6f\x6e\152\x6f\142\56", PR__PKG__OPTIMIZATION))->yskkmqiusguummwa()->eyygsasuqmommkua(wp_generate_password(20, false, false))->oykaosmaegqwmoga())->saemoowcasogykak(IconFontawesomeInterface::ICON_GEAR))->sikqggwmmykuiymy(self::cgygmuguceeosoey("{$this->aakmagwggmkoiiyu()}\137\160\x75\162\x67\x65", __("\120\x75\162\147\145", PR__PKG__OPTIMIZATION))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$this->aakmagwggmkoiiyu()}\137\x70\x75\162\x67\x65\137\x67\x65\156\x65\162\141\x6c", __("\107\145\x6e\145\162\x61\154", PR__PKG__OPTIMIZATION))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::PURGE_AUTOMATICALLY, __("\x41\165\x74\x6f\155\x61\164\x69\x63\x61\154\x6c\171\40\x50\x75\x72\x67\x65\x20\103\x61\x63\x68\145", PR__PKG__OPTIMIZATION), [self::AUTO_PURGE_RELATED => sprintf("\45\x73\40\55\40\45\x73", __("\120\165\162\x67\145\x20\x63\141\x63\x68\x65\x20\x66\x6f\x72\x20\162\145\x6c\x61\x74\145\144\x20\x70\x61\147\x65\163\40\157\x6e\154\171", PR__PKG__OPTIMIZATION), __("\x28\162\145\143\157\155\155\145\x6e\144\145\144\x29", PR__PKG__OPTIMIZATION)), self::AUTO_PURGE_ALL => __("\120\x75\x72\x67\x65\40\x77\150\x6f\154\x65\40\143\x61\x63\x68\x65", PR__PKG__OPTIMIZATION)], __("\x41\165\x74\x6f\x6d\141\x74\151\x63\141\x6c\x6c\171\40\160\165\162\x67\x65\40\164\x68\x65\40\x63\141\143\150\x65\40\167\150\145\156\40\x73\157\155\x65\164\150\x69\x6e\x67\40\x63\150\x61\156\x67\x65\163\40\157\156\40\164\150\145\40\167\x65\x62\163\151\x74\145\x2e", PR__PKG__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::PURGE_ON_COMMENTS, __("\120\x75\x72\x67\145\40\103\x61\x63\x68\145\x20\117\156\x20\103\157\155\155\x65\156\164", PR__PKG__OPTIMIZATION), __("\101\165\164\157\155\x61\x74\x69\x63\141\x6c\x6c\171\x20\160\165\162\x67\x65\40\x73\151\x6e\x67\154\145\40\160\x6f\x73\164\40\x63\x61\143\150\145\40\167\150\x65\x6e\x20\x61\x20\156\145\x77\x20\143\x6f\155\155\x65\156\x74\x20\x69\x73\x20\151\156\x73\145\x72\x74\x65\144\x20\151\x6e\164\x6f\40\164\150\x65\x20\x64\x61\x74\141\x62\141\x73\145\40\x6f\162\x20\167\150\145\x6e\x20\x61\x20\143\x6f\155\155\145\x6e\x74\40\151\163\40\x61\160\160\x72\157\166\x65\x64\x20\x6f\x72\x20\x64\145\154\145\x74\x65\144\x2e", PR__PKG__OPTIMIZATION)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::PURGE_PAGINATED, __("\x50\141\x67\151\156\x61\x74\x69\x6f\156\40\120\165\x72\147\145", PR__PKG__OPTIMIZATION), __("\103\x68\x6f\x69\143\145\x20\150\x6f\x77\x20\155\x61\156\171\x20\x6f\146\x20\160\x61\x67\151\x6e\x61\164\x65\144\x20\160\141\147\x65\163\x2c\40\x61\165\164\x6f\155\141\164\151\x63\141\154\x6c\171\40\x70\x75\x72\147\145\40\x6f\146\x20\x70\x75\x72\147\151\x6e\147\40\141\x72\x63\150\x69\166\145\163\56", PR__PKG__OPTIMIZATION))->escqqisecooswqgo(0)->eyygsasuqmommkua(10))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::PURGE_OPCACHE_ON_FLUSH, __("\120\x75\x72\x67\145\x20\117\x50\103\x61\143\150\145\40\157\156\x20\x46\x6c\165\163\x68", PR__PKG__OPTIMIZATION), __("\101\x75\x74\x6f\x6d\141\x74\151\x63\141\154\x6c\171\40\160\165\x72\x67\145\40\x74\150\x65\40\x4f\x50\143\x61\143\x68\145\x20\167\x68\x65\x6e\x20\x63\141\143\150\x65\x20\x69\163\40\x70\x75\162\x67\x65\x64\x2e", PR__PKG__OPTIMIZATION)))->saemoowcasogykak(IconFontawesomeInterface::ICON_GEAR))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("\157\160\164\x69\x6d\151\172\x61\x74\x69\x6f\156\x5f\x63\154\x6f\x75\x64\146\x6c\x61\162\x65\x5f\x70\x6c\165\147\x69\156\163\137\167\x6f\157\143\x6f\155\x6d\145\x72\x63\145", __("\127\157\x6f\143\x6f\155\x6d\x65\x72\143\145", PR__PKG__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::PURGE_AUTOMATICALLY_WOO_PRODUCT_PAGE, __("\120\x75\x72\147\145\x20\157\156\x20\121\165\141\156\x74\151\x74\x79\x20\103\x68\141\156\x67\145\163", PR__PKG__OPTIMIZATION), __("\101\165\164\x6f\155\x61\x74\x69\x63\x61\154\x6c\x79\40\x70\165\162\x67\x65\40\x63\x61\143\150\145\x20\x66\x6f\x72\40\160\162\x6f\144\x75\x63\164\40\160\x61\x67\145\40\141\x6e\144\x20\x72\145\x6c\x61\164\x65\x64\x20\x63\141\164\x65\x67\x6f\x72\151\x65\163\40\167\150\145\156\x20\163\164\x6f\x63\x6b\40\x71\165\141\x6e\164\x69\x74\171\40\x63\150\x61\156\147\145\x73\56", PR__PKG__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::PURGE_AUTOMATICALLY_WOO_SCHEDULED_SALES, __("\x50\x75\x72\147\x65\40\x66\x6f\x72\x20\121\x75\141\x6e\x74\151\164\171\x20\123\143\150\x65\x64\165\154\145\144\x20\x53\141\154\x65\163", PR__PKG__OPTIMIZATION), __("\x41\x75\x74\x6f\x6d\x61\x74\x69\143\141\x6c\x6c\171\40\x70\x75\x72\x67\x65\40\143\141\143\150\145\40\x66\x6f\x72\40\163\x63\150\x65\144\x75\x6c\x65\144\40\163\141\154\x65\x73\56", PR__PKG__OPTIMIZATION)))->saemoowcasogykak(IconFontawesomeInterface::ICON_STORE))->saemoowcasogykak(IconFontawesomeInterface::ICON_BROOM)->wiukukykqcgssssq(ManipulateWoocommerce::ayseokmqycoqaigc()))->saemoowcasogykak(IconFontawesomeInterface::ICON_HOME)->jyumyyugiwwiqomk(1)); } public function ueiyqqwuiqmmqymc() : MetaBox { goto cqqoaacqwsgsaymw; cswyeeccwkqqsick: if (!self::ayseokmqycoqaigc()) { goto uimugqewwuwguoay; } goto oqcucsciagwqmkia; gioywmqkqcemcqoq: $qkweikswegyciaie->mkksewyosgeumwsa(self::qoeiescseggagsqs("\157\160\x74\137\x70\x75\x72\147\x65\137\x63\141\143\x68\x65", $meqocwsecsywiiqs, __("\x50\x75\x72\147\x65\40\x61\154\154\40\x63\141\x63\150\x65\x20\x69\x6e\143\x6c\165\144\x65\x20\150\x74\x6d\154\x20\x61\x6e\144\x20\x61\163\163\x65\164\40\x61\156\144\x20\x63\154\x6f\165\x64\x66\x6c\x61\x72\x65\x20\x63\x61\x63\150\145\56", PR__PKG__OPTIMIZATION))->ukmcmuaawacquume(["\x74\x79\x70\x65" => "\x77\x61\x72\x6e\151\156\147", "\164\x69\x74\154\x65" => $meqocwsecsywiiqs, "\x63\157\x6e\164\x65\x6e\x74" => __("\101\x72\145\x20\x79\x6f\x75\40\163\x75\162\x65\x20\x61\142\157\x75\164\40\160\165\162\x67\x65\40\x61\154\x6c\40\x63\x61\x63\x68\145\163\x3f", PR__PKG__OPTIMIZATION), "\x62\165\x74\x74\157\156\x73" => ["\143\x61\x6e\143\x65\x6c", ["\143\x6c\141\163\163" => "\x6f\x70\x74\x2d\x70\165\x72\x67\x65\x2d\x63\141\x63\x68\145\x20\142\164\156\x20\x62\164\x6e\x2d\x70\162\151\x6d\x61\x72\171", "\x74\x69\164\x6c\x65" => __("\120\x75\162\x67\145", PR__PKG__OPTIMIZATION)]]])->ygagwkucacyassau()->muywawimuacwmkgw(true)); goto rouiwqegswowiiie; oqcucsciagwqmkia: $meqocwsecsywiiqs = __("\120\165\162\147\x65\x20\103\141\143\150\145", PR__PKG__OPTIMIZATION); goto gioywmqkqcemcqoq; rouiwqegswowiiie: uimugqewwuwguoay: goto eywmyayuiaqsyogc; cqqoaacqwsgsaymw: $qkweikswegyciaie = self::cgygmuguceeosoey("{$this->aakmagwggmkoiiyu()}\x5f\144\x61\x73\x68\x62\x6f\x61\162\144\x5f\x71\x75\151\143\153\x5f\141\143\x74\x69\x6f\156\x73", __("\x41\x63\164\x69\157\x6e\163", PR__PKG__OPTIMIZATION))->saemoowcasogykak(IconFontawesomeInterface::ICON_GEARS); goto cswyeeccwkqqsick; eywmyayuiaqsyogc: return $qkweikswegyciaie; goto gscycqkuumemawcw; gscycqkuumemawcw: } public static function ayseokmqycoqaigc($qeqooyuoiasweuck = null) : bool { return (bool) self::eiwcuqigayigimak(self::ENABLE, false, $qeqooyuoiasweuck); } public static function iwgikkiwuiaiemui() : bool { return (bool) self::eiwcuqigayigimak(self::SCHEDULE_AUTOMATIC_CLEANUP, false); } public static function gugmuuowmsiyqagu() : bool { return (string) self::eiwcuqigayigimak(self::AUTOMATIC_CLEANUP_FREQUENCY, self::WEEKLY_FREQUENCY); } public static function siwumcgggquiyyiu($wmekckkyoiyickmk = null) : bool { $wyoiusauqaouuukk = self::eiwcuqigayigimak(self::PURGE_AUTOMATICALLY); return !$wmekckkyoiyickmk && in_array($wyoiusauqaouuukk, [self::AUTO_PURGE_ALL, self::AUTO_PURGE_RELATED]) || $wmekckkyoiyickmk && $wmekckkyoiyickmk == $wyoiusauqaouuukk; } public static function ocyemqkgwaiyeioe() : bool { return (bool) Setting::eiwcuqigayigimak(Setting::PURGE_ON_COMMENTS); } public function imsomwwswyoquoqk() { parent::imsomwwswyoquoqk(); $this->cqscqicucmeamkyq("\145\156\x71\165\145\165\x65\x5f\x73\x63\162\x69\160\164\x5f{$this->cisyiemkeykgkomc()}", $this); } }
