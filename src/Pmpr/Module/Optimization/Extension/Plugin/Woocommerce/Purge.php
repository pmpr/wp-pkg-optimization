<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ffbf6dd4c36             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Extension\Plugin\Woocommerce; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Module\Optimization\Extension\Common; use Pmpr\Module\Optimization\Purge\Traits\PurgeTrait; class Purge extends Common { use PurgeTrait; public function wigskegsqequoeks() { if (!$this->weysguygiseoukqw(Setting::qcckqskeimawaeqi)) { goto suaymckwwgmugsaa; } $this->qcsmikeggeemccuu("\167\157\157\x63\x6f\x6d\x6d\145\x72\x63\145\137\165\160\x64\x61\164\x65\144\x5f\x70\x72\157\144\165\143\x74\x5f\x73\164\157\143\x6b", [$this, "\x61\x63\153\143\x63\x63\157\167\x6d\x67\x73\143\x6f\171\x75\x6b"], PHP_INT_MAX); suaymckwwgmugsaa: if (!$this->weysguygiseoukqw(Setting::oqosscouoeiqyeak)) { goto wsqoskqgyooqeyga; } $this->qcsmikeggeemccuu("\167\x63\x5f\141\146\164\145\162\x5f\x70\x72\x6f\144\165\143\164\x73\x5f\x65\x6e\144\x69\x6e\147\137\163\x61\x6c\145\x73", [$this, "\x6d\165\x69\147\x69\x65\x67\163\161\x61\x79\157\x77\x63\157\x63"], PHP_INT_MAX)->qcsmikeggeemccuu("\x77\x63\x5f\x61\x66\x74\x65\162\137\x70\x72\157\144\165\x63\164\163\x5f\163\164\x61\x72\x74\x69\156\x67\x5f\163\141\154\145\x73", [$this, "\155\165\151\x67\x69\x65\147\163\161\x61\171\x6f\x77\x63\157\x63"], PHP_INT_MAX); wsqoskqgyooqeyga: } public function ackcccowmgscoyuk($product) { if (!function_exists("\x77\x63\137\x67\145\x74\137\x6f\x72\144\x65\x72")) { goto wmcaecgwmmwuuqsq; } $auwuoyyagaiegwae = []; if (!($suaemuyiacqyugsm = DecoratorWoocommerce::imsiwqgqaeceoomu("\x73\x68\x6f\x70"))) { goto uekkkmwciocmosgg; } $auwuoyyagaiegwae[] = $this->ycqquoiyyuesegsy($suaemuyiacqyugsm); uekkkmwciocmosgg: $eyscsimwcyaqakqg = wc_get_product_cat_ids($product); foreach ($eyscsimwcyaqakqg as $guwumyyyakswawas) { $auwuoyyagaiegwae[] = $this->qmgcisuuikgmqcsu($guwumyyyakswawas); igscwycsqsckmcuq: } ecqeqquikuomwgsu: $auwuoyyagaiegwae = array_merge($auwuoyyagaiegwae, $this->wgaamqmkuoaqgaqw($product)); $auwuoyyagaiegwae = array_unique($auwuoyyagaiegwae); $this->kggeaycqkokcquqk($auwuoyyagaiegwae); $this->oaumimwssciwumys("\120\x75\162\x67\145\x20\160\x72\x6f\x64\165\x63\164\x20\x70\141\147\145\163\x20\141\x6e\x64\40\x63\x61\x74\145\147\157\162\x69\x65\163\x20\x66\157\162\x20\127\157\x6f\103\157\x6d\155\x65\162\x63\145\x20\x6f\x72\144\145\x72"); wmcaecgwmmwuuqsq: } public function muigiegsqayowcoc($iskcmykisgqeqkcy) { $auwuoyyagaiegwae = []; if (!(is_array($iskcmykisgqeqkcy) && $iskcmykisgqeqkcy)) { goto gwayeyymscmgwqkg; } foreach ($iskcmykisgqeqkcy as $product) { $migiiksoiymissge = $this->ycqquoiyyuesegsy($product); if (!$migiiksoiymissge) { goto iuieskocqoqkkwus; } $auwuoyyagaiegwae[] = $migiiksoiymissge; iuieskocqoqkkwus: syeeegeygawwqiuu: } ycskuioouwwemgke: if (!$auwuoyyagaiegwae) { goto isiqkeyciyqgkayu; } $this->kggeaycqkokcquqk($auwuoyyagaiegwae); isiqkeyciyqgkayu: gwayeyymscmgwqkg: } }
