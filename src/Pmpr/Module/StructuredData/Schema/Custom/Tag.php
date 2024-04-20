<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66243f5fe1f6c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Custom; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Module\StructuredData\Schema\CreativeWork\Blog; class Tag extends Blog { public function __construct($goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto ayyweymyuuiauamo; } $scwiymciagumsuiw = ManipulateTerm::get(get_query_var("\x74\x61\147\x5f\x69\144")); $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($scwiymciagumsuiw); $this->mqqgwegyyqkgoqeg(null)->kwcomqeygmcaegeo(sprintf(__("\x54\x61\147\x20\45\x73", PR__MDL__STRUCTURED_DATA), single_tag_title('', false)))->gucwmccyimoagwcm(tag_description())->eyqkogeiqauioamw($migiiksoiymissge)->aseocggwwegcmqes("\102\154\x6f\147")->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($scwiymciagumsuiw)->qmueseocuuekommo($migiiksoiymissge)->aseocggwwegcmqes("\x54\141\x67")); ayyweymyuuiauamo: parent::__construct($goiqeyeaqmicqiky); } }
