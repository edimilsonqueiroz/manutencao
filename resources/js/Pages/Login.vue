<script setup>
    import { useForm, Head } from '@inertiajs/vue3';

    const form = useForm({
        email: null,
        password: null
    });

</script>
<template>
    <Head title="Login"/>
    <div class="w-screen h-screen flex">
        <div class="bg-cyan-600 hidden md:flex w-[60%]">
            .....
        </div>
        <div class="flex-1 flex justify-center items-center px-5">
            <form @submit.prevent="form.post('/login')" class="flex flex-col w-full">
                <label>Login</label>
                <input required v-model="form.email" class="rounded-md outline-none border-2 border-gray-300 px-2 py-2" type="email">
                <div class="text-red-500" v-if="form.errors.email">{{ form.errors.email }}</div>
                <label class="mt-3">Senha</label>
                <input required v-model="form.password" class="rounded-md outline-none border-2 border-gray-300 px-2 py-2" type="password">
                <div class="text-red-500" v-if="form.errors.password">{{ form.errors.password }}</div>
                <button  type="submit" class="bg-cyan-600 hover:bg-cyan-700 mt-5 rounded-md py-3 text-gray-100">Entrar</button>
            </form>
        </div>
    </div>
</template>

