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
