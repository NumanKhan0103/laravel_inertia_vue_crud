<script setup>
import TextInput from "../Components/TextInput.vue";
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    email: '',
    password: '',
});


const submit = () => {

    form.post('/login', {

        onError: () => form.reset("password"),
    });
};

</script>

<template>

<Head title=" | Login" />
    <div class="container mx-auto p-4 pt-6 md:p-6 lg:p-12 flex justify-center h-screen">
        <!-- <div class="container mx-auto p-4 pt-6 md:p-6 lg:p-12"> -->
        <form class="w-full max-w-md" @submit.prevent="submit">
            <h1 class="text-3xl font-bold mb-4">Login</h1>
            
            <TextInput name="email" type="email" v-model="form.email" :message="form.errors.email" />
            
            <TextInput name="password" type="password" v-model="form.password" :message="form.errors.password" />

            <div>
                <p> Need an a account? <a :href="route('register')" class="text-link"> Register</a></p>
                <button class="primary-btn" type="submit" :disabled="form.processing">Login</button>
            </div>
        </form>
        <!-- </div> -->
    </div>
</template>