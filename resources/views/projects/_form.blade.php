@csrf
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Cargar Soporte a Proveedor') }}</div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">{{ __('Proveedor') }}</label>
                        <div class="col-md-6">
                            <label class="col-md-12 col-form-label text-md-right">

                                <select id="mi-selector" name="user_id" value="{{ old('user_id', $project->name) }}"
                                    class="form-control">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">
                                            {{ $user->name }}
                                        </option>
                                    @endforeach
                                </select>

                            </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="urlproyecto"
                            class="col-md-4 col-form-label text-md-right">{{ __('Nombre del Archivo') }}</label>
                        <div class="col-md-6">
                            <label class="col-md-12 col-form-label text-md-right">
                                <input id="nombre" class="col-md-12 form-control text-md-left" type="text" name="nombre"
                                    value="{{ old('nombre', $project->nombre) }}">

                            </label>
                            {!! $errors->first('nombre', '<small style="color:red">:message</small><br>') !!}
                        </div>

                    </div>

                    <div class="form-group row">
                        <label for="pdf"
                            class="col-md-4 col-form-label text-md-right">{{ __('Cargar Arhivo') }}</label>
                        <div class="col-md-6">
                            <label class="col-md-12 col-form-label text-md-left">
                                <input id="archivo" class="file-upload" type="file" name="archivo"
                                    class="form-upload-file col-md-12 form-control text-md-left"
                                    value="{{ old('archivo', $project->archivo) }}">

                            </label>
                            {!! $errors->first('archivo', '<small style="color:red">:message</small><br>') !!}
                        </div>

                    </div>

                    <div class="form-group row">
                        <label for="description"
                            class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                        <div class="col-md-6">
                            <label class="col-md-12 col-form-label text-md-right">
                                <textarea id="observacion" class="col-md-12 form-control text-md-left" type=""
                                    name="observacion"
                                    placeholder="Texto....">{{ old('observacion', $project->observacion) }}</textarea>

                            </label>
                            {!! $errors->first('observacion', '<small style="color:red">:message</small><br>') !!}
                        </div>

                    </div>
                    <br>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">

                            <button class="btn btn-primary">{{ $btnText }}</button>
                            <a type="button" class="btn btn-secondary" href="{{ route('projects.index') }}"
                                role="button">{{ $btnText1 }}</a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>




@section('script')
    <script>
        jQuery(document).ready(function($) {
            $(document).ready(function() {
                $('#mi-selector').select2();
            });
        });
    </script>
@endsection
