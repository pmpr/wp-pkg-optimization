<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62c85c689cc91             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset; use Pmpr\Module\Optimization\Asset\CDN\CDN; use Pmpr\Module\Optimization\Asset\Cleanup\Cleanup; use Pmpr\Module\Optimization\Asset\Critical\Critical; use Pmpr\Module\Optimization\Asset\Minify\Minify; use Pmpr\Module\Optimization\Asset\Media\Media; class Asset extends Common { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function iemaakgqgqosiecm() { CDN::symcgieuakksimmu(); Media::symcgieuakksimmu(); Delay::symcgieuakksimmu(); Minify::symcgieuakksimmu(); Cleanup::symcgieuakksimmu(); Critical::symcgieuakksimmu(); if (!is_admin()) { goto wkiymcoqqiigqaaw; } Setting::symcgieuakksimmu(); HTAccess::symcgieuakksimmu(); wkiymcoqqiigqaaw: } }
