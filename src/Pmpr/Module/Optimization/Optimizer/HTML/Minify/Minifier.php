<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d2393d5ec4b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { goto gygawoqywkukmqee; } $this->miasamwyaiagioug([$this, "\157\x6b\x75\147\165\171\x61\143\x67\147\x73\141\x67\145\161\161"], 50); gygawoqywkukmqee: $this->aqaqisyssqeomwom("\155\151\x6e\x69\146\171\137{$this->aakmagwggmkoiiyu()}", [$this, "\x6f\x6b\165\x67\165\x79\x61\x63\147\147\163\x61\x67\x65\x71\161"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\57\x28\x3c{$kqywgoqsmuswammk}\133\x5c\x73\x5c\123\x5d\52\x3f\x3e\51\50\133\134\x73\x5c\123\x5d\52\x3f\x29\x28\x3c\134\57{$kqywgoqsmuswammk}\76\51\57", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto kciouyuaqkyqomam; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); kciouyuaqkyqomam: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto wwkgkaecgiwggcck; } $ewgwqamkygiqaawc = $mgaesessocgwasym; wwkgkaecgiwggcck: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\x2f\136\133\136\134\156\x5c\164\x5c\x72\x5d\53\50\x5c\x72\x5c\x74\134\156\x3f\x7c\134\164\134\x6e\x29\77\x24\x2f", $nsmgceoqaqogqmuw); } }
