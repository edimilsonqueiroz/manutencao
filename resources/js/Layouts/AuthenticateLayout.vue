<script setup>
    import { ref } from 'vue';
    import { Link } from '@inertiajs/vue3';
    import { computed } from 'vue'
    import { usePage } from '@inertiajs/vue3'
    




    const page = usePage();
    const sidebar = ref(false);
    const dropdown = ref(false);
    const user = computed(() => page.props.auth.user);

</script>
<template>
    <div class="w-screen h-screen min-h-screen flex">

        <div :class="{'translate-x-0': sidebar}" class="w-64 h-screen bg-slate-600 fixed md:fixed z-40 transform transition duration-200 ease-in-out -translate-x-full md:-translate-x-0 text-gray-100">
            <div class="flex flex-col h-full w-full">
                <div class="flex items-center justify-center bg-slate-700 py-2 px-2">
                    <div class="w-10 mr-2 h-12 rounded-full flex items-center justify-center text-slate-200">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                    </div>
                    <span>{{user.name}}</span>
                </div>
                <div class="flex flex-1">
                    <nav class="overflow-h-auto w-full">
                        <ul class="py-5 px-3">
                            <li class="flex p-2 hover:bg-slate-400 hover:rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>
                                <Link class="ml-2" href="/dashboard">Dashboard</Link>
                            </li>
                             <li class="flex p-2 hover:bg-slate-400 hover:rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                </svg>
                                <Link class="ml-2" href="/dashboard/usuarios">Usuários</Link>
                            </li>
                            <li class="flex p-2 hover:bg-slate-400 hover:rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3" />
                                </svg>
                                <Link class="ml-2" href="/dashboard/equipamentos">Equipamentos</Link>
                            </li>
                            <li class="flex p-2 hover:bg-slate-400 hover:rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                                </svg>
                                <Link class="ml-2" href="/dashboard/manutencoes">Manutenções/Serviços</Link>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="w-full h-16">
                    <button class="md:flex w-full h-full hidden items-center justify-center bg-slate-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                        </svg>
                        <span>Sair</span>
                    </button>
                    <button class="flex w-full h-full md:hidden items-center justify-center bg-slate-800" @click="sidebar =  false">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="flex flex-1 md:ml-64 flex-col h-screen">
            <header class="shadow flex items-center  bg-gray-50  justify-between px-2 py-3">
                <button @click="sidebar = true">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
                    </svg>
                </button>
                <button @click="dropdown = true" class="flex items-center mr-3 justify-center">
                    {{user.name}}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
            </header>
            <div @click="dropdown =  false" :class="{'hidden': !dropdown}" class="absolute flex z-20 w-screen h-screen">
                <div class="bg-gray-100 shadow-md border-2 flex flex-col border-gray-100 transition duration-200 ease-in-out rounded-md w-40 top-12 md:right-72 right-12 absolute z-30">
                    <Link class="px-1 py-2 rounded-tl-md rounded-tr-md hover:bg-gray-300" href="/dashboard/perfil">Perfil</Link>
                    <Link class="px-1 py-2 rounded-bl-md rounded-br-md' hover:bg-gray-300" href="/dashboard/logout">Sair do Sistema</Link>
                </div>
            </div>
           

            <div class="w-full h-full p-4">
                <slot/>
            </div>
        </div>

    </div>
</template>

