<script setup>
import TextInput from "../Components/TextInput.vue";
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    name: '',
    email: '',
    avatar: null,
    password: '',
    password_confirmation: '',
    preview : null,
});


const submit = () => {

    form.post('/register', {

        onError: () => form.reset("password", "password_confirmation"),
    });
};


// function for uploading file 
const change = (e) => {

    form.avatar = e.target.files[0];
    form.preview = URL.createObjectURL(e.target.files[0]);
};

</script>

<template>

<Head title=" | Register" />

    <div class="container mx-auto p-4 pt-6 md:p-6 lg:p-12 flex justify-center h-screen">
        <!-- <div class="container mx-auto p-4 pt-6 md:p-6 lg:p-12"> -->
        <form class="w-full max-w-md" @submit.prevent="submit">
            <h1 class="text-3xl font-bold mb-4">Register</h1>

            <!-- Upload Avatar -->
      <div class="grid place-items-center">
        <div
          class="relative w-28 h-28 rounded-full overflow-hidden border border-slate-300"
        >
          <label for="avatar" class="absolute inset-0 grid content-end cursor-pointer">
            <span class="bg-white/70 pb-2 text-center">Avatar</span>
          </label>
          <input type="file" @input="change" id="avatar" hidden />

          <img
            class="object-cover w-28 h-28"
            :src="form.preview ?? 'storage/avatars/default.jpeg'"
          />
        </div>

        <p class="error mt-2">{{ form.errors.avatar }}</p>
      </div>
      <!-- End Upload Avatar -->

            <TextInput name="name" type="text"  v-model="form.name" :message="form.errors.name" />
            
            <TextInput name="email" type="email" placeholder="example@gmail.com" v-model="form.email" :message="form.errors.email" />
            
            <TextInput name="password" type="password" placeholder="***********" v-model="form.password" :message="form.errors.password" />

            <TextInput name="Password Confirmation" type="password" placeholder="***********" v-model="form.password_confirmation" />

          
            <div>
                <p> Already a user? <a :href="route('login')" class="text-link"> Login</a></p>
                <button class="primary-btn" type="submit" :disabled="form.processing">Register</button>
            </div>
        </form>
        <!-- </div> -->
    </div>
</template>