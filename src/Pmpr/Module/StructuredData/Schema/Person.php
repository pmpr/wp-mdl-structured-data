<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66243f5fe1f6c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema; use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use WP_Comment; use WP_Post; use WP_User; class Person extends Thing { public function __construct($ccamueccusigaaio = null, $goiqeyeaqmicqiky = true) { $this->isGlobal = true; if (!($ccamueccusigaaio && $goiqeyeaqmicqiky)) { goto qkcyqocqqwmqgqww; } $eeamcawaiqocomwy = null; $ymqmyyeuycgmigyo = null; if ($ccamueccusigaaio instanceof WP_Comment) { goto iggyqogweyosuikc; } if ($ccamueccusigaaio instanceof WP_Post) { goto qqewoyookaskiuek; } if ($ccamueccusigaaio instanceof WP_User) { goto ssoucoucsgccekwe; } goto kqksuugcgsyeoayy; iggyqogweyosuikc: $iiyososeqgecqayy = $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs(); $ymqmyyeuycgmigyo = $iiyososeqgecqayy->mguqscccckuywsya($ccamueccusigaaio); if ($ccamueccusigaaio->user_id) { goto omugkkesagcyagmk; } $ccamueccusigaaio = crc32($ccamueccusigaaio->comment_author_email); goto ygcsmkuycoagwyou; omugkkesagcyagmk: $eeamcawaiqocomwy = $iiyososeqgecqayy->qkweigiqsaaigqau($ccamueccusigaaio); $ccamueccusigaaio = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($ccamueccusigaaio->user_id); ygcsmkuycoagwyou: goto kqksuugcgsyeoayy; qqewoyookaskiuek: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $qscaoekmoooeuyqg = $seumokooiykcomco->mguqscccckuywsya($ccamueccusigaaio); $ymqmyyeuycgmigyo = $seumokooiykcomco->ygwimyogyaqgumam($qscaoekmoooeuyqg); $eeamcawaiqocomwy = $seumokooiykcomco->qkweigiqsaaigqau($ccamueccusigaaio); $ccamueccusigaaio = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($qscaoekmoooeuyqg); goto kqksuugcgsyeoayy; ssoucoucsgccekwe: $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($ccamueccusigaaio); $ymqmyyeuycgmigyo = $this->caokeucsksukesyo()->issssuygyewuaswa()->ygwimyogyaqgumam($ccamueccusigaaio); kqksuugcgsyeoayy: $this->usuqmwksoeaayaig($ymqmyyeuycgmigyo)->eyqkogeiqauioamw($eeamcawaiqocomwy)->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($ccamueccusigaaio)); qkcyqocqqwmqgqww: parent::__construct($goiqeyeaqmicqiky); } }
