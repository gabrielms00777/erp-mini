<div>
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Grupos</h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <a href="{{ route('admin.groups.create') }}" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5v14m-7 -7h14" />
                        </svg>
                        Adicionar Grupo
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <x-alert />
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Filtros</h3>
                    <button class="btn btn-link" data-bs-toggle="collapse" href="#filterCollapse" role="button"
                        aria-expanded="false" aria-controls="filterCollapse">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <polyline points="6 9 12 15 18 9" />
                        </svg>
                    </button>
                </div>
                <div class="collapse show" id="filterCollapse">
                    <div class="card-body">
                        <input type="text" class="form-control" placeholder="Buscar por nome"
                            wire:model.live.debounce.250ms="search">
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Lista de Grupos</h3>
                </div>

                <div class="table-responsive">
                    <table class="table table-vcenter">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th class="text-end">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($groups as $group)
                                <tr>
                                    <td>{{ $group->id }}</td>
                                    <td>{{ $group->name }}</td>
                                    <td class="text-end">
                                        <a href="#" @click="$dispatch('showGroup', {group: {{ $group->id }}})"
                                            class="btn btn-sm btn-info">Visualizar</a>
                                        <a href="{{ route('admin.groups.edit', $group->id) }}"
                                            class="btn btn-sm btn-warning">Editar</a>
                                        <a href="#"
                                            @click="$dispatch('confirmDelete', {group: {{ $group->id }}})"
                                            class="btn btn-sm btn-danger">Deletar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-3">
                    {{ $groups->links() }}
                </div>
            </div>
        </div>
    </div>

    <livewire:group.show />
    <livewire:group.delete />
</div>
