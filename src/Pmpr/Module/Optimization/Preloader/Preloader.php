<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             652e61ac134c6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Preloader; use Pmpr\Module\Optimization\Preloader\Offline\Offline; use Pmpr\Module\Optimization\Preloader\Online\Online; class Preloader extends Common { const skacwisqkwicqmos = "\160\162\145\154\157\x61\144\137\163\164\x61\x72\164\137\x6f\x70\164\x69\x6f\156"; const uociwasiscgeeisk = self::wowuwuigyoceikas . "\x5f\160\x72\x65\x6c\157\x61\144\145\x72\x5f\143\x72\157\x6e\x5f\x6a\157\x62\137\x68\157\x6f\x6b"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\151\164", [$this, "\x69\156\151\x74"])->qcsmikeggeemccuu("\x61\144\155\x69\x6e\137\151\x6e\151\x74", [$this, "\171\x65\171\x69\147\165\x79\x65\147\x6d\x6d\171\165\163\145\x61"])->qcsmikeggeemccuu(self::uociwasiscgeeisk, [$this, "\143\141\161\x6f\163\157\143\x69\x71\143\x6b\157\143\x6f\x73\x65"]); $this->waqewsckuayqguos("\x6f\x70\164\x5f\x75\x70\144\x61\164\x65\137\162\x65\x6d\157\164\145\x5f\x61\160\160\x73", [$this, "\171\x6b\x69\161\x61\x61\153\x6d\153\x73\x77\x69\x73\x71\x6b\143"]); } public function iemaakgqgqosiecm() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { goto cceyoumkiicaguio; } Ajax::symcgieuakksimmu(); cceyoumkiicaguio: } public function init() { $igcseousimqsewkw = $this->uwkmaywceaaaigwo()->cuwcwgaeiugaccei(); if ($igcseousimqsewkw->sceqickmyoseqcue(self::uociwasiscgeeisk)) { goto yayykakkyeoieicm; } $igcseousimqsewkw->uwugaiqywmseksqm(self::wmasmcgmyeoaisoa, self::uociwasiscgeeisk); yayykakkyeoieicm: } public function yeyiguyegmmyusea() { if ($this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(self::ikmkgmwegyasgqmo)) { goto yuiouamaogkkqmck; } $this->ykiqaakmkswisqkc(); yuiouamaogkkqmck: if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto mmwqwowqcaseyyki; } $this->miocmcoykayoyyau()->ikqyiskqaaymscgw("\x70\162\x65\x6c\x6f\141\x64", ["\141\x6a\x61\170" => Ajax::myikkigscysoykgy]); mmwqwowqcaseyyki: Online::symcgieuakksimmu(); Offline::symcgieuakksimmu(); } public function ykiqaakmkswisqkc() { $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); if (!($ayuascquymiygggw = Manager::symcgieuakksimmu())) { goto ngagwiymmmycgscu; } $usmiuwiumyygmucg = $ayuascquymiygggw->wskswuomqkmqkkmm(); if ($usmiuwiumyygmucg && !is_wp_error($usmiuwiumyygmucg)) { goto wsckacayikksiswo; } $qkqgcaykemoiecma->delete(self::ikmkgmwegyasgqmo); goto qiawociayswicugw; wsckacayikksiswo: $qkqgcaykemoiecma->update(self::ikmkgmwegyasgqmo, $usmiuwiumyygmucg); qiawociayswicugw: ngagwiymmmycgscu: } }
