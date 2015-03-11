<?php
/**
 * Created by PhpStorm.
 * User: ssss
 * Date: 24.02.15
 * Time: 19:47
 */

namespace Common\UserBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;


class ChangePasswordType extends AbstractType{

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'changePassword';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('currentPassword', 'password', array(
            'label' => 'Aktualne hasło',
            'mapped' => false,
            'constraints' => array(
                new UserPassword(array(
                    'message' => 'Podano błędne aktualne hasło'
                ))
            )
        ))
            ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'first_options' => array(
                    'label' => 'Nowe hasło'
                ),
                'second_options' => array(
                    'label' => 'Powtórz hasło'
                )
            ))
            ->add('submit', 'submit', array(
                'label' => 'Zmień hasło'
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver ->setDefaults(array(
            'data_class' => 'Common\UserBundle\Entity\User',
            'validation_groups' => array('Default', 'ChangePassword')
        ));
    }
}