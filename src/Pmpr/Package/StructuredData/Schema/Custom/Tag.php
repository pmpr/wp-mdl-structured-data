<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61eed0d47caee             |
    |_______________________________________|
*/
 namespace Pmpr\Package\StructuredData\Schema\Custom; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Package\StructuredData\Schema\CreativeWork\Blog; class Tag extends Blog { public function __construct($goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto kqksuugcgsyeoayy; } $scwiymciagumsuiw = ManipulateTerm::get(get_query_var("\164\141\147\137\151\144")); $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($scwiymciagumsuiw); $this->mqqgwegyyqkgoqeg(null)->kwcomqeygmcaegeo(sprintf(__("\124\141\147\x20\45\163", PR__PKG__STRUCTURED_DATA), single_tag_title('', false)))->gucwmccyimoagwcm(strip_tags(tag_description()))->eyqkogeiqauioamw($migiiksoiymissge)->aseocggwwegcmqes("\x42\154\157\x67")->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($scwiymciagumsuiw)->qmueseocuuekommo($migiiksoiymissge)->aseocggwwegcmqes("\x54\x61\x67")); kqksuugcgsyeoayy: parent::__construct($goiqeyeaqmicqiky); } }
