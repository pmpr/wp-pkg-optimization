<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c7258cc4499             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Page\Basic; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\WPListTable; use Pmpr\Package\Optimization\Manipulate\Manipulate; use Pmpr\Package\Optimization\Page\Model; use WP_Post; use WP_Post_Type; use WP_Taxonomy; class ListTable extends WPListTable { protected $type = null; public function __construct($sqeykgyoooqysmca, $ywmkwiwkosakssii = []) { $this->type = $sqeykgyoooqysmca; parent::__construct($ywmkwiwkosakssii); } public function gueasuouwqysmomu() { return $this->type; } public function get_columns() { return [self::qescuiwgsyuikume => __("\124\x69\164\x6c\145", PR__PKG__OPTIMIZATION), "\x6f\x70\164\x5f\163\x74\x61\x74\x75\x73" => __("\117\x70\x74\40\123\164\141\x74\165\x73", PR__PKG__OPTIMIZATION)]; } protected function handle_row_actions($igqsaukqcqscimok, $column_name, $micmwmywmkguiyyk) : string { $ccowyogiqwikkkie = ''; if (!($micmwmywmkguiyyk === $column_name)) { goto syuywgysqyckcqay; } $ccowyogiqwikkkie = []; $migiiksoiymissge = ''; if (!$igqsaukqcqscimok instanceof WP_Post) { goto kmseiouukkqiumum; } $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($igqsaukqcqscimok); kmseiouukkqiumum: $meqocwsecsywiiqs = __("\120\x75\x72\147\x65\40\103\x61\143\x68\145", PR__PKG__OPTIMIZATION); $ccowyogiqwikkkie[] = ManipulateHTML::uuccukgasskgimsq("\x61", ["\150\162\x65\146" => "\x23", "\x63\x6c\141\163\163" => "\157\160\x74\x2d\x70\x61\x67\145\x2d\141\143\x74\151\x6f\x6e\40\160\x72\x2d\143\157\x6e\x66\x69\x72\155\141\x62\154\x65\55\x61\143\164\151\x6f\x6e", "\141\x72\151\141\x2d\154\141\142\x65\x6c" => $meqocwsecsywiiqs, "\x64\141\164\141\55\x63\157\x6e\146\x69\x67" => ManipulateHTML::uskieqmcqyecigmy(["\x74\x79\x70\x65" => self::wyaqwomqwwaoiwas, "\x74\151\164\x6c\145" => $meqocwsecsywiiqs, "\143\157\x6e\164\x65\156\x74" => __("\101\162\145\40\x79\x6f\165\x20\x73\x75\162\145\40\141\142\157\165\x74\x20\x72\x65\117\160\x74\x69\155\x69\x7a\x65\40\164\x68\151\x73\40\x70\141\147\x65\77", PR__PKG__OPTIMIZATION), "\x62\165\164\x74\x6f\156\x73" => ["\143\x61\156\143\x65\x6c", ["\143\154\141\x73\x73" => "\157\x70\164\55\x70\165\x72\x67\145\x2d\x70\x6f\x73\164\55\143\x61\143\x68\145\x20\142\x74\x6e\x20\x62\x74\156\x2d\160\162\x69\155\141\162\171", "\x74\151\164\x6c\x65" => $meqocwsecsywiiqs, "\144\x61\164\x61\55\160\145\162\x6d\x61\154\x69\156\153" => $migiiksoiymissge, "\x64\x61\x74\141\55\155\x69\x63\x72\x6f\x6d\157\144\x61\x6c\x2d\143\x6c\157\163\x65"]]])], $meqocwsecsywiiqs); $ccowyogiqwikkkie = $this->row_actions($ccowyogiqwikkkie); syuywgysqyckcqay: return $ccowyogiqwikkkie; } protected function column_default($igqsaukqcqscimok, $column_name) { $aqykuigiuwmmcieu = ''; $meqocwsecsywiiqs = ''; $migiiksoiymissge = ''; if (!$igqsaukqcqscimok instanceof WP_Post) { goto ggewkaiwwgkmkwgc; } $meqocwsecsywiiqs = ManipulatePost::qcgakseyaikigqco($igqsaukqcqscimok); $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($igqsaukqcqscimok); ggewkaiwwgkmkwgc: switch ($column_name) { case self::qescuiwgsyuikume: $aqykuigiuwmmcieu = ManipulateHTML::uuccukgasskgimsq("\141", ["\150\162\x65\146" => $migiiksoiymissge, "\164\x61\162\x67\145\x74" => "\137\142\x6c\x61\x6e\153"], ManipulateHTML::ciuuiyckmsygceis($meqocwsecsywiiqs)); goto kkieqqwwascekcmo; case "\157\x70\164\137\163\x74\x61\x74\x75\163": $aqykuigiuwmmcieu = Manipulate::oeqqgiayuaouaeuc($migiiksoiymissge); goto kkieqqwwascekcmo; } ycueoqkeakismiqw: kkieqqwwascekcmo: return $aqykuigiuwmmcieu; } public function prepare_items() { global $wp_query, $per_page; $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); $suaemuyiacqyugsm = $this->get_pagenum(); $ymqmyyeuycgmigyo = $sqeykgyoooqysmca->name; $ywmkwiwkosakssii = [self::goqgcigmiawyauai => $per_page, self::imywcsggckkcywgk => $suaemuyiacqyugsm]; $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $ywmkwiwkosakssii[self::kcaoouwiygwwmiok] = $jwsqucqyaoaasykk->ssiyoimagsskwsoi([ $jwsqucqyaoaasykk::squoamkioomemiyi => $ymqmyyeuycgmigyo, $jwsqucqyaoaasykk::ciywsqoeiymemsys => [self::ciyoccqkiamemcmm => $jwsqucqyaoaasykk::wiewguakgwmoqaea, self::eugyciakiowwcuwm => "\41\75"], ], $jwsqucqyaoaasykk::mgsccwumkcawaqcy); $this->items = ManipulatePost::ciugwooasaqcywas($ymqmyyeuycgmigyo, $ywmkwiwkosakssii); $uuwmqqqiwksuaise = 0; if ($wp_query->found_posts || $suaemuyiacqyugsm === 1) { goto mugeiwyysiemwaym; } if (!$sqeykgyoooqysmca instanceof WP_Post_Type) { goto awimwukcyiceackk; } $gaeqamemwmwsyukm = (array) wp_count_posts($sqeykgyoooqysmca->name, "\162\145\141\x64\141\x62\154\x65"); $uuwmqqqiwksuaise = array_sum($gaeqamemwmwsyukm); awimwukcyiceackk: goto euymeegkukskiowq; mugeiwyysiemwaym: $uuwmqqqiwksuaise = $wp_query->found_posts; euymeegkukskiowq: $qqkyekmackggcick = []; $wkkweuacukumqmya = $this->get_columns(); $osmkwgikieoyykwg = []; $this->_column_headers = [$wkkweuacukumqmya, $qqkyekmackggcick, $osmkwgikieoyykwg]; $this->set_pagination_args(["\164\157\x74\x61\x6c\x5f\151\x74\145\155\163" => $uuwmqqqiwksuaise, self::ausqeuugegoygouq => $per_page]); } }
