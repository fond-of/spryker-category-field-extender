<?php

namespace FondOfSpryker\Zed\CategoryFieldExtender\Communication;

use FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form\AltTitleType;
use FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form\CategoryContentTypeType;
use FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form\ContentfulContentCollectionType;
use FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form\ContentfulFilterType;
use FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form\ContentfulHeroType;
use FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form\LocalizedAttributesCollectionType;
use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;
use Symfony\Component\Form\AbstractType;

class CategoryFieldExtenderCommunicationFactory extends AbstractCommunicationFactory
{
    /**
     * @return \Symfony\Component\Form\AbstractType
     */
    public function createCategoryContentTypeType(): AbstractType
    {
        return new CategoryContentTypeType();
    }

    /**
     * @return \Symfony\Component\Form\AbstractType
     */
    public function createContentfulHeroType(): AbstractType
    {
        return new ContentfulHeroType();
    }

    /**
     * @return \Symfony\Component\Form\AbstractType
     */
    public function createContentfulFilterType(): AbstractType
    {
        return new ContentfulFilterType();
    }

    /**
     * @return \Symfony\Component\Form\AbstractType
     */
    public function createContentfulContentCollectionType(): AbstractType
    {
        return new ContentfulContentCollectionType();
    }

    /**
     * @return \Symfony\Component\Form\AbstractType
     */
    public function createAltTitle(): AbstractType
    {
        return new AltTitleType();
    }

    /**
     * @return \Symfony\Component\Form\AbstractType
     */
    public function createLocalizedAttributesCollectionType(): AbstractType
    {
        return new LocalizedAttributesCollectionType();
    }
}
