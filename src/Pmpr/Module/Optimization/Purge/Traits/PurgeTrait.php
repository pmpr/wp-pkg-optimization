<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63217f9c731b7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Purge\Traits; use Exception; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Setting; trait PurgeTrait { public function kqmkucymmoswoimq($ocqawgquwsqioses) : bool { $ksaameoqigiaoigg = false; if (!(is_array($ocqawgquwsqioses) && $ocqawgquwsqioses)) { goto eogomkswkaqwyycm; } $ksaameoqigiaoigg = true; foreach ($ocqawgquwsqioses as $suaemuyiacqyugsm) { if ($this->ywuwaieucessammu($suaemuyiacqyugsm)) { goto iecqkqoiqimmisyw; } $ksaameoqigiaoigg = false; goto kiewcwsykccgocuc; iecqkqoiqimmisyw: eysuawiooiswaseq: } kiewcwsykccgocuc: eogomkswkaqwyycm: return $ksaameoqigiaoigg; } public function ywuwaieucessammu($suaemuyiacqyugsm, &$uamcoiueqaamsqma = '') : bool { $ksaameoqigiaoigg = false; $yyimiwcuegayoskq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\137\160\x61\147\145\x5f\147\x65\164\137\151\x6e\x66\x6f\x5f\x62\171\x5f\x69\x64"), $suaemuyiacqyugsm); if ($eeamcawaiqocomwy = ManipulateArray::get($yyimiwcuegayoskq, self::sauwwsocmukoaayu)) { goto egiauwuekseyeaeq; } $uamcoiueqaamsqma = sprintf("\45\x73\72\40\x25\163", __("\103\141\x6e\x20\156\157\x74\x20\146\151\x6e\144\40\151\156\x66\x6f\40\142\x79\x20\x70\141\147\145\40\x69\x64", PR__MDL__OPTIMIZATION), $suaemuyiacqyugsm); goto euuekiyqwkowiees; egiauwuekseyeaeq: $ksaameoqigiaoigg = $this->kggeaycqkokcquqk([$eeamcawaiqocomwy], $uamcoiueqaamsqma); euuekiyqwkowiees: return $ksaameoqigiaoigg; } public function qsiwaqwsyasqsqcq(...$ywmkwiwkosakssii) : bool { try { $occymigcemkqucuw = true; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\x5f\160\165\162\x67\145\x5f\x61\x6c\x6c"), ...$ywmkwiwkosakssii); } catch (Exception $wgaoewqkwgomoaai) { $this->saqqeqmcyyoeqici("\x70\165\x72\x67\145\40\x61\x6c\x6c\x20\145\x72\x72\x6f\162\72\x20{$this->kyacickkomkioeyu($wgaoewqkwgomoaai)}"); $occymigcemkqucuw = false; } return $occymigcemkqucuw; } public function kggeaycqkokcquqk($auwuoyyagaiegwae = [], &$uamcoiueqaamsqma = '') : bool { $occymigcemkqucuw = false; try { $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\137\160\165\162\x67\145\137\165\162\x6c\x73\x5f\x6c\151\163\164"), $auwuoyyagaiegwae); if ($auwuoyyagaiegwae) { goto assoyoeukmqiucyq; } $uamcoiueqaamsqma = __("\x55\x72\154\163\40\x61\x72\x65\x20\145\x6d\x70\164\x79\40\146\x6f\162\x20\x70\x75\162\147\x65\40\x75\162\154\163\x2e", PR__MDL__OPTIMIZATION); goto kikkkoqiumqoeiyy; assoyoeukmqiucyq: $occymigcemkqucuw = true; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\137\160\x75\x72\x67\145\137\x75\162\154\x73"), $auwuoyyagaiegwae); kikkkoqiumqoeiyy: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = sprintf("\x25\x73\x3a\x20\45\163", __("\x50\165\162\147\145\40\x75\x72\x6c\x73\40\x65\x72\162\157\x72", PR__MDL__OPTIMIZATION), $this->kyacickkomkioeyu($wgaoewqkwgomoaai)); } return $occymigcemkqucuw; } public function ycqquoiyyuesegsy($post) : string { return ManipulatePost::ycqquoiyyuesegsy($post); } public function ugwqkyyoomkmekqg() : bool { $ksaameoqigiaoigg = false; if (!($this->weysguygiseoukqw(Setting::kamcoqgmemeeqmsc) && extension_loaded("\x5a\145\x6e\144\40\117\120\143\141\x63\150\x65"))) { goto gqycmyieayoegcsy; } $iueymcwwscwqkiyq = opcache_get_status(); $iqsymysgkgosmiys = ManipulateArray::get($iueymcwwscwqkiyq, "\x6f\160\x63\141\143\150\x65\x5f\x65\x6e\x61\x62\x6c\x65\x64", false); if (!($iqsymysgkgosmiys && opcache_reset())) { goto msiuqseowuumiwuo; } foreach (ManipulateArray::get($iueymcwwscwqkiyq, "\x73\x63\162\x69\x70\x74\x73") as $uusmaiomayssaecw => $icwicymcioeyeyek) { $qmwoqyacswkwkiog[dirname($uusmaiomayssaecw)][basename($uusmaiomayssaecw)] = $icwicymcioeyeyek; opcache_invalidate(ManipulateArray::get($icwicymcioeyeyek, "\146\x75\154\x6c\137\x70\x61\164\x68"), true); esokkakkumskkmiu: } wyqueeskecameuks: $ksaameoqigiaoigg = true; msiuqseowuumiwuo: gqycmyieayoegcsy: return $ksaameoqigiaoigg; } public function cekqoisoaceaqiam($post) : array { return ManipulatePost::cekqoisoaceaqiam($post); } public function qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya = '') : string { return ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); } }
