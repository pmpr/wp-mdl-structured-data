<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             639215328fdea             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Custom; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Module\StructuredData\Schema\CreativeWork\Blog; class Category extends Blog { public function __construct($goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto umgaesggesswoaqe; } $guwumyyyakswawas = ManipulateTerm::get(get_query_var("\x63\x61\164")); $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($guwumyyyakswawas); $this->mqqgwegyyqkgoqeg(null)->kwcomqeygmcaegeo(single_cat_title('', false))->gucwmccyimoagwcm(category_description())->eyqkogeiqauioamw($migiiksoiymissge)->aseocggwwegcmqes("\x42\154\157\x67")->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($guwumyyyakswawas)->qmueseocuuekommo($migiiksoiymissge)->aseocggwwegcmqes("\103\x61\x74\x65\147\x6f\162\x79")); umgaesggesswoaqe: parent::__construct($goiqeyeaqmicqiky); } }
