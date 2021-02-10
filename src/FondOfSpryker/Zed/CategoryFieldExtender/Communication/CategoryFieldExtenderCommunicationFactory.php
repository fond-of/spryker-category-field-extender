<?php

namespace FondOfSpryker\Zed\CategoryFieldExtender\Communication;

use FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form\AltTitleType;
use FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form\BodyClassType;
use FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form\CategoryContentTypeType;
use FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form\ContentfulCollectionAfterListingType;
use FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form\ContentfulCollectionBeforeListingType;
use FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form\ContentfulCollectionBetweenListingType;
use FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form\ContentfulContentCollectionType;
use FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form\ContentfulFilterType;
use FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form\ContentfulHeroType;
use FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form\LocalizedAttributesCollectionType;
use FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form\PageType;
use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;
use Symfony\Component\Form\AbstractType;

class CategoryFieldExtenderCommunicationFactory extends AbstractCommunicationFactory
{
    /**
     * @return \Symfony\Component\Form\AbstractType
     */
    public function createPageType(): AbstractType
    {
        return new PageType();
    }

    /**
     * @return \Symfony\Component\Form\AbstractType
     */
    public function createBodyClassType(): AbstractType
    {
        return new BodyClassType();
    }

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
    public function createAltTitleType(): AbstractType
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

    /**
     * @return \Symfony\Component\Form\AbstractType
     */
    public function createContentfulCollectionBeforeListingType(): AbstractType
    {
        return new ContentfulCollectionBeforeListingType();
    }

    /**
     * @return \Symfony\Component\Form\AbstractType
     */
    public function createContentfulCollectionAfterListingType(): AbstractType
    {
        return new ContentfulCollectionAfterListingType();
    }

    /**
     * @return \Symfony\Component\Form\AbstractType
     */
    public function createContentfulCollectionBetweenListingType(): AbstractType
    {
        return new ContentfulCollectionBetweenListingType();
    }
}
