<?php
/**
 * Created by PhpStorm.
 * User: boris
 * Date: 25.10.18
 * Time: 20:44
 */

namespace Vendor\Text;


class Text extends AbstractText implements TextInterfase
{
    /**
     * @var string $fullText;
     */

    private $fullText;

    /**
     * Text constructor.
     * @param $text
     */

    public function __construct($text)
    {
        parent::__construct($text);
    }

    /**
     * @return string
     */

    public function getText()
    {
        return $this->fullText;
    }

    /**
     * @param $fullText
     * @return mixed
     */

    public function setText($fullText)
    {
        $this->fullText = $fullText;
    }

    /**
     * @param $text
     */

    private function addText($text)
    {
        return parent::filterText($text);
    }

    private function updateText()
    {
    }

    private function deleteText()
    {
    }



}