<?php
namespace Mageplaza\HelloWorld\Setup\Patch\Data;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
class UpgradeData implements UpgradeDataInterface
{
    protected $_postFactory;
    public function __construct(\Mageplaza\HelloWorld\Model\PostFactory $postFactory)
    {
        $this->_postFactory = $postFactory;
    }
    
}
