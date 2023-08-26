<script setup>
    import {Head} from '@inertiajs/vue3';
    import AuthenticateLayout from '@/Layouts/AuthenticateLayout.vue';
</script>
<template>
   <Head title="Perfil"/>
   <AuthenticateLayout>
        <div class="flex max-w-full min-h-full flex-col pb-5 md:pr-2">
            <div class="bg-white rounded-md">
                Página de Perfil
            </div>
        </div>
   </AuthenticateLayout>
</template>

