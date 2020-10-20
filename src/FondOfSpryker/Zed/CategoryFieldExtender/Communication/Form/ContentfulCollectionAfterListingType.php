<?php

namespace FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form;

use Spryker\Zed\Kernel\Communication\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * @method \FondOfSpryker\Zed\CategoryFieldExtender\Communication\CategoryFieldExtenderCommunicationFactory getFactory()
 */
class ContentfulCollectionAfterListingType extends AbstractType
{
    public const FIELD_CONTENTFUL_COLLECTION_AFTER_LISTING = 'contentful_collection_after_listing';

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     *
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->addContentfulCollectionAfterListing($builder, $options);
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     *
     * @return $this
     */
    protected function addContentfulCollectionAfterListing(FormBuilderInterface $builder, array $options)
    {
        $builder->add(static::FIELD_CONTENTFUL_COLLECTION_AFTER_LISTING, TextType::class, [
            'required' => false,
        ]);

        return $this;
    }
}
