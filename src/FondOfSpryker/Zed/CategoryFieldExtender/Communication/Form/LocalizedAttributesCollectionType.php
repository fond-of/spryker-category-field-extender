<?php


namespace FondOfSpryker\Zed\CategoryFieldExtender\Communication\Form;

use Spryker\Zed\Category\Communication\Form\CategoryLocalizedAttributeType;
use Spryker\Zed\Kernel\Communication\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Spryker\Zed\Category\Communication\Form\CategoryType;

class LocalizedAttributesCollectionType extends AbstractType
{
    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     *
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->addLocalizedAttributeAltTitle($builder, $options);
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     *
     * @return $this
     */
    protected function addLocalizedAttributeAltTitle(FormBuilderInterface $builder)
    {
        $builder->add(CategoryType::FIELD_LOCALIZED_ATTRIBUTES, CollectionType::class, [
            'entry_type' => AltTitleType::class,
        ]);

        return $this;
    }
}
