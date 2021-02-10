<?php

namespace FondOfSpryker\Zed\CategoryFieldExtender\Communication\Plugin;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\CategoryFieldExtender\Communication\CategoryFieldExtenderCommunicationFactory;
use FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form\CategoryContentTypeType;
use Symfony\Component\Form\FormBuilderInterface;

class CategoryContentTypeFormPluginTest extends Unit
{
    /**
     * @var \FondOfSpryker\Zed\CategoryFieldExtender\Communication\CategoryFieldExtenderCommunicationFactory|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $communicationFactoryMock;

    /**
     * @var \FondOfSpryker\Zed\CategoryFieldExtender\Communication\Plugin\CategoryContentTypePlugin
     */
    protected $plugin;

    /**
     * @var \Symfony\Component\Form\FormBuilder|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $formBuilderMock;

    /**
     * @var \FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form\CategoryContentTypeType|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $categoryContentTypeTypeMock;

    /**
     * @return void
     */
    protected function _before()
    {
        parent::_before();

        $this->communicationFactoryMock = $this->getMockBuilder(CategoryFieldExtenderCommunicationFactory::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->formBuilderMock = $this->getMockBuilder(FormBuilderInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->categoryContentTypeTypeMock = $this->getMockBuilder(CategoryContentTypeType::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->plugin = new CategoryContentTypePlugin();
        $this->plugin->setFactory($this->communicationFactoryMock);
    }

    /**
     * @return void
     */
    public function testBuildFormSuccess()
    {
        $this->communicationFactoryMock->expects($this->once())
            ->method('createCategoryContentTypeType')
            ->willReturn($this->categoryContentTypeTypeMock);

        $this->categoryContentTypeTypeMock->expects($this->once())
            ->method('buildForm')
            ->with($this->formBuilderMock, []);

        $this->plugin->buildForm($this->formBuilderMock);
    }
}
