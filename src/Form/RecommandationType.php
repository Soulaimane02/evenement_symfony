<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Karser\Recaptcha3Bundle\Form\Recaptcha3Type;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3;

class RecommandationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder 

            ->add('email', null, ['label' => 'Adresse email'])
            ->add('lieu', null, ['label' => 'Lieu'])
            ->add('description', TextareaType::class, [
                'label' => 'Description de l\'événement',
                'attr' => [
                    'rows' => 6, // Nombre de lignes
                    'cols' => 40, // Nombre de colonnes
                ]
            ])
            ->add('envoyer', SubmitType::class, ['label' => 'Envoyer'])
            ->add('captcha', Recaptcha3Type::class, [
                'constraints' => new Recaptcha3(),
                'action_name' => 'homepage',
            ])
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
