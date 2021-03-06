<?php

namespace FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form;

use Spryker\Zed\Kernel\Communication\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * @method \FondOfSpryker\Zed\CategoryFieldExtender\Communication\CategoryFieldExtenderCommunicationFactory getFactory()
 */
class ContentfulCollectionBeforeListingType extends AbstractType
{
    public const FIELD_CONTENTFUL_COLLECTION_BEFORE_LISTING = 'contentful_collection_before_listing';

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     *
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->addContentfulCollectionBeforeListing($builder, $options);
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     *
     * @return $this
     */
    protected function addContentfulCollectionBeforeListing(FormBuilderInterface $builder, array $options)
    {
        $builder->add(static::FIELD_CONTENTFUL_COLLECTION_BEFORE_LISTING, TextType::class, [
            'required' => false,
        ]);

        return $this;
    }
}
