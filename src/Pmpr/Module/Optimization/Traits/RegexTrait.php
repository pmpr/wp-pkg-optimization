<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce1504adf49             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function find(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\125\155\x73\151") : array { preg_match_all("\x2f" . $eouekqmooogkoqoo . "\x2f" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (!empty($meyiiwcswqmuggyg)) { goto qimomesqamyyicmo; } return []; qimomesqamyyicmo: return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\74\41\x2d\x2d\x5c\163\52\x6e\x6f\160\164\x69\155\151\x7a\145\134\x73\52\55\x2d\x3e\56\52\x3f\74\41\x2d\x2d\134\x73\52\x2f\134\163\52\x6e\x6f\160\x74\151\x6d\x69\172\x65\x5c\x73\52\x2d\55\x3e\x23\x69\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto kkacggiosquqagew; } return $nsmgceoqaqogqmuw; kkacggiosquqagew: $moyaaaascoeowegu = preg_replace("\x2f\74\x21\x2d\x2d\50\x2e\52\x29\55\x2d\x3e\x2f\125\151\163", '', $moyaaaascoeowegu); if (!(null === $moyaaaascoeowegu)) { goto augqweqsqioesmim; } return $nsmgceoqaqogqmuw; augqweqsqioesmim: return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\74\163\x63\x72\151\160\x74\133\136\76\135\x2a\76\56\52\77\x3c\x5c\x2f\163\x63\162\151\160\164\x5c\x73\52\x3e\x23\155\x69\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto aescssauecumgwso; } return $nsmgceoqaqogqmuw; aescssauecumgwso: return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\x3c\x6e\157\x73\x63\162\151\x70\x74\133\x5e\76\x5d\x2a\x3e\56\x2a\x3f\74\x5c\x2f\156\157\x73\x63\x72\x69\160\164\134\163\52\x3e\x23\155\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto cooeoemccqiyewks; } return $nsmgceoqaqogqmuw; cooeoemccqiyewks: return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\x23\74\170\x6d\x70\56\52\x3e\56\52\74\x2f\170\155\x70\76\x23\x55\151\x73"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\x63\x63\x71\153\x77\143\155\145\x65\x6b\x67\151\x69\157\151\167"], $nsmgceoqaqogqmuw); if (!empty($replaced_html)) { goto qcceyyqiuiqcyqqm; } return $nsmgceoqaqogqmuw; qcceyyqiuiqcyqqm: return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\x3c\41\x2d\55\40\45\163\x20\55\x2d\76", uniqid("\127\x50\x52\137\x58\x4d\x50\137", true)); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (!empty($this->XMPReplace)) { goto ssesmiwwmsayksum; } return $nsmgceoqaqogqmuw; ssesmiwwmsayksum: return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }
