<?php

namespace CodingAvenue\LabadoBundle\Form;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
class EstimateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder,array $options)
    {
            $builder
            ->add('clothes_white', NumberType::class)
            ->add('clothes_colored',NumberType::Class)
            ->getForm();
    }
}
