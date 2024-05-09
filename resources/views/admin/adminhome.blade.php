<?php

use App\Models\Universite;
use App\Models\User;
use App\Models\Notation;

$totalUniversites = Universite::count();
$totalUtilisateurs = User::count();
$totalCommentaires = Notation::count();

?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-blue-500">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                <!-- Vue d'ensemble -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border border-gray-300">
                    <div class="p-6 flex-grow">
                        <h3 class="text-lg font-semibold mb-2 flex items-center border-b border-gray-300"><i class="fas fa-tachometer-alt mr-2"></i> Vue d'ensemble</h3>
                        <div class="flex flex-wrap mt-4">
                            <div class="w-full sm:w-1/2 lg:w-1/3 mb-4">
                                <p class="text-gray-700 dark:text-gray-300"><i class="fas fa-university mr-2"></i> Total d'universités </p>
                                <p class="text-3xl font-bold text-blue-700">{{ $totalUniversites }}</p>
                            </div>
                            <div class="w-full sm:w-1/2 lg:w-1/3 mb-4">
                                <p class="text-gray-700 dark:text-gray-300"><i class="fas fa-users mr-2"></i> Total d'utilisateurs </p>
                                <p class="text-3xl font-bold text-blue-700">{{ $totalUtilisateurs }}</p>
                            </div>
                            <div class="w-full sm:w-1/2 lg:w-1/3 mb-4">
                                <p class="text-gray-700 dark:text-gray-300"><i class="fas fa-comments mr-2"></i> Total de commentaires </p>
                                <p class="text-3xl font-bold text-blue-700">{{ $totalCommentaires }}</p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Gestion des universités -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border border-gray-300">
                    <div class="p-6 flex-grow">
                        <h3 class="text-lg font-semibold mb-2 flex items-center border-b border-gray-300"><i class="fas fa-university mr-2"></i> Gestion des universités</h3>
                        <div class="flex flex-col gap-2 mt-4">
                            <a href="http://127.0.0.1:8000/universites/liste" class="text-blue-500 hover:text-blue-700">
                                <i class="fas fa-list mr-2"></i> Liste des universités
                            </a>
                            <a href="http://127.0.0.1:8000/universites/create" class="text-blue-500 hover:text-blue-700">
                                <i class="fas fa-plus mr-2"></i> Créer une université
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Gestion des critères de notation -->
    
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border border-gray-300">
                    <div class="p-6 flex-grow">
                        <h3 class="text-lg font-semibold mb-2 flex items-center border-b border-gray-300"><i class="fas fa-star mr-2"></i> Notation</h3>
                        <a href="{{ route('notations.index') }}" class="text-blue-500 hover:text-blue-700">
                            <i class="fas fa-list mr-2"></i> Liste des notations
                        </a>
                        <br>
                        <a href="{{ route('classement.index') }}" class="text-blue-500 hover:text-blue-700">
                            <i class="fas fa-list mr-2"></i> Classement
                        </a>
                    </div>
                </div>



                <!-- Gestion des utilisateurs -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border border-gray-300">
                    <div class="p-6 flex-grow">
                        <h3 class="text-lg font-semibold mb-2 flex items-center border-b border-gray-300"><i class="fas fa-users mr-2"></i> Gestion des utilisateurs</h3>
                        <!-- Lien vers la liste des utilisateurs -->
                        <a href="{{ route('utilisateurs.index') }}" class="text-blue-500 hover:text-blue-700 mt-4">
                            <i class="fas fa-list mr-2"></i> Liste des utilisateurs
                        </a>
                    </div>
                </div>

                <!-- Modération des commentaires et des notations -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border border-gray-300">
                    <div class="p-6 flex-grow">
                        <h3 class="text-lg font-semibold mb-2 flex items-center border-b border-gray-300"><i class="fas fa-exclamation-triangle mr-2"></i> Modération des commentaires et des notations</h3>
                        <!-- Tableau de bord pour la modération des commentaires et des notations -->
                    </div>
                </div>

                <!-- Statistiques et rapports -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border border-gray-300">
                    <div class="p-6 flex-grow">
                        <h3 class="text-lg font-semibold mb-2 flex items-center border-b border-gray-300"><i class="fas fa-chart-bar mr-2"></i> Statistiques et rapports</h3>
                        <!-- Graphiques ou tableaux récapitulatifs des classements et des statistiques d'utilisation -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



