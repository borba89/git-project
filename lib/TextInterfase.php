<?php
/**
 * Created by PhpStorm.
 * User: boris
 * Date: 25.10.18
 * Time: 22:01
 */

namespace Vendor\Text;


interface TextInterfase
{

    /**
     * @return mixed
     */

    public function getText();

    /**
     * @param $text
     * @return mixed
     */

    public function setText($text);
}