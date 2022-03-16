<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Materia;
use App\Models\CarreraMateria;

class MateriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Materia::create([
            'sigla'=> 'INF110',
            'nombre'=> 'Introducción a la Informática',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF119',
            'nombre'=> 'Estructuras Discretas',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'FIS100',
            'nombre'=> 'Física 1',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'MAT110',
            'nombre'=> 'Cálculo 1',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'LIN100',
            'nombre'=> 'Inglés Técnico I',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'FIS102',
            'nombre'=> 'Física II',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF120',
            'nombre'=> 'Programación I',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'LIN101',
            'nombre'=> 'Inglés Técnico II',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'MAT102',
            'nombre'=> 'Cálculo II',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'MAT103',
            'nombre'=> 'Álgebra Lineal',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'ADM100',
            'nombre'=> 'Administración',
        ])->carreras()->attach([1,2]);

        Materia::create([
            'sigla'=> 'FIS200',
            'nombre'=> 'Física III',
        ])->carreras()->attach([1,2]);

        Materia::create([
            'sigla'=> 'INF210',
            'nombre'=> 'Programación II',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF211',
            'nombre'=> 'Arquitectura de Computadoras',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'MAT207',
            'nombre'=> 'Ecuaciones Diferenciales',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'RDS210',
            'nombre'=> 'Análisis de Circuitos',
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'ELT241',
            'nombre'=> 'Teoría de Campos',
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'ADM200',
            'nombre'=> 'Contabilidad',
        ])->carreras()->attach([1,2]);

        Materia::create([
            'sigla'=> 'INF220',
            'nombre'=> 'Estructura de Datos I',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF221',
            'nombre'=> 'Programación Ensamblador',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'MAT202',
            'nombre'=> 'Probabilidades y Estadísticas I',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'MAT205',
            'nombre'=> 'Métodos Numéricos',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'RDS220',
            'nombre'=> 'Análisis de Circuitos Electrónicos',
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'ADM330',
            'nombre'=> 'Organización y Métodos',
        ])->carreras()->attach([1]);

        Materia::create([
            'sigla'=> 'ECO300',
            'nombre'=> 'Economía para la Gestión',
        ])->carreras()->attach([1]);

        Materia::create([
            'sigla'=> 'INF310',
            'nombre'=> 'Estructura de Datos II',
        ])->carreras()->attach([1,2]);

        Materia::create([
            'sigla'=> 'INF312',
            'nombre'=> 'Bases de Datos I',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'MAT302',
            'nombre'=> 'Probabilidades y Estadísticas II',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF318',
            'nombre'=> 'Programación Lógica y Funcional',
        ])->carreras()->attach([2]);

        Materia::create([
            'sigla'=> 'INF319',
            'nombre'=> 'Lenguajes Formales',
        ])->carreras()->attach([2]);

        Materia::create([
            'sigla'=> 'ADM320',
            'nombre'=> 'Finanzas para la Empresa',
        ])->carreras()->attach([1]);

        Materia::create([
            'sigla'=> 'INF322',
            'nombre'=> 'Bases de Datos II',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF323',
            'nombre'=> 'Sistemas Operativos I',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF342',
            'nombre'=> 'Sistemas de Información I ',
        ])->carreras()->attach([1,2]);

        Materia::create([
            'sigla'=> 'MAT329',
            'nombre'=> 'Investigación Operativa I',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF329',
            'nombre'=> 'Compiladores',
        ])->carreras()->attach([2]);

        Materia::create([
            'sigla'=> 'ELT362',
            'nombre'=> 'Sistemas Lógicos y Digitales II',
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'RDS320',
            'nombre'=> 'Interpretación de Sistemas y Señales',
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'INF412',
            'nombre'=> 'Sistemas de Información II',
        ])->carreras()->attach([1,2]);

        Materia::create([
            'sigla'=> 'INF413',
            'nombre'=> 'Sistemas Operativos II',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF432',
            'nombre'=> 'Sistemas para el Soporte a la Toma de Decisiones',
        ])->carreras()->attach([1]);

        Materia::create([
            'sigla'=> 'INF433',
            'nombre'=> 'Redes I',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'MAT419',
            'nombre'=> 'Investigación Operativa II',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF418',
            'nombre'=> 'Inteligencia Artificial',
        ])->carreras()->attach([2]);

        Materia::create([
            'sigla'=> 'ELT374',
            'nombre'=> 'Sistemas de Comunicación I',
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'RDS410',
            'nombre'=> 'Aplicaciones con Microprocesadores',
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'ECO449',
            'nombre'=> 'Preparación y Evaluación de Proyectos',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF422',
            'nombre'=> 'Ingeniería de Software I ',
        ])->carreras()->attach([1,2]);

        Materia::create([
            'sigla'=> 'INF423',
            'nombre'=> 'Redes II',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF442',
            'nombre'=> 'Sistemas de Información Geográfica',
        ])->carreras()->attach([1,2]);

        Materia::create([
            'sigla'=> 'INF462',
            'nombre'=> 'Auditoría Informática',
        ])->carreras()->attach([1]);

        Materia::create([
            'sigla'=> 'ELT384',
            'nombre'=> 'Sistemas de Comunicación II',
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'RDS421',
            'nombre'=> 'Taller de Análisis y Diseño de Redes',
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'RDS429',
            'nombre'=> 'Legislación en Redes y Comunicaciones',
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'INF428',
            'nombre'=> 'Sistemas Expertos',
        ])->carreras()->attach([2]);

        Materia::create([
            'sigla'=> 'INF511',
            'nombre'=> 'Taller de Grado I',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF512',
            'nombre'=> 'Ingeniería de Software II',
        ])->carreras()->attach([1,2]);

        Materia::create([
            'sigla'=> 'INF513',
            'nombre'=> 'Tecnología Web',
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF552',
            'nombre'=> 'Arquitectura del Software',
        ])->carreras()->attach([1,2]);

        Materia::create([
            'sigla'=> 'RDS511',
            'nombre'=> 'Gestión y Administración de Redes',
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'RDS512',
            'nombre'=> 'Redes Inalámbricas y Comunicaciones Móviles',
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'RDS519',
            'nombre'=> 'Seguridad en Redes y Transmisión de Datos',
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'ELC001',
            'nombre'=> 'Administración de Recursos Humanos',
        ])->carreras()->attach([1]);

        Materia::create([
            'sigla'=> 'ELC002',
            'nombre'=> 'Costos y Presupuestos',
        ])->carreras()->attach([1]);

        Materia::create([
            'sigla'=> 'ELC003',
            'nombre'=> 'Producción y Marketing',
        ])->carreras()->attach([1]);

        Materia::create([
            'sigla'=> 'ELC004',
            'nombre'=> 'Reingeniería',
        ])->carreras()->attach([1]);

        Materia::create([
            'sigla'=> 'ELC005',
            'nombre'=> 'Ingeniería de la Calidad',
        ])->carreras()->attach([1]);

        Materia::create([
            'sigla'=> 'ELC006',
            'nombre'=> 'Benchmarking',
        ])->carreras()->attach([1]);

        Materia::create([
            'sigla'=> 'ELC007',
            'nombre'=> 'Introducción a la Macroeconomía',
        ])->carreras()->attach([1]);

        Materia::create([
            'sigla'=> 'ELC008',
            'nombre'=> 'Legislación en Ciencias de la Computación',
        ])->carreras()->attach([1]);

        Materia::create([
            'sigla'=> 'ELC201',
            'nombre'=> 'Diseño de Circuitos Integrados',
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'ELC202',
            'nombre'=> 'Instrumentación',
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'ELC203',
            'nombre'=> 'Sistemas de Comunicación Scada',
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'ELC204',
            'nombre'=> 'Televisión Digital ',
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'ELC205',
            'nombre'=> 'Domótica',
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'ELC206',
            'nombre'=> 'Líneas de Transmisión y Antenas',
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'ELC207',
            'nombre'=> 'Técnicas de Presentación para Ingeniería ',
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'ELC208',
            'nombre'=> 'Redes Ad Hoc ',
        ])->carreras()->attach([3]);

        Materia::create([
            'sigla'=> 'ELC101',
            'nombre'=> 'Modelación y Simulación de Sistemas',
        ])->carreras()->attach([2]);

        Materia::create([
            'sigla'=> 'ELC102',
            'nombre'=> 'Programación Gráfica',
        ])->carreras()->attach([2]);

        Materia::create([
            'sigla'=> 'ELC103',
            'nombre'=> 'Tópicos Avanzados de Programación ',
        ])->carreras()->attach([2]);

        Materia::create([
            'sigla'=> 'ELC104',
            'nombre'=> 'Programación de Aplicaciones de Tiempo Real',
        ])->carreras()->attach([2]);

        Materia::create([
            'sigla'=> 'ELC105',
            'nombre'=> 'Sistemas Distribuidos',
        ])->carreras()->attach([2]);

        Materia::create([
            'sigla'=> 'ELC106',
            'nombre'=> 'Interacción Hombre-Computador',
        ])->carreras()->attach([2]);

        Materia::create([
            'sigla'=> 'ELC107',
            'nombre'=> 'Criptografía y Seguridad',
        ])->carreras()->attach([2]);

        Materia::create([
            'sigla'=> 'ELC108',
            'nombre'=> 'Control y Automatización',
        ])->carreras()->attach([2]);

    }
}
