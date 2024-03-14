<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border-color: #ffa500; background-color: #f0f8ff;">
                <div class="card-header" style="background-color: #ffa500; color: white;">{{ __('Ajouter des notes') }}</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <p>Matière: {{ $matiere }}</p>

                    <form method="POST" action="{{ route('save.notes') }}">
                        @csrf

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nom de l'étudiant</th>
                                    <th>Note</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($etudiants as $etudiant)
                                <tr>
                                    <td>{{ $etudiant->user->name }}</td>
                                    <td>
                                        <input type="number" name="notes[]" class="form-control" value="{{ old('notes[]') }}" step="0.01" required>
                                        <input type="hidden" name="etudiant_ids[]" value="{{ $etudiant->id }}">
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color: #ffa500; border-color: #ffa500;">
                                    {{ __('Enregistrer les notes') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
