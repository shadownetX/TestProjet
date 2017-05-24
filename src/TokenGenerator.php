<?php
/**
 * Created by PhpStorm.
 * User: thom
 * Date: 24/05/2017
 * Time: 11:45 AM
 */

namespace Tools\Generator;

/**
 * Class TokenGenerator
 * @package Tools\Generator
 * @version 1.0.0
 */
class TokenGenerator
{
    /**
     * @var bool Disable by default
     */
    protected $strong = false;

    /**
     * @var int Minimum length requirements
     */
    protected $length;

    /**
     * @var string Authorize characters
     */
    protected $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    /**
     * TokenGenerator constructor.
     * @param int $length
     */
    public function __construct(int $length = 6)
    {
        if ($length > 6) {
            $this->length = $length;
        } else {
            $this->length = 6;
        }
    }

    /**
     * @return string
     */
    public function MakeItHappenBabe()
    {
        $charactersLength = strlen($this->characters);

        $token = '';
        for ($i = 0; $i < $this->length; $i++) {
            $token .= $this->characters[rand(0, $charactersLength - 1)];
        }

        return (String)$token;
    }

}
