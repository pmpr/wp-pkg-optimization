<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62b8861f25a3c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; class Cache extends Common { public function __construct() { if (!$this->cyowaaeywssoooeo()) { goto wucacaegysmiusai; } parent::__construct(); $this->iemaakgqgqosiecm(); wucacaegysmiusai: } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\143\x6f\155\x6d\x65\156\164\137\x63\x6f\157\153\151\x65\x5f\x6c\151\x66\145\x74\151\x6d\145", [$this, "\x61\x61\143\x67\165\151\x71\153\147\171\171\151\x6d\171\147\153"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\x74\137\143\162\x6f\x6e\137\x65\x76\145\x6e\164\163"), [$this, "\165\161\145\x6d\x67\141\x79\167\x63\141\x67\x79\167\x6d\x79\x61"])->cecaguuoecmccuse("\x66\x69\154\145\x73\171\163\164\145\x6d\x5f\x72\145\161\165\x69\x72\x65\137\x64\151\x72\145\143\164\x6f\x72\151\x65\163", [$this, "\151\x77\x75\161\x67\x79\147\x6d\x6b\143\x73\151\x61\x6b\147\x6b"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\164\x5f\x63\157\x6e\146\151\147\x75\162\141\164\x69\x6f\156\x73"), [$this, "\155\x6b\157\x73\x79\x73\165\x79\165\157\x79\161\x6b\x73\161\157"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\164\137\143\141\x63\x68\145\137\x71\x75\145\162\171\x5f\x73\164\x72\x69\x6e\x67\x73"), [$this, "\145\x6b\141\x79\x61\x63\145\153\x73\x79\x79\171\157\141\x79\x65"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\x74\137\x69\163\137\157\160\164\151\x6d\151\x7a\x65\144"), [$this, "\x77\167\163\x79\x61\x6d\x6b\x6b\171\141\x75\167\x73\145\171\x67"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\x74\x5f\x63\141\x6e\x5f\x70\x72\145\x6c\157\x61\144"), [$this, "\171\x73\x75\151\161\153\147\171\x63\x6d\141\x67\161\x71\171\165"], 10, 2); parent::kgquecmsgcouyaya(); } public function cyowaaeywssoooeo() : bool { $ksaameoqigiaoigg = false; if ($skacuygeqykiwiwy = Manipulate::cmaecekuqkwmemms("\120\122\x5f\137\x43\x41\103\110\105\137\x5f\x50\101\124\x48")) { goto eeomcmuiqwgwwuqk; } $this->syiuacooagmooima("\x63\141\x63\150\145\55\x70\x61\164\x68", __("\x43\141\x63\x68\x65\x20\120\141\x74\150", PR__MDL__OPTIMIZATION), $skacuygeqykiwiwy); goto mseokuecmeoyoggk; eeomcmuiqwgwwuqk: $ksaameoqigiaoigg = ManipulateFile::koymmiyegyskqgck("\x4f\x50\x54\x49\x4d\x49\132\x41\124\x49\x4f\116\x5f\103\101\x43\110\x45\x5f\120\x41\x54\110", "{$skacuygeqykiwiwy}\x2f\157\160\x74\55\143\x61\143\150\145"); mseokuecmeoyoggk: return $ksaameoqigiaoigg; } public function iemaakgqgqosiecm() { Purge::symcgieuakksimmu(); if (!DecoratorQuery::goecwaaykqoaaagg()) { goto uookseqsmsqgweuy; } WPCache::symcgieuakksimmu(); Advanced::symcgieuakksimmu(); uookseqsmsqgweuy: } public function wwsyamkkyauwseyg($geyqgckicikewwke = [], $migiiksoiymissge = '') : array { $acqcekoeswseswws = $this->cckisoakyqqgywey($migiiksoiymissge); $geyqgckicikewwke[] = $this->kcciqwskewsuaemk()->exists($acqcekoeswseswws); return $geyqgckicikewwke; } public function uqemgaywcagywmya($wyceuweoyiyegaeu) { $wyceuweoyiyegaeu["\x6f\x70\164\x69\x6d\x69\x7a\141\164\x69\157\x6e\x5f\x70\165\162\x67\145\137\x74\x69\155\x65\x5f\145\166\x65\156\164"] = __("\x53\143\x68\x65\x64\165\154\x65\x64\x20\103\141\143\x68\145\x20\120\x75\x72\147\145", PR__MDL__OPTIMIZATION); return $wyceuweoyiyegaeu; } public function ysuiqkgycmagqqyu($gkuksucqwuewkwws, $igqsaukqcqscimok) : bool { static $ueicioocowkieeme; if (!$gkuksucqwuewkwws) { goto iigmgswcogqemgao; } $eeamcawaiqocomwy = ManipulateArray::get($igqsaukqcqscimok, "\165\x72\x6c", $igqsaukqcqscimok); if (!is_string($eeamcawaiqocomwy)) { goto esgyqksmcukeuwyk; } $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $msimssikcguyqcac["\x70\141\x74\x68"] = trailingslashit($msimssikcguyqcac["\x70\x61\x74\x68"]); if (!('' !== $msimssikcguyqcac["\161\x75\145\162\171"])) { goto yeaqsiqgakskoykg; } $msimssikcguyqcac["\x71\165\x65\162\171"] = "\x23" . $msimssikcguyqcac["\161\165\x65\x72\171"] . "\57"; yeaqsiqgakskoykg: $iomcqougosimesoq = ManipulateArray::get($igqsaukqcqscimok, "\155\157\x62\x69\154\x65") ? "\55\x6d\x6f\x62\x69\x6c\145" : ''; $egiaskcmkqcsuwiq = Manipulate::cmaecekuqkwmemms("\117\x50\124\x49\x4d\x49\x5a\101\124\x49\117\116\137\103\101\103\x48\105\x5f\x50\x41\x54\x48") . $msimssikcguyqcac["\x68\157\x73\x74"] . strtolower($msimssikcguyqcac["\x70\x61\x74\x68"] . $msimssikcguyqcac["\x71\165\145\162\x79"]) . "\x69\x6e\x64\x65\x78" . $iomcqougosimesoq . $ueicioocowkieeme . "\x2e\x68\x74\155\x6c"; $gkuksucqwuewkwws = $this->kcciqwskewsuaemk()->exists($egiaskcmkqcsuwiq); esgyqksmcukeuwyk: iigmgswcogqemgao: return $gkuksucqwuewkwws; } public function mkosysuyuoyqksqo(array $oyuikeusicgqgwak) : array { $oyuikeusicgqgwak["\x63\141\x63\150\145\x5f\145\x6e\141\x62\154\x65"] = $this->ayywsmwowwsesusw() ? 1 : 0; return $oyuikeusicgqgwak; } public function aacguiqkgyyimygk($uagwomscgeccywsq) { return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\x5f\x63\x61\143\x68\x65\137\x63\x6f\155\x6d\145\156\x74\x5f\143\157\157\x6b\x69\145\x5f\154\x69\146\145\164\151\155\145"), 3 * MINUTE_IN_SECONDS); } public function iwuqgygmkcsiakgk($msyoeiaqaaseqiaw) : array { $msyoeiaqaaseqiaw[] = Manipulate::cmaecekuqkwmemms("\x4f\120\124\111\115\x49\132\101\x54\111\x4f\116\137\103\x41\x43\x48\105\x5f\120\x41\x54\x48"); $msyoeiaqaaseqiaw[] = Manipulate::cmaecekuqkwmemms("\117\120\124\x49\x4d\111\132\101\x54\x49\x4f\x4e\x5f\103\117\116\x46\x49\107\137\120\x41\124\x48"); return $msyoeiaqaaseqiaw; } public function ekayaceksyyyoaye($kewscequsakouquq) { global $is_nginx; if (!$is_nginx) { goto ycaqooeeseougumo; } $kewscequsakouquq[] = "\161"; ycaqooeeseougumo: return $kewscequsakouquq; } }
