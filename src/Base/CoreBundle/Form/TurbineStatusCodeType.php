<?php

namespace Base\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Base\CoreBundle\Repository\WindFarmRepository;

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
                ->add('turbines', 'entity', array('class' => 'BaseCoreBundle:WindFarm',
                                                             'property' => 'name',
                                                             'multiple' => true,
                                                             'expanded' => true,
                                                   'query_builder' => function(WindFarmRepository $repo){
                                                    return $repo->getWindFarmsAndTurbines();}
                                                    ))
                ->add('save', 'submit');
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'turbineStatusCodeType';
    }
}
