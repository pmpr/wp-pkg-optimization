<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ffbdfd59a7a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Minify; use Pmpr\Module\Optimization\Asset\Setting; class Minify extends Common { protected array $enables = []; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\164\137\x62\x75\x66\x66\x65\162\137\160\x72\157\x63\145\163\163"), [$this, "\167\x61\155\151\x69\x69\141\x67\x63\167\x77\151\x67\x75\143\x75"], 50); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { if (!$this->weysguygiseoukqw(Setting::ccoaqmuiqioqaooa, false)) { goto yggmaskeguaqkusc; } if (!$this->weysguygiseoukqw(Setting::sikyekqowskqiqga)) { goto qyeswawykmasuqye; } HTML::symcgieuakksimmu(); qyeswawykmasuqye: if (!$this->weysguygiseoukqw(Setting::ykqawckyqkmqiamq)) { goto uwaimsisescsgyqk; } CSS::symcgieuakksimmu(); uwaimsisescsgyqk: if (!$this->weysguygiseoukqw(Setting::eumicecccemicqey)) { goto uqcsksaywyqeumig; } JS::symcgieuakksimmu(); uqcsksaywyqeumig: yggmaskeguaqkusc: } public function wamiiiagcwwigucu(?string $nsmgceoqaqogqmuw) : ?string { $qsucisggsqskmcse = [Setting::eumicecccemicqey => JS::symcgieuakksimmu(), Setting::ykqawckyqkmqiamq => CSS::symcgieuakksimmu(), Setting::sikyekqowskqiqga => HTML::symcgieuakksimmu()]; foreach ($qsucisggsqskmcse as $amakmumgguksgmum => $aksgkeoomwimawms) { if (!($this->weysguygiseoukqw($amakmumgguksgmum, false) && $aksgkeoomwimawms instanceof AbstractMinify)) { goto kwmiwaecqcgiaqye; } $nsmgceoqaqogqmuw = $aksgkeoomwimawms->okuguyacggsageqq($nsmgceoqaqogqmuw); kwmiwaecqcgiaqye: jsmisuccwyukksgc: } ukwoswyyogmsygqg: return $nsmgceoqaqogqmuw; } }
