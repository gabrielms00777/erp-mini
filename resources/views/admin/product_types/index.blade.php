<x-layouts.app>
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Tipos de Produto</h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <a href="{{ route('admin.product_types.create') }}" class="btn btn-primary">Adicionar Tipo de
                        Produto</a>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Lista de Tipos de Produto</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-vcenter">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productTypes as $type)
                                    <tr>
                                        <td>{{ $type->id }}</td>
                                        <td>{{ $type->name }}</td>
                                        <td>
                                            {{-- <a href="{{ route('admin.product-types.show', $type->id) }}" --}}
                                            <a href="#" class="btn btn-info btn-sm">Visualizar</a>
                                            {{-- <a href="{{ route('admin.product-types.edit', $type->id) }}" --}}
                                            <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                            {{-- <form action="{{ route('product-types.destroy', $type->id) }}" --}}
                                            <form action="#" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
