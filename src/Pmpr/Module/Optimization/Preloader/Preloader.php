<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62ea46af9a44c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Preloader; use Pmpr\Common\Foundation\Decorator\DecoratorCron; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Module\Optimization\Preloader\Offline\Offline; use Pmpr\Module\Optimization\Preloader\Online\Online; class Preloader extends Common { const skacwisqkwicqmos = "\160\x72\145\154\157\x61\144\x5f\x73\x74\x61\x72\x74\x5f\157\x70\164\151\x6f\x6e"; const uociwasiscgeeisk = self::wowuwuigyoceikas . "\x5f\x70\162\x65\x6c\157\141\144\145\162\x5f\x63\x72\157\x6e\137\152\x6f\x62\137\x68\x6f\157\x6b"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\x69\164", [$this, "\151\156\x69\164"])->qcsmikeggeemccuu("\141\144\155\151\156\137\x69\x6e\151\164", [$this, "\171\145\x79\x69\x67\x75\x79\x65\x67\x6d\155\x79\x75\163\x65\141"])->qcsmikeggeemccuu(self::uociwasiscgeeisk, [$this, "\143\x61\x71\x6f\x73\x6f\x63\151\x71\143\153\157\x63\157\x73\x65"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\x75\160\x64\x61\164\x65\137\x72\x65\155\157\164\x65\137\141\160\x70\x73"), [$this, "\171\153\151\161\x61\x61\x6b\155\x6b\163\x77\151\163\161\153\x63"]); } public function iemaakgqgqosiecm() { Online::symcgieuakksimmu(); Offline::symcgieuakksimmu(); if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto ugykmcouiwiscoqu; } Ajax::symcgieuakksimmu(); ugykmcouiwiscoqu: } public function init() { if (DecoratorCron::sceqickmyoseqcue(self::uociwasiscgeeisk)) { goto isewysikysqewkis; } DecoratorCron::uwugaiqywmseksqm(self::wmasmcgmyeoaisoa, self::uociwasiscgeeisk); isewysikysqewkis: } public function yeyiguyegmmyusea() { $usmiuwiumyygmucg = DecoratorOption::get(self::ikmkgmwegyasgqmo); if ($usmiuwiumyygmucg) { goto wiwoiyoakywqyaiy; } $this->ykiqaakmkswisqkc(); wiwoiyoakywqyaiy: if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto igmmqwyawcuuckkq; } $this->miocmcoykayoyyau()->ikqyiskqaaymscgw("\x70\162\145\154\x6f\141\144", ["\x61\x6a\x61\170" => Ajax::myikkigscysoykgy]); igmmqwyawcuuckkq: } public function ykiqaakmkswisqkc() { if (!($ayuascquymiygggw = Manager::symcgieuakksimmu())) { goto uscokkmquayiukag; } $usmiuwiumyygmucg = $ayuascquymiygggw->wskswuomqkmqkkmm(); if ($usmiuwiumyygmucg && !is_wp_error($usmiuwiumyygmucg)) { goto eouwacqiommmeaqc; } DecoratorOption::delete(self::ikmkgmwegyasgqmo); goto sqwuqegeiisoiiuq; eouwacqiommmeaqc: DecoratorOption::update(self::ikmkgmwegyasgqmo, $usmiuwiumyygmucg); sqwuqegeiisoiiuq: uscokkmquayiukag: } }
