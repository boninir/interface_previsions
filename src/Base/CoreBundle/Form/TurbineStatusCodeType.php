<?php

namespace Base\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TurbineStatusCodeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('exportBegin', 'date', array('input'  => 'datetime',
                                                   'widget' => 'single_text',
                                                   'format' => 'yyyy-MM-dd',))
                ->add('exportEnd', 'date', array('input'  => 'datetime',
                                                 'widget' => 'single_text',
                                                 'format' => 'yyyy-MM-dd',))
                ->add('arrayId', 'textarea')
                ->add('turbines', 'entity', array('class' => 'BaseCoreBundle:Turbine',
                                                             'property' => 'name',
                                                             'multiple' => true,
                                                             'expanded' => true))
                ->add('save', 'submit');
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'base_corebundle_turbineStatusCodeType';
    }
}
