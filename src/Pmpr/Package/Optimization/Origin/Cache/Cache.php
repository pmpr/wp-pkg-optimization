<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c7258cc4499             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Optimization\Manipulate\ManipulateFile; use Pmpr\Package\Optimization\Manipulate\ManipulateFormat; use Pmpr\Package\Optimization\Notice; class Cache extends Common { public function __construct() { if (!$this->cyowaaeywssoooeo()) { goto sukcyismwageqgok; } parent::__construct(); $this->iemaakgqgqosiecm(); sukcyismwageqgok: } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x63\x6f\155\x6d\145\x6e\164\137\143\157\x6f\153\x69\145\137\154\x69\146\x65\164\151\155\145", [$this, "\x61\x61\x63\x67\x75\151\161\x6b\147\x79\171\x69\155\171\147\x6b"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\164\x5f\143\x72\x6f\x6e\x5f\x65\x76\x65\156\164\163"), [$this, "\165\161\145\x6d\147\141\x79\x77\x63\141\147\171\167\x6d\171\141"])->cecaguuoecmccuse("\x66\x69\154\x65\x73\171\163\164\x65\x6d\x5f\162\145\x71\x75\x69\x72\145\137\x64\x69\x72\145\143\x74\157\x72\151\x65\163", [$this, "\151\x77\165\x71\x67\x79\x67\155\x6b\x63\x73\151\x61\153\147\153"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\x74\137\x63\x6f\x6e\x66\x69\147\x75\x72\141\164\151\x6f\156\163"), [$this, "\155\153\x6f\163\x79\163\x75\171\x75\157\x79\161\153\x73\161\157"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\164\x5f\x63\x61\143\150\x65\x5f\x71\165\145\x72\x79\137\x73\164\162\x69\x6e\x67\x73"), [$this, "\x65\x6b\141\x79\x61\x63\145\153\163\171\171\171\157\141\171\145"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x69\163\137\x6f\x70\x74\151\155\151\172\145\x64"), [$this, "\167\x77\163\x79\141\155\x6b\153\171\141\x75\x77\x73\145\171\x67"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\x63\x61\x6e\x5f\160\x72\145\x6c\157\141\x64"), [$this, "\x79\x73\x75\151\161\153\x67\171\x63\155\x61\x67\161\x71\171\x75"], 10, 2); parent::kgquecmsgcouyaya(); } public function cyowaaeywssoooeo() : bool { $ksaameoqigiaoigg = false; if ($skacuygeqykiwiwy = Manipulate::cmaecekuqkwmemms("\120\122\137\x5f\103\101\x43\110\x45\x5f\137\x50\101\124\x48")) { goto ukmgwuiqwgyiouec; } Notice::ymqcyaqqcyuicwqu("\157\160\164\x69\x6d\x69\172\141\x74\x69\x6f\x6e\x2d\143\141\x63\150\145\55\160\141\x74\150", __("\x4f\160\164\151\x6d\151\x7a\141\164\x69\157\x6e\40\x43\141\x63\x68\x65\x20\120\x61\x74\x68", PR__PKG__OPTIMIZATION), $skacuygeqykiwiwy); goto qykcggwgkweasuii; ukmgwuiqwgyiouec: $ksaameoqigiaoigg = ManipulateFile::koymmiyegyskqgck("\117\120\x54\x49\115\x49\132\x41\124\x49\117\116\137\103\101\103\x48\x45\137\x50\101\x54\110", "{$skacuygeqykiwiwy}\57\x77\x70\x2d\143\x61\143\150\145"); qykcggwgkweasuii: return $ksaameoqigiaoigg; } public function iemaakgqgqosiecm() { Purge::symcgieuakksimmu(); if (!is_admin()) { goto geoiegikocwmwosi; } WPCache::symcgieuakksimmu(); Advanced::symcgieuakksimmu(); geoiegikocwmwosi: } public function wwsyamkkyauwseyg($geyqgckicikewwke = [], $migiiksoiymissge = '') : array { $acqcekoeswseswws = $this->cckisoakyqqgywey($migiiksoiymissge); $geyqgckicikewwke[] = $this->kcciqwskewsuaemk()->exists($acqcekoeswseswws); return $geyqgckicikewwke; } public function uqemgaywcagywmya($wyceuweoyiyegaeu) { $wyceuweoyiyegaeu["\x6f\160\164\151\155\151\172\x61\x74\x69\157\x6e\137\x70\x75\x72\147\145\137\x74\x69\155\x65\x5f\x65\166\145\x6e\x74"] = __("\123\x63\x68\145\144\165\154\x65\x64\x20\103\141\143\x68\145\40\120\x75\162\147\x65", PR__PKG__OPTIMIZATION); return $wyceuweoyiyegaeu; } public function ysuiqkgycmagqqyu($gkuksucqwuewkwws, $igqsaukqcqscimok) : bool { static $ueicioocowkieeme; if (!$gkuksucqwuewkwws) { goto okawiaowosqickgq; } $eeamcawaiqocomwy = ManipulateArray::get($igqsaukqcqscimok, "\165\162\154", $igqsaukqcqscimok); if (!is_string($eeamcawaiqocomwy)) { goto eqsuaywswuesuika; } $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $msimssikcguyqcac["\160\x61\x74\x68"] = trailingslashit($msimssikcguyqcac["\x70\141\164\150"]); if (!('' !== $msimssikcguyqcac["\x71\165\145\x72\x79"])) { goto wasuquysysmqyegg; } $msimssikcguyqcac["\161\x75\145\x72\171"] = "\x23" . $msimssikcguyqcac["\161\x75\145\x72\171"] . "\x2f"; wasuquysysmqyegg: $iomcqougosimesoq = ManipulateArray::get($igqsaukqcqscimok, "\155\x6f\x62\x69\x6c\x65") ? "\x2d\x6d\x6f\x62\151\x6c\x65" : ''; $egiaskcmkqcsuwiq = Manipulate::cmaecekuqkwmemms("\117\x50\124\x49\115\111\x5a\x41\124\111\117\116\137\x43\x41\103\110\105\x5f\x50\x41\124\x48") . $msimssikcguyqcac["\x68\157\x73\x74"] . strtolower($msimssikcguyqcac["\x70\141\x74\x68"] . $msimssikcguyqcac["\x71\x75\x65\x72\x79"]) . "\151\x6e\144\x65\170" . $iomcqougosimesoq . $ueicioocowkieeme . "\56\x68\164\155\154"; $gkuksucqwuewkwws = $this->kcciqwskewsuaemk()->exists($egiaskcmkqcsuwiq); eqsuaywswuesuika: okawiaowosqickgq: return $gkuksucqwuewkwws; } public function mkosysuyuoyqksqo(array $oyuikeusicgqgwak) : array { $oyuikeusicgqgwak["\x63\141\143\x68\145\137\145\x6e\x61\142\x6c\x65"] = $this->ayywsmwowwsesusw() ? 1 : 0; return $oyuikeusicgqgwak; } public function aacguiqkgyyimygk($uagwomscgeccywsq) { return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\137\143\x61\x63\150\145\x5f\143\157\x6d\155\x65\156\164\137\143\157\157\x6b\151\x65\137\154\151\146\x65\x74\x69\x6d\x65"), 3 * MINUTE_IN_SECONDS); } public function iwuqgygmkcsiakgk($msyoeiaqaaseqiaw) : array { $msyoeiaqaaseqiaw[] = Manipulate::cmaecekuqkwmemms("\117\x50\124\111\115\x49\x5a\x41\124\x49\x4f\x4e\137\x43\101\x43\x48\x45\137\120\101\124\x48"); $msyoeiaqaaseqiaw[] = Manipulate::cmaecekuqkwmemms("\117\120\x54\111\115\x49\x5a\101\124\111\x4f\116\x5f\x43\117\116\x46\x49\x47\137\x50\101\124\x48"); return $msyoeiaqaaseqiaw; } public function ekayaceksyyyoaye($kewscequsakouquq) { global $is_nginx; if (!$is_nginx) { goto ogciikaecauiwgyk; } $kewscequsakouquq[] = "\161"; ogciikaecauiwgyk: return $kewscequsakouquq; } }
