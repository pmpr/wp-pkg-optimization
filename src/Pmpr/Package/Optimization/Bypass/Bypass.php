<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c62928722d7             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Bypass; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; class Bypass extends Common { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\x74\x5f\143\x6f\156\146\x69\147\x75\162\141\x74\151\157\156\163"), [$this, "\x77\x75\x67\157\153\171\x75\157\x6d\163\x69\151\167\141\x77\151"]); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { Setting::symcgieuakksimmu(); } public function wugokyuomsiiwawi($uiewakwqscemywuo) { $auwuoyyagaiegwae = array_filter(Setting::symcgieuakksimmu()->nwskemwouwsesmus()); if (!(is_array($auwuoyyagaiegwae) && $auwuoyyagaiegwae)) { goto qscqkykqskqmisgw; } $gmigwwwmwemyaayy = untrailingslashit(ManipulateServer::auksikwsewaywikq()); foreach ($auwuoyyagaiegwae as $momcykaoccoymeig => $eeamcawaiqocomwy) { if (!($eeamcawaiqocomwy = ManipulateString::wiecmkiugmyyqiqc($gmigwwwmwemyaayy, '', $eeamcawaiqocomwy))) { goto qgqasacusgwmoegy; } $auwuoyyagaiegwae[$momcykaoccoymeig] = $eeamcawaiqocomwy; qgqasacusgwmoegy: eokcuuwqaomkooag: } sccqekuwywiisami: $uiewakwqscemywuo["\x69\147\156\157\162\x65\144\x5f\x75\x72\x6c\x73"] = str_replace("\x2a", "\56\52", implode("\x7c", array_unique($auwuoyyagaiegwae))); qscqkykqskqmisgw: return $uiewakwqscemywuo; } }
