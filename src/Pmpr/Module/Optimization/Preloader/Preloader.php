<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62b8861f25a3c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Preloader; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Module\Optimization\Preloader\Offline\Offline; use Pmpr\Module\Optimization\Preloader\Online\Online; class Preloader extends Common { const skacwisqkwicqmos = "\x70\162\x65\154\157\x61\x64\x5f\163\164\x61\x72\164\x5f\x6f\160\164\x69\157\156"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\160\x74\137\165\x70\144\x61\x74\x65\x5f\162\145\x6d\x6f\164\145\x5f\141\160\160\163"), [$this, "\x79\x6b\151\x71\x61\141\x6b\x6d\x6b\163\167\151\x73\161\x6b\x63"]); } public function iemaakgqgqosiecm() { Online::symcgieuakksimmu(); Offline::symcgieuakksimmu(); } public function ykiqaakmkswisqkc() { if (!($ayuascquymiygggw = Manager::symcgieuakksimmu())) { goto koiyaaokigmamqyc; } $usmiuwiumyygmucg = $ayuascquymiygggw->wskswuomqkmqkkmm(); if ($usmiuwiumyygmucg && !is_wp_error($usmiuwiumyygmucg)) { goto yoauoocuckogmsuw; } DecoratorOption::delete(self::ikmkgmwegyasgqmo); goto amyaoueckysgmmas; yoauoocuckogmsuw: DecoratorOption::update(self::ikmkgmwegyasgqmo, $usmiuwiumyygmucg); amyaoueckysgmmas: koiyaaokigmamqyc: } }
