<div style="overflow: hidden" class="my-5">
    <x-table>
        <div class="my-5 bg-gray-200">

            <div class=" my-5 pt-8">
                <form action="">
                    <div align="center" class="py-8 font-bold text-xl underline">
                        <h1> MAESTRO DE OFERTA FICCT 1/2022</h1>
                    </div>
                </form>
            </div>

            <div class="px-4 py-2 flex items-center">
                {{-- @endauth --}}
                <div class="flex items-center">
                    <span class="mr-2 font-bold ">Paginar</span>
                    <select wire:model='cant'
                        class="mr-2 px-8 py-2 border-gray-300 text-left text-md rounded-2xl font-medium text-black-600 uppercase tracking-wider ">
                        <option value="5">5</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span class="ml-4 mr-2 font-bold">Buscar</span>
                </div>
                <x-jet-input type="text" class="flex-1 mr-3 rounded-full w-full py-2 px-4 text-md"
                    placeholder="Escriba el nombre o la sigla de la materia" wire:model="search" />
                @auth()
                    <x-jet-danger-button
                        class="font-bold text-white text-md bg-red-500 rounded cursor-pointer hover:bg-red-600 py-2 px-4 "
                        wire:click="$set('open', true)"> Registrar
                    </x-jet-danger-button>
                @endauth
            </div>


            @if (count($grupos))
                <table class=" table table-striped min-w-full divide-y divide-gray-200 text-md shadow-lg mt-4 border-5">
                    <thead class="rounded-3xl px-8 text-white" style="background-color: #D15238">
                        <tr>
                            <th scope="col"
                                class="cursor-pointer px-8 py-2 text-left text-sm font-bold uppercase tracking-wider">
                                Id
                            </th>
                            
                            <th width="20%" scope="col"
                                class="cursor-pointer px-8 py-2 text-left text-sm font-bold uppercase tracking-wider">
                                Materia</th>
                            <th scope="col"
                                class="cursor-pointer px-8 py-2 text-left text-sm font-bold uppercase tracking-wider">
                                Docente</th>
                            <th scope="col"
                                class="cursor-pointer px-8 py-2 text-left text-sm font-bold uppercase tracking-wider">
                                Grupo</th>
                            <th scope="col"
                                class="cursor-pointer px-8 py-2 text-left text-sm font-bold uppercase tracking-wider">
                                Admin 1</th>
                            <th scope="col"
                                class="cursor-pointer px-8 py-2 text-left text-sm font-bold uppercase tracking-wider">
                                Admin 2</th>
                            @can('admin')
                            <th width="15%" scope="col"
                                class="cursor-pointer px-8 py-2 text-left text-sm font-bold uppercase tracking-wider">
                                Acciones</th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($grupos as $grupo)
                            <tr class="mx-3 my-3 divide-y divide-gray-200 bg-gray-50">
                                <td class="px-4 py-2">
                                    <span
                                        class="px-2 py-1 inline-flex text-xl leading-10 font-semibold rounded-full
                                bg-red-100 text-red-800">{{ $grupo->id }}
                                    </span>
                                </td>
                                <td class="px-8 py-4">
                                    <div class="text-md font-bold text-gray-900">
                                        {{ $grupo->sigla }}
                                    </div>
                                    <div class="text-md text-gray-500">
                                        {{ $grupo->nombre }}
                                    </div>
                                </td>
                                <td>
                                    @if ($grupo->docente != null)
                                        <div class="my-4 px-8">{{ $grupo->docente }}</div>
                                    @else
                                        <div class="my-4 px-8">Vacío</div>
                                    @endif
                                </td>
                                <td class="px-8 py-6 text-md text-gray-500 font-bold" style="white-space: nowrap">
                                    <div class="text-md font-bold text-gray-900">
                                        {{ $grupo->grupo }}
                                    </div>
                                </td>

                                <td class="px-8 py-6 text-md text-gray-500 font-bold">
                                    <div class=" my-3 whitespace-nowrap flex">
                                        @if ($grupo->admin1!=null)
                                            <a href="https://wa.me/591{{ $grupo->admin1 }}?text=Hola,%20¿me%20puedes%20agregar%20al%20grupo%20de%20{{ $grupo->sigla }}%20{{ $grupo->nombre }}%20-%20{{ $grupo->grupo }}?"
                                                class="ml-2 font-bold text-white rounded cursor-pointer bg-green-500 hover:bg-green-600 py-2 px-4">
                                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                            </a>
                                        @else
                                            <a wire:click="$emit('alert2','¡No hay grupo!')"
                                                class="ml-2 font-bold text-white rounded cursor-pointer bg-green-500 hover:bg-green-600 py-2 px-4">
                                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                            </a>
                                        @endif
                                    </div>
                                </td>

                                <td class="px-8 py-6 text-md text-gray-500 font-bold">
                                    <div class=" my-3 whitespace-nowrap flex">
                                        @if ($grupo->admin1!=null)
                                            <a href="https://wa.me/591{{ $grupo->admin1 }}?text=Hola,%20¿me%20puedes%20agregar%20al%20grupo%20de%20{{ $grupo->sigla }}%20{{ $grupo->nombre }}%20-%20{{ $grupo->grupo }}?"
                                                class="ml-2 font-bold text-white rounded cursor-pointer bg-green-500 hover:bg-green-600 py-2 px-4">
                                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                            </a>
                                        @else
                                            <a wire:click="$emit('alert2','¡No hay grupo!')"
                                                class="ml-2 font-bold text-white rounded cursor-pointer bg-green-500 hover:bg-green-600 py-2 px-4">
                                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                            </a>
                                        @endif
                                    </div>
                                </td>

                                @can('admin')

                                    <td class=" inline-flex justify-center px-6 py-4 whitespace-nowrap flex">
                                        
                                        <div class="my-3 whitespace-nowrap flex">
                                            <a wire:click="edit({{ $grupo->id }})"
                                                class="ml-2 font-bold text-white rounded cursor-pointer bg-gray-600 hover:bg-gray-700 py-2 px-4">
                                                <i class=" fas fa-edit"></i>
                                            </a>
                                        </div>

                                        <div class=" my-3 whitespace-nowrap flex">
                                            <a wire:click.prevent="eliminar({{ $grupo->id }})"
                                                class="ml-2 font-bold text-white rounded cursor-pointer bg-red-600 hover:bg-red-500 py-2 px-4"
                                                onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" value="Borrar">
                                                <i class="fas fa-trash-alt" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </td>
                                @endcan

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if ($grupos->hasPages())
                    <x-table>
                        <div class="px-6 py-3">
                            {{ $grupos->links() }}
                        </div>
                    </x-table>
                @endif
            @else
                <div class="px-6 py-4">
                    No hay materias con ese nombre
                </div>
            @endif
        </div>
    </x-table>


    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title">
            Crear grupo:
        </x-slot>

        <x-slot name="content">
            <div>
                <x-jet-label value="Materia:" />
                <select class="appearance-none" wire:model="materia_id" name="materia_id">
                    <option>Seleccione una Materia</option>
                    @foreach ($materias as $materia)
                        <option value="{{ $materia->id }}">{{$materia->nombre}}</option>
                    @endforeach
                  </select>
            </div>

            <div class="mb-4">
                <x-jet-label value="Nombre del grupo:" />
                <x-jet-input wire:model='grupo' type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Administrador 1:" />
                <x-jet-input type="text" class="w-full" wire:model="admin1" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Administrador 2:" />
                <x-jet-input type="text" class="w-full" wire:model="admin2" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Docente:" />
                <x-jet-input type="text" class="w-full" wire:model="docente" />
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="cancelar()" wire:loading.attr="disabled">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="guardar()" wire:loading.attr="disabled" class="disabled:opacity-25">
                Crear Materia
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>

    {{-- MODAL EDITAR MATERIA --}}
    <x-jet-dialog-modal wire:model="open2">

        <x-slot name="title">
            Editar Grupo:
        </x-slot>

        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Nombre del grupo:" />
                <x-jet-input wire:model='grupo' type="text" class="w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Administrador 1:" />
                <x-jet-input type="text" class="w-full" wire:model="admin1" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Administrador 2:" />
                <x-jet-input type="text" class="w-full" wire:model="admin2" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Docente:" />
                <x-jet-input type="text" class="w-full" wire:model="docente" />
            </div>

            <div>
                <x-jet-label value="Materia:" />
                <select class="appearance-none" wire:model="materia_id" name="materia_id">
                    <option>{{$this->materia_nombre}}</option>
                    @foreach ($materias as $materia)
                        <option value="{{ $materia->id }}">{{$materia->nombre}}</option>
                    @endforeach
                  </select>
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="cancelar()" wire:loading.attr="disabled">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="update()" wire:loading.attr="disabled" class="disabled:opacity-25">
                Actualizar
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>



    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>



    @push('js')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        <script>
            Livewire.on("alert", alert => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: '¡Has inscrito tus materias exitosamente!',
                    showConfirmButton: false,
                    timer: 1500
                })
            })
        </script>
        <script>
            Livewire.on("alert2", function(message) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 2500,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener("mouseenter", Swal.stopTimer);
                        toast.addEventListener("mouseleave", Swal.resumeTimer);
                    },
                });
                Toast.fire({
                    icon: "error",
                    title: message,
                });
            });
        </script>
    @endpush


</div>
