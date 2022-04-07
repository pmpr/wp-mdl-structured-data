<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624eb3b232182             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Custom; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Module\StructuredData\Schema\CreativeWork\Blog; class Tag extends Blog { public function __construct($goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto qgeugwymkkiacwoc; } $scwiymciagumsuiw = ManipulateTerm::get(get_query_var("\x74\x61\x67\x5f\151\x64")); $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($scwiymciagumsuiw); $this->mqqgwegyyqkgoqeg(null)->kwcomqeygmcaegeo(sprintf(__("\x54\141\x67\x20\45\x73", PR__MDL__STRUCTURED_DATA), single_tag_title('', false)))->gucwmccyimoagwcm(strip_tags(tag_description()))->eyqkogeiqauioamw($migiiksoiymissge)->aseocggwwegcmqes("\102\154\157\x67")->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($scwiymciagumsuiw)->qmueseocuuekommo($migiiksoiymissge)->aseocggwwegcmqes("\124\141\x67")); qgeugwymkkiacwoc: parent::__construct($goiqeyeaqmicqiky); } }
