<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ffbdfd59a7a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Traits\CommonTrait; abstract class Container extends BaseClass { const wowuwuigyoceikas = "\x70\x6d\x70\x72\55\x6f\160\164\x69\x6d\x69\x7a\141\164\x69\x6f\x6e"; const kqgagmgieeucmuik = self::wowuwuigyoceikas . "\137\142\x75\x64\147\x65\164\163"; const ikmkgmwegyasgqmo = self::wowuwuigyoceikas . "\x5f\x72\145\155\157\164\x65\137\x61\160\x70\x73"; const muqmwceaiwwakwws = "\117\120\124\111\115\x49\132\x41\124\111\x4f\116\137\103\117\x4e\x46\x49\x47\137\x50\x41\124\x48"; use CommonTrait; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function ukacwyckseuqsqgc($ogomymegcoacqisg) { if (!strpos($ogomymegcoacqisg, "\166\x65\162\75")) { goto suqcsgaosywaauuu; } $ogomymegcoacqisg = DecoratorQuery::oiamiqcuyksmmomm("\166\145\x72", $ogomymegcoacqisg); suqcsgaosywaauuu: return $ogomymegcoacqisg; } public function aoaeiwswyagmesku($eeamcawaiqocomwy) : bool { return ManipulateFormat::aoaeiwswyagmesku($eeamcawaiqocomwy); } public function omkiaysccawouqig($egsumesakcaaukem) : bool { $couiucmsqaieciue = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\x5f\145\170\x63\154\165\x64\145\x5f\x73\157\165\162\143\145\x73"), [], $egsumesakcaaukem); $eekyacmiyoweyeea = false; foreach ($couiucmsqaieciue as $yemgmmgogcwccuky) { if (!(strpos($egsumesakcaaukem, $yemgmmgogcwccuky) !== false)) { goto qsgqwyqaqiowkmco; } $eekyacmiyoweyeea = true; goto wwukgaquuyoissgy; qsgqwyqaqiowkmco: gsygwgsiawgmqiyi: } wwukgaquuyoissgy: return $eekyacmiyoweyeea; } public function qwmkuasciiicwaie() : bool { return DecoratorUser::ksgkoukcicwkkaum() && DecoratorUser::scmcyesmmikkucie(); } public function aumueocimuaiwyee() : ?string { return $this->weysguygiseoukqw(Setting::mkuaccemgegcsyuq); } public function quycagwoqskgemms($ccamueccusigaaio) : bool { $emoqwwkmassqsoaw = ManipulateServer::get(self::wowuwuigyoceikas . "\x2d\163\x65\x63\55\153\x65\171"); $aiamqeawckcsuaou = ManipulateServer::get(self::wowuwuigyoceikas . "\x2d{$ccamueccusigaaio}"); $swecuewakscmiogg = ManipulateServer::get(self::wowuwuigyoceikas); return $swecuewakscmiogg && $emoqwwkmassqsoaw && $aiamqeawckcsuaou && $emoqwwkmassqsoaw === $this->aumueocimuaiwyee(); } public function miueaekaaugaccmg(&$iswcokucwmiosiaq, ?string $aiowsaccomcoikus = self::xwwaeweqegiqeqkm, ?string $aiamqeawckcsuaou = self::waoywqksqecymesy) : bool { $kuuugksiksqcaaaa = parent::miueaekaaugaccmg($iswcokucwmiosiaq, $aiowsaccomcoikus); if (!($kuuugksiksqcaaaa && !$this->qwmkuasciiicwaie())) { goto yqagomygmeoecwey; } $iswcokucwmiosiaq = __("\120\x65\162\155\151\163\x73\151\x6f\156\x20\x64\x65\156\151\x65\x64", PR__MDL__OPTIMIZATION); yqagomygmeoecwey: return $kuuugksiksqcaaaa; } }
