<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63217f9c731b7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Preloader\Online; use Pmpr\Module\Optimization\Preloader\Base; use Pmpr\Module\Optimization\Preloader\Manager; class Online extends Base { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function iemaakgqgqosiecm() { Process::symcgieuakksimmu(); } public function start($auwuoyyagaiegwae) { if (!($ekacyecmisewiayg = API::symcgieuakksimmu())) { goto umgaesggesswoaqe; } $sogksuscggsicmac = $ekacyecmisewiayg->start($auwuoyyagaiegwae); if (is_numeric($sogksuscggsicmac)) { goto kciouyuaqkyqomam; } foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->ieskuycqsewokycq($eeamcawaiqocomwy); gygawoqywkukmqee: } sycygoiaiqqageym: goto wwkgkaecgiwggcck; kciouyuaqkyqomam: if (!($acoioasmiqcwagsa = Process::symcgieuakksimmu())) { goto oouoqimaaqcmccay; } $acoioasmiqcwagsa->mykuoqakuiwsoiss([self::gouqcwikiiygyasc => $sogksuscggsicmac, self::eimuuyqioyqiqwgq => $auwuoyyagaiegwae])->save()->ieyosyaaisyquesq(); oouoqimaaqcmccay: wwkgkaecgiwggcck: umgaesggesswoaqe: } public function mgyqciwsceoswuoq(int $gaeqamemwmwsyukm = 0) : bool { $sogksuscggsicmac = Manager::symcgieuakksimmu()->qwmwewiqecwieoue($gaeqamemwmwsyukm); return $sogksuscggsicmac && !is_wp_error($sogksuscggsicmac); } }
