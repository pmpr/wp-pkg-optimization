<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ce3555451c4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; class Cache extends Common { public function __construct() { if (!$this->cyowaaeywssoooeo()) { goto wakmayaoqoskekqy; } parent::__construct(); $this->iemaakgqgqosiecm(); wakmayaoqoskekqy: } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\143\157\155\155\x65\156\164\x5f\143\x6f\x6f\x6b\x69\x65\x5f\x6c\x69\146\x65\164\x69\x6d\145", [$this, "\x61\141\143\x67\x75\151\161\x6b\x67\171\x79\x69\155\171\x67\x6b"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\x74\137\143\162\x6f\156\137\145\x76\145\156\x74\163"), [$this, "\165\161\145\x6d\147\x61\x79\167\x63\x61\147\171\167\155\171\141"])->cecaguuoecmccuse("\x66\x69\154\x65\163\x79\163\164\145\x6d\x5f\162\x65\x71\165\151\162\145\137\x64\x69\162\145\143\x74\157\162\151\x65\163", [$this, "\151\167\165\161\147\x79\147\x6d\153\x63\x73\151\x61\153\x67\x6b"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x63\x6f\x6e\x66\151\x67\x75\x72\x61\164\151\157\x6e\163"), [$this, "\x6d\153\x6f\163\171\x73\x75\x79\x75\x6f\x79\x71\x6b\x73\x71\x6f"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\164\x5f\x63\141\x63\150\145\137\161\165\x65\x72\x79\x5f\x73\164\162\x69\x6e\x67\163"), [$this, "\145\x6b\141\171\141\x63\145\x6b\x73\x79\x79\x79\157\141\171\x65"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\x74\x5f\151\x73\x5f\157\x70\164\x69\x6d\151\x7a\x65\144"), [$this, "\167\167\x73\171\141\x6d\x6b\153\x79\141\x75\167\163\145\x79\147"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\x63\141\156\x5f\160\x72\145\154\157\x61\x64"), [$this, "\171\x73\165\151\161\x6b\147\171\143\155\141\147\x71\161\171\165"], 10, 2); parent::kgquecmsgcouyaya(); } public function cyowaaeywssoooeo() : bool { $ksaameoqigiaoigg = false; if ($skacuygeqykiwiwy = Manipulate::cmaecekuqkwmemms("\x50\122\x5f\137\103\x41\103\x48\x45\x5f\x5f\x50\x41\x54\110")) { goto qmuwoecuacmkwgem; } $this->syiuacooagmooima("\143\x61\x63\150\145\55\x70\141\x74\x68", __("\103\x61\143\150\145\x20\120\141\x74\x68", PR__MDL__OPTIMIZATION), $skacuygeqykiwiwy); goto owmuceyswmgueasi; qmuwoecuacmkwgem: $ksaameoqigiaoigg = ManipulateFile::koymmiyegyskqgck("\x4f\x50\124\111\115\x49\132\101\x54\x49\117\x4e\x5f\x43\101\103\x48\x45\x5f\x50\101\124\x48", "{$skacuygeqykiwiwy}\57\x6f\x70\164\x2d\x63\141\x63\x68\x65"); owmuceyswmgueasi: return $ksaameoqigiaoigg; } public function iemaakgqgqosiecm() { Purge::symcgieuakksimmu(); if (!DecoratorQuery::goecwaaykqoaaagg()) { goto mwsmsguqqkcwiiuk; } WPCache::symcgieuakksimmu(); Advanced::symcgieuakksimmu(); mwsmsguqqkcwiiuk: } public function wwsyamkkyauwseyg($geyqgckicikewwke = [], $migiiksoiymissge = '') : array { $acqcekoeswseswws = $this->cckisoakyqqgywey($migiiksoiymissge); $geyqgckicikewwke[] = $this->kcciqwskewsuaemk()->exists($acqcekoeswseswws); return $geyqgckicikewwke; } public function uqemgaywcagywmya($wyceuweoyiyegaeu) { $wyceuweoyiyegaeu["\x6f\x70\164\151\x6d\x69\x7a\141\x74\x69\157\x6e\137\x70\165\x72\x67\145\137\x74\x69\155\x65\x5f\x65\166\x65\x6e\x74"] = __("\123\x63\x68\x65\x64\165\154\145\x64\x20\x43\141\143\x68\x65\40\x50\165\x72\x67\x65", PR__MDL__OPTIMIZATION); return $wyceuweoyiyegaeu; } public function ysuiqkgycmagqqyu($gkuksucqwuewkwws, $igqsaukqcqscimok) : bool { static $ueicioocowkieeme; if (!$gkuksucqwuewkwws) { goto msemumccgceyugmg; } $eeamcawaiqocomwy = ManipulateArray::get($igqsaukqcqscimok, "\x75\162\154", $igqsaukqcqscimok); if (!is_string($eeamcawaiqocomwy)) { goto eogwckcymuugikuy; } $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $msimssikcguyqcac["\160\x61\164\x68"] = trailingslashit($msimssikcguyqcac["\x70\x61\x74\x68"]); if (!('' !== $msimssikcguyqcac["\161\165\145\162\171"])) { goto eeauyscekuckoues; } $msimssikcguyqcac["\x71\x75\145\x72\171"] = "\43" . $msimssikcguyqcac["\161\165\x65\x72\x79"] . "\x2f"; eeauyscekuckoues: $iomcqougosimesoq = ManipulateArray::get($igqsaukqcqscimok, "\x6d\x6f\x62\x69\154\145") ? "\x2d\x6d\x6f\142\151\x6c\145" : ''; $egiaskcmkqcsuwiq = Manipulate::cmaecekuqkwmemms("\117\120\x54\x49\x4d\x49\x5a\x41\124\x49\117\x4e\x5f\103\101\x43\110\105\x5f\120\101\124\x48") . $msimssikcguyqcac["\150\x6f\x73\164"] . strtolower($msimssikcguyqcac["\x70\x61\164\x68"] . $msimssikcguyqcac["\161\x75\x65\162\171"]) . "\x69\x6e\x64\145\170" . $iomcqougosimesoq . $ueicioocowkieeme . "\x2e\150\x74\155\154"; $gkuksucqwuewkwws = $this->kcciqwskewsuaemk()->exists($egiaskcmkqcsuwiq); eogwckcymuugikuy: msemumccgceyugmg: return $gkuksucqwuewkwws; } public function mkosysuyuoyqksqo(array $oyuikeusicgqgwak) : array { $oyuikeusicgqgwak["\x63\x61\143\x68\145\137\145\x6e\141\142\x6c\x65"] = $this->ayywsmwowwsesusw() ? 1 : 0; return $oyuikeusicgqgwak; } public function aacguiqkgyyimygk($uagwomscgeccywsq) { return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\137\143\x61\x63\150\145\x5f\x63\157\155\155\x65\156\x74\137\143\x6f\x6f\x6b\151\x65\137\154\151\146\145\164\151\x6d\145"), 3 * MINUTE_IN_SECONDS); } public function iwuqgygmkcsiakgk($msyoeiaqaaseqiaw) : array { $msyoeiaqaaseqiaw[] = Manipulate::cmaecekuqkwmemms("\x4f\x50\124\111\x4d\x49\x5a\x41\x54\x49\x4f\x4e\137\x43\101\103\x48\105\137\120\x41\x54\110"); $msyoeiaqaaseqiaw[] = Manipulate::cmaecekuqkwmemms("\117\x50\124\x49\115\x49\x5a\101\124\111\x4f\x4e\137\103\x4f\x4e\106\x49\107\137\120\x41\x54\x48"); return $msyoeiaqaaseqiaw; } public function ekayaceksyyyoaye($kewscequsakouquq) { global $is_nginx; if (!$is_nginx) { goto wagqgeqymeqoeuyi; } $kewscequsakouquq[] = "\x71"; wagqgeqymeqoeuyi: return $kewscequsakouquq; } }
