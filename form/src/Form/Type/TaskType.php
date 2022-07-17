<?php
// src/Form/Type/TaskType.php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('task', TextType::class,[
                'label' => 'Görev adı: ',
            ])
            ->add('dueDate', DateType::class,[
                'label' => 'Tarih: ',
            ])
            ->add('save', SubmitType::class,[
                'label' => 'Kaydet: ',
            ])
        ;
    }
}