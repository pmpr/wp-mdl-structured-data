<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cb56fbc5c29             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork\Comment; use Pmpr\Module\StructuredData\Schema\CreativeWork\CreativeWork; use Pmpr\Module\StructuredData\Schema\Intangible\Rating\Rating; use Pmpr\Module\StructuredData\Schema\Person; class Comment extends CreativeWork { public function __construct($comment = null, $goiqeyeaqmicqiky = true) { if (!($goiqeyeaqmicqiky && $comment)) { goto ueigkucgaucgeimc; } $kuowggqsyksiyygi = $this->caokeucsksukesyo()->yagekskwwyqosqcs(); $qqyuqswckkcomeak = $this->ocksiywmkyaqseou("\x72\141\x74\151\x6e\147\137\x67\145\x74\x5f\166\x61\154\165\x65", [], $kuowggqsyksiyygi->cikwsikikwcmqwou($comment)); $aokagokqyuysuksm = $kuowggqsyksiyygi->iooowgsqoyqseyuu($comment); $this->oyecyiciiuqooyio(new Person($comment))->ykumikyaccuwocyw((new Rating())->squsoiakemiuoouq($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qqyuqswckkcomeak, self::yewgggaqoacewaai, 0))->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->ggiaseqygioygumq($aokagokqyuysuksm)))->ogoesumqawygewou($kuowggqsyksiyygi->squyiyimquqicqke($comment, "\x59\55\x6d\x2d\144\x20\x48\x3a\x69\x3a\x73", false))->gucwmccyimoagwcm($this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->ykgcioecqcwwkime($comment))->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($comment)->ggiaseqygioygumq($aokagokqyuysuksm)); ueigkucgaucgeimc: parent::__construct($goiqeyeaqmicqiky); } }
