<?php
namespace Training\Test\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute() {
        $testConfig = $this->_objectManager->get('Training\Test\Model\Config\ConfigInterface');
        $myNodeInfo = $testConfig->getMyNodeInfo();
        if (is_array($myNodeInfo)) {
            foreach ($myNodeInfo as $info ) {
                $this->getResponse()->appendBody($info . "<br>");
            }
        }
    }
}