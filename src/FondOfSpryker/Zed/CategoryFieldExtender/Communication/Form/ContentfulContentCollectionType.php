<?php

namespace FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form;

use Spryker\Zed\Kernel\Communication\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * @method \FondOfSpryker\Zed\CategoryFieldExtender\Communication\CategoryFieldExtenderCommunicationFactory getFactory()
 */
class ContentfulContentCollectionType extends AbstractType
{
    public const FIELD_CONTENTFUL_CONTENT_COLLECTION = 'contentful_content_collection';

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     *
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->addContentfulContentCollection($builder, $options);
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     *
     * @return $this
     */
    protected function addContentfulContentCollection(FormBuilderInterface $builder, array $options)
    {
        $builder->add(static::FIELD_CONTENTFUL_CONTENT_COLLECTION, TextType::class, [
            'required' => false,
        ]);

        return $this;
    }
}
