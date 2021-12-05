<?php
namespace StylesFactory\RPNodes\XF\Admin\Controller;

class Category extends XFCP_Category
{
    protected function nodeSaveProcess(\XF\Entity\Node $node)
    {
        $form = parent::nodeSaveProcess($node);

        $input = $this->filter([
            'node' => [
                'catfor' => 'str'
            ]
        ]);

        $url = $input['node']['catfor'];

        $form->setup(function() use ($node, $url)
        {
            $node->catfor = $url;
        });

        return $form;
    }
}