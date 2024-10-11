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
                            <path stroke="none" d="M0 0h24V0z" fill="none"></path>
                            <path
                                d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z">
                            </path>
                            <path d="M12 9v4"></path>
                            <path d="M12 17h.01"></path>
                        </svg>
                        <h3>Tem certeza?</h3>
                        <div class="text-secondary">
                            Você deseja realmente excluir o grupo <strong>{{ $group->name }}</strong>? Esta ação não
                            pode ser desfeita.
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="w-100">
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn w-100" wire:click="closeModal">Cancelar</button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-danger w-100"
                                        wire:click="delete">Deletar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
