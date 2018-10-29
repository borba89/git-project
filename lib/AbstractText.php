<?php
/**
 * Created by PhpStorm.
 * User: boris
 * Date: 25.10.18
 * Time: 20:52
 */

namespace Vendor\Text;


abstract class AbstractText
{
    /**
     * @var string $text
     */

    protected $text;

    /**
     * AbstractText constructor.
     * @param $text
     */

    public function __construct($text)
    {
        $this->text = $text;
    }

    /**
     * @param $text
     */

    protected function filterText($text)
    {
    }
}