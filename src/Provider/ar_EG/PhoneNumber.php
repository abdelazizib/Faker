<?php

namespace Faker\Provider\ar_EG;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $codes = [10, 11, 12, 15];

    protected static $numberFormats = [
        '########',
        '####-####',
    ];
    /**
     * @see https://ar.wikipedia.org/wiki/%D8%A3%D8%B1%D9%82%D8%A7%D9%85_%D8%A7%D9%84%D9%87%D8%A7%D8%AA%D9%81_%D9%81%D9%8A_%D9%85%D8%B5%D8%B1
     */
    protected static $mobileFormats = [
        '+20{{code}}{{numberFormat}}',
        '20{{code}}{{numberFormat}}',
        '0{{code}} {{numberFormat}}',
        '0{{code}}{{numberFormat}}'
    ];

    public function mobileNumber()
    {
        return static::numerify($this->generator->parse(static::randomElement(static::$mobileFormats)));
    }

    public function code()
    {
        return static::randomElement(static::$codes);
    }

    public function numberFormat()
    {
        return static::randomElement(static::$numberFormats);
    }
}
