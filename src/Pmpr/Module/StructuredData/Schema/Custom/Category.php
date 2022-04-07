<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624eb3b232182             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Custom; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Module\StructuredData\Schema\CreativeWork\Blog; class Category extends Blog { public function __construct($goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto mqicocmqegwukkwg; } $guwumyyyakswawas = ManipulateTerm::get(get_query_var("\x63\x61\x74")); $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($guwumyyyakswawas); $this->mqqgwegyyqkgoqeg(null)->kwcomqeygmcaegeo(single_cat_title('', false))->gucwmccyimoagwcm(category_description())->eyqkogeiqauioamw($migiiksoiymissge)->aseocggwwegcmqes("\x42\x6c\157\147")->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($guwumyyyakswawas)->qmueseocuuekommo($migiiksoiymissge)->aseocggwwegcmqes("\x43\x61\164\x65\x67\x6f\x72\171")); mqicocmqegwukkwg: parent::__construct($goiqeyeaqmicqiky); } }
