 <x-app-layout title="Product">
        <x-slot name="heading">
            Products
        </x-slot>
        
       
            <div class="sm:flex sm:items-center">
                <x-section-title>
                   <x-slot name="title">Producst</x-slot>
                   <x-slot name="description">hehehehehe</x-slot>
                </x-section-title>
            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                <x-button as='a' href="products/create">
                    Add User
                </x-button>
            </div>
            </div>
            <div class="mt-8 flow-root">
                <x-table>
                    <x-table.thead>
                        <x-table.th>Image</x-table.th>
                        <x-table.th>Title</x-table.th>
                        {{-- <x-table.th>Description</x-table.th> --}}
                        <x-table.th>Price</x-table.th>
                        <x-table.th>Stock</x-table.th>
                       
                    </x-table.thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <td class="text-center">
                                    <img src="{{asset('ImageProduct/'.$product->image)}}" class="rounded" style="width: 150px">
                                </td>
                                <td>{{ $product->title }}</td>
                                <td>{{ "Rp " . number_format($product->price,2,',','.') }}</td>
                                <td>{{ $product->stock }}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('products.destroy', $product->id) }}" method="POST">
                                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-danger">
                                Data Products belum Tersedia.
                            </div>
                        @endforelse
                    </tbody>
                </x-table>
               
            </div>
        
    
</x-app-layout>