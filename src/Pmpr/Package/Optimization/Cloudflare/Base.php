<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616ae7005588d             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Cloudflare; class Base extends Common { const HEADER = "\127\x50\x2d\x4f\160\164\x2d\103\x6c\157\165\144\146\154\x61\x72\x65"; const CRONE_SCHEDULE = self::OPT_CF . "\x63\141\x63\150\x65\x5f\x70\x75\x72\147\145\x5f\x63\162\x6f\x6e"; protected ?API $api = null; public function auamgqiwisysomsa() : ?API { return $this->api; } public function __construct() { $this->api = API::symcgieuakksimmu(); parent::__construct(); } public function yckiegaseygiwiey() { insert_with_markers($this->kockkiymkccassgi(), "\117\x70\x74\151\x6d\x69\x7a\x61\x74\151\157\x6e\40\x43\154\157\x75\144\x66\x6c\x61\162\x65", []); } public function aayykckyqcieayqc(&$iswcokucwmiosiaq = null) { goto yyymkoaumewsqoum; yyymkoaumewsqoum: $this->qsiwaqwsyasqsqcq(true); goto iwioqeqiwwuqmakq; mwwiiacsqqgmaoso: wp_unschedule_event($yiuogaeewyockeak, self::CRONE_SCHEDULE); goto yiwmwceouauueusw; gckkewigoacuoekm: euimwgmwmmaogkcw: goto cummaumcqioogqei; iesqwciwsqiwqoga: eekswukgkqgmecuk: goto yyaeqgumuoaseuiu; qoaagigyswamkmwg: if (!($iowmousgcuymioua = $this->weysguygiseoukqw(Setting::CF_BYPASS_BACKEND_PAGE_RULE_ID, ''))) { goto euimwgmwmmaogkcw; } goto muuwgqsusiswkams; qowiysuioeqesgwc: $this->auamgqiwisysomsa()->gcgumeecckmsagiw($sowkswowciayawwu, $iswcokucwmiosiaq); goto yqgoeeuaasekacys; iwioqeqiwwuqmakq: $this->auamgqiwisysomsa()->mwiqewoumqkqqaos($this->weysguygiseoukqw(Setting::CF_OLD_BC_TTL), $iswcokucwmiosiaq); goto wyksgeyiosqccake; yiwmwceouauueusw: wp_clear_scheduled_hook(self::CRONE_SCHEDULE); goto iesqwciwsqiwqoga; wyksgeyiosqccake: if (!($sowkswowciayawwu = $this->weysguygiseoukqw(Setting::CF_PAGE_RULE_ID, ''))) { goto ceecqioeaaiqgqsu; } goto qowiysuioeqesgwc; eegyoesmeiassqwe: if (!($yiuogaeewyockeak = wp_next_scheduled(self::CRONE_SCHEDULE))) { goto eekswukgkqgmecuk; } goto mwwiiacsqqgmaoso; yqgoeeuaasekacys: ceecqioeaaiqgqsu: goto qoaagigyswamkmwg; yyaeqgumuoaseuiu: $this->oaumimwssciwumys("\x52\145\163\145\x74\40\143\x6f\155\160\154\145\x74\145"); goto qiayqwouwmkgkgsa; cummaumcqioogqei: $this->kmuweyayaqoeqiyw()::eiaacegkigqiwawg(Setting::CF_CACHE_ENABLED, 0); goto eegyoesmeiassqwe; muuwgqsusiswkams: $this->auamgqiwisysomsa()->gcgumeecckmsagiw($iowmousgcuymioua, $iswcokucwmiosiaq); goto gckkewigoacuoekm; qiayqwouwmkgkgsa: } }
