<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cb56fbc5c29             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData; use Pmpr\Common\Foundation\Data\PageInfo; use Pmpr\Module\StructuredData\Schema\CreativeWork\Article\Article; use Pmpr\Module\StructuredData\Schema\CreativeWork\Article\SocialMediaPosting\BlogPosting; use Pmpr\Module\StructuredData\Schema\CreativeWork\Blog; use Pmpr\Module\StructuredData\Schema\CreativeWork\HowTo; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebPage\FAQPage; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebPage\ProfilePage; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebPage\SearchResultsPage; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebPage\WebPage; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebSite; use Pmpr\Module\StructuredData\Schema\Custom\Category; use Pmpr\Module\StructuredData\Schema\Custom\Tag; use Pmpr\Module\StructuredData\Schema\Intangible\Brand; use Pmpr\Module\StructuredData\Schema\Thing; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebPageElement\WPFooter; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebPageElement\WPHeader; class Factory extends Container { public function create(string $sqeykgyoooqysmca) { switch ($sqeykgyoooqysmca) { case "\127\120\x48\145\x61\x64\x65\162": $egkyssmuqcwaciya = new WPHeader(); goto qiaqsassksqiuyae; case "\127\120\x46\x6f\157\x74\145\162": $egkyssmuqcwaciya = new WPFooter(); goto qiaqsassksqiuyae; case "\x42\x72\141\156\144": $egkyssmuqcwaciya = new Brand(); goto qiaqsassksqiuyae; case "\127\x65\x62\120\x61\x67\x65": $egkyssmuqcwaciya = new WebPage(); goto qiaqsassksqiuyae; default: $egkyssmuqcwaciya = $this->mwcosyumkyawcmyo(); goto qiaqsassksqiuyae; } qogqewiwmwiwskgm: qiaqsassksqiuyae: return $egkyssmuqcwaciya; } public function mwcosyumkyawcmyo(PageInfo $yyimiwcuegayoskq = null, $goiqeyeaqmicqiky = true) { if ($yyimiwcuegayoskq) { goto qgoiooayqmqqsiok; } $yyimiwcuegayoskq = $this->caokeucsksukesyo()->kyqakacqeumicgag()->iqoacwuiemooiysg(); qgoiooayqmqqsiok: if (!$yyimiwcuegayoskq instanceof PageInfo) { goto iomcaiwewsawiamu; } if ($yyimiwcuegayoskq->is(self::eycwiessycciwsao)) { goto cuykwgmswkskqkyi; } if ($yyimiwcuegayoskq->is(self::wwoeeogswkgeqack)) { goto kuicqywysciceggs; } if ($yyimiwcuegayoskq->is(self::iwascisiiokuackw)) { goto mkwskuycuyguqqok; } if ($yyimiwcuegayoskq->is(self::yayciqueeakqwese)) { goto sciwggaeogcoesiu; } if ($yyimiwcuegayoskq->is(self::gmmygyiecgmggaam, self::qgciomgukmcwscqw)) { goto eqkauqciwewmgeoi; } if ($yyimiwcuegayoskq->is(self::gmmygyiecgmggaam, self::qeueagcuyogwwyky)) { goto kwagwqyusyiyoaqs; } if ($yyimiwcuegayoskq->is(self::cwswygwykwgsqiwu, self::mswoacegomcucaik)) { goto yowsmsiyimmimemc; } if ($yyimiwcuegayoskq->is(self::imywcsggckkcywgk)) { goto kiqogmwcgcamwiig; } goto csscmcacoikwsecs; cuykwgmswkskqkyi: $egkyssmuqcwaciya = new WebSite($goiqeyeaqmicqiky); goto csscmcacoikwsecs; kuicqywysciceggs: $egkyssmuqcwaciya = new Blog($goiqeyeaqmicqiky); goto csscmcacoikwsecs; mkwskuycuyguqqok: $egkyssmuqcwaciya = new ProfilePage($goiqeyeaqmicqiky); goto csscmcacoikwsecs; sciwggaeogcoesiu: $egkyssmuqcwaciya = new SearchResultsPage($goiqeyeaqmicqiky); goto csscmcacoikwsecs; eqkauqciwewmgeoi: $egkyssmuqcwaciya = new Category($goiqeyeaqmicqiky); goto csscmcacoikwsecs; kwagwqyusyiyoaqs: $egkyssmuqcwaciya = new Tag($goiqeyeaqmicqiky); goto csscmcacoikwsecs; yowsmsiyimmimemc: $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get(); $egkyssmuqcwaciya = new BlogPosting($post, $goiqeyeaqmicqiky); if (!$goiqeyeaqmicqiky) { goto asmecuqiyyswueqe; } $egkyssmuqcwaciya = [$egkyssmuqcwaciya]; $cqicmuuwowywymew = (array) $this->ocksiywmkyaqseou("\x67\x65\164\137\x66\x61\x71\137\144\141\164\141", [], $post); if (!$cqicmuuwowywymew) { goto qwigomakwmyiwkgo; } $egkyssmuqcwaciya[] = new FAQPage($cqicmuuwowywymew); qwigomakwmyiwkgo: $omauuckqmiemgegq = (array) $this->ocksiywmkyaqseou("\147\x65\x74\137\x68\157\167\x5f\164\x6f\x5f\x64\x61\164\141", [], $post); if (!$omauuckqmiemgegq) { goto myoicgcuugciueis; } $egkyssmuqcwaciya[] = new HowTo($omauuckqmiemgegq); myoicgcuugciueis: asmecuqiyyswueqe: goto csscmcacoikwsecs; kiqogmwcgcamwiig: $egkyssmuqcwaciya = new Article($goiqeyeaqmicqiky); csscmcacoikwsecs: iomcaiwewsawiamu: if (isset($egkyssmuqcwaciya)) { goto sqiciiuwmykocycc; } $egkyssmuqcwaciya = new Thing($goiqeyeaqmicqiky); sqiciiuwmykocycc: return $egkyssmuqcwaciya; } }
