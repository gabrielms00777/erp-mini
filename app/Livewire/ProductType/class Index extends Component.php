class Index extends Component
{
    use WithPagination;

    public string $search = '';

    #[Computed()]
    public function productTypes()
    {
        return ProductType::query()->when($this->search, function ($query) {
            $query->where('name', 'like', '%'.$this->search.'%');
        })->paginate(10);
    }

    #[On('refreshProductTypes')]
    public function render()
    {
        return view('livewire.product-type.index');
    }
}
class Index extends Component
{
    use WithPagination;

    public string $search = '';

    #[Computed()]
    public function productTypes()
    {
        return ProductType::query()->when($this->search, function ($query) {
            $query->where('name', 'like', '%'.$this->search.'%');
        })->paginate(10);
    }

    #[On('refreshProductTypes')]
    public function render()
    {
        return view('livewire.product-type.index');
    }
}
--------------
class Create extends Component
{
    #[Validate('required|string|max:255')]
    public string $name = '';

    public function save()
    {
        $this->validate();

        ProductType::create($this->all());

        session()->flash('success', 'Tipo de produto criado com sucesso!');

        $this->redirect('/admin/product-types', true);
    }

    public function render()
    {
        return view('livewire.product-type.create');
    }
}
<div>
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Adicionar Tipos de Produto</h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <a href="{{ route('admin.product_types.index') }}" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    </div>



    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-body">
                    <form wire:submit="save">
                        <div class="mb-3">
                            <label class="form-label">Nome</label>
                            <input type="text" class="form-control" wire:model="name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

-----------
class Edit extends Component
{
    public ProductType $productType;

    public ?string $name;

    public function mount()
    {
        $this->name = $this->productType->name;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|string|max:255',
        ]);

        $this->productType->update([
            'name' => $this->name,
        ]);

        session()->flash('success', 'Tipo de produto editado com sucesso!');

        $this->redirect('/admin/product-types', true);
    }

    public function render()
    {
        return view('livewire.product-type.edit');
    }
}
<div>
    <div>
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">Editar Tipo de Produto</h2>
                    </div>
                    <div class="col-auto ms-auto d-print-none">
                        <a href="{{ route('admin.product_types.index') }}" class="btn btn-primary">Voltar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-body">
            <div class="container-xl">
                <div class="card">
                    <div class="card-body">
                        <form wire:submit.prevent="update">
                            <div class="mb-3">
                                <label class="form-label">Nome</label>
                                <input type="text" class="form-control" wire:model="name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

-----------
class Show extends Component
{
    public ?ProductType $productType;

    public bool $isOpen = false;

    #[On('loadProductType')]
    public function loadProductType(ProductType $productType)
    {
        $this->productType = $productType;
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.product-type.show');
    }
}

<div>
    @if ($isOpen)
        <div wire:ignore.self class="modal modal-blur fade show" tabindex="-1" role="dialog" aria-labelledby="modal-title"
            aria-hidden="true" style="display: block;">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Detalhes do Tipo de Produto</h5>
                        <button type="button" class="btn-close" wire:click="closeModal"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Nome:</strong> {{ $productType->name }}</p>
                        <p><strong>Criado em:</strong> {{ $productType->created_at }}</p>
                        <p><strong>Atualizado em:</strong> {{ $productType->updated_at }}</p>
                        <p><strong>Número de produtos:</strong> 10</p> <!-- Valor fixo -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" wire:click="closeModal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
------------
class Delete extends Component
{
    public ?ProductType $productType;

    public bool $isOpen = false;

    #[On('deleteProductType')]
    public function deleteProductType(ProductType $productType)
    {
        $this->productType = $productType;
        $this->isOpen = true;
    }

    public function delete()
    {
        $this->productType->delete();

        $this->isOpen = false;

        $this->dispatch('refreshProductTypes');

        // session()->flash('success', 'Tipo de produto deletado com sucesso.');

        // $this->redirect('/admin/product-types', true);
    }

    public function render()
    {
        return view('livewire.product-type.delete');
    }
}
<div>
    @if ($isOpen)
        <div wire:ignore.self class="modal modal-blur fade show" tabindex="-1" role="dialog" aria-labelledby="modal-title"
            aria-hidden="true" style="display: block;">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="btn-close" wire:click="closeModal"></button>
                    <div class="modal-status bg-danger"></div>
                    <div class="modal-body text-center py-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z">
                            </path>
                            <path d="M12 9v4"></path>
                            <path d="M12 17h.01"></path>
                        </svg>
                        <h3>Tem certeza?</h3>
                        <div class="text-secondary">Você deseja realmente excluir o tipo de produto
                            <strong>{{ $productType->name }}</strong>? Esta ação não pode ser desfeita.
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="w-100">
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn w-100" wire:click="closeModal">Cancelar</button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-danger w-100" wire:click="delete">
                                        Deletar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
