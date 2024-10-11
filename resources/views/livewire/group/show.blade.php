<div>
    @if ($isOpen)
        <div wire:ignore.self class="modal modal-blur fade show" tabindex="-1" role="dialog" aria-labelledby="modal-title"
            aria-hidden="true" style="display: block;">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Detalhes do Grupo</h5>
                        <button type="button" class="btn-close" wire:click="closeModal"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Nome:</strong> {{ $group->name }}</p>
                        <p><strong>Criado em:</strong> {{ $group->created_at }}</p>
                        <p><strong>Atualizado em:</strong> {{ $group->updated_at }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" wire:click="closeModal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
