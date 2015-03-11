<?php
/**
 * Created by PhpStorm.
 * User: ssss
 * Date: 26.02.15
 * Time: 17:31
 */

namespace Air\BlogBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentType extends AbstractType{

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'comment';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('comment', 'textarea', array(
            'label' => 'Komentarz'
        ))
            ->add('save', 'submit', array(
                'label' => 'Dodaj'
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Air\BlogBundle\Entity\Comment',
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            // a unique key to help generate the secret token
            'intention'       => 'task_item',
        ));
    }
}