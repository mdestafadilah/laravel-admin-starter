@extends('layouts.admin')

@section('content')
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary box-solid">
				<div class="box-header with-border">
					<h3 class="box-title">
						<span><i class="fa fa-table"></i></span>
						<span>List All Faqs</span>
					</h3>
				</div>

				<div class="box-body">

					@include('admin.partials.info')

                    @include('admin.partials.toolbar', ['order' => true])

					<table id="tbl-list" data-server="false" class="dt-table table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
						<tr>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Category</th>
                            <th>Total Views</th>
                            <th>Updated</th>
                            <th>Action</th>
						</tr>
						</thead>
						<tbody>
						@foreach ($items as $item)
							<tr>
                                <td>{{ $item->question }}</td>
                                <td>{!! $item->answer_summary !!}</td>
                                <td>{!! $item->category->name !!}</td>
                                <td>{!! $item->views !!}</td>
                                <td>{{ format_date($item->updated_at) }}</td>
                                <td>{!! action_row($selectedNavigation->url, $item->id, $item->title, ['show', 'edit', 'delete']) !!}</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection