<?php
namespace Training\Test\Model\Config;

class Converter implements \Magento\Framework\Config\ConverterInterface
{
    public function convert($source)
    {
        $output = [];

        foreach ($source->getElementsByTagName('mydone') as $node ) {
            $output[] = $node->textContent;
        }
        return $output;
    }
}