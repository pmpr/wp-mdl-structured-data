<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624c0d9d51a29             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork\Article\SocialMediaPosting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Module\StructuredData\Schema\CreativeWork\Comment\Comment; use Pmpr\Module\StructuredData\Schema\CreativeWork\MediaObject\ImageObject; use Pmpr\Module\StructuredData\Schema\Organization\Organization; use Pmpr\Module\StructuredData\Schema\Person; use WP_Comment; class BlogPosting extends SocialMediaPosting { public function __construct($post = null, $goiqeyeaqmicqiky = true) { if (!($post && $goiqeyeaqmicqiky)) { goto cscusseysqygsoiy; } $qscaoekmoooeuyqg = $this->sscegwueamckwmcy("\x63\141\x6e\137\163\150\x6f\167\137\141\165\x74\150\x6f\x72\x5f\151\156\x5f\160\157\x73\164\x5f\x73\x69\x6e\147\154\145", false) ? new Person($post) : new Organization(); $kmmywmgcgwceeqii = ManipulatePost::weescwwgqgiyumyw($post, "\x70\x6f\x73\164\x5f\x74\141\147", [self::ymckmcsiymwqucoq => "\x6e\141\x6d\145\163"]); $this->ywssmgkikwksokge($kmmywmgcgwceeqii)->oyecyiciiuqooyio($qscaoekmoooeuyqg)->mwiamauscyiwogsu(new ImageObject($post))->wieaiquucwakewgy($this->ueqesykkqeaeeoyg($post))->owykoqcycwauuioo(ManipulatePost::ymgsgecsiqeegseg($post)); cscusseysqygsoiy: parent::__construct($goiqeyeaqmicqiky); } private function ueqesykkqeaeeoyg($post) { $kcagcoeuiasswusq = []; $wueaugmymmoawukq = ManipulatePost::waoeigwigksoikgu($post, ["\x73\x74\x61\x74\165\x73" => "\141\160\x70\162\157\x76\145", "\x74\171\x70\x65" => "\143\157\155\x6d\145\156\164"]); if (!is_array($wueaugmymmoawukq)) { goto cgyakcqgugqgkqiw; } foreach ($wueaugmymmoawukq as $uusmaiomayssaecw => $aqqmosqmsuueyaes) { if (!$aqqmosqmsuueyaes instanceof WP_Comment) { goto uegouoiuyoqkcscg; } $kcagcoeuiasswusq[] = new Comment($aqqmosqmsuueyaes); uegouoiuyoqkcscg: mggeqkcksyaymcsa: } isgwkwacoyimiauk: cgyakcqgugqgkqiw: return $kcagcoeuiasswusq; } }