<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c70dffa5ed1             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Minify; use Pmpr\Package\Optimization\Asset\Setting; class Minify extends Common { protected array $enables = []; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\164\x5f\x62\x75\146\146\145\162\x5f\x70\162\157\143\145\x73\x73"), [$this, "\167\x61\155\x69\x69\151\x61\147\x63\167\167\x69\x67\165\x63\165"], 50); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { if (!$this->weysguygiseoukqw(Setting::ccoaqmuiqioqaooa, false)) { goto qmuikumqukcyaeqa; } if (!$this->weysguygiseoukqw(Setting::sikyekqowskqiqga)) { goto pssquaaiioygwqoq; } HTML::symcgieuakksimmu(); pssquaaiioygwqoq: if (!$this->weysguygiseoukqw(Setting::ykqawckyqkmqiamq)) { goto ucugeysomcyceyos; } CSS::symcgieuakksimmu(); ucugeysomcyceyos: if (!$this->weysguygiseoukqw(Setting::eumicecccemicqey)) { goto momgmqemgcasyuqq; } JS::symcgieuakksimmu(); momgmqemgcasyuqq: qmuikumqukcyaeqa: } public function wamiiiagcwwigucu(?string $nsmgceoqaqogqmuw) : ?string { $qsucisggsqskmcse = [Setting::eumicecccemicqey => JS::symcgieuakksimmu(), Setting::ykqawckyqkmqiamq => CSS::symcgieuakksimmu(), Setting::sikyekqowskqiqga => HTML::symcgieuakksimmu()]; foreach ($qsucisggsqskmcse as $amakmumgguksgmum => $aksgkeoomwimawms) { if (!($this->weysguygiseoukqw($amakmumgguksgmum, false) && $aksgkeoomwimawms instanceof AbstractMinify)) { goto mioqycmmeucswoms; } $nsmgceoqaqogqmuw = $aksgkeoomwimawms->okuguyacggsageqq($nsmgceoqaqogqmuw); mioqycmmeucswoms: imaiuooqwwokwemw: } keyiswqkmqqquosw: return $nsmgceoqaqogqmuw; } }
