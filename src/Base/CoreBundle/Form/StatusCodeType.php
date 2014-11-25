<?php

namespace Base\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class StatusCodeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('exportBegin', 'date', array('input'  => 'datetime',
                                                   'widget' => 'single_text',
                                                   'format' => 'yyyy-MM-dd',
                                                   'attr' => array('class' => 'datepicker')))
                ->add('exportEnd', 'date', array('input'  => 'datetime',
                                                 'widget' => 'single_text',
                                                 'format' => 'yyyy-MM-dd',));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'base_corebundle_statusCodeType';
    }
}
