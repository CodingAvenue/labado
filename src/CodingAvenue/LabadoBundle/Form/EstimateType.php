<?php

namespace CodingAvenue\LabadoBundle\Form;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EstimateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        foreach($options['services'] as $index => $service) {
            $builder->add("service".$index, IntegerType::class, ['required' => false]);
        }
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'services' => [],
        ]);
    }
}
