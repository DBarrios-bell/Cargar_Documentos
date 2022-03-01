<!-- Modal -->
<div wire:ignore.self class="modal fade er" id="theModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Formulario de Contacto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('messages.store') }}">
                <div class="modal-body">
                    @csrf
                    {{-- <label for="exampleInputEmail1" class="form-label">Nombre</label> --}}
                    {{-- onkeyup = "validar(this.form) permite validar para la activaion del button --}}
                    <input name="name" class="form-control" placeholder="Nombres y Apellidos..." value="{{ old('name') }}" onkeyup = "validar(this.form)"><br>
                    {!! $errors->first('name', '<small>:message</small><br>') !!}

                    <input type="email" class="form-control" name="email" placeholder="Correo Electronico..." value=" {{ old('email') }} " onkeyup = "validar(this.form)"><br>
                    {!! $errors->first('email', '<small>:message</small><br>') !!}

                    <input name="subject" class="form-control" placeholder="Asunto..,." value="{{ old('subject') }}" onkeyup = "validar(this.form)"><br>
                    {!! $errors->first('subject', '<small>:message</small><br>') !!}

                    <textarea name="content" class="form-control" placeholder="Mensaje..." value=" {{ old('content') }}" onkeyup = "validar(this.form)"></textarea><br>
                    {!! $errors->first('content', '<small>:message</small><br>') !!}

                </div>
                <div class="modal-footer" style="text-align: left">
                      <span><div centered><strong>Nota: </strong>Si desea comunicarse con los creadores de CtrlDocuments, por favor diligenciar el formulario</div></span>
                        <button type="submit" name="sub" class="btn btn-dark" disabled="disabled"> {{ __('send') }} </button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        window.livewire.on('show-modal', msg => {
            $('#theModal').modal('show');
        })
        window.livewire.on('hide-modal', msg => {
            $('#theModal').modal('hide');
        })
        $('#theModal').on('hidden.bs.modal', function(e) {
            $('.er').css('display', 'none');
            $('#myInput').trigger('focus');
        });
    });

    // funcion para habilitar button en estado disable al diligenciar el formulario
    function validar(frm) {
        frm.sub.disabled = true;
        for (i = 0; i < 4; i++)
            if (frm['name'].value == '' || frm['email'].value == '' || frm['subject'].value == '' || frm['content'].value == '' ) return
        frm.sub.disabled = false;
    }
</script>
