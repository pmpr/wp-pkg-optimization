<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ffbdfd59a7a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Critical\CSS\Data; class Property { protected ?string $name = ''; protected ?string $value = ''; public function __construct(?string $ymqmyyeuycgmigyo, ?string $eqgoocgaqwqcimie) { $this->name = $ymqmyyeuycgmigyo; $this->value = $eqgoocgaqwqcimie; } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function qooeaookuemoqecm() : ?string { return $this->value; } public function uqekcqygqwsyikky() { return stripos($this->qooeaookuemoqecm(), "\x21\x69\x6d\160\157\162\164\141\x6e\x74") !== false; } public function __toString() { return sprintf("\45\x31\44\163\x3a\x20\x25\62\44\x73\73", $this->aakmagwggmkoiiyu(), $this->qooeaookuemoqecm()); } }
