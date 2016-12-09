<?php

namespace App\Libraries;

use Twig_Extension;
use Twig_SimpleFunction;
use Collective\Html\FormBuilder;

class TwigExtension extends Twig_Extension
{
    private $form_builder;

    public function __construct()
    {
        $app = app();
        $this->form_builder = new FormBuilder($app['html'], $app['url'], $app['view'], $app['session.store']->getToken());
    }

    /**
     * {@inheritdoc}
     *
     * @return array
     */
    public function getFunctions()
    {
        return [
            new Twig_SimpleFunction('form_start', [$this, 'form_start']),
        ];
    }

     /**
     * {@inheritdoc}
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'App_Libraries_TwigExtension';
    }

    /**
     * formタグを生成する。
     *
     */
    public function form_start(array $options = [])
    {
        $open_form_tag = $this->form_builder->open($options);

        return $open_form_tag;
        //return preg_replace('/action="(.*?)"/', 'action="$1/"', $open_form_tag);
    }
}