<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5eca5e30b3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork\WebPage; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\StructuredData\Schema\CreativeWork\MediaObject\ImageObject; use Pmpr\Module\StructuredData\Schema\Person; class ProfilePage extends WebPage { public function __construct($goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto wwkgkaecgiwggcck; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gsqycqmccqgwosck = $this->uwkmaywceaaaigwo()->mguqscccckuywsya(); $post = $seumokooiykcomco->get(); $qscaoekmoooeuyqg = $seumokooiykcomco->mguqscccckuywsya($post); $this->kwcomqeygmcaegeo(sprintf(__("\x41\142\x6f\x75\x74\40\x25\x73", PR__MDL__STRUCTURED_DATA), $gsqycqmccqgwosck->get()))->keogoququwauweom((new Person())->mwiamauscyiwogsu(new ImageObject())->gucwmccyimoagwcm($gsqycqmccqgwosck->igawqaomowicuayw(Constants::eqkeooqcsscoggia)))->eyqkogeiqauioamw(esc_url($gsqycqmccqgwosck->mkaiaewoyaimieqg($qscaoekmoooeuyqg)))->iaqckqwoiseyqaku(); wwkgkaecgiwggcck: parent::__construct($goiqeyeaqmicqiky); } }
