<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             682fc6d5edd15             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork\Article\SocialMediaPosting; use Pmpr\Module\StructuredData\Schema\CreativeWork\Comment\Comment; use WP_Comment; class BlogPosting extends SocialMediaPosting { public function eywiwyaeicqsgykc($kcagcoeuiasswusq) : array { $qsqwqsymmqeoqwcu = []; if (is_array($kcagcoeuiasswusq)) { foreach ($kcagcoeuiasswusq as $comment) { if ($comment instanceof WP_Comment) { $qsqwqsymmqeoqwcu[] = new Comment(); } } } return $qsqwqsymmqeoqwcu; } }
