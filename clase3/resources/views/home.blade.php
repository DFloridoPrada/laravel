<x-app-layout>
    <x-slot name="content">
        <x-header title="Gestor de tareas" :array="[['Inicio', '/'], ['Añadir tarea', '/tareas'], ['Contacto', '/contacto']]"/>
        <x-table :dates="$tasks"/>
    </x-slot>
</x-app-layout>
