<script setup>
import { Head } from '@inertiajs/vue3';

defineProps({
    user: String,
});
</script>

<template>

<Head title=" | About Us" />

    <!-- <Head>
        <title> About Us</title>
        <meta head-key="description" name="description" content="about us  page  description of the App">
    </Head> -->
    <div>
        <h1 class="bg-fuchsia-500 text-xl">About Us {{ user }}</h1>
    </div>
</template>
