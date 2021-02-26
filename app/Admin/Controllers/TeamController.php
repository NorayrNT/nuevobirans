<?php

namespace App\Admin\Controllers;

use App\Models\Team;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TeamController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Team';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Team());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('office', __('Office'));
        $grid->column('image', __('Image'));
        $grid->column('facebook', __('Facebook'));
        $grid->column('linkedin', __('Linkedin'));
        $grid->column('instagram', __('Instagram'));

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
        $show = new Show(Team::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('office', __('Office'));
        $show->field('image', __('Image'));
        $show->field('facebook', __('Facebook'));
        $show->field('linkedin', __('Linkedin'));
        $show->field('instagram', __('Instagram'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Team());

        $form->text('name', __('Name'));
        $form->text('office', __('Office'));
        $form->image('image', __('Image'))->move('images/team')->removable();
        $form->url('facebook', __('Facebook'));
        $form->url('linkedin', __('Linkedin'));
        $form->url('instagram', __('Instagram'));

        return $form;
    }
}
