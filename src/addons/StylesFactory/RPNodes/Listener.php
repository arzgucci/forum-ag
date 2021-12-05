<?php

namespace StylesFactory\RPNodes;

use XF\Mvc\Entity\Entity;

class Listener
{
    public static function nodeEntityStructure(\XF\Mvc\Entity\Manager $em, \XF\Mvc\Entity\Structure &$structure)
    {
        $structure->columns['iconca']   = ['type' => Entity::SERIALIZED_ARRAY,  'default' => ''];
		$structure->columns['catfor'] = ['type' => Entity::STR, 'default' => ''];
    }

    public static function templaterTemplatePostRender(\XF\Template\Templater $templater, $type, $template, &$output)
    {
        if ($template == 'customcategories.less')
        {
        }
    }
}