<?php

if( !function_exists('normalize_phone') ) {
    /**
     *
     * Normalize a phone number (with or without country code)
     *
     * @param $phone
     * @return string
     */
    function normalize_phone($phone)
    {
        $phone = preg_replace('/\D/', '', $phone);
        return (strlen($phone) > 10) ? $phone : (getenv('PHONE_DEFAULT_COUNTRY_CODE') ?: '91') . $phone;
    }
}
