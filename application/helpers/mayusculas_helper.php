<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('mayusculas()')) {

   function mayusculas($cadena)
    {
        return strtoupper($cadena);
    }

}