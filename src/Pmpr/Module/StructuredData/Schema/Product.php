<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d4bccd376             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema; use Pmpr\Module\StructuredData\Schema\CreativeWork\Review; use Pmpr\Module\StructuredData\Schema\Intangible\Rating\AggregateRating; class Product extends Thing { protected $offers = null; protected $review = null; protected ?string $sku = null; protected ?AggregateRating $aggregateRating = null; public function uuigaquwymemugcy(?string $mmkkmgusieqaqkki) : self { $this->sku = $mmkkmgusieqaqkki; return $this; } public function nsqwikmawcqqyayk(?AggregateRating $gggmygsysokgmaiq) : self { $this->aggregateRating = $gggmygsysokgmaiq; return $this; } public function gommiycwmqyygwss($aoswkoaumswgccwy) : self { $this->offers = $aoswkoaumswgccwy; return $this; } public function owksioogqeoiegim(Review $qkcymeiwcsikkkkk) : self { $this->review[] = $qkcymeiwcsikkkkk; return $this; } public function qoqyomiqwooaeoiy() : bool { return !empty($this->offers); } }
