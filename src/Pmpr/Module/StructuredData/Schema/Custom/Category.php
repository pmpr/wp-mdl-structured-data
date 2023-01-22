<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ccf406a0f8f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Custom; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Module\StructuredData\Schema\CreativeWork\Blog; class Category extends Blog { public function __construct($goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto esaqcqqwuussiiwo; } $guwumyyyakswawas = ManipulateTerm::get(get_query_var("\x63\x61\x74")); $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($guwumyyyakswawas); $this->mqqgwegyyqkgoqeg(null)->kwcomqeygmcaegeo(single_cat_title('', false))->gucwmccyimoagwcm(category_description())->eyqkogeiqauioamw($migiiksoiymissge)->aseocggwwegcmqes("\102\x6c\x6f\147")->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($guwumyyyakswawas)->qmueseocuuekommo($migiiksoiymissge)->aseocggwwegcmqes("\103\141\x74\145\x67\x6f\x72\x79")); esaqcqqwuussiiwo: parent::__construct($goiqeyeaqmicqiky); } }
