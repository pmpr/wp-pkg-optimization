<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63275a0b01155             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Preloader\Online; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\API\Remote; use WP_Error; class API extends Remote { public function start(array $egeqeuwiswigogyk = []) { if (is_array($egeqeuwiswigogyk) && count($egeqeuwiswigogyk) > 0) { goto siqagquguiemuoku; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\120\x65\162\155\x61\154\151\156\x6b\x73\40\154\x69\x73\164\40\x69\x73\40\x65\155\160\164\171", PR__MDL__OPTIMIZATION)); goto ycakugokkqkuqyiu; siqagquguiemuoku: $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f\x70\162\145\154\157\141\x64", [self::kugiewcgiawaeiaq => ["\141\160\151\153\x65\x79" => $this->eegcqkwceasicmek(), "\x70\x65\x72\155\141\x6c\x69\156\x6b\163" => $egeqeuwiswigogyk]], self::mswoacegomcucaik); if (is_wp_error($sogksuscggsicmac)) { goto coywmiyqgsweuiic; } $sogksuscggsicmac = $sogksuscggsicmac[self::gouqcwikiiygyasc] ?? $this->oemauiimmycumcsk(ManipulateArray::get($sogksuscggsicmac, self::eoskkkieowogacws)); coywmiyqgsweuiic: ycakugokkqkuqyiu: return $sogksuscggsicmac; } public function yucicikmqgicagas($aokagokqyuysuksm) : string { $sogksuscggsicmac = $this->uiqqikcuycqyeooa($aokagokqyuysuksm, "\160\162\145\x6c\x6f\x61\x64"); return ManipulateArray::get($sogksuscggsicmac, self::ciywsqoeiymemsys); } }
