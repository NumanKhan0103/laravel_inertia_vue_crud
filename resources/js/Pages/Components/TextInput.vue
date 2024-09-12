<script setup>
// pass model value dynamically
const model = defineModel({
    type: null,
    required: true,
});

// define properties to pass this component 
defineProps({
    name: {
        type: String,
        required: true,
    },
    type: {
        type: String,
        default: "text",
    },
    message: String,
});
</script>

<template>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" :for="name">{{ name }}</label>
        <input
            :id="name" 
            :type="type"
            placeholder="John Doe" 
            v-model="model"
            :class="['shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline', { '!ring-red-500': message }]">
        <span class="text-red-500" v-if="message">{{ message }}</span>
    </div>
</template>