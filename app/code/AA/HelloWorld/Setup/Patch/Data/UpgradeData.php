<?php
namespace AA\HelloWorld\Setup\Patch\Data;
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
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		if (version_compare($context->getVersion(), '1.2.0', '<')) {
			$data = [
				'author_name'         => "Magento 2 Events",
				'email' => "afzal@afzal",
				'description'      => '/magento-2-module-development/magento-2-events.html',
			];
			$post = $this->_postFactory->create();
			$post->addData($data)->save();
		}
	}
}
