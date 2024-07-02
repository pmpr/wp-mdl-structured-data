<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6684011231e1c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Custom; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Module\StructuredData\Schema\CreativeWork\Blog; class Tag extends Blog { public function __construct($goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto yssscwioiyygssec; } $scwiymciagumsuiw = ManipulateTerm::get(get_query_var("\164\x61\x67\137\151\144")); $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($scwiymciagumsuiw); $this->mqqgwegyyqkgoqeg(null)->kwcomqeygmcaegeo(sprintf(__("\x54\141\x67\x20\45\163", PR__MDL__STRUCTURED_DATA), single_tag_title('', false)))->gucwmccyimoagwcm(tag_description())->eyqkogeiqauioamw($migiiksoiymissge)->aseocggwwegcmqes("\102\x6c\157\147")->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($scwiymciagumsuiw)->qmueseocuuekommo($migiiksoiymissge)->aseocggwwegcmqes("\124\141\x67")); yssscwioiyygssec: parent::__construct($goiqeyeaqmicqiky); } }
