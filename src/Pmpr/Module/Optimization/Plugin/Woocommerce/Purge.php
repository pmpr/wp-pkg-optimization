<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e900b909935             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Plugin\Woocommerce; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Module\Optimization\Plugin\Common; use Pmpr\Module\Optimization\Purge\Traits\PurgeTrait; class Purge extends Common { use PurgeTrait; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\157\157\x63\157\155\x6d\145\162\143\145\137\165\160\x64\x61\164\x65\x64\x5f\x70\162\157\x64\165\x63\x74\x5f\163\x74\x6f\x63\x6b", [$this, "\141\x63\x6b\x63\143\143\x6f\x77\x6d\147\163\143\x6f\x79\x75\153"], PHP_INT_MAX)->qcsmikeggeemccuu("\167\x63\x5f\141\x66\x74\x65\162\x5f\160\162\157\x64\x75\x63\x74\163\x5f\x65\156\144\151\156\147\x5f\163\x61\x6c\145\163", [$this, "\x6d\x75\151\147\x69\145\147\163\x71\141\171\x6f\167\143\x6f\143"], PHP_INT_MAX)->qcsmikeggeemccuu("\167\143\x5f\x61\146\164\145\x72\137\x70\x72\157\x64\165\143\164\x73\137\163\164\x61\162\164\151\x6e\x67\137\163\x61\x6c\x65\163", [$this, "\155\x75\x69\147\x69\145\147\163\x71\x61\171\x6f\x77\143\157\143"], PHP_INT_MAX); } public function ackcccowmgscoyuk($product) { if (!function_exists("\167\x63\137\147\145\x74\137\x6f\x72\144\145\x72")) { goto micceocwuwkyusic; } $auwuoyyagaiegwae = []; if (!($suaemuyiacqyugsm = DecoratorWoocommerce::imsiwqgqaeceoomu("\x73\150\157\160"))) { goto iauwuugggmegwisk; } $auwuoyyagaiegwae[] = $this->ycqquoiyyuesegsy($suaemuyiacqyugsm); iauwuugggmegwisk: $eyscsimwcyaqakqg = wc_get_product_cat_ids($product); foreach ($eyscsimwcyaqakqg as $guwumyyyakswawas) { $auwuoyyagaiegwae[] = $this->qmgcisuuikgmqcsu($guwumyyyakswawas); kqyoakickmseyyeq: } aukucaieceiwesmm: $auwuoyyagaiegwae = array_merge($auwuoyyagaiegwae, $this->cekqoisoaceaqiam($product)); $auwuoyyagaiegwae = array_unique($auwuoyyagaiegwae); $this->kggeaycqkokcquqk($auwuoyyagaiegwae); $this->oaumimwssciwumys("\120\x75\162\x67\x65\x20\160\162\x6f\144\x75\x63\x74\40\x70\141\x67\145\163\x20\x61\x6e\144\x20\143\x61\x74\145\x67\x6f\162\x69\145\x73\40\x66\x6f\162\x20\x57\x6f\x6f\103\157\155\155\x65\162\143\x65\x20\x6f\x72\144\145\x72"); micceocwuwkyusic: } public function muigiegsqayowcoc($iskcmykisgqeqkcy) { $auwuoyyagaiegwae = []; if (!(is_array($iskcmykisgqeqkcy) && $iskcmykisgqeqkcy)) { goto egaymskkosukqeao; } foreach ($iskcmykisgqeqkcy as $product) { $migiiksoiymissge = $this->ycqquoiyyuesegsy($product); if (!$migiiksoiymissge) { goto acggikioyeueeowg; } $auwuoyyagaiegwae[] = $migiiksoiymissge; acggikioyeueeowg: ykwasaaoeeiuomim: } iwueukqcywkiyqge: if (!$auwuoyyagaiegwae) { goto cwikoaeqmmoimmso; } $this->kggeaycqkokcquqk($auwuoyyagaiegwae); cwikoaeqmmoimmso: egaymskkosukqeao: } }
