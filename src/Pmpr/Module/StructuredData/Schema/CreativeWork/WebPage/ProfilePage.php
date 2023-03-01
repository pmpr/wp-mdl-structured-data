<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ff96da26438             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork\WebPage; use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Module\StructuredData\Schema\CreativeWork\MediaObject\ImageObject; use Pmpr\Module\StructuredData\Schema\Person; class ProfilePage extends WebPage { public function __construct($goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto ugqwuugsweqgmywk; } $post = ManipulatePost::get(); $qscaoekmoooeuyqg = ManipulatePost::mguqscccckuywsya($post); $this->kwcomqeygmcaegeo(sprintf(__("\101\x62\157\x75\164\40\45\163", PR__MDL__STRUCTURED_DATA), DecoratorAuthor::get()))->keogoququwauweom((new Person())->mwiamauscyiwogsu(new ImageObject())->gucwmccyimoagwcm(DecoratorAuthor::igawqaomowicuayw(self::eqkeooqcsscoggia)))->eyqkogeiqauioamw(esc_url(DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg)))->iaqckqwoiseyqaku(); ugqwuugsweqgmywk: parent::__construct($goiqeyeaqmicqiky); } }
