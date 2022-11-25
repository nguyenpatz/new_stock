<?php

namespace App\Http\Controllers\Admin\Warehouse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WarehouseInventoryController extends Controller
{
    public function index() {

        // $wis = DB::table('warehouse_inventory')
        //     ->join('product', 'product.id','=' ,'warehouse_inventory.product.id')
        //     ->join('emloyee', 'employee.id', '=' , 'warehouse_inventory.employee_id')
        //     ->select('warehouse_inventory.*', 'product.name as pdname', 'employee.name as epname');

        $wis = DB::table('warehouse_inventory')
            ->join('template', 'template.id','=' ,'warehouse_inventory.template_id')
            ->join('employee', 'employee.id', '=' , 'warehouse_inventory.employee_id')
            ->select('warehouse_inventory.*');
        
        $wis = $wis->get();
        $header = $breadcrumb_item = $title = "Inventory";
        
        return view('/admin/warehouse/warehouse_inventory', 
        compact('title', 'header', 'breadcrumb_item', 'wis'));
            
            // return view('admin/warehouse/warehouse_inventory', [
            //     'title' => "Warehouse",
            //     'header'=>'Warehouse',
            //     'breadcrumb_item'=>'Warehouse',
            //     'wis' => $wis,
            // ]);
        }

        public function create() {

            // dùng template để lấy amount gán actual number
            // vì mặc định actual number chính bằng amount
            $template = DB::table('template')->select('id as tid', 'name as tpname', 'amount');
            $template = $template->get();
            
            // dùng employee để lấy name và id của employee
            $employee = DB::table('employee')->select('id as eid', 'name as ename');
            $employee = $employee->get();


            $title = 'Warehouse inventory';
            
            
            return view('/admin/warehouse/create_inventory', [
                'title' => $title,
                'templates' => $template,
                'employees' => $employee,
            ]);
        }
    }
