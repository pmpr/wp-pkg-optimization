<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c0324e0f3b2             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Cloudflare; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; class Ajax extends Base { const CHANGE_DEV_MODE = self::HOOK_PREFIX . "\x63\150\141\156\x67\x65\137\144\145\166\x5f\x6d\157\x64\145"; const ENABLE_PAGE_CACHE = self::HOOK_PREFIX . "\145\156\141\x62\154\145\137\160\141\147\145\137\143\141\x63\x68\x65"; const DISABLE_PAGE_CACHE = self::HOOK_PREFIX . "\144\x69\163\x61\x62\154\145\x5f\160\x61\x67\x65\137\143\x61\x63\x68\x65"; const myikkigscysoykgy = ["\143\x68\141\x6e\x67\145\x5f\144\145\166\x5f\155\157\144\145" => self::CHANGE_DEV_MODE, "\x65\x6e\x61\x62\154\x65\x5f\160\141\x67\145\x5f\x63\141\143\150\145" => self::ENABLE_PAGE_CACHE, "\144\x69\163\x61\x62\154\x65\x5f\x70\x61\147\145\137\x63\x61\143\x68\x65" => self::DISABLE_PAGE_CACHE]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::CHANGE_DEV_MODE, [$this, "\x69\x71\x65\143\x63\167\x61\145\x71\147\151\161\x6d\153\147\x65"])->koaegcswmcqsiykq(self::ENABLE_PAGE_CACHE, [$this, "\145\151\147\167\147\143\x75\x61\141\x6d\157\x71\153\165\x79\167"])->koaegcswmcqsiykq(self::DISABLE_PAGE_CACHE, [$this, "\143\167\x77\x61\x6f\141\x63\x77\x65\x6f\x67\145\171\x63\x75\x63"]); parent::wigskegsqequoeks(); } public function iqeccwaeqgiqmkge() { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto wiqigqgiegmacgsw; } $wmekckkyoiyickmk = ManipulateServer::ayueggmoqeeukqmq("\144\145\x76\137\155\x6f\144\145", null); if (in_array($wmekckkyoiyickmk, ["\157\156", "\x6f\146\x66"])) { goto cqkuuyouqoqyguus; } $uamcoiueqaamsqma = sprintf(__("\45\163\40\155\x6f\x64\x65\40\x69\163\40\x6e\x6f\164\40\x76\x61\x6c\x69\144\x2c\40\166\x61\x6c\x69\144\x20\155\x6f\144\x65\x73\x20\151\x73\40\x25\163\x20\x61\x6e\144\40\45\x73", PR__PKG__OPTIMIZATION), $wmekckkyoiyickmk, "\157\146\x66", "\157\156"); goto ssmgmiuqoeiuacsa; cqkuuyouqoqyguus: if (!($yeacayasgueouoqc = $this->auamgqiwisysomsa()->ymkgoumkoycwwmmq($uamcoiueqaamsqma))) { goto weggeeowykuqooyg; } if ($yeacayasgueouoqc !== $wmekckkyoiyickmk) { goto aqmiewawgseaqeqk; } $this->awwuyycwuuuggkqy($wmekckkyoiyickmk); $uamcoiueqaamsqma = sprintf(__("\104\145\x76\145\154\157\160\x6d\145\x6e\x74\40\x4d\157\144\145\x20\x69\163\x20\x61\154\162\x65\x61\x64\x79\x20\45\163", PR__PKG__OPTIMIZATION), $this->mqsscqiyqwiyyisq($wmekckkyoiyickmk)); goto gaceikykesgywssm; aqmiewawgseaqeqk: if (!$this->auamgqiwisysomsa()->emukusgiakigsoms($wmekckkyoiyickmk, $uamcoiueqaamsqma)) { goto imeaiksowuukikui; } $occymigcemkqucuw = true; $uamcoiueqaamsqma = sprintf(__("\x44\x65\x76\145\x6c\x6f\160\155\x65\156\164\40\155\x6f\144\x65\x20\x63\150\x61\156\x67\145\40\163\165\x63\x63\x65\163\163\146\x75\154\x6c\171\x20\164\157\40\x25\x73", PR__PKG__OPTIMIZATION), $this->mqsscqiyqwiyyisq($wmekckkyoiyickmk)); $this->awwuyycwuuuggkqy($wmekckkyoiyickmk); imeaiksowuukikui: gaceikykesgywssm: weggeeowykuqooyg: ssmgmiuqoeiuacsa: wiqigqgiegmacgsw: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } public function eigwgcuaamoqkuyw() { $this->oskoaiwyuwaousmg(true); } public function cwwaoacweogeycuc() { $this->oskoaiwyuwaousmg(false); } private function mqsscqiyqwiyyisq($wmekckkyoiyickmk) : string { return $wmekckkyoiyickmk == "\157\146\x66" ? __("\x6f\x66\146", PR__PKG__OPTIMIZATION) : __("\157\x6e", PR__PKG__OPTIMIZATION); } public function oskoaiwyuwaousmg(bool $oqkgomucoyswikgk) { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto ucecweoaoyeoyuue; } if ($oqkgomucoyswikgk) { goto ueaiskyiqcquiika; } if (!($occymigcemkqucuw = $this->auamgqiwisysomsa()->cwwaoacweogeycuc($uamcoiueqaamsqma))) { goto koggssokukoukkay; } $uamcoiueqaamsqma = __("\120\141\147\x65\40\x63\x61\x63\150\x65\x20\x64\151\x73\x61\x62\x6c\x65\144\40\x73\165\x63\143\145\163\x73\146\165\x6c\154\171", PR__PKG__OPTIMIZATION); koggssokukoukkay: goto eqemcocqsyasqycq; ueaiskyiqcquiika: if (!($occymigcemkqucuw = $this->auamgqiwisysomsa()->eigwgcuaamoqkuyw($uamcoiueqaamsqma))) { goto gwoacimkeyymqccq; } $uamcoiueqaamsqma = __("\x50\x61\x67\x65\40\x63\x61\143\150\x65\40\145\x6e\141\142\x6c\x65\x64\x20\x73\165\x63\143\x65\x73\163\146\x75\154\x6c\x79", PR__PKG__OPTIMIZATION); gwoacimkeyymqccq: eqemcocqsyasqycq: ucecweoaoyeoyuue: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } }
