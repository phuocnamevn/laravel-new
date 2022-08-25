<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CustomeRequest;
use App\Repositories\Customer\CustomerRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $customerRepository;

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function index()
    {
        return view('admin.customer.index', [
            'customer' => $this->customerRepository->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customer.form', [
            'id' => Auth::id()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomeRequest $request)
    {
        $this->customerRepository->save($request->validated());
        return redirect()->route('customer.index')->with(['message' => __('messages.create_success')]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! $customer = $this->customerRepository->findById($id)) {
            abort(404);
        }
        return view('admin.customer.form', [
            'customer' => $customer,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomeRequest $request, $id)
    {
        $this->customerRepository->save($request->validated(), ['id' => $id]);
        return redirect()->route('customer.index')->with(['message' => __('messages.edit_success')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->customerRepository->deleteById($id);
        return redirect()->route('customer.index')->with(['message' => __('messages.delete_success')]);
    }
    
    public function destroyAll(Request $request)
    {
        $collect = collect([$request->input('select[]')]);
        dd($collect);
        // DB::table('customer')->whereIn('id', $collect)->delete();
        return redirect()->route('customer.index')->with(['message' => __('messages.delete_success')]);
    }
}
