<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61afe111519f2             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Cloudflare; class Base extends Common { const HEADER = "\127\120\55\117\x70\x74\x2d\103\154\x6f\x75\x64\146\x6c\x61\162\x65"; const CRONE_SCHEDULE = self::OPT_CF . "\143\x61\x63\x68\145\x5f\160\x75\x72\x67\145\x5f\143\x72\x6f\156"; protected ?API $api = null; public function auamgqiwisysomsa() : ?API { return $this->api; } public function __construct() { $this->api = API::symcgieuakksimmu(); parent::__construct(); } public function yckiegaseygiwiey() { insert_with_markers($this->kockkiymkccassgi(), "\117\160\x74\x69\155\x69\172\141\x74\151\157\x6e\x20\103\154\x6f\165\x64\x66\x6c\x61\x72\145", []); } public function aayykckyqcieayqc(&$iswcokucwmiosiaq = null) { goto imyksgwckoyysuwo; imyksgwckoyysuwo: $this->qsiwaqwsyasqsqcq(true); goto gsmwukqywosmyauk; oekeqowkqecgsmuk: mgsusugkgmaowkwy: goto cequowgomkkwmoom; gsmwukqywosmyauk: $this->auamgqiwisysomsa()->mwiqewoumqkqqaos($this->weysguygiseoukqw(Setting::CF_OLD_BC_TTL), $iswcokucwmiosiaq); goto ayiescmccgoscuwm; kwiouekiyaeoeiwq: wqmkimmusyyeicag: goto gsyiisgksesmwkme; gsyiisgksesmwkme: if (!($iowmousgcuymioua = $this->weysguygiseoukqw(Setting::CF_BYPASS_BACKEND_PAGE_RULE_ID, ''))) { goto ykymyiswyykokeoi; } goto iquaiwacukwgyksm; cequowgomkkwmoom: $this->oaumimwssciwumys("\122\x65\163\x65\164\x20\x63\x6f\155\160\x6c\x65\x74\145"); goto gaymgiaccgkgsiwq; ggyikcqwqysmouye: wp_unschedule_event($yiuogaeewyockeak, self::CRONE_SCHEDULE); goto uqwwsmumussiogou; uqwwsmumussiogou: wp_clear_scheduled_hook(self::CRONE_SCHEDULE); goto oekeqowkqecgsmuk; siamksowsoewemyk: $this->auamgqiwisysomsa()->gcgumeecckmsagiw($sowkswowciayawwu, $iswcokucwmiosiaq); goto kwiouekiyaeoeiwq; iquaiwacukwgyksm: $this->auamgqiwisysomsa()->gcgumeecckmsagiw($iowmousgcuymioua, $iswcokucwmiosiaq); goto euuwcqqueakwukom; gqeaoyucgsqueucg: $this->kmuweyayaqoeqiyw()::eiaacegkigqiwawg(Setting::CF_CACHE_ENABLED, 0); goto ggioowsogoacmyyi; ayiescmccgoscuwm: if (!($sowkswowciayawwu = $this->weysguygiseoukqw(Setting::CF_PAGE_RULE_ID, ''))) { goto wqmkimmusyyeicag; } goto siamksowsoewemyk; ggioowsogoacmyyi: if (!($yiuogaeewyockeak = wp_next_scheduled(self::CRONE_SCHEDULE))) { goto mgsusugkgmaowkwy; } goto ggyikcqwqysmouye; euuwcqqueakwukom: ykymyiswyykokeoi: goto gqeaoyucgsqueucg; gaymgiaccgkgsiwq: } }
