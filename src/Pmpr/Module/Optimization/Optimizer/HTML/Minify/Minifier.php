<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66697656b7da9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { goto mmkoqmccusoeaoyi; } $this->miasamwyaiagioug([$this, "\157\153\x75\x67\x75\171\x61\143\x67\147\163\141\x67\145\161\x71"], 50); mmkoqmccusoeaoyi: $this->aqaqisyssqeomwom("\x6d\151\x6e\151\x66\x79\137{$this->aakmagwggmkoiiyu()}", [$this, "\x6f\x6b\165\x67\x75\171\x61\x63\x67\x67\163\x61\x67\x65\x71\x71"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\57\50\74{$kqywgoqsmuswammk}\x5b\134\x73\x5c\x53\135\52\x3f\76\x29\x28\x5b\134\163\x5c\x53\x5d\52\x3f\x29\50\74\134\x2f{$kqywgoqsmuswammk}\x3e\x29\57", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto waewaiuiogywqigu; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); waewaiuiogywqigu: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto yyamycyesguwueuw; } $ewgwqamkygiqaawc = $mgaesessocgwasym; yyamycyesguwueuw: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\57\136\x5b\136\134\156\x5c\x74\x5c\162\135\53\50\x5c\x72\134\164\x5c\156\x3f\174\134\164\134\156\x29\x3f\44\57", $nsmgceoqaqogqmuw); } }
