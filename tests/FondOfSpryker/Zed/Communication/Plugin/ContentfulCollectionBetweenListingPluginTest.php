<?php

namespace FondOfSpryker\Zed\CategoryFieldExtender\Communication\Plugin;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\CategoryFieldExtender\Communication\CategoryFieldExtenderCommunicationFactory;
use FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form\ContentfulCollectionBetweenListingType;
use Symfony\Component\Form\FormBuilderInterface;

class ContentfulCollectionBetweenListingPluginTest extends Unit
{
    /**
     * @var \FondOfSpryker\Zed\CategoryFieldExtender\Communication\CategoryFieldExtenderCommunicationFactory|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $communicationFactoryMock;

    /**
     * @var \FondOfSpryker\Zed\CategoryFieldExtender\Communication\Plugin\ContentfulCollectionBetweenListingTypePlugin
     */
    protected $plugin;

    /**
     * @var \Symfony\Component\Form\FormBuilder|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $formBuilderMock;

    /**
     * @var \FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form\ContentfulCollectionBetweenListingType|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $contentfulCollectionBetweenListingType;

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

        $this->contentfulCollectionBetweenListingType = $this->getMockBuilder(ContentfulCollectionBetweenListingType::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->plugin = new ContentfulCollectionBetweenListingTypePlugin();
        $this->plugin->setFactory($this->communicationFactoryMock);
    }

    /**
     * @return void
     */
    public function testBuildFormSuccess()
    {
        $this->communicationFactoryMock->expects($this->once())
            ->method('createContentfulCollectionBetweenListingType')
            ->willReturn($this->contentfulCollectionBetweenListingType);

        $this->contentfulCollectionBetweenListingType->expects($this->once())
            ->method('buildForm')
            ->with($this->formBuilderMock, []);

        $this->plugin->buildForm($this->formBuilderMock);
    }
}
