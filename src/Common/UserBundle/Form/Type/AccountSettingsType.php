<?php


namespace Common\UserBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolver;


class AccountSettingsType extends AbstractType
{

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'accountSettings';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', 'text', array(
                'label' => 'Nick',
                'required' => FALSE
            ))
            ->add('avatarFile', 'file', array(
                'label' => 'Zmień avatar',
                'required' => FALSE
            ))
            ->add('submit', 'submit', array(
                'label' => 'Zapisz zmiany'
            ));
    }
    //tu się ustawia, że ta klasa jest zdefiniowana, ten formularz jest zdefiniowany
    //dla encji ~Entity/User
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Common\UserBundle\Entity\User',
            //grupy validacji formularza jakie mają sie uruchmić
            //Default - jeśli nie ma grópy to jest default
            'validation_groups' => array('Default', 'ChangeDetails')
        ));
    }
}