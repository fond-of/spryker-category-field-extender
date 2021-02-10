<?php

namespace FondOfSpryker\Zed\CategoryFieldExtender\Communication\Plugin;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\CategoryFieldExtender\Communication\CategoryFieldExtenderCommunicationFactory;
use FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form\ContentfulCollectionBeforeListingType;
use Symfony\Component\Form\FormBuilderInterface;

class ContentfulCollectionBeforeListingPluginTest extends Unit
{
    /**
     * @var \FondOfSpryker\Zed\CategoryFieldExtender\Communication\CategoryFieldExtenderCommunicationFactory|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $communicationFactoryMock;

    /**
     * @var \FondOfSpryker\Zed\CategoryFieldExtender\Communication\Plugin\ContentfulCollectionBeforeListingTypePlugin
     */
    protected $plugin;

    /**
     * @var \Symfony\Component\Form\FormBuilder|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $formBuilderMock;

    /**
     * @var \FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form\ContentfulCollectionBeforeListingType|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $contentfulCollectionBeforeListingType;

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

        $this->contentfulCollectionBeforeListingType = $this->getMockBuilder(ContentfulCollectionBeforeListingType::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->plugin = new ContentfulCollectionBeforeListingTypePlugin();
        $this->plugin->setFactory($this->communicationFactoryMock);
    }

    /**
     * @return void
     */
    public function testBuildFormSuccess()
    {
        $this->communicationFactoryMock->expects($this->once())
            ->method('createContentfulCollectionBeforeListingType')
            ->willReturn($this->contentfulCollectionBeforeListingType);

        $this->contentfulCollectionBeforeListingType->expects($this->once())
            ->method('buildForm')
            ->with($this->formBuilderMock, []);

        $this->plugin->buildForm($this->formBuilderMock);
    }
}
