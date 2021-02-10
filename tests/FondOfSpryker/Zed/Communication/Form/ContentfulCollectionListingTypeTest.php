<?php

namespace FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form;

use Codeception\Test\Unit;
use Symfony\Component\Form\FormBuilderInterface;

class ContentfulCollectionListingTypeTest extends Unit
{
    /**
     * @var \Symfony\Component\Form\FormBuilder|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $formBuilderMock;

    /**
     * @var \Symfony\Component\Form\AbstractType
     */
    protected $type;

    /**
     * @return void
     */
    protected function _before(): void
    {
        parent::_before();

        $this->formBuilderMock = $this->getMockBuilder(FormBuilderInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->type = new ContentfulContentCollectionType();
    }

    /**
     * @return void
     */
    public function testBuildForm(): void
    {
        $this->formBuilderMock->expects($this->atLeastOnce())
            ->method('add');

        $this->type->buildForm($this->formBuilderMock, []);
    }
}
