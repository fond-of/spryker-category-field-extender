<?php

namespace FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form;

use Spryker\Zed\Kernel\Communication\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * @method \FondOfSpryker\Zed\CategoryFieldExtender\Communication\CategoryFieldExtenderCommunicationFactory getFactory()
 */
class CategoryContentTypeType extends AbstractType
{
    public const FIELD_CONTENT_TYPE = 'content_type';

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     *
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->addContentType($builder, $options);
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     *
     * @return $this
     */
    protected function addContentType(FormBuilderInterface $builder, array $options)
    {
        $builder->add(static::FIELD_CONTENT_TYPE, TextType::class, [
            'required' => false,
        ]);

        return $this;
    }
}
