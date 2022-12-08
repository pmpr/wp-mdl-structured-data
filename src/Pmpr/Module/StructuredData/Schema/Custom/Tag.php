<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             639215328fdea             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Custom; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Module\StructuredData\Schema\CreativeWork\Blog; class Tag extends Blog { public function __construct($goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto qsygcycwieukkgwc; } $scwiymciagumsuiw = ManipulateTerm::get(get_query_var("\x74\141\x67\137\x69\x64")); $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($scwiymciagumsuiw); $this->mqqgwegyyqkgoqeg(null)->kwcomqeygmcaegeo(sprintf(__("\x54\141\x67\x20\x25\163", PR__MDL__STRUCTURED_DATA), single_tag_title('', false)))->gucwmccyimoagwcm(strip_tags(tag_description()))->eyqkogeiqauioamw($migiiksoiymissge)->aseocggwwegcmqes("\102\x6c\157\147")->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($scwiymciagumsuiw)->qmueseocuuekommo($migiiksoiymissge)->aseocggwwegcmqes("\124\141\x67")); qsygcycwieukkgwc: parent::__construct($goiqeyeaqmicqiky); } }
