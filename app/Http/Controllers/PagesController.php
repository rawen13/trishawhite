<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeList as Lists;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;

class PagesController extends Controller
{
    //
    public function __construct( Lists $lists, Request $request )
    {
        $this->lists = $lists;
        $this->request = $request;
    }

    public function index()
    {
        return view('pages/index');
    }

    public function home(Request $request, Lists $lists)
    {
        $logoInt = rand( 1,14 );
        $logo = "images/logoAsset " . $logoInt . ".png";
        $data = [];

        $obj = new \stdClass;
        $obj->id = 1;
        $obj->logo = $logo;
        $obj->page_title = 'Trisha H White';
        $obj->list_title = 'User List Example';

        $obj->sortDirection = 'asc';
        $obj->caret = 'down';
        $obj->filterTerm = '';

        $data['content'][] = $obj;

        $data['lists'] = $this->lists::query()->paginate(5);

        return view('pages/home',$data);
    }

    public function sort(Request $request) {
        $logoInt = rand( 1,14 );
        $logo = "images/logoAsset " . $logoInt . ".png";
        $data = [];

        $obj = new \stdClass;
        $obj->id = 1;
        $obj->logo = $logo;
        $obj->page_title = 'Trisha H White';
        $obj->list_title = 'User List Example';


        $action = $request->input('action');

        switch ($action) {
            case 'sort':
                $obj->filterTerm = '';
                $sortDirection = $request->input('sortDirection');

                if($sortDirection === 'asc') {
                    $data['lists'] = $this->lists::query()->orderBy('last_name')->paginate(5);
                    $obj->sortDirection = 'desc';
                    $obj->caret = 'down';
                } else {
                    $data['lists'] = $this->lists::query()->orderByDesc('last_name')->paginate(5);
                    $obj->sortDirection = 'asc';
                    $obj->caret = 'up';
                }

                $data['content'][] = $obj;
                break;
            case 'filter':
                $filterTerm = $request->input('filterTerm');

                $obj->sortDirection = 'asc';
                $obj->caret = 'down';
                $obj->filterTerm = $filterTerm;

                $data['content'][] = $obj;

                if($filterTerm) {
                    $first_name = $this->lists::query();
                    $last_name = $this->lists::query();
                    $first_name->where('first_name','like', $filterTerm);
                    $last_name->where('last_name','like', $filterTerm);

                    $data['lists'] = $first_name->union($last_name)->get();

                    $page = 1;
                    $paginate = 5;
                    $array = [];
                    $i = 0;
                    foreach($data['lists'] as $lists) {
                        $array[$i] = $lists;
                        $i++;
                    }
                    $items = array_slice($array, $paginate * ($page - 1), $paginate);
                    $data['lists'] = new Paginator($items, count($array), $paginate, $page, [
                        'path'  => $this->request->url(),
                        'query' => $this->request->query(),
                    ]);

                } else {
                    $data['lists'] = $this->lists::query()->paginate(5);
                }
                break;
            default:
                $obj->sortDirection = 'asc';
                $obj->caret = 'down';
                $obj->filterTerm = '';

                $data['content'][] = $obj;

                    $data['lists'] = $this->lists->query()->paginate(5);
                break;
        }

        return view('pages/home',$data);
    }
}
