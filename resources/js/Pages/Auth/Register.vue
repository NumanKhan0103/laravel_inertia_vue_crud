<script setup>
import TextInput from "../Components/TextInput.vue";
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: ''
});


const submit = () => {

    form.post('/register', {

        onError: () => form.reset("password", "password_confirmation"),
    });
};

</script>

<template>
    <div class="container mx-auto p-4 pt-6 md:p-6 lg:p-12 flex justify-center h-screen">
        <!-- <div class="container mx-auto p-4 pt-6 md:p-6 lg:p-12"> -->
        <form class="w-full max-w-md" @submit.prevent="submit">
            <h1 class="text-3xl font-bold mb-4">Register</h1>

            <TextInput name="name" type="text" v-model="form.name" :message="form.errors.name" />
            
            <TextInput name="email" type="email" v-model="form.email" :message="form.errors.email" />
            
            <TextInput name="password" type="password" v-model="form.password" :message="form.errors.password" />

            <TextInput name="password" type="password" v-model="form.password_confirmation" />

            <div>
                <p> Already a user? <a href="#" class="text-link"> Login</a></p>
                <button class="primary-btn" type="submit" :disabled="form.processing">Register</button>
            </div>
        </form>
        <!-- </div> -->
    </div>
</template>