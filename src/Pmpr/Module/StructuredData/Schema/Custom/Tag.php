<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ffc9a4b7bec             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Custom; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Module\StructuredData\Schema\CreativeWork\Blog; class Tag extends Blog { public function __construct($goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto skkamseieeusycye; } $scwiymciagumsuiw = ManipulateTerm::get(get_query_var("\x74\141\147\137\151\144")); $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($scwiymciagumsuiw); $this->mqqgwegyyqkgoqeg(null)->kwcomqeygmcaegeo(sprintf(__("\124\x61\147\x20\45\x73", PR__MDL__STRUCTURED_DATA), single_tag_title('', false)))->gucwmccyimoagwcm(strip_tags(tag_description()))->eyqkogeiqauioamw($migiiksoiymissge)->aseocggwwegcmqes("\x42\154\157\147")->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($scwiymciagumsuiw)->qmueseocuuekommo($migiiksoiymissge)->aseocggwwegcmqes("\x54\141\x67")); skkamseieeusycye: parent::__construct($goiqeyeaqmicqiky); } }
