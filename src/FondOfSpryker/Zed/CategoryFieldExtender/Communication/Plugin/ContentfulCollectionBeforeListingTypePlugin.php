<?php

namespace FondOfSpryker\Zed\CategoryFieldExtender\Communication\Plugin;

use Spryker\Zed\CategoryExtension\Dependency\Plugin\CategoryFormPluginInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * @method \FondOfSpryker\Zed\CategoryFieldExtender\Communication\CategoryFieldExtenderCommunicationFactory getFactory()
 */
class ContentfulCollectionBeforeListingTypePlugin extends AbstractPlugin implements CategoryFormPluginInterface
{
    /**
     * Specification:
     * - Add form parts to the main form builder.
     *
     * @api
     *
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     *
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder): void
    {
        $formType = $this->getFactory()
            ->createContentfulCollectionBeforeListingType();

        $formType->buildForm($builder, []);
    }
}
