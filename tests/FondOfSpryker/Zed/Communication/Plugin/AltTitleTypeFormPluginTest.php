<?php

namespace FondOfSpryker\Zed\CategoryFieldExtender\Communication\Plugin;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\CategoryFieldExtender\Communication\CategoryFieldExtenderCommunicationFactory;
use FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form\AltTitleType;
use Symfony\Component\Form\FormBuilderInterface;

class AltTitleTypeFormPluginTest extends Unit
{
    /**
     * @var \FondOfSpryker\Zed\CategoryFieldExtender\Communication\CategoryFieldExtenderCommunicationFactory|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $communicationFactoryMock;

    /**
     * @var \FondOfSpryker\Zed\CategoryFieldExtender\Communication\Plugin\AltTitleTypePlugin
     */
    protected $plugin;

    /**
     * @var \Symfony\Component\Form\FormBuilder|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $formBuilderMock;

    /**
     * @var \FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form\AltTitleType|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $categoryAltTypeMock;

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

        $this->categoryAltTypeMock = $this->getMockBuilder(AltTitleType::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->plugin = new AltTitleTypePlugin();
        $this->plugin->setFactory($this->communicationFactoryMock);
    }

    /**
     * @return void
     */
    public function testBuildFormSuccess()
    {
        $this->communicationFactoryMock->expects($this->once())
            ->method('createAltTitleType')
            ->willReturn($this->categoryAltTypeMock);

        $this->categoryAltTypeMock->expects($this->once())
            ->method('buildForm')
            ->with($this->formBuilderMock, []);

        $this->plugin->buildForm($this->formBuilderMock);
    }
}
