<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c6e9e36d31a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Purge; use Exception; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Optimization\Container; use Pmpr\Package\Optimization\Setting; class Common extends Container { const ceoukesuuuqaoaqa = self::wowuwuigyoceikas . "\160\165\x72\147\145\x5f\x63\141\143\x68\145\x5f\x63\x72\157\x6e"; public function kqmkucymmoswoimq($ocqawgquwsqioses) : bool { $ksaameoqigiaoigg = false; if (!(is_array($ocqawgquwsqioses) && $ocqawgquwsqioses)) { goto yuuyikiacmmueosu; } $ksaameoqigiaoigg = true; foreach ($ocqawgquwsqioses as $suaemuyiacqyugsm) { if ($this->ywuwaieucessammu($suaemuyiacqyugsm)) { goto ucuoeymyqeokgsya; } $ksaameoqigiaoigg = false; goto mysueeoswqgccmui; ucuoeymyqeokgsya: egmayaiikwsskgmy: } mysueeoswqgccmui: yuuyikiacmmueosu: return $ksaameoqigiaoigg; } public function ywuwaieucessammu($suaemuyiacqyugsm, &$uamcoiueqaamsqma = '') : bool { $ksaameoqigiaoigg = false; $yyimiwcuegayoskq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\137\x70\x61\x67\145\137\147\145\164\x5f\151\x6e\146\157\x5f\142\171\x5f\x69\144"), $suaemuyiacqyugsm); if ($yyimiwcuegayoskq !== $suaemuyiacqyugsm) { goto sguskaeaaqcagqgc; } $uamcoiueqaamsqma = sprintf("\x25\x73\72\x20\x25\x73", __("\103\x61\x6e\x20\156\157\164\40\146\x69\156\144\40\151\x6e\146\157\40\x62\x79\40\160\x61\x67\x65\40\x69\x64", PR__PKG__OPTIMIZATION), $suaemuyiacqyugsm); goto agkmiayuawacakau; sguskaeaaqcagqgc: $auwuoyyagaiegwae[] = ManipulateArray::get($yyimiwcuegayoskq, self::sauwwsocmukoaayu); $ksaameoqigiaoigg = $this->kggeaycqkokcquqk($auwuoyyagaiegwae, $uamcoiueqaamsqma); agkmiayuawacakau: return $ksaameoqigiaoigg; } public function qsiwaqwsyasqsqcq(...$ywmkwiwkosakssii) : bool { try { $occymigcemkqucuw = true; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\137\160\x75\162\147\145\x5f\141\x6c\x6c"), ...$ywmkwiwkosakssii); } catch (Exception $wgaoewqkwgomoaai) { $this->saqqeqmcyyoeqici("\x70\x75\162\x67\145\x20\141\154\x6c\x20\x65\162\x72\157\x72\x3a\x20{$this->kyacickkomkioeyu($wgaoewqkwgomoaai)}"); $occymigcemkqucuw = false; } return $occymigcemkqucuw; } public function kggeaycqkokcquqk($auwuoyyagaiegwae = [], &$uamcoiueqaamsqma = '') : bool { $occymigcemkqucuw = false; try { $this->uiagwusgwcassqua("\142\x65\146\157\162\x65\40\160\165\162\x67\145\40\x75\x72\x6c\163\x20\x62\x79\x20\154\x69\163\164", $auwuoyyagaiegwae); $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\137\x70\165\162\x67\145\x5f\165\x72\154\163\137\x6c\151\x73\x74"), $auwuoyyagaiegwae); if ($auwuoyyagaiegwae && is_array($auwuoyyagaiegwae)) { goto syuaummumssgwwee; } $uamcoiueqaamsqma = __("\125\162\x6c\x73\40\x61\162\x65\x20\145\x6d\x70\x74\x79\x20\x66\157\162\40\x70\x75\162\147\145\40\x75\162\x6c\163\x2e", PR__PKG__OPTIMIZATION); goto oocuemosmeeekgas; syuaummumssgwwee: $occymigcemkqucuw = true; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\x5f\160\x75\162\x67\145\x5f\165\162\x6c\163"), $auwuoyyagaiegwae); oocuemosmeeekgas: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = sprintf("\45\163\72\x20\x25\163", __("\120\x75\x72\x67\x65\40\x75\162\x6c\163\40\145\x72\x72\x6f\162", PR__PKG__OPTIMIZATION), $this->kyacickkomkioeyu($wgaoewqkwgomoaai)); } return $occymigcemkqucuw; } public function ycqquoiyyuesegsy($post) : string { return ManipulatePost::ycqquoiyyuesegsy($post); } public function ugwqkyyoomkmekqg() : bool { $ksaameoqigiaoigg = false; if (!$this->weysguygiseoukqw(Setting::kamcoqgmemeeqmsc)) { goto aoquoewagkseayug; } if (!extension_loaded("\132\145\156\144\x20\117\120\x63\x61\143\150\x65")) { goto qiaimmucomukkeka; } $iueymcwwscwqkiyq = opcache_get_status(); $iqsymysgkgosmiys = ManipulateArray::get($iueymcwwscwqkiyq, "\x6f\x70\143\141\143\x68\x65\x5f\145\156\x61\x62\154\145\144", false); if (!($iqsymysgkgosmiys && opcache_reset())) { goto egsycocugqyyswsi; } foreach (ManipulateArray::get($iueymcwwscwqkiyq, "\x73\x63\162\151\x70\x74\x73") as $uusmaiomayssaecw => $icwicymcioeyeyek) { $qmwoqyacswkwkiog[dirname($uusmaiomayssaecw)][basename($uusmaiomayssaecw)] = $icwicymcioeyeyek; opcache_invalidate(ManipulateArray::get($icwicymcioeyeyek, "\146\x75\154\x6c\137\x70\x61\x74\150"), $cwwowqyuwccuykom = true); uoeasoimegouymka: } qkcsykuocwuyaice: $this->oaumimwssciwumys("\120\x75\x72\147\x65\40\117\120\x63\x61\x63\x68\x65\x20\143\x61\143\150\x65"); $ksaameoqigiaoigg = true; egsycocugqyyswsi: qiaimmucomukkeka: aoquoewagkseayug: return $ksaameoqigiaoigg; } public function cekqoisoaceaqiam($post) : array { return ManipulatePost::cekqoisoaceaqiam($post); } public function qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya = '') : string { return ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); } }
