<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             634ceeff4f14f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Bypass; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\Optimization\Manipulate\Manipulate; class Bypass extends Common { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\160\x72\x65\137\160\157\x73\164\137\165\160\x64\x61\164\145", [$this, "\x6f\x63\x6b\x73\141\143\151\171\155\x67\x69\143\157\x61\x61\x63"], 10, 2); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\164\137\x63\157\156\x66\151\147\x75\x72\141\164\151\x6f\156\x73"), [$this, "\167\x75\147\157\153\171\x75\157\155\163\151\x69\167\x61\167\151"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\x69\163\x5f\x62\x79\x70\141\x73\x73"), [$this, "\171\x69\167\163\x77\x65\x75\x79\x65\x6d\x6b\x79\x69\171\165\155"], 10, 2); } public function yiwsweuyemkyiyum($qeoqkiisysuqyeqw, $migiiksoiymissge) { $ucccueqywigcukcc = $this->iqkiiwsyqkwkyuyy(); if (!($ucccueqywigcukcc && preg_match("\x23{$ucccueqywigcukcc}\x23", $migiiksoiymissge))) { goto imeaiksowuukikui; } $qeoqkiisysuqyeqw = true; imeaiksowuukikui: return $qeoqkiisysuqyeqw; } public function ocksaciymgicoaac($yekqqesogweecqyc, $icwicymcioeyeyek) { if (!($mkomwsiykqigmqca = Manipulate::cmaecekuqkwmemms(self::muqmwceaiwwakwws))) { goto weggeeowykuqooyg; } $iueymcwwscwqkiyq = ManipulatePost::ucwmcwqmqwaymkkc($yekqqesogweecqyc); if (in_array($iueymcwwscwqkiyq, [self::ywskismomwmcsqam, self::sgoswgskyiiwkyuo, self::iuemaweiggauysws], true)) { goto gaceikykesgywssm; } $aaokuekaimigoyue = ManipulatePost::aqcogscycyycgkuq($yekqqesogweecqyc); if (!($aaokuekaimigoyue && $aaokuekaimigoyue !== $icwicymcioeyeyek[self::uiaeiwkkmoayqasu])) { goto aqmiewawgseaqeqk; } $this->kcciqwskewsuaemk()->remove($mkomwsiykqigmqca); aqmiewawgseaqeqk: gaceikykesgywssm: weggeeowykuqooyg: } public function iemaakgqgqosiecm() { Setting::symcgieuakksimmu(); } public function wugokyuomsiiwawi($uiewakwqscemywuo) { if (!($ucccueqywigcukcc = $this->iqkiiwsyqkwkyuyy())) { goto cqkuuyouqoqyguus; } $uiewakwqscemywuo["\151\x67\156\157\162\145\144\x5f\x75\x72\154\x73"] = $ucccueqywigcukcc; cqkuuyouqoqyguus: return $uiewakwqscemywuo; } public function iqkiiwsyqkwkyuyy() : string { $ucccueqywigcukcc = ''; if (!($auwuoyyagaiegwae = Setting::symcgieuakksimmu()->nwskemwouwsesmus())) { goto koggssokukoukkay; } $gmigwwwmwemyaayy = untrailingslashit(ManipulateServer::auksikwsewaywikq()); foreach ($auwuoyyagaiegwae as $momcykaoccoymeig => $eeamcawaiqocomwy) { if (!($eeamcawaiqocomwy = ManipulateString::wiecmkiugmyyqiqc($gmigwwwmwemyaayy, '', $eeamcawaiqocomwy))) { goto gwoacimkeyymqccq; } $auwuoyyagaiegwae[$momcykaoccoymeig] = preg_quote($eeamcawaiqocomwy, "\57"); gwoacimkeyymqccq: wiqigqgiegmacgsw: } ssmgmiuqoeiuacsa: $ucccueqywigcukcc = str_replace("\134\x2a", "\x2e\52", implode("\174", array_unique($auwuoyyagaiegwae))); koggssokukoukkay: return $ucccueqywigcukcc; } }
