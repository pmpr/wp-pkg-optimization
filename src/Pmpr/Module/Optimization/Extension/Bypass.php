<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             653524d4a234f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Extension; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Module\Optimization\Bypass\Setting as BypassSetting; abstract class Bypass extends Common { protected string $name = ''; public function aakmagwggmkoiiyu() : string { return $this->name; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\x69\156\137\151\156\x69\164", [$this, "\x71\161\157\143\141\143\x61\155\151\x69\x69\167\165\x77\151\163"]); } public function qqocacamiiiwuwis() { if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto ywqgcegomwaiuquc; } $omqquekswieeogws = "\x6f\160\x74\x5f\141\165\164\x6f\137\x62\x79\160\141\163\x73\137{$this->aakmagwggmkoiiyu()}\x5f\x61\x64\x64\145\144"; $oakymgscysyssksa = DecoratorOption::get($omqquekswieeogws, false); if (!(!$oakymgscysyssksa && ($uescmseksquycukc = $this->ekkycgeasgwaqiwu()))) { goto eegqyykygiccaoeo; } $uuycqiugegwuigqc = $this->weysguygiseoukqw(BypassSetting::koqiyueekmymguyq, []); $this->kmuweyayaqoeqiyw()::eiaacegkigqiwawg(BypassSetting::koqiyueekmymguyq, array_merge($uuycqiugegwuigqc, $uescmseksquycukc), false); DecoratorOption::update($omqquekswieeogws, 1); eegqyykygiccaoeo: ywqgcegomwaiuquc: } public function wauacaemuqggkyue($oysoyeaucuawyaky, string $sqeykgyoooqysmca) : array { $yqisouqmuqkgmwuy = [self::squoamkioomemiyi => BypassSetting::kowaogweeucieykc, BypassSetting::ymycaemoukukoqoe => $sqeykgyoooqysmca]; $ccamueccusigaaio = self::ucoiewcoucauqwko; if (!in_array($sqeykgyoooqysmca, ManipulatePost::mwoyqeeigwqoamiw(), true)) { goto wmmggowmigekyoso; } $ccamueccusigaaio = self::qgmuskygocwmouos; wmmggowmigekyoso: if (is_array($oysoyeaucuawyaky)) { goto soqqemyioggmoakg; } $oysoyeaucuawyaky = [$oysoyeaucuawyaky]; soqqemyioggmoakg: $yqisouqmuqkgmwuy[$ccamueccusigaaio] = $oysoyeaucuawyaky; return $yqisouqmuqkgmwuy; } public function kcmqkuugeukkkiug(string $ekuqiqmikiicgoss) : array { return [self::squoamkioomemiyi => BypassSetting::qeesogequqsoiymo, BypassSetting::kcwcmkwmmwqimwyk => $ekuqiqmikiicgoss]; } public abstract function ekkycgeasgwaqiwu() : array; }
