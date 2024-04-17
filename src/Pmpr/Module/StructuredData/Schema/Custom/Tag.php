<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             661f9aa79f5da             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Custom; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Module\StructuredData\Schema\CreativeWork\Blog; class Tag extends Blog { public function __construct($goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto ayyweymyuuiauamo; } $scwiymciagumsuiw = ManipulateTerm::get(get_query_var("\164\141\x67\137\151\x64")); $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($scwiymciagumsuiw); $this->mqqgwegyyqkgoqeg(null)->kwcomqeygmcaegeo(sprintf(__("\124\141\x67\40\x25\163", PR__MDL__STRUCTURED_DATA), single_tag_title('', false)))->gucwmccyimoagwcm($this->caokeucsksukesyo()->owgcciayoweymuws()->kogyygyqqyqcioeg(strip_tags(tag_description()), 1000))->eyqkogeiqauioamw($migiiksoiymissge)->aseocggwwegcmqes("\102\x6c\x6f\147")->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($scwiymciagumsuiw)->qmueseocuuekommo($migiiksoiymissge)->aseocggwwegcmqes("\x54\141\x67")); ayyweymyuuiauamo: parent::__construct($goiqeyeaqmicqiky); } }
