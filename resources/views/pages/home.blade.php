@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Trisha H White</h1>
    <div class="row">
        <div class="col-xs-12">
            <h2>{{ $content[0]->list_title }}</h2>
            <div class="float-right text-right">
                <div class="row">
                    <div class="col-xs-12">
                        <form action="/" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="action" value="filter">
                            <input type="text" name="filterTerm" value="{{ $content[0]->filterTerm }}" Placeholder="Filter List">
                            <button class="btn btn-info" type="submit">Filter</button>
                        </form>
                    </div>
                </div>
            </div>
            <table style="width:800px">
                <tr>
                    <th>
                        First Name
                    </th>
                    <th>
                        <form action="/" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="action" value="sort">
                            <input type="hidden" name="sortDirection" value="{{ $content[0]->sortDirection }}">
                            <button class="btn btn-info" type="submit">Last Name <i class='fa fa-caret-{{ $content[0]->caret }}'></i></button>
                        </form>
                    </th>
                    <th>
                        Date Added
                    </th>
                    <th>
                        Date Updated
                    </th>
                </tr>
                @foreach ($lists as $list)
                    <tr>
                        <td>{{$list->first_name}}</td>
                        <td>{{$list->last_name}}</td>
                        <td>{{$list->created_at}}</td>
                        <td>{{$list->updated_at}}</td>
                    </tr>
                @endforeach
            </table>

            <?php echo $lists->render(); ?>
        </div>
    </div>
</div>
    @endsection