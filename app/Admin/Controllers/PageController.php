<?php

namespace App\Admin\Controllers;

use App\Models\Page;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Page';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Page());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('content', __('Content'))->limit(100);
        $grid->column('img', __('Img'));
        $grid->column('seo_title', __('Seo title'));
        $grid->column('seo_description', __('Seo description'));

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
        $show = new Show(Page::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('content', __('Content'));
        $show->field('img', __('Img'));
        $show->field('seo_title', __('Seo title'));
        $show->field('seo_description', __('Seo description'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Page());

        $form->text('title', __('Title'));
        $form->summernote('content', __('Content'));
        $form->image('img', __('Img'))->move('images/pages')->removable();
        $form->text('seo_title', __('Seo title'));
        $form->summernote('seo_description', __('Seo description'));

        return $form;
    }
}
