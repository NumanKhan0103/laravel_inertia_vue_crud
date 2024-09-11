<script setup>
import { reactive } from "vue";


const form = reactive({
    name: '',
    email: '',
    password: '',
    password_confirmation: ''
});


const submit = () => {

    console.log(form);
    
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
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email" type="email" placeholder="johndoe@example.com"  v-model="form.email">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" type="password" placeholder="********"  v-model="form.password">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm-password">Confirm
                        Password</label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="confirm-password" type="password" placeholder="********"  v-model="form.password_confirmation">
                </div>
                <div>
                    <p> Already a user? <a href="#" class="text-link"> Login</a></p>
                    <button
                    class="primary-btn"
                    type="submit">Register</button>
                </div>
            </form>
        <!-- </div> -->
    </div>
</template>