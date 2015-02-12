<?php

namespace Base\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Base\CoreBundle\Repository\WindFarmRepository;
use Base\CoreBundle\Repository\TurbineRepository;

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
                                                   'format' => 'dd-MM-yyyy',))
                ->add('exportEnd', 'date', array('input'  => 'datetime',
                                                 'widget' => 'single_text',
                                                 'format' => 'dd-MM-yyyy',))
                ->add('arrayId', 'textarea')
                ->add('windfarms', 'entity', array('class' => 'BaseCoreBundle:WindFarm',
                                                              'property' => 'nameAndId',
                                                              'multiple' => true,
                                                              'expanded' => true,
                                                   'query_builder' => function(WindFarmRepository $repo){
                                                    return $repo->getAllWindFarms();}
                                                    ))
                ->add('turbines', 'entity', array('class' => 'BaseCoreBundle:Turbine',
                                                             'property' => 'aliasAndId',
                                                             'multiple' => true,
                                                             'expanded' => true,
                                                   'query_builder' => function(TurbineRepository $repo){
                                                    return $repo->getAllTurbines();}
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
