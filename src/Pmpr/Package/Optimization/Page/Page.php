<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c6df5c89942             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Page; use Pmpr\Common\Foundation\Decorator\DecoratorCron; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime; use Pmpr\Package\Optimization\Page\Basic\Basic; use Pmpr\Package\Optimization\Page\Modal\Modal; class Page extends Common { const keiioquaamkumwae = self::wowuwuigyoceikas . "\x5f\143\x68\x65\x63\153\137\142\x75\144\147\x65\x74\x5f\150\x6f\157\153"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\151\x74", [$this, "\x69\x6e\x69\164"])->qcsmikeggeemccuu("\x61\144\x6d\x69\156\x5f\x69\x6e\x69\x74", [$this, "\171\x65\x79\x69\147\165\x79\145\147\x6d\x6d\171\165\x73\145\141"])->qcsmikeggeemccuu(self::keiioquaamkumwae, [$this, "\x79\x6f\x65\x6f\x61\x77\x65\x65\163\145\161\151\171\145\x73\147"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\160\164\137\x67\x65\x74\137\142\165\144\x67\x65\x74"), [$this, "\161\x67\153\147\x6d\141\151\x69\x77\x67\163\x6f\165\x67\x67\x73"], 999999); } public function iemaakgqgqosiecm() { Model::symcgieuakksimmu(); if (!is_admin()) { goto seyygcwcaogkmaqe; } Basic::symcgieuakksimmu(); if (ManipulateAjax::mcgoysmkqsqooceq()) { goto ukigmkeewuqomooc; } Rule::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Modal::symcgieuakksimmu(); goto wwgikwuigiiqsswq; ukigmkeewuqomooc: Ajax::symcgieuakksimmu(); wwgikwuigiiqsswq: seyygcwcaogkmaqe: } public function init() { if (DecoratorCron::sceqickmyoseqcue(self::keiioquaamkumwae)) { goto uugiuqkesegaamqw; } DecoratorCron::uwugaiqywmseksqm(time(), self::wmasmcgmyeoaisoa, self::keiioquaamkumwae); uugiuqkesegaamqw: } public function yeyiguyegmmyusea() { if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto cwmuqmoeauqcewoy; } $mkecsaoyggsmwmau = $this->kwauokaoasomsimk(); if (isset($mkecsaoyggsmwmau[self::qiyqwyiiwykeccmo], $mkecsaoyggsmwmau[self::uikygkewwaiowmwe])) { goto qoaawmmcqyacokws; } goto uwyeycaywowwiquu; qoaawmmcqyacokws: $owiuekcekysskaoe = $mkecsaoyggsmwmau[self::uikygkewwaiowmwe]; if (!ManipulateDatetime::wguceomqgwouoyks($owiuekcekysskaoe)) { goto ykcmomsiayaymysm; } $this->yoeoaweeseqiyesg(); ykcmomsiayaymysm: uwyeycaywowwiquu: cwmuqmoeauqcewoy: } public function qgkgmaiiwgsouggs() : int { $mkecsaoyggsmwmau = (int) ManipulateArray::get($this->kwauokaoasomsimk(), self::qiyqwyiiwykeccmo, 0); if (!($this->ggcikeumgqoockyo() > $mkecsaoyggsmwmau)) { goto eiecgqokmuekaesc; } eiecgqokmuekaesc: return $mkecsaoyggsmwmau; } public function kwauokaoasomsimk() { return DecoratorOption::get(self::kqgagmgieeucmuik, []); } }
