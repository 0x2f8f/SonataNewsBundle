<?php

/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bundle\NewsBundle\Admin;

use Bundle\BaseApplicationBundle\Admin\Admin;

use Application\NewsBundle\Entity\Comment;

class CommentAdmin extends Admin
{

    protected $class = 'Application\\NewsBundle\\Entity\\Comment';

    protected $list_fields = array(
        'name' => array('identifier' => true),
        'getStatusCode' => array('label' => 'status_code'),
        'post',
        'email',
        'url',
        'message',
    );

    protected $form_fields = array(
        'name',
        'email',
        'url',
        'message',
        'post',
        'status' => array('type' => 'choice'),
    );

    protected $base_route = 'news_comment_admin';

    // don't know yet how to get this value
    protected $base_controller_name = 'NewsBundle:CommentAdmin';

    public function configureFormFields()
    {
        $this->form_fields['status']['options'] = array(
            'choices' => Comment::getStatusList(),
            'expanded' => true
        );
    }
}