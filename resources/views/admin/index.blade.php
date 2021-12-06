<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<div class="py-12">
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
         <div class="mb-4">
         </div>
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">

                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Full Name</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone Nb</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">City</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($orders as $order)
<tr>
     <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">{{ $order->full_name}}</td>
     <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">{{ $order->mobile}}</td>
     <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">{{ $order->email}}</td>
     <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">{{ $order->city}}</td>
     <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">{{ $order->address}}</td>
     <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">{{ $order->amount}}</td>
     <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium"> @if($order->role == 1)
Buy

@else
<span style="color: #ff0000;">Sell</span> 
          @endif
     </td>
</tr>
                        @endforeach
                        
                    </tbody>
                </table>
                <div class="mb-4 mt-4 ml-4">
                    {{ $orders->links() }}
                </div>
            </div></div></div></div>

    </div>
</x-app-layout>
