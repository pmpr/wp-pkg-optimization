<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e900b909935             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Purge\Traits; use Exception; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Setting; trait PurgeTrait { public function kqmkucymmoswoimq($ocqawgquwsqioses) : bool { $ksaameoqigiaoigg = false; if (!(is_array($ocqawgquwsqioses) && $ocqawgquwsqioses)) { goto gimsiyauegmikyka; } $ksaameoqigiaoigg = true; foreach ($ocqawgquwsqioses as $suaemuyiacqyugsm) { if ($this->ywuwaieucessammu($suaemuyiacqyugsm)) { goto kuymgsewmeoimeuq; } $ksaameoqigiaoigg = false; goto mioaoacqueiyueak; kuymgsewmeoimeuq: oaseseemoaqcgqeu: } mioaoacqueiyueak: gimsiyauegmikyka: return $ksaameoqigiaoigg; } public function ywuwaieucessammu($suaemuyiacqyugsm, &$uamcoiueqaamsqma = '') : bool { $ksaameoqigiaoigg = false; $yyimiwcuegayoskq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\137\160\x61\147\x65\x5f\x67\145\x74\137\151\x6e\146\157\x5f\x62\171\137\151\144"), $suaemuyiacqyugsm); if ($eeamcawaiqocomwy = ManipulateArray::get($yyimiwcuegayoskq, self::sauwwsocmukoaayu)) { goto kisuswmyqsocukgk; } $uamcoiueqaamsqma = sprintf("\45\x73\72\x20\45\163", __("\x43\141\x6e\40\x6e\157\164\x20\x66\151\x6e\144\x20\x69\156\146\157\x20\x62\x79\40\x70\141\147\145\x20\x69\x64", PR__MDL__OPTIMIZATION), $suaemuyiacqyugsm); goto wisaekiyyweeemuy; kisuswmyqsocukgk: $ksaameoqigiaoigg = $this->kggeaycqkokcquqk([$eeamcawaiqocomwy], $uamcoiueqaamsqma); wisaekiyyweeemuy: return $ksaameoqigiaoigg; } public function qsiwaqwsyasqsqcq(...$ywmkwiwkosakssii) : bool { try { $occymigcemkqucuw = true; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\137\x70\165\x72\147\x65\x5f\141\x6c\x6c"), ...$ywmkwiwkosakssii); } catch (Exception $wgaoewqkwgomoaai) { $this->saqqeqmcyyoeqici("\160\x75\x72\147\145\40\141\x6c\x6c\x20\x65\x72\162\x6f\x72\72\x20{$this->kyacickkomkioeyu($wgaoewqkwgomoaai)}"); $occymigcemkqucuw = false; } return $occymigcemkqucuw; } public function kggeaycqkokcquqk($auwuoyyagaiegwae = [], &$uamcoiueqaamsqma = '') : bool { $occymigcemkqucuw = false; try { $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\x70\165\162\147\145\137\x75\x72\154\163\137\x6c\151\x73\x74"), $auwuoyyagaiegwae); if ($auwuoyyagaiegwae) { goto aosasoogesueygak; } $uamcoiueqaamsqma = __("\x55\162\x6c\163\x20\141\162\x65\x20\x65\155\160\x74\171\x20\146\x6f\x72\40\x70\x75\162\147\145\40\165\x72\x6c\x73\x2e", PR__MDL__OPTIMIZATION); goto emqmqkeygumaasam; aosasoogesueygak: $occymigcemkqucuw = true; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\137\160\165\162\x67\145\x5f\x75\162\154\x73"), $auwuoyyagaiegwae); emqmqkeygumaasam: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = sprintf("\x25\163\x3a\x20\x25\x73", __("\x50\165\162\147\x65\40\165\162\154\163\x20\145\x72\162\x6f\x72", PR__MDL__OPTIMIZATION), $this->kyacickkomkioeyu($wgaoewqkwgomoaai)); } return $occymigcemkqucuw; } public function ycqquoiyyuesegsy($post) : string { return ManipulatePost::ycqquoiyyuesegsy($post); } public function ugwqkyyoomkmekqg() : bool { $ksaameoqigiaoigg = false; if (!($this->weysguygiseoukqw(Setting::kamcoqgmemeeqmsc) && extension_loaded("\x5a\x65\156\144\40\117\x50\143\141\143\150\x65"))) { goto iyocimuyeemkaaso; } $iueymcwwscwqkiyq = opcache_get_status(); $iqsymysgkgosmiys = ManipulateArray::get($iueymcwwscwqkiyq, "\157\x70\x63\141\143\x68\x65\x5f\145\x6e\x61\142\154\145\x64", false); if (!($iqsymysgkgosmiys && opcache_reset())) { goto asueqykmkoaimguq; } foreach (ManipulateArray::get($iueymcwwscwqkiyq, "\163\x63\x72\x69\160\x74\x73") as $uusmaiomayssaecw => $icwicymcioeyeyek) { $qmwoqyacswkwkiog[dirname($uusmaiomayssaecw)][basename($uusmaiomayssaecw)] = $icwicymcioeyeyek; opcache_invalidate(ManipulateArray::get($icwicymcioeyeyek, "\x66\165\154\x6c\x5f\x70\141\164\150"), true); scccyaiaggeasgqg: } meegaqaesckqmyec: $ksaameoqigiaoigg = true; asueqykmkoaimguq: iyocimuyeemkaaso: return $ksaameoqigiaoigg; } public function cekqoisoaceaqiam($post) : array { return ManipulatePost::cekqoisoaceaqiam($post); } public function qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya = '') : string { return ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); } }
