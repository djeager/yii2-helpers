<?php
/**
 * @author Alexander Tarasyuk <djeager404@gmail.com>
 * @version 1.0
 * Project name diamant1.local.
 * Date: 28.12.2017
 * Time: 15:31
 */

namespace djeager\helpers;


class UrlHelper
{
    public static function addSufix($url, $sufix)
    {
        $name = pathinfo($url, PATHINFO_FILENAME);
        return str_replace($name, $name . $sufix, $url);
    }
}