<?php

namespace App\Admin\Controllers;

use App\Models\Contact;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ContactController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Contact';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Contact());

        $grid->column('id', __('Id'));
        $grid->column('country', __('Country'));
        $grid->column('phone', __('Phone'));
        $grid->column('address', __('Address'));
        $grid->column('email', __('Email'));
        $grid->column('map', __('Map'))->limit(100);

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
        $show = new Show(Contact::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('country', __('Country'));
        $show->field('phone', __('Phone'));
        $show->field('address', __('Address'));
        $show->field('email', __('Email'));
        $show->field('map', __('Map'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Contact());

        $form->text('country', __('Country'));
        $form->text('phone', __('Phone'));
        $form->text('address', __('Address'));
        $form->text('email', __('Email'));
        $form->text('map', __('Map'));

        return $form;
    }
}
