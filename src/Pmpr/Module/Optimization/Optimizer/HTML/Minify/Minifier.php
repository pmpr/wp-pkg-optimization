<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665b6a8b74913             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { goto csyoimsqgwcmiwki; } $this->miasamwyaiagioug([$this, "\157\x6b\x75\x67\165\x79\x61\143\x67\147\163\141\147\145\x71\161"], 50); csyoimsqgwcmiwki: $this->aqaqisyssqeomwom("\155\151\156\x69\x66\x79\x5f{$this->aakmagwggmkoiiyu()}", [$this, "\x6f\x6b\165\147\x75\x79\x61\143\x67\147\163\x61\x67\145\161\x71"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\x2f\x28\74{$kqywgoqsmuswammk}\x5b\134\163\x5c\x53\135\52\x3f\x3e\x29\50\133\134\163\134\123\x5d\52\77\51\x28\74\x5c\57{$kqywgoqsmuswammk}\76\51\57", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto ggqwcqssoauckuic; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); ggqwcqssoauckuic: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto ggwcauaeuagekeyo; } $ewgwqamkygiqaawc = $mgaesessocgwasym; ggwcauaeuagekeyo: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\x2f\x5e\x5b\x5e\134\156\134\164\x5c\162\x5d\53\x28\134\x72\134\164\x5c\x6e\77\174\x5c\164\134\x6e\51\x3f\44\x2f", $nsmgceoqaqogqmuw); } }
