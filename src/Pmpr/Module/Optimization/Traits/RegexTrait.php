<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668daba5a468b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function find(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\x55\155\163\x69") : array { preg_match_all("\57" . $eouekqmooogkoqoo . "\57" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (!empty($meyiiwcswqmuggyg)) { goto twkmiuomimomscew; } return []; twkmiuomimomscew: return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\74\x21\55\55\x5c\163\x2a\x6e\157\160\x74\151\155\x69\x7a\145\134\163\x2a\55\x2d\76\x2e\52\77\74\x21\x2d\x2d\134\x73\x2a\57\134\x73\x2a\156\157\x70\x74\151\x6d\151\172\145\134\163\x2a\x2d\x2d\x3e\43\x69\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto kooskuwkuayiuose; } return $nsmgceoqaqogqmuw; kooskuwkuayiuose: $moyaaaascoeowegu = preg_replace("\57\x3c\x21\55\55\x28\56\x2a\51\x2d\55\76\57\x55\151\163", '', $moyaaaascoeowegu); if (!(null === $moyaaaascoeowegu)) { goto qwcegcuowwgiccos; } return $nsmgceoqaqogqmuw; qwcegcuowwgiccos: return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\x3c\163\x63\x72\151\160\164\133\x5e\x3e\135\x2a\76\x2e\x2a\77\x3c\x5c\57\163\143\162\x69\x70\x74\x5c\x73\x2a\x3e\x23\x6d\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto qcessicwuikwqsis; } return $nsmgceoqaqogqmuw; qcessicwuikwqsis: return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\74\156\157\163\143\162\151\160\164\x5b\136\76\x5d\52\x3e\x2e\52\77\74\x5c\57\156\157\x73\143\x72\x69\x70\164\134\x73\52\76\x23\155\151\163", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto yssscwioiyygssec; } return $nsmgceoqaqogqmuw; yssscwioiyygssec: return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\x23\74\170\x6d\x70\56\52\x3e\x2e\52\74\x2f\x78\155\160\x3e\x23\125\151\163"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\143\143\161\153\x77\x63\155\145\x65\153\x67\151\x69\157\151\x77"], $nsmgceoqaqogqmuw); if (!empty($replaced_html)) { goto ieumumsgyguceusy; } return $nsmgceoqaqogqmuw; ieumumsgyguceusy: return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\x3c\41\x2d\55\40\45\x73\40\x2d\x2d\x3e", uniqid("\x57\x50\x52\137\x58\x4d\x50\x5f")); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (!empty($this->XMPReplace)) { goto coywmiyqgsweuiic; } return $nsmgceoqaqogqmuw; coywmiyqgsweuiic: return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }
