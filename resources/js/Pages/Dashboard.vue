<script setup>
    import AuthenticateLayout from '../Layouts/AuthenticateLayout.vue';
    import { Head } from '@inertiajs/vue3';
    import BarChart from '@/Components/graficos/BarChart.vue';
    import DoughnutChart from '@/Components/graficos/DoughnutChart.vue';
    import LineChart from '@/Components/graficos/LineChart.vue';
   
</script>
<template>
    <Head title="Painel de Controle"/>
    <AuthenticateLayout>
        <div class="flex max-w-full min-h-full flex-col pb-5 md:pr-2">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3 mb-3">
                <div class="col-span-1 flex h-28 bg-gradient-to-r from-cyan-600 to-blue-400 rounded-md">
                    <div class="flex px-3 text-slate-300 bg-cyan-700 rounded-tl-md rounded-bl-md items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col justify-center px-3">
                        <h1 class="text-xl">Equipamentos Cadastrados</h1>
                        <span class="text-2xl font-bold">65</span>
                    </div>
                </div>
                <div class="col-span-1 flex h-28 bg-gradient-to-r from-blue-500 to-indigo-400 rounded-md">
                    <div class="flex px-3 text-slate-300 bg-blue-600 rounded-tl-md rounded-bl-md items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col justify-center px-3">
                        <h1 class="text-xl">Equipamentos em Uso</h1>
                        <span class="text-2xl font-bold">40</span>
                    </div>
                </div>
                <div class="col-span-1 flex h-28 bg-gradient-to-r from-orange-500 to-orange-400 rounded-md">
                    <div class="flex px-3 text-slate-300 bg-orange-600 rounded-tl-md rounded-bl-md items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="flex-1 flex flex-col justify-center px-3">
                        <h1 class="text-xl">Equipamentos Tombados</h1>
                        <span class="text-2xl font-bold">25</span>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                <div class="w-full rounded-md md:col-span-2 bg-slate-100 h-64 px-5">
                   <BarChart/>
                </div>
                <div class="w-full rounded-md md:col-span-1 bg-slate-100 h-64 px-5">
                    <DoughnutChart/>
                </div>
                <div class="w-full rounded-md md:col-span-3 bg-slate-100 h-64 px-5">
                    <LineChart/>
                </div>
            </div>
        </div>
    </AuthenticateLayout>
</template>

