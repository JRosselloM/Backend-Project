<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight fw-bold">
            {{ __('Arrancar servicios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" id="content">
                    <!--<form method="GET" action="/profile">
                    @csrf
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label fw-bold">Nombre de dominio:</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control-plaintext" id="domain_name" placeholder="Domain name">
                            </div>
                            <div class="col-sm-4">
                                <select class="form-select fw-bold" aria-label="Default select example">
                                    <option selected>Seleccionar servicio:</option>
                                    <option value="1">DNS</option>
                                    <option value="2">Apache</option>
                                    <option value="3">PostgreSQL</option>
                                    <option value="4">Mail</option>
                                    <option value="5">Mysql</option>
                                    <option value="6">HTTPS</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <input type="submit" class="check">
                        </div>
                    </form>-->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
