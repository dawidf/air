<?php
/**
 * Created by PhpStorm.
 * User: ssss
 * Date: 23.02.15
 * Time: 18:26
 */

namespace Common\UserBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegisterUserType extends AbstractType{

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'userRegister';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', 'email', array(
            'label' => 'E-mail'
            ))
            ->add('username', 'text', array(
              'label' => 'Nick'
            ))
            ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'first_options' => array(
                    'label'=>'Hasło'
                ),
                'second_options' => array(
                    'label'=>'Powtórz hasło'
                )

            ))
            ->add('submit', 'submit', array(
                'label' => 'Zarejestruj'
            ));
    }

    //Tu jest dla kogo jest przypisany ten formularz, czyli dla Encij User
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'=> 'Common\UserBundle\Entity\User',
            'validation_groups' => array('Default', 'Registration')
        ));
    }
}