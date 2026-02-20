<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6998d80e39a30             |
    |_______________________________________|
*/
 namespace Pmpr\Module\SMS; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\SMS\Provider\Kavenegar\Kavenegar; use Pmpr\Module\SMS\Provider\Provider; use Pmpr\Module\SMS\Provider\Kavenegar\Setting as KavenegarSetting; class AbstractSMS extends Container { const kuqegimyiaaekcmu = 'kavenegar'; public function kgquecmsgcouyaya() { } public function kkcowsyecqiosuko(string $ymqmyyeuycgmigyo) { $iwigiqwyskocowwo = null; switch ($ymqmyyeuycgmigyo) { case self::kuqegimyiaaekcmu: $iwigiqwyskocowwo = Kavenegar::symcgieuakksimmu(); break; } return $iwigiqwyskocowwo; } public function iaeokaqouwueecay() : array { $ukiskwsmqscwauuu = [self::kuqegimyiaaekcmu => __('Kavenegar', PR__MDL__SMS)]; return $ukiskwsmqscwauuu; } public function msisgqgeeuwciisi() : array { $ggaowqgmacwmiyua = SMS::symcgieuakksimmu(); $ukiskwsmqscwauuu = [self::kuqegimyiaaekcmu => $ggaowqgmacwmiyua->weysguygiseoukqw(KavenegarSetting::eguswweskcoewesq, [], [Constants::uissasisiuymwsmu => Constants::qescuiwgsyuikume, Constants::aisguagukaewucii => Constants::emgcgiseaoouacge])]; return $ukiskwsmqscwauuu; } }
