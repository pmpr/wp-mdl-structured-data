<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6240a62616f15             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Custom; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Module\StructuredData\Schema\CreativeWork\Blog; class Category extends Blog { public function __construct($goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto ciykoyeioqgyaeqo; } $guwumyyyakswawas = ManipulateTerm::get(get_query_var("\143\x61\x74")); $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($guwumyyyakswawas); $this->mqqgwegyyqkgoqeg(null)->kwcomqeygmcaegeo(single_cat_title('', false))->gucwmccyimoagwcm(category_description())->eyqkogeiqauioamw($migiiksoiymissge)->aseocggwwegcmqes("\x42\x6c\x6f\x67")->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($guwumyyyakswawas)->qmueseocuuekommo($migiiksoiymissge)->aseocggwwegcmqes("\103\141\x74\x65\x67\x6f\x72\171")); ciykoyeioqgyaeqo: parent::__construct($goiqeyeaqmicqiky); } }
