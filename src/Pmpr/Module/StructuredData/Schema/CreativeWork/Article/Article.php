<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5eca5e30b3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork\Article; use Pmpr\Module\StructuredData\Schema\CreativeWork\CreativeWork; use Pmpr\Module\StructuredData\Schema\CreativeWork\MediaObject\ImageObject; use Pmpr\Module\StructuredData\Schema\Organization\Organization; class Article extends CreativeWork { protected $backStory = null; protected int $wordCount = 0; protected ?string $articleBody = null; protected ?string $articleSection = null; public function __construct($goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto gimmuoqwckiseaik; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get(); $meqocwsecsywiiqs = $this->qcgakseyaikigqco($post); $this->usuqmwksoeaayaig($meqocwsecsywiiqs)->kwcomqeygmcaegeo($meqocwsecsywiiqs)->mwiamauscyiwogsu(new ImageObject($post))->qgkocaugaamsqscm(new Organization())->wocmweesiwocsmua($seumokooiykcomco->uiuwugwykqocmiec($post))->kygcaauaawiqycqi($seumokooiykcomco->souwykwwmyygqyqi($post, false))->gucwmccyimoagwcm($seumokooiykcomco->masoymaamekuykso($post))->gqiiwauggswiogqy($seumokooiykcomco->ycqquoiyyuesegsy($post))->kkqwmgsyqkqyqgge($this->weymkusmeageugsu($post))->akcmoueugeecmoqm($this->osswsoymmgisqmoy($post)); gimmuoqwckiseaik: parent::__construct($goiqeyeaqmicqiky); } public function ccycowykkkuseiye() : string { return $this->articleBody; } public function kygcaauaawiqycqi(?string $mgkkocsqmesceqka) : Article { $this->articleBody = strip_shortcodes(strip_tags((string) $mgkkocsqmesceqka)); return $this; } public function gcawsewyqsiiwuao() : string { return $this->articleSection; } public function wakseuguomugicme(string $uoawyyacuissyaac) : Article { $this->articleSection = $uoawyyacuissyaac; return $this; } public function comqiismsekuoeec() { return $this->backStory; } public function eswyscwkqgwwmwkc($smgomyyiawqoyyse) { $this->backStory = $smgomyyiawqoyyse; return $this; } public function cicqawoimmoyyaio() : int { return $this->wordCount; } public function wocmweesiwocsmua(int $cqkugkyukikgyyyk) : Article { $this->wordCount = $cqkugkyukikgyyyk; return $this; } }
