<?php

namespace Base\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Base\CoreBundle\Repository\WindFarmRepository;
use Base\CoreBundle\Repository\TurbineRepository;

class WindFarmType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
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
                                                    ));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            // 'data_class' => 'Base\CoreBundle\Entity\WindFarm'
            'data_class' => NULL
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'windfarm';
    }
}
