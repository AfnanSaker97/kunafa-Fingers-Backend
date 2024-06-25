<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
    
class OrdersExport implements FromCollection ,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       
    return Order::join('users', 'orders.user_id', '=', 'users.id')
    ->join('addresses', 'orders.address_id', '=', 'addresses.id')
    ->select(
        'orders.id', 
        'orders.status', 
        'orders.order_date', 
        'orders.price_after_discount', 
        'users.name', 
        'users.email', 
        'addresses.country', 
        'addresses.city', 
        'addresses.address_line_1', 
        'addresses.address_line_2'
    )
    ->get();
      }


    public function headings(): array
    {
        return ["ID", "status", "order_date","price_after_discount","user_name","email","country","city","address_line_1","address_line_2"];
    }
}
