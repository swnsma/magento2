<?php
namespace Training\Test\Controller\Product;

class View {
    public function beforeExecute()
    {
        echo "BEFORE"; exit;
    }

    public function afterExecute()
    {
        echo "AFTER"; exit;
    }
}
