<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c707b39ae82             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Cloudflare; use Pmpr\Common\Foundation\API\API as BaseClass; use Exception; use GuzzleHttp\Cookie\CookieJar; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Optimization\Notice; use Psr\Http\Message\ResponseInterface; class API extends BaseClass { const kcyyywioiaimkqks = "\130\55\101\x75\x74\x68\x2d\x4b\145\171"; const sskckkiuimayuoeg = "\x58\55\x41\165\164\150\x2d\105\x6d\141\151\154"; const gqkuwmsyysusmquw = "\x74\145\170\164\x2f\150\164\155\154\x2c\x61\160\160\154\x69\x63\141\164\x69\x6f\156\x2f\170\150\x74\x6d\x6c\53\x78\155\154\x2c\x61\x70\160\x6c\x69\143\x61\164\x69\157\156\57\170\x6d\x6c\73\x71\75\60\x2e\x39\x2c" . "\x69\x6d\141\x67\145\57\167\x65\142\160\54\151\x6d\141\x67\145\x2f\x61\160\156\147\x2c\52\57\x2a\x3b\x71\75\x30\56\x38\54\141\x70\x70\154\x69\143\x61\x74\x69\x6f\x6e\x2f\163\151\147\x6e\145\144\55\145\x78\143\x68\x61\x6e\147\x65\73\x76\x3d\142\x33"; const keasgekkgaeuueau = "\x4d\157\172\x69\154\x6c\141\57\x35\56\x30\40\50\114\x69\x6e\x75\170\x3b\40\x41\156\144\162\157\x69\144\40\67\56\60\73\x20\115\157\164\157\40\107\40\50\64\51\x29\40\101\160\x70\154\x65\x57\145\x62\113\151\164\57\65\63\x37\x2e\63\x36\40" . "\x28\113\110\x54\x4d\114\54\x20\154\x69\x6b\x65\x20\107\x65\143\153\157\51\40\103\150\x72\157\x6d\145\x2f\70\x34\x2e\x30\x2e\64\61\64\63\x2e\67\40\x4d\x6f\142\x69\154\145\40\123\x61\146\141\x72\x69\x2f\65\x33\x37\56\x33\x36\x20\x43\150\162\x6f\x6d\x65\x2d\114\151\147\x68\164\x68\x6f\165\163\145"; protected ?string $email = ''; protected ?string $zoneId = ''; protected ?string $apiKey = ''; protected ?string $cfDomain = ''; protected ?string $apiToken = ''; protected ?string $authMode = ''; protected array $accountIds = []; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu()->kmuweyayaqoeqiyw(); $this->suyquyoaausqsuay("\x68\164\x74\160\x73\x3a\57\x2f\x61\160\151\x2e\143\x6c\157\x75\x64\146\154\141\162\x65\x2e\x63\157\x6d\x2f\143\x6c\x69\145\156\x74\x2f\x76\64"); $this->email = $this->weysguygiseoukqw(Setting::swqscmwcgukkcuau, ''); $this->apiKey = $this->weysguygiseoukqw(Setting::gmkoqkaemoiwimsc, ''); $this->zoneId = $this->weysguygiseoukqw(Setting::kymimiuqukascgmw); $this->authMode = $this->weysguygiseoukqw(Setting::qeykiyegimcyucgk, Setting::fsekswokoseswcqm); $this->cfDomain = $this->weysguygiseoukqw(Setting::kgigwyeaumymgaca, ''); $this->apiToken = $this->weysguygiseoukqw(Setting::msyuyksoiacyykac, ''); parent::__construct(); $this->iwoewaiwqaisaagy(); if ($this->caeygcowcuqeqkeo() === Setting::eywauigiwgqckygk) { goto cwugokqsmiomgmqg; } $this->kiaqywwoysssqgig(self::kcyyywioiaimkqks, $this->aocqkkgewgggwwys())->kiaqywwoysssqgig(self::sskckkiuimayuoeg, $this->cseqaqmuaswgwuoo()); goto uuuceqkseqkqawko; cwugokqsmiomgmqg: $this->amskqmemsacmksye($this->gkuoyaqwcaqcqmck()); uuuceqkseqkqawko: $this->ueakuaywsqiooygo(20); } public function kmegomwosoueimki() : array { return $this->accountIds; } public function cseqaqmuaswgwuoo() : ?string { return $this->email; } public function oywimmyysigqkeqa() : ?string { return $this->zoneId; } public function sawoqaskqkasksge() : ?string { return $this->cfDomain; } public function aocqkkgewgggwwys() : ?string { return $this->apiKey; } public function gkuoyaqwcaqcqmck() : ?string { return $this->apiToken; } public function caeygcowcuqeqkeo() : ?string { return $this->authMode; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\x6d\151\156\137\x69\x6e\151\x74", [$this, "\x79\145\171\151\147\165\171\x65\x67\155\x6d\171\165\x73\145\x61"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if (!$this->kmuweyayaqoeqiyw()->eaiyegoagkgeowae()) { goto wwcwmkowgooocaem; } $eumukgqciqgksuiq = false; if (!$this->caeygcowcuqeqkeo() || !$this->cseqaqmuaswgwuoo()) { goto kskqquqsegiiogek; } if ($this->caeygcowcuqeqkeo() == Setting::eywauigiwgqckygk) { goto yksamaucqkqsawkk; } if (!($this->caeygcowcuqeqkeo() == Setting::fsekswokoseswcqm)) { goto ekoegocuqoycoeyq; } $eumukgqciqgksuiq = !$this->aocqkkgewgggwwys() || !$this->oywimmyysigqkeqa(); ekoegocuqoycoeyq: goto akeoaicoieaiekcw; yksamaucqkqsawkk: $eumukgqciqgksuiq = !$this->gkuoyaqwcaqcqmck() || !$this->sawoqaskqkasksge(); akeoaicoieaiekcw: goto mocaoayiouggauiy; kskqquqsegiiogek: $eumukgqciqgksuiq = true; mocaoayiouggauiy: if (!$eumukgqciqgksuiq) { goto ygskksomysgaokek; } Notice::eumukgqciqgksuiq(__("\120\154\145\x61\163\145\40\x63\x6f\x6d\160\154\x65\164\145\40\x63\x6c\x6f\x75\x64\x66\x6c\x61\x72\145\x20\164\x61\x62\x20\151\x6e\x66\157\x72\x6d\x61\164\151\157\156", PR__PKG__OPTIMIZATION), "\157\x70\x74\55\143\146\55\156\x6f\x74\55\x76\141\x6c\x69\x64\55\143\157\156\146\151\x67"); ygskksomysgaokek: wwcwmkowgooocaem: } public function sqmcyegkigweiwks(&$iswcokucwmiosiaq = '') : bool { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\164\137\x63\x6c\157\165\144\x66\x6c\x61\162\x65\137\160\165\x72\x67\x65\x5f\x77\x68\x6f\154\145\x5f\x63\x61\143\x68\145\x5f\x62\145\x66\x6f\x72\x65")); $ksaameoqigiaoigg = false; $keccaugmemegoimu = $this->sqmuqsscmimwqoki("\x2f\172\x6f\x6e\x65\163\x2f{$this->oywimmyysigqkeqa()}\57\x70\165\162\147\x65\137\x63\x61\143\150\x65", ["\x6a\163\x6f\156" => ["\160\165\162\x67\145\137\145\166\145\162\171\x74\150\x69\156\x67" => true]]); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto becceuuwokgoaewy; } $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if (!$this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { goto qgkiguggkyiycwow; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\137\143\154\157\165\x64\x66\x6c\x61\x72\x65\x5f\x70\165\162\147\x65\x5f\167\x68\x6f\x6c\x65\137\x63\141\143\x68\x65\x5f\x61\146\x74\145\x72")); qgkiguggkyiycwow: becceuuwokgoaewy: return $ksaameoqigiaoigg; } public function yayksoygskcuaygq(&$iswcokucwmiosiaq = '') : array { $suuagcecoyuweoqk = []; $iswcokucwmiosiaq = null; $yeacayasgueouoqc = 1; $weyoqgcesqgeusiu = 50; $ymiyawysimukkoso = false; aeaciamekuqyieys: $qiouiwasaauyaaue = $this->gkwkqmwweiawigae(); $cokqekgqeigaoqsy = $this->sawoqaskqkasksge(); $wegekcwgakqeqsmq = $this->caeygcowcuqeqkeo(); $mkomwsiykqigmqca = "\57\x7a\157\156\x65\163"; if ($cokqekgqeigaoqsy && $wegekcwgakqeqsmq === Setting::eywauigiwgqckygk) { goto ugiqiewymimqecsu; } $mkomwsiykqigmqca = DecoratorQuery::yqymaqmqiqmmmsoo(["\x70\141\x67\x65" => $yeacayasgueouoqc, "\x70\x65\162\x5f\x70\x61\147\145" => $weyoqgcesqgeusiu], $mkomwsiykqigmqca); goto iuysqgmmgqiywssm; ugiqiewymimqecsu: $mkomwsiykqigmqca = DecoratorQuery::yqymaqmqiqmmmsoo("\156\141\155\145", $cokqekgqeigaoqsy, $mkomwsiykqigmqca); iuysqgmmgqiywssm: $keccaugmemegoimu = $this->get($mkomwsiykqigmqca, $qiouiwasaauyaaue); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto ucasigqmoiwaimkk; } $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if (!$this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { goto gwkawguwsamuomuo; } $yyimiwcuegayoskq = ManipulateArray::get($sogksuscggsicmac, "\x72\x65\163\165\154\164\x5f\151\x6e\146\157", []); if ($yyimiwcuegayoskq && is_array($yyimiwcuegayoskq)) { goto kucqcgeesiccuuia; } if (!$ymiyawysimukkoso) { goto gkkwmqoacciwomqs; } $ymiyawysimukkoso = false; gkkwmqoacciwomqs: goto oycuaqewsskgkqci; kucqcgeesiccuuia: $saawqymgwcseukqa = ManipulateArray::get($yyimiwcuegayoskq, "\x74\x6f\164\141\154\x5f\160\x61\x67\x65\163"); if ($saawqymgwcseukqa && (int) $saawqymgwcseukqa > $yeacayasgueouoqc) { goto weouocwmwicayyiy; } $ymiyawysimukkoso = false; goto ggyoywwggggekycs; weouocwmwicayyiy: $ymiyawysimukkoso = true; $yeacayasgueouoqc++; ggyoywwggggekycs: oycuaqewsskgkqci: $sogksuscggsicmac = ManipulateArray::get($sogksuscggsicmac, "\162\x65\x73\165\154\164", []); if (!($sogksuscggsicmac && is_array($sogksuscggsicmac))) { goto sgiouaqukyycswqm; } foreach ($sogksuscggsicmac as $icwicymcioeyeyek) { $aokagokqyuysuksm = ManipulateArray::get($icwicymcioeyeyek, "\151\144"); $ymqmyyeuycgmigyo = ManipulateArray::get($icwicymcioeyeyek, "\156\x61\x6d\145"); if ($aokagokqyuysuksm && $ymqmyyeuycgmigyo) { goto iwgmywqocewwgoeo; } $iswcokucwmiosiaq .= __("\x55\156\141\x62\154\x65\40\164\157\40\162\x65\x74\162\151\166\145\40\x7a\157\156\x65\x20\151\x64\40\144\165\x65\x20\164\157\40\151\x6e\166\x61\x6c\151\x64\40\162\145\163\160\x6f\x6e\x73\145\x20\144\141\164\141", PR__PKG__OPTIMIZATION); goto ocmagamuyawyiyka; goto syoeqaqkseguwmgy; iwgmywqocewwgoeo: $suuagcecoyuweoqk[$aokagokqyuysuksm] = $ymqmyyeuycgmigyo; syoeqaqkseguwmgy: amqgiisymksuuuss: } ocmagamuyawyiyka: sgiouaqukyycswqm: gwkawguwsamuomuo: ucasigqmoiwaimkk: if ($ymiyawysimukkoso) { goto aeaciamekuqyieys; } wyugqoowakyicyic: if (!(!$iswcokucwmiosiaq && !$suuagcecoyuweoqk)) { goto uugwmywmaqomeksa; } $iswcokucwmiosiaq .= __("\x55\x6e\141\142\154\145\40\x74\157\x20\x66\x69\x6e\x64\x20\x64\157\155\141\x69\156\x73\40\143\x6f\156\x66\151\x67\x75\162\x65\x64\x20\x6f\156\40\x43\154\157\x75\x64\146\x6c\x61\162\x65", PR__PKG__OPTIMIZATION); uugwmywmaqomeksa: return $suuagcecoyuweoqk; } public function eigwgcuaamoqkuyw(&$iswcokucwmiosiaq = '', $qegcgsquckcqmkea = false) : bool { $qeqooyuoiasweuck = $this->aoqykkmokwseeeie(); $moeacmgsosgskgii = $this->emqkioueyiqeiokk($iswcokucwmiosiaq); if (!($moeacmgsosgskgii !== false)) { goto wowmysuygugawmmu; } $qeqooyuoiasweuck[Setting::aiooimoyskeuggsu] = $moeacmgsosgskgii; wowmysuygugawmmu: if (!($moeacmgsosgskgii === 0 || $this->mwiqewoumqkqqaos(0, $iswcokucwmiosiaq))) { goto omsmaougqkqigogw; } $ekmacukqumaiaquo = [Setting::myguioueuiaacsko => false, Setting::scikeyuygqwyiisg => false]; $sowkswowciayawwu = $this->weysguygiseoukqw(Setting::myguioueuiaacsko, ''); if (!($sowkswowciayawwu && $this->gcgumeecckmsagiw($sowkswowciayawwu, $iswcokucwmiosiaq))) { goto mmmqqoemusicwgqg; } $ekmacukqumaiaquo[Setting::myguioueuiaacsko] = true; mmmqqoemusicwgqg: $iowmousgcuymioua = $this->weysguygiseoukqw(Setting::scikeyuygqwyiisg, ''); if (!($iowmousgcuymioua && $this->gcgumeecckmsagiw($iowmousgcuymioua, $iswcokucwmiosiaq))) { goto iquugwoswgkoiieg; } $ekmacukqumaiaquo[Setting::scikeyuygqwyiisg] = true; iquugwoswgkoiieg: if (!in_array(false, $ekmacukqumaiaquo, true)) { goto syiyemqigyugagks; } $uscgekqysqwwoags = $this->gwuucyqmouukogyq($iswcokucwmiosiaq); foreach ($uscgekqysqwwoags as $aokagokqyuysuksm => $ccamueccusigaaio) { $this->gcgumeecckmsagiw($aokagokqyuysuksm, $iswcokucwmiosiaq); gsiaskgsukseumig: } xogaycsaesgqeqig: syiyemqigyugagks: $qeqooyuoiasweuck[Setting::myguioueuiaacsko] = ''; $qeqooyuoiasweuck[Setting::scikeyuygqwyiisg] = ''; $iowmousgcuymioua = $this->mikgocywwwusmsas($qeqooyuoiasweuck, $iswcokucwmiosiaq); if ($kwksaeiouyowccwk = $this->ekqyaacwwqekomyu($iswcokucwmiosiaq)) { goto imwiyqcekcykscui; } if (!$iowmousgcuymioua) { goto woqkgwmkmqsuceuy; } $this->gcgumeecckmsagiw($iowmousgcuymioua, $iswcokucwmiosiaq); woqkgwmkmqsuceuy: goto umemmgiwimkymaya; imwiyqcekcykscui: $qeqooyuoiasweuck[Setting::myguioueuiaacsko] = $kwksaeiouyowccwk; $qegcgsquckcqmkea = true; $this->sqmcyegkigweiwks($iswcokucwmiosiaq); umemmgiwimkymaya: omsmaougqkqigogw: $this->ciaigksymukgucuk($qegcgsquckcqmkea, $qeqooyuoiasweuck); return $qegcgsquckcqmkea; } public function mikgocywwwusmsas(&$qeqooyuoiasweuck, &$iswcokucwmiosiaq = '') { $qeqooyuoiasweuck = $this->aoqykkmokwseeeie(); $iowmousgcuymioua = $this->weysguygiseoukqw(Setting::scikeyuygqwyiisg, ''); if (!($iowmousgcuymioua && $this->gcgumeecckmsagiw($iowmousgcuymioua, $iswcokucwmiosiaq))) { goto geasgywiogoeamek; } $qeqooyuoiasweuck[Setting::scikeyuygqwyiisg] = ''; geasgywiogoeamek: if (!($iowmousgcuymioua = $this->qsmcugseiwqqscyo($iswcokucwmiosiaq))) { goto qweyymyuuqwcmkqg; } $qeqooyuoiasweuck[Setting::scikeyuygqwyiisg] = $iowmousgcuymioua; qweyymyuuqwcmkqg: return $iowmousgcuymioua; } public function cwwaoacweogeycuc(&$iswcokucwmiosiaq = '') : bool { $ksaameoqigiaoigg = false; $qeqooyuoiasweuck = $this->aoqykkmokwseeeie(); if (!($oyymgsciaiequeww = $this->weysguygiseoukqw(Setting::aiooimoyskeuggsu))) { goto guqmgiqaaowaauyo; } $this->mwiqewoumqkqqaos($oyymgsciaiequeww, $iswcokucwmiosiaq); guqmgiqaaowaauyo: $sowkswowciayawwu = $this->weysguygiseoukqw(Setting::myguioueuiaacsko, ''); if (!($sowkswowciayawwu != '' && $this->gcgumeecckmsagiw($sowkswowciayawwu, $iswcokucwmiosiaq))) { goto ucaoyoamaycsiacq; } $qeqooyuoiasweuck[Setting::myguioueuiaacsko] = ''; $iowmousgcuymioua = $this->weysguygiseoukqw(Setting::scikeyuygqwyiisg); if (!($iowmousgcuymioua !== '' && $this->gcgumeecckmsagiw($iowmousgcuymioua, $iswcokucwmiosiaq))) { goto mccimkgwkkamsime; } $qeqooyuoiasweuck[Setting::scikeyuygqwyiisg] = ''; $this->sqmcyegkigweiwks($iswcokucwmiosiaq); $this->ciaigksymukgucuk(0, $qeqooyuoiasweuck); $ksaameoqigiaoigg = true; mccimkgwkkamsime: ucaoyoamaycsiacq: return $ksaameoqigiaoigg; } public function ckiooyswicyickam(array $kuukgsmqkagwaciu, &$iswcokucwmiosiaq = '') { $ksaameoqigiaoigg = false; $keccaugmemegoimu = $this->sqmuqsscmimwqoki("\57\172\x6f\156\x65\x73\x2f{$this->oywimmyysigqkeqa()}\x2f\160\x61\x67\x65\162\x75\x6c\x65\x73", ["\x6a\163\157\x6e" => $kuukgsmqkagwaciu]); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto oasisywuwssumsok; } $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if (!$this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { goto iuyagqakcieasiua; } $sogksuscggsicmac = ManipulateArray::get($sogksuscggsicmac, "\x72\x65\163\x75\x6c\x74"); $ksaameoqigiaoigg = ManipulateArray::get($sogksuscggsicmac, "\x69\144", false); iuyagqakcieasiua: oasisywuwssumsok: if ($iswcokucwmiosiaq) { goto iaoyeugekskmewgs; } $this->saqqeqmcyyoeqici("\x41\x64\x64\40\160\141\147\145\x20\x72\x75\154\145\x20\144\157\156\145\56"); goto iokemmkgmcaksiqu; iaoyeugekskmewgs: $this->saqqeqmcyyoeqici("\101\144\x64\40\160\x61\x67\145\x20\x72\x75\154\145\x20\146\x61\x69\154\x65\x64\72\x20{$iswcokucwmiosiaq}"); iokemmkgmcaksiqu: return $ksaameoqigiaoigg; } public function gwuucyqmouukogyq(&$iswcokucwmiosiaq = '') : array { $iswcokucwmiosiaq = null; $ksaameoqigiaoigg = []; $cgaiqcoosmmymqqm = $this->oywimmyysigqkeqa(); if ($cgaiqcoosmmymqqm) { goto wiaesksmicgikqcm; } $iswcokucwmiosiaq .= __("\x54\150\145\x72\x65\x20\x69\x73\40\156\x6f\164\40\172\x6f\x6e\x65\40\x69\x64\x20\x74\x6f\40\x75\163\x65", PR__PKG__OPTIMIZATION); goto mcucegiogmuyogki; wiaesksmicgikqcm: $keccaugmemegoimu = $this->get("\x2f\x7a\157\x6e\145\163\57{$cgaiqcoosmmymqqm}\57\160\141\x67\x65\x72\165\154\145\163"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto measoqewessauqma; } $iswcokucwmiosiaq .= __("\103\x61\156\40\156\x6f\164\40\146\x65\164\x63\x68\40\x70\x61\x67\145\40\162\165\x6c\x65\x73\56", PR__PKG__OPTIMIZATION); goto auaigccmwqwsqsku; measoqewessauqma: $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if ($this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { goto kieyoaoawqacqamy; } $iswcokucwmiosiaq .= __("\103\141\x6e\x20\156\157\x74\x20\146\145\x74\x63\x68\x20\160\x61\x67\x65\40\162\165\x6c\145\163\x2e", PR__PKG__OPTIMIZATION); goto qckouamqueqiykqi; kieyoaoawqacqamy: $uscgekqysqwwoags = ManipulateArray::get($sogksuscggsicmac, "\x72\x65\x73\x75\154\164"); foreach ($uscgekqysqwwoags as $ucyqiiueossykume) { $aokagokqyuysuksm = ManipulateArray::get($ucyqiiueossykume, "\x69\x64"); $ksaameoqigiaoigg[$aokagokqyuysuksm] = ManipulateArray::get($ucyqiiueossykume, "\164\x61\x72\x67\145\164"); eciksmgaqikwegwq: } okagauksoqkoqygi: qckouamqueqiykqi: auaigccmwqwsqsku: mcucegiogmuyogki: return $ksaameoqigiaoigg; } public function gcgumeecckmsagiw($ucyqiiueossykume, &$iswcokucwmiosiaq = '') : bool { $iswcokucwmiosiaq = null; $ksaameoqigiaoigg = false; if ($ucyqiiueossykume) { goto gykuaukukosiocoy; } $iswcokucwmiosiaq .= __("\124\x68\145\162\145\x20\151\163\40\x6e\x6f\x74\40\160\x61\147\x65\40\x72\165\x6c\x65\40\x74\x6f\x20\144\145\154\145\x74\x65", PR__PKG__OPTIMIZATION); goto camawumockccayaq; gykuaukukosiocoy: $cgaiqcoosmmymqqm = $this->oywimmyysigqkeqa(); if ($cgaiqcoosmmymqqm) { goto agemeseegiuuowgo; } $iswcokucwmiosiaq .= __("\x54\150\145\x72\x65\40\151\163\x20\156\x6f\164\40\x7a\x6f\x6e\x65\x20\151\x64\40\x74\x6f\x20\165\x73\x65", PR__PKG__OPTIMIZATION); goto goswwiomuackymqi; agemeseegiuuowgo: $keccaugmemegoimu = $this->delete("\57\172\157\x6e\145\x73\57{$cgaiqcoosmmymqqm}\x2f\160\x61\x67\145\162\x75\x6c\x65\163\57{$ucyqiiueossykume}"); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto gqaimiooakyykccy; } $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $ksaameoqigiaoigg = $this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq); gqaimiooakyykccy: goswwiomuackymqi: camawumockccayaq: if ($iswcokucwmiosiaq) { goto uuisaeysawuagysg; } $this->saqqeqmcyyoeqici("\x52\145\155\x6f\x76\145\x20\160\x61\x67\x65\40\x72\x75\154\145\40\x64\157\x6e\145\x2e"); goto ggqeakyaggiuegek; uuisaeysawuagysg: $this->saqqeqmcyyoeqici("\122\145\155\157\166\145\40\160\141\x67\145\40\162\165\154\x65\x20\146\141\x69\x6c\x65\x64\72\40{$iswcokucwmiosiaq}"); ggqeakyaggiuegek: return $ksaameoqigiaoigg; } private function kseoeeogcguemmuk($auwuoyyagaiegwae, &$iswcokucwmiosiaq = '') : bool { $ukgsssmgkskkuoow = array_chunk($auwuoyyagaiegwae, 30); $ksaameoqigiaoigg = false; $qiouiwasaauyaaue = $this->gkwkqmwweiawigae(); try { $eeamcawaiqocomwy = "{$this->wwawisckiqeueoua()}\57\172\157\156\x65\x73\x2f{$this->oywimmyysigqkeqa()}\57\160\x75\162\147\x65\x5f\x63\141\x63\x68\145"; foreach ($ukgsssmgkskkuoow as $wegougocoeeookww) { $this->wiwocsyueqyyakmy($eeamcawaiqocomwy, array_merge($qiouiwasaauyaaue, ["\x6a\163\x6f\156" => ["\146\151\154\x65\x73" => array_values($wegougocoeeookww)]]))->ssccayguowuawggi(function (ResponseInterface $keccaugmemegoimu) { $this->oaumimwssciwumys(sprintf("\122\x65\161\x75\x65\163\x74\40\146\157\x72\x20\x75\x72\x6c\163\x20\x63\157\x6d\x70\154\145\x74\x65\x64\56\40\x25\163", $this->saegmcouuukeykgi($keccaugmemegoimu))); }, function (ResponseInterface $keccaugmemegoimu) { $this->oaumimwssciwumys(sprintf("\x52\x65\161\165\x65\x73\x74\40\146\157\162\x20\165\x72\154\163\40\x66\x61\x69\x6c\x65\x64\56\40\x25\163", $this->saegmcouuukeykgi($keccaugmemegoimu))); })->wait(); qowcwmsiyscackaa: } usgcoawgqswoeiec: $ksaameoqigiaoigg = true; } catch (Exception $wgaoewqkwgomoaai) { $iswcokucwmiosiaq .= $this->kyacickkomkioeyu($wgaoewqkwgomoaai); } return $ksaameoqigiaoigg; } public function ekqyaacwwqekomyu(&$iswcokucwmiosiaq = '') { return $this->ckiooyswicyickam(["\163\164\x61\164\x75\163" => "\141\143\164\x69\x76\145", "\164\x61\x72\x67\x65\x74\163" => [["\x74\x61\x72\147\x65\164" => "\x75\162\154", "\x63\x6f\x6e\x73\x74\x72\x61\151\156\x74" => ["\x6f\x70\x65\x72\x61\x74\x6f\162" => "\155\x61\x74\x63\150\145\163", "\166\141\x6c\165\145" => ManipulateServer::gmigwwwmwemyaayy("\x2f\x2a")]]], "\141\x63\164\151\x6f\156\x73" => [["\x69\144" => "\x63\141\143\x68\145\137\154\x65\x76\x65\154", "\166\x61\154\165\145" => "\x63\x61\x63\150\145\x5f\x65\166\145\x72\171\164\x68\x69\156\147"]], "\160\x72\x69\x6f\162\x69\164\x79" => 1], $iswcokucwmiosiaq); } public function qsmcugseiwqqscyo(&$iswcokucwmiosiaq = '') { return $this->ckiooyswicyickam(["\x74\141\x72\147\145\x74\x73" => [["\x74\141\162\147\145\164" => "\x75\x72\154", "\x63\x6f\x6e\x73\x74\x72\x61\151\x6e\164" => ["\x6f\x70\x65\x72\141\x74\157\x72" => "\x6d\141\x74\143\150\x65\x73", "\166\141\154\165\145" => ManipulateServer::oiucukewkckkwiqc("\57\x2a")]]], "\x61\x63\x74\151\x6f\x6e\163" => [["\151\x64" => "\143\x61\x63\150\x65\137\x6c\145\166\145\154", "\x76\141\154\165\145" => "\142\x79\x70\x61\x73\163"]], "\160\162\x69\157\162\151\x74\171" => 1, "\x73\x74\x61\164\x75\163" => "\141\143\x74\x69\166\x65"], $iswcokucwmiosiaq); } public function ciaigksymukgucuk($qegcgsquckcqmkea, $qeqooyuoiasweuck = []) { $this->kmuweyayaqoeqiyw()::eiaacegkigqiwawg(Setting::aygoyiggsequgiua, $qegcgsquckcqmkea, true, $qeqooyuoiasweuck); } public function ukuooogwaoiwagqs($eeamcawaiqocomwy = false) { $ksaameoqigiaoigg = false; if ($eeamcawaiqocomwy) { goto aqigiwmamkowomiw; } $eeamcawaiqocomwy = ManipulateServer::gmigwwwmwemyaayy(); aqigiwmamkowomiw: $this->wsyymykqcoucagma(self::gqkuwmsyysusmquw)->ueakuaywsqiooygo(60)->kiaqywwoysssqgig("\125\163\145\162\x2d\x41\x67\145\156\164", self::keasgekkgaeuueau); $askcwwaauwqisyeq = "\x5f\x5f\143\146\x64\165\151\144"; $keccaugmemegoimu = $this->get($eeamcawaiqocomwy, ["\166\145\x72\151\146\x79" => false]); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto waewaiuiogywqigu; } $this->saqqeqmcyyoeqici($iswcokucwmiosiaq); goto yyamycyesguwueuw; waewaiuiogywqigu: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg instanceof CookieJar) { goto ggwcauaeuagekeyo; } $this->saqqeqmcyyoeqici("\x4e\157\x20\x63\157\x6f\153\151\145\x73\40\x66\157\165\x6e\x64\40\151\156\40\162\x65\x73\160\157\156\163\x65\x20\x48\x54\124\120\x20\160\141\x63\x6b\x65\164"); goto mmkoqmccusoeaoyi; ggwcauaeuagekeyo: $ceiyomgiaywmmogi = $osqkgokmuiasuukg->toArray(); foreach ($ceiyomgiaywmmogi as $aecgggeoymywyumm) { if (!(ManipulateArray::get($aecgggeoymywyumm, "\116\x61\155\145") === $askcwwaauwqisyeq)) { goto ggqwcqssoauckuic; } $ksaameoqigiaoigg = $aecgggeoymywyumm; goto qesqgumuouyymcwa; ggqwcqssoauckuic: csyoimsqgwcmiwki: } qesqgumuouyymcwa: mmkoqmccusoeaoyi: yyamycyesguwueuw: if ($ksaameoqigiaoigg) { goto aymmymequcisekie; } $this->saqqeqmcyyoeqici(sprintf("\103\x6f\157\x6b\x69\x65\x20\45\x73\x20\156\x6f\164\40\146\x6f\x75\x6e\144", $askcwwaauwqisyeq)); aymmymequcisekie: return $ksaameoqigiaoigg; } public function wckaccsiewgegccc($auwuoyyagaiegwae, &$iswcokucwmiosiaq = '', $eaouccqceiqewoai = false) : bool { $ksaameoqigiaoigg = false; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x63\x6c\157\165\144\x66\x6c\x61\x72\145\x5f\x70\165\x72\x67\x65\137\x63\141\143\x68\145\x5f\x62\x79\137\x75\162\154\163\x5f\142\x65\x66\157\x72\145")); if (count($auwuoyyagaiegwae) > 30 || $eaouccqceiqewoai) { goto kyggwyywiycksgqq; } $keccaugmemegoimu = $this->sqmuqsscmimwqoki("\57\x7a\x6f\156\x65\163\57{$this->oywimmyysigqkeqa()}\x2f\x70\165\162\147\145\137\143\141\x63\150\145", ["\152\x73\x6f\x6e" => ["\x66\151\154\x65\163" => array_values($auwuoyyagaiegwae)]]); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto gyeayeuuyiemuwuq; } $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $ksaameoqigiaoigg = $this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq); gyeayeuuyiemuwuq: goto sugumgeqcwgekcqs; kyggwyywiycksgqq: $ksaameoqigiaoigg = $this->kseoeeogcguemmuk($auwuoyyagaiegwae, $iswcokucwmiosiaq); sugumgeqcwgekcqs: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\x63\x6c\x6f\x75\144\146\154\x61\162\145\137\160\x75\162\147\x65\x5f\143\141\143\150\x65\137\x62\x79\137\165\162\154\163\137\x61\146\164\x65\162")); return $ksaameoqigiaoigg; } private function eiwcuqigayigimak(string $uusmaiomayssaecw, &$iswcokucwmiosiaq = '') { $ksaameoqigiaoigg = false; $keccaugmemegoimu = $this->get("\x2f\172\x6f\x6e\x65\x73\57{$this->oywimmyysigqkeqa()}\57\x73\x65\x74\164\x69\x6e\x67\x73\x2f{$uusmaiomayssaecw}"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto gaceikykesgywssm; } $iswcokucwmiosiaq .= sprintf(__("\125\x6e\141\x62\x6c\145\40\164\x6f\40\x67\145\164\40\x25\x73\40\x73\145\164\x74\151\156\x67\x73\x3a\40\x25\163", PR__PKG__OPTIMIZATION), $uusmaiomayssaecw, $iswcokucwmiosiaq); goto weggeeowykuqooyg; gaceikykesgywssm: $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if ($this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { goto imeaiksowuukikui; } $iswcokucwmiosiaq .= sprintf(__("\x55\x6e\x61\142\154\x65\x20\x74\157\40\146\151\x6e\144\40\45\x73\x20\x73\145\x74\x74\151\x6e\147\x73", PR__PKG__OPTIMIZATION), $uusmaiomayssaecw); goto aqmiewawgseaqeqk; imeaiksowuukikui: $sogksuscggsicmac = ManipulateArray::get($sogksuscggsicmac, "\162\x65\163\165\154\x74"); $ksaameoqigiaoigg = ManipulateArray::get($sogksuscggsicmac, "\166\141\x6c\x75\145", false); aqmiewawgseaqeqk: weggeeowykuqooyg: return $ksaameoqigiaoigg; } private function sgscoawywmyukcqm(string $uusmaiomayssaecw, $eqgoocgaqwqcimie, &$iswcokucwmiosiaq = '') : bool { $ksaameoqigiaoigg = false; $keccaugmemegoimu = $this->kqcyawyscakoskke("{$this->wwawisckiqeueoua()}\x2f\x7a\x6f\x6e\x65\163\x2f{$this->oywimmyysigqkeqa()}\x2f\x73\145\164\x74\151\156\x67\x73\57{$uusmaiomayssaecw}", ["\152\163\x6f\156" => ["\x76\x61\154\165\145" => $eqgoocgaqwqcimie]]); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto cqkuuyouqoqyguus; } $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $ksaameoqigiaoigg = $this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq); cqkuuyouqoqyguus: return $ksaameoqigiaoigg; } public function ymkgoumkoycwwmmq(&$iswcokucwmiosiaq = '') { return $this->eiwcuqigayigimak("\144\145\166\x65\x6c\157\160\x6d\x65\156\164\x5f\x6d\157\x64\x65", $iswcokucwmiosiaq); } public function emukusgiakigsoms($wmekckkyoiyickmk, &$iswcokucwmiosiaq = '') : bool { if (is_bool($wmekckkyoiyickmk)) { goto wiqigqgiegmacgsw; } if (in_array($wmekckkyoiyickmk, ["\157\146\x66", "\x6f\156"])) { goto ssmgmiuqoeiuacsa; } $wmekckkyoiyickmk = "\x6f\x66\146"; ssmgmiuqoeiuacsa: goto gwoacimkeyymqccq; wiqigqgiegmacgsw: $wmekckkyoiyickmk = $wmekckkyoiyickmk ? "\157\x6e" : "\157\x66\x66"; gwoacimkeyymqccq: return $this->sgscoawywmyukcqm("\144\x65\x76\x65\x6c\x6f\x70\x6d\x65\x6e\x74\137\155\x6f\144\x65", $wmekckkyoiyickmk, $iswcokucwmiosiaq); } public function emqkioueyiqeiokk(&$iswcokucwmiosiaq = '') { return $this->eiwcuqigayigimak("\x62\162\157\x77\x73\x65\162\x5f\x63\x61\143\x68\145\137\164\x74\x6c", $iswcokucwmiosiaq); } public function mwiqewoumqkqqaos($gaycumwikykomiso, &$iswcokucwmiosiaq = '') : bool { return $this->sgscoawywmyukcqm("\142\x72\157\x77\x73\145\162\x5f\143\x61\143\x68\145\x5f\x74\x74\154", $gaycumwikykomiso, $iswcokucwmiosiaq); } }
