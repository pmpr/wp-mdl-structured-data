<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae930db6b1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema; use WP_Comment; use WP_Post; use WP_User; class Person extends Thing { public function __construct($ccamueccusigaaio = null, $goiqeyeaqmicqiky = true) { $this->isGlobal = true; if (!($ccamueccusigaaio && $goiqeyeaqmicqiky)) { goto asmecuqiyyswueqe; } $eeamcawaiqocomwy = null; $ymqmyyeuycgmigyo = null; if ($ccamueccusigaaio instanceof WP_Comment) { goto qgoiooayqmqqsiok; } if ($ccamueccusigaaio instanceof WP_Post) { goto qwigomakwmyiwkgo; } if ($ccamueccusigaaio instanceof WP_User) { goto myoicgcuugciueis; } goto qogqewiwmwiwskgm; qgoiooayqmqqsiok: $iiyososeqgecqayy = $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs(); $ymqmyyeuycgmigyo = $iiyososeqgecqayy->mguqscccckuywsya($ccamueccusigaaio); if ($ccamueccusigaaio->user_id) { goto cecuyayqoioasumi; } $ccamueccusigaaio = crc32($ccamueccusigaaio->comment_author_email); goto qiaqsassksqiuyae; cecuyayqoioasumi: $eeamcawaiqocomwy = $iiyososeqgecqayy->qkweigiqsaaigqau($ccamueccusigaaio); $ccamueccusigaaio = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($ccamueccusigaaio->user_id); qiaqsassksqiuyae: goto qogqewiwmwiwskgm; qwigomakwmyiwkgo: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $qscaoekmoooeuyqg = $seumokooiykcomco->mguqscccckuywsya($ccamueccusigaaio); $ymqmyyeuycgmigyo = $seumokooiykcomco->ygwimyogyaqgumam($qscaoekmoooeuyqg); $eeamcawaiqocomwy = $seumokooiykcomco->qkweigiqsaaigqau($ccamueccusigaaio); $ccamueccusigaaio = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($qscaoekmoooeuyqg); goto qogqewiwmwiwskgm; myoicgcuugciueis: $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($ccamueccusigaaio); $ymqmyyeuycgmigyo = $this->caokeucsksukesyo()->issssuygyewuaswa()->ygwimyogyaqgumam($ccamueccusigaaio); qogqewiwmwiwskgm: $this->usuqmwksoeaayaig($ymqmyyeuycgmigyo)->eyqkogeiqauioamw($eeamcawaiqocomwy)->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($ccamueccusigaaio)); asmecuqiyyswueqe: parent::__construct($goiqeyeaqmicqiky); } }
