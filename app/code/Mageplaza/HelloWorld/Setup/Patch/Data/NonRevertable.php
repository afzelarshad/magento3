<?php
namespace Mageplaza\HelloWorld\Setup\Patch\Data;


use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class NonRevertable implements DataPatchInterface{
    /**
     * @var ModuleDataSetupInterface $moduleDataSetup
     */
    private $moduleDataSetup;
    /**
     * @param ModuleDataSetupInterface $moduleDataSetup
     */
    public function __construct(ModuleDataSetupInterface $moduleDataSetup){
        $this->moduleDataSetup = $moduleDataSetup;
    }
    /**
     * Do Upgrade
     * @return void
     */
    public function apply(){
        $data = ['author_name' => 'Matin Rahman', 'email' => 'matinict@gmail.com','description' => 'Declarative insert'];
        $this->moduleDataSetup->getConnection()->insert('aa_helloworld', $data);
        $data = ['author_name' => 'Afzel', 'email' => 'afzalarshd@gmail.com','description' => 'Declarative insert'];
        $this->moduleDataSetup->getConnection()->insert('aa_helloworld', $data);
    }
    /**
     * {@inheritdoc}
     */
    public function getAliases(){
        return [];
    }
    /**
     * {@inheritdoc}
     */
    public static function getDependencies(){
        return [];
    }
}
