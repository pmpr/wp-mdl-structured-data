<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae930db6b1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData; use Pmpr\Common\Foundation\Data\PageInfo; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\StructuredData\Schema\CreativeWork\Article\Article; use Pmpr\Module\StructuredData\Schema\CreativeWork\Article\SocialMediaPosting\BlogPosting; use Pmpr\Module\StructuredData\Schema\CreativeWork\Blog; use Pmpr\Module\StructuredData\Schema\CreativeWork\HowTo; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebPage\FAQPage; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebPage\ProfilePage; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebPage\SearchResultsPage; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebPage\WebPage; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebSite; use Pmpr\Module\StructuredData\Schema\Custom\Category; use Pmpr\Module\StructuredData\Schema\Custom\Tag; use Pmpr\Module\StructuredData\Schema\Intangible\Brand; use Pmpr\Module\StructuredData\Schema\Thing; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebPageElement\WPFooter; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebPageElement\WPHeader; class Factory extends Container { public function create(string $sqeykgyoooqysmca) { switch ($sqeykgyoooqysmca) { case "\127\x50\110\x65\141\144\145\162": $egkyssmuqcwaciya = new WPHeader(); goto ogsaaqsaogcqiouy; case "\x57\120\106\x6f\157\164\x65\162": $egkyssmuqcwaciya = new WPFooter(); goto ogsaaqsaogcqiouy; case "\102\162\141\x6e\144": $egkyssmuqcwaciya = new Brand(); goto ogsaaqsaogcqiouy; case "\127\145\142\x50\141\147\x65": $egkyssmuqcwaciya = new WebPage(); goto ogsaaqsaogcqiouy; default: $egkyssmuqcwaciya = $this->mwcosyumkyawcmyo(); goto ogsaaqsaogcqiouy; } iwekmyyccgiyuecc: ogsaaqsaogcqiouy: return $egkyssmuqcwaciya; } public function mwcosyumkyawcmyo(PageInfo $yyimiwcuegayoskq = null, $goiqeyeaqmicqiky = true) { if ($yyimiwcuegayoskq) { goto ikqqskkqqwmwssoo; } $yyimiwcuegayoskq = $this->caokeucsksukesyo()->kyqakacqeumicgag()->iqoacwuiemooiysg(); ikqqskkqqwmwssoo: if (!$yyimiwcuegayoskq instanceof PageInfo) { goto qmkaeeomgkwggoyo; } if ($yyimiwcuegayoskq->is(Constants::eycwiessycciwsao)) { goto ykomgumacooyomsk; } if ($yyimiwcuegayoskq->is(Constants::wwoeeogswkgeqack)) { goto mqkmcysgoiaouiwm; } if ($yyimiwcuegayoskq->is(Constants::iwascisiiokuackw)) { goto kosaqwikueyksqmw; } if ($yyimiwcuegayoskq->is(Constants::yayciqueeakqwese)) { goto gicyayswqyuoekcq; } if ($yyimiwcuegayoskq->is(Constants::gmmygyiecgmggaam, Constants::qgciomgukmcwscqw)) { goto iikiiioqiyegyaak; } if ($yyimiwcuegayoskq->is(Constants::gmmygyiecgmggaam, Constants::qeueagcuyogwwyky)) { goto uiosisocuwokwkie; } if ($yyimiwcuegayoskq->is(Constants::cwswygwykwgsqiwu, Constants::mswoacegomcucaik)) { goto cuumeogeomowqisc; } if ($yyimiwcuegayoskq->is(Constants::imywcsggckkcywgk)) { goto gcckqucukawcasgk; } goto ogqmesokykywseys; ykomgumacooyomsk: $egkyssmuqcwaciya = new WebSite($goiqeyeaqmicqiky); goto ogqmesokykywseys; mqkmcysgoiaouiwm: $egkyssmuqcwaciya = new Blog($goiqeyeaqmicqiky); goto ogqmesokykywseys; kosaqwikueyksqmw: $egkyssmuqcwaciya = new ProfilePage($goiqeyeaqmicqiky); goto ogqmesokykywseys; gicyayswqyuoekcq: $egkyssmuqcwaciya = new SearchResultsPage($goiqeyeaqmicqiky); goto ogqmesokykywseys; iikiiioqiyegyaak: $egkyssmuqcwaciya = new Category($goiqeyeaqmicqiky); goto ogqmesokykywseys; uiosisocuwokwkie: $egkyssmuqcwaciya = new Tag($goiqeyeaqmicqiky); goto ogqmesokykywseys; cuumeogeomowqisc: $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get(); $egkyssmuqcwaciya = new BlogPosting($post, $goiqeyeaqmicqiky); if (!$goiqeyeaqmicqiky) { goto awoaooyoeoyeeqee; } $egkyssmuqcwaciya = [$egkyssmuqcwaciya]; $cqicmuuwowywymew = (array) $this->ocksiywmkyaqseou("\x67\x65\164\x5f\146\x61\x71\137\x64\x61\164\x61", [], $post); if (!$cqicmuuwowywymew) { goto aomysykcgikegiau; } $egkyssmuqcwaciya[] = new FAQPage($cqicmuuwowywymew); aomysykcgikegiau: $omauuckqmiemgegq = (array) $this->ocksiywmkyaqseou("\147\x65\164\x5f\x68\x6f\x77\137\x74\x6f\137\x64\141\164\x61", [], $post); if (!$omauuckqmiemgegq) { goto cwwmimggaaecmucw; } $egkyssmuqcwaciya[] = new HowTo($omauuckqmiemgegq); cwwmimggaaecmucw: awoaooyoeoyeeqee: goto ogqmesokykywseys; gcckqucukawcasgk: $egkyssmuqcwaciya = new Article($goiqeyeaqmicqiky); ogqmesokykywseys: qmkaeeomgkwggoyo: if (isset($egkyssmuqcwaciya)) { goto csammceowmqwaamq; } $egkyssmuqcwaciya = new Thing($goiqeyeaqmicqiky); csammceowmqwaamq: return $egkyssmuqcwaciya; } }
