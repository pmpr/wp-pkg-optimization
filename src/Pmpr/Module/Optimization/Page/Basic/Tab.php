<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e900b909935             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Basic; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Page\Admin\Tab as BaseClass; class Tab extends BaseClass { protected ?ListTable $listTable = null; public function __construct($aasascamegmwqmqk, $aokagokqyuysuksm = '', $meqocwsecsywiiqs = '', $ukwokcuqauuosmoo = '', $sqqewmoeaekuyyas = 1) { $this->listTable = $aasascamegmwqmqk; parent::__construct($aokagokqyuysuksm, $meqocwsecsywiiqs, $ukwokcuqauuosmoo, $sqqewmoeaekuyyas); } public function waeasakssissiuqg() : ?ListTable { return $this->listTable; } public function eiieguqemowyacgi() { $qsyooiqcmkcieyuk = $this->waeasakssissiuqg(); if (!$qsyooiqcmkcieyuk) { goto mmmqqoemusicwgqg; } $qsyooiqcmkcieyuk->prepare_items(); mmmqqoemusicwgqg: parent::eiieguqemowyacgi(); } public function gayqqwwuycceosii() : array { return ["\164\141\142" => $this->mwikyscisascoeea(), "\x70\141\147\145" => $this->oyqkaeooscmcweyc("\x62\141\x73\151\143\137\160\141\x67\x65"), "\163\145\141\162\x63\150\x5f\164\x65\170\x74" => __("\x53\145\x61\162\143\150", PR__MDL__OPTIMIZATION), "\154\x69\163\164\137\164\x61\142\154\145" => $this->waeasakssissiuqg(), self::uwceyikaaaqgkkee => "\164\141\x62"]; } }
