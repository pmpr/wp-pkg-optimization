<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c066895a7f9             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Cloudflare; use Pmpr\Common\Foundation\API\API as BaseClass; use Exception; use GuzzleHttp\Cookie\CookieJar; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Optimization\Notice; use Psr\Http\Message\ResponseInterface; class API extends BaseClass { const X_AUTH_KEY = "\x58\55\101\165\x74\150\55\x4b\x65\171"; const X_AUTH_EMAIL = "\x58\x2d\x41\x75\164\x68\x2d\105\155\x61\151\154"; protected ?string $email = ''; protected ?string $zoneId = ''; protected ?string $apiKey = ''; protected ?string $cfDomain = ''; protected ?string $apiToken = ''; protected ?string $authMode = ''; protected array $accountIds = []; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu()->kmuweyayaqoeqiyw(); $this->domain = "\x68\164\x74\x70\163\72\57\x2f\141\160\x69\56\143\x6c\x6f\x75\x64\x66\x6c\141\x72\145\x2e\x63\x6f\155\57\143\x6c\x69\x65\x6e\164\57\166\64"; $this->email = $this->weysguygiseoukqw(Setting::CF_EMAIL, ''); $this->apiKey = $this->weysguygiseoukqw(Setting::CF_APIKEY, ''); $this->zoneId = $this->weysguygiseoukqw(Setting::CF_ZONEID); $this->authMode = $this->weysguygiseoukqw(Setting::CF_AUTH_MODE, Setting::AUTH_MODE_API_KEY); $this->cfDomain = $this->weysguygiseoukqw(Setting::CF_APITOKEN_DOMAIN, ''); $this->apiToken = $this->weysguygiseoukqw(Setting::CF_APITOKEN, ''); parent::__construct(); $uykgysuswksgmwqy = [self::CONTENT_TYPE_KEY => self::APPLICATION_JSON_KEY]; if ($this->caeygcowcuqeqkeo() === Setting::AUTH_MODE_API_TOKEN) { goto jkgouewqysmscmqs; } $uykgysuswksgmwqy[self::X_AUTH_KEY] = $this->aocqkkgewgggwwys(); $uykgysuswksgmwqy[self::X_AUTH_EMAIL] = $this->cseqaqmuaswgwuoo(); goto sgiuwkisugmewmcs; jkgouewqysmscmqs: $uykgysuswksgmwqy[self::ommcokiqmmweikkw] = "\x42\145\x61\162\145\x72\40{$this->gkuoyaqwcaqcqmck()}"; sgiuwkisugmewmcs: $this->ueakuaywsqiooygo(20)->ckmkymaiykwyokym($uykgysuswksgmwqy); } public function kmegomwosoueimki() : array { return $this->accountIds; } public function cseqaqmuaswgwuoo() : ?string { return $this->email; } public function oywimmyysigqkeqa() : ?string { return $this->zoneId; } public function sawoqaskqkasksge() : ?string { return $this->cfDomain; } public function aocqkkgewgggwwys() : ?string { return $this->apiKey; } public function gkuoyaqwcaqcqmck() : ?string { return $this->apiToken; } public function caeygcowcuqeqkeo() : ?string { return $this->authMode; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\155\x69\156\137\151\156\151\x74", [$this, "\171\145\171\x69\147\x75\171\x65\x67\x6d\155\x79\165\163\x65\141"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if (!$this->kmuweyayaqoeqiyw()->eaiyegoagkgeowae()) { goto cwugokqsmiomgmqg; } $eumukgqciqgksuiq = false; if (!$this->caeygcowcuqeqkeo() || !$this->cseqaqmuaswgwuoo()) { goto yimeskeioamqmuwg; } if ($this->caeygcowcuqeqkeo() == Setting::AUTH_MODE_API_TOKEN) { goto iquecygaakmiomeg; } if (!($this->caeygcowcuqeqkeo() == Setting::AUTH_MODE_API_KEY)) { goto kceeuicccqscwgsu; } $eumukgqciqgksuiq = !$this->aocqkkgewgggwwys() || !$this->oywimmyysigqkeqa(); kceeuicccqscwgsu: goto eacysqsegwcqawsa; iquecygaakmiomeg: $eumukgqciqgksuiq = !$this->gkuoyaqwcaqcqmck() || !$this->sawoqaskqkasksge(); eacysqsegwcqawsa: goto yeemsgmumygmumqw; yimeskeioamqmuwg: $eumukgqciqgksuiq = true; yeemsgmumygmumqw: if (!$eumukgqciqgksuiq) { goto wkaoyycsoeoyqcae; } Notice::eumukgqciqgksuiq(__("\120\x6c\x65\141\x73\145\x20\x63\157\155\160\x6c\x65\x74\145\x20\x63\x6c\157\165\144\146\154\141\162\145\x20\164\141\x62\40\x69\156\x66\x6f\162\155\x61\164\x69\157\156", PR__PKG__OPTIMIZATION), "\x6f\x70\164\55\x63\x66\55\156\157\164\x2d\x76\x61\154\x69\144\x2d\143\157\x6e\146\151\147"); wkaoyycsoeoyqcae: cwugokqsmiomgmqg: } public function sqmcyegkigweiwks(&$iswcokucwmiosiaq = '') : bool { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\x5f\143\x6c\157\x75\x64\x66\x6c\x61\162\145\137\x70\165\x72\147\x65\x5f\167\x68\157\154\x65\137\143\x61\143\150\145\137\x62\x65\x66\x6f\162\x65")); $ksaameoqigiaoigg = false; $keccaugmemegoimu = $this->sqmuqsscmimwqoki("\57\172\157\x6e\145\163\57{$this->oywimmyysigqkeqa()}\57\x70\165\162\x67\x65\x5f\143\141\x63\150\145", ["\x6a\163\157\x6e" => ["\x70\x75\162\x67\145\x5f\145\166\145\x72\171\x74\x68\151\156\x67" => true]]); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto ekoegocuqoycoeyq; } $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if (!$this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { goto uuuceqkseqkqawko; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\x63\154\x6f\165\x64\146\x6c\141\162\145\x5f\160\165\x72\147\x65\137\x77\150\x6f\x6c\x65\x5f\143\x61\143\x68\145\137\141\x66\164\145\x72")); uuuceqkseqkqawko: ekoegocuqoycoeyq: return $ksaameoqigiaoigg; } public function yayksoygskcuaygq(&$iswcokucwmiosiaq = '') : array { $suuagcecoyuweoqk = []; $iswcokucwmiosiaq = null; $yeacayasgueouoqc = 1; $weyoqgcesqgeusiu = 50; $ymiyawysimukkoso = false; akeoaicoieaiekcw: $qiouiwasaauyaaue = $this->gkwkqmwweiawigae(); $cokqekgqeigaoqsy = $this->sawoqaskqkasksge(); $wegekcwgakqeqsmq = $this->caeygcowcuqeqkeo(); $mkomwsiykqigmqca = "\57\x7a\x6f\x6e\x65\163"; if ($cokqekgqeigaoqsy && $wegekcwgakqeqsmq === Setting::AUTH_MODE_API_TOKEN) { goto kskqquqsegiiogek; } $mkomwsiykqigmqca = DecoratorQuery::yqymaqmqiqmmmsoo(["\x70\141\147\x65" => $yeacayasgueouoqc, "\160\145\x72\x5f\160\x61\147\145" => $weyoqgcesqgeusiu], $mkomwsiykqigmqca); goto mocaoayiouggauiy; kskqquqsegiiogek: $mkomwsiykqigmqca = DecoratorQuery::yqymaqmqiqmmmsoo("\156\x61\x6d\145", $cokqekgqeigaoqsy, $mkomwsiykqigmqca); mocaoayiouggauiy: $keccaugmemegoimu = $this->get($mkomwsiykqigmqca, $qiouiwasaauyaaue); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto kucqcgeesiccuuia; } $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if (!$this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { goto gkkwmqoacciwomqs; } $yyimiwcuegayoskq = ManipulateArray::get($sogksuscggsicmac, "\x72\145\x73\x75\154\164\137\151\156\x66\157", []); if ($yyimiwcuegayoskq && is_array($yyimiwcuegayoskq)) { goto becceuuwokgoaewy; } if (!$ymiyawysimukkoso) { goto qgkiguggkyiycwow; } $ymiyawysimukkoso = false; qgkiguggkyiycwow: goto wyugqoowakyicyic; becceuuwokgoaewy: $saawqymgwcseukqa = ManipulateArray::get($yyimiwcuegayoskq, "\164\157\164\141\154\x5f\x70\141\x67\145\x73"); if ($saawqymgwcseukqa && (int) $saawqymgwcseukqa > $yeacayasgueouoqc) { goto ygskksomysgaokek; } $ymiyawysimukkoso = false; goto wwcwmkowgooocaem; ygskksomysgaokek: $ymiyawysimukkoso = true; $yeacayasgueouoqc++; wwcwmkowgooocaem: wyugqoowakyicyic: $sogksuscggsicmac = ManipulateArray::get($sogksuscggsicmac, "\x72\x65\163\165\x6c\164", []); if (!($sogksuscggsicmac && is_array($sogksuscggsicmac))) { goto ggyoywwggggekycs; } foreach ($sogksuscggsicmac as $icwicymcioeyeyek) { $aokagokqyuysuksm = ManipulateArray::get($icwicymcioeyeyek, "\151\144"); $ymqmyyeuycgmigyo = ManipulateArray::get($icwicymcioeyeyek, "\156\x61\155\x65"); if ($aokagokqyuysuksm && $ymqmyyeuycgmigyo) { goto iuysqgmmgqiywssm; } $iswcokucwmiosiaq .= __("\x55\156\141\142\154\145\40\164\157\x20\x72\x65\164\162\x69\166\145\x20\172\x6f\156\145\x20\151\144\x20\144\x75\x65\x20\x74\x6f\x20\x69\156\x76\x61\154\151\144\x20\162\x65\163\x70\x6f\x6e\x73\145\40\144\141\164\x61", PR__PKG__OPTIMIZATION); goto aeaciamekuqyieys; goto weouocwmwicayyiy; iuysqgmmgqiywssm: $suuagcecoyuweoqk[$aokagokqyuysuksm] = $ymqmyyeuycgmigyo; weouocwmwicayyiy: ugiqiewymimqecsu: } aeaciamekuqyieys: ggyoywwggggekycs: gkkwmqoacciwomqs: kucqcgeesiccuuia: if ($ymiyawysimukkoso) { goto akeoaicoieaiekcw; } yksamaucqkqsawkk: if (!(!$iswcokucwmiosiaq && !$suuagcecoyuweoqk)) { goto oycuaqewsskgkqci; } $iswcokucwmiosiaq .= __("\125\x6e\141\142\x6c\145\x20\x74\157\x20\x66\x69\x6e\144\40\144\157\x6d\x61\x69\x6e\163\40\143\157\156\x66\151\x67\x75\x72\x65\x64\x20\x6f\x6e\x20\x43\154\x6f\x75\x64\146\154\x61\x72\145", PR__PKG__OPTIMIZATION); oycuaqewsskgkqci: return $suuagcecoyuweoqk; } public function eigwgcuaamoqkuyw(&$iswcokucwmiosiaq = '', $qegcgsquckcqmkea = false) : bool { $qeqooyuoiasweuck = $this->aoqykkmokwseeeie(); $moeacmgsosgskgii = $this->emqkioueyiqeiokk($iswcokucwmiosiaq); if (!($moeacmgsosgskgii !== false)) { goto ocmagamuyawyiyka; } $qeqooyuoiasweuck[Setting::CF_OLD_BC_TTL] = $moeacmgsosgskgii; ocmagamuyawyiyka: if (!($moeacmgsosgskgii === 0 || $this->mwiqewoumqkqqaos(0, $iswcokucwmiosiaq))) { goto mmmqqoemusicwgqg; } $ekmacukqumaiaquo = [Setting::CF_PAGE_RULE_ID => false, Setting::CF_BYPASS_BACKEND_PAGE_RULE_ID => false]; $sowkswowciayawwu = $this->weysguygiseoukqw(Setting::CF_PAGE_RULE_ID, ''); if (!($sowkswowciayawwu && $this->gcgumeecckmsagiw($sowkswowciayawwu, $iswcokucwmiosiaq))) { goto amqgiisymksuuuss; } $ekmacukqumaiaquo[Setting::CF_PAGE_RULE_ID] = true; amqgiisymksuuuss: $iowmousgcuymioua = $this->weysguygiseoukqw(Setting::CF_BYPASS_BACKEND_PAGE_RULE_ID, ''); if (!($iowmousgcuymioua && $this->gcgumeecckmsagiw($iowmousgcuymioua, $iswcokucwmiosiaq))) { goto iwgmywqocewwgoeo; } $ekmacukqumaiaquo[Setting::CF_BYPASS_BACKEND_PAGE_RULE_ID] = true; iwgmywqocewwgoeo: if (!in_array(false, $ekmacukqumaiaquo, true)) { goto gwkawguwsamuomuo; } $uscgekqysqwwoags = $this->gwuucyqmouukogyq($iswcokucwmiosiaq); foreach ($uscgekqysqwwoags as $aokagokqyuysuksm => $ccamueccusigaaio) { $this->gcgumeecckmsagiw($aokagokqyuysuksm, $iswcokucwmiosiaq); sgiouaqukyycswqm: } syoeqaqkseguwmgy: gwkawguwsamuomuo: $qeqooyuoiasweuck[Setting::CF_PAGE_RULE_ID] = ''; $qeqooyuoiasweuck[Setting::CF_BYPASS_BACKEND_PAGE_RULE_ID] = ''; $iowmousgcuymioua = $this->mikgocywwwusmsas($qeqooyuoiasweuck, $iswcokucwmiosiaq); if ($kwksaeiouyowccwk = $this->ekqyaacwwqekomyu($iswcokucwmiosiaq)) { goto uugwmywmaqomeksa; } if (!$iowmousgcuymioua) { goto ucasigqmoiwaimkk; } $this->gcgumeecckmsagiw($iowmousgcuymioua, $iswcokucwmiosiaq); ucasigqmoiwaimkk: goto wowmysuygugawmmu; uugwmywmaqomeksa: $qeqooyuoiasweuck[Setting::CF_PAGE_RULE_ID] = $kwksaeiouyowccwk; $qegcgsquckcqmkea = true; $this->sqmcyegkigweiwks($iswcokucwmiosiaq); wowmysuygugawmmu: mmmqqoemusicwgqg: $this->ciaigksymukgucuk($qegcgsquckcqmkea, $qeqooyuoiasweuck); return $qegcgsquckcqmkea; } public function mikgocywwwusmsas(&$qeqooyuoiasweuck, &$iswcokucwmiosiaq = '') { $qeqooyuoiasweuck = $this->aoqykkmokwseeeie(); $iowmousgcuymioua = $this->weysguygiseoukqw(Setting::CF_BYPASS_BACKEND_PAGE_RULE_ID, ''); if (!($iowmousgcuymioua && $this->gcgumeecckmsagiw($iowmousgcuymioua, $iswcokucwmiosiaq))) { goto iquugwoswgkoiieg; } $qeqooyuoiasweuck[Setting::CF_BYPASS_BACKEND_PAGE_RULE_ID] = ''; iquugwoswgkoiieg: if (!($iowmousgcuymioua = $this->qsmcugseiwqqscyo($iswcokucwmiosiaq))) { goto xogaycsaesgqeqig; } $qeqooyuoiasweuck[Setting::CF_BYPASS_BACKEND_PAGE_RULE_ID] = $iowmousgcuymioua; xogaycsaesgqeqig: return $iowmousgcuymioua; } public function cwwaoacweogeycuc(&$iswcokucwmiosiaq = '') : bool { $ksaameoqigiaoigg = false; $qeqooyuoiasweuck = $this->aoqykkmokwseeeie(); if (!($oyymgsciaiequeww = $this->weysguygiseoukqw(Setting::CF_OLD_BC_TTL))) { goto gsiaskgsukseumig; } $this->mwiqewoumqkqqaos($oyymgsciaiequeww, $iswcokucwmiosiaq); gsiaskgsukseumig: $sowkswowciayawwu = $this->weysguygiseoukqw(Setting::CF_PAGE_RULE_ID, ''); if (!($sowkswowciayawwu != '' && $this->gcgumeecckmsagiw($sowkswowciayawwu, $iswcokucwmiosiaq))) { goto woqkgwmkmqsuceuy; } $qeqooyuoiasweuck[Setting::CF_PAGE_RULE_ID] = ''; $iowmousgcuymioua = $this->weysguygiseoukqw(Setting::CF_BYPASS_BACKEND_PAGE_RULE_ID); if (!($iowmousgcuymioua !== '' && $this->gcgumeecckmsagiw($iowmousgcuymioua, $iswcokucwmiosiaq))) { goto syiyemqigyugagks; } $qeqooyuoiasweuck[Setting::CF_BYPASS_BACKEND_PAGE_RULE_ID] = ''; $this->sqmcyegkigweiwks($iswcokucwmiosiaq); $this->ciaigksymukgucuk(0, $qeqooyuoiasweuck); $ksaameoqigiaoigg = true; syiyemqigyugagks: woqkgwmkmqsuceuy: return $ksaameoqigiaoigg; } public function ckiooyswicyickam(array $kuukgsmqkagwaciu, &$iswcokucwmiosiaq = '') { $ksaameoqigiaoigg = false; $keccaugmemegoimu = $this->sqmuqsscmimwqoki("\x2f\172\157\156\145\x73\x2f{$this->oywimmyysigqkeqa()}\x2f\x70\141\x67\x65\x72\x75\x6c\x65\163", ["\x6a\163\157\x6e" => $kuukgsmqkagwaciu]); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto umemmgiwimkymaya; } $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if (!$this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { goto imwiyqcekcykscui; } $sogksuscggsicmac = ManipulateArray::get($sogksuscggsicmac, "\162\x65\163\165\154\x74"); $ksaameoqigiaoigg = ManipulateArray::get($sogksuscggsicmac, "\x69\144", false); imwiyqcekcykscui: umemmgiwimkymaya: if ($iswcokucwmiosiaq) { goto omsmaougqkqigogw; } $this->saqqeqmcyyoeqici("\101\144\144\x20\x70\x61\147\145\x20\162\x75\154\x65\40\x64\x6f\156\145\x2e"); goto geasgywiogoeamek; omsmaougqkqigogw: $this->saqqeqmcyyoeqici("\101\144\144\x20\160\141\147\145\40\162\165\x6c\145\40\x66\141\151\154\145\144\72\40{$iswcokucwmiosiaq}"); geasgywiogoeamek: return $ksaameoqigiaoigg; } public function gwuucyqmouukogyq(&$iswcokucwmiosiaq = '') : array { $iswcokucwmiosiaq = null; $ksaameoqigiaoigg = []; $cgaiqcoosmmymqqm = $this->oywimmyysigqkeqa(); if ($cgaiqcoosmmymqqm) { goto iaoyeugekskmewgs; } $iswcokucwmiosiaq .= __("\124\x68\145\x72\x65\x20\x69\x73\x20\156\x6f\x74\40\x7a\x6f\x6e\145\40\151\144\x20\x74\x6f\40\x75\x73\x65", PR__PKG__OPTIMIZATION); goto iokemmkgmcaksiqu; iaoyeugekskmewgs: $keccaugmemegoimu = $this->get("\57\x7a\x6f\x6e\145\x73\x2f{$cgaiqcoosmmymqqm}\57\x70\x61\147\145\x72\x75\x6c\x65\163"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto iuyagqakcieasiua; } $iswcokucwmiosiaq .= __("\x43\x61\156\x20\x6e\x6f\x74\40\x66\x65\x74\x63\150\x20\x70\x61\x67\145\40\162\x75\x6c\x65\163\x2e", PR__PKG__OPTIMIZATION); goto oasisywuwssumsok; iuyagqakcieasiua: $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if ($this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { goto mccimkgwkkamsime; } $iswcokucwmiosiaq .= __("\x43\141\156\x20\x6e\157\164\x20\x66\x65\x74\143\x68\40\x70\x61\147\x65\40\x72\165\154\x65\163\x2e", PR__PKG__OPTIMIZATION); goto ucaoyoamaycsiacq; mccimkgwkkamsime: $uscgekqysqwwoags = ManipulateArray::get($sogksuscggsicmac, "\162\x65\x73\x75\x6c\x74"); foreach ($uscgekqysqwwoags as $ucyqiiueossykume) { $aokagokqyuysuksm = ManipulateArray::get($ucyqiiueossykume, "\x69\x64"); $ksaameoqigiaoigg[$aokagokqyuysuksm] = ManipulateArray::get($ucyqiiueossykume, "\164\141\162\147\x65\x74"); guqmgiqaaowaauyo: } qweyymyuuqwcmkqg: ucaoyoamaycsiacq: oasisywuwssumsok: iokemmkgmcaksiqu: return $ksaameoqigiaoigg; } public function gcgumeecckmsagiw($ucyqiiueossykume, &$iswcokucwmiosiaq = '') : bool { $iswcokucwmiosiaq = null; $ksaameoqigiaoigg = false; if ($ucyqiiueossykume) { goto qckouamqueqiykqi; } $iswcokucwmiosiaq .= __("\124\x68\x65\162\x65\40\151\x73\x20\156\157\x74\x20\160\x61\x67\x65\40\162\x75\154\145\x20\x74\x6f\x20\144\145\x6c\x65\x74\x65", PR__PKG__OPTIMIZATION); goto measoqewessauqma; qckouamqueqiykqi: $cgaiqcoosmmymqqm = $this->oywimmyysigqkeqa(); if ($cgaiqcoosmmymqqm) { goto eciksmgaqikwegwq; } $iswcokucwmiosiaq .= __("\x54\x68\145\162\x65\x20\x69\x73\x20\156\x6f\164\40\x7a\x6f\x6e\145\40\151\x64\x20\x74\157\x20\165\x73\145", PR__PKG__OPTIMIZATION); goto kieyoaoawqacqamy; eciksmgaqikwegwq: $keccaugmemegoimu = $this->delete("\57\172\157\156\145\x73\x2f{$cgaiqcoosmmymqqm}\x2f\160\x61\x67\145\x72\165\154\x65\163\57{$ucyqiiueossykume}"); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto okagauksoqkoqygi; } $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $ksaameoqigiaoigg = $this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq); okagauksoqkoqygi: kieyoaoawqacqamy: measoqewessauqma: if ($iswcokucwmiosiaq) { goto auaigccmwqwsqsku; } $this->saqqeqmcyyoeqici("\122\145\155\157\166\x65\40\160\141\147\x65\40\x72\165\154\x65\x20\144\157\x6e\x65\x2e"); goto wiaesksmicgikqcm; auaigccmwqwsqsku: $this->saqqeqmcyyoeqici("\122\x65\x6d\157\x76\145\x20\x70\141\147\145\x20\162\x75\x6c\145\40\x66\141\151\154\x65\x64\72\40{$iswcokucwmiosiaq}"); wiaesksmicgikqcm: return $ksaameoqigiaoigg; } private function kseoeeogcguemmuk($auwuoyyagaiegwae, &$iswcokucwmiosiaq = '') : bool { $ukgsssmgkskkuoow = array_chunk($auwuoyyagaiegwae, 30); $ksaameoqigiaoigg = false; $qiouiwasaauyaaue = $this->gkwkqmwweiawigae(); try { $eeamcawaiqocomwy = "{$this->wwawisckiqeueoua()}\x2f\172\157\x6e\145\x73\57{$this->oywimmyysigqkeqa()}\x2f\160\x75\162\147\145\x5f\x63\141\x63\150\145"; foreach ($ukgsssmgkskkuoow as $wegougocoeeookww) { $this->wiwocsyueqyyakmy($eeamcawaiqocomwy, array_merge($qiouiwasaauyaaue, ["\152\163\x6f\x6e" => ["\x66\151\x6c\x65\x73" => array_values($wegougocoeeookww)]]))->ssccayguowuawggi(function (ResponseInterface $keccaugmemegoimu) { $this->oaumimwssciwumys(sprintf("\122\145\x71\x75\145\163\x74\x20\x66\157\x72\x20\x75\162\154\163\40\143\157\155\160\x6c\145\x74\145\x64\x2e\40\45\163", $this->saegmcouuukeykgi($keccaugmemegoimu))); }, function (ResponseInterface $keccaugmemegoimu) { $this->oaumimwssciwumys(sprintf("\122\145\x71\x75\145\x73\164\x20\146\157\162\40\165\x72\154\x73\40\x66\x61\x69\x6c\x65\144\x2e\x20\45\x73", $this->saegmcouuukeykgi($keccaugmemegoimu))); })->wait(); gqaimiooakyykccy: } mcucegiogmuyogki: $ksaameoqigiaoigg = true; } catch (Exception $wgaoewqkwgomoaai) { $iswcokucwmiosiaq .= $this->kyacickkomkioeyu($wgaoewqkwgomoaai); } return $ksaameoqigiaoigg; } public function ekqyaacwwqekomyu(&$iswcokucwmiosiaq = '') { return $this->ckiooyswicyickam(["\163\164\x61\164\x75\163" => "\141\x63\x74\151\166\145", "\x74\141\162\x67\145\x74\x73" => [["\164\141\x72\x67\145\164" => "\165\162\x6c", "\x63\x6f\156\x73\164\x72\x61\x69\x6e\x74" => ["\x6f\x70\x65\162\141\164\x6f\x72" => "\155\x61\x74\143\150\x65\163", "\x76\141\154\x75\x65" => ManipulateServer::gmigwwwmwemyaayy("\57\52")]]], "\141\143\164\x69\x6f\x6e\163" => [["\x69\x64" => "\143\141\143\x68\x65\137\x6c\x65\x76\x65\x6c", "\x76\x61\154\165\x65" => "\x63\x61\143\x68\145\137\x65\166\x65\x72\x79\x74\x68\151\156\x67"]], "\160\x72\151\x6f\162\x69\164\x79" => 1], $iswcokucwmiosiaq); } public function qsmcugseiwqqscyo(&$iswcokucwmiosiaq = '') { return $this->ckiooyswicyickam(["\x74\141\x72\147\145\164\x73" => [["\x74\141\x72\x67\145\x74" => "\x75\x72\x6c", "\x63\157\156\163\164\x72\141\151\x6e\x74" => ["\157\x70\x65\x72\141\x74\x6f\x72" => "\155\x61\x74\x63\150\x65\x73", "\x76\141\x6c\x75\145" => ManipulateServer::oiucukewkckkwiqc("\57\52")]]], "\x61\x63\164\x69\x6f\156\163" => [["\x69\144" => "\x63\141\x63\x68\145\137\x6c\145\166\145\154", "\166\141\154\x75\x65" => "\142\x79\x70\x61\163\163"]], "\x70\x72\151\157\162\151\164\x79" => 1, "\x73\164\141\164\165\163" => "\141\x63\164\151\x76\x65"], $iswcokucwmiosiaq); } public function ciaigksymukgucuk($qegcgsquckcqmkea, $qeqooyuoiasweuck = []) { $this->kmuweyayaqoeqiyw()::eiaacegkigqiwawg(Setting::CF_CACHE_ENABLED, $qegcgsquckcqmkea, true, $qeqooyuoiasweuck); } public function ukuooogwaoiwagqs($eeamcawaiqocomwy = false) { $ksaameoqigiaoigg = false; $qiouiwasaauyaaue = ["\x76\x65\x72\151\146\171" => false, "\x74\x69\x6d\x65\x6f\x75\x74" => false, "\x68\x65\141\144\x65\162\163" => ["\101\143\x63\145\160\164" => [self::HTML_ACCEPT], "\x55\163\x65\x72\55\101\x67\x65\156\x74" => [self::BROWSER_USER_AGENT]]]; if ($eeamcawaiqocomwy) { goto agemeseegiuuowgo; } $eeamcawaiqocomwy = ManipulateServer::gmigwwwmwemyaayy(); agemeseegiuuowgo: $askcwwaauwqisyeq = "\x5f\x5f\143\146\144\x75\151\x64"; $keccaugmemegoimu = $this->get($eeamcawaiqocomwy, $qiouiwasaauyaaue); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto usgcoawgqswoeiec; } $this->saqqeqmcyyoeqici($iswcokucwmiosiaq); goto qowcwmsiyscackaa; usgcoawgqswoeiec: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg instanceof CookieJar) { goto uuisaeysawuagysg; } $this->saqqeqmcyyoeqici("\116\x6f\40\x63\x6f\157\x6b\x69\x65\163\x20\x66\x6f\x75\156\144\x20\x69\x6e\x20\x72\x65\163\x70\x6f\x6e\163\x65\40\110\124\x54\120\x20\x70\141\x63\153\145\x74"); goto ggqeakyaggiuegek; uuisaeysawuagysg: foreach ($osqkgokmuiasuukg->sacmkccceuywoqsq() as $aecgggeoymywyumm) { if (!(ManipulateArray::get($aecgggeoymywyumm, "\116\x61\x6d\145") === $askcwwaauwqisyeq)) { goto camawumockccayaq; } $ksaameoqigiaoigg = $aecgggeoymywyumm; goto goswwiomuackymqi; camawumockccayaq: gykuaukukosiocoy: } goswwiomuackymqi: ggqeakyaggiuegek: qowcwmsiyscackaa: if ($ksaameoqigiaoigg) { goto aqigiwmamkowomiw; } $this->saqqeqmcyyoeqici(sprintf("\103\x6f\x6f\x6b\151\145\x20\x25\163\x20\156\157\x74\x20\x66\157\x75\x6e\144", $askcwwaauwqisyeq)); aqigiwmamkowomiw: return $ksaameoqigiaoigg; } public function wckaccsiewgegccc($auwuoyyagaiegwae, &$iswcokucwmiosiaq = '', $eaouccqceiqewoai = false) : bool { $ksaameoqigiaoigg = false; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\164\x5f\143\x6c\x6f\165\x64\x66\x6c\141\162\145\137\x70\x75\162\x67\x65\x5f\143\141\143\150\x65\137\142\171\x5f\x75\x72\154\163\x5f\x62\145\146\157\x72\x65")); if (count($auwuoyyagaiegwae) > 30 || $eaouccqceiqewoai) { goto csyoimsqgwcmiwki; } $keccaugmemegoimu = $this->sqmuqsscmimwqoki("\x2f\x7a\157\x6e\x65\x73\57{$this->oywimmyysigqkeqa()}\x2f\x70\x75\162\147\x65\x5f\143\141\x63\x68\145", ["\152\163\x6f\156" => ["\x66\151\x6c\x65\x73" => array_values($auwuoyyagaiegwae)]]); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto qesqgumuouyymcwa; } $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $ksaameoqigiaoigg = $this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq); qesqgumuouyymcwa: goto ggqwcqssoauckuic; csyoimsqgwcmiwki: $ksaameoqigiaoigg = $this->kseoeeogcguemmuk($auwuoyyagaiegwae, $iswcokucwmiosiaq); ggqwcqssoauckuic: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\137\143\154\157\x75\x64\146\x6c\x61\x72\x65\137\160\x75\x72\x67\x65\137\143\141\143\150\145\137\x62\171\x5f\x75\x72\x6c\163\x5f\141\x66\x74\145\162")); return $ksaameoqigiaoigg; } private function eiwcuqigayigimak(string $uusmaiomayssaecw, &$iswcokucwmiosiaq = '') { $ksaameoqigiaoigg = false; $keccaugmemegoimu = $this->get("\x2f\172\157\x6e\145\x73\57{$this->oywimmyysigqkeqa()}\x2f\x73\145\x74\164\151\156\x67\x73\x2f{$uusmaiomayssaecw}"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto waewaiuiogywqigu; } $iswcokucwmiosiaq .= sprintf(__("\125\x6e\141\x62\154\145\x20\x74\x6f\40\x67\x65\164\40\45\x73\x20\163\145\164\164\x69\156\x67\x73\72\40\45\x73", PR__PKG__OPTIMIZATION), $uusmaiomayssaecw, $iswcokucwmiosiaq); goto yyamycyesguwueuw; waewaiuiogywqigu: $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if ($this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { goto ggwcauaeuagekeyo; } $iswcokucwmiosiaq .= sprintf(__("\x55\x6e\141\142\x6c\145\40\164\157\x20\x66\151\156\144\x20\45\163\40\163\145\x74\164\151\156\147\x73", PR__PKG__OPTIMIZATION), $uusmaiomayssaecw); goto mmkoqmccusoeaoyi; ggwcauaeuagekeyo: $sogksuscggsicmac = ManipulateArray::get($sogksuscggsicmac, "\162\145\163\165\x6c\164"); $ksaameoqigiaoigg = ManipulateArray::get($sogksuscggsicmac, "\x76\x61\154\165\145", false); mmkoqmccusoeaoyi: yyamycyesguwueuw: return $ksaameoqigiaoigg; } private function sgscoawywmyukcqm(string $uusmaiomayssaecw, $eqgoocgaqwqcimie, &$iswcokucwmiosiaq = '') : bool { $ksaameoqigiaoigg = false; $keccaugmemegoimu = $this->kqcyawyscakoskke("{$this->wwawisckiqeueoua()}\x2f\x7a\x6f\x6e\145\x73\57{$this->oywimmyysigqkeqa()}\x2f\163\x65\x74\164\151\156\x67\163\57{$uusmaiomayssaecw}", ["\152\x73\157\x6e" => ["\x76\x61\x6c\x75\x65" => $eqgoocgaqwqcimie]]); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto aymmymequcisekie; } $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $ksaameoqigiaoigg = $this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq); aymmymequcisekie: return $ksaameoqigiaoigg; } public function ymkgoumkoycwwmmq(&$iswcokucwmiosiaq = '') { return $this->eiwcuqigayigimak("\x64\x65\166\x65\x6c\x6f\x70\x6d\145\x6e\x74\137\155\x6f\x64\145", $iswcokucwmiosiaq); } public function emukusgiakigsoms($wmekckkyoiyickmk, &$iswcokucwmiosiaq = '') : bool { if (is_bool($wmekckkyoiyickmk)) { goto kyggwyywiycksgqq; } if (in_array($wmekckkyoiyickmk, ["\157\x66\x66", "\x6f\156"])) { goto gyeayeuuyiemuwuq; } $wmekckkyoiyickmk = "\157\x66\x66"; gyeayeuuyiemuwuq: goto sugumgeqcwgekcqs; kyggwyywiycksgqq: $wmekckkyoiyickmk = $wmekckkyoiyickmk ? "\x6f\x6e" : "\x6f\x66\146"; sugumgeqcwgekcqs: return $this->sgscoawywmyukcqm("\144\x65\166\x65\x6c\x6f\160\x6d\145\156\x74\137\x6d\x6f\144\145", $wmekckkyoiyickmk, $iswcokucwmiosiaq); } public function emqkioueyiqeiokk(&$iswcokucwmiosiaq = '') { return $this->eiwcuqigayigimak("\142\x72\157\167\163\145\162\x5f\x63\141\143\150\x65\x5f\x74\164\154", $iswcokucwmiosiaq); } public function mwiqewoumqkqqaos($gaycumwikykomiso, &$iswcokucwmiosiaq = '') : bool { return $this->sgscoawywmyukcqm("\142\x72\157\x77\163\145\x72\137\x63\141\x63\150\x65\137\x74\x74\x6c", $gaycumwikykomiso, $iswcokucwmiosiaq); } }
