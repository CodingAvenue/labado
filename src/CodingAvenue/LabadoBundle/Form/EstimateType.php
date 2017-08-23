<?php

namespace CodingAvenue\LabadoBundle\Form;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
class EstimateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder,array $options)
    {
        $builder;

            foreach($options['services'] as $service){
                $builder->add("{$service->getType()}",NumberType::class);
                
            }
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'services' => [],
        ));
    }
}
