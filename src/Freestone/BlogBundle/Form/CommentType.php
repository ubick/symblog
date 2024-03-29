<?php

namespace Freestone\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CommentType extends AbstractType {

    public function buildForm(FormBuilder $builder, array $options) {
        $builder
            ->add('user')
            ->add('comment')
        ;
    }

    public function getName() {
        return 'freestone_blogbundle_commenttype';
    }

}
