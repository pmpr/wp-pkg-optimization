<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665aff7366c1e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function ksiyqouuaoymsycg(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\125\155\163\x69") : array { preg_match_all("\57" . $eouekqmooogkoqoo . "\57" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (!empty($meyiiwcswqmuggyg)) { goto qmiwsequckckoaei; } return []; qmiwsequckckoaei: return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\x3c\x21\x2d\55\134\163\52\156\157\x70\164\x69\155\x69\x7a\145\134\x73\52\55\x2d\x3e\x2e\52\77\x3c\x21\x2d\x2d\x5c\163\x2a\57\x5c\163\52\156\x6f\160\164\151\x6d\x69\172\145\x5c\x73\52\x2d\55\76\x23\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto goeoymmqqqeeoime; } return $nsmgceoqaqogqmuw; goeoymmqqqeeoime: $moyaaaascoeowegu = preg_replace("\57\74\x21\x2d\x2d\x28\56\x2a\x29\x2d\x2d\76\x2f\125\151\x73", '', $moyaaaascoeowegu); if (!(null === $moyaaaascoeowegu)) { goto eiawsoasmscmqswa; } return $nsmgceoqaqogqmuw; eiawsoasmscmqswa: return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\x3c\163\x63\162\x69\x70\x74\133\136\76\x5d\x2a\76\x2e\x2a\x3f\74\134\x2f\163\x63\x72\x69\x70\164\134\163\52\76\x23\155\x69\163", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto ickcmqoiosquugwe; } return $nsmgceoqaqogqmuw; ickcmqoiosquugwe: return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\x3c\x6e\157\x73\143\162\x69\x70\x74\133\136\76\x5d\x2a\76\x2e\52\x3f\x3c\x5c\57\x6e\x6f\x73\143\x72\x69\160\164\134\x73\x2a\x3e\43\155\x69\163", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto qmeoaqmsuseueqiy; } return $nsmgceoqaqogqmuw; qmeoaqmsuseueqiy: return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\43\x3c\170\155\x70\x2e\52\76\x2e\x2a\74\57\170\x6d\x70\76\43\x55\x69\163"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\143\143\x71\153\x77\143\x6d\145\x65\153\147\151\151\x6f\x69\167"], $nsmgceoqaqogqmuw); if (!empty($replaced_html)) { goto ygkcacsyyckescqs; } return $nsmgceoqaqogqmuw; ygkcacsyyckescqs: return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\74\x21\x2d\55\x20\x25\x73\x20\55\55\x3e", uniqid("\x57\120\122\x5f\x58\115\x50\137")); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (!empty($this->XMPReplace)) { goto cuoqqgaygogsmmic; } return $nsmgceoqaqogqmuw; cuoqqgaygogsmmic: return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }
