<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e6b0646cf09             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Pmpr\Common\Foundation\Decorator\DecoratorCron; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime; use Pmpr\Module\Optimization\Page\Basic\Basic; use Pmpr\Module\Optimization\Page\Modal\Modal; class Page extends Common { const keiioquaamkumwae = self::wowuwuigyoceikas . "\x5f\x63\x68\145\x63\153\x5f\142\x75\144\x67\x65\164\137\150\157\157\x6b"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\151\164", [$this, "\151\156\x69\x74"])->qcsmikeggeemccuu("\x61\x64\x6d\151\156\x5f\x69\156\x69\x74", [$this, "\171\145\171\x69\147\x75\171\145\147\x6d\x6d\x79\x75\163\145\x61"])->qcsmikeggeemccuu(self::keiioquaamkumwae, [$this, "\x79\x6f\145\x6f\x61\167\x65\x65\163\145\x71\151\171\145\163\x67"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\160\x74\137\x67\x65\164\137\x62\165\144\147\x65\164"), [$this, "\x71\147\153\147\155\141\151\151\167\x67\163\x6f\165\147\x67\163"], 999999); } public function iemaakgqgqosiecm() { Model::symcgieuakksimmu(); if (!DecoratorQuery::goecwaaykqoaaagg()) { goto oymyqcoekqyuiguq; } Basic::symcgieuakksimmu(); if (ManipulateAjax::mcgoysmkqsqooceq()) { goto ukogwqiuuuakkawy; } Rule::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Modal::symcgieuakksimmu(); goto gicmaqmuscawegie; ukogwqiuuuakkawy: Ajax::symcgieuakksimmu(); gicmaqmuscawegie: oymyqcoekqyuiguq: } public function init() { if (DecoratorCron::sceqickmyoseqcue(self::keiioquaamkumwae)) { goto ayamomygygmgwgkg; } DecoratorCron::uwugaiqywmseksqm(self::wmasmcgmyeoaisoa, self::keiioquaamkumwae); ayamomygygmgwgkg: } public function yeyiguyegmmyusea() { if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto asqqqqakiagymemk; } $mkecsaoyggsmwmau = $this->kwauokaoasomsimk(); if (isset($mkecsaoyggsmwmau[self::qiyqwyiiwykeccmo], $mkecsaoyggsmwmau[self::uikygkewwaiowmwe])) { goto ucksaiwquekagyqe; } goto iyeswoaqkaeggiiy; ucksaiwquekagyqe: $owiuekcekysskaoe = $mkecsaoyggsmwmau[self::uikygkewwaiowmwe]; if (!ManipulateDatetime::wguceomqgwouoyks($owiuekcekysskaoe)) { goto gygqgauaceiuawkq; } $this->yoeoaweeseqiyesg(); gygqgauaceiuawkq: iyeswoaqkaeggiiy: asqqqqakiagymemk: } public function qgkgmaiiwgsouggs() : int { $mkecsaoyggsmwmau = (int) ManipulateArray::get($this->kwauokaoasomsimk(), self::qiyqwyiiwykeccmo, 0); if (!($this->ggcikeumgqoockyo() > $mkecsaoyggsmwmau)) { goto jkgouewqysmscmqs; } jkgouewqysmscmqs: return $mkecsaoyggsmwmau; } public function kwauokaoasomsimk() { return DecoratorOption::get(self::kqgagmgieeucmuik, []); } }
