<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62b8861f25a3c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Bypass; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; class Bypass extends Common { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\164\x5f\x63\157\156\146\151\147\x75\x72\x61\164\151\157\156\x73"), [$this, "\167\x75\x67\157\x6b\171\165\x6f\155\x73\151\151\167\x61\167\151"]); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { Setting::symcgieuakksimmu(); } public function wugokyuomsiiwawi($uiewakwqscemywuo) { $auwuoyyagaiegwae = array_filter(Setting::symcgieuakksimmu()->nwskemwouwsesmus()); if (!(is_array($auwuoyyagaiegwae) && $auwuoyyagaiegwae)) { goto oeosugomyqyekmuq; } $gmigwwwmwemyaayy = untrailingslashit(ManipulateServer::auksikwsewaywikq()); foreach ($auwuoyyagaiegwae as $momcykaoccoymeig => $eeamcawaiqocomwy) { if (!($eeamcawaiqocomwy = ManipulateString::wiecmkiugmyyqiqc($gmigwwwmwemyaayy, '', $eeamcawaiqocomwy))) { goto gooqkmwgsmseuiwq; } $auwuoyyagaiegwae[$momcykaoccoymeig] = $eeamcawaiqocomwy; gooqkmwgsmseuiwq: ugowqoisymsioeye: } mwgaaiaswusakkaq: $uiewakwqscemywuo["\x69\x67\x6e\157\x72\x65\x64\x5f\165\x72\x6c\x73"] = str_replace("\52", "\x2e\x2a", implode("\x7c", array_unique($auwuoyyagaiegwae))); oeosugomyqyekmuq: return $uiewakwqscemywuo; } }
