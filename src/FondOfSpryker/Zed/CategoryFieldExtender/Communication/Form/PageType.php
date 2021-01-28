<?php

namespace FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form;

use Spryker\Zed\Kernel\Communication\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * @method \FondOfSpryker\Zed\CategoryFieldExtender\Communication\CategoryFieldExtenderCommunicationFactory getFactory()
 */

class PageType extends AbstractType
{
    public const FIELD_PAGE_TYPE = 'page_type';

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     *
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->addPageType($builder, $options);
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     *
     * @return $this
     */
    protected function addPageType(FormBuilderInterface $builder, array $options)
    {
        $builder->add(static::FIELD_PAGE_TYPE, TextType::class, [
            'required' => false,
        ]);

        return $this;
    }
}
