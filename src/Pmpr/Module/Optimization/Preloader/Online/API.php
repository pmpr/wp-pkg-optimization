<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6321c656ef420             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Preloader\Online; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\API\Remote; use WP_Error; class API extends Remote { public function start(array $egeqeuwiswigogyk = []) { if (is_array($egeqeuwiswigogyk) && count($egeqeuwiswigogyk) > 0) { goto siqagquguiemuoku; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x50\145\162\x6d\x61\x6c\151\156\x6b\x73\x20\x6c\x69\x73\164\x20\x69\x73\x20\145\155\160\x74\171", PR__MDL__OPTIMIZATION)); goto ycakugokkqkuqyiu; siqagquguiemuoku: $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f\160\x72\x65\154\157\141\x64", [self::kugiewcgiawaeiaq => ["\x61\x70\151\x6b\145\x79" => $this->eegcqkwceasicmek(), "\160\x65\162\x6d\141\x6c\x69\x6e\153\163" => $egeqeuwiswigogyk]], self::mswoacegomcucaik); if (is_wp_error($sogksuscggsicmac)) { goto coywmiyqgsweuiic; } $sogksuscggsicmac = $sogksuscggsicmac[self::gouqcwikiiygyasc] ?? $this->oemauiimmycumcsk(ManipulateArray::get($sogksuscggsicmac, self::eoskkkieowogacws)); coywmiyqgsweuiic: ycakugokkqkuqyiu: return $sogksuscggsicmac; } public function yucicikmqgicagas($aokagokqyuysuksm) : string { $sogksuscggsicmac = $this->uiqqikcuycqyeooa($aokagokqyuysuksm, "\x70\162\x65\154\x6f\141\x64"); return ManipulateArray::get($sogksuscggsicmac, self::ciywsqoeiymemsys); } }