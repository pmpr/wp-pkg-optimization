<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ffbdfd59a7a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Preloader; use Pmpr\Common\Foundation\Decorator\DecoratorCron; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Module\Optimization\Preloader\Offline\Offline; use Pmpr\Module\Optimization\Preloader\Online\Online; class Preloader extends Common { const skacwisqkwicqmos = "\160\162\145\x6c\x6f\x61\x64\x5f\163\164\141\162\x74\x5f\x6f\x70\x74\x69\157\x6e"; const uociwasiscgeeisk = self::wowuwuigyoceikas . "\x5f\x70\x72\x65\154\157\141\x64\145\162\137\143\x72\157\x6e\x5f\x6a\157\142\137\150\157\x6f\x6b"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\151\164", [$this, "\x69\x6e\x69\x74"])->qcsmikeggeemccuu("\141\x64\155\151\x6e\137\x69\x6e\151\164", [$this, "\171\145\x79\x69\147\165\x79\145\147\x6d\155\171\165\163\145\141"])->qcsmikeggeemccuu(self::uociwasiscgeeisk, [$this, "\x63\x61\x71\x6f\163\157\143\151\161\x63\153\x6f\143\157\x73\145"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\x70\164\137\x75\x70\144\x61\164\x65\137\162\145\155\x6f\x74\x65\137\141\160\x70\x73"), [$this, "\x79\x6b\x69\161\x61\141\153\x6d\153\x73\167\151\163\161\x6b\x63"]); } public function iemaakgqgqosiecm() { Online::symcgieuakksimmu(); Offline::symcgieuakksimmu(); if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto emqmqkeygumaasam; } Ajax::symcgieuakksimmu(); emqmqkeygumaasam: } public function init() { if (DecoratorCron::sceqickmyoseqcue(self::uociwasiscgeeisk)) { goto meegaqaesckqmyec; } DecoratorCron::uwugaiqywmseksqm(self::wmasmcgmyeoaisoa, self::uociwasiscgeeisk); meegaqaesckqmyec: } public function yeyiguyegmmyusea() { if (DecoratorOption::get(self::ikmkgmwegyasgqmo)) { goto scccyaiaggeasgqg; } $this->ykiqaakmkswisqkc(); scccyaiaggeasgqg: if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto asueqykmkoaimguq; } $this->miocmcoykayoyyau()->ikqyiskqaaymscgw("\160\x72\145\x6c\x6f\141\x64", ["\141\152\141\170" => Ajax::myikkigscysoykgy]); asueqykmkoaimguq: } public function ykiqaakmkswisqkc() { if (!($ayuascquymiygggw = Manager::symcgieuakksimmu())) { goto kcwyeqmysgqkoqcm; } $usmiuwiumyygmucg = $ayuascquymiygggw->wskswuomqkmqkkmm(); if ($usmiuwiumyygmucg && !is_wp_error($usmiuwiumyygmucg)) { goto iyocimuyeemkaaso; } DecoratorOption::delete(self::ikmkgmwegyasgqmo); goto isaouwiaamimceeg; iyocimuyeemkaaso: DecoratorOption::update(self::ikmkgmwegyasgqmo, $usmiuwiumyygmucg); isaouwiaamimceeg: kcwyeqmysgqkoqcm: } }
