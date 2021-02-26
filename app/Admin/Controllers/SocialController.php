<?php

namespace App\Admin\Controllers;

use App\Models\Social;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SocialController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Social';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Social());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('url', __('Url'));
        $grid->column('icon', __('Icon'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Social::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('url', __('Url'));
        $show->field('icon', __('Icon'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Social());

        $form->text('title', __('Title'));
        $form->url('url', __('Url'));
        $form->text('icon', __('Icon'));

        return $form;
    }
}
