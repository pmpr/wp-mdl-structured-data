<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ffc9a4b7bec             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Custom; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Module\StructuredData\Schema\CreativeWork\Blog; class Category extends Blog { public function __construct($goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto cgiscsqwwgqqaeqi; } $guwumyyyakswawas = ManipulateTerm::get(get_query_var("\x63\x61\x74")); $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($guwumyyyakswawas); $this->mqqgwegyyqkgoqeg(null)->kwcomqeygmcaegeo(single_cat_title('', false))->gucwmccyimoagwcm(category_description())->eyqkogeiqauioamw($migiiksoiymissge)->aseocggwwegcmqes("\x42\x6c\x6f\x67")->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($guwumyyyakswawas)->qmueseocuuekommo($migiiksoiymissge)->aseocggwwegcmqes("\x43\x61\x74\x65\x67\x6f\162\x79")); cgiscsqwwgqqaeqi: parent::__construct($goiqeyeaqmicqiky); } }
