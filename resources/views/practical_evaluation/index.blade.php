<!-- resources/views/practical_evaluation/index.blade.php -->


@section('content')
    <div class="container">
        <h1>Practical Evaluations</h1>

        <!-- Mostrar mensajes de éxito o error -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Professor</th>
                    <th>Portfolio</th>
                    <th>Cover</th>
                    <th>Academic Load</th>
                    <th>Philosophy</th>
                    <th>CV</th>
                    <th>Academic Progress</th>
                    <th>Attendance Record</th>
                    <th>Teaching Activities</th>
                    <th>Practical Grades</th>
                    <th>Projects</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($evaluations as $practical_evaluation)
                    <tr>
                        <td>{{ $practical_evaluation->id }}</td>
                        <td>{{ $practical_evaluation->id_professor }}</td>
                        <td>{{ $practical_evaluation->id_portfolio }}</td>

                        <!-- Mostrar los valores como checkboxes -->
                        <td>
                            <input type="checkbox" disabled {{ $practical_evaluation->cover == 1 ? 'checked' : '' }}>
                        </td>
                        <td>
                            <input type="checkbox" disabled {{ $practical_evaluation->academic_load == 1 ? 'checked' : '' }}>
                        </td>
                        <td>
                            <input type="checkbox" disabled {{ $practical_evaluation->philosophy == 1 ? 'checked' : '' }}>
                        </td>
                        <td>
                            <input type="checkbox" disabled {{ $practical_evaluation->cv == 1 ? 'checked' : '' }}>
                        </td>
                        <td>
                            <input type="checkbox" disabled
                                {{ $practical_evaluation->academic_progress == 1 ? 'checked' : '' }}>
                        </td>
                        <td>
                            <input type="checkbox" disabled
                                {{ $practical_evaluation->attendance_record == 1 ? 'checked' : '' }}>
                        </td>
                        <td>
                            <input type="checkbox" disabled
                                {{ $practical_evaluation->teaching_activities == 1 ? 'checked' : '' }}>
                        </td>
                        <td>
                            <input type="checkbox" disabled
                                {{ $practical_evaluation->practical_grades == 1 ? 'checked' : '' }}>
                        </td>
                        <td>
                            <input type="checkbox" disabled {{ $practical_evaluation->projects == 1 ? 'checked' : '' }}>
                        </td>

                        <td>
                            <!-- Botones de acción -->
                            <a href="{{ route('practical_evaluation.show', $practical_evaluation->id) }}"
                                class="btn btn-info">View</a>
                            <a href="{{ route('practical_evaluation.edit', $practical_evaluation->id) }}"
                                class="btn btn-warning">Edit</a>
                            <form action="{{ route('practical-evaluations.destroy', $practical_evaluation->id) }}"
                                method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('practical_evaluation.create') }}" class="btn btn-primary">Create New Evaluation</a>
    </div>
@endsection
