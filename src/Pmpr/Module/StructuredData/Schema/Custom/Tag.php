<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63d10c7a6cd74             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Custom; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Module\StructuredData\Schema\CreativeWork\Blog; class Tag extends Blog { public function __construct($goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto ikuuiauwouuqawuw; } $scwiymciagumsuiw = ManipulateTerm::get(get_query_var("\x74\x61\x67\137\x69\144")); $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($scwiymciagumsuiw); $this->mqqgwegyyqkgoqeg(null)->kwcomqeygmcaegeo(sprintf(__("\x54\141\x67\x20\x25\x73", PR__MDL__STRUCTURED_DATA), single_tag_title('', false)))->gucwmccyimoagwcm(strip_tags(tag_description()))->eyqkogeiqauioamw($migiiksoiymissge)->aseocggwwegcmqes("\x42\154\157\x67")->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($scwiymciagumsuiw)->qmueseocuuekommo($migiiksoiymissge)->aseocggwwegcmqes("\x54\141\147")); ikuuiauwouuqawuw: parent::__construct($goiqeyeaqmicqiky); } }
