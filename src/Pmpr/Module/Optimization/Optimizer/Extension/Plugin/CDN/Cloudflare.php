<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d2182256c51             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Extension\Plugin\CDN; use CF\WordPress\Hooks; use Pmpr\Common\Foundation\Interfaces\Constants; class Cloudflare extends Common { private $hooks = null; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\155\x69\156\x5f\156\x6f\x74\x69\143\145\x73", [$this, "\x6d\145\x79\147\x73\x79\167\x75\151\x6b\x69\157\153\163\x6b\147"])->qcsmikeggeemccuu("\x61\x64\155\151\156\x5f\x6e\x6f\x74\x69\x63\x65\163", [$this, "\x6f\151\153\x6d\x69\145\171\x6f\x6f\x73\x77\153\165\x71\x77\157"])->qcsmikeggeemccuu("\141\144\x6d\x69\156\x5f\x6e\157\x74\151\x63\x65\x73", [$this, "\155\x79\153\x63\x67\x75\x77\x6d\141\x63\x71\165\145\x6d\x6b\x73"]); } public function meygsywuikiokskg() { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); if (!(!$uuwwyaeymswgsgsi->cmaecekuqkwmemms("\103\x4c\x4f\x55\104\106\114\101\x52\105\x5f\x50\114\x55\x47\111\116\137\104\111\122") || !$uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x43\114\117\125\104\106\x4c\x41\x52\x45\137\x48\x54\124\120\x32\137\123\105\122\x56\x45\x52\x5f\120\x55\123\110\137\x41\103\124\x49\x56\105"))) { goto mscgewkcqcoowweg; } return; mscgewkcqcoowweg: if (!($this->kmuweyayaqoeqiyw()->qcsgmgoukiouuscw() || !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie(Constants::gewmeskawiqikkoc))) { goto suqcsgaosywaauuu; } return; suqcsgaosywaauuu: $uamcoiueqaamsqma = __("\x43\x6c\x6f\x75\144\146\154\x61\162\x65\47\x73\40\x48\124\x54\120\57\62\40\123\145\x72\166\x65\162\40\120\x75\x73\150\x20\151\163\x20\x69\x6e\x63\x6f\x6d\160\141\x74\151\142\154\145\x20\167\x69\x74\x68\x20\x74\x68\x65\x20\146\x65\x61\164\165\x72\145\163\40\x6f\146\x20\122\145\x6d\157\x76\x65\40\125\156\165\x73\x65\x64\x20\x43\x53\x53\x2e\x20\x57\x65\x20\x73\164\162\157\x6e\147\x6c\171\40\162\x65\143\157\155\x6d\145\x6e\x64\40\x64\x69\x73\141\142\x6c\x69\156\x67\40\x69\x74\56", PR__MDL__OPTIMIZATION); $this->cimaucgayqyyccoc($uamcoiueqaamsqma, "\143\154\157\165\144\146\154\141\x72\x65\x5f\x73\145\x72\166\x65\162\137\160\x75\x73\x68"); } public function oikmieyooswkuqwo() { } public function mykcguwmacquemks() { } private function aiomiwiwyeyqeoqs() : bool { if ($this->uwkmaywceaaaigwo()->essaugkeosgskqme()->ggocakcisguuokai("\143\x6c\157\165\x64\146\x6c\x61\x72\x65\x2f\143\154\x6f\x75\x64\x66\154\x61\162\145\56\x70\x68\160")) { goto wwukgaquuyoissgy; } return false; wwukgaquuyoissgy: $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); if (!(empty($qkqgcaykemoiecma->get("\143\154\x6f\x75\144\146\154\x61\162\145\137\x61\x70\151\x5f\x65\155\x61\151\154")) || empty($qkqgcaykemoiecma->get("\x63\x6c\x6f\x75\x64\x66\x6c\x61\x72\x65\x5f\141\x70\x69\x5f\153\x65\x79")) || empty($qkqgcaykemoiecma->get("\x63\x6c\x6f\x75\144\146\154\141\162\145\x5f\143\x61\x63\150\145\x64\137\144\157\x6d\141\x69\156\x5f\x6e\x61\x6d\x65")))) { goto gsygwgsiawgmqiyi; } return false; gsygwgsiawgmqiyi: return true; } private function egakasqqyawukwco() : Hooks { if ($this->hooks) { goto qsgqwyqaqiowkmco; } $this->hooks = new Hooks(); qsgqwyqaqiowkmco: return $this->hooks; } public function wciuogmwscgcqkmc() { $this->egakasqqyawukwco()->purgeCacheEverything(); } public function kggeaycqkokcquqk($ooosquycguwewsao) { $this->egakasqqyawukwco()->purgeCacheByRelevantURLs($ooosquycguwewsao); } }
