<?php

namespace CoffeeStats\Bundle\CoffeeStatsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CoffeeAddType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('stock', 'integer', array(
                'label' => false,
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        
    }
    
    public function getParent() {
        return 'form';
    }
    
    public function getName()
    {
        return 'coffee_add';
    }
}
