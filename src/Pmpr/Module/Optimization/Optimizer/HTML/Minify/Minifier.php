<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec0900f0e3e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { goto wmwgeoequuwwwywa; } $this->miasamwyaiagioug([$this, "\157\153\165\x67\165\171\141\143\147\147\163\x61\x67\145\x71\161"], 50); wmwgeoequuwwwywa: $this->aqaqisyssqeomwom("\x6d\151\x6e\x69\146\171\x5f{$this->aakmagwggmkoiiyu()}", [$this, "\x6f\153\x75\x67\x75\171\x61\143\x67\147\163\x61\147\x65\x71\x71"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\x2f\50\74{$kqywgoqsmuswammk}\133\134\x73\x5c\123\135\52\x3f\76\x29\x28\133\x5c\163\134\x53\x5d\52\x3f\51\50\x3c\x5c\57{$kqywgoqsmuswammk}\x3e\x29\57", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto uqugcugeomqakcqo; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); uqugcugeomqakcqo: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto qmoisuweiskkekca; } $ewgwqamkygiqaawc = $mgaesessocgwasym; qmoisuweiskkekca: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\57\136\x5b\136\134\156\134\x74\134\x72\x5d\53\50\134\x72\x5c\164\x5c\156\x3f\x7c\x5c\164\134\156\51\x3f\x24\x2f", $nsmgceoqaqogqmuw); } }
