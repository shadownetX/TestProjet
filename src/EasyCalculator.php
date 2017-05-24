<?php
/**
 * Created by PhpStorm.
 * User: thom
 * Date: 24/05/2017
 * Time: 11:55 AM
 */

namespace Tools\Calculator;

/**
 * Class EasyCalculator
 * @package Tools\Calculator
 * @version 1.0.0
 */
class EasyCalculator
{
    /**
     * @param int $ref1
     * @param int $ref2
     * @return int Equations complexes de type 4 + 2
     */
    public static function ajouter(int $ref1, int $ref2)
    {
        $result = $ref1 + $ref2;
        return (int)$result;
    }

    /**
     * @param int $ref1
     * @param int $ref2
     * @return int  Equations complexes de type 4 - 2
     */
    public static function soustraire(int $ref1, int $ref2)
    {
        $result = $ref1 - $ref2;
        return (int)$result;
    }

    /**
     * @param int $ref1
     * @param int $ref2
     * @return int  Equations complexes de type 4 * 2
     */
    public static function multiplier(int $ref1, int $ref2)
    {
        $result = $ref1 * $ref2;
        return (int)$result;
    }

    /**
     * @param int $ref1
     * @param int $ref2
     * @return int|string  Equations complexes de type 4 / 2
     */
    public static function diviser(int $ref1, int $ref2)
    {
        if ($ref2 <> 0) {
            $result = $ref1 / $ref2;
            return (int)$result;
        } else {
            return "Nous ne pouvons pas diviser par 0";
        }
    }
}
