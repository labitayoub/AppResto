@extends('layouts.auth')

@section('title', 'Dashboard')

@section('content')

    <div class="container mx-auto px-4 py-8">
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4">Tableau de bord</h1>
            <p class="mb-4">Bienvenue sur votre tableau de bord.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-6">
                <div class="bg-blue-100 p-4 rounded-lg">
                    <h3 class="font-bold">Espace élèves</h3>
                    <p>Gérer les comptes et informations des élèves</p>
                    {{-- <a href="{{ route('students.index') }}" class="text-blue-600 hover:underline">Accéder →</a> --}}
                </div>
                <div class="bg-green-100 p-4 rounded-lg">
                    <h3 class="font-bold">Cours et ressources</h3>
                    <p>Gérer le contenu pédagogique</p>
                    <a href="#" class="text-green-600 hover:underline">Accéder →</a>
                </div>
                <div class="bg-purple-100 p-4 rounded-lg">
                    <h3 class="font-bold">Évaluations</h3>
                    <p>Gérer les examens et notes</p>
                    <a href="#" class="text-purple-600 hover:underline">Accéder →</a>
                </div>
                <div class="bg-yellow-100 p-4 rounded-lg">
                    <h3 class="font-bold">Professeurs</h3>
                    <p>Gérer les professeurs et leurs classes</p>
                    {{-- <a href="{{ route('teachers.index') }}" class="text-yellow-600 hover:underline">Accéder →</a> --}}
                </div>
            </div>
            
            <!-- Section de gestion des élèves -->
            <div class="mt-8">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold">Gestion des élèves</h2>
                    {{-- <a href="{{ route('students.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded"> --}}
                        Ajouter un élève
                    </a>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border-b text-left">Nom</th>
                                <th class="px-4 py-2 border-b text-left">Prénom</th>
                                <th class="px-4 py-2 border-b text-left">Email</th>
                                <th class="px-4 py-2 border-b text-left">Classe</th>
                                <th class="px-4 py-2 border-b text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        {{-- @forelse($students as $student)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2 border-b">{{ $student->last_name }}</td>
                                    <td class="px-4 py-2 border-b">{{ $student->first_name }}</td>
                                    <td class="px-4 py-2 border-b">{{ $student->email }}</td>
                                    <td class="px-4 py-2 border-b">
                                        @if($student->class)
                                            <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">
                                                {{ $student->class->name }}
                                            </span>
                                        @else
                                            <span class="text-gray-400">Non assigné</span>
                                        @endif
                                    </td>
                                    <td class="px-4 py-2 border-b">
                                        <div class="flex space-x-2">
                                            <a href="{{ route('students.show', $student) }}" class="text-blue-500 hover:text-blue-700">
                                                <i class="fas fa-eye"></i> Voir
                                            </a>
                                            <a href="{{ route('students.edit', $student) }}" class="text-yellow-500 hover:text-yellow-700">
                                                <i class="fas fa-edit"></i> Modifier
                                            </a>
                                            <form action="{{ route('students.destroy', $student) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet élève?')">
                                                    <i class="fas fa-trash"></i> Supprimer
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty --}}
                                <tr>
                                    <td colspan="5" class="px-4 py-4 text-center text-gray-500">
                                        Aucun élève trouvé. Commencez par en ajouter un!
                                    </td>
                                </tr>
                            {{-- @endforelse --}}
                        </tbody>
                    </table>
                </div>
                
                {{-- <div class="mt-4">
                    {{ $students->links() }}
                </div> --}}
            </div>
            
            <!-- Section de gestion des professeurs -->
            <div class="mt-8">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold">Gestion des professeurs</h2>
                    {{-- <a href="{{ route('teachers.create') }}" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded"> --}}
                        Ajouter un professeur
                    </a>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border-b text-left">Nom</th>
                                <th class="px-4 py-2 border-b text-left">Prénom</th>
                                <th class="px-4 py-2 border-b text-left">Email</th>
                                <th class="px-4 py-2 border-b text-left">Classes</th>
                                <th class="px-4 py-2 border-b text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @forelse($teachers as $teacher)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2 border-b">{{ $teacher->last_name }}</td>
                                    <td class="px-4 py-2 border-b">{{ $teacher->first_name }}</td>
                                    <td class="px-4 py-2 border-b">{{ $teacher->email }}</td>
                                    <td class="px-4 py-2 border-b">
                                        @forelse($teacher->classes as $class)
                                            <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded mr-1 mb-1">
                                                {{ $class->name }}
                                            </span>
                                        @empty
                                            <span class="text-gray-400">Aucune classe</span>
                                        @endforelse
                                    </td>
                                    <td class="px-4 py-2 border-b">
                                        <div class="flex space-x-2">
                                            <a href="{{ route('teachers.show', $teacher) }}" class="text-blue-500 hover:text-blue-700">
                                                <i class="fas fa-eye"></i> Voir
                                            </a>
                                            <a href="{{ route('teachers.edit', $teacher) }}" class="text-yellow-500 hover:text-yellow-700">
                                                <i class="fas fa-edit"></i> Modifier
                                            </a>
                                            <form action="{{ route('teachers.destroy', $teacher) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce professeur?')">
                                                    <i class="fas fa-trash"></i> Supprimer
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty --}}
                                <tr>
                                    <td colspan="5" class="px-4 py-4 text-center text-gray-500">
                                        Aucun professeur trouvé. Commencez par en ajouter un!
                                    </td>
                                </tr>
                            {{-- @endforelse --}}
                        </tbody>
                    </table>
                </div>
                
                {{-- <div class="mt-4">
                    {{ $teachers->links() }}
                </div> --}}
            </div>
            
            <!-- Modales pour CRUD des élèves -->
            <div id="studentFormModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden flex items-center justify-center z-50">
                <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-2xl">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold" id="studentModalTitle">Ajouter un élève</h3>
                        <button type="button" class="text-gray-500 hover:text-gray-700" onclick="closeStudentModal()">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    
                    {{-- <form id="studentForm" action="{{ route('students.store') }}" method="POST">
                        @csrf
                        <div id="studentMethodField"></div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="student_first_name" class="block text-gray-700 mb-1">Prénom</label>
                                <input type="text" name="first_name" id="student_first_name" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500" required>
                            </div>
                            <div>
                                <label for="student_last_name" class="block text-gray-700 mb-1">Nom</label>
                                <input type="text" name="last_name" id="student_last_name" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500" required>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label for="student_email" class="block text-gray-700 mb-1">Email</label>
                            <input type="email" name="email" id="student_email" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="student_class" class="block text-gray-700 mb-1">Classe</label>
                            <select name="class_id" id="student_class" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500">
                                <option value="">Sélectionner une classe</option>
                                @foreach($classes as $class)
                                    <option value="{{ $class->id }}">{{ $class->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="flex justify-end">
                            <button type="button" class="bg-gray-300 hover:bg-gray-400 text-gray-800 py-2 px-4 rounded mr-2" onclick="closeStudentModal()">
                                Annuler
                            </button>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
                                Enregistrer
                            </button>
                        </div>
                    </form> --}}
                </div>
            </div>
            
            <!-- Modales pour CRUD des professeurs -->
            <div id="teacherFormModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden flex items-center justify-center z-50">
                <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-2xl">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold" id="modalTitle">Ajouter un professeur</h3>
                        <button type="button" class="text-gray-500 hover:text-gray-700" onclick="closeModal()">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    
                    {{-- <form id="teacherForm" action="{{ route('teachers.store') }}" method="POST"> --}}
                        @csrf
                        <div id="methodField"></div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="first_name" class="block text-gray-700 mb-1">Prénom</label>
                                <input type="text" name="first_name" id="first_name" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500" required>
                            </div>
                            <div>
                                <label for="last_name" class="block text-gray-700 mb-1">Nom</label>
                                <input type="text" name="last_name" id="last_name" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500" required>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 mb-1">Email</label>
                            <input type="email" name="email" id="email" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500" required>
                        </div>
                        
                        {{-- <div class="mb-4">
                            <label for="classes" class="block text-gray-700 mb-1">Classes</label>
                            <select name="classes[]" id="classes" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500" multiple>
                                @foreach($classes as $class)
                                    <option value="{{ $class->id }}">{{ $class->name }}</option>
                                @endforeach
                            </select>
                            <small class="text-gray-500">Maintenez la touche Ctrl (ou Cmd) pour sélectionner plusieurs classes</small>
                        </div>
                        
                        <div class="flex justify-end">
                            <button type="button" class="bg-gray-300 hover:bg-gray-400 text-gray-800 py-2 px-4 rounded mr-2" onclick="closeModal()">
                                Annuler
                            </button>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
                                Enregistrer
                            </button>
                        </div> --}}
                    </form>
                </div>
            </div>
            
            <!-- Scripts pour la gestion des modales et formulaires -->
            {{-- <script>
                function openModal(mode, teacher = null) {
                    const modal = document.getElementById('teacherFormModal');
                    const form = document.getElementById('teacherForm');
                    const methodField = document.getElementById('methodField');
                    const modalTitle = document.getElementById('modalTitle');
                    
                    // Réinitialiser le formulaire
                    form.reset();
                    methodField.innerHTML = '';
                    
                    if (mode === 'create') {
                        form.action = "{{ route('teachers.store') }}";
                        modalTitle.innerText = 'Ajouter un professeur';
                    } else if (mode === 'edit' && teacher) {
                        form.action = `/teachers/${teacher.id}`;
                        modalTitle.innerText = 'Modifier un professeur';
                        methodField.innerHTML = '@method("PUT")';
                        
                        // Remplir le formulaire avec les données du professeur
                        document.getElementById('first_name').value = teacher.first_name;
                        document.getElementById('last_name').value = teacher.last_name;
                        document.getElementById('email').value = teacher.email;
                        
                        // Sélectionner les classes du professeur
                        const classSelect = document.getElementById('classes');
                        const teacherClasses = teacher.classes.map(c => c.id);
                        
                        for (let i = 0; i < classSelect.options.length; i++) {
                            classSelect.options[i].selected = teacherClasses.includes(parseInt(classSelect.options[i].value));
                        }
                    }
                    
                    modal.classList.remove('hidden');
                }
                
                function closeModal() {
                    document.getElementById('teacherFormModal').classList.add('hidden');
                }
                
                // Fermer la modale si on clique en dehors
                document.getElementById('teacherFormModal').addEventListener('click', function(e) {
                    if (e.target === this) {
                        closeModal();
                    }
                });
                
                // Fonctions pour la gestion des élèves
                function openStudentModal(mode, student = null) {
                    const modal = document.getElementById('studentFormModal');
                    const form = document.getElementById('studentForm');
                    const methodField = document.getElementById('studentMethodField');
                    const modalTitle = document.getElementById('studentModalTitle');
                    
                    // Réinitialiser le formulaire
                    form.reset();
                    methodField.innerHTML = '';
                    
                    if (mode === 'create') {
                        form.action = "{{ route('students.store') }}";
                        modalTitle.innerText = 'Ajouter un élève';
                    } else if (mode === 'edit' && student) {
                        form.action = `/students/${student.id}`;
                        modalTitle.innerText = 'Modifier un élève';
                        methodField.innerHTML = '@method("PUT")';
                        
                        // Remplir le formulaire avec les données de l'élève
                        document.getElementById('student_first_name').value = student.first_name;
                        document.getElementById('student_last_name').value = student.last_name;
                        document.getElementById('student_email').value = student.email;
                        
                        // Sélectionner la classe de l'élève
                        if (student.class_id) {
                            document.getElementById('student_class').value = student.class_id;
                        }
                    }
                    
                    modal.classList.remove('hidden');
                }
                
                function closeStudentModal() {
                    document.getElementById('studentFormModal').classList.add('hidden');
                }
                
                // Fermer la modale si on clique en dehors
                document.getElementById('studentFormModal').addEventListener('click', function(e) {
                    if (e.target === this) {
                        closeStudentModal();
                    }
                });
            </script> --}}

@endsection