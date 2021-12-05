<?php

namespace StylesFactory\RPNodes;

class Handler
{
    public static function nodeAddEdit(\XF\Entity\Node $node, &$reply)
    {
        if ($reply instanceof \XF\Mvc\Reply\View)
        {
            if (!$node->iconca)
            {
                $node->normalicon();
            }
            if ($node->changer())
            {
                $node->changetonew();
            }
        }
    }

    public static function nodeSaveProcess(\XF\Admin\Controller\AbstractController $controller, \XF\Entity\Node $node, \XF\Mvc\FormAction &$form)
    {
        $backconfig   = $controller->filter([
            'mybackground'  => array('filtersetting'=>'str'),
			'widthcontroller'  => array('filtersetting'=>'str')
        ]);
		
        $form->setup(function() use ($node, $backconfig)
        {
            $node->iconca   = $backconfig;
        });
    }
}