<?php namespace App\Modules\Backend\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Modules\Backend\Models\App;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Grids;
use HTML;
use Nayjest\Grids\Components\Base\RenderableRegistry;
use Nayjest\Grids\Components\ColumnHeadersRow;
use Nayjest\Grids\Components\ColumnsHider;
use Nayjest\Grids\Components\CsvExport;
use Nayjest\Grids\Components\ExcelExport;
use Nayjest\Grids\Components\Filters\DateRangePicker;
use Nayjest\Grids\Components\FiltersRow;
use Nayjest\Grids\Components\HtmlTag;
use Nayjest\Grids\Components\Laravel5\Pager;
use Nayjest\Grids\Components\OneCellRow;
use Nayjest\Grids\Components\RecordsPerPage;
use Nayjest\Grids\Components\RenderFunc;

use Nayjest\Grids\Components\ShowingRecords;
use Nayjest\Grids\Components\TFoot;
use Nayjest\Grids\Components\THead;
use Nayjest\Grids\EloquentDataProvider;
use Nayjest\Grids\FieldConfig;
use Nayjest\Grids\FilterConfig;
use Nayjest\Grids\SelectFilterConfig;
use Nayjest\Grids\Grid;
use Nayjest\Grids\GridConfig;

use Illuminate\Http\Request;

class AppController extends Controller {

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       //$this->middleware('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$query = App::select('apps.id', 'apps.name', 'apps.id as action', 'apps.id as check');
   		

    $grid = new Grid(
      (new GridConfig)
        ->setDataProvider(
          new EloquentDataProvider($query)
        )
        ->setName('Apps')
        ->setPageSize(10)
        ->setColumns([
          (new FieldConfig)
          ->setName('check')
          ->setLabel('<input type="checkbox" name="checklist[]" class="check-all">')
          ->setCallback(function ($val) {
              return '<input type="checkbox" name="checklist[]" class="case" value="' . $val . '">';
            })
          ->setSortable(false)
          ,
          (new FieldConfig)
          ->setName('id')
          ->setLabel('ID')
          ->setSortable(true)
          ->setSorting(Grid::SORT_ASC)
          ,
          (new FieldConfig)
          ->setName('name')
          ->setLabel('Name')
          ->setCallback(function ($val) {
              return $val;
            })
          ->setSortable(true)
          ->addFilter(
            (new FilterConfig)
            ->setOperator(FilterConfig::OPERATOR_LIKE)
          ),
          
          (new FieldConfig)
          ->setName('created_at')
          ->setLabel('Date')
          ->setSortable(true)
          ->setCallback(function($val){
            $d = new \DateTime($val);    
            return $d->format('M d, Y');
          }),

          (new FieldConfig)
          ->setName('action')
          ->setLabel('Actions')
          ->setCallback(function ($val, $row) {
            
              $item = $row->getSrc();
              $url = "<a title='Edit' href='" . URL('backend/app/edit/' . $val) . "'><span class='fa fa-pencil'></span></a>&nbsp;&nbsp;<a title='Delete' href='" . URL('backend/app/destroy/' . $val) . "'><span class='fa fa-trash'></span></a>";
              return $url;
            })
          ->setSortable(false)
          
          ,
        ])
        ->setComponents([
          (new THead)
          ->setComponents([
            (new ColumnHeadersRow),
            (new FiltersRow)
                
            ,
            (new OneCellRow)
            ->setRenderSection(RenderableRegistry::SECTION_END)
            ->setComponents([
              (new RecordsPerPage)
              ->setVariants([
                10,
                20,
                30,
                40,
                50,
                100,
                200,
                300,
                400,
                500
              ]),
              new ColumnsHider,
              (new CsvExport)
              ->setFileName('my_report' . date('Y-m-d'))
              ,
              new ExcelExport(),
              (new HtmlTag)
              ->setContent('<span class="glyphicon glyphicon-refresh"></span> Filter')
              ->setTagName('button')
              ->setRenderSection(RenderableRegistry::SECTION_END)
              ->setAttributes([
                'class' => 'btn btn-success btn-sm',
                'id' => 'formFilter'
              ])
            ])
          ])
          ,
          (new TFoot)
          ->setComponents([
            (new OneCellRow)
            ->setComponents([
              new Pager,
              (new HtmlTag)
              ->setAttributes(['class' => 'pull-right'])
              ->addComponent(new ShowingRecords)
              ,
            ])
          ])
        ])
    );
	$grid = $grid->render();
		return view("Backend::app", compact('grid'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('Backend::app-create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
    $validator = Validator::make(Input::all(), [
      'name'        => 'unique:apps,name|required',
      'meta_desc'   => 'string|max:160',
      'slug'        => 'Required|alpha_dash|unique:apps,slug',
      'keywords'    => 'string|max:160',
      'short_description' => 'string|max:255',
      'description' => 'required',
      'code'        => 'Required',
      'status'      => 'required',
      
    ]);

    
    if ($validator->fails()) {
      return Back()->withErrors($validator)->withInput();
    }
    $data = Input::only('name', 'meta_desc', 'slug', 'keywords', 'short_description', 'description', 'code', 'status', 'script');
    $app = new App();
    $app->name = Input::get('name');
    $app->slug = Input::get('slug');
    $app->meta_desc = input::get('meta_desc');
    $app->keywords = Input::get('keywords');
    $app->short_description = Input::get('short_description');
    $app->description = Input::get('description');
    $app->code = Input::get('code');
    $app->status = Input::get('status');
    if(Input::hasFile('script') && Input::file('script')->getClientOriginalExtension() == 'js'){
      $filename = time().'.'.Input::file('script')->getClientOriginalExtension();
      Input::file('script')->move(public_path('uploads/js', $filename));
      $app->script = 'uploads/js/'.$filename;
    }
    if($app->save()){
      return redirect('backend/app/edit/'.$app->id)->with('message', 'App was successfully created.');
    }
    return back()->with('message', 'System error, please try again.');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
    $app = App::find($id);
    if(!$app){
      return redirect('backend/apps')->with('message', 'App does not found.');
    }
    return view('Backend::app-edit', compact('app'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
    $validator = Validator::make(Input::all(), [
      'name'        => 'unique:apps,name,'.$id.'|required',
      'meta_desc'   => 'string|max:160',
      'slug'        => 'Required|alpha_dash|unique:apps,slug,'.$id,
      'keywords'    => 'string|max:160',
      'short_description' => 'string|max:255',
      'description' => 'required',
      'code'        => 'Required',
      'status'      => 'required',
      
    ]);

    
    if ($validator->fails()) {
      return Back()->withErrors($validator)->withInput();
    }
    $data = Input::only('name', 'meta_desc', 'slug', 'keywords', 'short_description', 'description', 'code', 'status', 'script');
    $app = App::find($id);
    if(!$app){
      $app = new App();
    }
    $app->name = Input::get('name');
    $app->slug = Input::get('slug');
    $app->meta_desc = input::get('meta_desc');
    $app->keywords = Input::get('keywords');
    $app->short_description = Input::get('short_description');
    $app->description = Input::get('description');
    $app->code = Input::get('code');
    $app->status = Input::get('status');
    if(Input::hasFile('script') && Input::file('script')->getClientOriginalExtension() == 'js'){

      $filename = time().'.'.Input::file('script')->getClientOriginalExtension();
      Input::file('script')->move(public_path('uploads/js/', $filename));
      $app->script = 'uploads/js/'.$filename;
    }
    if($app->save()){
      return back()->with('message', 'App was successfully created.');
    }
    return back()->with('message', 'System error, please try again.');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
