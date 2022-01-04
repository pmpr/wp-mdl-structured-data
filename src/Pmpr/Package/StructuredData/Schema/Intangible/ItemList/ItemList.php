<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d46aa5ca971             |
    |_______________________________________|
*/
 namespace Pmpr\Package\StructuredData\Schema\Intangible\ItemList; use Pmpr\Package\StructuredData\Schema\Intangible\Intangible; use Pmpr\Package\StructuredData\Schema\Intangible\Enumeration\ItemListOrderType; use Pmpr\Package\StructuredData\Schema\Intangible\ListItem; use Pmpr\Package\StructuredData\Schema\Thing; class ItemList extends Intangible { protected $itemListOrder; protected int $numberOfItems = 0; protected array $itemListElement = []; public function aiimcaiwqwwgyyiy() : array { return $this->itemListElement; } public function quwooqmgqyskeumu(array $smeuciwmqycmwigc) { $this->itemListElement = $smeuciwmqycmwigc; return $this; } public function asssmuisouigmaom($igqsaukqcqscimok) : ItemList { $this->itemListElement[] = $igqsaukqcqscimok; return $this; } public function cqmgugkqckoysasg() { return $this->itemListOrder; } public function iacsmqmcusauamus($qscaigagayckywas) { $this->itemListOrder = $qscaigagayckywas; return $this; } public function mseogowaawssgcum() : int { return $this->numberOfItems; } public function ygamocmgiuiuaiao(int $wiuocogiosgwymos) : ItemList { $this->numberOfItems = $wiuocogiosgwymos; return $this; } }
