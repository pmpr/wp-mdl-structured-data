<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67ceddc0eb976             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\DataType; use Pmpr\Module\StructuredData\Schema\CreativeWork\HowToDirection; use Pmpr\Module\StructuredData\Schema\CreativeWork\HowToTip; class Instruction extends DataType { const sueuicugaemqiksg = 'tip'; const mwmmmioksayswakq = 'direction'; protected $text; protected $type = self::mwmmmioksayswakq; protected $position; public function __construct(string $cmwygeyygwqaemaq, $kuuiuigeacouwmaa = 1) { if ($cmwygeyygwqaemaq) { $cmwygeyygwqaemaq = ltrim($cmwygeyygwqaemaq); if ($cmwygeyygwqaemaq[0] === '#') { $cmwygeyygwqaemaq = rtrim(ltrim($cmwygeyygwqaemaq, '#')); $this->type = self::sueuicugaemqiksg; } $this->text = $cmwygeyygwqaemaq; } $this->position = $kuuiuigeacouwmaa; } public function ykgcioecqcwwkime() : ?string { return $this->text; } public function gueasuouwqysmomu() : ?string { return $this->type; } public function yqyeyqikcyswcaig() : ?int { return $this->position; } public function ggwmgmiswsqmcywi() : bool { return $this->gueasuouwqysmomu() == self::sueuicugaemqiksg; } public function uqeoyqiwywwmsiew() { switch ($this->gueasuouwqysmomu()) { case self::sueuicugaemqiksg: $aaqqkgyougeiueyq = new HowToTip(); break; case self::mwmmmioksayswakq: default: $aaqqkgyougeiueyq = new HowToDirection(); break; } $aaqqkgyougeiueyq->kguaimkyumsuesem($this->ykgcioecqcwwkime())->weakiuagguweamee($this->yqyeyqikcyswcaig()); return $aaqqkgyougeiueyq; } }
