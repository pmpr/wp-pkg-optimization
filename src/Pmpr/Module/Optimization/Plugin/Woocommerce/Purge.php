<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e6b0646cf09             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Plugin\Woocommerce; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Module\Optimization\Plugin\Common; use Pmpr\Module\Optimization\Purge\Traits\PurgeTrait; class Purge extends Common { use PurgeTrait; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x6f\x6f\143\157\x6d\x6d\x65\x72\x63\145\137\x75\x70\144\x61\164\x65\144\137\160\x72\x6f\144\x75\143\164\137\x73\164\x6f\143\x6b", [$this, "\x61\143\153\x63\143\143\157\167\155\x67\163\x63\x6f\171\x75\153"], PHP_INT_MAX)->qcsmikeggeemccuu("\167\x63\x5f\141\146\164\145\x72\137\x70\162\157\144\x75\143\x74\x73\x5f\x65\x6e\144\151\x6e\x67\x5f\163\x61\154\x65\163", [$this, "\x6d\x75\x69\x67\151\x65\x67\163\161\x61\171\x6f\x77\143\x6f\143"], PHP_INT_MAX)->qcsmikeggeemccuu("\x77\x63\x5f\141\x66\x74\x65\162\137\x70\x72\157\144\165\x63\164\163\x5f\163\x74\141\162\164\x69\x6e\x67\137\163\x61\x6c\x65\163", [$this, "\155\x75\x69\x67\151\x65\x67\163\x71\x61\x79\x6f\x77\143\157\x63"], PHP_INT_MAX); } public function ackcccowmgscoyuk($product) { if (!function_exists("\167\143\137\147\145\164\x5f\x6f\162\144\145\162")) { goto micceocwuwkyusic; } $auwuoyyagaiegwae = []; if (!($suaemuyiacqyugsm = DecoratorWoocommerce::imsiwqgqaeceoomu("\x73\150\157\x70"))) { goto iauwuugggmegwisk; } $auwuoyyagaiegwae[] = $this->ycqquoiyyuesegsy($suaemuyiacqyugsm); iauwuugggmegwisk: $eyscsimwcyaqakqg = wc_get_product_cat_ids($product); foreach ($eyscsimwcyaqakqg as $guwumyyyakswawas) { $auwuoyyagaiegwae[] = $this->qmgcisuuikgmqcsu($guwumyyyakswawas); kqyoakickmseyyeq: } aukucaieceiwesmm: $auwuoyyagaiegwae = array_merge($auwuoyyagaiegwae, $this->cekqoisoaceaqiam($product)); $auwuoyyagaiegwae = array_unique($auwuoyyagaiegwae); $this->kggeaycqkokcquqk($auwuoyyagaiegwae); $this->oaumimwssciwumys("\120\165\x72\x67\145\x20\160\x72\x6f\144\165\x63\x74\x20\x70\x61\147\x65\163\x20\x61\156\x64\40\143\141\164\145\x67\157\x72\x69\145\163\x20\146\157\162\x20\127\x6f\x6f\103\157\x6d\155\x65\162\x63\x65\40\x6f\x72\144\x65\162"); micceocwuwkyusic: } public function muigiegsqayowcoc($iskcmykisgqeqkcy) { $auwuoyyagaiegwae = []; if (!(is_array($iskcmykisgqeqkcy) && $iskcmykisgqeqkcy)) { goto egaymskkosukqeao; } foreach ($iskcmykisgqeqkcy as $product) { $migiiksoiymissge = $this->ycqquoiyyuesegsy($product); if (!$migiiksoiymissge) { goto acggikioyeueeowg; } $auwuoyyagaiegwae[] = $migiiksoiymissge; acggikioyeueeowg: ykwasaaoeeiuomim: } iwueukqcywkiyqge: if (!$auwuoyyagaiegwae) { goto cwikoaeqmmoimmso; } $this->kggeaycqkokcquqk($auwuoyyagaiegwae); cwikoaeqmmoimmso: egaymskkosukqeao: } }
