@extends('back.app')

@section('main')

	@include('back.partials.entete', ['title' => trans('back/admin.dashboard'), 'icone' => 'dashboard', 'fil' => trans('back/admin.dashboard')])

	<div class="row">

		@include('back/partials/pannel', ['color' => 'bg-green', 'icone' => 'icon-envelope', 'nbr' => $nbrMessages, 'name' => trans('back/admin.new-messages'), 'url' => 'contact', 'total' => trans('back/admin.messages')])

		@include('back/partials/pannel', ['color' => 'bg-blue-alt', 'icone' => 'icon-user', 'nbr' => $nbrUsers, 'name' => trans('back/admin.new-registers'), 'url' => 'user', 'total' => trans('back/admin.users')])

		@include('back/partials/pannel', ['color' => 'bg-yellow', 'icone' => 'icon-pencil', 'nbr' => $nbrPosts, 'name' => trans('back/admin.new-posts'), 'url' => 'blog', 'total' => trans('back/admin.posts')])

		@include('back/partials/pannel', ['color' => 'bg-primary', 'icone' => 'icon-comment', 'nbr' => $nbrComments, 'name' => trans('back/admin.new-comments'), 'url' => 'comment', 'total' => trans('back/admin.comments')])

	</div>

@stop


