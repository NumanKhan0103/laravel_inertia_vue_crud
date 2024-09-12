<script setup>

import { useForm } from "@inertiajs/vue3";

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: ''
});


const submit = () => {

    form.post('/register',{

        onError: () => form.reset("password", "password_confirmation"),
    });

};

</script>



<template>
    <div class="container mx-auto p-4 pt-6 md:p-6 lg:p-12 flex justify-center h-screen">
        <!-- <div class="container mx-auto p-4 pt-6 md:p-6 lg:p-12"> -->
        <form class="w-full max-w-md" @submit.prevent="submit">
            <h1 class="text-3xl font-bold mb-4">Register</h1>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" type="text" placeholder="John Doe" v-model="form.name">
                    <span class="text-red-500">{{ form.errors.name }}</span>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="email" type="email" placeholder="johndoe@example.com" v-model="form.email">
                    <span class="text-red-500">{{ form.errors.email }}</span>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="password" type="password" placeholder="********" v-model="form.password">
                    <span class="text-red-500">{{ form.errors.password }}</span>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm-password">Confirm
                    Password</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="confirm-password" type="password" placeholder="********" v-model="form.password_confirmation">
            </div>
            <div>
                <p> Already a user? <a href="#" class="text-link"> Login</a></p>
                <button class="primary-btn" type="submit" :disabled="form.processing">Register</button>
            </div>
        </form>
        <!-- </div> -->
    </div>
</template>