<?php

namespace Base\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('subject', 'text')
                ->add('body', 'textarea')
                ->add('save', 'submit');
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'contact';
    }
}
